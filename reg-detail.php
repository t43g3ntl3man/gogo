<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gogo Transport</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">

    <link href="assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/prettyphoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel2/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel2/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="assets/plugins/animate/animate.min.css" rel="stylesheet">
    <link href="assets/plugins/swiper/css/swiper.min.css" rel="stylesheet">
    <link href="assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./section.css">
    <!-- Theme CSS -->
    <link href="assets/css/theme.css" rel="stylesheet">

    <!-- Head Libs -->
    <script src="assets/plugins/modernizr.custom.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style>
        .indent-1 {
            float: left;
        }

        .indent-1 section {
            width: 50%;
            float: left;
        }
    </style>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlwPHnB44mrlza-Elp8vhR_BPI1xkA_2E&callback=initAutocomplete&libraries=places&v=weekly"
        defer></script>
    <script src="asset/js/index.js"></script>
</head>

<body id="home" class="wide">
    <!-- PRELOADER -->
    <div id="preloader">
        <div id="preloader-status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
            <div id="preloader-title">Loading</div>
        </div>
    </div>
    <!-- /PRELOADER -->

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- HEADER -->
        <header class="header fixed">
            <div class="header-wrapper">
                <div class="container">

                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.php"><img src="assets/img/logo-rentit.jpg" alt="Gogo" /></a>
                    </div>
                    <!-- /Logo -->

                    <!-- Mobile menu toggle button -->
                    <!-- /Mobile menu toggle button -->

                    <!-- Navigation -->
                    <nav class="navigation closed clearfix">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- navigation menu -->
                                <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>
                                <ul class="nav sf-menu">
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="vehicles.php">Vehicles</a></li>
                                    <li><a href="#">FAQS</a></li>
                                    <li><a href="#">Hot Deals</a></li>
                                    <li><a href="#">Contact</a></li>

                                </ul>
                                <!-- /navigation menu -->
                            </div>
                        </div>
                        <!-- Add Scroll Bar -->
                        <div class="swiper-scrollbar"></div>
                    </nav>
                    <!-- /Navigation -->

                </div>
            </div>

        </header>



        <!--CONTENT AREA-->
        <section class="section">
            <form class="FromSection" action="#" method="post">
                <div class="sec1">
                    <div class="Pick-up">
                        <h2>Pick-up</h2>
                        <p>Kayaban-e-Saadi, Phase 7 Ext Def..</p>
                        <p>Feb, 8 2021, 10:00 PM</p>
                        <div class="bookingType">
                            <h5>Booking Type:</h5>
                            <input type="radio" id="FullDayRental" value="FullDayRental">
                            <label for="FullDayRental">Full Day Rental</label>
                            <input type="radio" id="ShortRental" value="ShortRental">
                            <label for="ShortRental">Short Rental</label>
                        </div>
                        <div class="img">
                            <img src="./car-370x220x1.jpg" alt="car" />
                        </div>
                    </div>
                    <div class="Drop-Off">
                        <h2>Drop-Off</h2>
                        <p>Kayaban-e-Saadi, Phase 7 Ext Def..</p>
                        <p>Feb, 8 2021, 10:00 PM</p>
                    </div>
                </div>
                <div class="sec2">
                    <div class="rate">
                        <span>Rate / Day</span>
                        <span>PKR. 70000</span>
                    </div>
                    <div class="rate">
                        <span>Fual / Kilometer</span>
                        <span>PKR. 20</span>
                    </div>
                    <div class="rate">
                        <span>Base Fare</span>
                        <span>PKR. 250</span>
                    </div>
                    <div class="rate">
                        <span>Overtime / Hour</span>
                        <span>PKR. 0</span>
                    </div>
                    <div class="rate">
                        <span>No. of Days</span>
                        <span>1</span>
                    </div>
                    <div class="rate">
                        <span>Discount Code (if any)</span>
                        <span>Promo code</span>
                    </div>

                    <div class="radiobtn">
                        <div>
                            <input type="radio" id="InCity" value="InCity">
                            <label for="InCity">In city</label>
                        </div>
                        <div>
                            <input type="radio" id="OutCity" value="OutCity">
                            <label for="OutCity">Out City</label>
                        </div>
                    </div>

                    <div>
                        <span>
                            <h3>Amount Payable</h3>
                            <p>Excluding Fuel & overtime charges <br> (Charges <a href="#">view detail</a>)</p>
                        </span>
                        <h3>PKR. 8,000</h3>
                    </div>
                </div>
            </form>
        </section>
        <!--INSERT CODE ABOVE-->

        <footer class="footer">
            <div class="footer-meta">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12">

                            <div class="copyright">&copy; 2021 GOGO Transport Services — A Rental Car Website made with
                                passion by Hashtag Digitals</div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- /FOOTER -->

        <div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

    </div>
    <!-- /WRAPPER -->

    </script>
    <!-- JS Global -->
    <script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/plugins/superfish/js/superfish.min.js"></script>
    <script src="assets/plugins/prettyphoto/js/jquery.prettyPhoto.js"></script>
    <script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
    <script src="assets/plugins/jquery.sticky.min.js"></script>
    <script src="assets/plugins/jquery.easing.min.js"></script>
    <script src="assets/plugins/jquery.smoothscroll.min.js"></script>
    <!--<script src="assets/plugins/smooth-scrollbar.min.js"></script>-->
    <!--<script src="assets/plugins/wow/wow.min.js"></script>-->
    <script>
    // WOW - animated content
    //new WOW().init();
    </script>
    <script src="assets/plugins/swiper/js/swiper.jquery.min.js"></script>
    <script src="assets/plugins/datetimepicker/js/moment-with-locales.min.js"></script>
    <script src="assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

    <!-- JS Page Level -->
    <script src="assets/js/theme-ajax-mail.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

</body>

</html>