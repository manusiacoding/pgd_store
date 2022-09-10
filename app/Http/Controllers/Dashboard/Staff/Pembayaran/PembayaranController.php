<?php

namespace App\Http\Controllers\Dashboard\Staff\Pembayaran;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Profile;
use App\Models\UserHasLayanan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
    public function index()
    {
        $invoice = Invoice::with('user.profile','produk', 'paymentmethod')->orderBy('created_at', 'DESC');

        if (request()->ajax()) {
            return DataTables()->eloquent($invoice)
            ->addColumn('no', function($no){
                return $no->DT_RowIndex;
            })
            ->addColumn('nama', function($nama){
                return $nama->user->name;
            })
            ->addColumn('data_profile', function($data_profile){
                return '<button id="'. $data_profile->user->profile->id .'" class="btn btn-sm btn-outline-secondary profile-confirm">Lihat Data Profile</button>';
            })
            ->addColumn('bukti_pembayaran', function($bukti_pembayaran){
                return '<button id="'. $bukti_pembayaran->id .'" class="btn btn-sm btn-outline-secondary bukti_pembayaran">Lihat Data Pembayaran</button>';
            })
            ->addColumn('foto_bukti', function($foto_bukti){
                return '<img src="'. Storage::url($foto_bukti->bukti_pembayaran) .'" alt="" width="200px" height="200px">';
            })
            ->addColumn('action', function($action){
                if ($action->status == "Telah Terbayar") {
                    // dd('Masuk Bayar');
                    $btn = '<button class="btn btn-xs btn-info invoice-confirm" id="'. $action->id .'">Konfirmasi</button>';
                } elseif ($action->status == "Terkonfirmasi") {
                    $btn = '<button class="btn btn-xs btn-info" style="cursor: not-allowed;" disabled>Telah Terkonfirmasi</button>';
                } elseif ($action->status = "Menunggu Pembayaran") {
                    $btn = '<button class="btn btn-xs btn-info" style="cursor: not-allowed;" disabled>Belum Bayar</button>';
                }
                // $btn =  '
                // <button id="'. $row->id .'" class="btn btn-sm btn-primary payment-confirm">Konfirmasi</button>
                // ';

                return $btn;
            })
            ->rawColumns(['action', 'data_profile', 'bukti_pembayaran','foto_bukti'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('dashboard.staff.pembayaran.index');
    }

    public function modalProfile($id)
    {
        $profile = Profile::find($id);

        return response()->json([
            'status' => 'ok',
            'profile' => $profile
        ]);
    }

    public function modalInvoice($id)
    {
        $invoice = Invoice::with('produk', 'paymentmethod')->find($id);

        return response()->json([
            'status' => 'ok',
            'invoice' => $invoice
        ]);
    }

    public function confirm($id)
    {
        $invoice = Invoice::with('produk', 'paymentmethod')->find($id);

        $user_has_layanan = UserHasLayanan::where([
            ['user_id', '=', Auth::user()->id],
            ['produk_id', '=', $invoice->product_id]
        ])->first();

        $expired_at = Carbon::now()->addDays(30)->toDateTimeString();

        $invoice->update([
            'status' => 'Terkonfirmasi'
        ]);

        if (is_null($user_has_layanan)) {

            $userPaket = UserHasLayanan::create([
                'user_id' => $invoice->user_id,
                'produk_id' => $invoice->product_id,
                'expired_at' => $expired_at,
                'invoice_id' => $invoice->id,
                'status' => 'Aktif'
            ]);
        } else {
            $user_has_layanan->update([
                'expired_at' => $expired_at
            ]);
        }

        return response()->json([
            'status' => 'ok'
        ]);
    }
}
