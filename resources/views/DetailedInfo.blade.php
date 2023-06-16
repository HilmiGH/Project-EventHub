@extends('main')

@section('judul_halaman', 'Detail Profile')

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->


    <section>
        <div class="container py-5" style="margin-top: 1.5cm">
            @foreach ($akunmc as $info_akun)
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4" style="border: 0.5px solid rgb(152, 140, 140)">
                            <div class="card-body text-center">
                                <img src="{{asset('img/Portrait.png')}}"
                                    alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3">{{ $info_akun->mcUsername }}</h5>
                                <p class="text-muted mb-1" style="margin-top: -0.3cm">{{ $info_akun->mcCity }}</p>
                                <p class="text-muted mb-4">Rating: {{ $info_akun->ratingMCID }} Stars</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4" style="border: 0.5px solid rgb(152, 140, 140)">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Username</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $info_akun->mcUsername }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">City</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $info_akun->mcCity }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Specialization</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $info_akun->mcSpecialization }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Experience</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $info_akun->mcExperience }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Price Range</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $info_akun->mcPriceMin }} -
                                            {{ $info_akun->mcPriceMax }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0">Phone Number</p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $info_akun->mcPhone }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <h4 style="margin-right: 0.3cm; margin-left: 0.5cm">Reviews</h4>
                            <button><a href="/landingpage/morerating" class='fas fa-angle-right'></a></button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection
