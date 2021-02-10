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

    <!-- Theme CSS -->
    <link href="assets/css/theme.css" rel="stylesheet">

    <!-- Head Libs -->
    <script src="assets/plugins/modernizr.custom.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->
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
                    <a href="index.php"><img src="assets/img/logo-rentit.jpg" alt="Gogo"/></a>
                </div>
                <!-- /Logo -->

                <!-- Mobile menu toggle button -->
                <a href="#" class="menu-toggle btn ripple-effect btn-theme-transparent"><i class="fa fa-bars"></i></a>
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
                                <li><a href="#">Vehicles</a></li>
                                <li><a href="#">FAQS</a></li>
                                <li><a href="#">Hot Deals</a></li>
                                
                                <li><a href="#">Contact</a></li>
                                <li>
                                    <ul class="social-icons">
                                        <li><a href="fb.com/page/Gogotransportservices/" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </li>
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
    <!-- /HEADER -->
        <section class="page-section">
            <div class="container">

                <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="100ms">
                    <small>What a Kind of Car You Want</small>
                    <span>Great Rental Offers for You</span>
                </h2>

                <div class="tabs wow fadeInUp" data-wow-offset="70" data-wow-delay="300ms">
                    <ul id="tabs" class="nav"><!--
                        --><li class=""><a href="#tab-1" data-toggle="tab">Economy Cars</a></li><!--
                        --><li class="active"><a href="#tab-2" data-toggle="tab">Executive Cars</a></li><!--
                        --><li class=""><a href="#tab-3" data-toggle="tab">Luxurious Cars</a></li>
                    </ul>
                </div>
                <?php include("connection.php") ?>

                <div class="tab-content wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">

 
                    <div class="tab-pane fade" id="tab-1">

                        <div class="swiper swiper--offers-best">
                            <div class="swiper-container">

                               <div class="swiper-wrapper">

                                    <?php
                                    $query_econ = "SELECT id, name, model, fuel_type, engine_type FROM cars where car_type = 'Economy'";
                                    $result_econ = $con->query($query_econ);
                                    $counter = 0;
                                    while($row_econ = $result_econ -> fetch_assoc()){
                                    $_SESSION["carid"] = $row_econ["id"];
                                    if (isset($_POST["formSearchSubmit"])){
                                        $_SESSION["dropOffLoc"] = $_POST["formSearchOffLocation"];
                                        $_SESSION["pickUpLoc"] = $_POST["formSearchUpLocation"];
                                        $_SESSION["pickUpDate"] = $_POST["formSearchUpDate"];
                                        $_SESSION["dropOffDate"] = $_POST["formSearchOffDate"];
                                        $_SESSION["pickUpTime"] = $_POST["formSearchUpTime"];
                                        $_SESSION["dropOffTime"] = $_POST["formSearchOffTime"];
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
                                                    <div class="caption-text">Start from 45000Rs/per day</div>
                                                    <div class="buttons" name="book">
                                                        <a class="btn btn-theme ripple-effect" href="book.php">Rent it</a>
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
                                        else{
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
                                                    <div class="caption-text">Start from 45000Rs/per day</div>
                                                    <div class="buttons">
                                                        <a class="btn btn-theme ripple-effect" href="set_details.php">Rent it</a>
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
                                                <div class="caption-text">Start from 45000Rs/per day</div>
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
                                    $query_lux = "SELECT id, name, model, fuel_type, engine_type FROM cars where car_type = 'Luxuriuos'";
                                    $result_lux = $con->query($query_lux);
                                    $counter = 0;
                                    while($row_lux = $result_lux -> fetch_assoc()){
                                    echo '<div class="swiper-slide">
                                            <div class="thumbnail no-border no-padding thumbnail-car-card">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/cars/car-370x220x1.jpg">
                                                    <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption text-center">
                                                <h4 class="caption-title"><a href="#">'.$row_lux['name'].'</a></h4>
                                                <div class="caption-text">Start from 45000Rs/per day</div>
                                                <div class="buttons">
                                                 <a class="btn btn-theme ripple-effect" href="book.php">Rent It</a>
                                               </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i>'.$row_lux['model'].'</td>
                                                        <td><i class="fa fa-dashboard"></i>'.$row_lux['fuel_type'].'</td>
                                                        <td><i class="fa fa-cog"></i>'.$row_lux['engine_type'].'</td>
                                                        
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
    
    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer-meta">
            <div class="container">
                <div class="row">

                    <div class="col-sm-12">
                        
                        <div class="copyright">&copy; 2021 GOGO Transport Services — A Rental Car Website made with passion by Hashtag Digitals</div>
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
<script src="assets/js/intlTelInput.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="assets/js/intlTelInput.js"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        
        utilsScript: "assets/js/utils.js",
    });
</script>
</body>
</html>
