@extends('landing.home.home')
@section('content')
<!-- Page Header -->
<div class="container-fuild">
    <div class="page-header" style="background-image: url('images/miscellaneous/page-header.png')">
      <div class="container">
        <h1 class="page-title">Carts
            {{-- <span>Introduce Yourself</span> --}}
        </h1>
      </div><!-- End .container -->
    </div>
    <nav aria-label="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Carts</li>
          </ol>
      </div>
    </nav>


</div>
<section class="pro-content cart-content">
    <div class="container cart-area cart-page-one">
      <div class="row">
            <div class="col-12 col-xl-9">
              <table class="table top-table">
                <tbody>
                    @foreach ($cart as $item)
                        <tr class="d-flex">
                            <td class="col-12 col-md-2">
                                <img class="img-fluid" src="{{ $item->produk->foto }}" alt="CartImage">
                            </td>
                            <td class="col-12 col-md-4">
                                <div class="item-detail">
                                    {{-- <span class="pro-category"></span> --}}

                                    <h3>{{ $item->produk->nama }}</h3>

                                    {{-- <div class="item-attributes"></div> --}}

                                </div>
                            </td>

                            {{-- <td class="col-12 col-md-1 item-price">$385</td> --}}
                            {{-- <td class="col-12 col-md-3 justify-content-center" >
                            <div class="input-group-control">


                                <input type="text" id="quantity" name="quantity" class="form-control" maxlength="2" value="10" size="2">
                                <span class="input-group-btn">
                                <button type="button" value="quantity" class="quantity-plus btn btn-outline-secondary" data-type="plus" data-field="">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <button type="button" value="quantity" class="quantity-minus btn btn-outline-secondary" data-type="minus" data-field="">
                                <i class="fas fa-minus"></i>
                            </button>
                                </span>



                            </div>
                            </td> --}}
                            <td class="col-12 col-md-2 item-total">Rp. {{ $item->produk->harga }}</td>

                            <td class="col-12 col-md-2 align-middle">
                                <div class="item-control">
                                    <button type="button" id="{{ $item->id }}" class="btn btn-outline-secondary delete-cart" data-type="minus" data-field="">
                                        <span class="fas fa-times"></span>
                                    </button>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                    {{-- <tr class="d-flex">
                        <td class="col-12 col-md-2">
                              <img class="img-fluid" src="images/product_images/product_image_2.jpg" alt="CartImage">
                        </td>
                        <td class="col-12 col-md-4">
                            <div class="item-detail">
                                <span class="pro-category">Decore, Furniture</span>
                                <h3>Modern Wood Chair
                                </h3>
                                <div class="item-attributes"></div>

                            </div>
                        </td>
                        <td class="col-12 col-md-1 item-price">$385</td>
                        <td class="col-12 col-md-3 justify-content-center" >
                          <div class="input-group-control">


                            <input type="text" id="quantity2" name="quantity" class="form-control" maxlength="2" value="10" size="2">
                            <span class="input-group-btn">
                              <button type="button" value="quantity2" class="quantity-plus2 btn btn-outline-secondary" data-type="plus" data-field="">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button type="button" value="quantity2" class="quantity-minus2 btn btn-outline-secondary" data-type="minus" data-field="">
                              <i class="fas fa-minus"></i>
                           </button>
                            </span>



                      </div>
                        </td>
                        <td class="col-12 col-md-2 item-total">$700</td>


                    </tr>
                    <tr class="d-flex">
                        <td class="col-12 col-md-2">
                              <img class="img-fluid" src="images/product_images/product_image_3.jpg" alt="CartImage">
                        </td>
                        <td class="col-12 col-md-4">
                            <div class="item-detail">
                                <span class="pro-category">Decore, Furniture</span>
                                <h3>White Plastic Chair
                                </h3>
                                <div class="item-attributes"></div>

                            </div>
                        </td>
                        <td class="col-12 col-md-1 item-price">$385</td>
                        <td class="col-12 col-md-3 justify-content-center" >
                          <div class="input-group-control">


                            <input type="text" id="quantity3" name="quantity" class="form-control" maxlength="2" value="10" size="2">
                            <span class="input-group-btn">
                              <button type="button" value="quantity3" class="quantity-plus3 btn btn-outline-secondary" data-type="plus" data-field="">
                                <i class="fas fa-plus"></i>
                            </button>
                            <button type="button" value="quantity3" class="quantity-minus3 btn btn-outline-secondary" data-type="minus" data-field="">
                              <i class="fas fa-minus"></i>
                           </button>
                            </span>



                      </div>
                        </td>
                        <td class="col-12 col-md-2 item-total">$700</td>


                    </tr> --}}
                </tbody>
              </table>

              {{-- <div class="row justify-content-between click-btn">
                  <div class="col-12 col-lg-6">
                        <div class="input-group">
                            <input type="text" class="form-control"  placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="coupon-code">
                            <div class="input-group-append">
                              <button class="btn btn-secondary " type="button" id="coupon-code">APPLY</button>
                            </div>
                        </div>
                  </div>
                  <div class="col-12 col-lg-6 align-right">

                          <button type="button" class="btn btn-secondary">UPDATE CART</button>


                  </div>
              </div> --}}
            </div>
            <div class="col-12 col-xl-3">
                <div class="summery">
                    <h3>Totals</h3>
                    <table class="table right-table">

                      <tbody>
                        <tr class="item-price">
                          <th>Total</th>
                          <td class="justify-content-end d-flex" >Rp. {{ $total }}</td>

                        </tr>
                      </tbody>
                    </table>
                    <a href="{{ route('landing.checkout.proses') }}" class="btn btn-success btn-block" >
                      Proses Checkout</a>
                      <a href="{{ route('landing') }}" class="btn btn-link btn-block">CONTINUE SHOPPING</a>
                </div>

              </div>
      </div>
   </div>
</section>

<script>
    $(document).on('click', '.delete-cart', function(event){
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
            url: "{{url('cart/delete')}}/" + id_product,
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
