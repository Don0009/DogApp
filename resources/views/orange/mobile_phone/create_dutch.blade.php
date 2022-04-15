@extends('layouts.backend')

@section('content')
    {{-- start --}}


    {{-- end --}}
    <div class="row">
        <div class="col-md-12">
            <form class="forms-sample" action="{{ route('mobile_phone.store') }}" method="POST">
                @csrf()
                <input type="hidden" name="lang" value="{{ $lang }}">



                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                {{-- startr b --}}
                                <div class="mb-3 container">
                                    <div class="row">
                                        <div class="col-6 mt-3">
                                            <div class="orange">
                                                <p>Orange</p>
                                            </div>
                                        </div>
                                        <div class="col-6 mt-5">
                                            <div class="text_orange">
                                                <span>Orange Belgium nv.</span>
                                            </div>
                                            <div class="text_orange"> Bourgetlaan 3 | Brussel 1140</div>
                                            <div class="text_orange">TEL. <span>+32 (0) 2 745 71 11 |</span> FAX +32 (0)
                                                2 745 70
                                                00]</div>
                                            <div class="text_orange">BNP Paribas Fortis 210-0233334-04 <span>|
                                                    IBAN</span>BE10
                                                2100 2333 3404 <span>| BIC:</span> GEBABEBB </div>
                                            <div class="text_orange">BTW <span>BE 0456.810.810 |</span> RPR Brussel
                                                <span>www.orange.be</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- end b --}}

                                <div class="container">
                                    <h6 style="color: orangered;" class="card-title">Identification du client Orange
                                    </h6>
                                    {{-- box --}}
                                    <div class="mb-3 float-right">
                                        <label for="point_of_sale" class="form-label">Identificatie van het winkelpunt
                                            <span class="text-danger">*</span></label>
                                        <textarea name="point_of_sale" id="" cols="15" rows="2" required></textarea>
                                        @error('point_of_sale')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- box --}}
                                    <div class="mb-3">
                                        <input type="radio" name="client_exist" value="0">
                                        <label for="client_exist" class="form-label">Bestaande klant<span
                                                class="text-danger">*</span></label>
                                        @error('client_exist')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="client_num" class="form-label">Klantnr. :<span
                                                class="text-danger">*</span></label>
                                        <input type="client_num"
                                            class="form-control @error('client_num') is-invalid @enderror" id="client_num"
                                            autocomplete="off" placeholder="Client Number" name="client_num"
                                            value="{{ old('client_num') }}" required>
                                        @error('client_num')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="exist_phone" class="form-label">GSM-nr<span
                                                class="text-danger">*</span></label>
                                        <input type="exist_phone"
                                            class="form-control @error('exist_phone') is-invalid @enderror" id="exist_phone"
                                            autocomplete="off" placeholder="phone" name="exist_phone"
                                            value="{{ old('exist_phone') }}" required>
                                        @error('exist_phone')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="radio" name="new_client" value="0">
                                        <label for="new_client" class="form-label">Nieuwe klant<span
                                                class="text-danger">*</span></label>
                                        @error('new_client')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <p>Bron van het nummer:<span class="mb-3 text-danger">*</span></p>
                                    <div class="col">
                                        <input type="radio" name="s_number" value="0" required>
                                        <label for="s_number" class="form-label">Nr. overdracht</label>
                                        <input type="radio" name="s_number" value="1">
                                        <label for="s_number" class="form-label">Omschakeling herlaadkaart</label>
                                        <input type="radio" name="s_number" value="2">
                                        <label for="s_number" class="form-label">Nieuw nummer</label>
                                    </div>
                                    <div class="">
                                        {{-- row removed --}}
                                        <h6>Langue:<span class="mr-2 text-danger">*</span></h6>
                                        <input type="radio" name="language" value="0" required>
                                        <label for="language" class="ml-2 form-label">NL</label>
                                        <input type="radio" name="language" value="1">
                                        <label for="language" class="ml-2 form-label">FR</label>
                                    </div>
                                    <div class="">
                                        {{-- row removed --}}

                                        <h5>Titre:<span class="mr-2 text-danger">*</span></h5>
                                        <input type="radio" name="title" value="0">
                                        <label for="title" class="ml-2 form-label">Mevr</label>
                                        <input type="radio" name="title" value="1">
                                        <label for="title" class="ml-2 form-label">Juffr</label>
                                        <input type="radio" name="title" value="2">
                                        <label for="title" class="ml-2 form-label">Dhr</label>
                                    </div>
                                    <div class="">
                                        {{-- row removed --}}
                                        <h5 style="color: orangered;">Type klant<span class="text-danger">*</span>
                                        </h5>
                                        <input type="radio" name="customer_type" value="0">
                                        <label for="customer_type" class="ml-2 form-label">Natuurlijke persoon</label>
                                        <input type="radio" name="customer_type" class="ml-2" value="1">
                                        <label for="customer_type" class="ml-2 form-label">Zelfstandige/vrij beroep</label>
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Naam<span
                                                class="text-danger">*</span></label>
                                        <input type="name" class="form-control @error('name') is-invalid @enderror"
                                            id="name" autocomplete="off" placeholder="Name" name="name"
                                            value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="f_name" class="form-label">Voornaam<span
                                                class="text-danger">*</span></label>
                                        <input type="f_name" class="form-control @error('f_name') is-invalid @enderror"
                                            id="f_name" autocomplete="off" placeholder="First Name" name="f_name"
                                            value="{{ old('f_name') }}" required>
                                        @error('f_name')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="street" class="form-label">Straat<span
                                                        class="text-danger">*</span></label>
                                                <input type="street"
                                                    class="form-control @error('street') is-invalid @enderror" id="street"
                                                    autocomplete="off" placeholder="Street" name="street"
                                                    value="{{ old('street') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-2">
                                                <label for="no" class="form-label">…Nr<span
                                                        class="text-danger">*</span></label>
                                                <input type="no" class="form-control @error('no') is-invalid @enderror"
                                                    id="no" autocomplete="off" placeholder="No" name="no"
                                                    value="{{ old('no') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-2">
                                                <label for="box" class="form-label">Bus<span
                                                        class="text-danger">*</span></label>
                                                <input type="box" class="form-control @error('box') is-invalid @enderror"
                                                    id="box" autocomplete="off" placeholder="Box" name="box"
                                                    value="{{ old('box') }}" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-2">
                                                <label for="town" class="form-label">Stad<span
                                                        class="text-danger">*</span></label>
                                                <input type="town" class="form-control @error('town') is-invalid @enderror"
                                                    id="town" autocomplete="off" placeholder="Town" name="town"
                                                    value="{{ old('town') }}" required>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="mb-2">
                                                <label for="postal_code" class="form-label">Postcode<span
                                                        class="text-danger">*</span></label>
                                                <input type="postal_code"
                                                    class="form-control @error('postal_code') is-invalid @enderror"
                                                    id="postal_code" autocomplete="off" placeholder="Postal Code"
                                                    name="postal_code" value="{{ old('postal_code') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="country" class="form-label">Land<span
                                                        class="text-danger">*</span></label>
                                                <input type="country"
                                                    class="form-control @error('country') is-invalid @enderror"
                                                    id="country" autocomplete="off" placeholder="Country" name="country"
                                                    value="{{ old('country') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="date_of_birth" class="form-label">Geboortedatum<span
                                                        class="text-danger">*</span></label>
                                                <input
                                                    class="form-control @error('date_of_birth') is-invalid @enderror mb-4 mb-md-0"
                                                    data-inputmask="'alias': 'datetime'"
                                                    data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric"
                                                    id="date_of_birth" name="date_of_birth"
                                                    value="{{ old('date_of_birth') }}" type="date">

                                            </div>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                        <input type="radio" name="busines" value="0">
                                        <label for="busines" class="form-label">Firma<span
                                                class="text-danger">*</span></label>
                                        @error('busines')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row">

                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="company_number" class="form-label">Ondernemingsnr<span
                                                        class="text-danger">*</span></label>
                                                <input type="company_number"
                                                    class="form-control @error('company_number') is-invalid @enderror"
                                                    id="company_number" autocomplete="off" placeholder="Company Number"
                                                    name="company_number" value="{{ old('company_number') }}" required>

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="legal_status" class="form-label">Vennootschapsvorm<span
                                                        class="text-danger">*</span></label>
                                                <input type="legal_status"
                                                    class="form-control @error('legal_status') is-invalid @enderror"
                                                    id="legal_status" autocomplete="off" placeholder="Legal Status"
                                                    name="legal_status" value="{{ old('legal_status') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="company_name" class="form-label">Firmanaam<span
                                                class="text-danger">*</span></label>
                                        <input type="company_name"
                                            class="form-control @error('company_name') is-invalid @enderror"
                                            id="company_name" autocomplete="off" placeholder="Company Name"
                                            name="company_name" value="{{ old('company_name') }}" required>
                                        @error('company_name')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="contact_person" class="form-label">Contactpersoon:<span
                                                class="text-danger">*</span></label>
                                        <input type="contact_person"
                                            class="form-control @error('contact_person') is-invalid @enderror"
                                            id="contact_person" autocomplete="off" placeholder="Contact Person"
                                            name="contact_person" value="{{ old('contact_person') }}" required>
                                        @error('contact_person')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <h5 class="mb-3" style="color: orangered;">Adresse de facturation (si
                                        différente
                                        de l’adresse du client)
                                    </h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="comp_street" class="form-label">Straat<span
                                                        class="text-danger">*</span></label>
                                                <input type="comp_street"
                                                    class="form-control @error('comp_street') is-invalid @enderror"
                                                    id="comp_street" autocomplete="off" placeholder="Comp Street"
                                                    name="comp_street" value="{{ old('comp_street') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-2">
                                                <label for="comp_no" class="form-label">Nr<span
                                                        class="text-danger">*</span></label>
                                                <input type="comp_no"
                                                    class="form-control @error('comp_no') is-invalid @enderror"
                                                    id="comp_no" autocomplete="off" placeholder="Comp_No" name="comp_no"
                                                    value="{{ old('comp_no') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-2">
                                                <label for="comp_box" class="form-label">Bus<span
                                                        class="text-danger">*</span></label>
                                                <input type="comp_box"
                                                    class="form-control @error('comp_box') is-invalid @enderror"
                                                    id="comp_box" autocomplete="off" placeholder="Comp Box" name="comp_box"
                                                    value="{{ old('comp_box') }}" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="comp_postal_code" class="form-label">Postcode<span
                                                        class="text-danger">*</span></label>
                                                <input type="comp_postal_code"
                                                    class="form-control @error('comp_postal_code') is-invalid @enderror"
                                                    id="comp_postal_code" autocomplete="off" placeholder="Comp Postal Code"
                                                    name="comp_postal_code" value="{{ old('comp_postal_code') }}"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="comp_town" class="form-label">Plaats<span
                                                        class="text-danger">*</span></label>
                                                <input type="comp_town"
                                                    class="form-control @error('comp_town') is-invalid @enderror"
                                                    id="comp_town" autocomplete="off" placeholder="Comp Town"
                                                    name="comp_town" value="{{ old('comp_town') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="comp_country" class="form-label">Land<span
                                                class="text-danger">*</span></label>
                                        <input type="comp_country"
                                            class="form-control @error('comp_country') is-invalid @enderror"
                                            id="comp_country" autocomplete="off" placeholder="Comp Country"
                                            name="comp_country" value="{{ old('comp_country') }}" required>
                                        @error('comp_country')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- strat of second card --}}

                                    <h6 style="color: orangered;" class="card-title">Choix d’abonnement</h6>
                                    <div class="mb-3">
                                        <label for="sim" class="form-label">SIM<span
                                                class="text-danger">*</span></label>
                                        <input type="sim" class="form-control @error('sim') is-invalid @enderror" id="sim"
                                            autocomplete="off" placeholder="SIM" name="sim" value="{{ old('sim') }}"
                                            required>
                                        @error('sim')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="res_number" class="form-label">Gereserveerd nr<span
                                                class="text-danger">*</span></label>
                                        <input type="res_number"
                                            class="form-control @error('res_number') is-invalid @enderror" id="res_number"
                                            autocomplete="off" placeholder="Comp Country" name="res_number"
                                            value="{{ old('res_number') }}" required>
                                        @error('res_number')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="pricing_plan" class="form-label">Tariefplan<span
                                                class="text-danger">*</span></label>
                                        <input type="pricing_plan"
                                            class="form-control @error('pricing_plan') is-invalid @enderror"
                                            id="pricing_plan" autocomplete="off" placeholder="Comp Country"
                                            name="pricing_plan" value="{{ old('pricing_plan') }}" required>
                                        @error('pricing_plan')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="options_services" class="form-label">Optie en diensten:
                                            <span class="text-danger">*</span></label>
                                        <textarea type="options_services" class="form-control @error('options_services') is-invalid @enderror"
                                            id="options_services" autocomplete="off" placeholder="Comp Country" row="5"
                                            name="options_services" value="{{ old('options_services') }}"
                                            required></textarea>
                                        @error('options_services')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <h5 class="mb-3" style="color: orangered;">Signature du client
                                                (titulaire
                                                de la carte principale
                                            </h5>
                                            <label for="copy" class="form-label">Opgemaakt in 2 exemplaren te :<span
                                                    class="text-danger">*</span></label>
                                            <input type="copy" class="form-control @error('copy') is-invalid @enderror"
                                                id="copy" autocomplete="off" placeholder="Done Copy" name="copy"
                                                value="{{ old('copy') }}" required>

                                            <label for="date" class="form-label mt-2">Op:<span
                                                    class="text-danger">*</span></label>
                                            <input class="form-control @error('date') is-invalid @enderror mb-4 mb-md-0"
                                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                                inputmode="numeric" id="date" name="date" value="{{ old('date') }}"
                                                type="date" required>
                                        </div>
                                    </div>



                                    {{-- paste signx --}}
                                    <label for="sign_2" class="form-label">Handtekening klant<span
                                            class="text-danger">*</span></label>
                                    <textarea type="sign_2" class="form-control @error('sign_2') is-invalid @enderror" id="sign_2" autocomplete="off"
                                        placeholder="Signature du client" name="sign_2" rows="1"
                                        value="{{ old('sign_2') }}" required></textarea>

                                    @error('sign_2')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <h5 class="mt-3 mb-3" style="color: orangered;">Paiement par carte de
                                                crédit
                                            </h5>
                                            {{-- <p> Par la présente, j’autorise Orange Belgium s.a. jusqu’à révocation expresse à
                                                débiter toutes les factures liées au présent contrat de la carte de crédit
                                                suivante :</p> --}}

                                            <label for="credit_card_holder" class="form-label">Kaarthouder:<span
                                                    class="text-danger">*</span></label>
                                            <input type="credit_card_holder"
                                                class="form-control @error('credit_card_holder') is-invalid @enderror"
                                                id="credit_card_holder" autocomplete="off" placeholder="Credit Card Holder"
                                                name="credit_card_holder" value="{{ old('credit_card_holder') }}"
                                                required>

                                            <label for="code_generate" class="mt-2 form-label">Code / alias gegenereerd
                                                door Ogone / Inginéco<span class="text-danger">*</span></label>
                                            <input type="code_generate"
                                                class="form-control @error('code_generate') is-invalid @enderror"
                                                id="credit_card_holder" autocomplete="off" placeholder="Code Generate"
                                                name="code_generate" value="{{ old('code_generate') }}" required>
                                        </div>
                                    </div>


                                    {{-- paste signx here --}}
                                    <label for="sign_1" class="form-label">Handtekening klant:<span
                                            class="text-danger">*</span></label>
                                    <textarea type="sign_1" class="form-control @error('sign_1') is-invalid @enderror" id="sign_1" autocomplete="off"
                                        placeholder="Signature du client
                                        " name="sign_1" rows="2" value="{{ old('sign_1') }}" required></textarea>

                                    @error('sign_1')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- end of con --}}

                            <div class="container">
                                <div class="">
                                    {{-- card removed --}}
                                    <div class="">
                                        {{-- card body removed --}}
                                        <div class="ml-3 mt-3 mb-2">
                                            <label for="account_holder_name" class="form-label">Naam van de
                                                rekeninghouder<span class="text-danger">*</span></label>
                                            <input type="account_holder_name"
                                                class="form-control @error('account_holder_name') is-invalid @enderror"
                                                id="account_holder_name" autocomplete="off"
                                                placeholder="Nom du titulaire de compte" name="account_holder_name"
                                                value="{{ old('account_holder_name') }}" required>
                                        </div>
                                        <div class="ml-3 mb-2">
                                            <label for="street_and_number" class="form-label">Straat en nummer<span
                                                    class="text-danger">*</span></label>
                                            <input type="street_and_number"
                                                class="form-control @error('street_and_number') is-invalid @enderror"
                                                id="street_and_number" autocomplete="off"
                                                placeholder="Nom du titulaire de compte" name="street_and_number"
                                                value="{{ old('street_and_number') }}" required>
                                        </div>
                                        <div class="row">
                                            <div class="ml-3 col-10">
                                                <label for="postal_code_and_city" class="form-label">Postcode en
                                                    gemeente<span class="text-danger">*</span></label>
                                                <input type="postal_code_and_city"
                                                    class="form-control @error('postal_code_and_city') is-invalid @enderror"
                                                    id="postal_code_and_city" autocomplete="off"
                                                    placeholder="Nom du titulaire de compte" name="postal_code_and_city"
                                                    value="{{ old('postal_code_and_city') }}" required>
                                            </div>
                                            <div class="mr-3 ml-3 mt-2 col-2">
                                                <label for="hold_country" class="form-label">Land<span
                                                        class="text-danger">*</span></label>
                                                <input type="hold_country"
                                                    class="form-control @error('hold_country') is-invalid @enderror"
                                                    id="hold_country" autocomplete="off"
                                                    placeholder="Nom du titulaire de compte" name="hold_country"
                                                    value="{{ old('hold_country') }}" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="ml-3 mt-3 col-9">
                                                <label for="iban_account_number"
                                                    class="form-label">IBAN-rekeningnummer<span
                                                        class="text-danger">*</span></label>
                                                <input type="iban_account_number"
                                                    class="form-control @error('iban_account_number') is-invalid @enderror"
                                                    id="iban_account_number" autocomplete="off"
                                                    placeholder="Nom du titulaire de compte" name="iban_account_number"
                                                    value="{{ old('iban_account_number') }}" required>
                                            </div>
                                            <div class="ml-3 mt-3 col-3">
                                                <label for="bic_code" class="form-label">BIC-code<span
                                                        class="text-danger">*</span></label>
                                                <input type="bic_code"
                                                    class="form-control @error('bic_code') is-invalid @enderror"
                                                    id="bic_code" autocomplete="off"
                                                    placeholder="Nom du titulaire de compte" name="bic_code"
                                                    value="{{ old('bic_code') }}" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mt-3 ml-3 col-9">
                                                <label for="underlying_contract_number" class="form-label">Nr. van het
                                                    onderliggende contract<span class="text-danger">*</span></label>
                                                <input type="underlying_contract_number"
                                                    class="form-control @error('underlying_contract_number') is-invalid @enderror"
                                                    id="underlying_contract_number" autocomplete="off"
                                                    placeholder="Nom du titulaire de compte"
                                                    name="underlying_contract_number"
                                                    value="{{ old('underlying_contract_number') }}" required>
                                                <div class="row">
                                                    <div class="ml-1 mt-3 col-6">
                                                        <label for="a_date" class="form-label"> Datum
                                                            (dag/maand/jaar)<span class="text-danger">*</span></label>
                                                        <input
                                                            class="form-control @error('a_date') is-invalid @enderror mb-4 mb-md-0"
                                                            data-inputmask="'alias': 'datetime'"
                                                            data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric"
                                                            id="a_date" name="a_date" value="{{ old('a_date') }}"
                                                            type="date" required>
                                                        <label for="location" class="mt-3 form-label">Plaats<span
                                                                class="text-danger">*</span></label>
                                                        <input type="location"
                                                            class="form-control @error('location') is-invalid @enderror"
                                                            id="location" autocomplete="off"
                                                            placeholder="Nom du titulaire de compte" name="location"
                                                            value="{{ old('location') }}" required>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="ml-3 mt-3 col-3">
                                                <label for="signature" class="form-label">Signature du titulaire de
                                                    compte<span class="text-danger">*</span></label>
                                                <textarea type="signature" class="mb-3 form-control @error('signature') is-invalid @enderror" id="signature"
                                                    autocomplete="off" placeholder="Signature du titulaire de compte"
                                                    name="signature" rows="8" value="{{ old('signature') }}"
                                                    required></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- this is last --}}

                            {{-- end of xcon --}}
                        </div>

                    </div>
                </div>
        </div>
        <div class="col-12">


            {{-- end of first contanier --}}
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="mt-3 btn btn-primary me-2">Submit</button>
                    <button class="mt-3 btn btn-secondary">Cancel</button>
                </div>

            </div>

            </form>
        </div>
    </div>
@endsection
