<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Katalog - Pesantren Go Digital</title>
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png"
        href="{{ asset('landing/images/miscellaneous/logo_.png') }}">

    {{-- {{ asset('landing/') }} --}}

    <!-- Fontawesome CSS Files -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Core CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/css/style.css') }}">

    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('landing/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('landing/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('landing/revolution/css/navigation.css') }}">

    <!-- Start CDN Ajax-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- End CDN Ajax-->

</head>

<body>
    <!-- Paste this code after body tag -->
    {{-- <div class="se-pre-con">
        <div class="pre-loader">
            <div class="">
                <header class="header-area header-one header-desktop ">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-2">
                                <div class="logo">
                                    <a href="">
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
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="">
                                                    Home
                                                </a>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="">
                                                    Shop
                                                </a>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="">
                                                    Product
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="">
                                                    Elements
                                                </a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="">
                                                    Pages
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-12 col-lg-5 d-flex justify-content-end">
                                <div class="navbar-lang">
                                    <ul>
                                        <li class="dropdown">
                                            <button class="btn dropdown-toggle" type="button">
                                                En
                                            </button>
                                        </li>
                                        <li class="dropdown">
                                            <button class="btn dropdown-toggle" type="button">
                                                USD
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="pro-header-right-options">

                                    <li class="dropdown search-field">
                                        <button class="btn btn-light dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </li>
                                    <li class="dropdown profile-tags">
                                        <button class="btn btn-light dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-user"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <a href="" class="btn btn-light">
                                            <i class="far fa-heart"></i>
                                            <span class="badge badge-secondary">0</span>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <button class="btn btn-light dropdown-toggle" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-shopping-bag"></i>
                                            <span class="badge badge-secondary">2</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <header class="header-area header-mobile">

                    <div class="header-maxi bg-header-bar ">
                        <div class="container">

                            <div class="row align-items-center">
                                <div class="col-6 pr-0 flex-col">
                                    <div class="navigation-mobile-container">
                                        <a href="" class="navigation-mobile-">
                                            <span class="fas fa-bars"></span>
                                        </a>

                                    </div>
                                    <a href="" class="logo">
                                        <img class="img-fluid"
                                            src="{{ asset('landing/images/logo/logo_pgd.png') }}"
                                            alt="logo here">
                                    </a>
                                </div>



                                <div class="col-6 pl-0">
                                    <ul class="pro-header-right-options">

                                        <li>
                                            <a href="" class="btn  btn-light">
                                                <i class="far fa-heart"></i>
                                                <span class="badge badge-secondary">0</span>
                                            </a>
                                        </li>

                                        <li class="dropdown">
                                            <button class="btn btn-light dropdown-toggle">
                                                <i class="fas fa-shopping-bag"></i>
                                                <span class="badge badge-secondary">2</span>
                                            </button>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-navbar bg-menu-bar">
                        <div class="container">
                            <form class="form-inline">
                                <div class="search-field-module">

                                    <div class="search-field-wrap">
                                        <input type="search" placeholder="Search Products..." readonly>
                                        <button class="btn btn-secondary swipe-to-top">
                                            <i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </header>
                <div class="home-slider">
                    <div class="home  skeleton-box"></div>
                </div>
                <section class="banners-content pro-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <figure class="banner-image">
                                    <div class="pro-thumb skeleton-box"></div>

                                    <div class="banner-caption right-caption">
                                        <p class="skeleton-box"></p>
                                        <h3 class="skeleton-box"> </h3>
                                        <a href="" class="btn skeleton-box"> </a>
                                    </div>

                                </figure>
                            </div>
                            <div class="col-12 col-lg-4">
                                <figure class="banner-image right">


                                    <div class="banner-caption left-caption">
                                        <p class="skeleton-box"></p>
                                        <h3 class="skeleton-box"> </h3>
                                        <a href="" class="btn skeleton-box"> </a>
                                    </div>
                                    <div class="pro-thumb skeleton-box"></div>

                                </figure>
                            </div>
                            <div class="col-12 col-lg-4">
                                <figure class="banner-image">
                                    <div class="pro-thumb skeleton-box"></div>

                                    <div class="banner-caption right-caption">
                                        <p class="skeleton-box"></p>
                                        <h3 class="skeleton-box"> </h3>
                                        <a href="" class="btn skeleton-box"> </a>
                                    </div>

                                </figure>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="tabs-content pro-content">
                    <div class="container">
                        <div class="row ">
                            <div class="col-12 col-md-6">
                                <div class="pro-heading-title">
                                    <h2 class="mb-2 skeleton-box">
                                    </h2>
                                    <p class="skeleton-box">
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="nav" role="tablist">
                                    <a class="nav-link btn skeleton-box"> </a>

                                    <a class="nav-link btn skeleton-box"></a>


                                    <a class="nav-link btn skeleton-box"></a>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4  col-lg-3">
                                <div class="product skeleton-box">
                                    <article>
                                        <div class="pro-thumb">
                                        </div>
                                        <div class="pro-info ">
                                            <div class="pro-category">

                                            </div>
                                            <h3></h3>

                                            <div class="pro-price bg-no">

                                                <ins>
                                                    <del>

                                                    </del>
                                                </ins>

                                                <button class="btn-light icon " onclick="notificationWishlist();"
                                                    tabindex="0">

                                                </button>
                                            </div>


                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-sm-block d-none">
                                <div class="product skeleton-box">
                                    <article>
                                        <div class="pro-thumb">
                                        </div>
                                        <div class="pro-info ">
                                            <div class="pro-category">

                                            </div>
                                            <h3></h3>

                                            <div class="pro-price bg-no">

                                                <ins>
                                                    <del>

                                                    </del>
                                                </ins>

                                                <button class="btn-light icon " onclick="notificationWishlist();"
                                                    tabindex="0">

                                                </button>
                                            </div>


                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-md-block d-none">
                                <div class="product skeleton-box">
                                    <article>
                                        <div class="pro-thumb">
                                        </div>
                                        <div class="pro-info ">
                                            <div class="pro-category">

                                            </div>
                                            <h3></h3>

                                            <div class="pro-price bg-no">

                                                <ins>
                                                    <del>

                                                    </del>
                                                </ins>

                                                <button class="btn-light icon " onclick="notificationWishlist();"
                                                    tabindex="0">

                                                </button>
                                            </div>


                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3  d-lg-block d-none">
                                <div class="product skeleton-box">
                                    <article>
                                        <div class="pro-thumb">
                                        </div>
                                        <div class="pro-info ">
                                            <div class="pro-category">

                                            </div>
                                            <h3></h3>

                                            <div class="pro-price bg-no">

                                                <ins>
                                                    <del>

                                                    </del>
                                                </ins>

                                                <button class="btn-light icon " onclick="notificationWishlist();"
                                                    tabindex="0">

                                                </button>
                                            </div>


                                        </div>
                                    </article>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <div class="pro-banners-content pre-slick  pro-content ">
                    <div class="tabs-content2 bg-paralex pro-content  d-flex align-items-center">
                        <div class=" container">
                            <div class="bannerbg">
                                <div class="parallax-banner-text d-flex flex-column align-items-center">
                                    <h2 class="skeleton-box"></h2>
                                    <p class="skeleton-box"> </p>
                                    <p class="skeleton-box"> </p>
                                    <button class="btn skeleton-box"> </button>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="pro-top-sellers pro-content">
                    <div class="container">
                        <div class="row ">
                            <div class="col-12 col-md-6">
                                <div class="pro-heading-title">
                                    <h2 class="mb-2 skeleton-box">
                                    </h2>
                                    <p class="skeleton-box">
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="product product-2x">
                                    <article>
                                        <div class="pro-thumb ">
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-over">
                                                <h3 class="skeleton-box"></h3>
                                                <div class="pro-price">
                                                    <ins class="skeleton-box"> </ins>
                                                    <del class="skeleton-box">

                                                    </del>
                                                </div>
                                                <a href="" class="btn skeleton-box" tabindex="0"> </a>
                                            </div>
                                        </div>


                                    </article>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-md-block d-none">
                                <div class="product product-2x">
                                    <article>
                                        <div class="pro-thumb">
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-over">
                                                <h3 class="skeleton-box"></h3>
                                                <div class="pro-price">
                                                    <ins cite="skeleton-box"> </ins>
                                                    <del class="skeleton-box">

                                                    </del>
                                                </div>
                                                <a href="" class="btn skeleton-box" tabindex="0"> </a>
                                            </div>
                                        </div>


                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="pro-fs-content pro-content">

                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="pro-thumb skeleton-box"></div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="pro-info">
                                    <h2 class="skeleton-box"> </h2>
                                    <h3 class="skeleton-box"></h3>
                                    <p class="skeleton-box">
                                    </p>
                                    <div class="pro-price">
                                        <ins class="skeleton-box">

                                        </ins>
                                        <del class="skeleton-box">

                                        </del>
                                    </div>
                                    <div class=" pro-timer">
                                        <span class="days skeleton-box p-0"><small></small></span>
                                        <span class="hours skeleton-box p-0"><small></small></span>
                                        <span class="mintues skeleton-box p-0"><small></small></span>
                                        <span class="seconds skeleton-box p-0"><small></small></span>
                                    </div>
                                    <button type="button" class="btn  skeleton-box" onclick="notificationCart();"
                                        tabindex="0"></button>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="pro-blog-content pro-content">
                    <div class="container">
                        <div class="row ">
                            <div class="col-12 col-md-6">
                                <div class="pro-heading-title">
                                    <h2 class="mb-2 skeleton-box">
                                    </h2>
                                    <p class="skeleton-box">
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="blog">
                                    <div class="blog-thumb skeleton-box">
                                    </div>
                                    <div class="blog-info">
                                        <div class="blog-meta">
                                            <a tabindex="0">


                                            </a>
                                            <a tabindex="0">

                                            </a>
                                        </div>
                                        <h3 class=" skeleton-box"></h3>

                                        <p class=" skeleton-box"></p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12  col-md-6 col-lg-4 d-md-block d-none">
                                <div class="blog">
                                    <div class="blog-thumb skeleton-box">
                                    </div>
                                    <div class="blog-info">
                                        <div class="blog-meta">
                                            <a tabindex="0">


                                            </a>
                                            <a tabindex="0">

                                            </a>
                                        </div>
                                        <h3 class=" skeleton-box"></h3>

                                        <p class=" skeleton-box"></p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12  col-md-6 col-lg-4 d-lg-block d-none">
                                <div class="blog">
                                    <div class="blog-thumb skeleton-box">
                                    </div>
                                    <div class="blog-info">
                                        <div class="blog-meta">
                                            <a tabindex="0">


                                            </a>
                                            <a tabindex="0">

                                            </a>
                                        </div>
                                        <h3 class=" skeleton-box"></h3>

                                        <p class=" skeleton-box"></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="brands-content pro-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 col-lg-2 col-md-3 col-sm-4 ">
                                <div class="brands-skul skeleton-box"></div>
                            </div>
                            <div class="col-6 col-lg-2 col-md-3  col-sm-4">
                                <div class="brands-skul skeleton-box"></div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-3 col-sm-4  d-sm-block d-none">
                                <div class="brands-skul skeleton-box"></div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-3 d-md-block d-none">
                                <div class="brands-skul skeleton-box"></div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-3 d-lg-block d-none">
                                <div class="brands-skul skeleton-box"></div>
                            </div>
                            <div class="col-12 col-lg-2 col-md-3 d-lg-block d-none">
                                <div class="brands-skul skeleton-box"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="pro-content footer-area footer-one footer-desktop">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-6 newsletter">
                                <h5 class=" skeleton-box">

                                </h5>
                                <h3 class=" skeleton-box"></h3>
                                <p class=" skeleton-box"></p>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter Your Email..."
                                        aria-label="Enter Your Email..." readonly>
                                    <div class="input-group-append">
                                        <button class="btn  skeleton-box" type="button"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid p-0">
                        <div class="copyright-content">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6">
                                        <div class="footer-info">
                                            <h5 class=" skeleton-box"></h5>
                                        </div>

                                    </div>
                                    <div class="col-12 col-md-6">
                                        <ul class="socials">
                                            <li class="iconbg skeleton-box"></li>
                                            <li class="iconbg skeleton-box"></li>
                                            <li class="iconbg skeleton-box"></li>
                                            <li class="iconbg skeleton-box"></li>
                                            <li class="iconbg skeleton-box"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

    </div> --}}

    <!-- Main Body -->
    <div class="wrapper" style="display: none;">

        <!-- Start Header -->
        @include('landing.components.header')
        <!-- End Header -->

        @yield('content')

        <!-- Start Section Four -->
        @include('landing.components.section-4')
        <!-- End Section Four -->


        <!-- Start Carousel -->
        {{-- @include('landing.components.carousel') --}}
        <!-- End Carousel -->

        <!-- Start Banner -->
        {{-- @include('landing.components.banner') --}}
        <!-- End Banner -->

        <!-- Start New Product -->
        {{-- @include('landing.components.new-product') --}}
        <!-- End New Product -->

        <!-- Start Middle Banner -->
        {{-- @include('landing.components.middle-banner') --}}
        <!-- End Middle Banner -->

        {{-- <div class="pro-top-sellers pro-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="pro-heading-title">
                            <h2> Top Sellers
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">

                    </div>

                </div>
                <div class="row product-cards">
                    @for ($i = 1; $i < 9; $i++)
                        @include('landing.components.card-landing')
                    @endfor
                </div>
            </div>
        </div> --}}

        {{-- <div class="brands-content pro-content">
            <div class="container">
                <div class="brands-carousel-js row">
                    <div class="brand">
                        <img src="{{ asset('landing/images/brands/brands_1.jpg') }}"
                            alt="brand-logo">
                    </div>
                    <div class="brand">
                        <img src="{{ asset('landing/images/brands/brands_2.jpg') }}"
                            alt="brand-logo">
                    </div>
                    <div class="brand">
                        <img src="{{ asset('landing/images/brands/brands_3.jpg') }}"
                            alt="brand-logo">
                    </div>
                    <div class="brand">
                        <img src="{{ asset('landing/images/brands/brands_1.jpg') }}"
                            alt="brand-logo">
                    </div>
                    <div class="brand">
                        <img src="{{ asset('landing/images/brands/brands_2.jpg') }}"
                            alt="brand-logo">
                    </div>
                    <div class="brand">
                        <img src="{{ asset('landing/images/brands/brands_3.jpg') }}"
                            alt="brand-logo">
                    </div>
                    <div class="brand">
                        <img src="{{ asset('landing/images/brands/brands_3.jpg') }}"
                            alt="brand-logo">
                    </div>
                    <div class="brand">
                        <img src="{{ asset('landing/images/brands/brands_1.jpg') }}"
                            alt="brand-logo">
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Start Footer -->
        {{-- @include('landing.components.footer') --}}
        <!-- End Footer -->

    </div>
    <div class="mobile-overlay"></div>
    <a href="#" class="btn-secondary " id="back-to-top" title="Back to top">&uarr;</a>
    <!-- End Main Body -->

    <div class="notifications" id="notificationWishlist">Produk Ditambahkan ke Wishlist</div>
    <div class="notifications" id="notificationCart">Produk Ditambahkan ke Keranjang</div>
    <div class="notifications" id="notificationCompare">Product Added For Compare</div>

    <button class="switch btn btn-secondary btn-sm" data-switch-dark hidden>Dark</button>


    <!-- All custom scripts here -->
    <script src="{{ asset('landing/js/scripts.js') }} "></script>

    <!-- Slider Revolution core JavaScript files -->
    <script src="{{ asset('landing/revolution/js/jquery.themepunch.tools.min.js') }} "></script>
    <script src="{{ asset('landing/revolution/js/jquery.themepunch.revolution.min.js') }} ">
    </script>

    <!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
    <script
        src="{{ asset('landing/revolution/js/extensions/revolution.extension.actions.min.js') }} ">
    </script>
    <script
        src="{{ asset('landing/revolution/js/extensions/revolution.extension.carousel.min.js') }} ">
    </script>
    <script
        src="{{ asset('landing/revolution/js/extensions/revolution.extension.kenburn.min.js') }} ">
    </script>
    <script
        src="{{ asset('landing/revolution/js/extensions/revolution.extension.layeranimation.min.js') }} ">
    </script>
    <script
        src="{{ asset('landing/revolution/js/extensions/revolution.extension.migration.min.js') }} ">
    </script>
    <script
        src="{{ asset('landing/revolution/js/extensions/revolution.extension.navigation.min.js') }} ">
    </script>
    <script
        src="{{ asset('landing/revolution/js/extensions/revolution.extension.parallax.min.js') }} ">
    </script>
    <script
        src="{{ asset('landing/revolution/js/extensions/revolution.extension.slideanims.min.js') }} ">
    </script>
    <script
        src="{{ asset('landing/revolution/js/extensions/revolution.extension.video.min.js') }} ">
    </script>


</body>

</html>
