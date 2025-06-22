<style>
    .left-side-menu {
        background-color: #234c5c;
        /* Warna utama sidebar */
        padding: 15px;
        border-radius: 10px;
    }



    .user-box .user-info a {
        color: #fff;
        /* Warna teks */
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
        /* Warna saat hover */
    }

    .dropdown-menu {
        background-color: #337682;
        /* Warna dropdown */
        border: none;
        border-radius: 5px;
        color: #5eb2cc;
    }

    .dropdown-item {
        color: black;
    }

    .dropdown-item:hover {
        color: white;
    }

    .dropdown-menu {
        background-color: #337682;
        /* Warna dropdown */
        border: none;
        border-radius: 5px;
        color: #5eb2cc;
        padding: 10px 0;
    }

    .dropdown-item {
        color: black;
        padding: 10px 20px;
        display: block;
    }

    .dropdown-item:hover {
        background-color: #2b5d6a;
        color: white;
    }

    /* Tambahkan margin antar item */
    .dropdown-menu a {
        margin-bottom: 5px;
        /* Jarak antar submenu */
    }

    /* Untuk pemisah antar submenu */
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
            <img src="{{ url('template/assets') }}/images/users/user_sikia.png" alt=""
                class="avatar-md rounded-circle">
        </div>
        @php
            $user = Auth::guard('nakes')->user();
        @endphp
        <div class="user-info">
            <a href="#">{{ Auth::guard('nakes')->user()?->name ?? 'Nakes' }}</a>
            <p class="text-muted m-0">Nakes</p>
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul class="metismenu" id="side-menu">

            <li class="menu-title">Navigation</li>

            <li class="{{ Request::is('nakes/dashboard*') ? 'active' : '' }}">
                <a href="{{ url('nakes/dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li class="{{ Request::is('nakes/akun*') ? 'active' : '' }}">
                <a href="{{ url('nakes/akun') }}">
                    <i class="fas fa-female"></i>
                    <span> Akun Ibu Hamil </span>
                </a>
            </li>
            <li class="nav-item dropdown" {{ Request::is('nakes/ibu_hamil*') ? 'active' : '' }}>
                <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between" href="#"
                    id="ibuHamilDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div>
                        <i class="fas fa-heart"></i>
                        <span class="ml-2"> Ibu Hamil </span>
                    </div>
                    <i class="fas fa-chevron-down transition ml-2"></i> <!-- Ikon panah -->
                </a>
                <div class="dropdown-menu border-0 shadow-sm rounded" aria-labelledby="ibuHamilDropdown">
                    <a class="dropdown-item" href="{{ url('nakes/ibu_hamil/identitas') }}">
                        <i class="fas fa-female mr-2"></i> Data Ibu Hamil
                    </a>
                    <div class="dropdown-divider"></div> <!-- Pemisah -->
                    <a class="dropdown-item" href="{{ url('nakes/ibu_hamil/periksa_rutin') }}">
                        <i class="fas fa-stethoscope mr-2"></i> Daftar Periksa Rutin
                    </a>
                    <div class="dropdown-divider"></div> <!-- Pemisah -->
                    <a class="dropdown-item" href="{{ url('nakes/ibu_hamil/periksa_trimester') }}">
                        <i class="fas fa-calendar-check mr-2"></i> Daftar Periksa Trimester
                    </a>
                </div>
            </li>
            <li class="nav-item dropdown" {{ Request::is('nakes/bayi*') ? 'active' : '' }}>
                <a class="nav-link dropdown-toggle" href="#" id="bayiBalitaDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-baby"></i>
                    <span> Bayi Balita </span>
                    <i class="fas fa-chevron-down ml-1"></i> <!-- Panah dropdown -->
                </a>
                <div class="dropdown-menu border-0 shadow-sm rounded" aria-labelledby="bayiBalitaDropdown">
                    <a class="dropdown-item" href="{{ url('nakes/bayi/identitas') }}">
                        <i class="fas fa-baby mr-2"></i> Data Bayi Balita
                    </a>
                    <div class="dropdown-divider"></div> <!-- Pemisah -->
                    <a class="dropdown-item" href="{{ url('nakes/bayi/periksa') }}">
                        <i class="fas fa-stethoscope"></i> Daftar Periksa Bayi Balita
                    </a>
                </div>
            <li class="{{ Request::is('nakes/pesan*') ? 'active' : '' }}">
                <a href="{{ url('nakes/pesan') }}">
                    <i class="fas fa-bullhorn"></i>
                    <span> Pesan Broadcast </span>
                </a>
            </li>
        </ul>
    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>


</div>
