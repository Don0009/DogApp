@extends('layouts.backend')

@section('content')
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Telenet</li>
                <li class="breadcrumb-item active" aria-current="page">New Subscriptions</li>
                {{-- <li class="breadcrumb-item active" aria-current="page">New Subscriptions</li> --}}

            </ol>
        </nav>
        <div class="d-flex align-items-center flex-wrap text-nowrap">
            <a href="{{ route('telenet_new_subs.create') }}" class="btn btn-primary btn-icon-text  mr-2">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Telenet Subscription
            </a>
        </div>
    </div>

    <div class="row">
        {{-- Branding --}}
        <img class="mt-3 mb-3" style="text-align: center; margin:0 auto;" class="img-responsive"
            src="{{ asset('images/brands/2969px-Telenet_Logo_svg.png') }}" height="75px" width="330" alt="">
        {{-- Branding ENd --}}
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title"> Create Telenet New Subscriptions</h6>
                    <p class="card-description">Listing of All the Telenet New Subscriptions.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>
                                        #
                                    </th>

                                    <th>
                                        CALL/CELL NUMBER
                                    </th>
                                    <th>
                                        SIM CARD OTHER OPERATOR
                                    </th>



                                    <th>
                                        Created At
                                    </th>

                                    <th>
                                        Actions
                                    </th>
                                </tr>
                                @foreach ($data as $item)
                                    @php
                                        $i = 1;
                                    @endphp
                                    <tr>
                                        <td>{{ $i++ }}</td>

                                        <td>{{ $item->call_number_1 }}</td>
                                        <td>{{ $item->sim_card_other_operator_1 }}</td>



                                        <td>
                                            {{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}
                                        </td>

                                        <td>
                                            <form class="d-inline-block"
                                                action="{{ route('telenet_new_subs.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-icon-text">
                                                    <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                                </button>
                                            </form>


                                        </td>
                                    </tr>
                                @endforeach

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
