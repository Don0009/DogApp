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
            $table->string('call_number_2')->nullable();
            $table->string('call_number_3')->nullable();
            $table->string('call_number_4')->nullable();
            $table->string('call_number_5')->nullable();
            $table->string('call_number_6')->nullable();
            $table->string('call_number_7')->nullable();
            $table->string('call_number_8')->nullable();

            $table->string('sim_card_other_operator_1');
            $table->string('sim_card_other_operator_2')->nullable();
            $table->string('sim_card_other_operator_3')->nullable();
            $table->string('sim_card_other_operator_4')->nullable();
            $table->string('sim_card_other_operator_5')->nullable();
            $table->string('sim_card_other_operator_6')->nullable();
            $table->string('sim_card_other_operator_7')->nullable();
            $table->string('sim_card_other_operator_8')->nullable();

            $table->string('customer_num_other_operator_1');
            $table->string('customer_num_other_operator_2')->nullable();
            $table->string('customer_num_other_operator_3')->nullable();
            $table->string('customer_num_other_operator_4')->nullable();
            $table->string('customer_num_other_operator_5')->nullable();
            $table->string('customer_num_other_operator_6')->nullable();
            $table->string('customer_num_other_operator_7')->nullable();
            $table->string('customer_num_other_operator_8')->nullable();



            $table->string('call_number_9');
            $table->string('call_number_10')->nullable();


            $table->string('current_operator_1');
            $table->string('current_operator_2')->nullable();


            $table->string('customer_num_other_operator_9');
            $table->string('customer_num_other_operator_10')->nullable();


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
