@extends('layouts.backend')

@section('content')

<div class="container">
    <form class="forms-sample" method="POST" action="{{ route('subscription_request.store') }}">
        @csrf()
        <div class="card">
            <div class="card-body">
                <h4>Aanvraag tot aansluiting</h4>
                <h5 class="mt-4"> Identificatiegegevens:</h5>
                <div class="form-group">
                    <input required type="hidden" name="form_lang" value="{{ $lang }}">
                </div>
                <div class="row mt-3">
                    <div class="col-1">
                        <p>Title:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-3">
                        <input type="radio" name="title" class="ml-2" value="1">
                        <label for="title" class="form-label">Mevrouw</label>
                        <input type="radio" name="title" class="ml-2" value="2">
                        <label for="title" class="form-label">De heer</label>
                    </div>
                    <div class="col-1">
                        <p>Taal:<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="language" class="ml-2" value="1">
                        <label for="language" class="form-label">Frans</label>
                        <input type="radio" name="language" class="ml-2" value="2">
                        <label for="language" class="form-label">Nederlands</label>
                        <input type="radio" name="language" class="ml-2" value="3">
                        <label for="language" class="form-label">Engels</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="name" class="form-label">Naam<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Naam" name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="f_name" class="form-label">Voornaam<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('f_name') is-invalid @enderror" id="f_name" autocomplete="off" placeholder="Voornaam" name="f_name" value="{{ old('f_name') }}" required>
                        @error('f_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-6">
                        <label for="date_of_birth" class="form-label">Geboortedatum<span class="text-danger">*</span></label>
                        <input class="form-control @error('date_of_birth') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" type="date">
                        @error('date_of_birth')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="id_card_number" class="form-label">Nummer identiteitskaart<span class="text-danger">*</span></label>
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
                        <p>Kaarttype:<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-10">
                        <input type="radio" name="card_type" class="ml-2" value="1">
                        <label for="card_type" class="form-label">identiteitskaart</label>
                        <input type="radio" name="card_type" class="ml-2" value="2">
                        <label for="card_type" class="form-label">paspoort</label>
                        <input type="radio" name="card_type" class="ml-2" value="3">
                        <label for="card_type" class="form-label">verblijfskaart voor onderdaan EU</label>
                        <input type="radio" name="card_type" class="ml-2" value="4">
                        <label for="card_type" class="form-label">identiteitskaart voor vreemdeling</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="nationality" class="form-label">Nationaliteit<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('nationality') is-invalid @enderror" id="nationality" autocomplete="off" placeholder="Nationaliteit" name="nationality" value="{{ old('nationality') }}" required>
                        @error('nationality')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="company_name" class="form-label">Naam van het bedrijf / Master Account en juridische vorm<span class="text-danger">*</span></label>
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
                        <p>BTW/RPR nr<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-5">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">B E </span>
                            <input type="text" class="form-control @error('rpm_no') is-invalid @enderror" id="rpm_no" autocomplete="off" placeholder="BTW/RPR nr" name="rpm_no" value="{{ old('rpm_no') }}" required>
                            @error('rpm_no')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-2 mt-1">
                        <p>Vrijgesteld van BTW:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-3 mt-1">
                        <input type="radio" name="vat" class="ml-2" value="1">
                        <label for="vat" class="form-label">oui</label>
                        <input type="radio" name="vat" class="ml-2" value="2">
                        <label for="vat" class="form-label">non</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="street" class="form-label">Straat<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('street') is-invalid @enderror" id="street" autocomplete="off" placeholder="Straat" name="street" value="{{ old('street') }}" required>
                        @error('street')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="box" class="form-label">Nr/Bus<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('box') is-invalid @enderror" id="box" autocomplete="off" placeholder="Nr/Bus" name="box" value="{{ old('box') }}" required>
                        @error('box')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="locality" class="form-label">Gemeente<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('locality') is-invalid @enderror" id="locality" autocomplete="off" placeholder="Gemeente" name="locality" value="{{ old('locality') }}" required>
                        @error('locality')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="postal_code" class="form-label">Postcode<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('postal_code') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Postcode" name="postal_code" value="{{ old('postal_code') }}" required>
                        @error('postal_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="phone" class="form-label">Telefoonnummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" autocomplete="off" placeholder="Telefoonnummer" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="fax" class="form-label">Fax<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('fax') is-invalid @enderror" id="locality" autocomplete="off" placeholder="FAX" name="fax" value="{{ old('fax') }}" required>
                        @error('fax')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-3">
                        <label for="mail" class="form-label">E-mail adres<span class="text-danger">*</span></label>
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
                        <p>Ik wens dat mijn adresgegevens vermeld worden in een telefoongids en/of in een inlichtingendienst:</p>
                    </div>
                    <div class="col-2">
                        <input type="radio" name="contact_details" class="ml-2" value="1">
                        <label for="contact_details" class="form-label">oui</label>
                        <input type="radio" name="contact_details" class="ml-2" value="2">
                        <label for="contact_details" class="form-label">non</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <p>Ik sta het gebruik van mijn elektronishe gegevens voor commerciële doeleinden niet toe</p>
                    </div>
                    <div class="col-2">
                        <input type="checkbox" name="authorize" class="mr-1" value="1">
                    </div>
                </div>
                <p class="mt-0">Indien u geen commerciële oproepen meer wenst te ontvangen, kan u zich inschrijven op volgende web pagina: www.bel-me-niet-meer.be</p>
                <div class="row">
                    <div class="col-11">
                        <p>Ik aanvaard dat mijn gegevens ook gebruikt worden voor direct marketing doeleinden door de rechtstreekse partners van Telenet Group bvba:</p>
                    </div>
                    <div class="col-1">
                        <input type="checkbox" name="agree" class="mr-1" value="1">
                    </div>
                </div>
                <h5 class="mt-2">Betalingsinformatie:</h5>

                <div class="row mt-2">
                    <div class="col-6">
                        <label for="bank_account" class="form-label">Bankrekeningnummer IBAN<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('bank_account') is-invalid @enderror" id="bank_account" autocomplete="off" placeholder="Bankrekeningnummer IBAN" name="bank_account" value="{{ old('bank_account') }}" required>
                        @error('bank_account')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="billing_address" class="form-label">Facturatieadres (indien verschillend):<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('billing_address') is-invalid @enderror" id="postal_code" autocomplete="off" placeholder="Facturatieadres (indien verschillend)" name="billing_address" value="{{ old('billing_address') }}" required>
                        @error('billing_address')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="street1" class="form-label">Straat<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('street1') is-invalid @enderror" id="street1" autocomplete="off" placeholder="Straat" name="street1" value="{{ old('street1') }}" required>
                        @error('street1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="box1" class="form-label">Nr/Bus<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('box1') is-invalid @enderror" id="box1" autocomplete="off" placeholder="Nr/Bus" name="box1" value="{{ old('box1') }}" required>
                        @error('box1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="locality1" class="form-label">Gemeente<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('locality1') is-invalid @enderror" id="locality1" autocomplete="off" placeholder="Gemeente" name="locality1" value="{{ old('locality1') }}" required>
                        @error('locality1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="postal_code1" class="form-label">Postcode<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('postal_code1') is-invalid @enderror" id="postal_code1" autocomplete="off" placeholder="Postcode" name="postal_code1" value="{{ old('postal_code1') }}" required>
                        @error('postal_code1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-4">
                        <p>Ik verkies op volgende wijze te betalen:<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-8">
                        <input type="radio" name="payment_method" class="ml-2" value="1">
                        <label for="payment_method" class="form-label">via domiciliëringsopdracht</label>
                        <input type="radio" name="payment_method" class="ml-2" value="2">
                        <label for="payment_method" class="form-label">via overschrijvingsformulier</label>
                        <input type="radio" name="payment_method" class="ml-2" value="3">
                        <label for="payment_method" class="form-label">met kredietkaart</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <p>Ik wens een gedetailleerd overzicht van mijn gesprekken te ontvangen:</p>
                    </div>
                    <div class="col-2">
                        <input type="radio" name="receive" class="ml-2" value="1">
                        <label for="receive" class="form-label">ja</label>
                        <input type="radio" name="receive" class="ml-2" value="2">
                        <label for="receive" class="form-label">neen</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <p>Ik stem in met de electronische verzending van mijn factuur:</p>
                    </div>
                    <div class="col-1">
                        <input type="checkbox" name="receive_electronic" class="mr-1" value="1">
                    </div>
                </div>
                <p>Indien U, in uw hoedanigheid van consument, deze overeenkomst heeft afgesloten buiten de onderneming van de verkoper, te weten op een salon, beurs of tentoonstelling, is de volgende clausule van toepassing:</p>
                <div class="mt-2">
                    <label for="contract" class="form-label">Deze overeenkomst werd afgesloten naar aanleiding van<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('contract') is-invalid @enderror" id="contract" autocomplete="off" placeholder="Deze overeenkomst werd afgesloten naar aanleiding van" name="contract" value="{{ old('contract') }}" required>
                    @error('contract')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <h5 class="mt-2">Producten en diensten:</h5>
                <div class="mt-2">
                    <label for="formula" class="form-label">Tariefformule<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('formula') is-invalid @enderror" id="formula" autocomplete="off" placeholder="Tariefformule" name="formula" value="{{ old('formula') }}" required>
                    @error('formula')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="phone_num" class="form-label">Telefoonnummer<span class="text-danger">*</span></label>
                        <input type="phone" class="form-control @error('phone_num') is-invalid @enderror" id="phone_num" autocomplete="off" placeholder="Telefoonnummer" name="phone_num" value="{{ old('phone_num') }}" required>
                        @error('phone_num')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="number_sim" class="form-label">SIM-kaart nr<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('number_sim') is-invalid @enderror" id="number_sim" autocomplete="off" placeholder="SIM-kaart nr" name="number_sim" value="{{ old('number_sim') }}" required>
                        @error('number_sim')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-3">
                        <label for="sim_card" class="form-label">Aantal SIMkaarten<span class="text-danger">*</span></label>
                        <input type="phone" class="form-control @error('sim_card') is-invalid @enderror" id="sim_card" autocomplete="off" placeholder="Nombre de cartes SIM" name="sim_card" value="{{ old('sim_card') }}" required>
                        @error('phone_num')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-2 mt-4">
                        <p>Duur van het contract:</p>
                    </div>
                    <div class="col-7 mt-4">
                        <input type="text" name="contract_length1">
                        <label for="contract_length" class="form-label">maanden</label>
                        <input type="text" name="contract_length2">
                        <label for="contract_length" class="form-label">onbepaald</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <p>Split Billing</p>
                    </div>
                    <div class="col-2">
                        <p>Vast bedrag €</p>
                    </div>
                    <div class="col-2">
                        <p>Percentage %</p>
                    </div>
                    <div class="col-2">
                        <p>Producten/diensten</p>
                    </div>
                    <div class="col-2">
                        <p>Bestemming</p>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <p></p>
                    </div>
                    <div class="col-2">
                        <input type="text" name="fix_amount">
                    </div>
                    <div class="col-2">
                        <input type="text" name="percentage">
                    </div>
                    <div class="col-2">
                        <input type="text" name="products">
                    </div>
                    <div class="col-2">
                        <input type="text" name="destination">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <input type="radio" name="receive" class="ml-2" value="1">
                        <label for="receive" class="form-label">ja</label>
                    </div>
                    <div class="col-2">
                        <input type="text" name="fix_amount1">
                    </div>
                    <div class="col-2">
                        <input type="text" name="percentage1">
                    </div>
                    <div class="col-2">
                        <input type="text" name="products1">
                    </div>
                    <div class="col-2">
                        <input type="text" name="destination1">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-2">
                        <input type="radio" name="receive" class="ml-2" value="2">
                        <label for="receive" class="form-label">neen</label>
                    </div>
                    <div class="col-2">
                        <input type="text" name="fix_amount2">
                    </div>
                    <div class="col-2">
                        <input type="text" name="percentage2">
                    </div>
                    <div class="col-2">
                        <input type="text" name="products2">
                    </div>
                    <div class="col-2">
                        <input type="text" name="destination2">
                    </div>
                </div>






                <div class="row mt-2">
                    <div class="col-4">
                        <label for="date_renewal" class="form-label">Uiterste datum verzet verlenging:<span class="text-danger">*</span></label>
                        <input class="form-control @error('date_renewal') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date_renewal" name="date_renewal" value="{{ old('date_renewal') }}" type="date">
                        @error('date_renewal')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-8">
                        <label for="distributer" class="form-label">Verdeler<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('distributer') is-invalid @enderror" id="distributer" autocomplete="off" placeholder="Verdeler" name="distributer" value="{{ old('distributer') }}" required>
                        @error('distributer')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="client_number" class="form-label">Klantnummer:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('client_number') is-invalid @enderror" id="client_number" autocomplete="off" placeholder="Klantnummer" name="client_number" value="{{ old('client_number') }}" required>
                        @error('client_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="distributor_number" class="form-label">Nummer verdeler:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('distributor_number') is-invalid @enderror" id="distributer" autocomplete="off" placeholder="Numéro du distributeur" name="distributor_number" value="{{ old('distributor_number') }}" required>
                        @error('distributor_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5>Maak u het leven gemakkelijker</h5>
                <h5 class="mt-5">Kredietkaart</h5>
                <div class="mt-2">
                    <label for="easier_company_name" class="form-label">Firmanaam en juridische vorm<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('easier_company_name') is-invalid @enderror" id="easier_company_name" autocomplete="off" placeholder="Firmanaam en juridische vorm" name="easier_company_name" value="{{ old('easier_company_name') }}" required>
                    @error('easier_company_name')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="easier_name" class="form-label">Naam<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('easier_name') is-invalid @enderror" id="easier_name" autocomplete="off" placeholder="Naam" name="easier_name" value="{{ old('easier_name') }}" required>
                        @error('easier_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="easier_f_name" class="form-label">Prénom<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('easier_f_name') is-invalid @enderror" id="easier_f_name" autocomplete="off" placeholder="Prénom" name="easier_f_name" value="{{ old('easier_f_name') }}" required>
                        @error('easier_f_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="easier_street" class="form-label">Straat<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('easier_street') is-invalid @enderror" id="street" autocomplete="off" placeholder="Rue" name="easier_street" value="{{ old('easier_street') }}" required>
                        @error('easier_street')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="easier_box" class="form-label">Nr/Bus<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('easier_box') is-invalid @enderror" id="easier_box" autocomplete="off" placeholder="Nr/Bus" name="easier_box" value="{{ old('easier_box') }}" required>
                        @error('easier_box')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="easier_postal_code" class="form-label">Postcode<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('easier_postal_code') is-invalid @enderror" id="easier_postal_code" autocomplete="off" placeholder="Postcode" name="easier_postal_code" value="{{ old('easier_postal_code') }}" required>
                        @error('easier_postal_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="easier_locality" class="form-label">Gemeente<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('easier_locality') is-invalid @enderror" id="easier_locality" autocomplete="off" placeholder="Gemeente" name="easier_locality" value="{{ old('easier_locality') }}" required>
                        @error('easier_locality')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="easier_cus_number" class="form-label">Telenet Group bvba klantnummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('easier_cus_number') is-invalid @enderror" id="easier_cus_number" autocomplete="off" placeholder="Numéro de client Telenet Group spr" name="easier_cus_number" value="{{ old('easier_cus_number') }}" required>
                        @error('easier_cus_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <p class="mt-4">geef hierbij uitdrukkelijk toestemming aan Telenet Group bvba - Neerveldstraat 105 - 1200 Brussel, om alle Telenet Group bvba facturen met
                    bovenvermeld klantnummer te vereffenen door middel van mijn kredietkaart</p>
                <div class="row mt-4">
                    <div class="col-5">
                        <label for="american_express" class="form-label">American Express<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('american_express') is-invalid @enderror" id="american_express" autocomplete="off" placeholder="American Express" name="american_express" value="{{ old('american_express') }}" required>
                        @error('american_express')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-5">
                        <label for="visa_card" class="form-label">VISA/MasterCard<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('visa_card') is-invalid @enderror" id="easier_cus_number" autocomplete="off" placeholder="VISA/MasterCard" name="visa_card" value="{{ old('visa_card') }}" required>
                        @error('visa_card')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-2">
                        <label for="due_date" class="form-label">Vervaldatum<span class="text-danger">*</span></label>
                        <input class="form-control @error('due_date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="due_date" name="due_date" value="{{ old('due_date') }}" type="date">
                        @error('due_date')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <p class="mt-3">Hebt u een nieuw kaartnummer ? Laat ons dan zo snel mogelijk iets weten. Het adres vindt u bovenaan.</p>
                <p class="mt-2">Bij weigering tot betaling door mijn kredietkaartfirma, blijf ikzelf volledig verantwoordelijk voor de betaling van mijn facturen.</p>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="agre_date" class="form-label">Datum<span class="text-danger">*</span></label>
                        <input class="form-control @error('agre_date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="agre_date" name="agre_date" value="{{ old('agre_date') }}" type="date">
                        @error('agre_date')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="agre_locality" class="form-label">Plaats:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('agre_locality') is-invalid @enderror" id="locality1" autocomplete="off" placeholder="Plaats" name="agre_locality" value="{{ old('agre_locality') }}" required>
                        @error('agre_locality')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4>Mandaat europese domiciliëring</h4>
                <h5>SEPA - CORE</h5>

                <p class="mt-5">Indien u uw facturen per domiciliëring wenst te betalen, gelieve dan dit formulier in te vullen en naar ons terug te sturen.</p>
                <p>We benadrukken dat u uw facturen per overschrijving dient te betalen zolang u een overschrijvingsformulier ontvangt.</p>
                <h5 class="mt-4">Mandaat referte (voorbehouden voor Telenet Group)</h5>
                <div class="mt-3">
                    <label for="mandate_number" class="form-label">Mandaatnummer<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('mandate_number') is-invalid @enderror" id="mandate_number" autocomplete="off" placeholder="Mandaatnummer" name="mandate_number" value="{{ old('mandate_number') }}" required>
                    @error('mandate_number')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <h5 class="mt-4">Ondergetekende</h5>
                <div class="row mt-3">
                    <div class="col-4">
                        <label for="debtor_name" class="form-label">Naam van de schuldenaar<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('debtor_name') is-invalid @enderror" id="debtor_name" autocomplete="off" placeholder="Naam van de schuldenaar" name="debtor_name" value="{{ old('debtor_name') }}" required>
                        @error('debtor_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="signed_f_name" class="form-label">Voornaam<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('signed_f_name') is-invalid @enderror" id="signed_f_name" autocomplete="off" placeholder="Voornaam" name="signed_f_name" value="{{ old('signed_f_name') }}" required>
                        @error('signed_f_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="signed_street" class="form-label">Straat<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('signed_street') is-invalid @enderror" id="signed_street" autocomplete="off" placeholder="Straat" name="signed_street" value="{{ old('signed_street') }}" required>
                        @error('signed_street')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-4">
                        <label for="signed_box" class="form-label">Nr/Bus<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('signed_box') is-invalid @enderror" id="locality1" autocomplete="off" placeholder="Nr/Bus" name="signed_box" value="{{ old('signed_box') }}" required>
                        @error('signed_box')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="signed_locality" class="form-label">Gemeente<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('signed_locality') is-invalid @enderror" id="signed_locality" autocomplete="off" placeholder="Gemeente" name="signed_locality" value="{{ old('signed_locality') }}" required>
                        @error('signed_locality')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="signed_postal_code" class="form-label">Postcode<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('signed_postal_code') is-invalid @enderror" id="signed_postal_code" autocomplete="off" placeholder="Postcode" name="signed_postal_code" value="{{ old('signed_postal_code') }}" required>
                        @error('signed_postal_code')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-4">
                        <label for="signed_country" class="form-label">Land<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('signed_country') is-invalid @enderror" id="signed_country" autocomplete="off" placeholder="Land" name="signed_country" value="{{ old('signed_country') }}" required>
                        @error('signed_country')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="signed_iban" class="form-label">IBAN-rekeningnummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('signed_iban') is-invalid @enderror" id="signed_iban" autocomplete="off" placeholder="IBAN-rekeningnummer" name="signed_iban" value="{{ old('signed_iban') }}" required>
                        @error('signed_iban')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="signed_bic" class="form-label">BIC-code<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('signed_bic') is-invalid @enderror" id="signed_bic" autocomplete="off" placeholder="BIC-code" name="signed_bic" value="{{ old('signed_bic') }}" required>
                        @error('signed_bic')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-8">
                        <p>Nummer van het onderliggende contract (uw klantnummer) tussen Telenet Group en de schuldenaar:</p>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control @error('concluded') is-invalid @enderror" id="concluded" autocomplete="off" placeholder="numéro de compte client" name="concluded" value="{{ old('concluded') }}" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4">
                        <label for="signed_date" class="form-label">Datum:<span class="text-danger">*</span></label>
                        <input class="form-control @error('signed_date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="signed_date" name="signed_date" value="{{ old('signed_date') }}" type="date">
                        @error('signed_date')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Submit</button>
            <button class="btn btn-secondary">Cancel</button>
        </div>
    </form>
</div>
@endsection