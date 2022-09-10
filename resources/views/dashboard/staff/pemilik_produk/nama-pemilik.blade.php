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
                        <h2 class="content-header-title float-left mb-0">Data Pemilik Produk</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.pemilik_produk.index') }}">Data Produk</a>
                                </li>
                                <li class="breadcrumb-item active">Data Nama Pemilik Produk
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Examples -->
            <section id="card-demo-example">
                <div class="row match-height">
                    @foreach ($user_has_layanan as $item)


                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            @if (is_null($item->user->profilePhoto))
                                <img class="card-img-top" src="https://avatars.dicebear.com/4.5/api/initials/{{ $item->user->profile->nama_pesantren }}.svg"
                                style="height: 250px" alt="Card image cap" />
                            @else
                                <img class="card-img-top" src="{{ Storage::url($item->user->profilePhoto->foto) }}"
                                    style="height: 250px" alt="Card image cap" />
                            @endif
                            <div class="card-body text-center">
                                <hr>
                                <h4 class="card-title ">{{ $item->user->profile->nama_pesantren }}</h4>
                                <a href="{{ route('admin.dashboard.pemilik_produk.detail_pemilik', $item->user->id) }}" class="btn btn-outline-primary">Detail Pesantren</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>
            <!-- Examples -->


        </div>
    </div>
</div>
<!-- END: Content-->
@endsection
