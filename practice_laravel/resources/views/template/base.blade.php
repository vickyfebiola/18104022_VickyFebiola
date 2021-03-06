<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Load cdn CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <title>IT Telkom Purwokerto</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Load Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Load Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Lato:400,300,700,900" rel="stylesheet">

    <!-- Load File Vendor CSS -->
    <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="../../asset/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet" />

    <!-- Load File Template Main CSS -->
    <link href="../../assets/css/style.css" rel="stylesheet" />
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
                    <!-- mengarahkan sesuai ke url route nya -->
                  <li class="active"><a href="{{route ('index') }}">Home</a></li>
                  <li><a href="{{route ('student.index') }}">Mahasiswa</a></li>
                  <li><a href="{{route ('student.data') }}">DataTable</a></li>
                  <li><a href="{{route ('about') }}">About</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Content -->
    <main id="main">
        <!-- konten ditampilkan menggunakan yield -->
        @yield('content')
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                Designed by <a href="https://github.com/vickyfebiola">Vicky Febiola</a>
            </div>
        </div>
    </footer><!-- End #footer -->

    <!-- Load File Vendor JS -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../../assets/vendor/php-email-form/validate.js"></script>
    <script src="../../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="../../assets/vendor/counterup/counterup.min.js"></script>
    <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../assets/vendor/venobox/venobox.min.js"></script>

    <!-- Load JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

    <!-- Load File Template Main JS -->
    @yield('script')
    <script src="../../assets/js/main.js"></script>
  </body>
</html>