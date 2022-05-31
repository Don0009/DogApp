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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
@endsection
@section('content')
    <form class="forms-sample" method="POST" action="{{ route('comfypro_en_comfyflex_pro.store') }}">
        @csrf
        <section>
            <input type="hidden" name="lang" value="fr">
            <div class="container-fluid">
                <div class="row">
                    {{-- Branding --}}
                    <img class="mt-3 mb-3" style="text-align: center; margin:0 auto;" class="img-responsive"
                        src="{{ asset('images/brands/luminus_logo.svg') }}" height="75px" width="150px" alt="">
                    {{-- Branding ENd --}}
                    <div class="col-4">
                        <h2>Luminus</h2>
                        <p><b>Contrat de fo</b></p>

                        <div class="row">
                            <div class="col-5">
                                urniture d' energie a usage professionnel<label for="client_number"
                                    class="form-label"><b>N de client </b><span class="text-danger">*</span></label>
                            </div>
                            <div class="col-7">
                                <div class="mb-2">

                                    <input type="number" class="form-control @error('client_number') is-invalid @enderror"
                                        id="client_number" autocomplete="off" placeholder="N de client "
                                        name="client_number" value="{{ old('client_number') }}" required>
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
                                id="contact_id" autocomplete="off" placeholder="Contact ID:    002097436555"
                                name="contact_id" value="{{ old('contact_id') }}" required>
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
                                id="present_to_luminus" autocomplete="off" placeholder="Reserve A Luminius"
                                name="present_to_luminus" value="{{ old('present_to_luminus') }}" required>
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

            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h4>Identification et adresse de facturation</h4>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-2">
                                        <label for="client_number_1" class="form-label"><b>Societe</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-10">
                                        <div class="mb-2">

                                            <input type="number"
                                                class="form-control @error('client_number_1') is-invalid @enderror"
                                                id="client_number" autocomplete="off" placeholder="Societe"
                                                name="client_number_1" value="{{ old('client_number') }}" required>
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
                                                <label for="mob_num" class="form-label"><b>Forme juridique</b><span
                                                        class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-8">
                                                <div class="mb-2">

                                                    <input type="name"
                                                        class="form-control @error('company_form') is-invalid @enderror"
                                                        id="company_form" autocomplete="off" placeholder="Forme juridique"
                                                        name="company_form" value="{{ old('company_form') }}" required>
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
                                                <label for="mob_num" class="form-label"><b>Numerio d' enterprise <b>
                                                            BE</b></b><span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-7">
                                                <div class="mb-2">

                                                    <input type="name"
                                                        class="form-control @error('company_number') is-invalid @enderror"
                                                        id="company_number" autocomplete="off"
                                                        placeholder="Numerio d' enterprise BE" name="company_number"
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
                                                <label for=""><b>Valablement representee par</b></label>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-2 container">
                                                    <input type="radio" name="dhr" value="1" required>
                                                    <label for="dhr" class="mb-3 form-label mt-2">M<span
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
                                                    <input type="radio" name="dhr" value="2" required>
                                                    <label for="dhr" class="mb-3 form-label mt-2">Mme<span
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
                                                <label for=""><b>Langue:</b></label>
                                            </div>
                                            <div class="col-4">
                                                <div class="mb-2 container">
                                                    <input type="radio" name="nl" value="1" required>
                                                    <label for="nl" class="mb-3 form-label mt-2">F<span
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
                                                    <input type="radio" name="nl" value="2" required>
                                                    <label for="nl" class="mb-3 form-label mt-2">NL<span
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
                                        <label for="mob_num" class="form-label"><b>Nom</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-11">

                                        <div class="mb-2">

                                            <input type="name" class="form-control @error('name') is-invalid @enderror"
                                                id="name" autocomplete="off" placeholder="Nom" name="name"
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
                                        <label for="mob_num" class="form-label"><b>prenom</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-10">

                                        <div class="mb-2">

                                            <input type="name"
                                                class="form-control @error('first_name') is-invalid @enderror" id="name"
                                                autocomplete="off" placeholder="prenom" name="first_name"
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
                                        <label for="mob_num" class="form-label"><b>Adresse</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-11">

                                        <div class="mb-2">

                                            <input type="name" class="form-control @error('address') is-invalid @enderror"
                                                id="name" autocomplete="off" placeholder="Adresse" name="address"
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
                                        <label for="mob_num" class="form-label"><b>N.</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-11">

                                        <div class="mb-2">

                                            <input type="name" class="form-control @error('nr') is-invalid @enderror"
                                                id="nr" autocomplete="off" placeholder="N." name="nr"
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
                                        <label for="mob_num" class="form-label"><b>Boite</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-11">

                                        <div class="mb-2">

                                            <input type="name" class="form-control @error('bus') is-invalid @enderror"
                                                id="bus" autocomplete="off" placeholder="Boite" name="bus"
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
                                        <label for="mob_num" class="form-label"><b>Code postal</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-10">

                                        <div class="mb-2">

                                            <input type="name"
                                                class="form-control @error('post_code') is-invalid @enderror"
                                                id="post_code" autocomplete="off" placeholder="Code postal" name="post_code"
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
                                        <label for="mob_num" class="form-label"><b>Ville</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-10">

                                        <div class="mb-2">

                                            <input type="name"
                                                class="form-control @error('township') is-invalid @enderror" id="township"
                                                autocomplete="off" placeholder="Ville" name="township"
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
                                        <label for="e_mail" class="form-label"><b>E-mail</b><span
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
                                        <label for="tel_nr" class="form-label"><b>N de tel.</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-10">

                                        <div class="mb-2">

                                            <input type="name" class="form-control @error('tel_nr') is-invalid @enderror"
                                                id="tel_nr" autocomplete="off" placeholder="N de tel." name="tel_nr"
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
                                        <label for="faxnr" class="form-label"><b>N de fax.</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-10">

                                        <div class="mb-2">

                                            <input type="name" class="form-control @error('faxnr') is-invalid @enderror"
                                                id="faxnr" autocomplete="off" placeholder="N de fax." name="faxnr"
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
                                        <label for="gsm_nr" class="form-label"><b>N de GSM</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-10">

                                        <div class="mb-2">

                                            <input type="name" class="form-control @error('gsm_nr') is-invalid @enderror"
                                                id="gsm_nr" autocomplete="off" placeholder="N de GSM" name="gsm_nr"
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
                </div>
            </div>

        </section>

        <section>

            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h4>Adresse de fourniture (si autre que I'adresse de facturation)</h4>
                            <div class="col-5">
                                <div class="row">
                                    <div class="col-2">
                                        <label for="address_1" class="form-label"><b>Adresse</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-10">

                                        <div class="mb-2">

                                            <input type="name"
                                                class="form-control @error('address_1') is-invalid @enderror"
                                                id="address_1" autocomplete="off" placeholder="Adres" name="address_1"
                                                value="{{ old('address_1') }}" required>
                                            @error('address_1')
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
                                                <label for="nr_1" class="form-label"><b>N</b><span
                                                        class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-10">

                                                <div class="mb-2">

                                                    <input type="name"
                                                        class="form-control @error('nr_1') is-invalid @enderror" id="nr_1"
                                                        autocomplete="off" placeholder="N" name="nr_1"
                                                        value="{{ old('nr_1') }}" required>
                                                    @error('nr_1')
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
                                                <label for="bus_1" class="form-label"><b>Boite</b><span
                                                        class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-10">

                                                <div class="mb-2">

                                                    <input type="name"
                                                        class="form-control @error('bus_1') is-invalid @enderror"
                                                        id="bus_1" autocomplete="off" placeholder="Boite" name="bus_1"
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

                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-2">
                                                <label for="mob_num" class="form-label"><b>Etaqe</b><span
                                                        class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-10">

                                                <div class="mb-2">

                                                    <input type="name"
                                                        class="form-control @error('deep') is-invalid @enderror" id="deep"
                                                        autocomplete="off" placeholder="Etaqe" name="deep"
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
                                            <label for="mob_num" class="form-label"><b>Code postal</b><span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-10">

                                            <div class="mb-2">

                                                <input type="name"
                                                    class="form-control @error('post_code_1') is-invalid @enderror"
                                                    id="post_code_1" autocomplete="off" placeholder="Code postal"
                                                    name="post_code_1" value="{{ old('post_code_1') }}" required>
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
                                            <label for="mob_num" class="form-label"><b>Ville</b><span
                                                    class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-10">

                                            <div class="mb-2">

                                                <input type="name"
                                                    class="form-control @error('township_1') is-invalid @enderror"
                                                    id="township_1" autocomplete="off" placeholder="Ville" name="township_1"
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
            </div>
        </section>

        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>Electriciteit</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-2 container">
                                            <input type="radio" name="want_luminus" value="1" required>
                                            <label for="want_luminus" class="mb-3 form-label mt-2">Je souhaite Luminus
                                                Comfy Pro<span class="text-danger">*</span></label>
                                            @error('want_luminus')
                                                <span class="invalid-feedback mb-2" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-2 container">
                                            <input type="radio" name="want_luminus" value="2" required>
                                            <label for="want_luminus" class="mb-3 form-label mt-2"><b>Je souhaite Luminus
                                                    ComfyFlex Pro</b><span class="text-danger">*</span></label>
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
                                            <input type="radio" name="existing_connection" value="1" required>
                                            <label for="existing_connection" class="mb-3 form-label mt-2">raccordenement
                                                existant<span class="text-danger">*</span></label>
                                            @error('existing_connection')
                                                <span class="invalid-feedback mb-2" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2 container">
                                            <input type="radio" name="existing_connection" value="2" required>
                                            <label for="existing_connection" class="mb-3 form-label mt-2">nouveau
                                                raccordenement<span class="text-danger">*</span></label>
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
                                                <b>Numero EAN(Ce numero figure sur les factures de votre fournisseur actuel
                                                    et debute toujours par 54.)</b>
                                            </div>
                                            <div class="col-9">
                                                <div class="mb-2">

                                                    <input type="number"
                                                        class="form-control @error('ean_number') is-invalid @enderror"
                                                        id="ean_number" autocomplete="off" placeholder="5 4"
                                                        name="ean_number" value="{{ old('ean_number') }}" required>
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
                                                <b>Fournisseur actuel</b>
                                            </div>
                                            <div class="col-9">
                                                <div class="mb-2">

                                                    <input type="name"
                                                        class="form-control @error('current_supplier') is-invalid @enderror"
                                                        id="current_supplier" autocomplete="off"
                                                        placeholder="Fournisseur actuel" name="current_supplier"
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
                                                <b>Nomk de votre gestionaire de reseau</b>
                                            </div>
                                            <div class="col-9">
                                                <div class="mb-2">

                                                    <input type="name"
                                                        class="form-control @error('name_your_network_operator') is-invalid @enderror"
                                                        id="name_your_network_operator" autocomplete="off"
                                                        placeholder="Nomk de votre gestionaire de reseau"
                                                        name="name_your_network_operator"
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
                                                <b>Date souhantee de mise en service (JJ/MM/AAAA):</b>
                                            </div>
                                            <div class="col-9">
                                                <div class="mb-2">

                                                    <input type="date"
                                                        class="form-control @error('desired_switchover_date') is-invalid @enderror"
                                                        id="desired_switchover_date" autocomplete="off"
                                                        placeholder="Date souhantee de mise en service (JJ/MM/AAAA)"
                                                        name="desired_switchover_date"
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
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>Gas</h4>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-2 container">
                                            <input type="radio" name="want_luminus_1" value="1" required>
                                            <label for="want_luminus_1" class="mb-3 form-label mt-2"><b>Je souhaite Luminus
                                                    Comfy Pro</b><span class="text-danger">*</span></label>
                                            @error('want_luminus_1')
                                                <span class="invalid-feedback mb-2" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2 container">
                                            <input type="radio" name="want_luminus_1" value="2" required>
                                            <label for="want_luminus" class="mb-3 form-label mt-2"><b>Je souhaite Luminus
                                                    ComfyFlex Pro</b><span class="text-danger">*</span></label>
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
                                            <input type="radio" name="existing_connection_1" value="1" required>
                                            <label for="existing_connection_1" class="mb-3 form-label mt-2"><b>raccordement
                                                    existant</b><span class="text-danger">*</span></label>
                                            @error('existing_connection_1')
                                                <span class="invalid-feedback mb-2" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-2 container">
                                            <input type="radio" name="existing_connection_1" value="2" required>
                                            <label for="existing_connection_1" class="mb-3 form-label mt-2">nouveau
                                                raccordement<span class="text-danger">*</span></label>
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
                                                <b>Numero EAN(Ce numero figure sur les factures de votre fournisseur actuel
                                                    et debute toujours par 54.)</b>
                                            </div>
                                            <div class="col-9">
                                                <div class="mb-2">

                                                    <input type="number"
                                                        class="form-control @error('ean_number_1') is-invalid @enderror"
                                                        id="ean_number_1" autocomplete="off" placeholder="5 4"
                                                        name="ean_number_1" value="{{ old('ean_number_1') }}" required>
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
                                                <b>Fournisseur actuel</b>
                                            </div>
                                            <div class="col-9">
                                                <div class="mb-2">

                                                    <input type="name"
                                                        class="form-control @error('current_supplier_1') is-invalid @enderror"
                                                        id="current_supplier_1" autocomplete="off"
                                                        placeholder="Fournisseur actuel" name="current_supplier_1"
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
                                                <b>Nomk de votre gestionaire de reseau</b>
                                            </div>
                                            <div class="col-9">
                                                <div class="mb-2">

                                                    <input type="name"
                                                        class="form-control @error('name_your_network_operator_1') is-invalid @enderror"
                                                        id="name_your_network_operator_1" autocomplete="off"
                                                        placeholder="Naam van uw netbeheerder"
                                                        name="name_your_network_operator_1"
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
                                                <b>Date souhantee de mise en service (JJ/MM/AAAA):</b>
                                            </div>
                                            <div class="col-9">
                                                <div class="mb-2">

                                                    <input type="date"
                                                        class="form-control @error('desired_switchover_date_1') is-invalid @enderror"
                                                        id="desired_switchover_date_1" autocomplete="off"
                                                        placeholder="Date souhantee de mise en service (JJ/MM/AAAA):"
                                                        name="desired_switchover_date_1"
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
                </div>
            </div>
        </section>


        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>Mode d' envoi et mode de paiement des factures pour I'electricite et/ou le qaz</h4>
                                <div class="">(Toutes les informations figurent dans les conditions
                                    particulieres applicables au tarif que vous avez choisi. Si vous ne cochez rien ou si
                                    vous completez</div>
                                <div class="">erronement votre avis avis de domiciliation, vous devrez
                                    automatiqurment payer par virement).</div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-2 container">
                                            <input type="radio" name="digitale" value="1" required>
                                            <label for="digitale" class="mb-3 form-label mt-2"><b>Facture digitale</b> .Je
                                                recois toutes mes factures via email<span
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
                                            <input type="radio" name="domiciliering" value="1" required>
                                            <label for="domiciliering" class="mb-3 form-label mt-2"><b>Domiciliation.</b>
                                                pendat la duree de mon contract, mes factures seront debitees mensuellement
                                                de mon compte bancaire. La duree du mandat de domiciliation se limitee a la
                                                duree du contrat, y compris le dalai necessaire pour le traitement et le
                                                reglement de mon decompte.<b>Le mandat de domiciliation ci-dessous est
                                                    d'application</b>
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
                                            <input type="radio" name="advance_invoices" value="1" required>
                                            <label for="advance_invoices" class="mb-3 form-label mt-2">pour mes factures
                                                d'acompte et mes decomptes<span class="text-danger">*</span></label>
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
                                            <input type="radio" name="my_advance_invoices" value="1" required>
                                            <label for="my_advance_invoices" class="mb-3 form-label mt-2">uniqiement pour
                                                mes factures d'acompte et pour mes decomptes<span
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
                                            <input type="radio" name="transfer" value="1" required>
                                            <label for="transfer" class="mb-3 form-label mt-2">Virement<span
                                                    class="text-danger">*</span></label>
                                            @error('transfer')
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
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mt-3">Le soussigne reconnait expressement avoir pris
                                            connaissance, avant la conclusion du present contract, des Condition generales
                                            au verso de ce contract et des COnditions patticulieres, les avoir comprises et
                                            acceptees.Le soussigne mandate Luminus pour entreprendre toutes les actions en
                                            son nom et pour son compte en vue du changement de fournisseur, en vue du
                                            raccordement au reseau et pour obtenir toutes les donnees (de consommation), y
                                            compris les donnees historiques, awes du gestionnaire de reseau. </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mt-3">Si nous ne vous notifions pas par ecrit, endeans les 20
                                            jours ouvrables, que sur base de donnees objectives vous n'etes pas solvable, le
                                            contrat de foumiture devient definitif. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <h4>Voorschotbedrag energie (incl. btw)</h4>
                        <div class="row">
                            <div class="col-6">
                                <div class="row">
                                    <div class="">
                                        <b>Montant acompte mensuel electricite</b>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">

                                            <input type="name"
                                                class="form-control @error('payment_for_electricity') is-invalid @enderror"
                                                id="payment_for_electricity" autocomplete="off"
                                                placeholder="Maandelijks voorschotbedrag electriciteit"
                                                name="payment_for_electricity"
                                                value="{{ old('payment_for_electricity') }}" required>
                                            @error('payment_for_electricity')
                                                <span class="invalid-feedback mb-2" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="">
                                        <b>Montant acompte mensuel gaz</b>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-2">

                                            <input type="name"
                                                class="form-control @error('advance_gas') is-invalid @enderror"
                                                id="advance_gas" autocomplete="off"
                                                placeholder="Maandelijks voorschotbedrag gas" name="advance_gas"
                                                value="{{ old('advance_gas') }}" required>
                                            @error('advance_gas')
                                                <span class="invalid-feedback mb-2" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="">*Donnees de consommation survant le demier decompute.</div>
                                    <div class="">Si la consommation pour I'addresse de furniture diverge,
                                        contactez-nous.</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="">
                                    <b>Consommation annuelle* electricite</b>
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

                                        <input type="number"
                                            class="form-control @error('kWh_excl_nacht') is-invalid @enderror"
                                            id="kWh_excl_nacht" autocomplete="off" placeholder="kWh excl. nacht"
                                            name="kWh_excl_nacht" value="{{ old('kWh_excl_nacht') }}" required>
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
                                                <b>Consommation annuelle* gaz</b>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-2">

                                                    <input type="name"
                                                        class="form-control @error('annual_consumption') is-invalid @enderror"
                                                        id="annual_consumption" autocomplete="off"
                                                        placeholder="Consommation annuelle* gaz" name="annual_consumption"
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
                                <h4>Signature du client </h4>
                                <div class="">Ce contrat n'et pas valable sans la signature du dient dans la
                                    case prevue a cet effet</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-1">
                                        <label for="mob_num" class="form-label"><b>Nom</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-11">
                                        <div class="mb-2">

                                            <input type="name" class="form-control @error('naam_1') is-invalid @enderror"
                                                id="naam_1" autocomplete="off" placeholder="Nom" name="naam_1"
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
                                        <label for="mob_num" class="form-label"><b>Date</b><span
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
                                        <label for="mob_num" class="form-label"><b>Lieu</b><span
                                                class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-11">
                                        <div class="mb-2">

                                            <input type="name" class="form-control @error('place_1') is-invalid @enderror"
                                                id="place_1" autocomplete="off" placeholder="Lieu" name="place_1"
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
                                <div class=""> le declare que mon entreprise emploie</div>
                            </div>
                            <div class="col-4">
                                <div class="mb-2 container">
                                    <input type="radio" name="personen" value="1" required>
                                    <label for="personen" class="mb-3 form-label mt-2">5 personnes ou plus<span
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
                                    <input type="radio" name="personen" value="2" required>
                                    <label for="personen" class=" form-label ">moins de 5 personnes<span
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
                                <div class=""> Je m'engage a signaler a Luminus tout changement a ce sujet.
                                </div>
                                <div class=""> Je declare que tons les points de livraison mentionnes dans ce
                                    contrat sont uniquement reserves a un usage professionnel, a I'exclusion de toute
                                    consommation domestique.</div>
                                <div class="">I'exclusion de toute consommation domestique</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-2 container">
                                    <input type="radio" name="emails_or_text_messages" value="1" required>
                                    <label for="emails_or_text_messages" class="mb-3 form-label mt-2">Si vous ne souhaitez
                                        pas recevoir des e-maih ou SMS concemant des produits et services similaires au
                                        produit ou service vendu, veuillez cocher cette case. Pour plus d'informations, nous
                                        vous renvoyons vers notre site web-Mentions legales et politique de confidentialite.
                                        <span class="text-danger">*</span></label>
                                    @error('emails_or_text_messages')
                                        <span class="invalid-feedback mb-2" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-4">
                                <label for="klantenrelaties" class="form-label"><b>Pour Luminus SA: Henri Buenen, Directeur Relations Clients  </b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-8">
                                <div class="mb-2">

                                    <input type="file" class="form-control @error('klantenrelaties') is-invalid @enderror"
                                        id="klantenrelaties" autocomplete="off" placeholder="Pour Luminus SA: Henri Buenen, Directeur Relations Clients " name="klantenrelaties"
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
                                <label for="akkoord" class="form-label"><b>Signature de la personne representant valablement le diem, pour accord
                                </b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-8">
                                <div class="mb-2">

                                    <input type="file" class="form-control @error('akkoord') is-invalid @enderror"
                                        id="akkoord" autocomplete="off" placeholder="Signature de la personne representant valablement le diem, pour accord
                                        " name="akkoord"
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
                </div> --}}
                    </div>
                </div>

            </div>
        </section>


        <section>
            <div class="container-fluid">
                <div class="row">
                    <h6>Mandat SEPA domiciliation europeanne(veuillez)</h6>
                    <div class="col-5">
                        <div class="card">
                            <div class="card-body">
                                <h6>Identification du Mandat(a completer par Luminus SA)</h6>
                                <div class="row">
                                    <div class="col-1">
                                        <div class="mb-2 ">
                                            <input type="radio" name="door" value="1" required>

                                            @error('door')
                                                <span class="invalid-feedback mb-2" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <label for="gsm">reference du mandaat</label>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group">

                                            <input type="number" class="form-control" id="referte" autocomplete="off"
                                                placeholder="9000162137674" name="referte">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-5">Description du contract correspondant: approvisionment
                                            en energie.</div>
                                        <div class="mt-2"><b>Type de paiement:</b> recurrnt</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        En signant ce formulaire de mandat, vous autorisez (A) luminus SA a envoyer des
                                        instructions a votre banque pour debiter votre compte et (8) votre banque a debiter
                                        votre compte confor moment aux instructions de luminus
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12">
                                        Vous btheficiez d'un droit de remboursement par votre banque selon les conditions
                                        Sites dans la convention que vous avez passee avec elle. Toute demande de
                                        remboursement doll etre presentee dans les S semaines suivant la date de debit de
                                        votre compte.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                Tous les champs sont obligatoires.
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="card">
                            <div class="card-body">
                                <h6>Identification du debiteur (a completer par le debiteur)</h6>
                                <div class="row">
                                    <div class="col-1">
                                        <label for="name">Nom</label>
                                    </div>
                                    <div class="col-11">
                                        <div class="form-group">

                                            <input required type="name" class="form-control" id="name_1"
                                                autocomplete="off" placeholder="Nom" name="name_1">
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-1">
                                        <label for="adres">Adresse</label>
                                    </div>
                                    <div class="col-11">
                                        <div class="form-group">

                                            <input required type="name" class="form-control" id="adres"
                                                autocomplete="off" placeholder="Adresse" name="adres">
                                        </div>

                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-5">
                                        <div class="row">
                                            <div class="col-3">
                                                <label for="post_code_2">Code Postal:</label>
                                            </div>
                                            <div class="col-9">
                                                <div class="form-group">

                                                    <input required type="name" class="form-control" id="post_code_2"
                                                        autocomplete="off" placeholder="Code Postal" name="post_code_2">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="row">
                                            <div class="col-1">
                                                <label for="adres">Lieu:</label>
                                            </div>
                                            <div class="col-11">
                                                <div class="form-group">

                                                    <input required type="name" class="form-control" id="stad"
                                                        autocomplete="off" placeholder="Lieu" name="stad">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-2">
                                                <label for="adres">Pays:</label>
                                            </div>
                                            <div class="col-10">
                                                <div class="form-group">

                                                    <input required type="name" class="form-control" id="land"
                                                        autocomplete="off" placeholder="Pays" name="land">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="">verzoekt de firma Luminus NV, Koning Albert || laan 7,
                                            1210 Brussel, Belgie, met identificatienummer Be50ZZZ0471811661 om,</div>
                                        <div class="">vanaf heden en tot uitdrukkelijke herroeping van deze
                                            opdracht, alle facturen te incasseren van het rekeningnummer</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-1">
                                        <label for="adres"><b>IBAN*.</b></label>
                                    </div>
                                    <div class="col-11">
                                        <div class="form-group">

                                            <input required type="name" class="form-control" id="iban" autocomplete="off"
                                                placeholder="Land" name="iban">
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-3">
                                        <label for="adres"><b>Code BIC votre banque*.</b></label>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group">

                                            <input required type="number" class="form-control" id="code"
                                                autocomplete="off" placeholder="Uw bank BIC code" name="code">
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="row">
                                            <div class="col-3">
                                                <label for="datum">Date</label>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">

                                                    <input required type="date" class="form-control" id="datum"
                                                        autocomplete="off" placeholder="Date" name="datum">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label for="plaats">Lieu</label>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">

                                                    <input required type="name" class="form-control" id="plaats"
                                                        autocomplete="off" placeholder="Lieu" name="plaats">
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-3">
                                                <label for="client_9">N de client</label>
                                            </div>
                                            <div class="col-8">
                                                <div class="form-group">

                                                    <input required type="name" class="form-control" id="client_9"
                                                        autocomplete="off" placeholder="Lieu" name="client_9">
                                                </div>

                                            </div>
                                        </div>

                                        {{-- <div class="row">
                            <div class="col-3">
                                <label for="client_5">N de client</label>
                            </div>
                            <div class="col-8">
                                <div class="form-group">

                                    <input required type="name" class="form-control" id="client_5"
                                        autocomplete="off" placeholder="N de client"
                                        name="client_5">
                                </div>

                            </div>
                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        <button type="submit" class="btn btn-primary ">Submit</button>
        <a href="{{ route('comfypro_en_comfyflex_pro.index') }}" class="btn btn-light mt-5">Cancel</a>
    </form>
@endsection
