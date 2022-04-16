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
            <li class="breadcrumb-item"><a href="{{ route('energy_transfer_document.index') }}">internet tv</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create User</li>
        </ol>
    </nav>
</div>

<form class="forms-sample" method="POST" action="{{ route('energy_transfer_document.store') }}">
@csrf
<section>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 style="text-align: center">Energieovernamedocument Elektriciteit en/of aardgas</h1>
            <h1 style="text-align: center"> Productle-installatie hernieuwbare energle </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="">Dit document dient om de meterstanden te noteren.
            </div>
            <div class="">Te gebruiken in geval van een verhuis verkoop of verhuur van een </div>
            <div class="">woning, een enchtschesiding, overliding enz.</div>
            <b>opgelet:dit document is geen contract bij een energieleverancier</b>
            <div class="">_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _</div>

            <div class="">
                <li>Vul dit document met beide partijen in, <b>in twee exemplaren.</b>(elke partij krijgt een exemplaar)</li>
                <li>Beide exemplaren worden <b>ondertekend door de twee partijen.</b></li>
                <li><b>Bewaar allebei een origineel exemplaar</b>en <b>stuur zo snel mogelijk een kopie naar uw energieleverancier(s).</b></li>
            </div>
        </div>
    </div>
</div>
</section>
<section>
  <div class="container-fluid ">
      <div class="row grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
        <div class="col-4 ">

            <label for="date_acquisition">Datum Overname</label>
        </div>
        <div class="col-8">
            <div class="form-group">

                <input type="date" class="form-control" id="date_acquisition" autocomplete="off"
                       placeholder="Datum Overname" name="date_acquisition" required>
            </div>
        </div>
            </div>
        </div>
      </div>
      <div class="row grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
        <div class="col-4">
            <label for="street">Adres waarop de verandering</label>
            <label for="">van toepassing is</label>
        </div>
        <div class="col-8">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">

                        <input type="name" class="form-control" id="street" autocomplete="off"
                               placeholder="straat:" name="street" required>
                    </div>
                    <div class="form-group">

                        <input type="name" class="form-control" id="plaat" autocomplete="off"
                               placeholder="Plaats:" name="plaat" required>
                    </div>
                </div>
              <div class="col-6">
                  <div class="row">
                    <div class="col-6">
                        <div class="form-group">

                            <input type="name" class="form-control" id="nr_4" autocomplete="off"
                                   placeholder="Nr:" name="nr_4" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">

                            <input type="name" class="form-control" id="bus" autocomplete="off"
                                   placeholder="Bus:" name="bus" required>
                        </div>
                    </div>
                    <div class="form-group">

                        <input type="name" class="form-control" id="postcode" autocomplete="off"
                               placeholder="Postcode:" name="postcode" required>
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
<section grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
    <div class=""><b>GEGEVENS ELEKTRICITEIT</b></div>
    <div class="row">
        <div class="col-4">
            <label for="">EAN elektriciteit(code van 18 cijfers vermeld op uw energiefactuur)</label>
        </div>
        <div class="col-8">
                    <div class="form-group">

                        <input type="number" class="form-control" id="street" autocomplete="off"
                               placeholder="5  4 " name="ean_electricity" required>
                    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            metertype (kruis aan wat van toepassing is en vul enkel de corresponding lijn in.)
        </div>
        <div class="col-9">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                  <b>Meter Nummer</b>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <b>Meter Type</b>
                </div>
            </div>
        </div>
</div>
    </div>
    <div class="row">
        <div class="col-2">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="single_meter" required>
                <label class="form-check-label" for="inlineCheckbox2">Enkelvoudige meter</label>
              </div>
        </div>
        <div class="col-9">
        <div class="row">
            <div class="col-6">
                <div class="form-group">

                    <input type="number" class="form-control" id="meter_nummer" autocomplete="off"
                           placeholder="Nr:..................................................................." name="nr" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">

                    <input type="number" class="form-control" id="street" autocomplete="off"
                           placeholder="" name="meter_type" required>
                </div>
            </div>
        </div>
</div>
    </div>

    <div class="row">
        <div class="col-2">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="nachtmeter" required>
                <label class="form-check-label" for="inlineCheckbox2">Tweevoudige of Dag/Nachtmeter</label>
              </div>
        </div>
        <div class="col-9">
        <div class="row">
            <div class="col-6">
                <div class="form-group">

                    <input type="number" class="form-control" id="meter_nummer" autocomplete="off"
                           placeholder="Nr:..................................................................." name="nr_1" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">

                    <input type="number" class="form-control" id="street" autocomplete="off"
                           placeholder="DAG, PIEK(HI)" name="dag" required>
                           <input type="number" class="form-control" id="street" autocomplete="off"
                           placeholder="NACHI, DAL (LO)" name="nachi" required>
                </div>
            </div>
        </div>
