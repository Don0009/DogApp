<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\EnergyTransferDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EnergyTransferDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $energy_transfer_documents = EnergyTransferDocument::all();
        return view ('energy_transfer_document.index',compact('energy_transfer_documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('energy_transfer_document.create');
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

            'street' => 'required',
            'nr_4' => 'required',
            'bus' => 'required',
            'plaat' => 'required',
            'postcode' => 'required',
            'ean_electricity' => 'required',
            'nr' => 'required',
            'meter_type' => 'required',
            'nachtmeter' => 'required',
            'nr_1' => 'required',
            'dag' => 'required',
            'nachi' => 'required',
            'nr_2' => 'required',
            'space' => 'required',
            'digital_meter' => 'required',
            'nr_3' => 'required',
            'dag_1' => 'required',
            'nachi_1' => 'required',
            'dag_2' => 'required',
            'nachi_2' => 'required',
            'do_you_have_budget' => 'required',
            'ondernemingsnr' => 'required',
            'first_name' => 'required',
            'name_3' => 'required',
            'company_name' => 'required',
            'tel' => 'required',
            'e_mail' => 'required',
            'straat' => 'required',
            'plaat_1' => 'required',
            'nr_5' => 'required',
            'bus_2' => 'required',
            'postcode_2' => 'required',
            'supplier_electricity' => 'required',
            'natural_gas' => 'required',
            'ondernemingsnr_1' => 'required',
            'first_name_1' => 'required',
            'name_4' => 'required',
            'company_name_1' => 'required',
            'tel_1' => 'required',
            'e_mail_1' => 'required',
            'straat_1' => 'required',
            'plaat_2' => 'required',
            'nr_6' => 'required',
            'bus_3' => 'required',
            'postcode_3' => 'required',
            'supplier_electricity_1' => 'required',
            'natural_gas_1' => 'required',
        ]);

        // dd($request->all());

        // dd($validator,$request->all());
        if($validator->fails()){


            return redirect()->back()->withErrors($validator);
        }
        $data = $request->all();
        if(isset($data['date_acquisition'])){
            $data['date_acquisition'] = Carbon::parse($data['date_acquisition']);
        }


        if(isset($data['huurder'])){
            if($data['huurder'] == "on"){
            $data['huurder'] = true;
            }  else{
            $data['huurder'] = false;
            }
        }

        if(isset($data['handtekening'])){
            if($data['handtekening'] == "on"){
            $data['handtekening'] = true;
            }  else{
            $data['handtekening'] = false;
            }
        }

        if(isset($data['handtekening_1'])){
            if($data['handtekening_1'] == "on"){
            $data['handtekening_1'] = true;
            }  else{
            $data['handtekening_1'] = false;
            }
        }
        if(isset($data['home_is_currently_used_1'])){
            if($data['home_is_currently_used_1'] == "on"){
            $data['home_is_currently_used_1'] = true;
            }  else{
            $data['home_is_currently_used_1'] = false;
            }
        }

        if(isset($data['single_meter'])){
            if($data['single_meter'] == "on"){
            $data['single_meter'] = true;
            }  else{
            $data['single_meter'] = false;
            }
        }
        if(isset($data['exclusief_nachtmeter'])){
            if($data['exclusief_nachtmeter'] == "on"){
            $data['exclusief_nachtmeter'] = true;
            }  else{
            $data['exclusief_nachtmeter'] = false;
            }
        }


        EnergyTransferDocument::create($data);
        return redirect()->route('energy_transfer_document.index')->with('success','Energy Transfer Document created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EnergyTransferDocument  $energyTransferDocument
     * @return \Illuminate\Http\Response
     */
    public function show(EnergyTransferDocument $energyTransferDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EnergyTransferDocument  $energyTransferDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(EnergyTransferDocument $energyTransferDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EnergyTransferDocument  $energyTransferDocument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EnergyTransferDocument $energyTransferDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EnergyTransferDocument  $energyTransferDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(EnergyTransferDocument $energyTransferDocument)
    {
        //
    }
}
