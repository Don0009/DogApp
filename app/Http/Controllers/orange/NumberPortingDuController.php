<?php

namespace App\Http\Controllers\orange;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NumberPortaingDu;
use Illuminate\Support\Facades\Validator;
use Mail;


use mikehaertl\pdftk\Pdf;


class NumberPortingDuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numdus = NumberPortaingDu::all();
        return view('orange.number_porting_du.index', compact('numdus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orange.number_porting_du.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            // // Validation
            $validator = Validator::make($request->all(), [

                // Validation Starts


                'title' => 'required',
                'language' => 'required',
                'subscription' => 'required',
                'name' => 'required',
                'f_name' => 'required',
                'street' => 'required',
                'no' => 'required',
                'box' => 'required',
                'town' => 'required',
                'postal_code' => 'required',
                'country' => 'required',
                'mail' => 'required',
                'id_card_no' => 'required',
                'phone_number' => 'required',
                'company_name' => 'required',
                'legal_status' => 'required',
                'client_num' => 'required',
                'company_num' => 'required',
                'authorized_represent' => 'required',
                'old_prepaid_subscription_1' => 'required',
                'code_mobile_1' => 'required',
                'num_mobile_1' => 'required',
                'voice_1' => 'required',
                'data_1' => 'required',
                'sim_card_1' => 'required',
                'customer_no_1' => 'required',
                'new_prepaid_subscription_1' => 'required',
                'temp_mobile_no_1' => 'required',
                'chosen_formula_1' => 'required',
                'new_sim_card_1' => 'required',
                'text_1' => 'required',
                'old_prepaid_subscription_2' => 'required',
                'code_mobile_2' => 'required',
                'num_mobile_2' => 'required',
                'voice_2' => 'required',
                'data_2' => 'required',
                'sim_card_2' => 'required',
                'customer_no_2' => 'required',
                'new_prepaid_subscription_2' => 'required',
                'temp_mobile_no_2' => 'required',
                'chosen_formula_2' => 'required',
                'new_sim_card_2' => 'required',
                'text_2' => 'required',
                'old_prepaid_subscription_3' => 'required',
                'code_mobile_3' => 'required',
                'num_mobile_3' => 'required',
                'voice_3' => 'required',
                'data_3' => 'required',
                'sim_card_3' => 'required',
                'customer_no_3' => 'required',
                'new_prepaid_subscription_3' => 'required',
                'temp_mobile_no_3' => 'required',
                'new_sim_card_3' => 'required',
                'chosen_formula_3' => 'required',
                'text_3' => 'required',
                'copies' => 'required',
                'date' => 'required',

                'customer_sig' => 'required',





            ]);


            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator);
            }

            // // Validation Ends

// Pdf Starts

            // $pdf = new Pdf(public_path('unfilled_forms/orange/writefilename.pdf'), [
            //     //            'command' => '/some/other/path/to/pdftk',
            //                 // or on most Windows systems:
            //                 // 'command' => '/usr/bin/pdftk',
            //                'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe',
            //     //            'useExec' => true,  // May help on Windows systems if execution fails

            // ]);
            // // Pdf Ends

        $data = $request->all();
        NumberPortaingDu::create($data);



        // $pdf_name = 'pdfs_generated/'. now()->timestamp . '.pdf';
        // //        dd($pdf_name);
        //         $data = $data->toArray();
        //         $result = $pdf->fillForm($data)->flatten()->needAppearances()
        //             ->saveAs($pdf_name);
        // //        chmod(public_path($pdf_name), 0777);

        // // Mail

        //   $mail =  Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
        //     $message->to('degis9000@gmail.com')
        //         ->subject("You have got new Number Porting (Du) Lead...!")
        //         ->cc(['lasha@studiodlvx.be'])
        // //                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
        //         ->attach(public_path($pdf_name), [
        //             'as' => 'MNP overdrachtsformulier Telenet (nieuwe abonnementen).pdf',
        //             'mime' => 'application/pdf',
        //         ]);
        //     $message->from('no-reply@ecosafety.nyc');
        // });
        // // Mail Code Ends



        //         dd($mail);
        // //        dd($result);


        return redirect()->route('number_porting_du.index');
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
