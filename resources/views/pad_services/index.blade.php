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
                                   place Of Birth
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
                                    Document ID
                                </th>
                                <th>
                                    Représent Par
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
                                    Oil Installation
                                </th>
                                <th>
                                    Gas Installation
                                </th>
                                <th>
                                    Electrical installation
                                </th>
                                <th>
                                    You are not a customer of ENGIE Electrabel
                                </th>
                                <th>
                                    Oil Installation 1
                                </th>
                                <th>
                                    Gas Installation 1
                                </th>
                                <th>
                                    Electrical installation 1
                                </th>
                                <th>
                                    If you do not wish to receive our promotional
                                </th>
                                <th>
                                    Drawn up in three original copies
                                </th>
                                <th>
                                    the
                                </th>
                                <th>
                                    For Electrabel sa
                                </th>
                                <th>
                                    To the customer
                                </th>



                                <th>
                                    Residential Customer 2
                                </th>
                                <th>
                                    Madame 2
                                </th>
                                <th>
                                    Monsieur 2
                                </th>
                                <th>
                                    First Last Name 2
                                </th>
                                <th>
                                    Date Of Birth 2
                                </th>
                                <th>
                                    Place Of Birth 2
                                </th>
                                <th>
                                    Customer No 2
                                </th>
                                <th>
                                    professional client 2
                                </th>
                                <th>
                                    Company Name 2
                                </th>
                                <th>
                                    Legal Status 2
                                </th>
                                <th>
                                    Customer No 2
                                </th>
                                <th>
                                    Code NACE 2
                                </th>
                                <th>
                                    TVA BE 2
                                </th>
                                <th>
                                    RPM 2
                                </th>
                                <th>
                                    Phone 2
                                </th>
                                <th>
                                    GSM 2
                                </th>
                                <th>
                                    E-mail 2
                                </th>
                                <th>
                                    You Wish To Be Kept Informed 2
                                </th>
                                <th>
                                    You Wish To Receive Communication 2
                                </th>
                                <th>
                                    Rue 2
                                </th>
                                <th>
                                    N° 2
                                </th>
                                <th>
                                    Bte 2
                                </th>
                                <th>
                                    Etage 2
                                </th>
                                <th>
                                    Appartement 2
                                </th>
                                <th>
                                    Code postal 2
                                </th>
                                <th>
                                    Localité 2
                                </th>
                                <th>
                                    Document ID 2
                                </th>
                                <th>
                                    Représent Par 2
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
                                <td>{{ $pad_service->place_of_birth}}</td>
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
                                <td>{{ $pad_service->représentée_par_1}}</td>
                                <td>{{ $pad_service->rue_1}}</td>
                                <td>{{ $pad_service->noo_1}}</td>
                                <td>{{ $pad_service->bte_1}}</td>
                                <td>{{ $pad_service->etage_1}}</td>
                                <td>{{ $pad_service->appartement_1}}</td>
                                <td>{{ $pad_service->code_postal_1}}</td>
                                <td>{{ $pad_service->localité_1}}</td>
                                <td>{{ $pad_service->year_of_first_use}}</td>
                                <td>{{ $pad_service->you_are_a_customer_of_engie}}</td>
                                <td>{{ $pad_service->oil_installation}}</td>
                                <td>{{ $pad_service->gas_installation}}</td>
                                <td>{{ $pad_service->electrical_installation}}</td>
                                <td>{{ $pad_service->you_are_not_customer_of_engie_electrabel}}</td>
                                <td>{{ $pad_service->oil_installation_1}}</td>
                                <td>{{ $pad_service->gas_installation_1}}</td>
                                <td>{{ $pad_service->electrical_installation_1}}</td>
                                <td>{{ $pad_service->if_you_do_not_wish_to_receive}}</td>
                                <td>{{ $pad_service->drawn_up}}</td>
                                <td>{{ $pad_service->the}}</td>
                                <td>{{ $pad_service->of_which_you_acknowledge}}</td>
                                <td>{{ $pad_service->to_the_customer}}</td>

                                <td>{{ $pad_service->residential_customer_1}}</td>
                                <td>{{ $pad_service->madame_1}}</td>
                                <td>{{ $pad_service->monsieur_1}}</td>
                                <td>{{ $pad_service->first_last_name_1}}</td>
                                <td>{{ $pad_service->customer_no_2}}</td>
                                <td>{{ $pad_service->date_of_birth_1}}</td>
                                <td>{{ $pad_service->place_of_birth_1}}</td>
                                <td>{{ $pad_service->professional_client_1}}</td>
                                <td>{{ $pad_service->company_name_1}}</td>
                                <td>{{ $pad_service->legal_status_1}}</td>
                                <td>{{ $pad_service->customer_no_3}}</td>
                                <td>{{ $pad_service->code_nace_1}}</td>
                                <td>{{ $pad_service->tva_be_1}}</td>
                                <td>{{ $pad_service->rpm_1}}</td>
                                <td>{{ $pad_service->phone_1}}</td>
                                <td>{{ $pad_service->gsm_1}}</td>
                                <td>{{ $pad_service->email_1}}</td>
                                <td>{{ $pad_service->you_wish_to_be_kept_informed_1}}</td>
                                <td>{{ $pad_service->you_wish_to_receive_communications_1}}</td>
                                <td>{{ $pad_service->rue_2}}</td>
                                <td>{{ $pad_service->noo_2}}</td>
                                <td>{{ $pad_service->bte_2}}</td>
                                <td>{{ $pad_service->etage_2}}</td>
                                <td>{{ $pad_service->appartement_2}}</td>
                                <td>{{ $pad_service->code_postal_2}}</td>
                                <td>{{ $pad_service->localité_2}}</td>
                                <td>{{ $pad_service->document_id_2}}</td>
                                <td>{{ $pad_service->représentée_par_2}}</td>


                                <td>{{ $pad_service->rue_3}}</td>
                                <td>{{ $pad_service->noo_3}}</td>
                                <td>{{ $pad_service->bte_3}}</td>
                                <td>{{ $pad_service->etage_3}}</td>
                                <td>{{ $pad_service->appartement_3}}</td>
                                <td>{{ $pad_service->code_postal_3}}</td>
                                <td>{{ $pad_service->localité_3}}</td>
                                <td>{{ $pad_service->year_of_first_use_3}}</td>
                                <td>{{ $pad_service->you_are_a_customer_of_engie_3}}</td>
                                <td>{{ $pad_service->oil_installation_3}}</td>
                                <td>{{ $pad_service->gas_installation_3}}</td>
                                <td>{{ $pad_service->electrical_installation_3}}</td>
                                <td>{{ $pad_service->you_are_not_customer_of_engie_electrabel_3}}</td>
                                <td>{{ $pad_service->oil_installation_4}}</td>
                                <td>{{ $pad_service->gas_installation_4}}</td>
                                <td>{{ $pad_service->electrical_installation_4}}</td>
                                <td>{{ $pad_service->if_you_do_not_wish_to_receive_3}}</td>
                                <td>{{ $pad_service->drawn_up_3}}</td>
                                <td>{{ $pad_service->the_3}}</td>
                                <td>{{ $pad_service->of_which_you_acknowledge_3}}</td>
                                <td>{{ $pad_service->to_the_customer_3}}</td>
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
