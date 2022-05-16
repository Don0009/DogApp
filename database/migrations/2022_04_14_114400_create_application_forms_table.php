<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('form_lang');
            $table->string('f_name');
            $table->string('name');
            $table->string('id_card_number');
            $table->text('adress');
            $table->string('no');
            $table->string('box');
            $table->string('postal_code');
            $table->string('commune');
            $table->string('type_of_habitat');
            $table->string('stage');
            $table->string('phone');
            $table->string('gsm');
            $table->string('mail');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('language');
            $table->text('society')->nullable();
            $table->string('vat')->nullable();
            $table->boolean('internet_connection')->nullable();
            $table->string('operator');
            // b
            $table->string('your_subscription');
            $table->integer('telephony_day_1')->nullable();
            $table->integer('telephony_day_2')->nullable();
            $table->string('telephony_hour_1')->nullable();
            $table->string('telephony_hour_2')->nullable();
            $table->string('mobile_tele_day_1')->nullable();
            $table->string('mobile_tele_day_2')->nullable();
            $table->string('fixe_telephony_hour_1')->nullable();
            $table->string('fixe_telephony_hour_2')->nullable();
            $table->string('decoder_1')->nullable();
            $table->string('decoder_2')->nullable();
            $table->string('allsport_1')->nullable();
            $table->string('allsport_2')->nullable();
            $table->boolean('movies_series_1');
            $table->boolean('movies_series_2')->nullable();
            $table->string('total_one_time_costs_vat');
            $table->string('total_monthly_costs_vat');
            $table->boolean('digital_tv');
            $table->boolean('type_number');
            $table->string('current_phone_number');
            $table->boolean('obt');
            $table->string('other');
            $table->string('client_number');
            $table->text('install_adress');
            $table->string('install_no');
            $table->string('install_box');
            $table->string('install_postal_code');
            $table->text('install_commune');
            $table->string('payment_method');
            $table->string('iban_number');
            $table->string('name_account_holder');
            $table->string('submitted_contact')->nullable();
            $table->string('made_in')->nullable();
            $table->string('the')->nullable();
            $table->string('contact_date');
            $table->string('dealer_reference');
            $table->string('agent');
            $table->string('undersigned');
            $table->string('main_line');
            $table->string('2nd_line');
            $table->string('holder_no');
            $table->string('street');
            $table->string('number');
            $table->text('add_box');
            $table->string('add_postal_code');
            $table->text('add_commune');
            $table->string('vat_number')->nullable();
            $table->string('current_operator')->nullable();
            $table->string('cus_number');
            $table->date('contact_date_1');



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
        Schema::dropIfExists('application_forms');
    }
}
