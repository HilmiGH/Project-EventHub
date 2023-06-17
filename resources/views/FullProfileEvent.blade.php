@extends('main')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman MyProfile')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <section style="">
        <div class="container py-5" style="margin-top: 2cm">

            <div class="row" style="margin-top: 0.5cm">
                <div class="col-lg-4">
                    <div class="card mb-4" style="border: 0.5px solid rgb(152, 140, 140)">
                        <div class="card-body text-center">
                            <img src={{ asset('img/EventPhoto.jpg') }}
                                alt="avatar" class="img-fluid" style=";">

                        </div>
                    </div>

                </div>
                @foreach ($events as $info_akun)

                <div class="col-lg-8">
                    <div class="card mb-4" style="border: 0.5px solid rgb(152, 140, 140)">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Event Type</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $info_akun->eventType }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Event Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $info_akun->eventName }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Location</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $info_akun->eventLocation }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Number of MC</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $info_akun->numberOfMC }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Event Description</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">{{ $info_akun->eventDescription }}</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                @endforeach
            </div>
    </section>

@endsection
