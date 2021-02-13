<?php
session_start();
unset($_SESSION['regiss']);
unset($_SESSION['carid']);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
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
    <!-- login  -->
    <div class="modal loginPOPUP" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">LOGIN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">
                        <div class="input-group mb-3">
                            <span class="input-group-text"
                                style="background-color: #ee0000; color: white; outline: none;"
                                id="inputGroup-sizing-default">Email</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text"
                                style="background-color: #ee0000; color: white; outline: none;"
                                id="inputGroup-sizing-default">Password</span>
                            <input type="password" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#" style="color: #ee0000; float: left; outline: none;">Forget Password</a>
                        <button type="submit" style="background-color: #ee0000;" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login  -->
    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- HEADER -->
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <img class="logo" src="assets/img/logo.png" alt="logo" />
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="veh.php">VAHICLES</a></li>
                <li><a href="#">FAQS</a></li>
                <li><a href="#">HOT DEALS</a></li>
                <li><a href="#">CONTACT</a></li>
                <?php
                    if(!$_SESSION['login'])
                        echo '
                        <li><a class="loginSignup" href="signup.php">SIGNUP</a></li>
                        <li><a class="loginSignup" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">LOGIN</a></li>';
                       else
                    echo '<li><a class="loginSignup" href="#">LOGOUT</a></li>';
                ?>


            </ul>
        </nav>
        <!-- /HEADER -->
        <div class="banner">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/slider/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/slider/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/slider/3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/slider/4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <section class="page-section">
                <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
                    <small>All Discounts Just For You</small>
                    <span>Get best rental deals</span>
                </h2>
                <!-- Search form -->
                <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                        <div class="form-search">
                            <form action="vehicles.php" method="post">
                                <div class="form-title">
                                    <i class="fa fa-globe"></i>
                                    <h2>Search Rental Cars</h2>
                                </div>
                                <div class="row row-inputs">
                                    <div class="container-fluid">
                                        <div class="col-sm-6">
                                            <div class="form-group has-icon has-label">
                                                <label style="color: #fff" for="formSearchUpLocation">Picking Up
                                                    Location</label>
                                                <input type="text" class="form-control" name="formSearchUpLocation"
                                                    placeholder="Airport or Anywhere">
                                                <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group has-icon has-label">
                                                <label style="color: #fff" for="formSearchOffLocation">Dropping Off
                                                    Location</label>
                                                <input type="text" class="form-control" name="formSearchOffLocation"
                                                    placeholder="Airport or Anywhere">
                                                <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-inputs">
                                    <div class="container-fluid">
                                        <div class="col-sm-6">
                                            <div class="form-group has-icon has-label">
                                                <label style="color: #fff" for="formSearchUpDate">Picking Up
                                                    Date</label>
                                                <input type="date" class="form-control" name="formSearchUpDate"
                                                    placeholder="m/d/y">
                                                <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group has-icon has-label">
                                                <label style="color: #fff" for="formSearchOffDate">Dropping Off
                                                    Date</label>
                                                <input type="date" class="form-control" name="formSearchOffDate"
                                                    placeholder="m/d/y">
                                                <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-inputs">
                                    <div class="container-fluid">
                                        <div class="col-sm-6">
                                            <div class="form-group has-icon has-label">
                                                <label style="color: #fff" for="formSearchUpDate">Picking Up
                                                    Time</label>
                                                <input type="time" class="form-control" name="formSearchUpTime"
                                                    placeholder="00:00">
                                                <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group has-icon has-label">
                                                <label style="color: #fff" for="formSearchOffDate">Dropping Off
                                                    Time</label>
                                                <input type="time" class="form-control" name="formSearchOffTime"
                                                    placeholder="00:00">
                                                <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-submit">
                                    <div class="container-fluid">
                                        <div class="inner">
                                            <a href="index.php"><i class="fa fa-minus-circle"></i></a>
                                            <button type="submit" name="formSearchSubmit"
                                                class="btn btn-submit btn-theme pull-right">Find Car</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- /PAGE -->

        <!-- PAGE -->
        <?php include("connection.php") ?>

        <!-- PAGE -->
        <section class="page-section">
            <div class="container">
                <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="100ms">
                    <small>What a Kind of Car You Want</small>
                    <span>Great Rental Offers for You</span>
                </h2>

                <div class="tabs wow fadeInUp" data-wow-offset="70" data-wow-delay="300ms">
                    <ul id="tabs" class="nav">
                        <li class=""><a href="#tab-1" data-toggle="tab">Economic</a></li>
                        <li class=""><a href="#tab-2" data-toggle="tab">Executive</a></li>
                        <li class=""><a href="#tab-3" data-toggle="tab">Luxury</a></li>
                        <li class=""><a href="#tab-4" data-toggle="tab">Wagon</a></li>
                        <li class=""><a href="#tab-5" data-toggle="tab">SUV</a></li>
                    </ul>
                </div>

                <div class="tab-content wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">

                    <!-- tab 1 -->
                    <div class="tab-pane fade" id="tab-1">

                        <div class="swiper swiper--offers-best">
                            <div class="swiper-container ">

                                <div class="swiper-wrapper ">
                                    <!-- Slides -->
                                    <?php
                                    $query_econ = "SELECT id, name, model, fuel_type, engine_type FROM cars where car_type = 'Economy'";
                                    $result_econ = $con->query($query_econ);
                                    $counter = 0;
                                    while($row_econ = $result_econ -> fetch_assoc()){
                                    echo '<div class="swiper-slide">
                                            <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/cars/car-370x220x1.jpg">
                                                    <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">'.$row_econ['name'].'</a></h4>
                                                <div class="caption-text">Start from 15000Rs/per day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme ripple-effect" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i>'.$row_econ['model'].'</td>
                                                        <td><i class="fa fa-dashboard"></i>'.$row_econ['fuel_type'].'</td>
                                                        <td><i class="fa fa-cog"></i>'.$row_econ['engine_type'].'</td>
                                                        
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                    ?>
                                </div>

                            </div>

                            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>

                        </div>

                    </div>

                    <!-- tab 2 -->
                    <div class="tab-pane fade active in" id="tab-2">

                        <div class="swiper swiper--offers-popular">
                            <div class="swiper-container">

                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <?php
                                    $query_exe = "SELECT id, name, model, fuel_type, engine_type FROM cars where car_type = 'Executive'";
                                    $result_exe = $con->query($query_exe);
                                    $counter = 0;
                                    while($row_exe = $result_exe -> fetch_assoc()){
                                    echo '<div class="swiper-slide">
                                            <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/cars/car-370x220x1.jpg">
                                                    <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">'.$row_exe['name'].'</a></h4>
                                                <div class="caption-text">Start from 30000Rs/per day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme ripple-effect" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i>'.$row_exe['model'].'</td>
                                                        <td><i class="fa fa-dashboard"></i>'.$row_exe['fuel_type'].'</td>
                                                        <td><i class="fa fa-cog"></i>'.$row_exe['engine_type'].'</td>
                                                        
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                    ?>
                                </div>

                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>

                        </div>

                    </div>

                    <!-- tab 3 -->
                    <div class="tab-pane fade" id="tab-3">

                        <div class="swiper swiper--offers-economic">
                            <div class="swiper-container">

                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <?php
                                    $query_exe = "SELECT id, name, model, fuel_type, engine_type FROM cars where car_type = 'Luxuriuos'";
                                    $result_exe = $con->query($query_exe);
                                    $counter = 0;
                                    while($row_exe = $result_exe -> fetch_assoc()){
                                    echo '<div class="swiper-slide">
                                            <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/cars/car-370x220x1.jpg">
                                                    <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">'.$row_exe['name'].'</a></h4>
                                                <div class="caption-text">Start from 30000Rs/per day</div>
                                                <div class="buttons">
                                                    <a class="btn btn-theme ripple-effect" href="#">Rent It</a>
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i>'.$row_exe['model'].'</td>
                                                        <td><i class="fa fa-dashboard"></i>'.$row_exe['fuel_type'].'</td>
                                                        <td><i class="fa fa-cog"></i>'.$row_exe['engine_type'].'</td>
                                                        
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                    ?>
                                </div>

                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
                            <div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>

                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- /PAGE -->

        <!-- PAGE -->

        <!-- PAGE -->
        <!-- /PAGE -->

        <!-- PAGE -->
        <!-- /PAGE -->

        <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section contact dark">
            <div class="container">

                <!-- Get in touch -->

                <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
                    <small>Feel Free to Say Hello!</small>
                    <span>Get in Touch With Us</span>
                </h2>

                <div class="row">
                    <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
                        <!-- Contact form -->
                        <form name="contact-form" method="post" action="#" class="contact-form" id="contact-form">

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="outer required">
                                        <div class="form-group af-inner has-icon">
                                            <label class="sr-only" for="name">Name</label>
                                            <input type="text" name="name" id="name" placeholder="Name" value=""
                                                size="30" data-toggle="tooltip" title="Name is required"
                                                class="form-control placeholder" />
                                            <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="outer required">
                                        <div class="form-group af-inner has-icon">
                                            <label class="sr-only" for="email">Email</label>
                                            <input type="text" name="email" id="email" placeholder="Email" value=""
                                                size="30" data-toggle="tooltip" title="Email is required"
                                                class="form-control placeholder" />
                                            <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="subject">Subject</label>
                                    <input type="text" name="subject" id="subject" placeholder="Subject" value=""
                                        size="30" data-toggle="tooltip" title="Subject is required"
                                        class="form-control placeholder" />
                                    <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                                </div>
                            </div>

                            <div class="form-group af-inner has-icon">
                                <label class="sr-only" for="input-message">Message</label>
                                <textarea name="message" id="input-message" placeholder="Message" rows="4" cols="50"
                                    data-toggle="tooltip" title="Message is required"
                                    class="form-control placeholder"></textarea>
                                <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                            </div>

                            <div class="outer required">
                                <div class="form-group af-inner">
                                    <input type="submit" name="submit"
                                        class="form-button form-button-submit btn btn-block btn-theme ripple-effect btn-theme-dark"
                                        id="submit_btn" value="Send message" />
                                </div>
                            </div>

                        </form>
                        <!-- /Contact form -->
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">

                        <ul class="media-list contact-list">
                            <li class="media">
                                <div class="media-left"><i class="fa fa-home"></i></div>
                                <div class="media-body">Adress: Suparco Rd, University Of Karachi</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa"></i></div>
                                <div class="media-body">Karachi, Sindh</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa-phone"></i></div>
                                <div class="media-body">Support Phone: 0300 2438084</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa-envelope"></i></div>
                                <div class="media-body">E mails: info@example.com</div>
                            </li>
                            <li class="media">
                                <div class="media-left"><i class="fa fa-clock-o"></i></div>
                                <div class="media-body">24+ hours available</div>
                            </li>

                        </ul>

                    </div>
                </div>

                <!-- /Get in touch -->

            </div>
        </section>
        <!-- PAGE -->
        <!-- /PAGE -->

        <!-- PAGE -->

        <!-- PAGE -->

        <!-- /PAGE -->

    </div>
    <!-- /CONTENT AREA -->

    <!-- FOOTER -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous"></script>
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