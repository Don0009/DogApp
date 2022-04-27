<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_requests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('language');
            $table->string('name');
            $table->string('f_name');
            $table->string('date_of_birth');
            $table->string('id_card_number');
            $table->string('card_type');
            $table->string('nationality');
            $table->string('company_name');
            $table->string('rpm_no');
            $table->string('vat');
            $table->text('street');
            $table->text('box');
            $table->text('locality');
            $table->string('postal_code');
            $table->string('phone');
            $table->string('fax');
            $table->string('mail');
            $table->string('contact_details')->nullable();
            $table->string('authorize')->nullable();
            $table->string('agree')->nullable();
            $table->string('bank_account');
            $table->string('billing_address');
            $table->text('street1');
            $table->text('box1');
            $table->text('locality1');
            $table->string('postal_code1');
            $table->string('payment_method');
            $table->string('receive');
            $table->string('receive_electronic')->nullable();
            $table->string('contract');
            $table->text('formula');
            $table->string('phone_num');
            $table->string('number_sim');
            $table->string('sim_card');
            $table->string('contract_length');
            $table->date('date_renewal');
            $table->text('distributer');
            $table->string('client_number');
            $table->string('distributor_number');

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
        Schema::dropIfExists('subscription_requests');
    }
}
