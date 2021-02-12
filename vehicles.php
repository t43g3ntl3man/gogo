<?php
session_start();
$_SESSION["findcartype"] = "All";
if (isset($_POST["findcar"]))
{
    if ($_POST["cartype"] == "Economic")
    {
        $_SESSION["findcartype"] = "Economy";
        $_SESSION["priceforcartype"] = "150000";
    }
    elseif ($_POST["cartype"] == "Luxurious")
    {
        $_SESSION["findcartype"] = "Luxuriuos";
        $_SESSION["priceforcartype"] = "300000";
    }
    elseif ($_POST["cartype"] == "Executive")
    {
        $_SESSION["findcartype"] = "Executive";
        $_SESSION["priceforcartype"] = "450000";
    }
    elseif ($_POST["cartype"] == "Wagon")
    {
        $_SESSION["findcartype"] = "Wagon";
        $_SESSION["priceforcartype"] = "100000";
    }
    elseif ($_POST["cartype"] == "SUV")
    {
        $_SESSION["findcartype"] = "SUV";
        $_SESSION["priceforcartype"] = "200000";
    }
    else
    {
        $_SESSION["findcartype"] = "All";
        $_SESSION["priceforcartype"] = "150000";
    }
}
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
            <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <img class="logo" src="assets/img/logo-rentit.jpg" alt="logo" />
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="#">About us</a></li>
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
        </div>

    </header>
    <!-- /HEADER -->

    <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs text-right">
            <div class="container">
                <div class="page-header">
                    <h1><?php echo $_SESSION["findcartype"];?></h1>
                </div>
                
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <!-- PAGE WITH SIDEBAR -->
        <section class="page-section with-sidebar sub-page">
            <div class="container">
                <div class="row">
                    <!-- CONTENT -->
                    <div class="col-md-9 content car-listing" id="content">

                        <!-- Car Listing -->                    
                        <?php include("connection.php")?>
                        <?php
                            if(isset($_POST['formSearchSubmit']))
                            {
                                if($_SESSION["findcartype"]!="All")
                                {
                                    $query = "SELECT id, name, model, fuel_type, engine_type FROM cars where car_type = '".$_SESSION['findcartype']."'";

                                    $result = $con->query($query);
                                    $counter = 0;
                                    while($row = $result -> fetch_assoc())
                                    {
                                        $carid = $row['id'];
                                        $dropOffLoc =  $_POST['formSearchOffLocation'];
                                        $pickUpLoc = $_POST['formSearchUpLocation'];
                                        $pickUpDate = $_POST['formSearchUpDate'];
                                        $dropOffDate = $_POST['formSearchOffDate'];
                                        $pickUpTime =  Date('h:i A', strtotime($_POST['formSearchUpTime']));
                                        $dropOffTime = Date('h:i A', strtotime($_POST['formSearchOffTime']));
                                        $_SESSION['regis']=array("carid"=>"$carid", "dropoff"=>"$dropOffLoc", "pickup"=>"$pickUpLoc", "dropdate"=>"$dropOffDate", "pickdate"=>"$pickUpDate", "picktime"=>"$pickUpTime", "droptime"=>"$dropOffTime");
                                        $regiss =  array($carid, $dropOffLoc, $pickUpLoc, $dropOffDate ,$pickUpDate, $pickUpTime, $dropOffTime);
                                        $_SESSION['regiss'] = $regiss;

                                        echo '
                                        <div class="thumbnail no-border no-padding thumbnail-car-card clearfix">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/cars car-370x220x1.jpg">
                                                    <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>

                                            <div class="caption">
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <h4 class="caption-title">'. $row["name"] .'</h4>
                                                <h5 class="caption-title-sub">Start from '.$_SESSION["priceforcartype"].'RS/per a day</h5>
                                                  
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i>'. $row["model"] .'</td>
                                                        <td><i class="fa fa-dashboard"></i>'. $row["fuel_type"] .'</td>
                                                        <td><i class="fa fa-cog"></i>'. $row["engine_type"] .'</td>
                                                         <form method="post" action="reg-detail.php">
                                                            
                                                               
                                                            <input type="hidden" name = "formSearchOffLocation" value="'.$_SESSION['regiss'][1].'">
                                                            <input type="hidden" name = "formSearchUpLocation" value="'.$_SESSION['regiss'][2].'">
                                                            <input type="hidden" name = "formSearchUpDate" value="'.$_SESSION['regiss'][4].'">
                                                            <input type="hidden" name = "formSearchOffDate" value="'.$_SESSION['regiss'][3].'">
                                                            <input type="hidden" name = "formSearchUpTime" value="'.$_SESSION['regiss'][5].'">
                                                            <input type="hidden" name = "formSearchOffTime" value="'.$_SESSION['regiss'][6].'">
                                                            <input type="hidden" name = "carid" value="'.$carid.'">
                                                            <td class="buttons"><input class="btn btn-theme btn-block btn-theme-dark" type="submit" name="formsubmitted" value="details"></td>
                                                        </form>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>';
                                    }
                                }
                                else
                                {
                                    $query = "SELECT id, name, model, fuel_type, engine_type FROM cars";
                                    $result = $con->query($query);
                                    $counter = 0;
                                    while($row = $result -> fetch_assoc())
                                    {
                                        $_SESSION['carid'] = $row['id'];
                                        $carid = $row['id'];
                                        $dropOffLoc =  $_POST['formSearchOffLocation'];
                                        $pickUpLoc = $_POST['formSearchUpLocation'];
                                        $pickUpDate = $_POST['formSearchUpDate'];
                                        $dropOffDate = $_POST['formSearchOffDate'];
                                        $pickUpTime =  Date('h:i A', strtotime($_POST['formSearchUpTime']));
                                        $dropOffTime = Date('h:i A', strtotime($_POST['formSearchOffTime']));
                                        $_SESSION['regis']=array("carid"=>"$carid", "dropoff"=>"$dropOffLoc", "pickup"=>"$pickUpLoc", "dropdate"=>"$dropOffDate", "pickdate"=>"$pickUpDate", "picktime"=>"$pickUpTime", "droptime"=>"$dropOffTime");
                                        $regiss =  array($carid, $dropOffLoc, $pickUpLoc, $dropOffDate ,$pickUpDate, $pickUpTime, $dropOffTime);
                                        $_SESSION['regiss'] = $regiss;
                                        echo '
                                        <div class="thumbnail no-border no-padding thumbnail-car-card clearfix">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/cars car-370x220x1.jpg">
                                                    <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>

                                            <div class="caption">
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <h4 class="caption-title">'. $row["name"] .'</h4>
                                                <h5 class="caption-title-sub">Start from '.$_SESSION["priceforcartype"].'RS/per a day</h5>
                                                  
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i>'. $row["model"] .'</td>
                                                        <td><i class="fa fa-dashboard"></i>'. $row["fuel_type"] .'</td>
                                                        <td><i class="fa fa-cog"></i>'. $row["engine_type"] .'</td>
                                                        <form method="post" action="reg-detail.php">
                                                            
                                                            <input type="hidden" name = "formSearchOffLocation" value="'.$_SESSION['regiss'][1].'">
                                                            <input type="hidden" name = "formSearchUpLocation" value="'.$_SESSION['regiss'][2].'">
                                                            <input type="hidden" name = "formSearchUpDate" value="'.$_SESSION['regiss'][4].'">
                                                            <input type="hidden" name = "formSearchOffDate" value="'.$_SESSION['regiss'][3].'">
                                                            <input type="hidden" name = "formSearchUpTime" value="'.$_SESSION['regiss'][5].'">
                                                            <input type="hidden" name = "formSearchOffTime" value="'.$_SESSION['regiss'][6].'">
                                                            <input type="hidden" name = "carid" value="'.$carid.'">
                                                            <td class="buttons"><input class="btn btn-theme btn-block btn-theme-dark" type="submit" name="formsubmitted" value="'.$carid.'"></td>
                                                        </form>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>';
                                    }
                                }
                            }
                            else
                            {
                                if($_SESSION["findcartype"]!="All")
                                {
                                    $query = "SELECT id, name, model, fuel_type, engine_type FROM cars where car_type = '".$_SESSION['findcartype']."'";

                                    $result = $con->query($query);
                                    $counter = 0;
                                    while($row = $result -> fetch_assoc())
                                    {
                                        $carid = $row['id'];
                                        $_SESSION['carid'] = $carid;
                                        echo '
                                        <div class="thumbnail no-border no-padding thumbnail-car-card clearfix">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/cars car-370x220x1.jpg">
                                                    <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                </a>
                                            </div>
                                            <div class="caption">
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <h4 class="caption-title">'. $row["name"] .'</h4>
                                                <h5 class="caption-title-sub">Start from '.$_SESSION["priceforcartype"].'RS/per a day</h5>
                                                  
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i>'. $row["model"] .'</td>
                                                        <td><i class="fa fa-dashboard"></i>'. $row["fuel_type"] .'</td>
                                                        <td><i class="fa fa-cog"></i>'. $row["engine_type"] .'</td>
                                                        <form method="post" action="details.php">
                                                             
                                                            <input type="hidden" name = "carid" value="'.$carid.'">
                                                            
                                                            <td class="buttons"><input class="btn btn-theme btn-block btn-theme-dark" type="submit" name="details" value="'.$_row['id'].'"></td>
                                                        </form>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>';
                                    }
                                }
                                else
                                {
                                    $query = "SELECT id, name, model, fuel_type, engine_type FROM cars";
                                    $result = $con->query($query);
                                    $counter = 0;
                                    while($row = $result -> fetch_assoc())
                                    {
                                        $carid = $row['id'];
                                        $_SESSION['carid'] = $carid;
                                        echo '
                                        <div class="thumbnail no-border no-padding thumbnail-car-card clearfix">
                                            <div class="media">
                                                <a class="media-link" data-gal="prettyPhoto" href="assets/img/preview/cars car-370x220x1.jpg">
                                                   <img src="assets/img/preview/cars/car-370x220x1.jpg" alt=""/>
                                                    <span class="icon-view"><strong><i class="fa fa-eye"></i></strong></span>
                                                 </a>
                                            </div>
                                            <div class="caption">
                                                <div class="rating">
                                                    <span class="star"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span><!--
                                                    --><span class="star active"></span>
                                                </div>
                                                <h4 class="caption-title">'. $row["name"] .'</h4>
                                                <h5 class="caption-title-sub">Start from '.$_SESSION["priceforcartype"].'RS/per a day</h5>
                                                <table class="table">
                                                    <tr>
                                                        <td><i class="fa fa-car"></i>'. $row["model"] .'</td>
                                                        <td><i class="fa fa-dashboard"></i>'. $row["fuel_type"] .'</td>
                                                        <td><i class="fa fa-cog"></i>'. $row["engine_type"] .'</td>
                                                        <form method="post" action="details.php">
                                                            
                                                            <input type="hidden" name=carid value="'.$carid.'">
                                                            <td class="buttons"><input class="btn btn-theme btn-block btn-theme-dark" type="submit" name="details" value="'.$_SESSION['carid'].'"></td>
                                                        </form>
                                                    </tr>
                                                </table>
                                           </div>
                                        </div>';
                                    }
                                }
                            }
                        ?>
                        <!-- /Car Listing -->

                        <!-- Pagination -->
                        
                        <!-- /Pagination -->

                    </div>
                    <!-- /CONTENT -->

                    <!-- SIDEBAR -->
                    <aside class="col-md-3 sidebar" id="sidebar" style="margin-top: 65px">
                        <!-- widget -->
                        <div class="widget shadow widget-find-car">
                            <h4 class="widget-title">Find Best Rental Car</h4>
                            <div class="widget-content">
                                <!-- Search form -->
                                <div class="form-search light">
                                    <form method="post", action="vehicles.php">

                                       

                                       

                                        <div class="form-group selectpicker-wrapper">
                                            <label>Select Type</label>
                                            <select class="selectpicker input-price" data-live-search="true" data-width="100%" data-toggle="tooltip" name="cartype" title="Select">
                                                <option>All</option>
                                                <option value="Economic">Economic</option>
                                                <option value="Luxurious">Luxurious</option>
                                                <option value="Executive">Executive</option>
                                                <option value="Wagon">Wagon</option>
                                                <option value="SUV">SUVs</option>
                                            </select>
                                        </div>

                                        <button type="submit" id="formSearchSubmit3" class="btn btn-submit btn-theme btn-theme-dark btn-block" name="findcar">Find Car</button>

                                    </form>
                                </div>
                                <!-- /Search form -->
                            </div>
                        </div>
                        <!-- /widget -->
                        <!-- widget price filter -->
                        
                        <!-- /widget testimonials -->
                        <!-- widget helping center -->
                       
                        <!-- /widget helping center -->
                    </aside>
                    <!-- /SIDEBAR -->

                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->

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
