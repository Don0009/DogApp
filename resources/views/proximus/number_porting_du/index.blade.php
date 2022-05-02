@extends('layouts.backend')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('proximus_number_porting_du.create') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Number Porting (Dutch)
            </a>

        </div>
    </div>

    <div class="row">

        {{-- Branding --}}
        <img class="mt-3 mb-3" style="text-align: center; margin:0 auto;" class="img-responsive"
            src="{{ asset('images/brands/Proximus_logo.jpeg') }}" height="75px" width="330" alt="">
        {{-- Branding ENd --}}


        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Proximus Number Porting Request</h6>
                    <p class="card-description">All the Proximus Number Porting (Dutch) leads are listed here.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Full Name
                                    </th>
                                    <th>
                                        Created At
                                    </th>
                                    {{-- <th>
                                        Updated At
                                    </th> --}}
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proximus as $key => $home)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $home->name }}</td>
                                        <td>{{ $home->first_name }}</td>

                                        <td>
                                            {{ \Carbon\Carbon::parse($home->created_at)->diffForhumans() }}
                                        </td>
                                        {{-- <td>
                                            {{ \Carbon\Carbon::parse($home->updated_at)->diffForhumans() }}
                                        </td> --}}
                                        <td>
                                            <form class="d-inline-block"
                                                action="{{ route('proximus_number_porting_fr.destroy', $home->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-icon-text">
                                                    <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                                </button>
                                            </form>
                                            {{-- <a href="{{ route('internet_home.edit', $home->id) }}"
                                                class="btn btn-warning btn-icon-text">
                                                <i class="btn-icon-prepend" data-feather="edit"></i> Edit
                                            </a> --}}
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
