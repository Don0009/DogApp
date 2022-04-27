@extends('layouts.backend')

@section('content')
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Subscription Request form</li>
        </ol>
    </nav>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
        <a href="{{ url('subscription_request/create?lang=fr') }}" class="btn btn-primary btn-icon-text  mr-2">
            <i class="btn-icon-prepend" data-feather="plus"></i>
            Create Subscription Request French
        </a>
        <a href="{{ url('subscription_request/create?lang=du') }}" class="btn btn-primary btn-icon-text mr-2">
            <i class="btn-icon-prepend" data-feather="plus"></i>
            Create Subscription Request Dutch
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Subscription Request Form</h6>
                <p class="card-description">All the Subscription Request Form are listed here.</p>
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
                            @foreach ($subs as $key => $sub)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $sub->name }}</td>
                                <td>{{$sub->company_name }}</td>
                                <td>{{ $sub->phone }}</td>
                                <td>
                                    {{ \Carbon\Carbon::parse($sub->created_at)->diffForhumans() }}
                                </td>
                                {{-- <td>
                                            {{ \Carbon\Carbon::parse($sub->updated_at)->diffForhumans() }}
                                </td> --}}
                                <td>
                                    <form class="d-inline-block" action="{{ route('subscription_request.destroy', $sub->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                        </button>
                                    </form>
                                    {{-- <a href="{{ route('subscription_request.edit', $sub->id) }}"
                                    class="btn btn-warning btn-icon-text">
                                    <i class="btn-icon-prepend" data-feather="edit"></i> Edit
                                    </a> --}}
                                    <a href="{{ route('subscription_request.show', $sub->id) }}" class="btn btn-success btn-icon-text">
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