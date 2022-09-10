@extends('dashboard.dashboard')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">Detail Pemilik Produk</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.pemilik_produk.index') }}">Data Produk</a>
                                </li>
                                <li class="breadcrumb-item active">Detail Pemilik Produk
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h5 class="mb-75">About</h5>
                            <p class="card-text">
                                Tart I love sugar plum I love oat cake. Sweet ⭐️ roll caramels I love jujubes. Topping cake wafer.
                            </p> --}}
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mt-2">
                                        <h5 class="mb-75">Nama Lengkap:</h5>
                                        <p class="card-text">{{ $user->profile->name }}</p>
                                    </div>
                                    <div class="mt-2">
                                        <h5 class="mb-75">Email:</h5>
                                        <p class="card-text">{{ $user->profile->email }}</p>
                                    </div>
                                    <div class="mt-2">
                                        <h5 class="mb-75">No. HP:</h5>
                                        <p class="card-text">{{ $user->profile->no_hp }}</p>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="mt-2">
                                        <h5 class="mb-75">Nama Pesantren:</h5>
                                        <p class="card-text">{{ $user->profile->nama_pesantren }}</p>
                                    </div>
                                    <div class="mt-2">
                                        <h5 class="mb-75">Alamat Pesantren:</h5>
                                        <p class="card-text">{{ $user->profile->alamat_pesantren }}</p>
                                    </div>
                                    <div class="mt-2">
                                        <h5 class="mb-75">Kota Pesantren:</h5>
                                        <p class="card-text">{{ $user->profile->kota_pesantren }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12">
                    <div class="card">
                        <a href="page-kb-category.html">
                            @if (is_null($user->profilePhoto->foto))
                                <img src="https://avatars.dicebear.com/4.5/api/initials/{{ $user->profile->nama_pesantren }}.svg" class="card-img-top" alt="knowledge-base-image">
                            @else
                                <img src="{{ Storage::url($user->profilePhoto->foto) }}" class="card-img-top" alt="knowledge-base-image">
                            @endif
                        </a>
                    </div>
                </div>
            </div>

            <hr style="border-top: 3px solid green">
            <h2 class="text-center">List Layanan / Produk</h2>
            <div class="row mt-3">
                @foreach ($user_has_layanan as $item)
                <div class="col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="{{ $item->produk->foto }}"
                            alt="Card image cap" />
                        <div class="card-body text-center">
                            <h4 class="card-title ">{{ $item->produk->nama }}</h4>
                            {{-- <a href="{{ route('admin.dashboard.pemilik_produk.nama_pemilik', $item->slug) }}" class="btn btn-outline-primary">Lihat Data</a> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
