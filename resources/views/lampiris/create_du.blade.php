@extends('layouts.backend')

@section('content')
    <div class="container">
        <form class="forms-sample" method="POST" action="{{ route('lampiris.store') }}">
            @csrf()
            <div class="form-group">
                <input required type="hidden" name="form_lang" value="{{ $lang }}">
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="col-7 card_header">
                        Contract voor de levering van groene elektriciteit
                        en/of aardgas voor particulieren
                    </div>
                    <div class="row mt-3">
                        <h5 class="ml-2">Uw gegevens</h5>
                        <p>(de velden met een (*) zijn verplicht)</p>
                    </div>
                    <div class="row mt-2">
                        <div class="col-1">
                            <p>Title:<span class="text-danger">*</span></p>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="title" value="mw">
                            <label for="title" class="form-label">Mw</label>
                            <input type="radio" name="title" value="dhr">
                            <label for="title" class="form-label">Dhr</label>
                        </div>
                        <div class="col-1">
                            <p>Taal:<span class="text-danger">*</span></p>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="language" value="fr">
                            <label for="language" class="form-label">FR</label>
                            <input type="radio" name="language" value="nl">
                            <label for="language" class="form-label">NL</label>
                            <input type="radio" name="language" value="de">
                            <label for="language" class="form-label">DE</label>
                            <input type="radio" name="language" value="en">
                            <label for="language" class="form-label">EN</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="name" class="form-label">Naam<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                autocomplete="off" placeholder="Naam" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
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
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                            <label for="date_of_birth" class="form-label">Geboortedatum<span
                                    class="text-danger">*</span></label>
                            <input class="form-control @error('date_of_birth') is-invalid @enderror"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="date_of_birth" name="date_of_birth"
                                value="{{ old('date_of_birth') }}" type="date">
                            @error('date_of_birth')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="phone" class="form-label">Tél<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                autocomplete="off" placeholder="Tél" name="phone" value="{{ old('phone') }}" required>
                            @error('phone')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="gsm" class="form-label">GSM<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('gsm') is-invalid @enderror" id="locality"
                                autocomplete="off" placeholder="GSM" name="gsm" value="{{ old('gsm') }}" required>
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
                            <input type="email" class="form-control @error('mail') is-invalid @enderror" id="locality"
                                autocomplete="off" placeholder="e-mail" name="mail" value="{{ old('mail') }}" required>
                            @error('mail')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-5">
                            <label for="bank_account" class="form-label">Bankrekeningnummer<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('bank_account') is-invalid @enderror"
                                id="locality" autocomplete="off" placeholder="Bankrekeningnummer" name="bank_account"
                                value="{{ old('bank_account') }}" required>
                            @error('bank_account')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-3">
                            <label for="people" class="form-label">Aantal personen gedomicilieerd<span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('people') is-invalid @enderror" id="locality"
                                autocomplete="off" placeholder="Aantal personen" name="people"
                                value="{{ old('people') }}" required>
                        </div>
                    </div>
                    <h5 class="mt-3">LEVERINGSADRES</h5>
                    <div class="row mt-2">
                        <div class="col-8">
                            <label for="adress" class="form-label">Adres <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('adress') is-invalid @enderror" id="box"
                                autocomplete="off" placeholder="Adres" name="adress" value="{{ old('adress') }}"
                                required>
                            @error('adress')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="box" class="form-label">Bus<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('box') is-invalid @enderror" id="box"
                                autocomplete="off" placeholder="Bus" name="box" value="{{ old('box') }}" required>
                            @error('box')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                            <label for="no" class="form-label">Nr<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('no') is-invalid @enderror" id="no"
                                autocomplete="off" placeholder="Nr" name="no" value="{{ old('no') }}" required>
                            @error('no')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
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
                        <div class="col-4">
                            <label for="locality" class="form-label">Plaats<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('locality') is-invalid @enderror" id="locality"
                                autocomplete="off" placeholder="Plaats" name="locality" value="{{ old('locality') }}"
                                required>
                            @error('locality')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <h5 class="mt-3">FACTURATIEADRES</h5>
                    <div class="row mt-2">
                        <div class="col-8">
                            <label for="adress1" class="form-label">Adres<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('adress1') is-invalid @enderror" id="adress1"
                                autocomplete="off" placeholder="Adres" name="adress1" value="{{ old('adress1') }}"
                                required>
                            @error('adress1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="box1" class="form-label">Bus<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('box1') is-invalid @enderror" id="box1"
                                autocomplete="off" placeholder="Bus" name="box1" value="{{ old('box1') }}" required>
                            @error('box1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-4">
                            <label for="no1" class="form-label">Nr<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('no1') is-invalid @enderror" id="no"
                                autocomplete="off" placeholder="Nr" name="no1" value="{{ old('no1') }}" required>
                            @error('no1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="postal_code1" class="form-label">Postcode<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('postal_code1') is-invalid @enderror"
                                id="postal_code1" autocomplete="off" placeholder="Postcode" name="postal_code1"
                                value="{{ old('postal_code1') }}" required>
                            @error('postal_code1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="locality1" class="form-label">Plaats<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('locality1') is-invalid @enderror"
                                id="locality1" autocomplete="off" placeholder="Plaats" name="locality1"
                                value="{{ old('locality1') }}" required>
                            @error('locality1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <h5 class="mt-2">Mijn levering van groene elektriciteit door Lampiris</h5>
                    <div class="mt-2">
                        <input type="radio" name="tip" class="ml-4" value="tip">
                        <label for="tip" class="form-label">tip</label>
                        <input type="radio" name="tip" class="ml-4" value="TOP">
                        <label for="tip" class="form-label">TOP</label>
                        <input type="radio" name="tip" class="ml-4" value="Solar">
                        <label for="tip" class="form-label">Solar</label>
                    </div>
                    <div class="mt-1">
                        <input type="radio" name="year" class="ml-4" value="1 jaar">
                        <label for="year" class="form-label">1 jaar</label>
                        <input type="radio" name="year" class="ml-4" value="2 jaar">
                        <label for="year" class="form-label">2 jaar</label>
                        <input type="radio" name="year" class="ml-4" value="3 jaar">
                        <label for="year" class="form-label">3 jaar</label>
                    </div>
                    <div class="row mt-2">
                        <p class="ml-2">Metertype:</p>
                        <input type="radio" name="counter_type" class="ml-4" value="dag">
                        <label for="counter_type" class="form-label ml-2">dag</label>
                        <input type="radio" name="counter_type" class="ml-4" value="dag/nacht">
                        <label for="counter_type" class="form-label ml-2">dag/nacht</label>
                        <input type="radio" name="counter_type" class="ml-4" value="exclusief nacht">
                        <label for="counter_type" class="form-label ml-2">exclusief nacht</label>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3 mt-2">
                            <p>EAN-code<span class="text-danger">*</span></p>
                        </div>
                        <div class="col-9 mt-2">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">5 4</span>
                                <input type="text" class="form-control @error('ean_code') is-invalid @enderror"
                                    id="ean_code" autocomplete="off" placeholder="Meternummer" name="ean_code"
                                    value="{{ old('ean_code') }}" required>
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
                            <p>Meternummer</p>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4">Meterstand</div>
                    </div>
                    <div class="mt-2">
                        <div class="input-group">
                            <input type="text" class="form-control @error('meter_number1') is-invalid @enderror"
                                id="meter_number1" autocomplete="off" placeholder="Meternummer" name="meter_number1"
                                value="{{ old('meter_number1') }}" required>
                            <span class="input-group-text" id="basic-addon1">Enkelvoudig</span>
                            <input type="text" class="form-control @error('counter_index1') is-invalid @enderror"
                                id="counter_index1" autocomplete="off" placeholder="Meterstand" name="counter_index1"
                                value="{{ old('counter_index1') }}" required>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="input-group">
                            <input type="text" class="form-control @error('meter_number2') is-invalid @enderror"
                                id="meter_number2" autocomplete="off" placeholder="Meternummer" name="meter_number2"
                                value="{{ old('meter_number2') }}" required>
                            <span class="input-group-text" id="basic-addon1">Tweevoudig Dag</span>
                            <input type="text" class="form-control @error('counter_index2') is-invalid @enderror"
                                id="counter_index2" autocomplete="off" placeholder="Meterstand" name="counter_index2"
                                value="{{ old('counter_index2') }}" required>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="input-group">
                            <input type="text" class="form-control @error('meter_number3') is-invalid @enderror"
                                id="meter_number3" autocomplete="off" placeholder="Meternummer" name="meter_number3"
                                value="{{ old('meter_number3') }}" required>
                            <span class="input-group-text" id="basic-addon1">Tweevoudig Nacht</span>
                            <input type="text" class="form-control @error('counter_index3') is-invalid @enderror"
                                id="counter_index3" autocomplete="off" placeholder="Meterstand" name="counter_index3"
                                value="{{ old('counter_index3') }}" required>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div class="input-group">
                            <input type="text" class="form-control @error('meter_number4') is-invalid @enderror"
                                id="meter_number4" autocomplete="off" placeholder="Meternummer" name="meter_number4"
                                value="{{ old('meter_number4') }}" required>
                            <span class="input-group-text" id="basic-addon1">Excl. nacht</span>
                            <input type="text" class="form-control @error('counter_index4') is-invalid @enderror"
                                id="counter_index4" autocomplete="off" placeholder="Meterstand" name="counter_index4"
                                value="{{ old('counter_index4') }}" required>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="annual_consu" class="form-label">Wat is uw jaarlijkse verbruik1? <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('annual_consu') is-invalid @enderror"
                                id="annual_consu" autocomplete="off" placeholder="kWh" name="annual_consu"
                                value="{{ old('annual_consu') }}" required>
                            @error('annual_consu')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="row col-6">
                            <p class="ml-2">Verhuist u?</p>
                            <input type="radio" name="moving" class="ml-2" value="Ja">
                            <label for="moving" class="form-label ml-2">Ja</label>
                            <input type="radio" name="moving" class="ml-2" value="Neen">
                            <label for="moving" class="form-label ml-2">Neen</label>
                        </div>
                        <div class="row col-6">
                            <p class="ml-5">Is de meter geopend?</p>
                            <input type="radio" name="meter_open" class="ml-2" value="Ja">
                            <label for="meter_open" class="form-label ml-2">Ja</label>
                            <input type="radio" name="meter_open" class="ml-2" value="Neen">
                            <label for="meter_open" class="form-label ml-2">Neen</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="current_provid" class="form-label">Huidige leverancier<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('current_provid') is-invalid @enderror"
                                id="current_provid" autocomplete="off" placeholder="Huidige leverancier"
                                name="current_provid" value="{{ old('current_provid') }}" required>
                            @error('current_provid')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="start_date" class="form-label">Gewenste begindatum voor levering<span
                                    class="text-danger">*</span></label>
                            <input class="form-control @error('start_date') is-invalid @enderror"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="date_of_birth" name="start_date" value="{{ old('start_date') }}"
                                type="date">
                            @error('start_date')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <h5 class="mt-2">Mijn levering van aardgas door Lampiris</h5>
                    <div class="mt-2">
                        <input type="radio" name="tip1" class="ml-4" value="tip">
                        <label for="tip1" class="form-label">tip</label>
                        <input type="radio" name="tip1" class="ml-4" value="TOP">
                        <label for="tip1" class="form-label">TOP</label>
                    </div>
                    <div class="mt-1">
                        <input type="radio" name="year1" class="ml-4" value="1 jaar">
                        <label for="year1" class="form-label">1 jaar</label>
                        <input type="radio" name="year1" class="ml-4" value="2 jaar">
                        <label for="year1" class="form-label">2 jaar</label>
                        <input type="radio" name="year1" class="ml-4" value="3 jaar">
                        <label for="year1" class="form-label">3 jaar</label>
                    </div>
                    <div class="row mt-2">
                        <div class="col-3 mt-2">
                            <p>EAN-code<span class="text-danger">*</span></p>
                        </div>
                        <div class="col-9 mt-2">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">5 4</span>
                                <input type="text" class="form-control @error('ean_code1') is-invalid @enderror"
                                    id="ean_code1" autocomplete="off" placeholder="Code EAN" name="ean_code1"
                                    value="{{ old('ean_code1') }}" required>
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
                            <label for="meter_number" class="form-label">Meternummer<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('meter_number') is-invalid @enderror"
                                id="meter_number" autocomplete="off" placeholder="Meternummer" name="meter_number"
                                value="{{ old('meter_number') }}" required>
                            @error('meter_number')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="counter" class="form-label">Meterstand<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('counter') is-invalid @enderror" id="counter"
                                autocomplete="off" placeholder="Meterstand" name="counter" value="{{ old('counter') }}"
                                required>
                            @error('counter')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="annual_consu1" class="form-label">Wat is uw jaarlijkse verbruik1?<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('annual_consu1') is-invalid @enderror"
                                id="annual_consu1" autocomplete="off" placeholder="kWh" name="annual_consu1"
                                value="{{ old('annual_consu1') }}" required>
                            @error('annual_consu1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <span class="ml-2">Verhuist u?</span>
                                </div>
                                <div class="col-6">
                                    <input type="radio" name="moving1" class="ml-2" value="Ja">
                                    <label for="moving1" class="form-label ml-2">Ja</label>
                                    <input type="radio" name="moving1" class="ml-2" value="Neen">
                                    <label for="moving1" class="form-label ml-2">Neen</label>
                                </div>
                            </div>
                        </div>
                        <div class="row col-6">
                            <span class="mr-5">Is de meter geopend?</span>
                            <input type="radio" name="meter_open1" class="ml-2" value="Ja">
                            <label for="meter_open1" class="form-label ml-2">Ja</label>
                            <input type="radio" name="meter_open1" class="ml-2" value="Neen">
                            <label for="meter_open1" class="form-label ml-2">Neen</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="current_provid1" class="form-label">Huidige leverancier<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('current_provid1') is-invalid @enderror"
                                id="current_provid1" autocomplete="off" placeholder="Huidige leverancier"
                                name="current_provid1" value="{{ old('current_provid1') }}" required>
                            @error('current_provid1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="start_date1" class="form-label">Gewenste begindatum voor levering2<span
                                    class="text-danger">*</span></label>
                            <input class="form-control @error('start_date1') is-invalid @enderror"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="start_date1" name="start_date1" value="{{ old('start_date1') }}"
                                type="date">
                            @error('start_date1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-8">
                            <span>Ik ontvang graag promotieaanbiedingen van de groep Lampiris:</span>
                        </div>
                        <div class="col-4">
                            <input type="radio" name="promotional" class="ml-2" value="Ja">
                            <label for="promotional" class="form-label ml-2">Ja</label>
                            <input type="radio" name="promotional" class="ml-2" value="Neen">
                            <label for="promotional" class="form-label ml-2">Neen</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <span>Groene stroom en aardgas</span>
                                </div>
                                <div class="col-6">
                                    <input type="radio" name="electricity_gas" class="ml-4" value="Ja">
                                    <label for="electricity_gas" class="form-label ml-2">Ja</label>
                                    <input type="radio" name="electricity_gas" class="ml-3" value="Neen">
                                    <label for="electricity_gas" class="form-label ml-2">Neen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <span>Isolatie:</span>
                                </div>
                                <div class="col-6">
                                    <input type="radio" name="insulation" class="ml-2" value="Ja">
                                    <label for="insulation" class="form-label ml-2">Ja</label>
                                    <input type="radio" name="insulation" class="ml-2" value="Neen">
                                    <label for="insulation" class="form-label ml-2">Neen</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <span>installatie van verwarmingsketel</span>
                                </div>
                                <div class="col-6">
                                    <input type="radio" name="boilers" class="ml-5" value="Ja">
                                    <label for="boilers" class="form-label ml-2">Ja</label>
                                    <input type="radio" name="boilers" class="ml-3" value="Neen">
                                    <label for="boilers" class="form-label ml-2">Neen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-8">
                                    <span>Laadoplossingen voor elektrische voertuigen:</span>
                                </div>
                                <div class="col-4">
                                    <input type="radio" name="charging_vehicles" class="ml-4" value="Ja">
                                    <label for="charging_vehicles" class="form-label ml-2">Ja</label>
                                    <input type="radio" name="charging_vehicles" class="ml-3" value="Neen">
                                    <label for="charging_vehicles" class="form-label ml-2">Neen</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <span>zonnepanelen:</span>
                                </div>
                                <div class="col-6">
                                    <input type="radio" name="panels" class="ml-5" value="Ja">
                                    <label for="panels" class="form-label ml-2">Ja</label>
                                    <input type="radio" name="panels" class="ml-3" value="Neen">
                                    <label for="panels" class="form-label ml-2">Neen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-8">
                                    <span>Bijstand & verzekering voor elektriciteit en gas</span>
                                </div>
                                <div class="col-4">
                                    <input type="radio" name="insurance" class="ml-2" value="Ja">
                                    <label for="insurance" class="form-label ml-2">Ja</label>
                                    <input type="radio" name="insurance" class="ml-2" value="Neen">
                                    <label for="insurance" class="form-label ml-2">Neen</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6">
                                    <span>Kortingen bij onze partners:</span>
                                </div>
                                <div class="col-6">
                                    <input type="radio" name="partners" class="ml-2" value="Ja">
                                    <label for="partners" class="form-label ml-2">Ja</label>
                                    <input type="radio" name="partners" class="ml-3" value="Neen">
                                    <label for="partners" class="form-label ml-2">Neen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-8">
                                    <span>Ik geef Lampiris de toestemming om mijn klantenzone te creëren:</span>
                                </div>
                                <div class="col-4">
                                    <input type="radio" name="authorize" class="ml-2" value="Ja">
                                    <label for="authorize" class="form-label ml-2">Ja</label>
                                    <input type="radio" name="authorize" class="ml-2" value="Neen">
                                    <label for="authorize" class="form-label ml-2">Neen</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-9">
                            <span>Ik schrijf me in op de nieuwsbrief van de groep Lampiris met onder andere informatie over
                                de groep Lampiris, de energiemarkt, nuttige tips en wedstrijden:</span>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="subscribe" class="ml-2" value="Ja">
                            <label for="subscribe" class="form-label ml-2">Ja</label>
                            <input type="radio" name="subscribe" class="ml-2" value="Neen">
                            <label for="subscribe" class="form-label ml-2">Neen</label>
                        </div>
                    </div>
                    <h5 class="mt-2">Facturatie, periodiciteit, betaling</h5>
                    <div class="row mt-2">
                        <div class="col-6">
                            <span>Ik wil mijn facturen ontvangen:</span>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="invoices" class="ml-2" value="via de post">
                            <label for="invoices" class="form-label ml-2">via de post</label>
                            <input type="radio" name="invoices" class="ml-2" value="via e-mail">
                            <label for="invoices" class="form-label ml-2">via e-mail</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <span>Ik wil mijn facturen ontvangen:</span>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="invoices1" class="ml-2" value="maandelijks">
                            <label for="invoices1" class="form-label ml-2">maandelijks</label>
                            <input type="radio" name="invoices1" class="ml-2" value="tweemaandelijks">
                            <label for="invoices1" class="form-label ml-2">tweemaandelijks</label>
                            <input type="radio" name="invoices1" class="ml-2" value="driemaandelijks">
                            <label for="invoices1" class="form-label ml-2">driemaandelijks</label>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <span>Ik wil mijn facturen betalen via:</span>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="bills" class="ml-2" value="overschrijving">
                            <label for="bills" class="form-label ml-2">overschrijving</label>
                            <input type="radio" name="bills" class="ml-2" value="domiciliëring">
                            <label for="bills" class="form-label ml-2">domiciliëring</label>
                            <input type="radio" name="bills" class="ml-2" value="domiciliëring">
                            <label for="bills" class="form-label ml-2">domiciliëring</label>
                        </div>
                    </div>
                    <h5>Domiciliëring</h5>
                    <div class="row mt-2">
                        <div class="col-6">
                            <label for="undersigned" class="form-label">Ik, ondergetekende<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('undersigned') is-invalid @enderror"
                                id="undersigned" autocomplete="off" placeholder="Ik, ondergetekende" name="undersigned"
                                value="{{ old('undersigned') }}" required>
                            @error('undersigned')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="iban" class="form-label">IBAN<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('iban') is-invalid @enderror" id="iban"
                                autocomplete="off" placeholder="IBAN" name="iban" value="{{ old('iban') }}" required>
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
                            <input type="text" class="form-control @error('bic') is-invalid @enderror" id="iban"
                                autocomplete="off" placeholder="IBAN" name="bic" value="{{ old('bic') }}" required>
                            @error('bic')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="date" class="form-label">Datum<span class="text-danger">*</span></label>
                            <input class="form-control @error('date') is-invalid @enderror"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="date" name="date" value="{{ old('date_of_birth') }}" type="date">
                            @error('date')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="the" class="form-label">Plaats<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('the') is-invalid @enderror" id="the"
                                autocomplete="off" placeholder="Plaats" name="the" value="{{ old('the') }}" required>
                            @error('the')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <h5 class="mt-2">Handtekening van de klant</h5>
                    <span class="mt-2">
                        Dit contract is niet geldig zonder de handtekening van de klant
                    </span>
                    <div class="row mt-2">
                        <div class="col-4">
                            <label for="name1" class="form-label">Naam<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name1') is-invalid @enderror" id="name1"
                                autocomplete="off" placeholder="Naam" name="name1" value="{{ old('name1') }}" required>
                            @error('name1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="city" class="form-label">Stad<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('city') is-invalid @enderror" id="city"
                                autocomplete="off" placeholder="Stad" name="city" value="{{ old('city') }}" required>
                            @error('city')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <label for="date1" class="form-label">Datum<span class="text-danger">*</span></label>
                            <input class="form-control @error('date1') is-invalid @enderror"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="date1" name="date1" value="{{ old('date1') }}" type="date">
                            @error('date1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <span class="mt-3"><b>Kader voorbehouden aan Lampiris</b></span>
                    <div class="row mt-2">
                        <div class="col-4">
                            <span>Réf.agent:<span class="text-danger">*</span></span>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">P W R</span>
                                <input type="text" class="form-control @error('agent') is-invalid @enderror" id="agent"
                                    autocomplete="off" placeholder="Réf.agent" name="agent" value="{{ old('agent') }}"
                                    required>
                            </div>
                        </div>
                        <div class="col-4 mb-2">
                            <label for="pricing_code" class="form-label">Tariefcode:<span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('pricing_code') is-invalid @enderror" id="city"
                                autocomplete="off" placeholder="Tariefcode" name="pricing_code"
                                value="{{ old('pricing_code') }}" required>
                            @error('pricing_code')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-4">
                            <textarea type="text" class="form-control @error('text') is-invalid @enderror" id="text" autocomplete="off" rows="3"
                                name="text" value="{{ old('text') }}" required></textarea>
                            @error('text')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                        <button class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
