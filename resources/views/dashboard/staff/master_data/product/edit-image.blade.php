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
                            <h2 class="content-header-title float-left mb-0">Edit Produk</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Master Data</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Edit Produk</a>
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

                        @foreach ($product->imageProduct as $item)
                        <div class="col-md-4">
                            <div class="card">
                                <img class="card-img-top" src="{{ $item->image }}" alt="{{ $product->nama }}" />
                                <div class="card-body">

                                    {{-- <a href="javascript:void(0)" class="btn btn-outline-primary">Go somewhere</a> --}}
                                </div>
                                <div class="card-footer text-center">
                                    <a id="{{ $item->id }}" class="btn  btn-outline-primary delete-image">Hapus Gambar</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Pilih Gambar Produk</h4>
                                </div>
                                <div class="card-body">
                                    <div class="UppyDragDrop"></div>

                                    <br>
                                    <a href="{{ route('product.index') }}"><button class="btn btn-primary mr-1">Selesai</button></a>
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
        $(document).on('click', '.delete-image', function(){
            var id_image = $(this).attr("id");
            console.log(id_image);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            event.preventDefault();
            Swal.fire({
                title: "Apakah Anda Yakin Ingin Menghapus Ini?",
                // type: "info",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Delete",
                confirmButtonColor: "#ff0055",
                cancelButtonColor: "#999999",
                reverseButtons: true,
                focusConfirm: false,
                focusCancel: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type:'DELETE',
                        url: "{{url('staff/master-data/product/image/delete/')}}/" + id_image,
                        success:function(data)
                        {
                            if(data.status == "ok"){
                                location.reload();
                            }
                        },
                        error: function(data){
                        }
                    });
                }
            })
        });
    </script>

    <script>
        var route = "{{ route('admin.dashboard.product.edit.image.save', $product->id) }}";

        var uppy = Uppy.Core()
        .use(Uppy.Dashboard, {
            trigger: '.UppyModalOpenerBtn',
            inline: true,
            target: '.UppyDragDrop',
            replaceTargetContent: true,
            showProgressDetails: true,
            note: 'Max 2 Mb',
            width: 10000,
            metaFields: [
                { id: 'name', name: 'Name', placeholder: 'file name' }
            ],
            browserBackButtonClose: false
        })
        .use(Uppy.XHRUpload, {
            headers: {
                'X-CSRF-Token': " {{ csrf_token() }} "
            },
            endpoint: route
        })
        uppy.on('complete', (result) => {
            console.log(result);
            // window.location.href = '{{ route("product.index") }}';
        })
    </script>
@endsection
