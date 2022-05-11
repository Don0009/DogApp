<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLampirisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiris', function (Blueprint $table) {
            $table->id();
            $table->string('form_lang');
            $table->string('title');
            $table->string('language')->nullable();
            $table->string('name');
            $table->string('f_name');
            $table->date('date_of_birth');
            $table->string('phone');
            $table->string('gsm');
            $table->string('mail');
            $table->string('bank_account');
            $table->text('people');
            $table->text('adress');
            $table->string('box');
            $table->string('no');
            $table->string('postal_code');
            $table->text('locality');
            $table->string('adress1');
            $table->text('box1');
            $table->string('no1');
            $table->string('postal_code1');
            $table->text('locality1');
            $table->string('tip');
            $table->string('year');
            $table->string('counter_type');
            $table->string('ean_code');
            $table->string('meter_number1');
            $table->string('counter_index1');
            $table->string('meter_number2');
            $table->string('counter_index2');
            $table->string('meter_number3');
            $table->string('counter_index3');
            $table->string('meter_number4');
            $table->string('counter_index4');
            $table->string('meter_number5')->nullable();
            $table->string('counter_index5')->nullable();
            $table->string('meter_number6')->nullable();
            $table->string('counter_index6')->nullable();
            $table->text('annual_consu');
            $table->string('annual_injection')->nullable();
            $table->string('moving');
            $table->string('meter_open');
            $table->string('current_provid');
            $table->date('start_date');
            $table->string('tip1');
            $table->string('year1');
            $table->string('ean_code1');
            $table->string('meter_number');
            $table->string('counter');
            $table->string('annual_consu1');
            $table->string('moving1');
            $table->string('meter_open1');
            $table->string('current_provid1');
            $table->date('start_date1');
            $table->string('promotional');
            $table->string('electricity_gas');
            $table->string('insulation');
            $table->string('boilers');
            $table->string('charging_vehicles');
            $table->string('panels');
            $table->string('insurance');
            $table->string('partners');
            $table->string('authorize');
            $table->string('subscribe');
            $table->string('activated')->nullable();
            $table->string('invoices');
            $table->string('invoices1');
            $table->string('bills');
            $table->string('undersigned');
            $table->string('iban');
            $table->string('bic');
            $table->date('date');
            $table->text('the');
            $table->string('name1');
            $table->text('city');
            $table->date('date1');
            $table->string('agent');
            $table->string('pricing_code');
            $table->text('text');
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
        Schema::dropIfExists('lampiris');
    }
}
