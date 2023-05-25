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
        <div style="position: relative; float: right; height: 10rem; left: 1.5rem">
            <div style="position: absolute">
                <div class="filter-container" style="width:215px; background-color: #D9D9D9; border-radius: 38px">
                    <div class="filter-body" style="padding-top: 10px; padding-left: 20px; padding-right: 20px; padding-bottom: 30px">
                        <form action="">
                            <h4 style=" text-align: center;"> Filter</h4>
                            {{-- <div style="margin-top: 0.75rem; margin-bottom: 0.5rem; font-weight: 600">Category</div>
                            @foreach ($collection as $item)
                                <div class="" style="position: relative;
                                display: block;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="mcCheckbox" name="id">
                                        <label class="custom-control-label" for="mcCheckbox">MC</label>
                                    </div>
                                </div>
                                <div class="" style="position: relative;
                                display: block;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="eventCheckbox" name="event">
                                        <label class="custom-control-label" for="eventCheckbox">Event</label>
                                    </div>
                                </div>
                            {{-- @endforeach  --}}
                            <div style="margin-top: 1rem; margin-bottom: 0.5rem; font-weight: 600">Location</div>
                            {{-- @foreach ($collection as $item)     --}}
                                <select name="location" class="custom-select">
                                    <option selected>Select the location</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="fiat">Surabaya</option>
                                    <option value="audi">Semarang</option>
                                </select>
                            {{-- @endforeach  --}}
                            <div style="margin-top: 1rem; margin-bottom: 0.5rem; font-weight: 600">Price</div>
                            <label>Maximum Price</label>
                            <div class="input-group input-group-sm mb-1">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="filter-maximum-price">Rp</span>
                                </div>
                                <input type="text" class="form-control" aria-label="maximum price filter" aria-describedby="filter-maximum-price">
                            </div>
                            <label>Minimum Price</label>
                            <div class="input-group input-group-sm">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="filter-minimum-price">Rp</span>
                                </div>
                                <input type="text" class="form-control" aria-label="minimum price filter" aria-describedby="filter-minimum-price">
                            </div>
                            <div style="margin-top: 1rem; margin-bottom: 0.5rem; font-weight: 600">Date</div>
                            <div class="form-group">
                                <input type="date" class="form-control" id="filter-date">
                              </div>
                            <div style="margin-top: 1rem; margin-bottom: 0.5rem; font-weight: 600">Event Type</div>
                            {{-- @foreach ($collection as $item)     --}}
                                <div class="" style="position: relative;
                                display: block;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="entertainmentCheckbox" name="filter-entertainment">
                                        <label class="custom-control-label" for="entertainmentCheckbox">Entertainment</label>
                                    </div>
                                </div>
                                <div class="" style="position: relative;
                                display: block;">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="educationCheckbox" name="filter-education">
                                        <label class="custom-control-label" for="educationCheckbox">Education</label>
                                    </div>
                                </div>
                            {{-- @endforeach  --}}
                            <button type="submit" class="btn btn-danger mt-3">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row"  style="margin-top:110px; margin-bottom:30px">
            <div class="col-md">
                <div class="card" style="width:200px; margin-bottom: 2rem">
                    <img class="card-img-top" src="profile.JPG" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and
                            engineer</p>
                        <a href="#" class="btn btn-danger">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" style="width:200px; margin-bottom: 2rem">
                    <img class="card-img-top" src="profile.JPG" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and
                            engineer</p>
                        <a href="#" class="btn btn-danger">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" style="width:200px; margin-bottom: 2rem">
                    <img class="card-img-top" src="profile.JPG" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and
                            engineer</p>
                        <a href="#" class="btn btn-danger">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" style="width:200px; margin-bottom: 2rem">
                    <img class="card-img-top" src="profile.JPG" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and
                            engineer</p>
                        <a href="#" class="btn btn-danger">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" style="width:200px; margin-bottom: 2rem">
                    <img class="card-img-top" src="profile.JPG" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and
                            engineer</p>
                        <a href="#" class="btn btn-danger">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" style="width:200px; margin-bottom: 2rem">
                    <img class="card-img-top" src="profile.JPG" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and
                            engineer</p>
                        <a href="#" class="btn btn-danger">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" style="width:200px; margin-bottom: 2rem">
                    <img class="card-img-top" src="profile.JPG" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and
                            engineer</p>
                        <a href="#" class="btn btn-danger">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card" style="width:200px; margin-bottom: 2rem">
                    <img class="card-img-top" src="profile.JPG" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">John Doe</h4>
                        <p class="card-text">Some example text some example text. John Doe is an architect and
                            engineer</p>
                        <a href="#" class="btn btn-danger">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
