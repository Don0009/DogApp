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
                <form action="{{ route('proximus_multi_contact_du.store') }}" method="post">@csrf
                    <d class="row">

                        <div class="mb-3 col-md-12">
                            <p class="lead">02/11/2020 au 31/01/2021
                            </p>

                        </div>

                        <div class="mb-3 col-md-12">
                            <h5 class=""><b>Annexe 1: des cartes SIM supplémentaires (max 10)</b>
                            </h5>

                        </div>

                        <div class="mb-3 col-md-12">
                            <p class="lead">VEUILLEZ REMPLIR EN CAPITALES
                            </p>

                        </div>

                        <div class="mb-3 mt-3 col-md-6">
                            <label for="client_name" class="form-label"><span class="text-danger">*</span>Client
                                Name</label>
                            <input type="client_name" class="form-control @error('client_name') is-invalid @enderror"
                                id="client_name" autocomplete="off" placeholder="Nom du client" name="client_name"
                                value="{{ old('client_name') }}" required>
                            @error('client_name')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-6">
                            <label for="phone" class="form-label"><span class="text-danger">*</span>N°
                                de téléphone</label>
                            <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone"
                                autocomplete="off" placeholder="N° de téléphone" name="phone" value="{{ old('phone') }}"
                                required>
                            @error('phone')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-12">
                            <h5 class=""><b>Pour clients privés </b>
                            </h5>

                        </div>

                        <div class="mb-3 col-md-12">
                            <p class="lead" style="text-align: center;">Carte SIM Supplémentaire – 1
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r" value="0" required>
                            <label for="sim_phase" class="form-label">Nouveau</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r" value="1" required>
                            <label for="sim_phase" class="form-label">Conversion</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r" value="2" required>
                            <label for="sim_phase" class="form-label">PORT IN (LOA) </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;">Type de carte SIM
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r" value="0" required>
                            <label for="sim_type_r" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r" value="0" required>
                            <label for="sim_type_r" class="form-label">Normal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num" class="form-label"><span class="text-danger">*</span>N° SIM</label>
                            <input type="sim_num" class="form-control @error('sim_num') is-invalid @enderror" id="sim_num"
                                autocomplete="off" placeholder="N° de téléphone" name="sim_num"
                                value="{{ old('sim_num') }}" required>
                            @error('sim_num')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num" class="form-label"><span class="text-danger">*</span> .N°
                                GSM</label>
                            <input type="gsm_num" class="form-control @error('gsm_num') is-invalid @enderror" id="gsm_num"
                                autocomplete="off" placeholder="N° de téléphone" name="gsm_num"
                                value="{{ old('gsm_num') }}" required>
                            @error('gsm_num')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_r" value="0" required>
                            <label for="proximus_subs_r" class="form-label">Abonnement Proximus en Pack </label>
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
                            <label for="mobilus_r" class="form-label">XL Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r" value="4" required>
                            <label for="mobilus_r" class="form-label">5G Unlimited</label>
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
                            <p style="text-align: center;"><b>App (1 au choix)</b>
                            </p>

                        </div>




                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="0" required>
                            <label for="app_social" class="form-label"> Facebook</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="1" required>
                            <label for="app_social" class="form-label">Twitter</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="2" required>
                            <label for="app_social" class="form-label"> Instagram</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="3" required>
                            <label for="app_social" class="form-label"> Snapchat</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="4" required>
                            <label for="app_social" class="form-label"> Whatsapp</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social" value="5" required>
                            <label for="app_social" class="form-label"> Pinterest</label>
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
                            <p style="text-align: center;"><b>Offre conjointe: DataPhone Option</b>
                            </p>

                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package" value="0" required>
                            <label for="gb_package" class="form-label"> (500 MB): €5/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package" value="1" required>
                            <label for="gb_package" class="form-label"> (1 GB): €10/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="gb_package" value="2" required>
                            <label for="gb_package" class="form-label"> (1,5 GB): €15/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="gb_package" value="3" required>
                            <label for="gb_package" class="form-label"> (2 GB): €20/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="gb_package" value="4" required>
                            <label for="gb_package" class="form-label"> (2,5 GB): €25/mois </label>
                        </div>

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



                        {{-- SECOND PHASE --}}


                        <div class="mb-3 col-md-12">
                            <p class="lead" style="text-align: center;">Carte SIM Supplémentaire – 2
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_3" value="0" required>
                            <label for="sim_phase_r_3" class="form-label">Nouveau</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_3" value="1" required>
                            <label for="sim_phase_r_3" class="form-label">Conversion</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_3" value="2" required>
                            <label for="sim_phase_r_3" class="form-label">PORT IN (LOA) </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;">Type de carte SIM
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_3" value="0" required>
                            <label for="sim_type_r_3" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_3" value="0" required>
                            <label for="sim_type_r_3" class="form-label">Normal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num_3" class="form-label"><span class="text-danger">*</span>N°
                                SIM</label>
                            <input type="sim_num_3" class="form-control @error('sim_num_3') is-invalid @enderror"
                                id="sim_num_3" autocomplete="off" placeholder="N° de téléphone" name="sim_num_3"
                                value="{{ old('sim_num_3') }}" required>
                            @error('sim_num_3')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num_3" class="form-label"><span class="text-danger">*</span> .N°
                                GSM</label>
                            <input type="gsm_num_3" class="form-control @error('gsm_num_3') is-invalid @enderror"
                                id="gsm_num_3" autocomplete="off" placeholder="N° de téléphone" name="gsm_num_3"
                                value="{{ old('gsm_num_3') }}" required>
                            @error('gsm_num_3')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_r_3" value="0" required>
                            <label for="proximus_subs_r_3" class="form-label">Abonnement Proximus en Pack </label>
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
                            <input type="radio" name="mobilmobilus_r_3us_r" value="2" required>
                            <label for="mobilus_r_3" class="form-label">L</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_3" value="3" required>
                            <label for="mobilus_r_3" class="form-label">XL Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_3" value="4" required>
                            <label for="mobilus_r_3" class="form-label">5G Unlimited</label>
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
                            <label for="app_social_3" class="form-label"> Facebook</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="1" required>
                            <label for="app_social_3" class="form-label">Twitter</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="2" required>
                            <label for="app_social_3" class="form-label"> Instagram</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="3" required>
                            <label for="app_social_3" class="form-label"> Snapchat</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="4" required>
                            <label for="app_social_3" class="form-label"> Whatsapp</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="5" required>
                            <label for="app_social_3" class="form-label"> Pinterest</label>
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


                        <div class="mb-3 mt-5 col-md-12">
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
                            <input type="radio" name="gb_package" value="3" required>
                            <label for="gb_package" class="form-label"> (2 GB): €20/mois </label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="gb_package_3" value="4" required>
                            <label for="gb_package_3" class="form-label"> (2,5 GB): €25/mois </label>
                        </div>

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



                        {{-- END SECOND PHASE --}}


                        {{-- THIRD PHASE --}}


                        <div class="mb-3 col-md-12">
                            <p class="lead" style="text-align: center;">Carte SIM Supplémentaire – 3
                            </p>

                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_3" value="0" required>
                            <label for="sim_phase_r_3" class="form-label">Nouveau</label>
                        </div>


                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_3" value="1" required>
                            <label for="sim_phase_r_3" class="form-label">Conversion</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="sim_phase_r_3" value="2" required>
                            <label for="sim_phase_r_3" class="form-label">PORT IN (LOA) </label>
                        </div>



                        <div class="mb-3 mt-3 col-md-12">
                            <p class="lead" style="text-align: center;">Type de carte SIM
                            </p>

                        </div>



                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_3" value="0" required>
                            <label for="sim_type_r_3" class="form-label">Nano</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="sim_type_r_3" value="0" required>
                            <label for="sim_type_r_3" class="form-label">Normal</label>
                        </div>


                        <div class="mb-3 mt-3 col-md-4">
                            <label for="sim_num_3" class="form-label"><span class="text-danger">*</span>N°
                                SIM</label>
                            <input type="sim_num_3" class="form-control @error('sim_num_3') is-invalid @enderror"
                                id="sim_num_3" autocomplete="off" placeholder="N° de téléphone" name="sim_num_3"
                                value="{{ old('sim_num_3') }}" required>
                            @error('sim_num_3')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="mb-3 mt-3 col-md-4">
                            <label for="gsm_num_3" class="form-label"><span class="text-danger">*</span> .N°
                                GSM</label>
                            <input type="gsm_num_3" class="form-control @error('gsm_num_3') is-invalid @enderror"
                                id="gsm_num_3" autocomplete="off" placeholder="N° de téléphone" name="gsm_num_3"
                                value="{{ old('gsm_num_3') }}" required>
                            @error('gsm_num_3')
                                <span class="invalid-feedback mb-2" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="proximus_subs_r_3" value="0" required>
                            <label for="proximus_subs_r_3" class="form-label">Abonnement Proximus en Pack </label>
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
                            <label for="mobilus_r_3" class="form-label">XL Unlimited</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-6">
                            <input type="radio" name="mobilus_r_3" value="4" required>
                            <label for="mobilus_r_3" class="form-label">5G Unlimited</label>
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
                            <label for="app_social_3" class="form-label"> Facebook</label>
                        </div>
                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="1" required>
                            <label for="app_social_3" class="form-label">Twitter</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="2" required>
                            <label for="app_social_3" class="form-label"> Instagram</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="3" required>
                            <label for="app_social_3" class="form-label"> Snapchat</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="4" required>
                            <label for="app_social_3" class="form-label"> Whatsapp</label>
                        </div>

                        <div class="mb-2 mt-5 col-md-4">
                            <input type="radio" name="app_social_3" value="5" required>
                            <label for="app_social_3" class="form-label"> Pinterest</label>
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


                        <div class="mb-3 mt-5 col-md-12">
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
                        </div>

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
