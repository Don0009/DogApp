<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\EngieContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class EngieContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contract_pros = EngieContract::all();
        return view ('engie.index',compact('contract_pros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('engie.pdf_du');
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
            'company_name' => 'required',
            'legal_form' => 'required',
            'name' => 'required',
            'first_name' => 'required',
            'client_number' => 'required',
            'nace_code' => 'required',
            'tel' => 'required',
            'gsm' => 'required',
            'e_mail' => 'required',
            'you_wish_to_receive' => 'required',
            'you_wish_to_be_informed' => 'required',
            'btw_be' => 'required',
            'rpr' => 'required',
            'company_name_1' => 'required',
            'legal_form_1' => 'required',
            'name_1' => 'required',
            'first_name_1' => 'required',
            'street' => 'required',
            'no' => 'required',
            'bus' => 'required',
            'postcode' => 'required',
            'place' => 'required',

            'electrabel_sa_1' => 'required',
            'electrabel_sa_2' => 'required',
            'street_1' => 'required',
            'no_1' => 'required',
            'floor' => 'required',
            'bus_1' => 'required',
            'apartment' => 'required',
            'post_code' => 'required',
            'place_1' => 'required',
            'electricity' => 'required',
            'natural_gas' => 'required',
            'excluding_night' => 'required',
            'place_2' => 'required',
            'desired_start_date' => 'required',
            'place_3' => 'required',
            'desired_start_date_1' => 'required',
            'valid_for_the_two_energies' => 'required',
            'code_p' => 'required',
            'debit_account_number' => 'required',
            'drawn_up' => 'required',
            'handtekening' => 'required',
            'of_which_the_customer' => 'required',
        ]);

        // dd($request->all());

        // dd($validator,$request->all());
        if($validator->fails()){


            return redirect()->back()->withErrors($validator);
        }
        $data = $request->all();


        if(isset($data['of_which_the_customer'])){
            $data['of_which_the_customer'] = Carbon::parse($data['of_which_the_customer']);
        }

        if(isset($data['desired_start_date_1'])){
            $data['desired_start_date_1'] = Carbon::parse($data['desired_start_date_1']);
        }

        if(isset($data['desired_start_date'])){
            $data['desired_start_date'] = Carbon::parse($data['desired_start_date']);
        }

        if(isset($data['do_not_wish_to_receive_commercial_communications'])){
            if($data['do_not_wish_to_receive_commercial_communications'] == "on"){
            $data['do_not_wish_to_receive_commercial_communications'] = true;
            }  else{
            $data['do_not_wish_to_receive_commercial_communications'] = false;
            }
        }
        if(isset($data['handtekening'])){
            if($data['handtekening'] == "on"){
            $data['handtekening'] = true;
            }  else{
            $data['handtekening'] = false;
            }
        }
        if(isset($data['drawn_up'])){
            if($data['drawn_up'] == "on"){
            $data['drawn_up'] = true;
            }  else{
            $data['drawn_up'] = false;
            }
        }

        if(isset($data['debit_account_number'])){
            if($data['debit_account_number'] == "on"){
            $data['debit_account_number'] = true;
            }  else{
            $data['debit_account_number'] = false;
            }
        }

        if(isset($data['through_a_new'])){
            if($data['through_a_new'] == "on"){
            $data['through_a_new'] = true;
            }  else{
            $data['through_a_new'] = false;
            }
        }
        if(isset($data['via_domiciliëring'])){
            if($data['via_domiciliëring'] == "on"){
            $data['via_domiciliëring'] = true;
            }  else{
            $data['via_domiciliëring'] = false;
            }
        }
        if(isset($data['by_bank_transfer'])){
            if($data['by_bank_transfer'] == "on"){
            $data['by_bank_transfer'] = true;
            }  else{
            $data['by_bank_transfer'] = false;
            }
        }
        if(isset($data['per_post'])){
            if($data['per_post'] == "on"){
            $data['per_post'] = true;
            }  else{
            $data['per_post'] = false;
            }
        }
        if(isset($data['by_e_mail'])){
            if($data['by_e_mail'] == "on"){
            $data['by_e_mail'] = true;
            }  else{
            $data['by_e_mail'] = false;
            }
        }

        if(isset($data['quarterly_advance'])){
            if($data['quarterly_advance'] == "on"){
            $data['quarterly_advance'] = true;
            }  else{
            $data['quarterly_advance'] = false;
            }
        }
        if(isset($data['bimonthly'])){
            if($data['bimonthly'] == "on"){
            $data['bimonthly'] = true;
            }  else{
            $data['bimonthly'] = false;
            }
        }
        if(isset($data['monthly'])){
            if($data['monthly'] == "on"){
            $data['monthly'] = true;
            }  else{
            $data['monthly'] = false;
            }
        }
        if(isset($data['clear_selection_1'])){
            if($data['clear_selection_1'] == "on"){
            $data['clear_selection_1'] = true;
            }  else{
            $data['clear_selection_1'] = false;
            }
        }

        if(isset($data['valid_for_the_two_energies'])){
            if($data['valid_for_the_two_energies'] == "on"){
            $data['valid_for_the_two_energies'] = true;
            }  else{
            $data['valid_for_the_two_energies'] = false;
            }
        }

        if(isset($data['you_move_or_build_3'])){
            if($data['you_move_or_build_3'] == "on"){
            $data['you_move_or_build_3'] = true;
            }  else{
            $data['you_move_or_build_3'] = false;
            }
        }
        if(isset($data['you_already_have_an_electricity_contract_3'])){
            if($data['you_already_have_an_electricity_contract_3'] == "on"){
            $data['you_already_have_an_electricity_contract_3'] = true;
            }  else{
            $data['you_already_have_an_electricity_contract_3'] = false;
            }
        }
        if(isset($data['you_want_to_change_your_existing_4'])){
            if($data['you_want_to_change_your_existing_4'] == "on"){
            $data['you_want_to_change_your_existing_4'] = true;
            }  else{
            $data['you_want_to_change_your_existing_4'] = false;
            }
        }
        if(isset($data['you_want_a_contract_for_an_extra_1'])){
            if($data['you_want_a_contract_for_an_extra_1'] == "on"){
            $data['you_want_a_contract_for_an_extra_1'] = true;
            }  else{
            $data['you_want_a_contract_for_an_extra_1'] = false;
            }
        }
        if(isset($data['you_move_or_build_4'])){
            if($data['you_move_or_build_4'] == "on"){
            $data['you_move_or_build_4'] = true;
            }  else{
            $data['you_move_or_build_4'] = false;
            }
        }
        if(isset($data['you_already_have_an_electricity_contract_4'])){
            if($data['you_already_have_an_electricity_contract_4'] == "on"){
            $data['you_already_have_an_electricity_contract_4'] = true;
            }  else{
            $data['you_already_have_an_electricity_contract_4'] = false;
            }
        }
        if(isset($data['you_want_to_change_your_existing_5'])){
            if($data['you_want_to_change_your_existing_5'] == "on"){
            $data['you_want_to_change_your_existing_5'] = true;
            }  else{
            $data['you_want_to_change_your_existing_5'] = false;
            }
        }
        if(isset($data['you_move_or_build_5'])){
            if($data['you_move_or_build_5'] == "on"){
            $data['you_move_or_build_5'] = true;
            }  else{
            $data['you_move_or_build_5'] = false;
            }
        }
        if(isset($data['you_already_have_an_electricity_contract_5'])){
            if($data['you_already_have_an_electricity_contract_5'] == "on"){
            $data['you_already_have_an_electricity_contract_5'] = true;
            }  else{
            $data['you_already_have_an_electricity_contract_5'] = false;
            }
        }
        if(isset($data['you_want_to_change_your_existing_6'])){
            if($data['you_want_to_change_your_existing_6'] == "on"){
            $data['you_want_to_change_your_existing_6'] = true;
            }  else{
            $data['you_want_to_change_your_existing_6'] = false;
            }
        }
        if(isset($data['you_want_to_change_your_existing_7'])){
            if($data['you_want_to_change_your_existing_7'] == "on"){
            $data['you_want_to_change_your_existing_7'] = true;
            }  else{
            $data['you_want_to_change_your_existing_7'] = false;
            }
        }
        if(isset($data['place_3'])){
            if($data['place_3'] == "on"){
            $data['place_3'] = true;
            }  else{
            $data['place_3'] = false;
            }
        }
        if(isset($data['you_want_to_change_your_existing_3'])){
            if($data['you_want_to_change_your_existing_3'] == "on"){
            $data['you_want_to_change_your_existing_3'] = true;
            }  else{
            $data['you_want_to_change_your_existing_3'] = false;
            }
        }
        if(isset($data['you_want_to_change_your_existing_2'])){
            if($data['you_want_to_change_your_existing_2'] == "on"){
            $data['you_want_to_change_your_existing_2'] = true;
            }  else{
            $data['you_want_to_change_your_existing_2'] = false;
            }
        }
        if(isset($data['you_already_have_an_electricity_contract_2'])){
            if($data['you_already_have_an_electricity_contract_2'] == "on"){
            $data['you_already_have_an_electricity_contract_2'] = true;
            }  else{
            $data['you_already_have_an_electricity_contract_2'] = false;
            }
        }
        if(isset($data['you_move_or_build_2'])){
            if($data['you_move_or_build_2'] == "on"){
            $data['you_move_or_build_2'] = true;
            }  else{
            $data['you_move_or_build_2'] = false;
            }
        }
        if(isset($data['you_want_to_change_your_existing_1'])){
            if($data['you_want_to_change_your_existing_1'] == "on"){
            $data['you_want_to_change_your_existing_1'] = true;
            }  else{
            $data['you_want_to_change_your_existing_1'] = false;
            }
        }
        if(isset($data['you_already_have_an_electricity_contract_1'])){
            if($data['you_already_have_an_electricity_contract_1'] == "on"){
            $data['you_already_have_an_electricity_contract_1'] = true;
            }  else{
            $data['you_already_have_an_electricity_contract_1'] = false;
            }
        }
        if(isset($data['you_move_or_build_1'])){
            if($data['you_move_or_build_1'] == "on"){
            $data['you_move_or_build_1'] = true;
            }  else{
            $data['you_move_or_build_1'] = false;
            }
        }

        if(isset($data['you_want_a_contract_for_an_extra'])){
            if($data['you_want_a_contract_for_an_extra'] == "on"){
            $data['you_want_a_contract_for_an_extra'] = true;
            }  else{
            $data['you_want_a_contract_for_an_extra'] = false;
            }
        }

        if(isset($data['you_want_to_change_your_existing'])){
            if($data['you_want_to_change_your_existing'] == "on"){
            $data['you_want_to_change_your_existing'] = true;
            }  else{
            $data['you_want_to_change_your_existing'] = false;
            }
        }

        if(isset($data['you_already_have_an_electricity_contract'])){
            if($data['you_already_have_an_electricity_contract'] == "on"){
            $data['you_already_have_an_electricity_contract'] = true;
            }  else{
            $data['you_already_have_an_electricity_contract'] = false;
            }
        }

        if(isset($data['you_move_or_build'])){
            if($data['you_move_or_build'] == "on"){
            $data['you_move_or_build'] = true;
            }  else{
            $data['you_move_or_build'] = false;
            }
        }

        if(isset($data['clear_selection'])){
            if($data['clear_selection'] == "on"){
            $data['clear_selection'] = true;
            }  else{
            $data['clear_selection'] = false;
            }
        }
        if(isset($data['you_have_never_had_energy'])){
            if($data['you_have_never_had_energy'] == "on"){
            $data['you_have_never_had_energy'] = true;
            }  else{
            $data['you_have_never_had_energy'] = false;
            }
        }

        if(isset($data['you_do_not_yet'])){
            if($data['you_do_not_yet'] == "on"){
            $data['you_do_not_yet'] = true;
            }  else{
            $data['you_do_not_yet'] = false;
            }
        }

        if(isset($data['you_already_have_contract'])){
            if($data['you_already_have_contract'] == "on"){
            $data['you_already_have_contract'] = true;
            }  else{
            $data['you_already_have_contract'] = false;
            }
        }
        if(isset($data['in_case_of_moving_house'])){
            if($data['in_case_of_moving_house'] == "on"){
            $data['in_case_of_moving_house'] = true;
            }  else{
            $data['in_case_of_moving_house'] = false;
            }
        }

        if(isset($data['only_professional_use'])){
            if($data['only_professional_use'] == "on"){
            $data['only_professional_use'] = true;
            }  else{
            $data['only_professional_use'] = false;
            }
        }

        if(isset($data['gemengd_professioneel_verbruik'])){
            if($data['gemengd_professioneel_verbruik'] == "on"){
            $data['gemengd_professioneel_verbruik'] = true;
            }  else{
            $data['gemengd_professioneel_verbruik'] = false;
            }
        }

        if(isset($data['you_wish_to_receive'])){
            if($data['you_wish_to_receive'] == "on"){
            $data['you_wish_to_receive'] = true;
            }  else{
            $data['you_wish_to_receive'] = false;
            }
        }


        if(isset($data['you_wish_to_be_informed'])){
            if($data['you_wish_to_be_informed'] == "on"){
            $data['you_wish_to_be_informed'] = true;
            }  else{
            $data['you_wish_to_be_informed'] = false;
            }
        }
        // dd($data);
        $contract = EngieContract::create($data);
        // dd($contract);
        EngieContract::create($data);
        return redirect()->route('engie.index')->with('success','Engie Contract created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EngieContract  $engieContract
     * @return \Illuminate\Http\Response
     */
    public function show(EngieContract $engieContract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EngieContract  $engieContract
     * @return \Illuminate\Http\Response
     */
    public function edit(EngieContract $engieContract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EngieContract  $engieContract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EngieContract $engieContract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EngieContract  $engieContract
     * @return \Illuminate\Http\Response
     */
    public function destroy(EngieContract $engieContract)
    {
        //
    }
}
