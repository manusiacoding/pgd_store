@role('super admin')
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('landing') }}"><span class="brand-logo">
                    {{-- <img src="{{ asset('images/logo_pesantren_go_digital.png') }}" alt="" srcset=""> --}}
                        <h2 class="brand-text">Pesantren Go Digital</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="{{ route('admin.dashboard.main') }}">
                        <i data-feather="home"></i>
                        <span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span>
                    </a>
                </li>

                <li class=" navigation-header">
                    <span data-i18n="Keamanan">Keamanan</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="#">
                        <i data-feather="lock"></i><span class="menu-title text-truncate" data-i18n="Invoice">Auth</span>
                    </a>
                    <ul class="menu-content">
                        <li>
                            <a class="d-flex align-items-center" href="{{ route('user.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="User">User</span>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="{{ route('role.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Role">Role</span>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex align-items-center" href="{{ route('permission.index') }}">
                                <i data-feather="circle"></i>
                                <span class="menu-item text-truncate" data-i18n="Permission">Permission</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
@elserole('user')
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('landing') }}"><span class="brand-logo">
                    {{-- <img src="{{ asset('images/logo_pesantren_go_digital.png') }}" alt="" srcset=""> --}}
                        <h2 class="brand-text">Pesantren Go Digital</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="{{ route('user.dashboard.main') }}">
                        <i data-feather="home"></i>
                        <span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span>
                    </a>
                </li>

                <li class=" navigation-header">
                    <span data-i18n="Layanan">Layanan</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('user.dashboard.layanan.index') }}">
                        <i data-feather="cpu"></i>
                        <span class="menu-title text-truncate" data-i18n="Layanan">Layanan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('user.dashboard.invoice.index') }}">
                        <i data-feather="shopping-bag"></i>
                        <span class="menu-title text-truncate" data-i18n="Invoice">Invoice</span>
                    </a>
                </li>

                <li class=" navigation-header">
                    <span data-i18n="Profile">Profile</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('user.dashboard.profile') }}">
                        <i data-feather="settings"></i>
                        <span class="menu-title text-truncate" data-i18n="Profile">Profile</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
@elserole('staff')
    <!-- START: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('landing') }}"><span class="brand-logo">
                    {{-- <img src="{{ asset('images/logo_pesantren_go_digital.png') }}" alt="" srcset=""> --}}
                        <h2 class="brand-text">Pesantren Go Digital</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                    <a class="d-flex align-items-center" href="{{ route('staff.dashboard.main') }}">
                        <i data-feather="home"></i>
                        <span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span>
                    </a>
                </li>

                <li class=" navigation-header">
                    <span data-i18n="Pembayaran">Data Pemilik Produk</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('admin.dashboard.pemilik_produk.index') }}">
                        <i data-feather="airplay"></i>
                        <span class="menu-title text-truncate" data-i18n="Data Pemilik Produk">Data Pemilik Produk</span>
                    </a>
                </li>

                <li class=" navigation-header">
                    <span data-i18n="Pembayaran">Data Pembayaran</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('admin.dashboard.pembayaran.index') }}">
                        <i data-feather="dollar-sign"></i>
                        <span class="menu-title text-truncate" data-i18n="Data Pembayaran">Data Pembayaran</span>
                    </a>
                </li>

                <li class=" navigation-header">
                    <span data-i18n="Master Data">Master Data</span>
                    <i data-feather="more-horizontal"></i>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route("pendidikan.index") }}">
                        <i data-feather="hard-drive"></i>
                        <span class="menu-title text-truncate" data-i18n="Data Produk">Data Pendidikan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('product.index') }}">
                        <i data-feather="coffee"></i>
                        <span class="menu-title text-truncate" data-i18n="Data Produk">Data Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center" href="{{ route('metode-pembayaran.index') }}">
                        <i data-feather="package"></i>
                        <span class="menu-title text-truncate" data-i18n="Metode Pembayaran">Metode Pembayaran</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
@endrole
