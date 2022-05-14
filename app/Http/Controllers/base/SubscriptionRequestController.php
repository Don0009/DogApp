<?php

namespace App\Http\Controllers\base;

use App\Http\Controllers\AmoCRMController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SubscriptionRequest;
use Illuminate\Support\Facades\Validator;
use mikehaertl\pdftk\Pdf;
use Mail;
use Carbon\Carbon;

class SubscriptionRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subs = SubscriptionRequest::all();
        return view('base.subscription_request.index', compact('subs'));
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
            return view('base.subscription_request.create_fr', compact('lang'));
        }
        return view('base.subscription_request.create_du', compact('lang'));
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

            'title' => 'required',
            'language' => 'required',
            'name' => 'required',
            'f_name' => 'required',
            'date_of_birth' => 'required',
            'id_card_number' => 'required',
            'card_type' => 'required',
            'nationality' => 'required',
            'company_name' => 'required',
            'rpm_no' => 'required',
            'vat' => 'required',
            'street' => 'required',
            'box' => 'required',
            'locality' => 'required',
            'postal_code' => 'required',
            'phone' => 'required',
            'fax' => 'required',
            'mail' => 'required',
            'contact_details' => 'nullable',
            'authorize' => 'nullable',
            'agree' => 'nullable',
            'locality1' => 'required',
            'postal_code1' => 'required',
            'number_sim' => 'required',
            'sim_card' => 'required',
            'contract_length1' => 'nullable',
            'contract_length2' => 'nullable',
            'date_renewal' => 'required',
            'distributer' => 'required',
            'client_number' => 'required',
            'distributor_number' => 'required',
            //2nd form
            'easier_company_name' => 'required',
            'easier_name' => 'required',
            'easier_f_name' => 'required',
            'easier_street' => 'required',
            'easier_box' => 'required',
            'easier_postal_code' => 'required',
            'easier_locality' => 'required',
            'easier_cus_number' => 'required',
            'american_express' => 'required',
            'visa_card' => 'required',
            'due_date' => 'required',
            'agre_date' => 'required',
            'agre_locality' => 'required',
            //3rd
            'mandate_number' => 'required',
            'debtor_name' => 'required',
            'signed_f_name' => 'required',
            'signed_street' => 'required',
            'signed_box' => 'required',
            'signed_locality' => 'required',
            'signed_postal_code' => 'required',
            'signed_country' => 'required',
            'signed_iban' => 'required',
            'signed_bic' => 'required',
            'concluded' => 'required',
            'signed_date' => 'required',

        ]);
        if ($request->form_lang == 'fr') {

            $pdf = new Pdf(public_path('unfilled_forms/base/SUBSCRIPTION_FR.pdf'), [

                'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe'
            ]);
        } else {
            $pdf = new Pdf(public_path('unfilled_forms/base/SUBSCRIPTION_DU.pdf'), [

                'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe'

            ]);
        }

        $data = $request->all();
        $subscription = SubscriptionRequest::create($data);
        $data['month'] = Carbon::parse($data['date_renewal'])->format('m');
        $data['day'] = Carbon::parse($data['date_renewal'])->format('d');
        $data['year'] = Carbon::parse($data['date_renewal'])->format('Y');

        $pdf_name = 'pdfs_generated/' . now()->timestamp . '.pdf';

        // $data = $data->toArray();
        $data['date_of_birth'] = Carbon::parse($request->date_of_birth)->isoFormat('YY-MM-DD');

        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);


        //Mail
        $mail = Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
            $message->to('raokhanwala149@gmail.com')
                ->subject("You have got new Octa Form Lead...!")
                ->cc(['lasha@studiodlvx.be'])
                //                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
                ->attach(public_path($pdf_name), [
                    'as' => 'Base Form.pdf',
                    'mime' => 'Number Request/pdf',
                ]);
            $message->from('no-reply@ecosafety.nyc');
        });
        //Mail Code Ends


        $amo = new AmoCRMController();
        $lead_data = [];


        $lead_data['NAME'] = $subscription->name;
        $lead_data['PHONE'] = $subscription->phone;
        $lead_data['EMAIL'] = $subscription->mail;
        $lead_data['LEAD_NAME'] = 'Base Form Lead!';
        $amo->add_lead($lead_data);
        unlink(public_path($pdf_name));






        return redirect()->route('subscription_request.index')->with('success', 'Base Form Form created successfully!');
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
