@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5>Contract voor de levering van ELEKTRICITEIT en/of AARDGAS gesloten tussen de klant en OCTA+
            </h5>
            <form class="forms-sample" method="POST" action="{{ route('regi_form.store') }}">
                @csrf()
                <div class="form-group">
                    <input required type="hidden" name="form_lang" value="{{ $lang }}">
                </div>
                <h5 class="mt-3">Gegevens van de klant</h5>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-1">
                            <p>Klant:<span class="text-danger">*</span> </p>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="client" value="0">
                            <label for="client" class="form-label">Residentieel</label>
                            <input type="radio" name="client" value="1">
                            <label for="client" class="form-label">Professioneel</label>
                        </div>
                        <div class="col-1">
                            <p>Taal:<span class="text-danger">*</span></p>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="language" value="0">
                            <label for="language" class="form-label">Fr</label>
                            <input type="radio" name="language" value="1">
                            <label for="language" class="form-label">Nl</label>
                        </div>
                        <div class="col-1">
                            <p>Aanspreektitel:<span class="text-danger">*</span></p>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="title" value="0">
                            <label for="title" class="form-label">Mijnheer</label>
                            <input type="radio" name="title" value="1">
                            <label for="title" class="form-label">Mevrouw</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="customer_number" class="form-label">Klantennummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('customer_number') is-invalid @enderror" id="customer_number" autocomplete="off" placeholder="Klantennummer" name="customer_number" value="{{ old('customer_number') }}" required>
                        @error('customer_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="society" class="form-label">Bedrijfsnaam:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('society') is-invalid @enderror" id="commune" autocomplete="off" placeholder="Bedrijfsnaam" name="society" value="{{ old('society') }}" required>
                        @error('mail')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="legal_status" class="form-label">Juridische vorm:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('legal_status') is-invalid @enderror" id="legal_status" autocomplete="off" placeholder="Juridische vorm" name="legal_status" value="{{ old('legal_status') }}" required>
                        @error('legal_status')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2 mt-1">
                        <p>Ondernemingsnummer (BTW)<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">B E 0</span>
                            <input type="text" class="form-control @error('company_number') is-invalid @enderror" id="company_number" autocomplete="off" Maximumlenght="9" placeholder="Ondernemingsnummer (BTW)" name="company_number" value="{{ old('company_number') }}" required>
                            @error('company_number')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6 mt-2">
                        <input type="radio" name="subject_vat" value="0">
                        <label for="subject_vat" class="form-label">Niet BTW-plichtig</label>
                        <input type="radio" name="subject_vat" value="1">
                        <label for="subject_vat" class="form-label">BTW-nummer in aanvraag</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="name" class="form-label">Naam:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Naam" name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="f_name" class="form-label">Voornaam<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('f_name') is-invalid @enderror" id="f_name" autocomplete="off" placeholder="Voornaam" name="f_name" value="{{ old('f_name') }}" required>
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
                        <label for="phone" class="form-label">Tel<span class="text-danger">*</span></label>
                        <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" autocomplete="off" placeholder="Tel" name="phone" value="{{ old('phone') }}" required>
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
                        <label for="date_of_birth">Geboortedatum<span class="text-danger">*</span></label>
                        <input class="form-control @error('date_of_birth') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date">
                    </div>
                </div>
                <h5 class="mt-3">Leveringsadres</h5>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="dev_street" class="form-label">Straat <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('dev_street') is-invalid @enderror" id="name" autocomplete="off" placeholder="Straat" name="dev_street" value="{{ old('dev_street') }}" required>
                        @error('dev_street')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="dev_no" class="form-label">Nr:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('dev_no') is-invalid @enderror" id="name" autocomplete="off" placeholder="Nr" name="dev_no" value="{{ old('dev_no') }}" required>
                        @error('no')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="dev_box" class="form-label">Bus<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('dev_box') is-invalid @enderror" id="name" autocomplete="off" placeholder="Bus" name="dev_box" value="{{ old('dev_box') }}" required>
                        @error('box')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="dev_postal_code" class="form-label">Postcode<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('dev_postal_code') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Postcode" name="dev_postal_code" value="{{ old('dev_postal_code') }}" required>
                        @error('dev_postal_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-9">
                        <label for="dev_commune" class="form-label">Gemeente<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('dev_commune') is-invalid @enderror" id="commune" autocomplete="off" placeholder="Gemeente" name="dev_commune" value="{{ old('dev_commune') }}" required>
                        @error('dev_commune')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2">
                    <label for="dev_refer_customer" class="form-label">Vrije referentie voor de klant<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('dev_refer_customer') is-invalid @enderror" id="dev_refer_customer" autocomplete="off" placeholder="Vrije referentie voor de klant" name="dev_refer_customer" value="{{ old('dev_refer_customer') }}" required>
                    @error('dev_refer_customer')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mt-3">
                    <h5>Facturatieadres</h5>
                    <p class="ml-2">(indien verschillend van het leveringsadres)
                    </p>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="billing_street" class="form-label">Straat <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('billing_street') is-invalid @enderror" id="name" autocomplete="off" placeholder="Straat" name="billing_street" value="{{ old('billing_street') }}" required>
                        @error('billing_street')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="billing_no" class="form-label">Nr:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('billing_no') is-invalid @enderror" id="name" autocomplete="off" placeholder="Nr" name="billing_no" value="{{ old('billing_no') }}" required>
                        @error('billing_no')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="billing_box" class="form-label">Bus:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('billing_box') is-invalid @enderror" id="name" autocomplete="off" placeholder="Bus" name="billing_box" value="{{ old('billing_box') }}" required>
                        @error('billing_box')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="billing_postal_code" class="form-label">Postcode<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('billing_postal_code') is-invalid @enderror" id="billing_postal_code" autocomplete="off" placeholder="Postcode" name="billing_postal_code" value="{{ old('billing_postal_code') }}" required>
                        @error('billing_postal_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-9">
                        <label for="billing_commune" class="form-label">Gemeente<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('billing_commune') is-invalid @enderror" id="commune" autocomplete="off" placeholder="Gemeente" name="billing_commune" value="{{ old('billing_commune') }}" required>
                        @error('billing_commune')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2">
                    <label for="billing_country" class="form-label">Land<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('billing_country') is-invalid @enderror" id="billing_country" autocomplete="off" placeholder="Land" name="billing_country" value="{{ old('billing_country') }}" required>
                    @error('billing_country')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <h5 class="mt-3">ELEKTRICITEIT</h5>
                <div class="row mt-2">
                    <div class="col-3">
                        <p>Tarief en duur van het contract:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-5">
                        <input type="radio" name="price_duration" value="0">
                        <label for="price_duration" class="form-label">Smart Vast 1 jaar</label>
                        <input type="radio" name="price_duration" value="1">
                        <label for="price_duration" class="form-label">Smart Variabel 1 jaar</label>
                        <input type="radio" name="price_duration" value="2">
                        <label for="price_duration" class="form-label">Safe Vast 3 jaar</label>
                    </div>
                </div>
                <p class="mt-2">Voor alle klanten is de duur van het contract gelijk aan de duur van het tarief, met als uitzondering de residentiële klanten in Brussel voor wie de duur van het contract drie jaar bedraagt.</p>
                <div class="row mt-2">
                    <div class="col-5">
                        <label for="belgian_electricity" class="form-label">100% groene en Belgische elektriciteit</label>
                        <input type="checkbox" name="belgian_electricity" value="0">
                    </div>
                    <div class="col-3">
                        <p>Ik heb een digitale meter<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-3">
                        <input type="radio" name="digital_meter" value="0">
                        <label for="digital_meter" class="form-label">Ja</label>
                        <input type="radio" name="digital_meter" value="1">
                        <label for="digital_meter" class="form-label">Nee</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-1">
                        <p>Meter:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-5">
                        <input type="radio" name="counter" value="0">
                        <label for="counter" class="form-label">Bestaand en open</label>
                        <input type="radio" name="counter" value="1">
                        <label for="counter" class="form-label">Bestaand en gesloten/verzegeld</label>
                        <input type="radio" name="counter" value="2">
                        <label for="counter" class="form-label">Nieuw</label>
                    </div>
                    <div class="col-2">
                        <p>Metertype:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="counter_type" value="0">
                        <label for="counter_type'" class="form-label">Enkelvoudig</label>
                        <input type="radio" name="counter_type" value="1">
                        <label for="counter_type'" class="form-label">Tweevoudig</label>
                        <input type="radio" name="counter_type" value="2">
                        <label for="counter_type" class="form-label">Exclusief nacht</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <p>EAN-code<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"> 5 4</span>
                            <input type="text" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" Maximumlenght="16" placeholder="EAN-code" name="ean_code" value="{{ old('ean_code') }}" required>
                            @error('ean_code')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-2 ">
                        <p>EAN-code (excl.nuit)<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"> 5 4 </span>
                            <input type="text" class="form-control @error('ean_code_night') is-invalid @enderror" id="ean_code_night" autocomplete="off" Maximumlenght="16" placeholder="EAN-code (excl.nuit)" name="ean_code_night" value="{{ old('ean_code_night') }}" required>
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
                        <label for="meter_number" class="form-label">Meternummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('meter_number') is-invalid @enderror" id="meter_number" autocomplete="off" placeholder="Meternummer" name="meter_number" value="{{ old('meter_number') }}" required>
                        @error('meter_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="meter_number_night" class="form-label">Meternummer (excl.nuit)<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('meter_number_night') is-invalid @enderror" id="meter_number_night" autocomplete="off" placeholder="Meternummer (excl.nuit)" name="meter_number_night" value="{{ old('meter_number_night') }}" required>
                        @error('meter_number_night')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <p>Zonnepanelen of andere productie-eenheid<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-2">
                        <input type="radio" name="solar_other_facility" value="0">
                        <label for="solar_other_facility" class="form-label">Ja</label>
                        <input type="radio" name="solar_other_facility" value="1">
                        <label for="solar_other_facility" class="form-label">Nee</label>
                    </div>
                    <div class="col-3">
                        <p>Vermogen productie-eenheid<span class="text-danger">*</span></p>
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
                        <label for="house_move" class="form-label">Leegstand</label>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="house_move" value="0">
                        <label for="house_move" class="form-label"> Ik verhuis/ik ben verhuisd naar dit adres</label>
                    </div>
                    <div class="col-6">
                        <label for="delivery_start_date">Gewenste startdatum van de levering<span class="text-danger">*</span></label>
                        <input class="form-control @error('delivery_start_date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="delivery_start_date" name="delivery_start_date" value="{{ old('delivery_start_date') }}" type="date">
                    </div>
                </div>
                <h5 class="mt-3">AARDGAS</h5>
                <div class="row mt-2">
                    <div class="col-3">
                        <p>Tarief en duur van het contract<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="price_duration_contract" value="0">
                        <label for="price_duration_contract" class="form-label">Smart Vast 1 jaar</label>
                        <input type="radio" name="price_duration_contract" value="1">
                        <label for="price_duration_contract" class="form-label">Smart Variabel 1 jaar</label>
                    </div>
                </div>
                <p class="mt-2">
                    Voor alle klanten is de duur van het contract gelijk aan de duur van het tarief, met als uitzondering de residentiële klanten in Brussel voor wie de duur van het contract drie jaar bedraagt.
                </p>
                <div class="row mt-2">
                    <div class="col-2">
                        <p>Meter:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-5">
                        <input type="radio" name="counter1" value="0">
                        <label for="counter1" class="form-label">Bestaand en open</label>
                        <input type="radio" name="counter1" value="1">
                        <label for="counter1" class="form-label">Bestaand en gesloten/verzegeld</label>
                        <input type="radio" name="counter1" value="2">
                        <label for="counter1" class="form-label">Nieuw</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2 mt-4">
                        <p>EAN-code<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4 mt-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"> 5 4</span>
                            <input type="text" class="form-control @error('ean_code1') is-invalid @enderror" id="ean_code1" autocomplete="off" Maximumlenght="16" placeholder="EAN-code" name="ean_code1" value="{{ old('ean_code1') }}" required>
                            @error('ean_code1')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6 mt-2">
                        <label for="meter_number1" class="form-label">Meternummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('meter_number1') is-invalid @enderror" id="meter_number1" autocomplete="off" placeholder="Meternummer" name="meter_number1" value="{{ old('meter_number1') }}" required>
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
                        <label for="house_move1" class="form-label">Leegstand</label>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="house_move1" value="0">
                        <label for="house_move1" class="form-label">Ik verhuis/ik ben verhuisd naar dit adres</label>
                    </div>
                    <div class="col-6">
                        <label for="delivery_start_date1">Gewenste startdatum van de levering<span class="text-danger">*</span></label>
                        <input class="form-control @error('delivery_start_date1') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="delivery_start_date1" name="delivery_start_date1" value="{{ old('delivery_start_date1') }}" type="date">
                    </div>
                </div>
                <h5 class="mt-3">Betalingswijze</h5>
                <p class="mt-2">Doe een inspanning voor het milieu en kies voor elektronische facturen of voor domiciliëring zonder ontvangst van de voorschotfacturen
                    (elke maand hetzelfde bedrag). U ontvangt wel de regularisatiefacturen.
                </p>
                <div class="row mt-2">
                    <div class="col-3">
                        <p>Facturatie voorschotbedrag:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-5">
                        <input type="radio" name="installment_frequency" value="0">
                        <label for="installment_frequency" class="form-label">maandelijks</label>
                        <input type="radio" name="installment_frequency" value="1">
                        <label for="installment_frequency" class="form-label">tweemaandelijks</label>
                        <input type="radio" name="installment_frequency" value="2">
                        <label for="installment_frequency" class="form-label">driemaandelijks</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <p>Betalingswijze:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="payment_method" value="0">
                        <label for="payment_method" class="form-label">per domiciliëring</label>
                        <input type="radio" name="payment_method" value="1">
                        <label for="payment_method" class="form-label">per overschrijving
                        </label>
                    </div>
                    <div class="col-6">
                        <input type="checkbox" name="invoices" value="0">
                        <label for="payment_method" class="form-label">Ik wens toch alle voorschotfacturen te ontvangen</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <p>Verzending facturen:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="send_invoices" value="0">
                        <label for="send_invoices" class="form-label">per e-mail</label>
                        <input type="radio" name="send_invoices" value="1">
                        <label for="send_invoices" class="form-label">per post</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="account_number" class="form-label">Rekeningnummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('account_number') is-invalid @enderror" id="account_number" autocomplete="off" placeholder="Rekeningnummer" name="account_number" value="{{ old('account_number') }}" required>
                        @error('account_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="bic_code" class="form-label">BIC-code<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('bic_code') is-invalid @enderror" id="bic_code" autocomplete="off" placeholder="BIC-code" name="bic_code" value="{{ old('bic_code') }}" required>
                        @error('bic_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <h5 class="mt-3">Akkoord</h5>
                <p class="mt-2">
                    Ik heb de algemene voorwaarden en de voorwaarden verbonden aan de gekozen tariefformule aanvaard.
                </p>
                <p class="mt-2">
                    Ik ga akkoord met het algemeen privacy beleid van OCTA+ (terug te vinden op https://www.yourprivacy.be/nl/octaplus).
                </p>
                <div class="mt-2">
                    <input type="checkbox" name="information" value="0">
                    <label for="information" class="form-label">Ik wens informatie over bijkomende producten en diensten van OCTA+ te ontvangen</label>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="signature" class="form-label">Handtekening klant:<span class="text-danger">*</span></label>
                        <textarea type="text" rows="5" class="form-control @error('signature') is-invalid @enderror" id="the" autocomplete="off" placeholder="Handtekening klant" name="signature" value="{{ old('signature') }}" required></textarea>
                        @error('signature')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4 mt-4">
                        <textarea type="text" rows="5" class="form-control @error('octa') is-invalid @enderror" id="the" autocomplete="off" placeholder="Voor OCTA+ Energie n.v." name="octa" value="{{ old('octa') }}" required></textarea>
                        @error('signature')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="date">Datum<span class="text-danger">*</span></label>
                        <input class="form-control @error('date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date" name="date" value="{{ old('date') }}" type="date">
                    </div>
                </div>
                <p class="text-justify mt-2">De consument heeft het recht om af te zien van deze leveringsovereenkomst zonder kosten en zonder opgave van een motief door een aangetekende brief te richten aan OCTA+ Energie binnen de
                    14 kalenderdagen vanaf de ontvangst van de contractbevestiging door de klant, of door het formulier voor herroeping dat te vinden is op https://www.octaplus.be/nl/elektriciteit-aardgas/tarieven/ in te vullen.
                </p>

                <p class="mt-3">Het contract wordt automatisch vernieuwd aan het eind van de initiële termijn:</p>
                <p class="mt-1">. Voor de consument, een periode van 1 jaar met het goedkoopste gelijkwaardige tarief (uitsluitend online contract of niet, groene of grijze energie, vaste of variabele prijs, en met dezelfde diensten die
                    daaruit voorvloeien)</p>
                <p class="mt-1">. Voor de niet-consument, voor een periode gelijk aan de initiële termijn en met een tarief met identieke kenmerken.De verlengde tarieven zijn steeds beschikbaar op onze website www.octaplus.be,
                    2 maanden voor de verlenging.</p>

                <p class="text-justify mt-3">
                    In geval van laattijdige betaling, zoals vermeld staat in onze algemene voorwaarden, kunnen er bijkomende kosten aangerekend worden voor de klant. Voor een betalingsherinnering zal er € 7,50
                    aangerekend worden op de volgende factuur. Voor een ingebrekestelling zal er € 15,00 aangerekend worden op de volgende factuur. Voor de procedure voor schuldinvordering zullen er aan de
                    bovenvermelde kosten nog bijkomende variabele kosten aangerekend worden in functie van het openstaand bedrag : enerzijds een vergoeding van 10% van elke openstaand bedrag en anderzijds
                    bijkomende deurwaarder- en advocaatkosten die zullen schommelen in functie van de specifieke gevallen.</p>
                <h5 class="mt-2">MANDAAT EUROPESE DOMICILIERING SEPA - CORE</h5>
                <p class="text-center mt-2">OCTA+ Energie n.v. - BE91ZZZ0401934742</p>
                <p class="text-center mt-2">Schaarbeeklei, 600 - B-1800 Vilvoorde</p>
                <p class="text-center mt-2">MANDAATREFERTE : <b>BECI900001E20220218</b> - VOOR EEN TERUGKERENDE VORDERING</p>
                <p class="text-justify mt-2"></p>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="company_name" class="form-label">Naam van de schuldenaar<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" autocomplete="off" placeholder="Naam van de schuldenaar" name="company_name" value="{{ old('company_name') }}" required>
                        @error('company_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="street_number" class="form-label">Straat en nummer<span class="text-danger">*</span></label>
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
                        <label for="zip_code" class="form-label">Postcode en gemeente<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('zip_code') is-invalid @enderror" id="zip_code" autocomplete="off" placeholder="Postcode en gemeente" name="zip_code" value="{{ old('zip_code') }}" required>
                        @error('zip_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="iban_account" class="form-label">IBAN-rekeningnummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('iban_account') is-invalid @enderror" id="iban_account" autocomplete="off" placeholder="IBAN-rekeningnummer" name="iban_account" value="{{ old('iban_account') }}" required>
                        @error('iban_account')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="bic_code1" class="form-label">BIC-code<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('bic_code1') is-invalid @enderror" id="bic_code1" autocomplete="off" placeholder="BIC-code" name="bic_code1" value="{{ old('bic_code1') }}" required>
                        @error('bic_code1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <p class="mt-2">Nr onderliggend contract : uw klantennummer (dit wordt later meegedeeld)</p>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="signature1" class="form-label">Handtekening (van schuldenaar):<span class="text-danger">*</span></label>
                        <textarea type="text" rows="5" class="form-control @error('signature1') is-invalid @enderror" id="the" autocomplete="off" placeholder="Handtekening (van schuldenaar)" name="signature1" value="{{ old('signature1') }}" required></textarea>
                        @error('signature1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="place" class="form-label">Plaats:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('place') is-invalid @enderror" id="bic_code" autocomplete="off" placeholder="Lieu" name="place" value="{{ old('place') }}" required>
                        @error('place')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="date1">Datum:<span class="text-danger">*</span></label>
                        <input class="form-control @error('date1') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date1" name="date1" value="{{ old('date1') }}" type="date">
                    </div>
                </div>
                <h5 class="mt-2"><b>OCTA+ Energie n.v.</b></h5>
                <p class="mt-2">Schaarbeeklei 600 1800 Vilvoorde BE0401.934.742 T. 02/851 01 51 energie@octaplus.be www.octaplus.be</p>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
