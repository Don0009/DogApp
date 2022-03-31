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
            // $table->string('fr')->nullable();
            // $table->string('nl')->nullable();
            // $table->string('de')->nullable();
            // $table->string('en')->nullable();
            // $table->string('gender');
            // $table->text('name');
            // $table->text('f_name');
            // $table->string('date_of_birth');
            // $table->string('tel');
            // $table->string('phone');
            // $table->string('email');
            // $table->string('bank_acc_num1');
            // $table->string('bank_acc_num2');
            // $table->string('bank_acc_num3');
            // $table->string('bank_acc_num4');
            // $table->string('num_person_domi_delivery');
            // $table->longtext('address');
            // $table->string('no');
            // $table->longtext('bus');
            // $table->string('postal_code');
            // $table->text('place');
            // $table->longtext('billing_address');
            // $table->string('billing_no');
            // $table->text('billing_bus');
            // $table->string('billing_postal_code');
            // $table->text('billing_place');
            // $table->string('gree_tip')->nullable();
            // $table->string('gree_top')->nullable();
            // $table->string('gree_1year')->nullable();
            // $table->string('gree_2year')->nullable();
            // $table->string('gree_3year')->nullable();
            // $table->string('meter_type');
            // $table->string('ean_code');
            // $table->string('single_meter_num');
            // $table->string('single_meter_reading');
            // $table->string('Double_meter_num');
            // $table->text('Double_meter_reading');
            // $table->string('meter_double_night_num');
            // $table->text('meter_double_night_reading');
            // $table->string('meter_excl_night_num');
            // $table->string('meter_excl_night_reading');
            // $table->string('annual_consumption');
            // $table->string('you_moving');
            // $table->string('meter_open');
            // $table->string('current_supplier');
            // $table->string('start_day_delivery');
            // $table->string('start_month_delivery');
            // $table->string('start_year_delivery');
            // $table->string('gas_tip')->nullable();
            // $table->string('gas_top')->nullable();
            // $table->string('gas_1year')->nullable();
            // $table->string('gas_2year')->nullable();
            // $table->string('gas_3year')->nullable();
            // $table->string('gas_ean_code');
            // $table->string('gas_meter_number');
            // $table->text('gas_meter_reading1');
            // $table->string('gas_meter_reading2');
            // $table->longtext('gas_annual_consumption');
            // $table->string('gas_you_moving');
            // $table->string('gas_meter_open');
            // $table->string('gas_current_supplier');
            // $table->date('gas_start_day_delivery');
            // $table->date('gas_start_month_delivery');
            // $table->date('gas_start_year_delivery');
            // $table->longtext('any_comments');
            // $table->string('receive_promotional_offer');
            // $table->string('electricity_gas');
            // $table->string('insulation');
            // $table->string('boiler_installation');
            // $table->text('solutions_lectric');
            // $table->text('solar_panels');
            // $table->text('insurance_for_electricity');
            // $table->string('discounts_partners');
            // $table->longtext('subscribe');
            // $table->longtext('customer_zone');
            // $table->string('receive_invoices_through');
            // $table->string('receive_invoices_by');
            // $table->longtext('pay_invoices_via');
            // $table->string('undersigned');
            // $table->string('iban1');
            // $table->string('iban2');
            // $table->string('iban3');
            // $table->string('iban4');
            // $table->string('bic');
            // $table->date('date_day');
            // $table->date('date_month');
            // $table->date('date_year');
            // $table->longtext('cus_place');
            // $table->string('signature');
            // $table->text('cus_name');
            // $table->longtext('city');
            // $table->date('cus_date_day');
            // $table->date('cus_date_month');
            // $table->date('cus_date_year');
            // $table->string('manag_signature');
            // $table->longtext('cus_signature');
            // $table->longtext('framework');
            // $table->string('ref_agent');
            // $table->string('rate_code');
            // $table->longtext('lampiris_ex');

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
