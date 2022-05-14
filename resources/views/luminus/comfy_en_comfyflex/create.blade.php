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
<form class="forms-sample" method="POST" action="{{ route('comfy_en_comfyflex.store') }}">
@csrf
<section>

<input type="hidden" name="lang" value="fr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <h2>Luminus</h2>
                <p><b>leveringscontract voor energie</b></p>

                <div class="row">
                    <div class="col-5">
                        <label for="client_number" class="form-label"><b>klantnummer</b><span
                            class="text-danger">*</span></label>
                    </div>
                    <div class="col-7">
                        <div class="mb-2">

                            <input type="name" class="form-control @error('client_number') is-invalid @enderror"
                                id="client_number" autocomplete="off" placeholder="N de client" name="client_number"
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
                <h4>Dk RES NL</h4>
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
                        id="present_to_luminus" autocomplete="off" placeholder="VOORBEHOUBEN AAN LUMINUS" name="present_to_luminus"
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

<div class="container-fluid">
<div class="row">

    <h4>Identification et adresse de facturation</h4>
    <div class="col-6">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <label for="mob_num" class="form-label"><b>identiteitskaartnummer</b><span
                            class="text-danger">*</span></label>
                    </div>
                    <div class="col-6">

                        <div class="mb-2">

                            <input type="name" class="form-control @error('identity_card') is-invalid @enderror"
                                id="identity_card" autocomplete="off" placeholder="identiteitskaartnummer" name="identity_card"
                                value="{{ old('identity_card') }}" required>
                            @error('identity_card')
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
                    <div class="col-6">
                        <label for="mob_num" class="form-label"><b>Geboortedatum</b><span
                            class="text-danger">*</span></label>
                    </div>
                    <div class="col-6">

                        <div class="mb-2">

                            <input type="date" class="form-control @error('naissance') is-invalid @enderror"
                                id="naissance" autocomplete="off" placeholder="Geboortedatum" name="naissance"
                                value="{{ old('naissance') }}" required>
                            @error('naissance')
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
            <div class="col-2">
                <div class="mb-2 container">
                    <input type="radio" name="mme" value="1" required>
                    <label for="m" class="mb-3 form-label mt-2">Dhr.<span
                            class="text-danger">*</span></label>
                    @error('m')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-3">
                <div class="mb-2 container">
                    <input type="radio" name="mme" value="2" required>
                    <label for="mme" class="mb-3 form-label mt-2">Mevr<span
                            class="text-danger">*</span></label>
                    @error('mme')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-1">
                <div class="mt-2">Taalcode:</div>
            </div>
            <div class="col-2">
                <div class="mb-2 container">
                    <input type="radio" name="nl" value="1" required>
                    <label for="f" class="mb-3 form-label mt-2">NL<span
                            class="text-danger">*</span></label>
                    @error('f')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-2">
                <div class="mb-2 container">
                    <input type="radio" name="nl" value="2" required>
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

    <div class="row">
        <div class="col-7">
            <div class="row">
                <div class="col-1">
                    <label for="mob_num" class="form-label"><b>Naam </b><span
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
                    <label for="mob_num" class="form-label"><b>Voornaam</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-10">

                    <div class="mb-2">

                        <input type="name" class="form-control @error('first_name') is-invalid @enderror"
                            id="name" autocomplete="off" placeholder="Prenom" name="first_name"
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
                    <label for="nr" class="form-label"><b>Nr</b><span
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
                    <label for="township" class="form-label"><b>Gemeente</b><span
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
                    <label for="tel_nr" class="form-label"><b>Tel. nr.</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-10">

                    <div class="mb-2">

                        <input type="name" class="form-control @error('tel_nr') is-invalid @enderror"
                            id="tel_nr" autocomplete="off" placeholder="Tel. nr." name="tel_nr"
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

        <div class="col-3">
            <div class="row">
                <div class="col-3">
                    <label for="faxnr" class="form-label"><b>Gsm-nr.</b><span
                        class="text-danger">*</span></label>
                </div>
                <div class="col-9">

                    <div class="mb-2">

                        <input type="name" class="form-control @error('faxnr') is-invalid @enderror"
                            id="faxnr" autocomplete="off" placeholder="Gsm-nr." name="faxnr"
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

        <div class="col-5">
           <div class="row">
               <div class="col-4">
                <div class="">Heeft u recht op een specified sociaal tarief?</div>
               </div>
               <div class="col-4">
                <div class="mb-2 container">
                    <input type="radio" name="non" value="1" required>
                    <label for="non" class="mb-3 form-label mt-2">ja <span
                            class="text-danger">*</span></label>
                    @error('non')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
               </div>
               <div class="col-4">
                <div class="mb-2 container">
                    <input type="radio" name="non" value="2" required>
                    <label for="non" class="mb-3 form-label mt-2">Nee<span
                            class="text-danger">*</span></label>
                    @error('non')
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
            <h4>Aansluitingsadres (in the vullen indien andres den identificatie-en facturingsadres)</h4>
            <div class="col-5">
                <div class="row">
                    <div class="col-2">
                        <label for="address_1" class="form-label"><b>Adres</b><span
                            class="text-danger">*</span></label>
                    </div>
                    <div class="col-10">

                        <div class="mb-2">

                            <input type="name" class="form-control @error('address_1') is-invalid @enderror"
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
                                <label for="nr_1" class="form-label"><b>Nr</b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">

                                <div class="mb-2">

                                    <input type="name" class="form-control @error('nr_1') is-invalid @enderror"
                                        id="nr_1" autocomplete="off" placeholder="Nr" name="nr_1"
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
                                <label for="bus_1" class="form-label"><b>Bus</b><span
                                    class="text-danger">*</span></label>
                            </div>
                            <div class="col-10">

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
                            <label for="township_1" class="form-label"><b>Gemeente</b><span
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
                            <label for="want_luminus" class="mb-3 form-label mt-2">Ik wil Luminus Comfy <span
                                    class="text-danger">*</span></label>
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
                            <label for="want_luminus" class="mb-3 form-label mt-2">Ik wil Luminus Comfyfkex<span
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
                            <input type="radio" name="existing_connection" value="1" required>
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
                            <input type="radio" name="existing_connection" value="2" required>
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
                            <label for="want_luminus_1" class="mb-3 form-label mt-2">Ik wil Luminus Comfy<span
                                    class="text-danger">*</span></label>
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
                            <input type="radio" name="existing_connection_1" value="1" required>
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
                            <input type="radio" name="existing_connection_1" value="2" required>
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
        </div>
    </div>
