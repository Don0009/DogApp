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
                            <h6 class="card-title">Mlle / Mme / M. (entourez)</h6>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="partner_apllication">Référence de la demande MyPartner :</label>
                                        <input type="text" class="form-control" id="partner_apllication" autocomplete="off" placeholder="Référence de la demande MyPartner" name="partner_apllication">
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
                                        <label for="name">Nom :</label>
                                        <input type="name" class="form-control" id="name" autocomplete="off" placeholder="Nom" name="name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first_name">Prénom :</label>
                                        <input type="name" class="form-control" id="first_name" autocomplete="off" placeholder="Prénom" name="first_name">
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
                                        <label for="street">Rue :</label>
                                        <input type="name" class="form-control" id="street" autocomplete="off" placeholder="Rue" name="street">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="number">Numéro :</label>
                                        <input type="number" class="form-control" id="number" autocomplete="off" placeholder="Numéro" name="number">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="letter">Lettre :</label>
                                        <input type="mail" class="form-control" id="letter" autocomplete="off" placeholder="Lettre" name="letter">
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
                                        <label for="apartment_number">Numéro de l’appartement :</label>
                                        <input type="name" class="form-control" id="apartment_number" autocomplete="off" placeholder="Numéro de l’appartement" name="apartment_number">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="floor">Etage :</label>
                                        <input type="name" class="form-control" id="floor" autocomplete="off" placeholder="Etage" name="floor">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="bus">Boîte :</label>
                                        <input type="name" class="form-control" id="bus" autocomplete="off" placeholder="Boîte" name="bus">
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
                                        <label for="township">Localité :</label>
                                        <input type="name" class="form-control" id="township" autocomplete="off" placeholder="Localité" name="township">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="postcode">Code postal :</label>
                                        <input type="name" class="form-control" id="postcode" autocomplete="off" placeholder="Code postal " name="postcode">
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
                                        <label for="">Langue (entourez) : NL / FR</label>

                                    </div>
                                </div>
                                <div class="col-6">

                                    <div class="form-group">
                                        <label for="gsm">GSM :</label>
                                        <input type="name" class="form-control" id="gsm" autocomplete="off" placeholder="Gsm" name="gsm">
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
                                        <input type="mail" class="form-control" id="mail" autocomplete="off" placeholder="Mail" name="mail">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="id_card_number">Numéro de carte d’identité :</label>
                                        <input type="text" class="form-control" id="id_card_number" autocomplete="off" placeholder="Numéro de carte d’identité " name="id_card_number">
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
                                        <label for="orange_customer_number">N° de client Orange :</label>
                                        <input type="text" class="form-control" id="orange_customer_number" autocomplete="off" placeholder="N° de client Orange :" name="orange_customer_number">
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
                                        <label for="name_of_your_current_provider">Nom de votre fournisseur actuel pour les services Internet & TV :</label>
                                        <input type="text" class="form-control" id="name_of_your_current_provider" autocomplete="off" placeholder="Nom de votre fournisseur actuel pour les services Internet & TV :" name="name_of_your_current_provider">
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
                                        <label for="customer_number_at_your_current_supplier">Numéro de client chez votre fournisseur actuel pour les services Internet & TV (seulement si Telenet) :</label>
                                        <input type="text" class="form-control" id="customer_number_at_your_current_supplier" autocomplete="off" placeholder="Numéro de client chez votre fournisseur actuel pour les services Internet & TV (seulement si Telenet) :" name="customer_number_at_your_current_supplier">
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
                                        <input class="form-check-input" type="radio" name="extra_decoder" value="0">
                                        <label for="extra_decoder" class="form-label">1<span class="text-danger">*</span></label>

                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="extra_decoder" value="1">
                                        <label for="extra_decoder" class="form-label">2<span class="text-danger">*</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="extra_decoder" value="2">
                                        <label for="extra_decoder" class="form-label">3<span class="text-danger">*</span></label>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-6">

                                    <h5>Internet boost*?</h5>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="internet_boost" value="0">
                                        <label for="internet_boost" class="form-label">Oui<span class="text-danger">*</span></label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="internet_boost" value="1">
                                        <label for="internet_boost" class="form-label">Non<span class="text-danger">*</span></label>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </section>
                    <div class="section">
                        <div class="container">
                            <div class="migratiemandaat">
                                <h4>Dates et heures de préférence pour l’installation</h4>
                            </div>Transfert de services internet et/ou TV
                            <h2 class="card-title">Dates et heures de préférence pour l’installation.</h2>
                            <div class="row">
                                <div class="col-3">
                                    <h2 class="card-title">DATE 1:</h2>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">

                                        <input type="date" class="form-control" id="id_card_number_d1" autocomplete="off" placeholder="DATES AND TIMES " name="id_card_number_d1">
                                    </div>

                                </div>
                                <div class="col-5">
                                    <p>matin (8h-13h) / après midi (12h-18h) / soir (17h-20h**)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-3">
                                    <h2 class="card-title">Date 2:</h2>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">

                                        <input type="date" class="form-control" id="id_card_number_d2" autocomplete="off" placeholder="DATES AND TIMES " name="id_card_number_d2">
                                    </div>

                                </div>
                                <div class="col-5">
                                    <p>matin (8h-13h) / après midi (12h-18h) / soir (17h-20h**)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-3">
                                    <h2 class="card-title">Date 3:</h2>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">

                                        <input type="date" class="form-control" id="id_card_number_d3" autocomplete="off" placeholder="DATES AND TIMES" name="id_card_number_d3">
                                    </div>

                                </div>
                                <div class="col-5">
                                    <p>matin (8h-13h) / après midi (12h-18h) / soir (17h-20h**)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container-fluid">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Infos additionnelles pour l’installateur (optionnel)</label>
                                <h6></h6>
                                <textarea class="form-control" name="additional_information" values="additional_information" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" id="file" autocomplete="off" placeholder="images" name="file">
                            </div>

                            <div class="mb-3" style="font-size: 12px">
                                sous réserve de disponibilité à votre domicile
                            </div>
                            <div class="mb-3" style="font-size: 12px">
                                **Pour toute demande d’installation le soir entre 17h et 20h
                            </div>
                            <div class="mb-3" style="font-size: 12px">
                                et le samedi entre 8h et 18h, un supplément de 30 euros s’applique
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="migratiemandaat">
                                <h2>Mandat de migration pour services de ligne fixe et portabilité de numéro</h2>
                                <h4>Vos données personnelles</h4>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="customer_number">Numéro de client :</label>
                                        <input type="text" class="form-control" id="customer_number" autocomplete="off" placeholder="Numéro de client :" name="customer_number">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="customer_type">Type de client :</label>
                                        <input type="name" class="form-control" id="customer_type" autocomplete="off" placeholder="Type de client :" name="customer_type">
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
                                        <label for="title">Titre :</label>
                                        <input type="text" class="form-control" id="title" autocomplete="off" placeholder="Titre :" name="title">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="language">Langue :</label>
                                        <input type="name" class="form-control" id="language" autocomplete="off" placeholder="Langue :" name="language">
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
                                        <label for="first_name_1">Prénom :</label>
                                        <input type="text" class="form-control" id="first_name_1" autocomplete="off" placeholder="Prénom :" name="first_name_1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="name_1">Nom :</label>
                                        <input type="name" class="form-control" id="name_1" autocomplete="off" placeholder="Nom :" name="name_1">
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
                                        <label for="date_of_birth">Date de naissance :</label>
                                        <input type="date" class="form-control" id="date_of_birth" autocomplete="off" placeholder="Date de naissance" name="date_of_birth">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="number_identiteitskaart">Numéro de la carte d’identité :</label>
                                        <input type="name" class="form-control" id="number_identiteitskaart" autocomplete="off" placeholder="Numéro de la carte d’identité :" name="number_identiteitskaart">
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
                                        <label for="telephone">Téléphone :</label>
                                        <input type="text" class="form-control" id="telephone" autocomplete="off" placeholder="Téléphone :" name="telephone">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="email_address">Adresse mail :</label>
                                        <input type="name" class="form-control" id="email_address" autocomplete="off" placeholder="Adresse mail :" name="email_address">
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
                                        <label for="street_1">Rue :</label>
                                        <input type="text" class="form-control" id="street_1" autocomplete="off" placeholder="Rue :" name="street_1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="number_1">Numéro :</label>
                                        <input type="name" class="form-control" id="number_1" autocomplete="off" placeholder="Numéro :" name="number_1">
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
                                        <label for="postcode_1">Code postale :</label>
                                        <input type="text" class="form-control" id="postcode_1" autocomplete="off" placeholder="Code postale" name="postcode_1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="place">Localité :</label>
                                        <input type="name" class="form-control" id="place" autocomplete="off" placeholder="Localité" name="place">
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
                                        <label for="vat_number">Numéro de TVA :</label>
                                        <input type="text" class="form-control" id="vat_number" autocomplete="off" placeholder="Numéro de TVA " name="vat_number">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="migratiemandaat">
                                <h4>
                                    Transfert de services internet et/ou TV
                                </h4>

                                <div class="form-check">

                                    <input class="form-check-input" type="radio" name="care_of_the_automatic_migration" value="0">
                                    <label for="extra_decoder" class="form-label"><span style="font-weight: bold">Je souhaite utiliser</span> le service Easy Switch. Orange prend soin de la migration et de la résiliation
                                        mentionnée ci-dessous auprès de votre opérateur d’origine</label>
                                </div>
                                <div class="form-check">

                                    <input class="form-check-input" type="radio" name="care_of_the_automatic_migration" value="1">
                                    <label for="extra_decoder" class="form-label"><span style="font-weight: bold">Je souhaite utiliser</span> le service Easy Switch. Orange prend soin de la migration et de la résiliation
                                        mentionnée ci-dessous auprès de votre opérateur d’origine</label>
                                </div>
                            </div>


                            <div class="migratiemandaat">
                                <h4>Données de l’opérateur d’origine
                                </h4>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="operator_name">Nom de l’opérateur Easy Switch :</label>
                                        <input type="text" class="form-control" id="operator_name" autocomplete="off" placeholder="Nom de l’opérateur Easy Switch :" name="operator_name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="client_number">Numéro de client :</label>
                                        <input type="name" class="form-control" id="client_number" autocomplete="off" placeholder="Numéro de client :" name="client_number">
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="easy_switch_id">Easy Switch ID :</label>
                                        <input type="text" class="form-control" id="easy_switch_id" autocomplete="off" placeholder="Easy Switch ID :" name="easy_switch_id">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="migratiemandaat">
                                <h4>Numéros fixes
                                </h4>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="call_number_1">Numéro d’appel :</label>
                                        <input type="text" class="form-control" id="call_number_1" autocomplete="off" placeholder="Numéro d’appel" name="call_number_1">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check topper">

                                        <input class="form-check-input" type="radio" name="stopping_5" value="0">
                                        <label for="extra_decoder" class="form-label"><span style="">Supprimer (Uniquement applicable avec Easy Switch)</span> </label>
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
                                        <label for="call_number_2">Numéro d’appel :</label>
                                        <input type="text" class="form-control" id="call_number_2" autocomplete="off" placeholder="Call number" name="call_number_2">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check topper">
                                        <input class="form-check-input" type="radio" name="stopping_5" value="1">
                                        <label for="extra_decoder" class="form-label">Supprimer (Uniquement applicable avec Easy Switch)</label>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <div class="container">
                            <div class="migratiemandaat">
                                <h4>Numéros mobiles
                                </h4>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="call_number_3">Numéro d’appel</label>
                                        <input type="text" class="form-control" id="call_number_3" autocomplete="off" placeholder="Numéro d’appel :" name="call_number_3">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check topper">
                                        <input class="form-check-input" type="radio" name="stopping_3" value="0">
                                        <label for="extra_decoder" class="form-label"><span style="">Transférer vers Orange</span> </label>
                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="form-check topper">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="stopping_3" value="1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Supprimer
                                                (Uniquement applicable avec Easy Switch)
                                            </label>
                                        </div>
                                    </div>

                                </div>



                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="sim_number">Numéro SIM opérateur d’origine</label>
                                        <input type="text" class="form-control" id="sim_number" autocomplete="off" placeholder="Numéro SIM opérateur d’origine " name="sim_number">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="original_operator">Opérateur d’origine :</label>
                                        <input type="text" class="form-control" id="original_operator" autocomplete="off" placeholder="Opérateur d’origine" name="original_operator">
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="desired_transfer_date">Date de portage souhaitée :</label>
                                        <input type="text" class="form-control" id="desired_transfer_date" autocomplete="off" placeholder="Date de portage souhaitée " name="desired_transfer_date">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check topper">

                                        <input class="form-check-input" type="radio" name="immediately" value="0">
                                        <label for="extra_decoder" class="form-label"><span>Immédiatement</span> </label>
                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="form-check topper">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="immediately" value="1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                À la date d’installation d’ Internet + TV
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
                                        <label for="call_number_5">Numéro d’appel :</label>
                                        <input type="text" class="form-control" id="call_number_5" autocomplete="off" placeholder="Oproepnummer" name="call_number_5">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check topper">

                                        <input class="form-check-input" type="radio" name="transfer_to_orange" value="0">
                                        <label for="extra_decoder" class="form-label"><span>Transférer vers Orange</span> </label>
                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="form-check topper">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="transfer_to_orange" value="1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Supprimer (Uniquement applicable avec Easy Switch)
                                            </label>
                                        </div>
                                    </div>

                                </div>



                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="sim_number_2">Numéro SIM opérateur d’origine :</label>
                                        <input type="text" class="form-control" id="sim_number_2" autocomplete="off" placeholder="Numéro SIM opérateur d’origine  " name="sim_number_2">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="original_operator_1">Opérateur d’origine :</label>
                                        <input type="text" class="form-control" id="original_operator_1" autocomplete="off" placeholder="Opérateur d’origine  " name="original_operator_1">
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="desired_transfer_date_1">Date de portage souhaitée :</label>
                                        <input type="text" class="form-control" id="desired_transfer_date_1" autocomplete="off" placeholder="Date de portage souhaitée " name="desired_transfer_date_1">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check topper">
                                        <input class="form-check-input" type="radio" name="Stopping" value="0">
                                        <label for="extra_decoder" class="form-label"><span>Immédiatemen</span> </label>
                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="form-check topper">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="Stopping" value="1">
                                            <label for="extra_decoder" class="form-label"><span> À la date d’installation d’ Internet + TV</span> </label>
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
                                        <label for="call_number_6">Numéro d’appel :</label>
                                        <input type="text" class="form-control" id="call_number_6" autocomplete="off" placeholder="Numéro d’appel" name="call_number_6">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check topper">
                                        <input class="form-check-input" type="radio" name="transfer_to_orange_4" value="0">
                                        <label for="extra_decoder" class="form-label"> <span style="">Transférer vers Orange</span></label>
                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="form-check topper">
                                        <input class="form-check-input" type="radio" name="transfer_to_orange_4" value="1">
                                        <label for="extra_decoder" class="form-label"> <span style="">Supprimer
                                                (Uniquement applicable avec Easy Switch)</span></label>
                                    </div>

                                </div>



                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="sim_number_3">Numéro SIM opérateur d’origine :</label>
                                        <input type="text" class="form-control" id="sim_number_3" autocomplete="off" placeholder="Numéro SIM opérateur d’origine" name="sim_number_3">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="original_operator_2">Opérateur d’origine :</label>
                                        <input type="text" class="form-control" id="original_operator_2" autocomplete="off" placeholder="Opérateur d’origine" name="original_operator_2">
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="desired_transfer_date_2">Date de portage souhaitée :</label>
                                        <input type="text" class="form-control" id="desired_transfer_date_2" autocomplete="off" placeholder="Date de portage souhaitée" name="desired_transfer_date_2">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check topper">


                                        <input class="form-check-input" type="radio" name="immediately_3" value="0">
                                        <label for="extra_decoder" class="form-label"> <span style="">Immédiatement</span></label>
                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="form-check topper">
                                        <input class="form-check-input" type="radio" name="immediately_3" value="1">
                                        <label for="extra_decoder" class="form-label"> <span style="">À la date d’installation
                                                d’ Internet + TV</span></label>
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
                                        <label for="call_number_7">Numéro d’appel :</label>
                                        <input type="text" class="form-control" id="call_number_7" autocomplete="off" placeholder="Numéro d’appel" name="call_number_7">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check topper">
                                        <input class="form-check-input" type="radio" name="transfer_to_orange_2" value="0">
                                        <label for="extra_decoder" class="form-label"> <span style="">Transférer vers Orange</span></label>
                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="form-check topper">

                                        <input class="form-check-input" type="radio" name="transfer_to_orange_2" value="1">
                                        <label for="extra_decoder" class="form-label"> <span style="">Supprimer
                                                (Uniquement applicable avec Easy Switch)</span></label>
                                    </div>

                                </div>



                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="sim_number_4">Numéro SIM opérateur d’origine :</label>
                                        <input type="text" class="form-control" id="sim_number_4" autocomplete="off" placeholder="Numéro SIM opérateur d’origine" name="sim_number_4">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="original_operator_3">Opérateur d’origine :</label>
                                        <input type="text" class="form-control" id="original_operator_3" autocomplete="off" placeholder="Oorspronkelijke operator" name="original_operator_3">
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="transfer_date_3">Date de portage souhaitée :</label>
                                        <input type="text" class="form-control" id="transfer_date_3" autocomplete="off" placeholder="Date de portage souhaitée" name="transfer_date_3">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check topper">
                                        <input class="form-check-input" type="radio" name="immediately_4" value="0">
                                        <label for="extra_decoder" class="form-label"> <span style="">Immédiatement</span></label>
                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="form-check topper">


                                        <input class="form-check-input" type="radio" name="immediately_4" value="1">
                                        <label for="extra_decoder" class="form-label"> <span style="">À la date d’installation
                                                d’ Internet + TV</span></label>
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
                                        <label for="call_number_8">Numéro d’appel :</label>
                                        <input type="text" class="form-control" id="call_number_8" autocomplete="off" placeholder="Numéro d’appel" name="call_number_8">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check topper">

                                        <input class="form-check-input" type="radio" name="transfer_to_orange_3" value="0">
                                        <label for="extra_decoder" class="form-label"> <span style="">Transférer vers Orange</span></label>
                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="form-check topper">

                                        <input class="form-check-input" type="radio" name="transfer_to_orange_3" value="1">
                                        <label for="extra_decoder" class="form-label"> <span style="">Supprimer
                                                (Uniquement applicable avec Easy Switch)</span></label>
                                    </div>

                                </div>



                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="sim_number_5">Numéro SIM opérateur d’origine :</label>
                                        <input type="text" class="form-control" id="sim_number_5" autocomplete="off" placeholder="Numéro SIM opérateur d’origine " name="sim_number_5">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="original_operator_4">Opérateur d’origine :</label>
                                        <input type="text" class="form-control" id="original_operator_4" autocomplete="off" placeholder="Opérateur d’origine" name="original_operator_4">
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="desired_transfer_date_4">Date de portage souhaitée :</label>
                                        <input type="text" class="form-control" id="desired_transfer_date_4" autocomplete="off" placeholder="Date de portage souhaitée" name="desired_transfer_date_4">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check topper">
                                        <input class="form-check-input" type="radio" name="immediately_5" value="0">
                                        <label for="extra_decoder" class="form-label"> <span style="">Immédiatement</span></label>
                                    </div>

                                </div>

                                <div class="col-3">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="immediately_5" value="1">
                                        <label for="extra_decoder" class="form-label">À la date d’installation d’ Internet + TV<span class="text-danger">*</span></label>

                                    </div>

                                </div>
                            </div>
                            <div class="migratiemandaat">
                                <h4>
                                    Information
                                </h4>
                                <p>
                                    Selon la loi, la perte de service téléphonique fourni à l’abonné pendant la procédure de transfert du numéro ne peut dépasser 1 jour ouvrable. Vous devez
                                    convenir d’une date spécifique pour le transfert du numéro avec votre opérateur. Si le transfert prend plus d’un jour ouvrable après l’activation du service de
                                    téléphonie ou si la date convenue n’est pas respectée, vous avez droit à une compensation. Veuillez vous adresser à cet effet à votre nouvel opérateur. Pour
                                    plus d’informations sur votre droit à une compensation en cas de retard dans le transfert du numéro, veuillez consulter le lien suivant : www.ibpt.be/np.
                                </p>
                                <p>Le transfert de numéro et de service de ligne fixe vers Orange ne vous dispense pas de l’obligation de respecter votre contrat auprès de votre opérateur
                                    d’origine, à défaut de payer des intérêts moratoires ou des dommages à l’opérateur
                                    Le service de téléphonie fixe ou mobile peut ne pas être disponible chez votre opérateur actuel sans combinaison avec un service internet ou télévision.
                                    Dans un tel cas, la résiliation du service internet ou télévision peut signifier l’annulation automatique du service de téléphonie fixe ou mobile et la perte de vos
                                    numéros de téléphone. Nous vous invitons à consulter le site internet de votre opérateur actuel pour connaître les détails. <br>En cas d’absence de visite du technicien dans la plage horaire convenue, vous avez droit à une compensation de 10 euros. Pour plus d’information consultez www.orange.be/easyswitch.</p>

                                <p>Le client autorise Orange à résilier à son nom le contrat existant relatif aux services et numéros mentionnés ci-dessus auprès de l’opérateur d’origine et les
                                    transférer vers Orange. Le transfert est uniquement possible que si le client avise les données correctes et complètes et que l’opérateur d’origine déclare
                                    cette application valide. En signant ce document, vous acceptez les termes et conditions d’Orange et Easy Switch. Seule la personne qui a souscrit à
                                    l’opérateur d’origine peut signer ce document.</p>
                            </div>
                        </div>
                    </div>

                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="call_number_9">Etabli en deux exemplaires à :</label>
                                        <input type="text" class="form-control" id="call_number_9" autocomplete="off" placeholder="Etabli en deux exemplaires à" name="call_number_9">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="op">le :</label>
                                        <input type="text" class="form-control" id="op" autocomplete="off" placeholder="on" name="op">
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="signature">Signature :</label>
                                        <input type="file" class="form-control" id="file_1" autocomplete="off" placeholder="Signature" name="file_1">
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