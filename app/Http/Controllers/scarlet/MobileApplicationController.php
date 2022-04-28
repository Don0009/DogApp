<?php

namespace App\Http\Controllers\scarlet;

use App\MobileApplication;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use mikehaertl\pdftk\Pdf;
use Mail;
use App\Http\Controllers\AmoCRMController;

class MobileApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobiles = MobileApplication::all();
        return view('scarlet.mobile_application.index', compact('mobiles'));
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
            return view('scarlet.mobile_application.create_fr', compact('lang'));
        }

        return view('scarlet.mobile_application.create_du', compact('lang'));
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

            'f_name' => 'required',
            'name' => 'required',
            'id_card_number' => 'required',
            'adress' => 'required',
            'no' => 'required',
            'box' => 'required',
            'postal_code' => 'required',
            'commune' => 'required',
            'phone' => 'required',
            'gsm' => 'required',
            'mail' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'language' => 'required',
            'vat' => 'nullable',
            'new_sim_number' => 'required',
            'mobile_subscription' => 'nullable',
            'subscription1' => 'nullable',
            'subscription2' => 'nullable',
            'subscription3' => 'nullable',
            'subscription4' => 'nullable',
            'subscription5' => 'nullable',
            'subscription6' => 'nullable',
            'sub_name1' => 'nullable',
            'sub_name2' => 'nullable',
            'sub_name3' => 'nullable',
            'sub_name4' => 'nullable',
            'sub_name5' => 'nullable',
            'new_num1' => 'nullable',
            'new_num2' => 'nullable',
            'new_num3' => 'nullable',
            'new_num4' => 'nullable',
            'new_num5' => 'nullable',
            'num_transfer1' => 'nullable',
            'num_transfer2' => 'nullable',
            'num_transfer3' => 'nullable',
            'num_transfer4' => 'nullable',
            'num_transfer5' => 'nullable',
            'payment_method' => 'required',
            'iban_number' => 'required',
            'name_account_holder' => 'required',
            'submitted_contact' => 'nullable',
            'made_in' => 'nullable',
            'the' => 'nullable',
            'signature' => 'required',
            'dealer_reference' => 'required',
            'agent' => 'required',
            'mob_num1' => 'required',
            'current_payment_method1' => 'required',
            'current_sim_number1' => 'required',
            'name1' => 'required',
            'f_name1' => 'required',
            'customer_number1' => 'required',
            'current_operator1' => 'required',
            'date1' => 'required',
            'signature1' => 'required',

            'mob_num2' => 'required',
            'current_payment_method2' => 'required',
            'current_sim_number2' => 'required',
            'name2' => 'required',
            'f_name2' => 'required',
            'customer_number2' => 'required',
            'current_operator2' => 'required',
            'date2' => 'required',
            'signature2' => 'required',

            'mob_num3' => 'required',
            'current_payment_method3' => 'required',
            'current_sim_number3' => 'required',
            'name3' => 'required',
            'f_name3' => 'required',
            'customer_number3' => 'required',
            'current_operator3' => 'required',
            'date3' => 'required',
            'signature3' => 'required',

            'mob_num4' => 'required',
            'current_payment_method4' => 'required',
            'current_sim_number4' => 'required',
            'name4' => 'required',
            'f_name4' => 'required',
            'customer_number4' => 'required',
            'current_operator4' => 'required',
            'date4' => 'required',
            'signature4' => 'required',

            'mob_num5' => 'required',
            'current_payment_method5' => 'required',
            'current_sim_number5' => 'required',
            'name5' => 'required',
            'f_name5' => 'required',
            'customer_number5' => 'required',
            'current_operator5' => 'required',
            'date5' => 'required',
            'signature5' => 'required',
        ]);

        if ($request->form_lang == 'fr') {

            $pdf = new Pdf(public_path('unfilled_forms/scarlet/MAF.pdf'), [

                'command' => env('PDFTK_PATH'),
            ]);
        } else {
            $pdf = new Pdf(public_path('unfilled_forms/scarlet/AFDU.pdf'), [

                'command' => env('PDFTK_PATH'),
            ]);
        }

        $data = $request->all();

        $scarlet = MobileApplication::create($data);

        $pdf_name = 'pdfs_generated/' . now()->timestamp . '.pdf';

        // $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);


        //Mail
        // $mail = Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
        //     $message->to('raokhanwala149@gmail.com')
        //         ->subject("You have got new Application Form Lead...!")
        //         ->cc(['lasha@studiodlvx.be'])
        //         //                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
        //         ->attach(public_path($pdf_name), [
        //             'as' => 'Application Form.pdf',
        //             'mime' => 'application/pdf',
        //         ]);
        //     $message->from('no-reply@ecosafety.nyc');
        // });
        // Mail Code Ends


        $amo = new AmoCRMController();
        $lead_data = [];


        $lead_data['NAME'] = $scarlet->name;
        $lead_data['PHONE'] = $scarlet->phone;
        $lead_data['EMAIL'] = $scarlet->mail;
        $lead_data['LEAD_NAME'] = 'Application Form Lead!';
        $amo->add_lead($lead_data);
        unlink(public_path($pdf_name));

        return redirect()->route('mobile_application_form.index')->with('success', 'Appliction Form created successfully!');
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
