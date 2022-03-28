<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePadServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pad_services', function (Blueprint $table) {
            $table->id();
            $table->boolean('residential_customer')->nullable();
            $table->boolean('madame')->nullable();
            $table->boolean('monsieur')->nullable();
            $table->string('first_last_name');
            $table->integer('customer_no');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->boolean('professional_client')->nullable();
            $table->string('company_name');
            $table->string('legal_status');
            $table->string('customer_no_1');
            $table->string('code_nace');
            $table->string('tva_be');
            $table->string('rpm');
            $table->integer('phone');
            $table->string('gsm');
            $table->string('email');
            $table->boolean('you_wish_to_be_kept_informed')->nullable();
            $table->boolean('you_wish_to_receive_communications')->nullable();
            $table->string('rue');
            $table->string('noo');
            $table->string('bte');
            $table->string('etage');
            $table->string('appartement');
            $table->string('code_postal');
            $table->string('localité');
            $table->string('document_id');
            $table->string('représentée_par');
            $table->string('rue_1');
            $table->string('noo_1');
            $table->string('bte_1');
            $table->string('etage_1');
            $table->string('appartement_1');
            $table->string('code_postal_1');
            $table->string('localité_1');
            $table->string('year_of_first_use');
            $table->string('you_are_a_customer_of_engie');
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
        Schema::dropIfExists('pad_services');
    }
}
