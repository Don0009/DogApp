<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProximusMultiContactFormDUSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proximus_multi_contact_form_d_u_s', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('phone');
            $table->string('sim_phase_r');
            $table->string('sim_type_r');
            $table->string('sim_num');
            $table->string('gsm_num');
            $table->string('proximus_subs_r');
            $table->string('mobilus_r');
            $table->string('mobilus_full_r');
            $table->string('app_social');
            $table->string('mob_epic_flex');
            $table->string('gb_package');
            $table->string('package_type_1');


            // SECOND PHASE
            $table->string('sim_phase_r_2');
            $table->string('sim_type_r_2');
            $table->string('sim_num_2');
            $table->string('gsm_num_2');
            $table->string('proximus_subs_r_2');
            $table->string('mobilus_r_2');
            $table->string('mobilus_full_r_2');
            $table->string('app_social_2');
            $table->string('mob_epic_flex_2');
            $table->string('gb_package_2');
            $table->string('package_type_r_2');

            //THIRD PHASE

            $table->string('sim_phase_r_3');
            $table->string('sim_type_r_3');
            $table->string('sim_num_3');
            $table->string('gsm_num_3');
            $table->string('proximus_subs_r_3');
            $table->string('mobilus_r_3');
            $table->string('mobilus_full_r_3');
            $table->string('app_social_3');
            $table->string('mob_epic_flex_3');
            $table->string('gb_package_3');
            $table->string('package_type_r_3');































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
        Schema::dropIfExists('proximus_multi_contact_form_d_u_s');
    }
}
