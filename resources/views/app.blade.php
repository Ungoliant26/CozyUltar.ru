<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('img/pages/home/cthulhuIco2.jpg') }}" type="image/x-icon">

{{--    <link rel="Stylesheet" type="text/css" href="{{ asset('css/xo.css') }}"/>--}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <title>
        @yield('title')
    </title>
</head>
<body>

@yield('content')

<script type="text/javascript" src="{{ asset('js/jq.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/index.js') }}"></script>

</body>
</html>
