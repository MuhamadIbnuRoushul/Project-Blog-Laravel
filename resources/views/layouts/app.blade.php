<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap Css dan Javascript --}}
    <link rel="stylesheet" href="{{ asset("bootstrap-5/css/bootstrap.min.css") }}">
    <script src="{{ asset("bootstrap-5/js/bootstrap.bundle.min.js") }}"></script>

    <style>
        .blog{
            padding: 10px;
        }
    </style>

    <title> @yield('title') </title>
</head>
<body>
    @include('layouts.app.header')

    <div class="container">
        @yield('content')

        @include('layouts.app.footer')
    </div>   
</body>
</html>