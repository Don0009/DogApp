
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

    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pad_services.index') }}">internet tv</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create User</li>
            </ol>
        </nav>
    </div>

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
                            <input type="email" class="form-control" id="rue_1" autocomplete="off"
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
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-3">
                <div class="">Prix par mois TVA excl</div>
            </div>
            <div class="col-3">
                <div class="">Prix par mois TVA 6% incl.**</div>
            </div>
            <div class="col-3">Prix par mois TVA 21% incl.**</div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="oil_installation">
                    <label class="form-check-label" for="inlineCheckbox2">Installation au mazout</label>
                  </div>
            </div>
            <div class="col-3">
                <div class="">16,04 €</div>
            </div>
            <div class="col-3">
                <div class="">17,00 €</div>
            </div>
            <div class="col-3">
                <div class="">19,41 €</div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="gas_installation">
                    <label class="form-check-label" for="inlineCheckbox2">Installation au gaz, poêles au gaz individuels</label>
                  </div>
                </div>
                  <div class="col-3">
                    <div class="">6,60 €</div>
                </div>
                <div class="col-3">
                    <div class="">7,00 €</div>
                </div>
                <div class="col-3">
                    <div class="">7,99 €</div>
                </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="electrical_installation">
                    <label class="form-check-label" for="inlineCheckbox2">Installation à l’électricité</label>
                  </div>
                </div>
                  <div class="col-3">
                    <div class="">6,60 €</div>
                </div>
                <div class="col-3">
                    <div class="">7,00 €</div>
                </div>
                <div class="col-3">
                    <div class="">7,99 €</div>
                </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_are_not_customer_of_engie_electrabel">
                    <label class="form-check-label" for="inlineCheckbox2">Vous n’êtes pas client chez ENGIE Electrabel pour la fourniture d’énergie. Vous devez alors nous payer le montant en une seule fois après que l’entretien ait été effectué</label>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-3">
                <div class="">Prix par mois TVA excl</div>
            </div>
            <div class="col-3">
                <div class="">Prix par mois TVA 6% incl.**</div>
            </div>
            <div class="col-3">Prix par mois TVA 21% incl.**</div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="oil_installation_1">
                    <label class="form-check-label" for="inlineCheckbox2">Installation au mazout</label>
                  </div>
            </div>
            <div class="col-3">
                <div class="">16,04 €</div>
            </div>
            <div class="col-3">
                <div class="">17,00 €</div>
            </div>
            <div class="col-3">
                <div class="">19,41 €</div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="gas_installation_1">
                    <label class="form-check-label" for="inlineCheckbox2">Installation au gaz, poêles au gaz individuels</label>
                  </div>
                </div>
                  <div class="col-3">
                    <div class="">6,60 €</div>
                </div>
                <div class="col-3">
                    <div class="">7,00 €</div>
                </div>
                <div class="col-3">
                    <div class="">7,99 €</div>
                </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="electrical_installation_1">
                    <label class="form-check-label" for="inlineCheckbox2">Installation à l’électricité</label>
                  </div>
                </div>
                  <div class="col-3">
                    <div class="">6,60 €</div>
                </div>
                <div class="col-3">
                    <div class="">7,00 €</div>
                </div>
                <div class="col-3">
                    <div class="">7,99 €</div>
                </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mt-2">Les frais de déplacements sont compris dans le prix, pour autant que l’installateur ne doive pas effectuer des déplacements supplémentaires, sinon ceux-ci s’élèvent à 45,00 €
                    (TVA de 6% incl.) ou 51,37 € (TVA de 21 % incl.). Les déplacements inutiles d’un installateur (par exemple si vous n’êtes pas à votre domicile) vous seront également facturés aux
                    montants mentionnés ci-dessus</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mt-1">Les pièces de rechange ne sont pas comprises dans le prix de l’entretien et vous sont facturées au prix catalogue brut du fabricant qui les a fournies.
                    Installations exclues du présent Contrat: chaudières (à mazout ou au gaz) d’une capacité supérieure à 70 kW, équipement fonctionnant à l’énergie solaire, chambre froide/éléments
                    de réfrigération, installations de conditionnement d’air, systèmes de chauffage pour piscine, pompe à chaleur, réservoir de combustible, systèmes de chauffage au charbon, systèmes
                    de chauffage au bois</div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="">* Pour les poêles à gaz individuels, sont compris dans le service deux poêles de votre choix. Pour les
                            installations de chauffage électrique, sont compris dans le service les installations du living et de la
                            cuisine</div>
                            <div class="">** 6 % pour les habitations privées occupées depuis plus de 10 ans ou 21 % dans les autres cas.</div>
                            <div class="mt-2">3. Durée et exécution</div>
                            <div class="">Le Contrat est conclu pour une durée indéterminée. ENGIE Electrabel vous envoie une confirmation écrite du Contrat. Vous disposez de 14 jours calendriers à compter du jour de réception de la confirmation écrite pour communiquer par écrit que vous y renoncez, sans indication
                                de motif. Ce courrier doit être adressé, pour la Région Wallonne et de Bruxelles-Capitale,
                                à Electrabel, Boîte postale 10070, 5000 Namur, et pour la Région Flamande, à Electrabel,
                                Postbus 10070, 2600 Berchem.</div>
                            <div class="">
                                <label class="form-check-label" for="inlineCheckbox2">(1) Si vous ne souhaitez pas recevoir nos offres promotionnelles, vous pouvez vous y opposer sans frais en
                                    cochant cette case</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="if_you_do_not_wish_to_receive">
                                  </div>
                            </div>
                            <div class="">(2) A remplir uniquement si vous êtes déjà client d’ENGIE Electrabel</div>
                            <div class="">(3) A compléter si différente de l’adresse d’installation.</div>
                            <div class="">(4) Uniquement d’application pour les clients résidentiels</div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="">Signature</div>
                     <div class="row">
                        <div class="col-8">
                            <label for="drawn_up">Etabli en trois exemplaires originaux, à</label>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <input type="name" class="form-control" id="drawn_up" autocomplete="off"
                                       placeholder="Etabli en trois exemplaires originaux, à" name="drawn_up">
                            </div>
                        </div>
                     </div>
                        <div class="row">

                                <div class="col-1">  <label for="the">le</label></div>
                                <div class="col-5">
                                    <input type="date" class="form-control" id="the" autocomplete="off"
                                    placeholder="le" name="the">
                                </div>
                                <div class="col-6">
                                    <label for="">, dont vous reconnaissez avoir reçu un exemplaire.</label>
                                </div>


                        </div>
                        <div class="">
                            Le Client déclare avoir pris connaissance du contenu du présent Contrat, qui est constitué du présent
