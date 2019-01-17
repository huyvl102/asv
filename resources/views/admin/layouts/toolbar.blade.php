<nav id="toolbar" class="bg-white">

    <div class="row no-gutters align-items-center flex-nowrap">

        <div class="col">

        </div>

        <div class="col-auto">

            <div class="row no-gutters align-items-center justify-content-end">

                <div class="user-menu-button dropdown">

                    <div class="dropdown-toggle ripple row align-items-center no-gutters px-2 px-sm-4" role="button"
                         id="dropdownUserMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-wrapper">
                            <img class="avatar" src="{{ asset('assets/images/avatars/profile.jpg') }}">
                            <i class="status text-green icon-checkbox-marked-circle s-4"></i>
                        </div>
                        <span class="username mx-3 d-none d-md-block">{{ Auth::user()->name }}</span>
                    </div>

                    <div class="dropdown-menu" aria-labelledby="dropdownUserMenu">

                        <a class="dropdown-item" href="#">
                            <div class="row no-gutters align-items-center flex-nowrap">
                                <i class="icon-account"></i>
                                <span class="px-3">My Profile</span>
                            </div>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <div class="row no-gutters align-items-center flex-nowrap">
                                <i class="icon-logout"></i>
                                <span class="px-3">Logout</span>
                            </div>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>

                <div class="toolbar-separator"></div>

                <div class="language-button dropdown">

                    <div
                        class="dropdown-toggle ripple row align-items-center justify-content-center no-gutters px-0 px-sm-4"
                        role="button" id="dropdownLanguageMenu" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="row no-gutters align-items-center">
                            <img class="flag mr-2" src="{{ asset('assets/images/flags/us.png') }}">
                            <span class="d-none d-md-block">EN</span>
                        </div>
                    </div>

                    <div class="dropdown-menu" aria-labelledby="dropdownLanguageMenu">

                        <a class="dropdown-item" href="#">
                            <div class="row no-gutters align-items-center flex-nowrap">
                                <img class="flag" src="{{ asset('assets/images/flags/us.png') }}">
                                <span class="px-3">English</span>
                            </div>
                        </a>

                        <a class="dropdown-item" href="#">
                            <div class="row no-gutters align-items-center flex-nowrap">
                                <img class="flag" src="{{ asset('assets/images/flags/es.png') }}">
                                <span class="px-3">Spanish</span>
                            </div>
                        </a>

                        <a class="dropdown-item" href="#">
                            <div class="row no-gutters align-items-center flex-nowrap">
                                <img class="flag" src="{{ asset('assets/images/flags/tr.png') }}">
                                <span class="px-3">Turkish</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
