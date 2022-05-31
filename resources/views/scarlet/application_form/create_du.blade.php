@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div>
                    <img style="text-align:left;" class="img-responsive rounded mx-auto d-block m3-5"
                        src="{{ asset('images/brands/scarlet.PNG') }}" alt="">

                    <h3 style="color: blacked; text-align:center">Scarlet</h3>
                    <h3 style="color: blacked; text-align:center">
                        Bestelformulier</h3>
                    <p style="text-align:left"><b>A. Bestelformulier </b> (gelieve dit formulier in drukletters in te vullen
                        aub)
                    </p>
                </div>
                <form class="forms-sample" method="POST" action="{{ route('application_form.store') }}">
                    @csrf()
                    <div class="form-group">
                        <input required type="hidden" name="form_lang" value="{{ $lang }}">
                    </div>
                    <div class="row mb-5">
                        <div class="col-6">
                            <label for="f_name" class="form-label">Voornaam<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('f_name') is-invalid @enderror" id="f_name"
                                autocomplete="off" placeholder="Voornaam" name="f_name" value="{{ old('f_name') }}"
                                required>
                            @error('f_name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-6">

                            <label for="name" class="form-label">Familienaam :<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                autocomplete="off" placeholder="Familienaam" name="name" value="{{ old('name') }}"
                                required>
                            @error('name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>
                    <div class="mt-2">
                        <label for="id_card_number" class="form-label">Identiteitskaart nr:<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('id_card_number') is-invalid @enderror" id="name"
                            autocomplete="off" placeholder="Identiteitskaart nr" name="id_card_number"
                            value="{{ old('id_card_number') }}" required>
                        @error('id_card_number')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="adress" class="form-label">Adres<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('adress') is-invalid @enderror" id="name"
                                    autocomplete="off" placeholder="Adres" name="adress" value="{{ old('adress') }}"
                                    required>
                                @error('adress')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3">
                                <label for="no" class="form-label">Nr:<span class="text-danger">*</span></label>
                                <input type="number" class="form-control @error('no') is-invalid @enderror" id="name"
                                    autocomplete="off" placeholder="Nr" name="no" value="{{ old('no') }}" required>
                                @error('no')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3">
                                <label for="box" class="form-label">Bus:<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('box') is-invalid @enderror" id="name"
                                    autocomplete="off" placeholder="Bus" name="box" value="{{ old('box') }}" required>
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
                                <label for="postal_code" class="form-label">Postcode<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('postal_code') is-invalid @enderror"
                                    id="postal_code" autocomplete="off" placeholder="Postcode" name="postal_code"
                                    value="{{ old('postal_code') }}" required>
                                @error('postal_code')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="commune" class="form-label">Gemeente<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('commune') is-invalid @enderror" id="commune"
                                    autocomplete="off" placeholder="Gemeente" name="commune" value="{{ old('commune') }}"
                                    required>
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
                                <label for="type_of_habitat" class="form-label">Huis</label>
                                <input type="radio" name="type_of_habitat" value="2">
                                <label for="type_of_habitat" class="form-label">Appartement</label>
                            </div>
                            <div class="col-2">
                                <p>Verdieping:<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control @error('stage') is-invalid @enderror" id="stage"
                                    autocomplete="off" placeholder="Verdieping" name="stage" value="{{ old('stage') }}"
                                    required>
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
                                <label for="phone" class="form-label">Telefoon<span
                                        class="text-danger">*</span></label>
                                <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                    autocomplete="off" placeholder="Telefoon" name="phone" value="{{ old('phone') }}"
                                    required>
                                @error('phone')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="gsm" class="form-label">GSM<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('gsm') is-invalid @enderror" id="gsm"
                                    autocomplete="off" placeholder="GSM" name="gsm" value="{{ old('gsm') }}" required>
                                @error('gsm')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="mail" class="form-label">E-mail<span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('mail') is-invalid @enderror" id="commune"
                                    autocomplete="off" placeholder="E-mail" name="mail" value="{{ old('mail') }}"
                                    required>
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
                                <input class="form-control @error('date_of_birth') is-invalid @enderror"
                                    data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                    inputmode="numeric" id="date_of_birth" name="date_of_birth"
                                    value="{{ old('date_of_birth') }}" type="date">
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
                            <div class="col-6">
                                <input type="checkbox" name="internet_connection" value="1">
                                <label for="internet_connection" class="form-label">Ik heb reeds een Internet</label>
                            </div>
                            <div class="col-2">
                                <p>Operator:<span class="text-danger">*</span></p>
                            </div>
                            <div class="col-4">
                                <input type="text" class="form-control @error('operator') is-invalid @enderror"
                                    id="operator" autocomplete="off" placeholder="Opérateur" name="operator"
                                    value="{{ old('operator') }}" required>
                                @error('operator')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <p><b>Opgelet!</b> Indien uw telefoonlijn van het type ISDN is, uitgerust met PABX telefooncentrale
                            of verbonden is met alarmcentrales,
                            dial-up modems, betaalterminals, telefooncentrales of faxtoestellen dan is Scarlet Trio niet
                            geschikt. In dat geval is enkel via de optie ‘vrij
                            koperpaar mogelijk!.

                        </p>
                    </div>

                    <div class="mt-4">
                        <h4 style="text-align:center"><b>B.Abonnementskeuzes </b></h4>
                    </div>
                    <div class="mt-2">
                        <p class="text-justify "><input type="radio" name="your_subscription" class="mr-2"
                                value="1">Ja, ik neem Scarlet Loco (Internet³) met of zonder vaste lijn; aan € 32 incl. BTW
                            per maand aan volgende
                            voorwaarden:</p>
                    </div>
                    <div class="mt-2">
                        <p class="text-justify"><input type="radio" name="your_subscription" class="mr-2"
                                value="2">Ja, ik neem Scarlet Internet&telefonie*² met of zonder vaste Proximus lijn; aan €
                            39 incl. BTW per maand aan
                            volgende voorwaarden:</p>
                    </div>
                    <div class="mt-2">
                        <p class="text-justify"><input type="radio" name="your_subscription" class="mr-2"
                                value="3">Ja, ik neem Scarlet Trio (Internet, telefonie & DTV*²³) met of zonder vaste lijn;
                            aan € 40 incl. BTW per maand
                        </p>
                    </div>

                    <div class="mt-4">
                        <h5 style="text-align:center"><b>Maandelijkse opties (Trio & Internet&Telefonie)
                            </b></h5>
                    </div>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-6">
                                <input type="checkbox" name="telephony_day_1" value="1">
                                <label for="telephony_day_1" class="form-label">Optie 24/24u gratis bellen</label>
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
                                <label for="telephony_hour_1" class="form-label">Onbeperkt bellen van vast naar
                                    nationaal mobiel (daluren)</label>
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
                                <label for="mobile_tele_day_1" class="form-label">Onbeperkt bellen vast naar nationaal
                                    mobiel (24/24)</label>
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
                                <label for="fixe_telephony_hour_1" class="form-label">Onbeperkt bellen naar vaste
                                    internationale lijnen (daluren**)</label>
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
                                    deProximus decoder
                                </label>
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
                                <h6><b>Totaal maandelijks bedrag BTW incl.</b></h6>
                            </div>
                            <div class="col-6">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">€</span>
                                    <input type="text"
                                        class="form-control @error('total_monthly_costs_vat') is-invalid @enderror"
                                        id="total_monthly_costs_vat" autocomplete="off"
                                        placeholder="Total des coûts uniques TVA incl" name="total_monthly_costs_vat"
                                        value="{{ old('total_monthly_costs_vat') }}" required>
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
                        <label for="total_one_time_costs_vat" class="form-label">Totaal eenmalige kosten BTW incl.<span
                                class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">€</span>
                            <input type="number"
                                class="form-control @error('total_one_time_costs_vat') is-invalid @enderror" id="vat"
                                autocomplete="off" placeholder="Total des coûts uniques TVA incl"
                                name="total_one_time_costs_vat" value="{{ old('total_one_time_costs_vat') }}" required>
                            @error('total_one_time_costs_vat')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="mt-2">
                        <div class="row">
                            <p>Kies het TV pakket dat je wenst,
                                <input type="radio" name="digital_tv" value="1">
                                <label for="language" class="form-label">Proximus TV voor Scarlet FR of</label>
                                <input type="radio" name="digital_tv" value="2">
                                <label for="language" class="form-label">Proximus TV voor Scarlet NL</label>
                            </p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4 style="text-align:center"><b>C. Uw vaste telefoonlijn</b></h4>
                    </div>
                    <h5>Hoofdlijn
                    </h5>
                    <div class="mt-2">
                        <input type="radio" name="type_number" value="1">
                        <label for="type_number" class="form-label">Ik wens een nieuw telefoonnummer.
                        </label>
                        <br>
                        <input type="radio" name="type_number" value="2">
                        <label for="type_number" class="form-label">Ik wens mijn huidig telefoonnummer te behouden.
                        </label>
                    </div>
                    <div class="mt-1">
                        <p class="ml-5">Gelieve het bijgevoegde document “Toelating voor Nummeroverdracht Vaste
                            Telefonie” in te vullen. </p>
                    </div>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-3">
                                <p class="ml-5">Huidig telefoonnummer:</p>
                            </div>
                            <div class="col-6">
                                <input type="text"
                                    class="form-control @error('current_phone_number') is-invalid @enderror mr-10"
                                    id="commune" autocomplete="off" placeholder="Societe" name="current_phone_number"
                                    value="{{ old('current_phone_number') }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="col-6">
                            <label for="obt" class="form-label ml-5">Operator:</label>
                            <input type="radio" name="obt" class="ml-2" value="1">
                            <label for="obt" class="form-label ml-2">Proximus</label>
                            <input type="radio" name="obt" class="ml-2" value="2">
                            <label for="obt" class="form-label ml-2">Telenet</label>
                            <input type="radio" name="obt" class="ml-2" value="3">
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="vat" class="form-label">Andere:<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('other') is-invalid @enderror" id="vat"
                                    autocomplete="off" placeholder="other" name="other" value="{{ old('other') }}"
                                    required>
                                @error('other')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="vat" class="form-label">Klantnummer:<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('client_number') is-invalid @enderror"
                                    id="client_number" autocomplete="off" placeholder="Klantnummer" name="client_number"
                                    value="{{ old('client_number') }}" required>
                                @error('vat')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <p><input type="radio" name="type_number" class="mr-2" value="2">Ik wens niet dat mijn
                            telefoonnummer wordt gepubliceerd in de witte gids.
                        </p>
                    </div>
                    <div class="mt-4">
                        <h4 style="text-align:center"><b>D. Installatie</b></h4>
                    </div>
                    <div class="mt-2">
                        <p>Indien het installatieadres niet hetzelfde is als het adres dat u bij uw persoonlijke gegevens
                            invulde, gelieve dan hier het juiste
                            installatieadres in te vullen.</p>
                    </div>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="install_adress" class="form-label">Adresse<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('install_adress') is-invalid @enderror"
                                    id="name" autocomplete="off" placeholder="Adresse" name="install_adress"
                                    value="{{ old('install_adress') }}" required>
                                @error('install_adress')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3">
                                <label for="install_no" class="form-label">Nr:<span
                                        class="text-danger">*</span></label>
                                <input type="no" class="form-control @error('install_no') is-invalid @enderror"
                                    id="install_no" autocomplete="off" placeholder="Nr" name="install_no"
                                    value="{{ old('install_no') }}" required>
                                @error('install_no')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3">
                                <label for="install_box" class="form-label">Bus:<span
                                        class="text-danger">*</span></label>
                                <input type="install_box" class="form-control @error('install_box') is-invalid @enderror"
                                    id="install_box" autocomplete="off" placeholder="Bus" name="install_box"
                                    value="{{ old('install_box') }}" required>
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
                                <label for="install_postal_code" class="form-label">Postcode<span
                                        class="text-danger">*</span></label>
                                <input type="number"
                                    class="form-control @error('install_postal_code') is-invalid @enderror"
                                    id="postal_code" autocomplete="off" placeholder="Postcode" name="install_postal_code"
                                    value="{{ old('install_postal_code') }}" required>
                                @error('postal_code')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="install_commune" class="form-label">Gemeente<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('install_commune') is-invalid @enderror"
                                    id="install_commune" autocomplete="off" placeholder="Gemeente" name="install_commune"
                                    value="{{ old('install_commune') }}" required>
                                @error('install_commune')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h4 style="text-align:center"><b>E.Betalingswijze
                            </b></h4>
                    </div>
                    <div class="mt-2">
                        <input type="radio" name="payment_method" value="1">
                        <label for="payment_method" class="form-label">Ik maak zelf een domiciliëring met behulp van de
                            volgende bankgegevens :
                        </label>
                    </div>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="iban_number" class="form-label">N° IBAN:<span
                                        class="text-danger">*</span></label>
                                <input type="iban_number" class="form-control @error('iban_number') is-invalid @enderror"
                                    id="iban_number" autocomplete="off" placeholder="N° IBAN" name="iban_number"
                                    value="{{ old('iban_number') }}" required>
                                @error('iban_number')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="name_account_holder" class="form-label">Naam van bank account eigenaar
                                    :<span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name_account_holder') is-invalid @enderror"
                                    id="name_account_holder" autocomplete="off" placeholder="Naam van bank account eigenaar"
                                    name="name_account_holder" value="{{ old('name_account_holder') }}" required>
                                @error('name_account_holder')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input type="radio" name="payment_method" value="1">
                        <label for="payment_method" class="form-label">Ik wens via bankoverschrijving te betalen.:
                        </label>
                    </div>
                    <div class="mt-4">
                        <h4 style="text-align:center"><b>F. Voorwaarden
                            </b></h4>
                    </div>
                    <p class="test-justify">Scarlet, Carlistraat 2, 1140 Evere, wenst de persoonsgegevens die u hierbij
                        verstrekt op te nemen in haar bestanden. Zij wenst
                        deze persoonsgegevens te verwerken in het kader van klantenadministratie, marktstudies en met het
                        oog op het voeren van
                        gepersonaliseerde informatie- en promotiecampagnes (per telefoon, post, email en/of sms) in verband
                        met producten en diensten van Scarlet en/of derden. U heeft recht tot toegang en verbetering van
                        deze persoonsgegevens.
                    </p>
                    <div class="mt-3">
                        <p>Indien u akkoord gaat met de verwerking door Scarlet van uw persoonsgegevens voor dergelijke
                            doeleinden, gelieve dan dit
                            vakje aan te kruisen<input type="checkbox" name="submitted_contact" class="ml-2"
                                value="1"></p>
                    </div>
                    <div class="mt-3">
                        <p>De klant erkent de voorwaarden voor de dienst Scarlet Trio te hebben ontvangen en deze te
                            aanvaarden.</p>
                    </div>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="made_in" class="form-label">Opgemaakt te:<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('made_in') is-invalid @enderror"
                                    id="made_in" autocomplete="off" placeholder="Opgemaakt te" name="made_in"
                                    value="{{ old('made_in') }}" required>
                                @error('made_in')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-3">
                                <label for="contact_date" class="form-label">Datum:<span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('contact_date') is-invalid @enderror"
                                    data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                    inputmode="numeric" id="contact_date" name="contact_date"
                                    value="{{ old('contact_date') }}" type="date">
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
                                <label for="dealer_reference" class="form-label">Scarlet dealer reference:<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('dealer_reference') is-invalid @enderror"
                                    id="dealer_reference" autocomplete="off" placeholder="Scarlet dealer reference"
                                    name="dealer_reference" value="{{ old('dealer_reference') }}" required>
                                @error('the')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="agent" class="form-label">Naam Agent:
                                    <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('agent') is-invalid @enderror" id="the"
                                    autocomplete="off" placeholder="Naam Agent" name="agent" value="{{ old('agent') }}"
                                    required>
                                @error('agent')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <h4 style="text-align:center"><b>Toelating voor Nummeroverdracht Vaste Telefonie
                            </b></h4>
                    </div>
                    <p class="text-justify mt-3">Gelieve dit document in hoofdletters in te vullen, te ondertekenen en ons
                        zo snel mogelijk terug te bezorgen.
                        Zonder dit document kan u uw huidig nummer niet behouden.</p>
                    <div class="mt-4">
                        <p>Uw nummer
                        </p>
                    </div>
                    <div class="mt-2">
                        <label for="undersigned" class="form-label">De ondergetekende titularis<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('undersigned') is-invalid @enderror"
                            id="undersigned" autocomplete="off" placeholder="Le soussigné" name="undersigned"
                            value="{{ old('undersigned') }}" required>
                        @error('undersigned')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <p> van de hier vermelde
                            nummers machtigt de ontvangende operator, Scarlet Belgium NV, om dit nummer te porteren.
                            Deze machtiging impliceert dat de titularis het contract met de donoroperator voor de
                            telefoondiensten die op dit nummer betrekking heeft, annuleert:</p>
                    </div>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-6">
                                <label for="main_line" class="form-label">Hoofdlijn<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('main_line') is-invalid @enderror"
                                    id="main_line" maxlength="9" autocomplete="off" placeholder="Hoofdlijn" name="main_line"
                                    value="{{ old('main_line') }}" required>
                                @error('main_line')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="2nd_line" class="form-label">2e lijn<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('2nd_line') is-invalid @enderror"
                                    id="2nd_line" maxlength="9" autocomplete="off" placeholder="2e lijn" name="2nd_line"
                                    value="{{ old('2nd_line') }}" required>
                                @error('2nd_line')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <p class="text-justify">Door de ondertekening van dit document bevestigt de ondertekenaar
                            volledig aansprakelijk te zijn voor de juistheid van
                            de verstrekte informatie en gaat hij ermee akkoord alle schade die de abonnee zou kunnen lijden
                            ten gevolge van deze
                            aanvraag tot overdracht te vergoeden. De ondertekenaar zal eveneens de dienstleverancier
                            vergoeden voor elke eis tot
                            schadevergoeding vanwege de abonnee met betrekking tot de uitvoering van deze aanvraag tot
                            overdracht.
                            Ondergetekende bevestigt tevens gemachtigd te zijn om deze toelating voor nummeroverdracht te
                            ondertekenen.
                        </p>
                    </div>
                    <div class="mt-3">
                        <p><b>Uw gegevens</b></p>
                    </div>
                    <div class="mt-2">
                        <label for="holder_no" class="form-label">Naam titularis:<span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('holder_no') is-invalid @enderror" id="holder_no"
                            autocomplete="off" placeholder="Naam titularis" name="holder_no"
                            value="{{ old('holder_no') }}" required>
                        @error('holder_no')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <p>Installatieadres titularis:</p>
                    </div>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-4">
                                <label for="street" class="form-label">Straat:<span
                                        class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('street') is-invalid @enderror" id="street"
                                    autocomplete="off" placeholder="Straat" name="street" value="{{ old('street') }}"
                                    required>
                                @error('street')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="number" class="form-label">Nummer:<span
                                        class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('number') is-invalid @enderror" id="number"
                                    autocomplete="off" placeholder="Nummer" name="number" value="{{ old('number') }}"
                                    required>
                                @error('number')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="add_box" class="form-label">Bus:<span
                                        class="text-danger">*</span></label>
                                <input type="install_box" class="form-control @error('add_box') is-invalid @enderror"
                                    id="add_box" autocomplete="off" placeholder="Bus" name="add_box"
                                    value="{{ old('add_box') }}" required>
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
                                <label for="add_postal_code" class="form-label">Postcode:<span
                                        class="text-danger">*</span></label>
                                <input type="postal_code"
                                    class="form-control @error('add_postal_code') is-invalid @enderror"
                                    id="add_postal_code" autocomplete="off" placeholder="Postcode" name="add_postal_code"
                                    value="{{ old('add_postal_code') }}" required>
                                @error('add_postal_code')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="add_commune" class="form-label">Gemeente:<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('add_commune') is-invalid @enderror"
                                    id="add_commune" autocomplete="off" placeholder="Gemeente" name="add_commune"
                                    value="{{ old('add_commune') }}" required>
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
                                <label for="vat_number" class="form-label">BTW nummer (indien van toepassing):<span
                                        class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('vat_number') is-invalid @enderror"
                                    id="vat_number" autocomplete="off" placeholder="BTW nummer (indien van toepassing)"
                                    name="vat_number" value="{{ old('vat_number') }}" required>
                                @error('vat_number')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="current_operator" class="form-label">Huidige operator:<span
                                        class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('current_operator') is-invalid @enderror"
                                    id="current_operator" autocomplete="off" placeholder="Huidige operator"
                                    name="current_operator" value="{{ old('current_operator') }}" required>
                                @error('current_operator')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-4">
                                <label for="cus_number" class="form-label">Klantnummer bij huidige operator:<span
                                        class="text-danger">*</span></label>
                                <input type="install_box" class="form-control @error('cus_number') is-invalid @enderror"
                                    id="cus_number" autocomplete="off" placeholder="Klantnummer bij huidige operator"
                                    name="cus_number" value="{{ old('cus_number') }}" required>
                                @error('cus_number')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p>(Voor uw Proximus-klantnummer kan u bellen naar 078 15 05 65. Als u niet van bij u thuis belt zal
                            de Proximusmedewerk(st)er uw geboortedatum vragen.)
                        </p>
                    </div>
                    <div class="mt-2">
                        <p><b>Dit formulier blijft 3 maanden geldig na de datum van de handtekening.</b></p>
                    </div>
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-4">
                                <label for="contact_date_1" class="form-label">Datum:<span
                                        class="text-danger">*</span></label>
                                <input class="form-control @error('contact_date_1') is-invalid @enderror"
                                    data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                    inputmode="numeric" id="contact_date_1" name="contact_date_1"
                                    value="{{ old('contact_date_1') }}" type="date">
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
