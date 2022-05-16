<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnergyTransferDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energy_transfer_documents', function (Blueprint $table) {
            $table->id();
            $table->date('date_acquisition');
            $table->string('street');
            $table->string('nr_4');
            $table->string('bus');
            $table->string('plaat');
            $table->string('postcode');
            $table->string('ean_electricity');
            $table->boolean('single_meter')->nullable();
            $table->string('nr');
            $table->string('meter_type');
            $table->string('nachtmeter');
            $table->string('nr_1');
            $table->string('dag');
            $table->string('nachi');
            $table->boolean('exclusief_nachtmeter')->nullable();
            $table->string('nr_2');
            $table->string('space');
            $table->string('digital_meter');
            $table->string('nr_3');
            $table->string('dag_1');
            $table->string('nachi_1');
            $table->string('dag_2');
            $table->string('nachi_2');
            $table->boolean('nee')->nullable();
            $table->string('do_you_have_budget');
            $table->string('meter_nummer');
            $table->string('meter_stand');
            $table->string('nee_1')->nullable();
            $table->string('nee_2')->nullable();
            $table->string('ondernemingsnr');
            $table->string('first_name');
            $table->string('name_3');
            $table->string('company_name');
            $table->string('tel');
            $table->string('e_mail');
            $table->string('straat');
            $table->string('plaat_1');
            $table->string('nr_5');
            $table->string('bus_2');
            $table->string('postcode_2');
            $table->string('supplier_electricity');
            $table->string('natural_gas');
            $table->string('nee_3')->nullable();
            $table->string('ondernemingsnr_1');
            $table->string('first_name_1');
            $table->string('name_4');
            $table->string('company_name_1');
            $table->string('tel_1');
            $table->string('e_mail_1');
            $table->string('straat_1');
            $table->string('plaat_2');
            $table->string('nr_6');
            $table->string('bus_3');
            $table->string('postcode_3');
            $table->string('supplier_electricity_1');
            $table->string('natural_gas_1');
            $table->string('huurder')->nullable();
            $table->string('home_is_currently_used')->nullable();
            $table->string('home_is_currently_used_1')->nullable();
            // $table->string('handtekening');
            // $table->string('handtekening_1');
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
        Schema::dropIfExists('energy_transfer_documents');
    }
}
