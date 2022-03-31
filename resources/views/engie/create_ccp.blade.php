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

    {{-- <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('internet_tv.index') }}">internet tv</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create User</li>
            </ol>
        </nav>
    </div> --}}

    <form class="forms-sample" method="POST" action="{{ route('engie.store') }}">
@csrf
<div class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="electricity_natural_gas">
                                            Contrat électricité et/ou gaz naturel<span> - clients professionnels</span>
                                        </div>
                                        <div class="send_this_document" style="font-size: 8px">
                                            Veuillez renvoyer ce document à la Partner Line : par e-mail à partnerlinefr.electrabel@engie.com, par la poste : Code Réponse Electrabel – Ligne Partenaires, DA 852 – 546 – 3, 2600 Berchem ou par fax au 03 280 02 07
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
</div>


<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="customer_data">
                            Données du client (1)

                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="company_name">Nom de la société</label>
                                                <input type="name" class="form-control" id="company_name" autocomplete="off"
                                                       placeholder="Nom de la société" name="company_name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="legal_form">Forme juridique</label>
                                                <input type="name" class="form-control" id="legal_form" autocomplete="off"
                                                       placeholder="Forme juridique" name="legal_form">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name">Nom</label>
                                                <input type="name" class="form-control" id="name" autocomplete="off"
                                                       placeholder="Nom" name="name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first_name">Prénom</label>
                                                <input type="name" class="form-control" id="first_name" autocomplete="off"
                                                       placeholder="Prénom" name="first_name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="client_number">N° de client</label>
                                                <input type="name" class="form-control" id="client_number" autocomplete="off"
                                                       placeholder="N° de client" name="client_number">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="nace_code">(2) Code NACE</label>
                                                <input type="name" class="form-control" id="nace_code" autocomplete="off"
                                                       placeholder="(2) Code NACE" name="nace_code">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="tel">Tél</label>
                                                <input type="name" class="form-control" id="tel" autocomplete="off"
                                                       placeholder="Tél" name="tel">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="gsm">GSM</label>
                                                <input type="name" class="form-control" id="gsm" autocomplete="off"
                                                       placeholder="GSM" name="gsm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="e_mail">E-mail</label>
                                                <input type="email" class="form-control" id="e_mail" autocomplete="off"
                                                       placeholder="E-mail" name="e_mail">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_wish_to_receive">
                                <label class="form-check-label" for="inlineCheckbox2">Vous souhaitez recevoir les communications concernant votre (vos) contrat(s) avec ENGIE Electrabel par
                                    e-mail (voir aussi les Conditions Spécifiques)</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_wish_to_be_informed">
                                <label class="form-check-label" for="inlineCheckbox2">Vous souhaitez être tenu informé(e) par e-mail des produits, services et promotions d’ENGIE Electrabel
                                    en matière d’énergie, d’efficacité énergétique, de production et de stockage d’énergie, d’entretien et
                                    d’assistance en cas de panne, de produits smart et de l’e-mobility, et de ses partenaires en matière de
                                    chauffage, d’isolation et de panneaux solaires</label>
                              </div>




                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="btw_be">TVA BE</label>
                                                <input type="name" class="form-control" id="btw_be" autocomplete="off"
                                                       placeholder="TVA BE" name="btw_be">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="rpr">RPM</label>
                                                <input type="name" class="form-control" id="rpr" autocomplete="off"
                                                       placeholder="RPM" name="rpr">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <label for="school_id" class="form-label">Adresse d’expédition <span> (A compléter si différente de l’adresse de livraison.)</span></label>


                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="company_name_1">Nom de la société</label>
                                                <input type="name" class="form-control" id="company_name_1" autocomplete="off"
                                                       placeholder="Nom de la société" name="company_name_1">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="legal_form_1">Forme juridique</label>
                                                <input type="name" class="form-control" id="legal_form_1" autocomplete="off"
                                                       placeholder="Forme juridique" name="legal_form_1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="name_1">Nom</label>
                                                <input type="name" class="form-control" id="name_1" autocomplete="off"
                                                       placeholder="Nom" name="name_1">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first_name_1">Prénom</label>
                                                <input type="name" class="form-control" id="first_name_1" autocomplete="off"
                                                       placeholder="Prénom" name="first_name_1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="street">Rue</label>
                                                <input type="name" class="form-control" id="street" autocomplete="off"
                                                       placeholder="Rue" name="street">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="no">N°</label>
                                                <input type="name" class="form-control" id="no" autocomplete="off"
                                                       placeholder="N°" name="no">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="bus">Bte</label>
                                                <input type="name" class="form-control" id="bus" autocomplete="off"
                                                       placeholder="Bte" name="bus">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="postcode">Code Postal</label>
                                                <input type="name" class="form-control" id="postcode" autocomplete="off"
                                                       placeholder="Code Postal" name="postcode">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="place">Localité</label>
                                                <input type="name" class="form-control" id="place" autocomplete="off"
                                                       placeholder="Localité" name="place">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>






                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card">
                    <div class="card-body">
                       <div class="section">
                           <div class="container">

                               <div class="row">

                                   <div class="col-12">

                                    <div class="form-group">
                                        <label for="documnet_id">Document ID:</label>
                                        <input type="id" class="form-control" id="documnet_id" autocomplete="off"
                                               placeholder="Document ID" name="documnet_id">
                                    </div>
                                   </div>
                               </div>

                           </div>
                       </div>
                    </div>
                    </div>

                    <div class="card mt-5">
                    <div class="card-body">
                        <div class="section">
                            <div class="container ">

                                <div class="row">

                                    <div class="col-12">
                                     <div class="form-group">
                                         <label for="place">Electrabel sa représentée par :</label>
                                         <input type="name" class="form-control" id="electrabel_sa_1" autocomplete="off"
                                                placeholder="Electrabel sa représentée par :" name="electrabel_sa_1">
                                         <input type="name" class="form-control mt-2" id="electrabel_sa_2" autocomplete="off"
                                                placeholder="Electrabel sa représentée par :" name="electrabel_sa_2">
                                     </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                     </div>



                     <div class="card mt-5">
                        <div class="card-body">
                            <div class="section">
                                <div class="container">

                                    <div class="row">

                                        <div class="col-12">

                                         <div class="form-group">
                                            <label for="place">Adresse de livraison (Point de prélèvement)</label>
                                             <label for="street_1">Rue</label>
                                             <input type="name" class="form-control" id="street_1" autocomplete="off"
                                                    placeholder="Rue" name="street_1">
                                         </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-3">

                                         <div class="form-group">
                                             <label for="no_1">N°</label>
                                             <input type="name" class="form-control" id="no_1" autocomplete="off"
                                                    placeholder="N°" name="no_1">
                                         </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="floor">Bte</label>
                                                <input type="name" class="form-control" id="floor" autocomplete="off"
                                                       placeholder="Bte" name="floor">
                                            </div>
                                           </div>

                                           <div class="col-3">

                                            <div class="form-group">
                                                <label for="bus_1">Etage</label>
                                                <input type="name" class="form-control" id="bus_1" autocomplete="off"
                                                       placeholder="Etage" name="bus_1">
                                            </div>
                                           </div>



                                           <div class="col-3">

                                            <div class="form-group">
                                                <label for="apartment">Appartement</label>
                                                <input type="name" class="form-control" id="apartment" autocomplete="off"
                                                       placeholder="Appartement" name="apartment">
                                            </div>
                                           </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-6">

                                         <div class="form-group">
                                             <label for="place">Code postal</label>
                                             <input type="name" class="form-control" id="post_code" autocomplete="off"
                                                    placeholder="Code postal" name="post_code">
                                         </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="place_1">Localité</label>
                                                <input type="name" class="form-control" id="place_1" autocomplete="off"
                                                       placeholder="Localité" name="place_1">
                                            </div>

                                           </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="electricity">N° EAN électricité :</label>
                                                <input type="name" class="form-control" id="electricity" autocomplete="off"
                                                       placeholder="N° EAN électricité :" name="electricity">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="natural_gas">N° EAN gaz naturel :</label>
                                                <input type="name" class="form-control" id="natural_gas" autocomplete="off"
                                                       placeholder="N° EAN gaz naturel :" name="natural_gas">
                                            </div>


                                        </div>


                                    </div>

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="excluding_night">N° EAN exclusif nuit :</label>
                                                <input type="name" class="form-control" id="excluding_night" autocomplete="off"
                                                       placeholder="N° EAN exclusif nuit :" name="excluding_night">
                                            </div>

                                        </div>



                                    </div>


                                      <div class="row">
                                        Usage :
                                        <div class="col-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="gemengd_professioneel_verbruik">
                                                <label class="form-check-label" for="inlineCheckbox2">semi professionne</label>
                                              </div>
                                        </div>

                                        <div class="col-6">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="only_professional_use">
                                                <label class="form-check-label" for="inlineCheckbox2">professionnel pu</label>
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
    </div>
