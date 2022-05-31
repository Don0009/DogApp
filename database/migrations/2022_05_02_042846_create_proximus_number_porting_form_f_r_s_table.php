<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProximusNumberPortingFormFRSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proximus_number_porting_form_f_r_s', function (Blueprint $table) {
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

// table one starts



            //$table->string('gsm_num_1');
            $table->string('gsm_num_2');
            $table->string('gsm_num_3')->nullable();
            $table->string('gsm_num_4')->nullable();
            $table->string('gsm_num_5')->nullable();
            $table->string('gsm_num_6')->nullable();
            $table->string('gsm_num_7')->nullable();


            //$table->text('sim_num_of_other_operator_1');
            $table->text('sim_num_of_other_operator_2');
            $table->text('sim_num_of_other_operator_3')->nullable();
            $table->text('sim_num_of_other_operator_4')->nullable();
            $table->text('sim_num_of_other_operator_5')->nullable();
            $table->text('sim_num_of_other_operator_6')->nullable();
            $table->text('sim_num_of_other_operator_7')->nullable();


           // $table->text('reload_card_1');
            $table->text('reload_card_2');
            $table->text('reload_card_3')->nullable();
            $table->text('reload_card_4')->nullable();
            $table->text('reload_card_5')->nullable();
            $table->text('reload_card_6')->nullable();
            $table->text('reload_card_7')->nullable();
            $table->text('reload_card_8')->nullable();


          //  $table->text('subscription_1');
            // $table->text('subscription_2');
            // $table->text('subscription_3')->nullable();
            // $table->text('subscription_4')->nullable();
            // $table->text('subscription_5')->nullable();
            // $table->text('subscription_6')->nullable();
            // $table->text('subscription_7')->nullable();
            // $table->text('subscription_8')->nullable();


            //$table->text('simkaartnum_of_proximus_1');
            $table->text('simkaartnum_of_proximus_2');
            $table->text('simkaartnum_of_proximus_3')->nullable();
            $table->text('simkaartnum_of_proximus_4')->nullable();
            $table->text('simkaartnum_of_proximus_5')->nullable();
            $table->text('simkaartnum_of_proximus_6')->nullable();
            $table->text('simkaartnum_of_proximus_7')->nullable();










// table two ends
$table->string('TELEFOONNUMMERS_2');
$table->string('TELEFOONNUMMERS_3')->nullable();
$table->string('TELEFOONNUMMERS_4')->nullable();
$table->string('TELEFOONNUMMERS_5')->nullable();

//$table->string('Of_nummerreeks_van');
$table->string('Of_nummerreeks_van_1');
$table->string('Of_nummerreeks_van_2');
$table->string('Of_nummerreeks_van_3');
$table->string('Of_nummerreeks_van_4');

// $table->string('tot_1');
$table->string('tot_2')->nullable();
$table->string('tot_3')->nullable();
$table->string('tot_4')->nullable();
$table->string('tot_5')->nullable();




            $table->string('Dienst_1');
            $table->string('Dienst_2')->nullable();
            $table->string('service_id_num_1');
            $table->string('service_id_num_2')->nullable();

            $table->date('date');

            $table->string('ref_id');

            // universal fields

            $table->string('doc_id')->nullable();
            $table->string('doc_sign_url')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();


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
        Schema::dropIfExists('proximus_number_porting_form_f_r_s');
    }
}
