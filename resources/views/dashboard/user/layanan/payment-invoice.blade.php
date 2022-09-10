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
            </div>
            <div class="content-body">
                <div class="col-lg-12 col-12">
                    @if ($invoice->status == "Menunggu Pembayaran")
                        <!-- /.box-header -->
                        <div class="alert bg-white shadow-lg border-0 rounded-lg mt-3" role="alert">
                            <div class="row text-center">
                                <div class="col-lg-12">
                                <h3 class="alert-heading text-warning mt-3">Selesaikan Pembayaran Anda!</h3>
                                <p>Mohon lakukan pembayaran sejumlah <b>Rp{{ $invoice->tagihan }}</b> sebelum <strong>{{ Carbon\Carbon::parse($invoice->expired_at)->translatedFormat('l, j F Y H:i') }}</strong> ke rekening berikut:</p>

                                <div class="row">
                                    <div class="col-lg-6 offset-lg-3 text-center border border-info rounded shadow p-3 mb-4">
                                    <h5><img src="{{asset('images/bank/'.$invoice->paymentmethod->provider_name .'.png')}}" alt="{{ $invoice->paymentmethod->provider_name }}" width="150" height="auto" class="mr-2 mb-3"><br>No. Rek.
                                        <strong id="rekening">{{ $invoice->paymentmethod->nomor_rekening }}</strong>
                                        <button class="btn btn-primary btn-xs ml-2" id="salin_rekening" onclick="copy_rekening()" role="button">Salin Rekening</button></h5>
                                    <h5 class="mt-3">Atas Nama: <br/><strong>{{ $invoice->paymentmethod->nama_rekening }}</strong></h5>
                                    </div>
                                </div>

                                <h1 class="mb-1 text-warning font-weight-bold" id="waktu-{{ $invoice->id }}"></h1>
                                <p class="mt-4">Bila tidak ada pembayaran, paket akan dibatalkan secara otomatis</p>

                                <hr>

                                <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#pembayaran">Konfirmasi Pembayaran</button>
                                </div>
                            </div>
                        </div>
                        <script>
                            // Set the date we're counting down to
                            var countDownDate{{ $invoice->id }} = new Date("{{ $invoice->expired_at }}").getTime();

                            // Update the count down every 1 second
                            var x{{ $invoice->id }} = setInterval(function() {

                                // Get today's date and time
                                var now = new Date().getTime();

                                // Find the distance between now and the count down date
                                var distance = countDownDate{{ $invoice->id }} - now;

                                // Time calculations for days, hours, minutes and seconds
                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                var hours = Math.floor((distance) / (1000 * 60 * 60));
                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000) < 10 ? '0'+Math.floor((distance % (1000 * 60)) / 1000) : Math.floor((distance % (1000 * 60)) / 1000);

                                // Display the result in the element with id="demo"
                                document.getElementById("waktu-{{ $invoice->id }}").innerHTML = hours + ":"
                                + minutes + ":" + seconds;

                                // If the count down is finished, write some text
                                if (distance < 0) {
                                    clearInterval(x{{ $invoice->id }});
                                    document.getElementById("waktu-{{ $invoice->id }}").innerHTML = "EXPIRED";
                                }
                            }, 1000);
                        </script>
                    @elseif($invoice->status == "Telah Terbayar")
                        <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Bukti Pembayaran Anda Berhasil Kami Terima!</h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">Dalam waktu 2 hari kerja admin kami akan mengkonfirmasi bukti pembayaran yang Anda kirimkan</p>

                                        <hr />
                                        <p class="card-text">
                                           Terima Kasih
                                        </p>
                                    </div>
                                </div>
                        </div>
                    @elseif($invoice->status == "Terkonfirmasi")
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Yeay! Pembayaran Terkonfirmasi!</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">Sekarang Anda Dapat Menikmati Ini!</p>

                                    <hr />
                                    <p class="card-text">
                                        Terima Kasih
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <!-- MODAL -->
<div class="modal fade shadow shadow-lg" id="pembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Upload Bukti Pembayaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h6 class="mb-4">Silahkan transfer sejumlah <b> Rp. {{ $invoice->tagihan }} </b> ke rekening berikut :</h6>
            <div class="row">
                <div class="col-lg-12 text-center border border-info rounded shadow p-3 mb-4">
                <h5><img src="{{asset('images/bank/'.$invoice->paymentmethod->provider_name .'.png')}}" alt="logo BRI" width="150" height="auto" class="mr-2 mb-3">
                    <br>No. Rek.
                    <strong id="rekening">{{ $invoice->paymentmethod->nomor_rekening }}</strong>
                </h5>
                <h5>Atas Nama: <br/><strong>{{ $invoice->paymentmethod->nama_rekening }}</strong></h5>
                </div>
            </div>
            <br/>
            <form id="uploadPembayaran" action="{{ route('user.dashboard.layanan.pembayaran.save', $invoice->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $invoice->id }}">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <strong>Nama Pemilik Rekening<span style="color: red">*</span></strong>
                            <input type="text" id="name" name="nama_rekening" class="form-control input-lg" value="{{ old('name') }}" required>
                            <small>Nama Pemilik Rekening Pada Saat Transfer Sesuai Buku Tabungan</small>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <strong>Upload Bukti<span style="color: red">*</span></strong>
                            <input id="brosurFile" type="file" name="bukti_pembayaran" class="form-control" required>
                            <small>Max 2 Mb</small>
                            @if($errors->has('brosur'))
                                <div class="text-danger">
                                    {{ $errors->first('brosur')}}
                                </div>
                            @endif
                        </div>
                        <img id="brosur_placeholder" width="20%" height="auto" />
                    </div>
                </div>

        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Upload</button>
        </form>
        </div>
    </div>
    </div>
</div>
<!-- /.content-wrapper -->
<script>
    function copy_rekening() {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val($('#rekening').text()).select();
      document.execCommand("copy");
      $temp.remove();
      $('#salin_rekening')
        .attr('data-toggle', 'tooltip')
        .attr('data-placement', 'top')
        .attr('title', 'Nomor rekening disalin')
        .tooltip('show')
        .removeAttr('data-toggle')
        .removeAttr('data-placement')
        .removeAttr('title')
        .removeAttr('data-orignial-title');
    }


</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#brosur_placeholder').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#brosurFile").change(function() {
        readURL(this);
    });
</script>
<script>
    $('#uploadPembayaran').on('submit', function(event){
        event.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });


        Swal.fire({
            text : "Mohon menunggu..."
        });

        swal.showLoading();

        $.ajax({
            url: $(this).attr("action"),
            method:"POST",
            data:new FormData(this),
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: (data) => {
                if(data.status == "ok"){
                    swal.close();
                    Swal.fire({
                        icon: 'success',
                        title: data.messages
                    });

                    setTimeout(function() {
                        window.location.href = data.route;
                    }, 1000);
                }
            },
            error: (data) => {

            }
        });
    });
</script>

@endsection

