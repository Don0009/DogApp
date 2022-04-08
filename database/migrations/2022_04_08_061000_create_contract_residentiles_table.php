<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractResidentilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_residentiles', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('legal_form');
            $table->string('name');
            $table->string('first_name');
            $table->string('client_number');
            $table->string('nace_code');
            $table->string('tel');
            $table->string('gsm');
            $table->string('e_mail');
            $table->string('you_wish_to_receive')->nullable();
            $table->string('btw_be');
            $table->string('rpr');
            $table->char('company_name_1');
            $table->string('legal_form_1');
            $table->char('name_1');
            $table->char('first_name_1');
            $table->string('street');
            $table->string('no');
            $table->string('bus');
            $table->string('postcode');
            $table->string('place');
            $table->string('documnet_id');
            $table->string('electrabel_sa_1');

            $table->string('electrabel_sa_2');
            $table->string('street_1');
            $table->string('no_1');
            $table->string('floor');
            $table->string('bus_1');
            $table->string('apartment');
            $table->string('post_code');
            $table->string('place_1');
            $table->string('electricity');
            $table->string('natural_gas');
            $table->string('excluding_night');
            $table->string('gemengd_professioneel_verbruik')->nullable();
            $table->string('only_professional_use')->nullable();
            $table->string('in_case_of_moving_house')->nullable();
            $table->string('you_already_have_contract')->nullable();

            $table->string('clear_selection')->nullable();
            $table->string('you_move_or_build')->nullable();
            $table->string('you_already_have_an_electricity_contract')->nullable();
            $table->string('you_want_to_change_your_existing')->nullable();
            $table->string('you_want_a_contract_for_an_extra')->nullable();
            $table->string('you_move_or_build_1')->nullable();
            $table->string('you_already_have_an_electricity_contract_1')->nullable();
            $table->string('you_want_to_change_your_existing_1')->nullable();
            $table->string('you_move_or_build_2')->nullable();
            $table->string('you_already_have_an_electricity_contract_2')->nullable();
            $table->string('you_want_to_change_your_existing_2')->nullable();
            $table->string('you_want_to_change_your_existing_3')->nullable();
            $table->string('place_2');
            $table->date('desired_start_date');
            $table->boolean('clear_selection_1')->nullable();
            $table->boolean('you_move_or_build_3')->nullable();
            $table->boolean('you_already_have_an_electricity_contract_3')->nullable();
            $table->boolean('you_want_to_change_your_existing_4')->nullable();
            $table->boolean('you_want_a_contract_for_an_extra_1')->nullable();
            $table->boolean('you_move_or_build_4')->nullable();
            $table->boolean('you_already_have_an_electricity_contract_4')->nullable();
            $table->boolean('you_want_to_change_your_existing_5')->nullable();
            $table->boolean('you_move_or_build_5')->nullable();
            $table->boolean('you_already_have_an_electricity_contract_5')->nullable();
            $table->boolean('you_want_to_change_your_existing_6')->nullable();
            $table->string('place_3');
            $table->date('desired_start_date_1');
            $table->boolean('valid_for_the_two_energies')->nullable();
            $table->string('code_p');
            $table->boolean('monthly')->nullable();
            $table->boolean('bimonthly')->nullable();
            $table->boolean('quarterly_advance')->nullable();
            $table->boolean('by_e_mail')->nullable();
            $table->boolean('per_post')->nullable();
            $table->boolean('by_bank_transfer')->nullable();
            $table->boolean('via_domiciliëring')->nullable();
            $table->boolean('through_a_new')->nullable();
            $table->string('debit_account_number');
            $table->string('drawn_up');
            $table->date('of_which_the_customer');
            $table->string('handtekening');
            $table->boolean('do_not_wish_to_receive_commercial_communications')->nullable();
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
        Schema::dropIfExists('contract_residentiles');
    }
}
