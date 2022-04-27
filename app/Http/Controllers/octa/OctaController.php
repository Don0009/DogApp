<?php

namespace App\Http\Controllers\octa;

use App\Octa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OctaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $octas = Octa::all();
        return view('octa.index', compact('octas'));
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
            return view('octa.create_fr', compact('lang'));
        }
        return view('octa.create_du', compact('lang'));
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

            'client' => 'required',
            'language' => 'required',
            'title' => 'required',
            'customer_number' => 'required',
            'society' => 'required',
            'legal_status' => 'required',
            'company_number' => 'required',
            'subject_vat' => 'required',
            'name' => 'required',
            'f_name' => 'required',
            'gsm' => 'required',
            'phone' => 'required',
            'mail' => 'required',
            'date_of_birth' => 'required',
            'dev_street' => 'required',
            'dev_no' => 'required',
            'dev_box' => 'required',

            'dev_postal_code' => 'required',
            'dev_commune' => 'required',
            'dev_refer_customer' => 'required',
            'billing_street' => 'nullable',
            'billing_no' => 'required',
            'billing_box' => 'required',
            'billing_postal_code' => 'required',
            'billing_commune' => 'required',
            'billing_country' => 'required',
            'price_duration' => 'required',
            'belgian_electricity' => 'nullable',
            'digital_meter' => 'required',
            'counter' => 'required',
            'counter_type' => 'required',
            'ean_code' => 'required',
            'ean_code_night' => 'nullable',
            'meter_number' => 'required',
            'meter_number_night' => 'nullable',

            'solar_other_facility' => 'required',
            'power_production_plant' => 'required',
            'house_move' => 'required',
            'delivery_start_date' => 'required',
            'price_duration_contract' => 'required',
            'counter1' => 'required',
            'ean_code1' => 'required',
            'meter_number1' => 'required',
            'house_move1' => 'required',

            'delivery_start_date1' => 'required',
            'installment_frequency' => 'required',
            'payment_method' => 'required',
            'invoices' => 'nullable',
            'send_invoices' => 'nullable',
            'account_number' => 'required',
            'bic_code' => 'required',
            'information' => 'nullable',
            'signature' => 'required',

            'octa' => 'required',
            'date' => 'required',
            'company_name' => 'required',
            'street_number' => 'required',
            'zip_code' => 'required',
            'iban_account' => 'required',
            'bic_code1' => 'required',
            'signature1' => 'required',
            'date1' => 'required',
            'place' => 'required',
        ]);

        $data = $request->all();
        Octa::create($data);
        return redirect()->route('regi_form.index');
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
