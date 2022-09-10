@guest
    <!-- //header style One-->
    <header style="background-color: #2AC59F" id="headerOne" class="header-area header-one header-desktop">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-2">
                    <div class="logo">
                        <a href="{{ route('landing') }}">
                            <img class="img-fluid"
                                src="{{ asset('landing/images/logo/logo_pgd.png') }}"
                                alt="logo here">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <nav class="navbar navbar-expand-lg">
                        <div class="navbar-collapse">
                            <div class="navbar-collapse">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                      <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                                    </li>
                                    {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Produk
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Produk 1</a>
                                        <a class="dropdown-item" href="#">Produk 2</a>
                                        <a class="dropdown-item" href="#">Produk 3</a>
                                    </div>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://pesantrengodigital.id/f-a-q/">FAQ</a>
                                      </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="https://pesantrengodigital.id/hubungi-kami/">Hubungi Kami</a>
                                    </li>
                                  </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-lg-5 d-flex justify-content-end">
                    <ul class="pro-header-right-options">

                        <li>
                            <a href="{{ route('landing.wishlist') }}" class="btn btn-light" >
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('landing.cart') }}" class="btn btn-light" >
                                <i class="fas fa-shopping-bag"></i>
                            </a>
                        </li>

                        <li class="dropdown profile-tags">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton42"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </button>
                            @guest
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                </div>
                            @else
                                @role('user')
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                                        <a class="dropdown-item" href="{{ route('user.dashboard.main') }}">Dashboard</a>
                                    </div>
                                @elserole('staff')
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                                        <a class="dropdown-item" href="{{ route('staff.dashboard.main') }}">Dashboard</a>
                                    </div>
                                @elserole('super admin')
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                                        <a class="dropdown-item" href="{{ route('admin.dashboard.main') }}">Dashboard</a>
                                    </div>
                                @endrole
                            @endguest
                            {{-- <div class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownAccountButton42">
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>

                            </div> --}}
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- //Sticky Header -->
    <header style="background-color: #2AC59F; padding: 10px 0px;" id="stickyHeader" class="header-area header-sticky d-none  bg-sticky-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-2">
                    <div class="logo">
                        <a href="{{ route('landing') }}">
                            <img class="img-fluid"
                                src="{{ asset('landing/images/logo/logo_pgd.png') }}"
                                alt="logo here">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <nav class="navbar navbar-expand-lg">
                        <div class="navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://pesantrengodigital.id/f-a-q/">
                                        FAQ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="https://pesantrengodigital.id/hubungi-kami/">
                                        Hubungi Kami
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-lg-5 d-flex justify-content-end">
                    <ul class="pro-header-right-options">

                        <li>
                            <a href="{{ route('landing.wishlist') }}" class="btn btn-light" >
                                <i class="far fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('landing.cart') }}" class="btn btn-light" >
                                <i class="fas fa-shopping-bag"></i>
                            </a>
                        </li>

                        <li class="dropdown profile-tags">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton45"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownAccountButton45">
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- //Mobile Header -->
    <header style="background-color: #2AC59F" id="headerMobile" class="header-area header-mobile">

        <div class="header-maxi bg-header-bar" style="background-color: #2AC59F;">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-6 pr-0 flex-col">
                        <div class="navigation-mobile-container">
                            <a href="javascript:void(0)" class="navigation-mobile-toggler">
                                <span class="fas fa-bars"></span>
                            </a>
                            <nav id="navigation-mobile">
                                <div class="logout-main">
                                    <div class="welcome">
                                        <span>Selamat Datang&nbsp;!</span>
                                    </div>
                                </div>

                                <a href="{{ route('landing') }}" class="main-manu btn ">
                                    Home
                                </a>
                                <a href="https://pesantrengodigital.id/f-a-q/" class="main-manu btn ">
                                    FAQ
                                </a>
                                <a href="https://pesantrengodigital.id/hubungi-kami/" class="main-manu btn ">
                                    Hubungi Kami
                                </a>
                                <a href="{{ route('login') }}" class="main-manu btn ">
                                    Login
                                </a>
                                <a href="{{ route('register') }}" class="main-manu btn ">
                                    Register
                                </a>
                            </nav>
                        </div>
                        <a href="{{ route('landing') }}" class="logo">
                            <img class="img-fluid"
                                src="{{ asset('landing/images/logo/logo_pgd.png') }}"
                                alt="logo here">
                        </a>
                    </div>

                    <div class="col-6 pl-0">
                        <ul class="pro-header-right-options">

                              <li>
                                  <a href="{{ route('landing.wishlist') }}" class="btn btn-light" >
                                      <i class="far fa-heart"></i>
                                  </a>
                              </li>

                              <li>
                                <a href="{{ route('landing.cart') }}" class="btn btn-light" >
                                    <i class="fas fa-shopping-bag"></i>
                                </a>
                              </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="header-navbar bg-menu-bar">
            <div class="container">
                <form class="form-inline">
                    <div class="search-field-module">

                        <div class="search-field-wrap">
                            <input type="search" placeholder="Search Products..." data-toggle="tooltip"
                                data-placement="bottom" title="search item">
                            <button class="btn btn-secondary swipe-to-top" data-toggle="tooltip"
                                data-placement="bottom" title="Search Products">
                                <i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}
    </header>

