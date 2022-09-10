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
                            <h2 class="content-header-title float-left mb-0">Profile</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('user.dashboard.main') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Profile
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <div id="user-profile">
                    <!-- profile header -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card profile-header mb-2">

                                @if (is_null($user->profilePhoto))
                                    <!-- profile cover photo -->
                                    <img class="card-img-top" src="{{ asset('dashboard/app-assets/images/profile/user-uploads/timeline.jpg') }}" alt="User Profile Image" />
                                    <!--/ profile cover photo -->

                                    <div class="position-relative">
                                        <!-- profile picture -->
                                        <div class="profile-img-container d-flex align-items-center">
                                            <div class="profile-img">
                                                <img src="https://avatars.dicebear.com/4.5/api/initials/{{ Auth::user()->name }}.svg" class="rounded img-fluid" alt="Card image" />
                                            </div>
                                            <!-- profile title -->
                                            <div class="profile-title ml-3">
                                                <h2 class="text-white">{{ $user->profile->name }}</h2>
                                                <p class="text-white">{{ $user->profile->nama_pesantren }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    @if (is_null($user->profilePhoto->foto) && !is_null($user->profilePhoto->cover))
                                        <!-- profile cover photo -->
                                        <img class="card-img-top" src="{{ Storage::url($user->profilePhoto->cover) }}" alt="User Profile Image" />
                                        <!--/ profile cover photo -->

                                        <div class="position-relative">
                                            <!-- profile picture -->
                                            <div class="profile-img-container d-flex align-items-center">
                                                <div class="profile-img">
                                                    <img src="https://avatars.dicebear.com/4.5/api/initials/{{ Auth::user()->name }}.svg" class="rounded img-fluid" alt="Card image" />
                                                </div>
                                                <!-- profile title -->
                                                <div class="profile-title ml-3">
                                                    <h2 class="text-white">{{ $user->profile->name }}</h2>
                                                    <p class="text-white">{{ $user->profile->nama_pesantren }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif (!is_null($user->profilePhoto->foto) && is_null($user->profilePhoto->cover))
                                        <!-- profile cover photo -->
                                        <img class="card-img-top" src="{{ asset('dashboard/app-assets/images/profile/user-uploads/timeline.jpg') }}" alt="User Profile Image" />
                                        <!--/ profile cover photo -->

                                        <div class="position-relative">
                                            <!-- profile picture -->
                                            <div class="profile-img-container d-flex align-items-center">
                                                <div class="profile-img">
                                                    <img src="{{ Storage::url($user->profilePhoto->foto) }}" class="rounded img-fluid" alt="Card image" />
                                                </div>
                                                <!-- profile title -->
                                                <div class="profile-title ml-3">
                                                    <h2 class="text-white">{{ $user->profile->name }}</h2>
                                                    <p class="text-white">{{ $user->profile->nama_pesantren }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif (!is_null($user->profilePhoto->foto) && !is_null($user->profilePhoto->cover))
                                        <!-- profile cover photo -->
                                        <img class="card-img-top" src="{{ Storage::url($user->profilePhoto->cover) }}" alt="User Profile Image" />
                                        <!--/ profile cover photo -->

                                        <div class="position-relative">
                                            <!-- profile picture -->
                                            <div class="profile-img-container d-flex align-items-center">
                                                <div class="profile-img">
                                                    <img src="{{ Storage::url($user->profilePhoto->foto) }}" class="rounded img-fluid" alt="Card image" />
                                                </div>
                                                <!-- profile title -->
                                                <div class="profile-title ml-3">
                                                    <h2 class="text-white">{{ $user->profile->name }}</h2>
                                                    <p class="text-white">{{ $user->profile->nama_pesantren }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                @endif


                                <!-- tabs pill -->
                                <div class="profile-header-nav">
                                    <!-- navbar -->
                                    <nav class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
                                        <button class="btn btn-icon navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <i data-feather="align-justify" class="font-medium-5"></i>
                                        </button>

                                        <!-- collapse  -->
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <div class="profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0">
                                                <ul class="nav nav-pills mb-0">
                                                    <li class="nav-item">
                                                        <a class="nav-link font-weight-bold active" href="javascript:void(0)">
                                                            <span class="d-none d-md-block">Data Profile</span>
                                                            <i data-feather="rss" class="d-block d-md-none"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- edit button -->
                                                <a href="#edit-profile" id="button-edit-profile"><button class="btn btn-primary">
                                                    <i data-feather="edit" class="d-block d-md-none"></i>
                                                    <span class="font-weight-bold d-none d-md-block">Edit</span>
                                                </button></a>
                                            </div>
                                        </div>
                                        <!--/ collapse  -->
                                    </nav>
                                    <!--/ navbar -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ profile header -->

                    <!-- Start Profile Info section -->
                    <section id="profile-info">
                        <div class="row">
                            <!-- left profile info section -->
                            <div class="col-lg-12 col-12 order-2 order-lg-1">
                                <!-- about -->
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <h2 class="mb-3">Data Diri</h2>

                                                <h5 class="mb-75">Nama Lengkap</h5>
                                                <p class="card-text">
                                                    {{ $user->profile->name }}
                                                </p>
                                                <div class="mt-2">
                                                    <h5 class="mb-75">Email:</h5>
                                                    <p class="card-text">
                                                        {{ $user->profile->email }}
                                                    </p>
                                                </div>
                                                <div class="mt-2">
                                                    <h5 class="mb-75">No HP:</h5>
                                                    <p class="card-text">
                                                        {{ $user->profile->no_hp }}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <h2 class="mb-3">Data Pesantren</h2>

                                                <h5 class="mb-75">Nama Pesantren:</h5>
                                                <p class="card-text">
                                                    {{ $user->profile->nama_pesantren }}
                                                </p>
                                                <div class="mt-2">
                                                    <h5 class="mb-75">Alamat Pesantren:</h5>
                                                    <p class="card-text">
                                                        {{ $user->profile->alamat_pesantren }}
                                                    </p>
                                                </div>
                                                <div class="mt-2">
                                                    <h5 class="mb-75">Kota Pesantren:</h5>
                                                    <p class="card-text">
                                                        {{ $user->profile->kota_pesantren }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--/ about -->
                            </div>
                            <!--/ left profile info section -->

                        </div>


                    </section>
                    <!--/ End Profile Info section -->

                    <!-- Start Edit Profile -->
                    <section id="edit-profile" style="display: none;">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Edit Profile</h4>
                                    </div>
                                    <div class="card-body">
                                        <form class="form" id="form-edit-profile" action="{{ route('user.dashboard.profile.update', $user->profile->id) }}" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="nama_lengkap">Nama Lengkap</label>
                                                        <input type="text" id="nama_lengkap" class="form-control" value="{{ $user->profile->name }}" name="name" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" id="email" class="form-control" value="{{ $user->profile->email }}" name="email" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="no_hp">No HP</label>
                                                        <input type="text" id="no_hp" class="form-control" value="{{ $user->profile->no_hp }}" name="no_hp" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="no_hp">Foto Profile</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="foto" class="custom-file-input" id="foto-profile" />
                                                            <label class="custom-file-label" for="foto-profile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="nama_pesantren">Nama Pesantren</label>
                                                        <input type="text" id="nama_pesantren" class="form-control" value="{{ $user->profile->nama_pesantren }}" name="nama_pesantren" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alamat_pesantren">Alamat Pesantren</label>
                                                        <input type="text" id="alamat_pesantren" class="form-control" placeholder="Last Name" value="{{ $user->profile->alamat_pesantren }}" name="alamat_pesantren" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="kota_pesantren">Kota Pesantren</label>
                                                        <input type="text" id="kota_pesantren" class="form-control" placeholder="Last Name" value="{{ $user->profile->kota_pesantren }}" name="kota_pesantren" required />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="no_hp">Foto Cover</label>
                                                        <div class="custom-file">
                                                            <input type="file" name="cover" class="custom-file-input" id="foto-cover" />
                                                            <label class="custom-file-label" for="foto-cover">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn btn-primary mr-1">Submit</button>
                                                    <button type="reset" id="cancel-edit-profile" class="btn btn-outline-secondary">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Edit Profile -->

                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <script>
        $(document).on('click', '#button-edit-profile', function(){
            $('#edit-profile').show();
        });

        $(document).on('click', '#cancel-edit-profile', function(){
            $('#edit-profile').hide();
        });

        $('#form-edit-profile').on('submit', function(event){

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
                        window.location.href = '{{ route("user.dashboard.profile") }}';
                    }
                },

                error: (data) => {

                }
            });
        });
    </script>
@endsection
