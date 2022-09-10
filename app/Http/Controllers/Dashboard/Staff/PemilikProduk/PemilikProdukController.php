<?php

namespace App\Http\Controllers\Dashboard\Staff\PemilikProduk;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use App\Models\UserHasLayanan;
use Illuminate\Http\Request;

class PemilikProdukController extends Controller
{
    public function index()
    {
        $produk = Product::all();

        $data = [
            'produk' => $produk
        ];

        return view('dashboard.staff.pemilik_produk.index', $data);
    }

    public function nama_pemilik($slug)
    {
        // dd($slug);
        $user_has_layanan = UserHasLayanan::with('user.profile', 'user.profilePhoto', 'produk')->whereHas('produk', function ($query) use ($slug) {
            $query->where('slug', $slug);
            // $query->where('slug', '=', $slug);
        })->get();
        // dd($user_has_layanan);
        $data = [
            'user_has_layanan' => $user_has_layanan
        ];
        return view('dashboard.staff.pemilik_produk.nama-pemilik', $data);

    }

    public function detail_pemilik($id)
    {
        $user = User::with('profile', 'profilePhoto')->find($id);
        $user_has_layanan = UserHasLayanan::with('user.profile', 'user.profilePhoto','produk')->whereHas('user', function ($query) use ($id) {
            $query->where('id', $id);
        })->get();

        $data = [
            'user' => $user,
            'user_has_layanan' => $user_has_layanan
        ];

        return view('dashboard.staff.pemilik_produk.detail_pemilik', $data);
    }
}