</div>
    </div>


    <div class="row">
        <div class="col-2">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="exclusief_nachtmeter" required>
                <label class="form-check-label" for="inlineCheckbox2">Exclusief nachtmeter</label>
              </div>
        </div>
        <div class="col-9">
        <div class="row">
            <div class="col-6">
                <div class="form-group">

                    <input type="number" class="form-control" id="meter_nummer" autocomplete="off"
                           placeholder="Nr:..................................................................." name="nr_2" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">

                    <input type="number" class="form-control" id="space" autocomplete="off"
                           placeholder="" name="space" required>
                </div>
            </div>
        </div>
</div>
    </div>
    <div class="row">
        <div class="col-2">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="digital_meter" required>
                <label class="form-check-label" for="inlineCheckbox2">Digitale meter of bidirectionele meter</label>
              </div>
        </div>
        <div class="col-9">
        <div class="row">
            <div class="col-12">
                <div class="form-group">

                    <input type="number" class="form-control" id="meter_nummer" autocomplete="off"
                           placeholder="Nr:..................................................................." name="nr_3" required>
                 <div class="row">
                    <div class="col-6 mt-3">
                        <input type="number" class="form-control" id="street" autocomplete="off"
                        placeholder="DAG, PIEK(HI)" name="dag_1" required>
                        <input type="number" class="form-control mt-3" id="street" autocomplete="off"
                        placeholder="NACHI, DAL (LO)" name="nachi_1" required>
                    </div>
                    <div class="col-6 mt-3">
                        <input type="number" class="form-control" id="street" autocomplete="off"
                        placeholder="DAG, PIEK(HI)" name="dag_2" required>
                        <input type="number" class="form-control mt-3" id="street" autocomplete="off"
                        placeholder="NACHI, DAL (LO)" name="nachi_2" required>
                    </div>
                 </div>

                </div>
            </div>

        </div>
</div>
    </div>

    <div class="row">
        <div class="col-4 mt-1">
            <label for="">Heeftu u een budgetmeter waarbij u op voorhand betaalt voor uw verbuik?</label>
        </div>
        <div class="col-1">
            <div class="form-check">
                <input class="form-check-input" type="radio" value="0" name="nee" id="nee" >
                <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -3px">
                  Ja:
                </label>
              </div>
        </div>
        <div class="col-1">
            <div class="form-check">
                <input class="form-check-input" type="radio" value="1" name="nee" id="nee" >
                <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -3px">
                  Nee:
                </label>
              </div>
        </div>
    </div>
        </div>
    </div>
</section>

<section>
    <div class="rowgrid-margin stretch-card mt-5">
        <div class="card">
            <div class="card-body">
        <div class=""><b>GEGEVENS AARDGAS</b></div>
        <div class="col-2 mt-3">
            <label for="">EAN aardgas (code van 18 cijfers, vermeld op uw energlefactuur): </label>
        </div>
        <div class="col-10">
            <div class="form-check">
                <input type="number" class="form-control " id="do_you_have_budget" autocomplete="off"
                placeholder="5       4" name="do_you_have_budget" required>
              </div>
        </div>

    </div>
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-2 mt-3">
                  <label for="">Meter Nummer:</label>
                </div>
                <div class="col-10">
                  <div class="form-check">

                      <input type="number" class="form-control " id="meter_nummer" autocomplete="off"
                      placeholder="Meter Stand" name="meter_nummer" required>
                    </div>
                </div>
            </div>
                  </div>

        <div class="col-6">
  <div class="row">
      <div class="col-2 mt-3">
        <label for="" style="margin-left: 30px">Meter Stand:</label>
      </div>
      <div class="col-10">
        <div class="form-check">

            <input type="number" class="form-control " id="meter_stand" autocomplete="off"
            placeholder="Meter Stand" name="meter_stand" required>
          </div>
      </div>
  </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4 mt-1">
            <label for="">Heeftu u een budgetmeter waarbij u op voorhand betaalt voor uw verbuik?</label>
        </div>
        <div class="col-1">
            <div class="form-check">
                <input class="form-check-input" type="radio" value="0" name="nee_1" id="nee_1" >
                <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -3px">
                  Ja:
                </label>
              </div>
        </div>
        <div class="col-1">
            <div class="form-check">
                <input class="form-check-input" type="radio" value="1" name="nee_1" id="nee_1" >
                <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -3px">
                  Nee:
                </label>
              </div>
        </div>
    </div>
        </div>
    </div>
