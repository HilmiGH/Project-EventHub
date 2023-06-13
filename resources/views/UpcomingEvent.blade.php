<!-- Menghubungkan dengan view template master -->
@extends('main')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
<style>
    .card:hover {
        transform: translateY(-5px);
        border-color: red;
    }
    .filterBtn:hover {
        transform: translateY(-2px);
    }
    .truncate-text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    }
</style>
    <div class="container" style="padding-right:10rem; min-height: 800px">
        {{-- Filter --}}
        <div style="position: absolute; right:3.5rem;">
            <div class="filter-container" style="width:215px; background-color: #D9D9D9; border-radius: 38px; box-shadow: 2px 2px 2px darkgray;">
                <div class="filter-body" style="padding-top: 10px; padding-left: 20px; padding-right: 20px; padding-bottom: 30px;">
                    <form action="{{ route('filter') }}" method="GET">
                        <!-- Add the search term as a hidden input field -->
                        <input type="hidden" name="search" value="{{ request('search') }}">
                        <h4 style=" text-align: center;">
                            Filter
                        </h4>
                        <div class="" style="position: relative; display: block;">

                            <div style="margin-top: 1rem; margin-bottom: 0.5rem; font-weight: 600">
                                Location
                            </div>
                            <select name="Location" class="custom-select" style="border-width: 2px; border-color: red; ">
                                <option value="0" selected>Select the location</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city }}">{{ $city }}</option>
                                @endforeach
                            </select>

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
                            <button type="submit" class="btn btn-danger mt-3 filterBtn">
                                Filter
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row"  style="margin-top:110px; margin-bottom:30px">
            @foreach ($events as $info_akun)
            @if ($akunCounter>=20)
                @break
            @endif
            <div class="col-md-3" style="margin-bottom: 3rem;">
                <div class="card" style="width:200px; min-height: 24rem; border-radius: 15px">
                    <img class="card-img-top" style="border-top-right-radius: 15px; border-top-left-radius: 15px" src= {{ asset('img/Portrait.png') }} alt="Card image" style="width:100%;">
                    <div class="card-body" style="display: grid;">
                        <h4 class="card-title truncate-text" style="text-align: center;">{{ $info_akun->col1 }}</h4>
                        <p class="card-text" style="text-align: center;">{{ $info_akun->col3 }}</p>
                        <p class="card-text" style="text-align: center;">{{ $info_akun->col4 .' '. $info_akun ->col5}}</p>
                        {{-- <h4 class="card-title">{{ $info_akun->mcUsername }}</h4>
                        <p class="card-text">{{ $info_akun->mcCity }}</p>
                        <p class="card-text">Rp {{ $info_akun->mcPriceMin .' - '. $info_akun ->mcPriceMax}}</p> --}}
                        <a href="/FullProfileEvent" class="btn btn-danger" style="border-radius: 15px"> {{ $info_akun->col6 }} </a>
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
    <div class="" style="display: flex; justify-content: center; align-content: center">
        <div class="" style="margin-right: 10rem; margin-bottom: 2rem">
            {{ $events->appends(request()->except('page'))->links() }}
        </div>
    </div>
</div>
<script>
    // Truncate the text when the page loads
document.addEventListener('DOMContentLoaded', function() {
  var cardTitles = document.querySelectorAll('.card-title');
  cardTitles.forEach(function(title) {
    truncateText(title, 3);
  });
});

// Truncate the text based on the specified number of lines
function truncateText(element, lines) {
  var lineHeight = parseInt(getComputedStyle(element).lineHeight, 10);
  var maxHeight = lineHeight * lines;

  if (element.offsetHeight > maxHeight) {
    while (element.offsetHeight > maxHeight) {
      element.textContent = element.textContent.replace(/\W*\s(\S)*$/, '...');
    }
  }
}
</script>
@endsection
