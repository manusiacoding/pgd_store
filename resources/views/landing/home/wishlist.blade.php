@extends('landing.home.home')
@section('content')

    <!-- Page Header -->
    <div class="container-fuild">
        <div class="page-header" style="background-image: url('images/miscellaneous/page-header.png')">
          <div class="container">
            <h1 class="page-title">Wishlist</h1>
          </div>
                  </div>
        <nav aria-label="breadcrumb">
          <div class="container">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
              </ol>
          </div>
        </nav>


    </div>

      <!-- wishlist Content -->
    <section class="pro-content wishlist-content my-4">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-12 ">
                <table class="table top-table">

                    <tbody>

                    @foreach ($wishlist as $item)


                      <tr class="d-flex">
                          <td class="col-12 col-lg-2">
                                <img class="img-fluid" src="{{ $item->produk->foto }}" alt="WishList">
                          </td>
                          <td class="col-12 col-lg-3">
                              <div class="item-detail">
                                  <h3>{{ $item->produk->nama }}
                                  </h3>
                                  <div class="item-attributes"></div>

                              </div>
                          </td>
                          <td class="col-12 col-lg-2 item-price">{{ $item->produk->harga }}</td>
                          {{-- <td class="col-12 col-lg-2 text-success">In stock</td> --}}

                          <td class="col-12 col-md-2 align-middle">
                            <div class="item-control">
                                <button type="button" id="{{ $item->id }}" class="btn btn-outline-secondary delete-wishlist" data-type="minus" data-field="">
                                    <span class="fas fa-times"></span>
                                </button>
                            </div>
                          </td>

                          <td class="col-12 col-lg-3 align-middle">
                              <button type="button" id="{{ $item->produk->id }}" onclick="notificationCart(this);" class="btn btn-secondary btn-lg ">Tambahkan ke Cart</button>
                          </td>  
                      </tr>
                    @endforeach
                    {{-- <tr class="d-flex">
                        <td class="col-12 col-lg-2">
                              <img class="img-fluid" src="images/product_images/product_image_1.jpg" alt="WishList">
                        </td>
                        <td class="col-12 col-lg-3">
                            <div class="item-detail">
                                <span class="pro-category">Decore, Furniture</span>
                                <h3>Modren Single Sofa
                                </h3>
                                <div class="item-attributes"></div>

                            </div>
                        </td>
                        <td class="col-12 col-lg-2 item-price">$385</td>
                        <td class="col-12 col-lg-2 text-success">In stock</td>

                        <td class="col-12 col-lg-3 align-middle">
                            <button type="button" class="btn btn-secondary btn-lg " onclick="notificationCart();">Add to Cart</button>
                        </td>

                    </tr> --}}
                    </tbody>
                  </table>

            </div>
          </div>
        </div>
    </section>

    <script>
        $(document).on('click', '.delete-wishlist', function(event){
            var id_product = $(this).attr("id");
            console.log(id_product);
            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url: "{{url('wishlist/delete')}}/" + id_product,
                success:function(data)
                {
                    console.log(data);
                    if(data.status == "ok") {
                        location.reload();
                    }
                },
                error: function(data){
    
                }
            });
    
    
        });
    </script>
@endsection
