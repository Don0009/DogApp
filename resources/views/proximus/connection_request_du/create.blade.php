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

{{-- Master main container --}}
<div class="container">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <div class="row">
                {{-- changed --}}
                <div class="mb-3 col-md-6">
                    <label for="client_num" class="form-label">Partner<span
                            class="text-danger">*</span></label>
                    <input type="client_num"
                        class="form-control @error('partner') is-invalid @enderror"
                        id="partner" autocomplete="off" placeholder="partner"
                        name="partner" value="{{ old('partner') }}" required>
                    @error('partner')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-2 col-md-6">
                    <label for="identity" class="form-label">ID<span
                            class="text-danger">*</span></label>
                    <input type="identity"
                        class="form-control @error('identity') is-invalid @enderror"
                        id="identity" autocomplete="off" placeholder="ID "
                        name="identity" value="{{ old('identity') }}" required>
                    @error('identity')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-md-6">
                    <label for="seller" class="form-label">Verkoper<span
                            class="text-danger">*</span></label>
                    <input type="seller"
                        class="form-control @error('seller') is-invalid @enderror"
                        id="seller" autocomplete="off" placeholder="Verkoper "
                        name="seller" value="{{ old('seller') }}" required>
                    @error('seller')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2 col-md-6">
                    <label for="gsm" class="form-label">GSM<span
                            class="text-danger">*</span></label>
                    <input type="gsm"
                        class="form-control @error('gsm') is-invalid @enderror"
                        id="gsm" autocomplete="off" placeholder="ID "
                        name="gsm" value="{{ old('gsm') }}" required>
                    @error('gsm')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
               {{-- title to be added --}}

                {{-- radios --}}

                <div class="mb-2 col-md-12">
                    <input type="radio" name="person_type" value="0" required>
                    <label for="person_type" class="form-label">Natuurlijke persoon  (min. 18 j. - recto-kopie identiteitskaart)</label>
                </div>

                <div class="mb-2 col-md-12">
                    <input type="radio" name="person_type" value="1" required>
                    <label for="person_type" class="form-label">Rechtspersoon (kopie statuten Staatsblad + identiteitskaart) </label>
                </div>

                {{-- date --}}
                <div class="mb-2 col-md-6">
                    <label for="validity_of_id" class="form-label mt-2">Geldigheidsdatum van de identiteitskaart<span
                        class="text-danger">*</span></label>
                <input
                    class="form-control @error('validity_of_id') is-invalid @enderror mb-4 mb-md-0"
                    data-inputmask="'alias': 'datetime'"
                    data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric"
                    id="validity_of_id" name="validity_of_id"
                    value="{{ old('validity_of_id') }}" type="date" required>

                </div>

                <div class="mb-2 col-md-6">
                    <label for="be" class="form-label">BE<span
                        class="text-danger">*</span></label>
                <input type="be"
                    class="form-control @error('be') is-invalid @enderror"
                    id="be" autocomplete="off" placeholder="BE"
                    name="be" value="{{ old('be') }}" required>
                @error('be')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="mb-2 mt-3 col-md-6">
                    <input type="radio" name="VAT_is_exempted" value="1" required>
                    <label for="VAT_is_exempted" class="form-label">Btw-vrijstelling g (gelieve attest bij te voegen)</label>
                </div>

                <div class="mb-2 mt-3 col-md-3">
                    <input type="radio" name="is_source_of_income" value="0" required>
                    <label for="is_source_of_income" class="form-label">Zelfstandige/Vrij beroep</label>
                </div>
                <div class="mb-2 mt-3 col-md-3">
                    <input type="radio" name="is_source_of_income" value="1" required>
                    <label for="is_source_of_income" class="form-label">Bedrijf</label>
                </div>
                <div class="mb-2 mt-5 col-md-3">
                    <input type="radio" name="is_title" value="0" required>
                    <label for="is_title" class="form-label">Mr.</label>
                    <input type="radio" name="is_title" class="ml-5" value="1" required>
                    <label for="is_title" class="form-label">Mvr.</label>
                </div>
                <div class="mb-2 mt-5 col-md-3">
                    <label for="number_of_customer" class="form-label">Nr. van de klant<span
                            class="text-danger">*</span></label>
                    <input type="number_of_customer"
                        class="form-control @error('number_of_customer') is-invalid @enderror"
                        id="number_of_customer" autocomplete="off" placeholder="Nr. Van De Klant"
                        name="number_of_customer" value="{{ old('number_of_customer') }}" required>
                    @error('number_of_customer')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-2 mt-5 col-md-3">
                    <label for="name" class="form-label">Naam<span
                            class="text-danger">*</span></label>
                    <input type="name"
                        class="form-control @error('name') is-invalid @enderror"
                        id="name" autocomplete="off" placeholder="Naam"
                        name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2 mt-5 col-md-3">
                    <label for="first_name" class="form-label">Voornaam<span
                            class="text-danger">*</span></label>
                    <input type="first_name"
                        class="form-control @error('first_name') is-invalid @enderror"
                        id="first_name" autocomplete="off" placeholder="Voornaam"
                        name="first_name" value="{{ old('first_name') }}" required>
                    @error('first_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-2 mt-3 col-md-6">
                    <label for="name_of_company" class="form-label"> Naam van bedrijf<span
                            class="text-danger">*</span></label>
                    <input type="name_of_company"
                        class="form-control @error('name_of_company') is-invalid @enderror"
                        id="name_of_company" autocomplete="off" placeholder="Naam van bedrijf"
                        name="name_of_company" value="{{ old('name_of_company') }}" required>
                    @error('name_of_company')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-2 mt-3 col-md-6">
                    <label for="street" class="form-label">Straat<span
                            class="text-danger">*</span></label>
                    <input type="street"
                        class="form-control @error('street') is-invalid @enderror"
                        id="street" autocomplete="off" placeholder="Straat"
                        name="street" value="{{ old('street') }}" required>
                    @error('street')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-2 mt-3 col-md-6">
                    <label for="street" class="form-label">Nr.<span
                            class="text-danger">*</span></label>
                    <input type="no"
                        class="form-control @error('no') is-invalid @enderror"
                        id="no" autocomplete="off" placeholder="Nr."
                        name="no" value="{{ old('no') }}" required>
                    @error('no')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            {{-- end of row --}}
        </div>
    </div>

    {{--  IDENTIFICATIE VAN DE KLANT / GEBRUIKER card start --}}



    {{--  IDENTIFICATIE VAN DE KLANT / GEBRUIKER card end --}}


</div>
{{-- Master main container END  --}}



@endsection
