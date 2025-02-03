<div class="left-side-menu">


    <div class="user-box">
        <div class="float-left">
            <img src="{{url('public')}}/template/assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle">
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
                <a href="{{ url('admin/dashboard') }}">
                    <i class="fas fa-home"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/bidan') }}">
                    <i class="fas fa-user-nurse"></i>
                    <span> Data Bidan </span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/fasyankes') }}">
                    <i class="fas fa-clinic-medical"></i>
                    <span> Data Fasyankes </span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/bayi') }}">
                    <i class="fas fa-baby"></i>
                    <span> Data Bayi </span>
                </a>
            </li>
            <li>
                <a href="{{ url('admin/ortu') }}">
                    <i class="fas fa-user-friends"></i> 
                    <span> Data Orang Tua </span>
                </a>
            </li>

        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>


</div>
