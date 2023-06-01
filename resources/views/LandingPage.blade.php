<!-- Menghubungkan dengan view template master -->
@extends('main')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<div class="container">
    <div class="container-fluid mt-5">
        <div class="row"  style="margin-top:110px; margin-bottom:30px">
            @foreach ($akunumum as $info_akun)
            @if ($akunCounter>=4)
                @break
            @endif
            <div class="col-md-3" style="margin-bottom: 10px;">
                <div class="card" style="width:200px;">
                    <img class="card-img-top" src="img/Portrait.png" alt="Card image" style="width:100%;">
                    <div class="card-body" style="margin-bottom: 20px">
                        <h4 class="card-title">{{ $info_akun->umumUsername }}</h4>
                        <p class="card-text">{{ $info_akun->umumCity }}</p>
                        <a href="#" class="btn btn-danger">See Profile</a>
                    </div>
                </div>      
            </div>
            @php
                $akunCounter++;
            @endphp
            @endforeach
        </div>
    </div>
</div>
@endsection
