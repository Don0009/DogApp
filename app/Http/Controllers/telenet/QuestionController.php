<?php

namespace App\Http\Controllers\telenet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TelenetQuestion;
use Illuminate\Support\Facades\Validator;


use mikehaertl\pdftk\Pdf;
use Mail;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('telenet.question.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('telenet.question.create');
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









            'date_of_request' => 'required',
            'first_name' => 'required',
            'id_card_number' => 'required',

            'name' => 'required',
            'cell_phone_number' => 'required',
            'email_address_1' => 'required',
            'address' => 'required',
            'postcode_1' => 'required',
            'city' => 'required',
            'date_of_birth' => 'required',
            'birth_place' => 'required',

            'business' => 'required',
            'company_form' => 'required',
            'company_number' => 'required',
            'customer_address' => 'required',
            'birth_place' => 'required',
            'postcode_2' => 'required',
            'city_2' => 'required',
            'first_name_contact_person' => 'required',
            'name_contact_person' => 'required',
            'cell_phone_2' => 'required',
            'email_address_2' => 'required',
            'if_different_from_customer_address_billing' => 'required',
            'if_different_from_customer_address_installation' => 'required',
            'selected_product' => 'required',
            'desired_install_date' => 'required',
            'wish_comments' => 'required',


        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        // Validation Ends

        $pdf = new Pdf(public_path('unfilled_forms/telenet/telenet_question_nofill.pdf'), [
            //            'command' => '/some/other/path/to/pdftk',
                        // or on most Windows systems:
                        // 'command' => '/usr/bin/pdftk',
                       'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe',
            //            'useExec' => true,  // May help on Windows systems if execution fails

        ]);

        // dd($pdf);

        // data copied from Orange

        $data = $request->all();
        $data = $orange =  TelenetQuestion::create($data);

        $pdf_name = 'pdfs_generated/'. now()->timestamp . '.pdf';
//        dd($pdf_name);
        $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);
//        chmod(public_path($pdf_name), 0777);

// Mail

  Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
    $message->to('degis9000@gmail.com')
        ->subject("You have got new Telenet Lead...!")
        ->cc(['lasha@studiodlvx.be'])
//                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
        ->attach(public_path($pdf_name), [
            'as' => 'Telenet contract (nieuwe abonnementen).pdf',
            'mime' => 'application/pdf',
        ]);
    $message->from('no-reply@ecosafety.nyc');
});
// Mail Code Ends



        // dd($mail);
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
