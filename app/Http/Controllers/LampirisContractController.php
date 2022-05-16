<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\LampirisContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LampirisContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lampiris_contracts = LampirisContract::all();
        return view ('lampiris_contract.index',compact('lampiris_contracts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lampiris_contract.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LampirisContract  $lampirisContract
     * @return \Illuminate\Http\Response
     */
    public function show(LampirisContract $lampirisContract)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LampirisContract  $lampirisContract
     * @return \Illuminate\Http\Response
     */
    public function edit(LampirisContract $lampirisContract)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LampirisContract  $lampirisContract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LampirisContract $lampirisContract)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LampirisContract  $lampirisContract
     * @return \Illuminate\Http\Response
     */
    public function destroy(LampirisContract $lampirisContract)
    {
        //
    }
}
