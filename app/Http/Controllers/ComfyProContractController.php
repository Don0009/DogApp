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

            'client_number' => 'required',
            'contact_id' => 'required',
            'dealer_id' => 'required',
            'seller_id' => 'required',
            'present_to_luminus' => 'required',
            'client_number_1' => 'required',
            'company_form' => 'required',
            'company_number' => 'required',
            'dhr' => 'required',
            'nl' => 'required',
            'name' => 'required',
            'first_name' => 'required',
            'address' => 'required',
            'nr' => 'required',
            'bus' => 'required',
            'post_code' => 'required',
            'township' => 'required',
            'e_mail' => 'required',
            'tel_nr' => 'required',
            'faxnr' => 'required',
            'gsm_nr' => 'required',
            'address_1' => 'required',
            'nr_1' => 'required',
            'bus_1' => 'required',
            'deep' => 'required',
            'post_code_1' => 'required',
            'township_1' => 'required',
            'ean_number' => 'required',
            'current_supplier' => 'required',
            'desired_switchover_date' => 'required',
            'ean_number_1' => 'required',
            'current_supplier_1' => 'required',
            'name_your_network_operator_1' => 'required',
            'payment_for_electricity' => 'required',
            'advance_gas' => 'required',
            'kWh_dag' => 'required',
            'kWh_nacht' => 'required',
            'kWh_excl_nacht' => 'required',
            'annual_consumption' => 'required',
            'name_1' => 'required',
            'place_1' => 'required',
            'referte' => 'required',
            'name' => 'required',
            'adres' => 'required',
            'post_code_2' => 'required',
            'stad' => 'required',
            'land' => 'required',
            'iban' => 'required',
            'code' => 'required',
            'plaats' => 'required',
        ]);
           // dd($request->all());

        // dd($validator,$request->all());
        if($validator->fails()){


            return redirect()->back()->withErrors($validator);
        }
        $data = $request->all();

        if(isset($data['datum'])){
            $data['datum'] = Carbon::parse($data['datum']);
        }
        if(isset($data['desired_switchover_date'])){
            $data['desired_switchover_date'] = Carbon::parse($data['desired_switchover_date']);
        }
        if(isset($data['desired_switchover_date_1'])){
            $data['desired_switchover_date_1'] = Carbon::parse($data['desired_switchover_date_1']);
        }
        if(isset($data['date_1'])){
            $data['date_1'] = Carbon::parse($data['date_1']);
        }



        $pdf = new Pdf(public_path('unfilled_forms/luminus/CPC.pdf'), [
            //            'command' => '/some/other/path/to/pdftk',
                        // or on most Windows systems:
                        // 'command' => '/usr/bin/pdftk',
                       'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe',
            //            'useExec' => true,  // May help on Windows systems if execution fails

        ]);

        // dd($pdf);

        // data copied from Orange

        $data=ComfyProContract::create($data);

        $pdf_name = 'pdfs_generated/'. now()->timestamp . '.pdf';
//        dd($pdf_name);
        $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);


            $mail =  Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
                $message->to('bazighminhas1@gmail.com')
                    ->subject("You have got a Orange Internet TV lead...!")
                    ->cc(['lasha@studiodlvx.be'])
            //                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
                    ->attach(public_path($pdf_name), [
                        'as' => 'name.pdf',
                        'mime' => 'application/pdf',
                    ]);
                $message->from('no-reply@ecosafety.nyc');
            });
            // Mail Code Ends
                    dd($mail);
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
        return redirect()->route('comfy_pro_contract.index')->with('success','Comfy Pro Contract created successfully!');
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
