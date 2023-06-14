@extends('main')

@section('judul_halaman', 'Halaman EditProfile')

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

        .btn-mc,
        .btn-eo {
            color: rgb(0, 0, 0);
            background-color: white;
        }
    </style>

<body>
    <div class="container" style="margin-top:110px; margin-bottom:30px">
        <div class="row mt-5">
            <div class="col-md-8" style="padding-bottom: 4cm;">
                <div class="card">
                    <div class="card-body"
                        style="margin-left:100px; margin-right:100px; margin-top:30px; margin-bottom:30px;">
                        <div class="form-group;" >
                            <H4 class="font-weight-bold">Edit Profile</H4>
                            <p class="font-weight-light;" style="font-size: small;">Manage your profile information to
                                control, protect and secure your account
                            </p>
                        </div>
                        <div class="progress" style="height: 1px">
                            <div class="progress-bar bg-dark" style="width:100%"></div>
                        </div>
                        @foreach ($akunumum as $info_akun)
                        <form class="form rounded-circle" action="/landingpage/myprofileUpdate" method="post"
                            enctype="multipart/form-data"> {{ csrf_field() }}
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <input type="hidden" name="umumID" value=" {{ $info_akun -> umumID }}">

                            <div class="row">
                                <div class="col-md-8" style="margin-top: 0.5cm;">
                                    <div class="form-group">
                                        <label for="umumUsername" class="font-weight-bold">Username</label>
                                        <input type="text" value="{{ $info_akun->umumUsername }}" name="umumUsername" class="form-control" id="umumUsername"
                                            placeholder="Enter your username">
                                    </div>
                                    <div class="form-group">
                                        <label for="umumFullName" class="font-weight-bold">umumFullName</label>
                                        <input type="text" value="{{ $info_akun->umumFullName }}" name="umumFullName" class="form-control" id="umumFullName"
                                            placeholder="Enter your Full Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="umumPhone" class="font-weight-bold">Phone Number</label>
                                        <input type="text" value="{{ $info_akun->umumPhone }}" name="umumPhone" class="form-control" id="umumPhone"
                                            placeholder="Enter your phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="umumCity" class="font-weight-bold">City</label>
                                        <input type="text" value="{{ $info_akun->umumCity }}" name="umumCity" class="form-control" id="umumCity"
                                            placeholder="Enter your city">
                                    </div>
                                    <div class="form-group">
                                        <label for="umumDOB" class="font-weight-bold">Date of Birth</label>
                                        <input type="date" value="{{ $info_akun->umumDOB }}" name="umumDOB" class="form-control" id="umumDOB">
                                    </div>
                                    <div class="form-group">
                                        <label for="cat" class="font-weight-bold">Change Account Type</label>
                                        <br>
                                        <a class="btn" href="/landingpage/editprofilemc">
                                            <i class="fas fa-microphone"></i>
                                            MC
                                        </a>
                                        <a class="btn" href="/landingpage/editprofileeo">
                                            <i class="fas fa-calendar"></i>
                                            EO
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center" style="margin-top: 1.5cm;">
                                    <img src="" alt="Preview" id="imagePreview" class="img-thumbnail; rounded-circle"
                                        style="width: 100px; height: 100px; margin-bottom: 1cm;">
                                    <div>
                                        <input type="file" class="form-control-file" style="margin-left: 30px;" id="imageInput"
                                            accept=".img, .png">
                                        <p class="font-weight-light;" style="font-size: small;">Image Size: max. 1
                                            MB
                                            <br>Image Format: .JPEG, .PNG</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <button type="submit" class="btn btn-danger"
                                    style="margin-top: 0.5cm; transform: scale(1.2);" value="Simpan">Save</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk menampilkan pratinjau gambar saat memilih file
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imagePreview').attr('src', e.target.result).show();
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        // Menghubungkan fungsi dengan event "change" pada input file
        $('#imageInput').change(function () {
            readURL(this);
        });
    </script>

@endsection
