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
                            <h2 class="content-header-title float-left mb-0">Edit User</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Auth</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Edit User</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit User</h4>
                                </div>
                                <div class="card-body">
                                    <form id="createUser" class="form" method="POST" action="{{ route('user.update', $user->id) }}">
                                        @method('PATCH')
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="nama_lengkap">Nama Lengkap</label>
                                                    <input type="text" id="nama_lengkap" class="form-control" placeholder="Nama Lengkap" value="{{ $user->name }}" name="name" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="email" id="email" class="form-control" placeholder="Email" value="{{ $user->email }}" name="email" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" id="password" class="form-control" placeholder="Password" name="password" />
                                                    <p id="message"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="konfirmasi_password">Konfirmasi Password</label>
                                                    <input type="password" id="konfirmasi_password" class="form-control" name="konfirmasi_password" placeholder="Ulangi Password" />
                                                    <p id="message-2"></p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary mr-1">Buat User</button>
                                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <script>
        $('#password, #konfirmasi_password').on('keyup', function () {
            if ($('#password').val() == $('#konfirmasi_password').val()) {
                $('#message').html('Password Sama').css('color', 'green');
            } else
                $('#message').html('Password Tidak Sama').css('color', 'red');
        });
        $('#createUser').on('submit', function(event){

            // check if the input is valid using a 'valid' property
            if ($('#password').val() !== $('#konfirmasi_password').val()) return false;

            event.preventDefault();
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: $(this).attr("action"),
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: (data) => {
                    if (data.status == "ok") {
                        window.location.href = '{{ route("user.index") }}';
                    }
                },
                error: (data) => {

                }
            });
        });
    </script>
@endsection
