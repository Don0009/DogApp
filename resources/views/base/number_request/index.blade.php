@extends('layouts.backend')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Number Retention form</li>
            </ol>
        </nav>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ url('number_request/create?lang=fr') }}" class="btn btn-primary btn-icon-text  mr-2">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Number Retention French
            </a>
            <a href="{{ url('number_request/create?lang=du') }}" class="btn btn-primary btn-icon-text mr-2">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Number Retention Dutch
            </a>
        </div>
    </div>

    <div class="row">

        {{-- Branding --}}
        <img class="mt-3 mb-3" style="text-align: center; margin:0 auto;" class="img-responsive"
            src="{{ asset('images/brands/base_logo.jpeg') }}" height="37px" width="100px" alt="">
        {{-- Branding ENd --}}
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Number Retention Form</h6>
                    <p class="card-description">All the Number Retention Form are listed here.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>
                                    <th>Name</th>
                                    <th>Company Name</th>
                                    <th>Phone Number</th>


                                    <th>
                                        Created At
                                    </th>

                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nums as $key => $num)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $num->name }}</td>
                                        <td>{{ $num->company_name }}</td>
                                        <td>{{ $num->phone }}</td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($num->created_at)->diffForhumans() }}
                                        </td>
                                        {{-- <td>
                                            {{ \Carbon\Carbon::parse($num->updated_at)->diffForhumans() }}
                                </td> --}}
                                        <td>
                                            <form class="d-inline-block"
                                                action="{{ route('number_request.destroy', $num->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-icon-text">
                                                    <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                                </button>
                                            </form>
                                            {{-- <a href="{{ route('number_request.edit', $num->id) }}"
                                    class="btn btn-warning btn-icon-text">
                                    <i class="btn-icon-prepend" data-feather="edit"></i> Edit
                                    </a> --}}
                                            <a href="{{ route('number_request.show', $num->id) }}"
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