</section>


<section>
    <div class="container-fluid">
      <div class="row">
          <div class="col-6">
            <div class="card">
                <div class="card-body">
              <h4>Verzend - en betallingswijze van de facturen voor elektriciteit en/of gas  </h4>
              <div class="">(Alle intonate hierover yea u op de bittondere voonvaarden van toepasitg op het door ugekceen tarief.k u nets aatkruin of</div>
              <div class=""> indten u uwdonorilieirgshxicht Monet invulk wit u ata0013b5d1'63 cntrsdritVing gefactureerd warden.) </div>
              <div class="row">
                  <div class="col-12">
                      <div class="mb-2 container">
                          <input type="radio" name="digitale" value="1" required>
                          <label for="digitale" class="mb-3 form-label mt-2"><b>Digitale facturr.</b> Ik ontvang at mijn facturen via email<span
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
                          <input type="radio" name="digitale" value="2" required>
                          <label for="digitale" class="mb-3 form-label mt-2"><b>Domicilering.</b> Tijdens de duur van mijn contract worden mijn facturen via mijn bankrekening verrekend volgens de hiernaast vermeide freguentie. De duurtijd van het dorkilieringsmandaat beperkt zkh tot de duurtijd van het contract met inbegrip van de termijn nodig voor de venwrking en vefeffening van mijn afrekening.<b>Het onderstaande daritiliefingsmandaat geldt</b>
                              <span class="text-danger">*</span></label>
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
                          <input type="radio" name="my_advance_invoices" value="1" required>
                          <label for="digitale" class="mb-3 form-label mt-2"><b>voor mijn voorschotfacturen en mijn afrekeningen</b><span
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
                          <input type="radio" name="my_advance_invoices" value="2" required>
                          <label for="my_advance_invoices" class="mb-3 form-label mt-2">alleen voor mign voorschotfattumn en St voor mijn afrekeningen <span
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
                          <label for="transfer" class="mb-3 form-label mt-2">Overschriping.<span
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
                      <div class="mt-3">Le consommateur a le droit de notifieur au fournisseur qu'ill renonce au contract de fourniture, sans penalite et</div>
                      <div class="mt-3">sans indication de motif endeans les 14 jours calendrier a partir de la reception de la confirmation du contract. </div>
                  </div>
              </div>
            </div>
        </div>

    </div>

          <div class="col-6">
              <h4>Schatting van de jaarlijkse energieprijs en voorschotbedrag</h4>
              <div class="row">
        \
                  <div class="col-4">
                      <div class="">
                          <b>Schatting jaarverbruik electriciteit</b>
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





                  </div>
                  <div class="col-4">
                    <div class="row">
                        <div class="">
                            <b>Schatting jaarlijkse energieprijis voor electriciteit (alle taksen inbegrepen)</b>
                        </div>
                        <div class="col-12">
                            <div class="mb-2">

                                <input type="name" class="form-control @error('annual_consumption_1') is-invalid @enderror"
                                    id="annual_consumption_1" autocomplete="off" placeholder="Estimation du prix annuel pour I'electricite TTC* gas" name="annual_consumption_1"
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




                  <div class="col-4">
                    <div class="row">
                        <div class="">
                            <b>Maandelijks voorschotbedrag electriciteit</b>
                        </div>
                        <div class="col-12">
                            <div class="mb-2">

                                <input type="name" class="form-control @error('annual_consumption_2') is-invalid @enderror"
                                    id="annual_consumption_2" autocomplete="off" placeholder="Montant acompte mensuel electricite" name="annual_consumption_2"
                                    value="{{ old('annual_consumption_2') }}" required>
                                @error('annual_consumption_2')
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
                            <div class="">
                                <b>Schatting jaarverbruik gaz</b>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">

                                    <input type="name" class="form-control @error('annual_consumption_3') is-invalid @enderror"
                                        id="annual_consumption_3" autocomplete="off" placeholder="Montant acompte mensuel electricite" name="annual_consumption_3"
                                        value="{{ old('annual_consumption_3') }}" required>
                                    @error('annual_consumption_3')
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
                            <div class="">
                                <b>Schatting jaarlijkse energieprijis voor gas(alle taksen inbegrepen)</b>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">

                                    <input type="name" class="form-control @error('annual_consumption_4') is-invalid @enderror mt-4"
                                        id="annual_consumption_4" autocomplete="off" placeholder="Montant acompte mensuel electricite" name="annual_consumption_4"
                                        value="{{ old('annual_consumption_4') }}" required>
                                    @error('annual_consumption_4')
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
                            <div class="">
                                <b>Maandelijks voorschotbedrag gaz</b>
                            </div>
                            <div class="col-12">
                                <div class="mb-2">

                                    <input type="name" class="form-control @error('annual_consumption_5') is-invalid @enderror  mt-4"
                                        id="annual_consumption_5" autocomplete="off" placeholder="Montant acompte mensuel electricite" name="annual_consumption_5"
                                        value="{{ old('annual_consumption_5') }}" required>
                                    @error('annual_consumption_5')
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
        <h4><b>Mijn voorsthotbedrag wohlt</b></h4>
        <div class="col-12">
            <div class="mb-2 ">
                <input type="radio" name="bepaaid" value="1" required>
                <label for="bepaaid" class="mb-3 form-label mt-2">bepaaid in samenspraak met Luminu<span
                        class="text-danger">*</span></label>
                @error('bepaaid')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>

    </div>


    <div class="row">
        <div class="col-12">
            <div class="mb-2 ">
                <input type="radio" name="gebaseerd" value="1" required>
                <label for="gebaseerd" class="ml-4 form-label" style="margin-top: -50px">gebaseerd op wat ik nu betaal bij mijn huidige leverancier <span
                        class="text-danger">*</span></label>
                @error('gebaseerd')
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
            <div class="col-12">

      <div class="mb-2 container">
        <input type="radio" name="maandelijks" value="1" required>
        <label for="maandelijks" class="mb-3 form-label mt-2"><b>maandelijks   <span
                class="text-danger">*</span></label>
        @error('maandelijks')
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
        <input type="radio" name="maandelijks" value="2" required>
        <label for="maandelijks" class="mb-3 form-label mt-2"><b>2-maandelijks <span
                class="text-danger">*</span></label>
        @error('maandelijks')
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
        <input type="radio" name="maandelijks" value="3" required>
        <label for="maandelijks" class="mb-3 form-label mt-2"><b>3-maandelijks <span
                class="text-danger">*</span></label>
        @error('maandelijks')
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
        <div class="">Ik erken uitchukkelijk voor de ondertekening van dit contract kennis te hebben genomen van de Algemene Voorwaarden, indusief het bestaan en de modakeiten voor het uitoefenen van het herroepingsrecht, en de Bijzondere Voorwaarden en deze te hebben begrepen en aanvaard. </div>
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
          <div class="row ">
            <div class="card">
                <div class="card-body">
            <h4><b>Handtekning van de klant</b></h4>
              <div class="col-6">
                  <div class="">Dit contract is niet geldig zonder handtekening van de Want in de daarvoor hiernaast vcorziene ruimte. </div>
                  <div class="row">
                    <div class="col-2 mt-2">
                    <div class="">Naam</div>
                    </div>
                    <div class="col-10">
                        <div class="mb-2">

                            <input type="name" class=" mt-2 form-control @error('annual_consumption_8') is-invalid @enderror "
                                id="annual_consumption_8" autocomplete="off" placeholder="Naam" name="annual_consumption_8"
                                value="{{ old('annual_consumption_8') }}" required>
                            @error('annual_consumption_8')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>


            <div class="row">
                <div class="col-5">

                    <div class="row">
                      <div class="col-3 mt-2">
                      <div class="">Datum</div>
                      </div>
                      <div class="col-9">
                          <div class="mb-2">

                              <input type="date" class=" mt-2 form-control @error('annual_consumption_9') is-invalid @enderror "
                                  id="annual_consumption_9" autocomplete="off" placeholder="Datum" name="annual_consumption_9"
                                  value="{{ old('annual_consumption_9') }}" required>
                              @error('annual_consumption_9')
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
                      <div class="col-2 mt-2">
                      <div class="">Plaats</div>
                      </div>
                      <div class="col-10">
                          <div class="mb-2">

                              <input type="name" class=" mt-2 form-control @error('Plaats_2') is-invalid @enderror "
                                  id="Plaats_2" autocomplete="off" placeholder="Plaats" name="Plaats_2"
                                  value="{{ old('Plaats_2') }}" required>
                              @error('Plaats_2')
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

          <div class="mb-2 ">
            <input type="radio" name="digitale_1" value="0" required>
            <label for="digitale_1" class="mb-3 form-label mt-2"><b> Indies u niet werst dat vAj u e-mails of sms'en sturen over prodaten en thensten die gehjkaardig zijn aan het veckahte product of de verkochte diens( gelieve dit vakje aan to vinken. Voor meer informatie verwgzen wij naar ooze website privacy policy.
                <span
                    class="text-danger">*</span></label>
            @error('digitale_1')
                <span class="invalid-feedback mb-2" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
                </div>
            </div>


                </div>

                {{-- <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-2">

                                <input type="file" class=" mt-2 form-control @error('annual_consumption_6') is-invalid @enderror "
                                    id="annual_consumption_6" autocomplete="off" placeholder="Voor Luminus NV: Henri Buenen, Directeur Klantenrelaties" name="annual_consumption_5"
                                    value="{{ old('annual_consumption_6') }}" required>
                                @error('annual_consumption_6')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-2">

                                <input type="file" class=" mt-2 form-control @error('annual_consumption_7') is-invalid @enderror "
                                    id="annual_consumption_7" autocomplete="off" placeholder="Handtekening van de klant, voor akkoord"
                                    value="{{ old('annual_consumption_7') }}" required>
                                @error('annual_consumption_7')
                                    <span class="invalid-feedback mb-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div> --}}
          </div>




      </div>
  </section>




<section>
    <div class="container-fluid">
        <div class="row">


            <div class="col-5">
                <div class="card">
                    <div class="card-body">
                <h6>Mandat SEPA domo=iciliation europeenne(c=veuillez ne pas couper ce talon)</h6>
                <h6>Mandaat identificatie (in te vullen door Luminus NV)</h6>
               <div class="row">
                   <div class="col-1">
                    <div class="mb-2 ">
                        <input type="radio" name="door" value="0" required>

                        @error('door')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   </div>
                   <div class="col-3">
                    <label for="gsm">Mandaat referte :</label>

                   </div>
                   <div class="col-8">
                    <div class="form-group">

                        <input type="number" class="form-control" id="referte" autocomplete="off"
                               placeholder="Mandaat referte" name="referte">
                    </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-12">
                    <div class="">Beschrijving van onderliggend contract: levering van energie</div>
                    <div class="">Type betailing : terugkerend</div>
                   </div>
                </div>
            </div>
               </div>
               <div class="row">
                   <div class="col-12">

                       <div class="mt-2">Door ondertekening van dit mandaatfamulier geeft u toestemming aan (A) Luminus NV an een opdracht te sturen near uw bank teneinde een bedrag van Live rekening te debiteren en (B) uw bank an een bedrag van uw rekening te debiteren in overeenstemming met de opdracht van Luminus NV</div>
                       <div class="mt-2">U kunt een Europese domid kering later terugbetalen. Vraag uw6gen bank near de vcawaarden. E en veacek tot terugbetating moet tinnen 8 waken na de datum van debitedng van het bedrag van uw rekening mden ingediend.</div>
                       <div class="mt-2">Alle widen zijn verplicht.
                    </div>
                   </div>
               </div>

            </div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                <h6>Identification du debiteur (a completer par le  debuteur)</h6>
                <div class="row">
                    <div class="col-1">
                        <label for="name">Naam</label>
                    </div>
                    <div class="col-11">
                        <div class="form-group">

                            <input required type="name" class="form-control" id="name_1"
                                autocomplete="off" placeholder="Naam"
                                name="name_1">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-1">
                        <label for="adres">Adres</label>
                    </div>
                    <div class="col-11">
                        <div class="form-group">

                            <input required type="name" class="form-control" id="adres"
                                autocomplete="off" placeholder="Adres"
                                name="adres">
                        </div>

                    </div>
                </div>


                <div class="row">
                <div class="col-5">
                    <div class="row">
                        <div class="col-3">
                            <label for="post_code_2">Postcode:</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group">

                                <input required type="name" class="form-control" id="post_code_2"
                                    autocomplete="off" placeholder="Postcode"
                                    name="post_code_2">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="row">
                        <div class="col-1">
                            <label for="adres">Stad:</label>
                        </div>
                        <div class="col-11">
                            <div class="form-group">

                                <input required type="name" class="form-control" id="stad"
                                    autocomplete="off" placeholder="Stad"
                                    name="stad">
                            </div>

                        </div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-2">
                                <label for="adres">Land:</label>
                            </div>
                            <div class="col-10">
                                <div class="form-group">

                                    <input required type="name" class="form-control" id="land"
                                        autocomplete="off" placeholder="Land"
                                        name="land">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="">verzoekt de firma Luminus NV, Koning Albert || laan 7, 1210 Brussel, Belgie, met identificatienummer Be50ZZZ0471811661 om,</div>
                        <div class="">vanaf heden en tot uitdrukkelijke herroeping van deze opdracht, alle facturen te incasseren van het rekeningnummer</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-1">
                        <label for="adres"><b>IBAN*.</b></label>
                    </div>
                    <div class="col-11">
                        <div class="form-group">

                            <input required type="name" class="form-control" id="iban"
                                autocomplete="off" placeholder="Land"
                                name="iban">
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <label for="adres"><b>Uw bank BIC code*:</b></label>
                    </div>
                    <div class="col-8">
                        <div class="form-group">

                            <input required type="number" class="form-control" id="code"
                                autocomplete="off" placeholder="Uw bank BIC code"
                                name="code">
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-3">
                                <label for="datum">Datum</label>
                            </div>
                            <div class="col-8">
                                <div class="form-group">

                                    <input required type="date" class="form-control" id="datum"
                                        autocomplete="off" placeholder="Datum"
                                        name="datum">
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <label for="plaats_3">Plaats</label>
                            </div>
                            <div class="col-8">
                                <div class="form-group">

                                    <input required type="name" class="form-control" id="plaats_3"
                                        autocomplete="off" placeholder="plaats_3"
                                        name="plaats_3">
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <label for="plaats">Klantnr.</label>
                            </div>
                            <div class="col-8">
                                <div class="form-group">

                                    <input required type="name" class="form-control" id="Klantnr"
                                        autocomplete="off" placeholder="Klantnr"
                                        name="Klantnr">
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-6">
                        <div class="form-group">

                            <input required type="file" class="form-control" id="plaats_4"
                                autocomplete="off" placeholder="Handtening van de rekenninghouder"
                                name="plaats_4">
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>
        </div>
    </div>
</section>



                    <button type="submit" class="btn btn-primary ">Submit</button>
                    <a href="{{ route('comfy_pro_contract.index') }}" class="btn btn-light mt-5">Cancel</a>
                </form>




@endsection

