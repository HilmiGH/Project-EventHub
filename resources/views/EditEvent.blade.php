@extends('main')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman EditProfile')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')

    <div class="container" style="margin-top:110px; margin-bottom:30px">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8" style="padding-bottom: 4cm;">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group;">
                            <H4>Edit Event</H4>
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
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Enter your password">
                                    </div>
                                    <div class="form-group">
                                        <label for="eventname">Event Name</label>
                                        <input type="text" name="eventname" class="form-control" id="eventname"
                                            placeholder="Enter your event name">
                                    </div>
                                    <div class="form-group">
                                        <label for="eventtype">Type Event</label>
                                        <select class="form-control" id="eventtype">
                                            <option value="">Select your event type</option>
                                            <option value="english">1</option>
                                            <option value="spanish">2</option>
                                            <option value="french">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input type="text" class="form-control" id="Location"
                                            placeholder="Enter your location">
                                    </div>
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob">
                                    </div>
                                    <div class="form-group">
                                        <label for="mcnumber">Number of MC</label>
                                        <select class="form-control" id="mcnumber">
                                            <option value="">Select your MC number</option>
                                            <option value="english">1</option>
                                            <option value="spanish">2</option>
                                            <option value="french">3</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Event Description</label>
                                        <textarea class="form-control" id="experience" rows="3"
                                        ></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 text-center" style="margin-top: 1.5cm;">
                                    <img src="img/Portrait.png" alt="Profile" class="rounded-circle"
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

    {{-- <form action="/EditProfile/update" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        Nama :
        <input type="text" name="nama"> <br />
        Alamat :
        <input type="text" name="alamat"> <br />
        <input type="submit" value="Simpan">
    </form>

    <p>Ini Adalah Halaman Kontak</p>

    <table border="1">
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>malasngoding@gmail.com</td>
        </tr>
        <tr>
            <td>Hp</td>
            <td>:</td>
            <td>0896-0676-7404</td>
        </tr>
    </table> --}}

@endsection
