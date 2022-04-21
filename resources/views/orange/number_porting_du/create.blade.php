@extends('layouts.backend')

@section('content')
    {{-- start --}}



    {{-- end --}}
    <div class="row">
        <div class="col-md-12">


            <form class="forms-sample" action="{{ route('number_porting_du.store') }}" method="POST">
                @csrf()
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="section mb-3">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6 mt-3">
                                                <div class="orange">
                                                    <p>Orange</p>
                                                </div>
                                            </div>
                                            <div class="col-6 mt-5">
                                                <div class="text_orange">
                                                    <span>Orange Belgium nv.</span>
                                                </div>
                                                <div class="text_orange"> Bourgetlaan 3 | Brussel 1140</div>
                                                <div class="text_orange">TEL. <span>+32 (0) 2 745 71 11 |</span> FAX +32
                                                    (0) 2 745 70
                                                    00]</div>
                                                <div class="text_orange">BNP Paribas Fortis 210-0233334-04 <span>|
                                                        IBAN</span>BE10
                                                    2100 2333 3404 <span>| BIC:</span> GEBABEBB </div>
                                                <div class="text_orange">BTW <span>BE 0456.810.810 |</span> RPR Brussel
                                                    <span>www.orange.be</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mb-3" style="color: orangered; text-align:center;">Identificatie van de
                                    klant</h4>
                                <div class="container">

                                    <div class="row">
                                        <div class="col-4">
                                            <input type="radio" name="title" value="0">
                                            <label for="title" class="form-label">Mevr.</label>
                                            <input type="radio" name="title" value="1">
                                            <label for="title" class="form-label">Juffr.</label>
                                            <input type="radio" name="title" value="2">
                                            <label for="title" class="form-label">Juffr.</label>
                                        </div>
                                        <div class=" row col-4">
                                            <h6>Taal:<span class="text-danger">*</span></h6>
                                            <input type="radio" class="ml-1" name="language" value="0">
                                            <label for="language" class="ml-1 form-label">NL</label>
                                            <input type="radio" class="ml-1" name="language" value="1">
                                            <label for="language" class="ml-1 form-label">FR</label>
                                            <input type="radio" class="ml-1" name="language" value="2">
                                            <label for="language" class="ml-1 form-label">UK</label>
                                            <input type="radio" name="language" class="ml-1" value="3">
                                            <label for="language" class="form-label ml-1">DE</label>
                                        </div>
                                        <div class="col-4">
                                            <input type="radio" name="subscription" value="0">
                                            <label for="subscription" class="form-label">De abonnementsaanvraag volgt in
                                                bĳlage<span class="text-danger">*</span></label>
                                            @error('subscription')
                                                <span class="invalid-feedback mb-3" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- box added --}}
                                    <div class="row">

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="f_name" class="form-label">Naam<span
                                                        class="text-danger">*</span></label>
                                                <input type="name_1"
                                                    class="form-control @error('name_1') is-invalid @enderror" id="name_1"
                                                    autocomplete="off" placeholder="Naam" name="name_1"
                                                    value="{{ old('name_1') }}" required>
                                                @error('name_1')
                                                    <span class="invalid-feedback mb-3" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="f_name" class="form-label">Tel.-nr<span
                                                        class="text-danger">*</span></label>
                                                <input type="telephone_number"
                                                    class="form-control @error('telephone_number') is-invalid @enderror"
                                                    id="telephone_number" autocomplete="off" placeholder="Tel nr"
                                                    name="telephone_number" value="{{ old('telephone_number') }}"
                                                    required>
                                                @error('f_name')
                                                    <span class="invalid-feedback mb-3" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="f_name" class="form-label">Fax-nr<span
                                                        class="text-danger">*</span></label>
                                                <input type="faxnr"
                                                    class="form-control @error('faxnr') is-invalid @enderror" id="faxnr"
                                                    autocomplete="off" placeholder="Fax nr" name="faxnr"
                                                    value="{{ old('faxnr') }}" required>
                                                @error('faxnr')
                                                    <span class="invalid-feedback mb-3" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="f_name" class="form-label">Dealercode<span
                                                        class="text-danger">*</span></label>
                                                <input type="dealer_code"
                                                    class="form-control @error('f_name') is-invalid @enderror"
                                                    id="dealer_code" autocomplete="off" placeholder="Dealer code"
                                                    name="dealer_code" value="{{ old('dealer_code') }}" required>
                                                @error('dealer_code')
                                                    <span class="invalid-feedback mb-3" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    {{-- box added --}}
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Naam<span
                                                        class="text-danger">*</span></label>
                                                <input type="name" class="form-control @error('name') is-invalid @enderror"
                                                    id="name" autocomplete="off" placeholder="Naam" name="name"
                                                    value="{{ old('name') }}" required>
                                                @error('name')
                                                    <span class="invalid-feedback mb-3" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-3">
                                                <label for="f_name" class="form-label">Voornaam<span
                                                        class="text-danger">*</span></label>
                                                <input type="f_name"
                                                    class="form-control @error('f_name') is-invalid @enderror" id="f_name"
                                                    autocomplete="off" placeholder="Voornaam" name="f_name"
                                                    value="{{ old('f_name') }}" required>
                                                @error('f_name')
                                                    <span class="invalid-feedback mb-3" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-8">
                                            <div class="mb-2">
                                                <label for="street" class="form-label">Straat :<span
                                                        class="text-danger">*</span></label>
                                                <input type="street"
                                                    class="form-control @error('street') is-invalid @enderror" id="street"
                                                    autocomplete="off" placeholder="Straat" name="street"
                                                    value="{{ old('street') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-2">
                                                <label for="no" class="form-label">Nr<span
                                                        class="text-danger">*</span></label>
                                                <input type="no" class="form-control @error('no') is-invalid @enderror"
                                                    id="no" autocomplete="off" placeholder="Nr" name="no"
                                                    value="{{ old('no') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="mb-2">
                                                <label for="box" class="form-label">Bus<span
                                                        class="text-danger">*</span></label>
                                                <input type="box" class="form-control @error('box') is-invalid @enderror"
                                                    id="box" autocomplete="off" placeholder="Bus" name="box"
                                                    value="{{ old('box') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="town" class="form-label">Plaats:<span
                                                        class="text-danger">*</span></label>
                                                <input type="town" class="form-control @error('town') is-invalid @enderror"
                                                    id="town" autocomplete="off" placeholder="Plaats" name="town"
                                                    value="{{ old('town') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-2">
                                                <label for="postal_code" class="form-label">Postcode:<span
                                                        class="text-danger">*</span></label>
                                                <input type="postal_code"
                                                    class="form-control @error('postal_code') is-invalid @enderror"
                                                    id="postal_code" autocomplete="off" placeholder="Code postal"
                                                    name="postal_code" value="{{ old('postal_code') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-2">
                                                <label for="country" class="form-label">Land:<span
                                                        class="text-danger">*</span></label>
                                                <input type="country"
                                                    class="form-control @error('country') is-invalid @enderror"
                                                    id="country" autocomplete="off" placeholder="Pays" name="country"
                                                    value="{{ old('country') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mail" class="form-label">E Mail<span
                                                class="text-danger">*</span></label>
                                        <input type="mail" class="form-control @error('mail') is-invalid @enderror"
                                            id="mail" autocomplete="off" placeholder="Mail" name="mail"
                                            value="{{ old('mail') }}" required>
                                        @error('mail')
                                            <span class="invalid-feedback mb-3" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="id_card_no" class="form-label">Identiteitskaartnr<span
                                                        class="text-danger">*</span></label>
                                                <input type="id_card_no"
                                                    class="form-control @error('id_card_no') is-invalid @enderror"
                                                    id="id_card_no" autocomplete="off" placeholder="Identiteitskaartnr"
                                                    name="id_card_no" value="{{ old('id_card_no') }}" required>
                                                @error('id_card_no')
                                                    <span class="invalid-feedback mb-3" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="mb-3">
                                                <label for="phone_number" class="form-label">Telefoonnummer<span
                                                        class="text-danger">*</span></label>
                                                <input type="phone_number"
                                                    class="form-control @error('phone_number') is-invalid @enderror"
                                                    id="phone_number" autocomplete="off" placeholder="Telefoonnummer"
                                                    name="phone_number" value="{{ old('phone_number') }}" required>
                                                @error('phone_number')
                                                    <span class="invalid-feedback mb-3" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <h5>Rechtspersoon</h5>
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="mb-3">
                                                <label for="company_name" class="form-label">Firmanaam:<span
                                                        class="text-danger">*</span></label>
                                                <input type="company_name"
                                                    class="form-control @error('company_name') is-invalid @enderror"
                                                    id="company_name" autocomplete="off" placeholder="Firmanaam:"
                                                    name="company_name" value="{{ old('company_name') }}" required>
                                                @error('company_name')
                                                    <span class="invalid-feedback mb-3" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-2">
                                                <label for="legal_status" class="form-label">Vennootschapsvorm<span
                                                        class="text-danger">*</span></label>
                                                <input type="legal_status"
                                                    class="form-control @error('legal_status') is-invalid @enderror"
                                                    id="legal_status" autocomplete="off" placeholder="Vennootschapsvorm"
                                                    name="legal_status" value="{{ old('legal_status') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2">
                                                <label for="client_num" class="form-label">Klantnummer:<span
                                                        class="text-danger">*</span></label>
                                                <input type="client_num"
                                                    class="form-control @error('client_num') is-invalid @enderror"
                                                    id="client_num" autocomplete="off" placeholder="Klantnummer"
                                                    name="client_num" value="{{ old('client_num') }}" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2 container">
                                                <label for="company_num" class="form-label">Ondernemingsnummer:<span
                                                        class="text-danger">*</span></label>
                                                <input type="company_num"
                                                    class="form-control @error('company_num') is-invalid @enderror"
                                                    id="legal_status" autocomplete="off" placeholder="Ondernemingsnummer"
                                                    name="company_num" value="{{ old('company_num') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2 container">
                                        <label for="authorized_represent" class="form-label">Gevolmachtigde:<span
                                                class="text-danger">*</span></label>
                                        <input type="authorized_represent"
                                            class="form-control @error('authorized_represent') is-invalid @enderror"
                                            id="authorized_represent" autocomplete="off" placeholder="Gevolmachtigde"
                                            name="authorized_represent" value="{{ old('authorized_represent') }}"
                                            required>
                                    </div>
                                    {{-- first card start --}}
                                    <h4 class="mt-5" style="color: orangered; text-align:center;">Ik vraag aan
                                        Orange
                                        volgende nummers naar
                                        Orange over te
                                        dragen</h4>

                                    <div class="row mt-3">
                                        <div class="col-12">
                                            {{-- changed --}}
                                            {{-- pasted --}}



                                            <h4 class="mt-3" style="color: orangered; text-align:center;">
                                                Gegevens
                                                oude
                                                simkaart</h4>



                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="checkbox" name="old_prepaid_subscription_1" value="0">
                                                        <label for="old_prepaid_subscription_1"
                                                            class="form-label">voorafbetaalde kaart</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="radio" name="old_prepaid_subscription_1" value="1">
                                                        <label for="old_prepaid_subscription_1"
                                                            class="form-label">forfait/abonnement</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mt-3 col-2">
                                                        <p>Gsm-nr</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">04</span>
                                                            <input type="text" class="form-control"
                                                                aria-describedby="basic-addon1" name="code_mobile_1">
                                                            <input type="text" class="form-control"
                                                                aria-describedby="basic-addon1" name="num_mobile_1">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="radio" name="voice_1" value="0">
                                                        <label for="voice_1" class="form-label">Voice</label>
                                                        <input type="radio" name="data_1" value="1" required>
                                                        <label for="data_1" class="form-label">Data/Fax</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <p>Simkaartnr</p>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="mb-2">
                                                            <input type="sim_card_1"
                                                                class="form-control @error('sim_card_1') is-invalid @enderror"
                                                                id="sim_card_1" autocomplete="off" placeholder="Simkaartnr"
                                                                name="sim_card_1" value="{{ old('sim_card_1') }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <p>Klantnr.*</p>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="mb-2">
                                                            <input type="customer_no_1"
                                                                class="form-control @error('customer_no_1') is-invalid @enderror"
                                                                id="customer_no_1" autocomplete="off" placeholder="Klantnr"
                                                                name="customer_no_1" value="{{ old('customer_no_1') }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            {{-- card ends paste --}}
                                            <h4 style="color: orangered; text-align:center;">Gegevens nieuwe
                                                simkaart</h4>


                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="new_prepaid_subscription_1" value="0">
                                                    <label for="new_prepaid_subscription_1"
                                                        class="form-label">voorafbetaalde
                                                        kaart</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="new_prepaid_subscription_1" value="1">
                                                    <label for="new_prepaid_subscription_1"
                                                        class="form-label">forfait/abonnement</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <label for="temp_mobile_no_1" class="form-label">Tĳdelĳk
                                                            gsm-nr<span class="text-danger">*</span></label>
                                                        <input type="temp_mobile_no_1"
                                                            class="form-control @error('temp_mobile_no_1') is-invalid @enderror"
                                                            id="temp_mobile_no_1" autocomplete="off"
                                                            placeholder="Tĳdelĳk gsm-nr" name="temp_mobile_no_1"
                                                            value="{{ old('temp_mobile_no_1') }}" required>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="chosen_formula_1" class="form-label">Gekozen
                                                            formule<span class="text-danger">*</span></label>
                                                        <input type="chosen_formula_1"
                                                            class="form-control @error('chosen_formula_1') is-invalid @enderror"
                                                            id="chosen_formula_1" autocomplete="off"
                                                            placeholder="Gekozen formule" name="chosen_formula_1"
                                                            value="{{ old('chosen_formula_1') }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <label for="new_sim_card_1" class="form-label">Simkaartnr<span
                                                                class="text-danger">*</span></label>
                                                        <input type="new_sim_card_1"
                                                            class="form-control @error('new_sim_card_1') is-invalid @enderror"
                                                            id="new_sim_card_1" autocomplete="off" placeholder="Simkaartnr"
                                                            name="new_sim_card_1" value="{{ old('new_sim_card_1') }}"
                                                            required>
                                                    </div>
                                                    <div class="mb-2">
                                                        <input type="text_1"
                                                            class="form-control @error('text_1') is-invalid @enderror"
                                                            id="text_1" autocomplete="off" placeholder="Text" name="text_1"
                                                            value="{{ old('text_1') }}" required>
                                                    </div>
                                                </div>
                                            </div>



                                            {{-- pasted --}}
                                        </div>



                                    </div>
                                </div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">

                                                <div class="row">
                                                    <div class="col-6">
                                                        <input type="radio" name="old_prepaid_subscription_3" value="0">
                                                        <label for="old_prepaid_subscription_3"
                                                            class="form-label">voorafbetaalde
                                                            kaart</label>
                                                    </div>
                                                    <div class="col-6">
                                                        <input type="radio" name="old_prepaid_subscription_3" value="1">
                                                        <label for="old_prepaid_subscription_3"
                                                            class="form-label">forfait/abonnement</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <p>Gsm-nr</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text" id="basic-addon1">04</span>
                                                            <input type="num_mobile_3" class="form-control"
                                                                aria-describedby="basic-addon1" name="code_mobile_3">
                                                            <input type="num_mobile_3" class="form-control"
                                                                aria-describedby="basic-addon1" name="num_mobile_3">
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                        <input type="radio" name="voice_3" value="0">
                                                        <label for="voice_3" class="form-label">Voice</label>
                                                        <input type="radio" name="data_3" value="1">
                                                        <label for="data_3" class="form-label">Data/Fax</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <p>Simkaartnr</p>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="mb-2">
                                                            <input type="sim_card_3"
                                                                class="form-control @error('sim_card_3') is-invalid @enderror"
                                                                id="sim_card_3" autocomplete="off" placeholder="Simkaartnr"
                                                                name="sim_card_3" value="{{ old('sim_card_3') }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <p>Klantnr.*</p>
                                                    </div>
                                                    <div class="col-10">
                                                        <div class="mb-2">
                                                            <input type="customer_no_3"
                                                                class="form-control @error('customer_no_3') is-invalid @enderror"
                                                                id="customer_no_3" autocomplete="off" placeholder="Klantnr"
                                                                name="customer_no_3" value="{{ old('customer_no_3') }}"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12">


                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="new_prepaid_subscription_3" value="0">
                                                    <label for="new_prepaid_subscription_3"
                                                        class="form-label">voorafbetaalde
                                                        kaart</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="new_prepaid_subscription_3" value="1">
                                                    <label for="new_prepaid_subscription_3"
                                                        class="form-label">forfait/abonnement</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <label for="temp_mobile_no_3" class="form-label">Tĳdelĳk
                                                            gsm-nr<span class="text-danger">*</span></label>
                                                        <input type="temp_mobile_no_3"
                                                            class="form-control @error('temp_mobile_no_3') is-invalid @enderror"
                                                            id="temp_mobile_no_3" autocomplete="off"
                                                            placeholder="Tĳdelĳk gsm-nr" name="temp_mobile_no_3"
                                                            value="{{ old('temp_mobile_no_3') }}" required>
                                                    </div>
                                                    <div class="mb-2">
                                                        <label for="chosen_formula_3" class="form-label">Gekozen
                                                            formule<span class="text-danger">*</span></label>
                                                        <input type="chosen_formula_3"
                                                            class="form-control @error('chosen_formula_3') is-invalid @enderror"
                                                            id="chosen_formula_3" autocomplete="off"
                                                            placeholder="Gekozen formule" name="chosen_formula_3"
                                                            value="{{ old('chosen_formula_3') }}" required>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="mb-2">
                                                        <label for="new_sim_card_3" class="form-label">Simkaartnr<span
                                                                class="text-danger">*</span></label>
                                                        <input type="new_sim_card_3"
                                                            class="form-control @error('new_sim_card_3') is-invalid @enderror"
                                                            id="legal_status" autocomplete="off" placeholder="Simkaartnr"
                                                            name="new_sim_card_3" value="{{ old('new_sim_card_3') }}"
                                                            required>
                                                    </div>
                                                    <div class="mb-2">
                                                        <input type="text_3"
                                                            class="form-control @error('text_3') is-invalid @enderror"
                                                            id="text_3" autocomplete="off" placeholder="Text" name="text_3"
                                                            value="{{ old('text_3') }}" required>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                {{-- xxxx --}}

                                <div class="container">
                                    <div class="col-12">


                                        <div class="row">
                                            <div class="col-6">
                                                <input type="radio" name="old_prepaid_subscription_2" value="0">
                                                <label for="old_prepaid_subscription_2"
                                                    class="form-label">voorafbetaalde
                                                    kaart</label>
                                            </div>
                                            <div class="col-6">
                                                <input type="radio" name="old_prepaid_subscription_2" value="1">
                                                <label for="old_prepaid_subscription_2"
                                                    class="form-label">forfait/abonnement</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p>Gsm-nr</p>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">04</span>
                                                    <input type="text" class="form-control"
                                                        aria-describedby="basic-addon1" name="code_mobile_2">
                                                    <input type="text" class="form-control"
                                                        aria-describedby="basic-addon1" name="num_mobile_2">
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <input type="radio" name="voice_2" value="0">
                                                <label for="voice_2" class="form-label">Voice</label>
                                                <input type="radio" name="data_2" value="1">
                                                <label for="data_2" class="form-label">Data/Fax</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p>Simkaartnr</p>
                                            </div>
                                            <div class="col-10">
                                                <div class="mb-2">
                                                    <input type="sim_card_2"
                                                        class="form-control @error('sim_card_2') is-invalid @enderror"
                                                        id="sim_card_2" autocomplete="off" placeholder="Simkaartnr"
                                                        name="sim_card_2" value="{{ old('sim_card_2') }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-2">
                                                <p>Klantnr.*</p>
                                            </div>
                                            <div class="col-10">
                                                <div class="mb-2">
                                                    <input type="customer_no_2"
                                                        class="form-control @error('customer_no_2') is-invalid @enderror"
                                                        id="customer_no_2" autocomplete="off" placeholder="Klantnr"
                                                        name="customer_no_2" value="{{ old('customer_no_2') }}" required>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="container">
                                    <div class="col-12">


                                        <div class="row">
                                            <div class="col-6">
                                                <input type="radio" name="new_prepaid_subscription_2" value="0">
                                                <label for="new_prepaid_subscription_2"
                                                    class="form-label">voorafbetaalde
                                                    kaart</label>
                                            </div>
                                            <div class="col-6">
                                                <input type="radio" name="new_prepaid_subscription_2" value="1">
                                                <label for="new_prepaid_subscription_2"
                                                    class="form-label">forfait/abonnement</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label for="temp_mobile_no_2" class="form-label">Tĳdelĳk
                                                        gsm-nr<span class="text-danger">*</span></label>
                                                    <input type="temp_mobile_no_2"
                                                        class="form-control @error('temp_mobile_no_2') is-invalid @enderror"
                                                        id="temp_mobile_no_2" autocomplete="off"
                                                        placeholder="Tĳdelĳk gsm-nr" name="temp_mobile_no_2"
                                                        value="{{ old('temp_mobile_no_2') }}" required>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="chosen_formula_2" class="form-label">Gekozen
                                                        formule<span class="text-danger">*</span></label>
                                                    <input type="chosen_formula_2"
                                                        class="form-control @error('chosen_formula_2') is-invalid @enderror"
                                                        id="chosen_formula_2" autocomplete="off"
                                                        placeholder="Gekozen formule" name="chosen_formula_2"
                                                        value="{{ old('chosen_formula_2') }}" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-2">
                                                    <label for="new_sim_card_2" class="form-label">Simkaartnr<span
                                                            class="text-danger">*</span></label>
                                                    <input type="new_sim_card_2"
                                                        class="form-control @error('new_sim_card_2') is-invalid @enderror"
                                                        id="new_sim_card_2" autocomplete="off" placeholder="Simkaartnr"
                                                        name="new_sim_card_2" value="{{ old('new_sim_card_2') }}"
                                                        required>
                                                </div>
                                                <div class="mb-2">
                                                    <input type="text_2"
                                                        class="form-control @error('text_2') is-invalid @enderror"
                                                        id="text_2" autocomplete="off" placeholder="Text" name="text_2"
                                                        value="{{ old('text_2') }}" required>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>


                            </div>

                            {{-- end of master card body --}}


                            <div class="container mb-4">
                                <div class="mb-2">
                                    <label for="copies" class="form-label">Opgemaakt in 3 exemplaren te<span
                                            class="text-danger">*</span></label>
                                    <input type="copies" class="form-control @error('copies') is-invalid @enderror"
                                        id="copies" autocomplete="off" placeholder="Opgemaakt in 3 exemplaren te"
                                        name="copies" value="{{ old('copies') }}" required>
                                    <label for="date" class="mt-2 form-label">OP:<span
                                            class="text-danger">*</span></label>
                                    <input class="form-control @error('date') is-invalid @enderror mb-4 mb-md-0"
                                        data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                        inputmode="numeric" id="date" name="date" value="{{ old('date') }}" type="date">
                                    <label for="customer_sig" class="mt-2 mb-3 form-label">Handtekening van de
                                        klant:<span class="mt-2 text-danger">*</span></label>
                                    <textarea type="customer_sig" class="form-control @error('customer_sig') is-invalid @enderror" id="customer_sig"
                                        row="5" autocomplete="off" placeholder="Handtekening van de klant"
                                        name="customer_sig" value="{{ old('customer_sig') }}" required></textarea>
                                </div>
                            </div>
                        </div>

                        {{-- end of first contaibner --}}




                        {{-- changed --}}
                    </div>






                </div>
        </div>
        <div class="mt-3 col-md-12">


            <div class="card-body">



            </div>



        </div>
        <button type="submit" class="btn btn-primary mt-3 me-2 ml-4">Submit</button>
        <button class="btn btn-secondary mt-3 ml-2">Cancel</button>
    </div>
    </div>

    </form>
    </div>
    </div>
@endsection
