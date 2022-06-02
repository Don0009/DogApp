<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProximusConnectionRequestFrExtend extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proximus_connection_request_f_r_s', function (Blueprint $table) {
            //

                 //TV



            //Extra added


            $table->longText('bizz_switch_i_a')->nullable();
            $table->longText('bizz_switch_i_b')->nullable();
            $table->longText('extra_gb_packs_a')->nullable();
            $table->longText('extra_gb_packs_b')->nullable();
            $table->longText('extra_gb_packs_c')->nullable();

            $table->longText('met_mobilus_options_5')->nullable();
            $table->longText('met_mobilus_options_6')->nullable();
            $table->longText('mobilus_full_control_options_3')->nullable();
            $table->longText('mobilus_full_control_options_4')->nullable();
            $table->longText('mobilus_full_control_options_5')->nullable();


            $table->longText('extra_gb_packs_2_b')->nullable();
            $table->longText('extra_gb_packs_2_c')->nullable();
            $table->longText('extra_gb_packs_2_a')->nullable();

            $table->longText('other_options_packages_1')->nullable();
            $table->longText('other_options_packages_2')->nullable();
            $table->longText('other_options_packages_3')->nullable();
            $table->longText('other_options_packages_4')->nullable();
            $table->longText('other_options_packages_5')->nullable();
            $table->longText('other_options_packages_6')->nullable();
            $table->longText('other_options_packages_7')->nullable();
            $table->longText('other_options_packages_8')->nullable();

            $table->longText('internet_types_1')->nullable();
            $table->longText('internet_types_2')->nullable();
            $table->longText('internet_types_3')->nullable();
            $table->longText('internet_types_4')->nullable();
            $table->longText('internet_types_5')->nullable();
            $table->longText('internet_types_6')->nullable();
            $table->longText('internet_types_7')->nullable();
            $table->longText('internet_types_8')->nullable();

            $table->longText('met_mobilus_options_4')->nullable();
            $table->longText('met_mobilus_options_1')->nullable();
            $table->longText('met_mobilus_options_2')->nullable();
            $table->longText('met_mobilus_options_3')->nullable();


            $table->longText('mobilus_full_control_options_1')->nullable();
            $table->longText('mobilus_full_control_options_2')->nullable();
            $table->longText('business_package_types_1')->nullable();
            $table->longText('business_package_types_2')->nullable();
            $table->longText('business_package_types_3')->nullable();


            $table->longText('mobile_business_types_2')->nullable();
            $table->longText('mobile_business_types_3')->nullable();
            $table->longText('mobile_business_types_4')->nullable();
            $table->longText('mobile_business_types_5')->nullable();
            $table->longText('mobile_business_types_6')->nullable();
            $table->longText('mobile_business_types_1')->nullable();


            $table->longText('tv_packages_1')->nullable();
            $table->longText('tv_packages_2')->nullable();
            $table->longText('tv_packages_3')->nullable();



























            $table->longText('seceret_number_text');


            $table->longText('smart_services_text');

            $table->longText('mob_tele_pack_type')->nullable();


            $table->longText('payngo_text')->nullable();
            $table->longText('residential_met_mobilus_1')->nullable();
            $table->longText('residential_met_mobilus_2')->nullable();
            $table->longText('residential_met_mobilus_3')->nullable();
            $table->longText('residential_met_mobilus_4')->nullable();
            $table->longText('residential_met_mobilus_5')->nullable();
            $table->longText('residential_met_mobilus_6')->nullable();

            $table->longText('residential_met_mobilus_limit_full_1')->nullable();
            $table->longText('residential_met_mobilus_limit_full_2')->nullable();
            $table->longText('residential_met_mobilus_limit_full_3')->nullable();
            $table->longText('residential_met_mobilus_limit_full_4')->nullable();


            $table->longText('joint_data_offer_a')->nullable();
            $table->longText('joint_data_offer_c')->nullable();
            $table->longText('joint_data_offer_e')->nullable();
            $table->longText('bizz_mobile_size_p_i_1')->nullable();
            $table->longText('bizz_mobile_size_p_i_2')->nullable();
            $table->longText('bizz_mobile_size_p_i_3')->nullable();
            $table->longText('bizz_mobile_size_p_i_4')->nullable();
            $table->longText('bizz_mobile_size_p_i_5')->nullable();
            $table->longText('bizz_international_options_a')->nullable();
            $table->longText('bizz_international_options_b')->nullable();
            $table->longText('bizz_international_options_c')->nullable();
            $table->longText('address_choose_m_text');

            $table->longText('second_number_text');
            $table->longText('international_rome_text');


















           // residential_met_mobilus_c













                //TV

            $table->longText('tv_customer_phase');
            $table->longText('line_number');

            $table->longText('tv_packages_a')->nullable();

            $table->longText('tv_packages_b')->nullable();
            $table->longText('tv_packages_c')->nullable();


            $table->longText('tv_package_options_1')->nullable();
            $table->longText('tv_package_options_2')->nullable();
            $table->longText('tv_package_options_3')->nullable();
            $table->longText('tv_package_options_4')->nullable();
            $table->longText('tv_package_options_5')->nullable();
            $table->longText('tv_package_options_6')->nullable();
            $table->longText('tv_package_options_7')->nullable();
            $table->longText('tv_package_options_8')->nullable();
            $table->longText('tv_package_options_9')->nullable();
            $table->longText('tv_package_options_10')->nullable();







            $table->longText('fixed_line_customer_phase');
            $table->longText('current_line_number');
           // $table->longText('current_line_number_text');
            $table->longText('add_cps_document');


            $table->longText('phone_line_package_types_1')->nullable();
            $table->longText('phone_line_package_types_2')->nullable();
            $table->longText('phone_line_package_types_3')->nullable();
            $table->longText('phone_line_package_types_4')->nullable();
            $table->longText('phone_line_package_types_5')->nullable();

            $table->longText('epic_packs_options_i')->nullable();
            $table->longText('epic_packs_options_j')->nullable();







            $table->longText('other_tariff_plan_radio');
           // $table->longText('other_tariff_plan_string');
            $table->longText('seceret_number_radio');
            //$table->longText('seceret_number_string');
            $table->longText('smart_services_radio');
            //$table->longText('smart_services_string');

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


            $table->longText('mob_tele_pack_type_1')->nullable();
            $table->longText('mob_tele_pack_type_2')->nullable();
            $table->longText('mob_tele_pack_type_3')->nullable();
            $table->longText('mob_tele_pack_type_4')->nullable();
            $table->longText('mob_tele_pack_type_5')->nullable();
            $table->longText('mob_tele_pack_type_6')->nullable();
            $table->longText('mob_tele_pack_type_7')->nullable();
            $table->longText('mob_tele_pack_type_8')->nullable();
            $table->longText('existing_proximus_customer_text');




            $table->longtext('payngo_radio');
           // $table->longtext('payngo_string');
            $table->longtext('cell_number_g');
            $table->longtext('cell_number_g_radio');




            $table->longtext('existing_proximus_customer')->nullable();
            $table->longtext('lang');
            $table->longtext('sim_card_number');
            $table->longtext('sim_card_type');
            $table->longtext('make_model_of_device');

            //RESIDENTIELE MOBIELE TELEFONIE (buiten het pack) I

          //  $table->string('residential_met_mobilus');

            $table->string('residential_met_mobilus_limit_full')->nullable();
            $table->text('mobile_social_app');
            $table->text('epic_offer_1')->nullable();
            $table->text('epic_offer_2')->nullable();
            $table->text('epic_offer_3')->nullable();

            $table->string('joint_data_offer');


            //professional_mobile_telephone I



            //$table->text('bizz_mobile_size_p_i');
            $table->text('joint_data_offer_p_i');
            $table->text('mobile_social_apps_p_i');
           // $table->text('bizz_international_options');


