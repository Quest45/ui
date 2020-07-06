<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Meta -->
        <meta name="description" content="UNIVINFO - description">
        <meta name="author" content="GTEA">
    
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
        <title>UNIVINFO - @yield('title')</title>
    
        <!-- vendor css -->
        <link rel="stylesheet" href="{{ asset('js/fortawesome/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('js/ionicons/css/ionicons.min.css') }}">
    
        <!-- template css -->
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div>
            @yield('content')
        </div>
    </body>
</html>