</div>


<div class="section">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="object_duration_price">
                NOUVEAU CONTRAT / OUVERTURE DE COMPTEURS (Veuillez cocher une seule case en cas de choix multiple)
            </div>
        </div>
        <div class="col-12">
            <div>Contrat entre <span> le client</span> et <span>Electrabel sa,</span> ayant son siège Boulevard Simon Bolivar 34 à 1000 Bruxelles, TVA BE 0403.170.701 RPM Bruxelles. Dénommés ci-après respectivement
                ‘vous’ ou ‘le Client’ et ‘nous’ ou ‘ENGIE Electrabel’.</div>
        </div>
        <div class="col-12">
            Les offres, conditions de prix et services correspondants sont détaillés dans les Conditions Spécifiques et les fiches de prix dont vous reconnaissez avoir pris connaissance. Votre
            Contrat vous permet de prélever de l’électricité et/ou du gaz naturel auprès d’ENGIE Electrabel pour le Point de prélèvement susmentionné
        </div>
        <div class="col-12">
            Si une ouverture ou fermeture du (des) compteur(s) est nécessaire, les frais liés à cette ouverture/fermeture seront facturés au Client
        </div>
        <div class="col-12">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="in_case_of_moving_house">
                <label class="form-check-label" for="inlineCheckbox2">En cas de déménagement, veuillez compléter et signer le ‘Document de reprise des énergies’ en annexe.</label>
              </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="customer">
                CLIENT
            </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_contract">
                                <label class="form-check-label" for="inlineCheckbox2">Vous disposez déjà d’un contrat chez ENGIE Electrabel</label>
                              </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_do_not_yet">
                                <label class="form-check-label" for="inlineCheckbox2">Vous ne disposez pas encore d’un contrat chez ENGIE Electrabel</label>
                              </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_have_never_had_energy">
                                <label class="form-check-label" for="inlineCheckbox2">Vous n’avez jamais eu de contrat énerg</label>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="electricity">
                ELECTRICITÉ  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="clear_selection">
                    <label class="form-check-label" for="inlineCheckbox2">Effacer sélection</label>
                  </div>
            </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_move_or_build">
                                <label class="form-check-label" for="inlineCheckbox2">Vous déménagez ou construisez</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_an_electricity_contract">
                                <label class="form-check-label" for="inlineCheckbox2">Vous disposez déjà d’un contrat électricité chez un autre fournisseur
                                    Nom du fournisseur</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing">
                                <label class="form-check-label" for="inlineCheckbox2">Vous souhaitez modifier votre contrat électricité existant</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_a_contract_for_an_extra">
                                <label class="form-check-label" for="inlineCheckbox2">Vous souhaitez un contrat pour une énergie supplémentaire</label>
                              </div>
                        </div>

                        <div class="col-9">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_move_or_build_1">
                                        <label class="form-check-label" for="inlineCheckbox2">Votre compteur électricité est déjà ouvert</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_an_electricity_contract_1">
                                        <label class="form-check-label" for="inlineCheckbox2">Vous souhaitez ouvrir un nouveau compteur électricité</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing_1">
                                        <label class="form-check-label" for="inlineCheckbox2">Vous souhaitez ouvrir un compteur électricité existant</label>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_move_or_build_2">
                                        <label class="form-check-label" for="inlineCheckbox2">Easy pro (Fixe 1 an)</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_an_electricity_contract_2">
                                        <label class="form-check-label" for="inlineCheckbox2">Easy pro (Indexé 1 an)</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing_2">
                                        <label class="form-check-label" for="inlineCheckbox2">Easy 3 pro (Fixe 3 ans)</label>
                                      </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing_3">
                                        <label class="form-check-label" for="inlineCheckbox2">Option
                                            Green</label>
                                      </div>
                                </div>
                                <div class="col-3">
                               <div class="row">
                                   <div class="col-12">
                                    <label class="form-check-label" for="inlineCheckbox2">Provision (€) (4)</label>
                                   </div>
                                   <div class="col-12">
                                    <div class="form-group">
                                        <label for="place_2"></label>
                                        <input type="name" class="form-control" id="place_2" autocomplete="off"
                                               placeholder="Plaats" name="place_2">
                                    </div>
                                   </div>
                               </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="place">Date de démarrage souhaitée pour votre nouveau contrat gaz naturel :</label>
                                    <div class="input-group mb-3">
                                        <input type="date" class="form-control" id="desired_start_date" autocomplete="off"
                                               placeholder="Date de démarrage souhaitée pour votre nouveau contrat gaz naturel :" name="desired_start_date">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="electricity">
                GAZ  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="clear_selection_1">
                    <label class="form-check-label" for="inlineCheckbox2">Effacer sélection</label>
                  </div>
            </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_move_or_build_3">
                                <label class="form-check-label" for="inlineCheckbox2">Vous déménagez ou construisez</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_an_electricity_contract_3">
                                <label class="form-check-label" for="inlineCheckbox2">Vous disposez déjà d’un contrat gaz chez un autre fournisseur
                                    Nom du fournisseur</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing_4">
                                <label class="form-check-label" for="inlineCheckbox2">Vous souhaitez modifier votre contrat gaz existant</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_a_contract_for_an_extra_1">
                                <label class="form-check-label" for="inlineCheckbox2">Vous souhaitez un contrat pour une énergie supplémentaire</label>
                              </div>
                        </div>

                        <div class="col-9">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_move_or_build_4">
                                        <label class="form-check-label" for="inlineCheckbox2">Votre compteur gaz est déjà ouvert</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_an_electricity_contract_4">
                                        <label class="form-check-label" for="inlineCheckbox2">Vous souhaitez ouvrir un nouveau compteur gaz</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing_5">
                                        <label class="form-check-label" for="inlineCheckbox2">Vous souhaitez ouvrir un compteur gaz existant</label>
                                      </div>
                                </div>

                                <div class="col-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_move_or_build_5">
                                        <label class="form-check-label" for="inlineCheckbox2">Easy pro (Fixe 1 an)</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_an_electricity_contract_5">
                                        <label class="form-check-label" for="inlineCheckbox2">Easy pro (Indexé 1 an)</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing_6">
                                        <label class="form-check-label" for="inlineCheckbox2">Easy 3 pro (Fixe 3 ans)</label>
                                      </div>
                                </div>

                                <div class="col-3">
                               <div class="row">
                                   <div class="col-12">
                                    <label class="form-check-label" for="inlineCheckbox2">Provision (€) (4)</label>
                                   </div>
                                   <div class="col-12">
                                    <div class="form-group">
                                        <label for="place_3"></label>
                                        <input type="name" class="form-control" id="place_3" autocomplete="off"
                                               placeholder="Plaats" name="place_3">
                                    </div>
                                   </div>
                               </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="place">Date de démarrage souhaitée pour votre nouveau contrat gaz nature</label>
                                    <div class="input-group mb-3">
                                        <input type="date" class="form-control" id="desired_start_date_1" autocomplete="off"
                                               placeholder="Gewenste startdatum van uw nieuwe elektriciteitscontract" name="desired_start_date_1">
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

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="sectiom">
                <div class="row">
                    <div class="col-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="valid_for_the_two_energies">
                            <label class="form-check-label" for="inlineCheckbox2">Tarif ‘Maison vide’ (valable pour les 2 énergies, pas de forfaits et durée indéterminée)</label>
                          </div>
                    </div>
                    <div class="col-6">
                        <label for="codep">Code P:</label>
                        <div class="input-group mb-3">
                            <input type="name" class="form-control" id="code_p" autocomplete="off"
                                   placeholder="Code P" name="code_p">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        MODALITÉS DE PAIEMENT
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-4">
                        Vous optez pour une provision
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="monthly">
                            <label class="form-check-label" for="inlineCheckbox2">mensuelle</label>
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="bimonthly">
                            <label class="form-check-label" for="inlineCheckbox2">bimestrielle</label>
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="quarterly_advance">
                            <label class="form-check-label" for="inlineCheckbox2">trimestrielle</label>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        Vous souhaitez recevoir vos factures et les communications à ce sujet
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="by_e_mail">
                            <label class="form-check-label" for="inlineCheckbox2">via e-mail (voir aussi les Conditions Spécifiques</label>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="per_post">
                            <label class="form-check-label" for="inlineCheckbox2">via papier</label>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        Vous payez
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="by_bank_transfer">
                                    <label class="form-check-label" for="inlineCheckbox2">par virement bancaire</label>
                                  </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="via_domiciliëring">
                                    <label class="form-check-label" for="inlineCheckbox2">par domiciliation</label>
                                  </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="through_a_new">
                                    <label class="form-check-label" for="inlineCheckbox2">via une nouvelle</label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="directdebit">domiciliation bancaire via le n° de compte IBAN</label>
                                <div class="input-group ">
                                    <input type="name" class="form-control" id="debit_account_number" autocomplete="off"
                                           placeholder="domiciliëring met het rekeningnummer IBAN" name="debit_account_number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-4 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="">
                                        ENGIE Electrabel vous enverra une confirmation écrite du Contrat ou de vos Contrats. Vous disposez de 14 jours calendrier à dater du jour de
                                        réception de la confirmation écrite pour nous communiquer par écrit que vous y renoncez, sans motif particulier. Ce courrier doit être adressé
                                        pour la Région wallonne et de Bruxelles-Capitale à Electrabel, Boîte postale 10070, 5000 Namur; pour la Région flamande à Electrabel,
                                        Postbus 10070, 2600 Berchem. Si vous le souhaitez, vous pouvez utiliser le modèle de formulaire de rétractation que vous trouverez dans
                                        la confirmation écrite de votre Contrat ou de vos Contrats. Si vous nous avez demandé de commencer la fourniture d’électricité et/ou de gaz
                                        sans attendre l’expiration de votre délai de rétractation et que vous faites néanmoins usage de votre droit de rétractation, vous êtes redevable
                                        d’un montant qui correspond à l’électricité et/ou au gaz déjà fourni(e)(s) par ENGIE Electrabel conformément au Code de Droit économique.
                                        Ce montant sera calculé sur base du prix total convenu dans le contrat et en fonction des données de consommation validées par votre
                                        gestionnaire de réseau de distribution.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                            <label for="drawn_up">Etabli en trois exemplaires originaux, à</label>
                            <div class="input-group ">
                                <input type="name" class="form-control" id="drawn_up" autocomplete="off"
                                       placeholder="Etabli en trois exemplaires originaux, à" name="drawn_up">
                        </div>
                    </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                            <label for="of_which_the_customer">le</label>
                            <div class="input-group ">
                                <input type="date" class="form-control" id="of_which_the_customer" autocomplete="off"
                                       placeholder=" " name="of_which_the_customer">le Client reconnaissant avoir reçu un exemplaire.
                        </div>
                    </div>
                      </div>
                      <div class="row">
                          <div class="col-12 mt-5">
                            Le Client déclare avoir pris connaissance du contenu du (des) présent(s) Contrat(s), qui est (sont)
                            constitué(s) du présent document, des Conditions Spécifiques, des Conditions Générales applicables
                            aux clients professionnels et des fiches de prix, et les avoir acceptés. Le Client reconnait que par sa
                            signature il s’engage vis-à-vis d’ENGIE Electrabel et qu’il n’a pas de dettes ouvertes auprès d’ENGIE
                            Electrabel.
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12 mt-4">
                            Signé par
                          </div>
                      </div>
                      <div class="row">
                          <div class="">
                              <div class="">
                                Pour Electrabel sa
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-7">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="">
                                            Dominik Vansteenbeeck
                                        </div>
                                        <div class="">
                                            Verantwoordelijke
                                        </div>
                                        <div class="">
                                            klantendiens
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>
                          <div class="col-5">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <label for="handtekening">Naam: [Handtekening]</label>
                                        <div class="input-group ">
                                            <input type="name" class="form-control" id="handtekening" autocomplete="off"
                                                   placeholder=" " name="handtekening">
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
    </div>
</section>

<section>
    <div class="row">
        <div class="col-12">

            <div class="form-check form-check-inline">
                n
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="You+do_not_wish_to_receive_commercial_communications">
                <label class="form-check-label" for="inlineCheckbox2">U wenst geen commerciële communicatie van ENGIE Electrabel te ontvangen. (2) Enkel in te vullen indien u al ENGIE Electrabel klant bent. (3) Uw Contract wordt nadien verdergezet voor telkens 1 jaar of 3 jaar in geval van Easy3 pro vast. Tenzij anders vermeld in de Algemene Voorwaarden, kan u uw Contract(en)
                    op ieder moment opzeggen, zonder verbrekingsvergoeding, mits het respecteren van een schriftelijke opzeg van 1 maand. (4) Enkel in te vullen voor een nieuwe klant, nieuw adres of voor bestaande klanten die kiezen voor een nieuwe energie. (5) We zullen u per brief een mandaat toesturen. Bezorg het ons ondertekend
                    en gedateerd terug. Zonder dit document kunnen we uw domiciliëring niet activeren</label>
              </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                Algemene Voorwaarden van Electrabel nv
            </div>
            <div class="col-12">
                (hierna ‘ENGIE Electrabel’ of ‘wij’) voor professionele klanten (versie 201810)
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="">1 Contract</div>
                <div>Uw Contract met ENGIE Electrabel bestaat uit deze Algemene Voorwaarden (AV), de Bijzondere Voorwaarden en de
                    prijzen (BV). In geval van tegenstrijdigheid hebben de BV voorrang op de AV</div>
                    <div>Uw Contract heeft betrekking op de levering van elektriciteit of aardgas (energie) of op de producten en/of diensten
                        die u los van uw energie aankoopt. Er wordt telkens een afzonderlijk Contract afgesloten voor elk van deze energieën,
                        deze producten en/of diensten</div>
                        <div>Indien wij u de mogelijkheid bieden om onze contractuele voorwaarden te aanvaarden door gebruik te maken van een
                            webformulier of e-mail of een unieke code die u telefonisch of via een webapplicatie activeert, dan vormt het feit dat u
                            daarvan gebruik maakt een geldig bewijs in rechte van uw aanvaarding van onze contractuele voorwaarden.
                            Indien wij uw standaardleverancier zijn is dit Contract van toepassing krachtens de wettelijke voorschriften die ENGIE
                            Electrabel hebben aangeduid als standaardleverancier</div>
                            <div class="mt-3">2. Definities</div>
                            <div>Het Afnamepunt is het punt waar wij u elektrisch vermogen of aardgas ter beschikking stellen. Het is geïdentificeerd
                                in de BV door een adres en heeft een unieke EAN-code.</div>
                                <div>De Netwerkkosten zijn de tarieven voor het gebruik van het distributienet en voor de ondersteunende diensten, evenals de periodieke tarieven voor de aansluiting op het distributienet voor elektriciteit of aardgas, alsook de tarieven
                                    voor het gebruik van het transportnet voor elektriciteit of aardgas</div>
                                    <div>De Ontvangstdag/Ontvangst is de derde werkdag na de verzending van het document. Een werkdag is elke dag van
                                        de week met uitzondering van zaterdagen, zondagen en wettelijke feestdagen.</div>
                                        <div class="mt-3">
                                            3. Aanvang, duur en beëindiging
                                        </div>
                                        <div>3.1. De BV bepalen de duur van het Contract. De duur van het Contract begint te lopen op de datum van aanvang van
                                            de levering. Tenzij anders bepaald in de BV, wordt een Contract van bepaalde duur verder gezet voor telkens één jaar.
                                            De levering van energie kan maar aanvangen op voorwaarde dat:</div>
                                            <div>ENGIE Electrabel als leverancier voor het Afnamepunt in het toegangsregister van de distributienetbeheerder (DNB)
                                                is geregistreerd;</div>
                                                <div>uw aansluiting al is aangesloten op het distributienet en niet buiten dienst is gesteld; en</div>
                                                    <div>in het geval van een nieuwe aansluiting of een afgesloten aansluiting, de opening van de meters door de DNB is
                                                        uitgevoerd</div>
                                                        <div>3.2. De levering kan maar aanvangen na afloop van uw herroepingstermijn, dit is de termijn waarbinnen u ons schriftelijk kan meedelen dat u het Contract dat u met ons hebt afgesloten wenst te herroepen. Indien u het Contract
                                                            telefonisch hebt afgesloten, dient u uw Contract te bevestigen, en beschikt u vervolgens over een herroepingstermijn
                                                            van 14 kalenderdagen te rekenen vanaf onze Ontvangst van uw bevestiging. Indien u het Contract op een andere wijze
                                                            dan telefonisch hebt afgesloten, beschikt u over een herroepingstermijn van 14 kalenderdagen te rekenen vanaf uw
                                                            Ontvangst van onze schriftelijke bevestiging van uw Contract</div>
                                                            <div>3.3. U kan uw Contract op ieder moment beëindigen, zonder verbrekingsvergoeding, mits het respecteren van een
                                                                schriftelijke opzeg van 1 maand. Indien u op uw Afnamepunt op jaarbasis meer verbruikt dan 50 MWh elektriciteit
                                                                of 100 MWh aardgas, berekend op basis van uw geschat jaarlijks verbruik (EAV) zoals bepaald door de DNB, geldt in
                                                                afwijking van het voorgaande, dat u uw Contract van bepaalde duur enkel kan beëindigen op het einde van de lopende
                                                                duur mits een schriftelijke opzeg ten laatste 1 maand voor de afloop van de lopende periode. Indien u uw Contract
                                                                beëindigt voor de afloop van de lopende duur, bent u ons een opzegvergoeding verschuldigd die gelijk is aan 3 maal de
                                                                waarde van het gemiddeld verschuldigd maandbedrag berekend op basis van de 12 voorgaande maandfacturen of de
                                                                laatste jaarfactuur of een kortere periode indien u nog geen 12 maanden klant bij ons bent. Indien de DNB ons meedeelt dat u van energieleverancier bent veranderd, geldt dat voor ons als voldoende kennisgeving van uw opzegging,
                                                                voor zover de opzegtermijn werd gerespecteerd.</div>
                                                                <div>Wij kunnen een Contract van onbepaalde duur op elk moment beëindigen met een schriftelijke opzeg van 1 maand.
                                                                    Wij kunnen een Contract van bepaalde duur beëindigen mits een schriftelijke opzeg ten laatste 1 maand voor de afloop
                                                                    van de lopende periode.</div>
                                                                    <div>Indien wij uw standaardleverancier zijn, zullen wij het Contract enkel beëindigen in de gevallen bepaald in artikel 7.8.
                                                                        3.4. Het Contract wordt automatisch beëindigd in geval van faillissement of ontbinding van één van de partijen. De
                                                                        bedragen die verschuldigd zijn op het moment van het faillissement of de beslissing tot ontbinding worden onmiddellijk
                                                                        opeisbaar. In geval van gerechtelijke reorganisatie worden alle bedragen eveneens onmiddellijk opeisbaar en kan het
                                                                        Contract beëindigd worden indien betaling uitblijft binnen de 15 dagen na de ingebrekestelling</div>
                                                                        <div class="mt-3">4. Prijzen</div>
                                                                        <div>4.1. De energieprijzen van ENGIE Electrabel worden vermeerderd met:</div>
                                                                        <div>de btw</div>
                                                                        <div> alle belastingen, heffingen, retributies, vergoedingen, bijdragen, toeslagen en lasten (Toeslagen), die ons door een
                                                                            bevoegde overheid worden opgelegd, die wij moeten of mogen doorrekenen aan onze klanten, en die betrekking hebben op of volgen uit onze activiteit, in de meest ruime zin van het woord, als leverancier van elektriciteit of aardgas;</div>
                                                                        <div> de Netwerkkosten.
                                                                            4</div>
                                                                            <div>4.2. Meer informatie over onze prijzen vindt u op onze website www.engie-electrabel.be</div>
                                                                            <div>4.3. De prestaties die de DNB voor u uitvoert in het kader van het afsluiten, het uitvoeren of het beëindigen van uw
                                                                                Contract, alsook alle kosten die hij ons rechtstreeks factureert en die betrekking hebben op uw Afnamepunt(en) zijn
                                                                                niet inbegrepen in onze prijzen en worden u dus doorgerekend</div>
                                                                        <div class="mt-3">5. Wijziging van voorwaarden en prijzen</div>
                                                                        <div>5.1. Wij kunnen op elk moment wijzigingen doorvoeren van de prijzen en/of de voorwaarden die niet in uw nadeel zijn,
                                                                            op voorwaarde dat wij u hiervan op voorhand informeren via documenten die u aan huis of per e-mail ontvangt en/of
                                                                            via onze website www.engie-electrabel.be</div>
                                                                        <div>5.2. Voor prijsverhogingen en/of wijzigingen van de voorwaarden in uw nadeel gelden de volgende regels:</div>
                                                                        <div>Deze prijsverhogingen en/of wijzigingen van de voorwaarden kunnen wij doorvoeren, op voorwaarde dat wij u minstens
                                                                            2 maanden op voorhand hiervan informeren per post of per e-mail. Bij kennisgeving per post wordt de kennisgeving
                                                                            geacht plaats te vinden op de Ontvangstdag; gebeurt de kennisgeving per email, dan is dit de datum van verzending.
                                                                            Indien u de prijsverhoging en/of nieuwe voorwaarden niet aanvaardt, dan moet u ons dat per post meedelen binnen
                                                                            de maand vanaf uw Ontvangst van onze kennisgeving. Deelt u ons uw weigering tijdig mee, dan houdt dit automatisch
                                                                            in dat u uw Contract zonder kosten of schadevergoeding opzegt, om te eindigen op de dag waarop anders de nieuwe
                                                                            prijzen en/of voorwaarden van kracht zouden worden. U dient dan desgevallend tijdig een andere leverancier te kiezen.
                                                                            Afwezigheid van tijdige kennisgeving van uw weigering zal daarentegen betekenen dat u onze nieuwe prijzen en/of
                                                                            voorwaarden aanvaardt</div>
                                                                        <div>5.3. Als u verhuist wordt het Contract verder gezet op uw nieuwe adres en worden de gegevens van de BV in onderling
                                                                            overleg aangepast. Omwille van administratieve redenen dient u ENGIE Electrabel bij verhuis tenminste 20 kalenderdagen vóór de geplande verhuisdatum te verwittigen. Om een correcte slotfactuur te kunnen opmaken, moet u ENGIE
                                                                            Electrabel, uiterlijk 7 kalenderdagen na de effectieve verhuisdatum, de stand van de meterindexen van de door u tot op
                                                                            de verhuisdatum afgenomen energie, waarover u een schriftelijk akkoord dient te hebben met de nieuwe afnemer, en
                                                                            de naam en het adres van de nieuwe afnemer meedelen</div>
                                                                        <div class="mt-3">6. Aansprakelijkheid</div>
                                                                        <div>.1. De netbeheerders staan in voor de continuïteit van de levering van energie en de kwaliteit van de geleverde energie overeenkomstig de bepalingen vervat in de toepasselijke wetgeving en reglementen. Bijgevolg zijn wij daarvoor
                                                                            niet aansprakelijk. In geval van schade ten gevolge van een onderbreking of een beperking van of onregelmatigheid in
                                                                            de levering van uw energie, dient u uw DNB aan te spreken</div>
                                                                        <div>6.2. Onverminderd het voorgaande zijn wij en u enkel aansprakelijk voor rechtstreekse materiële schade die voorvloeit
                                                                            uit zware fout. De vergoeding van deze schade wordt in elk geval beperkt tot een jaarlijks bedrag van 5% van de
                                                                            jaarfactuur (voor elektriciteit of andere producten en diensten) en 3% van de jaarfactuur (voor aardgas). Bij gebreke
                                                                            aan een jaarfactuur wordt het gemiddeld maandbedrag van de beschikbare facturen vermenigvuldigd met 12, of bij
                                                                            gebreke aan beschikbare facturen wordt het overeengekomen maandelijks bedrag van de tussentijdse facturen vermenigvuldigd met 12. ENGIE Electrabel en u zijn jegens elkaar niet aansprakelijk voor indirecte of gevolgschade,
                                                                            productieverlies, winstderving en/of gederfde inkomsten. In het algemeen zijn u en ENGIE Electrabel gehouden alle
                                                                            nodige redelijke maatregelen te nemen tot beperking van uw schade</div>
                                                                        <div>6.3. U en ENGIE Electrabel nemen de verplichting op zich om de bepalingen van dit artikel ter kennis te brengen van
                                                                            uw/onze verzekeraar(s)</div>
            </div>
            <div class="col-6">
                <div class="mt-3">7. Facturatie – interesten en kosten – rechtzetting - ontbinding</div>
                <div>7.1. De opname van uw meterstanden en de berekening van uw energieverbruik gebeurt door de DNB. Deze bezorgt
                    deze gegevens aan ons, zodat wij op basis daarvan uw (maandelijkse of jaarlijkse) factuur kunnen opmaken.</div>
                <div>Indien uw meteropname maandelijks gebeurt, zal ENGIE Electrabel u maandelijkse facturen sturen. Indien ENGIE
                    Electrabel uw maandelijkse verbruiksgegevens niet tijdig ontvangt van de DNB, kan ons geen enkele vertraging in
                    de facturatie verweten worden. ENGIE Electrabel behoudt zich bovendien het recht voor om de maandelijkse factuur
                    desnoods op te maken op basis van een geschat verbruik</div>
                <div>Indien uw meteropname jaarlijks gebeurt, zal ENGIE Electrabel u tussentijdse facturen sturen, waarbij het bedrag van
                    de tussentijdse facturen berekend wordt aan de hand van uw berekend verbruiksprofiel zoals bepaald door uw DNB.
                    De tussentijdse facturen worden verrekend op het moment van uw jaarlijkse factuur. Wij berekenen uw jaarlijkse
                    factuur over een periode van 1 jaar, of een kortere periode indien u het moment van opmaken van de jaarlijkse factuur nog geen volledig jaar klant bij ons bent. Indien wij uw verbruiksgegevens niet onmiddellijk na de meteropname
                    ontvangen, wordt uw verbruik aangevuld met een deel berekend verbruik voor de periode tussen de meteropname en
                    de datum van de jaarlijkse factuur. Dit berekend verbruik wordt op uw volgende jaarlijkse factuur aangepast volgens
                    uw werkelijk verbruik voor die periode</div>
                    <div>7.2. U dient de facturen uiterlijk binnen de 15 kalenderdagen na de Ontvangstdag te betalen.</div>
                    <div>7.3. Het protesteren van een factuur of van elk ander document met betrekking tot de verschuldigde bedragen moet,
                        op straffe van onontvankelijkheid, binnen de 15 dagen na Ontvangst ervan worden bekendgemaakt. Bij gebreke aan
                        protest binnen voormelde termijn, wordt de factuur of elk ander document verondersteld te zijn aanvaard</div>
                    <div>Indien een fout in de facturatie wordt vastgesteld, zullen u en ENGIE Electrabel overleggen om tot een oplossing
                            te komen. U zal in elk geval het niet betwiste deel van de factuur betalen. Indien het betwiste deel van de factuur
                            toch verschuldigd blijkt te zijn, zullen intresten verschuldigd zijn sinds de oorspronkelijke vervaldatum van de factuur,
                            conform art. 7.5</div>
                    <div>7.4. Rechtzetting is mogelijk tot 48 maanden na de uiterste betalingsdatum van de te verbeteren factuur. Facturen
                                kunnen ook daarna worden rechtgezet indien een derde (de DNB bijv.) aan de oorsprong ligt van de verkeerde of
                                laattijdige facturatie.</div>
                    <div>7.5. ENGIE Electrabel heeft het recht om vanaf de vervaldatum van de factuur de betaling van intresten te vorderen,
                                    die berekend worden aan de intrestvoet voorzien in de wet van 2 augustus 2002 betreffende de betalingsachterstand
                                    bij handelstransacties of elke andere bepaling die deze wet zou vervangen. Deze intresten lopen van rechtswege en
                                    zonder ingebrekestelling. ENGIE Electrabel heeft eveneens het recht om in geval van laattijdige betaling een forfaitaire
                                    schadeloosstelling aan te rekenen ten belope van 10% van het openstaande factuurbedrag, met een minimum van 50€</div>
                    <div>7.6. Onverminderd de toepasselijke wettelijke bepalingen, zijn de kosten van herinneringen, ingebrekestellingen en
                                        invorderingen die ingevolge dit Contract door ENGIE Electrabel worden gemaakt, ten uwen laste.</div>
                    <div>7.7. Bij laattijdige betalingen heeft ENGIE Electrabel het recht u te verzoeken een waarborg (m.n. in de vorm van een
                        kaswaarborg) te stellen, die onherroepbaar is gedurende de gehele duur van het Contract verhoogd met 3 maanden,
                        een bestaande waarborg te vermeerderen, en/of voorschotten te vragen. De waarborg en/of voorschotten kunnen ook,
                        in de afwezigheid van laattijdige betalingen, bij de ondertekening van het Contract of tijdens de uitvoering ervan worden gevraagd indien objectieve en specifieke redenen dit rechtvaardigen. Het bedrag van de waarborg wordt berekend
                        per energie en zal gelijk zijn aan 4 maal de waarde van een gemiddeld verschuldigd maandbedrag per energie met een
                        minimum van 250€ per energie, indien uw verbruik gekend is. Indien uw verbruik niet gekend is, bedraagt de waarborg
                        voor elektriciteit 500€ en voor aardgas 550€</div>
                    <div>7.8. ENGIE Electrabel heeft het recht om het Contract te beëindigen, met onmiddellijke ingang en zonder rechterlijke
                        tussenkomst, in geval van niet naleving uwerzijds van één van de essentiële verplichtingen van dit Contract, aan
                        dewelke niet wordt verholpen binnen een termijn van 15 kalenderdagen na ingebrekestelling. Worden beschouwd als
                        essentiële verplichtingen (niet limitatieve opsomming): de betaling van de facturen op hun vervaldatum, het stellen van
                        een garantie of de betaling van de gevraagde voorschotten.</div>
                    <div>Indien wij naar aanleiding van een tekortkoming aan uw betalingsverplichting vragen een waarborg te stellen en/of
                        voorschotten te betalen, en u daar niet tijdig gevolg aan geeft, hebben wij het recht om het Contract zonder nieuwe
                        ingebrekestelling en zonder rechterlijke tussenkomst te beëindigen.</div>
                <div class="mt-3">8. Volmacht</div>
                    <div>U geeft mandaat aan ENGIE Electrabel om in uw naam uw verbruiksgegevens over de laatste 3 jaren op te vragen bij
                        de DNB met betrekking tot het (de) Afnamepunt(en) bepaald in de BV</div>
                <div class="mt-3">9. Vertrouwelijkheid</div>
                    <div>U en ENGIE Electrabel erkennen het vertrouwelijke karakter van de bepalingen van dit Contract. Zonder wederzijdse
                        toestemming zullen deze niet aan derden meegedeeld worden, tenzij hun mededeling vereist wordt door de wet of een
                        publieke overheid. Worden niet als derden beschouwd: de verzekeraar burgerlijke aansprakelijkheid, de eventuele verzekeringsmakelaar, de verwerkers waarvan sprake in artikel 10, partijen die dit Contract van ENGIE Electrabel zouden
                        overnemen ingevolge artikel 11 en de DNB.</div>
                <div class="mt-3">10. Bescherming van uw persoonsgegevens</div>
                    <div>10.1. ENGIE Electrabel is verantwoordelijke voor de verwerking van uw persoonsgegevens. Door aanvaarding van
                        deze Algemene Voorwaarden, geeft u aan kennis te hebben genomen van het Privacybeleid van ENGIE Electrabel,
                        dat u kan terugvinden via de link www.engie-electrabel.be/nl/privacybeleid en dat samengevat is in dit artikel, en
                        dit Privacybeleid te hebben aanvaard. In geval van tegenstrijdigheid tussen dit artikel en het Privacybeleid, heeft dit
                        laatste voorrang. Voor elke vraag aangaande de verwerking van uw persoonsgegevens kan u ons contacteren via
                        data.protection.be@engie.com of via Postbus 10020, 1030 Schaarbeek Brussel Noordstation.</div>
                    <div>10.2. ENGIE Electrabel kan uw persoonsgegevens verwerken om redenen van beheer van onze voormalige,
                        toekomstige en huidige klanten, hetgeen o.a. omvat het beheren en het uitvoeren van uw contracten met ENGIE
                        Electrabel, het aanbieden en de promotie van producten en diensten, de goede werking van de functionaliteiten die de producten en diensten u bieden en het beheren van de toegang tot de Customer Area, de bescherming van de rechten, eigendom of veiligheid van ENGIE Electrabel, van haar klanten of derden (met inbegrip van
                        de strijd tegen fraude, het beheer van geschillen of juridische procedures, het beheer van de wettelijke of reglementaire verplichtingen van ENGIE Electrabel), de boekhouding van ENGIE Electrabel en het beheer van de
                        schuldvorderingen van ENGIE Electrabel (met inbegrip van de inning en/of de overdracht van schuldvorderingen
                        aan incassobureaus). Voor het beheer van onze schuldvorderingen kunnen we de door u overgemaakte persoonsgegevens combineren met informatie (inclusief persoonsgegevens) die we van derden en/of uit publieke bronnen
                        verkregen hebben om de inning te optimaliseren en de meest geschikte inningsmethode te bepalen (bijvoorbeeld
                        minnelijke of gerechtelijke inning). De verwerking is gebaseerd op uw contract met ENGIE Electrabel, op het gerechtvaardigde belang van ENGIE Electrabel (vnl. direct marketing), op de wettelijke verplichtingen van ENGIE
                        Electrabel, of op uw toestemming. In dit laatste geval kan u uw toestemming steeds intrekken</div>
                    <div>10.3. Uw persoonsgegevens worden verwerkt door ons en door de volgende derden om voormelde doelen te verwezenlijken: onze callcenters, de netbeheerders, onze commerciële partners (bijvoorbeeld installateurs van producten
                        verbonden aan onze producten, zoals onder andere verwarming, zonnepanelen, isolatie), incassobureaus en tussenpersonen op wie wij een beroep doen voor het beheer van onze schuldvorderingen, onze verbonden vennootschappen
                        (bijvoorbeeld ENGIE, Sungevity, Cozie) en de bevoegde autoriteiten. Deze derden zijn gevestigd in België, Frankrijk,
                        Zweden, de Verenigde Staten, India en eventueel in andere landen. Indien wij samenwerken met derden die in landen
                        buiten de EER gevestigd zijn, die niet in een adequaat beschermingsniveau voor uw persoonsgegevens voorzien, leggen wij hen contractuele verplichtingen op, goedgekeurd door een bevoegde autoriteit, die een adequaat beschermingsniveau van uw persoonsgegevens garanderen. Indien u een kopie wenst te ontvangen van deze contractuele
                        verplichtingen, gelieve een e-mail te sturen aan data.protection.be@engie.com. Wij behouden ons het recht voor om
                        enige vertrouwelijke informatie en voor u niet relevante informatie weg te laten uit dergelijke kopie. Uw persoonsgegevens worden niet langer bewaard dan noodzakelijk voor voormelde doelen.</div>
                    <div>10.4. U kunt toegang verkrijgen tot uw persoonsgegevens of de rechtzetting of schrapping ervan vragen via www.engie-benelux-privacy.be of door ons een brief te sturen aan ENGIE Electrabel CMT, Simon Bolivarlaan 34, 1000 Brussel.
                        Op dezelfde wijze kan u zich verzetten tegen de verwerking van uw persoonsgegevens of ons vragen om de verwerking
                        ervan te beperken. U kan ons eveneens vragen uw persoonsgegevens rechtstreeks aan een andere leverancier over
                        te maken. Via dezelfde weg kunt u uw toestemming intrekken of ons verwittigen indien u geen direct marketing meer
                        wenst te ontvangen via telefoon, e-mail of post, met aanduiding van het(de) bedoelde communicatiemiddel(en). Indien
                        u een klacht hebt aangaande de verwerking van uw persoonsgegevens kunt u ons contacteren zoals hiervoor vermeld
                        of kunt u terecht bij de Gegevensbeschermingsautoriteit www.privacycommission.be.</div>
                <div class="mt-3">11. Overdracht</div>
                    <div>U en ENGIE Electrabel kunnen dit Contract overdragen aan een derde op voorwaarde dat deze laatste er zich voorafgaandelijk toe verbindt dit Contract na te leven. Voorafgaandelijk aan dergelijke overdracht zal de overdragende
                        partij de andere partij schriftelijk op de hoogte brengen. In geval van overdracht van dit Contract door u, heeft ENGIE
                        Electrabel het recht om voorafgaandelijk een waarborg en/of voorschotten te vragen overeenkomstig de modaliteiten
                        bepaald in artikel 7.7</div>
                <div class="mt-3">12. Toepasselijk recht</div>
                    <div>Elk geschil dat zich voordoet in het kader van huidig Contract is onderworpen aan het Belgisch recht</div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-5">
                Electrabel nv, Simón Bolívarlaan 34, 1000 Brussel, België - BTW BE 0403.170.701 RPR Brussel
            </div>
        </div>
    </div>
</section>


                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        <a href="{{ route('engie.index') }}" class="btn btn-light mt-5">Cancel</a>
                    </form>




@endsection


