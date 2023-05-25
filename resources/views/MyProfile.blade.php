@extends('main')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman MyProfile')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')

    <div class="container" style="margin-top:110px; margin-bottom:30px">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8" style="padding-bottom: 4cm;">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group;">
                            <H4>My Profile</H4>
                        </div>
                        <div class="progress" style="height: 1px">
                            <div class="progress-bar bg-dark" style="width:100%"></div>
                        </div>
                        <form class="rounded-circle" action="/EditProfile/update" method="post">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                            <div class="row">
                                <div class="col-md-8" style="margin-top: 0.5cm;">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Enter your username">
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname">Full Name</label>
                                        <input type="text" name="nama" class="form-control" id="fullname"
                                            placeholder="Enter your full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="alamat" class="form-control" id="email"
                                            placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone"
                                            placeholder="Enter your phone number">
                                    </div>
                                    <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <input type="text" class="form-control" id="instagram"
                                            placeholder="Enter your Instagram username">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city"
                                            placeholder="Enter your city">
                                    </div>
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob">
                                    </div>
                                    <div class="form-group">
                                        <label for="language">Language</label>
                                        <select class="form-control" id="language">
                                            <option value="">Select your language</option>
                                            <option value="english">English</option>
                                            <option value="spanish">Spanish</option>
                                            <option value="french">French</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="specialization">Specialization</label>
                                        <input type="text" class="form-control" id="specialization"
                                            placeholder="Enter your specialization">
                                    </div>
                                    <div class="form-group">
                                        <label for="price-range">Price Range</label>
                                        <input type="text" class="form-control" id="price-range"
                                            placeholder="Enter your price range">
                                    </div>
                                    <div class="form-group">
                                        <label for="experience">Experience</label>
                                        <textarea class="form-control" id="experience" rows="3"
                                            placeholder="Enter your experience"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center" style="margin-top: 1.5cm;">
                                    <img src="profile.jpg" alt="Profile" class="rounded-circle"
                                        style="width: 100px; height: 100px; margin-bottom: 1cm;">
                                    <div>
                                        <h5>choose image</h5>
                                        <p class="font-weight-light;" style="font-size: small;">Image Size: max. 1
                                            MB
                                            <br>Image Format: .JPEG, .PNG</p>
                                    </div>
                                    <button type="submit" class="btn btn-danger" style="margin-top: 1cm;"
                                        value="Simpan">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- variabel biasa --}}
	{{-- <p>Nama : {{ $nama }}</p> --}}

    {{-- aray --}}
    {{-- <p>Rating</p>
	<ul>

		@foreach($rating as $r)

		<li>{{ $r }}</li>

		@endforeach

	</ul> --}}

@endsection
