@extends('layouts.backend')
@section('styles')
    <style>
        .input-group-text {
            background-color: #727cf5;
            color: white !important;
        }

    </style>
    <head>
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!--CSS -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    </head>
@endsection
@section('content')
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h1>Mega</h1>
                <p>Same energy.Just Cheaper</p>
            </div>
            <div class="col-6">
                <h4 class="">Contract voor de levering van</h4>
                <h4 class="">elektriciteit en/of aardgas</h4>
            </div>
        </div>
    </div>
</section>

<form class="forms-sample" method="POST" action="{{ route('mega.store') }}">
@csrf
<section>

<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-body">
        <h4 >Persoonlijke gegevens van de klant</h4>
        <div class="col-6">
            <div class="row">
                <div class="col-2">
              <h4>Klant</h4>
                </div>
                <div class="col-2">
                    <div class="mb-2 container">
                        <input type="radio" name="customer" value="0" required>
                        <label for="customer" class="mb-3 form-label mt-2">Privé<span
                                class="text-danger">*</span></label>
                        @error('customer')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-2 container">
                        <input type="radio" name="customer" value="1" required>
                        <label for="customer" class="mb-3 form-label mt-2">Professioneel<span
                                class="text-danger">*</span></label>
                        @error('customer')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="row">
                <div class="col-2">
                    <h4>Taal</h4>
                </div>
                <div class="col-3">
                    <div class="mb-2 container">
                        <input type="radio" name="fr" value="0" required>
                        <label for="fr" class="mb-3 form-label mt-2">FR<span
                                class="text-danger">*</span></label>
                        @error('fr')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-2 container">
                        <input type="radio" name="fr" value="1" required>
                        <label for="fr" class="mb-3 form-label mt-2">NL<span
                                class="text-danger">*</span></label>
                        @error('fr')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-4">
            <div class="row">
                <div class="col-2">
                    <h4>Taal</h4>
                </div>
                <div class="col-3">
                    <div class="mb-2 container">
                        <label for="mnr" class="mb-3 form-label mt-2">Mvr.<span
                            class="text-danger">*</span></label>
                        <input type="radio" name="mnr" value="0" required>
                        @error('mnr')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-3">
                    <div class="mb-2 container">
                        <label for="mnr" class="mb-3 form-label mt-2">Mnr<span
                            class="text-danger">*</span></label>
                        <input type="radio" name="mnr" value="1" required>
                        @error('mnr')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

            </div>
        </div>

        <div class="col-8">
            <div class="row">
                <div class="col-1">
                    <label for="mob_num" class="form-label"><b>Naam</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-11">
                    <div class="mb-2">

                        <input type="name" class="form-control @error('naam') is-invalid @enderror"
                            id="naam" autocomplete="off" placeholder="Name" name="naam"
                            value="{{ old('naam') }}" required>
                        @error('naam')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-1">
            <label for="mob_num" class="form-label"><b>Voornaam</b><span
                class="text-danger">*</span></label>
        </div>
        <div class="col-11">
            <div class="mb-2">

                <input type="name" class="form-control @error('first_name') is-invalid @enderror"
                    id="first_name" autocomplete="off" placeholder="Voornaam" name="first_name"
                    value="{{ old('first_name') }}" required>
                @error('first_name')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col-3">
                    <b>Geboortedatum</b>
                </div>
                <div class="col-9">
                    <div class="mb-2">

                        <input type="date" class="form-control @error('date_of_birth') is-invalid @enderror"
                            id="date_of_birth" autocomplete="off" placeholder="Geboortedatum" name="date_of_birth"
                            value="{{ old('date_of_birth') }}" required>
                        @error('date_of_birth')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="row">
                <div class="col-3">
                    <b>Phone</b>
                </div>
                <div class="col-9">
                    <div class="mb-2">

                        <input type="number" class="form-control @error('phone') is-invalid @enderror"
                            id="phone" autocomplete="off" placeholder="Phone" name="phone"
                            value="{{ old('phone') }}" required>
                        @error('phone')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="row">
                <div class="col-3">
                    <b>GSM</b>
                </div>
                <div class="col-9">
                    <div class="mb-2">

                        <input type="name" class="form-control @error('gsm') is-invalid @enderror"
                            id="gsm" autocomplete="off" placeholder="GSM" name="gsm"
                            value="{{ old('gsm') }}" required>
                        @error('gsm')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-1">
            <b>E-mail</b>
        </div>
        <div class="col-11">
            <div class="mb-2">

                <input type="mail" class="form-control @error('e_mail') is-invalid @enderror"
                    id="e_mail" autocomplete="off" placeholder="GSM" name="e_mail"
                    value="{{ old('e_mail') }}" required>
                @error('e_mail')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-body">
        <div class="col-12"><b><h4>Verplichte vermeldingen voor een professioneel contract</h4></b></div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="row">
                <div class="col-3">
                    <b>Maatschappij</b>
                </div>
                <div class="col-9">
                    <div class="mb-2">

                        <input type="name" class="form-control @error('society') is-invalid @enderror"
                            id="society" autocomplete="off" placeholder="Maatschappij" name="society"
                            value="{{ old('society') }}" required>
                        @error('society')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
     <div class="col-4">
        <div class="row">
            <div class="col-3">
                <b>Rechtsvorm</b>
            </div>
            <div class="col-9">
                <div class="mb-2">

                    <input type="name" class="form-control @error('legal_form') is-invalid @enderror"
                        id="legal_form" autocomplete="off" placeholder="Rechtsvorm" name="legal_form"
                        value="{{ old('legal_form') }}" required>
                    @error('legal_form')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
     </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="row">
                <div class="col-3">
                    <b>Ondernemingsnum(BTW)</b>
                </div>
                <div class="col-9">
                    <div class="mb-2">

                        <input type="number" class="form-control @error('legal_form') is-invalid @enderror"
                            id="ompany_number" autocomplete="off" placeholder="Ondernemingsnum" name="ompany_number"
                            value="{{ old('ompany_number') }}" required>
                        @error('ompany_number')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>


        <div class="col-4">
            <div class="mb-2 container">
                <input type="radio" name="non_taxable" value="1" required>
                <label for="non_taxable" class="mb-3 form-label mt-2">Niet-belastingplichtig<span
                        class="text-danger">*</span></label>
                @error('non_taxable')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="col-4">
            <div class="mb-2 container">
                <input type="radio" name="non_taxable" value="2" required>
                <label for="non_taxable" class="mb-3 form-label mt-2">In afwachting van een BTWn<span
                        class="text-danger">*</span></label>
                @error('non_taxable')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
            <div class="col-12">
                <h4>Leveringsadres</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-3">
                        <b>Straat</b>
                    </div>
                    <div class="col-9">
                        <div class="mb-2">

                            <input type="namme" class="form-control @error('street') is-invalid @enderror"
                                id="street" autocomplete="off" placeholder="Straat" name="street"
                                value="{{ old('street') }}" required>
                            @error('street')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-3">
                        <b>N° </b>
                    </div>
                    <div class="col-9">
                        <div class="mb-2">

                            <input type="number" class="form-control @error('no') is-invalid @enderror"
                                id="no" autocomplete="off" placeholder="N°" name="no"
                                value="{{ old('no') }}" required>
                            @error('no')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-3">
                        <b>Bus</b>
                    </div>
                    <div class="col-9">
                        <div class="mb-2">

                            <input type="name" class="form-control @error('bus') is-invalid @enderror"
                                id="bus" autocomplete="off" placeholder="Bus" name="bus"
                                value="{{ old('bus') }}" required>
                            @error('bus')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <div class="col-3">
                        <b>Postcode</b>
                    </div>
                    <div class="col-9">
                        <div class="mb-2">

                            <input type="name" class="form-control @error('postcode') is-invalid @enderror"
                                id="postcode" autocomplete="off" placeholder="postcode" name="postcode"
                                value="{{ old('postcode') }}" required>
                            @error('postcode')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-2">
                        <b>Gemeente</b>
                    </div>
                    <div class="col-10">
                        <div class="mb-2">

                            <input type="name" class="form-control @error('township') is-invalid @enderror"
                                id="township" autocomplete="off" placeholder="Gemeente" name="township"
                                value="{{ old('township') }}" required>
                            @error('township')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <div class="col-3">
                        <b>Ik ga op dit adres inwonen op</b>
                    </div>
                    <div class="col-9">
                        <div class="mb-2">

                            <input type="number" class="form-control @error('going_to_live') is-invalid @enderror"
                                id="going_to_live" autocomplete="off" placeholder="Ik ga op dit adres inwonen op" name="going_to_live"
                                value="{{ old('going_to_live') }}" required>
                            @error('going_to_live')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="mb-2 container">
                    <input type="radio" name="empty_house" value="1" required>
                    <label for="empty_house" class="mb-3 form-label mt-2">Leegstaande woning/in werken<span
                            class="text-danger">*</span></label>
                    @error('empty_house')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-4">
                <div class="mb-2 container">
                    <input type="radio" name="empty_house" value="2" required>
                    <label for="empty_house" class="mb-3 form-label mt-2">Tijdelijk contract<span
                            class="text-danger">*</span></label>
                    @error('empty_house')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
            <div class="col-12">
                <h4>Leveringsadres</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-3">
                        <b>Straat</b>
                    </div>
                    <div class="col-9">
                        <div class="mb-2">

                            <input type="namme" class="form-control @error('street_1') is-invalid @enderror"
                                id="street_1" autocomplete="off" placeholder="Straat" name="street_1"
                                value="{{ old('street_1') }}" required>
                            @error('street_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-3">
                        <b>N° </b>
                    </div>
                    <div class="col-9">
                        <div class="mb-2">

                            <input type="number" class="form-control @error('no_1') is-invalid @enderror"
                                id="no_1" autocomplete="off" placeholder="N°" name="no_1"
                                value="{{ old('no_1') }}" required>
                            @error('no_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="row">
                    <div class="col-3">
                        <b>Bus</b>
                    </div>
                    <div class="col-9">
                        <div class="mb-2">

                            <input type="name" class="form-control @error('bus_1') is-invalid @enderror"
                                id="bus_1" autocomplete="off" placeholder="Bus" name="bus_1"
                                value="{{ old('bus_1') }}" required>
                            @error('bus_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <div class="col-3">
                        <b>Postcode</b>
                    </div>
                    <div class="col-9">
                        <div class="mb-2">

                            <input type="name" class="form-control @error('postcode_1') is-invalid @enderror"
                                id="postcode_1" autocomplete="off" placeholder="postcode" name="postcode_1"
                                value="{{ old('postcode_1') }}" required>
                            @error('postcode_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-2">
                        <b>Gemeente</b>
                    </div>
                    <div class="col-10">
                        <div class="mb-2">

                            <input type="name" class="form-control @error('township_1') is-invalid @enderror"
                                id="township_1" autocomplete="off" placeholder="Gemeente" name="township_1"
                                value="{{ old('township_1') }}" required>
                            @error('township_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                <h4>Elektriciteit</h4>
                <div class="row">
                    <div class="col-6">
                        <div class=""><b>Tarief</b> <span>Comfy</span></div>
                    </div>
                    <div class="col-6">

                        <div class="mb-2 container">
                            <label for=""><b>Duur</b></label>
                            <input type="radio" name="jaar" value="1" required>
                            <label for="jaar" class="mb-3 form-label mt-2">1 jaar<span
                                    class="text-danger">*</span></label>
                            @error('jaar')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <h4>Contract</h4>
                            </div>
                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="variable" value="1" required>
                                    <label for="variable" class="mb-3 form-label mt-2">vast<span
                                            class="text-danger">*</span></label>
                                    @error('variable')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="variable" value="2" required>
                                    <label for="variable" class="mb-3 form-label mt-2">variabel<span
                                            class="text-danger">*</span></label>
                                    @error('variable')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <h4>Type mete</h4>
                            </div>
                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="day_night" value="1" required>
                                    <label for="single" class="mb-3 form-label mt-2">Enkelvoudig<span
                                            class="text-danger">*</span></label>
                                    @error('single')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="day_night" value="2" required>
                                    <label for="day_night" class="mb-3 form-label mt-2">dag/nacht<span
                                            class="text-danger">*</span></label>
                                    @error('day_night')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="day_night" value="3" required>
                                    <label for="day_night" class="mb-3 form-label mt-2">exclusief nacht<span
                                            class="text-danger">*</span></label>
                                    @error('day_night')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <label for="mob_num" class="form-label"><b>EAN code</b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">
                                <div class="mb-2">

                                    <input type="number" class="form-control @error('ean_code') is-invalid @enderror"
                                        id="ean_code" autocomplete="off" placeholder="" name="ean_code"
                                        value="{{ old('ean_code') }}" required>
                                    @error('ean_code')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row">

                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="meter" value="1" required>
                                    <label for="meter" class="mb-3 form-label mt-2"> Meter open<span
                                            class="text-danger">*</span></label>
                                    @error('meter')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="meter" value="2" required>
                                    <label for="meter" class="mb-3 form-label mt-2">Meter gesloten<span
                                            class="text-danger">*</span></label>
                                    @error('meter')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="meter" value="3" required>
                                    <label for="meter" class="mb-3 form-label mt-2">Nieuwe Meter<span
                                            class="text-danger">*</span></label>
                                    @error('meter')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-8">
                        <div class=""><b>Meternummer</b></div>
                    </div>
                    <div class="col-4">
                        <b>Meterstand</b>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="mb-2">

                            <input type="number" class="form-control @error('number') is-invalid @enderror"
                                id="number" autocomplete="off" placeholder="" name="number"
                                value="{{ old('number') }}" required>
                            @error('number')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">

                            <input type="number" class="form-control @error('number_1') is-invalid @enderror"
                                id="number_1" autocomplete="off" placeholder="" name="number_1"
                                value="{{ old('number_1') }}" required>
                            @error('number_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">

                            <input type="number" class="form-control @error('number_2') is-invalid @enderror"
                                id="number_2" autocomplete="off" placeholder="" name="number_2"
                                value="{{ old('number') }}" required>
                            @error('number_2')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">

                            <input type="number" class="form-control @error('number_3') is-invalid @enderror"
                                id="number_3" autocomplete="off" placeholder="" name="number_3"
                                value="{{ old('number_3') }}" required>
                            @error('number')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="">Enkelvoudig</div>
                        <div class="">Tweevoudig dag</div>
                        <div class="">Tweevoudig nacht </div>
                        <div class="">Excl. nacht</div>
                    </div>
                    <div class="col-4">
                        <div class="mb-2">

                            <input type="number" class="form-control @error('number_4') is-invalid @enderror"
                                id="number_4" autocomplete="off" placeholder="" name="number_4"
                                value="{{ old('number_4') }}" required>
                            @error('number_4')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">

                            <input type="number" class="form-control @error('number_5') is-invalid @enderror"
                                id="number_5" autocomplete="off" placeholder="" name="number_5"
                                value="{{ old('number_5') }}" required>
                            @error('number_5')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">

                            <input type="number" class="form-control @error('number_6') is-invalid @enderror"
                                id="number_6" autocomplete="off" placeholder="" name="number_6"
                                value="{{ old('number_6') }}" required>
                            @error('number_6')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">

                            <input type="number" class="form-control @error('number_7') is-invalid @enderror"
                                id="number_7" autocomplete="off" placeholder="" name="number_7"
                                value="{{ old('number_7') }}" required>
                            @error('number_7')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4">
                                <b>Wat is uw jaarlijks verbruik ?</b>
                            </div>
                            <div class="col-8">
                                <div class="mb-2">

                                    <input type="name" class="form-control @error('annual_consumption') is-invalid @enderror"
                                        id="annual_consumption" autocomplete="off" placeholder="" name="annual_consumption"
                                        value="{{ old('annual_consumption') }}" required>
                                    @error('annual_consumption')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <b>Huidige leverancier</b>
                            </div>
                            <div class="col-9">
                                <div class="mb-2">

                                    <input type="name" class="form-control @error('current_supplier') is-invalid @enderror"
                                        id="current_supplier" autocomplete="off" placeholder="" name="current_supplier"
                                        value="{{ old('current_supplier') }}" required>
                                    @error('current_supplier')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <b>Gewenste begindatum</b>
                            </div>
                            <div class="col-9">
                                <div class="mb-2">

                                    <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                                        id="start_date" autocomplete="off" placeholder="Huidige leverancier" name="start_date"
                                        value="{{ old('start_date') }}" required>
                                    @error('start_date')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-2 container">
                            <input type="radio" name="meter_1" value="1" required>
                            <label for="meter_1" class="mb-3 form-label mt-2">Ik wens zo snel mogelijk beleverd te worden<span
                                    class="text-danger">*</span></label>
                            @error('meter_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                <h4>Gas</h4>
                <div class="row">
                    <div class="col-6">
                        <div class=""><b>Tarief</b> <span>Comfy</span></div>
                    </div>
                    <div class="col-6">

                        <div class="mb-2 container">
                            <label for=""><b>Duur</b></label>
                            <input type="radio" name="jaar_1" value="1" required>
                            <label for="jaar_1" class="mb-3 form-label mt-2">1 jaar<span
                                    class="text-danger">*</span></label>
                            @error('jaar_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <h4>Contract</h4>
                            </div>
                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="variable_1" value="1" required>
                                    <label for="variable_1" class="mb-3 form-label mt-2">vast<span
                                            class="text-danger">*</span></label>
                                    @error('variable_1')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="variable_1" value="2" required>
                                    <label for="variable_1" class="mb-3 form-label mt-2">variabel<span
                                            class="text-danger">*</span></label>
                                    @error('variable_1')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <label for="ean_code_1" class="form-label"><b>EAN code</b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">
                                <div class="mb-2">

                                    <input type="number" class="form-control @error('ean_code_1') is-invalid @enderror"
                                        id="ean_code_1" autocomplete="off" placeholder="" name="ean_code_1"
                                        value="{{ old('ean_code_1') }}" required>
                                    @error('ean_code_1')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row">

                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="meter_2" value="1" required>
                                    <label for="meter_2" class="mb-3 form-label mt-2"> Meter open<span
                                            class="text-danger">*</span></label>
                                    @error('meter_2')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="meter_2" value="2" required>
                                    <label for="meter_2" class="mb-3 form-label mt-2">Meter gesloten<span
                                            class="text-danger">*</span></label>
                                    @error('meter_2')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="mb-2 container">
                                    <input type="radio" name="meter_2" value="3" required>
                                    <label for="meter_2" class="mb-3 form-label mt-2">Nieuwe Meter<span
                                            class="text-danger">*</span></label>
                                    @error('meter_2')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <label for="meter_nummer_2" class="form-label"><b>Meternummer</b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">
                                <div class="mb-2">

                                    <input type="number" class="form-control @error('meter_nummer_2') is-invalid @enderror"
                                        id="meter_nummer_2" autocomplete="off" placeholder="" name="meter_nummer_2"
                                        value="{{ old('meter_nummer_2') }}" required>
                                    @error('meter_nummer_2')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-2">
                                <label for="meter_stand_2" class="form-label"><b>Meterstand</b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">
                                <div class="mb-2">

                                    <input type="number" class="form-control @error('meter_stand_2') is-invalid @enderror"
                                        id="meter_stand_2" autocomplete="off" placeholder="" name="meter_stand_2"
                                        value="{{ old('Metermeter_stand_2_stand_2') }}" required>
                                    @error('meter_stand_2')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4">
                                <b>Wat is uw jaarlijks verbruik ?</b>
                            </div>
                            <div class="col-8">
                                <div class="mb-2">

                                    <input type="name" class="form-control @error('annual_consumption_1') is-invalid @enderror"
                                        id="annual_consumption_1" autocomplete="off" placeholder="" name="annual_consumption_1"
                                        value="{{ old('annual_consumption_1') }}" required>
                                    @error('annual_consumption_1')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <b>Huidige leverancier</b>
                            </div>
                            <div class="col-9">
                                <div class="mb-2">

                                    <input type="number" class="form-control @error('current_supplier_1') is-invalid @enderror"
                                        id="current_supplier_1" autocomplete="off" placeholder="" name="current_supplier_1"
                                        value="{{ old('current_supplier_1') }}" required>
                                    @error('current_supplier_1')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-3">
                                <b>Gewenste begindatum</b>
                            </div>
                            <div class="col-9">
                                <div class="mb-2">

                                    <input type="date" class="form-control @error('start_date_1') is-invalid @enderror"
                                        id="start_date_1" autocomplete="off" placeholder="" name="start_date_1"
                                        value="{{ old('start_date_1') }}" required>
                                    @error('start_date_1')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="mb-2 container">
                            <input type="radio" name="meter_3" value="1" required>
                            <label for="meter_3" class="mb-3 form-label mt-2">Ik wens zo snel mogelijk beleverd te worden<span
                                    class="text-danger">*</span></label>
                            @error('meter_3')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <b>Opmerkingen</b>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">

                                    <input type="text" class="form-control @error('current_supplier_2') is-invalid @enderror"
                                        id="current_supplier_2" autocomplete="off" placeholder="" name="current_supplier_2"
                                        value="{{ old('current_supplier_2') }}" required>
                                    @error('current_supplier_2')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </div>
</div>
    </div>
</section>


<section>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
            <div class="col-12">
                <h4>Betalingswijze</h4>
            </div>
        </div>
            <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-2">
                        <h4>Betalingswijze</h4>
                    </div>
                    <div class="col-3">
                        <div class="mb-2 container">
                            <input type="radio" name="transfer" value="1" required>
                            <label for="transfer" class="mb-3 form-label mt-2">Domiciliëring<span
                                    class="text-danger">*</span></label>
                            @error('transfer')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-2 container">
                            <input type="radio" name="transfer" value="2" required>
                            <label for="transfer" class="mb-3 form-label mt-2">Overschrijving<span
                                    class="text-danger">*</span></label>
                            @error('transfer')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">

                        <div class="col-12">
                            <div class="mb-2 container">
                                <input type="radio" name="settlement_invoices" value="1" required>
                                <label for="settlement_invoices" class="mb-3 form-label mt-2">Ik wens alle voorschotfacturen te ontvangen<span
                                        class="text-danger">*</span></label>
                                @error('settlement_invoices')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-4">
                            <b>Rekeningnummer (IBAN)</b>
                        </div>
                        <div class="col-8">
                            <div class="mb-2">

                                <input type="text" class="form-control @error('account_number') is-invalid @enderror"
                                    id="account_number" autocomplete="off" placeholder="(voor terugbetalingen)" name="account_number"
                                    value="{{ old('account_number') }}" required>
                                @error('account_number')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-5">
                        <h4>Frequentie van voorschotten</h4>
                    </div>
                    <div class="col-3">
                        <div class="mb-2 container">
                            <input type="radio" name="monthly" value="1" required>
                            <label for="monthly" class="mb-3 form-label mt-2">Maandelijks<span
                                    class="text-danger">*</span></label>
                            @error('monthly')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-2 container">
                            <input type="radio" name="monthly" value="2" required>
                            <label for="monthly" class="mb-3 form-label mt-2">Driemaandelijks<span
                                    class="text-danger">*</span></label>
                            @error('monthly')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <h4>Verzenden van facturen</h4>
                    </div>
                    <div class="col-3">
                        <div class="mb-2 container">
                            <input type="radio" name="per_post" value="1" required>
                            <label for="per_post" class="mb-3 form-label mt-2">via e-mail<span
                                    class="text-danger">*</span></label>
                            @error('per_post')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-2 container">
                            <input type="radio" name="per_post" value="2" required>
                            <label for="per_post" class="mb-3 form-label mt-2">per post<span
                                    class="text-danger">*</span></label>
                            @error('per_post')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12">
                        <div class="mb-2 container">
                            <input type="radio" name="wish_to_receive" value="1" required>
                            <label for="wish_to_receive" class="mb-3 form-label mt-2">Ik betaal de afrekeningsfacturen via overschrijving<span
                                    class="text-danger">*</span></label>
                            @error('wish_to_receive')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

            </div>
            </div>
        </div>


    </div>
</div>
</div>
</section>


<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">

                <h4>Mandaat SEPA Europese Domiciliëring</h4>
                <div class="row">
                    <div class="">Power Online SA - BE 0535 615 192 - Rue Natalis, 2 - 4020 Luik</div>
                    <div class="">Mandaat referte : BE75ZZZ0535615192</div>
                    <div class="">Voor een terugkerende betaling</div>
                    <div class="">Door ondertekening van dit mandaatformulier geeft u uw toestemming aan
                        MEGA om een opdracht te sturen naar uw bank ten einde een bedrag van
                        uw rekening te debiteren, en uw bank om een bedrag van uw rekening te
                        debiteren in overeenstemming met de opdracht van MEGA. U kun teen
                        Europese Domiciliëring laten terugbetalen. Vraag uw eigen bank naar de
                        voorwaarden. Een verzoek tot terugbetaling moet binnen 8 weken na de
                        datum van debitering van het bedrag van uw rekening worden ingediend</div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-12 mt-5">
                            <b>Naam en Voornaam van de Schuldenaar</b>
                        </div>
                        <div class="col-12">
                            <div class="mb-2">

                                <input type="name" class="form-control @error('name_and_first ') is-invalid @enderror"
                                    id="name_and_first" autocomplete="off" placeholder="" name="name_and_first"
                                    value="{{ old('name_and_first') }}" required>
                                @error('name_and_first')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-2">

                                <input type="name" class="form-control @error('name_and_first_1') is-invalid @enderror"
                                    id="name_and_first_1" autocomplete="off" placeholder="" name="name_and_first_1"
                                    value="{{ old('name_and_first_1') }}" required>
                                @error('name_and_first_1')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-4 ">
                                <b>Rekeningnummer (IBAN)</b>
                            </div>
                            <div class="col-8">
                                <div class="mb-2">

                                    <input type="name" class="form-control @error('account_number_1') is-invalid @enderror"
                                        id="account_number_1" autocomplete="off" placeholder="" name="account_number_1"
                                        value="{{ old('account_number_1') }}" required>
                                    @error('account_number_1')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-1 ">
                            <b>BIC</b>
                        </div>
                        <div class="col-11">
                            <div class="mb-2">

                                <input type="name" class="form-control @error('bic') is-invalid @enderror"
                                    id="bic" autocomplete="off" placeholder="(indien buitenlandse rekening)" name="bic"
                                    value="{{ old('bic') }}" required>
                                @error('bic')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-2">
                        <b>Datum</b>
                    </div>
                    <div class="col-10">
                        <div class="mb-2">

                            <input type="name" class="form-control @error('datum') is-invalid @enderror"
                                id="datum" autocomplete="off" placeholder="datum" name="datum"
                                value="{{ old('datum') }}" required>
                            @error('datum')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
            </div>
            </div>

            <div class="col-6">
                <div class="row">
                    <div class="col-2">
                        <b>Plaats</b>
                    </div>
                    <div class="col-10">
                        <div class="mb-2">

                            <input type="name" class="form-control @error('place') is-invalid @enderror"
                                id="place" autocomplete="off" placeholder="place" name="place"
                                value="{{ old('place') }}" required>
                            @error('place')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
            </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-2">
                        <b>Handtekening</b>
                    </div>
                    {{-- <div class="col-10">
                        <div class="mb-2">

                            <input type="file" class="form-control @error('file_1') is-invalid @enderror"
                                id="file_1" autocomplete="off" placeholder="file_1" name="file_1"
                                value="{{ old('file_1') }}" required>
                            @error('file_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div> --}}
            </div>
            </div>
        </div>
        </div>

        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <div class="col-12">
                        <h4>Overeenstemming</h4>
                        <div class="mb-2 container">
                            <input type="radio" name="read_mega" value="" required>
                            <label for="read_mega" class="mb-3 form-label mt-2">Ik heb de algemene verkoopsvoorwaarden, het privacybeleid en de tariefvoorwaarden van Mega gelezen en ik
                                accepteer ze.<span
                                    class="text-danger">*</span></label>
                            @error('read_mega')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-2">
                            <b>Datum</b>
                        </div>
                        <div class="col-10">
                            <div class="mb-2">

                                <input type="name" class="form-control @error('datum_1') is-invalid @enderror"
                                    id="datum_1" autocomplete="off" placeholder="datum_1" name="datum_1"
                                    value="{{ old('datum_1') }}" required>
                                @error('datum_1')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
                </div>

                <div class="col-6">
                    <div class="row">
                        <div class="col-2">
                            <b>Plaats</b>
                        </div>
                        <div class="col-10">
                            <div class="mb-2">

                                <input type="name" class="form-control @error('place_1') is-invalid @enderror"
                                    id="place_1" autocomplete="off" placeholder="place_1" name="place_1"
                                    value="{{ old('place_1') }}" required>
                                @error('place_1')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-6">
                    <label for="">Handtekening Klant</label>
                    <input type="file" class="form-control @error('file_2') is-invalid @enderror"
                    id="file_2" autocomplete="off" placeholder="place_1" name="file_2"
                    value="{{ old('file_2') }}" required>
                @error('file_2')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="col-6">
                    <label for="">Handtekening MEGA (PowerOnline SA)</label>
                    <input type="file" class="form-control @error('file_3') is-invalid @enderror"
                    id="file_3" autocomplete="off" placeholder="place_1" name="file_3"
                    value="{{ old('file_3') }}" required>
                @error('file_3')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
            </div> --}}
            <div class="row">
                <div class="mt-3">De verbruiker heeft het recht om het huidig leveringscontract op te zeggen - zonder enige betaling van
                    een geldboete en motivering - door MEGA schriftelijk op de hoogte te brengen binnen de 14 dagen na
                    ontvangst van de contractbevestiging (gestuurd door MEGA).</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4">
                            <b>Voorbehouden aan Mega</b>
                        </div>
                        <div class="col-8">
                            <div class="mb-2">

                                <input type="name" class="form-control @error('aan_mega') is-invalid @enderror"
                                    id="aan_mega" autocomplete="off" placeholder="Voorbehouden aan Mega" name="aan_mega"
                                    value="{{ old('aan_mega') }}" required>
                                @error('aan_mega')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4">
                            <b>Ref. Agent</b>
                        </div>
                        <div class="col-8">
                            <div class="mb-2">

                                <input type="number" class="form-control @error('agent') is-invalid @enderror"
                                    id="agent" autocomplete="off" placeholder="Ref. Agent" name="agent"
                                    value="{{ old('agent') }}" required>
                                @error('agent')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4">
                            <b>ID Inschrijving</b>
                        </div>
                        <div class="col-8">
                            <div class="mb-2">

                                <input type="number" class="form-control @error('reference_1') is-invalid @enderror"
                                    id="reference_1" autocomplete="off" placeholder="ID Inschrijving" name="reference_1"
                                    value="{{ old('reference_1') }}" required>
                                @error('reference_1')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    {{-- <div class="mb-2">

                        <input type="file" class="form-control @error('fill_4') is-invalid @enderror"
                            id="fill_4" autocomplete="off" placeholder="" name="fill_4"
                            value="{{ old('fill_4') }}" required>
                        @error('fill_4')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> --}}
                </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="">(*) Door de ondertekening van dit document gaat u akkoord dat uw persoonlijke gegevens worden gebruikt en doorgegeven aan de betrokken energieleverancier(s) en distributienetbeheerder(s) in het kader van deze energleovername.</div>
    <div class="">Overeen komstig de bepalingen van Verodering (EU) 2016/679 van het Europees Parlement en de Raad van 27 april 2016 betreffende de bescherming van natuurlijke personen in verband met de verwerking van persoonsgergevens en het verkeer van gregevens, hebt u recht om op eik moment bezwaar te maken tegen de verwerking van uw gergevens en om de wijziging of verwijdering van uw gergrevens aan de betreffends verantwoorde lijke voor de verwerking te vragen.</div>
</section>

                    <button type="submit" class="btn btn-primary ">Submit</button>
                    <a href="{{ route('mega.index') }}" class="btn btn-light mt-5">Cancel</a>
                </form>




@endsection

