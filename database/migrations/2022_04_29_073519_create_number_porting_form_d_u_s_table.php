<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumberPortingFormDUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('number_porting_form_d_u_s', function (Blueprint $table) {
            $table->id();
            $table->string('seller_id');
            $table->string('name');
            $table->string('full_name');
            $table->string('customer_other_network_number');
            $table->string('email_address');
            $table->string('company_name');
            $table->string('company_number');
            $table->string('customer_other_network_number_p');
            $table->string('email_address_p');
            $table->string('mobile_pack_radio');
            $table->string('qua_of_num_port');
            $table->string('land_line_to_be_ported');
            $table->string('street');
            $table->string('no');
            $table->string('floor');
            $table->string('box');
            $table->string('postcode');
            $table->string('township');

            $table->string('TELEFOONNUMMERS');
            $table->string('TELEFOONNUMMERS_2');
            $table->string('TELEFOONNUMMERS_3');
            $table->string('TELEFOONNUMMERS_4');
            $table->string('TELEFOONNUMMERS_5');

            $table->string('Of_nummerreeks_van');
            $table->string('Of_nummerreeks_van_1');
            $table->string('Of_nummerreeks_van_2');
            $table->string('Of_nummerreeks_van_3');
            $table->string('Of_nummerreeks_van_4');

            $table->string('tot_1');
            $table->string('tot_2');
            $table->string('tot_3');
            $table->string('tot_4');
            $table->string('tot_5');
            $table->string('Dienst_1');
            $table->string('Dienst_2');
            $table->string('service_id_num_1');
            $table->string('service_id_num_2');

            $table->date('date');
































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
        Schema::dropIfExists('number_porting_form_d_u_s');
    }
}
