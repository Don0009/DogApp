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
        <a href="{{ route('electricity_natural_gas.create') }}" class="btn btn-primary btn-icon-text">
            <i class="btn-icon-prepend" data-feather="plus"></i>
            Create Electricity Natural Gas
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Electricity Natural Gas</h6>
                <p class="card-description">All InterNet Home here.</p>
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
                                    Role
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
                            @foreach ($gass as $key => $gas)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $gas->name }}</td>
                                <td>{{ $gas->email }}</td>

                                <td>
                                    {{ \Carbon\Carbon::parse($gas->created_at)->diffForhumans() }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($gas->updated_at)->diffForhumans() }}
                                </td>
                                <td>
                                    <form class="d-inline-block" action="{{ route('electricity_natural_gas.destroy',$gas->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                        </button>
                                    </form>
                                    <a href="{{ route('electricity_natural_gas.edit',$gas->id) }}" class="btn btn-warning btn-icon-text">
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