@extends('main')

@section('judul_halaman', 'Halaman EditProfile EO')

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

<div class="container" style="margin-top:110px; margin-bottom:30px">
    <div class="row mt-5">
        <div class="col-md-8" style="padding-bottom: 4cm;">
            <div class="card">
                <div class="card-body"
                    style="margin-left:100px; margin-right:100px; margin-top:30px; margin-bottom:30px;">
                    <div class="form-group;">
                        <H4 class="font-weight-bold">Edit Profile</H4>
                        <p class="font-weight-light;" style="font-size: small;">Manage your profile information to
                            control, protect and secure your account
                        </p>
                    </div>
                    <div class="progress" style="height: 1px">
                        <div class="progress-bar bg-dark" style="width:100%"></div>
                    </div>
                    <form class="rounded-circle" action="/landingpage/myprofileeo" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <div class="row">
                            <div class="col-md-8" style="margin-top: 0.5cm;">
                                <div class="form-group">
                                    <label for="username" class="font-weight-bold">Username</label>
                                    <input type="text" name="username" class="form-control" id="username"
                                        placeholder="Enter your username">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="font-weight-bold">Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Enter your Password">
                                </div>
                                <div class="form-group">
                                    <label for="companyname" class="font-weight-bold">Company Name</label>
                                    <input type="companyname" name="companyname" class="form-control" id="companyname"
                                        placeholder="Enter your Company Name">
                                </div>
                                <div class="form-group">
                                    <label for="companytype" class="font-weight-bold">Company Type</label>
                                    <input type="text" name="companytype" class="form-control" id="companytype"
                                        placeholder="Enter your Company Type">
                                </div>
                                <div class="form-group">
                                    <label for="city" class="font-weight-bold">City</label>
                                    <input type="text" name="city" class="form-control" id="city"
                                        placeholder="Enter your city">
                                </div>
                                <div class="form-group">
                                    <label for="contactperson" class="font-weight-bold">Contact Person</label>
                                    <input type="text" name="contactperson" class="form-control" id="contactperson"
                                        placeholder="Enter your Contact Person">
                                </div>
                                <div class="form-group">
                                    <label for="eventcategory" class="font-weight-bold">Event Category</label>
                                    <select class="form-control" name="eventcategory" id="eventcategory">
                                        <option value="">Select your Event Category</option>
                                        <option value="english">lorem ipsum</option>
                                        <option value="spanish">lorem ipsum</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <a class="btn" href="/landingpage/editevent">
                                        <i>Edit Event</i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 text-center" style="margin-top: 1.5cm;">
                                <img src="" alt="Preview" id="imagePreview" class="img-thumbnail; rounded-circle"
                                    style="width: 100px; height: 100px; margin-bottom: 1cm;">
                                <div>
                                    <input type="file" class="form-control-file" style="margin-left: 30px;"
                                        id="imageInput" accept=".img, .png">
                                    <p class="font-weight-light;" style="font-size: small;">Image Size: max. 1
                                        MB
                                        <br>Image Format: .JPEG, .PNG</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-danger"
                                style="margin-top: 0.5cm; transform: scale(1.2);" value="Simpan">Save</button>
                        </div>
                    </form>
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
