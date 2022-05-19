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
            <a href="{{ route('mega.create') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create User
            </a>
        </div>
    </div>

    <div class="row">
        {{-- Branding --}}
        <img class="mt-3 mb-3" style="text-align: center; margin:0 auto;" class="img-responsive"
            src="{{ asset('images/brands/mega_logo.jpeg') }}" height="75px" width="190px" alt="">
        {{-- Branding ENd --}}
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

                                    <th>customer</th>
                                    <th>fr</th>
                                    <th>mnr</th>
                                    <th>customer</th>
                                    <th>naam</th>
                                    <th>first_name</th>
                                    <th>date_of_birth</th>
                                    <th>phone</th>
                                    <th>gsm</th>
                                    <th>e_mail</th>
                                    <th>legal_form</th>
                                    <th>ompany_number</th>
                                    <th>non_taxable</th>
                                    <th>street</th>
                                    <th>no</th>
                                    <th>bus</th>
                                    <th>postcode</th>
                                    <th>township</th>
                                    <th>going_to_live</th>
                                    <th>empty_house</th>
                                    <th>street_1</th>
                                    <th>no_1</th>
                                    <th>bus_1</th>
                                    <th>postcode_1</th>
                                    <th>township_1</th>

                                    <th>jaar</th>
                                    <th>variable</th>
                                    <th>day_night</th>
                                    <th>ean_code</th>
                                    <th>meter</th>
                                    <th>number</th>
                                    <th>number_1</th>
                                    <th>number_2</th>
                                    <th>number_3</th>
                                    <th>number_4</th>
                                    <th>number_5</th>
                                    <th>number_6</th>
                                    <th>number_7</th>
                                    <th>annual_consumption</th>
                                    <th>current_supplier</th>
                                    <th>start_date</th>
                                    <th>meter_1</th>
                                    <th>jaar_1</th>
                                    <th>variable_1</th>
                                    <th>ean_code_1</th>
                                    <th>meter_2</th>
                                    <th>meter_nummer_2</th>
                                    <th>meter_stand_2</th>
                                    <th>annual_consumption_1</th>
                                    <th>current_supplier_1</th>
                                    <th>start_date_1</th>
                                    <th>meter_3</th>
                                    <th>current_supplier_2</th>
                                    <th>transfer</th>
                                    <th>settlement_invoices</th>
                                    <th>account_number</th>
                                    <th>monthly</th>
                                    <th>per_post</th>
                                    <th>wish_to_receive</th>
                                    <th>name_and_first</th>
                                    <th>name_and_first_1</th>
                                    <th>account_number_1</th>
                                    <th>bic</th>
                                    <th>datum</th>
                                    <th>place</th>
                                    <th>file_1</th>
                                    <th>read_mega</th>
                                    <th>datum_1</th>
                                    <th>place_1</th>
                                    <th>file_2</th>
                                    <th>file_3</th>
                                    <th>aan_mega</th>
                                    <th>agent</th>
                                    <th>reference_1</th>
                                    <th>fill_4</th>
                                    <th>
                                        Created At
                                    </th>

                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($megas as $key => $mega)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $mega->customer }}</td>
                                        <td>{{ $mega->fr }}</td>
                                        <td>{{ $mega->mnr }}</td>
                                        <td>{{ $mega->naam }}</td>
                                        <td>{{ $mega->first_name }}</td>
                                        <td>{{ $mega->date_of_birth }}</td>
                                        <td>{{ $mega->phone }}</td>
                                        <td>{{ $mega->gsm }}</td>
                                        <td>{{ $mega->e_mail }}</td>
                                        <td>{{ $mega->society }}</td>
                                        <td>{{ $mega->legal_form }}</td>
                                        <td>{{ $mega->ompany_number }}</td>
                                        <td>{{ $mega->non_taxable }}</td>
                                        <td>{{ $mega->street }}</td>
                                        <td>{{ $mega->no }}</td>
                                        <td>{{ $mega->bus }}</td>
                                        <td>{{ $mega->postcode }}</td>
                                        <td>{{ $mega->township }}</td>
                                        <td>{{ $mega->going_to_live }}</td>
                                        <td>{{ $mega->empty_house }}</td>
                                        <td>{{ $mega->street_1 }}</td>
                                        <td>{{ $mega->no_1 }}</td>
                                        <td>{{ $mega->bus_1 }}</td>
                                        <td>{{ $mega->postcode_1 }}</td>
                                        <td>{{ $mega->township_1 }}</td>

                                        <td>{{ $mega->jaar }}</td>
                                        <td>{{ $mega->variable }}</td>
                                        <td>{{ $mega->day_night }}</td>
                                        <td>{{ $mega->ean_code }}</td>
                                        <td>{{ $mega->meter }}</td>
                                        <td>{{ $mega->number }}</td>
                                        <td>{{ $mega->number_1 }}</td>
                                        <td>{{ $mega->number_2 }}</td>
                                        <td>{{ $mega->number_3 }}</td>
                                        <td>{{ $mega->number_4 }}</td>
                                        <td>{{ $mega->number_5 }}</td>
                                        <td>{{ $mega->number_6 }}</td>
                                        <td>{{ $mega->number_7 }}</td>
                                        <td>{{ $mega->annual_consumption }}</td>
                                        <td>{{ $mega->current_supplier }}</td>
                                        <td>{{ $mega->start_date }}</td>
                                        <td>{{ $mega->meter_1 }}</td>
                                        <td>{{ $mega->jaar_1 }}</td>
                                        <td>{{ $mega->variable_1 }}</td>
                                        <td>{{ $mega->ean_code_1 }}</td>
                                        <td>{{ $mega->meter_2 }}</td>
                                        <td>{{ $mega->meter_nummer_2 }}</td>
                                        <td>{{ $mega->meter_stand_2 }}</td>
                                        <td>{{ $mega->annual_consumption_1 }}</td>
                                        <td>{{ $mega->current_supplier_1 }}</td>
                                        <td>{{ $mega->start_date_1 }}</td>
                                        <td>{{ $mega->meter_3 }}</td>
                                        <td>{{ $mega->current_supplier_2 }}</td>

                                        <td>{{ $mega->transfer }}</td>
                                        <td>{{ $mega->settlement_invoices }}</td>
                                        <td>{{ $mega->account_number }}</td>
                                        <td>{{ $mega->monthly }}</td>
                                        <td>{{ $mega->per_post }}</td>
                                        <td>{{ $mega->wish_to_receive }}</td>
                                        <td>{{ $mega->name_and_first }}</td>
                                        <td>{{ $mega->name_and_first_1 }}</td>
                                        <td>{{ $mega->account_number_1 }}</td>
                                        <td>{{ $mega->bic }}</td>
                                        <td>{{ $mega->datum }}</td>
                                        <td>{{ $mega->place }}</td>
                                        <td>{{ $mega->file_1 }}</td>
                                        <td>{{ $mega->read_mega }}</td>
                                        <td>{{ $mega->datum_1 }}</td>
                                        <td>{{ $mega->place_1 }}</td>
                                        <td>{{ $mega->file_2 }}</td>
                                        <td>{{ $mega->file_3 }}</td>
                                        <td>{{ $mega->aan_mega }}</td>
                                        <td>{{ $mega->agent }}</td>
                                        <td>{{ $mega->reference_1 }}</td>
                                        <td>{{ $mega->fill_4 }}</td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($mega->created_at)->diffForhumans() }}
                                        </td>
                                        {{-- <td>
                                            {{ \Carbon\Carbon::parse($internet_tv->updated_at)->diffForhumans() }}
                                        </td> --}}
                                        <td>
                                            <form class="d-inline-block" action="{{ route('mega.destroy', $mega->id) }}"
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
                                            <a href="{{ route('mega.show', $mega->id) }}"
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
