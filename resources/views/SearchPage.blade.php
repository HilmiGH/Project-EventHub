<!-- Menghubungkan dengan view template master -->
@extends('main')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
    <div class="container" style="padding-right:10rem; min-height: 800px">
        {{-- Filter --}}
        <div style="position: absolute; right: 1rem; margin-top: 7rem">
            <div class="filter-container" style="width:215px; background-color: #D9D9D9; border-radius: 38px">
                <div class="filter-body" style="padding-top: 10px; padding-left: 20px; padding-right: 20px; padding-bottom: 30px">
                    <form action="{{ route('filter') }}" method="GET">
                        <!-- Add the search term as a hidden input field -->
                        <input type="hidden" name="search" value="{{ request('search') }}">
                        <h4 style=" text-align: center;">
                            Filter
                        </h4>
                        <div style="margin-top: 0.75rem; margin-bottom: 0.5rem; font-weight: 600">
                            Category
                        </div>
                        <div class="" style="position: relative; display: block;">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="mcCheckbox" name="MC" value="2">
                                <label class="custom-control-label" for="mcCheckbox">MC</label>
                            </div>
                            <div class="" style="position: relative;
                                display: block;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="eventCheckbox" name="Event" value="3">
                                    <label class="custom-control-label" for="eventCheckbox">Event</label>
                                </div>
                            </div>
                            <div style="margin-top: 1rem; margin-bottom: 0.5rem; font-weight: 600">
                                Location
                            </div>
                            <select name="Location" class="custom-select">
                                <option value="0" selected>Select the location</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city }}">{{ $city }}</option>
                                @endforeach
                            </select>
                            <div style="margin-top: 1rem; margin-bottom: 0.5rem; font-weight: 600">
                                Price
                            </div>
                            <label>Maximum Price</label>
                            <div class="input-group input-group-sm mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="filter-maximum-price">Rp</span>
                                </div>
                                <input type="text" class="form-control" name="max_price" aria-label="maximum price filter" aria-describedby="filter-maximum-price">
                            </div>
                            <label>Minimum Price</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="filter-minimum-price">Rp</span>
                                </div>
                                <input type="text" class="form-control" name="min_price" aria-label="minimum price filter" aria-describedby="filter-minimum-price">
                            </div>
                            <div style="margin-top: 1rem; margin-bottom: 0.5rem; font-weight: 600">Date</div>
                            <div class="form-group">
                                <input type="date" class="form-control" name="date_filter" value="{{ request('date_filter') }}">
                            </div>
                            <div style="margin-top: 1rem; margin-bottom: 0.5rem; font-weight: 600">Event Type</div>
                            <div class="" style="position: relative; display: block;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="onlineCheckbox" name="eventType" value="Online">
                                    <label class="custom-control-label" for="onlineCheckbox">Online</label>
                                </div>
                            </div>
                            <div class="" style="position: relative; display: block;">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="offlineCheckbox" name="eventType" value="Offline">
                                    <label class="custom-control-label" for="offlineCheckbox">Offline</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger mt-3">
                                Filter
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row"  style="margin-top:40px; margin-bottom:30px">
            <div class="row"  style="margin-top:110px; margin-bottom:30px">
            @foreach ($akunmc as $info_akun)
            @if ($akunCounter>=20)
                @break
            @endif
            <div class="col-md-3" style="margin-bottom: 3rem;">
                <div class="card" style="width:200px; min-height: 32rem;">
                    <img class="card-img-top" src= {{ asset('img/Portrait.png') }} alt="Card image" style="width:100%;">
                    <div class="card-body" style="margin-bottom: 20px; display: grid;">
                        <h4 class="card-title">{{ $info_akun->col1 }}</h4>
                        <p class="card-text">{{ $info_akun->col3 }}</p>
                        <p class="card-text">{{ $info_akun->col4 .' '. $info_akun ->col5}}</p>
                        {{-- <h4 class="card-title">{{ $info_akun->mcUsername }}</h4>
                        <p class="card-text">{{ $info_akun->mcCity }}</p>
                        <p class="card-text">Rp {{ $info_akun->mcPriceMin .' - '. $info_akun ->mcPriceMax}}</p> --}}
                        <a href="#" class="btn btn-danger"> {{ $info_akun->col6 }} </a>
                    </div>
                </div>
            </div>
            @php
                $akunCounter++;
            @endphp
            @endforeach
        </div>
        <div class="" style="position: relative; left: 42.5%; right: 57.5%;">
            {{ $akunmc->links() }}
        </div>
        </div>
    </div>
    <div class="" style="position: relative; left: 42.5%; right: 57.5%;">
        {{ $akunmc->appends(request()->except('page'))->links() }}
    </div>
</div>
@endsection
