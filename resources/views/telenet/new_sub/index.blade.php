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
            <a href="{{ route('telenet_question.create') }}" class="btn btn-primary btn-icon-text  mr-2">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Telnet New Subscription
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

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
