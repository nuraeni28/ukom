<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    {{-- <a href="index.html" class="logo"> SIS17</a> --}}
                    <a href="" class="logo"><img src="{{ asset('assets/images/logo.png') }}" height="50"
                            alt="logo">SIS17</a>
                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="{{ route('admin.index') }}" class="waves-effect">
                                <i class="mdi mdi-airplay"></i>
                                <span> Dashboard <span class="badge badge-pill badge-primary float-right"></span></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.informasi-kegiatan.index') }}" class="waves-effect">
                                <i class="mdi mdi-microsoft"></i>
                                <span> Informasi Kegiatan <span
                                        class="badge badge-pill badge-primary float-right"></span></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.jadwal-kegiatan.index') }}" class="waves-effect">
                                <i class="mdi mdi-calendar"></i>
                                <span>Jadwal Kegiatan <span
                                        class="badge badge-pill badge-primary float-right"></span></span>
                            </a>
                        </li>




                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->
