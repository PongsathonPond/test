<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

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
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container d-flex justify-content-between align-items-center">

            <div>
                <h3><a href="{{ url('/') }}"><i class="large material-icons">directions_car</i>&nbsp;&nbsp;Car
                        4 Use Service</a></h3>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="index.html">Regna</a></h1>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="{{ url('/') }}"">Home</a></li>
                    <li><a class="  nav-link scrollto " href="{{ url('/') }}">Car Rental</a></li>
                    <li class="nav-link scrollto" data-bs-toggle="modal" data-bs-target="#exampleModal"><a
                            href="#"><span><i class="large material-icons">account_circle</i>&nbsp;&nbsp;Log In</span>
                        </a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เข้าสู่ระบบ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
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


        <center>
            <section class="breadcrumbs">
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <img src="assets/img/profile.png" width="30%" height="20%"><br>&nbsp;
                        <fieldset>
                            <legend><b>Register</b></legend><br>
                        </fieldset>
                    </div>





                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input-group mb-3 mt-3">
                            <label class="input-group-text" for="idname"><i
                                    class="material-icons">assignment</i></label>
                            <input type="text" class="form-control" name="idname" placeholder="เลขบัตรประชาชน"
                                required>
                        </div>

                        <div class="input-group mb-3 mt-3">
                            <input type="text" class="form-control" name="fname" placeholder="ชื่อจริง" required>
                        </div>

                        <div class="input-group mb-3 mt-3">
                            <input type="text" class="form-control" name="lname" placeholder="นามสกุล" required>
                        </div>

                        <div class="input-group mb-3 mt-3">
                            <label class="input-group-text" for="sex" required><i class="material-icons">wc</i></label>
                            <select class="form-select" name="sex" required>
                                <option selected>เพศ</option>
                                <option value="1">ชาย</option>
                                <option value="2">หญิง</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="อายุ" name="age"
                                        aria-label="age" required>
                                    <label class="input-group-text">ปี</label>
                                </div>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" aria-label="tel"
                                    name="phone" required>
                            </div>
                        </div>

                        <br>

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" name="address"
                                required></textarea>
                            <label for="address">ที่อยู่</label>
                        </div>


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

                        <div class="input-group mb-3 mt-3">
                            <label class="input-group-text" for="password_confirmation"><i
                                    class="material-icons">lock_open</i></label>
                            <input type="password" class="form-control" name="password_confirmation"
                                placeholder="ยืนยันรหัสผ่าน" required>
                        </div>


                        <br>
                        <div class="col-10">
                            <button type="submit" class="btn btn-success btn-lg">ตกลง</button>&nbsp;&nbsp;
                            <button type="reset" value="Reset" class="btn btn-dark btn-lg">ยกเลิก</button>
                        </div>








                </div>
                </form>

                </div>
            </section>
        </center><!-- End Portfolio Details Section -->
    </main>

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
