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
            <a href="{{ url('contract_professionele/create?lang=fr') }}" class="btn btn-primary btn-icon-text  mr-2">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Engie French
            </a>
            <a href="{{ url('contract_professionele/create?lang=du') }}" class="btn btn-primary btn-icon-text">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Create Engie Dutch
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
                                    Company Name
                                </th>
                                <th>
                                    Legal Form
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    First Name
                                </th>
                                <th>
                                    Client Number
                                </th>
                                <th>
                                    NACE_Code
                                </th>
                                <th>
                                    Tel
                                </th>
                                <th>
                                    Gsm
                                </th>
                                <th>
                                    E-mail
                                </th>
                                  <th>
                                    You wish to receive
                                </th>
                                <th>
                                    You wish to be informed
                                </th>
                                <th>
                                    BTW BE
                                </th>
                                <th>
                                    RPR
                                </th>
                                <th>
                                    Company name
                                </th>
                                <th>
                                    Legal form
                                </th>
                                <th>
                                    Name
                                </th>
                                  <th>
                                    First name
                                </th>
                                <th>
                                    Street
                                </th>
                                  <th>
                                    No.
                                </th>
                                <th>
                                    Bus
                                </th>
                                <th>
                                    Postcode
                                </th>
                                <th>
                                    Place
                                </th>
                                <th>
                                    Document ID
                                </th>
                                <th>
                                    Electrabel SA 1
                                </th>
                                <th>
                                    Electrabel SA 2
                                </th>
                                <th>
                                    Delivery address
                                </th>
                                <th>
                                   No
                                </th>
                                <th>
                                    Floor
                                </th>
                                <th>
                                    Bus
                                </th>
                                <th>
                                    Appartement
                                </th>
                                <th>
                                    Postcode
                                </th>
                                <th>
                                    Place 1
                                </th>
                                <th>
                                    EAN no. electricity
                                </th>
                                <th>
                                    EAN no. natural gas
                                </th>
                                <th>
                                    EAN no. excluding night
                                </th>
                                <th>
                                  only professional use
                                </th>
                                <th>
                                    ENGIE Electrabel
                                </th>
                                <th>
                                    In Case Of Moving House
                                </th>
                                <th>
                                    You Already Have Contract
                                </th>
                                <th>
                                    Selectie wissen
                                </th>
                                <th>
                                    You move or build
                                </th>
                                <th>
                                    you already have an electricity contract
                                </th>
                                <th>
                                    You want to change your existing
                                </th>
                                <th>
                                    You want a contract for an extra energy
                                </th>
                                <th>
                                    You move or build
                                </th>
                                <th>
                                    You already have an electricity contract
                                </th>
                                <th>
                                    You want to change your existing electricity
                                </th>
                                <th>
                                    You move or build
                                </th>
                                <th>
                                    You already have an electricity contract
                                </th>
                                <th>
                                    You want to change your existing electricity
                                </th>
                                <th>
                                    Option gree
                                </th>
                                <th>
                                    Advance
                                </th>
                                <th>
                                    Place
                                </th>
                                <th>
                                    Desired start date
                                </th>







                                <th>
                                    NATURAL GAS
                                </th>
                                <th>
                                    You move or build 1
                                </th>
                                <th>
                                    you already have an electricity contract 1
                                </th>
                                <th>
                                    You want to change your existing 1
                                </th>
                                <th>
                                    You want a contract for an extra energy 1
                                </th>
                                <th>
                                    You move or build 1
                                </th>
                                <th>
                                    You already have an electricity contract 1
                                </th>
                                <th>
                                    You want to change your existing electricity 1
                                </th>
                                <th>
                                    You move or build 1
                                </th>
                                <th>
                                    You already have an electricity contract 1
                                </th>
                                <th>
                                    You want to change your existing electricity 1
                                </th>

                                <th>
                                    Place 1
                                </th>
                                <th>
                                    Desired start date 1
                                </th>
                                <th>
                                    valid for the two energies
                                </th>
                                <th>
                                    Code P
                                </th>
                                <th>
                                    Monthly
                                </th>
                                <th>
                                    Bimonthly
                                </th>
                                <th>
                                    Quarterly Advance
                                </th>
                                <th>
                                    By E-mail
                                </th>
                                <th>
                                    Per Post
                                </th>
                                <th>
                                    by Bank transfer
                                </th>
                                <th>
                                    via domiciliëring
                                </th>
                                <th>
                                    through a new
                                </th>
                                <th>
                                    direct debit with the account number
                                </th>
                                <th>
                                    Drawn up in three original copies, te
                                </th>
                                <th>
                                    Which Of The Customer
                                </th>
                                <th>
                                    Naam: [Handtekening]
                                </th>
                                <th>
                                    You do not wish to receive commercial communications from ENGIE Electrabel
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
                            @foreach ($contract_pros as $key => $contract_pro)
                            <tr>
                                <td>{{ ++$key}}</td>
                                <td>{{ $contract_pro->company_name}}</td>
                                <td>{{ $contract_pro->legal_form}}</td>
                                <td>{{ $contract_pro->name}}</td>
                                <td>{{ $contract_pro->first_name}}</td>
                                <td>{{ $contract_pro->client_number}}</td>
                                <td>{{ $contract_pro->nace_code}}</td>
                                <td>{{ $contract_pro->tel}}</td>
                                <td>{{ $contract_pro->gsm}}</td>
                                <td>{{ $contract_pro->e_mail}}</td>
                                <td>{{ $contract_pro->you_wish_to_receive}}</td>
                                <td>{{ $contract_pro->You_wish_to_be_informed}}</td>
                                <td>{{ $contract_pro->you_wish_to_receive}}</td>
                                <td>{{ $contract_pro->btw_be}}</td>
                                <td>{{ $contract_pro->rpr}}</td>
                                <td>{{ $contract_pro->company_name_1}}</td>
                                <td>{{ $contract_pro->legal_form_1}}</td>
                                <td>{{ $contract_pro->name_1}}</td>
                                <td>{{ $contract_pro->first_name_1}}</td>
                                <td>{{ $contract_pro->street}}</td>
                                <td>{{ $contract_pro->no}}</td>
                                <td>{{ $contract_pro->bus}}</td>
                                <td>{{ $contract_pro->postcode}}</td>
                                <td>{{ $contract_pro->place}}</td>
                                <td>{{ $contract_pro->documnet_id}}</td>
                                <td>{{ $contract_pro->electrabel_sa_1}}</td>
                                <td>{{ $contract_pro->electrabel_sa_2}}</td>
                                <td>{{ $contract_pro->street_1}}</td>
                                <td>{{ $contract_pro->no_1}}</td>
                                <td>{{ $contract_pro->floor}}</td>
                                <td>{{ $contract_pro->bus_1}}</td>
                                <td>{{ $contract_pro->apartment}}</td>
                                <td>{{ $contract_pro->post_code}}</td>
                                <td>{{ $contract_pro->place_1}}</td>
                                <td>{{ $contract_pro->electricity}}</td>
                                <td>{{ $contract_pro->natural_gas}}</td>
                                <td>{{ $contract_pro->excluding_night}}</td>
                                <td>{{ $contract_pro->gemengd_professioneel_verbruik}}</td>
                                <td>{{ $contract_pro->only_professional_use}}</td>
                                <td>{{ $contract_pro->in_case_of_moving_house}}</td>
                                <td>{{ $contract_pro->you_already_have_contract}}</td>
                                <td>{{ $contract_pro->clear_selection}}</td>
                                <td>{{ $contract_pro->you_move_or_build}}</td>
                                <td>{{ $contract_pro->you_already_have_an_electricity_contract}}</td>
                                <td>{{ $contract_pro->you_want_to_change_your_existing}}</td>
                                <td>{{ $contract_pro->you_want_a_contract_for_an_extra}}</td>
                                <td>{{ $contract_pro->you_move_or_build_1}}</td>
                                <td>{{ $contract_pro->you_already_have_an_electricity_contract_1}}</td>
                                <td>{{ $contract_pro->you_want_to_change_your_existing_1}}</td>
                                <td>{{ $contract_pro->you_move_or_build_2}}</td>
                                <td>{{ $contract_pro->you_already_have_an_electricity_contract_2}}</td>
                                <td>{{ $contract_pro->you_want_to_change_your_existing_2}}</td>
                                <td>{{ $contract_pro->you_want_to_change_your_existing_3}}</td>
                                <td>{{ $contract_pro->place_2}}</td>
                                <td>{{ $contract_pro->desired_start_date}}</td>


                                <td>{{ $contract_pro->clear_selection_1}}</td>
                                <td>{{ $contract_pro->you_move_or_build_3}}</td>
                                <td>{{ $contract_pro->you_already_have_an_electricity_contract_3}}</td>
                                <td>{{ $contract_pro->you_want_to_change_your_existing_4}}</td>
                                <td>{{ $contract_pro->you_want_a_contract_for_an_extra_1}}</td>
                                <td>{{ $contract_pro->you_move_or_build_4}}</td>
                                <td>{{ $contract_pro->you_already_have_an_electricity_contract_4}}</td>
                                <td>{{ $contract_pro->you_want_to_change_your_existing_5}}</td>
                                <td>{{ $contract_pro->you_move_or_build_5}}</td>
                                <td>{{ $contract_pro->you_already_have_an_electricity_contract_5}}</td>
                                <td>{{ $contract_pro->you_want_to_change_your_existing_6}}</td>
                                <td>{{ $contract_pro->you_want_to_change_your_existing_7}}</td>
                                <td>{{ $contract_pro->place_3}}</td>
                                <td>{{ $contract_pro->desired_start_date_1}}</td>
                                <td>{{ $contract_pro->valid_for_the_two_energies}}</td>
                                <td>{{ $contract_pro->code_p}}</td>
                                <td>{{ $contract_pro->monthly}}</td>
                                <td>{{ $contract_pro->bimonthly}}</td>
                                <td>{{ $contract_pro->quarterly_advance}}</td>
                                <td>{{ $contract_pro->by_e_mail}}</td>
                                <td>{{ $contract_pro->per_post}}</td>
                                <td>{{ $contract_pro->by_bank_transfer}}</td>
                                <td>{{ $contract_pro->via_domiciliëring}}</td>
                                <td>{{ $contract_pro->through_a_new}}</td>
                                <td>{{ $contract_pro->debit_account_number}}</td>
                                <td>{{ $contract_pro->drawn_up}}</td>
                                <td>{{ $contract_pro->of_which_the_customer}}</td>
                                <td>{{ $contract_pro->handtekening}}</td>
                                <td>{{ $contract_pro->do_not_wish_to_receive_commercial_communications}}</td>

                                <td>
                                    {{ \Carbon\Carbon::parse($contract_pro->created_at)->diffForhumans() }}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($contract_pro->updated_at)->diffForhumans() }}
                                </td>
                                <td>
                                    <form class="d-inline-block" action="{{ route('engie.destroy',$contract_pro->id) }}"
                                          method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="trash"></i> Delete
                                        </button>
                                    </form>
                                    <a href="{{ route('engie.edit',$contract_pro->id) }}" class="btn btn-warning btn-icon-text">
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
