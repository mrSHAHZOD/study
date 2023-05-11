<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jajji Profesor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="/assets/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <img src="/assets/img/logo jp.png" width="90" height="90" alt="lorem">
            <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 25px;">
                <span class="text-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">J</font>
                    <font color="#9C0568">a</font>
                    <font color="blue">j</font>
                    <font color="#06960E">j</font>
                    <font color="#9C0568">i</font><br>
                    <font color="red">P</font>
                    <font color="black">r</font>
                    <font color="#E0D605">o</font>
                    <font color="#33F7EB">f</font>
                    <font color="#EDB426">e</font>
                    <font color="red">s</font>
                    <font color="#26D2ED">s</font>
                    <font color="#A54A4A">o</font>
                    <font color="blue">r</font>
                </span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            @include('layouts.navbar')

        </nav>
    </div>
    <!-- Navbar End -->
    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">

                <img src="assets/img/logo jp.png" width="90" height="90" alt="lorem">
                <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 25px;">
                    <span class="text-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="red">J</font>
                        <font color="#9C0568">a</font>
                        <font color="blue">j</font>
                        <font color="#06960E">j</font>
                        <font color="#9C0568">i</font><br>
                        <font color="red">P</font>
                        <font color="black">r</font>
                        <font color="#E0D605">o</font>
                        <font color="#33F7EB">f</font>
                        <font color="#EDB426">e</font>
                        <font color="red">s</font>
                        <font color="#26D2ED">s</font>
                        <font color="#A54A4A">o</font>
                        <font color="blue">r</font>
                    </span>
                </a>

                <p>Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea dolor et magna dolor, elitr rebum
                    duo est sed diam elitr. Stet elitr stet diam duo eos rebum ipsum diam ipsum elitr.</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-telegram"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Aloqa</h3>
                <div class="d-flex">
                    <h4 class="fa fa-map-marker-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Manzil:</h5>
                        <p>Nomongoniy 25-uy, 1600007</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-envelope text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Email</h5>
                        <p>jajjiPro@example.com</p>
                    </div>
                </div>
                <div class="d-flex">
                    <h4 class="fa fa-phone-alt text-primary"></h4>
                    <div class="pl-3">
                        <h5 class="text-white">Telefon</h5>
                        <p>+998996111300</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Tezkor havolalar</h3>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Bosh sahifa</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Sinflar</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>O'qituvchilar</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Galereya</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Maqolalar</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Aloqa</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h3 class="text-primary mb-4">Shikoyat</h3>
                <form action=" {{ route('complaints') }} " enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <input type="text" name="name" class="form-control border-0 py-4" placeholder="Ismingiz"
                            required="required" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="complaints" class="form-control border-0 py-4" placeholder="Shikoyatni yozing"
                            required="required" />
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block border-0 py-3" type="submit">Yuborish</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, .2);;">
            <p class="m-0 text-center text-white">
                &copy; <a class="text-primary font-weight-bold" href="index.html">Jajji Professor</a>. Barcha huquqlar
                himoyalangan.
                <a class="text-primary font-weight-bold" href="https://htmlcodex.com">IT RISE UP</a>
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/lib/easing/easing.min.js"></script>
    <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/assets/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="/assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="/assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/main.js"></script>
</body>

</html>
