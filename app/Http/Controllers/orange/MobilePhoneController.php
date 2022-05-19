<?php

namespace App\Http\Controllers\orange;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MobilePhone;
use Illuminate\Support\Facades\Validator;

use Mail;
use mikehaertl\pdftk\Pdf;
use Carbon\Carbon;
use App\Http\Controllers\AmoCRMController;


class MobilePhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = MobilePhone::all();
        return view('orange.mobile_phone.index', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // if ($request->lang == 'du') {
        //     return view('orange.mobile_phone.create_dutch');
        // }elseif
        // return view('orange.mobile_phone.create');

        $lang = $request->lang;

        if ($lang == "du") {
            return view('orange.mobile_phone.create_dutch', compact('lang'));
        } elseif ($lang == "fr") {
            return view('orange.mobile_phone.create', compact('lang'));
        }

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


            'client_exist' => 'required',
            'sign_1' => 'required',
            'sign_2' => 'required',

            'client_num' => 'required',


            'exist_phone' => 'required',
            'new_client' => 'required',
            's_number' => 'required',
            'language' => 'required',
            'title' => 'required',
            'customer_type' => 'required',
            'name' => 'required',
            'f_name' => 'required',
            'street' => 'required',
            'no' => 'required',
            'box' => 'required',
            'town' => 'required',

            'postal_code' => 'required',
            'country' => 'required',
            'date_of_birth' => 'required',
            'busines' => 'required',
            'company_number' => 'required',
            'legal_status' => 'required',
            'company_name' => 'required',
            'contact_person' => 'required',
            'comp_street' => 'required',
            'comp_no' => 'required',
            'comp_box' => 'required',
            'comp_postal_code' => 'required',
            'comp_town' => 'required',
            'comp_country' => 'required',
            'sim' => 'required',
            'res_number' => 'required',
            'pricing_plan' => 'required',
            'options_services' => 'required',
            'copy' => 'required',
            'date' => 'required',
            'credit_card_holder' => 'required',
            'code_generate' => 'required',
            'account_holder_name' => 'required',
            'street_and_number' => 'required',
            'postal_code_and_city' => 'required',
            'hold_country' => 'required',
            'iban_account_number' => 'required',
            'bic_code' => 'required',
            'underlying_contract_number' => 'required',


            'point_of_sale' => 'required',

        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        // // Validation

        if ($request->lang == 'du') {
            $pdf = new Pdf(public_path('unfilled_forms/orange/MPDU.pdf'), [

                'command' => env('PDFTK_PATH'),



            ]);
        } else {
            $pdf = new Pdf(public_path('unfilled_forms/orange/MPFR.pdf'), [

                'command' => env('PDFTK_PATH'),

            ]);
        }



        $data = $request->all();
        $data = $orange = MobilePhone::create($data);

        $pdf_name = 'pdfs_generated/' . now()->timestamp . '.pdf';

        $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);


        //Mail
        $mail = Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
            $message->to('degis9000@gmail.com')
                ->subject("You have got new Mobile Phone  Lead...!")
                ->cc(['lasha@studiodlvx.be'])
//
                ->attach(public_path($pdf_name), [
                    'as' => 'Mobile Phone.pdf',
                    'mime' => 'application/pdf',
                ]);
            $message->from('no-reply@ecosafety.nyc');
        });
// Mail Code Ends


        $amo = new AmoCRMController();
        $lead_data = [];
        $lead_data['NAME'] = $orange->name;
        $lead_data['PHONE'] = $orange->telephone;
        $lead_data['EMAIL'] = $orange->email_address;
        $lead_data['LEAD_NAME'] = 'Number Porting Lead!';
        $amo->add_lead($lead_data);
        unlink(public_path($pdf_name));

        return redirect()->route('mobile_phone.index')->with('success', 'Mobile Phone Lead created successfully!');
        // return redirect()->route('number_porting.index');

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
