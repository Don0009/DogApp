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
                            <h6 class="card-title">Identification du client Orange </h6>
                            <div class="mb-3">
                                <input type="checkbox" name="client_exist" value="0">
                                <label for="client_exist" class="form-label">Client existant<span class="text-danger">*</span></label>
                                @error('client_exist')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="client_num" class="form-label">N° de client: 1 -<span class="text-danger">*</span></label>
                                <input type="client_num" class="form-control @error('client_num') is-invalid @enderror" id="client_num" autocomplete="off" placeholder="Client Number" name="client_num" value="{{ old('client_num') }}" required>
                                @error('client_num')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exist_phone" class="form-label">N° de GSM<span class="text-danger">*</span></label>
                                <input type="exist_phone" class="form-control @error('exist_phone') is-invalid @enderror" id="exist_phone" autocomplete="off" placeholder="phone" name="exist_phone" value="{{ old('exist_phone') }}" required>
                                @error('exist_phone')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="new_client" value="0">
                                <label for="new_client" class="form-label">Nouveau client<span class="text-danger">*</span></label>
                                @error('new_client')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <p>Source du numéro:<span class="text-danger">*</span></p>
                            <div class="col">
                                <input type="radio" name="s_number" value="0">
                                <label for="s_number" class="form-label">N° porté</label>
                                <input type="radio" name="s_number" value="1">
                                <label for="s_number" class="form-label">Migration carte prépayée</label>
                                <input type="radio" name="s_number" value="2">
                                <label for="s_number" class="form-label">Nouveau N°</label>
                            </div>
                            <div class="row">
                                <h6>Langue:<span class="text-danger">*</span></h6>
                                <input type="radio" name="language" value="0">
                                <label for="language" class="form-label">NL</label>
                                <input type="radio" name="language" value="1">
                                <label for="language" class="form-label">FR</label>
                            </div>
                            <div class="row">
                                <h5>Titre:<span class="text-danger">*</span></h5>
                                <input type="radio" name="title" value="0">
                                <label for="title" class="form-label">Mme</label>
                                <input type="radio" name="title" value="1">
                                <label for="title" class="form-label">Mlle</label>
                                <input type="radio" name="title" value="2">
                                <label for="title" class="form-label">M</label>
                            </div>
                            <div class="row">
                                <h5>Type de client:<span class="text-danger">*</span></h5>
                                <input type="radio" name="customer_type" value="0">
                                <label for="customer_type" class="form-label">Personne physique</label>
                                <input type="radio" name="customer_type" value="1">
                                <label for="customer_type" class="form-label">Indépendant/profession libérale</label>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom<span class="text-danger">*</span></label>
                                <input type="name" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Name" name="name" value="{{ old('name') }}" required>
                                @error('name')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="f_name" class="form-label">Prénom<span class="text-danger">*</span></label>
                                <input type="f_name" class="form-control @error('f_name') is-invalid @enderror" id="f_name" autocomplete="off" placeholder="First Name" name="f_name" value="{{ old('f_name') }}" required>
                                @error('f_name')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="street" class="form-label">Rue<span class="text-danger">*</span></label>
                                        <input type="street" class="form-control @error('street') is-invalid @enderror" id="street" autocomplete="off" placeholder="Street" name="street" value="{{ old('street') }}" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2">
                                        <label for="no" class="form-label">N°<span class="text-danger">*</span></label>
                                        <input type="no" class="form-control @error('no') is-invalid @enderror" id="no" autocomplete="off" placeholder="No" name="no" value="{{ old('no') }}" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2">
                                        <label for="box" class="form-label">Bte<span class="text-danger">*</span></label>
                                        <input type="box" class="form-control @error('box') is-invalid @enderror" id="box" autocomplete="off" placeholder="Box" name="box" value="{{ old('box') }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="town" class="form-label">Ville<span class="text-danger">*</span></label>
                                        <input type="town" class="form-control @error('town') is-invalid @enderror" id="town" autocomplete="off" placeholder="Town" name="town" value="{{ old('town') }}" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-2">
                                        <label for="postal_code" class="form-label">Code Postale<span class="text-danger">*</span></label>
                                        <input type="postal_code" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Postal Code" name="postal_code" value="{{ old('postal_code') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="country" class="form-label">Pays<span class="text-danger">*</span></label>
                                        <input type="country" class="form-control @error('country') is-invalid @enderror" id="country" autocomplete="off" placeholder="Country" name="country" value="{{ old('country') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="date_of_birth" class="form-label">Date de naissance<span class="text-danger">*</span></label>
                                        <input class="form-control @error('date_of_birth') is-invalid @enderror mb-4 mb-md-0" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date">

                                    </div>
                                </div>

                            </div>
                            <div class="mb-3">
                                <input type="checkbox" name="busines" value="0">
                                <label for="busines" class="form-label">Entreprise<span class="text-danger">*</span></label>
                                @error('busines')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row">

                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="company_number" class="form-label">N° d’entreprise<span class="text-danger">*</span></label>
                                        <input type="company_number" class="form-control @error('company_number') is-invalid @enderror" id="company_number" autocomplete="off" placeholder="Company Number" name="company_number" value="{{ old('company_number') }}" required>

                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="legal_status" class="form-label">Forme juridique<span class="text-danger">*</span></label>
                                        <input type="legal_status" class="form-control @error('legal_status') is-invalid @enderror" id="legal_status" autocomplete="off" placeholder="Legal Status" name="legal_status" value="{{ old('legal_status') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="company_name" class="form-label">Nom de société<span class="text-danger">*</span></label>
                                <input type="company_name" class="form-control @error('company_name') is-invalid @enderror" id="company_name" autocomplete="off" placeholder="Company Name" name="company_name" value="{{ old('company_name') }}" required>
                                @error('company_name')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="contact_person" class="form-label">Personne de contact:<span class="text-danger">*</span></label>
                                <input type="contact_person" class="form-control @error('contact_person') is-invalid @enderror" id="contact_person" autocomplete="off" placeholder="Contact Person" name="contact_person" value="{{ old('contact_person') }}" required>
                                @error('contact_person')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <h5>Adresse de facturation (si différente de l’adresse du client)</h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="comp_street" class="form-label">Rue<span class="text-danger">*</span></label>
                                        <input type="comp_street" class="form-control @error('comp_street') is-invalid @enderror" id="comp_street" autocomplete="off" placeholder="Comp Street" name="comp_street" value="{{ old('comp_street') }}" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2">
                                        <label for="comp_no" class="form-label">N°<span class="text-danger">*</span></label>
                                        <input type="comp_no" class="form-control @error('comp_no') is-invalid @enderror" id="comp_no" autocomplete="off" placeholder="Comp_No" name="comp_no" value="{{ old('comp_no') }}" required>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="mb-2">
                                        <label for="comp_box" class="form-label">Bte<span class="text-danger">*</span></label>
                                        <input type="comp_box" class="form-control @error('comp_box') is-invalid @enderror" id="comp_box" autocomplete="off" placeholder="Comp Box" name="comp_box" value="{{ old('comp_box') }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="comp_postal_code" class="form-label">Code Postale<span class="text-danger">*</span></label>
                                        <input type="comp_postal_code" class="form-control @error('comp_postal_code') is-invalid @enderror" id="comp_postal_code" autocomplete="off" placeholder="Comp Postal Code" name="comp_postal_code" value="{{ old('comp_postal_code') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label for="comp_town" class="form-label">Ville<span class="text-danger">*</span></label>
                                        <input type="comp_town" class="form-control @error('comp_town') is-invalid @enderror" id="comp_town" autocomplete="off" placeholder="Comp Town" name="comp_town" value="{{ old('comp_town') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="comp_country" class="form-label">Pays<span class="text-danger">*</span></label>
                                <input type="comp_country" class="form-control @error('comp_country') is-invalid @enderror" id="comp_country" autocomplete="off" placeholder="Comp Country" name="comp_country" value="{{ old('comp_country') }}" required>
                                @error('comp_country')
                                <span class="invalid-feedback mb-3" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row">
                                <p>
                                    Si le client est un consommateur et si le contrat est conclu à distance ou en
                                    dehors des établissements d’Orange Belgium s.a. ou de ceux de ses agents
                                    commerciaux agréés, le client a le droit de se rétracter du contrat sans devoir
                                    faire état de ses motivations. Le délai de rétractation expire quatorze jours
                                    calendrier à compter du jour suivant la conclusion du contrat (en cas d’un contrat
                                    de services) ou la livraison du produit (en cas de vente de biens). Pour exercer le
                                    droit de rétractation, le client peut contacter le service clients au 5000 (numéro
                                    gratuit depuis un GSM Orange) ou au 02 745 95 00 avec un autre appareil (tarif
                                    local), envoyer sa décision par e-mail à mobile_shop@orange.be ou par poste à
                                    Orange Belgium s.a., Service clients, Boîte postale 950, B-1140 Bruxelles. Le client
                                    peut, pour ce faire, mais sans aucune obligation, utiliser le formulaire type pour la
                                    rétractation, disponible sur www.orange.be. Si le client a demandé de commencer
                                    l’exécution des services pendant le délai de rétractation, il est tenu de payer un
                                    montant proportionné à ce qui a été fourni au moment qu’il a informé Orange
                                    Belgium s.a. de l’exercice du droit de rétractation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Choix d’abonnement</h6>
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