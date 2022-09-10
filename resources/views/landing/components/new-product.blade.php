<!-- Tabs section -->
<section class="tabs-content pro-content">
    <div class="container mt-4">
        <div class="row ">
            <div class="col-12 col-md-6">
                <div class="pro-heading-title">
                    <h2>Produk Unggulan</h2>
                    <p>Produk unggulan Pesantren Go Digital</p>
                </div>
            </div>
            {{-- <div class="col-12 col-md-6">
                <div class="nav" role="tablist" id="tabCarousel">
                    <a class="nav-link btn btn-secondary active show" data-toggle="tab" href="#featured"
                        role="tab">View All</a>

                    <a class="nav-link btn btn-secondary" data-toggle="tab" href="#special" role="tab"
                        aria-controls="special" aria-selected="true">Table Lab</a>


                    <a class="nav-link btn btn-secondary" data-toggle="tab" href="#liked" role="tab"
                        aria-controls="liked" aria-selected="true">Chair</a>

                </div>
            </div> --}}

        </div>

        <div class="row">
            <div class="col-12 ">

                <!-- Tab panes -->
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane fade active show" id="featured">
                        <div class="tab-carousel-js row">
                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid" id="myImage1"
                                                src="{{ asset('landing/images/product_images/product_image_1.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Unggulan
                                                </div>
                                                {{-- <div class="badge badge-danger">
                                                    Sale
                                                </div> --}}
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Modern Single Sofa</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_2.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Unggulan
                                                </div>
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">
                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>

                                            <h3><a href="product-page1.html">Modern Wood Chair</a></h3>

                                            <div class="pro-price">
                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>
                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        {{-- <div class="pro-options">
                                            <div class="size-option">
                                                <ul class="product2">
                                                    <li class="active"><a class="size-select"
                                                            href="javascript:void(0);">
                                                            XS
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">
                                                            S
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">M</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </article>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_3.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Unggulan
                                                </div>
                                                {{-- <div class="badge badge-success">New</div> --}}
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">White Plastic Chair</a></h3>
                                            <div class="pro-price">
                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>
                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        {{-- <div class="pro-options">
                                            <div class="color-option">
                                                <ul class="product3">
                                                    <li class="active"><a class="green" href="javascript:void(0);"></a></li>
                                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                                    <li><a class="yellow" href="javascript:void(0);"></a></li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </article>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">
                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_4.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Unggulan
                                                </div>
                                            </div>
                                            <div class="pro-hover-icons">
                                                <div class="icons">
                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Black Plastic Chair</a></h3>
                                            <div class="pro-price">
                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>
                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        {{-- <div class="pro-options">
                                            <div class="color-option">
                                                <ul class="product1">
                                                    <li class="active"><a class="green"
                                                            href="javascript:void(0);"></a></li>
                                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                                    <li><a class="yellow" href="javascript:void(0);"></a></li>

                                                </ul>
                                            </div>
                                            <div class="size-option">
                                                <ul class="product4">
                                                    <li class="active"><a class="size-select"
                                                            href="javascript:void(0);">
                                                            XS
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">
                                                            S
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">M</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </article>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">
                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_5.jpg') }}"
                                                alt="Product-Image">
                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Featured
                                                </div>
                                            </div>
                                            <div class="pro-hover-icons">
                                                <div class="icons">
                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Yellow Armless Chair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </article>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_6.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">

                                                <div class="badge badge-danger">
                                                    Sale
                                                </div>
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">White Folding Chair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pro-options">
                                            <div class="size-option">

                                                <ul class="product6">
                                                    <li class="active"><a class="size-select"
                                                            href="javascript:void(0);">
                                                            XS
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">
                                                            S
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">M</a>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>
                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_7.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-dark">
                                                    Out Of Stock
                                                </div>

                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Leather 2-Seat Sofa</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="pro-options">
                                            <div class="color-option">


                                                <ul class="product7">
                                                    <li class="active"><a class="green"
                                                            href="javascript:void(0);"></a></li>
                                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                                    <li><a class="yellow" href="javascript:void(0);"></a></li>

                                                </ul>
                                            </div>

                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_8.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Featured
                                                </div>
                                                <div class="badge badge-success">
                                                    New
                                                </div>
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">White Armchair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pro-options">
                                            <div class="color-option">


                                                <ul class="product1">
                                                    <li class="active"><a class="green"
                                                            href="javascript:void(0);"></a></li>
                                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                                    <li><a class="yellow" href="javascript:void(0);"></a></li>

                                                </ul>
                                            </div>
                                            <div class="size-option">

                                                <ul class="product4">
                                                    <li class="active"><a class="size-select"
                                                            href="javascript:void(0);">
                                                            XS
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">
                                                            S
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">M</a>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>


                        </div>
                        <!-- 1st tab -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="special">
                        <div class="tab-carousel-js row">
                            <div class=" ">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_5.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Featured
                                                </div>

                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Yellow Armless Chair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </article>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_6.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">

                                                <div class="badge badge-danger">
                                                    Sale
                                                </div>
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">White Folding Chair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pro-options">
                                            <div class="size-option">

                                                <ul class="product6">
                                                    <li class="active"><a class="size-select"
                                                            href="javascript:void(0);">
                                                            XS
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">
                                                            S
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">M</a>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>
                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_7.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-dark">
                                                    Out Of Stock
                                                </div>

                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Leather 2-Seat Sofa</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="pro-options">
                                            <div class="color-option">


                                                <ul class="product7">
                                                    <li class="active"><a class="green"
                                                            href="javascript:void(0);"></a></li>
                                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                                    <li><a class="yellow" href="javascript:void(0);"></a></li>

                                                </ul>
                                            </div>

                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_8.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Featured
                                                </div>
                                                <div class="badge badge-success">
                                                    New
                                                </div>
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">White Armchair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pro-options">
                                            <div class="color-option">


                                                <ul class="product1">
                                                    <li class="active"><a class="green"
                                                            href="javascript:void(0);"></a></li>
                                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                                    <li><a class="yellow" href="javascript:void(0);"></a></li>

                                                </ul>
                                            </div>
                                            <div class="size-option">

                                                <ul class="product4">
                                                    <li class="active"><a class="size-select"
                                                            href="javascript:void(0);">
                                                            XS
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">
                                                            S
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">M</a>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>
                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid" id="myImage2"
                                                src="{{ asset('landing/images/product_images/product_image_1.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Featured
                                                </div>
                                                <div class="badge badge-danger">
                                                    Sale
                                                </div>
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Modern Single Sofa</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>


                                        </div>


                                    </article>
                                </div>
                            </div>
                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_2.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Featured
                                                </div>

                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Modern Wood Chair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pro-options">

                                            <div class="size-option">

                                                <ul class="product2">
                                                    <li class="active"><a class="size-select"
                                                            href="javascript:void(0);">
                                                            XS
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">
                                                            S
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">M</a>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_3.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Featured
                                                </div>
                                                <div class="badge badge-success">New</div>
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">White Plastic Chair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pro-options">
                                            <div class="color-option">


                                                <ul class="product3">
                                                    <li class="active"><a class="green"
                                                            href="javascript:void(0);"></a></li>
                                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                                    <li><a class="yellow" href="javascript:void(0);"></a></li>

                                                </ul>
                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_4.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-dark">
                                                    Out Of Stock
                                                </div>

                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Black Plastic Chair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pro-options">
                                            <div class="color-option">


                                                <ul class="product1">
                                                    <li class="active"><a class="green"
                                                            href="javascript:void(0);"></a></li>
                                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                                    <li><a class="yellow" href="javascript:void(0);"></a></li>

                                                </ul>
                                            </div>
                                            <div class="size-option">

                                                <ul class="product4">
                                                    <li class="active"><a class="size-select"
                                                            href="javascript:void(0);">
                                                            XS
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">
                                                            S
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">M</a>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>


                        </div>
                        <!-- 2nd tab -->
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="liked">
                        <div class="tab-carousel-js row">
                            <div class=" ">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_3.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Featured
                                                </div>
                                                <div class="badge badge-success">New</div>
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">White Plastic Chair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pro-options">
                                            <div class="color-option">


                                                <ul class="product3">
                                                    <li class="active"><a class="green"
                                                            href="javascript:void(0);"></a></li>
                                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                                    <li><a class="yellow" href="javascript:void(0);"></a></li>

                                                </ul>
                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_4.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-dark">
                                                    Out Of Stock
                                                </div>

                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Black Plastic Chair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pro-options">
                                            <div class="color-option">


                                                <ul class="product1">
                                                    <li class="active"><a class="green"
                                                            href="javascript:void(0);"></a></li>
                                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                                    <li><a class="yellow" href="javascript:void(0);"></a></li>

                                                </ul>
                                            </div>
                                            <div class="size-option">

                                                <ul class="product4">
                                                    <li class="active"><a class="size-select"
                                                            href="javascript:void(0);">
                                                            XS
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">
                                                            S
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">M</a>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_5.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Featured
                                                </div>

                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Yellow Armless Chair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </article>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_6.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">

                                                <div class="badge badge-danger">
                                                    Sale
                                                </div>
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">White Folding Chair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pro-options">
                                            <div class="size-option">

                                                <ul class="product6">
                                                    <li class="active"><a class="size-select"
                                                            href="javascript:void(0);">
                                                            XS
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">
                                                            S
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">M</a>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>
                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid" id="myImage3"
                                                src="{{ asset('landing/images/product_images/product_image_1.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Featured
                                                </div>
                                                <div class="badge badge-danger">
                                                    Sale
                                                </div>
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Modern Single Sofa</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>


                                        </div>


                                    </article>
                                </div>
                            </div>
                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_2.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Featured
                                                </div>

                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Modern Wood Chair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pro-options">

                                            <div class="size-option">

                                                <ul class="product2">
                                                    <li class="active"><a class="size-select"
                                                            href="javascript:void(0);">
                                                            XS
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">
                                                            S
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">M</a>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>

                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_7.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-dark">
                                                    Out Of Stock
                                                </div>

                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">Leather 2-Seat Sofa</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="pro-options">
                                            <div class="color-option">


                                                <ul class="product7">
                                                    <li class="active"><a class="green"
                                                            href="javascript:void(0);"></a></li>
                                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                                    <li><a class="yellow" href="javascript:void(0);"></a></li>

                                                </ul>
                                            </div>

                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid"
                                                src="{{ asset('landing/images/product_images/product_image_8.jpg') }}"
                                                alt="Product-Image">

                                            <div class="badges">
                                                <div class="badge badge-info">
                                                    Featured
                                                </div>
                                                <div class="badge badge-success">
                                                    New
                                                </div>
                                            </div>

                                            <div class="pro-hover-icons">
                                                <div class="icons">

                                                    <button class="btn-light icon "
                                                        onclick="notificationCart();">
                                                        <i class="fas fa-shopping-bag"></i>
                                                    </button>
                                                    <button class="btn-light icon" data-toggle="modal"
                                                        data-target="#quickViewModal">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn-light icon"
                                                        onclick="notificationCompare();">
                                                        <i class="fas fa-align-right"
                                                            data-fa-transform="rotate-90"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pro-info">
                                            <div class="pro-category">
                                                Decore, Furniture
                                            </div>
                                            <h3><a href="product-page1.html">White Armchair</a></h3>

                                            <div class="pro-price">

                                                <ins>$119
                                                    <del>
                                                        $182
                                                    </del>
                                                </ins>

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
                                                    <i class="fas fa-heart"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="pro-options">
                                            <div class="color-option">


                                                <ul class="product1">
                                                    <li class="active"><a class="green"
                                                            href="javascript:void(0);"></a></li>
                                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                                    <li><a class="yellow" href="javascript:void(0);"></a></li>

                                                </ul>
                                            </div>
                                            <div class="size-option">

                                                <ul class="product4">
                                                    <li class="active"><a class="size-select"
                                                            href="javascript:void(0);">
                                                            XS
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">
                                                            S
                                                        </a></li>
                                                    <li><a class="size-select" href="javascript:void(0);">M</a>
                                                    </li>

                                                </ul>

                                            </div>

                                        </div>

                                    </article>
                                </div>
                            </div>

                        </div>
                        <!-- 3rd tab -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
