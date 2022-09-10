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
                                <li class="breadcrumb-item active">Data Produk
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
                    @foreach ($produk as $item)


                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ $item->foto }}"
                                alt="Card image cap" />
                            <div class="card-body text-center">
                                <h4 class="card-title ">{{ $item->nama }}</h4>
                                <a href="{{ route('admin.dashboard.pemilik_produk.nama_pemilik', $item->slug) }}" class="btn btn-outline-primary">Lihat Data</a>
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
