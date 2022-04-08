<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_apps', function (Blueprint $table) {

            $table->id();


            $table->string('name');
            $table->string('first_name');
            $table->string('contact_number');
            $table->string('email_address');
            $table->string('facility_address');
            $table->string('postal_code');
            $table->string('town');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('identity_card_number');

            $table->string('company');
            $table->string('company_form');
            $table->string('business_number');
             $table->string('plant_address');
            $table->string('postal_code_2');
            $table->string('town_2');
            $table->string('billing_address');
            $table->string('first_last_name_contact');
            $table->string('contact_number_2');
            $table->string('email_address_2');

            $table->string('selected_product');
            $table->date('preferred_date_of_installation');
            $table->string('remarks');




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
        Schema::dropIfExists('contract_apps');
    }
}
