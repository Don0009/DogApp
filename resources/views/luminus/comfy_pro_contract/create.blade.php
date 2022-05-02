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


<form class="forms-sample" method="POST" action="{{ route('comfy_pro_contract.store') }}">
@csrf
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <h2>Luminus</h2>
                <p><b>Leveringscontact voor energir voor professoneel gebruik - COMFY PRO+</b></p>

                <div class="row">
                    <div class="col-5">
                        <label for="mob_num" class="form-label"><b>Klantnummer</b><span
                            class="text-danger">*</span></label>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">

                            <input type="number" class="form-control @error('client_number') is-invalid @enderror"
                                id="client_number" autocomplete="off" placeholder="Klantnummer" name="client_number"
                                value="{{ old('client_number') }}" required>
                            @error('client_number')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h4>C+ DK SOHO NL</h4>
                <div class="mb-2">

                    <input type="number" class="form-control @error('contact_id') is-invalid @enderror"
                        id="contact_id" autocomplete="off" placeholder="Contact ID:    002097436555" name="contact_id"
                        value="{{ old('contact_id') }}" required>
                    @error('contact_id')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2">

                    <input type="number" class="form-control @error('dealer_id') is-invalid @enderror"
                        id="dealer_id" autocomplete="off" placeholder="Dealer ID:" name="dealer_id"
                        value="{{ old('dealer_id') }}" required>
                    @error('dealer_id')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2">

                    <input type="number" class="form-control @error('seller_id') is-invalid @enderror"
                        id="seller_id" autocomplete="off" placeholder="Seller ID" name="seller_id"
                        value="{{ old('seller_id') }}" required>
                    @error('seller_id')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="col-4">
                <div class="mb-2">

                    <input type="number" class="form-control @error('present_to_luminus') is-invalid @enderror"
                        id="present_to_luminus" autocomplete="off" placeholder="Present To Luminus" name="present_to_luminus"
                        value="{{ old('present_to_luminus') }}" required>
                    @error('present_to_luminus')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <h4>Identificatie- en factureingsadres</h4>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-2">
                    <label for="mob_num" class="form-label"><b>Bedrijfs-name</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-10">
                    <div class="mb-2">

                        <input type="number" class="form-control @error('client_number') is-invalid @enderror"
                            id="client_number" autocomplete="off" placeholder="Bedrijfs-name" name="client_number"
                            value="{{ old('client_number') }}" required>
                        @error('client_number')
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
                <div class="col-5">
                    <div class="row">
                        <div class="col-4">
                            <label for="mob_num" class="form-label"><b>Vennoot-schapsvorm</b><span
                                class="text-danger">*</span></label>
                        </div>
                        <div class="col-8">
                            <div class="mb-2">

                                <input type="name" class="form-control @error('company_form') is-invalid @enderror"
                                    id="company_form" autocomplete="off" placeholder="Vennoot-schapsvorm" name="company_form"
                                    value="{{ old('company_form') }}" required>
                                @error('company_form')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-7">
                    <div class="row">
                        <div class="col-5">
                            <label for="mob_num" class="form-label"><b>Ondernemingsnummer <b> BE</b></b><span
                                class="text-danger">*</span></label>
                        </div>
                        <div class="col-7">
                            <div class="mb-2">

                                <input type="name" class="form-control @error('company_number') is-invalid @enderror"
                                    id="company_number" autocomplete="off" placeholder="Ondernemingsnummer BE" name="company_number"
                                    value="{{ old('company_number') }}" required>
                                @error('company_number')
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
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            <label for=""><b>Geldig vertegenwoordigd door</b></label>
                        </div>
                        <div class="col-4">
                            <div class="mb-2 container">
                                <input type="radio" name="dhr" value="0" required>
                                <label for="dhr" class="mb-3 form-label mt-2">Dhr.<span
                                        class="text-danger">*</span></label>
                                @error('dhr')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-2 container">
                                <input type="radio" name="dhr" value="1" required>
                                <label for="dhr" class="mb-3 form-label mt-2">Mevr.<span
                                        class="text-danger">*</span></label>
                                @error('dhr')
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
                    <div class="col-4">
                        <label for=""><b>Taalcode:</b></label>
                    </div>
                    <div class="col-4">
                        <div class="mb-2 container">
                            <input type="radio" name="nl" value="0" required>
                            <label for="nl" class="mb-3 form-label mt-2">NL<span
                                    class="text-danger">*</span></label>
                            @error('nl')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-2 container">
                            <input type="radio" name="nl" value="1" required>
                            <label for="nl" class="mb-3 form-label mt-2">FR<span
                                    class="text-danger">*</span></label>
                            @error('nl')
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


    <div class="row">
        <div class="col-7">
            <div class="row">
                <div class="col-1">
                    <label for="mob_num" class="form-label"><b>Naam</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-11">

                    <div class="mb-2">

                        <input type="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" autocomplete="off" placeholder="Naam" name="name"
                            value="{{ old('name') }}" required>
                        @error('name')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="row">
                <div class="col-2">
                    <label for="mob_num" class="form-label"><b>Voornaam</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-10">

                    <div class="mb-2">

                        <input type="name" class="form-control @error('first_name') is-invalid @enderror"
                            id="name" autocomplete="off" placeholder="Voornaam" name="first_name"
                            value="{{ old('first_name') }}" required>
                        @error('name')
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
                <div class="col-1">
                    <label for="mob_num" class="form-label"><b>Adres</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-11">

                    <div class="mb-2">

                        <input type="name" class="form-control @error('address') is-invalid @enderror"
                            id="name" autocomplete="off" placeholder="Adres" name="address"
                            value="{{ old('address') }}" required>
                        @error('name')
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
                <div class="col-1">
                    <label for="mob_num" class="form-label"><b>Nr.</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-11">

                    <div class="mb-2">

                        <input type="name" class="form-control @error('nr') is-invalid @enderror"
                            id="nr" autocomplete="off" placeholder="Nr." name="nr"
                            value="{{ old('nr') }}" required>
                        @error('name')
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
                <div class="col-1">
                    <label for="mob_num" class="form-label"><b>Bus</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-11">

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
        <div class="col-4">
            <div class="row">
                <div class="col-2">
                    <label for="mob_num" class="form-label"><b>Postcode</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-10">

                    <div class="mb-2">

                        <input type="name" class="form-control @error('post_code') is-invalid @enderror"
                            id="post_code" autocomplete="off" placeholder="Postcode" name="post_code"
                            value="{{ old('post_code') }}" required>
                        @error('post_code')
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
                <div class="col-2">
                    <label for="mob_num" class="form-label"><b>Gemeente</b><span
                        class="text-danger">*</span></label>
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
        <div class="col-12">
            <div class="row">
                <div class="col-2">
                    <label for="mob_num" class="form-label"><b>E-mail</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-10">

                    <div class="mb-2">

                        <input type="mail" class="form-control @error('e_mail') is-invalid @enderror"
                            id="e_mail" autocomplete="off" placeholder="E-mail" name="e_mail"
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
        <div class="col-4">
            <div class="row">
                <div class="col-2">
                    <label for="mob_num" class="form-label"><b>Tel.nr.</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-10">

                    <div class="mb-2">

                        <input type="name" class="form-control @error('tel_nr') is-invalid @enderror"
                            id="tel_nr" autocomplete="off" placeholder="Tel.nr" name="tel_nr"
                            value="{{ old('tel_nr') }}" required>
                        @error('tel_nr')
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
                <div class="col-2">
                    <label for="mob_num" class="form-label"><b>Faxnr.</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-10">

                    <div class="mb-2">

                        <input type="name" class="form-control @error('faxnr') is-invalid @enderror"
                            id="faxnr" autocomplete="off" placeholder="Faxnr." name="faxnr"
                            value="{{ old('faxnr') }}" required>
                        @error('faxnr')
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
                <div class="col-2">
                    <label for="mob_num" class="form-label"><b>Gsm-nr.</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-10">

                    <div class="mb-2">

                        <input type="name" class="form-control @error('gsm_nr') is-invalid @enderror"
                            id="gsm_nr" autocomplete="off" placeholder="Gsm-nr" name="gsm_nr"
                            value="{{ old('gsm_nr') }}" required>
                        @error('gsm_nr')
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
    <h4>Aansluitingsadres (in te vullen indien andres dan identificatie- en factureringsadres)</h4>
    <div class="container-fluid">
        <div class="row">
            <div class="col-5">
                <div class="row">
                    <div class="col-2">
                        <label for="mob_num" class="form-label"><b>Adres</b><span
                            class="text-danger">*</span></label>
                    </div>
                    <div class="col-10">

                        <div class="mb-2">

                            <input type="name" class="form-control @error('address') is-invalid @enderror"
                                id="address" autocomplete="off" placeholder="Adres" name="address"
                                value="{{ old('address') }}" required>
                            @error('address')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-2">
                                <label for="mob_num" class="form-label"><b>Nr</b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">

                                <div class="mb-2">

                                    <input type="name" class="form-control @error('nr') is-invalid @enderror"
                                        id="nr" autocomplete="off" placeholder="Nr" name="nr"
                                        value="{{ old('nr') }}" required>
                                    @error('nr')
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
                            <div class="col-2">
                                <label for="mob_num" class="form-label"><b>Bus</b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">

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

                    <div class="col-4">
                        <div class="row">
                            <div class="col-2">
                                <label for="mob_num" class="form-label"><b>Verdiep</b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">

                                <div class="mb-2">

                                    <input type="name" class="form-control @error('deep') is-invalid @enderror"
                                        id="deep" autocomplete="off" placeholder="Verdiep" name="deep"
                                        value="{{ old('deep') }}" required>
                                    @error('deep')
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

            <div class="row">
                <div class="col-4">
                    <div class="row">
                        <div class="col-2">
                            <label for="mob_num" class="form-label"><b>Postcode</b><span
                                class="text-danger">*</span></label>
                        </div>
                        <div class="col-10">

                            <div class="mb-2">

                                <input type="name" class="form-control @error('post_code_1') is-invalid @enderror"
                                    id="post_code_1" autocomplete="off" placeholder="Postcode" name="post_code_1"
                                    value="{{ old('post_code_1') }}" required>
                                @error('post_code_1')
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
                        <div class="col-2">
                            <label for="mob_num" class="form-label"><b>Gemeente</b><span
                                class="text-danger">*</span></label>
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
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <h4>Electriciteit</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-2 container">
                            <input type="radio" name="want_luminus" value="0" required>
                            <label for="want_luminus" class="mb-3 form-label mt-2">Ik wil Luminus Comfy Pro+<span
                                    class="text-danger">*</span></label>
                            @error('want_luminus')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-2 container">
                            <input type="radio" name="existing_connection" value="0" required>
                            <label for="existing_connection" class="mb-3 form-label mt-2">bestaande aansluiting<span
                                    class="text-danger">*</span></label>
                            @error('existing_connection')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-2 container">
                            <input type="radio" name="existing_connection" value="1" required>
                            <label for="existing_connection" class="mb-3 form-label mt-2">nieuwe aansluiting<span
                                    class="text-danger">*</span></label>
                            @error('existing_connection')
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
                            <div class="col-3">
                                <b>EAN-nummer(Dit nummer kan u vinden op de facturen van uw huidige leverancier en begint steeds met 54.)</b>
                            </div>
                            <div class="col-9">
                                <div class="mb-2">

                                    <input type="number" class="form-control @error('ean_number') is-invalid @enderror"
                                        id="ean_number" autocomplete="off" placeholder="5 4" name="ean_number"
                                        value="{{ old('ean_number') }}" required>
                                    @error('ean_number')
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
                                        id="current_supplier" autocomplete="off" placeholder="Huidige leverancier" name="current_supplier"
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
                                <b>Naam van uw netbeheerder</b>
                            </div>
                            <div class="col-9">
                                <div class="mb-2">

                                    <input type="name" class="form-control @error('name_your_network_operator') is-invalid @enderror"
                                        id="name_your_network_operator" autocomplete="off" placeholder="Naam van uw netbeheerder" name="name_your_network_operator"
                                        value="{{ old('name_your_network_operator') }}" required>
                                    @error('name_your_network_operator')
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
                                <b>Gewenste datum van overschakeling (DD/MM/JJJJ):</b>
                            </div>
                            <div class="col-9">
                                <div class="mb-2">

                                    <input type="date" class="form-control @error('desired_switchover_date') is-invalid @enderror"
                                        id="desired_switchover_date" autocomplete="off" placeholder="Desired switchover date" name="desired_switchover_date"
                                        value="{{ old('desired_switchover_date') }}" required>
                                    @error('desired_switchover_date')
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
                <h4>Electriciteit</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-2 container">
                            <input type="radio" name="want_luminus_1" value="0" required>
                            <label for="want_luminus_1" class="mb-3 form-label mt-2">Ik wil Luminus Comfy Pro+<span
                                    class="text-danger">*</span></label>
                            @error('want_luminus_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="mb-2 container">
                            <input type="radio" name="existing_connection_1" value="0" required>
                            <label for="existing_connection_1" class="mb-3 form-label mt-2">bestaande aansluiting<span
                                    class="text-danger">*</span></label>
                            @error('existing_connection_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-2 container">
                            <input type="radio" name="existing_connection_1" value="1" required>
                            <label for="existing_connection_1" class="mb-3 form-label mt-2">nieuwe aansluiting<span
                                    class="text-danger">*</span></label>
                            @error('existing_connection_1')
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
                            <div class="col-3">
                                <b>EAN-nummer(Dit nummer kan u vinden op de facturen van uw huidige leverancier en begint steeds met 54.)</b>
                            </div>
                            <div class="col-9">
                                <div class="mb-2">

                                    <input type="number" class="form-control @error('ean_number_1') is-invalid @enderror"
                                        id="ean_number_1" autocomplete="off" placeholder="5 4" name="ean_number_1"
                                        value="{{ old('ean_number_1') }}" required>
                                    @error('ean_number_1')
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

                                    <input type="name" class="form-control @error('current_supplier_1') is-invalid @enderror"
                                        id="current_supplier_1" autocomplete="off" placeholder="Huidige leverancier" name="current_supplier_1"
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
                                <b>Naam van uw netbeheerder</b>
                            </div>
                            <div class="col-9">
                                <div class="mb-2">

                                    <input type="name" class="form-control @error('name_your_network_operator_1') is-invalid @enderror"
                                        id="name_your_network_operator_1" autocomplete="off" placeholder="Naam van uw netbeheerder" name="name_your_network_operator_1"
                                        value="{{ old('name_your_network_operator_1') }}" required>
                                    @error('name_your_network_operator_1')
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
                                <b>Gewenste datum van overschakeling (DD/MM/JJJJ):</b>
                            </div>
                            <div class="col-9">
                                <div class="mb-2">

                                    <input type="date" class="form-control @error('desired_switchover_date_1') is-invalid @enderror"
                                        id="desired_switchover_date_1" autocomplete="off" placeholder="Desired switchover date" name="desired_switchover_date_1"
                                        value="{{ old('desired_switchover_date_1') }}" required>
                                    @error('desired_switchover_date_1')
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
            <h4>Verzend-en betalingswijze van de facturen voor elecktriciteit en/of gas</h4>
            <div class="">(Alle informatie hierover vindt u op de bijzondere voorwaarden van toepassing op het door u gekozen tarief. Indien u niets</div>
            <div class="">aankruits of indien u uw domicilieringsbericht foutief invult, zult u automatisch via overschrijving gefactureerd worden.</div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-2 container">
                        <input type="radio" name="digitale" value="0" required>
                        <label for="digitale" class="mb-3 form-label mt-2"><b>Digitale versie.</b> Ik ontvang mijn facturen via e-mail<span
                                class="text-danger">*</span></label>
                        @error('digitale')
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
                        <input type="radio" name="domiciliering" value="0" required>
                        <label for="domiciliering" class="mb-3 form-label mt-2"><b>Domiciliering.</b> Tijdens de duur van mijn contract worden mjn facturen maan =delijks via mijn bankrekening veerrekend. De duurtijd van het domicilleringsmandaat beperkt zich tot de duurtijd
                            van het contract met inbegrip van de termijn nodig voor de verwerking en vereffening van mijn afrek <b>Het onderstaande domicilleringsmandaat geldt</b>
                            <span class="text-danger">*</span></label>
                        @error('domiciliering')
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
                        <input type="radio" name="advance_invoices" value="0" required>
                        <label for="advance_invoices" class="mb-3 form-label mt-2">voor mijn voorschotfacturen en mijn afrekening=ingen<span
                                class="text-danger">*</span></label>
                        @error('advance_invoices')
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
                        <input type="radio" name="my_advance_invoices" value="0" required>
                        <label for="my_advance_invoices" class="mb-3 form-label mt-2">alleen voor mijn voorschotfacturen en niet voor mijn afrekeningen<span
                                class="text-danger">*</span></label>
                        @error('my_advance_invoices')
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
                        <input type="radio" name="transfer" value="0" required>
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
                    <div class="mt-3">De ondergetekende erkent uitdrukkelijk voor de ondertekening van dit contract kennis te hebben genomen van de Algemene Voor-waarden evenals van de Bijzondere voorwaarden (in bijalage), en ze te hebben begrepen en aar=nvard. De ondergetekende machtigt Luminus in zijn naam rekening alle handeling te stellen met oog op leverancierswissel, voor het doorvoeren van de netaansulting en voor het opvragen vaan alle (verbruiks) gegevens, inclusief, bij de netbeheerder</div>
                    <div class="mt-3">Indien wij u niet binnen de 20 werkdagen schriftelijk te kennen geven dat u op basis van objectieve gegevens niet kredietwaardig bent, wordt de leveringsovereenkomst definitief. </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <h4>Voorschotbedrag energie (incl. btw) </h4>
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="">
                            <b>Maandelijks voorschotbedrag elektriciteit </b>
                        </div>
                        <div class="col-12">
                            <div class="mb-2">

                                <input type="name" class="form-control @error('payment_for_electricity') is-invalid @enderror"
                                    id="payment_for_electricity" autocomplete="off" placeholder="Maandelijks voorschotbedrag elektriciteit" name="payment_for_electricity"
                                    value="{{ old('payment_for_electricity') }}" required>
                                @error('payment_for_electricity')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="">*Verbruiksgegevens volgens de meest recente afrekening.</div>
                        <div class="">Indien het verbruik voor het aansluitadres afwjkt, contacteer ons.</div>
                    </div>

                    <div class="row">
                        <div class="">
                            <b>Maandelijks voorschotbedrag gas</b>
                        </div>
                        <div class="col-12">
                            <div class="mb-2">

                                <input type="name" class="form-control @error('advance_gas') is-invalid @enderror"
                                    id="advance_gas" autocomplete="off" placeholder="Maandelijks voorschotbedrag gas" name="advance_gas"
                                    value="{{ old('advance_gas') }}" required>
                                @error('advance_gas')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">*Verbruiksgegevens volgens de meest recente afrekening.</div>
                        <div class="">Indien het verbruik voor het aansluitadres afwjkt, contacteer ons.</div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="">
                        <b>Jaarverbruik* elektriciteit</b>
                    </div>
                    <div class="col-12">
                        <div class="mb-2">

                            <input type="number" class="form-control @error('kWh_dag') is-invalid @enderror"
                                id="kWh_dag" autocomplete="off" placeholder="kWh dag" name="kWh_dag"
                                value="{{ old('kWh_dag') }}" required>
                            @error('kWh_dag')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">

                            <input type="number" class="form-control @error('kWh_nacht') is-invalid @enderror"
                                id="kWh_nacht" autocomplete="off" placeholder="kWh nacht" name="kWh_nacht"
                                value="{{ old('kWh_nacht') }}" required>
                            @error('kWh_nacht')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-2">

                            <input type="number" class="form-control @error('kWh_excl_nacht') is-invalid @enderror"
                                id="kWh_excl_nacht" autocomplete="off" placeholder="kWh excl. nacht" name="kWh_excl_nacht"
                                value="{{ old('kWh_excl_nacht') }}" required>
                            @error('kWh_excl_nacht')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="">
                                    <b>Jaarverbruik* gas</b>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">

                                        <input type="name" class="form-control @error('annual_consumption') is-invalid @enderror"
                                            id="annual_consumption" autocomplete="off" placeholder="Jaarverbruik* gas" name="annual_consumption"
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



                </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h4>Handtekening van de klant</h4>
                        <div class="">Dit contract is niet geldig zonder handtekening van de klant in de daarvoor hieronder vooaiene ruimte. </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-1">
                                <label for="mob_num" class="form-label"><b>Naam</b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-11">
                                <div class="mb-2">

                                    <input type="name" class="form-control @error('naam_1') is-invalid @enderror"
                                        id="naam_1" autocomplete="off" placeholder="Name" name="naam_1"
                                        value="{{ old('naam_1') }}" required>
                                    @error('naam_1')
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
                            <div class="col-1">
                                <label for="mob_num" class="form-label"><b>Datum</b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-11">
                                <div class="mb-2">

                                    <input type="date" class="form-control @error('date_1') is-invalid @enderror"
                                        id="date_1" autocomplete="off" placeholder="Date" name="date_1"
                                        value="{{ old('date_1') }}" required>
                                    @error('date_1')
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
                            <div class="col-1">
                                <label for="mob_num" class="form-label"><b>Plaats</b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-11">
                                <div class="mb-2">

                                    <input type="date" class="form-control @error('place_1') is-invalid @enderror"
                                        id="place_1" autocomplete="off" placeholder="Place" name="place_1"
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





                <div class="row">
                    <div class="col-2">
                        <div class="">Ik verklaar dat mijn onderneming:</div>
                    </div>
                    <div class="col-4">
                        <div class="mb-2 container">
                            <input type="radio" name="personen" value="0" required>
                            <label for="personen" class="mb-3 form-label mt-2">5 of meer personen <span
                                    class="text-danger">*</span></label>
                            @error('personen')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-2 container">
                            <input type="radio" name="personen" value="1" required>
                            <label for="personen" class=" form-label "> minder dan 5 personen<span
                                    class="text-danger">*</span></label>
                            @error('personen')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="">tewerkstelt</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="">Ik verbind me ertoe elke wijziging in dat verband aan lumi nos te melden.</div>
                        <div class="">Ik vedelaar dat alle leveringspunten die vermeld staan in deze overeenkomst uitsluitend voorbehouden zijn voor beroepsgebruik</div>
                        <div class="">met uitsluiting van elk huishoudelijk verbruik.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="mb-2 container">
                            <input type="radio" name="emails_or_text_messages" value="0" required>
                            <label for="emails_or_text_messages" class="mb-3 form-label mt-2">Indien u niet wenst dat wij u e-mails of sms'en sturen over producten en diensten die gelijkaardig zijn aan het gekochte product of dienst, gelieve dit vakje aan tevinken. Voor meer informatie verwijzen wij naar onze website privacy pokcy. <span
                                    class="text-danger">*</span></label>
                            @error('emails_or_text_messages')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-4">
                                <label for="mob_num" class="form-label"><b>Voor Luminus NV Henri Boenen, Directeur Klantenrelaties </b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-8">
                                <div class="mb-2">

                                    <input type="file" class="form-control @error('klantenrelaties') is-invalid @enderror"
                                        id="klantenrelaties" autocomplete="off" placeholder="Voor Luminus NV Henri Boenen, Directeur Klantenrelaties" name="klantenrelaties"
                                        value="{{ old('klantenrelaties') }}" required>
                                    @error('klantenrelaties')
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
                            <div class="col-4">
                                <label for="mob_num" class="form-label"><b>Handtekening van de geldige vertegemodiger van de klant, voor akkoord </b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-8">
                                <div class="mb-2">

                                    <input type="file" class="form-control @error('akkoord') is-invalid @enderror"
                                        id="akkoord" autocomplete="off" placeholder="Handtekening van de geldige vertegemodiger van de klant, voor akkoord" name="akkoord"
                                        value="{{ old('akkoord') }}" required>
                                    @error('akkoord')
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
</section>


<section>

</section>






                    <button type="submit" class="btn btn-primary ">Submit</button>
                    <a href="{{ route('comfy_pro_contract.index') }}" class="btn btn-light mt-5">Cancel</a>
                </form>




@endsection

