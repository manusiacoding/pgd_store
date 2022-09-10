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
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Layanan</h4>
                    </div>
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{ route('user.dashboard.layanan.payment.store', $produk->id) }}" method="POST">
                            @csrf
                            <hr>
                            <h2 class="card-title">Data Diri</h2>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="name">Nama Lengkap</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="name" class="form-control" name="name" value="{{ $user->name }}" placeholder="Nama Lengkap" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="email-id">Email</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="email" id="email-id" class="form-control" name="email" value="{{ $user->email }}" placeholder="Email" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="contact-info">Nomor HP</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="number" id="contact-info" class="form-control" name="no_hp" value="{{ $user->profile->no_hp }}" placeholder="Nomor Handphone" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <h2 class="card-title">Data Pesantren</h2>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="name">Nama Pesantren</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="name" class="form-control" name="nama_pesantren" value="{{ $user->profile->nama_pesantren }}" placeholder="Nama Pesantren" disabled/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="alamat_pesantren">Alamat Pesantren</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="alamat_pesantren" id="alamat_pesantren" rows="3" disabled>{{ $user->profile->alamat_pesantren }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="kota_pesantren">Kota Pesantren</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="kota_pesantren" class="form-control" name="kota_pesantren" value="{{ $user->profile->kota_pesantren }}" placeholder="Nomor Handphone" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <h2 class="card-title">Data Pembayaran</h2>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="nama_method">Pilih Metode Pembayaran</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="nama_method" name="nama_method">
                                                <option value="">Pilih</option>
                                                @foreach ($metode_pembayaran as $key => $key)
                                                    <option value="{{ $key }}">{{ $key }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="nama_method">Pilih Providers</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="nama_provider" name="nama_provider">
                                                <option value="">Pilih</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <h2 class="card-title">Data Produk</h2>
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="nama_produk">Nama Produk</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="nama_produk" class="form-control" name="nama_produk" value="{{ $produk->nama }}" disabled />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group row">
                                        <div class="col-sm-3 col-form-label">
                                            <label for="harga_produk">Harga Produk</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" id="harga_produk" class="form-control" name="harga_produk" value="{{ $produk->harga }}" disabled />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" id="produk_id" class="form-control" name="produk_id" value="{{ $produk->id }}" hidden />
                            <br><br>
                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <script>
        $(document).ready(function () {
            // Select Payment Method
            $('#nama_method').on('change', function () {
                var nama_metode = $('#nama_method').val();
                // console.log(nama_metode);
                if (nama_metode == nama_metode) {
                    console.log("Berhasil");
                    getProviders(nama_metode);
                }
                else {
                    $('#nama_provider').html();
                }
            });
        });

        function getProviders(nama_metode) {
                $.ajax({
                    type: "GET",
                    url: "{{ url ('user/getProviders') }}/" + nama_metode,
                    dataType: "JSON",
                    success: function (response) {
                        $('#nama_provider').empty();
                        $.each(response, function (key, value) {
                            $('#nama_provider').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                        $('#nama_provider').selectpicker('refresh');
                    }
                });
            }
    </script>
@endsection
