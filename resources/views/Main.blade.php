<!DOCTYPE html>
<html>

<head>
    <title>EventHub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
		.search-link {
			border: none;
			background: none;
			cursor: pointer;
			font-size: 1.5rem;
			color: #ffffff;
		}

        .form-control {
            border-width: 2px;
            border-color: red;
            border-radius: 30px;
        }
    </style>
</head>

<body style="overflow-x: hidden">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgb(255, 0, 51);">
        <img src={{ asset('img/Header_EventHub_Logo.png') }} alt="Logo" style="height: 20px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="form-inline mx-auto" action="{{ url('search-results/search') }}" style="margin-top: 0.3cm; margin-bottom: 0.3cm;">
                <input class="form-control mr-sm-2" name="search" value="{{ old('search') }}" aria-label="Search" placeholder="Find event or mc here"
                    aria-label="Search" style="width: 15cm">
                <button class="search-link" type="submit"><i class="fas fa-search"></i></button>
            </form>
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="profileDropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src= {{ asset('img/Portrait.png') }} alt="Profile" class="rounded-circle"
                        style="width: 40px; height: 40px;">
                </a>
                <div class="dropdown-menu" aria-labelledby="profileDropdown">
                    {{-- @foreach ($akunumum as $info_akun)
                    <a class="dropdown-item" href="/landingpage">Home</a>
                    <a class="dropdown-item" href="/landingpage/myprofile/{{ $info_akun->umumID }}">My Profile </a>
                    <a class="dropdown-item" href="/landingpage/editprofile/{{ $info_akun->umumID }}">Edit Profile</a>
                    <a class="dropdown-item" href="#" id="logoutDropdown">Logout</a>
                    @break
                    @endforeach --}}
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="text-black text-center py-3" style="background-color: rgb(205, 203, 203);">
        <div class="">
            <div class="row">
                <div class="col-sm-3 footer-logo">
                    <img src= {{ asset('img/Footer_EventHub_Logo.png') }} alt="Logo" style="height: 200px;">
                </div>
                <div class="col-sm-9">
                    <p style="text-align: left; padding-top: 1.3cm;">EventHubCS@gmail.com</p>
                    <p style="text-align: left;">Surabaya, Indonesia</p>
                    <p style="text-align: left;">&copy; 2023 EventHub. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="confirmLogout">Yes</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Menampilkan modal logout saat dropdown item "Logout" ditekan
        document.getElementById('logoutDropdown').addEventListener('click', function() {
            $('#logoutModal').modal('show');
        });

        // Aksi saat tombol "Yes" pada modal logout ditekan
        document.getElementById('confirmLogout').addEventListener('click', function() {
            // Lakukan aksi logout di sini (misalnya: arahkan ke halaman logout)
            window.location.href = "/logout";
        });
    </script>

</body>

</html>
