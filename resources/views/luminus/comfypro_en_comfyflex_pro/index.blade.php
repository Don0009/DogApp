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
            <a href="{{ url('comfypro_en_comfyflex_pro/create?lang=fr') }}" class="btn btn-primary btn-icon-text  mr-2">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Engie French
            </a>
            <a href="{{ url('comfypro_en_comfyflex_pro/create?lang=du') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Engie Dutch
            </a>
        </div>
        {{-- <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('comfypro_en_comfyflex_pro.create') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create User
            </a>
        </div> --}}
    </div>

    <div class="row">
        {{-- Branding --}}
        <img class="mt-3 mb-3" style="text-align: center; margin:0 auto;" class="img-responsive"
            src="{{ asset('images/brands/luminus_logo.jpeg') }}" height="75px" width="150px" alt="">
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

                                    <th>Name</th>
                                    <th>First Name</th>
                                    <th>Address</th>
                                    <th>e-mail</th>
                                    <th>
                                        Created At
                                    </th>

                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($comfypro_en_comfyflex_pros as $key => $comfypro_en_comfyflex_pro)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $comfypro_en_comfyflex_pro->name }}</td>
                                        <td>{{ $comfypro_en_comfyflex_pro->first_name }}</td>
                                        <td>{{ $comfypro_en_comfyflex_pro->address }}</td>
                                        <td>{{ $comfypro_en_comfyflex_pro->e_mail }}</td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($comfypro_en_comfyflex_pro->created_at)->diffForhumans() }}
                                        </td>
                                        {{-- <td>
                                            {{ \Carbon\Carbon::parse($internet_tv->updated_at)->diffForhumans() }}
                                        </td> --}}
                                        <td>
                                            <form class="d-inline-block"
                                                action="{{ route('comfypro_en_comfyflex_pro.destroy', $comfypro_en_comfyflex_pro->id) }}"
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
                                            <a href="{{ route('comfypro_en_comfyflex_pro.show', $comfypro_en_comfyflex_pro->id) }}"
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
