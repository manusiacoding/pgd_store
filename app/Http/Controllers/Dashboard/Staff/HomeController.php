<?php

namespace App\Http\Controllers\Dashboard\Staff;

use App\Http\Controllers\Controller;
use App\Models\CountProduk;
use App\Models\UserHasLayanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $user_has_layanan = UserHasLayanan::with('user', 'produk')->get();
        $count_produk = CountProduk::all();
        
        $data = [
            'user_has_layanan' => $user_has_layanan,
            'count_produk' => $count_produk
        ];

        return view('dashboard.staff.content', $data);
    }

    public function chart_count_produk()
    {
        $data = CountProduk::all();

        return response($data);
    }
}
