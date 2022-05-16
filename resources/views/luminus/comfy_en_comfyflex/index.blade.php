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
            <a href="{{ url('comfy_en_comfyflex/create?lang=fr') }}" class="btn btn-primary btn-icon-text  mr-2">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Engie French
            </a>
            <a href="{{ url('comfy_en_comfyflex/create?lang=du') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Engie Dutch
            </a>
        </div>
        {{-- <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('comfy_en_comfyflex.create') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create User
            </a>
        </div> --}}
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

                                    <th>Client Number</th>
                                    <th>Name</th>
                                    <th>First Name</th>
                                    <th>Address</th>
                                    <th>E-mail</th>


                                    <th>
                                        Created At
                                    </th>

                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comfy_en_comfyflexes as $key => $comfy_en_comfyflexe)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $comfy_en_comfyflexe->client_number }}</td>
                                        <td>{{ $comfy_en_comfyflexe->name }}</td>
                                        <td>{{ $comfy_en_comfyflexe->first_name }}</td>
                                        <td>{{ $comfy_en_comfyflexe->address }}</td>
                                        <td>{{ $comfy_en_comfyflexe->e_mail }}</td>




                                        <td>
                                            {{ \Carbon\Carbon::parse($comfy_en_comfyflexe->created_at)->diffForhumans() }}
                                        </td>
                                         {{-- <td>
                                            {{ \Carbon\Carbon::parse($internet_tv->updated_at)->diffForhumans() }}
                                        </td> --}}

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
