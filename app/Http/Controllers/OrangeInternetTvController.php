<?php

namespace App\Http\Controllers;

use App\OrangeInternetTv;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrangeInternetTvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internet_tvs = OrangeInternetTv::all();
     return view ('internet_tv.index',compact('internet_tvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // dd($lang='du');

        $lang = $request->lang;
// dd($lang);
         if($lang == "du"){
            return view('internet_tv.create');

            }

         else{
            return view('internet_tv.create_fr');
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
        // dd($data);
        if(isset($data['desired_start_date_1'])){
            $data['desired_start_date_1'] = Carbon::parse($data['date_of_birth']);
        }


        if(isset($data['one'])){
            if($data['one'] == "on"){
            $data['one'] = true;
            }  else{
            $data['one'] = false;
            }
        }

        if(isset($data['two'])){
            if($data['two'] == "on"){
            $data['two'] = true;
            }  else{
            $data['two'] = false;
            }
        }


        if(isset($data['three'])){
            if($data['three'] == "on"){
            $data['three'] = true;
            }  else{
            $data['three'] = false;
            }
        }


        if(isset($data['and'])){
            if($data['and'] == "on"){
            $data['and'] = true;
            }  else{
            $data['and'] = false;
            }
        }




        if(isset($data['neen'])){
        if($data['neen'] == "on"){
        $data['neen'] = true;
        }  else{
        $data['neen'] = false;
        }
    }

    if(isset($data['care_of_the_automatic_migration'])){
        if($data['care_of_the_automatic_migration'] == "on"){
        $data['care_of_the_automatic_migration'] = true;
        }  else{
        $data['care_of_the_automatic_migration'] = false;
        }
    }


    if(isset($data['i_do_not_wish_to_use_easy_switch'])){
        if($data['i_do_not_wish_to_use_easy_switch'] == "on"){
        $data['i_do_not_wish_to_use_easy_switch'] = true;
        }  else{
        $data['i_do_not_wish_to_use_easy_switch'] = false;
        }
    }



    if(isset($data['stopping_5'])){
        if($data['stopping_5'] == "on"){
        $data['stopping_5'] = true;
        }  else{
        $data['stopping_5'] = false;
        }
    }


    if(isset($data['stopping_2'])){
        if($data['stopping_2'] == "on"){
        $data['stopping_2'] = true;
        }  else{
        $data['stopping_2'] = false;
        }
    }


    if(isset($data['stopping_3'])){
        if($data['stopping_3'] == "on"){
        $data['stopping_3'] = true;
        }  else{
        $data['stopping_3'] = false;
        }
    }



    if(isset($data['stopping_4'])){
        if($data['stopping_4'] == "on"){
        $data['stopping_4'] = true;
        }  else{
        $data['stopping_4'] = false;
        }
    }


    if(isset($data['immediately'])){
        if($data['immediately'] == "on"){
        $data['immediately'] = true;
        }  else{
        $data['immediately'] = false;
        }
    }



    if(isset($data['on_the_installation_date'])){
        if($data['on_the_installation_date'] == "on"){
        $data['on_the_installation_date'] = true;
        }  else{
        $data['on_the_installation_date'] = false;
        }
    }


    if(isset($data['transfer_to_orange'])){
        if($data['transfer_to_orange'] == "on"){
        $data['transfer_to_orange'] = true;
        }  else{
        $data['transfer_to_orange'] = false;
        }
    }



    if(isset($data['stop'])){
        if($data['stop'] == "on"){
        $data['stop'] = true;
        }  else{
        $data['stop'] = false;
        }
    }


    if(isset($data['immediately_2'])){
        if($data['immediately_2'] == "on"){
        $data['immediately_2'] = true;
        }  else{
        $data['immediately_2'] = false;
        }
    }




    if(isset($data['on_the_installation_date'])){
        if($data['on_the_installation_date'] == "on"){
        $data['on_the_installation_date'] = true;
        }  else{
        $data['on_the_installation_date'] = false;
        }
    }




    if(isset($data['transfer_to_orange_4'])){
        if($data['transfer_to_orange_4'] == "on"){
        $data['transfer_to_orange_4'] = true;
        }  else{
        $data['transfer_to_orange_4'] = false;
        }
    }

    if(isset($data['stop_2'])){
        if($data['stop_2'] == "on"){
        $data['stop_2'] = true;
        }  else{
        $data['stop_2'] = false;
        }
    }


    if(isset($data['immediately_3'])){
        if($data['immediately_3'] == "on"){
            $data['immediately_3'] = true;
        }  else{
        $data['immediately_3'] = false;
        }
    }


    if(isset($data['installation_date_3'])){
        if($data['installation_date_3'] == "on"){
        $data['installation_date_3'] = true;
        }  else{
        $data['installation_date_3'] = false;
        }
    }


    if(isset($data['transfer_to_orange_2'])){
        if($data['transfer_to_orange_2'] == "on"){
        $data['transfer_to_orange_2'] = true;
        }  else{
        $data['transfer_to_orange_2'] = false;
        }
    }




    if(isset($data['stop_3'])){
        if($data['stop_3'] == "on"){
        $data['stop_3'] = true;
        }  else{
        $data['stop_3'] = false;
        }
    }




    if(isset($data['immediately_4'])){
        if($data['immediately_4'] == "on"){
        $data['immediately_4'] = true;
        }  else{
        $data['immediately_4'] = false;
        }
    }



    if(isset($data['on_the_installation_date_4'])){
        if($data['on_the_installation_date_4'] == "on"){
        $data['on_the_installation_date_4'] = true;
        }  else{
        $data['on_the_installation_date_4'] = false;
        }
    }





    if(isset($data['transfer_to_orange_3'])){
        if($data['transfer_to_orange_3'] == "on"){
        $data['transfer_to_orange_3'] = true;
        }  else{
        $data['transfer_to_orange_3'] = false;
        }
    }


    if(isset($data['stop_4'])){
        if($data['stop_4'] == "on"){
        $data['stop_4'] = true;
        }  else{
        $data['stop_4'] = false;
        }
    }


    if(isset($data['immediately_5'])){
        if($data['immediately_5'] == "on"){
        $data['immediately_5'] = true;
        }  else{
        $data['immediately_5'] = false;
        }
    }



    if(isset($data['on_the_installation_date_5'])){
        if($data['on_the_installation_date_5'] == "on"){
        $data['on_the_installation_date_5'] = true;
        }  else{
        $data['on_the_installation_date_5'] = false;
        }
    }






    if(isset($data['op'])){
        if($data['op'] == "on"){
        $data['op'] = true;
        }  else{
        $data['op'] = false;
        }
    }


    // dd($data);
        // dd($validator);

        // if($validator->fails()){
        //     dd($validator);
        //     return redirect()->back()->withErrors($validator);
        // }
        OrangeInternetTv::create($data);
        return redirect()->route('internet_tv.index')->with('success','Internet Tv created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrangeInternetTv  $orangeInternetTv
     * @return \Illuminate\Http\Response
     */
    public function show(OrangeInternetTv $orangeInternetTv)
    {
        //
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
