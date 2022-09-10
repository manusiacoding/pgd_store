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
                            <h2 class="content-header-title float-left mb-0">Data Pembayaran</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Data Pembayaran
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <a href="{{ route('user.create') }}"><button class="btn-icon btn btn-primary btn-round btn-sm" type="button" >
                                Buat Pembayaran
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Ajax Sourced Server-side -->
                <section id="ajax-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">Data Pembayaran</h4>
                                </div>
                                <div class="card-datatable">
                                    <table id="tablePembayaran" class="datatables-ajax table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Profile</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Foto Bukti Pembayaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Ajax Sourced Server-side -->

            </div>
        </div>
    </div>

    <script>
        var table;
          $(function() {
              table = $('#tablePembayaran').DataTable({
                  processing: true,
                  serverSide: true,
                  dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                  ajax: "{{ route('admin.dashboard.pembayaran.index') }}",
                  columns: [
                    {data: 'no', name: 'no', className : "text-center"},
                    {data: 'nama', name: 'nama'},
                    {data: 'data_profile', name: 'data_profile'},
                    {data: 'bukti_pembayaran', name: 'bukti_pembayaran'},
                    {data: 'foto_bukti', name: 'foto_bukti'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, className : "text-center"},
                  ]
              });
              table.on( 'order.dt search.dt', function () {
                table.column(0, {order:'applied', search:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
          });
    </script>
    <script>
        $(document).on('click', '.invoice-confirm', function(){
            var id_user = $(this).attr("id");
            console.log(id_user);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            event.preventDefault();
            Swal.fire({
                title: "Apakah Anda Yakin Ingin Mengkonfirmasi Ini?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Ya",
                confirmButtonColor: "#ff0055",
                cancelButtonColor: "#999999",
                reverseButtons: true,
                focusConfirm: false,
                focusCancel: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type:'POST',
                        url: "{{url('staff/data-pembayaran/confirm')}}/" + id_user,
                        success:function(data)
                        {
                            if(data.status == "ok"){
                                table.draw(false);
                            }
                        },
                        error: function(data){
                        }
                    });
                }
            })
        });

        $(document).on('click', '.profile-confirm', function(){
            var id_profile = $(this).attr("id");

            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url: "{{url('staff/data-pembayaran/profile')}}/" + id_profile,
                success:function(data)
                {
                    console.log(data);
                    // console.log(data.keahlian_utama)
                    $(".modal-body div span").text("");
                    $(".name span").text(data.profile.name);
                    $(".email span").text(data.profile.email);
                    $(".no_hp span").text(data.profile.no_hp);
                    $(".nama_pesantren span").text(data.profile.nama_pesantren);
                    $(".alamat_pesantren span").text(data.profile.alamat_pesantren);
                    $(".kota_pesantren span").text(data.profile.kota_pesantren);

                    $('#profile-confirm').modal('show');
                },
                error: function(data){

                }
            });
        });

        $(document).on('click', '.bukti_pembayaran', function(event){
            var id_invoice = $(this).attr("id");

            event.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:'POST',
                url: "{{url('staff/data-pembayaran/invoice')}}/" + id_invoice,
                success:function(data)
                {
                    console.log(data);
                    $(".modal-body div span").text("");
                    $(".product_name span").text(data.invoice.produk.nama);
                    $(".tagihan span").text(data.invoice.tagihan);
                    $(".metode_pembayaran span").text(data.invoice.paymentmethod.method_name);
                    $(".nama_bank span").text(data.invoice.paymentmethod.provider_name);
                    $(".nama_rekening_pembayar span").text(data.invoice.nama_rekening);

                    $('#bukti_pembayaran').modal('show');
                },
                error: function(data){

                }
            });

        });
    </script>

    @include('dashboard.staff.pembayaran.modal-profile')

    @include('dashboard.staff.pembayaran.modal-bukti_pembayaran')
@endsection
