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

            $table->string('partner');
            $table->string('identity');
            $table->string('seller');
            $table->string('gsm');
            $table->string('person_type');
            $table->date('validity_of_id');
           // $table->string('copy_of_id_card');
            $table->string('be');

            $table->string('VAT_is_exempted');
            $table->string('is_source_of_income');
            $table->string('number_of_customer');
            $table->string('is_title');
            $table->string('name');
            $table->string('first_name');
            $table->string('name_of_company');
            $table->string('street');
            $table->string('no');
            $table->string('bus');
            $table->string('postcode');
            $table->string('place');
            $table->string('country');
            $table->string('email');
            $table->string('telephone');
            $table->string('gsm_2');
            $table->date('date_of_birth');
            $table->string('contact_person_name');
            $table->string('contact_person_telephone');
            $table->string('is_title_2');
            $table->string('is_install_address_same');
            $table->string('install_address');
            $table->string('invoice_receive_method');
            $table->string('email_2');
            $table->string('gsm_3');
            $table->string('bank_account_number');
            $table->string('adres');
            $table->string('is_billing_address_same_or_not');
            $table->string('name_or_number_of_previous_owner');
            $table->string('wish_to_receive_info_means');


            // Choose your Package

            $table->text('tv_packs_options_a');
            $table->text('tv_packs_options_b');
            $table->text('tv_packs_options_c');
            $table->text('tv_packs_options_d');






            //Mobile Phone

            $table->text('mobile_packs_options_a');
            $table->text('mobile_packs_options_b');
            $table->text('mobile_packs_options_c');
            $table->text('mobile_packs_options_d');
            $table->text('mobile_packs_options_e');
            $table->text('mobile_packs_options_f');
            $table->text('mobile_packs_options_g');
            $table->text('mobile_packs_options_h');




            $table->text('epic_packs_options_g');
            $table->text('epic_packs_options_h');





            //Other packages


            $table->text('other_packages_starter_a');
            $table->text('other_packages_starter_b');
            $table->text('other_packages_starter_c');


            $table->text('met_mobilus_options_a');
            $table->text('met_mobilus_options_b');
            $table->text('met_mobilus_options_c');
            $table->text('met_mobilus_options_d');
            $table->text('met_mobilus_options_e');
            $table->text('met_mobilus_options_f');

            $table->text('mobilus_full_control_options_a');
            $table->text('mobilus_full_control_options_b');
            $table->text('mobilus_full_control_options_c');
            $table->text('mobilus_full_control_options_d');
            $table->text('mobilus_full_control_options_e');




            //for professional customers


            $table->text('business_package_types_a');
            $table->text('business_package_types_b');
            $table->text('business_package_types_c');

            $table->text('mobile_business_types_a');
            $table->text('mobile_business_types_b');
            $table->text('mobile_business_types_c');
            $table->text('mobile_business_types_d');
            $table->text('mobile_business_types_e');
            $table->text('mobile_business_types_f');




                //Other Options

            $table->text('other_options_packages_a');
            $table->text('other_options_packages_b');
            $table->text('other_options_packages_c');
            $table->text('other_options_packages_d');
            $table->text('other_options_packages_e');
            $table->text('other_options_packages_f');
            $table->text('other_options_packages_g');
            $table->text('other_options_packages_h');





            //Internet

            $table->longText('internet_customer_phase');
            $table->longText('landline_r');

            $table->longText('cell_number_w/o_landline');

            $table->longText('internet_types_a');
            $table->longText('internet_types_b');
            $table->longText('internet_types_c');
            $table->longText('internet_types_d');
            $table->longText('internet_types_e');
            $table->longText('internet_types_f');
            $table->longText('internet_types_g');
            $table->longText('internet_types_h');




            $table->longText('internet_types_security');



                //TV

            $table->longText('tv_customer_phase');
            $table->longText('line_number');

            $table->longText('tv_packages_a');
            $table->longText('tv_packages_b');
            $table->longText('tv_packages_c');


            $table->longText('tv_package_options_a');
            $table->longText('tv_package_options_b');
            $table->longText('tv_package_options_c');
            $table->longText('tv_package_options_d');
            $table->longText('tv_package_options_e');
            $table->longText('tv_package_options_f');
            $table->longText('tv_package_options_g');
            $table->longText('tv_package_options_h');
            $table->longText('tv_package_options_i');
            $table->longText('tv_package_options_j');





            // EE

            $table->longText('fixed_line_customer_phase');
            $table->longText('current_line_number');
            $table->longText('current_line_number_string');
            $table->longText('add_cps_document');


            $table->longText('phone_line_package_types_a');
            $table->longText('phone_line_package_types_b');
            $table->longText('phone_line_package_types_c');
            $table->longText('phone_line_package_types_d');
            $table->longText('phone_line_package_types_e');



            $table->longText('other_tariff_plan_radio');
            $table->longText('other_tariff_plan_string');
            $table->longText('seceret_number_radio');
            $table->longText('seceret_number_string');
            $table->longText('smart_services_radio');
            $table->longText('smart_services_string');

                // Optical Fiber F F. GLASVEZEL


            $table->longText('optical_fibre_radio');
            $table->longText('optical_fibre_package_type');
            $table->longText('optical_fibre_package_type_3');


                    // Multi-line -G


            $table->longText('multi_line_license');
            $table->longText('ip_box_radio');

                // Bizz Call Connect H

            $table->longText('bizz_call_connect_radio');


            // Mobile _ Telephone I


            $table->longText('mob_tele_pack_type_a');
            $table->longText('mob_tele_pack_type_b');
            $table->longText('mob_tele_pack_type_c');
            $table->longText('mob_tele_pack_type_d');

            $table->longtext('payngo_radio');
            $table->longtext('payngo_string');
            $table->longtext('cell_number_g');
            $table->longtext('cell_number_g_radio');




            $table->longtext('existing_proximus_customer')->nullable();
            $table->longtext('lang');
            $table->longtext('sim_card_number');
            $table->longtext('sim_card_type');
            $table->longtext('make_model_of_device');

            //RESIDENTIELE MOBIELE TELEFONIE (buiten het pack) I

            $table->string('residential_met_mobilus');

            $table->string('residential_met_mobilus_limit_full');
            $table->string('mobile_social_app');
            $table->string('epic_offer');
            $table->string('joint_data_offer');


            //professional_mobile_telephone I



            $table->string('bizz_mobile_size_p_i');
            $table->string('joint_data_offer_p_i');
            $table->string('mobile_social_apps_p_i');
            $table->string('bizz_international_options');


