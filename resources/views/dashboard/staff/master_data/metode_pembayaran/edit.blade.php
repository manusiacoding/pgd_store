@extends('dashboard.dashboard')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Edit Metode Pembayaran</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Master Data</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Edit Metode Pembayaran</a>
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
                                    <h4 class="card-title">Edit Metode Pembayaran</h4>
                                </div>
                                <div class="card-body">
                                    <form id="createMetodePembayaran" class="form" method="POST" action="{{ route('metode-pembayaran.update', $data->id) }}">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label for="method_name">Nama Metode Pembayaran</label>
                                            <select class="form-control" id="method_name" name="method_name" required>
                                                <option>Pilih</option>
                                                <option value="Transfer Bank" @if ($data->method_name == "Transfer Bank") selected @endif>Transfer Bank</option>
                                                <option value="Uang Digital" @if ($data->method_name == "Uang Digital") selected @endif>Uang Digital</option>
                                            </select>
                                            {{-- <input type="text" id="method_name" class="form-control" placeholder="Nama Metode Pembayaran" name="method_name" required /> --}}
                                        </div>
                                        <div class="form-group">
                                            <label for="provider_name">Nama Provider/Bank</label>
                                            <input type="text" id="provider_name" class="form-control" placeholder="Nama Provider/Bank" name="provider_name" value="{{ $data->provider_name }}" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_rekening">Nama Rekening</label>
                                            <input type="text" id="nama_rekening" class="form-control" placeholder="A.n Rekening Bank" name="nama_rekening" value="{{ $data->nama_rekening }}" required />
                                        </div>
                                        <div class="form-group">
                                            <label for="nomor_rekening">Nomor Rekening</label>
                                            <input type="text" id="nomor_rekening" class="form-control" placeholder="Nomor Rekening Bank" name="nomor_rekening" value="{{ $data->nomor_rekening }}" required />
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary mr-1">Update Metode Pembayaran</button>
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

@endsection
