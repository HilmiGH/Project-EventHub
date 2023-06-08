<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Event_Hub</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <style>
        .btn-container {
            text-align: center;
        }

        .custom-input {
            border: 2px solid black;
            border-radius: 5px;
            padding: 5px;
        }

        .custom-label {
            font-weight: bold;
            color: red;
        }

        .custom-button {
            display: block;
            margin: auto;
            margin-top: 40px;
            text-align: center;
            width: 150px;
            height: 50px;
            border-radius: 50px;
            font-family: serif;
            font-weight: bolder;
            color: aliceblue;
            font-size: x-large;
        }

        .custom-input::placeholder {
            color: #999;
        }

        .custom-text {
            margin-top: 20px;
            text-align: center;
        }

        .custom-text span {
            color: pink;
        }

        .btn-container {
            text-align: center;
            margin-top: 40px;
        }

        .input {
            margin-top: 70px;
        }
    </style>
</head>

<body>
    {{ $slot }}
</body>

</html>
