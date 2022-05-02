<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\ComfyProContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use mikehaertl\pdftk\Pdf;
use \Mail;

class ComfyProContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comfy_pro_contracts = ComfyProContract::all();
        return view ('luminus/comfy_pro_contract.index',compact('comfy_pro_contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('luminus/comfy_pro_contract.create');
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

        ]);

        // dd($request->all());

        // dd($validator,$request->all());
        if($validator->fails()){

// dd($validator->errors());
            return redirect()->back()->withErrors($validator);
        }
        $data = $request->all();

        // if(isset($data['date_of_birth'])){
        //     $data['date_of_birth'] = Carbon::parse($data['date_of_birth']);
        // }



        ComfyProContract::create($data);
        return redirect()->route('luminus/comfy_pro_contract.index')->with('success','Comfy Pro Contract created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComfyProContract  $comfyProContract
     * @return \Illuminate\Http\Response
     */
    public function show(ComfyProContract $comfyProContract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComfyProContract  $comfyProContract
     * @return \Illuminate\Http\Response
     */
    public function edit(ComfyProContract $comfyProContract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComfyProContract  $comfyProContract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComfyProContract $comfyProContract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComfyProContract  $comfyProContract
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComfyProContract $comfyProContract)
    {
        //
    }
}
