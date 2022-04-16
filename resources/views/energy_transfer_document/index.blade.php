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
            <a href="{{ route('energy_transfer_document.create') }}" class="btn btn-primary btn-icon-text">
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

                                    <th>Name</th>
                                    <th>MAil</th>
                                    <th>Orange Customer Number</th>
                                    <th>First Name</th>
                                    <th>Number</th>

                                    <th>
                                        Created At
                                    </th>

                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($energy_transfer_documents as $key => $energy_transfer_document)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $energy_transfer_document->name }}</td>
                                        <td>{{ $energy_transfer_document->mail }}</td>
                                        <td>{{ $energy_transfer_document->orange_customer_number }}</td>
                                        <td>{{ $energy_transfer_document->first_name }}</td>
                                        <td>{{ $energy_transfer_document->number }}</td>

                                        <td>
                                            {{ \Carbon\Carbon::parse($energy_transfer_document->created_at)->diffForhumans() }}
                                        </td>
                                        {{-- <td>
                                            {{ \Carbon\Carbon::parse($internet_tv->updated_at)->diffForhumans() }}
                                        </td> --}}
                                        <td>
                                            <form class="d-inline-block"
                                                action="{{ route('energy_transfer_document.destroy', $energy_transfer_document->id) }}"
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
                                            <a href="{{ route('energy_transfer_document.show', $energy_transfer_document->id) }}"
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
