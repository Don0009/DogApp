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
                                    <input type="meter_excl_night_reading" class="form-control @error('meter_excl_night_reading') is-invalid @enderror" id="meter_excl_night_reading" autocomplete="off" placeholder="" name="meter_excl_night_reading" value="{{ old('meter_excl_night_reading') }}" required>
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
                                    <input type="current_supplier" class="form-control @error('current_supplier') is-invalid @enderror" id="current_supplier" autocomplete="off" placeholder="" name="current_supplier" value="{{ old('current_supplier') }}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-2">
                                    <div class="col-8">
                                        <label for="start_date_delivery" class="form-label">Gewenste begindatum voor levering2</label>
                                    </div>
                                    <div class="col-4">

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
                        <div class="card"></div>
                    </div>
                </div>
            </div>






        </form>
    </div>
</div>



@endsection