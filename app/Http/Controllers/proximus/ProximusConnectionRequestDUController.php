<?php

namespace App\Http\Controllers\proximus;

use App\Http\Controllers\AmoCRMController;

use App\Http\Controllers\OKSign\OKSignController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proximus\ProximusConnectionRequestDU;
use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;
use mikehaertl\pdftk\Pdf;
use \Mail;


class ProximusConnectionRequestDUController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $proximus = ProximusConnectionRequestDU::all();
        return view('proximus.connection_request_du.index', compact('proximus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('proximus.connection_request_du.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $validator = Validator::make($request->all(), [


            'partner'=> 'required',
            'identity'=> 'required',
            'seller'=> 'required',
            'gsm'=> 'required',
            'person_type'=> 'required',
            'validity_of_id'=> 'required',
            'be'=> 'required',
            'VAT_is_exempted'=> 'required',
            'is_source_of_income'=> 'required',
            'number_of_customer'=> 'required',
            'is_title'=> 'required',
            'name'=> 'required',
            'first_name'=> 'required',
            'name_of_company'=> 'required',
            'street'=> 'required',
            'no'=> 'required',
            'bus'=> 'required',
            'postcode'=> 'required',
            'place'=> 'required',
            'country'=> 'required',
            'email'=> 'required',
            'telephone'=> 'required',
            'gsm_2'=> 'required',
            'date_of_birth'=> 'required',
            'contact_person_name'=> 'required',
            'contact_person_telephone'=> 'required',
            'is_title_2'=> 'required',
            'is_install_address_same'=> 'required',
            'install_address'=> 'required',
            'invoice_receive_method'=> 'required',
            'email_2'=> 'required',
            'gsm_3'=> 'required',
            'bank_account_number'=> 'required',
            'adres'=> 'required',
            'is_billing_address_same_or_not'=> 'required',
            'name_or_number_of_previous_owner'=> 'required',
            'wish_to_receive_info_means'=> 'required',
            'tv_packs_options'=> 'required',
            'mobile_packs_options'=> 'required',
            'epic_packs_options'=> 'required',
            'other_packages_starter'=> 'required',
            'met_mobilus_options'=> 'required',
            'mobilus_full_control_options'=> 'required',
            'business_package_types'=> 'required',
            'mobile_business_types'=> 'required',
            'other_options_packages'=> 'required',
            'internet_customer_phase'=> 'required',
            'landline_r'=> 'required',
            'cell_number_w/o_landline'=> 'required',
            'internet_types'=> 'required',
            'internet_types_security'=> 'required',
            'tv_customer_phase'=> 'required',
            'line_number'=> 'required',
            'tv_packages'=> 'required',
            'tv_package_options'=> 'required',
            'fixed_line_customer_phase'=> 'required',
            'current_line_number'=> 'required',
            'current_line_number_text'=> 'required',
            'add_cps_document'=> 'required',
            'phone_line_package_types'=> 'required',
            'other_tariff_plan_radio'=> 'required',
            'other_tariff_plan_text'=> 'required',
            'seceret_number_radio'=> 'required',
            'seceret_number_text'=> 'required',
            'smart_services_radio'=> 'required',
            'smart_services_text'=> 'required',
            'optical_fibre_radio'=> 'required',
            'optical_fibre_package_type'=> 'required',
            'optical_fibre_package_type_3'=> 'required',
            'multi_line_license'=> 'required',
            'ip_box_radio'=> 'required',
            'bizz_call_connect_radio'=> 'required',
            'mob_tele_pack_type'=> 'required',
            'payngo_radio'=> 'required',
            'payngo_text'=> 'required',
            'cell_number_g'=> 'required',
            'cell_number_g_radio'=> 'required',
            'lang'=> 'required',
            'existing_proximus_customer'=> 'required',
            'sim_card_number'=> 'required',
            'sim_card_type'=> 'required',
            'make_model_of_device'=> 'required',
            'residential_met_mobilus'=> 'required',
            'residential_met_mobilus_limit_full'=> 'required',
            'mobile_social_app'=> 'required',
            'epic_offer'=> 'required',
            'joint_data_offer'=> 'required',
            'bizz_mobile_size_p_i'=> 'required',
            'joint_data_offer_p_i'=> 'required',
            'mobile_social_apps_p_i'=> 'required',
            'bizz_international_options'=> 'required',
            'bizz_switch_i'=> 'required',
            'second_number_text'=> 'required',
            'second_number_radio'=> 'required',
            'mobile_internet_i_size'=> 'required',
            'international_rome_text'=> 'required',
            'voice_i'=> 'required',
            'data_i'=> 'required',
            'is_connection_present_in_house'=> 'required',
            'mobile_modem_config_type'=> 'required',
            'device_delivery_type'=> 'required',
            'other_delivery_type'=> 'required',
            'other_delivery_type_radio'=> 'required',
            'kit_to_install_k'=> 'required',
            'date_to_install_k'=> 'required',
            'time_of_day_k'=> 'required',
            'free_resources'=> 'required',
            'desired_employment_date'=> 'required',
            'refer_number_k'=> 'required',
            'promotion_l'=> 'required',
            'wish_tbi_tele_directory_m'=> 'required',
            'name_or_company_name_m'=> 'required',
            'address_choose_m'=> 'required',
            'consent_m'=> 'required',
            'comment_n'=> 'required',
            'at_o'=> 'required',
            'on_o'=> 'required',

        ]);


        $data = $request->all();
        $data['user_id'] = Auth::user()->id;


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        //dd(env('PDFTK_PATH'));


        $data = $request->all();
        $data = $orange = ProximusConnectionRequestDU::create($data);

        $pdf = new Pdf(public_path('unfilled_forms/proximus/connection_request_du/DCR20.pdf'), [


            'command' => env('PDFTK_PATH'),


        ]);

       // dd($pdf);

        $pdf_name = 'pdfs_generated/' . now()->timestamp . '.pdf';

        $data = $data->toArray();
        $result = $pdf->fillForm($data)->flatten()->needAppearances()
            ->saveAs($pdf_name);

//Mail
//         $mail = Mail::send('emails.report', $data, function ($message) use ($data, $pdf, $pdf_name)

//         {
//             $message->to('degis9000@gmail.com')
//                 ->subject("You have got new Proximus Connection Request (Dutch) Lead...!")
//                 ->cc(['lasha@studiodlvx.be'])
// //                ->bcc(['asim.raza@outstarttech.com', 'info@ecosafety.nyc', 'dev@weanio.com'])
//                 ->attach(public_path($pdf_name), [
//                     'as' => 'Proximus Connection Request (Dutch) Lead.pdf',
//                     'mime' => 'application/pdf',
//                 ]);
//             $message->from('no-reply@ecosafety.nyc');
//         }
//     );
// Mail Code Ends


//Mail


        $amo = new AmoCRMController();
        $lead_data = [];
        $lead_data['NAME'] = $orange->name;
        $lead_data['PHONE'] = $orange->telephone;
        $lead_data['EMAIL'] = $orange->email_address;
        $lead_data['LEAD_NAME'] = 'Proximus Connection Request (Dutch) Lead';
        $amo->add_lead($lead_data);
        //unlink(public_path($pdf_name));

        return redirect()->route('proximus_connection_request_du.index')->with('success', 'Proximus Connection Lead (Dutch) created successfully!');

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