document, des Conditions Contractuelles ENGIE Electrabel (Home) Maintenance au verso, et de les
accepter. Le Client reconnait que par sa signature il s’engage vis-à-vis d’ENGIE Electrabel et qu’il n’a
pas de dettes ouvertes auprès d’ENGIE Electrabel.
                        </div>
                        <div class="mt-2">
                            Signé par
                        </div>
                        <div class="row mt-5">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="of_which_you_acknowledge">Wim Van de Velde</label>
                                    <label for="of_which_you_acknowledge">Responsable</label>
                                    <label for="of_which_you_acknowledge">Service Clientèle</label>
                                    <input type="name" class="form-control" id="of_which_you_acknowledge" autocomplete="off"
                                           placeholder="le" name="of_which_you_acknowledge">, dont vous reconnaissez avoir reçu un exemplaire.
                                </div>
                            </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="to_the_customer">Pour le Client :</label>
                                        <input type="name" class="form-control" id="to_the_customer" autocomplete="off"
                                               placeholder="Nom :.............[Signature]" name="to_the_customer">
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
            <div class="col-12">
                <div class="">Conditions Contractuelles ENGIE Electrabel (Home) Maintenance (20160401)</div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
        <div class="mt-3">1. Définitions</div>
            <div class="">Consommateur: toute personne physique qui agit à des fins qui n’entrent pas dans le cadre de son activité commerciale, industrielle,
                    artisanale ou libérale</div>
            <div class="">Adresse d’Installation: l’habitation (Consommateur) ou le bâtiment (si vous n’êtes pas un Consommateur) que vous avez communiqué,
                        situé en Belgique, où l’entretien de l’Installation doit être effectué.</div>
            <div class="">Ligne (Home) Services: numéro de téléphone 078 35 33 34 (tarif zonal, éventuellement pas inclus dans un abonnement téléphonique
                    ‘all-in’)</div>
            <div class="">Installation: votre installation de chauffage central (installations intérieures fixes de chauffage) à l’électricité, au gaz ou au mazout ou
                    poêles au gaz individuels</div>
            <div class="">Période d’Entretien: la période durant laquelle l’entretien est effectué. L’entretien d’une Installation au mazout se fait annuellement
                    (Période d’Entretien d’1 an) et l’entretien d’une Installation au gaz ou à l’électricité ou pour les poêles au gaz individuels se fait tous les
                    2 ans (Période d’Entretien de 2 ans). La Période d’Entretien débute le jour de la conclusion du Contrat, à moins qu’il en ait été convenu
                    autrement.</div>
            <div class="">Jour de Réception/Réception: le troisième jour ouvrable après l’envoi d’un document. Un jour ouvrable est un jour de la semaine à
                    l’exception du samedi, du dimanche et des jours fériés légaux</div>
                <div class="">Fiche Technique: le document que vous recevez d’ENGIE Electrabel et via lequel vous devez communiquer les principales caractéristiques de votre Installation.</div>
        <div class="mt-3">2. Objet</div>
            <div class="">2.1. Nous nous engageons à effectuer à l’Adresse d’Installation, durant la Période d’Entretien, l’entretien de votre Installation, conformément aux modalités définies dans les présentes Conditions Contractuelles qui, avec la Fiche Technique, constituent le Contrat. En cas
                de contradiction, les dispositions des présentes Conditions Contractuelles priment.</div>
            <div class="">2.2. Installations exclues du présent Contrat: chaudières (à mazout ou au gaz) d’une capacité supérieure à 70 kW, équipement fonctionnant à l’énergie solaire, chambre froide/éléments de réfrigération, installations de conditionnement d’air, systèmes de chauffage pour
                piscine, pompe à chaleur, réservoir de combustible, systèmes de chauffage au charbon, systèmes de chauffage au bois.</div>
        <div class="mt-3">3. Durée et cessation</div>
            <div class="">3.1. Le Contrat a une durée indéterminée</div>
            <div class="">3.2. Si vous êtes un Consommateur, le Contrat entre en vigueur à la date de la conclusion de celui-ci. Vous avez le droit, dans un délai de
                14 jours calendrier après la date à laquelle le Contrat a été conclu, de nous communiquer que vous ne souhaitez finalement pas conclure
                un Contrat avec nous, sans devoir donner un motif particulier. Si vous le souhaitez, vous pouvez utiliser le formulaire de rétractation mis
                à disposition par ENGIE Electrabel, sans y être obligé</div>
            <div class="">3.3. Si vous n’êtes pas un Consommateur, le Contrat entre en vigueur à la date de la conclusion de celui-ci</div>
            <div class="">3.4. Si vous avez des dettes envers ENGIE Electrabel au moment où vous souhaitez conclure un Contrat, nous pouvons suspendre
                l’entrée en vigueur du Contrat jusqu’à ce que nous recevions le paiement de montants ouverts</div>
            <div class="">3.5. Chaque partie peut mettre fin au Contrat à tout moment par écrit, moyennant un préavis d’un (1) mois</div>
            <div class="">Si vous mettez fin au Contrat, et que l’entretien pour la Période d’Entretien en cours a déjà été effectué, vous serez, le cas échéant,
                redevable à ENGIE Electrabel du solde des montants mensuels restant jusqu’à la fin de la Période d’Entretien en cours. Si vous mettez fin
                au Contrat, et que l’entretien pour la Période d’Entretien en cours n’a pas encore été effectué, ENGIE Electrabel s’engage à rembourser,
                le cas échéant, les montants mensuels que vous avez déjà payé à compter du début de la Période d’Entretien en cours jusqu’à la date
                de fin du Contrat, sous déduction ou après imputation d’un coût administratif de 50€</div>
            <div class="">3.6. Si vous déménagez, vous devez nous en avertir préalablement via la Ligne (Home) Services, via e-mail vers home.electrabel@engie.
                com ou à l’adresse suivante: Electrabel, BP 109, 2600 Berchem. Le Contrat se poursuit à votre nouvelle adresse. Le cas échéant, la
                Période d’Entretien et/ou le montant que vous devez payer, seront adaptés à l’Installation de votre nouvelle adresse. Le cas échéant, le
                solde des montants mensuels restant dus pour la Période d’Entretien en cours vous sera facturé à ce moment</div>
        <div class="mt-3">4. Nos obligations</div>
            <div class="">4.1. Nous nous engageons:</div>
            <div class="">- à planifier l’entretien de votre Installation en tenant compte de la Période d’Entretien, et à en faire le suivi, en concertation avec vous;</div>
            <div class="">- à vous informer à l’avance du mois durant lequel l’entretien aura lieu. Celui-ci peut être modifié de commun accord. La date exacte à
                laquelle l’entretien sera effectué, sera convenue entre vous et l’installateur;</div>
            <div class="">- à faire effectuer l’entretien en faisant appel à des installateurs qualifiés</div>
            <div class="">4.2. L’entretien aura lieu conformément à la législation applicable et comportera notamment :</div>
            <div class="">- Pour une Installation au gaz naturel:</div>
            <div class="">- le ramonage de la cheminée;</div>
            <div class="">- le nettoyage de la chaudière (brûleur, chambre de combustion, boîte à fumée et conduit d’évacuation);</div>
            <div class="">- le réglage du brûleur;</div>
            <div class="">- le contrôle du niveau d’eau;</div>
            <div class="">- le remplissage de l’attestation légale de nettoyage et de combustion;</div>
            <div class="">- l’inclusion du métré</div>
            <div class="">- Pour une Installation au mazout:</div>
            <div class="">- le ramonage de la cheminée;</div>
            <div class="">- le nettoyage de la chaudière (brûleur, chambre de combustion, boîte à fumée et conduit d’évacuation);</div>
            <div class="">- le réglage du brûleur;</div>
            <div class="">- remplacement du gicleur si nécessaire;</div>
            <div class="">- le contrôle du niveau d’eau;</div>
            <div class="">- le remplissage complet de l’attestation légale de nettoyage et de combustion;</div>
            <div class="">- l’inclusion du métré.</div>
            <div class="">- Pour une Installation à l’électricité:</div>
            <div class="">- le nettoyage et le contrôle des appareils de chauffage individuels, et</div>
            <div class="">- la vérification des branchements électriques.</div>
            <div class="">4.3. L’entretien sera effectué les jours ouvrables entre 8h et 16h30. Nous vous communiquerons la période de la journée (le matin ou
                    l’après-midi) durant laquelle l’installateur devrait se présenter chez vous.</div>
            <div class="">4.4. Si vous avez des réclamations au sujet du ENGIE Electrabel (Home) Maintenance, vous pouvez contacter notre ligne (Home) Services, envoyer un e-mail à home.electrabel@engie.com ou vous pouvez introduire une plainte par écrit à l’adresse suivante: Electrabel,
                        BP 109, 2600 Berchem.</div>
        <div class="mt-3">5. Vos obligations</div>
            <div class="">5.1. Vous vous engagez:</div>
            <div class="">à nous informer des principales caractéristiques de votre Installation (marque, type, année de construction, type d’énergie, …). Vous
                devez nous communiquer ces dernières informations par le biais de la Fiche Technique;</div>
            <div class="">si votre installation est adaptée ou remplacée, vous devez nous en informer immédiatement via la ligne (Home) Services ou le signaler
                par écrit via e-mail à home.electrabel@engie.com ou à l’adresse suivante: Electrabel, BP 109, 2600 Berchem;</div>
                <div class="">à donner accès à l’Adresse d’Installation à l’installateur que nous envoyons afin qu’il puisse effectuer l’entretien;</div>
                <div class="">à signer la fiche d’intervention complétée par l’installateur, ainsi que les documents d’entretien, même en cas d’Installation reconnue
                    non-conforme. Dans ce dernier cas, vous autoriserez l’installateur à prendre une photo de votre Installation afin de procéder à une
                    évaluation objective de l’état de votre Installation. Si nous vous offrons la possibilité de signer la fiche d’intervention moyennant une signature digitale, apposée sur un écran d’ordinateur avec un stylo spécial, son usage tient lieu de preuve en justice de votre acceptation</div>
            <div class="mt-3">6. Sécurité et Installations non-conformes</div>
                <div class="">6.1. Si, lors de l’intervention, l’installateur constate que votre Installation est dans un mauvais état tel qu’aucun entretien ne peut être
                    effectué sans mettre en danger la sécurité, nous ne sommes pas tenus d’effectuer l’entretien demandé et nous pouvons mettre fin
                    immédiatement au Contrat sans le moindre dédommagement. Dans ce cas, nous vous rembourserons les paiements mensuels que vous
                    avez éventuellement déjà effectués, sous déduction ou après imputation d’un coût administratif de 50€</div>
                <div class="">6.2. Si l’installateur constate que votre Installation ne répond pas (ou plus) aux prescriptions légales et qu’elle est donc non-conforme, il
                    est tenu de prendre immédiatement les mesures légales requises. Il existe 3 types d’Installations non-conformes:</div>
                <div class="">- Type 1: l’Installation montre une non-conformité qui devra être réparée pour le prochain entretien de l’Installation. L’entretien peut être
                    effectué. Vous vous engagez à ce que la réparation requise soit effectuée pour le prochain entretien</div>
                <div class="">- Type 2: l’Installation présente une non-conformité dont la gravité ne rend pas immédiatement indispensable la coupure de l’alimentation en gaz mais qui est néanmoins suffisamment importante pour qu’il y soit remédié le plus rapidement possible, c.-à-d. dans un
                    délai de 3 mois maximum. L’entretien peut être effectué. Vous vous engagez à ce que la réparation soit effectuée dans les 3 mois.
                    ENGIE Electrabel se réserve le droit de mettre fin au Contrat avec effet immédiat, sans être redevable du moindre dédommagement,
                    si vous ne remplissez pas cette obligation. Dans ce cas, nous vous facturerons, le cas échéant, le solde des montants mensuels restant
                    dus jusqu’à la fin de la Période d’Entretien en cours, sous déduction ou après imputation d’un coût administratif de 50€.</div>
                <div class="">- Type 3: l’Installation présente une non-conformité dont la gravité rend immédiatement indispensable la coupure de l’alimentation en
                    gaz, et ce jusqu’à ce qu’il ait été remédié à la (aux) défaillance(s) représentant un danger grave. L’installateur devra immédiatement
                    interrompre, entièrement ou partiellement, l’alimentation en gaz de l’Installation. Dans ce cas, ENGIE Electrabel se réserve le droit de
                    mettre fin au Contrat avec effet immédiat, sans être redevable du moindre dédommagement. Dans ce cas, nous vous rembourserons
                    les paiements mensuels que vous avez éventuellement déjà effectués, sous déduction ou après imputation du coût d’un déplacement
                    inutile ainsi que d’un coût administratif de 50€</div>
                <div class="">En cas de non-conformité de type 1 ou type 2, un autocollant jaune est apposé sur l’Installation non-conforme. En cas de non-conformité
                    de type 3, l’autocollant est rouge.</div>
                <div class="">6.3. ENGIE Electrabel peut, si vous le souhaitez, vous proposer, via l’installeur, le support afin de mettre votre Installation en conformité.
                    L’installateur peut établir une offre à cette fin. Une telle intervention ne relève pas du présent Contrat</div>
            <div class="mt-3">7. Prix, facturation et paiement</div>
                <div class="">7.1. Si vous êtes client chez ENGIE Electrabel pour la fourniture d’énergie, vous devez nous payer, durant la Période d’Entretien, un montant
                    mensuel fixe pour l’exécution de l’entretien, comme mentionné ci-dessous. Le montant mensuel sera mentionné séparément sur votre</div>
                <div class="mt-4">Electrabel sa, Boulevard Simón Bolívar 34, 1000 Bruxelles, TVA BE 0403.170.701 RPM Bruxelles</div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <div class="">facture d’énergie. Le cas échéant, votre domiciliation sera adaptée en conséquence. Le montant mensuel varie selon l’Installation concernée et selon le taux de TVA applicable (6% pour les habitations privées occupées depuis plus de 10 ans et 21% dans les autres cas).</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="">facture d’énergie. Le cas échéant, votre domiciliation sera adaptée en conséquence. Le montant mensuel varie selon l’Installation concernée et selon le taux de TVA applicable (6% pour les habitations privées occupées depuis plus de 10 ans et 21% dans les autres cas).</div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3">
                        <div class=""></div>
                    </div>
                    <div class="col-3">
                        <div class="">Prix par mois
                            TVA excl.</div>
                    </div>
                    <div class="col-3">
                        <div class="">Prix par mois TVA
                            6% incl</div>
                    </div>
                    <div class="col-3">
                        <div class="">Prix par mois TVA
                            21% incl.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="">Installation au mazout</div>
                    </div>
                    <div class="col-3">
                        <div class="">16,04 €</div>
                    </div>
                    <div class="col-3">
                        <div class="">17,00 €</div>
                    </div>
                    <div class="col-3">
                        <div class="">19,41 €</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="">Installation au gaz, poêles au gaz individuels ou Installation à l’électricité</div>
                    </div>
                    <div class="col-3">
                        <div class="">6,60 €</div>
                    </div>
                    <div class="col-3">
                        <div class="">7,00 €</div>
                    </div>
                    <div class="col-3">
                        <div class="">7,99 €</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="">7.2 Si vous n’êtes pas client chez ENGIE Electrabel pour la fourniture d’énergie, vous devez nous payer le montant en une seule fois après
                            que l’entretien ait été effectué, comme mentionné ci-dessous. Ce montant varie selon l’Installation concernée et selon le taux de TVA
                            applicable (6% pour les habitations privées occupées depuis plus de 10 ans et 21% dans les autres cas).</div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3">
                        <div class=""></div>
                    </div>
                    <div class="col-3">
                        <div class="">Prix par entretien
                            TVA excl</div>
                    </div>
                    <div class="col-3">
                        <div class="">Prix par entretien
                            TVA 6% incl</div>
                    </div>
                    <div class="col-3">
                        <div class="">Prix par entretien
                            TVA 21% incl</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="">Installation au mazout</div>
                    </div>
                    <div class="col-3">
                        <div class="">192,48 €</div>
                    </div>
                    <div class="col-3">
                        <div class="">204,03 €</div>
                    </div>
                    <div class="col-3">
                        <div class="">232,90 €</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="">Installation au gaz, poêles au gaz individuels ou Installation à l’électricité</div>
                    </div>
                    <div class="col-3">
                        <div class="">232,90 €</div>
                    </div>
                    <div class="col-3">
                        <div class="">167,90 € </div>
                    </div>
                    <div class="col-3">
                        <div class="">167,90 € </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="">7.3. Le prix mentionné ci-dessus comprend un entretien annuel (d’une Installation au mazout) ou un entretien tous les 2 ans (d’une
                            Installation au gaz ou à l’électricité ou de poêles au gaz individuels). Concernant les poêles au gaz individuels, seuls deux poêles de
                            votre choix seront compris dans le prix. Pour une Installation à l’électricité, seuls les appareils de chauffage dans le séjour et la cuisine
                            sont compris dans le prix. Si vous voulez effectuer l’entretien d’appareils de chauffage qui ne relèvent pas du présent Contrat, ceci peut
                            être discuté directement avec l’installateur. Le coût supplémentaire sera mentionné sur la fiche d’intervention et vous sera facturé par
                            ENGIE Electrabel</div>
                        <div class="">7.4. Les frais de déplacements sont compris dans le prix, pour autant que l’installateur ne doive pas effectuer des déplacements supplé-
                            mentaires, sinon ceux-ci s’élèvent à 45,00 € (TVA de 6% incl.) ou 51,37 € (TVA de 21 % incl.). Les déplacements inutiles d’un installateur
                            (par exemple si vous n’êtes pas à votre domicile) vous seront également facturés aux montants mentionnés ci-dessus.</div>
                        <div class="">7.5. Les pièces de rechange ne sont pas comprises dans le prix de l’entretien et vous sont facturées au prix catalogue brut du fabricant
                                qui les a fournies.</div>
                        <div class="">7.6. Nos factures sont payables dans un délai de quatorze (14) jours calendrier après Réception. Vous pouvez uniquement payer par
                            virement ou domiciliation. Si vous n’êtes pas client d’ENGIE Electrabel pour la fourniture d’énergie, ces montants mensuels seront repris
                            dans une facture séparée envoyée 1 mois après l’entretien</div>
                        <div class="">7.7. Si vous ne payez pas votre facture à temps, nous vous envoyons un rappel. Si vous ne payez pas à temps suite à notre rappel, nous
                            vous envoyons une mise en demeure. Si vous n’avez toujours pas payé votre facture après l’échéance mentionnée dans la mise en
                            demeure, ENGIE Electrabel se réserve le droit de suspendre l’exécution du présent Contrat. Les frais de rappels et de mise en demeure
                            sont à votre charge. En cas de défaut de paiement, des intérêts peuvent vous être comptés, au taux d’intérêt légal, à partir de la date
                            d’échéance de la facture.</div>
                        <div class="">Si vous avez droit à un paiement de notre part, en conséquence d’une erreur de facturation de notre part, vous avez également droit à des
                            intérêts au taux d’intérêt légal. Dans ce cas, les frais de vos lettres de rappel et de mise en demeure sont à notre charge.</div>
                        <div class="">7.8. Nous pouvons à tout moment apporter des modifications de prix et/ou de conditions contractuelles qui ne sont pas en votre défaveur
                                à condition de vous en informer au préalable par le biais de documents que vous recevez à domicile ou par e-mail et/ou par le biais de
                                notre site Internet www.engie-electrabel.be. Nous pouvons appliquer une augmentation du prix et/ou une modification des conditions
                                contractuelles à condition de vous en informer au moins deux (2) mois à l’avance par e-mail. En cas de notification par voie postale, la
                                notification est réputée avoir lieu le Jour de Réception; en cas de notification par e-mail, elle a lieu à la date d’envoi. Si vous n’acceptez
                                pas l’augmentation de prix et/ou les nouvelles conditions contractuelles, vous êtes tenu de nous en informer par écrit dans le mois
                                à compter de la Réception de notre notification. Le fait de nous notifier votre refus dans le délai imparti implique automatiquement
                                la résiliation, sans frais ni indemnité, de votre Contrat, lequel prendra fin le jour où les nouveaux prix et/ou les nouvelles conditions
                                contractuelles auraient dû prendre effet. L’absence de notification de votre refus dans le délai imparti sera par contre considérée comme
                                acceptation des nouveaux prix et/ou des nouvelles conditions contractuelles</div>
                    <div class="mt-3">8. Garantie</div>
                        <div class="">Nous garantissons les pièces conformément aux modalités définies par le fabricant qui a fourni les pièces. Si vous êtes un Consommateur, les dispositions de cet article ou toute autre stipulation contractuelle ne portent pas préjudice aux droits que vous avez en
                            vertu de la législation régissant la vente des biens de consommation telle que prévue aux articles 1649bis à 1649octies du Code civil.</div>
                    <div class="mt-3">9. Protection des données personnelles</div>
                        <div class="">9.1. ENGIE Electrabel est responsable du traitement de vos données personnelles. Le traitement de vos données personnelles a pour
                            but principal l’exécution de votre Contrat avec ENGIE Electrabel et, en lien avec celui-ci, la gestion de et l’accès à la partie de notre/nos
                            site(s) internet réservée à nos clients, conformément à la législation en matière de protection de la vie privée et du commerce électronique. Nous pouvons également utiliser vos données personnelles pour vous informer au sujet de nos (nouveaux) produits et services,
                            promotions et actions spéciales dont nous pensons qu’ils pourraient vous intéresser. Toutes les données que nous rassemblons peuvent
                            être combinées entre elles pour mieux adapter nos produits et services, promotions et actions spéciales à vos besoins personnels.
                            Par ailleurs, nous pouvons également utiliser vos données personnelles pour suivre, évaluer et continuer à améliorer nos produits et
                            services, promotions et actions spéciales, notamment dans le cadre d’études de marché générales ou spécifiques.</div>
                        <div class="">9.2. Vos données personnelles peuvent également être collectées et traités par nos sous-traitants. Il peut s’agir de sociétés liées à
                            ENGIE Electrabel (art. 11 du Code des sociétés), de nos call centers, de nos intermédiaires commerciaux, des gestionnaires de réseau,
                            des autorités publiques compétentes et autres partenaires. Les personnes précédentes n’ont accès qu’aux données qui sont strictement
                            nécessaires à l’exercice de leur fonction</div>
                        <div class="">9.3. Vous pouvez accéder à vos données ou en demander la correction en nous adressant une lettre ou un e-mail accompagné d’une
                            photocopie de votre carte d’identité. De la même manière, vous pouvez nous avertir gratuitement si vous ne souhaitez plus recevoir nos
                            offres promotionnelles par téléphone, e-mail ou poste en y indiquant les moyens de communication visés.</div>
                    <div class="mt-3">10. Communication électronique</div>
                        <div class="">10.1. En souscrivant votre Contrat en ligne ou si vous choisissez de recevoir les informations relatives à votre/vos Contrat(s) avec ENGIE
                            Electrabel par e-mail, vous marquez votre accord avec le fait qu’ ENGIE Electrabel vous envoie toutes les informations relatives à votre/
                            vos Contrat(s) (électricité, gaz et/ou d’autres produits et/ou services), dans la mesure du possible, par e-mail. Cela signifie que vous
                            ne recevrez plus ces informations sur papier par voie postale. Ces informations peuvent être relatives, entre autres, aux prix et/ou aux
                            conditions contractuelles de votre/vos Contrat(s) et à d’éventuelles modifications de celles-ci, ainsi qu’à vos données personnelles et/
                            ou à un déménagement</div>
                        <div class="">10.2. En souscrivant votre Contrat en ligne ou si vous choisissez de recevoir vos factures et informations qui s’y rapportent via e-mail, ENGIE Electrabel vous envoie vos factures et informations qui s’y rapportent, y compris les rappels, dans la mesure du possible, par e-mail.
                            Cela signifie que vous ne recevrez plus vos factures et informations qui s’y rapportent, y compris les rappels, sur papier par voie postale,
                            et que la facture électronique est la seule qui soit officielle. Vous vous assurez du téléchargement et de la conservation de vos factures.
                            ENGIE Electrabel garde vos factures à disposition pendant deux (2) ans sur l’Espace Client ENGIE Electrabel. Si vous combinez domiciliation et réception des factures par e-mail, vous ne recevez pas de factures intermédiaires par e-mail, uniquement votre décompte.</div>
                        <div class="">10.3. Si, suite aux articles précédents, vous recevez, via e-mail, des informations concernant votre/vos Contrat(s) et/ou vos factures et
                            informations s’y rapportant, y compris les rappels, vous vous engagez à lire régulièrement vos e-mails et à veiller à ce que la capacité de
                            votre mailbox soit suffisante pour recevoir ces e-mails. Vous veillerez à ce que les e-mails d’ENGIE Electrabel ne soient pas considérés
                            comme du spam. En cas de changement d’adresse e-mail, vous en tiendrez ENGIE Electrabel directement informée via l’Espace Client
                            ENGIE Electrabel. Si ENGIE Electrabel constate qu’elle ne peut pas vous envoyer les e-mails, elle peut décider unilatéralement d’envoyer
                            à nouveau ces informations sur papier par voie postale. Via votre Espace Client, vous avez la possibilité à tout moment de demander à
                            ce que, pour le futur, ces informations vous soient à nouveau envoyées sur papier par voie postale.</div>
                    <div class="mt-3">11. Responsabilité</div>
                        <div class="">11.1. Les dispositions du présent article s’appliquent sans préjudice de dispositions légales impératives qui prévaudraient.</div>
                        <div class="">11.2. ENGIE Electrabel est uniquement responsable pour (i) les dommages matériels découlant directement d’une faute, et (ii) le décès
                            ou les blessures corporelles résultant d’un acte ou d’une omission. Sont exclus: les pertes de profits, de revenus, d’économies espérées,
                            de temps, de manque à gagner, de perte de données et des dommages immatériels et indirects</div>
                        <div class="">11.3. Il est de votre responsabilité de faire effectuer l’entretien de votre Installation dans les délais légaux. ENGIE Electrabel garantit
                                uniquement qu’à partir de l’exécution du 1er entretien relevant du présent Contrat, les entretiens suivants seront planifiés dans la
                                Période d’Entretien applicable</div>
                        <div class="mt-3">12. Force majeure</div>
                        <div class="">12.1. ENGIE Electrabel ne peut être tenue responsable de retards ou de manquements dans l’exécution du présent Contrat qui résultent
                            de circonstances indépendantes de sa volonté ou d’événements imprévus qu’elle n’aurait pu éviter (cas de force majeure)</div>
                            <div class="">12.2. Il faut entendre par “cas de force majeure” tout événement ou circonstance empêchant ou limitant ENGIE Electrabel pour le respect de ses obligations conformément aux dispositions du présent Contrat, en dehors de son contrôle raisonnable et qu’elle ne pouvait
                                raisonnablement éviter ou maîtriser. Les cas suivants sont constitutifs de force majeure dans la mesure où ils relèvent de la définition
                                susmentionnée (énumération non limitative) : incendie, tremblement de terre, glace, ouragan, tornade, chutes de pluie ou de neige
                                exceptionnellement fortes ou tempêtes ou toute autre catastrophe naturelle; actes de guerre ou hostilités (déclarés ou non), invasion,
                                conflit armé ou acte d’un ennemi étranger, embargo, révolution, trouble de l’ordre public, rébellion, révolte civile, sabotage, terrorisme
                                ou menace de tels actes; grève, conflits sociaux et événements similaires</div>
                                <div class="mt-3">13. Autres conditions</div>
                                <div class="">13.1. Si nous vous offrons la possibilité d’accepter ces conditions contractuelles en faisant usage d’un code unique que vous activez par
                                    voie téléphonique, une application internet, un formulaire internet ou un email, le fait que vous en ayez fait usage constitue une preuve
                                    valable en droit de votre acceptation</div>
                                <div class="">13.2. Nous avons le droit de céder le Contrat à un tiers à condition qu’il présente les mêmes garanties que nous. Nous vous informerons
                                    en cas de cession.</div>
                                <div class="">13.3. Le droit belge s’applique</div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
