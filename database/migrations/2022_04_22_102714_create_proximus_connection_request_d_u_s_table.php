<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProximusConnectionRequestDUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proximus_connection_request_d_u_s', function (Blueprint $table) {
            $table->id();

//             $table->string('partner');
//             $table->string('identity');
//             $table->string('seller');
//             $table->string('gsm');
//             $table->string('person_type');
//             $table->date('validity_of_id');
//            // $table->string('copy_of_id_card');
//             $table->string('be');

//             $table->string('VAT_is_exempted');
//             $table->string('is_source_of_income');
//             $table->string('number_of_customer');
//             $table->string('is_title');
//             $table->string('name');
//             $table->string('first_name');
//             $table->string('name_of_company');
//             $table->string('street');
//             $table->string('no');
//             $table->string('bus');
//             $table->string('postcode');
//             $table->string('place');
//             $table->string('country');
//             $table->string('email');
//             $table->string('telephone');
//             $table->string('gsm_2');
//             $table->date('date_of_birth');
//             $table->string('contact_person_name');
//             $table->string('contact_person_telephone');
//             $table->string('is_title_2');
//             $table->string('is_install_address_same');
//             $table->string('install_address');
//             $table->string('invoice_receive_method');
//             $table->string('email_2');
//             $table->string('gsm_3');
//             $table->string('bank_account_number');
//             $table->string('adres');
//             $table->string('is_billing_address_same_or_not');
//             $table->string('name_or_number_of_previous_owner');
//             $table->string('wish_to_receive_info_means');


//             // Choose your Package

//             $table->text('tv_packs_options_a')->nullable();
//             $table->text('tv_packs_options_b')->nullable();
//             $table->text('tv_packs_options_c')->nullable();
//             $table->text('tv_packs_options_d')->nullable();






//             //Mobile Phone

//             $table->text('mobile_packs_options_a')->nullable();
//             $table->text('mobile_packs_options_b')->nullable();
//             $table->text('mobile_packs_options_c')->nullable();
//             $table->text('mobile_packs_options_d')->nullable();
//             $table->text('mobile_packs_options_e')->nullable();
//             $table->text('mobile_packs_options_f')->nullable();
//             $table->text('mobile_packs_options_g')->nullable();
//             $table->text('mobile_packs_options_h')->nullable();




//             $table->text('epic_packs_options_g')->nullable();
//             $table->text('epic_packs_options_h')->nullable();





//             //Other packages


//             $table->text('other_packages_starter_a')->nullable();
//             $table->text('other_packages_starter_b')->nullable();
//             $table->text('other_packages_starter_c')->nullable();


//             $table->text('met_mobilus_options_a')->nullable();
//             $table->text('met_mobilus_options_b')->nullable();
//             $table->text('met_mobilus_options_c')->nullable();
//             $table->text('met_mobilus_options_d')->nullable();
//             $table->text('met_mobilus_options_e')->nullable();
//             $table->text('met_mobilus_options_f')->nullable();

//             $table->text('mobilus_full_control_options_a')->nullable();
//             $table->text('mobilus_full_control_options_b')->nullable();
//             $table->text('mobilus_full_control_options_c')->nullable();
//             $table->text('mobilus_full_control_options_d')->nullable();
//             $table->text('mobilus_full_control_options_e')->nullable();




//             //for professional customers


//             $table->text('business_package_types_a')->nullable();
//             $table->text('business_package_types_b')->nullable();
//             $table->text('business_package_types_c')->nullable();

//             $table->text('mobile_business_types_a')->nullable();
//             $table->text('mobile_business_types_b')->nullable();
//             $table->text('mobile_business_types_c')->nullable();
//             $table->text('mobile_business_types_d')->nullable();
//             $table->text('mobile_business_types_e')->nullable();
//             $table->text('mobile_business_types_f')->nullable();




//                 //Other Options

//             $table->text('other_options_packages_a')->nullable();
//             $table->text('other_options_packages_b')->nullable();
//             $table->text('other_options_packages_c')->nullable();
//             $table->text('other_options_packages_d')->nullable();
//             $table->text('other_options_packages_e')->nullable();
//             $table->text('other_options_packages_f')->nullable();
//             $table->text('other_options_packages_g')->nullable();
//             $table->text('other_options_packages_h')->nullable();





//             //Internet

//             $table->longText('internet_customer_phase');
//             $table->longText('landline_r');

//             $table->longText('cell_number_w/o_landline');

//             $table->longText('internet_types_a')->nullable();
//             $table->longText('internet_types_b')->nullable();
//             $table->longText('internet_types_c')->nullable();
//             $table->longText('internet_types_d')->nullable();
//             $table->longText('internet_types_e')->nullable();
//             $table->longText('internet_types_f')->nullable();
//             $table->longText('internet_types_g')->nullable();
//             $table->longText('internet_types_h')->nullable();




//             $table->longText('internet_types_security');



//                 //TV

//             $table->longText('tv_customer_phase');
//             $table->longText('line_number');

//             $table->longText('tv_packages_a')->nullable();
//             $table->longText('tv_packages_b')->nullable();
//             $table->longText('tv_packages_c')->nullable();


