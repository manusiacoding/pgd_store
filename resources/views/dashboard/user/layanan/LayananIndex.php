public function index()
    {
        $user = User::with('layanan.produk')->where('id', Auth::user()->id)->first();

        $userhaslayanan = UserHasLayanan::with('produk')->where('user_id', Auth::user()->id)->get();
        // dd($user_has_layanan);

        $data = [
            'user' => $user,
            'userhaslayanan' => $userhaslayanan,
        ];

        return view('dashboard.user.layanan.index', $data);
    }