@else
    @php
        $count_cart = App\Models\Cart::where('user_id', Auth::user()->id)->count();
        $count_wishlist = App\Models\Wishlist::where('user_id', Auth::user()->id)->count();
    @endphp
    {{-- @dd($count_cart) --}}
    <!-- //header style One-->
    <header style="background-color: #2AC59F" id="headerOne" class="header-area header-one header-desktop">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-2">
                    <div class="logo">
                        <a href="{{ route('landing') }}">
                            <img class="img-fluid"
                                src="{{ asset('landing/images/logo/logo_pgd.png') }}"
                                alt="logo here">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <nav class="navbar navbar-expand-lg">
                        <div class="navbar-collapse">
                            <div class="navbar-collapse">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                    <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                                    </li>
                                    {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Produk
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Produk 1</a>
                                        <a class="dropdown-item" href="#">Produk 2</a>
                                        <a class="dropdown-item" href="#">Produk 3</a>
                                    </div>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://pesantrengodigital.id/f-a-q/">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="https://pesantrengodigital.id/hubungi-kami/">Hubungi Kami</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-lg-5 d-flex justify-content-end">
                    <ul class="pro-header-right-options">

                        <li>
                            <a href="{{ route('landing.wishlist') }}" class="btn btn-light" >
                                <i class="far fa-heart"></i>
                                <span class="badge badge-secondary">{{ $count_wishlist }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('landing.cart') }}" class="btn btn-light" >
                                <i class="fas fa-shopping-bag"></i>
                                <span class="badge badge-secondary">{{ $count_cart }}</span>
                            </a>
                        </li>

                        <li class="dropdown profile-tags">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton42"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </button>
                            @guest
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                </div>
                            @else
                                @role('user')
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                                        <a class="dropdown-item" href="{{ route('user.dashboard.main') }}">Dashboard</a>
                                    </div>
                                @elserole('staff')
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                                        <a class="dropdown-item" href="{{ route('staff.dashboard.main') }}">Dashboard</a>
                                    </div>
                                @elserole('super admin')
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                                    <a class="dropdown-item" href="{{ route('admin.dashboard.main') }}">Dashboard</a>
                                </div>
                                @endrole
                            @endguest
                            {{-- <div class="dropdown-menu dropdown-menu-right"
                                aria-labelledby="dropdownAccountButton42">
                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                <a class="dropdown-item" href="{{ route('register') }}">Register</a>

                            </div> --}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- //Sticky Header -->
    <header style="background-color: #2AC59F; padding: 10px 0px;" id="stickyHeader" class="header-area header-sticky d-none  bg-sticky-bar">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-12 col-lg-2">
                    <div class="logo">
                        <a href="{{ route('landing') }}">
                            <img class="img-fluid"
                                src="{{ asset('landing/images/logo/logo_pgd.png') }}"
                                alt="logo here">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <nav class="navbar navbar-expand-lg">
                        <div class="navbar-collapse">
                            <div class="navbar-collapse">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                      <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                                    </li>
                                    {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Produk
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Produk 1</a>
                                        <a class="dropdown-item" href="#">Produk 2</a>
                                        <a class="dropdown-item" href="#">Produk 3</a>
                                    </div>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://pesantrengodigital.id/f-a-q/">FAQ</a>
                                      </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="https://pesantrengodigital.id/hubungi-kami/">Hubungi Kami</a>
                                    </li>
                                  </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-12 col-lg-5 d-flex justify-content-end">
                    <ul class="pro-header-right-options">

                        <li>
                            <a href="{{ route('landing.wishlist') }}" class="btn btn-light" >
                                <i class="far fa-heart"></i>
                                <span class="badge badge-secondary">{{ $count_wishlist }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('landing.cart') }}" class="btn btn-light" >
                                <i class="fas fa-shopping-bag"></i>
                                <span class="badge badge-secondary">{{ $count_cart }}</span>
                            </a>
                        </li>

                        <li class="dropdown profile-tags">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownAccountButton45"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user"></i>
                            </button>
                            @guest
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                                    <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">Register</a>
                                </div>
                            @else
                                @role('user')
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                                        <a class="dropdown-item" href="{{ route('user.dashboard.main') }}">Dashboard</a>
                                    </div>
                                @elserole('staff')
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                                        <a class="dropdown-item" href="{{ route('staff.dashboard.main') }}">Dashboard</a>
                                    </div>
                                @elserole('super admin')
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownAccountButton42">
                                    <a class="dropdown-item" href="{{ route('admin.dashboard.main') }}">Dashboard</a>
                                </div>
                                @endrole
                            @endguest
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- //Mobile Header -->
    <header style="background-color: #2AC59F" id="headerMobile" class="header-area header-mobile">

        <div class="header-maxi bg-header-bar" style="background-color: #2AC59F;">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-6 pr-0 flex-col">
                        <div class="navigation-mobile-container">
                            <a href="javascript:void(0)" class="navigation-mobile-toggler">
                                <span class="fas fa-bars"></span>
                            </a>
                            <nav id="navigation-mobile">
                                <div class="logout-main">
                                    <div class="welcome">
                                        <span>Welcome&nbsp;Guest !</span>
                                    </div>
                                </div>

                                <a href="{{ route('landing') }}" class="main-manu btn ">
                                    Home
                                </a>
                                <a href="https://pesantrengodigital.id/f-a-q/" class="main-manu btn ">
                                    FAQ
                                </a>
                                <a href="https://pesantrengodigital.id/hubungi-kami/" class="main-manu btn ">
                                    Hubungi Kami
                                </a>

                                @role('user')
                                    <a href="{{ route('user.dashboard.main') }}" class="main-manu btn ">
                                        Dashboard
                                    </a>
                                @elserole('staff')
                                    <a href="{{ route('staff.dashboard.main') }}" class="main-manu btn ">
                                        Dashboard
                                    </a>
                                @elserole('super admin')
                                    <a href="{{ route('admin.dashboard.main') }}" class="main-manu btn ">
                                        Dashboard
                                    </a>
                                @endrole
                                {{-- <a href="{{ route('login') }}" class="main-manu btn ">
                                    Login
                                </a>
                                <a href="{{ route('register') }}" class="main-manu btn ">
                                    Register
                                </a> --}}
                            </nav>
                        </div>
                        <a href="{{ route('landing') }}" class="logo">
                            <img class="img-fluid"
                                src="{{ asset('landing/images/logo/logo_pgd.png') }}"
                                alt="logo here">
                        </a>
                    </div>

                    <div class="col-6 pl-0">
                        <ul class="pro-header-right-options">

                              <li>
                                  <a href="{{ route('landing.wishlist') }}" class="btn btn-light" >
                                      <i class="far fa-heart"></i>
                                      <span class="badge badge-secondary">{{ $count_wishlist }}</span>
                                  </a>
                              </li>

                              <li>
                                <a href="{{ route('landing.cart') }}" class="btn btn-light" >
                                    <i class="fas fa-shopping-bag"></i>
                                    <span class="badge badge-secondary">{{ $count_cart }}</span>
                                </a>
                              </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="header-navbar bg-menu-bar">
            <div class="container">
                <form class="form-inline">
                    <div class="search-field-module">

                        <div class="search-field-wrap">
                            <input type="search" placeholder="Search Products..." data-toggle="tooltip"
                                data-placement="bottom" title="search item">
                            <button class="btn btn-secondary swipe-to-top" data-toggle="tooltip"
                                data-placement="bottom" title="Search Products">
                                <i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}
    </header>

@endguest

