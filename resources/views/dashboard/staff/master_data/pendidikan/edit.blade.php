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
                            <h2 class="content-header-title float-left mb-0">Edit Pendidikan</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Master Data</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Edit Pendidikan</a>
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
                                    <h4 class="card-title">Edit Pendidikan</h4>
                                </div>
                                <div class="card-body">
                                    <form id="editPendidikan" class="form" method="POST" action="{{ route('pendidikan.update', $pendidikan->id) }}">
                                            @method('PATCH')
                                            <div class="form-group">
                                                <label for="nama">Nama Pendidikan</label>
                                                <input type="text" id="nama" class="form-control" value="{{ $pendidikan->nama }}" placeholder="Nama Pendidikan" name="nama" />
                                            </div>
                                            <button class="btn btn-primary mr-1">Update Pendidikan</button>
                                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
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
        $('#editPendidikan').on('submit', function(event){
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
                        window.location.href = '{{ route("pendidikan.index") }}';
                    }
                },
                error: (data) => {

                }
            });
        });
    </script>
@endsection
