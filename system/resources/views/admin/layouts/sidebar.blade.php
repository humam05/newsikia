<style>
    .left-side-menu {
        background-color: #234c5c;
        padding: 15px;
        border-radius: 10px;
    }

    .user-box .user-info a {
        color: #fff;
        font-weight: bold;
    }

    #sidebar-menu ul li a {
        color: white;
        display: block;
        padding: 10px 15px;
        border-radius: 5px;
        transition: 0.3s;
    }

    #sidebar-menu ul li a:hover {
        background: rgba(255, 255, 255, 0.5);
        color: #003455;
    }

    .dropdown-menu {
        background-color: #337682;
        border: none;
        border-radius: 5px;
        padding: 10px 0;
    }

    .dropdown-item {
        color: black;
        padding: 10px 20px;
        display: block;
    }

    .dropdown-item:hover,
    .dropdown-item.active {
        background-color: #2b5d6a;
        color: white !important;
        font-weight: bold;
    }

    .dropdown-menu a {
        margin-bottom: 5px;
    }

    .dropdown-divider {
        height: 1px;
        background-color: rgba(255, 255, 255, 0.3);
        margin: 5px 0;
    }

    #sidebar-menu ul li.active > a {
        background-color: #ffffff;
        color: #003455;
        font-weight: bold;
    }
</style>

<div class="left-side-menu">
    <div class="user-box">
        <div class="float-left">
            <img src="{{ url('public') }}/template/assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
        </div>
        <div class="user-info">
            <a href="#">Alvia</a>
            <p class="text-muted m-0">Administrator</p>
        </div>
    </div>

    <div id="sidebar-menu">
        <ul class="metismenu" id="side-menu">
            <li class="menu-title">Navigation</li>

            <li class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <a href="{{ url('admin/dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="{{ Request::is('admin/bidan*') ? 'active' : '' }}">
                <a href="{{ url('admin/bidan') }}">
                    <i class="fas fa-user-nurse"></i>
                    <span> Nakes </span>
                </a>
            </li>

            <li class="{{ Request::is('admin/fasyankes*') ? 'active' : '' }}">
                <a href="{{ url('admin/fasyankes') }}">
                    <i class="fas fa-clinic-medical"></i>
                    <span> Fasyankes </span>
                </a>
            </li>
            <li class="nav-item dropdown {{ Request::is('admin/ibu_hamil/*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="akunDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-baby"></i>
                    <span> Ibu Hamil </span>
                    <i class="fas fa-chevron-down ml-1"></i>
                </a>
                <div class="dropdown-menu border-0 shadow-sm rounded" aria-labelledby="akunDropdown">
                    <a class="dropdown-item {{ Request::is('admin/ibu_hamil/identitas') ? 'active' : '' }}" href="{{ url('admin/ibu_hamil/identitas') }}">
                        <i class="fas fa-baby mr-2"></i> Identitas
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item {{ Request::is('admin/ibu_hamil/hpl') ? 'active' : '' }}" href="{{ url('admin/ibu_hamil/hpl') }}">
                        <i class="fas fa-chart-line mr-2"></i> HPL
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item {{ Request::is('admin/ibu_hamil/periksa') ? 'active' : '' }}" href="{{ url('admin/ibu_hamil/periksa') }}">
                        <i class="fas fa-chart-line mr-2"></i> Periksa
                    </a>
                </div>
            </li>


            <li class="{{ Request::is('admin/bayi*') ? 'active' : '' }}">
                <a href="{{ url('admin/bayi') }}">
                    <i class="fas fa-baby"></i>
                    <span> Bayi </span>
                </a>
            </li>

            <li class="{{ Request::is('admin/ortu*') ? 'active' : '' }}">
                <a href="{{ url('admin/ortu') }}">
                    <i class="fas fa-user-friends"></i>
                    <span> Data Orang Tua </span>
                </a>
            </li>

            <li class="nav-item dropdown {{ Request::is('admin/akun/*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="akunDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-baby"></i>
                    <span> Akun </span>
                    <i class="fas fa-chevron-down ml-1"></i>
                </a>
                <div class="dropdown-menu border-0 shadow-sm rounded" aria-labelledby="akunDropdown">
                    <a class="dropdown-item {{ Request::is('admin/akun/dinas') ? 'active' : '' }}" href="{{ url('admin/akun/dinas') }}">
                        <i class="fas fa-baby mr-2"></i> Dinas
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item {{ Request::is('admin/akun/nakes') ? 'active' : '' }}" href="{{ url('admin/akun/nakes') }}">
                        <i class="fas fa-chart-line mr-2"></i> Nakes
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item {{ Request::is('admin/akun/puskesmas') ? 'active' : '' }}" href="{{ url('admin/akun/puskesmas') }}">
                        <i class="fas fa-chart-line mr-2"></i> Puskesmas
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item {{ Request::is('admin/akun/ibu_hamil') ? 'active' : '' }}" href="{{ url('admin/akun/ibu_hamil') }}">
                        <i class="fas fa-chart-line mr-2"></i> Ibu Hamil
                    </a>
                </div>
            </li>

            <li class="{{ Request::is('admin/posyandu*') ? 'active' : '' }}">
                <a href="{{ url('admin/posyandu') }}">
                    <i class="fas fa-user-friends"></i>
                    <span> Posyandu </span>
                </a>
            </li>

        </ul>
    </div>

    <div class="clearfix"></div>
</div>
