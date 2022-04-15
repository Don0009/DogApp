<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumberPortaingDusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('number_portaing_dus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('language');
            $table->string('subscription')->nullable();
            $table->string('name');
            $table->string('f_name');
            $table->text('street');
            $table->string('no');
            $table->string('box');
            $table->string('town');
            $table->string('postal_code');
            $table->string('country');
            $table->string('mail');
            $table->string('id_card_no');
            $table->string('phone_number');
            $table->string('company_name');
            $table->string('legal_status');
            $table->string('client_num');
            $table->string('company_num');
            $table->string('authorized_represent');
            $table->string('old_prepaid_subscription_1')->nullable();
            $table->string('code_mobile_1');
            $table->string('num_mobile_1');
            $table->string('voice_1')->nullable();
            $table->string('data_1')->nullable();
            $table->string('sim_card_1');
            $table->string('customer_no_1');
            $table->string('new_prepaid_subscription_1')->nullable();
            $table->string('temp_mobile_no_1');
            $table->string('chosen_formula_1');
            $table->string('new_sim_card_1');
            $table->string('text_1');
            $table->string('old_prepaid_subscription_2')->nullable();
            $table->string('code_mobile_2');
            $table->string('num_mobile_2');
            $table->string('voice_2')->nullable();
            $table->string('data_2')->nullable();
            $table->string('sim_card_2');
            $table->string('customer_no_2');
            $table->string('new_prepaid_subscription_2')->nullable();
            $table->string('temp_mobile_no_2');
            $table->string('chosen_formula_2');
            $table->string('new_sim_card_2');
            $table->string('text_2');
            $table->string('old_prepaid_subscription_3')->nullable();
            $table->string('code_mobile_3');
            $table->string('num_mobile_3');
            $table->string('voice_3')->nullable();
            $table->string('data_3')->nullable();
            $table->string('sim_card_3');
            $table->string('customer_no_3');
            $table->string('new_prepaid_subscription_3')->nullable();
            $table->string('temp_mobile_no_3');
            $table->string('new_sim_card_3');
            $table->string('chosen_formula_3');
            $table->string('text_3');
            $table->string('copies');
            $table->date('date');
            $table->string('customer_sig');
            $table->string('name_1');
            $table->string('telephone_number');
            $table->string('faxnr');
            $table->string('dealer_code');





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
        Schema::dropIfExists('number_portaing_dus');
    }
}
