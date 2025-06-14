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

    #sidebar-menu ul li.active>a {
        background-color: #ffffff;
        color: #003455;
        font-weight: bold;
    }
</style>
<div class="left-side-menu">
    <div class="user-box">
        <div class="float-left">
            <img src="{{ url('public') }}/template/assets/images/users/avatar-1.jpg" alt=""
                class="avatar-md rounded-circle">
        </div>
        @php
            $user = Auth::guard('ibuhamil')->user();
        @endphp
        <div class="user-info">
            <a href="#">{{ Auth::guard('ibuhamil')->user()?->name ?? 'Ibu Hamil' }}</a>
            <p class="text-muted m-0">Ibu Hamil</p>
        </div>
    </div>
    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul class="metismenu" id="side-menu">

            <li class="menu-title">Navigation</li>

            <li class="{{ Request::is('ibu_hamil/dashboard*') ? 'active' : '' }}">
                <a href="{{ url('ibu_hamil/dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li class="{{ Request::is('ibu_hamil/identitas*') ? 'active' : '' }}">
                <a href="{{ url('ibu_hamil/identitas') }}">
                    <i class="fas fa-id-card"></i>
                    <span> Data Diri </span>
                </a>
            </li>
            <li class="{{ Request::is('ibu_hamil/anak*') ? 'active' : '' }}">
                <a href="{{ url('ibu_hamil/anak') }}">
                    <i class="fas fa-id-card"></i>
                    <span> Data Anak </span>
                </a>
            </li>
                   <li class="nav-item dropdown {{ Request::is('ibu_hamil/kesehatan_ibu/*') ? 'active' : '' }}">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownKesehatanIbu" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-baby"></i>
                    <span>Pemeriksaan Ibu </span>
                    <i class="fas fa-chevron-down ml-1"></i>
                </a>
                <div class="dropdown-menu border-0 shadow-sm rounded" aria-labelledby="dropdownKesehatanIbu">
                    <a class="dropdown-item {{ Request::is('ibu_hamil/kesehatan_ibu/periksa_rutin*') ? 'active' : '' }}"
                        href="{{ url('ibu_hamil/kesehatan_ibu/periksa_rutin') }}">
                        <i class="fas fa-baby mr-2"></i> Pemeriksaan Rutin
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item {{ Request::is('ibu_hamil/kesehatan_ibu/periksa_trimester*') ? 'active' : '' }}"
                        href="{{ url('ibu_hamil/kesehatan_ibu/periksa_trimester') }}">
                        <i class="fas fa-baby mr-2"></i> Pemeriksaan Trimester
                    </a>
                </div>
            </li>
            <li class="{{ Request::is('ibu_hamil/kesehatan_bayi*') ? 'active' : '' }}">
                <a href="{{ url('ibu_hamil/kesehatan_bayi') }}">
                    <i class="fas fa-baby"></i>
                    <span> Kesehatan Bayi </span>
                </a>
            </li>
            <li class="{{ Request::is('ibu_hamil/jadwal_posyandu*') ? 'active' : '' }}">
                <a href="{{ url('ibu_hamil/jadwal_posyandu') }}">
                    <i class="fas fa-calendar-alt"></i>
                    <span> Jadwal Posyandu </span>
                </a>
            </li>


        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>
</div>
