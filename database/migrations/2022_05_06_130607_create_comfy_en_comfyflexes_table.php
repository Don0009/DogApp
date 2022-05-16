<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComfyEnComfyflexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comfy_en_comfyflexes', function (Blueprint $table) {
            $table->id();
            $table->string('lang');
            $table->string('client_number');
            $table->string('contact_id');
            $table->string('dealer_id');
            $table->string('seller_id');
            $table->string('present_to_luminus');
            $table->string('identity_card');
            $table->date('naissance');
            $table->boolean('mme')->nullable();
            $table->boolean('nl')->nullable();
            $table->string('name');
            $table->string('first_name');
            $table->string('address');
            $table->string('nr');
            $table->string('bus');
            $table->string('post_code');
            $table->string('township');
            $table->string('e_mail');
            $table->string('tel_nr');
            $table->string('faxnr');
            $table->boolean('non')->nullable();
            $table->string('address_1');
            $table->string('nr_1');
            $table->string('bus_1');
            $table->string('deep');
            $table->string('post_code_1');
            $table->string('township_1');
            $table->boolean('want_luminus')->nullable();
            $table->string('existing_connection');
            $table->string('ean_number');
            $table->string('current_supplier');
            $table->string('name_your_network_operator');
            $table->date('desired_switchover_date');
            $table->string('want_luminus_1');
            $table->string('existing_connection_1');
            $table->string('ean_number_1');
            $table->string('current_supplier_1');
            $table->string('name_your_network_operator_1');
            $table->date('desired_switchover_date_1');
            $table->boolean('digitale')->nullable();
            $table->boolean('my_advance_invoices')->nullable();
            $table->boolean('transfer')->nullable();
            $table->string('kWh_dag');
            $table->string('kWh_nacht');
            $table->string('kWh_excl_nacht');
            $table->string('annual_consumption_1');
            $table->string('annual_consumption_2');
            $table->string('annual_consumption_3');
            $table->string('annual_consumption_4');
            $table->string('annual_consumption_5');
            $table->boolean('bepaaid')->nullable();
            $table->boolean('gebaseerd')->nullable();
            $table->boolean('maandelijks')->nullable();
            $table->string('annual_consumption_8');
            $table->string('annual_consumption_9');
            $table->string('Plaats_2');
            $table->string('digitale_1');
            $table->boolean('door')->nullable();
            $table->string('referte');
            $table->string('name_1');
            $table->string('adres');
            $table->string('post_code_2');
            $table->string('stad');
            $table->string('land');
            $table->string('iban');
            $table->string('code');
            $table->date('datum');
            $table->string('plaats_3');
            $table->string('Klantnr');
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
        Schema::dropIfExists('comfy_en_comfyflexes');
    }
}
