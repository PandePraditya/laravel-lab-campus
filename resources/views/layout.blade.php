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
    <div class="d-flex overflow-hidden">    
        @include('component.sidebar')
        
        <div class="container-fluid p-3 m-2">
            
            @yield('content')

        </div>
        @include('component.footer')
    </div>
    <!-- JS bootstrap.bundle.js -->
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>