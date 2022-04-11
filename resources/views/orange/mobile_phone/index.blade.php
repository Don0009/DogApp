@extends('layouts.backend')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
                <li class="breadcrumb-item active" aria-current="page">Mobile Phone</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('mobile_phone.create') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Mobile Phone
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Mobile Phone</h6>
                    <p class="card-description">Listing of All the Mobile Phones.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>
                                        NAME
                                    </th>
                                    <th>
                                        CELL PHONE
                                    </th>
                                    <th>
                                        IBAN
                                    </th>
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
                                @foreach ($phones as $key => $phone)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $phone->name }}</td>
                                        <td>{{ $phone->email }}</td>

                                        <td>
                                            {{ \Carbon\Carbon::parse($phone->created_at)->diffForhumans() }}
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($phone->updated_at)->diffForhumans() }}
                                        </td>
                                        <td>
                                            <form class="d-inline-block"
                                                action="{{ route('mobile_phone.destroy', $phone->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-icon-text">
                                                    <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                                </button>
                                            </form>
                                            <a href="{{ route('mobile_phone.edit', $phone->id) }}"
                                                class="btn btn-warning btn-icon-text">
                                                <i class="btn-icon-prepend" data-feather="edit"></i> Edit
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