</section>


<section>
    <div class="row">
        <div class=""><b>GEGEVENS VERTREKKENDE KLANT</b></div>
        <div class="col-6">
            <div class="row">
                <div class="col-3 mt-2">
                    <label for="">Aanspreking:</label>
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="0" name="nee_2" id="nee_2" >
                        <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -3px">
                          Dhr.:
                        </label>
                      </div>
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="1" name="nee_2" id="nee_2" >
                        <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -3px">
                          Mevr.
                        </label>
                      </div>
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="2" name="nee_2" id="nee_2" >
                        <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -3px">
                          Bedrijf
                        </label>
                      </div>
                </div>
            </div>
        </div>


            <div class="col-6">
                <div class="row">
                    <div class="col-2 mt-3">
                      <label for="" style="margin-left: 10px">Ondernemingsnr./btw-nr.(indien van toepassing):</label>
                    </div>
                    <div class="col-10">
                      <div class="form-check">

                          <input type="number" class="form-control " id="ondernemingsnr" autocomplete="off"
                          placeholder="Ondernemingsnr./btw-nr.(indien van toepassing):" name="ondernemingsnr" required>
                        </div>
                    </div>
                </div>
          </div>

    </div>

    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-2 mt-3">
                  <label for="" style="margin-left: 10px">Voornaam:</label>
                </div>
                <div class="col-10">
                  <div class="form-check">

                      <input type="number" class="form-control " id="first_name" autocomplete="off"
                      placeholder="Voornaam" name="first_name" required>
                    </div>
                </div>
            </div>
      </div>
      <div class="col-6">
        <div class="row">
            <div class="col-2 mt-3">
              <label for="" style="margin-left: 60px">Naam:</label>
            </div>
            <div class="col-10">
              <div class="form-check">

                  <input type="number" class="form-control " id="name_3" autocomplete="off"
                  placeholder="Naam" name="name_3" required>
                </div>
            </div>
        </div>
  </div>
    </div>
    <div class="row">
                <div class="col-1 mt-3">
                  <label for="" style="margin-left: 10px">Bedrijfsnaam(indien van toepassing):</label>
                </div>
                <div class="col-11">
                  <div class="form-check">

                      <input type="name" class="form-control " id="company_name" autocomplete="off"
                      placeholder="Bedrijfsnaam(indien van toepassing)" name="company_name" required>
                    </div>
                </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-2 mt-3">
                  <label for="" style="margin-left: 20px">Tel/gsm:</label>
                </div>
                <div class="col-10">
                  <div class="form-check">

                      <input type="name" class="form-control " id="tel" autocomplete="off"
                      placeholder="Tel/gsm" name="tel" required>
                    </div>
                </div>
    </div>
        </div>

        <div class="col-6">
            <div class="row">
                <div class="col-2 mt-3">
                  <label for="" style="margin-left: 50px">E-mail:</label>
                </div>
                <div class="col-10">
                  <div class="form-check">

                      <input type="email" class="form-control " id="e_mail" autocomplete="off"
                      placeholder="Bedrijfsnaam(indien van toepassing)" name="e_mail" required>
                    </div>
                </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1 mt-3">
            <div class=""><b>Facturatieadres</b></div>
        </div>
            <div class="col-5">
                <div class="row">

                    <div class="col-12">
                      <div class="form-check">

                          <input type="name" class="form-control " id="straat" autocomplete="off"
                          placeholder="Straat" name="straat" required>
                          <input type="name" class="form-control mt-3" id="plaat_1" autocomplete="off"
                          placeholder="plaat" name="plaat_1" required>
                        </div>
                    </div>
        </div>
            </div>
            <div class="col-6">
                <div class="row">

                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">

                                    <input type="name" class="form-control " id="nr_5" autocomplete="off"
                                    placeholder="Nr.:" name="nr_5" required>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">

                                    <input type="name" class="form-control " id="bus_2" autocomplete="off"
                                    placeholder="Bus.:" name="bus_2" required>
                                  </div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="form-check">

            <input type="name" class="form-control " id="postcode_2" autocomplete="off"
            placeholder="Postcode:" name="postcode_2" required>
          </div>

            </div>

    </div>

    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-2 mt-3">
                  <label for="" style="margin-left: 10px">Leverancier elektriciteit:</label>
                </div>
                <div class="col-10">
                  <div class="form-check">

                      <input type="name" class="form-control " id="supplier_electricity" autocomplete="off"
                      placeholder="Leverancier elektriciteit" name="supplier_electricity" required>
                    </div>
                </div>
    </div>
        </div>

        <div class="col-6">
            <div class="row">
                <div class="col-2 mt-3">
                  <label for="" style="margin-left: 50px">Leverancier aardgas:</label>
                </div>
                <div class="col-10">
                  <div class="form-check">

                      <input type="name" class="form-control " id="natural_gas" autocomplete="off"
                      placeholder="Leverancier aardgas" name="natural_gas" required>
                    </div>
                </div>
    </div>
        </div>
    </div>
