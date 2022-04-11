@extends('layouts.backend')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Telenet</li>
                <li class="breadcrumb-item active" aria-current="page">Question</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('telenet_question.create') }}" class="btn btn-primary btn-icon-text  mr-2">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Telenet Question
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Telenet Question</h6>
                    <p class="card-description">Listing of All the Telenet Question.</p>
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
                                        EMAIL ADDRESS
                                    </th>
                                    <th>
                                        CELL NUMBER
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
