﻿<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CarrGo - Ridesharing Taxi HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png"> -->

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="assets/plugins/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="main/css/style.css">
</head>

<body class="theme-2">

    <header class="theme-2">
        <div class="header__upper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__upper--left">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo-main.png" alt=""></a>
                            </div>
                            <div class="search-bar">
                                <form class="form">
                                    <span class="icon icon-left"><i class="fas fa-map-marker-alt"></i></span>
                                    <input class="form-control" type="search" name="search-bar" placeholder="Tell us your location" id="search-bar">
                                    <button class="button button-dark" type="submit"><img src="assets/images/arrow-shape.png" alt=""></button>
                                </form>

                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__upper--right">
                            <nav class="navigation">
                                <ul>
                                    <li><a href="ride-with-cabgo.html">Ride</a></li>
                                    <li><a href="my-driver-dashboard.html">Drive</a></li>
                                    <li><a href="contact-us.html">Help</a></li>
                                    <li><a href="sign-in.html">Sign in</a></li>
                                    <li><a href="contact-us.html"><i class="far fa-envelope"></i></a></li>
                                </ul>
                            </nav>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="media">
                                        <img height="30" width="30" class="mr-3" src="assets/images/partner-img.png" alt="">
                                        <div class="media-body">
                                            <h6 class="m-0">John Doe <i class="fas fa-angle-down"></i></h6>
                                            <p class="m-0">India</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="breadcrumb-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <ol class="breadcrumb">
                        <li><a href="ride-with-cabgo.html">Ride with Carrgo</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="div-padding our-vehicles-div">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="booking-form">
                        <form action="#">
                            <div class="from-group destination">
                                <label for="inputFrom">From</label>
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" name="frominputDestination" placeholder="Select Pickup" id="inputFrom" class="form-control">
                            </div>
                            <div class="from-group destination">
                                <label for="inputDestination">Where to?</label>
                                <i class="fas fa-map-marker-alt"></i>
                                <input type="text" name="desctination" placeholder="Select Destination" id="inputDestination" class="form-control">
                            </div>
                            <div class="payment-options-wrapper">
                                <h2>Payment Method</h2>
                                <div class="from-group payment-options">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment-opts" id="cash-pay" value="option1">
                                        <label class="form-check-label" for="cash-pay">Cash</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment-opts" id="banking-pay" value="option2">
                                        <label class="form-check-label" for="banking-pay">Net Banking</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="payment-opts" id="card-pay" value="option3">
                                        <label class="form-check-label" for="card-pay">Debit Card</label>
                                    </div>
                                </div>
                            </div>

                            <div class="select-car-wrapper">
                                <h2>Selected Car</h2>
                                <div class="selected-car">
                                    <div class="from-group car-options">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="scooter" value="option1">
                                            <label class="form-check-label" for="scooter">
                                                <img src="assets/images/dashboard/car-1.png" alt="car">
                                            </label>
                                            <div class="car-details">
                                                <h4>1x</h4>
                                                <p>Scooter</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="alto" value="option2">
                                            <label class="form-check-label" for="alto">
                                                <img src="assets/images/dashboard/car-2.png" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>2x</h4>
                                                <p>Alto</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="swift" value="option3">
                                            <label class="form-check-label" for="swift">
                                                <img src="assets/images/dashboard/car-3.png" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>3x</h4>
                                                <p>Swift dzire</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="luxury" value="option3">
                                            <label class="form-check-label" for="luxury">
                                                <img src="assets/images/dashboard/car-4.png" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>4x</h4>
                                                <p>Luxury</p>
                                            </div>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="car-opts" id="tourist" value="option3">
                                            <label class="form-check-label" for="tourist">
                                                <img src="assets/images/dashboard/car-5.png" alt="Car">
                                            </label>
                                            <div class="car-details">
                                                <h4>5x</h4>
                                                <p>Tourist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="button button-dark tiny">Book Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ride-map-area">
                        <div id="ride-map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="theme-2">

        <div class="footer-nav-div div-padding theme-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-brand">
                            <a href="index.html"><img src="assets/images/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-nav">
                            <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" class="google-p"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <div class="app-download-box">
                            <a href="#"><img src="assets/images/icon/google-play.jpg" alt="Google play"></a>
                            <a href="#"><img src="assets/images/icon/apple-store.jpg" alt="Apple store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-div theme-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright {{date('Y')}} by Loo Ride Pvt. Ltd. All Right Reserved.</p>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-nav">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </footer>



    <!-- jQuery -->
    <script src="assets/plugins/common/common.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/OwlCarousel/owl.carousel.min.js"></script>
    <script src="assets/plugins/counterup/waypoints.min.js"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>
    <script src="maps/api/js?key=AIzaSyB16sGmIekuGIvYOfNoW9T44377IU2d2Es&sensor=true"></script>
    <script src="assets/plugins/gmap3/gmap3.min.js"></script>
    <!-- custom scripts -->
    <script src="main/js/scripts.js"></script>


</body>

</html>