
@extends('main')

@section('judul_halaman', 'Halaman MyProfile EO')

@section('content')

    <style>
        .card {
            border: 2px solid black;
            border-width: 3px;
            width: 1100px;
            border-radius: 20px;
        }

        .form-control {
            border-width: 2px;
            border-color: red;
            border-radius: 30px;
        }

        .image-container {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 1px solid #ccc;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    <div class="container" style="margin-top: 110px; margin-bottom: 30px">
        <div class="row mt-5">
            <div class="col-md-8" style="padding-bottom: 4cm;">
                <div class="card">
                    <div class="card-body" style="margin-left:100px; margin-right:100px; margin-top:30px; margin-bottom:30px;">
                        <div class="form-group;">
                            <H4 class="font-weight-bold">My Profile</H4>
                        </div>
                        <div class="progress" style="height: 1px">
                            <div class="progress-bar bg-dark" style="width:100%"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-8" style="margin-top: 0.5cm;">
                                <div class="form-group">
                                    <label class="font-weight-bold">Username:</label>
                                    <p>{{ $username }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Password:</label>
                                    <p>{{ $password }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Company Name:</label>
                                    <p>{{ $companyname }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Company Type:</label>
                                    <p>{{ $companytype }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">City:</label>
                                    <p>{{ $city }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Contact Person:</label>
                                    <p>{{ $contactperson }}</p>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Event Category:</label>
                                    <p>{{ $eventcategory }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
