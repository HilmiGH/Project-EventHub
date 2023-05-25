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


    <section style="background-color: #eee;">
        <div class="container py-5" style="margin-top: 1.5cm">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/landingpage">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">MC Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">John Smith</h5>
                            <p class="text-muted mb-1" style="margin-top: -0.3cm">@johnsmith</p>
                            <p class="text-muted mb-4">Rating: 4.8 Stars (50 Reviews)</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Full Name</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Johnatan Smith</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Age</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">21</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Languages</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Indonesian, English</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Event Type</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Musical Event, Wedding</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Experiences</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Event A, Event B</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Instagram</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">@johnsmith</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">johnsmith@gmail.com</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Phone</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">+628123456789</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <h4 style="margin-right: 0.3cm; margin-left: 0.5cm">Reviews</h4><button><a href="/landingpage/morerating"
                                class='fas fa-angle-right'></a></button>
                    </div>
                    <div class="row">
                    <a href="/landingpage/addrating" style="padding-left: 0.5cm">Write a Review</a>
                    </div>
                </div>
            </div>
    </section>

@endsection
