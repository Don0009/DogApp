@extends('layouts.backend')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <h4>Aanvraag nummerbehoud</h4>
            <form class="forms-sample" method="POST" action="{{ route('number_request.store') }}">
                @csrf()
                <div class="row mt-4">
                    <div class="col-8">
                        <p><b>Memo-datum</b> (werkdag waarop de klant wenst dat Telenet Group bvba, indien mogelijk,
                            start met het proces van zijn aanvraag tot nummerbehoud)</p>
                    </div>
                    <div class="col-4">
                        <input class="form-control @error('memo_date') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="d/m/yy" inputmode="numeric" id="memo_date" name="memo_date" value="{{ old('memo_date') }}" type="date">
                    </div>
                </div>
                <h5 class="mt-2">Identificatiegegevens</h5>
                <div class="form-group">
                    <input required type="hidden" name="form_lang" value="{{ $lang }}">
                </div>
                <p class="text-justify mt-2">Gelieve alle info in te vullen die voor u van toepassing is en ervoor te zorgen dat u aan Telenet Group bvba alle documenten bezorgt zoals vereist in de voorwaarden op de keerzijde.</p>
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
                        <label for="customer_number" class="form-label">Telenet Group bvba klantnummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('customer_number') is-invalid @enderror" id="customer_number" autocomplete="off" placeholder="Telenet Group bvba klantnummer" name="customer_number" value="{{ old('customer_number') }}" required>
                        @error('customer_number')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="name" class="form-label">Naam en voornaam<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" autocomplete="off" placeholder="Naam en voornaam" name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="mt-2">
                    <label for="company_name" class="form-label">Naam en juridische vorm van het bedrijf<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" autocomplete="off" placeholder="Naam en juridische vorm van het bedrijf" name="company_name" value="{{ old('company_name') }}" required>
                    @error('company_name')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="row mt-2">
                    <div class="col-2 mt-4">
                        <p>BTW/RPR-nummer<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4 mt-4">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">B E </span>
                            <input type="text" class="form-control @error('rpm_number') is-invalid @enderror" id="rpm_number" autocomplete="off" placeholder="BTW/RPR-nummer" name="rpm_number" value="{{ old('rpm_number') }}" required>
                            @error('rpm_number')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="phone" class="form-label">Telefoonnummer<span class="text-danger">*</span></label>
                        <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" autocomplete="off" placeholder="Telefoonnummer" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <p class="text-justify mt-3">
                    <b>Belangrijk:</b> uw persoonsgegevens, met inbegrip van elektronische gegevens, worden opgenomen in de bestanden van Telenet Group bvba en worden verwerkt voor doeleinden van klantenbeheer en direct marketing,
                    marktonderzoek en de preventie van fraude en inbreuken. De verwerking van deze gegevens is onderworpen aan de bepalingen van de wet op de bescherming van de persoonlijke levenssfeer van 8 december 1992,
                    en van de wet betreffende de elektronische communicatie van 13 juni 2005. U hebt, zoals bepaald in onze Algemene Voorwaarden, het recht op inzage en verbetering van deze gegevens. U kunt zich gratis verzetten
                    tegen het gebruik van uw persoonlijke gegevens voor doeleinden van direct marketing en marktonderzoek.
                </p>
                <h5 class="mt-3">Identificatiegegevens bij uw huidige mobiele operator:</h5>
                <p class="mt-1">In te vullen, indien verschillend van 1.</p>
                <p class="mt-1">. Betaalt u met een herlaadkaart ? Gelieve dan onderstaande gegevens 1, 7, 8 en 10 in te vullen</p>
                <p class="mt-1">. Hebt u een abonnement en wilt u één telefoonnummer overdragen? Gelieve dan onderstaande gegevens 1, 2, 6 of 8, 9 en 10 in te vullen.</p>
                <p class="text-justify mt-1">. Hebt u een abonnement en wilt u meerdere telefoonnummers overdragen en/of hebt u een bedrijf ? Gelieve dan onderstaande gegevens van 1 t.e.m. 10 in te vullen.</p>
                <div class="row mt-2">
                    <div class="col-7">
                        <p>Betaalwijze bij uw huidige operator (slechts één mogelijkheid aankruisen):<span class="text-danger">*</span> </p>
                    </div>
                    <div class="col-3">
                        <input type="radio" name="payment" value="1">
                        <label for="payment" class="form-label">Herlaadkaart</label>
                        <input type="radio" name="payment" value="2">
                        <label for="payment" class="form-label">Abonnement</label>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="customer_name" class="form-label">Naam en voornaam klant<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('customer_name') is-invalid @enderror" id="customer_name" autocomplete="off" placeholder="Naam en voornaam klant" name="customer_name" value="{{ old('customer_name') }}" required>
                        @error('customer_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="company_name1" class="form-label">Naam en juridische vorm<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('company_name1') is-invalid @enderror" id="company_name1" autocomplete="off" placeholder="Naam en juridische vorm" name="company_name1" value="{{ old('company_name1') }}" required>
                        @error('company_name1')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-6">
                        <label for="name_mandated" class="form-label">Naam van de volmachthouder<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name_mandated') is-invalid @enderror" id="name_mandated" autocomplete="off" placeholder="Naam van de volmachthouder" name="name_mandated" value="{{ old('name_mandated') }}" required>
                        @error('name_mandated')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-2 mt-4">
                        <p>BTW/RPR-nummer<span class="text-danger">*</span></p>
                    </div>
                    <div class="col-4 mt-4">
                        <div class="input-group ">
                            <span class="input-group-text" id="basic-addon1">B E </span>
                            <input type="text" class="form-control @error('rpm_number1') is-invalid @enderror" id="rpm_number1" autocomplete="off" placeholder=" BTW/RPR-nummer" name="rpm_number1" value="{{ old('rpm_number1') }}" required>
                            @error('rpm_number1')
                            <span class="invalid-feedback mb-2" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="customer_number1" class="form-label">Klantnummer bij uw huidige operator<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('customer_number1') is-invalid @enderror" id="customer_number1" autocomplete="off" placeholder="Numéro de client chez l'opérateur actuel" name="customer_number1" value="{{ old('customer_number1') }}" required>
                    @error('customer_number1')
                    <span class="invalid-feedback mb-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <p class="mt-3">Mobiele telefoonnummers die u wenst te behouden: zie hieronder of zie lijst van<input type="text" name="phone_attachment"> (aantal) telefoonnummers in bijlage. Zoals hierboven reeds vermeld (punt 6), dient u voor elk
                    klantnummer een apart formulier in te vullen. Gelieve hieronder dus alleen de telefoonnummers op te geven die horen bij het Klantnummer vermeld in puntje 6.</p>
                <div class="row mt-4">
                    <div class="col-4">
                        <label for="phone" class="form-label">Sim-kaart nummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('sim_num1') is-invalid @enderror" id="sim_num1" autocomplete="off" placeholder="Numéro de carte SIM" name="sim_num1" value="{{ old('sim_num1') }}" required>
                        <input type="text" class="form-control @error('sim_num2') is-invalid @enderror mt-2" id="sim_num2" autocomplete="off" placeholder="Numéro de carte SIM" name="sim_num2" value="{{ old('sim_num2') }}" required>
                        <input type="text" class="form-control @error('sim_num3') is-invalid @enderror mt-2" id="sim_num3" autocomplete="off" placeholder="Numéro de carte SIM" name="sim_num3" value="{{ old('sim_num3') }}" required>
                        <input type="text" class="form-control @error('sim_num4') is-invalid @enderror mt-2" id="sim_num4" autocomplete="off" placeholder="Numéro de carte SIM" name="sim_num4" value="{{ old('sim_num4') }}" required>
                        <input type="text" class="form-control @error('sim_num5') is-invalid @enderror mt-2" id="sim_num5" autocomplete="off" placeholder="Numéro de carte SIM" name="sim_num5" value="{{ old('sim_num5') }}" required>
                    </div>
                    <div class="col-4">
                        <label for="phone" class="form-label">Telefoonnummer<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('phone_number1') is-invalid @enderror" id="phone_number1" autocomplete="off" placeholder="Nom de la personne mandatée" name="phone_number1" value="{{ old('phone_number1') }}" required>
                        <input type="text" class="form-control @error('phone_number2') is-invalid @enderror mt-2" id="phone_number2" autocomplete="off" placeholder="Nom de la personne mandatée" name="phone_number2" value="{{ old('phone_number2') }}" required>
                        <input type="text" class="form-control @error('phone_number3') is-invalid @enderror mt-2" id="phone_number3" autocomplete="off" placeholder="Nom de la personne mandatée" name="phone_number3" value="{{ old('phone_number3') }}" required>
                        <input type="text" class="form-control @error('phone_number4') is-invalid @enderror mt-2" id="phone_number4" autocomplete="off" placeholder="Nom de la personne mandatée" name="phone_number4" value="{{ old('phone_number4') }}" required>
                        <input type="text" class="form-control @error('phone_number5') is-invalid @enderror mt-2" id="phone_number5" autocomplete="off" placeholder="Nom de la personne mandatée" name="phone_number5" value="{{ old('phone_number5') }}" required>
                    </div>
                    <div class="col-4">
                        <label for="exec_date" class="form-label">Exec.memo-datum<span class="text-danger">*</span></label>
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
                        <label for="evidence" class="form-label">Ondersteunende documenten</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control @error('docu1') is-invalid @enderror" id="docu1" autocomplete="off" name="docu1" value="{{ old('docu1') }}" required>
                    </div>
                </div>
                <div class="mt-2">
                    <input type="text" class="form-control @error('docu2') is-invalid @enderror" id="docu2" autocomplete="off" name="docu2" value="{{ old('docu2') }}" required>
                </div>
                <p class="text- justify mt-3">
                    (voornaam en naam klant /
                    volmachthouder van de bedrijfsklant) geeft hiermee aan Telenet Group bvba, Neerveldstraat 105, 1200 Brussel toestemming om voor zijn rekening de volgende handelingen te stellen ten aanzien van zijn huidige
                    mobiele operator: a) indienen van het verzoek tot overdracht naar Telenet Group bvba van de mobiele telefoonnummers van de klant die vermeld zijn in dit formulier; b) en de beëindiging van de contractuele
                    relatie van de klant met zijn huidige mobiele operator voor wat betreft dezelfde mobiele telefoonnummers.
                </p>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="phone" class="form-label">Naam verdeler<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('distributor_name') is-invalid @enderror" id="distributor_name" autocomplete="off" placeholder="Naam verdeler" name="distributor_name" value="{{ old('distributor_name') }}" required>
                        @error('distributor_name')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="distribtuor_num" class="form-label">Nummer verdeler<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('distribtuor_num') is-invalid @enderror" id="distribtuor_num" autocomplete="off" placeholder="Nummer verdeler" name="distribtuor_num" value="{{ old('distribtuor_num') }}" required>
                        @error('phone')
                        <span class="invalid-feedback mb-2" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <label for="phone" class="form-label">Datum:<span class="text-danger">*</span></label>
                        <input class="form-control @error('date1') is-invalid @enderror" data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric" id="date1" name="date1" value="{{ old('date1') }}" type="date">
                    </div>
                    <div class="col-3">
                        <label for="phone" class="form-label">Datum:<span class="text-danger">*</span></label>
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