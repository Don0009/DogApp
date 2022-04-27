@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5>Contrat pour la livraison d'ELECTRICITE et/ou de GAZ NATUREL conclu entre le client et OCTA+
            </h5>
            <form class="forms-sample" method="POST" action="{{ route('regi_form.store') }}">
                @csrf()
                <div class="form-group">
                    <input required type="hidden" name="form_lang" value="{{ $lang }}">
                </div>
                <h5 class="mt-3">Coordonnées du client</h5>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-1">
                            <p>Client:<span class="text-danger">*</span> </p>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="client" value="0">
                            <label for="client" class="form-label">Résidentiel</label>
                            <input type="radio" name="client" value="1">
                            <label for="client" class="form-label">Professionnel</label>
                        </div>
                        <div class="col-1">
                            <p>Langue:<span class="text-danger">*</span></p>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="language" value="0">
                            <label for="language" class="form-label">Fr</label>
                            <input type="radio" name="language" value="1">
                            <label for="language" class="form-label">Nl</label>
                        </div>
                        <div class="col-1">
                            <p>Titre:<span class="text-danger">*</span></p>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="title" value="0">
                            <label for="title" class="form-label">Monsieur</label>
                            <input type="radio" name="title" value="1">
                            <label for="title" class="form-label">Madame</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="customer_number" class="form-label">N° de client<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('customer_number') is-invalid @enderror" id="customer_number" autocomplete="off" placeholder="N° de client" name="customer_number" value="{{ old('customer_number') }}" required>
                        @error('customer_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="society" class="form-label">Societe:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('society') is-invalid @enderror" id="commune" autocomplete="off" placeholder="Societe" name="society" value="{{ old('society') }}" required>
                        @error('mail')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="legal_status" class="form-label">Forme juridique:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('legal_status') is-invalid @enderror" id="legal_status" autocomplete="off" placeholder="Forme juridique" name="legal_status" value="{{ old('legal_status') }}" required>
                        @error('legal_status')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2 mt-1">
                        <p>N° d'entreprise (TVA)<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">B E 0</span>
                            <input type="text" class="form-control @error('company_number') is-invalid @enderror" id="company_number" autocomplete="off" Maximumlenght="9" placeholder="N° d'entreprise (TVA)" name="company_number" value="{{ old('company_number') }}" required>
                            @error('company_number')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6 mt-2">
                        <input type="radio" name="subject_vat" value="0">
                        <label for="subject_vat" class="form-label">Non assujetti à la TVA</label>
                        <input type="radio" name="subject_vat" value="1">
                        <label for="subject_vat" class="form-label">En attente du n° TVA</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="name" class="form-label">Nom:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Nom" name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="f_name" class="form-label">Prénom<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('f_name') is-invalid @enderror" id="f_name" autocomplete="off" placeholder="Prénom" name="f_name" value="{{ old('f_name') }}" required>
                        @error('f_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="gsm" class="form-label">GSM<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('gsm') is-invalid @enderror" id="gsm" autocomplete="off" placeholder="GSM" name="gsm" value="{{ old('gsm') }}" required>
                        @error('gsm')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="phone" class="form-label">Tél<span class="text-danger">*</span></label>
                        <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" autocomplete="off" placeholder="Téléphone" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="mail" class="form-label">E-mail<span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('mail') is-invalid @enderror" id="commune" autocomplete="off" placeholder="E-mail" name="mail" value="{{ old('mail') }}" required>
                        @error('mail')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="date_of_birth">Date de naissance<span class="text-danger">*</span></label>
                        <input class="form-control @error('date_of_birth') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date">
                    </div>
                </div>
                <h5 class="mt-3">Adresse de livraison</h5>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="dev_street" class="form-label">Rue <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('dev_street') is-invalid @enderror" id="name" autocomplete="off" placeholder="Rue" name="dev_street" value="{{ old('dev_street') }}" required>
                        @error('dev_street')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="dev_no" class="form-label">N°:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('dev_no') is-invalid @enderror" id="name" autocomplete="off" placeholder="N°" name="dev_no" value="{{ old('dev_no') }}" required>
                        @error('no')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="dev_box" class="form-label">Bte<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('dev_box') is-invalid @enderror" id="name" autocomplete="off" placeholder="Bte" name="dev_box" value="{{ old('dev_box') }}" required>
                        @error('box')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="dev_postal_code" class="form-label">Code Postale<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('dev_postal_code') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Postal Code" name="dev_postal_code" value="{{ old('dev_postal_code') }}" required>
                        @error('dev_postal_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-9">
                        <label for="dev_commune" class="form-label">Commune<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('dev_commune') is-invalid @enderror" id="commune" autocomplete="off" placeholder="commune" name="dev_commune" value="{{ old('dev_commune') }}" required>
                        @error('dev_commune')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2">
                    <label for="dev_refer_customer" class="form-label">Référence libre pour le client<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('dev_refer_customer') is-invalid @enderror" id="dev_refer_customer" autocomplete="off" placeholder="Référence libre pour le client" name="dev_refer_customer" value="{{ old('dev_refer_customer') }}" required>
                    @error('dev_refer_customer')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <h5>Adresse de facturation</h5>
                    <p class="ml-2">(si différente de l'adresse de livraison)
                    </p>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="billing_street" class="form-label">Rue <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('billing_street') is-invalid @enderror" id="name" autocomplete="off" placeholder="Rue" name="billing_street" value="{{ old('billing_street') }}" required>
                        @error('billing_street')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="billing_no" class="form-label">N°:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('billing_no') is-invalid @enderror" id="name" autocomplete="off" placeholder="N°" name="billing_no" value="{{ old('billing_no') }}" required>
                        @error('billing_no')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="billing_box" class="form-label">Bte<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('billing_box') is-invalid @enderror" id="name" autocomplete="off" placeholder="Bte" name="billing_box" value="{{ old('billing_box') }}" required>
                        @error('billing_box')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="billing_postal_code" class="form-label">Code Postale<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('billing_postal_code') is-invalid @enderror" id="billing_postal_code" autocomplete="off" placeholder="Postal Code" name="billing_postal_code" value="{{ old('billing_postal_code') }}" required>
                        @error('billing_postal_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-9">
                        <label for="billing_commune" class="form-label">Commune<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('billing_commune') is-invalid @enderror" id="commune" autocomplete="off" placeholder="commune" name="billing_commune" value="{{ old('billing_commune') }}" required>
                        @error('billing_commune')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2">
                    <label for="billing_country" class="form-label">Pays<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('billing_country') is-invalid @enderror" id="billing_country" autocomplete="off" placeholder="Référence libre pour le client" name="billing_country" value="{{ old('billing_country') }}" required>
                    @error('billing_country')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <h5 class="mt-3">ELECTRICITE</h5>
                <div class="row mt-2">
                    <div class="col-3">
                        <p>Tarif et durée du contrat:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-5">
                        <input type="radio" name="price_duration" value="0">
                        <label for="price_duration" class="form-label">Smart Fixe 1 an</label>
                        <input type="radio" name="price_duration" value="1">
                        <label for="price_duration" class="form-label">Smart Variable 1 an</label>
                        <input type="radio" name="price_duration" value="2">
                        <label for="price_duration" class="form-label">Safe Fixe 3 ans</label>
                    </div>
                </div>
                <p class="mt-2">Pour tous les clients, la durée du contrat est égale à la durée du tarif, sauf pour les clients résidentiels à Bruxelles pour lesquels la durée du contrat est de 3 ans.</p>
                <div class="row mt-2">
                    <div class="col-5">
                        <label for="belgian_electricity" class="form-label">Electricité 100% verte et belge</label>
                        <input type="checkbox" name="belgian_electricity" value="0">
                    </div>
                    <div class="col-3">
                        <p>J'ai un compteur digital<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-3">
                        <input type="radio" name="digital_meter" value="0">
                        <label for="digital_meter" class="form-label"> Oui </label>
                        <input type="radio" name="digital_meter" value="1">
                        <label for="digital_meter" class="form-label"> Non</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-1">
                        <p>Compteur:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-5">
                        <input type="radio" name="counter" value="0">
                        <label for="counter" class="form-label">Existant ouvert</label>
                        <input type="radio" name="counter" value="1">
                        <label for="counter" class="form-label">Existant fermé/scellé</label>
                        <input type="radio" name="counter" value="2">
                        <label for="counter" class="form-label">Nouveau</label>
                    </div>
                    <div class="col-2">
                        <p>Type de compteur:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="counter_type" value="0">
                        <label for="counter_type'" class="form-label">Simple</label>
                        <input type="radio" name="counter_type" value="1">
                        <label for="counter_type'" class="form-label">Bi-horaire</label>
                        <input type="radio" name="counter_type" value="2">
                        <label for="counter_type" class="form-label">Exclusif nuit</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <p>Code EAN<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"> 5 4</span>
                            <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" Maximumlenght="16" placeholder="Code EAN" name="ean_code" value="{{ old('ean_code') }}" required>
                            @error('ean_code')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-2 ">
                        <p>Code EAN (excl.nuit)<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"> 5 4 </span>
                            <input type="text" class="form-control @error('ean_code_night') is-invalid @enderror" id="ean_code_night" autocomplete="off" Maximumlenght="16" placeholder="Code EAN (excl.nuit)" name="ean_code_night" value="{{ old('ean_code_night') }}" required>
                            @error('ean_code_night')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="meter_number" class="form-label">N° de compteur<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('meter_number') is-invalid @enderror" id="meter_number" autocomplete="off" placeholder="N° de compteur" name="meter_number" value="{{ old('meter_number') }}" required>
                        @error('meter_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="meter_number_night" class="form-label">N° de compteur (excl.nuit)<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('meter_number_night') is-invalid @enderror" id="meter_number_night" autocomplete="off" placeholder="N° de compteur (excl.nuit)" name="meter_number_night" value="{{ old('meter_number_night') }}" required>
                        @error('meter_number_night')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p>Panneaux solaires ou autre installation de production<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-2">
                        <input type="radio" name="solar_other_facility" value="0">
                        <label for="solar_other_facility" class="form-label"> Oui </label>
                        <input type="radio" name="solar_other_facility" value="1">
                        <label for="solar_other_facility" class="form-label"> Non</label>
                    </div>
                    <div class="col-3">
                        <p>Puissance de l’installation de production<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-2">
                        <input type="text" name="power_production_plant" placeholder="kVA">
                    </div>
                    <div class="col-1">
                        <p>kVA</p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <input type="radio" name="house_move" value="0">
                        <label for="house_move" class="form-label">Maison vide</label>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="house_move" value="0">
                        <label for="house_move" class="form-label">Je déménage/j'ai déménagé vers cette adresse</label>
                    </div>
                    <div class="col-6">
                        <label for="delivery_start_date">Date souhaitée de début de livraison<span class="text-danger">*</span></label>
                        <input class="form-control @error('delivery_start_date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="delivery_start_date" name="delivery_start_date" value="{{ old('delivery_start_date') }}" type="date">
                    </div>
                </div>
                <h5 class="mt-3">GAZ NATUREL</h5>
                <div class="row mt-2">
                    <div class="col-3">
                        <p>Tarif et durée du contrat<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="price_duration_contract" value="0">
                        <label for="price_duration_contract" class="form-label">Smart Fixe 1 an</label>
                        <input type="radio" name="price_duration_contract" value="1">
                        <label for="price_duration_contract" class="form-label">Smart Variable 1 an</label>
                    </div>
                </div>
                <p class="mt-2">
                    Pour tous les clients, la durée du contrat est égale à la durée du tarif, sauf pour les clients résidentiels à Bruxelles pour lesquels la durée du contrat est de 3 ans.
                </p>
                <div class="row mt-2">
                    <div class="col-2">
                        <p>Compteur:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-5">
                        <input type="radio" name="counter1" value="0">
                        <label for="counter1" class="form-label">Existant ouvert</label>
                        <input type="radio" name="counter1" value="1">
                        <label for="counter1" class="form-label">Existant fermé/scellé</label>
                        <input type="radio" name="counter1" value="2">
                        <label for="counter1" class="form-label">Nouveau</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 mt-4">
                        <p>Code EAN<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4 mt-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"> 5 4</span>
                            <input type="text" class="form-control @error('ean_code1') is-invalid @enderror" id="ean_code1" autocomplete="off" Maximumlenght="16" placeholder="Code EAN" name="ean_code1" value="{{ old('ean_code1') }}" required>
                            @error('ean_code1')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6 mt-2">
                        <label for="meter_number1" class="form-label">N° de compteur<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('meter_number1') is-invalid @enderror" id="meter_number1" autocomplete="off" placeholder="N° de compteur" name="meter_number1" value="{{ old('meter_number1') }}" required>
                        @error('meter_number1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <input type="radio" name="house_move1" value="0">
                        <label for="house_move1" class="form-label">Maison vide</label>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="house_move1" value="0">
                        <label for="house_move1" class="form-label">Je déménage/j'ai déménagé vers cette adresse</label>
                    </div>
                    <div class="col-6">
                        <label for="delivery_start_date1">Date souhaitée de début de livraison<span class="text-danger">*</span></label>
                        <input class="form-control @error('delivery_start_date1') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="delivery_start_date1" name="delivery_start_date1" value="{{ old('delivery_start_date1') }}" type="date">
                    </div>
                </div>
                <h5 class="mt-3">Mode de paiement</h5>
                <p class="mt-2">Pour préserver l'environnement, préférez l'envoi de factures électroniques ou optez pour la domiciliation sans envoi des factures
                    d'acompte (identiques tous les mois). Vous recevrez néanmoins les factures de régularisation.
                </p>
                <div class="row mt-2">
                    <div class="col-3">
                        <p>Fréquence des acomptes:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-5">
                        <input type="radio" name="installment_frequency" value="0">
                        <label for="installment_frequency" class="form-label">mensuellement</label>
                        <input type="radio" name="installment_frequency" value="1">
                        <label for="installment_frequency" class="form-label">bimestriellement</label>
                        <input type="radio" name="installment_frequency" value="2">
                        <label for="installment_frequency" class="form-label">trimestriellement</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <p>Mode de paiement:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="payment_method" value="0">
                        <label for="payment_method" class="form-label">domiciliation</label>
                        <input type="radio" name="payment_method" value="1">
                        <label for="payment_method" class="form-label">virement</label>
                    </div>
                    <div class="col-6">
                        <input type="checkbox" name="invoices" value="0">
                        <label for="payment_method" class="form-label">Je désire quand même recevoir toutes mes factures d'acompte</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <p>Envoi des factures:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="send_invoices" value="0">
                        <label for="send_invoices" class="form-label">par e-mail</label>
                        <input type="radio" name="send_invoices" value="1">
                        <label for="send_invoices" class="form-label">par la poste</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="account_number" class="form-label">N° de compte<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('account_number') is-invalid @enderror" id="account_number" autocomplete="off" placeholder="N° de compte" name="account_number" value="{{ old('account_number') }}" required>
                        @error('account_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="bic_code" class="form-label">Code BIC<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('bic_code') is-invalid @enderror" id="bic_code" autocomplete="off" placeholder="Code BIC" name="bic_code" value="{{ old('bic_code') }}" required>
                        @error('bic_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <h5 class="mt-3">Accord</h5>
                <p class="mt-2">
                    J'ai accepté les conditions générales de vente et les conditions tarifaires.
                </p>
                <p class="mt-2">
                    J’accepte la politique générale relative aux données personnelles d’OCTA+ (se trouvant sur https://www.yourprivacy.be/fr/octaplus).
                </p>
                <div class="mt-2">
                    <input type="checkbox" name="information" value="0">
                    <label for="information" class="form-label">Je souhaite recevoir d’informations concernant des produits ou services recommandés par OCTA+</label>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="signature" class="form-label">Signature du client:<span class="text-danger">*</span></label>
                        <textarea type="text" rows="5" class="form-control @error('signature') is-invalid @enderror" id="the" autocomplete="off" placeholder="Signature" name="signature" value="{{ old('signature') }}" required></textarea>
                        @error('signature')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4 mt-4">
                        <textarea type="text" rows="5" class="form-control @error('octa') is-invalid @enderror" id="the" autocomplete="off" placeholder="Pour OCTA+ Energie s.a" name="octa" value="{{ old('octa') }}" required></textarea>
                        @error('signature')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="date">Date<span class="text-danger">*</span></label>
                        <input class="form-control @error('date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date" name="date" value="{{ old('date') }}" type="date">
                    </div>
                </div>
                <p class="text-justify mt-2">Le consommateur a le droit de renoncer au présent contrat de fourniture, sans paiement d’amende et sans motif en envoyant une lettre recommandée à OCTA+ Energie endéans les 14 jours calendrier à
                    partir de la réception de la confirmation du contrat par le client ou en renvoyant le formulaire de rétractation qui se trouve à l’adresse https://www.octaplus.be/fr/electricite-gaz-naturel/tarifs/.</p>

                <p class="mt-3">Le contrat est automatiquement renouvelé au terme de la durée initiale, sauf en cas d’un autre accord :</p>
                <p class="mt-1">. Pour le consommateur, pour une durée d’un an au tarif équivalant le moins cher (contrat exclusivement online ou non, énergie verte ou grise, prix fixe ou variable et services qui en découlent).</p>
                <p class="mt-1">. Pour le non-consommateur, pour une durée égale à la durée initiale et avec un tarif aux caractéristiques identiques. Les tarifs de reconduction sont consultables sur notre site www.octaplus.be, deux mois
                    avant la date de renouvellement.</p>

                <p class="text-justify mt-3">
                    En cas de retard de paiement, comme il est mentionné dans nos conditions générales, des frais supplémentaires peuvent être imputés au client. Pour un rappel de paiement, € 7,50 seront additionnés à
                    la prochaine facture. Pour une mise en demeure, € 15,00 seront additionnés à la prochaine facture. En cas de procédure de recouvrement, s’additionneront aux frais susmentionnés des frais
                    supplémentaires variables en fonction du montant dû. D’une part, un dédommagement de 10% de chaque montant dû sera demandé et d’autre part s’additionneront à cela des frais d'huissier et d’avocat
                    qui varient selon les cas.
                </p>
                <h5 class="mt-2">MANDAT DE DOMICILIATION EUROPEENNE SEPA - CORE</h5>
                <p class="text-center mt-2">OCTA+ Energie s.a. - BE91ZZZ0401934742</p>
                <p class="text-center mt-2">Schaarbeeklei, 600 - B-1800 Vilvoorde</p>
                <p class="text-center mt-2">REFERENCE DU MANDAT : <b>BECI900002E20220218</b> - POUR UN PRELEVEMENT RECURRENT</p>
                <p class="text-justify mt-2">En signant ce mandat, vous autorisez OCTA+ Energie à envoyer des instructions à votre banque pour débiter votre compte, et votre banque à débiter votre compte
                    conformément aux instructions de OCTA+ Energie. Vous bénéficiez d'un droit de remboursement par votre banque selon les conditions décrites dans la convention
                    que vous avez passée avec elle. Toute demande de remboursement doit être présentée dans les 8 semaines suivant la date de débit de votre compte.</p>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="company_name" class="form-label">Nom du débiteur<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" autocomplete="off" placeholder="Nom du débiteur" name="company_name" value="{{ old('company_name') }}" required>
                        @error('company_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="street_number" class="form-label">Rue et numéro<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('street_number') is-invalid @enderror" id="bic_code" autocomplete="off" placeholder="Rue et numéro" name="street_number" value="{{ old('street_number') }}" required>
                        @error('street_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="zip_code" class="form-label">Code postal et localité<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('zip_code') is-invalid @enderror" id="zip_code" autocomplete="off" placeholder="Code postal et localité" name="zip_code" value="{{ old('zip_code') }}" required>
                        @error('zip_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="iban_account" class="form-label">No compte IBAN<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('iban_account') is-invalid @enderror" id="iban_account" autocomplete="off" placeholder="No compte IBAN" name="iban_account" value="{{ old('iban_account') }}" required>
                        @error('iban_account')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="bic_code1" class="form-label">Code BIC<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('bic_code1') is-invalid @enderror" id="bic_code1" autocomplete="off" placeholder="Code BIC" name="bic_code1" value="{{ old('bic_code1') }}" required>
                        @error('bic_code1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <p class="mt-2">No contrat sous-jacent : votre n° de client (communiqué ultérieurement)</p>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="signature1" class="form-label">Signature (du débiteur):<span class="text-danger">*</span></label>
                        <textarea type="text" rows="5" class="form-control @error('signature1') is-invalid @enderror" id="the" autocomplete="off" placeholder="Signature" name="signature1" value="{{ old('signature1') }}" required></textarea>
                        @error('signature1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="place" class="form-label">Lieu:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('place') is-invalid @enderror" id="bic_code" autocomplete="off" placeholder="Lieu" name="place" value="{{ old('place') }}" required>
                        @error('place')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="date1">Date:<span class="text-danger">*</span></label>
                        <input class="form-control @error('date1') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date1" name="date1" value="{{ old('date1') }}" type="date">
                    </div>
                </div>
                <h5 class="mt-2"><b>OCTA+ Energie s.a.</b></h5>
                <p class="mt-2">Schaarbeeklei 600 1800 Vilvoorde BE0401.934.742 T. 02/851 02 52 energie@octaplus.be www.octaplus.be</p>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection