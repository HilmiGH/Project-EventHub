@extends('main')

@section('judul_halaman', 'Detail Profile')

@section('content')

<div class="container">
    <div class="row" style="margin-top: 10cm">
        <div class="col-md-6 offset-md-3">
            @foreach ($akunmc as $info_akun)
            <p>Username: {{ $info_akun->mcUsername }}</p>
            <p>Full Name: {{ $info_akun->mcFullName }}</p>
            <p>Phone: {{ $info_akun->mcPhone }}</p>
            <p>City: {{ $info_akun->mcCity }}</p>
            <p>Language: {{ $info_akun->mcLanguage }}</p>
            <p>Specialization: {{ $info_akun->mcSpecialization }}</p>
            <p>Experience: {{ $info_akun->mcExperience }}</p>
            <p>Price Range: {{ $info_akun->mcPriceMin }} - {{ $info_akun->mcPriceMax }}</p>
            @endforeach
        </div>
    </div>
</div>

@endsection
