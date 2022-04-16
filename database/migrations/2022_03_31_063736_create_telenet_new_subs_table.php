<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelenetNewSubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telenet_new_subs', function (Blueprint $table) {
            $table->id();

            $table->string('call_number_1');
            $table->string('call_number_2');
            $table->string('call_number_3');
            $table->string('call_number_4');
            $table->string('call_number_5');
            $table->string('call_number_6');
            $table->string('call_number_7');
            $table->string('call_number_8');

            $table->string('sim_card_other_operator_1');
            $table->string('sim_card_other_operator_2');
            $table->string('sim_card_other_operator_3');
            $table->string('sim_card_other_operator_4');
            $table->string('sim_card_other_operator_5');
            $table->string('sim_card_other_operator_6');
            $table->string('sim_card_other_operator_7');
            $table->string('sim_card_other_operator_8');

            $table->string('customer_num_other_operator_1');
            $table->string('customer_num_other_operator_2');
            $table->string('customer_num_other_operator_3');
            $table->string('customer_num_other_operator_4');
            $table->string('customer_num_other_operator_5');
            $table->string('customer_num_other_operator_6');
            $table->string('customer_num_other_operator_7');
            $table->string('customer_num_other_operator_8');



            $table->string('call_number_9');
            $table->string('call_number_10');


            $table->string('current_operator_1');
            $table->string('current_operator_2');


            $table->string('customer_num_other_operator_9');
            $table->string('customer_num_other_operator_10');


            $table->date('date_edit');
            $table->longtext('date_signature_customer');

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
        Schema::dropIfExists('telenet_new_subs');
    }
}
