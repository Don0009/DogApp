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
            $table->string('form_lang');
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
            $table->string('fix_amount')->nullable();
            $table->string('percentage')->nullable();
            $table->text('products')->nullable();
            $table->text('destination')->nullable();

            $table->string('fix_amount1')->nullable();
            $table->string('percentage1')->nullable();
            $table->text('products1')->nullable();
            $table->text('destination1')->nullable();

            $table->string('fix_amount2')->nullable();
            $table->string('percentage2')->nullable();
            $table->text('products2')->nullable();
            $table->text('destination2')->nullable();
            $table->string('split_billing')->nullable();
            $table->date('date_renewal');
            $table->text('distributer');
            $table->string('client_number');
            $table->string('distributor_number');
            // 2nd form
            $table->text('easier_company_name');
            $table->string('easier_name');
            $table->string('easier_f_name');
            $table->text('easier_street');
            $table->string('easier_box');
            $table->string('easier_postal_code');
            $table->longtext('easier_locality');
            $table->string('easier_cus_number');
            $table->string('american_express');
            $table->string('visa_card');
            $table->date('due_date');
            $table->date('agre_date');
            $table->text('agre_locality');
            // 3rd form
            $table->string('mandate_number');
            $table->string('debtor_name');
            $table->string('signed_f_name');
            $table->longtext('signed_street');
            $table->text('signed_box');
            $table->text('signed_locality');
            $table->string('signed_postal_code');
            $table->text('signed_country');
            $table->string('signed_iban');
            $table->string('signed_bic');
            $table->string('concluded');
            $table->date('signed_date');
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
