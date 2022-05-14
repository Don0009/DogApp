@extends('layouts.backend')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <h4>Demande de conservation de numéro</h4>
            <form class="forms-sample" method="POST" action="{{ route('number_request.store') }}">
                @csrf()
                <div class="row mt-4">
                    <div class="col-8">
                        <p><b>Date-mémo</b> (jour ouvrable durant lequel le client souhaite que, dans la mesure du possible, Telenet Group sprl
                            démarre la procédure de demande de conservation de numéro)</p>
                    </div>
                    <div class="col-4">
                        <input class="form-control @error('memo_date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="memo_date" name="memo_date" value="{{ old('memo_date') }}" type="date">
                    </div>
                </div>
                <h5 class="mt-2"> Données d’identification</h5>
                <div class="form-group">
                    <input required type="hidden" name="form_lang" value="{{ $lang }}">
                </div>
                <p class="text-justify mt-2">Merci de compléter toutes les cases qui sont d'application dans votre cas d'espèce et de vous assurer de fournir également à Telenet Group sprl l'ensemble des documents requis dans les conditions reprises au verso.</p>
                <div class="row mt-3">
                    <div class="col-1">
                        <p>Title:<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-3">
                        <input type="radio" name="title" class="ml-2" value="1">
                        <label for="title" class="form-label">Madame</label>
                        <input type="radio" name="title" class="ml-2" value="2">
                        <label for="title" class="form-label">Monsieur</label>
                    </div>
                    <div class="col-1">
                        <p>Langue:<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4">
                        <input type="radio" name="language" class="ml-2" value="1">
                        <label for="language" class="form-label">Français</label>
                        <input type="radio" name="language" class="ml-2" value="2">
                        <label for="language" class="form-label">Néerlandais</label>
                        <input type="radio" name="language" class="ml-2" value="3">
                        <label for="language" class="form-label">Anglais</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="customer_number" class="form-label">Numéro de client Telenet Group sprl<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('customer_number') is-invalid @enderror" id="customer_number" autocomplete="off" placeholder="Numéro de client Telenet Group sprl" name="customer_number" value="{{ old('customer_number') }}" required>
                        @error('customer_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="name" class="form-label">Nom et prénom<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Nom et prénom" name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2">
                    <label for="company_name" class="form-label">Nom de la société et forme juridique<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" autocomplete="off" placeholder="Nom de la société et forme juridique" name="company_name" value="{{ old('company_name') }}" required>
                    @error('company_name')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mt-2">
                    <div class="col-2 mt-4">
                        <p>Numéro de TVA/RPM<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4 mt-4">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">B E </span>
                            <input type="text" class="form-control @error('rpm_number') is-invalid @enderror" id="rpm_number" autocomplete="off" placeholder="Numéro de TVA/RPM" name="rpm_number" value="{{ old('rpm_number') }}" required>
                            @error('rpm_number')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="phone" class="form-label">Numéro de téléphone<span class="text-danger">*</span></label>
                        <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" autocomplete="off" placeholder="Numéro de téléphone" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <p class="text-justify mt-3">
                    <b>Important:</b> les données à caractère personnel, en ce compris les données électroniques, sont enregistrées dans les fichiers de Telenet Group sprl en vue de la gestion de la clientèle, de la prévention des fraudes et
                    des illégalités et du marketing et des études de marché. Le traitement de ces données est soumis, entre autres, aux dispositions de la loi du 8 décembre 1992 relative à la Protection de la Vie Privée et de la loi du
                    13 juin 2005 relative aux communications électroniques. Vous disposez d’un droit d’accès et de modifications de ces données, conformément à ce qui est repris dans nos Conditions Générales. Vous pouvez vous
                    opposer gratuitement à l’utilisation de vos données personnelles à des fins de marketing et d’études de marché.
                </p>
                <h5 class="mt-3">Données d'identification auprès de l'opérateur mobile actuel:</h5>
                <p class="mt-1">A compléter si différent de 1.</p>
                <p class="mt-1">. Vous payez avec une carte prépayée ? Veuillez dans ce cas compléter les données 1, 7, 8 et 10 ci-dessous</p>
                <p class="mt-1">. Vous avez un abonnement et vous voulez transférer un numéro de téléphone? Veuillez dans ce cas compléter les données 1, 2, 6 ou 8, 9 et 10 ci-dessous.</p>
                <p class="text-justify mt-1">. Vous avez un abonnement et vous voulez transférer plusieurs numéros de téléphone et/ou vous êtes gérant d'une entreprise? Veuillez dans ce cas compléter les données de 1 à 10 ci-dessous.</p>
                <div class="row mt-2">
                    <div class="col-7">
                        <p>Mode de paiement chez l'opérateur actuel (cocher une seule possibilité):<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-3">
                        <input type="radio" name="payment" value="1">
                        <label for="payment" class="form-label">Carte prépayée</label>
                        <input type="radio" name="payment" value="2">
                        <label for="payment" class="form-label">Abonnement</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="customer_name" class="form-label">Nom et prénom du client<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('customer_name') is-invalid @enderror" id="customer_name" autocomplete="off" placeholder="Nom et prénom du client" name="customer_name" value="{{ old('customer_name') }}" required>
                        @error('customer_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="company_name1" class="form-label">Nom de la société et forme juridique<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('company_name1') is-invalid @enderror" id="company_name1" autocomplete="off" placeholder="Nom de la société et forme juridique" name="company_name1" value="{{ old('company_name1') }}" required>
                        @error('company_name1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="name_mandated" class="form-label">Nom de la personne mandatée<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name_mandated') is-invalid @enderror" id="name_mandated" autocomplete="off" placeholder="Nom de la personne mandatée" name="name_mandated" value="{{ old('name_mandated') }}" required>
                        @error('name_mandated')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-2 mt-4">
                        <p>Numéro de TVA/RPM<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4 mt-4">
                        <div class="input-group ">
                            <span class="input-group-text" id="basic-addon1">B E </span>
                            <input type="text" class="form-control @error('rpm_number1') is-invalid @enderror" id="rpm_number1" autocomplete="off" placeholder="Numéro de TVA/RPM" name="rpm_number1" value="{{ old('rpm_number1') }}" required>
                            @error('rpm_number1')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="customer_number1" class="form-label">Numéro de client chez l'opérateur actuel<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('customer_number1') is-invalid @enderror" id="customer_number1" autocomplete="off" placeholder="Numéro de client chez l'opérateur actuel" name="customer_number1" value="{{ old('customer_number1') }}" required>
                    @error('customer_number1')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <p class="mt-3">Numéros de téléphone mobile que vous souhaitez conserver: voir ci-dessous ou voir la liste de<input type="text" name="phone_attachment">(nombre) numéros en annexe. Comme il a été dit au point 6, il convient que vous
                    utilisiez un formulaire par numéro de client; merci donc de ne reprendre ci dessous que le(s) numéro(s) de GSM lié(s) au numéro de client repris au point 6.</p>
                <div class="row mt-4">
                    <div class="col-4">
                        <label for="phone" class="form-label">Numéro de carte SIM<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('sim_num1') is-invalid @enderror" id="sim_num1" autocomplete="off" placeholder="Numéro de carte SIM" name="sim_num1" value="{{ old('sim_num1') }}" required>
                        <input type="text" class="form-control @error('sim_num2') is-invalid @enderror mt-2" id="sim_num2" autocomplete="off" placeholder="Numéro de carte SIM" name="sim_num2" value="{{ old('sim_num2') }}" required>
                        <input type="text" class="form-control @error('sim_num3') is-invalid @enderror mt-2" id="sim_num3" autocomplete="off" placeholder="Numéro de carte SIM" name="sim_num3" value="{{ old('sim_num3') }}" required>
                        <input type="text" class="form-control @error('sim_num4') is-invalid @enderror mt-2" id="sim_num4" autocomplete="off" placeholder="Numéro de carte SIM" name="sim_num4" value="{{ old('sim_num4') }}" required>
                        <input type="text" class="form-control @error('sim_num5') is-invalid @enderror mt-2" id="sim_num4" autocomplete="off" placeholder="Numéro de carte SIM" name="sim_num5" value="{{ old('sim_num5') }}" required>
                    </div>
                    <div class="col-4">
                        <label for="phone" class="form-label">Numéro de téléphone<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('phone_number1') is-invalid @enderror" id="phone_number1" autocomplete="off" placeholder="Nom de la personne mandatée" name="phone_number1" value="{{ old('phone_number1') }}" required>
                        <input type="text" class="form-control @error('phone_number2') is-invalid @enderror mt-2" id="phone_number2" autocomplete="off" placeholder="Nom de la personne mandatée" name="phone_number2" value="{{ old('phone_number2') }}" required>
                        <input type="text" class="form-control @error('phone_number3') is-invalid @enderror mt-2" id="phone_number3" autocomplete="off" placeholder="Nom de la personne mandatée" name="phone_number3" value="{{ old('phone_number3') }}" required>
                        <input type="text" class="form-control @error('phone_number4') is-invalid @enderror mt-2" id="phone_number4" autocomplete="off" placeholder="Nom de la personne mandatée" name="phone_number4" value="{{ old('phone_number4') }}" required>
                        <input type="text" class="form-control @error('phone_number5') is-invalid @enderror mt-2" id="phone_number5" autocomplete="off" placeholder="Nom de la personne mandatée" name="phone_number5" value="{{ old('phone_number5') }}" required>
                    </div>
                    <div class="col-4">
                        <label for="exec_date" class="form-label">Exec. date-mémo<span class="text-danger">*</span></label>
                        <input class="form-control @error('exec_date1') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="exec_date1" name="exec_date1" value="{{ old('exec_date1') }}" type="date">
                        <input class="form-control @error('exec_date2') is-invalid @enderror mt-2" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="exec_date2" name="exec_date2" value="{{ old('exec_date2') }}" type="date">
                        <input class="form-control @error('exec_date3') is-invalid @enderror mt-2" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="exec_date3" name="exec_date3" value="{{ old('exec_date3') }}" type="date">
                        <input class="form-control @error('exec_date4') is-invalid @enderror mt-2" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="exec_date4" name="exec_date4" value="{{ old('exec_date4') }}" type="date">
                        <input class="form-control @error('exec_date5') is-invalid @enderror mt-2" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="exec_date5" name="exec_date5" value="{{ old('exec_date5') }}" type="date">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-4 mt-2">
                        <input type="checkbox" name="evidence" class="mr-4" value="1">
                        <label for="evidence" class="form-label">Documents ajoutés à titre de preuve</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control @error('docu1') is-invalid @enderror" id="docu1" autocomplete="off" name="docu1" value="{{ old('docu1') }}" required>
                    </div>
                </div>
                <div class="mt-2">
                    <input type="text" class="form-control @error('docu2') is-invalid @enderror" id="docu2" autocomplete="off" name="docu2" value="{{ old('docu2') }}" required>
                </div>
                <p class="text- justify mt-3">
                    (Nom et prénom du client/de la
                    personne mandatée par la société) autorise par la présente Telenet Group sprl, établie rue Neerveld 105, à 1200 Bruxelles, à accomplir pour son compte les actes suivants à l'égard de son opérateur mobile actuel:
                    a) Introduction de la demande de transfert vers Telenet Group sprl du (des) numéro(s) de téléphone mobile du client, mentionné(s) dans le présent formulaire, b) et résiliation de la relation contractuelle du client
                    avec son opérateur mobile actuel ayant pour objet le (les) même(s) numéro(s) de téléphone mobile.
                </p>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="phone" class="form-label">Nom du distributeur<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('distributor_name') is-invalid @enderror" id="distributor_name" autocomplete="off" placeholder="Nom du distributeur" name="distributor_name" value="{{ old('distributor_name') }}" required>
                        @error('distributor_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="distribtuor_num" class="form-label">Numéro du distributeur<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('distribtuor_num') is-invalid @enderror" id="distribtuor_num" autocomplete="off" placeholder="Numéro du distributeur" name="distribtuor_num" value="{{ old('distribtuor_num') }}" required>
                        @error('phone')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="phone" class="form-label">Date:<span class="text-danger">*</span></label>
                        <input class="form-control @error('date1') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date1" name="date1" value="{{ old('date1') }}" type="date">
                    </div>
                    <div class="col-3">
                        <label for="phone" class="form-label">Date:<span class="text-danger">*</span></label>
                        <input class="form-control @error('date2') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date2" name="date2" value="{{ old('date2') }}" type="date">
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