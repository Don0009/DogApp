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
    <form action="{{ route('telenet_question.store') }}" method="POST">@csrf
        <div class="row">

            {{-- Start of success message --}}
            @if (session('success'))
                <div style="text-align: center" class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            {{-- En of success message --}}
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">
                        Klantgegevens: residentiele Kiant

                    </div>

                    <div class="card-body">


                        <div class="mb-3">
                            <label for="client_num" class="form-label">Datum van aanvraag :<span
                                    class="text-danger">*</span></label>
                            {{-- <input type="text" name="date_of_request" class="form-control" required> --}}
                            <input class="form-control @error('date_of_request') is-invalid @enderror mb-4 mb-md-0"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" name="date_of_request" value="{{ old('date_of_request') }}"
                                type="date">

                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Voornaam :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="first_name" class="form-control" required>
                            @error('first_name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Naam :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" required>
                            @error('name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">GSM-nummer :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="cell_phone_number" class="form-control" required>
                            @error('cell_phone_number')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Emailadres :<span
                                    class="text-danger">*</span></label>
                            <input type="email" name="email_address_1" class="form-control" required>
                            @error('email_address_1')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Adres :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="address" class="form-control" required>
                            @error('address')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label"> Postcode :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="postcode_1" class="form-control" required>
                            @error('postcode_1')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Stad :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="city" class="form-control" required>
                            @error('city')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Geboortedatum : <span
                                    class="text-danger">*</span></label>
                            <input class="form-control @error('date_of_birth') is-invalid @enderror mb-4 mb-md-0"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date">

                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Geboorteplaats :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="birth_place" class="form-control" required>
                            @error('birth_place')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Identiteitskaarnummer :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="id_card_number" class="form-control" required>
                            @error('id_card_number')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>



                <div class="mt-3 card">

                    <div class="card-header">
                        Klantgegevens: Business Klant

                    </div>

                    <div class="card-body">


                        <div class="mb-3">
                            <label for="client_num" class="form-label">Bedrijf :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="business" class="form-control" required>
                            @error('business')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Vennootschapsvorm :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="company_form" class="form-control" required>
                            @error('company_form')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Ondernemingsnummer:<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="company_number" class="form-control" required>
                            @error('company_number')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Klantadres :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="customer_address" class="form-control" required>
                            @error('customer_address')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label"> Postcode :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="postcode_2" class="form-control" required>

                            @error('postcode_2')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Stad :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="city_2" class="form-control" required>

                            @error('city_2')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Voornaam contactpersoon :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="first_name_contact_person" class="form-control" required>

                            @error('first_name_contact_person')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label"> Naam contactpersoon:<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="name_contact_person" class="form-control" required>

                            @error('name_contact_person')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="client_num" class="form-label"> GSM-nummer:<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="cell_phone_2" class="form-control" required>

                            @error('cell_phone_2')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="client_num" class="form-label"> E-mailadres :<span
                                    class="text-danger">*</span></label>
                            <input type="email" name="email_address_2" class="form-control" required>

                            @error('email_address_2')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Indien verschilled van klantadres, facturatie :
                                <span class="text-danger">*</span></label>
                            <input type="text" name="if_different_from_customer_address_billing" class="form-control"
                                required>

                            @error('if_different_from_customer_address_billing')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Indien verschilled van klantadres, Installatie :
                                <span class="text-danger">*</span></label>
                            <input type="text" name="if_different_from_customer_address_installation"
                                class="form-control" required>

                            @error('if_different_from_customer_address_installation')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                        </div>

                    </div>
                </div>
                {{-- end of card two --}}
                <div class="mt-3 card">

                    <div class="card-header">
                        Gewenste Telenet Diensten

                    </div>

                    <div class="card-body">



                        <div class="mb-3">
                            <label for="client_num" class="form-label">Gekozen products:
                                <span class="text-danger">*</span></label>
                            <input type="text" name="selected_product" class="form-control" required>

                            @error('selected_product')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Gewenste installatiedatum :
                                <span class="text-danger">*</span></label>
                            {{-- <input type="text" name="desired_install_date" class="form-control" required> --}}
                            <input class="form-control @error('desired_install_date') is-invalid @enderror mb-4 mb-md-0"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="inst_establishment_date" name="desired_install_date"
                                value="{{ old('desired_install_date') }}" type="date">

                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Opmerkingen, Wensen
                                <span class="text-danger">*</span></label>
                            <input type="text" name="wish_comments" class="form-control" required>
                            @error('wish_comments')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                        </div>

                    </div>
                </div>
                <button class="mt-3 btn btn-info" type="submit">Submit</button>
                <button class="mt-3 btn btn-secondary" type="submit">Cancel</button>

                {{-- end of card three --}}
            </div>

        </div>
    </form>
@endsection
