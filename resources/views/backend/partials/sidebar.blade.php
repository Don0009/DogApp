<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{ url('/') }}" class="sidebar-brand">
            <img class="mt-3 mb-2" style="text-align: center; margin:0 auto;" class="img-responsive"
                src="{{ asset('images/icons/logo.jpg') }}" height="35px" width="35px" alt="">

        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">

            <li class=" nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Manage</li>
            {{-- <!-- <li class="nav-item">
                <a href="{{ url('/admin/roles') }}" class="nav-link">
            <i class="link-icon" data-feather="shield"></i>
            <span class="link-title">Roles</span>
            </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/permissions') }}" class="nav-link">
                    <i class="link-icon" data-feather="unlock"></i>
                    <span class="link-title">Permissions</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/users') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('internet_home.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Internet Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/internet_home/create/?lang=fr') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Internet Home (French)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/internet_home/create/?lang=du') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Internet Home (Dutch)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('mobile_phone.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Mobile Phone</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/mobile_phone/create/?lang=fr') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Mobile Phone (French)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('admin/mobile_phone/create/?lang=du') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Mobile Phone (Dutch)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('number_porting.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Mobile number(s) porting</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('number_porting_du.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Mobile number(s) porting (Dutch)</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('electricity_natural_gas.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Electricity And Natural Gas</span>
                </a>
            </li> --> --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#orange" role="button" aria-expanded="false"
                    aria-controls="orange">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Orange</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="orange">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('internet_tv.index') }}" class="nav-link">Internet + TV</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('internet_home.index') }}" class="nav-link">Internet Home</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="{{ route('internet_home_du.index') }}" class="nav-link">Internet Home
                        (DU)</a>
            </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('mobile_phone.index') }}" class="nav-link">Mobile Phone</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('number_porting.index') }}" class="nav-link">Number Porting</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('number_porting_du.index') }}" class="nav-link">Number Porting
                                Dutch</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#telnet" role="button" aria-expanded="false"
                    aria-controls="telnet">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Telenet</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="telnet">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('telenet_new_subs.index') }}" class="nav-link">MNP
                                overdrachtsformulier </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('telenet_question.index') }}" class="nav-link">Telenet contract
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contractapp.index') }}" class="nav-link">Telenet Contract
                                Aanvraag</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--  Scarlet  -->

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#scarlet" role="button" aria-expanded="false"
                    aria-controls="scarlet">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Scarlet</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="scarlet">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('application_form.index') }}" class="nav-link">Formulaire de
                                demande</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse" id="scarlet">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('mobile_application_form.index') }}" class="nav-link">Mobile
                                Formulaire de
                                demande</a>
                        </li>
                    </ul>
                </div>

            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#octa" role="button" aria-expanded="false"
                    aria-controls="octa">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Octa +</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="octa">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('regi_form.index') }}" class="nav-link">Registration Form</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#base" role="button" aria-expanded="false"
                    aria-controls="base">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Base</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="base">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('number_request.index') }}" class="nav-link">Number Retention
                                Form </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('subscription_request.index') }}" class="nav-link">Subscription
                                Request
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#base" role="button" aria-expanded="false"
                    aria-controls="base">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Base</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="base">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('number_request.index') }}" class="nav-link">Number Retention
                                Form</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse" id="base">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('subscription_request.index') }}" class="nav-link">Subscription
                                Request
                                Form</a>
                        </li>
                    </ul>
                </div>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#lampiris" role="button" aria-expanded="false"
                    aria-controls="lampiris">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Lampiris</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="lampiris">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('lampiris.index') }}" class="nav-link">Lampiris Form</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#luminus" role="button" aria-expanded="false"
                    aria-controls="luminus">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Luminus</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="luminus">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('comfy_pro_contract.index') }}" class="nav-link">Comfy Pro
                                Contract</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('comfy_en_comfyflex.index') }}" class="nav-link">Comfy En
                                Comfyflex</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('comfypro_en_comfyflex_pro.index') }}" class="nav-link">ComfyPro
                                En
                                ComfyFlex Pro</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('lum_res_comfy.index') }}" class="nav-link">Lum Res Comfy</a>
                        </li>

                        {{-- <li class="nav-item">
                            <a href="{{ route('lum_res_comfy.index') }}" class="nav-link">Lum Res Comfy</a>
                        </li> --}}
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a href="{{ route('engie.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Contract Professionele </span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('pad_services.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Paid Services</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#Overnamedocument" role="button"
                    aria-expanded="false" aria-controls="Overnamedocument">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Overnamedocument</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="Overnamedocument">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('energy_transfer_document.index') }}"
                                class="nav-link">Energieovernamedocument </a>
                        </li>
                    </ul>
                </div>


            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#mega" role="button" aria-expanded="false"
                    aria-controls="mega">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Mega</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="mega">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('mega.index') }}" class="nav-link">Contract NL Mega </a>
                        </li>
                    </ul>
                </div>

            </li>
            {{-- Proximus --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#proximus" role="button" aria-expanded="false"
                    aria-controls="proximus">
                    <i class="link-icon" data-feather="inbox"></i>
                    <span class="link-title">Proximus</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="proximus">
                    <ul class="nav sub-menu">

                        <li class="nav-item">
                            <a href="{{ route('proximus_connection_request_du.index') }}"
                                class="nav-link">Connection Request
                                DU</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('proximus_connection_request_fr.index') }}"
                                class="nav-link">Connection Request
                                FR</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('proximus_number_porting_du.index') }}" class="nav-link">Number
                                Porting Request (DU)</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('proximus_number_porting_fr.index') }}" class="nav-link">Number
                                Porting Request (FR)</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('proximus_multi_contact_du.index') }}"
                                class="nav-link">Multi-Contact (FR)</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('proximus_multi_contact_fr.index') }}"
                                class="nav-link">Multi-Contact (DU)</a>
                        </li>
                    </ul>
                </div>

            </li>
        </ul>

    </div>
</nav>
