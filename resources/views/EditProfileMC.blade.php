@extends('main')

@section('judul_halaman', 'Halaman EditProfile MC')

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

    <div> </div>



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
                        <form class="rounded-circle" action="/landingpage/myprofilemc" method="post"
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
                                        <label for="fullname" class="font-weight-bold">Full Name</label>
                                        <input type="text" name="name" class="form-control" id="fullname"
                                            placeholder="Enter your full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="font-weight-bold">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="font-weight-bold">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Enter your phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="instagram" class="font-weight-bold">Instagram</label>
                                        <input type="text" name="instagram" class="form-control" id="instagram"
                                            placeholder="Enter your Instagram username">
                                    </div>
                                    <div class="form-group">
                                        <label for="city" class="font-weight-bold">City</label>
                                        <input type="text" name="city" class="form-control" id="city"
                                            placeholder="Enter your city">
                                    </div>
                                    <div class="form-group">
                                        <label for="dob" class="font-weight-bold">Date of Birth</label>
                                        <input type="date" name="dob" class="form-control" id="dob">
                                    </div>
                                    <div class="form-group">
                                        <label for="language" class="font-weight-bold">Language</label>
                                        <select class="form-control" name="language" id="language">
                                            <option value="">Select your language</option>
                                            <option value="english">English</option>
                                            <option value="spanish">Indonesia</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="specialization" class="font-weight-bold">Specialization</label>
                                        <input type="text" name="specialization" class="form-control" id="specialization"
                                            placeholder="Enter your specialization">
                                    </div>
                                    <div class="form-group">
                                        <label for="price-range" class="font-weight-bold">Price Range</label>
                                        <input type="text" name="price-range" class="form-control" id="price-range"
                                            placeholder="Enter your price range (Rp. x.xxx - Rp. x.xxx)">
                                    </div>
                                    <div class="form-group">
                                        <label for="experience" class="font-weight-bold">Experience</label>
                                        <textarea class="form-control" name="experience" id="experience" rows="3"
                                            placeholder="Enter your experience"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-4 text-center" style="margin-top: 1.5cm;">
                                    <img src="" alt="Preview" id="imagePreview"
                                        class="img-thumbnail; rounded-circle"
                                        style="width: 100px; height: 100px; margin-bottom: 1cm;">
                                    <div>
                                        <input type="file" class="form-control-file" style="margin-left: 30px;"
                                            id="imageInput" accept=".img, .png">
                                        <p class="font-weight-light;" style="font-size: small;">Image Size: max. 1
                                            MB
                                            <br>Image Format: .JPEG, .PNG
                                        </p>
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

                reader.onload = function(e) {
                    $('#imagePreview').attr('src', e.target.result).show();
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        // Menghubungkan fungsi dengan event "change" pada input file
        $('#imageInput').change(function() {
            readURL(this);
        });
    </script>


@endsection
