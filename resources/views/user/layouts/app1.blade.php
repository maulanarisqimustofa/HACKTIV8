<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>YOURNAME</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('public/user/assets/img/sunburst.png') }}" rel="icon">
    

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('public/user/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/user/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('public/user/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
   <br>
        
        <div>
            @yield('main-content')
        </div>
    
  
    <!-- Vendor JS Files -->
<script src="{{ asset('public/user/assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('public/user/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('public/user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('public/user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('public/user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('public/user/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('public/ser/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('public/user/assets/js/main.js') }}"></script>
</body>


</html>