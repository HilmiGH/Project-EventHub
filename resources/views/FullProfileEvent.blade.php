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
        <div class="container py-5" style="margin-top: 1.5cm">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/landingpage">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Event Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="img-fluid" style=";">

                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Event Type</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Johnatan Smith</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Event Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">21</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Location</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Indonesian, English</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Number of MC</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Musical Event, Wedding</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Event Description</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Event A, Event B</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
    </section>

@endsection
