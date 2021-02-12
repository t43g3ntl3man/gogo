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
                    echo '<li><a class="loginSignup" href="#">LOGOUT</a></li>';
                ?>
                
                
            </ul>
        </nav>

        </header>

        

        <!--CONTENT AREA-->
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
            }
            elseif (isset($_POST['details']))
            {
                $carid = $_POST['carid'];
                $_SESSION['carid'] = $carid;
                $dropOffLoc =  $_POST['pickuploc'];
                $pickUpLoc = $_POST['dropoffloc'];
                $pickUpDate = Date('Y:m:d ', strtotime($_POST['pickupdate']));
                $dropOffDate = Date('Y:m:d ', strtotime($_POST['dropoffdate']));
                $pickUpTime =  Date('h:i A', strtotime($_POST['pickuptime']));
                $dropOffTime = Date('h:i A', strtotime($_POST['dropofftime']));
                $_SESSION['regis']=array("carid"=>"$carid", "dropoff"=>"$dropOffLoc", "pickup"=>"$pickUpLoc", "dropdate"=>"$dropOffDate", "pickdate"=>"$pickUpDate", "picktime"=>"$pickUpTime", "droptime"=>"$dropOffTime");
                $regiss =  array($carid, $dropOffLoc, $pickUpLoc, $dropOffDate ,$pickUpDate, $pickUpTime, $dropOffTime);
                $_SESSION['regiss'] = $regiss;
            }
            elseif (isset($_POST['formSearchSubmit'])) {
                $carid = $_POST['carid'];
                $_SESSION['carid'] = $carid;
                $dropOffLoc =  $_POST['dropoffloc'];
                $pickUpLoc = $_POST['pickuploc'];
                $pickUpDate = Date('Y:m:d ', strtotime($_POST['pickupdate']));
                $dropOffDate = Date('Y:m:d ', strtotime($_POST['dropoffdate']));
                $pickUpTime =  Date('h:i A', strtotime($_POST['pickuptime']));
                $dropOffTime = Date('h:i A', strtotime($_POST['dropofftime']));
                $_SESSION['regis']=array("carid"=>"$carid", "dropoff"=>"$dropOffLoc", "pickup"=>"$pickUpLoc", "dropdate"=>"$dropOffDate", "pickdate"=>"$pickUpDate", "picktime"=>"$pickUpTime", "droptime"=>"$dropOffTime");
                $regiss =  array($carid, $dropOffLoc, $pickUpLoc, $dropOffDate ,$pickUpDate, $pickUpTime, $dropOffTime);
                $_SESSION['regiss'] = $regiss;    
            }
        ?>
        <section class="section">
            <div class="sec1">
                    <div class="Pick-up">
                        <h2>Pick-up</h2>
                        <p><?php echo $_SESSION['regiss'][2]?></p>
                        <p><?php echo $_SESSION['regiss'][4]?>, <?php echo $_SESSION['regiss'][5]?></p>
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
                        <p><?php echo $_SESSION['regiss'][1]?></p>
                        <p><?php echo $_SESSION['regiss'][3]?>, <?php echo $_SESSION['regiss'][6]?></p>
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
                <?php 

                echo '
                <form method="post" action="book.php">
                    <input type="hidden" name = "dropoffloc" value="'.$_SESSION['regiss'][1].'">
                    <input type="hidden" name = "pickuploc" value="'.$_SESSION['regiss'][2].'">
                    <input type="hidden" name = "pickupdate" value="'.$_SESSION['regiss'][4].'">
                    <input type="hidden" name = "dropoffdate" value="'.$_SESSION['regiss'][3].'">
                    <input type="hidden" name = "pickuptime" value="'.$_SESSION['regiss'][5].'">
                    <input type="hidden" name = "dropofftime" value="'.$_SESSION['regiss'][6].'">
                    <input type="hidden" name = "carid" value="'.$_SESSION['carid'].'">
                    <td class="buttons"><input class="btn btn-theme btn-block btn-theme-dark" type="submit" name="book" value="details"></td>
                </form>';
                ?>
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