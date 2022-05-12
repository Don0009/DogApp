<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOctasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('octas', function (Blueprint $table) {
            $table->id();
            $table->string('form_lang');
            $table->string('client');
            $table->string('language');
            $table->string('title');
            $table->string('customer_number');
            $table->text('society');
            $table->string('legal_status');
            $table->string('company_number');
            $table->string('subject_vat');
            $table->string('name');
            $table->string('f_name');
            $table->string('gsm');
            $table->string('phone');
            $table->string('mail');
            $table->date('date_of_birth');
            $table->text('dev_street');
            $table->string('dev_no');
            $table->text('dev_box');
            $table->string('dev_postal_code');
            $table->text('dev_commune');
            $table->string('dev_refer_customer');
            $table->text('billing_street');
            $table->string('billing_no');
            $table->string('billing_box');
            $table->string('billing_postal_code');
            $table->text('billing_commune');
            $table->text('billing_country');
            $table->string('price_duration');
            $table->string('belgian_electricity')->nullable();
            $table->string('digital_meter');
            $table->string('counter');
            $table->string('counter_type');
            $table->string('ean_code');
            $table->string('ean_code_night')->nullable();
            $table->string('meter_number');
            $table->string('meter_number_night')->nullable();
            $table->string('solar_other_facility');
            $table->string('power_production_plant');
            $table->string('house_move');
            $table->date('delivery_start_date');
            $table->string('price_duration_contract');
            $table->string('counter1');
            $table->string('ean_code1');
            $table->string('meter_number1');
            $table->string('house_move1');
            $table->date('delivery_start_date1');
            $table->string('installment_frequency');
            $table->string('payment_method');
            $table->string('invoices')->nullable();
            $table->string('send_invoices')->nullable();
            $table->string('account_number');
            $table->string('bic_code');
            $table->string('information')->nullable();
            $table->date('date');
            $table->text('company_name');
            $table->string('street_number');
            $table->string('zip_code');
            $table->string('iban_account');
            $table->string('bic_code1');
            $table->date('date1');
            $table->text('place');

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
        Schema::dropIfExists('octas');
    }
}
