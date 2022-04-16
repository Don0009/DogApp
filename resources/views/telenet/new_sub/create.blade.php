@extends('layouts.backend')

@section('content')
    <div>

        <img style="text-align: center;" class="img-responsive rounded mx-auto d-block mb-5"
            src="{{ asset('images/brands/telenet_brand.jpeg') }}" alt="" height="75px" width="330">
    </div>



    <div class="container">
        <h3 class="fw-bolder mb-5" style="text-align: center;  font-weight: bold; color:#F8C200;">
            OVERDRACHT NUMMERS EN DIENSTEN
            NAAR
            TELENET</h3>
    </div>

    <form action="{{ route('telenet_new_subs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
            <!-- Start of col md 12 -->

            <div class="row">

                {{-- Start of success message --}}
                @if (session('success'))
                    <div style="text-align: center" class="alert alert-info alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                {{-- En of success message --}}
                <!-- first row  -->
                <div class="container mb-5">
                    <div class="col-md-12">
                        <p class="fw-bold mb-2">BIJ ZELFSTANDIGEN : <span class="fw-bold">altijd klantummer</span>
                        </p>
                        <p class="fw-bold  mb-5">BIJ ZELFSTANDIGEN : <span class="fw-bold">altijd simkaartnummer ,
                                klantnummer wordt
                                niet aanvaard</span></p>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Oproepnummer</th>
                                    <th scope="col">Simkaart andere operator</th>
                                    <th scope="col">Klantennummer andere operator</th>
                                    <th scope="col">Simkaartnummer Telenet</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_1" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('call_number_1')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input type="text" name="sim_card_other_operator_1"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_card_other_operator_1')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="customer_num_other_operator_1" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('customer_num_other_operator_1')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        893207000
                                    </td>
                                </tr>

                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_2" type="text" name="" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('call_number_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="sim_card_other_operator_2" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_card_other_operator_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="customer_num_other_operator_2" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('customer_num_other_operator_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        893207000
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_3" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('call_number_3')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="sim_card_other_operator_3" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_card_other_operator_3')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="customer_num_other_operator_3" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('customer_num_other_operator_3')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        893207000
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_4" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('call_number_4')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="sim_card_other_operator_4" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_card_other_operator_4')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="customer_num_other_operator_4" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('customer_num_other_operator_4')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        893207000
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_5" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('call_number_5')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="sim_card_other_operator_5" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_card_other_operator_5')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="customer_num_other_operator_5" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('customer_num_other_operator_5')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        893207000
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_6" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('call_number_6')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="sim_card_other_operator_6" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_card_other_operator_6')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="customer_num_other_operator_6" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_card_other_operator_6')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        893207000
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_7" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('call_number_7')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="sim_card_other_operator_7" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_card_other_operator_7')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="customer_num_other_operator_7" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('customer_num_other_operator_7')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        893207000
                                    </td>
                                </tr>

                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_8" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('call_number_8')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="sim_card_other_operator_8" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('sim_card_other_operator_8')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="customer_num_other_operator_8" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('customer_num_other_operator_8')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>
                                    <td>
                                        893207000
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end of first row-->



            <!-- Second Table of Three Heads Start -->


            <div class="row mb-5">
                <!-- start of second row-->
                <div class="container">
                    <div class="col-md-10">

                        <h2 class="fw-bolder mb-1" style="text-align: center;  font-weight: bold; color:#F8C200;">Overdracht
                            vaste nummers
                        </h2>


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Oproepnummer</th>
                                    <th scope="col">Huidige Operator</th>
                                    <th scope="col">Klantennummer andere operator</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_9" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('call_number_9')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="current_operator_1" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('current_operator_1')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="customer_num_other_operator_9" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('customer_num_other_operator_9')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>

                                </tr>

                                <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_10" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('call_number_10')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="current_operator_2" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                            @error('current_operator_2')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input type="text" name="customer_num_other_operator_10"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" required>
                                            @error('customer_num_other_operator_10')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </td>

                                </tr>
                                {{-- <tr>
                                    <td scope="row">

                                        <div class="form-group mb-0">

                                            <input name="call_number_11" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>


                                    </td>

                                    <td>

                                        <div class="form-group mb-0">

                                            <input name="current_operator_3" type="text" class="form-control border-0"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-group mb-0">

                                            <input name="customer_num_other_operator_11" type="text"
                                                class="form-control border-0" id="exampleInputEmail1"
                                                aria-describedby="emailHelp">

                                        </div>
                                    </td>

                                </tr> --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!--   end of second row -->


            <div>
                <!--  Div for Spacing -->
            </div>
            <div>
                <!--  Div for Spacing -->
            </div>
            <div>
                <!--  Div for Spacing -->
            </div>

            <div class="row mt-5">
                <div class="container">


                    <div class="col-md-6">

                        {{-- date_edit --}}
                        <input class="mb-3form-control @error('date_edit') is-invalid @enderror mb-4 mb-md-0"
                            data-inputmask="'alias': 'datetime'" data-inputmask-inputformat="dd/mm/yyyy" inputmode="numeric"
                            id="date_edit" name="date_edit" value="{{ old('date_edit') }}" type="date" required>
                        {{-- date_edit --}}
                        <p class="fw-bolder mb-2 mt-4">Datum en handtekening klant,</p>
                        <div class="form-group">
                            <textarea name="date_signature_customer" class="form-control" id="exampleFormControlTextarea3" rows="6"
                                required></textarea>
                            @error('date_signature_customer')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-secondary" type="submit">Cancel</button>


                    </div>

                </div>

            </div> <!-- eND OF lAST ROW -->


        </div> <!-- End of Col md 12 -->
    </form>
@endsection