//                      Business Options

            $table->string('bizz_switch_i');
            $table->string('second_number_string');
            $table->string('second_number_radio');

                    // MOBILE INTERNET VOOR PC/TABLET I

            $table->string('mobile_internet_i_size');
            $table->string('international_rome_string');
            $table->string('voice_data_sms');
            $table->string('voice_i');
            $table->string('data_i');

            //MODEM EN CONFIGURATI (Modem and Configuration) J

            $table->string('is_connection_present_in_house');
            $table->string('mobile_modem_config_type');
            $table->string('device_delivery_type');
            $table->string('other_delivery_type');
            $table->string('other_delivery_type_radio');

                    // Installation K

            $table->string('kit_to_install_k');
            $table->date('date_to_install_k');
            $table->string('time_of_day_k');
            $table->string('free_resources');
            $table->date('desired_employment_date');
            $table->string('refer_number_k')->nullable();

                    //Promtion L

            $table->string('promotion_l');

              //  ENTRY IN THE TELEPHONE DIRECTORY and with the intelligence service MM

            $table->string('wish_tbi_tele_directory_m');
            $table->string('name_or_company_name_m');
            $table->string('address_choose_m');
            $table->string('consent_m')->nullable();


            $table->string('comment_n');

            $table->string('at_o');
            $table->string('on_o');
            // $table->string('consent_o');
            // $table->string('consent_o_2');
            $table->string('doc_id')->nullable();
            $table->string('doc_sign_url')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();




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
