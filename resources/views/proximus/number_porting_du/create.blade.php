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
                <h5 class="card-title">Proximus Number Porting DU</h5>

                <form action="{{ route('proximus_number_porting_du.store') }}" method="post">@csrf
                    <div class="row">

                        {{-- master row --}}
                        <div class="mb-3 col-md-12">
                            <label for="seller_id" class="form-label"><span class="text-danger">*</span></label>
                            <input type="seller_id" class="form-control @error('seller_id') is-invalid @enderror"
                                id="seller_id" autocomplete="off" placeholder="seller_id" name="seller_id"
                                value="{{ old('seller_id') }}" required>
                            @error('seller_id')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-12">
                            <p class="lead">Aanvraag overdracht van nummers en diensten</p>

                        </div>
                        <div class="mb-3 col-md-12">
                            A. IDENTIFICATIE VAN DE KLANT BIJ EEN ANDERE OPERATOR
                            <b style="text-align: center;"></b>

                        </div>

                        <div class="col-md-12 mt-3">
                            <b>Residentiële klant </b>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label"><span class="text-danger">*</span>Naam</label>
                            <input type="name" class="form-control @error('name') is-invalid @enderror" id="name"
                                autocomplete="off" placeholder="Naam" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="full_name" class="form-label"><span
                                    class="text-danger">*</span>Voornaam</label>
                            <input type="full_name" class="form-control @error('full_name') is-invalid @enderror"
                                id="full_name" autocomplete="off" placeholder="Voornaam" name="full_name"
                                value="{{ old('full_name') }}" required>
                            @error('full_name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-8">
                            <label for="full_name" class="form-label"><span class="text-danger">*</span>Klantennummer
                                bij de andere operator</label>
                            <input type="customer_other_network_number"
                                class="form-control @error('customer_other_network_number') is-invalid @enderror"
                                id="customer_other_network_number" autocomplete="off"
                                placeholder="Klantennummer
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
                            <label for="email_address" class="form-label"><span
                                    class="text-danger">*</span>E-mailadres</label>
                            <input type="email_address" class="form-control @error('email_address') is-invalid @enderror"
                                id="email_address" autocomplete="off" placeholder="E-mailadres" name="email_address"
                                value="{{ old('email_address') }}" required>
                            @error('email_address')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">

                            <b style="text-align: center;">Professionele klant (met ondernemingsnummer of vrij beroep)</b>

                        </div>



                        <div class="mb-3 col-md-6">
                            <label for="company_name" class="form-label"><span
                                    class="text-danger">*</span>Firmanaam</label>
                            <input type="company_name" class="form-control @error('company_name') is-invalid @enderror"
                                id="company_name" autocomplete="off" placeholder="Firmanaam" name="company_name"
                                value="{{ old('company_name') }}" required>
                            @error('company_name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="company_number" class="form-label"><span
                                    class="text-danger">*</span>Ondernemingsnummer</label>
                            <input type="company_number" class="form-control @error('company_number') is-invalid @enderror"
                                id="company_number" autocomplete="off" placeholder="Ondernemingsnummer"
                                name="company_number" value="{{ old('company_number') }}" required>
                            @error('company_name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-8">
                            <label for="customer_other_network_number_p" class="form-label"><span
                                    class="text-danger">*</span>Klantennummer
                                bij de andere operator</label>
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
                            <label for="email_address_p" class="form-label"><span
                                    class="text-danger">*</span>E-mailadres</label>
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

                            <b style="text-align: center;">Vul de tabel hieronder in voor de over te dragen nummers en
                                diensten</b>

                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mobile_pack_radio" value="0" required>
                            <label for="mobile_pack_radio" class="form-label"> Mobile in een Pack</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-9">
                            <input type="radio" name="mobile_pack_radio" value="1" required>
                            <label for="mobile_pack_radio" class="form-label"> Mobile only (zonder Pack- steeds een
                                contract toevoegen voor abonnementen)</label>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="qua_of_num_port" class="form-label"><span
                                    class="text-danger">*</span>Klantennummer
                                bij de andere operator</label>
                            <input type="qua_of_num_port"
                                class="form-control @error('qua_of_num_port') is-invalid @enderror" id="qua_of_num_port"
                                autocomplete="off" placeholder="E-mailadres" name="qua_of_num_port"
                                value="{{ old('qua_of_num_port') }}" required>
                            @error('qua_of_num_port')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        {{-- <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Gsm-nummers</th>
                                    <th scope="col">Simkaartnummer bij andere operator</th>
                                    <th scope="col-md-12">Bij andere operator
                                    <th colspan="2">first</th>
                                    <th colspan="2">second</th>


                                    </th>
                                    <th scope="col">Bij Proximus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_1" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('call_number_1')
                                                <span class="text-danger"> {{ $message }}</span>
                    @enderror
                </div>


                </td>

                <td>

                    <div class="form-group mb-0">

                        <input type="text" name="sim_card_other_operator_1" class="form-control border-0"
                            id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        @error('sim_card_other_operator_1')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                </td>
                <td>
                    <div class="form-group mb-0">

                        <input name="customer_num_other_operator_1" class="form-control border-0"
                            id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        @error('customer_num_other_operator_1')
                        <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>
                </td>
                <td>
                    893207000
                </td>
                </tr>

                <tr>
                    <td scope="row">

                        <div class="form-group mb-0">

                            <input name="call_number_2" type="text" name="" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('call_number_2')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>


                    </td>

                    <td>

                        <div class="form-group mb-0">

                            <input name="sim_card_other_operator_2" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('sim_card_other_operator_2')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                    </td>
                    <td>
                        <div class="form-group mb-0">

                            <input name="customer_num_other_operator_2" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('customer_num_other_operator_2')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        893207000
                    </td>
                </tr>
                <tr>
                    <td scope="row">

                        <div class="form-group mb-0">

                            <input name="call_number_3" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('call_number_3')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>


                    </td>

                    <td>

                        <div class="form-group mb-0">

                            <input name="sim_card_other_operator_3" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('sim_card_other_operator_3')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                    </td>
                    <td>
                        <div class="form-group mb-0">

                            <input name="customer_num_other_operator_3" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('customer_num_other_operator_3')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        893207000
                    </td>
                </tr>
                <tr>
                    <td scope="row">

                        <div class="form-group mb-0">

                            <input name="call_number_4" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('call_number_4')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>


                    </td>

                    <td>

                        <div class="form-group mb-0">

                            <input name="sim_card_other_operator_4" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('sim_card_other_operator_4')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                    </td>
                    <td>
                        <div class="form-group mb-0">

                            <input name="customer_num_other_operator_4" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('customer_num_other_operator_4')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        893207000
                    </td>
                </tr>
                <tr>
                    <td scope="row">

                        <div class="form-group mb-0">

                            <input name="call_number_5" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('call_number_5')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>


                    </td>

                    <td>

                        <div class="form-group mb-0">

                            <input name="sim_card_other_operator_5" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('sim_card_other_operator_5')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                    </td>
                    <td>
                        <div class="form-group mb-0">

                            <input name="customer_num_other_operator_5" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('customer_num_other_operator_5')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        893207000
                    </td>
                </tr>
                <tr>
                    <td scope="row">

                        <div class="form-group mb-0">

                            <input name="call_number_6" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('call_number_6')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>


                    </td>

                    <td>

                        <div class="form-group mb-0">

                            <input name="sim_card_other_operator_6" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('sim_card_other_operator_6')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                    </td>
                    <td>
                        <div class="form-group mb-0">

                            <input name="customer_num_other_operator_6" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('sim_card_other_operator_6')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        893207000
                    </td>
                </tr>
                <tr>
                    <td scope="row">

                        <div class="form-group mb-0">

                            <input name="call_number_7" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('call_number_7')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>


                    </td>

                    <td>

                        <div class="form-group mb-0">

                            <input name="sim_card_other_operator_7" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('sim_card_other_operator_7')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                    </td>
                    <td>
                        <div class="form-group mb-0">

                            <input name="customer_num_other_operator_7" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('customer_num_other_operator_7')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        893207000
                    </td>
                </tr>

                <tr>
                    <td scope="row">

                        <div class="form-group mb-0">

                            <input name="call_number_8" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('call_number_8')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>


                    </td>

                    <td>

                        <div class="form-group mb-0">

                            <input name="sim_card_other_operator_8" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('sim_card_other_operator_8')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                    </td>
                    <td>
                        <div class="form-group mb-0">

                            <input name="customer_num_other_operator_8" type="text" class="form-control border-0"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                            @error('customer_num_other_operator_8')
                            <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </td>
                    <td>
                        893207000
                    </td>
                </tr>

                </tbody>
                </table> --}}

                        {{-- Table to be added --}}


                        <div class="mb-3 col-md-12">
                            <label for="land_line_to_be_ported" class="form-label"><span
                                    class="text-danger">*</span>Over te
                                dragen vaste telefoonnummers van operator</label>
                            <input type="land_line_to_be_ported"
                                class="form-control @error('land_line_to_be_ported') is-invalid @enderror"
                                id="land_line_to_be_ported" autocomplete="off"
                                placeholder="Over te
                                                                                                                                                                                                                                                                                                                                                            dragen vaste telefoonnummers van operator"
                                name="land_line_to_be_ported" value="{{ old('land_line_to_be_ported') }}" required>
                            @error('land_line_to_be_ported')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-12">
                            <h4 style="text-align: center;">Adres installatie</h4>
                        </div>
                        <div class="mb-3 col-md-3">
                            <label for="street" class="form-label"><span class="text-danger">*</span>Straat</label>
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
                            <label for="no" class="form-label"><span class="text-danger">*</span>Nr</label>
                            <input type="no" class="form-control @error('no') is-invalid @enderror" id="no"
                                autocomplete="off" placeholder="Nr" name="no" value="{{ old('no') }}" required>
                            @error('no')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-3">
                            <label for="floor" class="form-label"><span
                                    class="text-danger">*</span>Verdieping</label>
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
                            <label for="box" class="form-label"><span class="text-danger">*</span>Bus</label>
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
                                    class="text-danger">*</span>Gemeente</label>
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
                            <label for="postcode" class="form-label"><span
                                    class="text-danger">*</span>Postcode</label>
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

                                        <div class="form-group mb-0">

                                            <input name="TELEFOONNUMMERS" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('TELEFOONNUMMERS')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="Of_nummerreeks_van" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('current_operator_1')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="tot_1" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('tot_1')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
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

                                            <input name="tot_2" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('tot_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="customer_num_other_operator_9" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('customer_num_other_operator_9')
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

                                            <input name="Of_nummerreeks_van_4" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('Of_nummerreeks_van_4')
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

                                            <input name="Of_nummerreeks_van_5" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('Of_nummerreeks_van_5')
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
                                {{-- <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_11" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="current_operator_3" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="customer_num_other_operator_11" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">

                                        </div>
                                    </td>

                                </tr> --}}

                            </tbody>
                        </table>
                        {{-- table_2 --}}


                        <div class="mb-3 mt-4 col-md-12">

                            <p style="text-align: center;"> Over te dragen diensten (internet / tv / andere) van operator
                            </p>

                        </div>



                        <div class="mb-3 mt-2 col-md-12">

                            <p style="text-align: center;">Vergeet niet om de dienst bij uw huidige operator op te zeggen!
                                Een standaard opzeggingsbrief is
                                beschikbaar op www.proximus.be
                            </p>

                        </div>

                        {{-- table - 3 --}}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Identificatienummer van de dienst (“circuit identity”)</th>
                                    <th scope="col">Dienst</th>

                                </tr>
                            </thead>
                            <tbody>



                                <tr>


                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="service_id_num_1" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('service_id_num_1')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="Dienst_1" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('Dienst_1')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>

                                </tr>

                                {{-- TR_3 --}}



                                <tr>
                                    <td scope="row">
                                        x
                                        <div class="form-group mb-0">

                                            <input name="service_id_num_2" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('service_id_num_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">
                                            x1
                                            <input name="Dienst_1" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('Dienst_1')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>


                                </tr>


                            </tbody>
                        </table>
                        {{-- table -  3 --}}


                        <div class="mb-3 mt-3 col-md-12">

                            <b style="text-align: center;">B. TOESTEMMING EN ONDERTEKENING VAN DE KLANT</b>

                        </div>




                        <div class="mb-2 col-md-6">
                            <label for="date" class="form-label mt-2">Datum<span class="text-danger">*</span></label>
                            <input class="form-control @error('date') is-invalid @enderror mb-4 mb-md-0"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="date_to_install_k" name="date" value="{{ old('date') }}"
                                type="date" required>

                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="ref_id" class="form-label"><span
                                    class="text-danger">*</span>ORDERREFERENTIE</label>
                            <input type="ref_id" class="form-control @error('ref_id') is-invalid @enderror" id="ref_id"
                                autocomplete="off" placeholder="ORDERREFERENTIE" name="ref_id"
                                value="{{ old('seller_id') }}" required>
                            @error('ref_id')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>











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
