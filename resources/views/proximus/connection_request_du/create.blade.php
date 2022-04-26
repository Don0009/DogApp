@extends('layouts.backend')
@section('styles')
<style>
    .input-group-text {
        background-color: #727cf5;
        color: white !important;
    }



    .fr {
        float: right;
    }

    span {
        margin-bottom: 2px;
    }

</style>
@endsection
@section('content')

{{-- Master main container --}}
<div class="container">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <div class="row">
                {{-- changed --}}
                <div class="mb-3 col-md-6">
                    <label for="client_num" class="form-label">Partner<span class="text-danger">*</span></label>
                    <input type="client_num" class="form-control @error('partner') is-invalid @enderror" id="partner"
                        autocomplete="off" placeholder="partner" name="partner" value="{{ old('partner') }}" required>
                    @error('partner')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-2 col-md-6">
                    <label for="identity" class="form-label">ID<span class="text-danger">*</span></label>
                    <input type="identity" class="form-control @error('identity') is-invalid @enderror" id="identity"
                        autocomplete="off" placeholder="ID " name="identity" value="{{ old('identity') }}" required>
                    @error('identity')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="seller" class="form-label">Verkoper<span class="text-danger">*</span></label>
                    <input type="seller" class="form-control @error('seller') is-invalid @enderror" id="seller"
                        autocomplete="off" placeholder="Verkoper " name="seller" value="{{ old('seller') }}" required>
                    @error('seller')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 col-md-6">
                    <label for="gsm" class="form-label">GSM<span class="text-danger">*</span></label>
                    <input type="gsm" class="form-control @error('gsm') is-invalid @enderror" id="gsm"
                        autocomplete="off" placeholder="ID " name="gsm" value="{{ old('gsm') }}" required>
                    @error('gsm')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                {{-- title to be added --}}

                {{-- radios --}}

                <div class="mb-2 col-md-12">
                    <input type="radio" name="person_type" value="0" required>
                    <label for="person_type" class="form-label">Natuurlijke persoon (min. 18 j. - recto-kopie
                        identiteitskaart)</label>
                </div>

                <div class="mb-2 col-md-12">
                    <input type="radio" name="person_type" value="1" required>
                    <label for="person_type" class="form-label">Rechtspersoon (kopie statuten Staatsblad +
                        identiteitskaart) </label>
                </div>

                {{-- date --}}
                <div class="mb-2 col-md-6">
                    <label for="validity_of_id" class="form-label mt-2">Geldigheidsdatum van de identiteitskaart<span
                            class="text-danger">*</span></label>
                    <input class="form-control @error('validity_of_id') is-invalid @enderror mb-4 mb-md-0"
                        data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric"
                        id="validity_of_id" name="validity_of_id" value="{{ old('validity_of_id') }}" type="date"
                        required>

                </div>

                <div class="mb-2 col-md-6">
                    <label for="be" class="form-label">BE<span class="text-danger">*</span></label>
                    <input type="be" class="form-control @error('be') is-invalid @enderror" id="be" autocomplete="off"
                        placeholder="BE" name="be" value="{{ old('be') }}" required>
                    @error('be')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-3 col-md-6">
                    <input type="radio" name="VAT_is_exempted" value="1" required>
                    <label for="VAT_is_exempted" class="form-label">Btw-vrijstelling g (gelieve attest bij te
                        voegen)</label>
                </div>

                <div class="mb-2 mt-3 col-md-3">
                    <input type="radio" name="is_source_of_income" value="0" required>
                    <label for="is_source_of_income" class="form-label">Zelfstandige/Vrij beroep</label>
                </div>
                <div class="mb-2 mt-3 col-md-3">
                    <input type="radio" name="is_source_of_income" value="1" required>
                    <label for="is_source_of_income" class="form-label">Bedrijf</label>
                </div>
                <div class="mb-2 mt-5 col-md-3">
                    <input type="radio" name="is_title" value="0" required>
                    <label for="is_title" class="form-label">Mr.</label>
                    <input type="radio" name="is_title" class="ml-5" value="1" required>
                    <label for="is_title" class="form-label">Mvr.</label>
                </div>
                <div class="mb-2 mt-5 col-md-3">
                    <label for="number_of_customer" class="form-label">Nr. van de klant<span
                            class="text-danger">*</span></label>
                    <input type="number_of_customer"
                        class="form-control @error('number_of_customer') is-invalid @enderror" id="number_of_customer"
                        autocomplete="off" placeholder="Nr. Van De Klant" name="number_of_customer"
                        value="{{ old('number_of_customer') }}" required>
                    @error('number_of_customer')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-2 mt-5 col-md-3">
                    <label for="name" class="form-label">Naam<span class="text-danger">*</span></label>
                    <input type="name" class="form-control @error('name') is-invalid @enderror" id="name"
                        autocomplete="off" placeholder="Naam" name="name" value="{{ old('name') }}" required>
                    @error('name')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-5 col-md-3">
                    <label for="first_name" class="form-label">Voornaam<span class="text-danger">*</span></label>
                    <input type="first_name" class="form-control @error('first_name') is-invalid @enderror"
                        id="first_name" autocomplete="off" placeholder="Voornaam" name="first_name"
                        value="{{ old('first_name') }}" required>
                    @error('first_name')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-2 mt-3 col-md-6">
                    <label for="name_of_company" class="form-label"> Naam van bedrijf<span
                            class="text-danger">*</span></label>
                    <input type="name_of_company" class="form-control @error('name_of_company') is-invalid @enderror"
                        id="name_of_company" autocomplete="off" placeholder="Naam van bedrijf" name="name_of_company"
                        value="{{ old('name_of_company') }}" required>
                    @error('name_of_company')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-2 mt-3 col-md-6">
                    <label for="street" class="form-label">Straat<span class="text-danger">*</span></label>
                    <input type="street" class="form-control @error('street') is-invalid @enderror" id="street"
                        autocomplete="off" placeholder="Straat" name="street" value="{{ old('street') }}" required>
                    @error('street')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-2 mt-3 col-md-6">
                    <label for="street" class="form-label">Nr.<span class="text-danger">*</span></label>
                    <input type="no" class="form-control @error('no') is-invalid @enderror" id="no" autocomplete="off"
                        placeholder="Nr." name="no" value="{{ old('no') }}" required>
                    @error('no')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-3 col-md-6">
                    <label for="bus" class="form-label">Bus<span class="text-danger">*</span></label>
                    <input type="bus" class="form-control @error('bus') is-invalid @enderror" id="bus"
                        autocomplete="off" placeholder="Bus" name="bus" value="{{ old('bus') }}" required>
                    @error('bus')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-3 col-md-6">
                    <label for="postcode" class="form-label">Postcode<span class="text-danger">*</span></label>
                    <input type="postcode" class="form-control @error('postcode') is-invalid @enderror" id="postcode"
                        autocomplete="off" placeholder="Post Code" name="postcode" value="{{ old('postcode') }}"
                        required>
                    @error('postcode')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-3 col-md-6">
                    <label for="place" class="form-label">Plaats<span class="text-danger">*</span></label>
                    <input type="place" class="form-control @error('place') is-invalid @enderror" id="place"
                        autocomplete="off" placeholder="Plaats" name="place" value="{{ old('place') }}" required>
                    @error('postcode')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-3 col-md-6">
                    <label for="country" class="form-label">Land<span class="text-danger">*</span></label>
                    <input type="country" class="form-control @error('place') is-invalid @enderror" id="country"
                        autocomplete="off" placeholder="Plaats" name="country" value="{{ old('country') }}" required>
                    @error('country')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-3 col-md-6">
                    <label for="email" class="form-label">Email-Address<span class="text-danger">*</span></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        autocomplete="off" placeholder="Email-Address" name="email" value="{{ old('email') }}" required>
                    @error('email')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-4 col-md-4">
                    <label for="telephone" class="form-label">Telefoon<span class="text-danger">*</span></label>
                    <input type="telephone" class="form-control @error('place') is-invalid @enderror" id="telephone"
                        autocomplete="off" placeholder="Telefoon" name="telephone" value="{{ old('telephone') }}"
                        required>
                    @error('telephone')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-4 col-md-4">
                    <label for="gsm_2" class="form-label">Gsm<span class="text-danger">*</span></label>
                    <input type="gsm_2" class="form-control @error('gsm_2') is-invalid @enderror" id="gsm_2"
                        autocomplete="off" placeholder="Gsm" name="gsm_2" value="{{ old('gsm_2') }}" required>
                    @error('gsm_2')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-3 col-md-4">
                    <label for="date_of_birth" class="form-label mt-2">Geboortedatum<span
                            class="text-danger">*</span></label>
                    <input class="form-control @error('date_of_birth') is-invalid @enderror mb-4 mb-md-0"
                        data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric"
                        id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date" required>
                </div>

                <div class="mb-2 mt-3 col-md-4">
                    <label for="contact_person_name" class="form-label">Naam/voornaam (Contactpers.)<span
                            class="text-danger">*</span></label>
                    <input type="contact_person_name" class="form-control @error('place') is-invalid @enderror"
                        id="contact_person_name" autocomplete="off" placeholder="Naam/voornaam"
                        name="contact_person_name" value="{{ old('contact_person_name') }}" required>
                    @error('contact_person_name')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-3 col-md-4">
                    <label for="contact_person_telephone" class="form-label">Tel. nr. Contactpersoon<span
                            class="text-danger">*</span></label>
                    <input type="contact_person_telephone"
                        class="form-control @error('contact_person_telephone') is-invalid @enderror"
                        id="contact_person_telephone" autocomplete="off" placeholder="Tel. nr. Contactpersoon"
                        name="contact_person_telephone" value="{{ old('contact_person_telephone') }}" required>
                    @error('contact_person_telephone')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-5 col-md-2">
                    <input type="radio" name="is_title_2" value="0" required>
                    <label for="is_title" class="form-label">Mr.</label>
                </div>
                <div class="mb-2 mt-5 col-md-2">
                    <input type="radio" name="is_title_2" value="1" required>
                    <label for="is_title" class="form-label">Mvr.</label>
                </div>
                <div class="mb-2 mt-5 col-md-6">
                    <b style="font-size: 24px;">Installatieadres idem?</b>

                    <input type="radio" name="is_install_address_same" class="ml-2" value="0" required>
                    <label for="is_title" class="form-label">Ja</label>
                    <input type="radio" name="is_install_address_same" class="ml-2" value="1" required>
                    <label for="is_title" class="form-label">Neen</label>
                </div>
                <div class="mb-2 mt-3 col-md-6">
                    <label for="install_address" class="form-label">Adres<span class="text-danger">*</span></label>
                    <input type="install_address" class="form-control @error('install_address') is-invalid @enderror"
                        id="install_address" autocomplete="off" placeholder="Adres" name="install_address"
                        value="{{ old('install_address') }}" required>
                    @error('install_address')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="mb-2 mt-5 col-md-4">
                    <b style="font-size: 24px;">Facturatie</b>
                    <span class="ml-2">Digitaal:</span>

                    <input type="radio" name="invoice_receive_method" class="ml-2" value="0" required>
                    <label for="invoice_receive_method" class="form-label">Ja</label>
                    <input type="radio" name="invoice_receive_method" class="ml-2" value="1" required>
                    <label for="invoice_receive_method" class="form-label">Neen</label>
                </div>

                <div class="mb-2 mt-3 col-md-4">
                    <label for="email_2" class="form-label">Email-Address<span class="text-danger">*</span></label>
                    <input type="email_2" class="form-control @error('email_2') is-invalid @enderror" id="email_2"
                        autocomplete="off" placeholder="Email-Address" name="email_2" value="{{ old('email_2') }}"
                        required>
                    @error('email_2')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-3 col-md-4">
                    <label for="gsm_3" class="form-label">Gsm<span class="text-danger">*</span></label>
                    <input type="gsm_3" class="form-control @error('gsm_3') is-invalid @enderror" id="gsm_3"
                        autocomplete="off" placeholder="Gsm" name="gsm_3" value="{{ old('gsm_3') }}" required>
                    @error('gsm_3')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-3 col-md-6">
                    <label for="bank_account_number" class="form-label">Domiciliëring: Bankrekeningnummer: BE<span
                            class="text-danger">*</span></label>
                    <input type="bank_account_number"
                        class="form-control @error('bank_account_number') is-invalid @enderror" id="bank_account_number"
                        autocomplete="off" placeholder="Bankrekeningnummer: BE" name="bank_account_number"
                        value="{{ old('bank_account_number') }}" required>
                    @error('bank_account_number')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-2 mt-3 col-md-3">
                    <b style="font-size: 20px;">Facturatieadres idem?</b>


                    <div class="mt-2">
                        <input type="radio" name="is_billing_address_same_or_not" class="ml-2" value="0" required>
                        <label for="is_billing_address_same_or_not" class="form-label">Ja</label>
                        <input type="radio" name="is_billing_address_same_or_not" class="ml-2" value="1" required>
                        <label for="is_billing_address_same_or_not" class="form-label">Neen</label>
                    </div>
                </div>

                <div class="mb-2 mt-3 col-md-3">
                    <label for="adres" class="form-label">Adres<span class="text-danger">*</span></label>
                    <input type="adres" class="form-control @error('adres') is-invalid @enderror" id="adres"
                        autocomplete="off" placeholder="Adres" name="adres" value="{{ old('adres') }}" required>
                    @error('adres')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-2 mt-3  col-md-6">
                    <label for="name_or_number_of_previous_owner" class="form-label">Naam of nummer vorige eigenaar<span
                            class="text-danger">*</span></label>
                    <input type="name_or_number_of_previous_owner"
                        class="form-control @error('name_or_number_of_previous_owner') is-invalid @enderror"
                        id="name_or_number_of_previous_owner" autocomplete="off"
                        placeholder="Naam of nummer vorige eigenaar" name="name_or_number_of_previous_owner"
                        value="{{ old('name_or_number_of_previous_owner') }}" required>
                    @error('name_or_number_of_previous_owner')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-2 mt-3 col-md-6">

                    <label for="name_or_number_of_previous_owner" class="form-label">Ik wens geen commerciële informatie
                        te ontvangen over de producten, diensten en promoties van Proximus via<span
                            class="text-danger">*</span></label>

                    <div class="mt-2">
                        <input type="radio" name="wish_to_receive_info_means" class="ml-2" value="0" required>
                        <label for="wish_to_receive_info_means" class="form-label">Telefoon of gsm</label>
                        <input type="radio" name="wish_to_receive_info_means" class="ml-2" value="1" required>
                        <label for="wish_to_receive_info_means" class="form-label">E-mail</label>
                        <input type="radio" name="wish_to_receive_info_means" class="ml-2" value="2" required>
                        <label for="wish_to_receive_info_means" class="form-label">Sms</label>
                        <input type="radio" name="wish_to_receive_info_means" class="ml-2" value="3" required>
                        <label for="wish_to_receive_info_means" class="form-label">Post</label>
                    </div>
                </div>


                <div class="mb-2   col-md-3">
                    <h4 class="mb-4"><b class="">B. PACKS</b></h4>
                    <input type="radio" name="tv_packs_options" class="ml-2" value="0" required>
                    <label for="tv_packs_options" class="form-label">Flex S (INT + TV)</label>


                </div>

                <div class="mb-2 mt-5 col-md-9">
                    <input type="radio" name="tv_packs_options" class="ml-2" value="1" required>
                    <label for="tv_packs_options" class="form-label">Flex (INT + TV + TEL) + (Wifi Booster + Family life
                        Premium)</label>
                </div>

                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="tv_packs_options" class="ml-2" value="2" required>
                    <label for="tv_packs_options" class="form-label">+ tv-optie</label>
                </div>


                <div class="mb-2 mt-5   col-md-9">

                    <input type="radio" name="tv_packs_options" class="ml-2" value="3" required>
                    <label for="tv_packs_options" class="form-label"> Flex Premium (INT + TV(2) + TEL (BE+EU) + All
                        Stars & Sports) +
                        (Wifi Booster + Family life Premium)
                    </label>
                </div>

                {{-- Mobile Packs --}}
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="mobile_packs_options" class="ml-2" value="0" required>
                    <label for="mobile_packs_options" class="form-label">Mobiel</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="mobile_packs_options" class="ml-2" value="1" required>
                    <label for="mobile_packs_options" class="form-label">Mobile Flex</label>
                </div>

                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="mobile_packs_options" class="ml-2" value="2" required>
                    <label for="mobile_packs_options" class="form-label">Mobile Flex +</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="mobile_packs_options" class="ml-2" value="3" required>
                    <label for="mobile_packs_options" class="form-label">Unlimited Light</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="mobile_packs_options" class="ml-2" value="4" required>
                    <label for="mobile_packs_options" class="form-label">Unlimited</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="mobile_packs_options" class="ml-2" value="5" required>
                    <label for="mobile_packs_options" class="form-label">Unlimited Premium</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="mobile_packs_options" class="ml-2" value="6" required>
                    <label for="mobile_packs_options" class="form-label">Mobile Flex Full Control</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="mobile_packs_options" class="ml-2" value="7" required>
                    <label for="mobile_packs_options" class="form-label">Mobile Flex + Full Control</label>

                    {{-- Epic Packs  --}}
                </div>
                <div class="mb-2 mt-5   col-md-6">

                    <input type="radio" name="epic_packs_options" class="ml-2" value="0" required>
                    <label for="epic_packs_options" class="form-label">Pack Epic combo 'Light TV experience' Internet +
                        TV app + Mobile</label>
                </div>
                <div class="mb-2 mt-5   col-md-6">

                    <input type="radio" name="epic_packs_options" class="ml-2" value="1" required>
                    <label for="epic_packs_options" class="form-label">Pack Epic combo 'Full TV experience' Internet +
                        TV + Mobile + Gaming</label>
                </div>

                <div class=" col-md-12">
                    <h5 style="text-align: center;"><b>Andere Packs</b></h5>
                </div>

                <div class="mb-2 mt-5   col-md-4">




                    <input type="radio" name="other_packages_starter" class="ml-2" value="0" required>
                    <label for="other_packages_starter" class="form-label">Pack (Start) Internet + TV + Tel</label>
                </div>

                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="other_packages_starter" class="ml-2" value="1" required>
                    <label for="other_packages_starter" class="form-label">Pack Internet + Tel</label>
                </div>

                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="other_packages_starter" class="ml-2" value="2" required>
                    <label for="other_packages_starter" class="form-label">Pack TV + Tel</label>
                </div>


                <div class=" col-md-12">
                    <h5 style="text-align: center;"><b>met Mobilus</b></h5>
                </div>

                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="met_mobilus_options" class="ml-2" value="0" required>
                    <label for="met_mobilus_options" class="form-label">met Mobilus</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="met_mobilus_options" class="ml-2" value="1" required>
                    <label for="met_mobilus_options" class="form-label">Unlimited</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="met_mobilus_options" class="ml-2" value="2" required>
                    <label for="met_mobilus_options" class="form-label">Unlimited Premium</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="met_mobilus_options" class="ml-2" value="3" required>
                    <label for="met_mobilus_options" class="form-label">S</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="met_mobilus_options" class="ml-2" value="4" required>
                    <label for="met_mobilus_options" class="form-label">M</label>
                </div>

                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="met_mobilus_options" class="ml-2" value="5" required>
                    <label for="met_mobilus_options" class="form-label">L</label>
                </div>

                <div class=" col-md-12">
                    <h5 style="text-align: center;"><b>Met Mobilus Full Control</b></h5>
                </div>


                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="mobilus_full_control_options" class="ml-2" value="0" required>
                    <label for="mobilus_full_control_options" class="form-label">Met Mobilus FullControl</label>
                </div>

                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="mobilus_full_control_options" class="ml-2" value="1" required>
                    <label for="mobilus_full_control_options" class="form-label">Large</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="mobilus_full_control_options" class="ml-2" value="2" required>
                    <label for="mobilus_full_control_options" class="form-label">Medium</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="mobilus_full_control_options" class="ml-2" value="3" required>
                    <label for="mobilus_full_control_options" class="form-label">Small</label>
                </div>

                <div class="mb-2 mt-5   col-md-6">

                    <input type="radio" name="mobilus_full_control_options" class="ml-2" value="4" required>
                    <label for="mobilus_full_control_options" class="form-label">Flex S (INT + TV) - Tweede
                        verblijf</label>
                </div>


                <div class=" col-md-12">
                    <h5 style="text-align: center;"><b>2. Voor professionele klanten</b></h5>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="business_package_types" class="ml-2" value="0" required>
                    <label for="business_package_types" class="form-label">Business Flex essential </label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="business_package_types" class="ml-2" value="1" required>
                    <label for="business_package_types" class="form-label">Business Flex </label>
                </div>

                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="business_package_types" class="ml-2" value="2" required>
                    <label for="business_package_types" class="form-label">Business Flex Premium</label>
                </div>



                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="mobile_business_types" class="ml-2" value="0" required>
                    <label for="mobile_business_types" class="form-label">Mobiel</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="mobile_business_types" class="ml-2" value="1" required>
                    <label for="mobile_business_types" class="form-label">Business Mobile Flex</label>
                </div>

                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="mobile_business_types" class="ml-2" value="2" required>
                    <label for="mobile_business_types" class="form-label">Business Mobile Flex+</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="mobile_business_types" class="ml-2" value="3" required>
                    <label for="mobile_business_types" class="form-label">Business Mobile Unlimited Light</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="mobile_business_types" class="ml-2" value="4" required>
                    <label for="mobile_business_types" class="form-label">Business Mobile Unlimited</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="mobile_business_types" class="ml-2" value="5" required>
                    <label for="mobile_business_types" class="form-label"> Business Mobile Unlimited Premium</label>
                </div>


                <div class=" col-md-12 mb-3 mt-3">
                    <h5 style="text-align: center;"><b>Andere Opties:</b></h5>
                </div>

                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="other_options_packages" class="ml-2" value="0" required>
                    <label for="other_options_packages" class="form-label">Bizz Online</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="other_options_packages" class="ml-2" value="1" required>
                    <label for="other_options_packages" class="form-label"> Small</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="other_options_packages" class="ml-2" value="2" required>
                    <label for="other_options_packages" class="form-label">Medium</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="other_options_packages" class="ml-2" value="3" required>
                    <label for="other_options_packages" class="form-label">Large</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="other_options_packages" class="ml-2" value="4" required>
                    <label for="other_options_packages" class="form-label">Bizz Guest Wifi</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="other_options_packages" class="ml-2" value="5" required>
                    <label for="other_options_packages" class="form-label">Option Bizz Online Booking</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="other_options_packages" class="ml-2" value="6" required>
                    <label for="other_options_packages" class="form-label"> Bizz Internet Guarantee</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="other_options_packages" class="ml-2" value="7" required>
                    <label for="other_options_packages" class="form-label"> Option Bizz Online Marketing</label>
                </div>

                {{-- C. INTERNET --}}

                <div class=" col-md-12 mb-3 mt-3">
                    <h5 style="text-align: center;"><b>C. INTERNET</b></h5>
                </div>

                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="internet_customer_phase" class="ml-2" value="0" required>
                    <label for="other_options_packages" class="form-label">Nieuw</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="internet_customer_phase" class="ml-2" value="1" required>
                    <label for="other_options_packages" class="form-label">Conversie</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="internet_customer_phase" class="ml-2" value="2" required>
                    <label for="other_options_packages" class="form-label">Port in (LOA)</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">
                    Vaste lijn:
                    <input type="radio" name="landline_r" class="ml-2" value="0" required>
                    <label for="landline_r" class="form-label">Ja</label>
                    <input type="radio" name="landline_r" class="ml-2" value="1" required>
                    <label for="landline_r" class="form-label">Neen</label>
                </div>

                <div class="mb-2 mt-3 col-md-12">
                    <label for="cell_number_w/o_landline" class="mb-4 form-label">Oproepnr. of internetnr. zonder vaste lijn<span class="text-danger">*</span></label>
                    <input type="cell_number_w/o_landline" class="form-control @error('cell_number_w/o_landline') is-invalid @enderror" id="adres"
                        autocomplete="off" placeholder="Oproepnr. of internetnr. zonder vaste lijn" name="cell_number_w/o_landline" value="{{ old('cell_number_w/o_landline') }}" required>
                    @error('cell_number_w/o_landline')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class=" col-md-12 mb-3 mt-3">
                    <h5 style="text-align: center;"><b>Internet</b></h5>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="internet_types" class="ml-2" value="0" required>
                    <label for="internet_types" class="form-label">Start</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="internet_types" class="ml-2" value="1" required>
                    <label for="internet_types" class="form-label">Maxi</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="internet_types" class="ml-2" value="2" required>
                    <label for="internet_types" class="form-label">Start/Student</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="internet_types" class="ml-2" value="3" required>
                    <label for="internet_types" class="form-label">Maxi/Student</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="internet_types" class="ml-2" value="4" required>
                    <label for="internet_types" class="form-label">Bizz Internet </label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="internet_types" class="ml-2" value="5" required>
                    <label for="internet_types" class="form-label">Extra Volume 20 GB</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="internet_types" class="ml-2" value="6" required>
                    <label for="internet_types" class="form-label">Limited for VOIP</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="internet_types" class="ml-2" value="7" required>
                    <label for="internet_types" class="form-label"> I-Office option/Fix IP Address</label>
                </div>

                <div class="mb-2 mt-5   col-md-6">

                    <input type="radio" name="internet_types_security" class="ml-2" value="0" required>
                    <label for="internet_types_security" class="form-label"> Norton Security 1</label>
                </div>
                <div class="mb-2 mt-5   col-md-6">

                    <input type="radio" name="internet_types_security" class="ml-2" value="1" required>
                    <label for="internet_types_security" class="form-label">Norton Security 5</label>
                </div>


                <div class=" col-md-12 mb-3 mt-3">
                    <h5 style="text-align: center;"><b>D. TV</b></h5>
                </div>
                <div class="mb-2 mt-5   col-md-6">

                    <input type="radio" name="tv_customer_phase" class="ml-2" value="0" required>
                    <label for="tv_customer_phase" class="form-label">Bestaande TV-klant</label>
                </div>
                <div class="mb-2 mt-5   col-md-6">

                    <input type="radio" name="tv_customer_phase" class="ml-2" value="1" required>
                    <label for="tv_customer_phase" class="form-label">Nieuwe klant</label>
                </div>
                <div class="mb-2 mt-5   col-md-12">

                    <label for="line_number" class="mb-4 form-label">Lijnnummer (voor de installatie)<span class="text-danger">*</span></label>
                    <input type="line_number" class="form-control @error('line_number') is-invalid @enderror" id="line_number"
                        autocomplete="off" placeholder="Lijnnummer (voor de installatie)" name="line_number" value="{{ old('line_number') }}" required>
                    @error('line_number')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="tv_packages" class="ml-2" value="0" required>
                    <label for="tv_packages" class="form-label">TV met Internet</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="tv_packages" class="ml-2" value="1" required>
                    <label for="tv_packages" class="form-label">TV zonder Internet</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="tv_packages" class="ml-2" value="2" required>
                    <label for="tv_packages" class="form-label">TV Replay</label>
                </div>

                <div class=" col-md-12 mb-3 mt-3">
                    <h5 style="text-align: center;"><b>Opt</b><b style="color: grey;">ies</b></h5>
                </div>

                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="tv_package_options" class="ml-2" value="0" required>
                    <label for="tv_package_options" class="form-label">Family</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="tv_package_options" class="ml-2" value="1" required>
                    <label for="tv_package_options" class="form-label">Movies & Series</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="tv_package_options" class="ml-2" value="2" required>
                    <label for="tv_package_options" class="form-label">Studio 100 GO Pass</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="tv_package_options" class="ml-2" value="3" required>
                    <label for="tv_package_options" class="form-label">Be tv</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="tv_package_options" class="ml-2" value="4" required>
                    <label for="tv_package_options" class="form-label">All Sports</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="tv_package_options" class="ml-2" value="5" required>
                    <label for="tv_package_options" class="form-label">All Stars</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="tv_package_options" class="ml-2" value="6" required>
                    <label for="tv_package_options" class="form-label">All Stars and Sports</label>
                </div>
                <div class="mb-2 mt-5   col-md-3">

                    <input type="radio" name="tv_package_options" class="ml-2" value="7" required>
                    <label for="tv_package_options" class="form-label">Adult</label>
                </div>
                <div class="mb-2 mt-5   col-md-6">

                    <input type="radio" name="tv_package_options" class="ml-2" value="8" required>
                    <label for="tv_package_options" class="form-label">Netflix</label>
                </div>
                <div class="mb-2 mt-5   col-md-6">

                    <input type="radio" name="tv_package_options" class="ml-2" value="9" required>
                    <label for="tv_package_options" class="form-label">Net Gemist</label>
                </div>


                <div class=" col-md-12 mb-3 mt-3">
                    <h5 style="text-align: center;"><b>E. VASTE LIJN</b></h5>
                </div>

                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="fixed_line_customer_phase" class="ml-2" value="0" required>
                    <label for="fixed_line_customer_phase" class="form-label">Nieuw</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="fixed_line_customer_phase" class="ml-2" value="0" required>
                    <label for="fixed_line_customer_phase" class="form-label">Conversie naar</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="fixed_line_customer_phase" class="ml-2" value="0" required>
                    <label for="fixed_line_customer_phase" class="form-label">Port in (LOA)</label>
                </div>

                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="current_line_number" class="ml-2" value="0" required>
                    <label for="current_line_number" class="form-label">Bestaande vaste lijn</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <label for="current_line_number_text" class="form-label">Huidig lijnnummer (verplicht)<span class="text-danger">*</span></label>
                    <input type="current_line_number_text" class="form-control @error('current_line_number_text') is-invalid @enderror" id="current_line_number_text"
                        autocomplete="off" placeholder="Huidig lijnnummer" name="current_line_number_text" value="{{ old('current_line_number_text') }}"
                        required>
                    @error('current_line_number_text')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="add_cps_document" class="ml-2" value="0" required>
                    <label for="add_cps_document" class="form-label"> CPS removal (CPS removal document toevoegen)</label>
                </div>

                {{-- Phone EE --}}

                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="phone_line_package_types" class="ml-2" value="0" required>
                    <label for="phone_line_package_types" class="form-label">Phone Line</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="phone_line_package_types" class="ml-2" value="1" required>
                    <label for="phone_line_package_types" class="form-label">Free Calls National</label>
                </div>
                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="phone_line_package_types" class="ml-2" value="2" required>
                    <label for="phone_line_package_types" class="form-label">Free Calls International</label>
                </div>
                <div class="mb-2 mt-5   col-md-5">

                    <input type="radio" name="phone_line_package_types" class="ml-2" value="3" required>
                    <label for="phone_line_package_types" class="form-label">Unlimited Calls National (inbegrepen in Flex + Business Flex)</label>
                </div>
                <div class="mb-2 mt-3   col-md-12">

                    <input type="radio" name="phone_line_package_types" class="ml-2" value="4" required>
                    <label for="phone_line_package_types" class="form-label">Unlimited Calls National/International (Inbegrepen in Flex Premium
                        en Business Flex Premium)</label>
                </div>

                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="other_tariff_plan_radio" class="ml-2" value="0" required>
                    <label for="other_tariff_plan_text" class="form-label">Ander tariefplan</label>
                    <input type="other_tariff_plan_text" class="form-control @error('other_tariff_plan_text') is-invalid @enderror" id="other_tariff_plan_text"
                        autocomplete="off" placeholder="Ander tariefplan" name="other_tariff_plan_text" value="{{ old('other_tariff_plan_text') }}" required>
                    @error('other_tariff_plan_text')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="seceret_number_radio" class="ml-2" value="0" required>
                    <label for="other_tariff_plan_text" class="form-label">Geheim nummer</label>
                    <input type="other_tariff_plan_text" class="form-control @error('other_tariff_plan_text') is-invalid @enderror" id="other_tariff_plan_text"
                        autocomplete="off" placeholder="Geheim nummer" name="other_tariff_plan_text" value="{{ old('other_tariff_plan_text') }}" required>
                    @error('other_tariff_plan_text')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="mb-2 mt-5   col-md-4">

                    <input type="radio" name="smart_services_radio" class="ml-2" value="0" required>
                    <label for="smart_services_text" class="form-label"> Voordeelpack - Slimme Diensten</label>
                    <input type="smart_services_text" class="form-control @error('smart_services_text') is-invalid @enderror" id="smart_services_text"
                        autocomplete="off" placeholder=" Voordeelpack - Slimme Diensten" name="smart_services_text" value="{{ old('smart_services_text') }}" required>
                    @error('smart_services_text')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                {{--  --}}
                <div class=" col-md-12 mb-3 mt-3">
                    <h5 style="text-align: center;"><b>F. GLASVEZEL</b></h5>
                </div>

                <div class="mb-2 mt-5   col-md-12">
                    <label for="">Glasvezel</label>
                    <input type="radio" name="phone_line_package_types" class="ml-2" value="1" required>
                    <label for="phone_line_package_types" class="form-label">Ja</label>
                    <input type="radio" name="phone_line_package_types" class="ml-2" value="1" required>
                    <label for="phone_line_package_types" class="form-label">Neen</label>
                </div>
                <div class="mb-2 mt-5   col-md-6">
                    <label for="">Fiber Boost 1 GIGA (1 Gbps/100 Mbps) - RES packs</label>
                    <input type="radio" name="phone_line_package_types" class="ml-2" value="1" required>
                    <label for="phone_line_package_types" class="form-label">Ja</label>
                    <input type="radio" name="phone_line_package_types" class="ml-2" value="1" required>
                    <label for="phone_line_package_types" class="form-label">Neen</label>
                </div>
                <div class="mb-2 mt-5   col-md-6">
                    <label for="">Fiber Boost 500 Mbps (500 Mbps/50 Mbps) - SE packs</label>
                    <input type="radio" name="phone_line_package_types" class="ml-2" value="1" required>
                    <label for="phone_line_package_types" class="form-label">Ja</label>
                    <input type="radio" name="phone_line_package_types" class="ml-2" value="1" required>
                    <label for="phone_line_package_types" class="form-label">Neen</label>
                </div>



























            </div>
            {{-- end of row --}}
        </div>


    </div>
    {{-- master card --}}

    {{--  IDENTIFICATIE VAN DE KLANT / GEBRUIKER card start --}}



    {{--  IDENTIFICATIE VAN DE KLANT / GEBRUIKER card end --}}


</div>
{{-- Master main container END  --}}



@endsection
