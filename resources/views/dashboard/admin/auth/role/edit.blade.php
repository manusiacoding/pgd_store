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
                            <h2 class="content-header-title float-left mb-0">Edit Role</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Auth</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Edit Role</a>
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
                                    <h4 class="card-title">Edit Role</h4>
                                </div>
                                <div class="card-body">
                                    <form id="createRole" class="form" method="POST" action="{{ route('role.update', $role->id) }}">
                                        @method('PATCH')
                                            <div class="form-group">
                                                <label for="nama_lengkap">Nama Role</label>
                                                <input type="text" id="nama_lengkap" class="form-control" placeholder="Nama Role" value="{{ $role->name }}" name="name" />
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Guard Name</label>
                                                <input type="text" id="email" class="form-control" placeholder="Default Web" value="{{ $role->guard_name }}" name="guard_name" />
                                            </div>
                                            <div class="col-12">
                                                <button class="btn btn-primary mr-1">Edit Role</button>
                                                <a href="{{ route('role.index') }}"><button type="reset" class="btn btn-outline-secondary">Cancel</button></a>
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
        $('#createRole').on('submit', function(event){

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
                        window.location.href = '{{ route("role.index") }}';
                    }
                },
                error: (data) => {

                }
            });
        });
    </script>
@endsection
