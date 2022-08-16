<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/dashboard.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
    <link rel="icon" type="image/jpg" href="{{asset('assets/images/logo/favicon.png')}}">
</head>
<body>
    <div class="container-fluid dashboard">
        <div class="d-flex align-items-start">
            @include('components.admin.sidebar')

            <div class="col-md-10">
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        CKEDITOR.replace('content');
    </script>
</body>
</html>