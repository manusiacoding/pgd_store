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
                            <h2 class="content-header-title float-left mb-0">Layanan Anda</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('user.dashboard.main') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Layanan
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="content-body">
                <center><h3>Layanan Belum Aktif</h3></center>
                <div class="row mt-3">
                    @foreach ($user->layanan as $item)
                        @php
                            $user_has_layanan = App\Models\UserHasLayanan::where([
                                ['produk_id', '=', $item->produk->id],
                                ['user_id', '=', Auth::user()->id],
                                ])->first();
                            $invoice = App\Models\Invoice::where([
                                ['product_id', '=', $item->produk->id],
                                ['user_id', '=', Auth::user()->id]
                            ])->first();
                        @endphp
                        {{-- @dd($invoice) --}}
                        @if (is_null($user_has_layanan))
                            <div class="col-md-4 col-12">
                                <div class="card text-center mb-3" style="height: 450px">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $item->produk->nama }}</h4>
                                        <img class="img-fluid my-2" src="{{ $item->produk->foto }}" alt="Card image cap" style="height: 200px"/>
                                        <p class="card-text">Rp. {{ $item->produk->harga }}</p>
                                    </div>
                                    <div class="card-footer">
                                        @if (!is_null($invoice))
                                            {{-- @if (!is_null($invoice->status == "Telah Terbayar" || $invoice->status == "Terkonfirmasi")) --}}

                                            <a href="{{ route('user.dashboard.layanan.pembayaran', $invoice->id) }}" class="btn btn-outline-primary">Konfirmasi Pembayaran</a>
                                            {{-- @else --}}

                                            {{-- @endif --}}
                                        @elseif (is_null($user_has_layanan))
                                            <a href="{{ route('user.dashboard.layanan.payment', $item->produk->id) }}" class="btn btn-outline-primary">Lanjutkan Pembayaran</a>
                                        @else
                                            <a href="{{ route('user.dashboard.layanan.pembayaran', $user_has_layanan->invoice_id) }}" class="btn btn-outline-primary">Konfirmasi Pembayaran</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @else

                        @endif

                        @endforeach
                    </div>


                <center><h3>Layanan Aktif</h3></center>
                <div class="row mt-3">
                    @foreach ($userhaslayanan as $item)
                        <div class="col-md-4 col-12">
                            <div class="card text-center mb-3" style="height: 450px">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $item->produk->nama }}</h4>
                                    <img class="img-fluid my-2" src="{{ $item->produk->foto }}" alt="Card image cap" style="height: 200px"/>
                                    <p class="card-text">Rp. {{ $item->produk->harga }}</p>
                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('user.dashboard.layanan.pembayaran', $item->invoice_id) }}" class="btn btn-outline-primary">Paket Aktif</a>
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