//                      Business Options

          //  $table->string('bizz_switch_i');
          //  $table->string('second_number_string');
            $table->string('second_number_radio');

                    // MOBILE INTERNET VOOR PC/TABLET I

            $table->string('mobile_internet_i_size_1')->nullable();
            $table->string('mobile_internet_i_size_2')->nullable();

          //  $table->text('international_rome_string');
            $table->text('voice_data_sms_1')->nullable();
            $table->text('voice_data_sms_2')->nullable();
            $table->text('voice_data_sms_3')->nullable();
            $table->text('voice_data_sms_4')->nullable();
            $table->text('voice_data_sms_5')->nullable();
            $table->text('voice_data_sms_6')->nullable();
            $table->text('voice_data_sms_7')->nullable();
            $table->text('voice_data_sms_8')->nullable();

            $table->string('voice_i_1')->nullable();
            $table->string('voice_i_2')->nullable();
            $table->string('voice_i_3')->nullable();

            $table->string('data_i_1')->nullable();
            $table->string('data_i_2')->nullable();
            $table->string('data_i_3')->nullable();
            $table->string('data_i_4')->nullable();
            $table->string('data_i_5')->nullable();


            //MODEM EN CONFIGURATI (Modem and Configuration) J

            $table->string('is_connection_present_in_house');
            $table->string('mobile_modem_config_type');
            $table->string('device_delivery_type');
            $table->string('other_delivery_type');
            $table->string('other_delivery_type_radio');

            //         // Installation K

            $table->string('kit_to_install_k');
            $table->date('date_to_install_k');
            $table->string('time_of_day_k');
            $table->string('free_resources');
            $table->date('desired_employment_date');
            $table->string('refer_number_k')->nullable();

                    //Promtion L

            $table->text('promotion_l');

              //  ENTRY IN THE TELEPHONE DIRECTORY and with the intelligence service MM

            $table->text('wish_tbi_tele_directory_m');
            $table->text('name_or_company_name_m');
            $table->text('address_choose_m');
            $table->text('consent_m')->nullable();


            $table->text('comment_n');

            $table->text('at_o');
            $table->text('on_o');
            // $table->string('consent_o');
            // $table->string('consent_o_2');
            $table->text('doc_id')->nullable();
            $table->text('doc_sign_url')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proximus_connection_request_f_r_s', function (Blueprint $table) {
            //
        });
    }
}
