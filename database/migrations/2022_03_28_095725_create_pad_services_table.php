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
            $table->boolean('you_are_a_customer_of_engie')->nullable();
            $table->boolean('oil_installation')->nullable();
            $table->boolean('gas_installation')->nullable();
            $table->boolean('electrical_installation')->nullable();
            $table->boolean('you_are_not_customer_of_engie_electrabel')->nullable();
            $table->boolean('oil_installation_1')->nullable();
            $table->boolean('gas_installation_1')->nullable();
            $table->boolean('electrical_installation_1')->nullable();

            $table->boolean('if_you_do_not_wish_to_receive')->nullable();
            $table->string('drawn_up');
            $table->date('the');
            $table->string('of_which_you_acknowledge');
            $table->string('to_the_customer');

            $table->boolean('residential_customer_1')->nullable();
            $table->boolean('madame_1')->nullable();
            $table->boolean('monsieur_1')->nullable();
            $table->string('first_last_name_1');
            $table->integer('customer_no_2');
            $table->date('date_of_birth_1');
            $table->string('place_of_birth_1');
            $table->boolean('professional_client_1')->nullable();
            $table->string('company_name_1');
            $table->string('legal_status_1');
            $table->string('customer_no_3');
            $table->string('code_nace_1');
            $table->string('tva_be_1');
            $table->string('rpm_1');
            $table->integer('phone_1');
            $table->string('gsm_1');
            $table->string('email_1');
            $table->boolean('you_wish_to_be_kept_informed_1')->nullable();
            $table->boolean('you_wish_to_receive_communications_1')->nullable();
            $table->string('rue_2');
            $table->string('noo_2');
            $table->string('bte_2');
            $table->string('etage_2');
            $table->string('appartement_2');
            $table->string('code_postal_2');
            $table->string('localité_2');
            $table->string('document_id_2');
            $table->string('représentée_par_2');

            $table->string('rue_3');
            $table->string('noo_3');
            $table->string('bte_3');
            $table->string('etage_3');
            $table->string('appartement_3');
            $table->string('code_postal_3');
            $table->string('localité_3');
            $table->string('year_of_first_use_3');
            $table->boolean('you_are_a_customer_of_engie_3')->nullable();
            $table->boolean('oil_installation_3')->nullable();
            $table->boolean('gas_installation_3')->nullable();
            $table->boolean('electrical_installation_3')->nullable();
            $table->boolean('you_are_not_customer_of_engie_electrabel_3')->nullable();
            $table->boolean('oil_installation_4')->nullable();
            $table->boolean('gas_installation_4')->nullable();
            $table->boolean('electrical_installation_4')->nullable();
            $table->boolean('if_you_do_not_wish_to_receive_3')->nullable();
            $table->string('drawn_up_3');
            $table->date('the_3');
            $table->string('of_which_you_acknowledge_3');
            $table->string('to_the_customer_3');

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
