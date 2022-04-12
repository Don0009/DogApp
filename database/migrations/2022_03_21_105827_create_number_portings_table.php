<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumberPortingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('number_portings', function (Blueprint $table) {
            $table->id();
            $table->string('sign_of_customer');
            $table->string('subscription')->nullable();
            $table->string('language');
            $table->string('title');
            $table->string('customer_type');
            $table->string('name');
            $table->string('f_name');
            $table->text('street');
            $table->string('no');
            $table->string('box');
            $table->string('postal_code');
            $table->string('town');
            $table->string('country');
            $table->string('id_card');
            $table->string('mail');
            $table->string('busines');
            $table->string('company_number');
            $table->string('legal_status');
            $table->string('company_name');
            $table->string('client_num');
            $table->string('contact_person');
            $table->string('card_1')->nullable();
            $table->string('mobile_number_1');
            $table->string('sim_number_old_1');
            $table->string('sim_number_orange_1');
            $table->string('customer_number_1');
            $table->string('card_2')->nullable();
            $table->string('mobile_number_2');
            $table->string('sim_number_old_2');
            $table->string('sim_number_orange_2');
            $table->string('customer_number_2');
            $table->string('card_3')->nullable();
            $table->string('mobile_number_3');
            $table->string('sim_number_old_3');
            $table->string('sim_number_orange_3');
            $table->string('customer_number_3');
            $table->string('duplicate');
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
        Schema::dropIfExists('number_portings');
    }
}
