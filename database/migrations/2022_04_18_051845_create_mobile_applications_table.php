<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('form_lang');
            $table->string('f_name');
            $table->string('name');
            $table->string('id_card_number');
            $table->text('adress');
            $table->string('no');
            $table->text('box');
            $table->string('postal_code');
            $table->text('city');
            $table->string('phone');
            $table->string('gsm');
            $table->string('mail');
            $table->date('date_of_birth');
            $table->boolean('gender');
            $table->boolean('language');
            $table->string('vat')->nullable();
            $table->string('new_sim_number');
            $table->string('mobile_subscription')->nullable();
            $table->string('subscription1')->nullable();
            $table->string('subscription2')->nullable();
            $table->string('subscription3')->nullable();
            $table->string('subscription4')->nullable();
            $table->string('subscription5')->nullable();
            $table->string('subscription6')->nullable();
            $table->string('sub_name1')->nullable();
            $table->string('sub_name2')->nullable();
            $table->string('sub_name3')->nullable();
            $table->string('sub_name4')->nullable();
            $table->string('sub_name5')->nullable();
            $table->boolean('new_num1')->nullable();
            $table->boolean('new_num2')->nullable();
            $table->boolean('new_num3')->nullable();
            $table->boolean('new_num4')->nullable();
            $table->boolean('new_num5')->nullable();
            $table->boolean('num_transfer1')->nullable();
            $table->boolean('num_transfer2')->nullable();
            $table->boolean('num_transfer3')->nullable();
            $table->boolean('num_transfer4')->nullable();
            $table->boolean('num_transfer5')->nullable();
            $table->string('payment_method');
            $table->string('iban_number');
            $table->string('name_account_holder');
            $table->string('submitted_contact')->nullable();
            $table->string('made_in')->nullable();
            $table->string('the')->nullable();
            $table->string('dealer_reference');
            $table->string('agent');
            $table->string('mob_num1');
            $table->boolean('current_payment_method1');
            $table->string('current_sim_number1');
            $table->text('name1');
            $table->text('f_name1');
            $table->string('customer_number1');
            $table->string('current_operator1');
            $table->date('date1');
            $table->string('mob_num2');
            $table->boolean('current_payment_method2');
            $table->string('current_sim_number2');
            $table->text('name2');
            $table->text('f_name2');
            $table->string('customer_number2');
            $table->string('current_operator2');
            $table->date('date2');
            $table->string('mob_num3');
            $table->boolean('current_payment_method3');
            $table->string('current_sim_number3');
            $table->text('name3');
            $table->text('f_name3');
            $table->string('customer_number3');
            $table->string('current_operator3');
            $table->date('date3');
            $table->string('mob_num4');
            $table->boolean('current_payment_method4');
            $table->string('current_sim_number4');
            $table->text('name4');
            $table->text('f_name4');
            $table->string('customer_number4');
            $table->string('current_operator4');
            $table->date('date4');
            $table->string('mob_num5');
            $table->boolean('current_payment_method5');
            $table->string('current_sim_number5');
            $table->string('name5');
            $table->string('f_name5');
            $table->string('customer_number5');
            $table->string('current_operator5');
            $table->date('date5');


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
        Schema::dropIfExists('mobile_applications');
    }
}
