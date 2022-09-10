<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Layanan;
use App\Models\Profile;
use App\Models\ProfilePhoto;
use App\Models\User;
use App\Models\UserHasLayanan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function home()
    {
        $invoice = Invoice::with('produk', 'paymentmethod')->where('user_id', Auth::user()->id);
        $user_has_layanan = UserHasLayanan::where('user_id', Auth::user()->id);
        $layanan = Layanan::where('user_id', Auth::user()->id);
        $paket_aktif = $user_has_layanan->count();
        $paket_tidak_aktif = $layanan->count() - $paket_aktif;
        // dd($paket_aktif, $paket_tidak_aktif);

        $data = [
            'invoice' => $invoice->get(),
            'i' => 1,
            'paket_aktif' => $paket_aktif,
            'paket_tidak_aktif' => $paket_tidak_aktif
            // 'metode_pembayaran' => $metode_pembayaran
        ];

        return view('dashboard.user.content', $data);
    }

    public function profile()
    {
        $user = User::with('profile', 'profilePhoto')
                ->where('id', Auth::user()->id)->first();

        // $profile = Profile::where('user_id', Auth::user()->id)->first();
        // dd($user);
        $data = [
            'user' => $user
        ];
        return view('dashboard.user.profile.profile', $data);
    }

    public function updateProfile(Request $request, $id)
    {
        // Validate
        $this->validate($request,[
            'foto' => 'image|mimes:jpeg,jpg,png',
            'cover' => 'image|mimes:jpeg,jpg,png',
        ]);


        // Profile
        $data_profile = [
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'nama_pesantren' => $request->nama_pesantren,
            'alamat_pesantren' => $request->alamat_pesantren,
            'kota_pesantren' => $request->kota_pesantren,
        ];
        $profile = Profile::find($id);
        $profile->update($data_profile);

        $user = User::where('id', Auth::user()->id)->first();
        $user->name = $data_profile['name'];
        $user->email = $data_profile['email'];
        $user->save();

        // Profile Photo
        $profile_foto = ProfilePhoto::where('user_id', $profile->user_id)->first();

        // Cek Jika Foto Profile Ada
        if (isset($request->foto) == true ) {

            // For Photo Profile
            $path_foto = 'profile/foto_profile/' . Auth::user()->id;
            $file_foto = $request->file('foto');
            $path_foto = Storage::disk('public')->put(
                $path_foto,
                $file_foto
            );

            $data_profilePhoto = [
                'user_id' => $profile->user_id,
                'foto' => $path_foto,
            ];

            if (is_null($profile_foto)) {
                ProfilePhoto::create($data_profilePhoto);
            } else {
                Storage::disk('public')->delete([
                    $profile_foto->foto
                ]);

                $profile_foto->update($data_profilePhoto);
            }

        }
        // For Photo Cover
        elseif (isset($request->cover) == true) {

            // For Cover Profile
            $path_cover = 'profile/foto_profile/' . Auth::user()->id;
            $file_cover = $request->file('cover');
            $path_cover = Storage::disk('public')->put(
                $path_cover,
                $file_cover
            );

            $data_profilePhoto = [
                'user_id' => $profile->user_id,
                'cover' => $path_cover
            ];

            if (is_null($profile_foto)) {
                ProfilePhoto::create($data_profilePhoto);
            } else {
                Storage::disk('public')->delete([
                    $profile_foto->cover
                ]);

                $profile_foto->update($data_profilePhoto);
            }

        }


        return response()->json([
            'status' => 'ok'
        ]);
    }

    public function settings()
    {
        $user = User::where('id', Auth::user()->id)->first();

        $data = [
            'user' => $user
        ];
        return view('dashboard.user.profile.setting', $data);
    }

    public function updateUser(Request $request, $id)
    {
        $data = $request->all();
        $user = User::find($id);
        $user->update($data);
        
        return redirect()->route('user.dashboard.settings');
    }

    public function updateUserPassword(Request $request, $id)
    {
        if ($request->password != $request->konfirmasi_password) {
            return response()->json([
                'status' => 'failed',
                'messages' => 'Password Tidak Sama'
            ]);
        }

        $data = [
            'password' => Hash::make($request->password)
        ];

        $user = User::find($id);
        $user->update($data);
        return response()->json([
            'status' => 'ok',
            'messages' => 'Password Berhasil Diperbarui'
        ]);
    }

    public function invoice()
    {
        $invoice = Invoice::with('produk','paymentmethod')->where('user_id', Auth::user()->id);

        if (request()->ajax()) {
            return DataTables()->of($invoice)
            ->addColumn('no', function($no){
                return $no->DT_RowIndex;
            })
            ->addColumn('produk_name', function($produk_name){
                return $produk_name->produk->nama;
            })
            ->addColumn('total_tagihan', function($total_tagihan){
                return 'Rp. ' .$total_tagihan->tagihan;
            })
            ->addColumn('tanggal', function($tanggal){
                return Carbon::parse($tanggal->created_at)->format('d F Y');
            })
            ->addColumn('action', function($row){
                $btn =  '
                <button id="'. $row->id .'" class="btn btn-sm btn-primary download-confirm">Download Invoice</button>
                ';

                return $btn;
            })
            ->rawColumns(['action','produk_name','total_tagihan','tanggal','no'])
            ->addIndexColumn()
            ->make(true);
        }

        return view('dashboard.user.invoice.index');
        // dd($invoice);
    }
}
