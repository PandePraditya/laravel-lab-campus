<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('icons/bootstrap-icons/font/bootstrap-icons.css') }}">
    <title> @yield('title') </title>
</head>

<body>
    
    <div class="container-fluid vh-100 p-0 overflow-hidden">
        @include('component.header')
        
        @yield('content')
    </div>

    <!-- JS bootstrap.bundle.js -->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>

</html>