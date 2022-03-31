<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternetHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internet_homes', function (Blueprint $table) {
            $table->id();
            $table->string('client_exist');
            $table->string('client_num');
            $table->string('exist_phone');
            $table->string('exist_mail');
            $table->string('new_client');
            $table->string('title');
            $table->string('language');
            $table->string('name');
            $table->string('f_name');
            $table->string('street');
            $table->string('no');
            $table->string('box');
            $table->string('town');
            $table->string('postal_code');
            $table->string('country');
            $table->date('date_of_birth');
            $table->string('telephone');
            $table->string('mob_num');
            $table->string('account_number');
            $table->string('mail');
            $table->string('profession');
            $table->string('company_name');
            $table->string('legal_status');
            $table->string('company_number');
            $table->string('contact_person');
            $table->string('phone_number');
            $table->string('fax');
            $table->string('comp_street');
            $table->string('comp_no');
            $table->string('comp_box');
            $table->string('comp_town');
            $table->string('comp_postal_code');
            $table->string('comp_country');
            $table->string('card_number');
            $table->string('internet_home');
            $table->string('boot_option');
            $table->string('copy');
            $table->date('date');
            $table->string('credit_card_holder');
            $table->string('card_expiration_date');
            $table->string('code_generate');
            $table->string('account_holder_name');
            $table->string('street_and_number');
            $table->string('postal_code_and_city');
            $table->string('hold_country');
            $table->string('iban_account_number');
            $table->string('bic_code');
            $table->string('underlying_contract_number');
            $table->string('signature');
            $table->date('a_date');
            $table->string('location');

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
        Schema::dropIfExists('internet_homes');
    }
}
