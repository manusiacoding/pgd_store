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
                            <h2 class="content-header-title float-left mb-0">Data Invoice</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Data Invoice
                                    </li>
                                </ol>
                            </div>
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
                                    <h4 class="card-title">Data Invoice</h4>
                                </div>
                                <div class="card-datatable">
                                    <table id="tableInvoice" class="datatables-ajax table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Paket</th>
                                                <th>Total Pembayaran</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                {{-- <th>Action</th> --}}
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
              table = $('#tableInvoice').DataTable({
                  processing: true,
                  serverSide: true,
                  dom: '<"d-flex justify-content-between align-items-center mx-0 row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6"f>>t<"d-flex justify-content-between mx-0 row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                  ajax: "{{ route('user.dashboard.invoice.index') }}",
                  columns: [
                    {data: 'no', name: 'no', className : "text-center"},
                    {data: 'produk_name', name: 'produk_name'},
                    {data: 'total_tagihan', name: 'total_tagihan'},
                    {data: 'tanggal', name: 'tanggal'},
                    {data: 'status', name: 'status'},
                    // {data: 'action', name: 'action', orderable: false, searchable: false, className : "text-center"},
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
        $(document).on('click', '.delete-confirm', function(){
            var id_user = $(this).attr("id");
            console.log(id_user);
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
                        url: "{{url('admin/user')}}/" + id_user,
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
    </script>
    <!-- END: Content-->

@endsection
