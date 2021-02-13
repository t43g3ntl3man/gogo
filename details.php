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
    <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <img class="logo" src="assets/img/logo-rentit.jpg" alt="logo" />
            <ul>
                <li><a class="active" href="/">Home</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="vehicles.php">VAHICLES</a></li>
                <li><a href="#">FAQS</a></li>
                <li><a href="#">HOT DEALS</a></li>
                <li><a href="#">CONTACT</a></li>
                <?php
                    if(!$_SESSION['login'])
                        echo '
                        <li><a class="loginSignup" href="signup.php">SIGNUP</a></li>
                        <li><a class="loginSignup" href="#">LOGIN</a></li>';
                       else
                    echo '<li><a class="loginSignup" href="logout.php">LOGOUT</a></li>';
                ?>
                
                
            </ul>
        </nav>
    </header>

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
                            <?php
                                
                                if(isset($_POST['formsubmitted'])){
                                    $carid = $_POST['carid'];
                                    $_SESSION['carid'] = $carid;
                                    $dropOffLoc =  $_POST['formSearchOffLocation'];
                                    $pickUpLoc = $_POST['formSearchUpLocation'];
                                    $pickUpDate = Date('Y:m:d ', strtotime($_POST['formSearchUpDate']));
                                    $dropOffDate = Date('Y:m:d ', strtotime($_POST['formSearchOffDate']));
                                    $pickUpTime =  Date('h:i A', strtotime($_POST['formSearchUpTime']));
                                    $dropOffTime = Date('h:i A', strtotime($_POST['formSearchOffTime']));
                                    $_SESSION['regis']=array("carid"=>"$carid", "dropoff"=>"$dropOffLoc", "pickup"=>"$pickUpLoc", "dropdate"=>"$dropOffDate", "pickdate"=>"$pickUpDate", "picktime"=>"$pickUpTime", "droptime"=>"$dropOffTime");
                                    $regiss =  array($carid, $dropOffLoc, $pickUpLoc, $dropOffDate ,$pickUpDate, $pickUpTime, $dropOffTime);
                                    $_SESSION['regiss'] = $regiss;
                                   echo
                                   $_SESSION['carid'].
                                    '<form action="book.php" method="post">
                                        <div class="form-title" >
                                            <i class="fa fa-globe"></i>
                                            <h2 >Search  Rental Cars</h2>
                                        </div>

                                    
                                    <div class="row row-inputs" >
                                        <div class="container-fluid">
                                            <div class="col-sm-6">
                                                <div class="form-group has-icon has-label">
                                                    <label  style="color: #fff">Picking Up Location</label>
                                                    <input type="text" class="form-control" name="pickuploc" placeholder="'.$_SESSION['regiss'][2].'" value="'.$_SESSION['regiss'][2].'">
                                                    <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group has-icon has-label">
                                                    <label  style="color: #fff" >Dropping Off Location</label>
                                                    <input type="text" class="form-control" name="dropoffloc" placeholder="'.$_SESSION['regiss'][1].'" value ="'.$_SESSION['regiss'][1].'">
                                                    <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                                </div>
                                            </div>                                
                                        </div>
                                    </div>
                                    <div class="row row-inputs">
                                        <div class="container-fluid">
                                            <div class="col-sm-6">
                                                <div class="form-group has-icon has-label">
                                                    <label  style="color: #fff" >Picking Up Date</label>
                                                    <input type="text" class="form-control" onfocus="(this.type="date")" name="pickupdate" placeholder="'.$_SESSION['regiss'][4].'" value="'.$_SESSION['regiss'][4].'">
                                                    <span class="form-control-icon"><i class="fa fa-calendar" ></i></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group has-icon has-label">
                                                    <label  style="color: #fff">Dropping Off Date</label>
                                                    <input type="text" class="form-control" onfocus="(this.type="date")" name="dropoffdate" placeholder="'.$_SESSION['regiss'][3].'" value="'.$_SESSION['regiss'][3].'">
                                                    <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-inputs">
                                        <div class="container-fluid">
                                            <div class="col-sm-6">
                                                <div class="form-group has-icon has-label">
                                                    <label  style="color: #fff">Picking Up Time</label>
                                                    <input type="time" class="form-control" name="pickuptime" placeholder="'.$_SESSION['regiss'][5].'" value="'.$_SESSION['regiss'][5].'">
                                                    <span class="form-control-icon"><i class="fa fa-clock-o" ></i></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group has-icon has-label">
                                                    <label  style="color: #fff">Dropping Off Time</label>
                                                    <input type="time" class="form-control" name="dropofftime" placeholder="'.$_SESSION['regiss'][6].'" value="'.$_SESSION['regiss'][6].'">
                                                    <input type="hidden" name="id" value="'.$carid.'">
                                                    <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-submit">
                                        <div class="container-fluid">
                                            <div class="inner">
                                                <a href="index.php"><i class="fa fa-minus-circle"></i></a>
                                                <a href="reg-detail.php">Confirm reg-detail</a>
                                                

                                            </div>
                                        </div>
                                    </div>';
                                }
                                elseif ($_POST['details'])
                                {
                                    $_SESSION['carid'] = $_POST['carid'];

                                    echo
                                    $_SESSION['carid'].
                                    '<form action="reg-detail.php" method="post">
                                        <div class="form-title" >
                                            <i class="fa fa-globe"></i>
                                            <h2 >Search  Rental Cars</h2>
                                        </div>

                                    
                                    <div class="row row-inputs" >
                                        <div class="container-fluid">
                                            <div class="col-sm-6">
                                                <div class="form-group has-icon has-label">
                                                    <label  style="color: #fff">Picking Up Location</label>
                                                    <input type="text" class="form-control" name="pickuploc" >
                                                    <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group has-icon has-label">
                                                    <label  style="color: #fff" >Dropping Off Location</label>
                                                    <input type="text" class="form-control" name="dropoffloc"  >
                                                    <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                                                </div>
                                            </div>                                
                                        </div>
                                    </div>
                                    <div class="row row-inputs">
                                        <div class="container-fluid">
                                            <div class="col-sm-6">
                                                <div class="form-group has-icon has-label">
                                                    <label  style="color: #fff" >Picking Up Date</label>
                                                    <input type="date" class="form-control" onfocus="(this.type="date")" name="pickupdate" >
                                                    <span class="form-control-icon"><i class="fa fa-calendar" ></i></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group has-icon has-label">
                                                    <label  style="color: #fff">Dropping Off Date</label>
                                                    <input type="date" class="form-control" onfocus="(this.type="date")" name="dropoffdate" >
                                                    <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-inputs">
                                        <div class="container-fluid">
                                            <div class="col-sm-6">
                                                <div class="form-group has-icon has-label">
                                                    <label  style="color: #fff">Picking Up Time</label>
                                                    <input type="time" class="form-control" name="pickuptime"  >
                                                    <span class="form-control-icon"><i class="fa fa-clock-o" ></i></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group has-icon has-label">
                                                    <label  style="color: #fff">Dropping Off Time</label>
                                                    <input type="time" class="form-control" name="dropofftime">
                                                    <input type="hidden" name="carid" value="'.$_SESSION['carid'].'">
                                                    <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-submit">
                                        <div class="container-fluid">
                                            <div class="inner">
                                                <a href="index.php"><i class="fa fa-minus-circle"></i></a>
                                                <button type="submit" name="formSearchSubmit" class="btn btn-submit btn-theme pull-right">Register</button>

                                            </div>
                                        </div>
                                    </div>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
</section>



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
