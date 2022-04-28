<?php

namespace App\Http\Controllers\orange;

use App\Http\Controllers\Controller;
use App\Http\Controllers\OKSign\OKSignController;
use Illuminate\Http\Request;
use App\InternetHome;
use Illuminate\Support\Facades\Validator;
use mikehaertl\pdftk\Pdf;
use Mail;
use App\Http\Controllers\AmoCRMController;


class InternetHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = InternetHome::all();
        return view('orange.internet_home.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($request->all());
        if ($request->lang == 'du') {
            return view('orange.internet_home.create_dutch');
        }
        return view('orange.internet_home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [

            // Validation Starts


            'contract_number_1' => 'required',
            'consultant_signature_1' => 'required',
            'client_exist' => 'required',
            'client_num' => 'required',
            'exist_phone' => 'required',
            'exist_mail' => 'required',
            'new_client' => 'required',
            'title' => 'required',
            'language' => 'required',
            'name' => 'required',
            'f_name' => 'required',
            'street' => 'required',
            'no' => 'required',
            'box' => 'required',
            'town' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
            'date_of_birth' => 'required',
            'telephone' => 'required',
            'mob_num' => 'required',
            'account_number' => 'required',
            'mail' => 'required',
            'profession' => 'required',
            'company_name' => 'required',
            'legal_status' => 'required',
            'company_number' => 'required',
            'contact_person' => 'required',
            'phone_number' => 'required',
            'fax' => 'required',
            'comp_street' => 'required',
            'comp_no' => 'required',
            'comp_box' => 'required',
            'comp_town' => 'required',
            'comp_postal_code' => 'required',
            'comp_country' => 'required',
            'card_number' => 'required',
            'internet_home' => 'required',
            'boot_option' => 'required',
            'copy' => 'required',
            'date' => 'required',
            'credit_card_holder' => 'required',
            'card_expiration_date' => 'required',
            'code_generate' => 'required',
            'account_holder_name' => 'required',
            'street_and_number' => 'required',
            'postal_code_and_city' => 'required',
            'hold_country' => 'required',
            'iban_account_number' => 'required',
            'bic_code' => 'required',
            'underlying_contract_number' => 'required',
            'signature' => 'required',
            'a_date' => 'required',
            'location' => 'required',
            //'date_signature_customer' =>
            'date_signature_customer_00' => 'required',
            'date_signature_customer_11' => 'required',

        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        // Validation Ends


        if ($request->lang == 'fr') {
            $pdf = new Pdf(public_path('unfilled_forms/orange/IHFR.pdf'), [


                'command' => env('PDFTK_PATH'),


            ]);


            // dd($pdf);
        }

        else {
            $pdf = new Pdf(public_path('unfilled_forms/orange/IHDU.pdf'), [

                    'command' => env('PDFTK_PATH'),
                ]
            );


        }


        $data = $request->all();
        $data = $orange = InternetHome::create($data);

        $pdf_name = 'pdfs_generated/' . now()->timestamp . '.pdf';

        $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);

//dd($pdf);
        $mail = Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
            $message->to('degis9000@gmail.com')
                ->subject("You have got new Internet HOME Lead...!")
                ->cc(['lasha@studiodlvx.be'])
//                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
                ->attach(public_path($pdf_name), [
                    'as' => 'Internet HOME Lead!.pdf',
                    'mime' => 'application/pdf',
                ]);
            $message->from('no-reply@ecosafety.nyc');
        });
// Mail Code Ends


//Mail


        $amo = new AmoCRMController();
        $lead_data = [];
        $lead_data['NAME'] = $orange->name;
        $lead_data['PHONE'] = $orange->telephone;
        $lead_data['EMAIL'] = $orange->email_address;
        $lead_data['LEAD_NAME'] = 'Orange Internet HOME Lead';
        $amo->add_lead($lead_data);






        unlink(public_path($pdf_name));



        return redirect()->route('internet_home.index')->with('success', 'Internet Home lead created successfully!');


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
