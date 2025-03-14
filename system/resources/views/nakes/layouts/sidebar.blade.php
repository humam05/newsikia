<style>
 .dropdown {
    position: relative;
}

.dropdown-menu {
    display: none;
    position: absolute;
    background-color: #652e2e;
    list-style: none;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}

.dropdown:hover .dropdown-menu {
    display: block;
}

/* Rotasi ikon panah saat dropdown aktif */
.dropdown:hover i.fa-chevron-down {
    transform: rotate(180deg);
    transition: 0.3s;
}



</style>
<div class="left-side-menu">
    <div class="user-box">
        <div class="float-left">
            <img src="{{ url('public') }}/template/assets/images/users/avatar-1.jpg" alt=""
                class="avatar-md rounded-circle">
        </div>
        <div class="user-info">
            <a href="#">Alvia </a>
            <p class="text-muted m-0">Administrator</p>
        </div>
    </div>

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul class="metismenu" id="side-menu">

            <li class="menu-title">Navigation</li>

            <li>
                <a href="{{ url('nakes/dashboardn') }}">
                    <i class="fas fa-home"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li>
                <a href="{{ url('nakes/akun') }}">
                    <i class="fas fa-female"></i>
                    <span> Akun Ibu Hamil </span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between" href="#" id="ibuHamilDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div>
                        <i class="fas fa-heartbeat"></i>
                        <span class="ml-2"> Ibu Hamil </span>
                    </div>
                    <i class="fas fa-chevron-down transition ml-2"></i> <!-- Ikon panah -->
                </a>
                <div class="dropdown-menu border-0 shadow-sm rounded" aria-labelledby="ibuHamilDropdown">
                    <a class="dropdown-item" href="{{ url('nakes/') }}">
                        <i class="fas fa-female mr-2"></i> Data Ibu Hamil
                    </a>
                    <a class="dropdown-item" href="{{ url('nakes/hpl') }}">
                        <i class="fas fa-calendar-alt mr-2"></i> HPL
                    </a>
                </div>

            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="bayiBalitaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-baby"></i>
                    <span> Bayi Balita </span>
                    <i class="fas fa-chevron-down ml-1"></i> <!-- Panah dropdown -->
                </a>
                <div class="dropdown-menu border-0 shadow-sm rounded" aria-labelledby="bayiBalitaDropdown">
                    <a class="dropdown-item" href="{{ url('nakes/bayi') }}">
                        <i class="fas fa-baby mr-2"></i> Data Bayi Balita
                    </a>
                    <a class="dropdown-item" href="{{ url('nakes/kms') }}">
                        <i class="fas fa-chart-line mr-2"></i> KMS
                    </a>
                </div>
            </li>


        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>


</div>
