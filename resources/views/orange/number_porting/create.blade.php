 @extends('layouts.backend')

 @section('content')
     <div class="row">
         <div class="col-md-12">
             <form class="forms-sample" action="{{ route('number_porting.store') }}" method="POST">
                 @csrf()
                 <div class="row">
                     <div class="col-md-12">
                         <div class="card">
                             <div class="card-body">
                                 <h3 style="color: orangered; text-align:center">Identification du
                                     client Orange</h3>
                                 <div class="mb-3">
                                     <input type="checkbox" name="subscription" value="0">
                                     <label for="subscription" class="form-label">La demande d’abonnement est ci-jointe
                                         <span class="text-danger">*</span></label>
                                     @error('subscription')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                                 <div class="row">
                                     <div class="row col-md-3">
                                         <h6 style="color: orangered;" class="mr-3">Langue:<span
                                                 class="text-danger">*</span></h6>
                                         <input type="radio" name="language" value="0">
                                         <label for="language" class="form-label">NL</label>
                                         <input type="radio" name="language" value="1">
                                         <label for="language" class="form-label">FR</label>
                                     </div>
                                     <div class="row col-md-6">
                                         <h5 style="color: orangered;">Titre:<span class="text-danger">*</span></h5>
                                         <input type="radio" name="title" class="ml-1" value="0">
                                         <label for="title" class="mr-2 form-label">Mme</label>
                                         <input type="radio" name="title" class="ml-1" value="1">
                                         <label for="title" class="mr-2 form-label">Mlle</label>
                                         <input type="radio" name="title" class="ml-1" value="2">
                                         <label for="title" class="mr-2 form-label">M</label>
                                     </div>
                                 </div>
                                 <div class="row">
                                     <h5 class="mr-3" style="color:orangered;">Type de client:<span
                                             class="text-danger">*</span></h5>
                                     <input type="radio" name="customer_type" value="0">
                                     <label for="customer_type" class="form-label">Personne physique</label>
                                     <input type="radio" name="customer_type" value="1">
                                     <label for="customer_type" class="form-label">Indépendant/profession
                                         libérale</label>
                                 </div>
                                 <div class="row">
                                     <div class="col-6">
                                         <div class="mb-3">
                                             <label for="name" class="form-label">Nom<span
                                                     class="text-danger">*</span></label>
                                             <input type="name" class="form-control @error('name') is-invalid @enderror"
                                                 id="name" autocomplete="off" placeholder="Name" name="name"
                                                 value="{{ old('name') }}" required>
                                             @error('name')
                                                 <span class="invalid-feedback mb-3" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="col-6">
                                         <div class="mb-3">
                                             <label for="f_name" class="form-label">Prénom<span
                                                     class="text-danger">*</span></label>
                                             <input type="f_name" class="form-control @error('f_name') is-invalid @enderror"
                                                 id="f_name" autocomplete="off" placeholder="First Name" name="f_name"
                                                 value="{{ old('f_name') }}" required>
                                             @error('f_name')
                                                 <span class="invalid-feedback mb-3" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="col-8">
                                         <div class="mb-2">
                                             <label for="street" class="form-label">Rue<span
                                                     class="text-danger">*</span></label>
                                             <input type="street" class="form-control @error('street') is-invalid @enderror"
                                                 id="street" autocomplete="off" placeholder="Street" name="street"
                                                 value="{{ old('street') }}" required>
                                         </div>
                                     </div>
                                     <div class="col-2">
                                         <div class="mb-2">
                                             <label for="no" class="form-label">N°<span
                                                     class="text-danger">*</span></label>
                                             <input type="no" class="form-control @error('no') is-invalid @enderror" id="no"
                                                 autocomplete="off" placeholder="No" name="no" value="{{ old('no') }}"
                                                 required>
                                         </div>
                                     </div>
                                     <div class="col-2">
                                         <div class="mb-2">
                                             <label for="box" class="form-label">Bte<span
                                                     class="text-danger">*</span></label>
                                             <input type="box" class="form-control @error('box') is-invalid @enderror"
                                                 id="box" autocomplete="off" placeholder="Box" name="box"
                                                 value="{{ old('box') }}" required>
                                         </div>
                                     </div>
                                     <div class="col-3">
                                         <div class="mb-2">
                                             <label for="postal_code" class="form-label">Code Postale<span
                                                     class="text-danger">*</span></label>
                                             <input type="postal_code"
                                                 class="form-control @error('postal_code') is-invalid @enderror"
                                                 id="postal_code" autocomplete="off" placeholder="Postal Code"
                                                 name="postal_code" value="{{ old('postal_code') }}" required>
                                         </div>
                                     </div>
                                     <div class="col-6">
                                         <div class="mb-2">
                                             <label for="town" class="form-label">Ville<span
                                                     class="text-danger">*</span></label>
                                             <input type="town" class="form-control @error('town') is-invalid @enderror"
                                                 id="town" autocomplete="off" placeholder="Town" name="town"
                                                 value="{{ old('town') }}" required>
                                         </div>
                                     </div>
                                     <div class="col-3">
                                         <div class="mb-2">
                                             <label for="country" class="form-label">Pays<span
                                                     class="text-danger">*</span></label>
                                             <input type="country"
                                                 class="form-control @error('country') is-invalid @enderror" id="country"
                                                 autocomplete="off" placeholder="Country" name="country"
                                                 value="{{ old('country') }}" required>
                                         </div>
                                     </div>
                                     <div class="col-6">
                                         <div class="mb-3">
                                             <label for="id_card" class="form-label">Numéro de carte d’identité<span
                                                     class="text-danger">*</span></label>
                                             <input type="id_card"
                                                 class="form-control @error('id_card') is-invalid @enderror" id="id_card"
                                                 autocomplete="off" placeholder="ID Card" name="id_card"
                                                 value="{{ old('id_card') }}" required>
                                             @error('id_card')
                                                 <span class="invalid-feedback mb-3" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="col-6">
                                         <div class="mb-3">
                                             <label for="mail" class="form-label">E-mail<span
                                                     class="text-danger">*</span></label>
                                             <input type="mail" class="form-control @error('mail') is-invalid @enderror"
                                                 id="mail" autocomplete="off" placeholder="E-Mail" name="mail"
                                                 value="{{ old('mail') }}" required>
                                             @error('mail')
                                                 <span class="invalid-feedback mb-3" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="mb-3">
                                         <input type="checkbox" name="busines" value="0">
                                         <label for="busines" class="form-label">Entreprise<span
                                                 class="text-danger">*</span></label>
                                         @error('busines')
                                             <span class="invalid-feedback mb-3" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror
                                     </div>
                                 </div>
                                 <div class="row">
                                     <div class="col-6">
                                         <div class="mb-3">
                                             <label for="company_number" class="form-label">N° d’entreprise<span
                                                     class="text-danger">*</span></label>
                                             <input type="company_number"
                                                 class="form-control @error('company_number') is-invalid @enderror"
                                                 id="company_number" autocomplete="off" placeholder="Company Number"
                                                 name="company_number" value="{{ old('company_number') }}" required>

                                         </div>
                                     </div>
                                     <div class="col-6">
                                         <div class="mb-3">
                                             <label for="legal_status" class="form-label">Forme juridique<span
                                                     class="text-danger">*</span></label>
                                             <input type="legal_status"
                                                 class="form-control @error('legal_status') is-invalid @enderror"
                                                 id="legal_status" autocomplete="off" placeholder="Legal Status"
                                                 name="legal_status" value="{{ old('legal_status') }}" required>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="mb-3">
                                     <label for="company_name" class="form-label">Nom de société<span
                                             class="text-danger">*</span></label>
                                     <input type="company_name"
                                         class="form-control @error('company_name') is-invalid @enderror"
                                         id="company_name" autocomplete="off" placeholder="Company Name" name="company_name"
                                         value="{{ old('company_name') }}" required>
                                     @error('company_name')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                                 <div class="row">
                                     <div class="col-6">
                                         <div class="mb-3">
                                             <label for="client_num" class="form-label">Numéro de client<span
                                                     class="text-danger">*</span></label>
                                             <input type="client_num"
                                                 class="form-control @error('client_num') is-invalid @enderror"
                                                 id="client_num" autocomplete="off" placeholder="Client Number"
                                                 name="client_num" value="{{ old('client_num') }}" required>

                                         </div>
                                     </div>
                                     <div class="col-6">
                                         <div class="mb-3">
                                             <label for="contact_person" class="form-label">Personne de contacte<span
                                                     class="text-danger">*</span></label>
                                             <input type="contact_person"
                                                 class="form-control @error('contact_person') is-invalid @enderror"
                                                 id="contact_person" autocomplete="off" placeholder="Contact Person"
                                                 name="contact_person" value="{{ old('contact_person') }}" required>
                                         </div>
                                     </div>
                                 </div>
                                 <h5 class="mb-3" style="color: orangered;">Numéro(s) de l’ancien operateur à
                                     porter chez Orange</h5>
                                 <div class="row">
                                     <div class="col-3">
                                         <div class="mb-3">
                                             <input type="checkbox" name="card_1" value="0">
                                             <label for="card_1" class="form-label">carte prépayée <span
                                                     class="text-danger">*</span></label>
                                             @error('card_1')
                                                 <span class="invalid-feedback mb-3" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="col-3">
                                         <div class="mb-3">
                                             <input type="checkbox" name="card_1" value="1">
                                             <label for="card_1" class="form-label">forfait/abonnement <span
                                                     class="text-danger">*</span></label>
                                             @error('card_1')
                                                 <span class="invalid-feedback mb-3" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>
                                     </div>
                                 </div>
                                 <div class="mb-3">
                                     <label for="mobile_number_1" class="form-label">N° GSM<span
                                             class="text-danger">*</span></label>
                                     <input type="mobile_number_1"
                                         class="form-control @error('mobile_number_1') is-invalid @enderror"
                                         id="mobile_number_1" autocomplete="off" placeholder="N° GSM" name="mobile_number_1"
                                         value="{{ old('mobile_number_1') }}" required>
                                     @error('mobile_number_1')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>

                                 <div class="mb-3">
                                     <label for="sim_number_old_1" class="form-label">N° carte SIM (ancien
                                         opérateur)<span class="text-danger">*</span></label>
                                     <input type="sim_number_old_1"
                                         class="form-control @error('sim_number_old_1') is-invalid @enderror"
                                         id="sim_number_old_1" autocomplete="off"
                                         placeholder="N° carte SIM (ancien opérateur)" name="sim_number_old_1"
                                         value="{{ old('sim_number_old_1') }}" required>
                                     @error('sim_number_old_1')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>

                                 <div class="mb-3">
                                     <label for="sim_number_orange_1" class="form-label">N° carte SIM (Orange)<span
                                             class="text-danger">*</span></label>
                                     <input type="sim_number_orange_1"
                                         class="form-control @error('sim_number_orange_1') is-invalid @enderror"
                                         id="sim_number_orange_1" autocomplete="off" placeholder="N° carte SIM (Orange)"
                                         name="sim_number_orange_1" value="{{ old('sim_number_orange_1') }}" required>
                                     @error('sim_number_orange_1')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>

                                 <div class="mb-3">
                                     <label for="customer_number_1" class="form-label">N° de client (ancien
                                         opérateur)<span class="text-danger">*</span></label>
                                     <input type="customer_number_1"
                                         class="form-control @error('customer_number_1') is-invalid @enderror"
                                         id="customer_number_1" autocomplete="off"
                                         placeholder="N° de client (ancien opérateur)" name="customer_number_1"
                                         value="{{ old('customer_number_1') }}" required>
                                     @error('customer_number_1')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>


                                 <div class="row">
                                     <div class="col-3">
                                         <div class="mb-3">
                                             <input type="checkbox" name="card_2" value="0">
                                             <label for="card_2" class="form-label">carte prépayée <span
                                                     class="text-danger">*</span></label>
                                             @error('card_2')
                                                 <span class="invalid-feedback mb-3" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="col-3">
                                         <div class="mb-3">
                                             <input type="checkbox" name="card_2" value="1">
                                             <label for="card_2" class="form-label">forfait/abonnement <span
                                                     class="text-danger">*</span></label>
                                             @error('card_2')
                                                 <span class="invalid-feedback mb-3" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>
                                     </div>
                                 </div>
                                 <div class="mb-3">
                                     <label for="mobile_number_2" class="form-label">N° GSM<span
                                             class="text-danger">*</span></label>
                                     <input type="mobile_number_2"
                                         class="form-control @error('mobile_number_2') is-invalid @enderror"
                                         id="mobile_number_2" autocomplete="off" placeholder="N° GSM" name="mobile_number_2"
                                         value="{{ old('mobile_number_2') }}" required>
                                     @error('mobile_number_2')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>

                                 <div class="mb-3">
                                     <label for="sim_number_old_2" class="form-label">N° carte SIM (ancien
                                         opérateur)<span class="text-danger">*</span></label>
                                     <input type="sim_number_old_2"
                                         class="form-control @error('sim_number_old_2') is-invalid @enderror"
                                         id="sim_number_old_2" autocomplete="off"
                                         placeholder="N° carte SIM (ancien opérateur)" name="sim_number_old_2"
                                         value="{{ old('sim_number_old_2') }}" required>
                                     @error('sim_number_old_2')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>

                                 <div class="mb-3">
                                     <label for="sim_number_orange_2" class="form-label">N° carte SIM (Orange)<span
                                             class="text-danger">*</span></label>
                                     <input type="sim_number_orange_2"
                                         class="form-control @error('sim_number_orange_2') is-invalid @enderror"
                                         id="sim_number_orange_2" autocomplete="off" placeholder="N° carte SIM (Orange)"
                                         name="sim_number_orange_2" value="{{ old('sim_number_orange_2') }}" required>
                                     @error('sim_number_orange_2')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>

                                 <div class="mb-3">
                                     <label for="customer_number_2" class="form-label">N° de client (ancien
                                         opérateur)<span class="text-danger">*</span></label>
                                     <input type="customer_number_2"
                                         class="form-control @error('customer_number_2') is-invalid @enderror"
                                         id="customer_number_2" autocomplete="off"
                                         placeholder="N° de client (ancien opérateur)" name="customer_number_2"
                                         value="{{ old('customer_number_2') }}" required>
                                     @error('customer_number_2')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>

                                 <div class="row">
                                     <div class="col-3">
                                         <div class="mb-3">
                                             <input type="checkbox" name="card_3" value="0">
                                             <label for="card_3" class="form-label">carte prépayée <span
                                                     class="text-danger">*</span></label>
                                             @error('card_3')
                                                 <span class="invalid-feedback mb-3" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>
                                     </div>
                                     <div class="col-3">
                                         <div class="mb-3">
                                             <input type="checkbox" name="card_3" value="1">
                                             <label for="card_3" class="form-label">forfait/abonnement <span
                                                     class="text-danger">*</span></label>
                                             @error('card_3')
                                                 <span class="invalid-feedback mb-3" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                             @enderror
                                         </div>
                                     </div>
                                 </div>
                                 <div class="mb-3">
                                     <label for="mobile_number_3" class="form-label">N° GSM<span
                                             class="text-danger">*</span></label>
                                     <input type="mobile_number_3"
                                         class="form-control @error('mobile_number_3') is-invalid @enderror"
                                         id="mobile_number_3" autocomplete="off" placeholder="N° GSM" name="mobile_number_3"
                                         value="{{ old('mobile_number_3') }}" required>
                                     @error('mobile_number_3')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>

                                 <div class="mb-3">
                                     <label for="sim_number_old_3" class="form-label">N° carte SIM (ancien
                                         opérateur)<span class="text-danger">*</span></label>
                                     <input type="sim_number_old_3"
                                         class="form-control @error('sim_number_old_3') is-invalid @enderror"
                                         id="sim_number_old_3" autocomplete="off"
                                         placeholder="N° carte SIM (ancien opérateur)" name="sim_number_old_3"
                                         value="{{ old('sim_number_old_3') }}" required>
                                     @error('sim_number_old_3')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>

                                 <div class="mb-3">
                                     <label for="sim_number_orange_3" class="form-label">N° carte SIM (Orange)<span
                                             class="text-danger">*</span></label>
                                     <input type="sim_number_orange_3"
                                         class="form-control @error('sim_number_orange_3') is-invalid @enderror"
                                         id="sim_number_orange_3" autocomplete="off" placeholder="N° carte SIM (Orange)"
                                         name="sim_number_orange_3" value="{{ old('sim_number_orange_3') }}" required>
                                     @error('sim_number_orange_3')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>

                                 <div class="mb-3">
                                     <label for="customer_number_3" class="form-label">N° de client (ancien
                                         opérateur)<span class="text-danger">*</span></label>
                                     <input type="customer_number_3"
                                         class="form-control @error('customer_number_3') is-invalid @enderror"
                                         id="customer_number_3" autocomplete="off"
                                         placeholder="N° de client (ancien opérateur)" name="customer_number_3"
                                         value="{{ old('customer_number_3') }}" required>
                                     @error('customer_number_3')
                                         <span class="invalid-feedback mb-3" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                 </div>
                                 <p>
                                     {{-- <bold>
                                         Le client demande à Orange de terminer en son nom le(s) contrat(s) mentionné(s)
                                         ci-dessus avec l’opérateur existant et de porter
                                         le(s) numéro(s) de GSM qui y sont associés
                                     </bold> --}}
                                 </p>
                                 <div class="row">
                                     <div class="col-8">
                                         {{-- <p>Le client est informé que le transfert de son numéro vers Orange Belgium s.a. ne
                                             le prive pas de
                                             l’obligation de respecter son contrat avec le précédent opérateur jusqu’à son
                                             terme.
                                         </p>
                                         <p>Orange Belgium s.a. respectera les dispositions légales relatives à la
                                             portabilité des numéros. Orange</p>
                                         <p>Belgium s.a. mettra en oeuvre les moyens nécessaires pour réaliser le portage
                                             demandé par le client. Orange
                                             Belgium s.a. ne pourra toutefois pas être tenu responsable si le portage n’est
                                             pas effectué pour une raison
                                             dépendant del’opérateur précédent ou du client. En particulier, Orange Belgium
                                             s.a. ne pourra être tenu
                                             responsable en cas de demande de portage fausse, incorrecte ou illisible. Le
                                             client reconnaît avoir reçu un
                                             contrat d’Orange Belgium s.a. et les conditions générales d’Orange Belgium s.a.
                                             et de les accepter</p>
                                         <p> --}}
                                         {{-- <bold>Si le client est un consommateur et si le contrat est conclu à distance
                                                 ou en dehors des
                                                 établissements d’Orange Belgium s.a. ou de ceux de ses agents commerciaux
                                                 agréés, le client a le
                                                 droit de se rétracter du contrat sans devoir faire état de ses motivations.
                                                 Le délai de rétractation
                                                 expire quatorze jours calendrier à compter du jour suivant la conclusion du
                                                 contrat (en cas d’un
                                                 contrat de services) ou la livraison du produit (en cas de vente de biens).
                                                 Pour exercer le droit de
                                                 rétractation, le client peut contacter le service clients au 5000 (numéro
                                                 gratuit depuis un GSM Orange)
                                                 ou au 02 745 95 00 avec un autre appareil (tarif local), envoyer sa
                                                 décision par e-mail à
                                                 mobile_shop@orange.be ou par poste à Orange Belgium s.a., Service clients,
                                                 Boîte postale 950, B1140 Bruxelles. Le client peut, pour ce faire, mais
                                                 sans aucune obligation, utiliser le formulaire type
                                                 pour la rétractation, disponible sur www.orange.be. Si le client a demandé
                                                 de commencer l’exécution
                                                 des services pendant le délai de rétractation, il est tenu de payer un
                                                 montant proportionné à ce qui a
                                                 été fourni au moment qu’il a informé Orange Belgium s.a. de l’exercice du
                                                 droit de rétractation</bold> --}}
                                         </p>
                                     </div>
                                     <div style="float: left;" class="col-4">
                                         <h5>Signature du client</h5>
                                         <p>
                                             <bold>N’oubliez pas de toujours joindre une copie recto verso
                                                 de votre carte d’identité (aussi dans le cas d’une carte
                                                 prépayée) et des statuts en cas de société
                                             </bold>
                                         </p>
                                         <label for="duplicate" class="form-label">Fait en 2 exemplaires à:
                                             <span class="text-danger">*</span></label>

                                         <input type="duplicate"
                                             class="form-control @error('duplicate') is-invalid @enderror" id="duplicate"
                                             autocomplete="off" placeholder="Credit Card Holder" name="duplicate"
                                             value="{{ old('duplicate') }}" required>
                                         <div class="mb-2">
                                             <label for="date" class="form-label">Le:<span
                                                     class="text-danger">*</span></label>
                                             <input class="form-control @error('date') is-invalid @enderror mb-4 mb-md-0"
                                                 data-inputmask="'alias': 'datetime'"
                                                 data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date"
                                                 name="date" value="{{ old('date') }}" type="date">
                                         </div>
                                         <h5>Signature du client: ..X...............</h5>
                                     </div>


                                 </div>
                             </div>
                         </div>

                         <button type="submit" class="btn btn-primary mt-3">Submit</button>
                         <button class="btn btn-secondary mt-3">Cancel</button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 @endsection
