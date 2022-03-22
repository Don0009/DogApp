<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumberPortaingDusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('number_portaing_dus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('language');
            $table->string('subscription');
            $table->string('name');
            $table->string('f_name');
            $table->text('street');
            $table->string('no');
            $table->string('box');
            $table->string('town');
            $table->string('postal_code');
            $table->string('country');
            $table->string('mail');
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
        Schema::dropIfExists('number_portaing_dus');
    }
}
