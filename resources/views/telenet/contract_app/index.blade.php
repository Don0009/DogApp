@extends('layouts.backend')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Internet Tv</li>
                <li class="breadcrumb-item active" aria-current="page">Contract Application</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center flex-wrap text-nowrap">

            <a href="{{ route('contractapp.create') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Telenet Contract
            </a>
        </div>
    </div>

    <div class="row">
        {{-- Branding --}}
        <img class="mt-3 mb-3" style="text-align: center; margin:0 auto;" class="img-responsive"
            src="{{ asset('images/brands/telenet_logo.jpeg') }}" height="75px" width="330" alt="">
        {{-- Branding ENd --}}

        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Telenet Contract Application</h6>
                    <p class="card-description">Listing of All the Telenet Contract Applications.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>

                                    <th>
                                        FIRST NAME
                                    </th>
                                    <th>
                                        CONTACT NUMBER
                                    </th>
                                    <th>
                                        EMAIL ADDRESS
                                    </th>

                                    <th>
                                        CREATED AT
                                    </th>
                                    <th>
                                        UPDATED AT
                                    </th>
                                    <th>
                                        ACTIONS
                                    </th>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-dark">Delete</a>
                                    </td>

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
