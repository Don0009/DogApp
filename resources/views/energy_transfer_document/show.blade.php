@extends('layouts.backend')
@section('styles')
<style>
    .input-group-text {
        background-color: #727cf5;
        color: white !important;
    }
</style>

<!--CSS -->
<link rel="stylesheet" type="text/css" href="css/internet_tv.css">

@endsection
@section('content')

{{-- <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="{{ route('internet_tv.index') }}">internet tv</a></li>
<li class="breadcrumb-item active" aria-current="page">Create User</li>
</ol>
</nav>
</div> --}}

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="section mb-3">
                    <div class="container-fluid">
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
                                <div class="text_orange">TEL. <span>+32 (0) 2 745 71 11 |</span> FAX +32 (0) 2 745 70 00]</div>
                                <div class="text_orange">BNP Paribas Fortis 210-0233334-04 <span>| IBAN</span>BE10 2100 2333 3404 <span>| BIC:</span> GEBABEBB </div>
                                <div class="text_orange">BTW <span>BE 0456.810.810 |</span> RPR Brussel <span>www.orange.be</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mb-3 text-center">
                    <h3 class="card-title" style="text-align: center">Formulaire de demande d’installation Orange Internet + TV</h3>
                    <h5 class="card-title">Identification du demandeur et adresse d’installation</h5>
                </div>
                <form class="forms-sample" method="POST" action="{{ route('internet_tv.store') }}">
                    @csrf
                    <div class="section">
                        <div class="container">
                            <h6 class="card-title">Mej. / Mevr. / Dhr. (Omcircelen wat past)</h6>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="partner_apllication">Referentie van de MyPartner aanvraag:</label>
                                        <input type="text" class="form-control" id="partner_apllication" autocomplete="off" placeholder="Référence de la demande MyPartner" name="partner_apllication" value="{{ $orangeInternetTv->partner_apllication}} ">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="name">Naam:</label>
                                        <input type="name" class="form-control" id="name" autocomplete="off" placeholder="Naam" name="name" value="{{ $orangeInternetTv->name}}">
                                    </div>
                                </div>
                                <div class=" col-6">
                                    <div class="form-group">
                                        <label for="first_name">Vooraam:</label>
                                        <input type="name" class="form-control" id="first_name" autocomplete="off" placeholder="Vooraam" name="first_name" value="{{ $orangeInternetTv->first_name}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="street">Straat:</label>
                                        <input type="name" class="form-control" id="street" autocomplete="off" placeholder="Straat" name="street" value="{{ $orangeInternetTv->street}}">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="number">Nummer:</label>
                                        <input type="number" class="form-control" id="number" autocomplete="off" placeholder="Nummer" name="number" value="{{ $orangeInternetTv->number}}">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="letter">Letter:</label>
                                        <input type="mail" class="form-control" id="letter" autocomplete="off" placeholder="Lettre" name="letter" value="{{ $orangeInternetTv->letter}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="apartment_number">Appartementsnummer:</label>
                                        <input type="name" class="form-control" id="apartment_number" autocomplete="off" placeholder="Appartementsnummer" name="apartment_number" value="{{ $orangeInternetTv->apartment_number}}">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="floor">Verdieping:</label>
                                        <input type="name" class="form-control" id="floor" autocomplete="off" placeholder="Verdieping" name="floor" value="{{ $orangeInternetTv->floor}}">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="bus">Bus:</label>
                                        <input type="name" class="form-control" id="bus" autocomplete="off" placeholder="Bus" name="bus" value="{{ $orangeInternetTv->bus}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="township">Gemeente:</label>
                                        <input type="name" class="form-control" id="township" autocomplete="off" placeholder="Gemeente" name="township" value="{{ $orangeInternetTv->township}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="postcode">Postcode:</label>
                                        <input type="name" class="form-control" id="postcode" autocomplete="off" placeholder="Postcode" name="postcode" value="{{ $orangeInternetTv->postcode}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">

                                    <div class="form-group">
                                        <label for="">Taal (omcircelen): NL / FR</label>

                                    </div>
                                </div>
                                <div class="col-6">

                                    <div class="form-group">
                                        <label for="gsm">Gsm:</label>
                                        <input type="name" class="form-control" id="gsm" autocomplete="off" placeholder="Gsm" name="gsm" value="{{ $orangeInternetTv->gsm}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="mail">Mail :</label>
                                        <input type="mail" class="form-control" id="mail" autocomplete="off" placeholder="Mail" name="mail" value="{{ $orangeInternetTv->mail}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="id_card_number">Identiteitskaartnummer:</label>
                                        <input type="text" class="form-control" id="id_card_number" autocomplete="off" placeholder="Identiteitskaartnummer" name="id_card_number" value="{{ $orangeInternetTv->id_card_number}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="orange_customer_number">Orange-klantnummer:</label>
                                        <input type="text" class="form-control" id="orange_customer_number" autocomplete="off" placeholder="Orange-klantnummer" name="orange_customer_number" value="{{ $orangeInternetTv->orange_customer_number}}">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class=" section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name_of_your_current_provider">Naam van je huidige leverancier van internet- en tv-diensten:</label>
                                        <input type="text" class="form-control" id="name_of_your_current_provider" autocomplete="off" placeholder="Naam van je huidige leverancier van internet- en tv-diensten" name="name_of_your_current_provider" value="{{ $orangeInternetTv->name_of_your_current_provider}}">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="customer_number_at_your_current_supplier">Klantnummer bij je huidige leverancier van internet- en tv-diensten (enkel Telenet):</label>
                                        <input type="text" class="form-control" id="customer_number_at_your_current_supplier" autocomplete="off" placeholder="Klantnummer bij je huidige leverancier van internet- en tv-diensten (enkel Telenet)" name="customer_number_at_your_current_supplier" value="{{ $orangeInternetTv->customer_number_at_your_current_supplier}}">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="migratiemandaat">
                                        <h4>Opties (check-list)</h4>
                                    </div>

                                    <h5>Extra TV Decoder?</h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="extra_decoder" value="0" {{ $orangeInternetTv->extra_decoder == 0 ? 'checked' : '' }}>
                                        <label for="extra_decoder" class="form-label">1<span class="text-danger">*</span></label>

                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="extra_decoder" value="1" {{ $orangeInternetTv->extra_decoder == 1 ? 'checked' : '' }}>
                                        <label for="extra_decoder" class="form-label">2<span class="text-danger">*</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="extra_decoder" value="2" {{ $orangeInternetTv->extra_decoder == 2 ? 'checked' : '' }}>
                                        <label for="extra_decoder" class="form-label">3<span class="text-danger">*</span></label>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-6">

                                    <h5>Internet boost*? </h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="internet_boost" value="0" {{ $orangeInternetTv->internet_boost == 0 ? 'checked' : '' }}>
                                        <label for="internet_boost" class="form-label">Ja<span class="text-danger">*</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="internet_boost" value="1" {{ $orangeInternetTv->internet_boost == 1 ? 'checked' : '' }}>
                                        <label for="internet_boost" class="form-label">Neen<span class="text-danger">*</span></label>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </section>
                    <div class="section">
                        <div class="container">
                            <div class="migratiemandaat">
                                <h4>Transfert de services internet et/ou TV</h4>

                                <h2 class="card-title">Vermeld hier jouw 3 favoriete datums en tijdstippen voor de installatie</h2>
                                <div class="row">
                                    <div class="col-3">
                                        <h2 class="card-title">Datum 1: </h2>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">

                                            <input type="date" class="form-control" id="id_card_number_d1" autocomplete="off" placeholder="Datum 1" name="id_card_number_d1" value="{{$orangeInternetTv->id_card_number_d1}}">
                                        </div>

                                    </div>
                                    <div class="col-5">
                                        <p>voormiddag (8u-13u) / namiddag (12u-18u) / avond (17u-20u**)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <h2 class="card-title">Datum 2 :</h2>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">

                                            <input type="date" class="form-control" id="id_card_number_d2" autocomplete="off" placeholder="Datum 2" name="id_card_number_d2" value="{{$orangeInternetTv->id_card_number_d2}}">
                                        </div>

                                    </div>
                                    <div class="col-5">
                                        <p>voormiddag (8u-13u) / namiddag (12u-18u) / avond (17u-20u**</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <h2 class="card-title">Datum 3:</h2>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">

                                            <input type="date" class="form-control" id="id_card_number_d3" autocomplete="off" placeholder="Datum 3" name="id_card_number_d3" value="{{$orangeInternetTv->id_card_number_d3}}">
                                        </div>

                                    </div>
                                    <div class="col-5">
                                        <p>voormiddag (8u-13u) / namiddag (12u-18u) / avond (17u-20u**)</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="section">
                            <div class="container-fluid">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Bijkomende informatie voor de installateur (optioneel)</label>
                                    <h6></h6>
                                    <textarea class="form-control" name="additional_information" values="additional_information" id="exampleFormControlTextarea1" rows="5" value="{{$orangeInternetTv->additional_information}}"></textarea>
                                </div>
                                <div class="mb-3">
                                    <input type="file" class="form-control" id="file" autocomplete="off" placeholder="images" name="file">
                                </div>

                                <div class="mb-3" style="font-size: 12px">
                                    *Onder voorbehoud van beschikbaarheid op jouw adres.
                                </div>
                                <div class="mb-3" style="font-size: 12px">
                                    **Voor installaties ‘s avonds tussen 17 en 20 uur
                                </div>
                                <div class="mb-3" style="font-size: 12px">
                                    of op zaterdag tussen 8 en 18 uur wordt 30 euro extra aangerekend.
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="migratiemandaat">
                                    <h2>Migratiemandaat voor vastelijndiensten en nummeroverdracht</h2>
                                    <h4>Uw persoonlijke gegevens</h4>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="customer_number">Klantennummer:</label>
                                            <input type="text" class="form-control" id="customer_number" autocomplete="off" placeholder="Klantennummer :" name="customer_number" value="{{$orangeInternetTv->customer_number}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="customer_type">Klanttype:</label>
                                            <input type="name" class="form-control" id="customer_type" autocomplete="off" placeholder="Klanttype" name="customer_type" value="{{$orangeInternetTv->customer_type}}">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="title">Aanspreektitel:</label>
                                            <input type="text" class="form-control" id="title" autocomplete="off" placeholder="Aanspreektitel" name="title" value="{{$orangeInternetTv->title}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="language">Taal:</label>
                                            <input type="name" class="form-control" id="language" autocomplete="off" placeholder="Taal" name="language" value="{{$orangeInternetTv->language}}">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="first_name_1">Voornaam:</label>
                                            <input type="text" class="form-control" id="first_name_1" autocomplete="off" placeholder="Voornaam" name="first_name_1" value="{{$orangeInternetTv->first_name_1}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="name_1">Naam:</label>
                                            <input type="name" class="form-control" id="name_1" autocomplete="off" placeholder="Naam" name="name_1" value="{{$orangeInternetTv->name_1}}">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="date_of_birth">Geboortedatum:</label>
                                            <input type="date" class="form-control" id="date_of_birth" autocomplete="off" placeholder="Geboortedatum" name="date_of_birth" value="{{$orangeInternetTv->date_of_birth}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="number_identiteitskaart">Nummer identiteitskaart:</label>
                                            <input type="name" class="form-control" id="number_identiteitskaart" autocomplete="off" placeholder="Nummer identiteitskaart:" name="number_identiteitskaart" value="{{$orangeInternetTv->number_identiteitskaart}}">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="telephone">Telefoon:</label>
                                            <input type="text" class="form-control" id="telephone" autocomplete="off" placeholder="Telefoon:" name="telephone" value="{{$orangeInternetTv->telephone}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="email_address">Emailadres:</label>
                                            <input type="name" class="form-control" id="email_address" autocomplete="off" placeholder="Emailadres:" name="email_address" value="{{$orangeInternetTv->email_address}}">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="street_1">Straat:</label>
                                            <input type="text" class="form-control" id="street_1" autocomplete="off" placeholder="Straat" name="street_1" value="{{$orangeInternetTv->street_1}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="number_1">Nummer:</label>
                                            <input type="name" class="form-control" id="number_1" autocomplete="off" placeholder="Nummer" name="number_1" value="{{$orangeInternetTv->number_1}}">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="postcode_1">Postcode:</label>
                                            <input type="text" class="form-control" id="postcode_1" autocomplete="off" placeholder="Postcode" name="postcode_1" value="{{$orangeInternetTv->postcode_1}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="place">Plaats:</label>
                                            <input type="name" class="form-control" id="place" autocomplete="off" placeholder="Plaats" name="place" value="{{$orangeInternetTv->place}}">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="vat_number">BTW nummer:</label>
                                            <input type="text" class="form-control" id="vat_number" autocomplete="off" placeholder="BTW nummer" name="vat_number" value="{{$orangeInternetTv->vat_number}}">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="migratiemandaat">
                                    <h4>
                                        Overdracht internet en tv-diensten
                                    </h4>

                                    <div class="form-check">

                                        <input class="form-check-input" type="radio" name="care_of_the_automatic_migration" value="0" {{ $orangeInternetTv->care_of_the_automatic_migration == 0 ? 'checked' : '' }}>
                                        <label for="extra_decoder" class="form-label"><span style="font-weight: bold">Ik wens gebruik</span> te maken de overstapdienst Easy Switch.
                                            Orange zorgt voor de automatische migratie en het opzeggen van de hieronder aangegeven
                                            diensten bij uw oorspronkelijke operator.</label>
                                    </div>
                                    <div class="form-check">

                                        <input class="form-check-input" type="radio" name="care_of_the_automatic_migration" value="1" {{ $orangeInternetTv->care_of_the_automatic_migration == 1 ? 'checked' : '' }}>
                                        <label for="extra_decoder" class="form-label"><span style="font-weight: bold">Ik wens geen gebruik</span> te maken van Easy Switch.
                                            Ik zorg zelf voor het opzeggen van mijn internet en tv-diensten bij mijn oorspronkelijke operator.
                                            Gewenste installatiedatum: datum overeengekomen met de klant.</label>
                                    </div>
                                </div>


                                <div class="migratiemandaat">
                                    <h4>Gegevens oorspronkelijke operator
                                    </h4>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="operator_name">Naam operator:</label>
                                            <input type="text" class="form-control" id="operator_name" autocomplete="off" placeholder="Naam operator" name="operator_name" value="{{$orangeInternetTv->operator_name}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="client_number">Naam operator:</label>
                                            <input type="name" class="form-control" id="client_number" autocomplete="off" placeholder="Naam operator" name="client_number" value="{{$orangeInternetTv->client_number}}">
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="easy_switch_id">Easy Switch ID:</label>
                                            <input type="text" class="form-control" id="easy_switch_id" autocomplete="off" placeholder="Easy Switch ID :" name="easy_switch_id" value="{{$orangeInternetTv->easy_switch_id}}">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="migratiemandaat">
                                    <h4>Overdracht vast nummer
                                    </h4>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="call_number_1">Oproepnummer:</label>
                                            <input type="text" class="form-control" id="call_number_1" autocomplete="off" placeholder="Oproepnummer" name="call_number_1" value="{{$orangeInternetTv->call_number_1}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check topper">
                                            <input class="form-check-input" type="radio" name="stopping_5" value="0" {{ $orangeInternetTv->stopping_5 == 0 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"><span style="">Stopzetten (Enkel van toepassing bij Easy Switch)</span> </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="call_number_2">Oproepnummer:</label>
                                            <input type="text" class="form-control" id="call_number_2" autocomplete="off" placeholder="Oproepnummer" name="call_number_2" value="{{$orangeInternetTv->call_number_2}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check topper">
                                            <input class="form-check-input" type="radio" name="stopping_5" value="1" {{ $orangeInternetTv->stopping_5 == 1 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label">Stopzetten (Enkel van toepassing bij Easy Switch)</label>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="migratiemandaat">
                                    <h4>Overdracht mobiele nummers
                                    </h4>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="call_number_3">Oproepnummer:</label>
                                            <input type="text" class="form-control" id="call_number_3" autocomplete="off" placeholder="Oproepnummer" name="call_number_3" value="{{$orangeInternetTv->call_number_3}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <input class="form-check-input" type="radio" name="stopping_3" value="0" {{ $orangeInternetTv->stopping_3 == 0 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"><span style="">Overdragen naar Orange</span> </label>
                                        </div>

                                    </div>

                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="stopping_3" value="1" {{ $orangeInternetTv->stopping_3 == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Stopzetten
                                                    (Enkel van toepassing bij Easy Switch)
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="sim_number">SIM nummer oorspronkelijke operator:</label>
                                            <input type="text" class="form-control" id="sim_number" autocomplete="off" placeholder="SIM nummer oorspronkelijke operator" name="sim_number" value="{{$orangeInternetTv->sim_number}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="original_operator">Oorspronkelijke operator:</label>
                                            <input type="text" class="form-control" id="original_operator" autocomplete="off" placeholder="Oorspronkelijke operator" name="original_operator" value="{{$orangeInternetTv->original_operator}}">
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="desired_transfer_date">Gewenste overdracht datum:</label>
                                            <input type="text" class="form-control" id="desired_transfer_date" autocomplete="off" placeholder="Gewenste overdracht datum" name="desired_transfer_date" value="{{$orangeInternetTv->desired_transfer_date}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <input class="form-check-input" type="radio" name="immediately" value="0" {{ $orangeInternetTv->immediately == 0 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"><span>Onmiddellijk</span> </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="immediately" value="1" {{ $orangeInternetTv->immediately == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Op de installatiedatum
                                                    van Internet + TV

                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="call_number_5">Oproepnummer:</label>
                                            <input type="text" class="form-control" id="call_number_5" autocomplete="off" placeholder="Oproepnummer" name="call_number_5" value="{{$orangeInternetTv->call_number_5}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check topper">

                                            <input class="form-check-input" type="radio" name="transfer_to_orange" value="0" {{ $orangeInternetTv->transfer_to_orange == 0 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"><span>Overdragen naar Orange</span> </label>
                                        </div>

                                    </div>

                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="transfer_to_orange" value="1" {{ $orangeInternetTv->transfer_to_orange == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Stopzetten
                                                    (Enkel van toepassing bij Easy Switch)
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="sim_number_2">SIM nummer oorspronkelijke operator:</label>
                                            <input type="text" class="form-control" id="sim_number_2" autocomplete="off" placeholder="SIM nummer oorspronkelijke operator" name="sim_number_2" value="{{$orangeInternetTv->sim_number_2}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="original_operator_1">Oorspronkelijke operator:</label>
                                            <input type="text" class="form-control" id="original_operator_1" autocomplete="off" placeholder="Oorspronkelijke operator" name="original_operator_1" value="{{$orangeInternetTv->original_operator_1}}">
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="desired_transfer_date_1">Gewenste overdracht datum:</label>
                                            <input type="text" class="form-control" id="desired_transfer_date_1" autocomplete="off" placeholder="Gewenste overdracht datum" name="desired_transfer_date_1" value="{{$orangeInternetTv->desired_transfer_date_1}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <input class="form-check-input" type="radio" name="Stopping" value="0" {{ $orangeInternetTv->Stopping == 0 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"><span>Onmiddellijk</span> </label>
                                        </div>

                                    </div>

                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Stopping" value="1" {{ $orangeInternetTv->Stopping == 1 ? 'checked' : '' }}>
                                                <label for="extra_decoder" class="form-label"><span> Op de installatiedatum
                                                        van Internet + TV</span> </label>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="call_number_6">Oproepnummer:</label>
                                            <input type="text" class="form-control" id="call_number_6" autocomplete="off" placeholder=">Oproepnummer" name="call_number_6" value="{{$orangeInternetTv->call_number_6}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <input class="form-check-input" type="radio" name="transfer_to_orange_4" value="0" {{ $orangeInternetTv->transfer_to_orange_4 == 0 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"> <span style="">Overdragen naar Orange</span></label>
                                        </div>

                                    </div>

                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <input class="form-check-input" type="radio" name="transfer_to_orange_4" value="1" {{ $orangeInternetTv->transfer_to_orange_4 == 1 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"> <span style="">Stopzetten
                                                    (Enkel van toepassing bij Easy Switch)</span></label>
                                        </div>

                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="sim_number_3">SIM nummer oorspronkelijke operator:</label>
                                            <input type="text" class="form-control" id="sim_number_3" autocomplete="off" placeholder="SIM nummer oorspronkelijke operator" name="sim_number_3" value="{{$orangeInternetTv->sim_number_3}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="original_operator_2">Oorspronkelijke operator:</label>
                                            <input type="text" class="form-control" id="original_operator_2" autocomplete="off" placeholder="Oorspronkelijke operator" name="original_operator_2" value="{{$orangeInternetTv->original_operator_2}}">
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="desired_transfer_date_2">Gewenste overdracht datum: </label>
                                            <input type="text" class="form-control" id="desired_transfer_date_2" autocomplete="off" placeholder="Gewenste overdracht datum" name="desired_transfer_date_2" value="{{$orangeInternetTv->desired_transfer_date_2}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <input class="form-check-input" type="radio" name="immediately_3" value="0" {{ $orangeInternetTv->immediately_3 == 0 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"> <span style="">Onmiddellijk</span></label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <input class="form-check-input" type="radio" name="immediately_3" value="1" {{ $orangeInternetTv->immediately_3 == 1 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"> <span style="">O p de installatiedatum
                                                    van Internet + TV</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="call_number_7">Oproepnummer:</label>
                                            <input type="text" class="form-control" id="call_number_7" autocomplete="off" placeholder="Oproepnummer" name="call_number_7" value="{{$orangeInternetTv->call_number_7}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <input class="form-check-input" type="radio" name="transfer_to_orange_2" value="0" {{ $orangeInternetTv->transfer_to_orange_2 == 0 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"> <span style="">Overdragen naar Orange</span></label>
                                        </div>

                                    </div>

                                    <div class="col-3">
                                        <div class="form-check topper">

                                            <input class="form-check-input" type="radio" name="transfer_to_orange_2" value="1" {{ $orangeInternetTv->transfer_to_orange_2 == 1 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"> <span style="">Stopzetten
                                                    (Enkel van toepassing bij Easy Switch)</span></label>
                                        </div>

                                    </div>



                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="sim_number_4">SIM nummer oorspronkelijke operator:</label>
                                            <input type="text" class="form-control" id="sim_number_4" autocomplete="off" placeholder="SIM nummer oorspronkelijke operator" name="sim_number_4" value="{{$orangeInternetTv->sim_number_4}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="original_operator_3">Oorspronkelijke operator:</label>
                                            <input type="text" class="form-control" id="original_operator_3" autocomplete="off" placeholder="Oorspronkelijke operator" name="original_operator_3" value="{{$orangeInternetTv->original_operator_3}}">
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="transfer_date_3">Gewenste overdracht datum:</label>
                                            <input type="text" class="form-control" id="transfer_date_3" autocomplete="off" placeholder="Gewenste overdracht datum" name="transfer_date_3" value="{{$orangeInternetTv->transfer_date_3}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <input class="form-check-input" type="radio" name="immediately_4" value="0" {{ $orangeInternetTv->immediately_4 == 0 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"> <span style="">Onmiddellijk</span></label>
                                        </div>

                                    </div>

                                    <div class="col-3">
                                        <div class="form-check topper">


                                            <input class="form-check-input" type="radio" name="immediately_4" value="1" {{ $orangeInternetTv->immediately_4 == 1 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"> <span style=""> Op de installatiedatum
                                                    van Internet + TV</span></label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="call_number_8">Oproepnummer: </label>
                                            <input type="text" class="form-control" id="call_number_8" autocomplete="off" placeholder="Oproepnummer" name="call_number_8" value="{{$orangeInternetTv->call_number_8}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check topper">

                                            <input class="form-check-input" type="radio" name="transfer_to_orange_3" value="0" {{ $orangeInternetTv->transfer_to_orange_3 == 0 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"> <span style="">Overdragen naar Orange</span></label>
                                        </div>

                                    </div>

                                    <div class="col-3">
                                        <div class="form-check topper">

                                            <input class="form-check-input" type="radio" name="transfer_to_orange_3" value="1" {{ $orangeInternetTv->transfer_to_orange_3 == 1 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"> <span style="">Stopzetten
                                                    (Enkel van toepassing bij Easy Switch)</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="sim_number_5">SIM nummer oorspronkelijke operator: </label>
                                            <input type="text" class="form-control" id="sim_number_5" autocomplete="off" placeholder="SIM nummer oorspronkelijke operator" name="sim_number_5" value="{{$orangeInternetTv->sim_number_5}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="original_operator_4">Oorspronkelijke operator:</label>
                                            <input type="text" class="form-control" id="original_operator_4" autocomplete="off" placeholder="Oorspronkelijke operator" name="original_operator_4" value="{{$orangeInternetTv->original_operator_4}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="desired_transfer_date_4">Gewenste overdracht datum:</label>
                                            <input type="text" class="form-control" id="desired_transfer_date_4" autocomplete="off" placeholder="Gewenste overdracht datum" name="desired_transfer_date_4" value="{{$orangeInternetTv->desired_transfer_date_4}}">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check topper">
                                            <input class="form-check-input" type="radio" name="immediately_5" value="0" {{ $orangeInternetTv->immediately_5 == 0 ? 'checked' : '' }}>
                                            <label for="extra_decoder" class="form-label"> <span style="">Onmiddellijk</span></label>
                                        </div>

                                    </div>

                                    <div class="col-3">
                                        <div class="form-check ">
                                            <input class="form-check-input" type="radio" name="immediately_5" value="1" {{ $orangeInternetTv->immediately_5 == 1 ? 'checked' : '' }}">
                                            <label for="extra_decoder" class="form-label">Op de installatiedatum
                                                van Internet + TV<span class="text-danger">*</span></label>

                                        </div>

                                    </div>
                                </div>
                                <div class="migratiemandaat">
                                    <h4>
                                        Information
                                    </h4>
                                    <p>
                                        Volgens de wet mag het verlies van telefoondienst verstrekt aan de abonnee tijdens de nummeroverdrachtsprocedure niet langer dan
                                        1 werkdag duren. U dient een specifieke datum overeen te komen voor de overdracht van het nummer met uw operator. Indien de overdracht
                                        langer dan een werkdag duurt na de activering van de telefoondienst of indien de overeengekomen datum niet wordt nageleefd, hebt u recht op
                                        een compensatie. Hiervoor moet u zich wenden tot uw nieuwe operator. Meer informatie over uw recht op compensatie bij vertraging in de nummeroverdracht vindt u op www.bipt.be/np
                                    </p>
                                    <p>De overdracht van nummers en vastelijndiensten naar Orange ontslaat u niet van de verplichting om uw contract met de oorspronkelijke operator te
                                        respecteren, op straffe van het betalen van nalatigheidsinteresten of een schadevergoeding aan deze operator.
                                        De vastelijndiensten kunnen bij uw oorspronkelijke operator samen met mobiele en/of vaste nummers worden aangeboden. Het stopzetten van de
                                        internet en/of tv-diensten zonder overdracht van de telefoonnummers kan tot gevolg hebben dat de oorspronkelijke operator het volledige contract
                                        automatisch zal stopzetten met mogelijk verlies van telefoonnummers.
                                        Indien de technicus voor de installatie van vaste lijndiensten niet komt opdagen binnen het afgesproken tijdsblok hebt u recht op een compensatie
                                        van 10 euro. Voor meer informatie zie www.orange.be/easyswitch.</p>

                                    <p>De klant geeft Orange volmacht om in zijn naam het bestaande contract met betrekking tot de hierboven vermelde diensten en nummers met de
                                        oorspronkelijke operator op te zeggen en naar Orange over te dragen. De overdracht kan enkel plaats vinden indien de klant de correcte en volledige gegevens meedeelt en de oorspronkelijke operator deze aanvraag geldig verklaart. Met het tekenen van dit document verklaart u zich akkoord
                                        met de algemene voorwaarden van Orange (link) en Easy Switch (link). Uitsluitend de persoon die geabonneerd is bij de oorspronkelijke operator
                                        kan dit document ondertekenen.</p>
                                </div>
                            </div>
                        </div>

                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="call_number_9">In tweevoud opgemaakt te:</label>
                                            <input type="text" class="form-control" id="call_number_9" autocomplete="off" placeholder="In tweevoud opgemaakt te" name="call_number_9" value="{{$orangeInternetTv->call_number_9}}">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="op">op:</label>
                                            <input type="text" class="form-control" id="op" autocomplete="off" placeholder="op" name="op" value="{{$orangeInternetTv->op}}">
                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="signature">Handtekening:</label>
                                            <input type="file" class="form-control" id="file_1" autocomplete="off" placeholder="Handtekening" name="file_1" value="{{$orangeInternetTv->op}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="klant">De klant kan zijn contract op elk moment en op elke schriftelijke wijze opzeggen.</div>
                                <button type="submit" class="btn btn-primary mt-5">Submit</button>
                                <a href="{{ route('internet_tv.index') }}" class="btn btn-light mt-5">Cancel</a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection