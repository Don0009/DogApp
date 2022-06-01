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
                {{-- <h5 class="card-title">Proximus</h5> --}}
                <form action="{{ route('proximus_connection_request_fr.store') }}" method="post">@csrf
                    <div class="row">
                        {{-- changed --}}

                        {{-- Branding --}}
                        <div style="text-align: centre;" class="mb-5 col-md-12">

                            <img class="mt-3" style="text-align: center; margin:0 auto;" class="img-responsive"
                                src="{{ asset('images/brands/Proximus_logo.jpeg') }}" height="75px" width="330" alt="">
                        </div>
                        {{-- Branding ENd --}}


                        <div class="mb-3 col-md-6">
                            VEUILLEZ SVP REMPLIR
                        </div>
                        <div class="mb-3 col-md-6">
                            EN CAPITALES
                        </div>

                        <div class="mb-3 col-md-4">
                            Blanc : agent
                        </div>
                        <div class="mb-3 col-md-4">
                            Rose: client
                        </div>
                        <div class="mb-3 col-md-4">
                            Jaune: Proximus
                        </div>







                        <div class="mb-3 col-md-6">
                            <label for="client_num" class="form-label">Partenaire<span
                                    class="text-danger">*</span></label>
                            <input type="client_num" class="form-control @error('partner') is-invalid @enderror"
                                id="partner" autocomplete="off" placeholder="partner" name="partner"
                                value="{{ old('partner') }}" required>
                            @error('partner')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 col-md-6">
                            <label for="identity" class="form-label">ID<span class="text-danger">*</span></label>
                            <input type="identity" class="form-control @error('identity') is-invalid @enderror"
                                id="identity" autocomplete="off" placeholder="ID " name="identity"
                                value="{{ old('identity') }}" required>
                            @error('identity')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="seller" class="form-label">Vendeur<span class="text-danger">*</span></label>
                            <input type="seller" class="form-control @error('seller') is-invalid @enderror" id="seller"
                                autocomplete="off" placeholder="Verkoper " name="seller" value="{{ old('seller') }}"
                                required>
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

                        <div class="mb-5 mt-3 col-md-6">
                            Pour les clients résidentiels
                        </div>

                        <div class="mb-5 mt-3 col-md-6">
                            0800 22 800
                        </div>
                        <div class="mb-5 col-md-6">
                            Pour les clients professionnels
                        </div>
                        <div class="mb-5 col-md-6">
                            0800 33 800
                        </div>
                        {{-- title to be added --}}

                        {{-- radios --}}

                        <div class="mb-2 col-md-12">
                            <input type="radio" name="person_type" value="0" required>
                            <label for="person_type" class="form-label">Personne physique (min. 18 ans - copie recto de
                                la carte d’identité)</label>
                        </div>

                        <div class="mb-2 col-md-12">
                            <input type="radio" name="person_type" value="1" required>
                            <label for="person_type" class="form-label">Société (copie statuts du Moniteur + carte
                                d’identité) </label>
                        </div>

                        {{-- date --}}
                        <div class="mb-2 mt-3 col-md-6">
                            <label for="validity_of_id" class="form-label mt-2">Date de validité de la carte d’identité<span
                                    class="text-danger">*</span></label>
                            <input class="form-control @error('validity_of_id') is-invalid @enderror mb-4 mb-md-0"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="validity_of_id" name="validity_of_id"
                                value="{{ old('validity_of_id') }}" type="date" required>

                        </div>

                        <div class="mb-2 mt-4 col-md-6">
                            <label for="be" class="form-label">BE<span class="text-danger">*</span></label>
                            <input type="be" class="form-control @error('be') is-invalid @enderror" id="be"
                                autocomplete="off" placeholder="BE" name="be" value="{{ old('be') }}" required>
                            @error('be')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="VAT_is_exempted" value="1" required>
                            <label for="VAT_is_exempted" class="form-label">Exemption de TVA (veuillez joindre
                                l’attestation)</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="is_source_of_income" value="0" required>
                            <label for="is_source_of_income" class="form-label"> Indépendant/Profession
                                libérale</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="is_source_of_income" value="1" required>
                            <label for="is_source_of_income" class="form-label">Société </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="is_title" value="0" required>
                            <label for="is_title" class="form-label">M.</label>
                            <input type="radio" name="is_title" class="ml-5" value="1" required>
                            <label for="is_title" class="form-label">Mme.</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-3">
                            <label for="number_of_customer" class="form-label">Nº de client<span
                                    class="text-danger">*</span></label>
                            <input type="number_of_customer"
                                class="form-control @error('number_of_customer') is-invalid @enderror"
                                id="number_of_customer" autocomplete="off" placeholder="Nr. Van De Klant"
                                name="number_of_customer" value="{{ old('number_of_customer') }}" required>
                            @error('number_of_customer')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <label for="name" class="form-label">Nom<span class="text-danger">*</span></label>
                            <input type="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                autocomplete="off" placeholder="Naam" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2 mt-5 col-md-3">
                            <label for="first_name" class="form-label">Prénom<span
                                    class="text-danger">*</span></label>
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
                            <label for="name_of_company" class="form-label"> Nom de société<span
                                    class="text-danger">*</span></label>
                            <input type="name_of_company"
                                class="form-control @error('name_of_company') is-invalid @enderror" id="name_of_company"
                                autocomplete="off" placeholder="Naam van bedrijf" name="name_of_company"
                                value="{{ old('name_of_company') }}" required>
                            @error('name_of_company')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-3 col-md-6">
                            <label for="street" class="form-label">Rue<span class="text-danger">*</span></label>
                            <input type="street" class="form-control @error('street') is-invalid @enderror" id="street"
                                autocomplete="off" placeholder="Straat" name="street" value="{{ old('street') }}"
                                required>
                            @error('street')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-3 col-md-6">
                            <label for="street" class="form-label">N<span class="text-danger">*</span></label>
                            <input type="no" class="form-control @error('no') is-invalid @enderror" id="no"
                                autocomplete="off" placeholder="Nr." name="no" value="{{ old('no') }}" required>
                            @error('no')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2 mt-3 col-md-6">
                            <label for="bus" class="form-label">Bte<span class="text-danger">*</span></label>
                            <input type="bus" class="form-control @error('bus') is-invalid @enderror" id="bus"
                                autocomplete="off" placeholder="Bus" name="bus" value="{{ old('bus') }}" required>
                            @error('bus')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2 mt-3 col-md-6">
                            <label for="postcode" class="form-label">Postcode<span
                                    class="text-danger">*</span></label>
                            <input type="postcode" class="form-control @error('postcode') is-invalid @enderror"
                                id="postcode" autocomplete="off" placeholder="Post Code" name="postcode"
                                value="{{ old('postcode') }}" required>
                            @error('postcode')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2 mt-3 col-md-6">
                            <label for="place" class="form-label">Localité<span
                                    class="text-danger">*</span></label>
                            <input type="place" class="form-control @error('place') is-invalid @enderror" id="place"
                                autocomplete="off" placeholder="Plaats" name="place" value="{{ old('place') }}" required>
                            @error('postcode')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2 mt-3 col-md-6">
                            <label for="country" class="form-label">Pays<span class="text-danger">*</span></label>
                            <input type="country" class="form-control @error('place') is-invalid @enderror" id="country"
                                autocomplete="off" placeholder="Plaats" name="country" value="{{ old('country') }}"
                                required>
                            @error('country')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2 mt-3 col-md-6">
                            <label for="email" class="form-label">Adresse e-mail:<span
                                    class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                autocomplete="off" placeholder="Email-Address" name="email" value="{{ old('email') }}"
                                required>
                            @error('email')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2 mt-4 col-md-4">
                            <label for="telephone" class="form-label">Téléphone<span
                                    class="text-danger">*</span></label>
                            <input type="telephone" class="form-control @error('telephone') is-invalid @enderror"
                                id="telephone" autocomplete="off" placeholder="Telefoon" name="telephone"
                                value="{{ old('telephone') }}" required>
                            @error('telephone')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2 mt-4 col-md-4">
                            <label for="gsm_2" class="form-label">GSM<span class="text-danger">*</span></label>
                            <input type="gsm_2" class="form-control @error('gsm_2') is-invalid @enderror" id="gsm_2"
                                autocomplete="off" placeholder="Gsm" name="gsm_2" value="{{ old('gsm_2') }}" required>
                            @error('gsm_2')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2 mt-3 col-md-4">
                            <label for="date_of_birth" class="form-label mt-2"> Date de naissance<span
                                    class="text-danger">*</span></label>
                            <input class="form-control @error('date_of_birth') is-invalid @enderror mb-4 mb-md-0"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="date_of_birth" name="date_of_birth"
                                value="{{ old('date_of_birth') }}" type="date" required>
                        </div>

                        <div class="mb-2 mt-3 col-md-4">
                            <label for="contact_person_name" class="form-label">Nom/prénom (pers. contact)<span
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
                            <label for="contact_person_telephone" class="form-label">Tél. de la personne de
                                contact<span class="text-danger">*</span></label>
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
                            <label for="is_title" class="form-label">M.</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-2">
                            <input type="radio" name="is_title_2" value="1" required>
                            <label for="is_title" class="form-label">Mme.</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <b style="font-size: 24px;">Adresse d’installation idem?</b>

                            <input type="radio" name="is_install_address_same" class="ml-2" value="0" required>
                            <label for="is_title" class="form-label">Oui</label>
                            <input type="radio" name="is_install_address_same" class="ml-2" value="1" required>
                            <label for="is_title" class="form-label">Non, adresse</label>
                        </div>
                        <div class="mb-2 mt-3 col-md-6">
                            <label for="install_address" class="form-label">Adresse<span
                                    class="text-danger">*</span></label>
                            <input type="install_address"
                                class="form-control @error('install_address') is-invalid @enderror" id="install_address"
                                autocomplete="off" placeholder="Adres" name="install_address"
                                value="{{ old('install_address') }}" required>
                            @error('install_address')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <b style="font-size: 24px;">Facturation</b>
                            <span class="ml-2"> Digitale:</span>

                            <input type="radio" name="invoice_receive_method" class="ml-2" value="0" required>
                            <label for="invoice_receive_method" class="form-label"> Ou</label>
                            <input type="radio" name="invoice_receive_method" class="ml-2" value="1" required>
                            <label for="invoice_receive_method" class="form-label"> Non</label>
                        </div>

                        <div class="mb-2 mt-3 col-md-4">
                            <label for="email_2" class="form-label">adresse e-mail<span
                                    class="text-danger">*</span></label>
                            <input type="email_2" class="form-control @error('email_2') is-invalid @enderror" id="email_2"
                                autocomplete="off" placeholder="Email-Address" name="email_2"
                                value="{{ old('email_2') }}" required>
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
                            <label for="bank_account_number" class="form-label">Domiciliation: Nº de compte en banque:

                                BE<span class="text-danger">*</span></label>
                            <input type="bank_account_number"
                                class="form-control @error('bank_account_number') is-invalid @enderror"
                                id="bank_account_number" autocomplete="off" placeholder="Bankrekeningnummer: BE"
                                name="bank_account_number" value="{{ old('bank_account_number') }}" required>
                            @error('bank_account_number')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-3 col-md-3">
                            <b style="font-size: 20px;">Adresse de facturation idem?</b>


                            <div class="mt-2">
                                <input type="radio" name="is_billing_address_same_or_not" class="ml-2" value="0"
                                    required>
                                <label for="is_billing_address_same_or_not" class="form-label">Ou</label>
                                <input type="radio" name="is_billing_address_same_or_not" class="ml-2" value="1"
                                    required>
                                <label for="is_billing_address_same_or_not" class="form-label">Non</label>
                            </div>
                        </div>

                        <div class="mb-2 mt-3 col-md-3">
                            <label for="adres" class="form-label">adresse<span class="text-danger">*</span></label>
                            <input type="adres" class="form-control @error('adres') is-invalid @enderror" id="adres"
                                autocomplete="off" placeholder="Adres" name="adres" value="{{ old('adres') }}" required>
                            @error('adres')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-3  col-md-6">
                            <label for="name_or_number_of_previous_owner" class="form-label">Nom ou numéro de l’ancien
                                propriétaire<span class="text-danger">*</span></label>
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

                            <label for="name_or_number_of_previous_owner" class="form-label">Je ne souhaite pas
                                recevoir d’information commerciale, services et promotions de Proximus par<span
                                    class="text-danger">*</span></label>

                            <div class="mt-2">
                                <input type="radio" name="wish_to_receive_info_means" class="ml-2" value="0"
                                    required>
                                <label for="wish_to_receive_info_means" class="form-label">Téléphone ou GSM</label>
                                <input type="radio" name="wish_to_receive_info_means" class="ml-2" value="1"
                                    required>
                                <label for="wish_to_receive_info_means" class="form-label">E-mail</label>
                                <input type="radio" name="wish_to_receive_info_means" class="ml-2" value="2"
                                    required>
                                <label for="wish_to_receive_info_means" class="form-label">Sms</label>
                                <input type="radio" name="wish_to_receive_info_means" class="ml-2" value="3"
                                    required>
                                <label for="wish_to_receive_info_means" class="form-label">Courrier</label>
                            </div>
                        </div>

                        <div class="mb-4  mt-3 col-md-12">

                            <h4 style="text-align: center;"><b>B. PACKS</b></h4>
                        </div>


                        <div class="mb-2   col-md-3">

                            <input type="checkbox" name="tv_packs_options_a" class="ml-2" value="0">
                            <label for="tv_packs_options_a" class="form-label">Flex S (INT + TV)</label>

                        </div>

                        <div class="mb-2 mt-5 col-md-12">

                            <input type="checkbox" name="tv_packs_options_b" class="ml-2" value="1">
                            <label for="tv_packs_options_b" class="form-label">Flex (INT + TV + TEL) + (Wifi Booster +
                                Family
                                life
                                Premium)</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="tv_packs_options_c" class="ml-2" value="2">
                            <label for="tv_packs_options_b" class="form-label">+ tv-optie</label>
                        </div>


                        <div class="mb-2 mt-5   col-md-9">

                            <input type="checkbox" name="tv_packs_options_d" class="ml-2" value="3">
                            <label for="tv_packs_options_c" class="form-label"> Flex Premium (INT + TV(2) + TEL (BE+EU)
                                +
                                All
                                Stars & Sports) +
                                (Wifi Booster + Family life Premium)
                            </label>
                        </div>

                        {{-- Mobile Packs --}}
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobile_packs_options_a" class="ml-2" value="0">
                            <label for="mobile_packs_options_a" class="form-label">Mobiel</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobile_packs_options_b" class="ml-2" value="1">
                            <label for="mobile_packs_options_b" class="form-label">Mobile Flex</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobile_packs_options_c" class="ml-2" value="2">
                            <label for="mobile_packs_options_c" class="form-label">Mobile Flex +</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobile_packs_options_d" class="ml-2" value="3">
                            <label for="mobile_packs_options_d" class="form-label">Unlimited Light</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobile_packs_options_e" class="ml-2" value="4">
                            <label for="mobile_packs_options_e" class="form-label">Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobile_packs_options_f" class="ml-2" value="5">
                            <label for="mobile_packs_options_f" class="form-label">Unlimited Premium</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobile_packs_options_g" class="ml-2" value="6">
                            <label for="mobile_packs_options_g" class="form-label">Mobile Flex Full Control</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobile_packs_options_h" class="ml-2" value="7">
                            <label for="mobile_packs_options_h" class="form-label">Mobile Flex + Full Control</label>

                            {{-- Epic Packs --}}
                        </div>
                        <div class="mb-2 mt-5   col-md-6">

                            <input type="checkbox" name="epic_packs_options_i" class="ml-2" value="0">
                            <label for="epic_packs_options_i" class="form-label">Pack Epic combo 'Light TV experience'
                                Internet + TV app + Mobile</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-6">

                            <input type="checkbox" name="epic_packs_options_j" class="ml-2" value="1">
                            <label for="epic_packs_options_j" class="form-label">Pack Epic combo 'Full TV experience'
                                Internet + TV + Mobile + Gaming</label>
                        </div>

                        <div class=" col-md-12">
                            <h5 style="text-align: center;">Offre conjointe Flex avec mobile ou Epic combo full TV
                                experience</h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="extra_gb_packs_a" class="ml-2" value="1">
                            <label for="extra_gb_packs_a" class="form-label">Samsung Smart TV 50"</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="extra_gb_packs_b" class="ml-2" value="1">
                            <label for="extra_gb_packs_b" class="form-label">Microsoft Surface Go 2</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="extra_gb_packs_c" class="ml-2" value="1">
                            <label for="extra_gb_packs_c" class="form-label"> iPad 32GB WiFi</label>
                        </div>




                        <div class=" col-md-12">
                            <h5 style="text-align: center;"><b>Autres Packs</b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="other_packages_starter_a" class="ml-2" value="0">
                            <label for="other_packages_starter_a" class="form-label">Pack (Start) Internet + TV +
                                Tel</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="other_packages_starter_b" class="ml-2" value="1">
                            <label for="other_packages_starter_b" class="form-label">Pack Internet + Tel</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="other_packages_starter_c" class="ml-2" value="2">
                            <label for="other_packages_starter_c" class="form-label">Pack TV + Tel</label>
                        </div>


                        <div class=" col-md-12">
                            <h5 style="text-align: center;"><b>avec Mobilus</b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="met_mobilus_options_1" class="ml-2" value="0">
                            <label for="met_mobilus_options_1" class="form-label">met Mobilus</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="met_mobilus_options_2" class="ml-2" value="1">
                            <label for="met_mobilus_options_2" class="form-label">XL Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="met_mobilus_options_3" class="ml-2" value="2">
                            <label for="met_mobilus_options_3" class="form-label">5G Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="met_mobilus_options_4" class="ml-2" value="3">
                            <label for="met_mobilus_options_4" class="form-label">S</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="met_mobilus_options_5" class="ml-2" value="4">
                            <label for="met_mobilus_options_5" class="form-label">M</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="met_mobilus_options_6" class="ml-2" value="5">
                            <label for="met_mobilus_options_6" class="form-label">L</label>
                        </div>

                        <div class=" col-md-12">
                            <h5 style="text-align: center;"><b>avec Mobilus FullControl</b></h5>
                        </div>


                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobilus_full_control_options_1" class="ml-2" value="0">
                            <label for="mobilus_full_control_options_1" class="form-label">avec Mobilus
                                FullControl</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobilus_full_control_options_2" class="ml-2" value="1">
                            <label for="mobilus_full_control_options_2" class="form-label">Large</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobilus_full_control_options_3" class="ml-2" value="2">
                            <label for="mobilus_full_control_options_3" class="form-label">Medium</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobilus_full_control_options_4" class="ml-2" value="3">
                            <label for="mobilus_full_control_options_4" class="form-label">Small</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-6">

                            <input type="checkbox" name="mobilus_full_control_options_5" class="ml-2" value="4">
                            <label for="mobilus_full_control_options_5" class="form-label">Flex S (INT + TV) - Seconde
                                résidence</label>
                        </div>


                        <div class=" col-md-12">
                            <h5 style="text-align: center;"><b>2. Pour les clients professionnels</b></h5>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="business_package_types_1" class="ml-2" value="0">
                            <label for="business_package_types_1" class="form-label">Business Flex essential </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="business_package_types_2" class="ml-2" value="1">
                            <label for="business_package_types_2" class="form-label">Business Flex </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="business_package_types_3" class="ml-2" value="2">
                            <label for="business_package_types_3" class="form-label">Business Flex Premium</label>
                        </div>



                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="mobile_business_types_1" class="ml-2" value="0">
                            <label for="mobile_business_types_1" class="form-label">Mobiel</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="mobile_business_types_2" class="ml-2" value="1">
                            <label for="mobile_business_types_2" class="form-label">Business Mobile Flex</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="mobile_business_types_3" class="ml-2" value="2">
                            <label for="mobile_business_types_3" class="form-label">Business Mobile Flex+</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="mobile_business_types_4" class="ml-2" value="3">
                            <label for="mobile_business_types_4" class="form-label">Business Mobile Unlimited
                                Light</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="mobile_business_types_5" class="ml-2" value="4">
                            <label for="mobile_business_types_5" class="form-label">Business Mobile Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="mobile_business_types_6" class="ml-2" value="5">
                            <label for="mobile_business_types_6" class="form-label"> Business Mobile Unlimited
                                Premium</label>
                        </div>

                        <div class=" col-md-12">
                            <h5 style="text-align: center;"><b>Offre conjointe Business Flex (INT+MOB+TV/TEL)</b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="extra_gb_packs_2_a" class="ml-2" value="1">
                            <label for="extra_gb_packs_2" class="form-label">Samsung Smart TV 50"</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="extra_gb_packs_2_b" class="ml-2" value="1">
                            <label for="extra_gb_packs_2" class="form-label">Microsoft Surface Go 2</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="extra_gb_packs_2_c" class="ml-2" value="1">
                            <label for="extra_gb_packs_2" class="form-label"> iPad 32GB WiFi</label>
                        </div>



                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>Autres options</b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="other_options_packages_1" class="ml-2" value="0">
                            <label for="other_options_packages" class="form-label">Bizz Online</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="other_options_packages_2" class="ml-2" value="1">
                            <label for="other_options_packages" class="form-label"> Small</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="other_options_packages_3" class="ml-2" value="2">
                            <label for="other_options_packages" class="form-label">Medium</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="other_options_packages_4" class="ml-2" value="3">
                            <label for="other_options_packages" class="form-label">Large</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="other_options_packages_5" class="ml-2" value="4">
                            <label for="other_options_packages" class="form-label">Bizz Guest Wifi</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="other_options_packages_6" class="ml-2" value="5">
                            <label for="other_options_packages" class="form-label">Option Bizz Online Booking</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="other_options_packages_7" class="ml-2" value="6">
                            <label for="other_options_packages" class="form-label"> Bizz Internet Guarantee</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="other_options_packages_8" class="ml-2" value="7">
                            <label for="other_options_packages" class="form-label"> Option Bizz Online
                                Marketing</label>
                        </div>

                        {{-- C. INTERNET --}}

                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>C. INTERNET</b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-3">

                            <input type="radio" name="internet_customer_phase" class="ml-2" value="0" required>
                            <label for="other_options_packages" class="form-label">Nouveau</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="radio" name="internet_customer_phase" class="ml-2" value="1">
                            <label for="other_options_packages" class="form-label">Conversion</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="radio" name="internet_customer_phase" class="ml-2" value="2">
                            <label for="other_options_packages" class="form-label">Port in (LOA)</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">
                            Ligne fixe
                            <input type="radio" name="landline_r" class="ml-2" value="0">
                            <label for="landline_r" class="form-label">Oui</label>
                            <input type="radio" name="landline_r" class="ml-2" value="1" required>
                            <label for="landline_r" class="form-label">non</label>
                        </div>

                        <div class="mb-2 mt-3 col-md-12">
                            <label for="cell_number_w/o_landline" class="mb-4 form-label">N° d’appel ou n° Internet sans
                                ligne fixe<span class="text-danger">*</span></label>
                            <input type="cell_number_w/o_landline"
                                class="form-control @error('cell_number_w/o_landline') is-invalid @enderror" id="adres"
                                autocomplete="off" placeholder="Oproepnr. of internetnr. zonder vaste lijn"
                                name="cell_number_w/o_landline" value="{{ old('cell_number_w/o_landline') }}" required>
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

                            <input type="checkbox" name="internet_types_1" class="ml-2" value="0">
                            <label for="internet_types" class="form-label">Start</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="internet_types_2" class="ml-2" value="1">
                            <label for="internet_types" class="form-label">Maxi</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="internet_types_3" class="ml-2" value="2">
                            <label for="internet_types" class="form-label">Start/Student</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="internet_types_4" class="ml-2" value="3">
                            <label for="internet_types" class="form-label">Maxi/Student</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="internet_types_5" class="ml-2" value="4">
                            <label for="internet_types" class="form-label">Bizz Internet </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="internet_types_6" class="ml-2" value="5">
                            <label for="internet_types" class="form-label">Extra Volume 20 GB</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="internet_types_7" class="ml-2" value="6">
                            <label for="internet_types" class="form-label">Limited for VOIP</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="internet_types_8" class="ml-2" value="7">
                            <label for="internet_types" class="form-label"> I-Office option/Fix IP Address</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="internet_types_security" class="ml-2" value="0">
                            <label for="internet_types_security" class="form-label"> Norton Security 1</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="internet_types_security" class="ml-2" value="1">
                            <label for="internet_types_security" class="form-label">Norton Security 5</label>
                        </div>


                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>D. TV</b></h5>
                        </div>
                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="tv_customer_phase" class="ml-2" value="0" required>
                            <label for="tv_customer_phase" class="form-label">Client TV existant</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="tv_customer_phase" class="ml-2" value="1">
                            <label for="tv_customer_phase" class="form-label">Nouveau client</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-12">

                            <label for="line_number" class="mb-4 form-label">Numéro de ligne<span
                                    class="text-danger">*</span></label>
                            <input type="line_number" class="form-control @error('line_number') is-invalid @enderror"
                                id="line_number" autocomplete="off" placeholder="Lijnnummer (voor de installatie)"
                                name="line_number" value="{{ old('line_number') }}" required>
                            @error('line_number')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="tv_packages_1" class="ml-2" value="0">
                            <label for="tv_packages" class="form-label">TV avec Internet</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="tv_packages_2" class="ml-2" value="1">
                            <label for="tv_packages" class="form-label">TV sans Internet</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="tv_packages_3" class="ml-2" value="2">
                            <label for="tv_packages" class="form-label">TV Replay</label>
                        </div>

                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>Les </b><b style="color: grey;">options</b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="tv_package_options_1" class="ml-2" value="0">
                            <label for="tv_package_options" class="form-label">Family</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="tv_package_options_2" class="ml-2" value="1">
                            <label for="tv_package_options" class="form-label">Movies & Series</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="tv_package_options_3" class="ml-2" value="2">
                            <label for="tv_package_options" class="form-label">Studio 100 GO Pass</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="tv_package_options_4" class="ml-2" value="3">
                            <label for="tv_package_options" class="form-label">Be tv</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="tv_package_options_5" class="ml-2" value="4">
                            <label for="tv_package_options" class="form-label">All Sports</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="tv_package_options_6" class="ml-2" value="5">
                            <label for="tv_package_options" class="form-label">All Stars</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="tv_package_options_7" class="ml-2" value="6">
                            <label for="tv_package_options" class="form-label">All Stars and Sports</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="tv_package_options_8" class="ml-2" value="7">
                            <label for="tv_package_options" class="form-label">Adult</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-6">

                            <input type="checkbox" name="tv_package_options_9" class="ml-2" value="8">
                            <label for="tv_package_options" class="form-label">Netflix</label>
                        </div>



                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>E. LIGNE FIXE </b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="fixed_line_customer_phase" class="ml-2" value="0">
                            <label for="fixed_line_customer_phase" class="form-label">Nouveau</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="fixed_line_customer_phase" class="ml-2" value="0">
                            <label for="fixed_line_customer_phase" class="form-label">Conversie naar</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="fixed_line_customer_phase" class="ml-2" value="0" required>
                            <label for="fixed_line_customer_phase" class="form-label">Port in (LOA)</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="current_line_number" class="ml-2" value="0" required>
                            <label for="current_line_number" class="form-label">Ligne fixe existante</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <label for="current_line_number_text" class="form-label">Numéro de ligne actuelle<span
                                    class="text-danger">*</span></label>
                            <input type="current_line_number_text"
                                class="form-control @error('current_line_number_text') is-invalid @enderror"
                                id="current_line_number_text" autocomplete="off" placeholder="Huidig lijnnummer"
                                name="current_line_number_text" value="{{ old('current_line_number_text') }}" required>
                            @error('current_line_number_text')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="add_cps_document" class="ml-2" value="0" required>
                            <label for="add_cps_document" class="form-label"> CPS removal (joindre document CPS
                                removal)</label>
                        </div>

                        {{-- Phone EE --}}

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="phone_line_package_types_1" class="ml-2" value="0">
                            <label for="phone_line_package_types" class="form-label">Phone Line</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="phone_line_package_types_2" class="ml-2" value="1">
                            <label for="phone_line_package_types" class="form-label">Free Calls National</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="phone_line_package_types_3" class="ml-2" value="2">
                            <label for="phone_line_package_types" class="form-label">Free Calls International</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-5">

                            <input type="checkbox" name="phone_line_package_types_4" class="ml-2" value="3">
                            <label for="phone_line_package_types" class="form-label">Unlimited Calls National
                                (inclus dans Flex+ Business Flex)</label>
                        </div>
                        <div class="mb-2 mt-3   col-md-12">

                            <input type="checkbox" name="phone_line_package_types_5" class="ml-2" value="4">
                            <label for="phone_line_package_types" class="form-label"> Unlimited Calls
                                National/International (inclus dans Flex Premium et
                                Business Flex Premium)</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="other_tariff_plan_radio" class="ml-2" value="0" required>
                            <label for="other_tariff_plan_text" class="form-label">Autre plan tarifaire</label>
                            <input type="other_tariff_plan_text"
                                class="form-control @error('other_tariff_plan_text') is-invalid @enderror"
                                id="other_tariff_plan_text" autocomplete="off" placeholder="Ander tariefplan"
                                name="other_tariff_plan_text" value="{{ old('other_tariff_plan_text') }}" required>
                            @error('other_tariff_plan_text')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="seceret_number_radio" class="ml-2" value="0">
                            <label for="seceret_number_text" class="form-label">Numéro secret</label>
                            <input type="seceret_number_text"
                                class="form-control @error('seceret_number_text') is-invalid @enderror"
                                id="seceret_number_text" autocomplete="off" placeholder="Geheim nummer"
                                name="seceret_number_text" value="{{ old('seceret_number_text') }}" required>
                            @error('seceret_number_text')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="smart_services_radio" class="ml-2" value="0" required>
                            <label for="smart_services_text" class="form-label"> Pack avantages - Services
                                Malins</label>
                            <input type="smart_services_text"
                                class="form-control @error('smart_services_text') is-invalid @enderror"
                                id="smart_services_text" autocomplete="off" placeholder=" Voordeelpack - Slimme Diensten"
                                name="smart_services_text" value="{{ old('smart_services_text') }}" required>
                            @error('smart_services_text')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        {{--  --}}
                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>F. FIBRE OPTIQUE</b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-12">
                            <label for="">Fibre optique</label>
                            <input type="radio" name="optical_fibre_radio" class="ml-2" value="0" required>
                            <label for="optical_fibre_radio" class="form-label">Oui</label>
                            <input type="radio" name="optical_fibre_radio" class="ml-2" value="1" required>
                            <label for="optical_fibre_radio" class="form-label">Non</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-6">
                            <label for="">Fiber Boost 1 GIGA (1 Gbps/100 Mbps) - RES packs</label>
                            <input type="radio" name="optical_fibre_package_type" class="ml-2" value="0"
                                required>
                            <label for="optical_fibre_package_type" class="form-label">Oui</label>
                            <input type="radio" name="optical_fibre_package_type" class="ml-2" value="1"
                                required>
                            <label for="optical_fibre_package_type" class="form-label">Non</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-6">
                            <label for="">Fiber Boost 500 Mbps (500 Mbps/50 Mbps) - SE packs</label>
                            <input type="radio" name="optical_fibre_package_type_3" class="ml-2" value="0"
                                required>
                            <label for="optical_fibre_package_type_3" class="form-label">Oui</label>
                            <input type="radio" name="optical_fibre_package_type_3" class="ml-2" value="1"
                                required>
                            <label for="optical_fibre_package_type_3" class="form-label">Non</label>
                        </div>



                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>G. MULTI LINE (annexe à compléter)</b></h5>
                        </div>


                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="multi_line_license" class="ml-2" value="0" required>
                            <label for="multi_line_license" class="form-label"> 2 licences incluses dans le Pack
                            </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="ip_box_radio" class="ml-2" value="1" required>
                            <label for="ip_box_radio" class="form-label">Bizz IP box (pour PABX non-Proximus)</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="ip_box_radio" class="ml-2" value="2">
                            <label for="ip_box_radio" class="form-label">Bizz IP box (pour PABX ISDN)</label>
                        </div>

                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>H. . BIZZ CALL CONNECT (annexe à compléter)
                                </b></h5>
                        </div>


                        <div class="mb-2 mt-5   col-md-8">

                            <input type="radio" name="bizz_call_connect_radio" class="ml-2" value="0" required>
                            <label for="bizz_call_connect_radio" class="form-label">2 licences incluses dans le Pack
                                …… licence(s) supplémentaires dans le Pack / …… licence(s) hors Pack</label>
                        </div>


                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b> I. TÉLÉPHONIE MOBILE
                                </b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="mob_tele_pack_type_1" class="ml-2" value="0">
                            <label for="mob_tele_pack_type" class="form-label">Dans un Pack Flex (Flex S, Flex of Flex
                                Premium)
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="mob_tele_pack_type_2" class="ml-2" value="1">
                            <label for="mob_tele_pack_type" class="form-label">Dans un autre Pack</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="mob_tele_pack_type_3" class="ml-2" value="2">
                            <label for="mob_tele_pack_type" class="form-label">Dans un Pack Business Flex </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="mob_tele_pack_type_4" class="ml-2" value="3">
                            <label for="mob_tele_pack_type" class="form-label"> Nouveau client</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="mob_tele_pack_type_5" class="ml-2" value="4">
                            <label for="mob_tele_pack_type" class="form-label">Hors Pack</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="mob_tele_pack_type_6" class="ml-2" value="5">
                            <label for="mob_tele_pack_type" class="form-label"> Hors Pack Business Flex</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-6">

                            <input type="checkbox" name="mob_tele_pack_type_7" class="ml-2" value="6">
                            <label for="mob_tele_pack_type" class="form-label">Transfert de Base/Orange/Telenet</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="payngo_radio" class="ml-2" value="0" required>
                            <label for="payngo_text" class="form-label">Conversion Pay&Go N° de GSM</label>
                            <input type="payngo_text" class="form-control @error('payngo_text') is-invalid @enderror"
                                id="payngo_text" autocomplete="off" placeholder="Omschakeling Pay&Go gsm-n"
                                name="payngo_text" value="{{ old('payngo_text') }}" required>
                            @error('payngo_text')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5   col-md-8">

                            <input type="radio" name="cell_number_g_radio" class="ml-2" value="0" required>
                            <label for="cell_number_g" class="form-label"> N° de GSM</label>
                            <input type="cell_number_g" class="form-control @error('cell_number_g') is-invalid @enderror"
                                id="cell_number_g" autocomplete="off" placeholder="Gsm-nr" name="cell_number_g"
                                value="{{ old('cell_number_g') }}" required>
                            @error('cell_number_g')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>

                        <div class="mb-2 mt-5 col-md-4">

                            <input type="radio" name="existing_proximus_customer" class="ml-2" value="0"
                                required>
                            <label for="existing_proximus_customer" class="form-label">Client Proximus existant</label>
                            <input type="existing_proximus_customer_text"
                                class="form-control @error('existing_proximus_customer_text') is-invalid @enderror"
                                id="existing_proximus_customer_text" autocomplete="off" placeholder="Gsm-nr"
                                name="existing_proximus_customer_text"
                                value="{{ old('existing_proximus_customer_text') }}" required>
                            @error('existing_proximus_customer_text')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="mb-2 mt-5   col-md-3">

                            <span class="mr-2"><b>Langue</b></span> <input type="radio" name="lang"
                                class="ml-2" value="0" required>
                            <label for="lang" class="form-label">NL
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="radio" name="lang" class="ml-2" value="1">
                            <label for="lang" class="form-label">F</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="radio" name="lang" class="ml-2" value="2">
                            <label for="lang" class="form-label">D</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="radio" name="lang" class="ml-2" value="3" required>
                            <label for="lang" class="form-label">EN</label>
                        </div>


                        <div class="mb-2 mt-3 col-md-6">
                            <label for="sim_card_number" class="form-label">Numéro de carte SIM<span
                                    class="text-danger">*</span></label>
                            <input type="sim_card_number"
                                class="form-control @error('sim_card_number') is-invalid @enderror" id="sim_card_number"
                                autocomplete="off" placeholder="Simkaartnummer " name="sim_card_number"
                                value="{{ old('sim_card_number') }}" required>
                            @error('sim_card_number')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="sim_card_type" class="ml-5" value="0" required>
                            <label for="sim_card_type" class="form-label">Nano</label>
                            <input type="radio" name="sim_card_type" class="ml-5" value="1">
                            <label for="sim_card_type" class="form-label">Normaal</label>
                        </div>

                        <div class="mb-2 mt-3 col-md-12">
                            <label for="make_model_of_device" class="form-label">Marque et type de l’appareil<span
                                    class="text-danger">*</span></label>
                            <input type="make_model_of_device"
                                class="form-control @error('make_model_of_device') is-invalid @enderror"
                                id="make_model_of_device" autocomplete="off" placeholder="Merk en type van het toestel"
                                name="make_model_of_device" value="{{ old('make_model_of_device') }}" required>
                            @error('make_model_of_device')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b> RESIDENTIAL MOBILE VOICE (hors Pack)
                                </b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="residential_met_mobilus_1" class="ml-2" value="0">
                            <label for="residential_met_mobilus" class="form-label">avec Mobilus</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="residential_met_mobilus_2" class="ml-2" value="1">
                            <label for="residential_met_mobilus" class="form-label">S</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="residential_met_mobilus_3" class="ml-2" value="2">
                            <label for="residential_met_mobilus" class="form-label">M</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="residential_met_mobilus_4" class="ml-2" value="3">
                            <label for="residential_met_mobilus" class="form-label">L</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="residential_met_mobilus_5" class="ml-2" value="4">
                            <label for="residential_met_mobilus" class="form-label">XL Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="residential_met_mobilus_6" class="ml-2" value="5">
                            <label for="residential_met_mobilus" class="form-label"> 5G Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="residential_met_mobilus_limit_full_1" class="ml-2"
                                value="0">
                            <label for="residential_met_mobilus_limit_full" class="form-label"> avec Mobilus
                                FullControl</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="residential_met_mobilus_limit_full_2" class="ml-2"
                                value="1">
                            <label for="residential_met_mobilus_limit_full" class="form-label"> S </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="residential_met_mobilus_limit_full_3" class="ml-2"
                                value="2">
                            <label for="residential_met_mobilus_limit_full_4" class="form-label"> M</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="residential_met_mobilus_limit_full_4" class="ml-2"
                                value="3">
                            <label for="residential_met_mobilus_limit_full_4" class="form-label">L</label>
                        </div>


                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>App (1 au choix avec Mobilus)
                                </b></h5>
                        </div>


                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_social_app" class="ml-2" value="0">
                            <label for="mobile_social_app" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/facebook.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>

                        {{-- mobile_social_app --}}

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_social_app" class="ml-2" value="1">
                            <label for="mobile_social_app" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/twitter.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_social_app" class="ml-2" value="2">
                            <label for="mobile_social_app" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/snapchat.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_social_app" class="ml-2" value="3">
                            <label for="mobile_social_app" class="form-label">



                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/instagram.png') }}"
                                    height="25px" width="25px" alt="">


                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_social_app" class="ml-2" value="4">
                            <label for="mobile_social_app" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/whatsapp.png') }}" height="25px"
                                    width="25px" alt="">


                                </i>
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_social_app" class="ml-2" value="5" required>
                            <label for="mobile_social_app" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/pinterest.png') }}"
                                    height="25px" width="25px" alt="">


                                </i>
                            </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="epic_offer_1" class="ml-2" value="3">
                            <label for="epic_offer" class="form-label">Epic stories</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="epic_offer_2" class="ml-2" value="4">
                            <label for="epic_offer" class="form-label">Epic videos</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="epic_offer_3" class="ml-2" value="5">
                            <label for="epic_offer" class="form-label">Epic Beats</label>
                        </div>

                        {{-- Joint Offier --}}
                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>Offre conjointe
                                </b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer" class="ml-2" value="0">
                            <label for="joint_data_offer" class="form-label">Special Deal (0 MB) €0/mois
                            </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer" class="ml-2" value="1">
                            <label for="joint_data_offer" class="form-label">DataPhone (500 MB) €5/mois</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer" class="ml-2" value="2">
                            <label for="joint_data_offer" class="form-label">
                                DataPhone (1 GB) €10/mois </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer" class="ml-2" value="3">
                            <label for="joint_data_offer" class="form-label">DataPhone (1,5 GB) €15/mois</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer" class="ml-2" value="4">
                            <label for="joint_data_offer" class="form-label"> DataPhone (2 GB) €20/mois</label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer" class="ml-2" value="5">
                            <label for="joint_data_offer" class="form-label">DataPhone (2,5 GB) €25/mois</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer" class="ml-2" value="6">
                            <label for="joint_data_offer" class="form-label">Mobile 10</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer" class="ml-2" value="7">
                            <label for="joint_data_offer" class="form-label">Mobile Coverage Extender</label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer" class="ml-2" value="8">
                            <label for="joint_data_offer" class="form-label">Smartphone Omnium
                            </label>
                        </div>
                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b> BUSINESS MOBILE VOICE
                                </b></h5>
                        </div>
                        <div>{{-- bizz_mobile_size_p_i --}}</div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="bizz_mobile_size_p_i_1" class="ml-2" value="1">
                            <label for="bizz_mobile_size_p_i" class="form-label">S
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="bizz_mobile_size_p_i_2" class="ml-2" value="2">
                            <label for="bizz_mobile_size_p_i" class="form-label">M
                            </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="bizz_mobile_size_p_i_3" class="ml-2" value="3">
                            <label for="bizz_mobile_size_p_i" class="form-label">L
                            </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="bizz_mobile_size_p_i_4" class="ml-2" value="4">
                            <label for="bizz_mobile_size_p_i" class="form-label">Unlimited
                            </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="bizz_mobile_size_p_i_5" class="ml-2" value="5">
                            <label for="bizz_mobile_size_p_i" class="form-label">5G International
                            </label>
                        </div>

                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>Offre conjointe
                                </b></h5>
                        </div>


                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer_p_i" class="ml-2" value="0">
                            <label for="joint_data_offer_p_i" class="form-label">DataPhone (0 MB) €0/mois HTVA
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer_p_i" class="ml-2" value="1">
                            <label for="joint_data_offer_p_i" class="form-label"> DataPhone (500 MB) €4,13/mois HTVA
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer_p_i" class="ml-2" value="2">
                            <label for="joint_data_offer_p_i" class="form-label">DataPhone (1 GB) €8,26/mois HTVA
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer_p_i" class="ml-2" value="3">
                            <label for="joint_data_offer_p_i" class="form-label">DataPhone (2 GB) €16,53/mois HTVA
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="joint_data_offer_p_i" class="ml-2" value="4" required>
                            <label for="joint_data_offer_p_i" class="form-label">DataPhone (2,5 GB) €20,66/mois HTVA
                                btw
                            </label>
                        </div>



                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>App (1 au choix avec Bizz Mobile)
                                </b></h5>
                        </div>


                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_social_apps_p_i" class="ml-2" value="0" required>
                            <label for="mobile_social_apps_p_i" class="form-label"> <i
                                    data-feather="facebook"></i></label>
                        </div>

                        {{-- mobile_social_app --}}

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_social_apps_p_i" class="ml-2" value="1" required>
                            <label for="mobile_social_apps_p_i" class="form-label"> <i
                                    data-feather="twitter"></i></label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_social_apps_p_i" class="ml-2" value="2" required>
                            <label for="mobile_social_apps_p_i" class="form-label"> <i
                                    data-feather="instagram"></i></label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_social_apps_p_i" class="ml-2" value="3" required>
                            <label for="mobile_social_apps_p_i" class="form-label"><i class="fa fa-snapchat-ghost"
                                    aria-hidden="true"></i></label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_social_apps_p_i" class="ml-2" value="4" required>
                            <label for="mobile_social_apps_p_i" class="form-label"> <i class="fa fa-whatsapp"
                                    aria-hidden="true"></i>
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_social_apps_p_i" class="ml-2" value="5" required>
                            <label for="mobile_social_apps_p_i" class="form-label"><i class="fa fa-facebook"
                                    aria-hidden="true"></i>
                            </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="bizz_international_options" class="ml-2" value="0"
                                required>
                            <label for="bizz_international_options" class="form-label">Option Bizz International (avec
                                Bizz Mobile L, Unlimited & International)
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="radio" name="bizz_international_options" class="ml-2" value="1"
                                required>
                            <label for="bizz_international_options" class="form-label"> Mobile Coverage Extender
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="radio" name="bizz_international_options" class="ml-2" value="2"
                                required>
                            <label for="bizz_international_options" class="form-label">Smartphone Omnium

                            </label>
                        </div>



                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>Options Business
                                </b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="bizz_switch_i" class="ml-2" value="0">
                            <label for="bizz_switch_i" class="form-label">Bizz Office Switch

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="bizz_switch_i" class="ml-2" value="1">
                            <label for="bizz_switch_i" class="form-label">Bizz Mobile Switch

                            </label>
                        </div>
                        <div class="mb-2 mt-3 col-md-6">
                            <label for="second_number_text" class="form-label">2e
                                n°<span class="text-danger">*</span></label>
                            <input type="second_number_text"
                                class="form-control @error('second_number_text') is-invalid @enderror" id="be"
                                autocomplete="off" placeholder="BE" name="second_number_text"
                                value="{{ old('second_number_text') }}" required>
                            @error('second_number_text')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5   col-md-3">

                            <input type="radio" name="second_number_radio" class="ml-2" value="0" required>
                            <label for="second_number_radio" class="form-label"> Privé ou

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="radio" name="second_number_radio" class="ml-2" value="1">
                            <label for="second_number_radio" class="form-label">Professionnel

                            </label>
                        </div>



                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b> MOBILE INTERNET POUR PC/TABLETTE
                                </b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-3">

                            Mobile Internet
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobile_internet_i_size_1" class="ml-2" value="0">
                            <label for="mobile_internet_i_size" class="form-label">S

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="mobile_internet_i_size_2" class="ml-2" value="1">
                            <label for="mobile_internet_i_size" class="form-label">M

                            </label>
                        </div>



                        <div class="mb-2 mt-3 col-md-3">
                            <label for="international_rome_text" class="form-label">INTERNATIONAL & ROAMING<span
                                    class="text-danger">*</span></label>
                            <input type="international_rome_text"
                                class="form-control @error('international_rome_text') is-invalid @enderror" id="be"
                                autocomplete="off" placeholder="INTERNATIONAL & ROAMING" name="international_rome_text"
                                value="{{ old('international_rome_text') }}">
                            @error('international_rome_text')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b> Voice + sms + data
                                </b></h5>
                        </div>


                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="voice_data_sms_1" class="ml-2" value="0">
                            <label for="voice_data_sms" class="form-label">Daily Travel Passport

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="voice_data_sms_2" class="ml-2" value="1">
                            <label for="voice_data_sms" class="form-label">1-Month Travel Passport Top 3

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="voice_data_sms_3" class="ml-2" value="2">
                            <label for="voice_data_sms" class="form-label">1-Month Travel Passport Top

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="voice_data_sms_4" class="ml-2" value="3">
                            <label for="voice_data_sms" class="form-label">Travel Passport Top

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="voice_data_sms_5" class="ml-2" value="4">
                            <label for="voice_data_sms" class="form-label">Travel Passport Top Intense

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="voice_data_sms_6" class="ml-2" value="5">
                            <label for="voice_data_sms" class="form-label">Travel Passport Outside EU&Top

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="voice_data_sms_7" class="ml-2" value="6">
                            <label for="voice_data_sms" class="form-label">Travel Passport World

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-3">

                            <input type="checkbox" name="voice_data_sms_8" class="ml-2" value="7">
                            <label for="voice_data_sms" class="form-label"> Calls&SMS to EU, US, CA, CH

                            </label>
                        </div>



                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b> Voice
                                </b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="voice_i_1" class="ml-2" value="0">
                            <label for="voice_i" class="form-label">Bizz International

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="voice_i_2" class="ml-2" value="1">
                            <label for="voice_i" class="form-label"> Travel World for Business

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="checkbox" name="voice_i_3" class="ml-2" value="2">
                            <label for="voice_i" class="form-label"> Bizz No Limit International

                            </label>
                        </div>

                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>Data (laptop & smartphones)
                                </b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="data_i_1" class="ml-2" value="0">
                            <label for="data_i" class="form-label"> Daily Travel Surf

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="data_i_2" class="ml-2" value="1">
                            <label for="data_i" class="form-label"> Travel Surf Top

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="data_i_3" class="ml-2" value="2">
                            <label for="data_i" class="form-label"> Travel Surf Top Intense

                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="data_i_4" class="ml-2" value="3">
                            <label for="data_i class="   form-label"> Travel Surf World

                            </label>
                        </div>



                        <div class="mb-2 mt-5   col-md-12">

                            <input type="radio" name="data_i_5" class="ml-2" value="4">
                            <label for="data_i" class="form-label">Travel Surf World Intense
                                nb: Standaardoptie: Mobile Internet Travel Access - Volume

                            </label>
                        </div>


                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b>J. MODEM ET CONFIGURATION
                                </b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-6">

                            Connexion disponible dans l’habitation
                        </div>

                        <div class="mb-2 mt-5   col-md-3">

                            <input type="radio" name="is_connection_present_in_house" class="ml-2" value="0"
                                required>
                            <label for="is_connection_present_in_house" class="form-label"> oui

                            </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-3">

                            <input type="radio" name="is_connection_present_in_house" class="ml-2" value="1"
                                required>
                            <label for="is_connection_present_in_house" class="form-label"> non

                            </label>
                        </div>




                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_modem_config_type" class="ml-2" value="0" required>
                            <label for="mobile_modem_config_type" class="form-label"> Pack Take Away b-box3 + décodeur
                                HD
                            </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_modem_config_type" class="ml-2" value="1" required>
                            <label for="mobile_modem_config_type" class="form-label">B-box3
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="mobile_modem_config_type" class="ml-2" value="2" required>
                            <label for="mobile_modem_config_type" class="form-label">Location Décodeur HD - sans disque
                                dur

                            </label>
                        </div>


                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b> Solution sans fil Proximus TV via le réseau électrique
                                </b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="device_delivery_type" class="ml-2" value="0" required>
                            <label for="device_delivery_type" class="form-label">Wifi Booster (Business Flex)
                            </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="device_delivery_type" class="ml-2" value="1" required>
                            <label for="device_delivery_type" class="form-label">Modem USB Mobile Connect pour Mobile
                                Internet
                                sur ordinateur portable
                            </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="device_delivery_type" class="ml-2" value="0" required>
                            <label for="device_delivery_type" class="form-label">Wifi Booster (Business Flex)
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="device_delivery_type" class="ml-2" value="1" required>
                            <label for="device_delivery_type" class="form-label">Emporté
                            </label>
                        </div>
                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="device_delivery_type" class="ml-2" value="2" required>
                            <label for="device_delivery_type" class="form-label"> Livraison à domicile
                            </label>
                        </div>

                        <div class="mb-2 mt-5   col-md-8">

                            <input type="radio" name="other_delivery_type_radio" class="ml-2" value="0" required>
                            <label for="other_delivery_type" class="form-label">Autre point de retrait
                            </label>
                            <input type="other_delivery_type"
                                class="form-control @error('other_delivery_type') is-invalid @enderror"
                                id="other_delivery_type" autocomplete="off" placeholder="Ander afhaalpunt"
                                name="other_delivery_type" value="{{ old('other_delivery_type') }}" required>
                            @error('other_delivery_type')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b> K. INSTALLATIE
                                </b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="kit_to_install_k" class="ml-2" value="1" required>
                            <label for="kit_to_install_k" class="form-label">Kit à installer: €59 (frais d’activation
                                inclus/TVAC)
                            </label>
                        </div>

                        <div class="mb-2 col-md-6">
                            <label for="date_to_install_k" class="form-label mt-2">livraison via Taxipost, date
                                désirée<span class="text-danger">*</span></label>
                            <input class="form-control @error('date_to_install_k') is-invalid @enderror mb-4 mb-md-0"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="date_to_install_k" name="date_to_install_k"
                                value="{{ old('date_to_install_k') }}" type="date" required>

                        </div>


                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="time_of_day_k" class="ml-2" value="0" required>
                            <label for="time_of_day_k" class="form-label">matin
                            </label>
                        </div>


                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="time_of_day_k" class="ml-2" value="1" required>
                            <label for="time_of_day_k" class="form-label">après-midi
                            </label>
                        </div>

                        <div class="mb-2 mt-5 mb-2   col-md-6">
                            Installation par un technicien(frais d’activation inclus)

                        </div>

                        <div class="mb-2 mt-5   col-md-6">

                            <input type="radio" name="free_resources" class="ml-2" value="0" required>
                            <label for="free_resources" class="form-label">gratuit avec les Packs Flex, Epic Combo et
                                seconde résidence/Business Flex
                            </label>
                        </div>


                        <div class="mb-2 mt-3 col-md-6">
                            <label for="desired_employment_date" class="form-label mt-2">Date de mise en service
                                souhaitée<span class="text-danger">*</span></label>
                            <input
                                class="form-control @error('desired_employment_date') is-invalid @enderror mb-4 mb-md-0"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="desired_employment_date" name="desired_employment_date"
                                value="{{ old('desired_employment_date') }}" type="date" required>

                        </div>

                        <div class="mb-2 mt-4   col-md-6">

                            <input type="radio" name="refer_number_k" class="ml-2" value="0" required>
                            <label for="refer_number_k" class="form-label">N° de référence (optionnel)
                            </label>
                            <input type="refer_number_k"
                                class="form-control @error('refer_number_k') is-invalid @enderror" id="refer_number_k"
                                autocomplete="off" placeholder="Referentienummer (optioneel)" name="refer_number_k"
                                value="{{ old('refer_number_k') }}" required>
                            @error('refer_number_k')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b> L. PROMOTION
                                </b></h5>
                        </div>

                        <div class="mb-2 mt-5   col-md-4">
                            Une seule promotion à choisir parmi :


                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="promotion_l" class="ml-2" value="0" required>
                            <label for="promotion_l" class="form-label">Promotion du mois
                            </label>
                        </div>




                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="promotion_l" class="ml-2" value="1" required>
                            <label for="promotion_l" class="form-label"> Promotion tactique spécifique
                            </label>
                        </div>

                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b> M. MENTION DANS L’ANNUAIRE et au service de renseignements
                                </b></h5>
                        </div>




                        <div class="mb-2 mt-5   col-md-4">
                            Je souhaite apparaître dans l’annuaire

                        </div>

                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="wish_tbi_tele_directory_m" class="ml-2" value="0" required>
                            <label for="wish_tbi_tele_directory_m" class="form-label">Oui
                            </label>
                        </div>




                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="wish_tbi_tele_directory_m" class="ml-2" value="1" required>
                            <label for="wish_tbi_tele_directory_m" class="form-label"> Non
                            </label>
                        </div>



                        <div class="mb-2 mt-3 col-md-12">
                            <label for="name_or_company_name_m" class="form-label">Nom/prénom ou raison sociale<span
                                    class="text-danger">*</span></label>
                            <input type="name_or_company_name_m"
                                class="form-control @error('name_or_company_name_m') is-invalid @enderror"
                                id="name_or_company_name_m" autocomplete="off" placeholder="Naam en voornaam of firmanaam"
                                name="name_or_company_name_m" value="{{ old('name_or_company_name_m') }}" required>
                            @error('name_or_company_name_m')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-2 mt-5   col-md-4">

                            <input type="radio" name="address_choose_m" class="ml-2" value="1">
                            <label for="address_choose_m" class="form-label"> sous mon adresse de client ou
                            </label>
                        </div>

                        <div class="mb-2 mt-4   col-md-12">

                            <input type="radio" name="address_choose_m" class="ml-2" value="0">
                            <label for="address_choose_m" class="form-label">sous mon adresse de facturation
                                dans la catégorie professionnelle (facultatif)
                            </label>
                            <input type="address_choose_m_text"
                                class="form-control @error('address_choose_m_text') is-invalid @enderror"
                                id="address_choose_m" autocomplete="off"
                                placeholder="sous mon adresse de facturation
                                                                                                                                                                                                                dans la catégorie professionnelle (facultatif)"
                                name="address_choose_m_text" value="{{ old('address_choose_m_text') }}" required>
                            @error('address_choose_m_text')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>




                        <div class="mb-2 mt-5   col-md-12">

                            <input type="radio" name="consent_m" class="ml-2" value="0" required>
                            <label for="consent_m" class="form-label"> Je n’autorise pas Proximus à commercialiser mes
                                coordonnées à
                                des fins autres que la publication dans les annuaires
                            </label>
                        </div>

                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b> N. REMARQUES
                                </b></h5>
                        </div>





                        <div class="mb-2 mt-3 col-md-12">

                            <textarea name="comment_n" id="" cols="130" rows="3"></textarea>
                            @error('comment_n')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 style="text-align: center;"><b> O. SIGNATURE DU DEMANDEUR
                                </b></h5>
                        </div>

                        <div class=" col-md-12 mb-3 mt-3">
                            <h5 class="lead" style="text-align: center;"> Établi en trois exemplaires
                            </h5>
                        </div>


                        <div class="mb-2 mt-3 col-md-6">
                            <label for="at_o" class="form-label">Fait à<span class="text-danger">*</span></label>
                            <input type="at_o" class="form-control @error('at_o') is-invalid @enderror" id="at_o"
                                autocomplete="off" placeholder="Fait à" name="at_o" value="{{ old('at_o') }}" required>
                            @error('at_o')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-3 col-md-6">
                            <label for="on_o" class="form-label">le<span class="text-danger">*</span></label>
                            <input type="on_o" class="form-control @error('on_o') is-invalid @enderror" id="on_o"
                                autocomplete="off" placeholder="le" name="on_o" value="{{ old('on_o') }}" required>
                            @error('on_o')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>





                        <button class="btn btn-primary mb-2 mt-3">Submit</button>
                        <button class="btn btn-secondary mb-2 mt-3 ml-3">Cancel</button>

















                    </div>
                </form>
                {{-- end of row --}}
            </div>


        </div>
        {{-- master card --}}

        {{-- IDENTIFICATIE VAN DE KLANT / GEBRUIKER card start --}}



        {{-- IDENTIFICATIE VAN DE KLANT / GEBRUIKER card end --}}


    </div>
    {{-- Master main container END --}}
@endsection
