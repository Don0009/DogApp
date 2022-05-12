<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumberRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('number_requests', function (Blueprint $table) {
            $table->id();
            $table->string('form_lang');
            $table->date('memo_date');
            $table->string('title');
            $table->string('language');
            $table->string('customer_number');
            $table->string('name');
            $table->string('company_name');
            $table->string('rpm_number');
            $table->string('phone');
            $table->string('payment');
            $table->string('customer_name');
            $table->string('company_name1');
            $table->string('name_mandated');
            $table->string('rpm_number1');
            $table->string('customer_number1');
            $table->string('phone_attachment');
            $table->string('sim_num1');
            $table->string('sim_num2')->nullable();
            $table->string('sim_num3')->nullable();
            $table->string('sim_num4')->nullable();
            $table->string('sim_num5')->nullable();
            $table->string('phone_number1');
            $table->string('phone_number2')->nullable();
            $table->string('phone_number3')->nullable();
            $table->string('phone_number4')->nullable();
            $table->string('phone_number5')->nullable();
            $table->date('exec_date1');
            $table->date('exec_date2')->nullable();
            $table->date('exec_date3')->nullable();
            $table->date('exec_date4')->nullable();
            $table->date('exec_date5')->nullable();
            $table->string('evidence')->nullable();
            $table->string('docu1');
            $table->string('docu2');
            $table->string('distributor_name');
            $table->string('distribtuor_num');
            $table->date('date1');
            $table->date('date2');

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
        Schema::dropIfExists('number_requests');
    }
}
