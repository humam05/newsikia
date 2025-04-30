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

#sidebar-menu ul li.active > a {
    background-color: #f6f6f6;
    color: #003455;
    font-weight: bold;
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
            <li class="{{ Request::is('ibu_hamil/kesehatan_ibu*') ? 'active' : '' }}">
                <a href="{{ url('ibu_hamil/kesehatan_ibu') }}">
                    <i class="fas fa-hand-holding-heart"></i>
                    <span> Kesehatan Ibu </span>
                </a>
            </li>
            <li class="{{ Request::is('ibu_hamil/kesehatan_bayi*') ? 'active' : '' }}">
                <a href="{{ url('ibu_hamil/kesehatan_bayi') }}">
                    <i class="fas fa-baby"></i>
                    <span> Kesehatan Bayi </span>
                </a>
            </li>
            <li class="{{ Request::is('ibu_hamil/kalender_kehamilan*') ? 'active' : '' }}">
                <a href="{{ url('ibu_hamil/kalender_kehamilan') }}">
                    <i class="fas fa-hourglass-half"></i>
                    <span> Kalender Kehamilan </span>
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