</section>

<section>
    <div class="row">
        <div class=""><b>GEGEVENS OVERNEMER</b></div>
        <div class="col-6">
            <div class="row">
                <div class="col-3 mt-2">
                    <label for="">Aanspreking:</label>
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="0" name="nee_3" id="nee_3" >
                        <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -3px">
                          Dhr.:
                        </label>
                      </div>
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="1" name="nee_3" id="nee_3" >
                        <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -3px">
                          Mevr.
                        </label>
                      </div>
                </div>
                <div class="col-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="2" name="nee_3" id="nee_3" >
                        <label class="form-check-label" for="flexRadioDefault1" style="margin-left: -3px">
                          Bedrijf
                        </label>
                      </div>
                </div>
            </div>
        </div>


            <div class="col-6">
                <div class="row">
                    <div class="col-2 mt-3">
                      <label for="" style="margin-left: 10px">Ondernemingsnr./btw-nr.(indien van toepassing):</label>
                    </div>
                    <div class="col-10">
                      <div class="form-check">

                          <input type="number" class="form-control " id="ondernemingsnr_1" autocomplete="off"
                          placeholder="Ondernemingsnr./btw-nr.(indien van toepassing):" name="ondernemingsnr_1" required>
                        </div>
                    </div>
                </div>
          </div>

    </div>

    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-2 mt-3">
                  <label for="" style="margin-left: 10px">Voornaam:</label>
                </div>
                <div class="col-10">
                  <div class="form-check">

                      <input type="name" class="form-control " id="first_name_1" autocomplete="off"
                      placeholder="Voornaam" name="first_name_1" required>
                    </div>
                </div>
            </div>
      </div>
      <div class="col-6">
        <div class="row">
            <div class="col-2 mt-3">
              <label for="" style="margin-left: 60px">Naam:</label>
            </div>
            <div class="col-10">
              <div class="form-check">

                  <input type="number" class="form-control " id="name_4" autocomplete="off"
                  placeholder="Naam" name="name_4" required>
                </div>
            </div>
        </div>
  </div>
    </div>
    <div class="row">
                <div class="col-1 mt-3">
                  <label for="" style="margin-left: 10px">Bedrijfsnaam(indien van toepassing):</label>
                </div>
                <div class="col-11">
                  <div class="form-check">

                      <input type="name" class="form-control " id="company_name_1" autocomplete="off"
                      placeholder="Bedrijfsnaam(indien van toepassing)" name="company_name_1" required>
                    </div>
                </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-2 mt-3">
                  <label for="" style="margin-left: 20px">Tel/gsm:</label>
                </div>
                <div class="col-10">
                  <div class="form-check">

                      <input type="name" class="form-control " id="tel_1" autocomplete="off"
                      placeholder="Tel/gsm" name="tel_1" required>
                    </div>
                </div>
    </div>
        </div>

        <div class="col-6">
            <div class="row">
                <div class="col-2 mt-3">
                  <label for="" style="margin-left: 50px">E-mail:</label>
                </div>
                <div class="col-10">
                  <div class="form-check">

                      <input type="email" class="form-control " id="e_mail_1" autocomplete="off"
                      placeholder="Bedrijfsnaam(indien van toepassing)" name="e_mail_1" required>
                    </div>
                </div>
    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-1 mt-3">
            <div class=""><b>Facturatieadres</b></div>
        </div>
            <div class="col-5">
                <div class="row">

                    <div class="col-12">
                      <div class="form-check">

                          <input type="name" class="form-control " id="straat_1" autocomplete="off"
                          placeholder="Straat" name="straat_1" required>
                          <input type="name" class="form-control mt-3" id="plaat_2" autocomplete="off"
                          placeholder="plaat" name="plaat_2" required>
                        </div>
                    </div>
        </div>
            </div>
            <div class="col-6">
                <div class="row">

                    <div class="col-12">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">

                                    <input type="name" class="form-control " id="nr_6" autocomplete="off"
                                    placeholder="Nr.:" name="nr_6" required>
                                  </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check">

                                    <input type="name" class="form-control " id="bus_3" autocomplete="off"
                                    placeholder="Bus.:" name="bus_3" required>
                                  </div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="form-check">

            <input type="name" class="form-control " id="postcode_3" autocomplete="off"
            placeholder="Postcode:" name="postcode_3" required>
          </div>

            </div>

    </div>

    <div class="row">
        <div class="col-6">
            <div class="row">
                <div class="col-2 mt-3">
                  <label for="" style="margin-left: 10px">Leverancier elektriciteit:</label>
                </div>
                <div class="col-10">
                  <div class="form-check">

                      <input type="name" class="form-control " id="supplier_electricity_1" autocomplete="off"
                      placeholder="Leverancier elektriciteit" name="supplier_electricity_1" required>
                    </div>
                </div>
    </div>
        </div>

        <div class="col-6">
            <div class="row">
                <div class="col-2 mt-3">
                  <label for="" style="margin-left: 50px">Leverancier aardgas:</label>
                </div>
                <div class="col-10">
                  <div class="form-check">

                      <input type="name" class="form-control " id="natural_gas_1" autocomplete="off"
                      placeholder="Leverancier aardgas" name="natural_gas_1" required>
                    </div>
                </div>
    </div>
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <label for="">Leverancier aardgas:</label>
        </div>
        <div class="col-3">
            <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineCheckbox2" style="margin-top: 0px; margin-left:0px">Huurder</label>
            <input class="form-check-input" type="checkbox" style="margin-left: 70px;margin-top:-17px" id="inlineCheckbox2" name="huurder" required>
                </div>
        </div>
        <div class="col-7">
            <div class="form-check form-check-inline">
                <label class="form-check-label" for="inlineCheckbox2" style="margin-top: 0px; margin-left:10px">Eigenaar(woning wordt momenteel gebruikt als hoofdverblijplaats of 2de verblijf)</label>
                <input class="form-check-input" type="checkbox" style="float:right;margin-right: -32px;;margin-top:-17px" id="inlineCheckbox2" name="home_is_currently_used" required>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label" for="inlineCheckbox2" style="margin-top: 0px; margin-left:10px">Eigenaar(woning staat leeg in afwachting van verhuur of verkoop)</label>
                        <input class="form-check-input" type="checkbox" style="float:right;margin-right: -32px;;margin-top:-17px" id="inlineCheckbox2" name="home_is_currently_used_1" required>
                            </div>
        </div>
    </div>

