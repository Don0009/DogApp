<?php

namespace App\Http\Controllers\telenet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContractApp;
use Illuminate\Support\Facades\Validator;


use mikehaertl\pdftk\Pdf;
use Mail;

class ContractAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //app\Http\Controllers\telenet\ContractAppController.php
        return view('telenet.contract_app.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('telenet.contract_app.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validation Ends


        $validator = Validator::make($request->all(), [

            // 'category_name' => 'required|unique:categories|max:255',
            'name' => 'required',
            'first_name' => 'required',
            'contact_number' => 'required',
            'email_address' => 'required',
            'facility_address' => 'required',
            'postal_code' => 'required',
            'town' => 'required',
            'date_of_birth' => 'required',
            'place_of_birth' => 'required',
            'identity_card_number' => 'required',
            'company' => 'required',

            'company_form' => 'required',
            'business_number' => 'required',
            'plant_address' => 'required',
            'postal_code_2' => 'required',
            'town_2' => 'required',
            'billing_address' => 'required',
            'first_last_name_contact' => 'required',
            'contact_number_2' => 'required',
            'email_address_2' => 'required',

            'selected_product' => 'required',
            'preferred_date_of_installation' => 'required',
            'remarks' => 'required',



        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        // Validation Ends

        $pdf = new Pdf(public_path('unfilled_forms/telenet/contractapp_nofill.pdf'), [
            //            'command' => '/some/other/path/to/pdftk',
                        // or on most Windows systems:
                        // 'command' => '/usr/bin/pdftk',
                       'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe',
            //            'useExec' => true,  // May help on Windows systems if execution fails

        ]);

        // dd($pdf);

        // data copied from Orange

        $data = $request->all();
        $data = $orange =  ContractApp::create($data);

        $pdf_name = 'pdfs_generated/'. now()->timestamp . '.pdf';
//        dd($pdf_name);
        $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);
//        chmod(public_path($pdf_name), 0777);

// Mail

  $mail =  Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
    $message->to('degis9000@gmail.com')
        ->subject("You have got new Telenet Lead...!")
        ->cc(['lasha@studiodlvx.be'])
//                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
        ->attach(public_path($pdf_name), [
            'as' => 'Telenet Contract Aanvraag (FRANS).pdf',
            'mime' => 'application/pdf',
        ]);
    $message->from('no-reply@ecosafety.nyc');
});
// Mail Code Ends



        dd($mail);
//        dd($result);





        // dd($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }


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
