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
            <a href="{{ route('pad_services.create') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create User
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Permissions</h6>
                    <p class="card-description">All the internet tv are listed here.</p>
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                          <thead>
                            <tr>
                                <th>
                                    #
                                </th>

                                <th>
                                    Residential Customer
                                </th>
                                <th>
                                    Madame
                                </th>
                                <th>
                                    Monsieur
                                </th>
                                <th>
                                    First Last Name
                                </th>
                                <th>
                                    Date Of Birth
                                </th>
                                <th>
                                    Customer No
                                </th>
                                <th>
                                    professional client
                                </th>
                                <th>
                                    Company Name
                                </th>
                                <th>
                                    Legal Status
                                </th>
                                <th>
                                    Customer No 1
                                </th>
                                <th>
                                    Code NACE
                                </th>
                                <th>
                                    TVA BE
                                </th>
                                <th>
                                    RPM
                                </th>
                                <th>
                                    Phone
                                </th>
                                <th>
                                    GSM
                                </th>
                                <th>
                                    E-mail
                                </th>
                                <th>
                                    You Wish To Be Kept Informed
                                </th>
                                <th>
                                    You Wish To Receive Communication
                                </th>
                                <th>
                                    Rue
                                </th>
                                <th>
                                    N°
                                </th>
                                <th>
                                    Bte
                                </th>
                                <th>
                                    Etage
                                </th>
                                <th>
                                    Appartement
                                </th>
                                <th>
                                    Code postal
                                </th>
                                <th>
                                    Localité
                                </th>
                                <th>
                                    Rue 1
                                </th>
                                <th>
                                    N° 1
                                </th>
                                <th>
                                    Bte 1
                                </th>
                                <th>
                                    Etage 1
                                </th>
                                <th>
                                    Appartement 1
                                </th>
                                <th>
                                    Code postal 1
                                </th>
                                <th>
                                    Localité 1
                                </th>
                                <th>
                                    Document ID 1
                                </th>
                                <th>
                                    Electrabel sa having its headquarters 1
                                </th>
                                <th>
                                    Year Of First Use
                                </th>
                                <th>
                                    you Are a Customer Of Engie
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
                            @foreach ($pad_services as $key => $pad_service)
                            <tr>
                                <td>{{ ++$key}}</td>
                                <td>{{ $pad_service->residential_customer}}</td>
                                <td>{{ $pad_service->madame}}</td>
                                <td>{{ $pad_service->monsieur}}</td>
                                <td>{{ $pad_service->first_last_name}}</td>
                                <td>{{ $pad_service->customer_no}}</td>
                                <td>{{ $pad_service->date_of_birth}}</td>
                                <td>{{ $pad_service->professional_client}}</td>
                                <td>{{ $pad_service->company_name}}</td>
                                <td>{{ $pad_service->legal_status}}</td>
                                <td>{{ $pad_service->customer_no_1}}</td>
                                <td>{{ $pad_service->code_nace}}</td>
                                <td>{{ $pad_service->tva_be}}</td>
                                <td>{{ $pad_service->rpm}}</td>
                                <td>{{ $pad_service->phone}}</td>
                                <td>{{ $pad_service->gsm}}</td>
                                <td>{{ $pad_service->email}}</td>
                                <td>{{ $pad_service->you_wish_to_be_kept_informed}}</td>
                                <td>{{ $pad_service->you_wish_to_receive_communications}}</td>
                                <td>{{ $pad_service->rue}}</td>
                                <td>{{ $pad_service->noo}}</td>
                                <td>{{ $pad_service->bte}}</td>
                                <td>{{ $pad_service->etage}}</td>
                                <td>{{ $pad_service->appartement}}</td>
                                <td>{{ $pad_service->code_postal}}</td>
                                <td>{{ $pad_service->localité}}</td>
                                <td>{{ $pad_service->document_id}}</td>
                                <td>{{ $pad_service->rue_1}}</td>
                                <td>{{ $pad_service->noo_1}}</td>
                                <td>{{ $pad_service->bte_1}}</td>
                                <td>{{ $pad_service->etage_1}}</td>
                                <td>{{ $pad_service->appartement_1}}</td>
                                <td>{{ $pad_service->code_postal_1}}</td>
                                <td>{{ $pad_service->localité_1}}</td>
                                <td>{{ $pad_service->year_of_first_use}}</td>
                                <td>{{ $pad_service->you_are_a_customer_of_engie}}</td>
                                <td>
                                    {{ \Carbon\Carbon::parse($pad_service->created_at)->diffForhumans() }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($pad_service->updated_at)->diffForhumans() }}
                                </td>
                                <td>
                                    <form class="d-inline-block" action="{{ route('pad_services.destroy',$pad_service->id) }}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                        </button>
                                    </form>
                                    <a href="{{ route('pad_services.edit',$pad_service->id) }}" class="btn btn-warning btn-icon-text">
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
