<nav class="sidebar">
    <div class="sidebar-header">
        <a href="{{url('/')}}" class="sidebar-brand">
            Contract<span>Form</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item nav-category">Manage</li>
             <li class="nav-item">
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
            </li>
            <li class="nav-item">
                <a href="{{ route('internet_tv.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title"> Internet + TV </span>
                </a>
            </li>




          <li class="nav-item">
                <a href="{{ route('engie.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Contract Professionele Klanten</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('contract_professionele.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">Contract Residentile</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('pad_services.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="users"></i>
                    <span class="link-title">PAD Services</span>
                </a>
            </li>


        </ul>
    </div>
</nav>
