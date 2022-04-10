<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\PadServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PadServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pad_services = PadServices::all();
        return view ('pad_services.index',compact('pad_services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    $pad_services= PadServices::all();
        return view ('pad_services.create',compact('pad_services'));
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
            'first_last_name' => 'required',
            'customer_no' => 'required',
            'company_name' => 'required',
            'legal_status' => 'required',
            'customer_no_1' => 'required',
            'code_nace' => 'required',
            'tva_be' => 'required',
            'rpm' => 'required',
            'phone' => 'required',
            'gsm' => 'required',
            'email' => 'required',
            'rue' => 'required',
            'noo' => 'required',
            'bte' => 'required',
            'etage' => 'required',
            'appartement' => 'required',
            'code_postal' => 'required',
            'localité' => 'required',
            'document_id' => 'required',
            'représentée_par' => 'required',
            'rue_1' => 'required',
            'noo_1' => 'required',
            'bte_1' => 'required',
            'etage_1' => 'required',
            'appartement_1' => 'required',
            'code_postal_1' => 'required',
            'localité_1' => 'required',
            'year_of_first_use' => 'required',
            'drawn_up' => 'required',
            'of_which_you_acknowledge' => 'required',
            'to_the_customer' => 'required',
            'first_last_name_1' => 'required',
            'customer_no_2' => 'required',
            'place_of_birth_1' => 'required',
            'company_name_1' => 'required',
            'legal_status_1' => 'required',
            'customer_no_3' => 'required',
            'code_nace_1' => 'required',
            'tva_be_1' => 'required',
            'rpm_1' => 'required',
            'phone_1' => 'required',
            'gsm_1' => 'required',
            'email_1' => 'required',
            'rue_2' => 'required',
            'noo_2' => 'required',
            'bte_2' => 'required',
            'etage_2' => 'required',
            'appartement_2' => 'required',
            'code_postal_2' => 'required',
            'localité_2' => 'required',
            'document_id_2' => 'required',
            'représentée_par_2' => 'required',
            'rue_3' => 'required',
            'noo_3' => 'required',
            'bte_3' => 'required',
            'etage_3' => 'required',
            'appartement_3' => 'required',
            'code_postal_3' => 'required',
            'localité_3' => 'required',
            'year_of_first_use_3' => 'required',
            'drawn_up_3' => 'required',
            'of_which_you_acknowledge_3' => 'required',
            'to_the_customer_3' => 'required',
        ]);

        // dd($request->all());

        // dd($validator,$request->all());
        if($validator->fails()){

// dd($validator);
            return redirect()->back()->withErrors($validator);
        }
        $data = $request->all();
        if(isset($data['the_3'])){
            $data['the_3'] = Carbon::parse($data['the_3']);
        }
        if(isset($data['date_of_birth_1'])){
            $data['date_of_birth_1'] = Carbon::parse($data['date_of_birth_1']);
        }
                if(isset($data['date_of_birth'])){
            $data['date_of_birth'] = Carbon::parse($data['date_of_birth']);
        }
        if(isset($data['the'])){
            $data['the'] = Carbon::parse($data['the']);
        }
        if(isset($data['you_are_a_customer_of_engie_3'])){
            if($data['you_are_a_customer_of_engie_3'] == "on"){
            $data['you_are_a_customer_of_engie_3'] = true;
            }  else{
            $data['you_are_a_customer_of_engie_3'] = false;
            }
        }
        if(isset($data['oil_installation_3'])){
            if($data['oil_installation_3'] == "on"){
            $data['oil_installation_3'] = true;
            }  else{
            $data['oil_installation_3'] = false;
            }
        }
        if(isset($data['gas_installation_3'])){
            if($data['gas_installation_3'] == "on"){
            $data['gas_installation_3'] = true;
            }  else{
            $data['gas_installation_3'] = false;
            }
        }
        if(isset($data['electrical_installation_3'])){
            if($data['electrical_installation_3'] == "on"){
            $data['electrical_installation_3'] = true;
            }  else{
            $data['electrical_installation_3'] = false;
            }
        }
        if(isset($data['you_are_not_customer_of_engie_electrabel_3'])){
            if($data['you_are_not_customer_of_engie_electrabel_3'] == "on"){
            $data['you_are_not_customer_of_engie_electrabel_3'] = true;
            }  else{
            $data['you_are_not_customer_of_engie_electrabel_3'] = false;
            }
        }
        if(isset($data['oil_installation_4'])){
            if($data['oil_installation_4'] == "on"){
            $data['oil_installation_4'] = true;
            }  else{
            $data['oil_installation_4'] = false;
            }
        }
        if(isset($data['gas_installation_4'])){
            if($data['gas_installation_4'] == "on"){
            $data['gas_installation_4'] = true;
            }  else{
            $data['gas_installation_4'] = false;
            }
        }
        if(isset($data['electrical_installation_4'])){
            if($data['electrical_installation_4'] == "on"){
            $data['electrical_installation_4'] = true;
            }  else{
            $data['electrical_installation_4'] = false;
            }
        }
        if(isset($data['if_you_do_not_wish_to_receive_3'])){
            if($data['if_you_do_not_wish_to_receive_3'] == "on"){
            $data['if_you_do_not_wish_to_receive_3'] = true;
            }  else{
            $data['if_you_do_not_wish_to_receive_3'] = false;
            }
        }
        if(isset($data['you_wish_to_be_kept_informed_1'])){
            if($data['you_wish_to_be_kept_informed_1'] == "on"){
            $data['you_wish_to_be_kept_informed_1'] = true;
            }  else{
            $data['you_wish_to_be_kept_informed_1'] = false;
            }
        }
        if(isset($data['you_wish_to_receive_communications_1'])){
            if($data['you_wish_to_receive_communications_1'] == "on"){
            $data['you_wish_to_receive_communications_1'] = true;
            }  else{
            $data['you_wish_to_receive_communications_1'] = false;
            }
        }
        if(isset($data['professional_client_1'])){
            if($data['professional_client_1'] == "on"){
            $data['professional_client_1'] = true;
            }  else{
            $data['professional_client_1'] = false;
            }
        }
        if(isset($data['residential_customer_1'])){
            if($data['residential_customer_1'] == "on"){
            $data['residential_customer_1'] = true;
            }  else{
            $data['residential_customer_1'] = false;
            }
        }
        if(isset($data['madame_1'])){
            if($data['madame_1'] == "on"){
            $data['madame_1'] = true;
            }  else{
            $data['madame_1'] = false;
            }
        }
        if(isset($data['monsieur_1'])){
            if($data['monsieur_1'] == "on"){
            $data['monsieur_1'] = true;
            }  else{
            $data['monsieur_1'] = false;
            }
        }
        if(isset($data['if_you_do_not_wish_to_receive'])){
            if($data['if_you_do_not_wish_to_receive'] == "on"){
            $data['if_you_do_not_wish_to_receive'] = true;
            }  else{
            $data['if_you_do_not_wish_to_receive'] = false;
            }
        }
        if(isset($data['electrical_installation_1'])){
            if($data['electrical_installation_1'] == "on"){
            $data['electrical_installation_1'] = true;
            }  else{
            $data['electrical_installation_1'] = false;
            }
        }
        if(isset($data['gas_installation_1'])){
            if($data['gas_installation_1'] == "on"){
            $data['gas_installation_1'] = true;
            }  else{
            $data['gas_installation_1'] = false;
            }
        }
        if(isset($data['oil_installation_1'])){
            if($data['oil_installation_1'] == "on"){
            $data['oil_installation_1'] = true;
            }  else{
            $data['oil_installation_1'] = false;
            }
        }
        if(isset($data['you_are_not_customer_of_engie_electrabel'])){
            if($data['you_are_not_customer_of_engie_electrabel'] == "on"){
            $data['you_are_not_customer_of_engie_electrabel'] = true;
            }  else{
            $data['you_are_not_customer_of_engie_electrabel'] = false;
            }
        }
        if(isset($data['oil_installation'])){
            if($data['oil_installation'] == "on"){
            $data['oil_installation'] = true;
            }  else{
            $data['oil_installation'] = false;
            }
        }
        if(isset($data['gas_installation'])){
            if($data['gas_installation'] == "on"){
            $data['gas_installation'] = true;
            }  else{
            $data['gas_installation'] = false;
            }
        }
        if(isset($data['electrical_installation'])){
            if($data['electrical_installation'] == "on"){
            $data['electrical_installation'] = true;
            }  else{
            $data['electrical_installation'] = false;
            }
        }
        if(isset($data['you_are_a_customer_of_engie'])){
            if($data['you_are_a_customer_of_engie'] == "on"){
            $data['you_are_a_customer_of_engie'] = true;
            }  else{
            $data['you_are_a_customer_of_engie'] = false;
            }
        }

        if(isset($data['you_wish_to_be_kept_informed'])){
            if($data['you_wish_to_be_kept_informed'] == "on"){
            $data['you_wish_to_be_kept_informed'] = true;
            }  else{
            $data['you_wish_to_be_kept_informed'] = false;
            }
        }
        if(isset($data['you_wish_to_receive_communications'])){
            if($data['you_wish_to_receive_communications'] == "on"){
            $data['you_wish_to_receive_communications'] = true;
            }  else{
            $data['you_wish_to_receive_communications'] = false;
            }
        }
        if(isset($data['professional_client'])){
            if($data['professional_client'] == "on"){
            $data['professional_client'] = true;
            }  else{
            $data['professional_client'] = false;
            }
        }
        if(isset($data['residential_customer'])){
            if($data['residential_customer'] == "on"){
            $data['residential_customer'] = true;
            }  else{
            $data['residential_customer'] = false;
            }
        }

        if(isset($data['madame'])){
            if($data['madame'] == "on"){
            $data['madame'] = true;
            }  else{
            $data['madame'] = false;
            }
        }


        if(isset($data['monsieur'])){
            if($data['monsieur'] == "on"){
            $data['monsieur'] = true;
            }  else{
            $data['monsieur'] = false;
            }
        }



        PadServices::create($data);
        return redirect()->route('pad_services.index')->with('success','PAD Services created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PadServices  $padServices
     * @return \Illuminate\Http\Response
     */
    public function show(PadServices $padServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PadServices  $padServices
     * @return \Illuminate\Http\Response
     */
    public function edit(PadServices $padServices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PadServices  $padServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PadServices $padServices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PadServices  $padServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(PadServices $padServices)
    {
        //
    }
}