<div class="row">
    <div class="col-6">
        <div class="" style="text-align: center">HANDTEKENING van de <b>vertrejjende klant*</b></div>
        <div class="">(handtekening voorafgegaan door de vermelding 'Gelezen en goedgekeurd')</div>
        <div class="form-group">

            <input type="file" class="form-control" id="handtekening" autocomplete="off"
                   placeholder="Datum Overname" name="handtekening" required>
        </div>
    </div>
    <div class="col-6">
        <div class="" style="text-align: center">HANDTEKENING van de <b>overnemer*</b></div>
        <div class="">(handtekening voorafgegaan door de vermelding 'Gelezen en goedgekeurd')</div>
        <div class="form-group">

            <input type="file" class="form-control" id="handtekening_1" autocomplete="off"
                   placeholder="Datum Overname" name="handtekening_1" required>
        </div>
    </div>
    <div class="">Vul dit formulier ook in als u een degitale meter heeft. Een eventuele automatische uitlezing van meterstanden krijgt wel voorrang</div>
</div>
</section>
<section>
    <div class="">(*) Door de ondertekening van dit document gaat u akkoord dat uw persoonlijke gegevens worden gebruikt en doorgegeven aan de betrokken energieleverancier(s) en distributienetbeheerder(s) in het kader van deze energleovername.</div>
    <div class="">Overeen komstig de bepalingen van Verodering (EU) 2016/679 van het Europees Parlement en de Raad van 27 april 2016 betreffende de bescherming van natuurlijke personen in verband met de verwerking van persoonsgergevens en het verkeer van gregevens, hebt u recht om op eik moment bezwaar te maken tegen de verwerking van uw gergevens en om de wijziging of verwijdering van uw gergrevens aan de betreffends verantwoorde lijke voor de verwerking te vragen.</div>
</section>

                    <button type="submit" class="btn btn-primary ">Submit</button>
                    <a href="{{ route('energy_transfer_document.index') }}" class="btn btn-light mt-5">Cancel</a>
                </form>




@endsection

