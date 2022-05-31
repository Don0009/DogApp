@extends('layouts.backend')
@section('styles')
    <style>
        .input-group-text {
            background-color: #727cf5;
            color: white !important;
        }



        .fr {
            float: right;
        }

        span {
            margin-bottom: 2px;
        }

    </style>
@endsection
@section('content')
    <div class="container">


        <div class="card">
            <div class="card-body">
                {{-- <h5 class="card-title">Proximus Number Porting FR</h5> --}}

                <form action="{{ route('proximus_number_porting_fr.store') }}" method="post">@csrf
                    <div class="row">


                        {{-- Branding --}}
                        <img class="mt-3" style="text-align: center; margin:0 auto;" class="img-responsive"
                            src="{{ asset('images/brands/Proximus_logo.jpeg') }}" height="75px" width="330" alt="">
                        {{-- Branding ENd --}}


                        {{-- master row --}}
                        <div class="mb-3 col-md-12">




                            <label for="seller_id" class="form-label"><span class="text-danger">*</span>Identificatie
                                van de verkoper</label>
                            <input type="seller_id" class="form-control @error('seller_id') is-invalid @enderror"
                                id="seller_id" autocomplete="off" placeholder="Identificatie van de verkoper"
                                name="seller_id" value="{{ old('seller_id') }}" required>
                            @error('seller_id')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-12">
                            <p class="lead">Demande de transfert de numéros et de services</p>

                        </div>
                        <div class="mb-3 col-md-12">
                            A. IDENTIFICATION DU CLIENT CHEZ L'OPÉRATEUR CONCURRENT
                            <b style="text-align: center;"></b>

                        </div>

                        <div class="col-md-12 mt-3">
                            <b>Client résidentiel </b>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label"><span class="text-danger">*</span>Nom</label>
                            <input type="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                autocomplete="off" placeholder="Nom" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="full_name" class="form-label"><span
                                    class="text-danger">*</span>Prénom</label>
                            <input type="full_name" class="form-control @error('full_name') is-invalid @enderror"
                                id="full_name" autocomplete="off" placeholder="Prénom" name="full_name"
                                value="{{ old('full_name') }}" required>
                            @error('full_name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-8">
                            <label for="full_name" class="form-label"><span class="text-danger">*</span>Numéro de
                                client chez l'opérateur concurrent (obligatoire)</label>
                            <input type="customer_other_network_number"
                                class="form-control @error('customer_other_network_number') is-invalid @enderror"
                                id="customer_other_network_number" autocomplete="off"
                                placeholder="Numéro de
                                                                                                                                                                            client chez l'opérateur concurrent (obligatoire)
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                bij de andere operator"
                                name="customer_other_network_number" value="{{ old('customer_other_network_number') }}"
                                required>
                            @error('customer_other_network_number')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="email_address" class="form-label"><span class="text-danger">*</span>Adresse
                                e-mail</label>
                            <input type="email_address" class="form-control @error('email_address') is-invalid @enderror"
                                id="email_address" autocomplete="off"
                                placeholder="Adresse
                                                                                                                                                                    e-mail"
                                name="email_address" value="{{ old('email_address') }}" required>
                            @error('email_address')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">

                            <b style="text-align: center;">Client professionnel (avec numéro d'entreprise ou profession
                                libérale)</b>

                        </div>



                        <div class="mb-3 col-md-6">
                            <label for="company_name" class="form-label"><span class="text-danger">*</span>Nom de la
                                société</label>
                            <input type="company_name" class="form-control @error('company_name') is-invalid @enderror"
                                id="company_name" autocomplete="off"
                                placeholder="Nom de la
                                                                                                                                                                société"
                                name="company_name" value="{{ old('company_name') }}" required>
                            @error('company_name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="company_number" class="form-label"><span class="text-danger">*</span>Numéro
                                d'entreprise</label>
                            <input type="company_number" class="form-control @error('company_number') is-invalid @enderror"
                                id="company_number" autocomplete="off"
                                placeholder="Numéro
                                                                                                                                                            d'entreprise"
                                name="company_number" value="{{ old('company_number') }}" required>
                            @error('company_name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-8">
                            <label for="customer_other_network_number_p" class="form-label"><span
                                    class="text-danger">*</span>Numéro de client chez l'opérateur concurrent</label>
                            <input type="customer_other_network_number_p"
                                class="form-control @error('customer_other_network_number_p') is-invalid @enderror"
                                id="customer_other_network_number_p" autocomplete="off"
                                placeholder="Klantennummer bij de andere operator" name="customer_other_network_number_p"
                                value="{{ old('customer_other_network_number_p') }}" required>
                            @error('customer_other_network_number_p')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-4">
                            <label for="email_address_p" class="form-label"><span class="text-danger">*</span>Adresse
                                e-mail</label>
                            <input type="email_address_p"
                                class="form-control @error('email_address_p') is-invalid @enderror" id="email_address_p"
                                autocomplete="off" placeholder="E-mailadres" name="email_address_p"
                                value="{{ old('email_address_p') }}" required>
                            @error('email_address_p')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>




                        <div class="mb-3 col-md-12">

                            <b style="text-align: center;">Complétez le tableau ci-dessous pour les numéros et services à
                                transférer</b>

                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mobile_pack_radio" value="0" required>
                            <label for="mobile_pack_radio" class="form-label"> Mobile en Pack</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-9">
                            <input type="radio" name="mobile_pack_radio" value="1" required>
                            <label for="mobile_pack_radio" class="form-label"> Mobile only (hors Pack- toujours remplir
                                le contrat pour les abonnements)</label>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="qua_of_num_port" class="form-label"><span class="text-danger">*</span>Numéros
                                de GSM à transférer de l'opérateur</label>
                            <input type="qua_of_num_port"
                                class="form-control @error('qua_of_num_port') is-invalid @enderror" id="qua_of_num_port"
                                autocomplete="off" placeholder="Numéros de GSM à transférer de l'opérateur"
                                name="qua_of_num_port" value="{{ old('qua_of_num_port') }}" required>
                            @error('qua_of_num_port')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Numéros de GSM</th>
                                    <th scope="col">Simkaartnummer bij andere operator</th>
                                    <th colspan="2">Chez l’opérateur concurrent</th>
                                    <th colspan="2">Chez Proximus</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td scope="row">




                                    </td>

                                    <td scope="row">



                                    </td>
                                    <td scope="row">



                                    </td>
                                    <td scope="row">

                                        <div class="form-group mb-0">


                                        </div>


                                    </td>
                                    <td scope="row">
                                        Carte de recharge
                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_2" value="0" required>
                                            <label for="reload_card_2" class="form-label"> </label>

                                        </div>


                                    </td>
                                    <td colspan="2" scope="row">
                                        Abonnement

                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_2" value="1" required>
                                            <label for="reload_card_2" class="form-label"> </label>

                                        </div>
                                        {{-- test --}}


                                    </td>


                                </tr>
                                {{-- One Row --}}
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="gsm_num_2" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('gsm_num_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="sim_num_of_other_operator_2" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_num_of_other_operator_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>
                                    <td scope="row">
                                        Carte de recharge

                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_3" value="0" required>
                                            <label for="reload_card_3" class="form-label"> </label>

                                        </div>


                                    </td>
                                    <td scope="row">
                                        Abonnment
                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_3" value="1" required>
                                            <label for="reload_card_3" class="form-label"> </label>

                                        </div>


                                    </td>
                                    <td scope="row" colspan="2">
                                        <p style="text-align: center;">Numéro de carte SIM chez Proximus</p>
                                        <div class="form-group mb-0">

                                            <input name="simkaartnum_of_proximus_2" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('simkaartnum_of_proximus_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>



                                </tr>
                                {{-- ROW TWO --}}

                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="gsm_num_3" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('gsm_num_3')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="sim_num_of_other_operator_3" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_num_of_other_operator_3')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>
                                    <td scope="row">

                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_4" value="0" required>
                                            <label for="reload_card_4" class="form-label"> </label>

                                        </div>


                                    </td>
                                    <td scope="row">

                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_4" value="1" required>
                                            <label for="reload_card_4" class="form-label"> </label>

                                        </div>


                                    </td>
                                    <td scope="row" colspan="2">

                                        <div class="form-group mb-0">

                                            <input name="simkaartnum_of_proximus_3" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('simkaartnum_of_proximus_3')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>


                                </tr>
                                {{-- THREE ROW --}}
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="gsm_num_4" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('gsm_num_4')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="sim_num_of_other_operator_4" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_num_of_other_operator_4')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>
                                    <td scope="row">

                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_5" value="0" required>
                                            <label for="reload_card_5" class="form-label"> </label>

                                        </div>


                                    </td>
                                    <td scope="row">

                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_5" value="1" required>
                                            <label for="reload_card_5" class="form-label"> </label>

                                        </div>


                                    </td>
                                    <td scope="row" colspan="2">

                                        <div class="form-group mb-0">

                                            <input name="simkaartnum_of_proximus_4" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('simkaartnum_of_proximus_4')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>









                                </tr>
                                {{-- FOUR ROW --}}
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="gsm_num_5" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('gsm_num_5')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="sim_num_of_other_operator_5" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_num_of_other_operator_5')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>
                                    <td scope="row">

                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_6" value="0" required>
                                            <label for="reload_card_6" class="form-label"> </label>

                                        </div>


                                    </td>
                                    <td scope="row">

                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_6" value="1" required>
                                            <label for="reload_card_6" class="form-label"> </label>

                                        </div>


                                    </td>
                                    <td scope="row" colspan="2">

                                        <div class="form-group mb-0">

                                            <input name="simkaartnum_of_proximus_5" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('simkaartnum_of_proximus_5')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    </td>








                                </tr>
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="gsm_num_6" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('gsm_num_6')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="sim_num_of_other_operator_6" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_num_of_other_operator_6')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>
                                    <td scope="row">

                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_7" value="0" required>
                                            <label for="reload_card_7" class="form-label"> </label>

                                        </div>


                                    </td>
                                    <td scope="row">

                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_7" value="1" required>
                                            <label for="reload_card_7" class="form-label"> </label>

                                        </div>



                                    </td>
                                    <td scope="row" colspan="2">

                                        <div class="form-group mb-0">

                                            <input name="simkaartnum_of_proximus_6" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('simkaartnum_of_proximus_6')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>


                                    {{-- xyz --}}

                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="gsm_num_7" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('gsm_num_7')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="sim_num_of_other_operator_7" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_num_of_other_operator_7')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>
                                    <td scope="row">

                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_8" value="0" required>
                                            <label for="reload_card_8" class="form-label"> </label>

                                        </div>


                                    </td>
                                    <td scope="row">

                                        <div class="form-group mb-0">
                                            <input type="radio" name="reload_card_8" value="1" required>
                                            <label for="reload_card_8" class="form-label"> </label>

                                        </div>



                                    </td>
                                    <td scope="row" colspan="2">

                                        <div class="form-group mb-0">

                                            <input name="simkaartnum_of_proximus_7" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('simkaartnum_of_proximus_7')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    {{-- xyz --}}


                                </tr>
                            </tbody>
                        </table>


                        {{-- Table to be added --}}


                        <div class="mb-3 mt-4 col-md-12">
                            <label for="land_line_to_be_ported" class="form-label"><span
                                    class="text-danger">*</span>Numéros de téléphone fixe à transférer de
                                l'opérateur</label>
                            <input type="land_line_to_be_ported"
                                class="form-control @error('land_line_to_be_ported') is-invalid @enderror"
                                id="land_line_to_be_ported" autocomplete="off" placeholder="" name="land_line_to_be_ported"
                                value="{{ old('land_line_to_be_ported') }}" required>
                            @error('land_line_to_be_ported')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-12">
                            <h4 style="text-align: center;">Adresse d'installation</h4>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="street" class="form-label"><span class="text-danger">*</span>Rue</label>
                            <input type="street" class="form-control @error('street') is-invalid @enderror" id="street"
                                autocomplete="off" placeholder="Straat" name="street" value="{{ old('street') }}"
                                required>
                            @error('street')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="no" class="form-label"><span class="text-danger">*</span>N°</label>
                            <input type="no" class="form-control @error('no') is-invalid @enderror" id="no"
                                autocomplete="off" placeholder="N°" name="no" value="{{ old('no') }}" required>
                            @error('no')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="floor" class="form-label"><span class="text-danger">*</span>Étage</label>
                            <input type="floor" class="form-control @error('floor') is-invalid @enderror" id="floor"
                                autocomplete="off" placeholder="Verdieping" name="floor" value="{{ old('floor') }}"
                                required>
                            @error('floor')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="box" class="form-label"><span class="text-danger">*</span>Boîte</label>
                            <input type="box" class="form-control @error('box') is-invalid @enderror" id="box"
                                autocomplete="off" placeholder="Bus" name="box" value="{{ old('box') }}" required>
                            @error('box')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="township" class="form-label"><span
                                    class="text-danger">*</span>Commune</label>
                            <input type="township" class="form-control @error('township') is-invalid @enderror"
                                id="township" autocomplete="off" placeholder="Gemeente" name="township"
                                value="{{ old('township') }}" required>
                            @error('box')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="postcode" class="form-label"><span class="text-danger">*</span>Code
                                postal</label>
                            <input type="postcode" class="form-control @error('postcode') is-invalid @enderror"
                                id="postcode" autocomplete="off" placeholder="Postcode" name="postcode"
                                value="{{ old('postcode') }}" required>
                            @error('postcode')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- table_2 --}}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Telefoonnummers</th>
                                    <th scope="col">Of nummerreeks van</th>
                                    <th scope="col">Tot</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">




                                    </td>

                                    <td>



                                    </td>
                                    <td>

                                    </td>

                                </tr>

                                {{-- TR --}}

                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="TELEFOONNUMMERS_2" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('TELEFOONNUMMERS_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="Of_nummerreeks_van_1" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('Of_nummerreeks_van_1')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="tot_2" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('tot_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>

                                </tr>
                                {{-- TR --}}
                                {{-- TR_2 --}}
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="TELEFOONNUMMERS_3" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('TELEFOONNUMMERS_3')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="Of_nummerreeks_van_2" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('Of_nummerreeks_van_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="tot_3" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('tot_3')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>

                                </tr>
                                {{-- TR_2 --}}
                                {{-- TR_3 --}}
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="TELEFOONNUMMERS_4" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('TELEFOONNUMMERS_4')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="Of_nummerreeks_van_3" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('Of_nummerreeks_van_3')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="tot_4" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('tot_4')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>

                                </tr>

                                {{-- TR_3 --}}



                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="TELEFOONNUMMERS_5" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('TELEFOONNUMMERS_5')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="Of_nummerreeks_van_4" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('Of_nummerreeks_van_4')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input type="text" name="tot_5" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('tot_5')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>

                                </tr>

                            </tbody>
                        </table>

                        {{-- table_2 --}}


                        <div class="mb-3 mt-4 col-md-12">

                            <p style="text-align: center;"> Over te dragen diensten (internet / tv / andere) van
                                operator
                            </p>

                        </div>



                        <div class="mb-3 mt-2 col-md-12">

                            <p style="text-align: center;">N’oubliez pas d’annuler ces services auprès de votre
                                opérateur
                                actuel! Une lettre de résiliation standard est disponible sur www.proximus.be
                            </p>

                        </div>

                        {{-- table - 3 --}}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Service</th>

                                    <th scope="col">Numéro d'identification du service (“circuit id.”)</th>

                                </tr>
                            </thead>
                            <tbody>



                                <tr>


                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="Dienst_1" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('Dienst_1')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="service_id_num_1" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('service_id_num_1')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>

                                </tr>

                                {{-- TR_3 --}}



                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="Dienst_2" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('Dienst_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="service_id_num_2" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('service_id_num_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>


                                </tr>


                            </tbody>
                        </table>
                        {{-- table -  3 --}}


                        <div class="mb-3 mt-3 col-md-12">

                            <b style="text-align: center;">B. ACCORD ET SIGNATURE DU CLIENT </b>

                        </div>




                        <div class="mb-2 col-md-6">
                            <label for="date" class="form-label mt-2">Date<span class="text-danger">*</span></label>
                            <input class="form-control @error('date') is-invalid @enderror mb-4 mb-md-0"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="date_to_install_k" name="date" value="{{ old('date') }}"
                                type="date" required>

                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="ref_id" class="form-label"><span class="text-danger">*</span>RÉFÉRENCE DE
                                COMMANDE</label>
                            <input type="ref_id" class="form-control @error('ref_id') is-invalid @enderror" id="ref_id"
                                autocomplete="off" placeholder="ORDERREFERENTIE" name="ref_id"
                                value="{{ old('seller_id') }}" required>
                            @error('ref_id')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>





                        <button class="btn btn-primary mb-2 mt-3">Submit</button>
                        <button class="btn btn-secondary mb-2 mt-3 ml-3">Cancel</button>





                    </div>
                    {{-- ,aster row --}}



            </div>
            </form>

        </div>
        {{-- card body --}}
    </div>
    {{-- card --}}
    </div>
    </div>
    {{-- master container --}}
@endsection
