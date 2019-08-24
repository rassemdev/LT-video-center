<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}" />

        <title>Video Center</title>

        <script src="https://use.fontawesome.com/24adfaab41.js"></script>
    </head>
    <body>
        @yield('content')

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/slick.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>