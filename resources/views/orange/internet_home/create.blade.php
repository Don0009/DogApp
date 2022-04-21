@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form class="forms-sample" action="{{ route('internet_home.store') }}" method="POST">
                @csrf()
                <input type="hidden" name="lang" value="fr">

                <div class="row">
                    <div class="col-12">
                        {{-- changed --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="section mb-3">
                                    <div class="container">
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
                                                <div class="text_orange">TEL. <span>+32 (0) 2 745 71 11 |</span> FAX +32
                                                    (0) 2 745 70
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
                                </div>
                                <h4 class="mb-3" style="color: orangered; text-align:center;">Demande de contrat
                                    Easy Internet
                                    @Home</h4>
                                <h6 style="color: orangered; text-align:center;" class="card-title">Identification du
                                    client</h6>

                                {{-- New Box Starts --}}
                                <div class="border border-dark pt-3">

                                    <div class="container">
                                        <div class="row">
                                            {{-- changed --}}

                                            <div class="mb-2 container">
                                                <input type="radio" name="client_exist" value="0" required>
                                                <label for="client_exist" class="mb-3 form-label">Client existant<span
                                                        class="text-danger">*</span></label>
                                                @error('client_exist')
                                                    <span class="invalid-feedback mb-2" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                            <div class="mb-2 col-md-6">
                                                <label for="contract_number_1" class="form-label">N° De Contrat:<span
                                                        class="text-danger">*</span></label>
                                                <input type="text"
                                                    class="form-control @error('contract_number_1') is-invalid @enderror"
                                                    id="contract_number_1" autocomplete="off" placeholder=" N° De Contrat"
                                                    name="contract_number_1" value="{{ old('contract_number_1') }}"
                                                    required>
                                                @error('contract_number_1')
                                                    <span class="invalid-feedback mb-2" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-2 col-md-6">
                                                <label for="consultant_signature_1" class="form-label">Signature Du
                                                    Consultant<span class="text-danger">*</span></label>
                                                <textarea type="consultant_signature_1" class="form-control @error('consultant_signature_1') is-invalid @enderror"
                                                    id="consultant_signature_1" autocomplete="off" placeholder="Signature Du
                                                Consultant" name="consultant_signature_1" rows="2"
                                                    value="{{ old('consultant_signature_1') }}" required></textarea>

                                                @error('consultant_signature_1')
                                                    <span class="invalid-feedback mb-2" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- New Box Ends --}}
                                    <div class="container">
                                        <div class="row">
                                            {{-- changed --}}
                                            <div class="mb-2 col-md-4">
                                                <label for="client_num" class="form-label">N° de client<span
                                                        class="text-danger">*</span></label>
                                                <input type="client_num"
                                                    class="form-control @error('client_num') is-invalid @enderror"
                                                    id="client_num" autocomplete="off" placeholder="N° de client"
                                                    name="client_num" value="{{ old('client_num') }}" required>
                                                @error('client_num')
                                                    <span class="invalid-feedback mb-2" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-2 col-md-4">
                                                <label for="exist_phone" class="form-label">N° de GSM <span
                                                        class="text-danger">*</span></label>
                                                <input type="exist_phone"
                                                    class="form-control @error('exist_phone') is-invalid @enderror"
                                                    id="exist_phone" autocomplete="off" placeholder="N° de GSM "
                                                    name="exist_phone" value="{{ old('exist_phone') }}" required>
                                                @error('exist_phone')
                                                    <span class="invalid-feedback mb-2" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-2 col-md-4">
                                                <label for="exist_mail" class="form-label">E Mail<span
                                                        class="text-danger">*</span></label>
                                                <input type="exist_mail"
                                                    class="form-control @error('title') is-invalid @enderror"
                                                    id="exist_mail" autocomplete="off" placeholder="E Mail"
                                                    name="exist_mail" value="{{ old('exist_mail') }}" required>
                                                @error('exist_mail')
                                                    <span class="invalid-feedback mb-2" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- pasted the check box --}}

                                    <div class="mb-2 container">
                                        <input type="radio" name="new_client" value="0" required>
                                        <label for="new_client" class="mb-3 form-label">Nouveau clien<span
                                                class="text-danger">*</span></label>
                                        @error('new_client')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="container mb-2">
                                        {{-- changed --}}
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="mb-3">Title<span class="text-danger">*</span></h5>
                                                <input type="radio" name="title" value="0" required>
                                                <label for="title" class="form-label">Mme</label>
                                                <input type="radio" name="title" value="1">
                                                <label for="title" class="form-label">Mlle</label>
                                                <input type="radio" name="title" value="2">
                                                <label for="title" class="form-label">M</label>
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-3">Language:<span class="text-danger">*</span>
                                                </h6>
                                                <input type="radio" name="language" value="0" required>
                                                <label for="language" class="form-label">NL</label>
                                                <input type="radio" name="language" value="1">
                                                <label for="language" class="form-label">FR</label>
                                                <input type="radio" name="language" value="2">
                                                <label for="language" class="form-label">UK</label>
                                                <input type="radio" name="language" value="3">
                                                <label for="language" class="form-label">DE</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-2 container">
                                        <label for="name" class="form-label">Nom<span
                                                class="text-danger">*</span></label>
                                        <input type="name" class="form-control @error('name') is-invalid @enderror"
                                            id="name" autocomplete="off" placeholder="Nom" name="name"
                                            value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-2 container">
                                        <label for="f_name" class="form-label">Prénom<span
                                                class="text-danger">*</span></label>
                                        <input type="f_name" class="form-control @error('f_name') is-invalid @enderror"
                                            id="f_name" autocomplete="off" placeholder="Prénom" name="f_name"
                                            value="{{ old('f_name') }}" required>
                                        @error('f_name')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- container added --}} <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label for="street" class="form-label">Rue:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="street"
                                                        class="form-control @error('street') is-invalid @enderror"
                                                        id="street" autocomplete="off" placeholder="Street" name="street"
                                                        value="{{ old('street') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-2 container">
                                                    <label for="no" class="form-label">N°<span
                                                            class="text-danger">*</span></label>
                                                    <input type="no" class="form-control @error('no') is-invalid @enderror"
                                                        id="no" autocomplete="off" placeholder="N°" name="no"
                                                        value="{{ old('no') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-2 container">
                                                    <label for="box" class="form-label">Bte:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="box"
                                                        class="form-control @error('box') is-invalid @enderror" id="box"
                                                        autocomplete="off" placeholder="Bte" name="box"
                                                        value="{{ old('box') }}" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="mb-2">
                                                    <label for="town" class="form-label">Ville:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="town"
                                                        class="form-control @error('town') is-invalid @enderror" id="town"
                                                        autocomplete="off" placeholder="Town" name="town"
                                                        value="{{ old('town') }}" required>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="mb-2">
                                                    <label for="postal_code" class="form-label">Code postal<span
                                                            class="text-danger">*</span></label>
                                                    <input type="postal_code"
                                                        class="form-control @error('postal_code') is-invalid @enderror"
                                                        id="postal_code" autocomplete="off" placeholder="Code postal"
                                                        name="postal_code" value="{{ old('postal_code') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-2 container">
                                                    <label for="country" class="form-label">Pays:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="country"
                                                        class="form-control @error('country') is-invalid @enderror"
                                                        id="country" autocomplete="off" placeholder="Pays" name="country"
                                                        value="{{ old('country') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label for="date_of_birth" class="mt-1 form-label">Date de
                                                        naissance<span class="text-danger">*</span></label>
                                                    <input
                                                        class="form-control @error('date_of_birth') is-invalid @enderror mb-4 mb-md-0"
                                                        data-inputmask="'alias': 'datetime'"
                                                        data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric"
                                                        id="date_of_birth" name="date_of_birth"
                                                        value="{{ old('date_of_birth') }}" type="date" required>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- container added --}}
                                    <div class="mb-2 container">
                                        <label for="telephone" class="form-label">N° tél. privé fixe :<span
                                                class="text-danger">*</span></label>
                                        <input type="telephone"
                                            class="form-control @error('telephone') is-invalid @enderror" id="telephone"
                                            autocomplete="off" placeholder="Telephone" name="telephone"
                                            value="{{ old('telephone') }}" required>
                                        @error('telephone')
                                            <span class="invalid-feedback mb-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    {{-- container added --}}
                                    <div class="container">
                                        <div class="mb-2">
                                            <label for="mob_num" class="form-label">N° de GSM :<span
                                                    class="text-danger">*</span></label>
                                            <input type="mob_num"
                                                class="form-control @error('mob_num') is-invalid @enderror" id="mob_num"
                                                autocomplete="off" placeholder="Mobile Number" name="mob_num"
                                                value="{{ old('mob_num') }}" required>
                                            @error('mob_num')
                                                <span class="invalid-feedback mb-2" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label for="account_number" class="mt-3 form-label">N° de compte<span
                                                    class="text-danger">*</span></label>
                                            <input type="account_number"
                                                class="form-control @error('account_number') is-invalid @enderror"
                                                id="account_number" autocomplete="off" placeholder="Account Number"
                                                name="account_number" value="{{ old('account_number') }}" required>
                                            @error('account_number')
                                                <span class="invalid-feedback mb-2" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-2">
                                            <label for="mail" class="form-label">E Mail<span
                                                    class="text-danger">*</span></label>
                                            <input type="mail" class="form-control @error('mail') is-invalid @enderror"
                                                id="mail" autocomplete="off" placeholder="Mail" name="mail"
                                                value="{{ old('mail') }}" required>
                                            @error('mail')
                                                <span class="invalid-feedback mb-2" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- container ends --}}
                                    {{-- start of container --}}
                                    <div class="container mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <h6 style="color: orangered;">Profession:<span
                                                        class="text-danger">*</span>
                                                </h6>
                                            </div>
                                            <div class="col-9">
                                                <div class="row-12">
                                                    <input type="radio" name="profession" value="0" required>
                                                    <label for="profession" class="form-label">salarié</label>
                                                    <input type="radio" name="profession" value="1">
                                                    <label for="profession" class="form-label">prof. libérale</label>
                                                    <input type="radio" name="profession" value="2">
                                                    <label for="profession" class="form-label">indépendant</label>
                                                </div>
                                                <div class="row-12">
                                                    <input type="radio" name="profession" value="3" required>
                                                    <label for="profession" class="form-label">retraité</label>
                                                    <input type="radio" name="profession" value="4">
                                                    <label for="profession" class="form-label">retraité</label>
                                                    <input type="radio" name="profession" value="5">
                                                    <label for="profession" class="form-label">sans prof</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- end of containerxxxx --}}
                                </div>

                                <div class="border border-dark pt-3 mt-3">
                                    <h5 class="mt-3 mb-3" style="color: orangered; text-align:center;">Société
                                        (personne
                                        morale, indépendant)<span class="text-danger">*</span></h5>
                                    <div class="container">
                                        <div class="mb-2">
                                            <label for="company_name" class="form-label">Nom de la société<span
                                                    class="text-danger">*</span></label>
                                            <input type="company_name"
                                                class="form-control @error('company_name') is-invalid @enderror"
                                                id="company_name" autocomplete="off" placeholder="Nom de la société"
                                                name="company_name" value="{{ old('company_name') }}" required>
                                            @error('company_name')
                                                <span class="invalid-feedback mb-2" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label for="legal_status" class="form-label">Forme juridique<span
                                                            class="text-danger">*</span></label>
                                                    <input type="legal_status"
                                                        class="form-control @error('legal_status') is-invalid @enderror"
                                                        id="legal_status" autocomplete="off" placeholder="Forme juridique"
                                                        name="legal_status" value="{{ old('legal_status') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label for="company_number" class="form-label">N° d’entreprise<span
                                                            class="text-danger">*</span></label>
                                                    <input type="company_number"
                                                        class="form-control @error('company_number') is-invalid @enderror"
                                                        id="company_number" autocomplete="off" placeholder="N° d’entreprise"
                                                        name="company_number" value="{{ old('company_number') }}"
                                                        required>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="contact_person" class="form-label">Personne de contact<span
                                                    class="text-danger">*</span></label>
                                            <input type="contact_person"
                                                class="form-control @error('contact_person') is-invalid @enderror"
                                                id="contact_person" autocomplete="off" placeholder="Personne de contact"
                                                name="contact_person" value="{{ old('contact_person') }}" required>
                                            @error('contact_person')
                                                <span class="invalid-feedback mb-2" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label for="phone_number" class="form-label">N° tél<span
                                                            class="text-danger">*</span></label>
                                                    <input type="phone_number"
                                                        class="form-control @error('phone_number') is-invalid @enderror"
                                                        id="phone_number" autocomplete="off" placeholder="N° tél"
                                                        name="phone_number" value="{{ old('phone_number') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label for="fax" class="form-label">N° fax<span
                                                            class="text-danger">*</span></label>
                                                    <input type="fax"
                                                        class="form-control @error('fax') is-invalid @enderror" id="fax"
                                                        autocomplete="off" placeholder="N° fax" name="fax"
                                                        value="{{ old('fax') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- zxzx --}}
                                <div class="border border-dark mt-3">

                                <h5 class="mt-4 mb-3" style="color: orangered; text-align:center;">Adresse de
                                    facturation (si différente de
                                    l’adresse du client)</h5>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="comp_street" class="form-label">Rue:<span
                                                        class="text-danger">*</span></label>
                                                <input type="comp_street"
                                                    class="form-control @error('comp_street') is-invalid @enderror"
                                                    id="comp_street" autocomplete="off" placeholder="Rue" name="comp_street"
                                                    value="{{ old('comp_street') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-2 container">
                                                <label for="comp_no" class="form-label">N°:<span
                                                        class="text-danger">*</span></label>
                                                <input type="comp_no"
                                                    class="form-control @error('comp_no') is-invalid @enderror"
                                                    id="comp_no" autocomplete="off" placeholder="N°" name="comp_no"
                                                    value="{{ old('comp_no') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-2 container">
                                                <label for="comp_box" class="form-label">Bte:<span
                                                        class="text-danger">*</span></label>
                                                <input type="comp_box"
                                                    class="form-control @error('comp_box') is-invalid @enderror"
                                                    id="comp_box" autocomplete="off" placeholder="Bte" name="comp_box"
                                                    value="{{ old('comp_box') }}" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="comp_town" class="form-label">Ville:<span
                                                        class="text-danger">*</span></label>
                                                <input type="comp_town"
                                                    class="form-control @error('comp_town') is-invalid @enderror"
                                                    id="comp_town" autocomplete="off" placeholder="Ville" name="comp_town"
                                                    value="{{ old('comp_town') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-2 container">
                                                <label for="comp_postal_code" class="form-label">Code postal :<span
                                                        class="text-danger">*</span></label>
                                                <input type="comp_postal_code"
                                                    class="form-control @error('comp_postal_code') is-invalid @enderror"
                                                    id="comp_postal_code" autocomplete="off" placeholder="Code postal"
                                                    name="comp_postal_code" value="{{ old('comp_postal_code') }}"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-2 container">
                                    <label for="comp_country" class="form-label">Pays:<span
                                            class="text-danger">*</span></label>
                                    <input type="comp_country"
                                        class="form-control @error('comp_country') is-invalid @enderror" id="comp_country"
                                        autocomplete="off" placeholder="Pays" name="comp_country"
                                        value="{{ old('comp_country') }}" required>
                                    @error('comp_country')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                </div>
                                {{-- zxzx --}}
                                {{-- second card starts --}}
                                <div class="mt-3 col-12">


                                    <div class="container">

                                        {{-- boder xyz --}}
