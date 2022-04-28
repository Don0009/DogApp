<?php

namespace App\Http\Controllers\base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NumberRequest;
use Illuminate\Support\Facades\Validator;

class NumberRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nums = NumberRequest::all();
        return view('base.number_request.index', compact('nums'));
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
            return view('base.number_request.create_fr', compact('lang'));
        }
        return view('base.number_request.create_du', compact('lang'));
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

            'memo_date' => 'required',
            'title' => 'required',
            'language' => 'required',
            'customer_number' => 'required',
            'name' => 'required',
            'company_name' => 'required',
            'rpm_number' => 'required',
            'phone' => 'required',
            'payment' => 'required',
            'customer_name' => 'required',
            'company_name1' => 'required',
            'name_mandated' => 'required',
            'rpm_number1' => 'required',
            'customer_number1' => 'required',
            'phone_attachment' => 'required',
            'sim_num1' => 'required',
            'sim_num2' => 'nullable',
            'sim_num3' => 'nullable',
            'sim_num4' => 'nullable',
            'sim_num5' => 'nullable',

            'phone_number1' => 'required',
            'phone_number2' => 'nullable',
            'phone_number3' => 'nullable',
            'phone_number4' => 'nullable',
            'phone_number5' => 'nullable',


            'exec_date1' => 'required',
            'exec_date2' => 'nullable',
            'exec_date3' => 'nullable',
            'exec_date4' => 'nullable',
            'exec_date5' => 'nullable',

            'evidence' => 'nullable',
            'docu1' => 'required',
            'docu1' => 'required',

            'distributor_name' => 'required',
            'distribtuor_num' => 'required',
            'date1' => 'required',
            'signature1' => 'required',
            'date2' => 'required',
            'signature2' => 'required',

        ]);

        $data = $request->all();
        NumberRequest::create($data);
        return redirect()->route('number_request.index');
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
