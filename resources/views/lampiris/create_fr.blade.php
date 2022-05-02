@extends('layouts.backend')

@section('content')
<div class="container">
    <form class="forms-sample" method="POST" action="{{ route('regi_form.store') }}">
        @csrf()
        <div class="card">
            <div class="card-body">
                <div class="col-7 card_header">
                    Contrat pour la fourniture d’électricité verte et/ou de gaz naturel
                    et/ou tout contrat de rétrocession d’électricité pour les clients résidentiels
                </div>
                <div class="row mt-3">
                    <h5>Vos coordonnées</h5>
                    <p> (les champs marqués de (*) sont obligatoires)</p>
                </div>
                <div class="row mt-2">
                    <div class="col-1">
                        <p>Title:<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-3">
                        <input type="radio" name="title" value="Mme">
                        <label for="title" class="form-label">Mme</label>
                        <input type="radio" name="title" value="M">
                        <label for="title" class="form-label">M</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="name" class="form-label">Nom<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Nom" name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="f_name" class="form-label">Prénom<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('f_name') is-invalid @enderror" id="f_name" autocomplete="off" placeholder="prénom" name="f_name" value="{{ old('f_name') }}" required>
                        @error('f_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="date_of_birth" class="form-label">Date de naissance<span class="text-danger">*</span></label>
                        <input class="form-control @error('date_of_birth') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date">
                        @error('date_of_birth')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="phone" class="form-label">Tél<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" autocomplete="off" placeholder="Tél" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="gsm" class="form-label">GSM<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('gsm') is-invalid @enderror" id="locality" autocomplete="off" placeholder="GSM" name="gsm" value="{{ old('gsm') }}" required>
                        @error('gsm')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="mail" class="form-label">e-mail<span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('mail') is-invalid @enderror" id="locality" autocomplete="off" placeholder="e-mail" name="mail" value="{{ old('mail') }}" required>
                        @error('mail')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="bank_account" class="form-label">N° compte bancaire<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('bank_account') is-invalid @enderror" id="locality" autocomplete="off" placeholder="N° compte bancaire" name="bank_account" value="{{ old('bank_account') }}" required>
                        @error('bank_account')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-2">
                        <label for="people" class="form-label">Nbre de personnes<span class="text-danger">*</span></label>
                        <input type="number" class="form-control @error('people') is-invalid @enderror" id="locality" autocomplete="off" placeholder="N° compte bancaire" name="people" value="{{ old('people') }}" required>
                    </div>
                </div>
                <h5 class="mt-3">ADRESSE DE FOURNITURE</h5>
                <div class="row mt-2">
                    <div class="col-8">
                        <label for="adress" class="form-label">Adresse <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('adress') is-invalid @enderror" id="box" autocomplete="off" placeholder="Adresse" name="adress" value="{{ old('adress') }}" required>
                        @error('adress')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="box" class="form-label">Boîte<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('box') is-invalid @enderror" id="box" autocomplete="off" placeholder="Bte" name="box" value="{{ old('box') }}" required>
                        @error('box')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="no" class="form-label">N°<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('no') is-invalid @enderror" id="no" autocomplete="off" placeholder="N°" name="no" value="{{ old('no') }}" required>
                        @error('no')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="postal_code" class="form-label">Code postal<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Code postal" name="postal_code" value="{{ old('postal_code') }}" required>
                        @error('postal_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="locality" class="form-label">Localité<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('locality') is-invalid @enderror" id="locality" autocomplete="off" placeholder="Localité" name="locality" value="{{ old('locality') }}" required>
                        @error('locality')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <h5 class="mt-3">ADRESSE DE FACTURATION</h5>
                <div class="row mt-2">
                    <div class="col-8">
                        <label for="adress1" class="form-label">Adresse <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('adress1') is-invalid @enderror" id="adress1" autocomplete="off" placeholder="Adresse" name="adress1" value="{{ old('adress1') }}" required>
                        @error('adress1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="box1" class="form-label">Boîte<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('box1') is-invalid @enderror" id="box1" autocomplete="off" placeholder="Bte" name="box1" value="{{ old('box1') }}" required>
                        @error('box1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="no1" class="form-label">N°<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('no1') is-invalid @enderror" id="no" autocomplete="off" placeholder="N°" name="no1" value="{{ old('no1') }}" required>
                        @error('no1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="postal_code1" class="form-label">Code postal<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('postal_code1') is-invalid @enderror" id="postal_code1" autocomplete="off" placeholder="Code postal" name="postal_code1" value="{{ old('postal_code1') }}" required>
                        @error('postal_code1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="locality1" class="form-label">Localité<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('locality1') is-invalid @enderror" id="locality1" autocomplete="off" placeholder="Localité" name="locality1" value="{{ old('locality1') }}" required>
                        @error('locality1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>



                <h5>Ma fourniture d’électricité verte par Lampiris</h5>
                <div class="mt-2">
                    <input type="radio" name="tip" class="ml-4" value="tip">
                    <label for="tip" class="form-label">tip</label>
                    <input type="radio" name="tip" class="ml-4" value="TOP">
                    <label for="tip" class="form-label">TOP</label>
                    <input type="radio" name="tip" class="ml-4" value="Solar">
                    <label for="tip" class="form-label">Solar</label>
                </div>
                <div class="mt-1">
                    <input type="radio" name="year" class="ml-4" value="1 an">
                    <label for="year" class="form-label">1 an</label>
                    <input type="radio" name="year" class="ml-4" value="2 ans">
                    <label for="year" class="form-label">2 ans</label>
                    <input type="radio" name="year" class="ml-4" value="3 ans">
                    <label for="year" class="form-label">3 ans</label>
                </div>
                <div class="row mt-2">
                    <p>Type de compteur:</p>
                    <input type="radio" name="counter_type" class="ml-4" value="jour">
                    <label for="counter_type" class="form-label ml-2">jour</label>
                    <input type="radio" name="counter_type" class="ml-4" value="jour/nuit">
                    <label for="counter_type" class="form-label ml-2">jour/nuit</label>
                    <input type="radio" name="counter_type" class="ml-4" value="exclusif nuit">
                    <label for="counter_type" class="form-label ml-2">exclusif nuit</label>
                </div>
                <div class="row mt-2">
                    <div class="col-3 mt-2">
                        <p>Code EAN<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-9 mt-2">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">5 4</span>
                            <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                            @error('ean_code')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p>Numéro du compteur</p>
                    </div>
                    <div class="col-4"></div>
                    <div class="col-4">Index compteur</div>
                </div>

                <div class="row mt-2">
                    <div class="input-group">
                        <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                        <span class="input-group-text" id="basic-addon1">Mono-horaire</span>
                        <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                        @error('ean_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="input-group">
                        <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                        <span class="input-group-text" id="basic-addon1">Bi-horaire Jour</span>
                        <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                        @error('ean_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="input-group">
                        <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                        <span class="input-group-text" id="basic-addon1">Bi-horaire Nuit</span>
                        <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                        @error('ean_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="input-group">
                        <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                        <span class="input-group-text" id="basic-addon1">Injection Jour</span>
                        <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                        @error('ean_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="input-group">
                        <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                        <span class="input-group-text" id="basic-addon1">Injection Nuit</span>
                        <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                        @error('ean_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="input-group">
                        <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                        <span class="input-group-text" id="basic-addon1">Excl. nuit</span>
                        <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="Numéro de TVA/RPM" name="ean_code" value="{{ old('ean_code') }}" required>
                        @error('ean_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="annual_consu" class="form-label">Quelle est votre consommation annuelle1?<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('annual_consu') is-invalid @enderror" id="annual_consu" autocomplete="off" placeholder="kWh" name="annual_consu" value="{{ old('annual_consu') }}" required>
                        @error('annual_consu')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="annual_injection" class="form-label">Quelle est votre injection annuelle?<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('annual_injection') is-invalid @enderror" id="annual_injection" autocomplete="off" placeholder="kWh" name="annual_injection" value="{{ old('annual_injection') }}" required>
                        @error('annual_injection')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="row col-6">
                        <p class="mr-5">Déménagez-vous ?</p>
                        <input type="radio" name="moving" class="ml-2" value="Oui">
                        <label for="moving" class="form-label ml-2">Oui</label>
                        <input type="radio" name="moving" class="ml-2" value="Non">
                        <label for="moving" class="form-label ml-2">Non</label>
                    </div>
                    <div class="row col-6">
                        <p class="mr-5">Le compteur est-il ouvert ?</p>
                        <input type="radio" name="meter_open" class="ml-2" value="Oui">
                        <label for="meter_open" class="form-label ml-2">Oui</label>
                        <input type="radio" name="meter_open" class="ml-2" value="Non">
                        <label for="meter_open" class="form-label ml-2">Non</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="current_provid" class="form-label">Fournisseur actuel<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('current_provid') is-invalid @enderror" id="current_provid" autocomplete="off" placeholder="Fournisseur actuel" name="current_provid" value="{{ old('current_provid') }}" required>
                        @error('current_provid')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="start_date" class="form-label">Date de début de fourniture souhaitée<span class="text-danger">*</span></label>
                        <input class="form-control @error('start_date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_of_birth" name="start_date" value="{{ old('start_date') }}" type="date">
                        @error('start_date')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <h5 class="mt-2">Ma fourniture de gaz naturel par Lampiris</h5>
                <div class="mt-2">
                    <input type="radio" name="tip1" class="ml-4" value="tip">
                    <label for="tip1" class="form-label">tip</label>
                    <input type="radio" name="tip1" class="ml-4" value="TOP">
                    <label for="tip1" class="form-label">TOP</label>
                </div>
                <div class="mt-1">
                    <input type="radio" name="year1" class="ml-4" value="1 an">
                    <label for="year1" class="form-label">1 an</label>
                    <input type="radio" name="year1" class="ml-4" value="2 ans">
                    <label for="year1" class="form-label">2 ans</label>
                    <input type="radio" name="year1" class="ml-4" value="3 ans">
                    <label for="year1" class="form-label">3 ans</label>
                </div>
                <div class="row mt-2">
                    <div class="col-3 mt-2">
                        <p>Code EAN<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-9 mt-2">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">5 4</span>
                            <input type="text" class="form-control @error('ean_code1') is-invalid @enderror" id="ean_code1" autocomplete="off" placeholder="Code EAN" name="ean_code1" value="{{ old('ean_code1') }}" required>
                            @error('ean_code1')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="meter_number" class="form-label">Numéro du compteur<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('meter_number') is-invalid @enderror" id="meter_number" autocomplete="off" placeholder="Numéro du compteur" name="meter_number" value="{{ old('meter_number') }}" required>
                        @error('meter_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="counter" class="form-label">Index compteur<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('counter') is-invalid @enderror" id="counter" autocomplete="off" placeholder="Index compteur" name="meter_number" value="{{ old('counter') }}" required>
                        @error('counter')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        class="col-6">
                        <label for="annual_consu1" class="form-label">Quelle est votre consommation annuelle1?<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('annual_consu1') is-invalid @enderror" id="annual_consu1" autocomplete="off" placeholder="kWh" name="annual_consu1" value="{{ old('annual_consu1') }}" required>
                        @error('annual_consu1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="row col-6">
                        <p class="mr-5">Déménagez-vous ?</p>
                        <input type="radio" name="moving1" class="ml-2" value="Oui">
                        <label for="moving1" class="form-label ml-2">Oui</label>
                        <input type="radio" name="moving1" class="ml-2" value="Non">
                        <label for="moving1" class="form-label ml-2">Non</label>
                    </div>
                    <div class="row col-6">
                        <p class="mr-5">Le compteur est-il ouvert ?</p>
                        <input type="radio" name="meter_open1" class="ml-2" value="Oui">
                        <label for="meter_open1" class="form-label ml-2">Oui</label>
                        <input type="radio" name="meter_open1" class="ml-2" value="Non">
                        <label for="meter_open1" class="form-label ml-2">Non</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="current_provid1" class="form-label">Fournisseur actuel<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('current_provid1') is-invalid @enderror" id="current_provid1" autocomplete="off" placeholder="Fournisseur actuel" name="current_provid1" value="{{ old('current_provid1') }}" required>
                        @error('current_provid1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="start_date1" class="form-label">Date de début de fourniture souhaitée<span class="text-danger">*</span></label>
                        <input class="form-control @error('start_date1') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="start_date1" name="start_date1" value="{{ old('start_date1') }}" type="date">
                        @error('start_date1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <p>Je souhaite recevoir des offres promotionnelles de la part du Groupe Lampiris :</p>
                    <input type="radio" name="promotional" class="ml-2" value="Oui">
                    <label for="promotional" class="form-label ml-2">Oui</label>
                    <input type="radio" name="promotional" class="ml-2" value="Non">
                    <label for="promotional" class="form-label ml-2">Non</label>
                </div>
                <div class="row mt-2">
                    <div class="row col-6">
                        <p>Electricité verte et gaz nature:</p>
                        <input type="radio" name="electricity_gas" class="ml-2" value="Oui">
                        <label for="electricity_gas" class="form-label ml-2">Oui</label>
                        <input type="radio" name="electricity_gas" class="ml-2" value="Non">
                        <label for="electricity_gas" class="form-label ml-2">Non</label>
                    </div>
                    <div class=" row col-6">
                        <p>Isolation:</p>
                        <input type="radio" name="insulation" class="ml-2" value="Oui">
                        <label for="insulation" class="form-label ml-2">Oui</label>
                        <input type="radio" name="insulation" class="ml-2" value="Non">
                        <label for="insulation" class="form-label ml-2">Non</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="row col-6">
                        <p>Installation de chaudières:</p>
                        <input type="radio" name="boilers" class="ml-2" value="Oui">
                        <label for="boilers" class="form-label ml-2">Oui</label>
                        <input type="radio" name="boilers" class="ml-2" value="Non">
                        <label for="boilers" class="form-label ml-2">Non</label>
                    </div>
                    <div class="row col-6">
                        <p>Solutions de recharge pour véhicules électriques:</p>
                        <input type="radio" name="charging_vehicles" class="ml-2" value="Oui">
                        <label for="charging_vehicles" class="form-label ml-2">Oui</label>
                        <input type="radio" name="charging_vehicles" class="ml-2" value="Non">
                        <label for="charging_vehicles" class="form-label ml-2">Non</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="row col-6">
                        <p>Panneaux photovoltaïques:</p>
                        <input type="radio" name="panels" class="ml-2" value="Oui">
                        <label for="panels" class="form-label ml-2">Oui</label>
                        <input type="radio" name="panels" class="ml-2" value="Non">
                        <label for="panels" class="form-label ml-2">Non</label>
                    </div>
                    <div class="row col-6">
                        <p>Assistance & assurance électricité et gaz:</p>
                        <input type="radio" name="insurance" class="ml-2" value="Oui">
                        <label for="insurance" class="form-label ml-2">Oui</label>
                        <input type="radio" name="insurance" class="ml-2" value="Non">
                        <label for="insurance" class="form-label ml-2">Non</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="row col-6">
                        <p>Réductions chez nos partenaires:</p>
                        <input type="radio" name="partners" class="ml-2" value="Oui">
                        <label for="partners" class="form-label ml-2">Oui</label>
                        <input type="radio" name="partners" class="ml-2" value="Non">
                        <label for="partners" class="form-label ml-2">Non</label>
                    </div>
                    <div class="row col-6">
                        <p>J’autorise Lampiris à créer mon espace client:</p>
                        <input type="radio" name="authorize" class="ml-2" value="Oui">
                        <label for="authorize" class="form-label ml-2">Oui</label>
                        <input type="radio" name="authorize" class="ml-2" value="Non">
                        <label for="authorize" class="form-label ml-2">Non</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="row">
                        <p>Je m’abonne à la Newsletter du Groupe Lampiris qui pourra contenir, entre autres, des informations sur le Groupe Lampiris, sur le marché de l’énergie, des bons plans et des concours:</p>
                        <input type="radio" name="authorize" class="ml-2" value="Oui">
                        <label for="authorize" class="form-label ml-2">Oui</label>
                        <input type="radio" name="authorize" class="ml-2" value="Non">
                        <label for="authorize" class="form-label ml-2">Non</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="row">
                        <input type="checkbox" name="activated" class="ml-2" value="1">
                        <p>Je ne souhaite pas que le contrat d’injection soit automatiquement activé
                            et je souhaite injecter mon électricité auprès d’un tiers</p>
                    </div>
                </div>
                <h5 class="mt-2">Facturation, périodicité, paiement</h5>
                <div class="row mt-2">
                    <div class="row">
                        <p>Je souhaite recevoir mes factures</p>
                        <input type="radio" name="invoices" class="ml-2" value="par courrier">
                        <label for="invoices" class="form-label ml-2">par courrier</label>
                        <input type="radio" name="invoices" class="ml-2" value="par e-mail">
                        <label for="invoices" class="form-label ml-2"> par e-mail</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="row">
                        <p>Je souhaite recevoir mes factures:</p>
                        <input type="radio" name="invoices1" class="ml-2" value="tous les mois">
                        <label for="invoices1" class="form-label ml-2">tous les mois</label>
                        <input type="radio" name="invoices1" class="ml-2" value="tous les 2 mois">
                        <label for="invoices1" class="form-label ml-2">tous les 2 mois</label>
                        <input type="radio" name="invoices1" class="ml-2" value="tous les 3 mois">
                        <label for="invoices1" class="form-label ml-2">tous les 3 mois</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="row">
                        <p>Je souhaite payer mes factures par:</p>
                        <input type="radio" name="bills" class="ml-2" value="virement bancaire">
                        <label for="bills" class="form-label ml-2">virement bancaire</label>
                        <input type="radio" name="bills" class="ml-2" value="domiciliation">
                        <label for="bills" class="form-label ml-2">domiciliation</label>
                        <input type="radio" name="bills" class="ml-2" value="domiciliation">
                        <label for="bills" class="form-label ml-2">domiciliation</label>
                    </div>
                </div>
                <h5>Avis de domiciliation</h5>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="undersigned" class="form-label">Je soussigné(e)<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('undersigned') is-invalid @enderror" id="undersigned" autocomplete="off" placeholder="Je soussigné(e)" name="undersigned" value="{{ old('undersigned') }}" required>
                        @error('undersigned')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="iban" class="form-label">IBAN<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('iban') is-invalid @enderror" id="iban" autocomplete="off" placeholder="IBAN" name="iban" value="{{ old('iban') }}" required>
                        @error('iban')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="bic" class="form-label">BIC<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('bic') is-invalid @enderror" id="iban" autocomplete="off" placeholder="IBAN" name="bic" value="{{ old('bic') }}" required>
                        @error('bic')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="date" class="form-label">Date<span class="text-danger">*</span></label>
                        <input class="form-control @error('date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date" name="date" value="{{ old('date_of_birth') }}" type="date">
                        @error('date')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="the" class="form-label">Lieu<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('the') is-invalid @enderror" id="the" autocomplete="off" placeholder="IBAN" name="the" value="{{ old('the') }}" required>
                        @error('the')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <h5 class="mt-2">Signature du client</h5>
            </div>
        </div>
    </form>
</div>
@endsection