<div class="border border-dark pl-3 pt-3 pr-3">


    <h6 style="color: orangered; text-align:center;" class="card-title">Choix
        d’activation
    </h6>

    <div class="row">
        <div class="col-12 mb-2">
            <label for="card_number" class="form-label">N° carte SIM<span
                    class="text-danger">*</span></label>
            <input type="card_number"
                class="form-control @error('card_number') is-invalid @enderror"
                id="card_number" autocomplete="off" placeholder="N° carte SIM"
                name="card_number" value="{{ old('card_number') }}" required>
            @error('card_number')
                <span class="invalid-feedback mb-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-12 mb-2">
            <input type="radio" name="internet_home" value="0" required>
            <label for="internet_home" class="form-label">Easy Internet @Home<span
                    class="text-danger">*</span></label>

            <h5> + </h5>
            <p>j’achète le modem 4G au prix promotionnel</p>
            <h5> + </h5>
            <p>pour une durée de 12 mois</p>
            @error('internet_home')
                <span class="invalid-feedback mb-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="col-12">
            <div class="mb-2">
                <input type="radio" name="boot_option" value="0" required>
                <label for="boot_option" class="form-label">Option Data Boost<span
                        class="text-danger">*</span></label>
                @error('boot_option')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

</div>
                                            {{-- border xyz --}}
                                            <div class="col-12">
                                                <div class="mb-2">
                                                    <h5 style="color: orangered; text-align:center;">Adresse principale
                                                        d’utilisation du service</h5>
                                                </div>
                                            </div>

                                            <div class="container">
                                                {{-- changed --}}
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <label for="street" class="form-label">Rue:<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="street"
                                                                class="form-control @error('street') is-invalid @enderror"
                                                                id="street" autocomplete="off" placeholder="Rue"
                                                                name="street" value="{{ old('street') }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="mb-2">
                                                            <label for="no" class="form-label">N°:<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="no"
                                                                class="form-control @error('no') is-invalid @enderror"
                                                                id="no" autocomplete="off" placeholder="N°" name="no"
                                                                value="{{ old('no') }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="mb-2">
                                                            <label for="box" class="form-label">Bte:<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="box"
                                                                class="form-control @error('box') is-invalid @enderror"
                                                                id="box" autocomplete="off" placeholder="Bte" name="box"
                                                                value="{{ old('box') }}" required>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label for="town" class="form-label">Ville<span
                                                            class="text-danger">*</span></label>
                                                    <input type="town"
                                                        class="form-control @error('town') is-invalid @enderror" id="town"
                                                        autocomplete="off" placeholder="Ville" name="town"
                                                        value="{{ old('town') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label for="postal_code" class="form-label">Code postal:<span
                                                            class="text-danger">*</span></label>
                                                    <input type="postal_code"
                                                        class="form-control @error('postal_code') is-invalid @enderror"
                                                        id="postal_code" autocomplete="off" placeholder="Code postal"
                                                        name="postal_code" value="{{ old('postal_code') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- container border border-dark pt-3 x --}}

                                        <div class="col-12 border border-dark pt-3 mt-3">
                                            <div class="mb-2">
                                                <h5 class="mt-3 mb-2" style="color: orangered; text-align:center;">
                                                    Signature du client (titulaire
                                                    de la carte principale)</h5>
                                                <label for="copy" class="form-label">Fait en 3 exemplaires à:<span
                                                        class="text-danger">*</span></label>
                                                <input type="copy"
                                                    class="form-control @error('copy') is-invalid @enderror" id="copy"
                                                    autocomplete="off" placeholder="Fait en 3 exemplaires à" name="copy"
                                                    value="{{ old('copy') }}" required>
                                                <label for="date" class="mt-3 form-label">Le:<span
                                                        class="text-danger">*</span></label>
                                                <input
                                                    class="form-control @error('date') is-invalid @enderror mb-4 mb-md-0"
                                                    data-inputmask="'alias': 'datetime'"
                                                    data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date"
                                                    name="date" value="{{ old('date') }}" type="date" required>

                                                {{-- pasted the sign --}}
                                                <div class="mb-2">

                                                    <label for="date_signature_customer" class="mt-2">Signature
                                                        du
                                                        client
                                                        :</label>
                                                    <div class="form-group">
                                                        <textarea name="date_signature_customer_11" class="form-control" id="exampleFormControlTextarea3" rows="6"
                                                            required></textarea>

                                                    </div>

                                                </div>
                                                {{-- pasted the end  of sign --}}
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            {{-- signature moved up --}}
                                        </div>
                                        <div class="col-12 pt-3 border border-dark mt-3">
                                            <div class="mb-2 mt-3 mr-3">
                                                <h5 style="color: orangered; text-align:center;" class="mb-3">
                                                    Paiement par carte
                                                    de
                                                    crédit</h5>


                                                <label for="credit_card_holder" class="form-label">Titulaire de la
                                                    carte de
                                                    crédit:<span class="text-danger">*</span></label>
                                                <input type="credit_card_holder"
                                                    class="form-control @error('credit_card_holder') is-invalid @enderror"
                                                    id="credit_card_holder" autocomplete="off"
                                                    placeholder="Titulaire de la carte de crédit" name="credit_card_holder"
                                                    value="{{ old('credit_card_holder') }}" required>

                                                <label for="card_expiration_date" class="mt-3 form-label">Date
                                                    d’expiration
                                                    de
                                                    la carte de crédit :<span class="text-danger">*</span></label>
                                                <input
                                                    class="form-control @error('card_expiration_date') is-invalid @enderror mb-4 mb-md-0"
                                                    data-inputmask="'alias': 'datetime'"
                                                    data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric"
                                                    id="card_expiration_date" name="card_expiration_date"
                                                    value="{{ old('card_expiration_date') }}" type="date" required>
                                                <label for="code_generate" class="mt-3 form-label">Code / alias généré
                                                    par
                                                    Ogone
                                                    / Inginéco :<span class="text-danger">*</span></label>
                                                <input type="code_generate"
                                                    class="form-control @error('code_generate') is-invalid @enderror"
                                                    id="credit_card_holder" autocomplete="off"
                                                    placeholder="Code / alias généré par Ogone / Inginéco"
                                                    name="code_generate" value="{{ old('code_generate') }}" required>

                                            </div>
                                            <label for="date_signature_customer_2" class="mt-2">Signature du
                                                client
                                                :</label>
                                            <div class="form-group">
                                                <textarea name="date_signature_customer_00" .. class="form-control" id="exampleFormControlTextarea3" rows="6"
                                                    required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            {{-- second card ends --}}
                            {{-- third card starts --}}
                            <div class="col-12 border border-dark pt-3 mt-3">
                                <div class="mt-3 mr-3">


                                    <h4 style="color: orangered; text-align:center;" class=" mb-2">Je
                                        soussigné,
                                    </h4>
                                    {{-- container added --}}
                                    <div class="container">
                                        <div class="mb-2">
                                            <label for="account_holder_name" class="form-label">Nom du titulaire de
                                                compte<span class="text-danger">*</span></label>
                                            <input type="account_holder_name"
                                                class="form-control @error('account_holder_name') is-invalid @enderror"
                                                id="account_holder_name" autocomplete="off"
                                                placeholder="Nom du titulaire de compte" name="account_holder_name"
                                                value="{{ old('account_holder_name') }}" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="street_and_number" class="form-label">Rue et numéro<span
                                                    class="text-danger">*</span></label>
                                            <input type="street_and_number"
                                                class="form-control @error('street_and_number') is-invalid @enderror"
                                                id="street_and_number" autocomplete="off"
                                                placeholder="Nom du titulaire de compte" name="street_and_number"
                                                value="{{ old('street_and_number') }}" required>
                                        </div>
                                        <div class="row">
                                            <div class="col-10">
                                                <label for="postal_code_and_city" class="form-label">Code postal et
                                                    ville<span class="text-danger">*</span></label>
                                                <input type="postal_code_and_city"
                                                    class="form-control @error('postal_code_and_city') is-invalid @enderror"
                                                    id="postal_code_and_city" autocomplete="off"
                                                    placeholder="Nom du titulaire de compte" name="postal_code_and_city"
                                                    value="{{ old('postal_code_and_city') }}" required>
                                            </div>
                                            <div class="col-2">
                                                <label for="hold_country" class="form-label">Pays<span
                                                        class="text-danger">*</span></label>
                                                <input type="hold_country"
                                                    class="form-control @error('hold_country') is-invalid @enderror"
                                                    id="hold_country" autocomplete="off"
                                                    placeholder="Nom du titulaire de compte" name="hold_country"
                                                    value="{{ old('hold_country') }}" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9">
                                                <label for="iban_account_number" class="mt-3 form-label">N° de compte
                                                    IBAN<span class="text-danger">*</span></label>
                                                <input type="iban_account_number"
                                                    class="form-control @error('iban_account_number') is-invalid @enderror"
                                                    id="iban_account_number" autocomplete="off"
                                                    placeholder="Nom du titulaire de compte" name="iban_account_number"
                                                    value="{{ old('iban_account_number') }}" required>
                                            </div>
                                            <div class="col-3">
                                                <div class="mb-2">
                                                    <label for="bic_code" class="mt-3 form-label">Code BIC<span
                                                            class="text-danger">*</span></label>
                                                    <input type="bic_code"
                                                        class="form-control @error('bic_code') is-invalid @enderror"
                                                        id="bic_code" autocomplete="off"
                                                        placeholder="Nom du titulaire de compte" name="bic_code"
                                                        value="{{ old('bic_code') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="mb-2">
                                                    <label for="underlying_contract_number" class="form-label">N°
                                                        de
                                                        contrat
                                                        sous-jacent<span class="text-danger">*</span></label>
                                                    <input type="underlying_contract_number"
                                                        class="form-control @error('underlying_contract_number') is-invalid @enderror"
                                                        id="underlying_contract_number" autocomplete="off"
                                                        placeholder="Nom du titulaire de compte"
                                                        name="underlying_contract_number"
                                                        value="{{ old('underlying_contract_number') }}" required>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-2">
                                                            <label for="a_date" class="form-label"> Date:<span
                                                                    class="text-danger">*</span></label>
                                                            <input
                                                                class="form-control @error('a_date') is-invalid @enderror mb-4 mb-md-0"
                                                                data-inputmask="'alias': 'datetime'"
                                                                data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric"
                                                                id="a_date" name="a_date" value="{{ old('a_date') }}"
                                                                type="date" required>
                                                            <label for="location" class="mt-3 form-label">Lieu<span
                                                                    class="text-danger">*</span></label>
                                                            <input type="location"
                                                                class="form-control @error('location') is-invalid @enderror"
                                                                id="location" autocomplete="off"
                                                                placeholder="Nom du titulaire de compte" name="location"
                                                                value="{{ old('location') }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <p>Si vous êtes déjà client Orange, veuillez ajouter votre
                                                            numéro de
                                                            client. Si vous n’êtes pas encore client, notre agent
                                                            introduira
                                                            la
                                                            référence adéquate</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <label for="signature" class="form-label">Signature du titulaire de
                                                    compte<span class="text-danger">*</span></label>
                                                <textarea type="signature" class="form-control @error('signature') is-invalid @enderror" id="signature"
                                                    autocomplete="off" placeholder="Signature du titulaire de compte"
                                                    name="signature" rows="8" value="{{ old('signature') }}"
                                                    required></textarea>
                                            </div>

                                        </div>
                                    </div>



                                </div>

                            </div>
                            {{-- third card ends --}}

                        </div>
                        {{-- slot up --}}

                    </div>
                    <div class="mt-2 mb-2">
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div>
                </div>






            </form>

        </div>
    </div>
@endsection
