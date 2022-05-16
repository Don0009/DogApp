<?php

namespace App\Http\Controllers\octa;

use App\Octa;
use App\Http\Controllers\AmoCRMController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use mikehaertl\pdftk\Pdf;
use Mail;

class OctaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $octas = Octa::all();
        return view('octa.index', compact('octas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $lang = $request->lang;
        if ($request->lang == 'fr') {
            return view('octa.create_fr', compact('lang'));
        }
        return view('octa.create_du', compact('lang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'client' => 'required',
            'language' => 'required',
            'title' => 'required',
            'customer_number' => 'required',
            'society' => 'required',
            'legal_status' => 'required',
            'company_number' => 'required',
            'subject_vat' => 'required',
            'name' => 'required',
            'f_name' => 'required',
            'gsm' => 'required',
            'phone' => 'required',
            'mail' => 'required',
            'date_of_birth' => 'required',
            'dev_street' => 'required',
            'dev_no' => 'required',
            'dev_box' => 'required',

            'dev_postal_code' => 'required',
            'dev_commune' => 'required',
            'dev_refer_customer' => 'required',
            'billing_street' => 'nullable',
            'billing_no' => 'required',
            'billing_box' => 'required',
            'billing_postal_code' => 'required',
            'billing_commune' => 'required',
            'billing_country' => 'required',
            'price_duration' => 'required',
            'belgian_electricity' => 'nullable',
            'digital_meter' => 'required',
            'counter' => 'required',
            'counter_type' => 'required',
            'ean_code' => 'required',
            'ean_code_night' => 'nullable',
            'meter_number' => 'required',
            'meter_number_night' => 'nullable',

            'solar_other_facility' => 'required',
            'power_production_plant' => 'required',
            'house_move' => 'required',
            'delivery_start_date' => 'required',
            'price_duration_contract' => 'required',
            'counter1' => 'required',
            'ean_code1' => 'required',
            'meter_number1' => 'required',
            'house_move1' => 'required',

            'delivery_start_date1' => 'required',
            'installment_frequency' => 'required',
            'payment_method' => 'required',
            'invoices' => 'nullable',
            'send_invoices' => 'nullable',
            'account_number' => 'required',
            'bic_code' => 'required',
            'information' => 'nullable',
            'signature' => 'required',

            'octa' => 'required',
            'date' => 'required',
            'company_name' => 'required',
            'street_number' => 'required',
            'zip_code' => 'required',
            'iban_account' => 'required',
            'bic_code1' => 'required',
            'signature1' => 'required',
            'date1' => 'required',
            'place' => 'required',
        ]);

        if ($request->form_lang == 'fr') {

            $pdf = new Pdf(public_path('unfilled_forms/octa/OCTA_FR1.pdf'), [

                'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe'
            ]);
        } else {
            $pdf = new Pdf(public_path('unfilled_forms/octa/OCTA_DU.pdf'), [

                'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe'

            ]);
        }

        $data = $request->all();
        $octa =  Octa::create($data);

        $pdf_name = 'pdfs_generated/' . now()->timestamp . '.pdf';

        // $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);


        //Mail
        $mail = Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
            $message->to('raokhanwala149@gmail.com')
                ->subject("You have got new Octa Form Lead...!")
                ->cc(['lasha@studiodlvx.be'])
                //                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
                ->attach(public_path($pdf_name), [
                    'as' => 'Octa Form.pdf',
                    'mime' => 'application/pdf',
                ]);
            $message->from('no-reply@ecosafety.nyc');
        });
        //Mail Code Ends


        $amo = new AmoCRMController();
        $lead_data = [];


        $lead_data['NAME'] = $octa->name;
        $lead_data['PHONE'] = $octa->phone;
        $lead_data['EMAIL'] = $octa->mail;
        $lead_data['LEAD_NAME'] = 'Octa Form Lead!';
        $amo->add_lead($lead_data);
        unlink(public_path($pdf_name));

        return redirect()->route('regi_form.index')->with('success', 'Appliction Form created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
