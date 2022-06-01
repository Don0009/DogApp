<?php

namespace App\Http\Controllers\lampiris;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lampiris;
use Illuminate\Support\Facades\Validator;


use Carbon\Carbon;
use mikehaertl\pdftk\Pdf;
use \Mail;

use App\Http\Controllers\AmoCRMController;

use App\Http\Controllers\OKSign\OKSignController;
use Illuminate\Support\Facades\Auth;

class LampirisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lamps = Lampiris::all();
        return view('lampiris.index', compact('lamps'));
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
            return view('lampiris.create_fr', compact('lang'));
        }
        return view('lampiris.create_du', compact('lang'));
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

            'form_lang' => 'required',
            'title' => 'required',
            'language' => 'nullable',
            'name' => 'required',
            'f_name' => 'required',
            'date_of_birth' => 'required',
            'phone' => 'required',
            'gsm' => 'required',
            'mail' => 'required',
            'bank_account' => 'required',
            'people' => 'required',
            'adress' => 'required',
            'box' => 'required',
            'no' => 'required',
            'postal_code' => 'required',
            'locality' => 'required',
            'adress1' => 'required',

            'box1' => 'required',
            'no1' => 'required',
            'postal_code1' => 'required',
            'locality1' => 'nullable',
            'tip' => 'required',
            'year' => 'required',
            'counter_type' => 'required',
            'ean_code' => 'required',
            'meter_number1' => 'required',
            'counter_index1' => 'required',
            'meter_number2' => 'required',
            'counter_index2' => 'required',
            'meter_number3' => 'required',
            'counter_index3' => 'required',
            'meter_number4' => 'required',
            'counter_index4' => 'required',

            'meter_number5' => 'nullable',
            'counter_index5' => 'nullable',
            'meter_number6' => 'nullable',
            'counter_index6' => 'nullable',

            'annual_consu' => 'required',
            'annual_injection' => 'nullable',
            'moving' => 'required',
            'meter_open' => 'required',
            'current_provid' => 'required',
            'start_date' => 'required',
            'tip1' => 'required',

            'year1' => 'required',
            'ean_code1' => 'required',
            'meter_number' => 'required',
            'counter' => 'required',
            'annual_consu1' => 'required',
            'moving1' => 'required',
            'meter_open1' => 'required',
            'current_provid1' => 'required',
            'start_date1' => 'required',

            'promotional' => 'required',
            'electricity_gas' => 'required',
            'insulation' => 'required',
            'boilers' => 'required',
            'charging_vehicles' => 'required',
            'panels' => 'required',
            'insurance' => 'required',
            'partners' => 'required',
            'authorize' => 'required',
            'subscribe' => 'required',

            'activated' => 'nullable',
            'invoices' => 'required',
            'invoices1' => 'required',
            'bills' => 'required',
            'undersigned' => 'required',
            'iban' => 'required',

            'bic' => 'nullable',
            'date' => 'required',
            'the' => 'required',
            'name1' => 'required',
            'city' => 'required',
            'date1' => 'required',
            'agent' => 'required',
            'pricing_code' => 'required',
            'text' => 'required',



        ]);


        $pdf = new Pdf(public_path('unfilled_forms/lampiris/LCFR.pdf'), [

            'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe',

        ]);

        $data = $request->all();
        $data = $orange = Lampiris::create($data);




        $pdf_name = 'pdfs_generated/' . now()->timestamp . '.pdf';

        $data = $data->toArray();



        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);
           // dd($data);

//Mail
        $mail = Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
            $message->to('degis9000@gmail.com')
                ->subject("You have got new Contract Lampiris (French) Lead...!")
                ->cc(['lasha@studiodlvx.be'])
//                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
                ->attach(public_path($pdf_name), [
                    'as' => 'Contract Lampiris (French) Lead.pdf',
                    'mime' => 'application/pdf',
                ]);
            $message->from('no-reply@ecosafety.nyc');
        });
// Mail Code Ends


//Mail


        $amo = new AmoCRMController();
        $lead_data = [];
        $lead_data['NAME'] = $orange->name;
        $lead_data['PHONE'] = $orange->telephone;
        $lead_data['EMAIL'] = $orange->email_address;
        $lead_data['LEAD_NAME'] = 'Lampiris (French) Lead';
        $amo->add_lead($lead_data);
       // unlink(public_path($pdf_name));





       // return redirect()->route('proximus_multi_contact_fr.index')
        return redirect()->route('lampiris.index')->with('success', 'Lampiris Contract (French) Lead created successfully!');;



































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
