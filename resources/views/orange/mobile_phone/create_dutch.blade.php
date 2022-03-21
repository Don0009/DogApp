@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-md-12">
        <form class="forms-sample" action="{{ route('mobile_phone.store') }}" method="POST">
            @csrf()
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Identificatie van de Orange-klant</h6>
                            <div class="mb-3">
                                <input type="checkbox" name="client_exist" value="0">
                                <label for="client_exist" class="form-label">Bestaande klant<span class="text-danger">*</span></label>
                                @error('client_exist')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="client_num" class="form-label">Klantnr. : 1<span class="text-danger">*</span></label>
                                <input type="client_num" class="form-control @error('client_num') is-invalid @enderror" id="client_num" autocomplete="off" placeholder="Klantnr" name="client_num" value="{{ old('client_num') }}" required>
                                @error('client_num')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exist_phone" class="form-label">GSM-nr<span class="text-danger">*</span></label>
                                <input type="exist_phone" class="form-control @error('exist_phone') is-invalid @enderror" id="exist_phone" autocomplete="off" placeholder="GSM-nr" name="exist_phone" value="{{ old('exist_phone') }}" required>
                                @error('exist_phone')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="new_client" value="0">
                                <label for="new_client" class="form-label">Nieuwe klant<span class="text-danger">*</span></label>
                                @error('new_client')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <p>Bron van het nummer:<span class="text-danger">*</span></p>
                            <div class="col">
                                <input type="radio" name="s_number" value="0">
                                <label for="s_number" class="form-label">Nr. overdracht</label>
                                <input type="radio" name="s_number" value="1">
                                <label for="s_number" class="form-label">Omschakeling herlaadkaart</label>
                                <input type="radio" name="s_number" value="2">
                                <label for="s_number" class="form-label">Nieuw nummer</label>
                            </div>
                            <div class="row">
                                <h6>Taal:<span class="text-danger">*</span></h6>
                                <input type="radio" name="language" value="0">
                                <label for="language" class="form-label">NL</label>
                                <input type="radio" name="language" value="1">
                                <label for="language" class="form-label">FR</label>
                            </div>
                            <div class="row">
                                <h5>Titel:<span class="text-danger">*</span></h5>
                                <input type="radio" name="title" value="0">
                                <label for="title" class="form-label">Mevr.</label>
                                <input type="radio" name="title" value="1">
                                <label for="title" class="form-label">Juffr.</label>
                                <input type="radio" name="title" value="2">
                                <label for="title" class="form-label">Dhr.</label>
                            </div>
                            <div class="row">
                                <h5>Type klant:<span class="text-danger">*</span></h5>
                                <input type="radio" name="customer_type" value="0">
                                <label for="customer_type" class="form-label">Natuurlijke persoon</label>
                                <input type="radio" name="customer_type" value="1">
                                <label for="customer_type" class="form-label">Zelfstandige/vrij beroep</label>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Naam<span class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Naam" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="f_name" class="form-label">Voornaam<span class="text-danger">*</span></label>
                                <input type="f_name" class="form-control @error('f_name') is-invalid @enderror" id="f_name" autocomplete="off" placeholder="Voornaam" name="f_name" value="{{ old('f_name') }}" required>
                                @error('f_name')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="street" class="form-label">Straat :<span class="text-danger">*</span></label>
                                        <input type="street" class="form-control @error('street') is-invalid @enderror" id="street" autocomplete="off" placeholder="Straat" name="street" value="{{ old('street') }}" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2">
                                        <label for="no" class="form-label">Nr<span class="text-danger">*</span></label>
                                        <input type="no" class="form-control @error('no') is-invalid @enderror" id="no" autocomplete="off" placeholder="Nr" name="no" value="{{ old('no') }}" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2">
                                        <label for="box" class="form-label">Bus<span class="text-danger">*</span></label>
                                        <input type="box" class="form-control @error('box') is-invalid @enderror" id="box" autocomplete="off" placeholder="Bus" name="box" value="{{ old('box') }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col">
                                    <div class="mb-2">
                                        <label for="postal_code" class="form-label">Postcode<span class="text-danger">*</span></label>
                                        <input type="postal_code" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Postcode" name="postal_code" value="{{ old('postal_code') }}" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="town" class="form-label">Stad<span class="text-danger">*</span></label>
                                        <input type="town" class="form-control @error('town') is-invalid @enderror" id="town" autocomplete="off" placeholder="Stad" name="town" value="{{ old('town') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="country" class="form-label">Land<span class="text-danger">*</span></label>
                                        <input type="country" class="form-control @error('country') is-invalid @enderror" id="country" autocomplete="off" placeholder="Land" name="country" value="{{ old('country') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="date_of_birth" class="form-label">Geboortedatum<span class="text-danger">*</span></label>
                                        <input class="form-control @error('date_of_birth') is-invalid @enderror mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date">

                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="busines" value="0">
                                <label for="busines" class="form-label">Firma <span class="text-danger">*</span></label>
                                @error('busines')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row">

                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="company_number" class="form-label">Ondernemingsnr<span class="text-danger">*</span></label>
                                        <input type="company_number" class="form-control @error('company_number') is-invalid @enderror" id="company_number" autocomplete="off" placeholder="Ondernemingsnr" name="company_number" value="{{ old('company_number') }}" required>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="legal_status" class="form-label">Vennootschapsvorm <span class="text-danger">*</span></label>
                                        <input type="legal_status" class="form-control @error('legal_status') is-invalid @enderror" id="legal_status" autocomplete="off" placeholder="Vennootschapsvorm " name="legal_status" value="{{ old('legal_status') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="company_name" class="form-label">Firmanaam<span class="text-danger">*</span></label>
                                <input type="company_name" class="form-control @error('company_name') is-invalid @enderror" id="company_name" autocomplete="off" placeholder="Firmanaam" name="company_name" value="{{ old('company_name') }}" required>
                                @error('company_name')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="contact_person" class="form-label">Contactpersoon :<span class="text-danger">*</span></label>
                                <input type="contact_person" class="form-control @error('contact_person') is-invalid @enderror" id="contact_person" autocomplete="off" placeholder="Contactpersoon " name="contact_person" value="{{ old('contact_person') }}" required>
                                @error('contact_person')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <h5>Facturatie adres (indien verschillend van het adres van de klant)</h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="comp_street" class="form-label">Straat <span class="text-danger">*</span></label>
                                        <input type="comp_street" class="form-control @error('comp_street') is-invalid @enderror" id="comp_street" autocomplete="off" placeholder="Straat" name="comp_street" value="{{ old('comp_street') }}" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2">
                                        <label for="comp_no" class="form-label">Nr<span class="text-danger">*</span></label>
                                        <input type="comp_no" class="form-control @error('comp_no') is-invalid @enderror" id="comp_no" autocomplete="off" placeholder="Nr" name="comp_no" value="{{ old('comp_no') }}" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2">
                                        <label for="comp_box" class="form-label">Bus<span class="text-danger">*</span></label>
                                        <input type="comp_box" class="form-control @error('comp_box') is-invalid @enderror" id="comp_box" autocomplete="off" placeholder="Bus" name="comp_box" value="{{ old('comp_box') }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="comp_postal_code" class="form-label">Postcode<span class="text-danger">*</span></label>
                                        <input type="comp_postal_code" class="form-control @error('comp_postal_code') is-invalid @enderror" id="comp_postal_code" autocomplete="off" placeholder="Comp Postal Code" name="comp_postal_code" value="{{ old('comp_postal_code') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="comp_town" class="form-label">Plaats<span class="text-danger">*</span></label>
                                        <input type="comp_town" class="form-control @error('comp_town') is-invalid @enderror" id="comp_town" autocomplete="off" placeholder="Plaats" name="comp_town" value="{{ old('comp_town') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="comp_country" class="form-label">Land<span class="text-danger">*</span></label>
                                <input type="comp_country" class="form-control @error('comp_country') is-invalid @enderror" id="comp_country" autocomplete="off" placeholder="Land" name="comp_country" value="{{ old('comp_country') }}" required>
                                @error('comp_country')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row">
                                <p>
                                    Als de klant een consument is en het contract is op afstand gesloten of buiten de
                                    verkoopruimten van Orange Belgium nv of van haar erkende handelsagenten, heeft de
                                    klant het recht om dit contract zonder opgave van redenen te herroepen. De
                                    herroepingstermĳn verstrĳkt 14 dagen na de dag van de contractsluiting (bĳ een
                                    dienstencontract) of van de levering van het product (bĳ de verkoop van goederen). Om
                                    te herroepen kan de klant contact opnemen met de klantendienst op 5000 (gratis nummer
                                    via een Orange-gsm) of 02 745 95 00 met een ander toestel, (lokaal tarief) of zĳn
                                    beslissing per e-mail verzenden naar mobile_shop@orange.be of per post naar Orange
                                    Belgium nv, Klantendienst, Postbus 950, B-1140 Brussel. De klant kan hiervoor, zonder
                                    verplichting, gebruikmaken van het modelformulier voor herroeping, beschikbaar op
                                    www.orange.be. Als de klant heeft gevraagd om de verrichting van diensten tĳdens de
                                    herroepingstermĳn te laten beginnen, moet hĳ een bedrag betalen dat evenredig is aan
                                    hetgeen reeds geleverd is op het moment dat hĳ Orange Belgium nv over de uitoefening
                                    van het herroepingsrecht informeert.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Abonnements keuze</h6>
                            <div class="mb-3">
                                <label for="sim" class="form-label">SIM<span class="text-danger">*</span></label>
                                <input type="sim" class="form-control @error('sim') is-invalid @enderror" id="sim" autocomplete="off" placeholder="SIM" name="sim" value="{{ old('sim') }}" required>
                                @error('sim')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="res_number" class="form-label">Numéro Réservé<span class="text-danger">*</span></label>
                                <input type="res_number" class="form-control @error('res_number') is-invalid @enderror" id="res_number" autocomplete="off" placeholder="Comp Country" name="res_number" value="{{ old('res_number') }}" required>
                                @error('res_number')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pricing_plan" class="form-label">Plan Tarifaire<span class="text-danger">*</span></label>
                                <input type="pricing_plan" class="form-control @error('pricing_plan') is-invalid @enderror" id="pricing_plan" autocomplete="off" placeholder="Comp Country" name="pricing_plan" value="{{ old('pricing_plan') }}" required>
                                @error('pricing_plan')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="options_services" class="form-label">Option et Services<span class="text-danger">*</span></label>
                                <textarea type="options_services" class="form-control @error('options_services') is-invalid @enderror" id="options_services" autocomplete="off" placeholder="Comp Country" row="5" name="options_services" value="{{ old('options_services') }}" required></textarea>
                                @error('options_services')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <h5>Signature du client (titulaire de la carte principale</h5>
                                    <label for="copy" class="form-label">Fait en 2 exemplaires à :<span class="text-danger">*</span></label>
                                    <input type="copy" class="form-control @error('copy') is-invalid @enderror" id="copy" autocomplete="off" placeholder="Done Copy" name="copy" value="{{ old('copy') }}" required>
                                    <label for="the" class="form-label">Le:<span class="text-danger">*</span></label>
                                    <input type="the" class="form-control @error('the') is-invalid @enderror" id="the" autocomplete="off" placeholder="The" name="the" value="{{ old('the') }}" required>
                                </div>
                            </div>

                            <p>LE CLIENT DÉCLARE AVOIR PRIS CONNAISSANCE, AVANT LA SIGNATURE DE LA PRÉSENTE DEMANDE
                                DE CONTRAT, DES CONDITIONS GÉNÉRALES ET SPÉCIFIQUES, DE LA DESCRIPTION ET DES TARIFS
                                DES SERVICES AUXQUELS IL SOUSCRIT ET DES CONDITIONS DU DROIT DE RÉTRACTATION, ET LES
                                AVOIR ACCEPTÉS. LE CLIENT PEUT OBTENIR UNE COPIE DES CONDITIONS GÉNÉRALES DANS UN
                                SHOP ORANGE OU LES CONSULTER SUR WWW.ORANGE.BE/CONDITIONSGENERALES. LE CLIENT
                                DEMANDE D’ENTAMER L’EXÉCUTION DES SERVICES PENDANT LE DÉLAI DE RÉTRACTATION. </p>
                            <p>
                                <bold>N’oubliez pas de toujours joindre une copie recto verso de votre carte d’identité et des
                                    statuts en cas de société</bold>
                            </p>
                            <h5>Signature du client : ..X...............</h5>
                            <p>. Cette demande de contrat est valable et lie Orange Belgium s.a. sous condition que toutes les informations mentionnées soient correctes et
                                complètes. Le client s’engage à informer immédiatement Orange Belgium s.a. de tout changement par écrit.</p>
                            <p> .Orange Belgium s.a. se réserve le droit de limiter le(s) service(s) demandé(s) par le client après examen du dossier, conformément aux
                                conditions générales d’Orange Belgium s.a. Orange Belgium s.a. s’engage à informer, par écrit, le client du résultat de cette demande de
                                contrat. </p>
                            <div class="col-12">
                                <div class="mb-3">
                                    <h5>Paiement par carte de crédit
                                    </h5>
                                    <p> Par la présente, j’autorise Orange Belgium s.a. jusqu’à révocation expresse à
                                        débiter toutes les factures liées au présent contrat de la carte de crédit suivante :</p>

                                    <label for="credit_card_holder" class="form-label">Titulaire de la carte de crédit :<span class="text-danger">*</span></label>
                                    <input type="credit_card_holder" class="form-control @error('credit_card_holder') is-invalid @enderror" id="credit_card_holder" autocomplete="off" placeholder="Credit Card Holder" name="credit_card_holder" value="{{ old('credit_card_holder') }}" required>

                                    <label for="code_generate" class="form-label">Code / alias généré par Ogone / Inginéco :<span class="text-danger">*</span></label>
                                    <input type="code_generate" class="form-control @error('code_generate') is-invalid @enderror" id="credit_card_holder" autocomplete="off" placeholder="Code Generate" name="code_generate" value="{{ old('code_generate') }}" required>
                                </div>
                            </div>
                            <h5>Signature du client: ..X...............</h5>


                        </div>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5>Mandat de domiciliation européenne SEPA - Business to consumer (CORE) pour un prélèvement récurrent</h5>
                        <p>Référence du mandat (UMR): Cette référence vous sera communiqué via votre facture.</p>
                        <p>En signant ce formulaire de mandat, vous autorisez Orange Belgium s.a. BE12ZZZ0456810810 à envoyer des instructions à votre banque pour débiter votre compte, et votre
                            banque à débiter votre compte conformément aux instructions d’Orange Belgium s.a. BE12ZZZ0456810810. La pré-notification prévue par la Directive européenne
                            concernant les services de paiement se fera via votre facture qui pourrait vous être envoyée en-deçà des 14 jours prévus dans ladite Directive. Vous bénéficiez d’un droit de
                            remboursement par votre banque selon les conditions décrites dans la convention que vous avez passée avec celle-ci. Toute demande de remboursement doit être présentée
                            dans les 8 semaines suivant la date de débit de votre compte.</p>
                        <h4>Je soussigné,</h4>
                        <div class="mb-2">
                            <label for="account_holder_name" class="form-label">Nom du titulaire de compte<span class="text-danger">*</span></label>
                            <input type="account_holder_name" class="form-control @error('account_holder_name') is-invalid @enderror" id="account_holder_name" autocomplete="off" placeholder="Nom du titulaire de compte" name="account_holder_name" value="{{ old('account_holder_name') }}" required>
                        </div>
                        <div class="mb-2">
                            <label for="street_and_number" class="form-label">Rue et numéro<span class="text-danger">*</span></label>
                            <input type="street_and_number" class="form-control @error('street_and_number') is-invalid @enderror" id="street_and_number" autocomplete="off" placeholder="Nom du titulaire de compte" name="street_and_number" value="{{ old('street_and_number') }}" required>
                        </div>
                        <div class="row">
                            <div class="col-10">
                                <label for="postal_code_and_city" class="form-label">Code postal et ville<span class="text-danger">*</span></label>
                                <input type="postal_code_and_city" class="form-control @error('postal_code_and_city') is-invalid @enderror" id="postal_code_and_city" autocomplete="off" placeholder="Nom du titulaire de compte" name="postal_code_and_city" value="{{ old('postal_code_and_city') }}" required>
                            </div>
                            <div class="col-2">
                                <label for="hold_country" class="form-label">Pays<span class="text-danger">*</span></label>
                                <input type="hold_country" class="form-control @error('hold_country') is-invalid @enderror" id="hold_country" autocomplete="off" placeholder="Nom du titulaire de compte" name="hold_country" value="{{ old('hold_country') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <label for="iban_account_number" class="form-label">N° de compte IBAN<span class="text-danger">*</span></label>
                                <input type="iban_account_number" class="form-control @error('iban_account_number') is-invalid @enderror" id="iban_account_number" autocomplete="off" placeholder="Nom du titulaire de compte" name="iban_account_number" value="{{ old('iban_account_number') }}" required>
                            </div>
                            <div class="col-3">
                                <label for="bic_code" class="form-label">Code BIC<span class="text-danger">*</span></label>
                                <input type="bic_code" class="form-control @error('bic_code') is-invalid @enderror" id="bic_code" autocomplete="off" placeholder="Nom du titulaire de compte" name="bic_code" value="{{ old('bic_code') }}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-9">
                                <label for="underlying_contract_number" class="form-label">N° de contrat sous-jacent<span class="text-danger">*</span></label>
                                <input type="underlying_contract_number" class="form-control @error('underlying_contract_number') is-invalid @enderror" id="underlying_contract_number" autocomplete="off" placeholder="Nom du titulaire de compte" name="underlying_contract_number" value="{{ old('underlying_contract_number') }}" required>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="a_date" class="form-label"> Date:<span class="text-danger">*</span></label>
                                        <input class="form-control @error('a_date') is-invalid @enderror mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="a_date" name="a_date" value="{{ old('a_date') }}" type="date">
                                        <label for="location" class="form-label">Lieu<span class="text-danger">*</span></label>
                                        <input type="location" class="form-control @error('location') is-invalid @enderror" id="location" autocomplete="off" placeholder="Nom du titulaire de compte" name="location" value="{{ old('location') }}" required>
                                    </div>
                                    <div class="col-6">
                                        <p>Si vous êtes déjà client Orange, veuillez ajouter votre numéro de
                                            client. Si vous n’êtes pas encore client, notre agent introduira la
                                            référence adéquate</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <label for="signature" class="form-label">Signature du titulaire de compte<span class="text-danger">*</span></label>
                                <textarea type="signature" class="form-control @error('signature') is-invalid @enderror" id="signature" autocomplete="off" placeholder="Signature du titulaire de compte" name="signature" rows="8" value="{{ old('signature') }}" required></textarea>
                            </div>

                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </div>

            </div>

        </form>
    </div>
</div>
@endsection