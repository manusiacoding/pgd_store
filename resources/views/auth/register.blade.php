@extends('layouts.app')

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo-->
                        <a class="brand-logo" href="javascript:void(0);">
                            <img src="{{ asset('images/logo_pesantren_go_digital.png') }}" alt="" srcset="">
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5"
                        style="position: relative;
                                width: 100%;
                                background-color: #6fcf97;
                                background-image: url(https://apps.pesantrengodigital.id/svg/Bg.svg);
                                background-repeat: repeat;
                                background-size: cover;">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5">
                            </div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Register-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <center>
                                    <img class="img-fluid" src="{{ asset('images/logo_pesantren_go_digital.png') }}" alt="Login Pesantren Go Digital"/>
                                    <h2 class="card-title font-weight-bold mb-1 mt-3">Register </h2>
                                </center>
                                <form class="auth-register-form mt-2" method="POST" action="{{ route('new.register') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label class="form-label" for="register-name">Nama Lengkap</label>
                                        <input class="form-control" id="register-name" type="text" name="name" placeholder="Nama Lengkap" aria-describedby="register-name" tabindex="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="register-email">Email</label>
                                        <input class="form-control" id="register-email" type="text" name="email" placeholder="Email" aria-describedby="register-email" tabindex="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="register-no_handphone">No. Handphone</label>
                                        <input class="form-control" id="register-no_handphone" type="text" name="no_hp" placeholder="Contoh : 0812334xxxx" aria-describedby="register-email" tabindex="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="register-nama_pesantren">Nama Pesantren</label>
                                        <input class="form-control" id="register-nama_pesantren" type="text" name="nama_pesantren" placeholder="Nama Pesantren" aria-describedby="register-email" tabindex="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="register-alamat_pesantren">Alamat Pesantren</label>
                                        <textarea class="form-control" name="alamat_pesantren" id="register-alamat_pesantren" rows="2" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="register-kota_pesantren">Kota Pesantren</label>
                                        <input class="form-control" id="register-kota_pesantren" type="text" name="kota_pesantren" placeholder="Nama Pesantren" aria-describedby="register-email" tabindex="2" required />
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="register-kota_pesantren">Pendidikan Dalam Pesantren</label>
                                        @foreach ($pendidikan as $item)
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="pendidikan-{{ $item->id }}" value="{{ $item->id }}" name="pendidikan[]" />
                                            <label class="custom-control-label" for="pendidikan-{{ $item->id }}">{{ $item->nama }}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="register-kota_pesantren">Layanan Yang Diperlukan</label>
                                        @foreach ($layanan as $item)
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="layanan--{{ $item->id }}" value="{{ $item->id }}" name="layanan[]"
                                            @if ($item->nama == "Website Builder")
                                                checked
                                            @endif/>
                                            <label class="custom-control-label" for="layanan--{{ $item->id }}">{{ $item->nama }}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="password" type="password" name="password" placeholder="············" aria-describedby="password" tabindex="3" required />
                                            <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="password_confirmation">Konfirmasi Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="password_confirmation" type="password" name="password_confirmation" placeholder="············" aria-describedby="password_confirmation" tabindex="3" required />
                                            <div class="input-group-append"><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span></div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block" tabindex="5">Daftar</button>
                                </form>
                                <p class="text-center mt-2"><span>Sudah Mendaftar?</span><a href="{{ route('login') }}"><span>&nbsp;Login</span></a></p>
                            </div>
                        </div>
                        <!-- /Register-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
