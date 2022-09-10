<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\PendidikanPesantren;
use App\Models\Profile;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\MasterPendidikan;
use App\Models\Product;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    public function showRegistrationForm()
    {
        $pendidikan = MasterPendidikan::all();

        $layanan = Product::all();
        // $layanan = [
        //     'Website Builder',
        //     'Konektivitas Internet',
        //     'Edukasi',
        //     'Commerce',
        //     'Kartu Santri'
        // ];

        $data = [
            'pendidikan' => $pendidikan,
            'layanan' => $layanan
        ];

        return view('auth.register', $data);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function registerCustom(Request $request)
    {

        // Data User
        $dataUser = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        // Create User
        $user = User::create($dataUser);
        $user->assignRole('user');

        // Data Profile
        $dataProfile = [
            'user_id' => $user->id,
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'nama_pesantren' => $request->nama_pesantren,
            'alamat_pesantren' => $request->alamat_pesantren,
            'kota_pesantren' => $request->kota_pesantren,
        ];

        // Create Profile
        $profile = Profile::create($dataProfile);

        // Foreach for Pendidikan
        foreach ($request->pendidikan as $key => $value) {

            // Data Pendidikan
            $dataPendidikan = [
                'user_id' => $user->id,
                'pendidikan_id' => $value
            ];

            // Create Pendidikan
            $pendidikan = PendidikanPesantren::create($dataPendidikan);
        }

        foreach ($request->layanan as $key => $value) {
            $dataLayanan = [
                'user_id' => $user->id,
                'product_id' => $value
            ];

            $layanan = Layanan::create($dataLayanan);
        }

        return redirect()->route('login');

    }

    public function validateRegisterCustom()
    {
        # code...
    }
}
