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
    <form action="{{ route('contractapp.store') }}" method="POST">@csrf
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
                    <img class="mt-3" style="text-align: center; margin:0 auto;" class="img-responsive"
                        src="{{ asset('images/brands/telenet_brand.jpeg') }}" height="75px" width="220px" alt="">

                    <div class="card-header">
                        Données Cliënt: Cliënt Résidentiel


                    </div>

                    <div class="card-body">



                        <div class="mb-3">
                            <label for="client_num" class="form-label">Nom :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control">
                            @error('name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="client_num" class="form-label">Prénom :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="first_name" class="form-control" required>
                            @error('first_name')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Numéro Contact :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="contact_number" class="form-control" required>
                            @error('contact_number')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Adresse Email :<span
                                    class="text-danger">*</span></label>
                            <input type="email" name="email_address" class="form-control" required>
                            @error('email_address')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Adresse Installation :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="facility_address" class="form-control" required>
                            @error('facility_address')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Code Postal :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="postal_code" class="form-control" required>
                            @error('postal_code')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="client_num" class="form-label">Ville :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="town" class="form-control" required>
                            @error('town')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Date de Naissance :<span
                                    class="text-danger">*</span></label>
                            {{-- <input type="text" name="date_of_request" class="form-control" required> --}}
                            <input class="form-control @error('date_of_birth') is-invalid @enderror mb-4 mb-md-0"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date">

                        </div>

                        <div class="mb-3">
                            <label for="client_num" class="form-label"> Lieu de naissance :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="place_of_birth" class="form-control" required>
                            @error('place_of_birth')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="client_num" class="form-label"> Numéro Carte d’itendité :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="identity_card_number" class="form-control" required>
                            @error('identity_card_number')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>



                <div class="mt-3 card">

                    <div class="card-header">
                        Données Cliënt: Cliënt Professionel


                    </div>

                    <div class="card-body">


                        <div class="mb-3">
                            <label for="client_num" class="form-label">Compagnie :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="company" class="form-control" required>
                            @error('company')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Form D’entreprise :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="company_form" class="form-control" required>
                            @error('company_form')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Numéro D’entreprise<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="business_number" class="form-control" required>
                            @error('business_number')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Adresse Installation :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="plant_address" class="form-control" required>
                            @error('plant_address')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label"> Code Postal:<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="postal_code_2" class="form-control" required>
                            @error('postal_code_2')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Ville :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="town_2" class="form-control" required>
                            @error('town_2')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Adresse Facturation :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="billing_address" class="form-control" required>
                            @error('billing_address')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label"> Nom et Prénom contact:<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="first_last_name_contact" class="form-control" required>
                            @error('first_last_name_contact')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label"> Numéro Contact :<span
                                    class="text-danger">*</span></label>
                            <input type="text" name="contact_number_2" class="form-control" required>

                            @error('contact_number_2')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label"> Adresse Email:<span
                                    class="text-danger">*</span></label>
                            <input type="email" name="email_address_2" class="form-control" required>
                            @error('email_address_2')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>


                    </div>
                </div>
                {{-- end of card two --}}
                <div class="mt-3 card">

                    <div class="card-header">
                        Services Telenet souhaités

                    </div>

                    <div class="card-body">



                        <div class="mb-3">
                            <label for="client_num" class="form-label">Produit Choisi :
                                <span class="text-danger">*</span></label>
                            <input type="text" name="selected_product" class="form-control" required>
                            @error('selected_product')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Date Installation préférer: :
                                <span class="text-danger">*</span></label>
                            {{-- <input type="text" name="desired_install_date" class="form-control" required> --}}
                            <input
                                class="form-control @error('preferred_date_of_installation') is-invalid @enderror mb-4 mb-md-0"
                                data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy"
                                inputmode="numeric" id="inst_establishment_date" name="preferred_date_of_installation"
                                value="{{ old('preferred_date_of_installation') }}" type="date">

                        </div>
                        <div class="mb-3">
                            <label for="client_num" class="form-label">Remarques :
                                <span class="text-danger">*</span></label>
                            <input type="text" name="remarks" class="form-control" required>
                            @error('remarks')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
                <button class="mt-3 btn btn-info" type="submit">Submit</button>
                <a href="{{ route('contractapp.index') }}"><button href class="mt-3 btn btn-secondary"
                        type="submit">Cancel</button></a>

                {{-- end of card three --}}
            </div>

        </div>
    </form>
@endsection
