<?php

namespace App\Http\Controllers\lampiris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lampiris;
use Illuminate\Support\Facades\Validator;

class LampirisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lamps = Lampiris::all();
        return view('lampiris.index', compact('lamps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $lang = $request->lang;
        if ($request->lang == 'fr') {
            return view('lampiris.create_fr', compact('lang'));
        }
        return view('lampiris.create_du', compact('lang'));
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

            'form_lang' => 'required',
            'title' => 'required',
            'language' => 'nullable',
            'name' => 'required',
            'f_name' => 'required',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'gsm' => 'required',
            'mail' => 'required',
            'bank_account' => 'required',
            'people' => 'required',
            'adress' => 'required',
            'box' => 'required',
            'no' => 'required',
            'postal_code' => 'required',
            'locality' => 'required',
            'adress1' => 'required',

            'box1' => 'required',
            'no1' => 'required',
            'postal_code1' => 'required',
            'locality1' => 'nullable',
            'tip' => 'required',
            'year' => 'required',
            'counter_type' => 'required',
            'ean_code' => 'required',
            'meter_number1' => 'required',
            'counter_index1' => 'required',
            'meter_number2' => 'required',
            'counter_index2' => 'required',
            'meter_number3' => 'required',
            'counter_index3' => 'required',
            'meter_number4' => 'required',
            'counter_index4' => 'required',

            'meter_number5' => 'nullable',
            'counter_index5' => 'nullable',
            'meter_number6' => 'nullable',
            'counter_index6' => 'nullable',

            'annual_consu' => 'required',
            'annual_injection' => 'nullable',
            'moving' => 'required',
            'meter_open' => 'required',
            'current_provid' => 'required',
            'start_date' => 'required',
            'tip1' => 'required',

            'year1' => 'required',
            'ean_code1' => 'required',
            'meter_number' => 'required',
            'counter' => 'required',
            'annual_consu1' => 'required',
            'moving1' => 'required',
            'meter_open1' => 'required',
            'current_provid1' => 'required',
            'start_date1' => 'required',

            'promotional' => 'required',
            'electricity_gas' => 'required',
            'insulation' => 'required',
            'boilers' => 'required',
            'charging_vehicles' => 'required',
            'panels' => 'required',
            'insurance' => 'required',
            'partners' => 'required',
            'authorize' => 'required',
            'subscribe' => 'required',

            'activated' => 'nullable',
            'invoices' => 'required',
            'invoices1' => 'required',
            'bills' => 'required',
            'undersigned' => 'required',
            'iban' => 'required',

            'bic' => 'nullable',
            'date' => 'required',
            'the' => 'required',
            'name1' => 'required',
            'city' => 'required',
            'date1' => 'required',
            'agent' => 'required',
            'pricing_code' => 'required',
            'text' => 'required',



        ]);

        $data = $request->all();
        Lampiris::create($data);
        return redirect()->route('lampiris.index');
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
