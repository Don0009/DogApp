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
            $table->string('id');
            $table->string('seller');
            $table->string('gsm');
            $table->string('natural_person');
            $table->string('legal_entity');
            $table->date('validity_of_id');
            $table->string('copy_of_id_card');
            $table->string('VAT_is_exempted');
            $table->string('is_self_employed');
            $table->string('is_a_company');
            $table->string('number_of_customer');
            $table->string('is_mr');
            $table->string('is_mrs');
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
            $table->string('is_mr_2');
            $table->string('is_mrs_2');
            $table->string('is_install_address_same');
            $table->string('is_install_address_not_same');
            $table->string('invoice_receive_method');
            $table->string('gsm_3');
            $table->string('bank_account_number');
            $table->string('is_billing_address_same_or_not');
            $table->string('name_or_number_of_previous_owner');
            $table->string('wish_to_receive_info_by_telephone');


            // Choose your Package

            $table->string('flex_internet_tv');
            $table->string('flex_internet_tv_telephone_booster_family_life_premium');
            $table->string('flex_internet_tv_2_family');

            //Mobile Phone

            $table->string('mobile_flex');
            $table->string('mobile_flex_plus');
            $table->string('unlimited_light');
            $table->string('unlimited');
            $table->string('unlimited_p');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');
            $table->string('');



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
