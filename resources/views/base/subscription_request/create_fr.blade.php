@extends('layouts.backend')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <h4>Demande d’inscription</h4>
            <form class="forms-sample" method="POST" action="{{ route('subscription_request.store') }}">
                @csrf()
                <h5 class="mt-4">Données d’identification</h5>
                <div class="row mt-3">
                    <div class="col-1">
                        <p>Title:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-3">
                        <input type="radio" name="title" class="ml-2" value="Madame">
                        <label for="title" class="form-label">Madame</label>
                        <input type="radio" name="title" class="ml-2" value="Monsieur">
                        <label for="title" class="form-label">Monsieur</label>
                    </div>
                    <div class="col-1">
                        <p>Langue:<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="language" class="ml-2" value="Français">
                        <label for="language" class="form-label">Français</label>
                        <input type="radio" name="language" class="ml-2" value="Néerlandais">
                        <label for="language" class="form-label">Néerlandais</label>
                        <input type="radio" name="language" class="ml-2" value="Anglais">
                        <label for="language" class="form-label">Anglais</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="name" class="form-label">Nom<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Nom" name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="f_name" class="form-label">Prénom<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('f_name') is-invalid @enderror" id="f_name" autocomplete="off" placeholder="prénom" name="f_name" value="{{ old('f_name') }}" required>
                        @error('f_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-6">
                        <label for="date_of_birth" class="form-label">Date de naissance<span class="text-danger">*</span></label>
                        <input class="form-control @error('date_of_birth') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date">
                        @error('date_of_birth')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="id_card_number" class="form-label">Numéro de carte d’identité<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('id_card_number') is-invalid @enderror" id="name" autocomplete="off" placeholder="Numéro de carte d’identité" name="id_card_number" value="{{ old('id_card_number') }}" required>
                        @error('id_card_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <p>Type de carte:<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-10">
                        <input type="radio" name="card_type" class="ml-2" value="carte d’identité">
                        <label for="card_type" class="form-label">carte d’identité</label>
                        <input type="radio" name="card_type" class="ml-2" value="passeport">
                        <label for="card_type" class="form-label">passeport</label>
                        <input type="radio" name="card_type" class="ml-2" value="carte de séjour membre de l’UE">
                        <label for="card_type" class="form-label">carte de séjour membre de l’UE</label>
                        <input type="radio" name="card_type" class="ml-2" value="carte d’identité d’étranger">
                        <label for="card_type" class="form-label">carte d’identité d’étranger</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="nationality" class="form-label">Nationalité<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nationality') is-invalid @enderror" id="nationality" autocomplete="off" placeholder="Nationalité" name="nationality" value="{{ old('nationality') }}" required>
                        @error('nationality')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="company_name" class="form-label">Nom de la société / Master Account et forme juridique<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" autocomplete="off" placeholder="Nom de la société / Master Account et forme juridique" name="company_name" value="{{ old('company_name') }}" required>
                        @error('company_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2 ">
                        <p>N° TVA/RPM<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-5">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">B E </span>
                            <input type="text" class="form-control @error('rpm_no') is-invalid @enderror" id="rpm_no" autocomplete="off" placeholder="N° TVA/RPM" name="rpm_no" value="{{ old('rpm_no') }}" required>
                            @error('rpm_no')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-2 mt-1">
                        <p>Exempté de TVA:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-3 mt-1">
                        <input type="radio" name="vat" class="ml-2" value="oui">
                        <label for="vat" class="form-label">oui</label>
                        <input type="radio" name="vat" class="ml-2" value="non">
                        <label for="vat" class="form-label">non</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="street" class="form-label">Rue<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('street') is-invalid @enderror" id="street" autocomplete="off" placeholder="Rue" name="street" value="{{ old('street') }}" required>
                        @error('street')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="box" class="form-label">N°/Bte<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('box') is-invalid @enderror" id="box" autocomplete="off" placeholder="N°/Bte" name="box" value="{{ old('box') }}" required>
                        @error('box')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="locality" class="form-label">Localité<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('locality') is-invalid @enderror" id="locality" autocomplete="off" placeholder="Localité" name="locality" value="{{ old('locality') }}" required>
                        @error('locality')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="postal_code" class="form-label">Code postal<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Code postal" name="postal_code" value="{{ old('postal_code') }}" required>
                        @error('postal_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="phone" class="form-label">Téléphone<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" autocomplete="off" placeholder="Téléphone" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="fax" class="form-label">Fax<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('fax') is-invalid @enderror" id="locality" autocomplete="off" placeholder="Localité" name="fax" value="{{ old('fax') }}" required>
                        @error('fax')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="mail" class="form-label">Adresse e-mail<span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('mail') is-invalid @enderror" id="locality" autocomplete="off" placeholder="Adresse e-mail" name="mail" value="{{ old('mail') }}" required>
                        @error('mail')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-9">
                        <p>Je souhaite que mes coordonnées figurent dans l’annuaire universel et dans le service de renseignements universel:</p>
                    </div>
                    <div class="col-2">
                        <input type="radio" name="contact_details" class="ml-2" value="oui">
                        <label for="contact_details" class="form-label">oui</label>
                        <input type="radio" name="contact_details" class="ml-2" value="non">
                        <label for="contact_details" class="form-label">non</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <p>Je n’autorise pas l’usage de mes données électroniques, de trafic ou de localisation, à des fins commerciales:</p>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="authorize" class="mr-1" value="">
                    </div>
                </div>
                <p class="mt-0">Si vous ne souhaitez plus recevoir d’appel commercial, vous pouvez vous inscrire sur la page web www.ne-m-appelez-plus.be</p>
                <div class="row">
                    <div class="col-11">
                        <p>J’accepte que mes données soient également utilisées à des fins de marketing direct par des partenaires directs de Telenet Group sprl</p>
                    </div>
                    <div class="col-1">
                        <input type="checkbox" name="agree" class="mr-1" value="">
                    </div>
                </div>
                <h5 class="mt-2">Information relative au paiement:</h5>

                <div class="row mt-2">
                    <div class="col-6">
                        <label for="bank_account" class="form-label">Numéro de compte bancaire IBAN <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('bank_account') is-invalid @enderror" id="bank_account" autocomplete="off" placeholder="Numéro de compte bancaire IBAN" name="bank_account" value="{{ old('bank_account') }}" required>
                        @error('bank_account')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="billing_address" class="form-label">Adresse de facturation<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('billing_address') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Adresse de facturation" name="billing_address" value="{{ old('billing_address') }}" required>
                        @error('billing_address')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="street1" class="form-label">Rue<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('street1') is-invalid @enderror" id="street1" autocomplete="off" placeholder="Rue" name="street1" value="{{ old('street1') }}" required>
                        @error('street1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="box1" class="form-label">N°/Bte<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('box1') is-invalid @enderror" id="box1" autocomplete="off" placeholder="N°/Bte" name="box1" value="{{ old('box1') }}" required>
                        @error('box1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="locality1" class="form-label">Localité<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('locality1') is-invalid @enderror" id="locality1" autocomplete="off" placeholder="Localité" name="locality1" value="{{ old('locality1') }}" required>
                        @error('locality1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="postal_code1" class="form-label">Code postal<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('postal_code1') is-invalid @enderror" id="postal_code1" autocomplete="off" placeholder="Code postal" name="postal_code1" value="{{ old('postal_code1') }}" required>
                        @error('postal_code1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <p>Je choisis le moyen de paiement suivant:<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-8">
                        <input type="radio" name="payment_method" class="ml-2" value="domiciliation">
                        <label for="payment_method" class="form-label">domiciliation</label>
                        <input type="radio" name="payment_method" class="ml-2" value="carte de crédit">
                        <label for="payment_method" class="form-label">carte de crédit</label>
                        <input type="radio" name="payment_method" class="ml-2" value="bulletin de versement">
                        <label for="payment_method" class="form-label">bulletin de versement</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Je souhaite recevoir mes factures avec le détail des communications:</p>
                    </div>
                    <div class="col-2">
                        <input type="radio" name="receive" class="ml-2" value="oui">
                        <label for="receive" class="form-label">oui</label>
                        <input type="radio" name="receive" class="ml-2" value="non">
                        <label for="receive" class="form-label">non</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <p>J’accepte de recevoir mes factures au format électronique :</p>
                    </div>
                    <div class="col-1">
                        <input type="checkbox" name="receive_electronic" class="mr-1" value="">
                    </div>
                </div>
                <p>Si, en tant que consommateur, vous concluez le présent contrat hors de l’entreprise du vendeur, à savoir dans une foire, un salon ou une exposition, la clause suivante est d’application:</p>
                <div class="mt-2">
                    <label for="contract" class="form-label">Le contrat a été conclu à l’occasion de<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('contract') is-invalid @enderror" id="contract" autocomplete="off" placeholder="Le contrat a été conclu à l’occasion de" name="contract" value="{{ old('contract') }}" required>
                    @error('contract')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <h5 class="mt-2">Produits et services</h5>
                <div class="mt-2">
                    <label for="formula" class="form-label">Formule tarifaire<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('formula') is-invalid @enderror" id="formula" autocomplete="off" placeholder="Formule tarifaire" name="formula" value="{{ old('formula') }}" required>
                    @error('formula')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="phone_num" class="form-label">N° de téléphone<span class="text-danger">*</span></label>
                        <input type="phone" class="form-control @error('phone_num') is-invalid @enderror" id="phone_num" autocomplete="off" placeholder="N° de téléphone" name="phone_num" value="{{ old('phone_num') }}" required>
                        @error('phone_num')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="number_sim" class="form-label">N° carte SIM<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('number_sim') is-invalid @enderror" id="number_sim" autocomplete="off" placeholder="N° carte SIM" name="number_sim" value="{{ old('number_sim') }}" required>
                        @error('number_sim')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="sim_card" class="form-label">Nombre de cartes SIM<span class="text-danger">*</span></label>
                        <input type="phone" class="form-control @error('sim_card') is-invalid @enderror" id="sim_card" autocomplete="off" placeholder="Nombre de cartes SIM" name="sim_card" value="{{ old('sim_card') }}" required>
                        @error('phone_num')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-2 mt-4">
                        <p>Durée du contrat:</p>
                    </div>
                    <div class="col-5 mt-4">
                        <input type="radio" name="contract_length" class="ml-2" value="mois">
                        <label for="contract_length" class="form-label">mois</label>
                        <input type="radio" name="contract_length" class="ml-2" value="durée indéterminée">
                        <label for="contract_length" class="form-label">durée indéterminée</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="date_renewal" class="form-label">Date ultime de non reconduction<span class="text-danger">*</span></label>
                        <input class="form-control @error('date_renewal') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_renewal" name="date_renewal" value="{{ old('date_renewal') }}" type="date">
                        @error('date_renewal')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-8">
                        <label for="distributer" class="form-label">Distributeur<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('distributer') is-invalid @enderror" id="distributer" autocomplete="off" placeholder="Distributeur" name="distributer" value="{{ old('distributer') }}" required>
                        @error('distributer')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="client_number" class="form-label">Numéro de client<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('client_number') is-invalid @enderror" id="client_number" autocomplete="off" placeholder="Numéro de client" name="client_number" value="{{ old('client_number') }}" required>
                        @error('client_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="distributor_number" class="form-label">Numéro du distributeur<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('distributor_number') is-invalid @enderror" id="distributer" autocomplete="off" placeholder="Numéro du distributeur" name="distributor_number" value="{{ old('distributor_number') }}" required>
                        @error('distributor_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection