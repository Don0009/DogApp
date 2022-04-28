<?php

namespace App\Http\Controllers\scarlet;

use App\Http\Controllers\AmoCRMController;
use App\ApplicationForm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use mikehaertl\pdftk\Pdf;
use Mail;
use function Ramsey\Uuid\v1;

class ApplicationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apps = ApplicationForm::all();
        return view('scarlet.application_form.index', compact('apps'));
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
            return view('scarlet.application_form.create_fr', compact('lang'));
        }
        return view('scarlet.application_form.create_du', compact('lang'));
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



            'f_name' => 'required',
            'name' => 'required',
            'id_card_number' => 'required',
            'adress' => 'required',
            'no' => 'required',
            'box' => 'required',
            'postal_code' => 'required',
            'commune' => 'required',
            'type_of_habitat' => 'required',
            'stage' => 'required',
            'phone' => 'required',
            'gsm' => 'required',
            'mail' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'language' => 'required',
            'society' => 'nullable',
            'vat' => 'nullable',
            'internet_connection' => 'required',
            'operator' => 'required',
            'your_subscription' => 'required',
            'telephony_day_1' => 'nullable',
            'telephony_day_2' => 'nullable',
            'telephony_hour_1' => 'nullable',
            'telephony_hour_2' => 'nullable',
            'mobile_tele_day_1' => 'nullable',
            'mobile_tele_day_2' => 'nullable',
            'fixe_telephony_hour_1' => 'nullable',
            'fixe_telephony_hour_2' => 'nullable',
            'decoder_1' => 'nullable',
            'decoder_2' => 'nullable',
            'allsport_1' => 'nullable',
            'allsport_2' => 'nullable',
            'movies_series_1' => 'required',
            'movies_series_2' => 'nullable',
            'total_one_time_costs_vat' => 'required',
            'total_monthly_costs_vat' => 'required',
            'digital_tv' => 'required',
            'type_number' => 'required',
            'current_phone_number' => 'required',
            'obt' => 'required',
            'other' => 'required',
            'client_number' => 'required',
            'install_adress' => 'required',
            'install_no' => 'required',
            'install_box' => 'required',
            'install_postal_code' => 'required',
            'install_commune' => 'required',
            'payment_method' => 'required',
            'iban_number' => 'required',
            'name_account_holder' => 'required',
            'submitted_contact' => 'nullable',
            'made_in' => 'nullable',
            'the' => 'nullable',
            'contact_date' => 'required',
            'signature' => 'required',
            'sign_customer_holder' => 'required',
            'dealer_reference' => 'required',
            'agent' => 'required',
            'undersigned' => 'required',
            'main_line' => 'required',
            '2nd_line' => 'required',
            'holder_no' => 'required',
            'street' => 'required',
            'number' => 'required',
            'add_box' => 'required',
            'add_postal_code' => 'required',
            'add_commune' => 'required',
            'vat_number' => 'nullable',
            'current_operator' => 'nullable',
            'cus_number' => 'required',
            'signature_1' => 'required',
            'signature_owner' => 'required',
            'contact_date_1' => 'required',

        ]);



        if ($request->form_lang == 'fr') {

            $pdf = new Pdf(public_path('unfilled_forms/scarlet/AF.pdf'), [

                'command' => env('PDFTK_PATH'),
            ]);
        } else {
            $pdf = new Pdf(public_path('unfilled_forms/scarlet/AFDU.pdf'), [

                'command' => env('PDFTK_PATH'),
            ]);
        }

        $data = $request->all();

        $scarlet = ApplicationForm::create($data);

        $pdf_name = 'pdfs_generated/' . now()->timestamp . '.pdf';

        // $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);
dd($result);

        //Mail
        // $mail = Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
        //     $message->to('raokhanwala149@gmail.com')
        //         ->subject("You have got new Application Form Lead...!")
        //         ->cc(['lasha@studiodlvx.be'])
        //         //                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
        //         ->attach(public_path($pdf_name), [
        //             'as' => 'Application Form.pdf',
        //             'mime' => 'application/pdf',
        //         ]);
        //     $message->from('no-reply@ecosafety.nyc');
        // });
        // Mail Code Ends


        $amo = new AmoCRMController();
        $lead_data = [];


        $lead_data['NAME'] = $scarlet->name;
        $lead_data['PHONE'] = $scarlet->phone;
        $lead_data['EMAIL'] = $scarlet->mail;
        $lead_data['LEAD_NAME'] = 'Application Form Lead!';
        $amo->add_lead($lead_data);
        unlink(public_path($pdf_name));

        return redirect()->route('application_form.index')->with('success', 'Appliction Form created successfully!');
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
