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
            <a href="{{ url('internet_tv/create?lang=fr') }}" class="btn btn-primary btn-icon-text  mr-2">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Internet Tv French
            </a>
            <a href="{{ url('internet_tv/create?lang=du') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Internet Tv Dutch
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

                                    <th>
                                        Partner Apllication
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>Street</th>
                                    <th>Appartments Number</th>
                                    <th>Township</th>
                                    <th>MAil</th>
                                    <th>Orange Customer Number</th>
                                    <th>First Name</th>
                                    <th>Number</th>
                                    <th>Letter</th>
                                    <th>Bus</th>
                                    <th>PostCode</th>
                                    <th>GSM</th>
                                    <th>Id Card Number</th>
                                    <th>Name Of Your Current Provider</th>
                                    <th>Customer Number At Your Current Supplier</th>
                                    <th>Floor</th>

                                    <th>
                                        Created At
                                    </th>
                                    <th>
                                        Updated At
                                    </th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($internet_tvs as $key => $internet_tv)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $internet_tv->partner_apllication }}</td>
                                        <td>{{ $internet_tv->name }}</td>
                                        <td>{{ $internet_tv->street }}</td>
                                        <td>{{ $internet_tv->apartments_number }}</td>
                                        <td>{{ $internet_tv->township }}</td>
                                        <td>{{ $internet_tv->mail }}</td>
                                        <td>{{ $internet_tv->orange_customer_number }}</td>
                                        <td>{{ $internet_tv->first_name }}</td>
                                        <td>{{ $internet_tv->number }}</td>
                                        <td>{{ $internet_tv->letter }}</td>
                                        <td>{{ $internet_tv->bus }}</td>
                                        <td>{{ $internet_tv->floor }}</td>
                                        <td>{{ $internet_tv->postcode }}</td>
                                        <td>{{ $internet_tv->gsm }}</td>
                                        <td>{{ $internet_tv->id_card_number }}</td>
                                        <td>{{ $internet_tv->name_of_your_current_provider }}</td>
                                        <td>{{ $internet_tv->customer_number_at_your_current_supplier }}</td>

                                        <td>
                                            {{ \Carbon\Carbon::parse($internet_tv->created_at)->diffForhumans() }}
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($internet_tv->updated_at)->diffForhumans() }}
                                        </td>
                                        <td>
                                            <form class="d-inline-block"
                                                action="{{ route('internet_tv.destroy', $internet_tv->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-icon-text">
                                                    <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                                </button>
                                            </form>
                                            <a href="{{ route('internet_tv.edit', $internet_tv->id) }}"
                                                class="btn btn-warning btn-icon-text">
                                                <i class="btn-icon-prepend" data-feather="edit"></i> Edit
                                            </a>
                                            <a href="{{ route('internet_tv.show', $internet_tv->id) }}"
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
