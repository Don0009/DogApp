<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTelenetQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telenet_questions', function (Blueprint $table) {
            $table->date('date_of_request');

            $table->string('first_name'); // voornam
            $table->string('name');   // Naam
            $table->string('cell_phone_number');   // GSM-nummer
            $table->string('email_address_1');   // Emailadres
            $table->string('address');   // Adres
            $table->string('postcode_1');   // Postcode
            $table->string('city');   //city
            $table->date('date_of_birth');   //Geboortedatum:
            $table->string('birth_place');   //Geboorteplaats:
            $table->string('id_card_number');// Identiteitskaartnummer:



            //Second Heading // Klantgegevens: business Klant

            $table->string('business');// Bedrijf:
            $table->string('company_form');// Vennootschapsvorm
             $table->string('company_number');// Ondernemingsnummer:
            $table->string('customer_address');// Klantadres
            $table->string('postcode_2');// postcode
            $table->string('city_2');// stad
            $table->string('first_name_contact_person');// Voornaam contactpersoon
            $table->string('name_contact_person');// Naam contactpersoon
            $table->string('cell_phone_2');// GSM-nummer
            $table->string('email_address_2');// E-mailadres
            $table->string('if_different_from_customer_address_billing');// Indien verschilled van klantadres, facturatie
            $table->string('if_different_from_customer_address_installation');// Indien verschilled van klantadres, Installatie

            // Third Heading

            $table->string('selected_product'); //  gekozen_product
            $table->date('desired_install_date');
            $table->string('wish_comments');

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
        Schema::dropIfExists('telenet_questions');
    }
}
