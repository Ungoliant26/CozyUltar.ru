<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('img/pages/home/cthulhuIco2.jpg') }}" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <title>
        @yield('title')
    </title>
</head>
<body class="background">

@yield('content')

<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('vendors/Parallaxjs/demo/libs/jq.js') }}"></script>
<link rel="Stylesheet" type="text/css" href="{{ asset('vendors/Parallaxjs/demo/libs/xo.css') }}" />

<script src="{{ asset('vendors/Parallaxjs/parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/Parallaxjs/demo/index.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/Parallaxjs/demo/examples.js') }}"></script>
<link rel="Stylesheet" type="text/css" href="{{ asset('vendors/Parallaxjs/demo/index.css') }}" />

</body>
</html>
