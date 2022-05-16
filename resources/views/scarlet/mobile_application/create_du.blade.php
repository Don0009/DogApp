@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <img style="text-align:left;" class="img-responsive rounded mx-auto d-block m3-5" src="{{ asset('images/brands/scarlet.PNG') }}" alt="">
            <h3 style="color: blacked; text-align:center"> Scarlet Mobile</h3>
            <h3 style="color: blacked; text-align:center">
                Bestelformulier</h3>
            <p style="text-align:left"><b>A. Klantgegevens </b>(gelieve dit formulier in drukletters in te vullen aub)</p>
            <form class="forms-sample" method="POST" action="{{ route('mobile_application_form.store') }}">
                @csrf()
                <div class="mt-2">
                    <label for="user_id" class="form-label">User ID<span class="text-danger">*</span></label>
                    <input type="number" class="form-control @error('user_id') is-invalid @enderror" id="f_name" autocomplete="off" placeholder="User ID" name="user_id" value="{{ old('user_id') }}" required>
                    @error('user_id')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input required type="hidden" name="form_lang" value="{{ $lang }}">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mt-2">
                            <label for="f_name" class="form-label">Voornaam<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('f_name') is-invalid @enderror" id="f_name" autocomplete="off" placeholder="Voornaam" name="f_name" value="{{ old('f_name') }}" required>
                            @error('f_name')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mt-2">
                            <label for="name" class="form-label">Familienaam :<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Familienaam" name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="id_card_number" class="form-label">Identiteitskaart nr:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('id_card_number') is-invalid @enderror" id="name" autocomplete="off" placeholder="Identiteitskaart nr" name="id_card_number" value="{{ old('id_card_number') }}" required>
                    @error('id_card_number')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <label for="adress" class="form-label">Adres<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('adress') is-invalid @enderror" id="name" autocomplete="off" placeholder="Adres" name="adress" value="{{ old('adress') }}" required>
                            @error('adress')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="no" class="form-label">Nr:<span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('no') is-invalid @enderror" id="name" autocomplete="off" placeholder="Nr" name="no" value="{{ old('no') }}" required>
                            @error('no')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="box" class="form-label">Bus:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('box') is-invalid @enderror" id="name" autocomplete="off" placeholder="Bus" name="box" value="{{ old('box') }}" required>
                            @error('box')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <label for="postal_code" class="form-label">Postcode<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Postcode" name="postal_code" value="{{ old('postal_code') }}" required>
                            @error('postal_code')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="city" class="form-label">Gemeente<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" autocomplete="off" placeholder="Gemeente" name="city" value="{{ old('city') }}" required>
                            @error('city')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-4">
                            <label for="phone" class="form-label">Telefoon<span class="text-danger">*</span></label>
                            <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" autocomplete="off" placeholder="Telefoon" name="phone" value="{{ old('phone') }}" required>
                            @error('phone')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="gsm" class="form-label">GSM<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('gsm') is-invalid @enderror" id="gsm" autocomplete="off" placeholder="GSM" name="gsm" value="{{ old('gsm') }}" required>
                            @error('gsm')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="mail" class="form-label">E-mail<span class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('mail') is-invalid @enderror" id="commune" autocomplete="off" placeholder="E-mail" name="mail" value="{{ old('mail') }}" required>
                            @error('mail')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-4">
                            <label for="date_of_birth">Geboortedatum<span class="text-danger">*</span></label>
                            <input class="form-control @error('date_of_birth') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date">
                        </div>
                        <div class="col-1 mt-4">
                            <p>Geslacht</p>
                        </div>
                        <div class="col-2 mt-4">
                            <input type="radio" name="gender" value="1">
                            <label for="gender" class="form-label">M</label>
                            <input type="radio" name="gender" value="2">
                            <label for="gender" class="form-label">V</label>
                        </div>
                        <div class="col-1 mt-4">
                            <p>Taal:</p>
                        </div>
                        <div class="col-3 mt-4">
                            <input type="radio" name="language" value="1">
                            <label for="language" class="form-label">NL</label>
                            <input type="radio" name="language" value="2">
                            <label for="language" class="form-label">FR</label>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nieuw SIM-kaartnummer</span>
                                <input type="text" class="form-control @error('new_sim_number') is-invalid @enderror" id="new_sim_number" autocomplete="off" placeholder="Nieuw SIM-kaartnummer" name="new_sim_number" value="{{ old('new_sim_number') }}" required>
                                @error('new_sim_number')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <h4 style="text-align:center"><b>B. Abonnementskeuze </b></h4>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-5">
                            <p class="text-justify "><input type="checkbox" name="mobile_subscription" class="mr-2" value="1"> Ja, ik neem een <b>Scarlet Mobile</b>abonnement:</p>
                        </div>
                        <div class="col-2">
                            <p><b>Aantal </b></p>
                        </div>
                        <div class="col-2">
                            <p><b>Nieuw nummer</b></p>
                        </div>
                        <div class="col-3">
                            <p><b>Nummerbehoud</b></p>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-5">
                            <p class="text-justify "><input type="checkbox" name="subscription1" class="mr-2" value="1">€ 8 RED (300 min 24/7* + onbeperkt sms’sen*, 500MB data) </p>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control @error('sub_name1') is-invalid @enderror" id="sub_name1" autocomplete="off" placeholder="Nombre" name="sub_name1" value="{{ old('sub_name1') }}" required>
                        </div>
                        <div class="col-2 mt-1">
                            <input type="checkbox" name="new_num1" value="1">
                        </div>
                        <div class="col-3 mt-1">
                            <input type="checkbox" name="num_transfer1" value="1">
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-5">
                            <p class="text-justify "><input type="checkbox" name="subscription2" class="mr-2" value="1">€ 18 HOT (min 24/7* + onbeperkt sms’en*, 6GB data)</p>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control @error('sub_name2') is-invalid @enderror" id="sub_name2" autocomplete="off" placeholder="Nombre" name="sub_name2" value="{{ old('sub_name2') }}" required>
                        </div>
                        <div class="col-2 mt-1">
                            <input type="checkbox" name="new_num2" value="1">
                        </div>
                        <div class="col-3 mt-1">
                            <input type="checkbox" name="num_transfer2" value="1">
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-5">
                            <p class="text-justify "><input type="checkbox" name="subscription3" class="mr-2" value="1"> € 5 Extra Internet Mobile 1,5 GB (prijs per maand)</p>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control @error('sub_name3') is-invalid @enderror" id="sub_name3" autocomplete="off" placeholder="Nombre" name="sub_name3" value="{{ old('sub_name3') }}" required>
                        </div>
                        <div class="col-2 mt-1">
                            <input type="checkbox" name="new_num3" value="1">
                        </div>
                        <div class="col-3 mt-1">
                            <input type="checkbox" name="num_transfer3" value="1">
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-5">
                            <p class="text-justify "><input type="checkbox" name="subscription4" class="mr-2" value="1">€ 10 Extra Internet Mobile 5 GB (prijs per maand)</p>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control @error('sub_name4') is-invalid @enderror" id="sub_name4" autocomplete="off" placeholder="Nombre" name="sub_name4" value="{{ old('sub_name4') }}" required>
                        </div>
                        <div class="col-2 mt-1">
                            <input type="checkbox" name="new_num4" value="1">
                        </div>
                        <div class="col-3 mt-1">
                            <input type="checkbox" name="num_transfer4" value="1">
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-5">
                            <p class="text-justify "><input type="checkbox" name="subscription5" class="mr-2" value="1">€ 15 Extra Internet Mobile 10 GB (prjs per maand)
                            </p>
                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control @error('sub_name5') is-invalid @enderror" id="sub_name5" autocomplete="off" placeholder="Nombre" name="sub_name5" value="{{ old('sub_name5') }}" required>
                        </div>
                        <div class="col-2 mt-1">
                            <input type="checkbox" name="new_num5" value="1">
                        </div>
                        <div class="col-3 mt-1">
                            <input type="checkbox" name="num_transfer5" value="1">
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <p class="text-justify "><input type="checkbox" name="subscription6" class="mr-2" value="1">€ 2 optie “Ongelimiteerd bellen naar Scarlet Mobile” (prijs per maand)
                    </p>
                </div>
                <div class="mt-2">
                    <h4 style="text-align:center"><b>C. Betalingswijze

                        </b></h4>
                </div>
                <div class="mt-2">
                    <input type="radio" name="payment_method" value="1">
                    <label for="payment_method" class="form-label">Ik maak zelf een domiciliëring met behulp van de volgende bankgegevens :
                    </label>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <label for="iban_number" class="form-label">N° IBAN :<span class="text-danger">*</span></label>
                            <input type="iban_number" class="form-control @error('iban_number') is-invalid @enderror" id="iban_number" autocomplete="off" placeholder="IBAN Number" name="iban_number" value="{{ old('iban_number') }}" required>
                            @error('iban_number')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="name_account_holder" class="form-label">Naam van bank account eigenaar:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name_account_holder') is-invalid @enderror" id="name_account_holder" autocomplete="off" placeholder="Naam van bank account eigenaar" name="name_account_holder" value="{{ old('name_account_holder') }}" required>
                            @error('name_account_holder')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <input type="radio" name="payment_method" value="2">
                    <label for="payment_method" class="form-label">Ik wens via bankoverschrijving te betalen.
                    </label>
                </div>
                <div class="mt-2">
                    <h4 style="text-align:center"><b>D.Voorwaarden
                        </b></h4>
                </div>
                <p class="test-justify">Scarlet, Carlistraat 2 te 1140 Evere, wenst de persoonsgegevens die u hierbij verstrekt op te nemen in haar bestanden. Zij wenst deze persoonsgegevens te verwerken in het kader van klantenadministratie, marktstudies en met het oog op het voeren van gepersonaliseerde informatie- en
                    promotiecampagnes (per telefoon, post, email en/of sms) in verband met producten en diensten van Scarlet en/of derden. U heeft recht tot toegang en verbetering van deze persoonsgegevens
                </p>
                <div class="mt-2">
                    <p>Indien u akkoord bent met de verwerking door Scarlet van uw persoonsgegevens voor dergelijke doeleinden, gelieve dit vakje aan te kruisen<input type="checkbox" name="submitted_contact" class="ml-2"></p>
                </div>
                <div class="mt-3">
                    <p>De klant erkent de voorwaarden voor de dienst Scarlet Mobile Postpaid te aanvaarden.
                    </p>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-5">
                            <label for="made_in" class="form-label">Opgemaakt te:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('made_in') is-invalid @enderror" id="made_in" autocomplete="off" placeholder="Opgemaakt te" name="made_in" value="{{ old('made_in') }}" required>
                            @error('made_in')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="the" class="form-label">Op:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('the') is-invalid @enderror" id="the" autocomplete="off" placeholder="Op" name="the" value="{{ old('the') }}" required>
                            @error('the')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <label for="dealer_reference" class="form-label">Scarlet dealer reference:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('dealer_reference') is-invalid @enderror" id="dealer_reference" autocomplete="off" placeholder="Scarlet dealer reference" name="dealer_reference" value="{{ old('dealer_reference') }}" required>
                            @error('the')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="agent" class="form-label">Age:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('agent') is-invalid @enderror" id="the" autocomplete="off" placeholder="Agent" name="agent" value="{{ old('agent') }}" required>
                            @error('agent')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <h4 style="text-align:center"><b>Toelating voor Nummeroverdracht Mobiele Telefonie
                        </b></h4>
                </div>
                <div class="mt-2">
                    <p class="text-justify">De Klant geeft hiermee aan Scarlet de opdracht om voor zijn rekening de volgende handelingen te stellen ten aanzien
                        van zijn huidige mobiele operator:</p>
                    <p class="text-justify">a) indienen van het verzoek tot overdracht naar Scarlet van de mobiele telefoonnummers van de klant die vermeld
                        zijn op dit formulier;</p>
                    <p class="text-justify">b) beëindiging van de contractuele relatie van de klant met zijn huidige mobiele operator voor hetzelfde mobiele telefoonnummer.</p>
                </div>

                <div class="mt-4">

                    <label for="mob_num1" class="form-label">GSM-nummer<span class="text-danger">*</span></label>
                    <input type="phone" class="form-control @error('mob_num1') is-invalid @enderror" id="phone" autocomplete="off" placeholder="GSM-nummer" name="mob_num1" value="{{ old('mob_num1') }}" required>
                    @error('mob_num1')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-3">
                            <p>Betaalwijze vorige operator:</p>
                        </div>
                        <div class="col-4">
                            <input type="radio" name="current_payment_method1" value="1">
                            <label for="current_payment_method1" class="form-label">herlaadkaart</label>
                            <input type="radio" name="current_payment_method1" value="2">
                            <label for="current_payment_method1" class="form-label">abonnement</label>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="current_sim_number1" class="form-label">HuidigSIM-kaartnummer(1)<span class="text-danger">*</span></label>
                    <input type="phone" class="form-control @error('current_sim_number1') is-invalid @enderror" id="current_sim_number1" autocomplete="off" placeholder="HuidigSIM-kaartnummer" name="current_sim_number1" value="{{ old('current_sim_number1') }}" required>
                    @error('current_sim_number1')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="name1" class="form-label">Naam:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name1') is-invalid @enderror" id="name1" autocomplete="off" placeholder="Naam" name="name1" value="{{ old('name1') }}" required>
                        @error('name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="f_name1" class="form-label">Voornaam<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('f_name1') is-invalid @enderror" id="f_name1" autocomplete="off" placeholder="Voornaam" name="f_name1" value="{{ old('f_name1') }}" required>
                        @error('f_name1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="customer_number1" class="form-label">Klantnummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('customer_number1') is-invalid @enderror" id="customer_number1" autocomplete="off" placeholder="Klantnummer" name="customer_number1" value="{{ old('customer_number1') }}" required>
                        @error('customer_number1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="current_operator1" class="form-label">Huidige operator<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('current_operator1') is-invalid @enderror" id="current_operator1" autocomplete="off" placeholder="Huidige operator" name="current_operator1" value="{{ old('current_operator1') }}" required>
                        @error('current_operator1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-5">
                        <label for="date1">Datum<span class="text-danger">*</span></label>
                        <input class="form-control @error('date1') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date1" name="date1" value="{{ old('date1') }}" type="date">
                    </div>
                </div>
                <div class="mt-4">
                    <label for="mob_num2" class="form-label">GSM-nummer<span class="text-danger">*</span></label>
                    <input type="phone" class="form-control @error('mob_num2') is-invalid @enderror" id="phone" autocomplete="off" placeholder="GSM-nummer" name="mob_num2" value="{{ old('mob_num2') }}" required>
                    @error('mob_num2')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-3">
                            <p>Betaalwijze vorige operator:</p>
                        </div>
                        <div class="col-4">
                            <input type="radio" name="current_payment_method2" value="1">
                            <label for="current_payment_method2" class="form-label">herlaadkaart</label>
                            <input type="radio" name="current_payment_method2" value="2">
                            <label for="current_payment_method2" class="form-label">abonnement</label>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="current_sim_number2" class="form-label">HuidigSIM-kaartnummer(1)<span class="text-danger">*</span></label>
                    <input type="phone" class="form-control @error('current_sim_number2') is-invalid @enderror" id="current_sim_number2" autocomplete="off" placeholder="HuidigSIM-kaartnummer" name="current_sim_number2" value="{{ old('current_sim_number2') }}" required>
                    @error('current_sim_number2')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="name2" class="form-label">Naam:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name2') is-invalid @enderror" id="name2" autocomplete="off" placeholder="Naam" name="name2" value="{{ old('name2') }}" required>
                        @error('name2')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="f_name2" class="form-label">Voornaam:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('f_name2') is-invalid @enderror" id="f_name2" autocomplete="off" placeholder="Voornaam" name="f_name2" value="{{ old('f_name2') }}" required>
                        @error('f_name2')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="customer_number2" class="form-label">Klantnummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('customer_number2') is-invalid @enderror" id="customer_number2" autocomplete="off" placeholder="Klantnummer" name="customer_number2" value="{{ old('customer_number2') }}" required>
                        @error('customer_number2')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="current_operator2" class="form-label">Huidige operator<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('current_operator2') is-invalid @enderror" id="current_operator2" autocomplete="off" placeholder="Huidige operator" name="current_operator2" value="{{ old('current_operator2') }}" required>
                        @error('current_operator2')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-5">
                        <label for="date2">Datum<span class="text-danger">*</span></label>
                        <input class="form-control @error('date2') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date2" name="date2" value="{{ old('date2') }}" type="date">
                    </div>
                </div>

                <div class="mt-4">
                    <label for="mob_num3" class="form-label">GSM-nummer<span class="text-danger">*</span></label>
                    <input type="phone" class="form-control @error('mob_num3') is-invalid @enderror" id="mob_num3" autocomplete="off" placeholder="GSM-nummer" name="mob_num3" value="{{ old('mob_num3') }}" required>
                    @error('mob_num3')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-3">
                            <p>Betaalwijze vorige operator:</p>
                        </div>
                        <div class="col-4">
                            <input type="radio" name="current_payment_method3" value="1">
                            <label for="current_payment_method3" class="form-label">herlaadkaart</label>
                            <input type="radio" name="current_payment_method3" value="2">
                            <label for="current_payment_method3" class="form-label">abonnement</label>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="current_sim_number3" class="form-label">HuidigSIM-kaartnummer(1)<span class="text-danger">*</span></label>
                    <input type="phone" class="form-control @error('current_sim_number3') is-invalid @enderror" id="current_sim_number3" autocomplete="off" placeholder="HuidigSIM-kaartnummer" name="current_sim_number3" value="{{ old('current_sim_number3') }}" required>
                    @error('current_sim_number3')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="name3" class="form-label">Naam:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name3') is-invalid @enderror" id="name3" autocomplete="off" placeholder="Naam" name="name3" value="{{ old('name3') }}" required>
                        @error('name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="f_name3" class="form-label">Voornaam<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('f_name3') is-invalid @enderror" id="f_name3" autocomplete="off" placeholder="Voornaam" name="f_name3" value="{{ old('f_name3') }}" required>
                        @error('f_name3')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="customer_number3" class="form-label">Klantnummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('customer_number3') is-invalid @enderror" id="customer_number3" autocomplete="off" placeholder="Klantnummer" name="customer_number3" value="{{ old('customer_number3') }}" required>
                        @error('customer_number3')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="current_operator3" class="form-label">Huidige operator<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('current_operator3') is-invalid @enderror" id="current_operator3" autocomplete="off" placeholder="Huidige operator" name="current_operator3" value="{{ old('current_operator3') }}" required>
                        @error('current_operator3')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-5">
                        <label for="date3">Datum<span class="text-danger">*</span></label>
                        <input class="form-control @error('date3') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date3" name="date3" value="{{ old('date3') }}" type="date">
                    </div>
                </div>

                <div class="mt-4">
                    <label for="mob_num4" class="form-label">GSM-nummer<span class="text-danger">*</span></label>
                    <input type="phone" class="form-control @error('mob_num4') is-invalid @enderror" id="phone" autocomplete="off" placeholder="GSM-nummer" name="mob_num4" value="{{ old('mob_num4') }}" required>
                    @error('mob_num4')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-3">
                            <p>Betaalwijze vorige operator:</p>
                        </div>
                        <div class="col-4">
                            <input type="radio" name="current_payment_method4" value="1">
                            <label for="current_payment_method4" class="form-label">herlaadkaart</label>
                            <input type="radio" name="current_payment_method4" value="2">
                            <label for="current_payment_method4" class="form-label">abonnement</label>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="current_sim_number4" class="form-label">HuidigSIM-kaartnummer(1)<span class="text-danger">*</span></label>
                    <input type="phone" class="form-control @error('current_sim_number4') is-invalid @enderror" id="current_sim_number4" autocomplete="off" placeholder="HuidigSIM-kaartnummer" name="current_sim_number4" value="{{ old('current_sim_number4') }}" required>
                    @error('current_sim_number4')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="name4" class="form-label">Naam:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name4') is-invalid @enderror" id="name4" autocomplete="off" placeholder="Naam" name="name4" value="{{ old('name4') }}" required>
                        @error('name4')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="f_name4" class="form-label">Voornaam<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('f_name4') is-invalid @enderror" id="f_name4" autocomplete="off" placeholder="Voornaam" name="f_name4" value="{{ old('f_name4') }}" required>
                        @error('f_name4')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="customer_number4" class="form-label">Klantnummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('customer_number4') is-invalid @enderror" id="customer_number4" autocomplete="off" placeholder="Klantnummer" name="customer_number4" value="{{ old('customer_number4') }}" required>
                        @error('customer_number4')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="current_operator4" class="form-label">Huidige operator<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('current_operator4') is-invalid @enderror" id="current_operator4" autocomplete="off" placeholder="Huidige operator" name="current_operator4" value="{{ old('current_operator4') }}" required>
                        @error('current_operator4')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-5">
                        <label for="date4">Datum<span class="text-danger">*</span></label>
                        <input class="form-control @error('date4') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date4" name="date4" value="{{ old('date4') }}" type="date">
                    </div>
                </div>
                <div class="mt-4">
                    <label for="mob_num5" class="form-label">GSM-nummer<span class="text-danger">*</span></label>
                    <input type="phone" class="form-control @error('mob_num5') is-invalid @enderror" id="phone" autocomplete="off" placeholder="GSM-nummer" name="mob_num5" value="{{ old('mob_num5') }}" required>
                    @error('mob_num5')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-3">
                            <p>Betaalwijze vorige operator:</p>
                        </div>
                        <div class="col-4">
                            <input type="radio" name="current_payment_method5" value="1">
                            <label for="current_payment_method5" class="form-label">herlaadkaart</label>
                            <input type="radio" name="current_payment_method5" value="2">
                            <label for="current_payment_method5" class="form-label">abonnement</label>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="current_sim_number5" class="form-label">HuidigSIM-kaartnummer(1)<span class="text-danger">*</span></label>
                    <input type="phone" class="form-control @error('current_sim_number5') is-invalid @enderror" id="current_sim_number5" autocomplete="off" placeholder="HuidigSIM-kaartnummer" name="current_sim_number5" value="{{ old('current_sim_number5') }}" required>
                    @error('current_sim_number5')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="name5" class="form-label">Naam:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name5') is-invalid @enderror" id="name5" autocomplete="off" placeholder="Naam" name="name5" value="{{ old('name5') }}" required>
                        @error('name5')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="f_name5" class="form-label">Voornaam<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('f_name5') is-invalid @enderror" id="f_name5" autocomplete="off" placeholder="Voornaam" name="f_name5" value="{{ old('f_name5') }}" required>
                        @error('f_name5')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="customer_number5" class="form-label">Klantnummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('customer_number5') is-invalid @enderror" id="customer_number5" autocomplete="off" placeholder="Klantnummer" name="customer_number5" value="{{ old('customer_number5') }}" required>
                        @error('customer_number5')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="current_operator5" class="form-label">Huidige operator<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('current_operator5') is-invalid @enderror" id="current_operator5" autocomplete="off" placeholder="Huidige operator" name="current_operator5" value="{{ old('current_operator5') }}" required>
                        @error('current_operator5')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-5">
                        <label for="date5">Datum<span class="text-danger">*</span></label>
                        <input class="form-control @error('date5') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date5" name="date5" value="{{ old('date5') }}" type="date">
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection