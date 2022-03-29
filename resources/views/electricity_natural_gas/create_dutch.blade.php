@extends('layouts.backend')

@section('content')

<div class="row">
    <div class="col-md-12">
        <form class="forms-sample" action="{{ route('number_porting.store') }}" method="POST">
            @csrf()
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Uw gegevens (de velden met een (*) zijn verplicht)</h6>
                            <div class="row">
                                <div class="col-1">
                                    <h6>Taal<span class="text-danger">*</span></h6>
                                </div>
                                <div class="col-4">
                                    <label for="language" class="form-label">FR</label>
                                    <input type="radio" name="language" value="0">
                                    <label for="language" class="form-label">NL</label>
                                    <input type="radio" name="language" value="1">
                                    <label for="language" class="form-label">DE</label>
                                    <input type="radio" name="language" value="2">
                                    <label for="language" class="form-label">EN</label>
                                    <input type="radio" name="language" value="3">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label for="gender" class="form-label">Mw</label>
                                    <input type="radio" name="gender" value="0">
                                    <label for="gender" class="form-label">Dhr</label>
                                    <input type="radio" name="gender" value="1">
                                    <label for="name" class="form-label">Naam (*)</label>
                                </div>
                                <div class="col-10">
                                    <div class="mb-2">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Naam" name="name" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label for="f_name" class="form-label">Voornaam</label>
                                </div>
                                <div class="col-10">
                                    <div class="mb-2">
                                        <input type="text" class="form-control @error('f_name') is-invalid @enderror" id="f_name" autocomplete="off" placeholder="Voornaam" name="f_name" value="{{ old('f_name') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label for="date_of_birth" class="form-label">Geboortedatum<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2">
                                        <input class="form-control @error('date_of_birth') is-invalid @enderror mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date">
                                    </div>
                                </div>
                                <div class="col-1 text-right px-0">
                                    <label for="tel" class="form-label">Tel<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-3">
                                    <input type="tel" class="form-control @error('tel') is-invalid @enderror" id="tel" autocomplete="off" placeholder="Tel" name="tel" value="{{ old('tel') }}" required>
                                </div>
                                <div class="col-1 text-right px-0">
                                    <label for="phone" class="form-label">GSM<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-2">
                                    <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" autocomplete="off" placeholder="Phone" name="tel" value="{{ old('phone') }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label for=" email" class="form-label">E-mail</label>
                                </div>
                                <div class="col-10">
                                    <div class="mb-2">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" autocomplete="off" placeholder="E-mail" name="email" value="{{ old('email') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label for=" bank_acc_num" class="form-label">Bankrekeningnummer</label>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <input type="number" class="form-control @error('bank_acc_num') is-invalid @enderror" id="bank_acc_num" autocomplete="off" placeholder="Bankrekeningnummer" name="bank_acc_num" value="{{ old('bank_acc_num') }}" required>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <p>Aantal personen gedomicilieerd
                                        op het leveringspunt</p>
                                </div>

                                <div class="col-2">
                                    <input type="number" class="form-control @error('num_person_domi_delivery') is-invalid @enderror" id="num_person_domi_delivery" autocomplete="off" placeholder="Aantal personen" name="num_person_domi_delivery" value="{{ old('num_person_domi_delivery') }}" required>
                                </div>
                            </div>
                            <h5>LEVERINGSADRES</h5>
                            <div class="row">
                                <div class="col-1">
                                    <label for="address" class="form-label">Adres</label>
                                </div>
                                <div class="col-5">
                                    <div class="mb-2">
                                        <input type="address" class="form-control @error('address') is-invalid @enderror" id="address" autocomplete="off" placeholder="Adres" name="address" value="{{ old('address') }}" required>
                                    </div>
                                </div>
                                <div class="col-1 text-right px-0"><label for="no" class="form-label">Nr.</label></div>
                                <div class="col-2"><input type="no" class="form-control @error('no') is-invalid @enderror" id="no" autocomplete="off" placeholder="Nr" name="address" value="{{ old('no') }}" required></div>
                                <div class="col-1 text-right px-0"><label for="bus" class="form-label">Bus</label></div>
                                <div class="col-2"><input type="bus" class="form-control @error('bus') is-invalid @enderror" id="bus" autocomplete="off" placeholder="Bus" name="bus" value="{{ old('bus') }}" required></div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <label for="address" class="form-label">Postcode</label>
                                </div>
                                <div class="col-2"><input type="postal_code" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Postcode" name="bus" value="{{ old('postal_code') }}" required></div>
                                <div class="col-1 text-right px-0"><label for="address" class="form-label">Plaats</label></div>
                                <div class="col-8"><input type="place" class="form-control @error('place') is-invalid @enderror" id="place" autocomplete="off" placeholder="Plaats" name="place" value="{{ old('place') }}" required></div>
                            </div>

                            <h5>FACTURATIEADRES (indien verschillend van het leveringsadres)</h5>
                            <div class="row">
                                <div class="col-1">
                                    <label for="billing_address" class="form-label">Adres</label>
                                </div>
                                <div class="col-5">
                                    <div class="mb-2">
                                        <input type="billing_address" class="form-control @error('billing_address') is-invalid @enderror" id="billing_address" autocomplete="off" placeholder="Adres" name="billing_address" value="{{ old('billing_address') }}" required>
                                    </div>
                                </div>
                                <div class="col-1 text-right px-0"><label for="billing_no" class="form-label">Nr.</label></div>
                                <div class="col-2"><input type="billing_no" class="form-control @error('billing_no') is-invalid @enderror" id="billing_no" autocomplete="off" placeholder="Nr" name="billing_no" value="{{ old('billing_no') }}" required></div>
                                <div class="col-1 text-right px-0"><label for="billing_bus" class="form-label">Bus</label></div>
                                <div class="col-2"><input type="billing_bus" class="form-control @error('billing_bus') is-invalid @enderror" id="billing_bus" autocomplete="off" placeholder="Bus" name="billing_bus" value="{{ old('billing_bus') }}" required></div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <label for="billing_postal_code" class="form-label">Postcode</label>
                                </div>
                                <div class="col-2"><input type="billing_postal_code" class="form-control @error('billing_postal_code') is-invalid @enderror" id="billing_postal_code" autocomplete="off" placeholder="Postcode" name="billing_postal_code" value="{{ old('billing_postal_code') }}" required></div>
                                <div class="col-1 text-right px-0"><label for="billing_place" class="form-label">Plaats</label></div>
                                <div class="col-8"><input type="billing_place" class="form-control @error('billing_place') is-invalid @enderror" id="place" autocomplete="off" placeholder="Plaats" name="billing_place" value="{{ old('billing_place') }}" required></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Mijn levering van groene elektriciteit door Lampiris</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="checkbox" name="gree_tip" value="0">
                                        <label for="gree_tip" class="form-label">tip</label>
                                        <input type="checkbox" name="gree_top" value="1">
                                        <label for="gree_top" class="form-label">TOP </label>
                                        <input type="checkbox" name="gree_solar" value="2">
                                        <label for="gree_solar" class="form-label">Solar</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="checkbox" name="gree_1year" value="0">
                                        <label for="gree_1year" class="form-label">1 jaar</label>
                                        <input type="checkbox" name="gree_2year" value="1">
                                        <label for="gree_2year" class="form-label">2 jaar</label>
                                        <input type="checkbox" name="gree_3year" value="2">
                                        <label for="gree_3year" class="form-label">3 jaar</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <h6>language:<span class="text-danger">*</span>
                                        </h6>
                                    </div>
                                    <div class="col-9">
                                        <input type="radio" name="meter_type" value="0">
                                        <label for="meter_type" class="form-label">dag</label>
                                        <input type="radio" name="gree_2year" value="1">
                                        <label for="meter_type" class="form-label">dag/nacht</label>
                                        <input type="radio" name="meter_type" value="2">
                                        <label for="meter_type" class="form-label">exclusief nacht</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label for="ean_code" class="form-label">EAN-code</label>
                                    </div>
                                    <div class="col-9">
                                        <input type="ean_code" class="form-control @error('ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="" name="ean_code" value="{{ old('ean_code') }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <h6>Meternummer</6>
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <h6>
                                            Meterstand
                                        </h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-2">
                                            <input type="single_meter_num" class="form-control @error('single_meter_num') is-invalid @enderror" id="single_meter_num" autocomplete="off" placeholder="" name="single_meter_num" value="{{ old('single_meter_num') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-2">
                                            <h6>Enkelvoudig</h6>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-2">
                                            <input type="single_meter_reading" class="form-control @error('single_meter_reading') is-invalid @enderror" id="single_meter_reading" autocomplete="off" placeholder="EAN-code" name="single_meter_reading" value="{{ old('single_meter_reading') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-2">
                                            <input type="Double_meter_num" class="form-control @error('Double_meter_num') is-invalid @enderror" id="Double_meter_num" autocomplete="off" placeholder="" name="Double_meter_num" value="{{ old('Double_meter_num') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-2">
                                            <h6>Tweevoudig Dag</h6>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-2">
                                            <input type="Double_meter_reading" class="form-control @error('Double_meter_reading') is-invalid @enderror" id="Double_meter_reading" autocomplete="off" placeholder="" name="Double_meter_reading" value="{{ old('Double_meter_reading') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="mb-2">
                                            <input type="meter_double_night_num" class="form-control @error('meter_double_night_num') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="" name="meter_double_night_num" value="{{ old('meter_double_night_num') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-2">
                                            <h6>Tweevoudig Nacht</h6>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <input type="meter_double_night_reading" class="form-control @error('meter_double_night_reading') is-invalid @enderror" id="meter_double_night_reading" autocomplete="off" placeholder="" name="meter_double_night_reading" value="{{ old('meter_double_night_reading') }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <input type="meter_excl_night_num" class="form-control @error('meter_excl_night_num') is-invalid @enderror" id="meter_excl_night_num" autocomplete="off" placeholder="" name="meter_excl_night_num" value="{{ old('meter_excl_night_num') }}" required>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-2">
                                            <h6>Excl. nacht</h6>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="mb-2">
                                            <input type="meter_excl_night_reading" class="form-control @error('meter_excl_night_reading') is-invalid @enderror" id="meter_excl_night_reading" autocomplete="off" placeholder="" name="meter_excl_night_reading" value="{{ old('meter_excl_night_reading') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <p>Wat is uw jaarlijkse verbruik1
                                            ? </p>
                                    </div>
                                    <div class="col-4"></div>
                                    <div class="col-4">
                                        <div class="mb-2">
                                            <input type="annual_consumption" class="form-control @error('annual_consumption') is-invalid @enderror" id="annual_consumption" autocomplete="off" placeholder="kWh" name="annual_consumption" value="{{ old('annual_consumption') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p>Verhuist u?</p>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="you_moving" value="0">
                                        <label for="'you_moving" class="form-label">Ja</label>
                                        <input type="radio" name="you_moving" value="1">
                                        <label for="you_moving" class="form-label">Neen</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p>is de meter geopend? </p>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="meter_open" value="0">
                                        <label for="meter_open" class="form-label">Ja</label>
                                        <input type="radio" name="meter_open" value="1">
                                        <label for="meter_open" class="form-label">Neen</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="current_supplier" class="form-label">Huidige leverancier</label>
                                    </div>
                                    <div class="col-8">
                                        <div class="mb-2">
                                            <input type="current_supplier" class="form-control @error('current_supplier') is-invalid @enderror" id="current_supplier" autocomplete="off" placeholder="" name="current_supplier" value="{{ old('current_supplier') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <label for="start_date_delivery" class="form-label">Gewenste begindatum voor levering</label>
                                        </div>
                                    </div>

                                    <div class="col-5">
                                        <div class="mb-2">
                                            <input class="form-control @error('start_date_delivery') is-invalid @enderror mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="start_date_delivery" name="start_date_delivery" value="{{ old('start_date_delivery') }}" type="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h5>Mijn levering van aardgas door Lampiris</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="checkbox" name="gas_tip" value="0">
                                        <label for="gas_tip" class="form-label">tip</label>
                                        <input type="checkbox" name="gas_top" value="1">
                                        <label for="gas_top" class="form-label">TOP </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="checkbox" name="gas_1year" value="0">
                                        <label for="gas_1year" class="form-label">1 jaar</label>
                                        <input type="checkbox" name="gas_2year" value="1">
                                        <label for="gas_2year" class="form-label">2 jaar</label>
                                        <input type="checkbox" name="gas_3year" value="2">
                                        <label for="gas_3year" class="form-label">3 jaar</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">
                                        <label for="gas_ean_code" class="form-label">EAN-code</label>
                                    </div>
                                    <div class="col-9">
                                        <div class="mb-2">
                                            <input type="gas_ean_code" class="form-control @error('gas_ean_code') is-invalid @enderror" id="ean_code" autocomplete="off" placeholder="" name="gas_ean_code" value="{{ old('gas_ean_code') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <label for="gas_meter_number" class="form-label">Meternummer </label>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <input type="gas_meter_number" class="form-control @error('gas_meter_number') is-invalid @enderror" id="gas_meter_number" autocomplete="off" placeholder="" name="gas_meter_number" value="{{ old('gas_meter_number') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5">
                                        <label for="gas_meter_reading" class="form-label">Meterstand </label>
                                    </div>
                                    <div class="col-7">
                                        <div class="mb-2">
                                            <input type="gas_meter_reading" class="form-control @error('gas_meter_reading') is-invalid @enderror" id="gas_meter_reading" autocomplete="off" placeholder="" name="gas_meter_reading" value="{{ old('gas_meter_reading') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <p>Wat is uw jaarlijkse verbruik1
                                            ? </p>
                                    </div>

                                    <div class="col-4">
                                        <div class="mb-2">
                                            <input type="gas_annual_consumption" class="form-control @error('gas_annual_consumption') is-invalid @enderror" id="gas_annual_consumption" autocomplete="off" placeholder="kWh" name="gas_annual_consumption" value="{{ old('gas_annual_consumption') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p>Verhuist u?</p>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="you_moving" value="0">
                                        <label for="'you_moving" class="form-label">Ja</label>
                                        <input type="radio" name="you_moving" value="1">
                                        <label for="you_moving" class="form-label">Neen</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p>is de meter geopend? </p>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="meter_open" value="0">
                                        <label for="meter_open" class="form-label">Ja</label>
                                        <input type="radio" name="meter_open" value="1">
                                        <label for="meter_open" class="form-label">Neen</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="gas_current_supplier" class="form-label">Huidige leverancier</label>
                                    </div>
                                    <div class="col-8">
                                        <div class="mb-2">
                                            <input type="gas_current_supplier" class="form-control @error('gas_current_supplier') is-invalid @enderror" id="gas_current_supplier" autocomplete="off" placeholder="" name="gas_current_supplier" value="{{ old('gas_current_supplier') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-7">
                                        <label for="gas_start_date_delivery" class="form-label">Gewenste begindatum voor levering</label>
                                    </div>
                                    <div class="col-5">
                                        <div class="mb-2">
                                            <input class="form-control @error('gas_start_date_delivery') is-invalid @enderror mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="gas_start_date_delivery" name="gas_start_date_delivery" value="{{ old('gas_start_date_delivery') }}" type="date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2">
                                        <input type="textarea" class="form-control @error('any_comments') is-invalid @enderror" id="any_comments" min="5" autocomplete="off" placeholder="" name="any_comments" value="{{ old('any_comments') }}" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <p>1. Als u ons uw jaarlijkse verbruik niet meedeelt, dan zullen uw voorschotfacturen worden opgesteld op basis
                                        van een schatting</p>
                                    <p>2. Indien technisch mogelijk. De dienstverlening kan van start gaan tijdens de herroepingstermijn van de klant
                                        op voorwaarde dat deze hier uitdrukkelijk heeft om verzocht.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <label for="current_supplier" class="form-label">Ik ontvang graag promotieaanbiedingen van de groep Lampiris:</label>
                        </div>
                        <div class="col-3">
                            <input type="radio" name="meter_open" value="0">
                            <label for="meter_open" class="form-label">Ja</label>
                            <input type="radio" name="meter_open" value="1">
                            <label for="meter_open" class="form-label">Neen</label>
                        </div>
                        <div class="col-4">
                            <h5>Enkel voor de volgende producten:</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="row">
                                <p>Groene stroom en aardgas</p>
                                <input type="radio" name="electricity_gas" value="0">
                                <label for="electricity_gas" class="form-label">Ja</label>
                                <input type="radio" name="electricity_gas" value="1">
                                <label for="electricity_gas" class="form-label">Neen</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="row">
                                <p>Isolatie</p>
                                <input type="radio" name="insulation" value="0">
                                <label for="insulation" class="form-label">Ja</label>
                                <input type="radio" name="insulation" value="1">
                                <label for="insulation" class="form-label">Neen</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <p>installatie van verwarmingsketel</p>
                                <input type="radio" name="boiler_installation" value="0">
                                <label for="boiler_installation" class="form-label">Ja</label>
                                <input type="radio" name="boiler_installation" value="1">
                                <label for="boiler_installation" class="form-label">Neen</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="row">
                                <p>Laadoplossingen voor elektrische voertuigen</p>
                                <input type="radio" name="solutions_lectric" value="0">
                                <label for="solutions_lectric" class="form-label">Ja</label>
                                <input type="radio" name="solutions_lectric" value="1">
                                <label for="solutions_lectric" class="form-label">Neen</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="row">
                                <p>zonnepanelen</p>
                                <input type="radio" name="solar_panels" value="0">
                                <label for="solar_panels" class="form-label">Ja</label>
                                <input type="radio" name="solar_panels" value="1">
                                <label for="solar_panels" class="form-label">Neen</label>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="row">
                                <p>Bijstand & verzekering voor elektriciteit en gas</p>
                                <input type="radio" name="insurance_for_electricity" value="0">
                                <label for="insurance_for_electricity" class="form-label">Ja</label>
                                <input type="radio" name="insurance_for_electricity" value="1">
                                <label for="insurance_for_electricity" class="form-label">Neen</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="row">
                                <p>Kortingen bij onze partners</p>
                                <input type="radio" name="discounts_partners" value="0">
                                <label for="discounts_partners" class="form-label">Ja</label>
                                <input type="radio" name="discounts_partners" value="1">
                                <label for="discounts_partners" class="form-label">Neen</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <p>Ik schrijf me in op de nieuwsbrief van de groep Lampiris met onder andere informatie over de groep Lampiris, de energiemarkt, nuttige tips en wedstrijden:</p>
                        <input type="radio" name="subscribe" value="0">
                        <label for="subscribe" class="form-label">Ja</label>
                        <input type="radio" name="subscribe" value="1">
                        <label for="subscribe" class="form-label">Neen</label>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <p>Ik geef Lampiris de toestemming om mijn klantenzone te creëren</p>
                                <input type="radio" name="customer_zone" value="0">
                                <label for="customer_zone" class="form-label">Ja</label>
                                <input type="radio" name="customer_zone" value="1">
                                <label for="customer_zone" class="form-label">Neen</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <p>
                                Neen U heeft altijd het recht om uw toestemming te beheren, te raadplegen en uw gegevens te wijzigen via de klantenzone.
                            </p>
                        </div>
                    </div>
                    <h4>Facturatie, periodiciteit, betaling</h4>
                    <div class="row">
                        <div class="col-5">
                            <p>Ik wil mijn facturen ontvangen</p>
                        </div>
                        <input type="radio" name="receive_invoices_through" value="0">
                        <label for="receive_invoices_through" class="form-label">via de post</label>
                        <input type="radio" name="receive_invoices_through" value="1">
                        <label for="receive_invoices_through" class="form-label">via e-mail (vul uw e-mailadres in bij ‘Uw gegevens’)</label>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <p>Ik wil mijn facturen ontvangen</p>
                        </div>
                        <input type="radio" name="receive_invoices_by" value="0">
                        <label for="receive_invoices_by" class="form-label">maandelijks</label>
                        <input type="radio" name="receive_invoices_by" value="1">
                        <label for="receive_invoices_by" class="form-label">tweemaandelijks</label>
                        <input type="radio" name="receive_invoices_by" value="2">
                        <label for="receive_invoices_by" class="form-label">driemaandelijks</label>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <p>Ik wil mijn facturen betalen via</p>
                        </div>

                        <input type="radio" name="pay_invoices_via" value="0">
                        <label for="pay_invoices_via" class="form-label">overschrijving</label>
                        <input type="radio" name="pay_invoices_via" value="1">
                        <label for="pay_invoices_via" class="form-label">domiciliëring (enkel de voorschotten)</label>
                        <input type="radio" name="pay_invoices_via" value="2">
                        <label for="pay_invoices_via" class="form-label">domiciliëring (voorschotten en afrekening)</label>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Domiciliëring (In te vullen in geval van domiciliëring)</h5>
                        </div>
                        <div class="card-body">
                            <p>Alleen de eerste voorschotfactuur en de afrekening worden u per post bezorgd</p>
                            <div class="row">
                                <div class="col-6">
                                    <label for="current_supplier" class="form-label">Ik, ondergetekende (naam van de rekeninghouder</label>
                                </div>
                                <div class="col-6">
                                    <input type="current_supplier" class="form-control @error('current_supplier') is-invalid @enderror" id="current_supplier" autocomplete="off" placeholder="" name="current_supplier" value="{{ old('current_supplier') }}" required>
                                </div>
                            </div>
                            <p>verzoek de firma Lampiris nv, Rue Saint-Laurent, 54, 4000 Luik, met ondernemingsnummer BE0859.655.570,
                                om vanaf heden en tot uitdrukkelijke herroeping alle facturen te innen van de rekening:</p>
                            <div class="row">
                                <div class="col-2">
                                    <label for="iban" class="form-label">IBAN</label>
                                </div>
                                <div class="col-10">
                                    <div class="mb-2">
                                        <input type="iban" class="form-control @error('iban') is-invalid @enderror" id="iban" autocomplete="off" placeholder="" name="iban" value="{{ old('iban') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label for="bic" class="form-label">BIC</label>
                                </div>
                                <div class="col-10">
                                    <div class="mb-2">
                                        <input type="bic" class="form-control @error('bic') is-invalid @enderror" id="bic" autocomplete="off" placeholder="" name="bic" value="{{ old('bic') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label for="date" class="form-label">Datum</label>
                                </div>
                                <div class="col-10">
                                    <div class="mb-2">
                                        <input class="form-control @error('date') is-invalid @enderror mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date" name="date" value="{{ old('date') }}" type="date">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label for="place" class="form-label">Plaats</label>
                                </div>
                                <div class="col-10">
                                    <div class="mb-2">
                                        <input type="place" class="form-control @error('place') is-invalid @enderror" id="place" autocomplete="off" placeholder="" name="place" value="{{ old('place') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <p>Ingevolge de nieuwe Europese normen zijn deze nummers beschikbaar bij uw
                                        financiële instelling of op uw rekeninguittreksels.</p>
                                </div>
                                <div class="col-4">
                                    <input type="textarea" class="form-control @error('signature') is-invalid @enderror" id="signature" autocomplete="off" min="5" placeholder="" name="signature" value="{{ old('signature') }}" required>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Handtekening van de klant</h5>
                        </div>
                        <div class="card-body">
                            <p>Dit contract is niet geldig zonder de handtekening van de klant</p>
                            <div class="row">
                                <div class="col-2">
                                    <label for="name" class="form-label">Naam</label>
                                </div>
                                <div class="col-10">
                                    <div class="mb-2">
                                        <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="" name="name" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <label for="city" class="form-label">Stad</label>
                                </div>
                                <div class="col-4 text-right px-0">
                                    <input type="city" class="form-control @error('city') is-invalid @enderror" id="city" autocomplete="off" placeholder="" name="city" value="{{ old('city') }}" required>
                                </div>
                                <div class="col-2">
                                    <label for="cus_date" class="form-label">Datum</label>
                                </div>
                                <div class="col-4 text-right px-0">
                                    <input class="form-control @error('cus_date') is-invalid @enderror mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="cus_date" name="cus_date" value="{{ old('cus_date') }}" type="date">
                                </div>
                            </div>
                            <p>Ik erken uitdrukkelijk voor de afsluiting van dit contract een kopie te hebben ontvangen van de bijzondere en de algemene voorwaarden
                                in bijlage van het contract er kennis van te hebben genomen en ze te hebben begrepen en aanvaard. De persoonlijke gegevens die in dit
                                contract zijn vermeld, zullen worden verwerkt door Lampiris nv overeenkomstig de toepasselijke wetgeving betreffende de bescherming
                                van persoonsgegevens en ons Privacybeleid beschikbaar via de volgende link: www.lampiris.be/nl/privacybeleid. U heeft altijd het recht
                                om uw toestemming te beheren, te raadplegen en uw gegevens te wijzigen in uw klantenzone</p>
                            <p>
                                <bold>De consument heeft het recht om het contract te herroepen binnen de 14 kalenderdagen na ontvangst van de bevestiging door
                                    Lampiris van het contract zonder betaling van een boete en zonder opgave van redenen. Gedurende het contract heeft de consument
                                    op ieder moment het recht om van leverancier te veranderen. Hiervoor moet de consument enkel een andere leverancier van
                                    elektriciteit en/of gas kiezen, die de nodige formaliteiten zal vervullen. De verbruikte energie moet steeds worden betaald.</bold>
                            </p>
                            <div class="row">
                                <div class="col-6">
                                    <input type="textarea" class="form-control @error('manag_signature') is-invalid @enderror" id="manag_signature" autocomplete="off" min="5" placeholder="Lampiris NV, Marc Bensadoun,Gedelegeerd bestuurder" name="manag_signature" value="{{ old('manag_signature') }}" required>
                                </div>
                                <div class="col-6">
                                    <input type="textarea" class="form-control @error('cus_signature') is-invalid @enderror" id="cus_signature" autocomplete="off" min="5" placeholder="Handtekening van de klant, voor akkoord" name="cus_signature" value="{{ old('cus_signature') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </form>
    </div>
</div>



@endsection