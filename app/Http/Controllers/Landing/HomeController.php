<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Layanan;
use App\Models\PaymentMethods;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $produk = Product::all();

        $data = [
            'produk' => $produk
        ];

        return view('landing.home.content', $data);
    }

    public function detail($slug)
    {
        $produk = Product::with('imageProduct')->where('slug', $slug)->first();
        $all_produk = Product::all();
        $metode_pembayaran = PaymentMethods::all();

        $data = [
            'produk' => $produk,
            'all_produk' => $all_produk,
            'metode_pembayaran' => $metode_pembayaran
        ];

        return view('landing.home.detail', $data);

    }

    public function pesan($id)
    {
        // dd($id);
        if (Auth::check()) {
            // dd('auth');
            $layanan = Layanan::firstOrCreate([
                'user_id' => Auth::user()->id,
                'product_id' => $id
            ],[
                'user_id' => Auth::user()->id,
                'product' => $id
            ]);

            return redirect()->route('user.dashboard.profile');
        } else {
            return redirect()->route('login');
        }
    }

    public function cart()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        } else {
            $cart = Cart::with('user', 'produk.imageProduct')->where('user_id', Auth::user()->id)->get();

            $total = 0;
            foreach ($cart as $key ) {
                // dd(intval(str_replace(",","",$key->produk->harga)));
                $total += intval(str_replace(",","",$key->produk->harga));
            }

            $data = [
                'cart' => $cart,
                'total' => $total
            ];
            // dd($total);
            return view('landing.home.cart', $data);
        }

    }

    public function prosesCart($id)
    {
        if (Auth::guest()) {
            return response()->json([
                'status' => 'not login',
                'route' => route('login')
            ]);
        }

        $wishlist = Wishlist::where('product_id', $id)->first();

        if (!is_null($wishlist)) {
            $wishlist->delete();
        }
        // dd($wishlist);

        $data = [
            'user_id' => Auth::user()->id,
            'product_id' => $id
        ];

        $cart = Cart::firstOrCreate([
            'user_id' => Auth::user()->id,
            'product_id' => $id
            ],[
                $data
            ]);

        return response()->json([
            'status' => 'ok',
            'route' => route('landing.cart')
        ]);

    }

    public function prosesCheckout()
    {
        $cart = Cart::with('user', 'produk')->where('user_id', Auth::user()->id)->get();
        // dd($cart);
        foreach ($cart as $item) {
            $data = [
                'user_id' => $item->user_id,
                'product_id' => $item->product_id
            ];

            $layanan = Layanan::firstOrCreate([
                'product_id' => $item->product_id,
                'user_id' => $item->user_id
            ], $data
            );

            $item->delete();
        }

        return redirect()->route('user.dashboard.layanan.index');

    }

    public function deleteCart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return response()->json([
            'status' => 'ok',
        ]);
    }

    public function wishlist()
    {
        if (Auth::guest()) {
            return redirect()->route('login');
        } else {
            $wishlist = Wishlist::with('produk')->where('user_id', Auth::user()->id)->get();

            $data = [
                'wishlist' => $wishlist
            ];

            return view('landing.home.wishlist', $data);

        }
    }

    public function addWishlist($id)
    {
        if (Auth::guest()) {
            return response()->json([
                'status' => 'not login',
                'route' => route('login')
            ]);
        }

        $data = [
            'user_id' => Auth::user()->id,
            'product_id' => $id
        ];

        $wishlist = Wishlist::firstOrCreate([
            'user_id' => Auth::user()->id,
            'product_id' => $id
        ],[
            $data
        ]);

        return response()->json([
            'status' => 'ok',
            'route' => route('landing.wishlist')
        ]);
    }

    public function deleteWishlist($id)
    {
        $cart = Wishlist::find($id);
        $cart->delete();
        return response()->json([
            'status' => 'ok',
        ]);
    }

}
