<style>
    .left-side-menu {
    background-color: #234c5c; /* Warna utama sidebar */
    padding: 15px;
    border-radius: 10px;
}



.user-box .user-info a {
    color: #fff; /* Warna teks */
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
    color: #003455; /* Warna saat hover */
}

.dropdown-menu {
    background-color: #337682; /* Warna dropdown */
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
    background-color: #337682; /* Warna dropdown */
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
    margin-bottom: 5px; /* Jarak antar submenu */
}

/* Untuk pemisah antar submenu */
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
            <li class="{{ Request::is('puskesmas/dashboard*') ? 'active' : '' }}">
                <a href="{{ url('puskesmas/dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="{{ Request::is('puskesmas/jadwal_posyandu_puskesmas*') ? 'active' : '' }}">
                <a href="{{ url('puskesmas/jadwal_posyandu_puskesmas') }}">
                    <i class="fas fa-calendar-alt"></i>
                    <span> Jadwal Posyandu </span>
                </a>
            </li>

        </ul>
    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>


</div>
