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

    <form class="forms-sample" method="POST" action="{{ route('pad_services.store') }}">
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
                                            Contrat pour ENGIE Electrabel (Home) Maintenance
                                        </div>
                                        <div>
                                            Clients résidentiels et professionnels
                                        </div>
                                        <div class="send_this_document" style="font-size: 8px">
                                            Veuillez renvoyer ce document à la Partner Line : par e-mail à partnerlinefr.electrabel@pad_services.com, par la poste : Code Réponse Electrabel - Partner Line, DA 852 - 546 - 3, 2600 Berchem ou par fax au 03 280 02 07
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
            <div class="col-md-8">
                        <div class="customer_data">
                            Contrat entre (Données du client) (1)

                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="residential_customer">
                                                <label class="form-check-label" for="inlineCheckbox2">residential customer:</label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="madame">
                                                <label class="form-check-label" for="inlineCheckbox2">Madame</label>
                                              </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="monsieur">
                                                <label class="form-check-label" for="inlineCheckbox2">Monsieur</label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                                <div class="form-group">
                                                    <label for="first_last_name">Nom/Prénom</label>
                                                    <input type="name" class="form-control" id="first_last_name" autocomplete="off"
                                                           placeholder="Nom/Prénom" name="first_last_name">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                                <div class="form-group">
                                                    <label for="customer_no">N° de Client</label>
                                                    <input type="number" class="form-control" id="customer_no" autocomplete="off"
                                                           placeholder="N° de Client" name="customer_no">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                                <div class="form-group">
                                                    <label for="date_of_birth">Date de naissance</label>
                                                    <input type="date" class="form-control" id="date_of_birth" autocomplete="off"
                                                           placeholder="Date de naissance" name="date_of_birth">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="place_of_birth">Lieu de naissance</label>
                                                <input type="date" class="form-control" id="place_of_birth" autocomplete="off"
                                                       placeholder="Lieu de naissance" name="place_of_birth">
                                            </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="professional_client_1">
                                                <label class="form-check-label" for="inlineCheckbox2">Si client professionnel:</label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                                <div class="form-group">
                                                    <label for="company_name">Nom de la société</label>
                                                    <input type="name" class="form-control" id="company_name" autocomplete="off"
                                                           placeholder="Date de naissance" name="company_name">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="legal_status">Forme juridique</label>
                                                <input type="name" class="form-control" id="legal_status" autocomplete="off"
                                                       placeholder="Lieu de naissance" name="legal_status">
                                            </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                                <div class="form-group">
                                                    <label for="customer_no_1">N° de Client</label>
                                                    <input type="number" class="form-control" id="customer_no_1" autocomplete="off"
                                                           placeholder="N° de Client" name="customer_no_1">
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="code_nace">Code NACE</label>
                                                <input type="name" class="form-control" id="code_nace" autocomplete="off"
                                                       placeholder="Code NACE" name="code_nace">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="tva_be">TVA BE</label>
                                                <input type="name" class="form-control" id="tva_be" autocomplete="off"
                                                       placeholder="TVA BE" name="tva_be">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="rpm">RPM</label>
                                                <input type="name" class="form-control" id="rpm" autocomplete="off"
                                                       placeholder="RPM" name="rpm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">Données de contact</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="phone">Tél</label>
                                                <input type="number" class="form-control" id="phone" autocomplete="off"
                                                       placeholder="Tél" name="phone">
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

                                    <div class="row">
                                        <div class="col-12">
                                      <div class="row">
                                          <div class="col-2">
                                                <label for="email">E-mail</label>

                                          </div>
                                          <div class="col-10">
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" autocomplete="off"
                                                       placeholder="E-mail" name="email">
                                            </div>
                                          </div>
                                      </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_wish_to_be_kept_informed">
                                                <label class="form-check-label" for="inlineCheckbox2">Vous souhaitez être tenu au courant par e-mail du lancement de nouveaux produits, services, promotions et
                                                    autres actions d’ENGIE Electrabel</label>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_wish_to_receive_communications">
                                                <label class="form-check-label" for="inlineCheckbox2">Vous souhaitez recevoir les communications concernant votre (vos) contrat(s) avec ENGIE Electrabel par e-mail
                                                    (voir aussi les Conditions Spécifiques)</label>
                                              </div>
                                        </div>
                                    </div>

                                    <div class="">
                                        Adresse d’expédition (3)
                                    </div>

                                    <div class="row">
                                        <div class="col-1">
                                              <label for="rue">Rue</label>

                                        </div>
                                        <div class="col-11">
                                          <div class="form-group">
                                              <input type="name" class="form-control" id="rue" autocomplete="off"
                                                     placeholder="E-mail" name="rue">
                                          </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-2">
                                            <div class="form-group">
                                             <div class="row">
                                                <div class="col-3">
                                                    <label for="noo">N°</label>
                                                </div>
                                                <div class="col-9">
                                                    <input type="name" class="form-control" id="noo" autocomplete="off"
                                                    placeholder="N°" name="noo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="col-2">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="bte">Bte</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="name" class="form-control" id="bte" autocomplete="off"
                                                        placeholder="Bte" name="bte">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label for="etage">Etage</label>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="name" class="form-control" id="etage" autocomplete="off"
                                                            placeholder="Etage" name="etage">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-5">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="appartement">Appartement</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="name" class="form-control" id="appartement" autocomplete="off"
                                                        placeholder="Appartement" name="appartement">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-5">
                                                        <label for="code_postal">Code postal</label>
                                                    </div>
                                                    <div class="col-7">
                                                        <input type="name" class="form-control" id="code_postal" autocomplete="off"
                                                        placeholder="Code postal" name="code_postal">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <label for="localité">Localité</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="name" class="form-control" id="localité" autocomplete="off"
                                                        placeholder="Code postal" name="localité">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        Dénommée ci après « vous » ou « le Client »
                                    </div>
                                </div>
                            </div>
                        </div>
             </div>
             <div class="col-md-4">
                 <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-4">
                                    <label for="localité">Document ID:</label>
                                </div>
                                <div class="col-8">
                                    <input type="name" class="form-control" id="localité" autocomplete="off"
                                    placeholder="Document ID" name="document_id">
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                 <div class="row">
                     <div class="col-12">
                         <div class="">Et Electrabel sa ayant son siège</div>
                         <div class="mt-2">Boulevard Simón Bolívar 34, 1000 Bruxelles - TVA BE 0403.170.701 RPM Bruxelles</div>
                     </div>
                 </div>

                 <div class="row">
                    <div class="col-7">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <input type="name" class="form-control" id="localité" autocomplete="off"
                                    placeholder="Représentée par:www.engie-electrabel.be • Ligne Home Services : 078 35 33 34" name="représentée_par">
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
    <div class="container-fluid">
        <div class="row">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="">1. Adresse d’installation</div>
            <div class="row">
                <div class="col-2">
                    <div class="row">
                        <div class="col-2">
                            <label for="rue_1">Rue</label>

                      </div>
                      <div class="col-10">
                        <div class="form-group">
                            <input type="name" class="form-control" id="rue_1" autocomplete="off"
                                   placeholder="E-mail" name="rue_1">
                        </div>
                      </div>
                   </div>
                </div>



                <div class="col-2">
                    <div class="form-group">
                     <div class="row">
                        <div class="col-2">
                            <label for="noo_1">N°</label>
                        </div>
                        <div class="col-10">
                            <input type="name" class="form-control" id="noo_1" autocomplete="off"
                            placeholder="N°" name="noo_1">
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-2">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-2">
                                <label for="bte_1">Bte</label>
                            </div>
                            <div class="col-10">
                                <input type="name" class="form-control" id="bte_1" autocomplete="off"
                                placeholder="Bte" name="bte_1">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-2">
                    <div class="form-group">
                        <div class="row">
                            <div class="row">
                                <div class="col-2">
                                    <label for="etage_1">Etage</label>
                                </div>
                                <div class="col-10">
                                    <input type="name" class="form-control" id="etage_1" autocomplete="off"
                                    placeholder="Etage" name="etage_1">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-2">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="appartement_1">Appartement</label>
                            </div>
                            <div class="col-9">
                                <input type="name" class="form-control" id="appartement_1" autocomplete="off"
                                placeholder="Appartement" name="appartement_1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <label for="code_postal_1">Code postal</label>
                            </div>
                            <div class="col-7">
                                <input type="name" class="form-control" id="code_postal_1" autocomplete="off"
                                placeholder="Code postal" name="code_postal_1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="localité_1">Localité</label>
                            </div>
                            <div class="col-9">
                                <input type="name" class="form-control" id="localité_1" autocomplete="off"
                                placeholder="Code postal" name="localité_1">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label for="year_of_first_use">Année de première utilisation du bâtiment suite à sa construction (4)</label>
                                </div>
                                <div class="col-6">
                                    <input type="name" class="form-control" id="year_of_first_use" autocomplete="off"
                                    placeholder="Code postal" name="year_of_first_use">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">2. Service que vous souhaitez commander</div>
                    <div class="">Vous optez pour le service ENGIE Electrabel (Home) Maintenance. Celui-ci vous offre un entretien tous les deux ans de vos installations intérieures fixes de chauffage au gaz naturel
                        ou de poêles à gaz individuels ou de chauffage électrique*, ou un entretien tous les ans pour les installations de chauffage au mazout.</div>
                        <div class="mt-2">Veuillez indiquer ci-dessous votre choix.</div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_are_a_customer_of_engie">
                    <label class="form-check-label" for="inlineCheckbox2">Vous êtes client chez ENGIE Electrabel pour la fourniture d’énergie. Le service vous est facturé par le biais d’un montant mensuel fixe sur votre facture d’énergie, durant la période d’entretien.</label>
                  </div>
            </div>
        </div>
    </div>
</div>





                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        <a href="{{ route('pad_services.index') }}" class="btn btn-light mt-5">Cancel</a>
                    </form>




@endsection


