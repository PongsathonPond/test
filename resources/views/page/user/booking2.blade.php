<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ระบบการจัดการเช่ารถยนต์ บริษัท Car 4 Use Service</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/service.png" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="/../assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div>
                <h3><a href="{{ route('redirect') }}"><i class="large material-icons">directions_car</i>&nbsp;&nbsp;Car
                        4 Use Service</a></h3>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="index.html">Regna</a></h1>-->
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }} " class="dropdown-item" onclick="event.preventDefault();
                            this.closest('form').submit();">


            </form>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Car Rental</a></li>
                    <li class="nav-link scrollto">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }} " class="large material-icons" onclick="event.preventDefault();
                        this.closest('form').submit();"><span><i
                                        class="large material-icons">account_circle</i>&nbsp;&nbsp;LOGOUT</span>
                            </a>

                        </form>





                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->


    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Every Journey You Can Count On Us</h1>
            <br>
            <h2>Drivemate, Thailand's number 1 online car rental app.Car ownership options Rent a car daily or monthly
            </h2>
            <br>
            {{-- <a href="{{ route('Register') }}" class="btn-get-started">Register
            </a> --}}
        </div>
    </section><!-- End Hero Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3 class="section-title">Car Rental</h3><br>
            </div>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    บันทึกข้อมูลเรียบร้อย
                </div>
            @endif
            <div class="container">

                <form action="{{ route('addcar2') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">


                        <div class="col-6">

                            <input type="hidden" class="form-control" name="car_id" value="{{ $book->id }}">


                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">ชื่อ</label>
                                <input type="text" class="form-control" name="fname">
                            </div>


                        </div>

                        <div class="col-6">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">นามสกุล</label>
                                <input type="text" class="form-control " name="lname">
                            </div>


                        </div>


                        <div class="col-6">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">เวลาเริ่มต้น</label>
                                <input type="text" class="form-control" name="start">
                            </div>


                        </div>


                        <div class="col-6">

                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">เวลาสิ้นสุด</label>
                                <input type="text" class="form-control" name="end">
                            </div>


                        </div>
                        <button type="submit" class="btn btn-success"> บันทึกรายการ</button>
                    </div>
                </form>
            </div>




        </div>


        </div>

    </section><!-- End Portfolio Section -->
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">

            </div>
        </div>

        <div class="container">
            <div class="copyright">
                Copyright &copy; 2021 - Car 4 Use Service
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/../assets/vendor/purecounter/purecounter.js"></script>
    <script src="/../assets/vendor/aos/aos.js"></script>
    <script src="/../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="/../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="/../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/../assets/js/main.js"></script>

</body>

</html>
