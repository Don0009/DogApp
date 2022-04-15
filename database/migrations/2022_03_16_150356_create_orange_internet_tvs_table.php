<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangeInternetTvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orange_internet_tvs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->integer('mile');
            $table->string('form_lang');
            $table->string('partner_apllication');
            $table->char('name');
            $table->char('first_name');
            $table->string('street');
            $table->integer('number');
            $table->string('letter');
            $table->string('apartment_number');
            $table->string('floor');
            $table->string('bus');
            $table->string('township');
            $table->string('postcode');
            $table->string('gsm');
            $table->string('mail');
            $table->string('id_card_number');
            $table->string('orange_customer_number');
            $table->string('name_of_your_current_provider');
            $table->boolean('extra_decoder')->nullable();
            $table->boolean('internet_boost')->nullable();
            $table->string('customer_number_at_your_current_supplier');
            $table->date('id_card_number_d1');
            $table->date('id_card_number_d2');
            $table->date('id_card_number_d3');
            $table->text('additional_information');
            $table->string('file');
            $table->string('customer_number');
            $table->string('customer_type');
            $table->string('title');
            $table->text('language');
            $table->string('first_name_1');
            $table->string('name_1');
            $table->date('date_of_birth');
            $table->string('number_identiteitskaart');
            $table->string('telephone');
            $table->string('email_address');
            $table->string('street_1');
            $table->string('number_1');
            $table->string('postcode_1');
            $table->string('place');
            $table->string('vat_number');
            $table->boolean('care_of_the_automatic_migration')->nullable();
            $table->string('operator_name');
            $table->string('client_number');
            $table->string('easy_switch_id');
            $table->string('call_number_1');
            $table->string('call_number_2');
            $table->text('call_number_3')->nullable();
            $table->string('stopping_3');
            $table->string('sim_number');
            $table->string('original_operator');
            $table->string('desired_transfer_date');
            $table->string('immediately')->nullable();
            $table->string('call_number_5');
            $table->string('transfer_to_orange')->nullable();
           // $table->string('stop')->nullable();
            $table->string('sim_number_2');
            $table->string('original_operator_1');
            $table->string('desired_transfer_date_1');
            $table->string('call_number_6');
            $table->string('transfer_to_orange_4')->nullable();
            $table->string('sim_number_3');
            $table->string('original_operator_2');
            $table->string('desired_transfer_date_2');
            $table->boolean('immediately_3')->nullable();
            $table->boolean('transfer_to_orange_2')->nullable();
            $table->string('call_number_7');
           // $table->string('stop_3')->nullable();
            $table->string('sim_number_4');
            $table->string('original_operator_3');
            $table->string('transfer_date_3')->nullable();
            $table->boolean('immediately_4')->nullable();
            $table->boolean('on_the_installation_date_4')->nullable();
            $table->string('call_number_8');
            $table->boolean('transfer_to_orange_3')->nullable();
            $table->string('sim_number_5');
            $table->string('original_operator_4');
            $table->string('desired_transfer_date_4');
            $table->boolean('immediately_5')->nullable();
            $table->boolean('stopping_5')->nullable();
            $table->string('call_number_9');
            $table->string('op');
            $table->text('file_1');
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
        Schema::dropIfExists('orange_internet_tvs');
    }
}
