<?php

namespace App\Http\Controllers\base;

use App\Http\Controllers\AmoCRMController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NumberRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use mikehaertl\pdftk\Pdf;
use Mail;

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
            'date2' => 'required',


        ]);

        if ($request->form_lang == 'fr') {

            $pdf = new Pdf(public_path('unfilled_forms/base/NUMBER1_FR.pdf'), [

                'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe'
            ]);
        } else {
            $pdf = new Pdf(public_path('unfilled_forms/base/NUMBER_DU.pdf'), [

                'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe'

            ]);
        }


        $data = $request->all();
        $number = NumberRequest::create($data);

        $pdf_name = 'pdfs_generated/' . now()->timestamp . '.pdf';

        // $data = $data->toArray();
        $data['memo_date'] = Carbon::parse($request->memo_date)->isoFormat('YY-MM-DD');

        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);


        //Mail
        $mail = Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
            $message->to('raokhanwala149@gmail.com')
                ->subject("You have got new Octa Form Lead...!")
                ->cc(['lasha@studiodlvx.be'])
                //                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
                ->attach(public_path($pdf_name), [
                    'as' => 'Base Form.pdf',
                    'mime' => 'Number Request/pdf',
                ]);
            $message->from('no-reply@ecosafety.nyc');
        });
        //Mail Code Ends


        $amo = new AmoCRMController();
        $lead_data = [];


        $lead_data['NAME'] = $number->name;
        $lead_data['PHONE'] = $number->phone;
        $lead_data['EMAIL'] = $number->mail;
        $lead_data['LEAD_NAME'] = 'Octa Form Lead!';
        $amo->add_lead($lead_data);
        unlink(public_path($pdf_name));




        NumberRequest::create($data);
        return redirect()->route('number_request.index')->with('success', 'Number Form Form created successfully!');
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
