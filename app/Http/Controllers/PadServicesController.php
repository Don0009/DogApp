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
        ]);

        // dd($request->all());

        // dd($validator,$request->all());
        if($validator->fails()){


            return redirect()->back()->withErrors($validator);
        }
        $data = $request->all();
        if(isset($data['date_of_birth'])){
            $data['date_of_birth'] = Carbon::parse($data['date_of_birth']);
        }
        $data = $request->all();
        if(isset($data['the'])){
            $data['the'] = Carbon::parse($data['the']);
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
