<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLumResComfiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lum_res_comfies', function (Blueprint $table) {
            $table->id();
              // $table->string('want_luminus')->nullable();
                $table->string('client_number');
                $table->string('contact_id');
                $table->string('dealer_id');
                $table->string('seller_id');
                $table->string('present_to_luminus');
                $table->string('client_number_1');
                $table->string('company_form');
                $table->string('company_number');
                $table->boolean('dhr')->nullable();
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
                $table->string('gsm_nr')->nullable();
                $table->string('address_1');
                $table->string('nr_1');
                $table->string('bus_1');
                $table->string('deep');
                $table->string('post_code_1');
                $table->string('township_1');
                $table->boolean('want_luminus')->nullable();
                $table->boolean('existing_connection')->nullable();
                $table->string('ean_number');
                $table->string('current_supplier');
                $table->string('name_your_network_operator');
                $table->date('desired_switchover_date');
                $table->boolean('want_luminus_1')->nullable();
                $table->boolean('existing_connection_1')->nullable();
                $table->string('ean_number_1');
                $table->string('current_supplier_1');
                $table->string('name_your_network_operator_1');
                $table->date('desired_switchover_date_1');
                $table->boolean('digitale')->nullable();
                $table->boolean('domiciliering')->nullable();
                $table->boolean('advance_invoices')->nullable();
                $table->boolean('my_advance_invoices')->nullable();
                $table->boolean('transfer')->nullable();
                $table->string('kWh_dag');
                $table->string('kWh_nacht');
                $table->string('kWh_excl_nacht');
                $table->string('annual_consumption');
                $table->string('electriciteit');
                $table->string('voorschotbedrag');
                $table->string('annual_consumption_1');
                $table->string('annual_consumption_2');
                $table->string('bepaaid')->nullable();
                $table->string('gebaseerd')->nullable();
                $table->string('maandelijks')->nullable();
                $table->string('naam_1');
                $table->date('date_1');
                $table->string('place_1');
                $table->boolean('personen')->nullable();
                $table->boolean('emails_or_text_messages')->nullable();
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
                $table->string('plaats');
                $table->string('customer_n');
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
        Schema::dropIfExists('lum_res_comfies');
    }
}
