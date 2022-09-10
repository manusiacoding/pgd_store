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
                            <h2 class="content-header-title float-left mb-0">Buat Produk</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Master Data</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Buat Produk</a>
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
                                    <h4 class="card-title">Pilih Gambar Produk</h4>
                                </div>
                                <div class="card-body">
                                    <div class="UppyDragDrop" name="fotografije[]" ></div>

                                    <script>
                                        var route = "{{ route('admin.dashboard.product.create.image.save', $product->id) }}";

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
                                            window.location.href = '{{ route("product.index") }}';
                                        })
                                    </script>
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


@endsection
