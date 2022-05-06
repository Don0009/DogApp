<?php

namespace App\Http\Controllers\Proximus;

use App\Http\Controllers\OKSign\OKSignController;
use Illuminate\Support\Facades\Auth;
use App\Models\NumberPortingFormDU;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AmoCRMController;


use Carbon\Carbon;
use mikehaertl\pdftk\Pdf;
use \Mail;



class ProximusNumberPortingFormDUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proximus = NumberPortingFormDU::all();

        return view('proximus.number_porting_du.index', compact('proximus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proximus.number_porting_du.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [



            'seller_id'=> 'required',
            'name'=> 'required',
            'full_name'=> 'required',
            'customer_other_network_number'=> 'required',
            'email_address'=> 'required',
            'company_name'=> 'required',
            'company_number'=> 'required',
            'customer_other_network_number_p'=> 'required',
            'email_address_p'=> 'required',
            'mobile_pack_radio'=> 'required',
            'qua_of_num_port'=> 'required',
            'land_line_to_be_ported'=> 'required',
            'street'=> 'required',
            'no'=> 'required',
            'floor'=> 'required',
            'box'=> 'required',
            'postcode'=> 'required',
            'township'=> 'required',

            'TELEFOONNUMMERS'=> 'required',
            'TELEFOONNUMMERS_2'=> 'required',
            'TELEFOONNUMMERS_3'=> 'required',
            'TELEFOONNUMMERS_4'=> 'required',
            'TELEFOONNUMMERS_5'=> 'required',
            'Of_nummerreeks_van'=> 'required',
            'Of_nummerreeks_van_2'=> 'required',
            'Of_nummerreeks_van_3'=> 'required',
            'Of_nummerreeks_van_4'=> 'required',
            'Of_nummerreeks_van_5'=> 'required',

            'tot_1'=> 'required',
            'tot_2'=> 'required',
            'tot_3'=> 'required',
            'tot_4'=> 'required',
            'tot_5'=> 'required',

            //'gsm_num_1'=> 'required',
            'gsm_num_2'=> 'required',
            'gsm_num_3'=> 'required',
            'gsm_num_4'=> 'required',
            'gsm_num_5'=> 'required',
            'gsm_num_6'=> 'required',


           // 'sim_num_of_other_operator_1'=> 'required',
            'sim_num_of_other_operator_2'=> 'required',
            'sim_num_of_other_operator_3'=> 'required',
            'sim_num_of_other_operator_4'=> 'required',
            'sim_num_of_other_operator_5'=> 'required',
            'sim_num_of_other_operator_6'=> 'required',

            //'reload_card_1'=> 'required',
            'reload_card_2'=> 'required',
            'reload_card_3'=> 'required',
            'reload_card_4'=> 'required',
            'reload_card_5'=> 'required',
            'reload_card_6'=> 'required',
            'reload_card_7'=> 'required',

          //  'subscription_1'=> 'required',
            'subscription_2'=> 'required',
            'subscription_3'=> 'required',
            'subscription_4'=> 'required',
            'subscription_5'=> 'required',
            'subscription_6'=> 'required',
            'subscription_7'=> 'required',


           // 'simkaartnum_of_proximus_1'=> 'required',
            'simkaartnum_of_proximus_2'=> 'required',
            'simkaartnum_of_proximus_3'=> 'required',
            'simkaartnum_of_proximus_4'=> 'required',
            'simkaartnum_of_proximus_5'=> 'required',
            'simkaartnum_of_proximus_6'=> 'required',

            'date'=> 'required',
            'ref_id'=> 'required',


        ]);



        $data = $request->all();
        $data['user_id'] = Auth::user()->id;



        $pdf = new Pdf(public_path('unfilled_forms/telenet/contractapp_nofill.pdf'), [

            'command' => env('PDFTK_PATH'),

        ]);

        $data = $request->all();
        $data = $orange = NumberPortingFormDU::create($data);



        $pdf_name = 'pdfs_generated/' . now()->timestamp . '.pdf';

        $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()

            ->saveAs($pdf_name);



//Mail
        $mail = Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
            $message->to('degis9000@gmail.com')
                ->subject("You have got new Proximus Number Porting (Dutch) Lead...!")
                ->cc(['lasha@studiodlvx.be'])
//                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
                ->attach(public_path($pdf_name), [
                    'as' => 'Proximus Number Porting (Dutch) Lead.pdf',
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
        $lead_data['LEAD_NAME'] = 'Proximus Number Porting (Dutch) Lead';
        $amo->add_lead($lead_data);
        unlink(public_path($pdf_name));


        return redirect()->route('proximus_number_porting_du.index')->with('success', 'Proximus Number Porting (Dutch) created successfully!');



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
