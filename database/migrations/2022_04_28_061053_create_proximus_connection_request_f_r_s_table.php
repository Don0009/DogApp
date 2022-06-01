<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProximusConnectionRequestFRSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proximus_connection_request_f_r_s', function (Blueprint $table) {
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

            $table->text('tv_packs_options_a')->nullable();
            $table->text('tv_packs_options_b')->nullable();
            $table->text('tv_packs_options_c')->nullable();
            $table->text('tv_packs_options_d')->nullable();






            //Mobile Phone

            $table->text('mobile_packs_options_a')->nullable();
            $table->text('mobile_packs_options_b')->nullable();
            $table->text('mobile_packs_options_c')->nullable();
            $table->text('mobile_packs_options_d')->nullable();
            $table->text('mobile_packs_options_e')->nullable();
            $table->text('mobile_packs_options_f')->nullable();
            $table->text('mobile_packs_options_g')->nullable();
            $table->text('mobile_packs_options_h')->nullable();
            $table->text('other_tariff_plan_text');





            $table->text('epic_packs_options_g')->nullable();

            $table->text('epic_packs_options_h')->nullable();
            $table->text('current_line_number_text');





            //Other packages


            $table->text('other_packages_starter_a')->nullable();
            $table->text('other_packages_starter_b')->nullable();
            $table->text('other_packages_starter_c')->nullable();


            $table->text('met_mobilus_options_a')->nullable();
            $table->text('met_mobilus_options_b')->nullable();
            $table->text('met_mobilus_options_c')->nullable();
            $table->text('met_mobilus_options_d')->nullable();
            $table->text('met_mobilus_options_e')->nullable();
            $table->text('met_mobilus_options_f')->nullable();

            $table->text('mobilus_full_control_options_a')->nullable();
            $table->text('mobilus_full_control_options_b')->nullable();
            $table->text('mobilus_full_control_options_c')->nullable();
            $table->text('mobilus_full_control_options_d')->nullable();
            $table->text('mobilus_full_control_options_e')->nullable();




            //for professional customers


            $table->text('business_package_types_a')->nullable();
            $table->text('business_package_types_b')->nullable();
            $table->text('business_package_types_c')->nullable();

            $table->text('mobile_business_types_a')->nullable();
            $table->text('mobile_business_types_b')->nullable();
            $table->text('mobile_business_types_c')->nullable();
            $table->text('mobile_business_types_d')->nullable();
            $table->text('mobile_business_types_e')->nullable();
            $table->text('mobile_business_types_f')->nullable();




                //Other Options

            $table->text('other_options_packages_a')->nullable();
            $table->text('other_options_packages_b')->nullable();
            $table->text('other_options_packages_c')->nullable();
            $table->text('other_options_packages_d')->nullable();
            $table->text('other_options_packages_e')->nullable();
            $table->text('other_options_packages_f')->nullable();
            $table->text('other_options_packages_g')->nullable();
            $table->text('other_options_packages_h')->nullable();





            //Internet

            $table->longText('internet_customer_phase');
            $table->longText('landline_r');

            $table->longText('cell_number_w/o_landline');

            $table->longText('internet_types_a')->nullable();
            $table->longText('internet_types_b')->nullable();
            $table->longText('internet_types_c')->nullable();
            $table->longText('internet_types_d')->nullable();
            $table->longText('internet_types_e')->nullable();
            $table->longText('internet_types_f')->nullable();
            $table->longText('internet_types_g')->nullable();
            $table->longText('internet_types_h')->nullable();




            $table->longText('internet_types_security');







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
        Schema::dropIfExists('proximus_connection_request_f_r_s');
    }
}
