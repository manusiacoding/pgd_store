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
                            @foreach ($produk->slice(0,3) as $item)


                            <div class="">
                                <div class="product">
                                    <article>
                                        <div class="pro-thumb">

                                            <img class="img-fluid" id="myImage1"
                                                src="{{ $item->foto }}"
                                                alt="Product-Image">

                                        </div>


                                        <div class="pro-info">
                                            {{-- <div class="pro-category">
                                                {{ $item->nama }}
                                            </div> --}}
                                            <h3><a href="{{ route('landing.detail', $item->slug) }}">{{ $item->nama }}</a></h3>

                                            {{-- <div class="pro-price">

                                                <button class="btn-light icon "
                                                    onclick="notificationWishlist();">
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
    </div>
</section>
