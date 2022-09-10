@extends('landing.home.home')
@section('content')
<div class="container-fuild">
    <div class="page-header-no-conent" style="background-image: url('images/miscellaneous/page-header.png')"></div>
    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('landing') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"> {{ $produk->nama }}</li>
            </ol>
        </div>
    </nav>
</div>

<div class="pro-content page-content product-page product-page-one">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">

                <div class="slider-wrapper">
                    <div class="slider-for">
                        <a class="slider-for__item ex1 fancybox-button" href="images/gallery/preview/Product_image_02.jpg" data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet">
                            <img src="{{ $produk->foto }}" alt="Zoom Image" />
                        </a>
                        @foreach ($produk->imageProduct as $item)

                            <a class="slider-for__item ex1 fancybox-button" href="images/gallery/preview/Product_image_01.jpg" data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet">
                                <img src="{{ $item->image }}" alt="Zoom Image" />
                            </a>
                        @endforeach


                      {{-- <a class="slider-for__item ex1 fancybox-button" href="images/gallery/preview/Product_image_03.jpg" data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet">
                        <img src="images/gallery/preview/Product_image_03.jpg" alt="Zoom Image" />
                      </a>
                      <a class="slider-for__item ex1 fancybox-button" href="images/gallery/preview/Product_image_04.jpg" data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet">
                        <img src="images/gallery/preview/Product_image_04.jpg" alt="Zoom Image" />
                      </a>
                      <a class="slider-for__item ex1 fancybox-button" href="images/gallery/preview/Product_image_05.jpg" data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet">
                        <img src="images/gallery/preview/Product_image_05.jpg" alt="Zoom Image" />
                      </a> --}}
                    </div>

                    <div class="slider-nav">
                        <div class="slider-nav__item">
                            <img src="{{ $produk->foto }}" alt="Zoom Image" />
                        </div>

                        @foreach ($produk->imageProduct as $item)
                        <div class="slider-nav__item">
                            <img src="{{ $item->image }}" alt="Zoom Image"/>
                        </div>
                        @endforeach


                      {{-- <div class="slider-nav__item">
                        <img src="images/gallery/thumbs/Product_image_03.jpg" alt="Zoom Image" />
                      </div>
                      <div class="slider-nav__item">
                          <img src="images/gallery/thumbs/Product_image_04.jpg" alt="Zoom Image" />
                      </div>
                      <div class="slider-nav__item">
                          <img src="images/gallery/thumbs/Product_image_05.jpg" alt="Zoom Image" />
                      </div> --}}
                    </div>
                </div>

                {{-- Old --}}
                {{-- <div class="slider-wrapper">
                    <div class="slider-for">
                        <a class="slider-for__item ex1 fancybox-button"
                            href="{{ $produk->foto }}" data-fancybox-group="fancybox-button"
                            title="{{ $produk->nama }}">
                            <img src="{{ $produk->foto }}" alt="Zoom Image" />
                        </a>

                    </div>
                </div> --}}

            </div>

            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <h2>{{ $produk->nama }}</h2>

                        <div class="pro-price">
                            <ins>Rp. {{ $produk->harga }}</ins>
                        </div>
                        {{-- <div class="pro-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <a href="#review" class="btn-link">2 reviews</a>
                        </div>
                        <div class="pro-info">
                            <div class="pro-single-info"><b>Product ID :</b><span>1004</span></div>
                            <div class="pro-single-info"><b>Categroy :</b><span><a href="#">Rings</a></span></div>
                            <div class="pro-single-info">
                                <b>Tags :</b>
                                <ul>
                                    <li><a href="#">bracelets</a></li>
                                    <li><a href="#">diamond</a></li>
                                    <li><a href="#">ring</a></li>

                                </ul>
                            </div>
                            <div class="pro-single-info"><b>Available :</b><span class="text-secondary">InStock</span>
                            </div>
                            <div class="pro-single-info"><b>Min Order Limit :</b><span><a href="#">5</a></span></div>
                        </div>
                        <div class="pro-options">
                            <div class="color-option">
                                <b>Color : </b>

                                <ul class="product-page">
                                    <li class="active"><a class="green" href="javascript:void(0);"></a></li>
                                    <li><a class="red" href="javascript:void(0);"></a></li>
                                    <li><a class="yellow" href="javascript:void(0);"></a></li>

                                </ul>
                            </div>
                            <div class="size-option">
                                <b>Size : </b>
                                <ul class="product-page1">
                                    <li class="active"><a class="size-select" href="javascript:void(0);">
                                            XS
                                        </a></li>
                                    <li><a class="size-select" href="javascript:void(0);">
                                            S
                                        </a></li>
                                    <li><a class="size-select" href="javascript:void(0);">M</a></li>

                                </ul>

                            </div>
                        </div> --}}

                        {{-- <div class="pro-quantiy">

                            <div class="input-group-control">


                                <input type="text" id="quantity" name="quantity" class="form-control" maxlength="2"
                                    value="10" size="2">
                                <span class="input-group-btn">
                                    <button type="button" value="quantity"
                                        class="quantity-plus btn btn-outline-secondary" data-type="plus" data-field="">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <button type="button" value="quantity"
                                        class="quantity-minus btn btn-outline-secondary" data-type="minus"
                                        data-field="">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </span>



                            </div>

                            <button type="button" class="btn btn-secondary btn-lg" onclick="notificationCart();">Add to
                                Cart</button>

                        </div> --}}

                        <h5>Metode Pembayaran</h5>
                        <div class="pro-buttons">
                            @foreach ($metode_pembayaran as $item)
                                <button class="btn btn-link" style="width: 250px; height: 60px">
                                    <img src="{{ asset('images/bank/'. $item->provider_name .'.png') }}" alt="" width="100%" height="50px" style="margin-top: -11px">
                                </button>
                            @endforeach
                            {{-- <button class="btn btn-link"><i class="fas fa-align-right"></i>Add to Compare</button> --}}
                        </div>



                        <div class="pro-buttons">
                            <button class="btn btn-link" id="{{ $produk->id }}" onclick="notificationWishlist(this);"><i class="fas fa-heart"></i>Tambah Wishlist</button>
                            <button class="btn btn-link" id="{{ $produk->id }}" onclick="notificationCart(this);"><i class="fas fa-align-right"></i>Tambah Keranjang</button>
                        </div>

                        <div class="pro-buttons">
                            <a href="{{ route('landing.pesan', $produk->id) }}"><button type="button" class="btn btn-success btn-lg">Pesan Sekarang</button></a>
                        </div>

                        {{-- <div class="form-check">

                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck0">
                            <label class="form-check-label" for="defaultCheck0">
                                I agree with the terms and conditions
                            </label>
                            <small id="checkboxHelp" class="form-text text-muted"></small>
                        </div> --}}
                        {{-- <div class="pro-social-share">
                            <!-- AddToAny BEGIN -->
                            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                <a class="a2a_button_facebook"></a>
                                <a class="a2a_button_twitter"></a>
                                <a class="a2a_button_email"></a>
                            </div>
                            <script async src="https://static.addtoany.com/menu/page.js"></script>
                            <!-- AddToAny END -->
                        </div> --}}
                    </div>
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 discrption-product">
                <div class="nav nav-pills" role="tablist">
                    <a class="nav-link nav-item  active" href="#description" id="description-tab" data-toggle="pill"
                        role="tab">Deskripsi</a>
                    {{-- <a class="nav-link nav-item " href="#additionalInfo" id="additional-info-tab" data-toggle="pill"
                        role="tab">Additional information</a> --}}
                    <a class="nav-link nav-item" href="#review" id="review-tab" data-toggle="pill"
                        role="tab">Testimonial</a>
                </div>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active show" id="description"
                        aria-labelledby="description-tab" style="padding-left: 35px">
                        {!! $produk->deskripsi !!}
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                        <ul>
                            <li>Pellentesque consectetur lorem gravida lacinia mollis.</li>
                            <li>Phasellus vel nisl consequat, sagittis mi nec, dignissim turpis.</li>
                            <li>Morbi ornare lorem non lacus ultricies fermentum.</li>
                            <li>Mauris aliquam turpis ut orci egestas luctus.</li>
                        </ul> --}}

                    </div>
                    {{-- <div role="tabpanel" class="tab-pane fade" id="additionalInfo"
                        aria-labelledby="additional-info-tab">
                        <table class="table table-striped table-borderless">

                            <tbody>
                                <tr>
                                    <th scope="row">Brand Name:</th>
                                    <td>lindoMetals</td>

                                </tr>
                                <tr>
                                    <th scope="row">Metals Type:</th>
                                    <td>Silver</td>

                                </tr>
                                <tr>
                                    <th scope="row">Main Stone:</th>
                                    <td>Pearl</td>

                                </tr>
                                <tr>
                                    <th scope="row">Style:</th>
                                    <td>Trendy</td>

                                </tr>
                            </tbody>
                        </table>
                    </div> --}}
                    <div role="tabpanel" class="tab-pane fade " id="review" aria-labelledby="review-tab">
                        <div class="reviews">
                            <div class="review-bubbles">
                                <h2>
                                    Testimonial
                                </h2>
                                <hr style="border-top: 3px solid red">
                                <div class="review-bubble-single">
                                    <div class="review-bubble-bg">
                                        <div class="pro-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>

                                        </div>
                                        <h4>Good</h4>
                                        <span>Sep 20, 2019</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation</p>
                                    </div>

                                </div>
                                {{-- <div class="review-bubble-single">
                                    <div class="review-bubble-bg">
                                        <div class="pro-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>

                                        </div>
                                        <h4>NICE WORK!!!</h4>
                                        <span>Sep 20, 2019</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation</p>
                                    </div>

                                </div> --}}

                            </div>
                            {{-- <div class="write-review">
                                <h2>Write a Review</h2>
                                <div class="write-review-box">
                                    <div class="from-group row mb-3">
                                        <div class="col-12">
                                            <label for="inlineFormInputGroup01">Name</label></div>
                                        <div class="input-group col-12">

                                            <input type="text" class="form-control" id="inlineFormInputGroup01"
                                                placeholder="Enter Your Name">
                                        </div>
                                    </div>
                                    <div class="from-group row mb-3">
                                        <div class="col-12"> <label for="inlineFormInputGroup1">Email Address</label>
                                        </div>
                                        <div class="input-group col-12">

                                            <input type="text" class="form-control" id="inlineFormInputGroup1"
                                                placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                    <div class="from-group row mb-3">
                                        <div class="col-12"> <label for="inlineFormInputGroup2">Rating</label></div>
                                        <div class="pro-rating  col-12">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>

                                        </div>
                                    </div>

                                    <div class="from-group row mb-3">
                                        <div class="col-12"> <label for="inlineFormInputGroup2">Review Title</label>
                                        </div>
                                        <div class="input-group col-12">

                                            <input type="text" class="form-control" id="inlineFormInputGroup2"
                                                placeholder="Title of Review">
                                        </div>
                                    </div>
                                    <div class="from-group row mb-3">
                                        <div class="col-12"> <label for="inlineFormInputGroup3">Review Body</label>
                                        </div>
                                        <div class="input-group col-12">

                                            <textarea class="form-control" id="inlineFormInputGroup3"
                                                placeholder="Write Your Review"></textarea>
                                        </div>
                                    </div>
                                    <div class="from-group">
                                        <button type="button" class="btn btn-secondary swipe-to-top">Submit</button>

                                    </div>
                                </div>
                            </div> --}}
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="pro-content">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-6">
                    <div class="pro-heading-title">
                        <h2> Daftar Katalog
                        </h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur
                        </p> --}}
                    </div>
                </div>
            </div>
            <div class="tab-carousel-js row">
                @foreach ($all_produk as $item)
                    <div class="">
                        <div class="product">
                            <article>
                                <div class="pro-thumb">

                                    <img class="img-fluid" id="myImage" src="{{ $item->foto }}"
                                        alt="Product-Image">
                                </div>


                                <div class="pro-info">
                                    <div class="pro-category">
                                        {{ $item->nama }}
                                    </div>
                                    {{-- <h3><a href="product-page1.html">Modern Single Sofa</a></h3>

                                    <div class="pro-price">

                                        <ins>$119
                                            <del>
                                                $182
                                            </del>
                                        </ins>

                                        <button class="btn-light icon " onclick="notificationWishlist();">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                    </div> --}}


                                </div>


                            </article>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
