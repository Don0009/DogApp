@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">

            <img style="text-align:left;" class="img-responsive rounded mx-auto d-block m3-5" src="{{ asset('images/brands/scarlet.PNG') }}" alt="">

            <h3 style="color: blacked; text-align:center"> Scarlet</h3>
            <h3 style="color: blacked; text-align:center">
                Formulaire de demande</h3>
            <p style="text-align:left"><b>A. Vos coordonnées client </b>(veuillez compléter ce formulaire en majuscules svp)</p>
            <form class="forms-sample" method="POST" action="{{ route('application_form.store') }}">
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
                            <label for="f_name" class="form-label">Prénom<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('f_name') is-invalid @enderror" id="f_name" autocomplete="off" placeholder="Prénom" name="f_name" value="{{ old('f_name') }}" required>
                            @error('f_name')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mt-2">
                            <label for="name" class="form-label">Nom:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Nom" name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="id_card_number" class="form-label">N° de carte d’identité:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('Id_card_number') is-invalid @enderror" id="name" autocomplete="off" placeholder="Nom" name="id_card_number" value="{{ old('id_card_number') }}" required>
                    @error('id_card_number')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <label for="adress" class="form-label">Adresse<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('adress') is-invalid @enderror" id="name" autocomplete="off" placeholder="Adress" name="adress" value="{{ old('adress') }}" required>
                            @error('adress')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="no" class="form-label">N°:<span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('no') is-invalid @enderror" id="name" autocomplete="off" placeholder="N°" name="no" value="{{ old('no') }}" required>
                            @error('no')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="box" class="form-label">Boite:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('box') is-invalid @enderror" id="name" autocomplete="off" placeholder="N°" name="box" value="{{ old('box') }}" required>
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
                            <label for="postal_code" class="form-label">Code Postale<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Postal Code" name="postal_code" value="{{ old('postal_code') }}" required>
                            @error('postal_code')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="commune" class="form-label">Commune<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('commune') is-invalid @enderror" id="commune" autocomplete="off" placeholder="commune" name="commune" value="{{ old('commune') }}" required>
                            @error('commune')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-2">
                            <p>Type d’habitat:<span class="text-danger">*</span> </p>
                        </div>
                        <div class="col-4">
                            <input type="radio" name="type_of_habitat" value="1">
                            <label for="type_of_habitat" class="form-label">Maison</label>
                            <input type="radio" name="type_of_habitat" value="2">
                            <label for="type_of_habitat" class="form-label">Appartement</label>
                        </div>
                        <div class="col-1">
                            <p>étage:<span class="text-danger">*</span></p>
                        </div>
                        <div class="col-5">
                            <input type="text" class="form-control @error('stage') is-invalid @enderror" id="stage" autocomplete="off" placeholder="étage" name="stage" value="{{ old('stage') }}" required>
                            @error('stage')
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
                            <label for="phone" class="form-label">Téléphone<span class="text-danger">*</span></label>
                            <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" autocomplete="off" placeholder="Téléphone" name="phone" value="{{ old('phone') }}" required>
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
                            <label for="date_of_birth">Date de naissance<span class="text-danger">*</span></label>
                            <input class="form-control @error('date_of_birth') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date">
                        </div>
                        <div class="col-1 mt-4">
                            <p>Sexe</p>
                        </div>
                        <div class="col-2 mt-4">
                            <input type="radio" name="gender" value="1">
                            <label for="gender" class="form-label">M</label>
                            <input type="radio" name="gender" value="2">
                            <label for="gender" class="form-label">F</label>
                        </div>
                        <div class="col-1 mt-4">
                            <p>Langue:</p>
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
                        <div class="col-6">
                            <label for="society" class="form-label">Societe:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('society') is-invalid @enderror" id="commune" autocomplete="off" placeholder="Societe" name="society" value="{{ old('society') }}" required>
                            @error('mail')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="vat" class="form-label">TVA:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('TVA') is-invalid @enderror" id="vat" autocomplete="off" placeholder="TVA" name="vat" value="{{ old('vat') }}" required>
                            @error('vat')
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
                            <input type="checkbox" name="internet_connection" value="1">
                            <label for="internet_connection" class="form-label">Je possède déjà une connexion internet</label>
                        </div>
                        <div class="col-2">
                            <p>Opérateur :<span class="text-danger">*</span></p>
                        </div>
                        <div class="col-4">
                            <input type="text" class="form-control @error('operator') is-invalid @enderror" id="operator" autocomplete="off" placeholder="Opérateur" name="operator" value="{{ old('operator') }}" required>
                            @error('operator')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <p><b>Attention!</b> Scarlet Trio n’est pas approprié pour raccorder des lignes téléphoniques du type ISDN, des centrales d’alarmes, des modems
                        dial-up, des terminaux de paiement, des centrales téléphoniques et des fax, alors uniquement l’option ‘nouvelle paire de cuivre’ est possible
                        – (Téléphonez le 0800-84-112).
                    </p>
                </div>

                <div class="mt-3">
                    <h4 style="text-align:center"><b>B. Votre abonnement </b></h4>
                </div>
                <div class="mt-2">
                    <p class="text-justify "><input type="radio" name="your_subscription" class="mr-2" value="1">Oui, je prends <b>Scarlet Loco</b> (Internet³) avec ou sans ligne téléphonique existante à € 32 TVA incl. par mois. (Frais uniques
                        de 50€ pour l’activation de la ligne)</p>
                </div>
                <div class="mt-2">
                    <p class="text-justify"><input type="radio" name="your_subscription" class="mr-2" value="2">Oui, je prends <b>Scarlet Internet&Téléphonie²</b> avec ou sans ligne téléphonique existante à € 39 TVA incl. par mois.(Frais
                        unique de 50€ pour l’activation de la ligne)</p>
                </div>
                <div class="mt-2">
                    <p class="text-justify"><input type="radio" name="your_subscription" class="mr-2" value="3">Oui, je prends <b>Scarlet Trio</b> (Internet + Téléphony + TVD²³) avec ou sans ligne téléphonique existante à € 40 TVA incl.
                        par mois</p>
                </div>

                <div class="mt-4">
                    <h5 style="text-align:center"><b>Options mensuelles (Trio et Internet&Téléphonie) </b></h5>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" name="telephony_day_1" value="1">
                            <label for="telephony_day_1" class="form-label">Téléphonie nationale gratuite 24h/24h</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" name="telephony_day_2" value="1">
                            <label for="telephony_day_2" class="form-label">€5</label>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" name="telephony_hour_1" value="1">
                            <label for="telephony_hour_1" class="form-label">Téléphonie nationale mobile gratuite (heures creuses)</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" name="telephony_hour_2" value="1">
                            <label for="telephony_hour_2" class="form-label">€5</label>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" name="mobile_tele_day_1" value="1">
                            <label for="mobile_tele_day_1" class="form-label">Téléphonie nationale mobile gratuite (24h/24h) </label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" name="mobile_tele_day_2" value="1">
                            <label for="mobile_tele_day_2" class="form-label">€10</label>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" name="fixe_telephony_hour_1" value="1">
                            <label for="fixe_telephony_hour_1" class="form-label">Téléphonie internationale fixe gratuite (heures creuses²)</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" name="fixe_telephony_hour_2" value="1">
                            <label for="fixe_telephony_hour_2" class="form-label">€ 5</label>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" name="decoder_1" value="1">
                            <label for="decoder_1" class="form-label">2
                                eme décodeur</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" name="decoder_2" value="1">
                            <label for="decoder_2" class="form-label">€ 4</label>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="checkbox" name="allsport_1" value="1">
                            <label for="allsport_1" class="form-label">All sports</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" name="allsport_2" value="1">
                            <label for="allsport_2" class="form-label"> € 16,99</label>
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <input type="radio" name="movies_series_1" value="1">
                            <label for="movies_series_1" class="form-label">Movies & Series Pass FR</label>
                            <input type="radio" name="movies_series_1" value="2">
                            <label for="movies_series_1" class="form-label">Movies & Series Pass FR</label>
                        </div>
                        <div class="col-6">
                            <input type="checkbox" name="movies_series_2" value="1">
                            <label for="movies_series_2" class="form-label">€ 10,99
                            </label>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-5">
                            <h6><b>Total des coûts mensuel TVA incl.</b></h6>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">€</span>
                                <input type="text" class="form-control @error('total_monthly_costs_vat') is-invalid @enderror" id="total_monthly_costs_vat" autocomplete="off" placeholder="Total des coûts uniques TVA incl" name="total_monthly_costs_vat" value="{{ old('total_monthly_costs_vat') }}" required>
                                @error('total_monthly_costs_vat')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="total_one_time_costs_vat" class="form-label">Total des coûts uniques TVA incl:<span class="text-danger">*</span></label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">€</span>
                        <input type="number" class="form-control @error('total_one_time_costs_vat') is-invalid @enderror" id="vat" autocomplete="off" placeholder="Total des coûts uniques TVA incl" name="total_one_time_costs_vat" value="{{ old('total_one_time_costs_vat') }}" required>
                        @error('total_one_time_costs_vat')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="mt-2">
                    <div class="row">
                        <p><b>TV Digitale</b> : Je désire bénéficier de la liste des chaînes
                            <input type="radio" name="digital_tv" value="1">
                            <label for="language" class="form-label">NL</label>
                            <input type="radio" name="digital_tv" value="2">
                            <label for="language" class="form-label">FR</label>
                        </p>
                    </div>
                </div>

                <div class="mt-2">
                    <h4 style="text-align:center"><b>C. Votre numéro de téléphonie fixe</b></h4>
                </div>
                <div class="mt-2">
                    <input type="radio" name="type_number" value="1">
                    <label for="type_number" class="form-label">Je souhaite un nouveau numéro de téléphone.
                    </label>
                    <br>
                    <input type="radio" name="type_number" value="2">
                    <label for="type_number" class="form-label">Je souhaite garder mon numéro de téléphone actuel</label>
                </div>
                <div class="mt-1">
                    <p class="ml-5">Veuillez compléter le document ci-joint, « Autorisation pour la portabilité du numéro fixe »</p>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-3">
                            <p class="ml-5">Numéro de téléphone actuel:</p>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control @error('current_phone_number') is-invalid @enderror mr-10" id="commune" autocomplete="off" placeholder="Societe" name="current_phone_number" value="{{ old('current_phone_number') }}" required>
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <div class="col-6">
                        <label for="obt" class="form-label ml-5">Opérateur:</label>
                        <input type="radio" name="obt" class="ml-2" value="1">
                        <label for="obt" class="form-label ml-2">Belgacom </label>
                        <input type="radio" name="obt" class="ml-2" value="2">
                        <label for="obt" class="form-label ml-2">Telenet</label>
                        <input type="radio" name="obt" class="ml-2" value="3">
                    </div>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <label for="vat" class="form-label">Autres:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('other') is-invalid @enderror" id="vat" autocomplete="off" placeholder="other" name="other" value="{{ old('other') }}" required>
                            @error('other')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="vat" class="form-label">Numéro de client:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('client_number') is-invalid @enderror" id="client_number" autocomplete="off" placeholder="Numéro de client" name="client_number" value="{{ old('client_number') }}" required>
                            @error('vat')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <p><input type="radio" name="type_number" class="mr-2" value="2">Je souhaite que mon numéro de Téléphone ne soit pas mentionné dans les pages blanches</p>
                </div>
                <div class="mt-4">
                    <h4 style="text-align:center"><b>D. Installation</b></h4>
                </div>
                <div class="mt-2">
                    <p>Si l’adresse d’installation ne correspond pas à l’adresse de vos données personnelles, prière de remplir l’adresse d’installation
                        ci-dessous</p>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <label for="install_adress" class="form-label">Adresse<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('install_adress') is-invalid @enderror" id="name" autocomplete="off" placeholder="Adress" name="install_adress" value="{{ old('install_adress') }}" required>
                            @error('install_adress')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="install_no" class="form-label">N°:<span class="text-danger">*</span></label>
                            <input type="no" class="form-control @error('install_no') is-invalid @enderror" id="install_no" autocomplete="off" placeholder="N°" name="install_no" value="{{ old('install_no') }}" required>
                            @error('install_no')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="install_box" class="form-label">Boite:<span class="text-danger">*</span></label>
                            <input type="install_box" class="form-control @error('install_box') is-invalid @enderror" id="install_box" autocomplete="off" placeholder="Boite" name="install_box" value="{{ old('install_box') }}" required>
                            @error('install_box')
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
                            <label for="install_postal_code" class="form-label">Code Postale<span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('install_postal_code') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Postal Code" name="install_postal_code" value="{{ old('install_postal_code') }}" required>
                            @error('postal_code')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="install_commune" class="form-label">Commune<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('install_commune') is-invalid @enderror" id="install_commune" autocomplete="off" placeholder="commune" name="install_commune" value="{{ old('install_commune') }}" required>
                            @error('install_commune')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h4 style="text-align:center"><b>E. Mode de paiement
                        </b></h4>
                </div>
                <div class="mt-2">
                    <input type="radio" name="payment_method" value="1">
                    <label for="payment_method" class="form-label">Je crée un mandat pour domiciliation en utilisant les données bancaires suivantes :
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
                            <label for="name_account_holder" class="form-label">Nom du titulaire du compte :<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name_account_holder') is-invalid @enderror" id="name_account_holder" autocomplete="off" placeholder="commune" name="name_account_holder" value="{{ old('name_account_holder') }}" required>
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
                    <label for="payment_method" class="form-label">Je souhaite payer via virement bancaire:
                    </label>
                </div>
                <div class="mt-4">
                    <h4 style="text-align:center"><b>F. Conditions
                        </b></h4>
                </div>
                <p class="test-justify mt-3">Les coordonnées communiquées dans ce contexte sont enregistrées dans la base de données de Scarlet Rue Carli 2, 1140 Evere.
                    Ces données sont traitées par Scarlet dans le cadre de l’administration de la clientèle, des études de marché et dans l’optique de
                    l’organisation de campagnes publicitaires et d’information personnalisées relatives aux produits et services de Scarlet et/ou de
                    tiers. Vous avez le droit de demander à tout moment une copie de vos données à caractère personnel pour vérifier l’exactitude des
                    informations qui sont conservées et/ou pour les corriger ou les mettre à jour.
                </p>
                <div class="mt-2">
                    <p>Si vous accordez le droit à Scarlet d’utiliser vos coordonnées communiquées pour les raisons mentionnées ci-dessus, veuillez
                        cocher cette case<input type="checkbox" name="submitted_contact" class="ml-2" value="1"></p>
                </div>
                <div class="mt-3">
                    <p>Le Client reconnait avoir recu et accepté les conditions pour le service Scarlet Trio. </p>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <label for="made_in" class="form-label">Fait à:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('made_in') is-invalid @enderror" id="made_in" autocomplete="off" placeholder="Fait à" name="made_in" value="{{ old('made_in') }}" required>
                            @error('made_in')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="the" class="form-label">Le:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('the') is-invalid @enderror" id="the" autocomplete="off" placeholder="Le" name="the" value="{{ old('the') }}" required>
                            @error('the')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="contact_date" class="form-label">Date:<span class="text-danger">*</span></label>
                            <input class="form-control @error('contact_date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="contact_date" name="contact_date" value="{{ old('contact_date') }}" type="date">
                            @error('contact_date')
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
                            <label for="dealer_reference" class="form-label">Référence du dealer Scarlet:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('dealer_reference') is-invalid @enderror" id="dealer_reference" autocomplete="off" placeholder="Référence du dealer Scarlet" name="dealer_reference" value="{{ old('dealer_reference') }}" required>
                            @error('the')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="agent" class="form-label">Agent:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('agent') is-invalid @enderror" id="the" autocomplete="off" placeholder="Agent" name="agent" value="{{ old('agent') }}" required>
                            @error('agent')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <h4 style="text-align:center"><b>Autorisation pour la portabilité de numéro(s) fixe(s)
                        </b></h4>
                </div>
                <p class="text-justify">Veuillez compléter ce formulaire en majuscules, le signer et le renvoyer rapidement à Scarlet. Sans celui-ci vous ne
                    pourrez pas garder votre numéro.</p>
                <div class="mt-4">
                    <p>Votre (vos) numéro(s)
                    </p>
                </div>
                <div class="mt-2">
                    <label for="undersigned" class="form-label">Le soussigné<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('undersigned') is-invalid @enderror" id="undersigned" autocomplete="off" placeholder="Le soussigné" name="undersigned" value="{{ old('undersigned') }}" required>
                    @error('undersigned')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <p>titulaire du numéro susmentionné, donne l’autorisation à l’opérateur récipient, Scarlet Belgium sa, de procéder au transfert de ce numéro. Cette autorisation de transfert implique que le soussigné résilie son contrat d’abonnement téléphonique avec son opérateur actuel</p>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-6">
                            <label for="main_line" class="form-label">Ligne principale:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('main_line') is-invalid @enderror" id="main_line" autocomplete="off" maxlength="9" placeholder="Ligne principale" name="main_line" value="{{ old('main_line') }}" required>
                            @error('main_line')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="2nd_line" class="form-label">2e ligne:<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('2nd_line') is-invalid @enderror" id="2nd_line" autocomplete="off" maxlength="9" placeholder="2e ligne" name="2nd_line" value="{{ old('2nd_line') }}" required>
                            @error('2nd_line')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <p class="text-justify">Le signataire du présent document reconnaît qu’il assure l’entière responsabilité de l’exactitude des informations y
                        contenues et s’engage à indemniser l’abonné de tout dommage quelconque subi en raison de, ou à la suite de la présente
                        demande de portabilité. Le signataire indemnisera également le fournisseur de services de tout préjudice résultant d’une
                        réclamation de l’abonné en relation avec l’exécution de la présente demande de portabilité. Le signataire confirme qu’il est
                        mandaté pour signer cette autorisation de portabilité.
                    </p>
                </div>
                <div class="mt-3">
                    <p><b>Vos données</b></p>
                </div>
                <div class="mt-2">
                    <label for="holder_no" class="form-label">No du titulaire:<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('holder_no') is-invalid @enderror" id="holder_no" autocomplete="off" placeholder="No du titulaire" name="holder_no" value="{{ old('holder_no') }}" required>
                    @error('holder_no')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <p>Adresse d’installation du titulaire:</p>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-4">
                            <label for="street" class="form-label">Rue:<span class="text-danger">*</span></label>
                            <input type="name" class="form-control @error('street') is-invalid @enderror" id="street" autocomplete="off" placeholder="Rue" name="street" value="{{ old('street') }}" required>
                            @error('street')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="number" class="form-label">Numéro:<span class="text-danger">*</span></label>
                            <input type="name" class="form-control @error('number') is-invalid @enderror" id="number" autocomplete="off" placeholder="Numéro" name="number" value="{{ old('number') }}" required>
                            @error('number')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="add_box" class="form-label">Boite:<span class="text-danger">*</span></label>
                            <input type="install_box" class="form-control @error('add_box') is-invalid @enderror" id="add_box" autocomplete="off" placeholder="Boite" name="add_box" value="{{ old('add_box') }}" required>
                            @error('add_box')
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
                            <label for="add_postal_code" class="form-label">Code Postale<span class="text-danger">*</span></label>
                            <input type="postal_code" class="form-control @error('add_postal_code') is-invalid @enderror" id="add_postal_code" autocomplete="off" placeholder="Postal Code" name="add_postal_code" value="{{ old('add_postal_code') }}" required>
                            @error('add_postal_code')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="add_commune" class="form-label">Commune<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('add_commune') is-invalid @enderror" id="add_commune" autocomplete="off" placeholder="commune" name="add_commune" value="{{ old('add_commune') }}" required>
                            @error('add_commune')
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
                            <label for="vat_number" class="form-label">Numéro de TVA (si d’application):<span class="text-danger">*</span></label>
                            <input type="name" class="form-control @error('vat_number') is-invalid @enderror" id="vat_number" autocomplete="off" placeholder="Numéro de TVA (si d’application)" name="vat_number" value="{{ old('vat_number') }}" required>
                            @error('vat_number')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="current_operator" class="form-label">Opérateur actuel:<span class="text-danger">*</span></label>
                            <input type="name" class="form-control @error('current_operator') is-invalid @enderror" id="current_operator" autocomplete="off" placeholder="Numéro" name="current_operator" value="{{ old('current_operator') }}" required>
                            @error('current_operator')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="cus_number" class="form-label">Numéro de client chez l’opérateur actuel:<span class="text-danger">*</span></label>
                            <input type="install_box" class="form-control @error('cus_number') is-invalid @enderror" id="cus_number" autocomplete="off" placeholder="Numéro de client chez l’opérateur actuel" name="cus_number" value="{{ old('cus_number') }}" required>
                            @error('cus_number')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <p>(Pour connaître votre numéro de client Belgacom, formez le 078 15 05 65. Si vous n’appelez pas de chez vous,
                        l’opérateur/opératrice Belgacom vous demandera votre date de naissance.)
                    </p>
                </div>
                <div class="mt-2">
                    <p><b>Ce formulaire reste valable 3 mois après la date de la signature</b></p>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-4">
                            <label for="contact_date_1" class="form-label">Date:<span class="text-danger">*</span></label>
                            <input class="form-control @error('contact_date_1') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="contact_date_1" name="contact_date_1" value="{{ old('contact_date_1') }}" type="date">
                            @error('contact_date_1')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
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