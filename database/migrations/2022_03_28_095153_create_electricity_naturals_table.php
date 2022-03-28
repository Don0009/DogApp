<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElectricityNaturalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('electricity_naturals', function (Blueprint $table) {
            $table->id();
            $table->string('language');
            $table->string('gender');
            $table->string('name');
            $table->string('f_name');
            $table->string('date_of_birth');
            $table->string('tel');
            $table->string('phone');
            $table->string('email');
            $table->number('bank_acc_num');
            $table->number('num_person_domi_delivery');
            $table->string('address');
            $table->string('no');
            $table->string('bus');
            $table->string('postal_code');
            $table->string('place');
            $table->string('billing_address');
            $table->string('billing_no');
            $table->string('billing_bus');
            $table->string('billing_postal_code');
            $table->string('billing_place');
            $table->string('gree_tip')->nullable();
            $table->string('gree_top')->nullable();
            $table->string('gree_solar')->nullable();
            $table->string('gree_1year')->nullable();
            $table->string('gree_2year')->nullable();
            $table->string('gree_3year')->nullable();
            $table->string('meter_type');
            $table->string('ean_code');
            $table->string('single_meter_num');
            $table->string('single_meter_reading');
            $table->string('Double_meter_num');
            $table->string('Double_meter_reading');
            $table->string('meter_double_night_num');
            $table->string('meter_double_night_reading');
            $table->string('meter_excl_night_num');
            $table->string('meter_excl_night_reading');
            $table->string('annual_consumption');
            $table->boolean('you_moving');
            $table->string('meter_open');
            $table->string('current_supplier');
            $table->date('start_date_delivery');
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
        Schema::dropIfExists('electricity_naturals');
    }
}
