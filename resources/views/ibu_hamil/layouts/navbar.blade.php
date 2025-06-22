<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 d-flex align-items-center" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">

                {{-- Gambar User --}}
                <img src="{{ url('template/assets') }}/images/users/user_sikia.png" alt="user-image"
                    class="rounded-circle" height="40" width="40">

                {{-- Nama User --}}
                @php
                    $user = null;
                    if (Auth::guard('admin')->check()) {
                        $user = Auth::guard('admin')->user();
                    } elseif (Auth::guard('nakes')->check()) {
                        $user = Auth::guard('nakes')->user();
                    } elseif (Auth::guard('ibuhamil')->check()) {
                        $user = Auth::guard('ibuhamil')->user();
                    } elseif (Auth::guard('puskesmas')->check()) {
                        $user = Auth::guard('puskesmas')->user();
                    }
                @endphp

                <span class="pro-user-name ml-2 font-weight-bold">
                    {{ $user->name ?? 'Pengguna' }} <i class="mdi mdi-chevron-down"></i>
                </span>
            </a>

            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                <div class="dropdown-divider"></div>
                <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('Yakin ingin logout?');">
                    @csrf
                    <button type="submit" class="btn btn-danger w-100 mt-3">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </li>

        <li class="dropdown notification-list">
            <a href="javascript:void(0);" class="nav-link right-bar-toggle">
                <i class="mdi mdi-settings-outline noti-icon"></i>
            </a>
        </li>
    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="index.html" class="logo text-center logo-dark">
            <span class="logo-lg" style="margin-left: -100px;">
                <img src="{{ url('template/assets') }}/images/plugins/sikia_ketapang.png" alt="" height="65">
            </span><br>
            <span class="logo-sm" style="margin-left: -100px">
                <img src="{{ url('template/assets') }}/images/plugins/sikia_ketapang.png" alt="" height="65">
            </span><br>
        </a>

        <a href="index.html" class="logo text-center logo-light">
            <span class="logo-lg">
                <img src="{{ url('template/assets') }}/images/logo-light.png" alt="" height="26">
            </span>
            <span class="logo-sm">
                <img src="{{ url('template/assets') }}/images/logo-sm.png" alt="" height="22">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile">
                <i class="mdi mdi-menu"></i>
            </button>
        </li>
    </ul>
</div>
