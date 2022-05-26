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
                {{-- <h5 class="card-title">Proximus</h5> --}}
                <form action="{{ route('proximus_multi_contact_fr.store') }}" method="post">@csrf
                    <div class="row">

                        {{-- Branding --}}
                        <img class="mt-3" style="text-align: center; margin:0 auto;" class="img-responsive"
                            src="{{ asset('images/brands/Proximus_logo.jpeg') }}" height="75px" width="330" alt="">
                        {{-- Branding ENd --}}



                        <div class="mb-3 mt-5 col-md-12">
                            <h5 class=""><b>Bijlage 1: Bijkomende simkaarten (max. 10)</b>
                            </h5>

                        </div>

                        <div class="mb-3 col-md-12">
                            <p class="lead">GELIEVE ALLES IN HOOFDLETTERS IN TE VULLEN

                            </p>

                        </div>

                        <div class="mb-3 mt-3 col-md-6">
                            <label for="client_name" class="form-label"><span
                                    class="text-danger">*</span>Klantennaam</label>
                            <input type="client_name" class="form-control @error('client_name') is-invalid @enderror"
                                id="client_name" autocomplete="off" placeholder="Klantennaam" name="client_name"
                                value="{{ old('client_name') }}" required>
                            @error('client_name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-6">
                            <label for="phone" class="form-label"><span
                                    class="text-danger">*</span>Oproepnummer</label>
                            <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                autocomplete="off" placeholder="Oproepnummer" name="phone" value="{{ old('phone') }}"
                                required>
                            @error('phone')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <h5 class=""><b>Voor residentiële klanten </b>
                            </h5>

                        </div>

                        <div class="mb-3 col-md-12">
                            <p class="lead" style="text-align: center;">Bijkomende simkaart – 1
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r" value="0" required>
                            <label for="sim_phase" class="form-label">Nieuw</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r" value="1" required>
                            <label for="sim_phase" class="form-label">Conversie</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r" value="2" required>
                            <label for="sim_phase" class="form-label">PORT IN (LOA) </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;">Simkaarttype
                            </p>
                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r" value="0" required>
                            <label for="sim_type_r" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r" value="1" required>
                            <label for="sim_type_r" class="form-label">Normaal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num" class="form-label"><span class="text-danger">*</span>Sim nr</label>
                            <input type="sim_num" class="form-control @error('sim_num') is-invalid @enderror" id="sim_num"
                                autocomplete="off" placeholder="Sim nr" name="sim_num" value="{{ old('sim_num') }}"
                                required>
                            @error('sim_num')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num" class="form-label"><span class="text-danger">*</span> .Gsm
                                nr</label>
                            <input type="gsm_num" class="form-control @error('gsm_num') is-invalid @enderror" id="gsm_num"
                                autocomplete="off" placeholder=".Gsm nr" nr" name="gsm_num" value="{{ old('gsm_num') }}"
                                required>
                            @error('gsm_num')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_r" value="0" required>
                            <label for="proximus_subs_r" class="form-label"> Proximus-abonnement in Pack </label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Mobilus</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r" value="0" required>
                            <label for="mobilus_r" class="form-label">S </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r" value="1" required>
                            <label for="mobilus_r" class="form-label">M </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r" value="2" required>
                            <label for="mobilus_r" class="form-label">L</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r" value="3" required>
                            <label for="mobilus_r" class="form-label"> Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r" value="4" required>
                            <label for="mobilus_r" class="form-label">Unlimited Premium</label>
                        </div>

                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Mobilus FullControl</b>
                            </p>



                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r" value="0" required>
                            <label for="mobilus_full_r" class="form-label"> S</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r" value="1" required>
                            <label for="mobilus_full_r" class="form-label"> M</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r" value="2" required>
                            <label for="mobilus_full_r" class="form-label"> L</label>
                        </div>




                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>App (1 naar keuze)</b>
                            </p>

                        </div>




                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="0" required>
                            <label for="app_social" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/facebook.png') }}" height="25px"
                                    width="25px" alt="">

                            </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="1" required>
                            <label for="app_social" class="form-label">
                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/twitter.png') }}" height="25px"
                                    width="25px" alt="">
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="2" required>
                            <label for="app_social" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/whatsapp.png') }}" height="25px"
                                    width="25px" alt="">
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="3" required>
                            <label for="app_social" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/snapchat.png') }}" height="25px"
                                    width="25px" alt=""> </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="4" required>
                            <label for="app_social" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/instagram.png') }}" height="25px"
                                    width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="5" required>
                            <label for="app_social" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/pinterest.png') }}" height="25px"
                                    width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="0" required>
                            <label for="app_social" class="form-label"> Mobile Flex </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex" value="1" required>
                            <label for="mob_epic_flex" class="form-label">Mobile Flex +</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex" value="2" required>
                            <label for="mob_epic_flex" class="form-label">Unlimited Light </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex" value="3" required>
                            <label for="mob_epic_flex" class="form-label">Unlimited </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex" value="4" required>
                            <label for="mob_epic_flex" class="form-label">Unlimited Premium </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex" value="5" required>
                            <label for="mob_epic_flex" class="form-label">Mobile Flex Full Control </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex" value="6" required>
                            <label for="mob_epic_flex" class="form-label">Mobile Flex + Full Control </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex" value="7" required>
                            <label for="mob_epic_flex" class="form-label">Epic stories </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex" value="8" required>
                            <label for="mob_epic_flex" class="form-label">Epic beats </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex" value="9" required>
                            <label for="mob_epic_flex" class="form-label"> Epic videos </label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Joint offer: DataPhone Option</b>
                            </p>

                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package" value="0" required>
                            <label for="gb_package" class="form-label"> (500 MB): €5/maand </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package" value="1" required>
                            <label for="gb_package" class="form-label"> (1 GB): €10/maand </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package" value="2" required>
                            <label for="gb_package" class="form-label"> (1,5 GB): €15/maand </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="gb_package" value="3" required>
                            <label for="gb_package" class="form-label"> (2 GB): €20/maand </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="gb_package" value="4" required>
                            <label for="gb_package" class="form-label"> (2,5 GB): €25/maand </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="0" required>
                            <label for="package_type_1" class="form-label"> Mobile 10 </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="1" required>
                            <label for="package_type_1" class="form-label"> Travel Passport Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="2" required>
                            <label for="package_type_1" class="form-label"> Daily Travel Surf </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="" required>
                            <label for="package_type_1" class="form-label"> Travel Surf World Intense </label>
                        </div>



                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="4" required>
                            <label for="package_type_1" class="form-label"> Pay&Go </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="5" required>
                            <label for="package_type_1" class="form-label"> Travel Passport Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="6" required>
                            <label for="package_type_1" class="form-label"> Travel Surf Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="7" required>
                            <label for="package_type_1" class="form-label"> Smartphone Omnium </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="8" required>
                            <label for="package_type_1" class="form-label"> Daily Travel Passport </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="9" required>
                            <label for="package_type_1" class="form-label"> Travel Passport Outside EU&Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="10" required>
                            <label for="package_type_1" class="form-label"> Travel Surf Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="11" required>
                            <label for="package_type_1" class="form-label"> 1-Month Travel Passport Top 3 </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="12" required>
                            <label for="package_type_1" class="form-label"> SMS 100 </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="13" required>
                            <label for="package_type_1" class="form-label"> Travel Passport World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="14" required>
                            <label for="package_type_1" class="form-label"> Travel Surf World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_1" value="15" required>
                            <label for="package_type_1" class="form-label"> 1-Month Travel Passport Top</label>
                        </div>



                        {{-- SECOND PHASE --}}


                        <div class="mb-3 col-md-12">
                            <p class="lead mt-5" style="text-align: center;">Bijkomende simkaart – 2
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_2" value="0" required>
                            <label for="sim_phase_r_3" class="form-label">Nieuw</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_2" value="1" required>
                            <label for="sim_phase_r_3" class="form-label">Conversie</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_2" value="2" required>
                            <label for="sim_phase_r_3" class="form-label">PORT IN (LOA) </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;">Simkaarttype:
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_2" value="0" required>
                            <label for="sim_type_r_3" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_2" value="1" required>
                            <label for="sim_type_r_3" class="form-label">Normal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num_2" class="form-label"><span class="text-danger">*</span>Sim
                                nr</label>
                            <input type="sim_num_2" class="form-control @error('sim_num_2') is-invalid @enderror"
                                id="sim_num_2" autocomplete="off"
                                placeholder="Sim
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    nr"
                                name="sim_num_2" value="{{ old('sim_num_2') }}" required>
                            @error('sim_num_2')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num_2" class="form-label"><span class="text-danger">*</span> Gsm
                                nr</label>
                            <input type="gsm_num_2" class="form-control @error('gsm_num_2') is-invalid @enderror"
                                id="gsm_num_2" autocomplete="off" placeholder=" Gsm nr" name="gsm_num_2"
                                value="{{ old('gsm_num_2') }}" required>
                            @error('gsm_num_2')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_r_2" value="0" required>
                            <label for="proximus_subs_r_2" class="form-label">Proximus-abonnement in Pack </label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Mobilus</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_2" value="0" required>
                            <label for="mobilus_r_2" class="form-label">S </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_2" value="1" required>
                            <label for="mobilus_r_2" class="form-label">M </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_2" value="2" required>
                            <label for="mobilus_r_2" class="form-label">L</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_2" value="3" required>
                            <label for="mobilus_r_2" class="form-label"> Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_2" value="4" required>
                            <label for="mobilus_r_2" class="form-label">Unlimited Premium</label>
                        </div>

                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Mobilus FullControl</b>
                            </p>



                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r_2" value="0" required>
                            <label for="mobilus_full_r_2" class="form-label"> S</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r_2" value="1" required>
                            <label for="mobilus_full_r_2" class="form-label"> M</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r_2" value="2" required>
                            <label for="mobilus_full_r_2" class="form-label"> L</label>
                        </div>




                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>App ((1 naar keuze)</b>
                            </p>

                        </div>




                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_2" value="0" required>
                            <label for="app_social_3" class="form-label">



                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/facebook.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_2" value="1" required>
                            <label for="app_social_3" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/twitter.png') }}" height="25px"
                                    width="25px" alt="">




                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_2" value="2" required>
                            <label for="app_social_3" class="form-label">



                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/snapchat.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_2" value="3" required>
                            <label for="app_social_2" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/instagram.png') }}"
                                    height="25px" width="25px" alt="">




                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_2" value="4" required>
                            <label for="app_social_2" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/whatsapp.png') }}" height="25px"
                                    width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_2" value="5" required>
                            <label for="app_social_2" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/pinterest.png') }}"
                                    height="25px" width="25px" alt="">



                            </label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mob_epic_flex_2" value="0" required>
                            <label for="mob_epic_flex_2" class="form-label"> Mobile Flex </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_2" value="1" required>
                            <label for="mob_epic_flex_2" class="form-label">Mobile Flex +</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_2" value="2" required>
                            <label for="mob_epic_flex_2" class="form-label">Unlimited Light </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_2" value="3" required>
                            <label for="mob_epic_flex_2" class="form-label">Unlimited </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_2" value="4" required>
                            <label for="mob_epic_flex_2" class="form-label">Unlimited Premium </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_2" value="5" required>
                            <label for="mob_epic_flex_2" class="form-label">Mobile Flex Full Control </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_2" value="6" required>
                            <label for="mob_epic_flex_2" class="form-label">Mobile Flex + Full Control </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_2" value="7" required>
                            <label for="mob_epic_flex_2" class="form-label">Epic stories </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_2" value="8" required>
                            <label for="mob_epic_flex_2" class="form-label">Epic beats </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_2" value="9" required>
                            <label for="mob_epic_flex_2" class="form-label"> Epic videos </label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Joint offer: DataPhone Option</b>
                            </p>

                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package_2" value="0" required>
                            <label for="gb_package_2" class="form-label"> (500 MB): €5/maand </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package_2" value="1" required>
                            <label for="gb_package_2" class="form-label"> (1 GB): €10/maand </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package_2" value="2" required>
                            <label for="gb_package_2" class="form-label"> (1,5 GB): €15/maand </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="gb_package_2" value="3" required>
                            <label for="gb_package_2" class="form-label"> (2 GB): €20/maand </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="gb_package_2" value="4" required>
                            <label for="gb_package_2" class="form-label"> (2,5 GB): €25/maand </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="0" required>
                            <label for="package_type_r_2" class="form-label"> Mobile 10 </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="1" required>
                            <label for="package_type_r_2" class="form-label"> Travel Passport Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="2" required>
                            <label for="package_type_r_2" class="form-label"> Daily Trael Surf </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="" required>
                            <label for="package_type_r_2" class="form-label"> Travel Surf World Intense </label>
                        </div>



                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="4" required>
                            <label for="package_type_r_3" class="form-label"> Pay&Go </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="5" required>
                            <label for="package_type_r_2" class="form-label"> Travel Passport Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="6" required>
                            <label for="package_type_r_2" class="form-label"> Travel Surf Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="7" required>
                            <label for="package_type_r_2" class="form-label"> Smartphone Omnium </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="8" required>
                            <label for="package_type_r_2" class="form-label"> Daily Travel Passport </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="9" required>
                            <label for="package_type_r_2" class="form-label"> Travel Passport Outside EU&Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="10" required>
                            <label for="package_type_r_2" class="form-label"> Travel Surf Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="11" required>
                            <label for="package_type_r_2" class="form-label"> 1-Month Travel Passport Top 3 </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="12" required>
                            <label for="package_type_r_2" class="form-label"> SMS 100 </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="13" required>
                            <label for="package_type_r_2" class="form-label"> Travel Passport World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="14" required>
                            <label for="package_type_r_2" class="form-label"> Travel Surf World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_2" value="15" required>
                            <label for="package_type_r_2" class="form-label"> 1-Month Travel Passport Top</label>
                        </div>



                        {{-- END SECOND PHASE --}}


                        {{-- THIRD PHASE --}}


                        <div class="mb-3 col-md-12">
                            <p class="lead mt-5" style="text-align: center;">Bijkomende simkaart – 3
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_3" value="0" required>
                            <label for="sim_phase_r_3" class="form-label">Nieuw</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_3" value="1" required>
                            <label for="sim_phase_r_3" class="form-label">Conversie</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_3" value="2" required>
                            <label for="sim_phase_r_3" class="form-label">PORT IN (LOA) </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;">Simkaarttype
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_3" value="0" required>
                            <label for="sim_type_r_3" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_3" value="1" required>
                            <label for="sim_type_r_3" class="form-label">Normal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num_3" class="form-label"><span class="text-danger">*</span>Sim
                                nr</label>
                            <input type="sim_num_3" class="form-control @error('sim_num_3') is-invalid @enderror"
                                id="sim_num_3" autocomplete="off" placeholder="Sim nr" name="sim_num_3"
                                value="{{ old('sim_num_3') }}" required>
                            @error('sim_num_3')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num_3" class="form-label"><span class="text-danger">*</span> Gsm
                                nr</label>
                            <input type="gsm_num_3" class="form-control @error('gsm_num_3') is-invalid @enderror"
                                id="gsm_num_3" autocomplete="off" placeholder="Gsm nr" name="gsm_num_3"
                                value="{{ old('gsm_num_3') }}" required>
                            @error('gsm_num_3')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_r_3" value="0" required>
                            <label for="proximus_subs_r_3" class="form-label">Proximus-abonnement in Pack</label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Mobilus</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_3" value="0" required>
                            <label for="mobilus_r_3" class="form-label">S </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_3" value="1" required>
                            <label for="mobilus_r_3" class="form-label">M </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_3" value="2" required>
                            <label for="mobilus_r_3" class="form-label">L</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_3" value="3" required>
                            <label for="mobilus_r_3" class="form-label"> Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_3" value="4" required>
                            <label for="mobilus_r_3" class="form-label"> Unlimited Premium</label>
                        </div>

                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Mobilus FullControl</b>
                            </p>



                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r_3" value="0" required>
                            <label for="mobilus_full_r_3" class="form-label"> S</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r_3" value="1" required>
                            <label for="mobilus_full_r_3" class="form-label"> M</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r_3" value="2" required>
                            <label for="mobilus_full_r_3" class="form-label"> L</label>
                        </div>




                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>App (1 au choix)</b>
                            </p>

                        </div>




                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="0" required>
                            <label for="app_social_3" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/facebook.png') }}" height="25px"
                                    width="25px" alt="">



                            </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="1" required>
                            <label for="app_social_3" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/twitter.png') }}" height="25px"
                                    width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="2" required>
                            <label for="app_social_3" class="form-label">




                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/instagram.png') }}"
                                    height="25px" width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="3" required>
                            <label for="app_social_3" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/snapchat.png') }}" height="25px"
                                    width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="4" required>
                            <label for="app_social_3" class="form-label">



                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/whatsapp.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="5" required>
                            <label for="app_social_3" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/pinterest.png') }}"
                                    height="25px" width="25px" alt="">



                            </label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mob_epic_flex_3" value="0" required>
                            <label for="mob_epic_flex_3" class="form-label"> Mobile Flex </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_3" value="1" required>
                            <label for="mob_epic_flex_3" class="form-label">Mobile Flex +</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_3" value="2" required>
                            <label for="mob_epic_flex_3" class="form-label">Unlimited Light </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_3" value="3" required>
                            <label for="mob_epic_flex_3" class="form-label">Unlimited </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_3" value="4" required>
                            <label for="mob_epic_flex_3" class="form-label">Unlimited Premium </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_3" value="5" required>
                            <label for="mob_epic_flex_3" class="form-label">Mobile Flex Full Control </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_3" value="6" required>
                            <label for="mob_epic_flex_3" class="form-label">Mobile Flex + Full Control </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_3" value="7" required>
                            <label for="mob_epic_flex_3" class="form-label">Epic stories </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_3" value="8" required>
                            <label for="mob_epic_flex_3" class="form-label">Epic beats </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_3" value="9" required>
                            <label for="mob_epic_flex_3" class="form-label"> Epic videos </label>
                        </div>
                        {{-- <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Offre conjointe: DataPhone Option</b>
                            </p>

                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package_3" value="0" required>
                            <label for="gb_package_3" class="form-label"> (500 MB): €5/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package_3" value="1" required>
                            <label for="gb_package_3" class="form-label"> (1 GB): €10/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package_3" value="2" required>
                            <label for="gb_package_3" class="form-label"> (1,5 GB): €15/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="gb_package_3" value="3" required>
                            <label for="gb_package_3" class="form-label"> (2 GB): €20/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="gb_package_3" value="4" required>
                            <label for="gb_package_3" class="form-label"> (2,5 GB): €25/mois </label>
                        </div> --}}



                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="0" required>
                            <label for="package_type_r_3" class="form-label"> Mobile 10 </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="1" required>
                            <label for="package_type_r_3" class="form-label"> Travel Passport Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="2" required>
                            <label for="package_type_r_3" class="form-label"> Daily Travel Surf </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="" required>
                            <label for="package_type_r_3" class="form-label"> Travel Surf World Intense </label>
                        </div>



                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="4" required>
                            <label for="package_type_r_3" class="form-label"> Pay&Go </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="5" required>
                            <label for="package_type_r_3" class="form-label"> Travel Passport Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="6" required>
                            <label for="package_type_r_3" class="form-label"> Travel Surf Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="7" required>
                            <label for="package_type_r_3" class="form-label"> Smartphone Omnium </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="8" required>
                            <label for="package_type_r_3" class="form-label"> Daily Travel Passport </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="9" required>
                            <label for="package_type_r_3" class="form-label"> Travel Passport Outside EU&Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="10" required>
                            <label for="package_type_r_3" class="form-label"> Travel Surf Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="11" required>
                            <label for="package_type_r_3" class="form-label"> 1-Month Travel Passport Top 3 </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="12" required>
                            <label for="package_type_r_3" class="form-label"> SMS 100 </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="13" required>
                            <label for="package_type_r_3" class="form-label"> Travel Passport World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="14" required>
                            <label for="package_type_r_3" class="form-label"> Travel Surf World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_3" value="15" required>
                            <label for="package_type_r_3" class="form-label"> 1-Month Travel Passport Top</label>
                        </div>



                        {{-- END THIRD PHASE --}}






                        {{-- FOURTH PHASE --}}


                        <div class="mb-3 col-md-12">
                            <p class="lead mt-5" style="text-align: center;">Bijkomende simkaart – 4
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_4" value="0" required>
                            <label for="sim_phase_r_4" class="form-label">Nieuw</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_4" value="1" required>
                            <label for="sim_phase_r_4" class="form-label">Conversie</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_4" value="2" required>
                            <label for="sim_phase_r_4" class="form-label"> PORT IN (LOA) </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;">Simkaarttype:
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_4" value="0" required>
                            <label for="sim_type_r_4" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_4" value="1" required>
                            <label for="sim_type_r_4" class="form-label">Normal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num_4" class="form-label"><span class="text-danger">*</span>Sim
                                nr</label>
                            <input type="sim_num_4" class="form-control @error('sim_num_4') is-invalid @enderror"
                                id="sim_num_4" autocomplete="off" placeholder="Sim nr" name="sim_num_4"
                                value="{{ old('sim_num_4') }}" required>
                            @error('sim_num_4')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num_4" class="form-label"><span class="text-danger">*</span> Gsm
                                nr</label>
                            <input type="gsm_num_4" class="form-control @error('gsm_num_4') is-invalid @enderror"
                                id="gsm_num_4" autocomplete="off" placeholder="Gsm nr" name="gsm_num_4"
                                value="{{ old('gsm_num_4') }}" required>
                            @error('gsm_num_4')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_r_4" value="0" required>
                            <label for="proximus_subs_r_4" class="form-label"> Proximus-abonnement in Pack </label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Mobilus</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_4" value="0" required>
                            <label for="mobilus_r_4" class="form-label">S </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_4" value="1" required>
                            <label for="mobilus_r_4" class="form-label">M </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_4" value="2" required>
                            <label for="mobilus_r_4" class="form-label">L</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_4" value="3" required>
                            <label for="mobilus_r_4" class="form-label"> Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_4" value="4" required>
                            <label for="mobilus_r_4" class="form-label"> Unlimited Premium</label>
                        </div>

                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Mobilus FullControl</b>
                            </p>



                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r_4" value="0" required>
                            <label for="mobilus_full_r_4" class="form-label"> S</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r_4" value="1" required>
                            <label for="mobilus_full_r_4" class="form-label"> M</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r_4" value="2" required>
                            <label for="mobilus_full_r_4" class="form-label"> L</label>
                        </div>




                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>App (1 naar keuze)</b>
                            </p>

                        </div>




                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_4" value="0" required>
                            <label for="app_social_4" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/facebook.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_4" value="1" required>
                            <label for="app_social_4" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/twitter.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_4" value="2" required>
                            <label for="app_social_4" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/instagram.png') }}"
                                    height="25px" width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_4" value="3" required>
                            <label for="app_social_4" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/snapchat.png') }}" height="25px"
                                    width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_4" value="4" required>
                            <label for="app_social_4" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/whatsapp.png') }}" height="25px"
                                    width="25px" alt="">






                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_4" value="5" required>
                            <label for="app_social_4" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/pinterest.png') }}"
                                    height="25px" width="25px" alt="">


                            </label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mob_epic_flex_4" value="0" required>
                            <label for="mob_epic_flex_4" class="form-label"> Mobile Flex </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_4" value="1" required>
                            <label for="mob_epic_flex_4" class="form-label">Mobile Flex +</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_4" value="2" required>
                            <label for="mob_epic_flex_4" class="form-label">Unlimited Light </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_4" value="3" required>
                            <label for="mob_epic_flex_4" class="form-label">Unlimited </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_4" value="4" required>
                            <label for="mob_epic_flex_4" class="form-label">Unlimited Premium </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_4" value="5" required>
                            <label for="mob_epic_flex_4" class="form-label">Mobile Flex Full Control </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_4" value="6" required>
                            <label for="mob_epic_flex_4" class="form-label">Mobile Flex + Full Control </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_4" value="7" required>
                            <label for="mob_epic_flex_4" class="form-label">Epic stories </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_4" value="8" required>
                            <label for="mob_epic_flex_4" class="form-label">Epic beats </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_4" value="9" required>
                            <label for="mob_epic_flex_4" class="form-label"> Epic videos </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="0" required>
                            <label for="package_type_r_4" class="form-label"> Mobile 10 </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="1" required>
                            <label for="package_type_r_4" class="form-label"> Travel Passport Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="2" required>
                            <label for="package_type_r_4" class="form-label"> Daily Travel Surf </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="" required>
                            <label for="package_type_r_4" class="form-label"> Travel Surf World Intense </label>
                        </div>



                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="4" required>
                            <label for="package_type_r_4" class="form-label"> Pay&Go </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="5" required>
                            <label for="package_type_r_4" class="form-label"> Travel Passport Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="6" required>
                            <label for="package_type_r_4" class="form-label"> Travel Surf Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="7" required>
                            <label for="package_type_r_4" class="form-label"> Smartphone Omnium </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="8" required>
                            <label for="package_type_r_4" class="form-label"> Daily Travel Passport </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="9" required>
                            <label for="package_type_r_4" class="form-label"> Travel Passport Outside EU&Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="10" required>
                            <label for="package_type_r_4" class="form-label"> Travel Surf Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="11" required>
                            <label for="package_type_r_4" class="form-label"> 1-Month Travel Passport Top 3 </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="12" required>
                            <label for="package_type_r_4" class="form-label"> SMS 100 </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="13" required>
                            <label for="package_type_r_4" class="form-label"> Travel Passport World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="14" required>
                            <label for="package_type_r_4" class="form-label"> Travel Surf World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_4" value="15" required>
                            <label for="package_type_r_4" class="form-label"> 1-Month Travel Passport Top</label>
                        </div>



                        {{-- END FOURTH PHASE --}}






                        {{-- FIFTH PHASE --}}


                        <div class="mb-3 col-md-12">
                            <p class="lead mt-5" style="text-align: center;">Bijkomende simkaart – 5
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_5" value="0" required>
                            <label for="sim_phase_r_5" class="form-label">Nieuw</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_5" value="1" required>
                            <label for="sim_phase_r_5" class="form-label">Conversie</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_5" value="2" required>
                            <label for="sim_phase_r_5" class="form-label">PORT IN (LOA) </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;">Simkaarttype:
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_5" value="0" required>
                            <label for="sim_type_r_5" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_5" value="1" required>
                            <label for="sim_type_r_5" class="form-label">Normal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num_5" class="form-label"><span class="text-danger">*</span>Sim
                                nr</label>
                            <input type="sim_num_5" class="form-control @error('sim_num_5') is-invalid @enderror"
                                id="sim_num_5" autocomplete="off" placeholder="Sim nr" name="sim_num_5"
                                value="{{ old('sim_num_5') }}" required>
                            @error('sim_num_5')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num_5" class="form-label"><span class="text-danger">*</span>Gsm
                                nr</label>
                            <input type="gsm_num_5" class="form-control @error('gsm_num_5') is-invalid @enderror"
                                id="gsm_num_5" autocomplete="off" placeholder="Gsm nr" name="gsm_num_5"
                                value="{{ old('gsm_num_5') }}" required>
                            @error('gsm_num_5')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_r_5" value="0" required>
                            <label for="proximus_subs_r_4" class="form-label">Proximus-abonnement in Pack </label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Mobilus</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_5" value="0" required>
                            <label for="mobilus_r_5" class="form-label">S </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_5" value="1" required>
                            <label for="mobilus_r_5" class="form-label">M </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_5" value="2" required>
                            <label for="mobilus_r_5" class="form-label">L</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_5" value="3" required>
                            <label for="mobilus_r_5" class="form-label">Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_5" value="4" required>
                            <label for="mobilus_r_5" class="form-label"> Unlimited Premium</label>
                        </div>

                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Mobilus FullControl</b>
                            </p>



                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r_5" value="0" required>
                            <label for="mobilus_full_r_5" class="form-label"> S</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r_5" value="1" required>
                            <label for="mobilus_full_r_5" class="form-label"> M</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_full_r_5" value="2" required>
                            <label for="mobilus_full_r_5" class="form-label"> L</label>
                        </div>




                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>App (1 naar keuze)</b>
                            </p>

                        </div>




                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_5" value="0" required>
                            <label for="app_social_5" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/facebook.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_5" value="1" required>
                            <label for="app_social_5" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/twitter.png') }}" height="25px"
                                    width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_5" value="2" required>
                            <label for="app_social_5" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/instagram.png') }}"
                                    height="25px" width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_5" value="3" required>
                            <label for="app_social_5" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/snapchat.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_5" value="4" required>
                            <label for="app_social_5" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/whatsapp.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_5" value="5" required>
                            <label for="app_social_5" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/pinterest.png') }}"
                                    height="25px" width="25px" alt="">

                            </label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mob_epic_flex_5" value="0" required>
                            <label for="mob_epic_flex_5" class="form-label"> Mobile Flex </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_5" value="1" required>
                            <label for="mob_epic_flex_5" class="form-label">Mobile Flex +</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_5" value="2" required>
                            <label for="mob_epic_flex_5" class="form-label">Unlimited Light </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_5" value="3" required>
                            <label for="mob_epic_flex_5" class="form-label">Unlimited </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_5" value="4" required>
                            <label for="mob_epic_flex_5" class="form-label">Unlimited Premium </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_5" value="5" required>
                            <label for="mob_epic_flex_5" class="form-label">Mobile Flex Full Control </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_5" value="6" required>
                            <label for="mob_epic_flex_5" class="form-label">Mobile Flex + Full Control </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_5" value="7" required>
                            <label for="mob_epic_flex_5" class="form-label">Epic stories </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_5" value="8" required>
                            <label for="mob_epic_flex_5" class="form-label">Epic beats </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_5" value="9" required>
                            <label for="mob_epic_flex_5" class="form-label"> Epic videos </label>
                        </div>
                        {{-- <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Offre conjointe: DataPhone Option</b>
                            </p>

                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package_5" value="0" required>
                            <label for="gb_package_5" class="form-label"> (500 MB): €5/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package_5" value="1" required>
                            <label for="gb_package_5" class="form-label"> (1 GB): €10/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package_5" value="2" required>
                            <label for="gb_package_5" class="form-label"> (1,5 GB): €15/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="gb_package_5" value="3" required>
                            <label for="gb_package_5" class="form-label"> (2 GB): €20/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="gb_package_5" value="4" required>
                            <label for="gb_package_5" class="form-label"> (2,5 GB): €25/mois </label>
                        </div> --}}



                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="0" required>
                            <label for="package_type_r_5" class="form-label"> Mobile 10 </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="1" required>
                            <label for="package_type_r_5" class="form-label"> Travel Passport Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="2" required>
                            <label for="package_type_r_5" class="form-label"> Daily Travel Surf </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="" required>
                            <label for="package_type_r_5" class="form-label"> Travel Surf World Intense </label>
                        </div>



                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="4" required>
                            <label for="package_type_r_5" class="form-label"> Pay&Go </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="5" required>
                            <label for="package_type_r_5" class="form-label"> Travel Passport Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="6" required>
                            <label for="package_type_r_5" class="form-label"> Travel Surf Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="7" required>
                            <label for="package_type_r_5" class="form-label"> Smartphone Omnium </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="8" required>
                            <label for="package_type_r_5" class="form-label"> Daily Travel Passport </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="9" required>
                            <label for="package_type_r_5" class="form-label"> Travel Passport Outside EU&Top
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="10" required>
                            <label for="package_type_r_5" class="form-label"> Travel Surf Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="11" required>
                            <label for="package_type_r_5" class="form-label"> 1-Month Travel Passport Top 3
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="12" required>
                            <label for="package_type_r_5" class="form-label"> SMS 100 </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="13" required>
                            <label for="package_type_r_5" class="form-label"> Travel Passport World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="14" required>
                            <label for="package_type_r_5" class="form-label"> Travel Surf World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="package_type_r_5" value="15" required>
                            <label for="package_type_r_5" class="form-label"> 1-Month Travel Passport Top</label>
                        </div>



                        {{-- END FIFTH PHASE --}}


                        {{-- Pour clients professionnels --}}

                        {{-- PHASE ONE PRO --}}

                        <div class="mb-3 col-md-12">
                            <h4 class="mt-5" style="text-align: center;"> Voor professionele klanten
                            </h4>

                        </div>





                        <div class="mb-3 col-md-12">
                            <p class="lead mt-5" style="text-align: center;">Bijkomende simkaart – 1
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_1" value="0" required>
                            <label for="sim_phase_r_pro_1" class="form-label">Nieuw</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_1" value="1" required>
                            <label for="sim_phase_r_pro_1" class="form-label">Conversie</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_1" value="2" required>
                            <label for="sim_phase_r_pro_1" class="form-label">PORT IN (LOA) </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;">Simkaarttype
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_pro_1" value="0" required>
                            <label for="sim_type_r_pro_1" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_pro_1" value="1" required>
                            <label for="sim_type_r_pro_1" class="form-label">Normal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num_pro_1" class="form-label"><span class="text-danger">*</span>Sim
                                nr</label>
                            <input type="sim_num_pro_1" class="form-control @error('sim_num_pro_1') is-invalid @enderror"
                                id="sim_num_pro_1" autocomplete="off" placeholder="Sim nr" name="sim_num_pro_1"
                                value="{{ old('sim_num_pro_1') }}" required>
                            @error('sim_num_pro_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num_pro_1" class="form-label"><span class="text-danger">*</span> Gsm
                                nr</label>
                            <input type="gsm_num_pro_1" class="form-control @error('gsm_num_pro_1') is-invalid @enderror"
                                id="gsm_num_pro_1" autocomplete="off" placeholder="Gsm nr" name="gsm_num_pro_1"
                                value="{{ old('gsm_num_pro_1') }}" required>
                            @error('gsm_num_pro_1')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_pro_1" value="0" required>
                            <label for="proximus_subs_pro_1" class="form-label"> Proximus-abonnement in Pack </label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Bizz Mobile</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_1" value="0" required>
                            <label for="mobilus_r_pro_1" class="form-label">S </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_1" value="1" required>
                            <label for="mobilus_r_pro_1" class="form-label">M </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_1" value="2" required>
                            <label for="mobilus_r_pro_1" class="form-label">L</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_pro_1" value="3" required>
                            <label for="mobilus_r_pro_1" class="form-label"> Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_pro_1" value="4" required>
                            <label for="mobilus_r_pro_1" class="form-label">5G International</label>
                        </div>

                        {{-- Business Mobile Flex Start --}}


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Business Mobile</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mob_epic_flex_pro_1" value="0" required>
                            <label for="mob_epic_flex_pro_1" class="form-label"> Business Mobile Flex </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_pro_1" value="1" required>
                            <label for="mob_epic_flex_pro_1" class="form-label">Business Mobile Flex +</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_pro_1" value="2" required>
                            <label for="mob_epic_flex_5" class="form-label">Business Mobile Unlimited Light
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_pro_1" value="3" required>
                            <label for="mob_epic_flex_pro_1" class="form-label">Business Mobile Unlimited </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_pro_1" value="4" required>
                            <label for="mob_epic_flex_pro_1" class="form-label">Business Mobile Unlimited Premium
                            </label>
                        </div>




                        {{-- Business Mobile Flex End --}}




                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>App (1 au choix)</b>
                            </p>

                        </div>




                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_1" value="0" required>
                            <label for="app_social_r_pro_1" class="form-label">



                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/facebook.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_1" value="1" required>
                            <label for="app_social_r_pro_1" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/twitter.png') }}" height="25px"
                                    width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_1" value="2" required>
                            <label for="app_social_5" class="form-label">



                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/instagram.png') }}"
                                    height="25px" width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_1" value="3" required>
                            <label for="app_social_r_pro_1" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/snapchat.png') }}" height="25px"
                                    width="25px" alt="">




                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_1" value="4" required>
                            <label for="app_social_r_pro_1" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/whatsapp.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_1" value="5" required>
                            <label for="app_social_r_pro_1" class="form-label">




                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/pinterest.png') }}"
                                    height="25px" width="25px" alt="">



                            </label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Joint offer: DataPhone Option</b>
                            </p>

                        </div>


                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_1" value="0" required>
                            <label for="gb_package_pro_1" class="form-label"> (500 MB): €4,13/maand excl. btw </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_1" value="1" required>
                            <label for="gb_package_pro_1" class="form-label"> (1 GB): €8,26/maand excl. btw </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_1" value="2" required>
                            <label for="gb_package_pro_1" class="form-label"> (1,5 GB): €12,40/maand excl. btw </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_1" value="3" required>
                            <label for="gb_package_pro_1" class="form-label"> (2 GB): €16,53/maand excl. btw </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_1" value="4" required>
                            <label for="gb_package_pro_1" class="form-label"> (2,5 GB): €20,66/maand excl. btw </label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Opties</b>
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="0" required>
                            <label for="package_type_r_pro_1" class="form-label"> Daily TravelPassport </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="1" required>
                            <label for="package_type_r_pro_1" class="form-label"> Travel Passport Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="2" required>
                            <label for="package_type_r_pro_1" class="form-label"> Travel Surf Top </label>
                        </div>



                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="3" required>
                            <label for="package_type_r_pro_1" class="form-label"> Bizz International </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="4" required>
                            <label for="package_type_r_pro_1" class="form-label"> TravelPassport Outside EU&Top
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="5" required>
                            <label for="package_type_r_pro_1" class="form-label"> Travel Surf Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="6" required>
                            <label for="package_type_r_pro_1" class="form-label"> 1-Month Travel Passport Top 3
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="7" required>
                            <label for="package_type_r_pro_1" class="form-label"> Travel Passport World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="8" required>
                            <label for="package_type_r_pro_1" class="form-label"> Travel Surf World
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="9" required>
                            <label for="package_type_r_pro_1" class="form-label"> 1-Month Travel Passport Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="10" required>
                            <label for="package_type_r_pro_1" class="form-label"> Bizz No Limit International
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="11" required>
                            <label for="package_type_r_pro_1" class="form-label"> Travel SurfWorld Intense</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="12" required>
                            <label for="package_type_r_pro_1" class="form-label"> Travel Passport Top</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="13" required>
                            <label for="package_type_r_pro_1" class="form-label"> Daily Travel Surf </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_1" value="14" required>
                            <label for="package_type_r_pro_1" class="form-label"> Smartphone Omnium</label>
                        </div>






                        {{-- SECOND PRO START --}}

                        <div class="mb-3 col-md-12">
                            <h4 class="mt-5" style="text-align: center;"> Voor professionele klanten
                            </h4>

                        </div>





                        <div class="mb-3 col-md-12">
                            <p class="lead mt-5" style="text-align: center;">Bijkomende simkaart – 2
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_2" value="0" required>
                            <label for="sim_phase_r_pro_2" class="form-label">Nieuw</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_2" value="1" required>
                            <label for="sim_phase_r_pro_2" class="form-label">Conversie</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_2" value="2" required>
                            <label for="sim_phase_r_pro_2" class="form-label">PORT IN (LOA) </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;">Simkaarttype
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_pro_2" value="0" required>
                            <label for="sim_type_r_pro_2" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_pro_2" value="1" required>
                            <label for="sim_type_r_pro_2" class="form-label">Normal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num_pro_2" class="form-label"><span class="text-danger">*</span>Sim
                                nr</label>
                            <input type="sim_num_pro_2" class="form-control @error('sim_num_pro_2') is-invalid @enderror"
                                id="sim_num_pro_2" autocomplete="off" placeholder="Sim nr" name="sim_num_pro_2"
                                value="{{ old('sim_num_pro_2') }}" required>
                            @error('sim_num_pro_2')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num_pro_2" class="form-label"><span class="text-danger">*</span> .Gm
                                nr</label>
                            <input type="gsm_num_pro_2" class="form-control @error('gsm_num_pro_2') is-invalid @enderror"
                                id="gsm_num_pro_2" autocomplete="off" placeholder=".Gm nr" name="gsm_num_pro_2"
                                value="{{ old('gsm_num_pro_2') }}" required>
                            @error('gsm_num_pro_2')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_pro_2" value="0" required>
                            <label for="proximus_subs_pro_2" class="form-label"> Proximus-abonnement in Pack</label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Bizz Mobile</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_2" value="0" required>
                            <label for="mobilus_r_pro_2" class="form-label">S </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_2" value="1" required>
                            <label for="mobilus_r_pro_2" class="form-label">M </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_2" value="2" required>
                            <label for="mobilus_r_pro_2" class="form-label">L</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_pro_2" value="3" required>
                            <label for="mobilus_r_pro_2" class="form-label"> Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_pro_2" value="4" required>
                            <label for="mobilus_r_pro_2" class="form-label">5G International</label>
                        </div>

                        {{-- Business Mobile Flex Start --}}


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Business Mobile</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mob_epic_flex_pro_2" value="0" required>
                            <label for="mob_epic_flex_pro_2" class="form-label"> Business Mobile Flex </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_pro_2" value="1" required>
                            <label for="mob_epic_flex_pro_2" class="form-label">Business Mobile Flex +</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_pro_2" value="2" required>
                            <label for="mob_epic_flex_pro_2" class="form-label">Business Mobile Unlimited Light
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_pro_2" value="3" required>
                            <label for="mob_epic_flex_pro_2" class="form-label">Business Mobile Unlimited </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_pro_2" value="4" required>
                            <label for="mob_epic_flex_pro_2" class="form-label">Business Mobile Unlimited Premium
                            </label>
                        </div>




                        {{-- Business Mobile Flex End --}}




                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>App (1 au choix)</b>
                            </p>

                        </div>




                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_2" value="0" required>
                            <label for="app_social_r_pro_2" class="form-label">



                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/facebook.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_2" value="1" required>
                            <label for="app_social_r_pro_2" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/twitter.png') }}" height="25px"
                                    width="25px" alt="">




                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_2" value="2" required>
                            <label for="app_social_r_pro_2" class="form-label">



                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/snapchat.png') }}" height="25px"
                                    width="25px" alt="">

                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_2" value="3" required>
                            <label for="app_social_r_pro_2" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/instagram.png') }}"
                                    height="25px" width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_2" value="4" required>
                            <label for="app_social_r_pro_2" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/whatsapp.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_2" value="5" required>
                            <label for="app_social_r_pro_2" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/pinterest.png') }}"
                                    height="25px" width="25px" alt="">




                            </label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Joint offer: DataPhone Option</b>
                            </p>

                        </div>


                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_2" value="0" required>
                            <label for="gb_package_pro_2" class="form-label"> (500 MB): €4,13/maand excl. btw </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_2" value="1" required>
                            <label for="gb_package_pro_2" class="form-label"> (1 GB): €8,26/maand excl. btw
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_2" value="2" required>
                            <label for="gb_package_pro_2" class="form-label"> (1,5 GB): €12,40/maand excl. btw
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_2" value="3" required>
                            <label for="gb_package_pro_2" class="form-label"> (2 GB): €16,53/maand excl. btw </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_2" value="3" required>
                            <label for="gb_package_pro_2" class="form-label"> (2,5 GB): €20,66/maand excl. btw </label>
                        </div>



                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Opties:</b>
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="0" required>
                            <label for="package_type_r_pro_2" class="form-label"> Daily TravelPassport </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="1" required>
                            <label for="package_type_r_pro_2" class="form-label"> Travel Passport Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="2" required>
                            <label for="package_type_r_pro_2" class="form-label"> Travel Surf Top </label>
                        </div>



                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="3" required>
                            <label for="package_type_r_pro_2" class="form-label"> Bizz International </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="4" required>
                            <label for="package_type_r_pro_2" class="form-label"> Travel Passport Outside EU&Top
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="5" required>
                            <label for="package_type_r_pro_2" class="form-label"> Travel Surf Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="6" required>
                            <label for="package_type_r_pro_2" class="form-label"> 1-Month Travel Passport Top 3
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="7" required>
                            <label for="package_type_r_pro_2" class="form-label"> Travel Passport World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="8" required>
                            <label for="package_type_r_pro_2" class="form-label"> Travel Surf World
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="9" required>
                            <label for="package_type_r_pro_2" class="form-label"> 1-Month Travel Passport Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="10" required>
                            <label for="package_type_r_pro_2" class="form-label"> Bizz No LimitInternational
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="11" required>
                            <label for="package_type_r_pro_2" class="form-label"> Travel SurfWorld Intense</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="12" required>
                            <label for="package_type_r_pro_2" class="form-label"> TravelPassport Top</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="13" required>
                            <label for="package_type_r_pro_2" class="form-label"> Daily Travel Surf </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_2" value="14" required>
                            <label for="package_type_r_pro_2" class="form-label"> Smartphone Omnium</label>
                        </div>



                        {{-- SECOND PRO END --}}








                        {{-- THIRD PRO START --}}

                        <div class="mb-3 col-md-12">
                            <h4 class="mt-5" style="text-align: center;"> Voor professionele klanten
                            </h4>

                        </div>





                        <div class="mb-3 col-md-12">
                            <p class="lead mt-5" style="text-align: center;">Bijkomende simkaart – 3
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_3" value="0" required>
                            <label for="sim_phase_r_pro_3" class="form-label">Nieuw</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_3" value="1" required>
                            <label for="sim_phase_r_pro_3" class="form-label">Conversie</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_3" value="2" required>
                            <label for="sim_phase_r_pro_3" class="form-label">PORT IN (LOA </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;"> Simkaarttype
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_pro_3" value="0" required>
                            <label for="sim_type_r_pro_3" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_pro_3" value="1" required>
                            <label for="sim_type_r_pro_3" class="form-label">Normal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num_pro_3" class="form-label"><span class="text-danger">*</span>Sim
                                nr</label>
                            <input type="sim_num_pro_3" class="form-control @error('sim_num_pro_3') is-invalid @enderror"
                                id="sim_num_pro_3" autocomplete="off" placeholder="Sim nr" name="sim_num_pro_3"
                                value="{{ old('sim_num_pro_3') }}" required>
                            @error('sim_num_pro_3')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num_pro_3" class="form-label"><span class="text-danger">*</span> .N°
                                GSM</label>
                            <input type="gsm_num_pro_3" class="form-control @error('gsm_num_pro_3') is-invalid @enderror"
                                id="gsm_num_pro_3" autocomplete="off" placeholder=".N° GSM" name="gsm_num_pro_3"
                                value="{{ old('gsm_num_pro_3') }}" required>
                            @error('gsm_num_pro_3')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_pro_3" value="0" required>
                            <label for="proximus_subs_pro_3" class="form-label"> Proximus-abonnement in Pack </label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Bizz Mobile</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_3" value="0" required>
                            <label for="mobilus_r_pro_3" class="form-label">S </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_3" value="1" required>
                            <label for="mobilus_r_pro_3" class="form-label">M </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_3" value="2" required>
                            <label for="mobilus_r_pro_3" class="form-label">L</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_pro_3" value="3" required>
                            <label for="mobilus_r_pro_3" class="form-label"> Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_pro_3" value="4" required>
                            <label for="mobilus_r_pro_3" class="form-label">5G International</label>
                        </div>

                        {{-- Business Mobile Flex Start --}}


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Business Mobile</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mob_epic_flex_pro_3" value="0" required>
                            <label for="mob_epic_flex_pro_2" class="form-label"> Business Mobile Flex </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_pro_3" value="1" required>
                            <label for="mob_epic_flex_pro_3" class="form-label">Business Mobile Flex +</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_pro_3" value="2" required>
                            <label for="mob_epic_flex_pro_3" class="form-label">Business Mobile Unlimited Light
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_pro_3" value="3" required>
                            <label for="mob_epic_flex_pro_3" class="form-label">Business Mobile Unlimited </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_pro_3" value="4" required>
                            <label for="mob_epic_flex_pro_3" class="form-label">Business Mobile Unlimited Premium
                            </label>
                        </div>




                        {{-- Business Mobile Flex End --}}




                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>App (1 naar keuze)</b>
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_3" value="0" required>
                            <label for="app_social_r_pro_3" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/facebook.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_3" value="1" required>
                            <label for="app_social_r_pro_3" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/twitter.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_3" value="2" required>
                            <label for="app_social_r_pro_3" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/instagram.png') }}"
                                    height="25px" width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_3" value="3" required>
                            <label for="app_social_r_pro_3" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/snapchat.png') }}" height="25px"
                                    width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_3" value="4" required>
                            <label for="app_social_r_pro_3" class="form-label">



                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/whatsapp.png') }}" height="25px"
                                    width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_3" value="5" required>
                            <label for="app_social_r_pro_3" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/pinterest.png') }}"
                                    height="25px" width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Opties</b>
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="0" required>
                            <label for="package_type_r_pro_3" class="form-label"> Daily TravelPassport </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="1" required>
                            <label for="package_type_r_pro_3" class="form-label"> TravelPassportTopIntense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="2" required>
                            <label for="package_type_r_pro_3" class="form-label"> Travel Surf Top </label>
                        </div>



                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="3" required>
                            <label for="package_type_r_pro_3" class="form-label"> Bizz International </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="4" required>
                            <label for="package_type_r_pro_3" class="form-label"> TravelPassport Outside EU&Top
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="5" required>
                            <label for="package_type_r_pro_3" class="form-label"> Travel Surf Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="6" required>
                            <label for="package_type_r_pro_3" class="form-label"> 1-Month Travel Passport Top 3
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="7" required>
                            <label for="package_type_r_pro_3" class="form-label"> Travel Passport World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="8" required>
                            <label for="package_type_r_pro_3" class="form-label"> Travel Surf World
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="9" required>
                            <label for="package_type_r_pro_3" class="form-label"> 1-Month Travel Passport Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="10" required>
                            <label for="package_type_r_pro_3" class="form-label"> Bizz No LimitInternational
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="11" required>
                            <label for="package_type_r_pro_3" class="form-label"> Travel SurfWorld Intense</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="12" required>
                            <label for="package_type_r_pro_3" class="form-label"> TravelPassport Top</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="13" required>
                            <label for="package_type_r_pro_3" class="form-label"> Daily Travel Surf </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_3" value="14" required>
                            <label for="package_type_r_pro_3" class="form-label"> Smartphone Omnium</label>
                        </div>



                        {{-- THIRD PRO END --}}






                        {{-- FOURTH PRO START --}}

                        <div class="mb-3 col-md-12">
                            <h4 class="mt-5" style="text-align: center;"> Voor professionele klanten
                            </h4>

                        </div>





                        <div class="mb-3 col-md-12">
                            <p class="lead mt-5" style="text-align: center;">Bijkomende simkaart – 4
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_4" value="0" required>
                            <label for="sim_phase_r_pro_4" class="form-label">Nieuw</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_4" value="1" required>
                            <label for="sim_phase_r_pro_4" class="form-label">Conversie</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_4" value="2" required>
                            <label for="sim_phase_r_pro_4" class="form-label">PORT IN (LOA) </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;">Simkaarttype
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_pro_4" value="0" required>
                            <label for="sim_type_r_pro_4" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_pro_4" value="1" required>
                            <label for="sim_type_r_pro_4" class="form-label">Normal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num_pro_4" class="form-label"><span class="text-danger">*</span>Sim
                                nr</label>
                            <input type="sim_num_pro_4" class="form-control @error('sim_num_pro_4') is-invalid @enderror"
                                id="sim_num_pro_4" autocomplete="off" placeholder="Sim nr" name="sim_num_pro_4"
                                value="{{ old('sim_num_pro_4') }}" required>
                            @error('sim_num_pro_4')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num_pro_4" class="form-label"><span class="text-danger">*</span> Gsm
                                nr</label>
                            <input type="gsm_num_pro_4" class="form-control @error('gsm_num_pro_4') is-invalid @enderror"
                                id="gsm_num_pro_4" autocomplete="off" placeholder="Gsm nr" name="gsm_num_pro_4"
                                value="{{ old('gsm_num_pro_4') }}" required>
                            @error('gsm_num_pro_4')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_pro_4" value="0" required>
                            <label for="proximus_subs_pro_4" class="form-label">Proximus-abonnement in Pack</label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Bizz Mobile</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_4" value="0" required>
                            <label for="mobilus_r_pro_4" class="form-label">S </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_4" value="1" required>
                            <label for="mobilus_r_pro_4" class="form-label">M </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_4" value="2" required>
                            <label for="mobilus_r_pro_4" class="form-label">L</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_pro_4" value="3" required>
                            <label for="mobilus_r_pro_4" class="form-label"> Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_pro_4" value="4" required>
                            <label for="mobilus_r_pro_4" class="form-label">5G International</label>
                        </div>

                        {{-- Business Mobile Flex Start --}}


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Business Mobile</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mob_epic_flex_pro_4" value="0" required>
                            <label for="mob_epic_flex_pro_4" class="form-label"> Business Mobile Flex </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_pro_4" value="1" required>
                            <label for="mob_epic_flex_pro_4" class="form-label">Business Mobile Flex +</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_pro_4" value="2" required>
                            <label for="mob_epic_flex_pro_4" class="form-label">Business Mobile Unlimited Light
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_pro_4" value="3" required>
                            <label for="mob_epic_flex_pro_4" class="form-label">Business Mobile Unlimited </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_pro_4" value="4" required>
                            <label for="mob_epic_flex_pro_4" class="form-label">Business Mobile Unlimited Premium
                            </label>
                        </div>




                        {{-- Business Mobile Flex End --}}




                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>App (1 naar keuze)</b>
                            </p>

                        </div>




                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_4" value="0" required>
                            <label for="app_social_r_pro_4" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/facebook.png') }}"
                                    height="25px" width="25px" alt="">



                            </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_4" value="1" required>
                            <label for="app_social_r_pro_4" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/twitter.png') }}" height="25px"
                                    width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_4" value="2" required>
                            <label for="app_social_r_pro_4" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/instagram.png') }}"
                                    height="25px" width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_4" value="3" required>
                            <label for="app_social_r_pro_4" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/snapchat.png') }}"
                                    height="25px" width="25px" alt="">


                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_4" value="4" required>
                            <label for="app_social_r_pro_4" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/whatsapp.png') }}"
                                    height="25px" width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_4" value="5" required>
                            <label for="app_social_r_pro_4" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/pinterest.png') }}"
                                    height="25px" width="25px" alt="">






                            </label>
                        </div>

                        {{-- <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Offre conjointe: DataPhone Option</b>
                            </p>

                        </div>


                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_4" value="0" required>
                            <label for="gb_package_pro_4" class="form-label"> (500 MB): €4,13/mois HTVA </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_4" value="1" required>
                            <label for="gb_package_pro_4" class="form-label"> (1 GB): €8,26/mois HTVA </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_4" value="2" required>
                            <label for="gb_package_pro_4" class="form-label"> (2 GB): €16,53/mois HTVA </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_4" value="3" required>
                            <label for="gb_package_pro_4" class="form-label"> (2,5 GB): €20,66/mois HTVA </label>
                        </div> --}}




                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Opties</b>
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="0" required>
                            <label for="package_type_r_pro_4" class="form-label"> Daily TravelPassport </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="1" required>
                            <label for="package_type_r_pro_4" class="form-label"> TravelPassportTopIntense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="2" required>
                            <label for="package_type_r_pro_4" class="form-label"> Travel Surf Top </label>
                        </div>



                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="3" required>
                            <label for="package_type_r_pro_4" class="form-label"> Bizz International </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="4" required>
                            <label for="package_type_r_pro_4" class="form-label"> TravelPassport Outside EU&Top
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="5" required>
                            <label for="package_type_r_pro_4" class="form-label"> Travel Surf Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="6" required>
                            <label for="package_type_r_pro_4" class="form-label"> 1-Month Travel Passport Top 3
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="7" required>
                            <label for="package_type_r_pro_4" class="form-label"> Travel Passport World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="8" required>
                            <label for="package_type_r_pro_4" class="form-label"> Travel Surf World
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="9" required>
                            <label for="package_type_r_pro_4" class="form-label"> 1-Month Travel Passport Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="10" required>
                            <label for="package_type_r_pro_4" class="form-label"> Bizz No LimitInternational
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="11" required>
                            <label for="package_type_r_pro_4" class="form-label"> Travel SurfWorld Intense</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="12" required>
                            <label for="package_type_r_pro_4" class="form-label"> TravelPassport Top</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="13" required>
                            <label for="package_type_r_pro_4" class="form-label"> Daily Travel Surf </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_4" value="14" required>
                            <label for="package_type_r_pro_4" class="form-label"> Smartphone Omnium</label>
                        </div>



                        {{-- FOURTH PRO END --}}








                        {{-- FIFTH PRO START --}}

                        <div class="mb-3 col-md-12">Voor professionele klanten
                            <h4 class="mt-5" style="text-align: center;">
                            </h4>

                        </div>





                        <div class="mb-3 col-md-12">
                            <p class="lead mt-5" style="text-align: center;">Bijkomende simkaart – 5
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_5" value="0" required>
                            <label for="sim_phase_r_pro_5" class="form-label">Nieuw</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_5" value="1" required>
                            <label for="sim_phase_r_pro_5" class="form-label">Conversie</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_pro_5" value="2" required>
                            <label for="sim_phase_r_pro_5" class="form-label">PORT IN (LOA) </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;">Simkaarttype:
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_pro_5" value="0" required>
                            <label for="sim_type_r_pro_5" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_pro_5" value="1" required>
                            <label for="sim_type_r_pro_5" class="form-label">Normal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num_pro_5" class="form-label"><span class="text-danger">*</span>Sim
                                nr</label>
                            <input type="sim_num_pro_5" class="form-control @error('sim_num_pro_5') is-invalid @enderror"
                                id="sim_num_pro_5" autocomplete="off" placeholder="Sim nr" name="sim_num_pro_5"
                                value="{{ old('sim_num_pro_5') }}" required>
                            @error('sim_num_pro_5')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num_pro_5" class="form-label"><span class="text-danger">*</span> .Gsm
                                nr</label>
                            <input type="gsm_num_pro_5" class="form-control @error('gsm_num_pro_5') is-invalid @enderror"
                                id="gsm_num_pro_5" autocomplete="off" placeholder=".Gsm nr" name="gsm_num_pro_5"
                                value="{{ old('gsm_num_pro_5') }}" required>
                            @error('gsm_num_pro_5')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_pro_5" value="0" required>
                            <label for="proximus_subs_pro_5" class="form-label">Proximus-abonnement in Pack </label>
                        </div>


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Bizz Mobile</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_5" value="0" required>
                            <label for="mobilus_r_pro_5" class="form-label">S </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_5" value="1" required>
                            <label for="mobilus_r_pro_5" class="form-label">M </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mobilus_r_pro_5" value="2" required>
                            <label for="mobilus_r_pro_5" class="form-label">L</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_pro_5" value="3" required>
                            <label for="mobilus_r_pro_5" class="form-label"> Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_pro_5" value="4" required>
                            <label for="mobilus_r_pro_5" class="form-label">5G International</label>
                        </div>

                        {{-- Business Mobile Flex Start --}}


                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Business Mobile</b>
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="mob_epic_flex_pro_5" value="0" required>
                            <label for="mob_epic_flex_pro_5" class="form-label"> Business Mobile Flex </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_pro_5" value="1" required>
                            <label for="mob_epic_flex_pro_5" class="form-label">Business Mobile Flex +</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="mob_epic_flex_pro_5" value="2" required>
                            <label for="mob_epic_flex_pro_5" class="form-label">Business Mobile Unlimited Light
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_pro_5" value="3" required>
                            <label for="mob_epic_flex_pro_5" class="form-label">Business Mobile Unlimited </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mob_epic_flex_pro_5" value="4" required>
                            <label for="mob_epic_flex_pro_5" class="form-label">Business Mobile Unlimited Premium
                            </label>
                        </div>




                        {{-- Business Mobile Flex End --}}




                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>App ((1 naar keuze)</b>
                            </p>

                        </div>




                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_5" value="0" required>
                            <label for="app_social_r_pro_5" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/facebook.png') }}"
                                    height="25px" width="25px" alt="">


                            </label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_5" value="1" required>
                            <label for="app_social_r_pro_5" class="form-label">


                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/twitter.png') }}"
                                    height="25px" width="25px" alt="">





                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_5" value="2" required>
                            <label for="app_social_r_pro_5" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/instagram.png') }}"
                                    height="25px" width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_5" value="3" required>
                            <label for="app_social_r_pro_5" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/snapchat.png') }}"
                                    height="25px" width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_5" value="4" required>
                            <label for="app_social_r_pro_5" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/whatsapp.png') }}"
                                    height="25px" width="25px" alt="">



                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_r_pro_5" value="5" required>
                            <label for="app_social_r_pro_5" class="form-label">

                                <img class="mt-3" style="text-align: center; margin:0 auto;"
                                    class="img-responsive" src="{{ asset('images/brands/pinterest.png') }}"
                                    height="25px" width="25px" alt="">





                            </label>
                        </div>

                        {{-- <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Offre conjointe: DataPhone Option</b>
                            </p>

                        </div>


                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_5" value="0" required>
                            <label for="gb_package_pro_5" class="form-label"> (500 MB): €4,13/mois HTVA </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_5" value="1" required>
                            <label for="gb_package_pro_5" class="form-label"> (1 GB): €8,26/mois HTVA </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_5" value="2" required>
                            <label for="gb_package_pro_5" class="form-label"> (2 GB): €16,53/mois HTVA </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-3">
                            <input type="radio" name="gb_package_pro_5" value="3" required>
                            <label for="gb_package_pro_5" class="form-label"> (2,5 GB): €20,66/mois HTVA </label>
                        </div> --}}







                        <div class="mb-3 mt-5 col-md-12">
                            <p style="text-align: center;"><b>Opties</b>
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="0" required>
                            <label for="package_type_r_pro_5" class="form-label"> Daily TravelPassport </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="1" required>
                            <label for="package_type_r_pro_5" class="form-label"> TravelPassportTopIntense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="2" required>
                            <label for="package_type_r_pro_5" class="form-label"> Travel Surf Top </label>
                        </div>



                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="3" required>
                            <label for="package_type_r_pro_5" class="form-label"> Bizz International </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="4" required>
                            <label for="package_type_r_pro_5" class="form-label"> TravelPassport Outside EU&Top
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="5" required>
                            <label for="package_type_r_pro_5" class="form-label"> Travel Surf Top Intense </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="6" required>
                            <label for="package_type_r_pro_5" class="form-label"> 1-Month Travel Passport Top 3
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="7" required>
                            <label for="package_type_r_pro_5" class="form-label"> Travel Passport World </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="8" required>
                            <label for="package_type_r_pro_5" class="form-label"> Travel Surf World
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="9" required>
                            <label for="package_type_r_pro_5" class="form-label"> 1-Month Travel Passport Top </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="10" required>
                            <label for="package_type_r_pro_5" class="form-label"> Bizz No LimitInternational
                            </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="11" required>
                            <label for="package_type_r_pro_5" class="form-label"> Travel SurfWorld Intense</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="12" required>
                            <label for="package_type_r_pro_5" class="form-label"> TravelPassport Top</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="13" required>
                            <label for="package_type_r_pro_5" class="form-label"> Daily Travel Surf </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="package_type_r_pro_5" value="14" required>
                            <label for="package_type_r_pro_5" class="form-label"> Smartphone Omnium</label>
                        </div>



                        {{-- FIFTH PRO END --}}


                        <div class="mb-2 mt-5 col-md-12">
                            <h4 style="text-align: center;">Bijlage 2: Multi line/Bizz Call Connect in een Pack voor
                                businessklantens</h4>
                        </div>


                        <div class="mb-2 mt-5 col-md-12">
                            <p class="lead mt-2" style="text-align: center;">(2 licenties inbegrepen in Business Flex
                                Call Connect) </p>
                        </div>


                        <div class="mb-3 mt-3 col-md-12">
                            <label for="additional_license" class="form-label"><span
                                    class="text-danger">*</span>Extra licenties in een Pack of met Bizz Call Connect
                                (buiten pack)</label>
                            <input type="additional_license"
                                class="form-control @error('additional_license') is-invalid @enderror"
                                id="additional_license" autocomplete="off"
                                placeholder="Extra licenties in een Pack of met Bizz Call Connect
                                                                                                                                                                                                                        (buiten pack)"
                                name="additional_license" value="{{ old('additional_license') }}" required>
                            @error('additional_license')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="mb-3 mt-3 col-md-6">
                            <label for="client_name_anex_2" class="form-label"><span
                                    class="text-danger">*</span>Klantennaam</label>
                            <input type="client_name_anex_2"
                                class="form-control @error('client_name_anex_2') is-invalid @enderror"
                                id="client_name_anex_2" autocomplete="off" placeholder="Klantennaam"
                                name="client_name_anex_2" value="{{ old('client_name_anex_2') }}" required>
                            @error('client_name_anex_2')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 mt-3 col-md-6">
                            <label for="current_phone_anex_2" class="form-label"><span
                                    class="text-danger">*</span>Huidig telefoonnummer</label>
                            <input type="current_phone_anex_2"
                                class="form-control @error('current_phone_anex_2') is-invalid @enderror"
                                id="current_phone_anex_2" autocomplete="off" placeholder="Huidig telefoonnummer"
                                name="current_phone_anex_2" value="{{ old('current_phone_anex_2') }}" required>
                            @error('current_phone_anex_2 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <h6 style="text-align: center;"><b>Huidige telefoonnummers of series: Hoofdnummer</b> </h6>
                        </div>




                        <div class="mb-3 mt-3 col-md-6">
                            <label for="main_num_anex_2" class="form-label"><span class="text-danger">*</span>
                                (GDN)</label>
                            <input type="main_num_anex_2"
                                class="form-control @error('main_num_anex_2') is-invalid @enderror" id="main_num_anex_2"
                                autocomplete="off" name="main_num_anex_2" value="{{ old('main_num_anex_2') }}" required>
                            @error('main_num_anex_2 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-12">
                            <p class="lead mt-2" style="text-align: center;">Lijst van over te zetten telefoonnummers
                                of series telefoonnummers </p>
                        </div>







                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_1" class="form-label">
                            </label>
                            <input type="migration_1" class="form-control @error('migration_1') is-invalid @enderror"
                                id="migration_1" autocomplete="off" name="migration_1" value="{{ old('migration_1') }}"
                                required>
                            @error('migration_1 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_2" class="form-label">
                            </label>
                            <input type="migration_2" class="form-control @error('migration_2') is-invalid @enderror"
                                id="migration_2" autocomplete="off" name="migration_2" value="{{ old('migration_2') }}"
                                required>
                            @error('migration_2 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_3" class="form-label">
                            </label>
                            <input type="migration_3" class="form-control @error('migration_3') is-invalid @enderror"
                                id="migration_3" autocomplete="off" name="migration_3" value="{{ old('migration_3') }}"
                                required>
                            @error('migration_3 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_4" class="form-label">
                            </label>
                            <input type="migration_4" class="form-control @error('migration_4') is-invalid @enderror"
                                id="migration_4" autocomplete="off" name="migration_4" value="{{ old('migration_4') }}"
                                required>
                            @error('migration_4 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_5" class="form-label">
                            </label>
                            <input type="migration_5" class="form-control @error('migration_5') is-invalid @enderror"
                                id="migration_5" autocomplete="off" name="migration_5" value="{{ old('migration_5') }}"
                                required>
                            @error('migration_5 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_6" class="form-label">
                            </label>
                            <input type="migration_6" class="form-control @error('migration_6') is-invalid @enderror"
                                id="migration_6" autocomplete="off" name="migration_6" value="{{ old('migration_6') }}"
                                required>
                            @error('migration_6 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_7" class="form-label">
                            </label>
                            <input type="migration_7" class="form-control @error('migration_7') is-invalid @enderror"
                                id="migration_7" autocomplete="off" name="migration_7" value="{{ old('migration_7') }}"
                                required>
                            @error('migration_7')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_8" class="form-label"><span class="text-danger"></span>
                            </label>
                            <input type="migration_8" class="form-control @error('migration_8') is-invalid @enderror"
                                id="migration_8" autocomplete="off" name="migration_8" value="{{ old('migration_8') }}"
                                required>
                            @error('migration_8 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_9" class="form-label">
                            </label>
                            <input type="migration_9" class="form-control @error('migration_9') is-invalid @enderror"
                                id="migration_9" autocomplete="off" name="migration_9" value="{{ old('migration_9') }}"
                                required>
                            @error('migration_9')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_10" class="form-label">
                            </label>
                            <input type="migration_10" class="form-control @error('migration_10') is-invalid @enderror"
                                id="migration_10" autocomplete="off" name="migration_10"
                                value="{{ old('migration_10') }}" required>
                            @error('migration_10')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_11" class="form-label">
                            </label>
                            <input type="migration_11" class="form-control @error('migration_11') is-invalid @enderror"
                                id="migration_11" autocomplete="off" name="migration_11"
                                value="{{ old('migration_11') }}" required>
                            @error('migration_11')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_12" class="form-label"><span class="text-danger"></span>
                            </label>
                            <input type="migration_12" class="form-control @error('migration_12') is-invalid @enderror"
                                id="migration_12" autocomplete="off" name="migration_12"
                                value="{{ old('migration_12') }}" required>
                            @error('migration_12')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>








                        <div class="mb-2 mt-5 col-md-12">
                            <p class="lead mt-2" style="text-align: center;">Lijst van af te sluiten telefoonnummers
                                of series telefoonnummers </p>
                        </div>





                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_list_1" class="form-label">
                            </label>
                            <input type="migration_list_1"
                                class="form-control @error('migration_list_1') is-invalid @enderror"
                                id="migration_list_1" autocomplete="off" name="migration_list_1"
                                value="{{ old('migration_list_1') }}" required>
                            @error('migration_list_1 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_list_2" class="form-label">
                            </label>
                            <input type="migration_list_2"
                                class="form-control @error('migration_list_2') is-invalid @enderror"
                                id="migration_list_2" autocomplete="off" name="migration_list_2"
                                value="{{ old('migration_list_2') }}" required>
                            @error('migration_list_2 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_list_3" class="form-label">
                            </label>
                            <input type="migration_list_3"
                                class="form-control @error('migration_list_3') is-invalid @enderror"
                                id="migration_list_3" autocomplete="off" name="migration_list_3"
                                value="{{ old('migration_list_3') }}" required>
                            @error('migration_list_3 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_list_4" class="form-label">
                            </label>
                            <input type="migration_list_4"
                                class="form-control @error('migration_list_4') is-invalid @enderror"
                                id="migration_list_4" autocomplete="off" name="migration_list_4"
                                value="{{ old('migration_list_4') }}" required>
                            @error('migration_list_4 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_list_5" class="form-label">
                            </label>
                            <input type="migration_list_5"
                                class="form-control @error('migration_list_5') is-invalid @enderror"
                                id="migration_list_5" autocomplete="off" name="migration_list_5"
                                value="{{ old('migration_list_5') }}" required>
                            @error('migration_list_5 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_list_6" class="form-label">
                            </label>
                            <input type="migration_list_6"
                                class="form-control @error('migration_list_6') is-invalid @enderror"
                                id="migration_list_6" autocomplete="off" name="migration_list_6"
                                value="{{ old('migration_list_6') }}" required>
                            @error('migration_list_6 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_list_7" class="form-label">
                            </label>
                            <input type="migration_list_7"
                                class="form-control @error('migration_list_7') is-invalid @enderror"
                                id="migration_list_7" autocomplete="off" name="migration_list_7"
                                value="{{ old('migration_list_7') }}" required>
                            @error('migration_list_7')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_list_8" class="form-label"><span class="text-danger"></span>
                            </label>
                            <input type="migration_list_8"
                                class="form-control @error('migration_list_8') is-invalid @enderror"
                                id="migration_list_8" autocomplete="off" name="migration_list_8"
                                value="{{ old('migration_list_8') }}" required>
                            @error('migration_list_8 ')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_list_9" class="form-label">
                            </label>
                            <input type="migration_list_9"
                                class="form-control @error('migration_list_9') is-invalid @enderror"
                                id="migration_list_9" autocomplete="off" name="migration_list_9"
                                value="{{ old('migration_list_9') }}" required>
                            @error('migration_list_9')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_list_10" class="form-label">
                            </label>
                            <input type="migration_list_10"
                                class="form-control @error('migration_list_10') is-invalid @enderror"
                                id="migration_list_10" autocomplete="off" name="migration_list_10"
                                value="{{ old('migration_list_10') }}" required>
                            @error('migration_list_10')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_list_11" class="form-label">
                            </label>
                            <input type="migration_list_11"
                                class="form-control @error('migration_list_11') is-invalid @enderror"
                                id="migration_list_11" autocomplete="off" name="migration_list_11"
                                value="{{ old('migration_list_11') }}" required>
                            @error('migration_list_11')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-3">
                            <label for="migration_list_12" class="form-label"><span class="text-danger"></span>
                            </label>
                            <input type="migration_list_12"
                                class="form-control @error('migration_12') is-invalid @enderror" id="migration_12"
                                autocomplete="off" name="migration_list_12" value="{{ old('migration_12') }}" required>
                            @error('migration_12')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <button class="btn btn-primary mb-2 mt-3">Submit</button>
                        <button class="btn btn-secondary mb-2 mt-3 ml-3">Cancel</button>




                    </div>





                    {{-- Pour Clients Professionals END --}}





















                </form>
                {{-- end of row --}}
            </div>


        </div>
        {{-- master card --}}

        {{-- IDENTIFICATIE VAN DE KLANT / GEBRUIKER card start --}}



        {{-- IDENTIFICATIE VAN DE KLANT / GEBRUIKER card end --}}


    </div>
    {{-- Master main container END --}}
@endsection
