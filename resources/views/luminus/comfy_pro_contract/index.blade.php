@extends('layouts.backend')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Internet Tv</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('comfy_pro_contract.create') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create User
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Internet Tv</h6>
                    <p class="card-description">All the internet tv are listed here.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>

                                    <th>Client number</th>
                                    <th>Contact ID</th>
                                    <th>Dealer ID</th>
                                    <th>Seller ID</th>
                                    <th>Present To Luminus</th>
                                    <th>Bedrijfs-name</th>
                                    <th>Vennoot-schapsvorm</th>
                                    <th>Company Number</th>
                                    <th>Dhr</th>
                                    <th>NL</th>
                                    <th>Naae</th>
                                    <th>First Name</th>
                                    <th>Address</th>
                                    <th>Nr</th>
                                    <th>Bus</th>
                                    <th>Postcode</th>
                                    <th>township</th>
                                    <th>E-mail</th>
                                    <th>Tel.nr</th>
                                    <th>Faxnr.</th>
                                    <th>Gsm-nr</th>
                                    <th>Address</th>
                                    <th>Nr</th>
                                    <th>Bus</th>
                                    <th>Verdiep</th>
                                    <th>Postcode</th>
                                    <th>Gemeente</th>
                                    <th>I want Luminus</th>
                                    <th>existing connection</th>
                                    <th>EAN number</th>
                                    <th>Current supplier</th>
                                    <th>Name of your network operator</th>
                                    <th>Desired switchover date</th>
                                    <th>I want Luminus</th>
                                    <th>existing connection</th>
                                    <th>EAN number</th>
                                    <th>Current supplier</th>
                                    <th>Name of your network operator</th>
                                    <th>Desired switchover date</th>
                                    <th>Digitale versie</th>
                                    <th>Domiciliering</th>
                                    <th>advance invoices</th>
                                    <th>my advance invoices</th>
                                    <th>Payment For Electricity</th>
                                    <th>Advance Gas</th>
                                    <th>kWh Dag</th>
                                    <th>kWh Nacht</th>
                                    <th>kWh Excl Nacht</th>
                                    <th>Annual Consumption</th>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Place</th>
                                    <th>Personen</th>
                                    <th>Emails Or Text Messages</th>
                                    <th>Klantenrelaties</th>
                                    <th> voor akkoord</th>
                                    <th>identification</th>
                                    <th>earnings</th>
                                    <th>Name</th>
                                    <th>address</th>
                                    <th>Postcode</th>
                                    <th>City</th>
                                    <th>Land</th>
                                    <th>IBAN</th>
                                    <th>BIC code</th>
                                    <th>Datum</th>
                                    <th>Plaats</th>


                                    <th>
                                        Created At
                                    </th>

                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comfy_pro_contracts as $key => $comfy_pro_contract)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $comfy_pro_contract->client_number }}</td>
                                        <td>{{ $comfy_pro_contract->contact_id }}</td>
                                        <td>{{ $comfy_pro_contract->dealer_id }}</td>
                                        <td>{{ $comfy_pro_contract->seller_id }}</td>
                                        <td>{{ $comfy_pro_contract->present_to_luminus }}</td>
                                        <td>{{ $comfy_pro_contract->client_number_1 }}</td>
                                        <td>{{ $comfy_pro_contract->company_form }}</td>
                                        <td>{{ $comfy_pro_contract->company_number }}</td>
                                        <td>{{ $comfy_pro_contract->dhr }}</td>
                                        <td>{{ $comfy_pro_contract->nl }}</td>
                                        <td>{{ $comfy_pro_contract->name }}</td>
                                        <td>{{ $comfy_pro_contract->first_name }}</td>
                                        <td>{{ $comfy_pro_contract->nr }}</td>
                                        <td>{{ $comfy_pro_contract->bus }}</td>
                                        <td>{{ $comfy_pro_contract->post_code }}</td>
                                        <td>{{ $comfy_pro_contract->township }}</td>
                                        <td>{{ $comfy_pro_contract->e_mail }}</td>
                                        <td>{{ $comfy_pro_contract->tel_nr }}</td>
                                        <td>{{ $comfy_pro_contract->faxnr }}</td>
                                        <td>{{ $comfy_pro_contract->gsm_nr }}</td>
                                        <td>{{ $comfy_pro_contract->address }}</td>
                                        <td>{{ $comfy_pro_contract->nr }}</td>
                                        <td>{{ $comfy_pro_contract->bus }}</td>
                                        <td>{{ $comfy_pro_contract->deep }}</td>
                                        <td>{{ $comfy_pro_contract->post_code_1 }}</td>
                                        <td>{{ $comfy_pro_contract->township_1 }}</td>
                                        <td>{{ $comfy_pro_contract->want_luminus }}</td>
                                        <td>{{ $comfy_pro_contract->existing_connection }}</td>
                                        <td>{{ $comfy_pro_contract->ean_number }}</td>
                                        <td>{{ $comfy_pro_contract->current_supplier }}</td>
                                        <td>{{ $comfy_pro_contract->name_your_network_operator }}</td>
                                        <td>{{ $comfy_pro_contract->desired_switchover_date }}</td>

                                        <td>{{ $comfy_pro_contract->want_luminus_1 }}</td>
                                        <td>{{ $comfy_pro_contract->existing_connection_1 }}</td>
                                        <td>{{ $comfy_pro_contract->ean_number_1 }}</td>
                                        <td>{{ $comfy_pro_contract->current_supplier_1 }}</td>
                                        <td>{{ $comfy_pro_contract->name_your_network_operator_1 }}</td>
                                        <td>{{ $comfy_pro_contract->desired_switchover_date_1 }}</td>
                                        <td>{{ $comfy_pro_contract->digitale }}</td>
                                        <td>{{ $comfy_pro_contract->domiciliering }}</td>
                                        <td>{{ $comfy_pro_contract->advance_invoices }}</td>
                                        <td>{{ $comfy_pro_contract->my_advance_invoices }}</td>
                                        <td>{{ $comfy_pro_contract->transfer }}</td>
                                        <td>{{ $comfy_pro_contract->payment_for_electricity }}</td>
                                        <td>{{ $comfy_pro_contract->advance_gas }}</td>
                                        <td>{{ $comfy_pro_contract->kWh_dag }}</td>
                                        <td>{{ $comfy_pro_contract->kWh_nacht }}</td>
                                        <td>{{ $comfy_pro_contract->kWh_excl_nacht }}</td>
                                        <td>{{ $comfy_pro_contract->annual_consumption }}</td>
                                        <td>{{ $comfy_pro_contract->naam_1 }}</td>
                                        <td>{{ $comfy_pro_contract->date_1 }}</td>
                                        <td>{{ $comfy_pro_contract->place_1 }}</td>
                                        <td>{{ $comfy_pro_contract->personen }}</td>
                                        <td>{{ $comfy_pro_contract->emails_or_text_messages }}</td>
                                        <td>{{ $comfy_pro_contract->klantenrelaties }}</td>
                                        <td>{{ $comfy_pro_contract->akkoord }}</td>
                                        <td>{{ $comfy_pro_contract->door }}</td>
                                        <td>{{ $comfy_pro_contract->referte }}</td>
                                        <td>{{ $comfy_pro_contract->name }}</td>
                                        <td>{{ $comfy_pro_contract->adres }}</td>
                                        <td>{{ $comfy_pro_contract->post_code }}</td>
                                        <td>{{ $comfy_pro_contract->stad }}</td>
                                        <td>{{ $comfy_pro_contract->land }}</td>
                                        <td>{{ $comfy_pro_contract->iban }}</td>
                                        <td>{{ $comfy_pro_contract->code }}</td>
                                        <td>{{ $comfy_pro_contract->datum }}</td>
                                        <td>{{ $comfy_pro_contract->plaats }}</td>

                                        <td>
                                            {{ \Carbon\Carbon::parse($comfy_pro_contract->created_at)->diffForhumans() }}
                                        </td>
                                        {{-- <td>
                                            {{ \Carbon\Carbon::parse($internet_tv->updated_at)->diffForhumans() }}
                                        </td> --}}
                                        <td>
                                            <form class="d-inline-block"
                                                action="{{ route('comfy_pro_contract.destroy', $comfy_pro_contract->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-icon-text">
                                                    <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                                </button>
                                            </form>
                                            {{-- <a href="{{ route('internet_tv.edit', $internet_tv->id) }}"
                                                class="btn btn-warning btn-icon-text">
                                                <i class="btn-icon-prepend" data-feather="edit"></i> Edit
                                            </a> --}}
                                            <a href="{{ route('comfy_pro_contract.show', $comfy_pro_contract->id) }}"
                                                class="btn btn-success btn-icon-text">
                                                <i class="btn-icon-prepend" data-feather="show"></i> Show
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
