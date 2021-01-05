<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>IT Telkom Purwokerto</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Load Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Load Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

    <!-- Load File Vendor CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet" />

    <!-- Load File Template Main CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <!-- Header -->
    <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>IT Telkom Purwokerto</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
      
      <!-- .nav-menu -->
      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{route ('index') }}">Home</a></li>
          <li><a href="#about">Mahasiswa</a></li>
          <li><a href="{{route ('about') }}">About</a></li>
        </ul>
      </nav>

    </div>
    </header><!-- End #header -->

    <!-- Content -->
    <main id="main">
        <!-- konten ditampilkan menggunakan yield -->
        @yield('content')
    </main>

    <!-- Load File Vendor JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>

    <!-- Load File Template Main JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>