@extends('layouts.backend')

@section('content')

<div class="row">
    <div class="col-md-12">
        <form class="forms-sample" action="{{ route('number_porting_du.store') }}" method="POST">
            @csrf()
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Identificatie van de klant</h6>
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
                                    <input type="radio" name="language" value="0">
                                    <label for="language" class="form-label">NL</label>
                                    <input type="radio" name="language" value="1">
                                    <label for="language" class="form-label">FR</label>
                                    <input type="radio" name="language" value="2">
                                    <label for="language" class="form-label">UK</label>
                                    <input type="radio" name="language" value="3">
                                    <label for="language" class="form-label">DE</label>
                                </div>
                                <div class="col-4">
                                    <input type="checkbox" name="subscription" value="0">
                                    <label for="subscription" class="form-label">De abonnementsaanvraag volgt in bĳlage<span class="text-danger">*</span></label>
                                    @error('subscription')
                                    <span class="invalid-feedback mb-3" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-9">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Naam<span class="text-danger">*</span></label>
                                        <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Naam" name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                        <span class="invalid-feedback mb-3" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-3">
                                        <label for="f_name" class="form-label">Voornaam<span class="text-danger">*</span></label>
                                        <input type="f_name" class="form-control @error('f_name') is-invalid @enderror" id="f_name" autocomplete="off" placeholder="Voornaam" name="f_name" value="{{ old('f_name') }}" required>
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
                                        <label for="street" class="form-label">Straat :<span class="text-danger">*</span></label>
                                        <input type="street" class="form-control @error('street') is-invalid @enderror" id="street" autocomplete="off" placeholder="Straat" name="street" value="{{ old('street') }}" required>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-2">
                                        <label for="no" class="form-label">Nr<span class="text-danger">*</span></label>
                                        <input type="no" class="form-control @error('no') is-invalid @enderror" id="no" autocomplete="off" placeholder="Nr" name="no" value="{{ old('no') }}" required>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-2">
                                        <label for="box" class="form-label">Bus<span class="text-danger">*</span></label>
                                        <input type="box" class="form-control @error('box') is-invalid @enderror" id="box" autocomplete="off" placeholder="Bus" name="box" value="{{ old('box') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="town" class="form-label">Plaats:<span class="text-danger">*</span></label>
                                        <input type="town" class="form-control @error('town') is-invalid @enderror" id="town" autocomplete="off" placeholder="Plaats" name="town" value="{{ old('town') }}" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2">
                                        <label for="postal_code" class="form-label">Postcode:<span class="text-danger">*</span></label>
                                        <input type="postal_code" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Code postal" name="Postcode" value="{{ old('postal_code') }}" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2">
                                        <label for="country" class="form-label">Land:<span class="text-danger">*</span></label>
                                        <input type="country" class="form-control @error('country') is-invalid @enderror" id="country" autocomplete="off" placeholder="Pays" name="country" value="{{ old('country') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="mail" class="form-label">E Mail<span class="text-danger">*</span></label>
                                <input type="mail" class="form-control @error('mail') is-invalid @enderror" id="mail" autocomplete="off" placeholder="Mail" name="mail" value="{{ old('mail') }}" required>
                                @error('mail')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6"></div>
                                <div class="col-6"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

@endsection