////////////////////////////////////////
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
                                            Veuillez renvoyer ce document à la Partner Line : par e-mail à partnerlinefr.electrabel@engie.com, par la poste : Code Réponse Electrabel - Partner Line, DA 852 - 546 - 3, 2600 Berchem ou par fax au 03 280 02 07
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
                                                <div class="row">
                                                    <div class="col-1">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="residential_customer">
                                                    </div>
                                                    <div class="col-11"> <label class="form-check-label" for="inlineCheckbox2">Si client résidentiel:</label></div>
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
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <label for="first_last_name">Nom/Prénom</label>
                                                        </div>
                                                        <div class="col-10">
                                                            <input type="name" class="form-control" id="first_last_name" autocomplete="off"
                                                            placeholder="Nom/Prénom" name="first_last_name">
                                                        </div>
                                                    </div>


                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <label for="customer_no">N° de Client</label>
                                                    </div>
                                                    <div class="col-10">
                                                        <input type="number" class="form-control" id="customer_no" autocomplete="off"
                                                        placeholder="N° de Client" name="customer_no">
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="date_of_birth">Date de naissance</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="date" class="form-control" id="date_of_birth" autocomplete="off"
                                                           placeholder="Date de naissance" name="date_of_birth">
                                                </div>


                                            </div>

                                        </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="place_of_birth">Lieu de naissance</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="date" class="form-control" id="place_of_birth" autocomplete="off"
                                                       placeholder="Lieu de naissance" name="place_of_birth">
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="professional_client_1">
                                                    </div>
                                                    <div class="col-9">
                                                        <label class="form-check-label" for="inlineCheckbox2">Si client professionnel:</label>
                                                </div>


                                            </div>

                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="company_name">Nom de la société</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="name" class="form-control" id="company_name" autocomplete="off"
                                                           placeholder="Date de naissance" name="company_name">
                                                </div>


                                            </div>

                                        </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="legal_status">Forme juridique</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="name" class="form-control" id="legal_status" autocomplete="off"
                                                       placeholder="Lieu de naissance" name="legal_status">
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="customer_no_1">N° de Client</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="form-control" id="customer_no_1" autocomplete="off"
                                                        placeholder="N° de Client" name="customer_no_1">
                                                </div>


                                            </div>

                                        </div>

                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="code_nace">Code NACE</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="name" class="form-control" id="code_nace" autocomplete="off"
                                                       placeholder="Code NACE" name="code_nace">
                                                </div>


                                            </div>

                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="tva_be">TVA BE</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="name" class="form-control" id="tva_be" autocomplete="off"
                                                        placeholder="TVA BE" name="tva_be">
                                                </div>


                                            </div>

                                        </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="rpm">RPM</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="name" class="form-control" id="rpm" autocomplete="off"
                                                        placeholder="RPM" name="rpm">
                                                </div>


                                            </div>

                                        </div>
                                        </div>
                                    </div>
                                    <div class="">Données de contact</div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="phone">Tél</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="number" class="form-control" id="phone" autocomplete="off"
                                                        placeholder="Tél" name="phone">


                                            </div>

                                        </div>

                                        </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label for="gsm">GSM</label>
                                                    </div>
                                                    <div class="col-9">
                                                        <input type="name" class="form-control" id="gsm" autocomplete="off"
                                                       placeholder="GSM" name="gsm">


                                            </div>

                                        </div>

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

                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        <a href="{{ route('pad_services.index') }}" class="btn btn-light mt-5">Cancel</a>
                    </form>




@endsection



