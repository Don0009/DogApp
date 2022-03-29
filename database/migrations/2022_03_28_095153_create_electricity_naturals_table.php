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
            $table->boolean('meter_open');
            $table->string('current_supplier');
            $table->date('start_date_delivery');
            $table->string('gas_tip')->nullable();
            $table->string('gas_top')->nullable();
            $table->string('gas_1year')->nullable();
            $table->string('gas_2year')->nullable();
            $table->string('gas_3year')->nullable();
            $table->string('gas_ean_code');
            $table->string('gas_meter_number');
            $table->string('gas_meter_reading');
            $table->string('gas_annual_consumption');
            $table->boolean('gas_you_moving');
            $table->boolean('gas_meter_open');
            $table->string('gas_current_supplier');
            $table->date('gas_start_date_delivery');
            $table->string('any_comments');
            $table->boolean('receive_promotional_offer');
            $table->boolean('electricity_gas');
            $table->boolean('insulation');
            $table->boolean('boiler_installation');
            $table->boolean('solutions_lectric');
            $table->boolean('solar_panels');
            $table->boolean('insurance_for_electricity');
            $table->boolean('discounts_partners');
            $table->boolean('subscribe');
            $table->boolean('customer_zone');
            $table->boolean('receive_invoices_through');
            $table->boolean('receive_invoices_by');
            $table->boolean('pay_invoices_via');
            $table->string('undersigned');
            $table->string('iban');
            $table->string('bic');
            $table->date('date');
            $table->string('place');
            $table->string('signature');
            $table->string('name');
            $table->string('city');
            $table->date('cus_date');
            $table->string('manag_signature');
            $table->string('cus_signature');

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
