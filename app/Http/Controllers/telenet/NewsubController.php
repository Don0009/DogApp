<?php

namespace App\Http\Controllers\telenet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TelenetNewSub;
use Illuminate\Support\Facades\Validator;
use Mail;


use mikehaertl\pdftk\Pdf;

class NewsubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = TelenetNewSub::all();
        return view('telenet.new_sub.index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('telenet.new_sub.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { // start

        $validator = Validator::make($request->all(), [

            // 'category_name' => 'required|unique:categories|max:255',


            'call_number_1' => 'required',
            'call_number_2' => 'required',
            'call_number_3' => 'required',
            'call_number_4' => 'required',
            'call_number_5' => 'required',
            'call_number_6' => 'required',
            'call_number_7' => 'required',
            'call_number_8' => 'required',

            'sim_card_other_operator_1' => 'required',
            'sim_card_other_operator_2' => 'required',
            'sim_card_other_operator_3' => 'required',
            'sim_card_other_operator_4' => 'required',
            'sim_card_other_operator_5' => 'required',
            'sim_card_other_operator_6' => 'required',
            'sim_card_other_operator_7' => 'required',
            'sim_card_other_operator_8' => 'required',


            'customer_num_other_operator_1' => 'required',
            'customer_num_other_operator_2' => 'required',
            'customer_num_other_operator_3' => 'required',
            'customer_num_other_operator_4' => 'required',
            'customer_num_other_operator_5' => 'required',
            'customer_num_other_operator_6' => 'required',
            'customer_num_other_operator_7' => 'required',
            'customer_num_other_operator_8' => 'required',


            'call_number_9' => 'required',
            'call_number_10' => 'required',

            'current_operator_1' => 'required',
            'current_operator_2' => 'required',

            'customer_num_other_operator_9' => 'required',
            'customer_num_other_operator_10' => 'required',


            'date_signature_customer' => 'required',


        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        // Validation Ends

        $pdf = new Pdf(public_path('unfilled_forms/telenet/new_sub_notfill.pdf'), [

            'command' => env('PDFTK_PATH'),
            //            'useExec' => true,  // May help on Windows systems if execution fails

        ]);

        // dd($pdf);

        // data copied from Orange

        $data = $request->all();
        $data = $orange = TelenetNewSub::create($data);

        $pdf_name = 'pdfs_generated/' . now()->timestamp . '.pdf';
//        dd($pdf_name);
        $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);
//        chmod(public_path($pdf_name), 0777);

// Mail

        $mail = Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
            $message->to('degis9000@gmail.com')
                ->subject("You have got new Telenet Lead...!")
                ->cc(['lasha@studiodlvx.be'])
//                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
                ->attach(public_path($pdf_name), [
                    'as' => 'MNP overdrachtsformulier Telenet (nieuwe abonnementen).pdf',
                    'mime' => 'application/pdf',
                ]);
            $message->from('no-reply@ecosafety.nyc');
        });
// Mail Code Ends



//        dd($result);


        // dd($request->all());
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }


    } // end

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
