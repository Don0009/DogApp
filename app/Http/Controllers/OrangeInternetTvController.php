<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\OrangeInternetTv;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use mikehaertl\pdftk\Pdf;
use \Mail;

class OrangeInternetTvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $internet_tvs = OrangeInternetTv::all();
        } else {
            $internet_tvs = OrangeInternetTv::where('user_id', Auth::user()->id)->get();
        }

        return view('internet_tv.index', compact('internet_tvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


        $lang = $request->lang;
        // dd($lang);
        if ($lang == "du") {
            return view('internet_tv.create', compact('lang'));
        } else {

            return view('internet_tv.create_fr', compact('lang'));
        }

        //  if(isset($data['stopping_2'])){
        //     if($data['stopping_2'] == "on"){
        //     $data['stopping_2'] = true;
        //     }  else{
        //     $data['stopping_2'] = false;
        //     }
        // }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd( $request->all());
        $validator = Validator::make($request->all(), [

            'partner_apllication' => 'required',
            'name' => 'required',
            'first_name' => 'required',
            'street' => 'required',
            'number' => 'required',
            'letter' => 'required',
            'apartment_number' => 'required',
            'floor' => 'required',
            'bus' => 'required',
            'township' => 'required',
            'postcode' => 'required',
            'gsm' => 'required',
            'mail' => 'required',
            'id_card_number' => 'required',
            'orange_customer_number' => 'required',
            'name_of_your_current_provider' => 'required',
            'one' => 'required',
            'two' => 'required',
            'three' => 'required',
            'and' => 'required',
            'neen' => 'required',
            'customer_number_at_your_current_supplier' => 'required',
            'id_card_number_d1' => 'required',
            'id_card_number_d2' => 'required',
            'id_card_number_d3' => 'required',
            'additional_information' => 'required',
            'file' => 'required',
            'customer_number' => 'required',
            'customer_type' => 'required',
            'title' => 'required',
            'language' => 'required',
            'first_name_1' => 'required',
            'name_1' => 'required',
            'date_of_birth' => 'required',
            'number_identiteitskaart' => 'required',
            'telephone' => 'required',
            'email_address' => 'required',
            'street_1' => 'required',
            'number_1' => 'required',
            'postcode_1' => 'required',
            'place' => 'required',
            'vat_number' => 'required',
            'care_of_the_automatic_migration' => 'required',
            'i_do_not_wish_to_use_easy_switch' => 'required',
            'operator_name' => 'required',
            'client_number' => 'required',
            'easy_switch_id' => 'required',
            'call_number_1' => 'required',
            'stopping_1' => 'required',
            'call_number_2' => 'required',
            'stopping_2' => 'required',
            'call_number_3' => 'required',
            'stopping_3' => 'required',
            'stopping_4' => 'required',
            'sim_number' => 'required',
            'original_operator' => 'required',
            'desired_transfer_date' => 'required',
            'immediately' => 'required',
            'on_the_installation_date' => 'required',
            'call_number_5' => 'required',
            'transfer_to_orange' => 'required',
            'stop' => 'required',
            'sim_number_2' => 'required',
            'original_operator_1' => 'required',
            'desired_transfer_date_1' => 'required',
            'immediately_2' => 'required',
            'on_the_installation_date_2' => 'required',
            'call_number_6' => 'required',
            'transfer_to_orange_4' => 'required',
            'stop_2' => 'required',
            'sim_number_3' => 'required',
            'original_operator_2' => 'required',
            'desired_transfer_date_2' => 'required',
            'immediately_3' => 'required',
            'on_the_installation_date_3' => 'required',
            'call_number_7' => 'required',
            'transfer_to_orange_2' => 'required',
            'stop_3' => 'required',
            'sim_number_4' => 'required',
            'original_operator_3' => 'required',
            'desired_transfer_date_3' => 'required',
            'immediately_4' => 'required',
            'on_the_installation_date_4' => 'required',
            'call_number_8' => 'required',
            'transfer_to_orange_3' => 'required',
            'stop_4' => 'required',
            'sim_number_5' => 'required',
            'original_operator_4' => 'required',
            'desired_transfer_date_4' => 'required',
            'immediately_5' => 'required',
            'on_the_installation_date_5' => 'required',
            'call_number_9' => 'required',
            'op' => 'required',
            'file_1' => 'required',

        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;


        // dd($data);
        // dd($validator);

        // if($validator->fails()){
        //     dd($validator);
        //     return redirect()->back()->withErrors($validator);
        // }

        $pdf = new Pdf(public_path('notfill.pdf'), [
//            'command' => '/some/other/path/to/pdftk',
            // or on most Windows systems:
            'command' => '\snap\bin\pdftk',
//            'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe',
//            'useExec' => true,  // May help on Windows systems if execution fails
        ]);

//        dd($pdf);


        $data = $orange = OrangeInternetTv::create($data);

        $pdf_name = now()->timestamp . '.pdf';
//        dd($pdf_name);
        $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);;

            dd($result);



        Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
            $message->to('musmangeee@gmail.com')
                ->subject("You have got a Orange Internet TV lead...!")
                ->cc(['lasha@studiodlvx.be'])
//                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
                ->attach(public_path($pdf_name), [
                    'as' => 'name.pdf',
                    'mime' => 'application/pdf',
                ]);
            $message->from('no-reply@ecosafety.nyc');
        });

        $amo = new AmoCRMController();
        $lead_data = [];
        $lead_data['NAME'] =  $orange->name ;
        $lead_data['PHONE'] =  $orange->telephone;
        $lead_data['EMAIL'] = $orange->email_address;
        $lead_data['LEAD_NAME'] = 'Orange Internet TV Lead';
        $amo->add_lead($lead_data);
        return redirect()->route('internet_tv.index')->with('success', 'Internet Tv created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrangeInternetTv  $orangeInternetTv
     * @return \Illuminate\Http\Response
     */
    public function show(OrangeInternetTv $orangeInternetTv, $id)
    {
        $orangeInternetTv = OrangeInternetTv::findOrFail($id);
        return view('internet_tv.show', compact('orangeInternetTv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrangeInternetTv  $orangeInternetTv
     * @return \Illuminate\Http\Response
     */
    public function edit(OrangeInternetTv $orangeInternetTv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrangeInternetTv  $orangeInternetTv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrangeInternetTv $orangeInternetTv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrangeInternetTv  $orangeInternetTv
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrangeInternetTv $orangeInternetTv)
    {
        //
    }
}
