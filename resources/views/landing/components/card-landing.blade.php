@foreach ($produk as $item)


<div class="col-12 col-md-4 col-lg-4 col-xl-4 productcard-1 ">
    <div class="product">
      <article>
        <div class="pro-thumb">

          <img class="img-fluid" src="{{ $item->foto }}" alt="Product-Image">

        </div>

        
        
        <div class="pro-info">

          <h3><a href="{{ route('landing.detail', $item->slug) }}">{{ $item->nama }} </a></h3>
          {{-- <div class="pro-category">
            Men Accessories
          </div> --}}
          
          

          <div class="pro-price">

            {{-- <ins>$119
              <del>
                $182
              </del>
            </ins> --}}


            <a href="{{ route('landing.detail', $item->slug) }}"><button type="button" class="btn btn-secondary btn-sm" >
              Selengkapnya
            </button></a>

            
            
          </div>
          
          <div class="pro-buttons text-center">
            <button type="button" id="{{ $item->id }}" class="btn btn-link btn-sm" onclick="notificationWishlist(this);">
                <i class="far fa-heart"></i> Wishlist
            </button>
            {{-- <a href="wishlist.html" class="">
            </a> --}}
            <button type="button" id="{{ $item->id }}" class="btn btn-link btn-sm" onclick="notificationCart(this);">
              <i class="fas fa-shopping-bag"></i> Add to Cart
            </button>

          </div>
        </div>


      </article>
    </div>
</div>
@endforeach
