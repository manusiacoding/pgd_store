@extends('dashboard.dashboard')
@section('content')
<script src="{{ asset('tinymce/js/tinymce.min.js') }}"></script>
<script>
    tinymce.init({
        selector: 'textarea.editor',  // change this value according to your HTML
        plugins: 'lists,table,textcolor',
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent ',
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
    });
</script>

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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Produk</h4>
                                </div>
                                <div class="card-body">
                                    <form id="editProduk" class="form" method="POST" action="{{ route('product.update', $product->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label for="nama_product">Nama Produk</label>
                                            <input type="text" id="nama_product" class="form-control" placeholder="Nama Produk" value="{{ $product->nama }}" name="nama" />
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi_product">Deskripsi</label>
                                            <textarea class="form-control editor" id="deskripsi_product" name="deskripsi" rows="3" placeholder="Deskrip Produk">{{ $product->deskripsi }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="harga_product">Harga Produk</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp. </span>
                                                </div>
                                                <input type="text" class="form-control numeral-mask" placeholder="Harga Produk" value="{{ $product->harga }}" id="numeral-formatting" name="harga"/>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="gantiFoto">Ganti Foto?</label>
                                            <select class="form-control" id="gantiFoto">
                                                <option>Ganti Foto?</option>
                                                <option value="Ya">Ya</option>
                                                <option value="Tidak">Tidak</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="uploadFoto" style="display: none">
                                            <label for="foto_product">Foto Produk
                                            </label>
                                            <input type="file" class="form-control" name="foto" />
                                            <img class="mt-2" id="brosur_placeholder" width="20%" height="auto" />
                                        </div> --}}
                                        <div class="col-12">
                                            <button class="btn btn-primary mr-1">Selanjutnya</button>
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

    {{-- <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#brosur_placeholder').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#foto_product").change(function() {
            readURL(this);
        });

        $('#gantiFoto').on('change', function () {
            var value = $('#gantiFoto').val();
            if (value == "Ya") {
                $('#uploadFoto').show();
            } else {
                $('#uploadFoto').hide();
            }
        });
    </script> --}}
@endsection
