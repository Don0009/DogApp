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
                                            Contract elektriciteit en/of aardgas <span>- professionele klanten</span>
                                        </div>
                                        <div class="send_this_document" style="font-size: 8px">
                                            Verstuur dit document naar Partner Line: via e-mail naar partnerlinenl.electrabel@engie.com, per post: Antwoordcode Electrabel – Partner Line, DA 852 – 546 – 3, 2600 Berchem of via fax naar 03 280 02 07
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
                            Gegevens van de klant (1)

                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="company_name">Firmanaam</label>
                                                <input type="name" class="form-control" id="company_name" autocomplete="off"
                                                       placeholder="Firmanaam" name="company_name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="legal_form">Juridische vorm</label>
                                                <input type="name" class="form-control" id="legal_form" autocomplete="off"
                                                       placeholder="Juridische vorm" name="legal_form">
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
                                                <label for="name">Naam</label>
                                                <input type="name" class="form-control" id="name" autocomplete="off"
                                                       placeholder="Naam" name="name">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first_name">Voornaam</label>
                                                <input type="name" class="form-control" id="first_name" autocomplete="off"
                                                       placeholder="Voornaam" name="first_name">
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
                                                <label for="client_number">Klantnummer</label>
                                                <input type="name" class="form-control" id="client_number" autocomplete="off"
                                                       placeholder="Klantnummer" name="client_number">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="nace_code"> NACE code</label>
                                                <input type="name" class="form-control" id="nace_code" autocomplete="off"
                                                       placeholder=" NACE code" name="nace_code">
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
                                                <label for="tel">Tel</label>
                                                <input type="name" class="form-control" id="tel" autocomplete="off"
                                                       placeholder="Tel" name="tel">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="gsm">Gsm</label>
                                                <input type="name" class="form-control" id="gsm" autocomplete="off"
                                                       placeholder="Gsm" name="gsm">
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
                                <label class="form-check-label" for="inlineCheckbox2">U wenst de correspondentie met ENGIE Electrabel over uw contract(en) via e-mail te ontvangen
                                    (zie ook de Bijzondere Voorwaarden)</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_wish_to_be_informed">
                                <label class="form-check-label" for="inlineCheckbox2">U wenst via e-mail op de hoogte te blijven van de producten, diensten en promoties van ENGIE Electrabel
                                    inzake energie, energie-efficiëntie, productie en opslag van energie, onderhoud en pechbijstand, smart
                                    producten en e-mobility en van haar partners inzake verwarming, isolatie en zonnepanelen.</label>
                              </div>




                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="btw_be">BTW BE</label>
                                                <input type="name" class="form-control" id="btw_be" autocomplete="off"
                                                       placeholder="Klantnummer" name="btw_be">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="rpr">RPR</label>
                                                <input type="name" class="form-control" id="rpr" autocomplete="off"
                                                       placeholder="RPR" name="rpr">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <label for="school_id" class="form-label">Verzendadres <span> (Te vervolledigen indien verschillend van leveringsadres.)</span></label>


                            <div class="section">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="company_name_1">Firmanaam</label>
                                                <input type="name" class="form-control" id="company_name_1" autocomplete="off"
                                                       placeholder="Firmanaam" name="company_name_1">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="legal_form_1">Juridische vorm</label>
                                                <input type="name" class="form-control" id="legal_form_1" autocomplete="off"
                                                       placeholder="Juridische vorm" name="legal_form_1">
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
                                                <label for="name_1">Naam</label>
                                                <input type="name" class="form-control" id="name_1" autocomplete="off"
                                                       placeholder="Naam" name="name_1">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="first_name_1">Voornaam</label>
                                                <input type="name" class="form-control" id="first_name_1" autocomplete="off"
                                                       placeholder="Voornaam" name="first_name_1">
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
                                                <label for="street">Straat</label>
                                                <input type="name" class="form-control" id="street" autocomplete="off"
                                                       placeholder="Straat" name="street">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="no">Nr</label>
                                                <input type="name" class="form-control" id="no" autocomplete="off"
                                                       placeholder="Nr" name="no">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="bus">Bus</label>
                                                <input type="name" class="form-control" id="bus" autocomplete="off"
                                                       placeholder="Bus" name="bus">
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
                                                <label for="postcode">Postcode</label>
                                                <input type="name" class="form-control" id="postcode" autocomplete="off"
                                                       placeholder="Postcode" name="postcode">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="place">Plaats</label>
                                                <input type="name" class="form-control" id="place" autocomplete="off"
                                                       placeholder="Plaats" name="place">
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
                                         <label for="place">Electrabel nv vertegenwoordigd door:</label>
                                         <input type="name" class="form-control" id="electrabel_sa_1" autocomplete="off"
                                                placeholder="Electrabel nv vertegenwoordigd door:" name="electrabel_sa_1">
                                         <input type="name" class="form-control mt-2" id="electrabel_sa_2" autocomplete="off"
                                                placeholder="Electrabel nv vertegenwoordigd door:" name="electrabel_sa_2">
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
                                            <label for="place">Leveringsadres (Afnamepunt)</label>
                                             <label for="street_1">Straat</label>
                                             <input type="name" class="form-control" id="street_1" autocomplete="off"
                                                    placeholder="Straat" name="street_1">
                                         </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-3">

                                         <div class="form-group">
                                             <label for="no_1">Nr</label>
                                             <input type="name" class="form-control" id="no_1" autocomplete="off"
                                                    placeholder="Nr" name="no_1">
                                         </div>
                                        </div>
                                        <div class="col-3">

                                            <div class="form-group">
                                                <label for="floor">Verdieping</label>
                                                <input type="name" class="form-control" id="floor" autocomplete="off"
                                                       placeholder="Verdieping" name="floor">
                                            </div>
                                           </div>

                                           <div class="col-3">

                                            <div class="form-group">
                                                <label for="bus_1">Bus</label>
                                                <input type="name" class="form-control" id="bus_1" autocomplete="off"
                                                       placeholder="Bus" name="bus_1">
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
                                             <label for="place">Postcode</label>
                                             <input type="name" class="form-control" id="post_code" autocomplete="off"
                                                    placeholder="Postcode" name="post_code">
                                         </div>
                                        </div>


                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="place_1">Plaats</label>
                                                <input type="name" class="form-control" id="place_1" autocomplete="off"
                                                       placeholder="Plaats" name="place_1">
                                            </div>

                                           </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="electricity">EAN-nr. elektriciteit:</label>
                                                <input type="name" class="form-control" id="electricity" autocomplete="off"
                                                       placeholder="EAN-nr. elektriciteit" name="electricity">
                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="natural_gas">EAN-nr. aardgas:</label>
                                                <input type="name" class="form-control" id="natural_gas" autocomplete="off"
                                                       placeholder="EAN-nr. aardgas" name="natural_gas">
                                            </div>


                                        </div>


                                    </div>

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="excluding_night">EAN-nr. exclusief nacht:</label>
                                                <input type="name" class="form-control" id="excluding_night" autocomplete="off"
                                                       placeholder="EAN-nr. exclusief nacht" name="excluding_night">
                                            </div>

                                        </div>



                                    </div>


                                      <div class="row">

                                        <div class="col-6">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="gemengd_professioneel_verbruik">
                                                <label class="form-check-label" for="inlineCheckbox2">gemengd professioneel verbruik</label>
                                              </div>
                                        </div>

                                        <div class="col-6">

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="only_professional_use">
                                                <label class="form-check-label" for="inlineCheckbox2">uitsluitend professioneel verbruik</label>
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
                VOORWERP, DUUR EN PRIJS (In geval van meerkeuze, gelieve slechts één vakje aan te kruisen)
            </div>
        </div>
        <div class="col-12">
            <div>Contract tussen <span>de klant</span> en <span>Electrabel nv,</span> met hoofdkantoor te Simon Bolivarlaan 34 in 1000 Brussel, btw BE 0403.170.701 RPR Brussel. Hierna respectievelijk ‘u’ of ‘de klant’
                en ‘wij’ of ‘ENGIE Electrabel’ genoemd.</div>
        </div>
        <div class="col-12">
            e aanbiedingen, bijhorende prijsvoorwaarden en diensten worden toegelicht in de Bijzondere Voorwaarden en de prijsfiches waarvan u erkent kennis te hebben genomen. Met
