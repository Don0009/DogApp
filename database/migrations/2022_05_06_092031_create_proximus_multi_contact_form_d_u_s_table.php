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

            $table->text('client_name');
            $table->text('phone');
            $table->text('sim_phase_r');
            $table->text('sim_type_r');
            $table->text('sim_num');
            $table->text('gsm_num');
            $table->text('proximus_subs_r');
            $table->text('mobilus_r');
            $table->text('mobilus_full_r');
            $table->text('app_social');
            $table->text('mob_epic_flex');
            $table->text('gb_package');
            $table->text('package_type_1');


            // SECOND PHASE
            $table->text('sim_phase_r_2');
            $table->text('sim_type_r_2');
            $table->text('sim_num_2');
            $table->text('gsm_num_2');
            $table->text('proximus_subs_r_2');
            $table->text('mobilus_r_2');
            $table->text('mobilus_full_r_2');
            $table->text('app_social_2');
            $table->text('mob_epic_flex_2');
            $table->text('gb_package_2');
            $table->text('package_type_r_2');

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


            //FOURTH PHASE

            $table->string('sim_phase_r_4');
            $table->string('sim_type_r_4');
            $table->string('sim_num_4');
            $table->string('gsm_num_4');

            $table->longText('proximus_subs_r_4');
            $table->longText('mobilus_r_4');
            $table->longText('mobilus_full_r_4');
            $table->longText('app_social_4');
            $table->longText('mob_epic_flex_4');
            $table->longText('gb_package_4');
            $table->longText('package_type_r_4');



             //FOURTH PHASE

             $table->string('sim_phase_r_5');
             $table->string('sim_type_r_5');
             $table->string('sim_num_5');
             $table->string('gsm_num_5');

             $table->longText('proximus_subs_r_5');
             $table->longText('mobilus_r_5');
             $table->longText('mobilus_full_r_5');
             $table->longText('app_social_5');
             $table->longText('mob_epic_flex_5');
             $table->longText('gb_package_5');
             $table->longText('package_type_r_5');



             //Pour clients professionnels
                //  Carte SIM Supplémentaire – 1

             $table->string('sim_phase_r_pro_1');
             $table->string('sim_type_r_pro_1');
             $table->string('sim_num_pro_1');
             $table->string('gsm_num_pro_1');
             $table->string('proximus_subs_pro_1');
             $table->string('mobilus_r_pro_1');
             $table->string('mob_epic_flex_pro_1');
             $table->string('app_social_r_pro_1');
             $table->string('gb_package_pro_1');
             $table->string('package_type_r_pro_1');


              //Pour clients professionnels
                //  Carte SIM Supplémentaire – 2

                $table->string('sim_phase_r_pro_2');
                $table->string('sim_type_r_pro_2');
                $table->string('sim_num_pro_2');
                $table->string('gsm_num_pro_2');
                $table->string('proximus_subs_pro_2');
                $table->string('mobilus_r_pro_2');
                $table->string('mob_epic_flex_pro_2');
                $table->string('app_social_r_pro_2');
                $table->string('gb_package_pro_2');
                $table->string('package_type_r_pro_2');


                 //Pour clients professionnels
                //  Carte SIM Supplémentaire – 3

                $table->string('sim_phase_r_pro_3');
                $table->string('sim_type_r_pro_3');
                $table->string('sim_num_pro_3');
                $table->string('gsm_num_pro_3');
                $table->string('proximus_subs_pro_3');
                $table->string('mobilus_r_pro_3');
                $table->string('mob_epic_flex_pro_3');
                $table->string('app_social_r_pro_3');
                $table->string('gb_package_pro_3');
                $table->string('package_type_r_pro_3');



                  //Pour clients professionnels
                //  Carte SIM Supplémentaire – 4

                $table->longText('sim_phase_r_pro_4');
                $table->longText('sim_type_r_pro_4');
                $table->longText('sim_num_pro_4');
                $table->longText('gsm_num_pro_4');
                $table->longText('proximus_subs_pro_4');
                $table->longText('mobilus_r_pro_4');
                $table->longText('mob_epic_flex_pro_4');
                $table->longText('app_social_r_pro_4');
                $table->longText('gb_package_pro_4');
                $table->longText('package_type_r_pro_4');



                  //Pour clients professionnels
                //  Carte SIM Supplémentaire – 5

                $table->string('sim_phase_r_pro_5');
                $table->string('sim_type_r_pro_5');
                $table->longText('sim_num_pro_5');
                $table->longText('gsm_num_pro_5');
                $table->longText('proximus_subs_pro_5');
                $table->longText('mobilus_r_pro_5');
                $table->longText('mob_epic_flex_pro_5');
                $table->longText('app_social_r_pro_5');
                $table->longText('gb_package_pro_5');
                $table->longText('package_type_r_pro_5');


               // Last portion

               $table->text('additional_license');
               $table->text('client_name_anex_2');
               $table->text('current_phone_anex_2');
               $table->text('main_num_anex_2');

               //Migration

               $table->text('migration_1');
               $table->text('migration_2');
               $table->text('migration_3');
               $table->text('migration_4');
               $table->text('migration_5');
               $table->text('migration_6');
               $table->text('migration_7');
               $table->text('migration_8');
               $table->text('migration_9');
               $table->text('migration_10');
               $table->text('migration_11');
               $table->text('migration_12');


              // Migration list 2


              $table->text('migration_list_1');
              $table->text('migration_list_2');
              $table->text('migration_list_3');
              $table->text('migration_list_4');
              $table->text('migration_list_5');
              $table->text('migration_list_6');
              $table->text('migration_list_7');
              $table->text('migration_list_8');
              $table->text('migration_list_9');
              $table->text('migration_list_10');
              $table->text('migration_list_11');
              $table->text('migration_list_12');































































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
