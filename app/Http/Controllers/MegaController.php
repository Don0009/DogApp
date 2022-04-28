<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Mega;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
public function index()
    {
        $megas = Mega::all();
        return view ('mega.index',compact('megas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mega.create');
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

            'naam' => 'required',
            'first_name' => 'required',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'gsm' => 'required',
            'e_mail' => 'required',
            'society' => 'required',
            'legal_form' => 'required',
            'ompany_number' => 'required',
            'street' => 'required',
            'no' => 'required',
            'bus' => 'required',
            'postcode' => 'required',
            'township' => 'required',
            'going_to_live' => 'required',
            'street_1' => 'required',
            'no_1' => 'required',
            'bus_1' => 'required',
            'postcode_1' => 'required',
            'township_1' => 'required',
            'ean_code' => 'required',
            'number' => 'required',
            'number_1' => 'required',
            'number_2' => 'required',
            'number_3' => 'required',
            'number_4' => 'required',
            'number_5' => 'required',
            'number_6' => 'required',
            'number_7' => 'required',
            'annual_consumption' => 'required',
            'current_supplier' => 'required',
            'start_date' => 'required',
            'ean_code_1' => 'required',
            'meter_nummer_2' => 'required',
            'meter_stand_2' => 'required',
            'annual_consumption_1' => 'required',
            'current_supplier_1' => 'required',
            'start_date_1' => 'required',
            'current_supplier_2' => 'required',
            'account_number' => 'required',
            'name_and_first' => 'required',
            'name_and_first_1' => 'required',
            'account_number_1' => 'required',
            'bic' => 'required',
            'datum' => 'required',
            'place' => 'required',
            'file_1' => 'required',
            'datum_1' => 'required',
            'place_1' => 'required',
            'file_2' => 'required',
            'file_3' => 'required',
            'aan_mega' => 'required',
            'agent' => 'required',
            'reference_1' => 'required',
            'fill_4' => 'required',
        ]);

        // dd($request->all());

        // dd($validator,$request->all());
        if($validator->fails()){

// dd($validator->errors());
            return redirect()->back()->withErrors($validator);
        }
        $data = $request->all();

        if(isset($data['date_of_birth'])){
            $data['date_of_birth'] = Carbon::parse($data['date_of_birth']);
        }

        if(isset($data['start_date'])){
            $data['start_date'] = Carbon::parse($data['start_date']);
        }
        if(isset($data['start_date_1'])){
            $data['start_date_1'] = Carbon::parse($data['start_date_1']);
        }



        Mega::create($data);
        return redirect()->route('mega.index')->with('success','Mega created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mega  $mega
     * @return \Illuminate\Http\Response
     */
    public function show(Mega $mega)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mega  $mega
     * @return \Illuminate\Http\Response
     */
    public function edit(Mega $mega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mega  $mega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mega $mega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mega  $mega
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mega $mega)
    {
        //
    }
}