uw contract kunt u elektriciteit en/of aardgas afnemen bij ENGIE Electrabel voor het hoger vermelde Afnamepunt
        </div>
        <div class="col-12">
            Indien er een of meerdere meters moeten worden geopend/gesloten, worden de kosten hiervoor aangerekend aan de Klant.
        </div>
        <div class="col-12">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="in_case_of_moving_house">
                <label class="form-check-label" for="inlineCheckbox2">In geval van verhuis, gelieve het bijgevoegde ‘Energieovernamedocument’ in te vullen en te ondertekenen.</label>
              </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="customer">
                KLANT
            </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_contract">
                                <label class="form-check-label" for="inlineCheckbox2">U hebt al een contract bij ENGIE Electrabel</label>
                              </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_do_not_yet">
                                <label class="form-check-label" for="inlineCheckbox2">U hebt nog geen contract bij ENGIE Electrabel</label>
                              </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_have_never_had_energy">
                                <label class="form-check-label" for="inlineCheckbox2">U hebt nog nooit een energiecontract gehad</label>
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
                ELEKTRICITEIT   <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="clear_selection">
                    <label class="form-check-label" for="inlineCheckbox2">Selectie wissen</label>
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
                                <label class="form-check-label" for="inlineCheckbox2">U verhuist of bouwt</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_an_electricity_contract">
                                <label class="form-check-label" for="inlineCheckbox2">U hebt al een elektriciteitscontract bij een andere leverancier
                                    Naam van de leverancie</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing">
                                <label class="form-check-label" for="inlineCheckbox2">U wilt uw bestaande elektriciteitscontract wijzigen</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_a_contract_for_an_extra">
                                <label class="form-check-label" for="inlineCheckbox2">U wilt een contract voor een extra energievorm</label>
                              </div>
                        </div>

                        <div class="col-9">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_move_or_build_1">
                                        <label class="form-check-label" for="inlineCheckbox2">U verhuist of bouwt</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_an_electricity_contract_1">
                                        <label class="form-check-label" for="inlineCheckbox2">U hebt al een elektriciteitscontract bij een andere leverancier
                                            Naam van de leverancie</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing_1">
                                        <label class="form-check-label" for="inlineCheckbox2">U wilt uw bestaande elektriciteitscontract wijzigen</label>
                                      </div>
                                </div>

                                <div class="col-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_move_or_build_2">
                                        <label class="form-check-label" for="inlineCheckbox2">U verhuist of bouwt</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_an_electricity_contract_2">
                                        <label class="form-check-label" for="inlineCheckbox2">U hebt al een elektriciteitscontract bij een andere leverancier
                                            Naam van de leverancie</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing_2">
                                        <label class="form-check-label" for="inlineCheckbox2">U wilt uw bestaande elektriciteitscontract wijzigen</label>
                                      </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing_3">
                                        <label class="form-check-label" for="inlineCheckbox2">Optie
                                            Gree</label>
                                      </div>
                                </div>
                                <div class="col-3">
                               <div class="row">
                                   <div class="col-12">
                                    <label class="form-check-label" for="inlineCheckbox2">Voorschot (€) (4)</label>
                                   </div>
                                   <div class="col-12">
                                    <div class="form-group">
                                        <label for="place_2">Plaats</label>
                                        <input type="name" class="form-control" id="place_2" autocomplete="off"
                                               placeholder="Plaats" name="place_2">
                                    </div>
                                   </div>
                               </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label for="place">Gewenste startdatum van uw nieuwe elektriciteitscontract:</label>
                                    <div class="input-group mb-3">
                                        <input type="date" class="form-control" id="desired_start_date" autocomplete="off"
                                               placeholder="Gewenste startdatum van uw nieuwe elektriciteitscontract" name="desired_start_date">
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
                AARDGAS   <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="clear_selection_1">
                    <label class="form-check-label" for="inlineCheckbox2">Selectie wissen</label>
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
                                <label class="form-check-label" for="inlineCheckbox2">U verhuist of bouwt</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_an_electricity_contract_3">
                                <label class="form-check-label" for="inlineCheckbox2">U hebt al een elektriciteitscontract bij een andere leverancier
                                    Naam van de leverancie</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing_4">
                                <label class="form-check-label" for="inlineCheckbox2">U wilt uw bestaande elektriciteitscontract wijzigen</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_a_contract_for_an_extra_1">
                                <label class="form-check-label" for="inlineCheckbox2">U wilt een contract voor een extra energievorm</label>
                              </div>
                        </div>

                        <div class="col-9">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_move_or_build_4">
                                        <label class="form-check-label" for="inlineCheckbox2">U verhuist of bouwt</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_an_electricity_contract_4">
                                        <label class="form-check-label" for="inlineCheckbox2">U hebt al een elektriciteitscontract bij een andere leverancier
                                            Naam van de leverancie</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing_5">
                                        <label class="form-check-label" for="inlineCheckbox2">U wilt uw bestaande elektriciteitscontract wijzigen</label>
                                      </div>
                                </div>

                                <div class="col-5">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_move_or_build_5">
                                        <label class="form-check-label" for="inlineCheckbox2">U verhuist of bouwt</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_already_have_an_electricity_contract_5">
                                        <label class="form-check-label" for="inlineCheckbox2">U hebt al een elektriciteitscontract bij een andere leverancier
                                            Naam van de leverancie</label>
                                      </div>

                                      <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="you_want_to_change_your_existing_6">
                                        <label class="form-check-label" for="inlineCheckbox2">U wilt uw bestaande elektriciteitscontract wijzigen</label>
                                      </div>
                                </div>

                                <div class="col-3">
                               <div class="row">
                                   <div class="col-12">
                                    <label class="form-check-label" for="inlineCheckbox2">Voorschot (€) (4)</label>
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
                                    <label for="place">Gewenste startdatum van uw nieuwe elektriciteitscontract:</label>
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
                            <label class="form-check-label" for="inlineCheckbox2">Tarief ‘leegstaande woning’ (geldig voor de twee energieën, geen forfaits en onbepaalde duur)</label>
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
                        BETALINGSMODALITEITEN
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-4">
                        U opteert voor
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="monthly">
                            <label class="form-check-label" for="inlineCheckbox2">maandelijks</label>
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="bimonthly">
                            <label class="form-check-label" for="inlineCheckbox2">tweemaandelijks</label>
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="quarterly_advance">
                            <label class="form-check-label" for="inlineCheckbox2">driemaandelijks voorschot</label>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        U wenst uw facturen en de bijbehorende correspondentie te ontvangen
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="by_e_mail">
                            <label class="form-check-label" for="inlineCheckbox2">via e-mail (zie ook de Bijzondere voorwaarden)</label>
                          </div>
                    </div>
                    <div class="col-6">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="per_post">
                            <label class="form-check-label" for="inlineCheckbox2">per post</label>
                          </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        U betaalt
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="by_bank_transfer">
                                    <label class="form-check-label" for="inlineCheckbox2">per overschrijving</label>
                                  </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="via_domiciliëring">
                                    <label class="form-check-label" for="inlineCheckbox2">via domiciliëring</label>
                                  </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="through_a_new">
                                    <label class="form-check-label" for="inlineCheckbox2">via een nieuw</label>
                                  </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="directdebit">domiciliëring met het rekeningnummer IBAN</label>
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
                                        ENGIE Electrabel stuurt u een schriftelijke bevestiging van uw contract(en). Vanaf de Ontvangstdag van de schriftelijke bevestiging heeft u
                                        14 kalenderdagen om ons schriftelijk mee te delen dat u ervan afziet, zonder opgave van redenen. Uw schrijven dient gericht te zijn voor het
                                        Vlaams Gewest aan Electrabel, Postbus 10070, 2600 Berchem en voor het Waals en het Brussels Hoofdstedelijk Gewest aan Electrabel, Boîte
                                        Postale 10070, 5000 Namur. U kunt hiervoor gebruikmaken van de modeltekst voor herroeping die u terugvindt in de schriftelijke bevestiging
                                        van het (de) Contract(en), maar u bent hiertoe niet verplicht. Als u ons verzocht heeft om de levering van elektriciteit en/of aardgas te laten
                                        beginnen zonder het einde van de herroepingstermijn af te wachten, en u alsnog gebruik maakt van uw herroepingsrecht, betaalt u een
                                        bedrag dat overeenstemt met de reeds door ENGIE Electrabel geleverde elektriciteit en/of aardgas in overeenstemming met het Wetboek van
                                        economisch recht. Dit bedrag wordt berekend op basis van de totale prijs zoals vastgelegd in het contract en de door de distributienetbeheerder
                                        gevalideerde verbruiksgegevens.
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
                            <label for="drawn_up">Opgemaakt in drie originele exemplaren, te</label>
                            <div class="input-group ">
                                <input type="name" class="form-control" id="drawn_up" autocomplete="off"
                                       placeholder="Opgemaakt in drie originele exemplaren, te" name="drawn_up">
                        </div>
                    </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                            <label for="of_which_the_customer">op</label>
                            <div class="input-group ">
                                <input type="date" class="form-control" id="of_which_the_customer" autocomplete="off"
                                       placeholder=" " name="of_which_the_customer">waarvan de klant erkent één exemplaar te hebben ontvangen
                        </div>
                    </div>
                      </div>
                      <div class="row">
                          <div class="col-12 mt-5">
                            De Klant verklaart kennis genomen te hebben van de inhoud van dit (deze) Contract(en) dat (die)
                            bestaat (bestaan) uit dit document, de Algemene Voorwaarden voor professionele klanten, de
                            Bijzondere Voorwaarden en de prijsfiches, alsook deze te accepteren. Met zijn handtekening erkent
                            de klant dat hij zich verbindt tegenover ENGIE Electrabel en dat hij geen openstaande schulden heeft
                            bij ENGIE Electrabel.
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-12 mt-4">
                            Ondertekend door
                          </div>
                      </div>
                      <div class="row">
                          <div class="">
                              <div class="">
                                Voor Electrabel nv:
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
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="You+do_not_wish_to_receive_commercial_communications">
                <label class="form-check-label" for="inlineCheckbox2">U wenst geen commerciële communicatie van ENGIE Electrabel te ontvangen. (2) Enkel in te vullen indien u al ENGIE Electrabel klant bent. (3) Uw Contract wordt nadien verdergezet voor telkens 1 jaar of 3 jaar in geval van Easy3 pro vast. Tenzij anders vermeld in de Algemene Voorwaarden, kan u uw Contract(en)
                    op ieder moment opzeggen, zonder verbrekingsvergoeding, mits het respecteren van een schriftelijke opzeg van 1 maand. (4) Enkel in te vullen voor een nieuwe klant, nieuw adres of voor bestaande klanten die kiezen voor een nieuwe energie. (5) We zullen u per brief een mandaat toesturen. Bezorg het ons ondertekend
                    en gedateerd terug. Zonder dit document kunnen we uw domiciliëring niet activeren.</label>
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
            </div>
        </div>
    </div>
</section>


                        <button type="submit" class="btn btn-primary mt-5">Submit</button>
                        <a href="{{ route('engie.index') }}" class="btn btn-light mt-5">Cancel</a>
                    </form>




@endsection


