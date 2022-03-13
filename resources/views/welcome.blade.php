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
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div>
                <h3><a href="{{ url('/') }}"><i class="large material-icons">directions_car</i>&nbsp;&nbsp;Car 4 Use
                        Service</a></h3>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="index.html">Regna</a></h1>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Car Rental</a></li>
                    <li class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal"><a
                            href="#"><span><i class="large material-icons">account_circle</i>&nbsp;&nbsp;Log In</span>
                        </a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เข้าสู่ระบบ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3 mt-3">
                            <label class="input-group-text" for="email"><i class="material-icons">email</i></label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="อีเมลล์"
                                required>
                        </div>
                        <div class="input-group mb-3 mt-3">
                            <label class="input-group-text" for="password"><i
                                    class="material-icons">lock_open</i></label>
                            <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน"
                                required>

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success"
                        style="background-color: rgb(82, 161, 135);">เข้าสู่ระบบ</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Every Journey You Can Count On Us</h1>
            <br>
            <h2>Drivemate, Thailand's number 1 online car rental app.Car ownership options Rent a car daily or monthly
            </h2>
            <br>
            <a href="{{ route('Register') }}" class="btn-get-started">Register
            </a>
        </div>
    </section><!-- End Hero Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3 class="section-title">Car Rental</h3><br>
            </div>

            <center>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ประเภทรถเช่า
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="#">Honda</a></li>
                        <li><a class="dropdown-item" href="#">Mazda</a></li>
                        <li><a class="dropdown-item" href="#">Nissan</a></li>
                        <li><a class="dropdown-item" href="#">Mazda</a></li>
                        <li><a class="dropdown-item" href="#">Mercedes-Benz</a></li>
                        <li><a class="dropdown-item" href="#">BMW</a></li>
                    </ul>
                </div>
            </center>
            <br>

            <d class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">


                @foreach ($car as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-Honda">
                        <img src="{{ url($item->car_image) }}" class="img-fluid" alt="" width="100%"
                            height="100%">
                        <div class="portfolio-info">


                            <!-- Button trigger modal -->
                            <center> <button type="button" class="button button4" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Select
                                </button></center>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach











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
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
