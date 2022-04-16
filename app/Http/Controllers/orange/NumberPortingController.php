<?php

namespace App\Http\Controllers\orange;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NumberPorting;
use Illuminate\Support\Facades\Validator;
use Mail;


use mikehaertl\pdftk\Pdf;

class NumberPortingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $nums = NumberPorting::all();
        return view('orange.number_porting.index', compact('nums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        if ($request->lang == 'fr') {
            return view('orange.number_porting.create_dut');
        }
        return view('orange.number_porting.create');
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

            // Validation Starts


            'subscription' => 'required',

            'language' => 'required',

            'title' => 'required',

            'customer_type' => 'required',

            'name' => 'required',

            'f_name' => 'required',

            'street' => 'required',

            'no' => 'required',

            'box' => 'required',

            'postal_code' => 'required',

            'town' => 'required',

            'country' => 'required',

            'id_card' => 'required',

            'mail' => 'required',

            'busines' => 'required',

            'company_number' => 'required',

            'legal_status' => 'required',

            'company_name' => 'required',

            'client_num' => 'required',

            'contact_person' => 'required',

            'card_1' => 'required',

            'mobile_number_1' => 'required',

            'sim_number_old_1' => 'required',

            'sim_number_orange_1' => 'required',

            'customer_number_1' => 'required',

            'card_2' => 'required',

            'mobile_number_2' => 'required',

            'sim_number_old_2' => 'required',

            'sim_number_orange_2' => 'required',

            'customer_number_2' => 'required',

            'card_3' => 'required',

            'mobile_number_3' => 'required',

            'sim_number_old_3' => 'required',

            'sim_number_orange_3' => 'required',

            'customer_number_3' => 'required',

            'duplicate' => 'required',
            'date' => 'required',

        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        // Validation Ends

        // Pdf Starts

        $pdf = new Pdf(public_path('unfilled_forms/orange/writefilename.pdf'), [
            //            'command' => '/some/other/path/to/pdftk',
                        // or on most Windows systems:
                        // 'command' => '/usr/bin/pdftk',
                       'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe',
            //            'useExec' => true,  // May help on Windows systems if execution fails

        ]);
        // Pdf Ends


        $data = $request->all();
        // dd($data);
        NumberPorting::create($data);



        // $pdf_name = 'pdfs_generated/'. now()->timestamp . '.pdf';
        // //        dd($pdf_name);
        //         $data = $data->toArray();
        //         $result = $pdf->fillForm($data)->flatten()->needAppearances()
        //             ->saveAs($pdf_name);
        // //        chmod(public_path($pdf_name), 0777);

        // // Mail

        //   $mail =  Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
        //     $message->to('degis9000@gmail.com')
        //         ->subject("You have got new Number Porting Lead...!")
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



        return redirect()->route('number_porting.index');

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
