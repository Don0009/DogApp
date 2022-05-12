<?php

namespace App\Http\Controllers\proximus;

use App\Http\Controllers\OKSign\OKSignController;
use Illuminate\Support\Facades\Auth;
use App\Models\ProximusMultiContactFormDU;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\AmoCRMController;


use Carbon\Carbon;
use mikehaertl\pdftk\Pdf;
use \Mail;

class ProximusMultiContactDUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //
         $proximus = ProximusMultiContactFormDU::all();

         return view('proximus.multi_contact_du.index', compact('proximus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proximus.multi_contact_du.create');

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

        $validator = Validator::make($request->all(), [



            'client_name'=> 'required',
            'phone'=> 'required',
            'sim_phase_r'=> 'required',
            'sim_type_r'=> 'required',
            'sim_num'=> 'required',
            'gsm_num'=> 'required',
            'proximus_subs_r'=> 'required',
            'mobilus_r'=> 'required',
            'mobilus_full_r'=> 'required',
            'app_social'=> 'required',
            'mob_epic_flex'=> 'required',
            'gb_package'=> 'required',
            'package_type_1'=> 'required',

            'sim_phase_r_2'=> 'required',
            'sim_type_r_2'=> 'required',
            'sim_num_2'=> 'required',
            'gsm_num_2'=> 'required',
            'proximus_subs_r_2'=> 'required',
            'mobilus_r_2'=> 'required',
            'mobilus_full_r_2'=> 'required',
            'app_social_2'=> 'required',
            'mob_epic_flex_2'=> 'required',
            'gb_package_2'=> 'required',
            'package_type_r_2'=> 'required',


            'sim_phase_r_3'=> 'required',
            'sim_type_r_3'=> 'required',
            'sim_num_3'=> 'required',
            'gsm_num_3'=> 'required',
            'proximus_subs_r_3'=> 'required',
            'mobilus_r_3'=> 'required',
            'app_social_3'=> 'required',
            'mobilus_full_r_3'=> 'required',
            'mob_epic_flex_3'=> 'required',
            'gb_package_3'=> 'required',
            'package_type_r_3'=> 'required',



            'sim_phase_r_4'=> 'required',
            'sim_type_r_4'=> 'required',
            'sim_num_4'=> 'required',
            'gsm_num_4'=> 'required',
            'proximus_subs_r_4'=> 'required',
            'mobilus_r_4'=> 'required',
            'mobilus_full_r_4'=> 'required',
            'app_social_4'=> 'required',
            'mob_epic_flex_4'=> 'required',
            'gb_package_4'=> 'required',
            'package_type_r_4'=> 'required',


            'sim_phase_r_5'=> 'required',
            'sim_type_r_5'=> 'required',
            'sim_num_5'=> 'required',
            'gsm_num_5'=> 'required',
            'proximus_subs_r_5'=> 'required',
            'mobilus_r_5'=> 'required',
            'mobilus_full_r_5'=> 'required',
            'app_social_5'=> 'required',
            'mob_epic_flex_5'=> 'required',
            'gb_package_5'=> 'required',
            'package_type_r_5'=> 'required',

            'sim_phase_r_pro_1'=> 'required',
            'sim_type_r_pro_1'=> 'required',
            'sim_num_pro_1'=> 'required',
            'gsm_num_pro_1'=> 'required',
            'proximus_subs_pro_1'=> 'required',
            'mobilus_r_pro_1'=> 'required',
            'mob_epic_flex_pro_1'=> 'required',
            'app_social_r_pro_1'=> 'required',
            'gb_package_pro_1'=> 'required',
            'package_type_r_pro_1'=> 'required',


            'sim_phase_r_pro_2'=> 'required',
            'sim_type_r_pro_2'=> 'required',
            'sim_num_pro_2'=> 'required',
            'gsm_num_pro_2'=> 'required',
            'proximus_subs_pro_2'=> 'required',
            'mobilus_r_pro_2'=> 'required',
            'mob_epic_flex_pro_2'=> 'required',
            'app_social_r_pro_2'=> 'required',
            'gb_package_pro_2'=> 'required',
            'package_type_r_pro_2'=> 'required',


            'sim_phase_r_pro_3'=> 'required',
            'sim_type_r_pro_3'=> 'required',
            'sim_num_pro_3'=> 'required',
            'gsm_num_pro_3'=> 'required',
            'proximus_subs_pro_3'=> 'required',
            'mobilus_r_pro_3'=> 'required',
            'mob_epic_flex_pro_3'=> 'required',
            'app_social_r_pro_3'=> 'required',
            'gb_package_pro_3'=> 'required',
            'package_type_r_pro_3'=> 'required',

            'sim_phase_r_pro_4'=> 'required',
            'sim_type_r_pro_4'=> 'required',
            'sim_num_pro_4'=> 'required',
            'gsm_num_pro_4'=> 'required',
            'proximus_subs_pro_4'=> 'required',
            'mobilus_r_pro_4'=> 'required',
            'mob_epic_flex_pro_4'=> 'required',
            'app_social_r_pro_4'=> 'required',
            'gb_package_pro_4'=> 'required',
            'package_type_r_pro_4'=> 'required',


            'sim_phase_r_pro_5'=> 'required',
            'sim_type_r_pro_5'=> 'required',
            'sim_num_pro_5'=> 'required',
            'gsm_num_pro_5'=> 'required',
            'proximus_subs_pro_5'=> 'required',
            'mobilus_r_pro_5'=> 'required',
            'mob_epic_flex_pro_5'=> 'required',
            'app_social_r_pro_5'=> 'required',
            'gb_package_pro_5'=> 'required',
            'package_type_r_pro_5'=> 'required',





        ]);



        $data = $request->all();
        $data['user_id'] = Auth::user()->id;

       // dd($data);


        $pdf = new Pdf(public_path('unfilled_forms/telenet/contractapp_nofill.pdf'), [

            'command' => 'C:\Program Files (x86)\PDFtk Server\bin\pdftk.exe'

        ]);



        $data = $request->all();
        $data = $orange = ProximusMultiContactFormDU::create($data);

        $pdf_name = 'pdfs_generated/' . now()->timestamp . '.pdf';

        $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);

//Mail
        $mail = Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name) {
            $message->to('degis9000@gmail.com')
                ->subject("You have got new Proximus Multi Contact (French) Lead...!")
                ->cc(['lasha@studiodlvx.be'])
//                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
                ->attach(public_path($pdf_name), [
                    'as' => 'Proximus Multi Contact (French) Lead.pdf',
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
        $lead_data['LEAD_NAME'] = 'Proximus Multi Contact (French) Lead';
        $amo->add_lead($lead_data);
        unlink(public_path($pdf_name));





        return redirect()->route('proximus_multi_contact_du.index')->with('success', 'Proximus Multi Contact (French) Lead created successfully!');














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