//             $table->longText('tv_package_options_a')->nullable();
//             $table->longText('tv_package_options_b')->nullable();
//             $table->longText('tv_package_options_c')->nullable();
//             $table->longText('tv_package_options_d')->nullable();
//             $table->longText('tv_package_options_e')->nullable();
//             $table->longText('tv_package_options_f')->nullable();
//             $table->longText('tv_package_options_g')->nullable();
//             $table->longText('tv_package_options_h')->nullable();
//             $table->longText('tv_package_options_i')->nullable();
//             $table->longText('tv_package_options_j')->nullable();





//             // EE

//             $table->longText('fixed_line_customer_phase');
//             $table->longText('current_line_number');
//             $table->longText('current_line_number_string');
//             $table->longText('add_cps_document');


//             $table->longText('phone_line_package_types_a')->nullable();
//             $table->longText('phone_line_package_types_b')->nullable();
//             $table->longText('phone_line_package_types_c')->nullable();
//             $table->longText('phone_line_package_types_d')->nullable();
//             $table->longText('phone_line_package_types_e')->nullable();



//             $table->longText('other_tariff_plan_radio');
//             $table->longText('other_tariff_plan_string');
//             $table->longText('seceret_number_radio');
//             $table->longText('seceret_number_string');
//             $table->longText('smart_services_radio');
//             $table->longText('smart_services_string');

//                 // Optical Fiber F F. GLASVEZEL


//             $table->longText('optical_fibre_radio');
//             $table->longText('optical_fibre_package_type');
//             $table->longText('optical_fibre_package_type_3');


//                     // Multi-line -G


//             $table->longText('multi_line_license');
//             $table->longText('ip_box_radio');

//                 // Bizz Call Connect H

//             $table->longText('bizz_call_connect_radio');


//             // Mobile _ Telephone I


//             $table->longText('mob_tele_pack_type_a')->nullable();
//             $table->longText('mob_tele_pack_type_b')->nullable();
//             $table->longText('mob_tele_pack_type_c')->nullable();
//             $table->longText('mob_tele_pack_type_d')->nullable();

//             $table->longtext('payngo_radio');
//             $table->longtext('payngo_string');
//             $table->longtext('cell_number_g');
//             $table->longtext('cell_number_g_radio');




//             $table->longtext('existing_proximus_customer')->nullable();
//             $table->longtext('lang');
//             $table->longtext('sim_card_number');
//             $table->longtext('sim_card_type');
//             $table->longtext('make_model_of_device');

//             //RESIDENTIELE MOBIELE TELEFONIE (buiten het pack) I

//             $table->string('residential_met_mobilus');

//             $table->string('residential_met_mobilus_limit_full');
//             $table->string('mobile_social_app');
//             $table->string('epic_offer_a')->nullable();
//             $table->string('epic_offer_b')->nullable();
//             $table->string('epic_offer_c')->nullable();

//             $table->string('joint_data_offer');


//             //professional_mobile_telephone I



//             $table->string('bizz_mobile_size_p_i');
//             $table->string('joint_data_offer_p_i');
//             $table->string('mobile_social_apps_p_i');
//             $table->string('bizz_international_options');


// //                      Business Options

//             $table->string('bizz_switch_i');
//             $table->string('second_number_string');
//             $table->string('second_number_radio');

//                     // MOBILE INTERNET VOOR PC/TABLET I

//             $table->string('mobile_internet_i_size_1')->nullable();
//             $table->string('mobile_internet_i_size_2')->nullable();

//             $table->string('international_rome_string');
//             $table->string('voice_data_sms_1')->nullable();
//             $table->string('voice_data_sms_2')->nullable();
//             $table->string('voice_data_sms_3')->nullable();
//             $table->string('voice_data_sms_4')->nullable();
//             $table->string('voice_data_sms_5')->nullable();
//             $table->string('voice_data_sms_6')->nullable();
//             $table->string('voice_data_sms_7')->nullable();
//             $table->string('voice_data_sms_8')->nullable();

//             $table->string('voice_i_1')->nullable();
//             $table->string('voice_i_2')->nullable();
//             $table->string('voice_i_3')->nullable();

//             $table->string('data_i_1')->nullable();
//             $table->string('data_i_2')->nullable();
//             $table->string('data_i_3')->nullable();
//             $table->string('data_i_4')->nullable();
//             $table->string('data_i_5')->nullable();


//             //MODEM EN CONFIGURATI (Modem and Configuration) J

//             $table->string('is_connection_present_in_house');
//             $table->string('mobile_modem_config_type');
//             $table->string('device_delivery_type');
//             $table->string('other_delivery_type');
//             $table->string('other_delivery_type_radio');

//                     // Installation K

//             $table->string('kit_to_install_k');
//             $table->date('date_to_install_k');
//             $table->string('time_of_day_k');
//             $table->string('free_resources');
//             $table->date('desired_employment_date');
//             $table->string('refer_number_k')->nullable();

//                     //Promtion L

//             $table->string('promotion_l');

//               //  ENTRY IN THE TELEPHONE DIRECTORY and with the intelligence service MM

//             $table->string('wish_tbi_tele_directory_m');
//             $table->string('name_or_company_name_m');
//             $table->string('address_choose_m');
//             $table->string('consent_m')->nullable();


//             $table->string('comment_n');

//             $table->string('at_o');
//             $table->string('on_o');
//             // $table->string('consent_o');
//             // $table->string('consent_o_2');
//             $table->string('doc_id')->nullable();
//             $table->string('doc_sign_url')->nullable();
//             $table->unsignedBigInteger('user_id')->nullable();




            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proximus_connection_request_d_u_s');
    }
}
