<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_phones', function (Blueprint $table) {
            $table->id();
            $table->string('point_of_sale');
            $table->string('client_exist')->nullable();
            $table->string('client_num');
            $table->string('exist_phone');
            $table->string('new_client')->nullable();
            $table->string('s_number');
            $table->string('language');
            $table->string('title');
            $table->string('customer_type');
            $table->string('name');
            $table->string('f_name');
            $table->string('street');
            $table->string('no');
            $table->string('box');
            $table->string('town');
            $table->string('postal_code');
            $table->string('country');
            $table->date('date_of_birth');
            $table->string('busines')->nullable();
            $table->string('company_number');
            $table->string('legal_status');
            $table->string('company_name');
            $table->string('contact_person');
            $table->string('comp_street');
            $table->string('comp_no');
            $table->string('comp_box');
            $table->string('comp_postal_code');
            $table->string('comp_town');
            $table->string('comp_country');
            $table->string('sim');
            $table->string('res_number');
            $table->string('pricing_plan');
            $table->string('options_services');
            $table->string('copy');
            $table->date('date');
            $table->string('credit_card_holder');
            $table->string('code_generate');
            $table->string('account_holder_name');
            $table->string('street_and_number');
            $table->string('postal_code_and_city');
            $table->string('hold_country');
            $table->string('iban_account_number');
            $table->string('bic_code');
            $table->string('underlying_contract_number');
            $table->string('signature');
            $table->string('a_date');
            $table->string('location');
            $table->string('sign_1');
            $table->string('sign_2');

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
        Schema::dropIfExists('mobile_phones');
    }
}
