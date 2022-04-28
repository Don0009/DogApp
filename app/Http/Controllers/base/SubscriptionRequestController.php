<?php

namespace App\Http\Controllers\base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SubscriptionRequest;
use Illuminate\Support\Facades\Validator;


class SubscriptionRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subs = SubscriptionRequest::all();
        return view('base.subscription_request.index', compact('subs'));
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
            return view('base.subscription_request.create_fr', compact('lang'));
        }
        return view('base.subscription_request.create_du', compact('lang'));
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

            'title' => 'required',
            'language' => 'required',
            'name' => 'required',
            'f_name' => 'required',
            'date_of_birth' => 'required',
            'id_card_number' => 'required',
            'card_type' => 'required',
            'nationality' => 'required',
            'company_name' => 'required',
            'rpm_no' => 'required',
            'vat' => 'required',
            'street' => 'required',
            'box' => 'required',
            'locality' => 'required',
            'postal_code' => 'required',
            'phone' => 'required',
            'fax' => 'required',
            'mail' => 'required',
            'contact_details' => 'nullable',
            'authorize' => 'nullable',
            'agree' => 'nullable',
            'locality1' => 'required',
            'postal_code1' => 'required',
            'number_sim' => 'required',
            'sim_card' => 'required',
            'contract_length' => 'required',
            'date_renewal' => 'required',
            'distributer' => 'required',
            'client_number' => 'required',
            'distributor_number' => 'required',
            //2nd form
            'easier_company_name' => 'required',
            'easier_name' => 'required',
            'easier_f_name' => 'required',
            'easier_street' => 'required',
            'easier_box' => 'required',
            'easier_postal_code' => 'required',
            'easier_locality' => 'required',
            'easier_cus_number' => 'required',
            'american_express' => 'required',
            'visa_card' => 'required',
            'due_date' => 'required',
            'agre_date' => 'required',
            'agre_locality' => 'required',
            //3rd
            'mandate_number' => 'required',
            'debtor_name' => 'required',
            'signed_f_name' => 'required',
            'signed_street' => 'required',
            'signed_box' => 'required',
            'signed_locality' => 'required',
            'signed_postal_code' => 'required',
            'signed_country' => 'required',
            'signed_iban' => 'required',
            'signed_bic' => 'required',
            'concluded' => 'required',
            'signed_date' => 'required',

        ]);

        $data = $request->all();
        SubscriptionRequest::create($data);
        return redirect()->route('subscription_request.index');
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
