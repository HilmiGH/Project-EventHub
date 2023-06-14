@extends('main')

@section('judul_halaman', 'Halaman Home')

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
    <div class="container">
        <div class="container-fluid mt-5">
            <div class="row" style="margin-top: 110px; margin-bottom: 30px">
                <div class="col-12 d-flex content-between align-items-center">
                    <h3 style="margin: 0; display: inline-block;">Top MC</h3>
                    <a href="/TopMC" style="opacity: 50%; margin: 10px; display: inline-block;">see all</a>
                </div>
                @foreach ($akunmc as $info_akunmc)
                    @if ($akunCounter >= 4)
                    @break
                @endif
                <div class="col-md-3" style="margin-bottom: 10px; margin-top: 13px">
                    <div class="card"
                        style="width: 200px;min-height: 22rem; border-radius: 15px; box-shadow: 2px 2px 2px darkgray;">
                        <img class="card-img-top" src="img/Portrait.png" alt="Card image" style="width: 100%;">
                        <div class="card-body" style="margin-bottom: 20px; display: flex; flex-direction: column">
                            <h4 class="card-title" style="text-align: center;">{{ $info_akunmc->mcUsername }}</h4>
                            <p class="card-text"style="text-align: center;">{{ $info_akunmc->mcCity }}</p>
                            <a href="{{ route('profile.show', $info_akunmc->id) }}" class="btn btn-danger"
                                style="border-radius: 15px; height: 38.5px; margin-top: auto">See Profile</a>
                        </div>
                    </div>
                </div>
                @php
                    $akunCounter++;
                @endphp
            @endforeach
        </div>
    </div>

    <div class="container">
        <div class="container-fluid mt-5">
            <div class="row" style="margin-top: 50px; margin-bottom: 30px">
                <div class="col-12 d-flex content-between align-items-center">
                    <h3 style="margin: 0; display: inline-block;">Upcoming Events</h3>
                    <a href="/UpcomingEvent" style="opacity: 50%; margin: 10px; display: inline-block;">see all</a>
                </div>
                @foreach ($akunevents as $info_akunevent)
                    @if ($eventCounter >= 4)
                    @break
                @endif
                <div class="col-md-3" style="margin-bottom: 10px; margin-top: 13px">
                    <div class="card"
                        style="width: 200px;min-height: 25rem; border-radius: 15px; box-shadow: 2px 2px 2px darkgray;">
                        <img class="card-img-top" src="img/Portrait.png" alt="Card image" style="width: 100%;">
                        <div class="card-body" style="margin-bottom: 20px; display: flex; flex-direction: column">
                            <h4 class="card-title" style="text-align: center;">{{ $info_akunevent->eventName }}</h4>
                            <p class="card-text"style="text-align: center;">{{ $info_akunevent->eventLocation }}</p>
                            <a href="{{ route('event.show', $info_akunevent->id) }}" class="btn btn-danger"
                                style="border-radius: 15px; height: 38.5px; margin-top: auto">See Profile</a>
                        </div>
                    </div>
                </div>
                @php
                    $eventCounter++;
                @endphp
            @endforeach
        </div>
    </div>
</div>
    </div>







@endsection
