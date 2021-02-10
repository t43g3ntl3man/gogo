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
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
     <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlwPHnB44mrlza-Elp8vhR_BPI1xkA_2E&callback=initAutocomplete&libraries=places&v=weekly" defer></script>
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
                    <a href="index.php"><img src="assets/img/logo-rentit.jpg" alt="Gogo"/></a>
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
                                <?php
                                if(!$_SESSION['login'])
                                    echo '
                                    <li><a href="login.php"><i class="fa fa-user">Login</i></a></li>
                                    <li><a href="signup.php"><i class="fa fa-sign-in">Signup</i></a></li>';
                                else
                                    echo '<li><a href="logout.php"><i class="fa fa-sign-in">Logout</i></a></li>';
                                ?>
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

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- PAGE -->
                <!-- /PAGE -->

        <!-- PAGE -->
        <section class="page-section">
    <div class="container">
                <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
                    <small>All Discounts Just For You</small>
                    <span>Get best rental deals</span>
                </h2>
                <!-- Search form -->
                 <div class="row">
                    <div class="col-sm-12 col-md-10 col-md-offset-1">
                        <div class="form-search">
                            <form action="vehicles.php" method="post">
                                <div class="form-title" >
                                    <i class="fa fa-globe"></i>
                                    <h2 >Search  Rental Cars</h2>
                                </div>
                                <div class="row row-inputs" >
                                    <div class="container-fluid">
                                        <div class="col-sm-6">
                                            <div class="form-group has-icon has-label">
                                                <label  style="color: #fff" for="formSearchUpLocation">Picking Up Location</label>
                                                <input type="text" class="form-control" name="formSearchUpLocation" placeholder="Airport or Anywhere">
                                                <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group has-icon has-label">
                                                <label  style="color: #fff" for="formSearchOffLocation">Dropping Off Location</label>
                                                <input type="text" class="form-control" name="formSearchOffLocation" placeholder="Airport or Anywhere">
                                                <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                            </div>
                                        </div>                                
                                    </div>
                                </div>
                                <div class="row row-inputs">
                                    <div class="container-fluid">
                                        <div class="col-sm-6">
                                            <div class="form-group has-icon has-label">
                                                <label  style="color: #fff" for="formSearchUpDate">Picking Up Date</label>
                                                <input type="date" class="form-control" name="formSearchUpDate" placeholder="m/d/y">
                                                <span class="form-control-icon"><i class="fa fa-calendar" ></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group has-icon has-label">
                                                <label  style="color: #fff" for="formSearchOffDate">Dropping Off Date</label>
                                                <input type="date" class="form-control" name="formSearchOffDate" placeholder="m/d/y">
                                                <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-inputs">
                                    <div class="container-fluid">
                                        <div class="col-sm-6">
                                            <div class="form-group has-icon has-label">
                                                <label  style="color: #fff" for="formSearchUpDate">Picking Up Time</label>
                                                <input type="time" class="form-control" name="formSearchUpTime" placeholder="00:00">
                                                <span class="form-control-icon"><i class="fa fa-clock-o" ></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group has-icon has-label">
                                                <label  style="color: #fff" for="formSearchOffDate">Dropping Off Time</label>
                                                <input type="time" class="form-control" name="formSearchOffTime" placeholder="00:00">
                                                <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row-submit">
                                    <div class="container-fluid">
                                        <div class="inner">
                                            <a href="index.php"><i class="fa fa-minus-circle"></i></a>
                                            <button type="submit" name="formSearchSubmit" class="btn btn-submit btn-theme pull-right">Find Car</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
</section>

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
                    <ul id="tabs" class="nav"><!--
                        --><li class=""><a href="#tab-1" data-toggle="tab">Best Offers</a></li><!--
                        --><li class="active"><a href="#tab-2" data-toggle="tab">Popular Cars</a></li><!--
                        --><li class=""><a href="#tab-3" data-toggle="tab">Economic Cars</a></li>
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
                                            <input type="text" name="name" id="name" placeholder="Name" value="" size="30" data-toggle="tooltip" title="Name is required" class="form-control placeholder"/>
                                            <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="outer required">
                                        <div class="form-group af-inner has-icon">
                                            <label class="sr-only" for="email">Email</label>
                                            <input
                                                    type="text" name="email" id="email" placeholder="Email" value="" size="30"
                                                    data-toggle="tooltip" title="Email is required"
                                                    class="form-control placeholder"/>
                                            <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="subject">Subject</label>
                                    <input
                                            type="text" name="subject" id="subject" placeholder="Subject" value="" size="30"
                                            data-toggle="tooltip" title="Subject is required"
                                            class="form-control placeholder"/>
                                    <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                                </div>
                            </div>

                            <div class="form-group af-inner has-icon">
                                <label class="sr-only" for="input-message">Message</label>
                                <textarea
                                        name="message" id="input-message" placeholder="Message" rows="4" cols="50"
                                        data-toggle="tooltip" title="Message is required"
                                        class="form-control placeholder"></textarea>
                                <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                            </div>

                            <div class="outer required">
                                <div class="form-group af-inner">
                                    <input type="submit" name="submit" class="form-button form-button-submit btn btn-block btn-theme ripple-effect btn-theme-dark" id="submit_btn" value="Send message" />
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

</body>
</html>
