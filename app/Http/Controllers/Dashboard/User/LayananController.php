<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\PaymentMethods;
use App\Models\Product;
use App\Models\User;
use App\Models\UserHasLayanan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    public function index()
    {
        $user = User::with('layanan.produk')->where('id', Auth::user()->id)->first();

        $userhaslayanan = UserHasLayanan::with('produk')->where('user_id', Auth::user()->id)->get();
        // dd($user);

        $data = [
            'user' => $user,
            'userhaslayanan' => $userhaslayanan,
        ];

        return view('dashboard.user.layanan.index-server', $data);
    }

    public function getProviders($value)
    {
        $payment_method = PaymentMethods::where('method_name', $value)->pluck('provider_name', 'id');
        return json_encode($payment_method);
    }

    public function pembayaran($id)
    {
        $produk = Product::find($id);
        $user = User::with('profile')->where('id', Auth::user()->id)->first();
        $metode_pembayaran = PaymentMethods::all()->groupBy('method_name')->toArray();
        // dd($metode_pembayaran);
        $data = [
            'produk' => $produk,
            'user'  => $user,
            'metode_pembayaran' => $metode_pembayaran
        ];

        return view('dashboard.user.layanan.payment', $data);
    }

    public function storePembayaran(Request $request, $id)
    {
        $produk = Product::find($id);
        $user_id = Auth::user()->id;

        $data = [
            'user_id' => $user_id,
            'product_id' => $request->produk_id,
            'paymentmethods_id' => $request->nama_provider,
            'tagihan' => $produk->harga,
            'status' => 'Menunggu Pembayaran',
            'expired_at' => Carbon::now()->addDays(2)->toDateTimeString()
        ];

        $invoice = Invoice::create($data);

        return redirect()->route('user.dashboard.layanan.pembayaran', $invoice->id);
    }

    public function payment($id)
    {
        // $invoice = Invoice::where('user_id', Auth::user()->id)->latest()->first();
        $invoice = Invoice::with('paymentmethod')->where('id', $id)->first();

        $data = [
            'invoice' => $invoice
        ];

        return view('dashboard.user.layanan.payment-invoice', $data);
    }

    public function savePayment(Request $request, $id)
    {
        $data = $request->all();

        $user = Auth::user()->id;
        $file = $request->file('bukti_pembayaran');
        $path = 'images/konfirmasi_pembayaran/' . $user . '/' . $data['id'];
        $filename = $file->getClientOriginalName();

        $path = Storage::disk('public')->put(
            $path,
            $file
        );

        $data = [
            'nama_rekening' => $request->nama_rekening,
            'bukti_pembayaran' => $path,
            'status' => 'Telah Terbayar'
        ];

        $invoice = Invoice::where('id', $request->id)->first();
        $invoice->update($data);

        return response()->json([
            'status' => 'ok',
            'messages' => 'Upload Berhasil!',
            'route' => route('user.dashboard.layanan.pembayaran', $invoice->id)
        ]);
    }
}
