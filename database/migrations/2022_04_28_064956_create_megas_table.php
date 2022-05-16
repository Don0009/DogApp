<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('megas', function (Blueprint $table) {
            $table->id();
            $table->string('customer')->nullable();
            $table->string('fr')->nullable();
            $table->string('mnr')->nullable();
            $table->string('naam');
            $table->string('first_name');
            $table->date('date_of_birth');
            $table->integer('phone');
            $table->string('gsm');
            $table->string('e_mail');
            $table->string('society');
            $table->string('legal_form');
            $table->integer('ompany_number');
            $table->string('non_taxable')->nullable();
            $table->string('street');
            $table->integer('no');
            $table->string('bus');
            $table->string('postcode');
            $table->string('township');
            $table->integer('going_to_live');
            $table->string('empty_house')->nullable();
            $table->string('street_1');
            $table->integer('no_1');
            $table->string('bus_1');
            $table->string('postcode_1');
            $table->string('township_1');


            $table->string('jaar')->nullable();
            $table->string('variable')->nullable();
            $table->string('day_night')->nullable();
            $table->integer('ean_code');
            $table->string('meter')->nullable();
            $table->integer('number');
            $table->integer('number_1');
            $table->integer('number_2');
            $table->integer('number_3');
            $table->integer('number_4');
            $table->integer('number_5');
            $table->integer('number_6');
            $table->integer('number_7');
            $table->string('annual_consumption');
            $table->string('current_supplier');
            $table->date('start_date');
            $table->string('meter_1')->nullable();
            $table->string('jaar_1')->nullable();
            $table->string('variable_1')->nullable();
            $table->integer('ean_code_1');
            $table->string('meter_2')->nullable();
            $table->string('meter_nummer_2');
            $table->string('meter_stand_2');
            $table->string('annual_consumption_1');
            $table->string('current_supplier_1');
            $table->date('start_date_1');
            $table->string('meter_3')->nullable();
            $table->string('current_supplier_2');
            $table->string('transfer')->nullable();
            $table->string('settlement_invoices')->nullable();
            $table->string('account_number');
            $table->string('monthly')->nullable();
            $table->string('per_post')->nullable();
            $table->string('wish_to_receive')->nullable();
            $table->string('name_and_first');
            $table->string('name_and_first_1');
            $table->string('account_number_1');
            $table->string('bic');
            $table->string('datum');
            $table->string('place');

            $table->string('read_mega')->nullable();
            $table->string('datum_1');
            $table->string('place_1');
            $table->string('aan_mega');
            $table->string('agent');
            $table->string('reference_1');
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
        Schema::dropIfExists('megas');
    }
}
