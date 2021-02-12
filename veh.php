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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }

        nav {
            font-family: Arial, Helvetica, sans-serif;
            background: #ee0000;
            max-height: 80px;
            width: 100%;
            z-index: 100;
            top: 0;
            left: 0;
            position: fixed;
        }

        .logo {
            width: 150px;
            margin: 20px;
        }

        nav ul {
            float: right;
            margin-right: 20px;
        }

        nav ul li {
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
        }

        nav ul li a {
            color: white;
            font-size: 17px;
            font-weight: bold;
            padding: 7px 13px;
            text-transform: uppercase;
            text-decoration: none;
        }

        nav ul li a.loginSignup {
            background: white;
            color: #ee0000;
            border-radius: 5px;
            font-size: 12px;
        }

        nav ul li a.loginSignup:hover {
            color: black;
        }

        a.active,
        a:hover {
            color: black;
            transition: .5s;
        }

        .checkbtn {
            font-size: 30px;
            color: white;
            float: right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
            display: none;
        }

        #check {
            display: none;
        }

        @media (max-width: 952px) {
            .nav {
                flex-direction: row-reverse;
            }

            .logo {
                width: 100px;
            }

            nav ul li a {
                font-size: 16px;
            }
        }

        @media (max-width: 1100px) {
            .nav {
                flex-direction: row-reverse;
            }

            .checkbtn {
                display: block;
            }

            ul {
                position: fixed;
                width: 100%;
                max-height: 100vh;
                background: #ee0000;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }

            nav ul li {
                display: block;
                margin: 20px 0;
                line-height: 30px;
            }

            nav ul li a {
                font-size: 20px;
            }

            a:hover,
            a.active {
                background: none;
                color: black;
            }

            #check:checked~ul {
                left: 0;
            }
        }

        .searchACar {
            width: 100%;
            margin-top: 80px;
        }

        .searchACarDiv {
            padding: 10px;
            background-color: #f2f2f2;
        }

        .searchACarForm {
            display: flex;
            justify-content: center;
            align-content: center;
        }

        .searchACarForm .fieldBox {
            margin: 0 auto;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            width: 100%;
            margin: 1px;
            background-color: white;
        }

        .searchACarForm .fieldBox.btn {
            background-color: #ee0000;
            color: white;
        }

        .searchACarForm .fieldBox.btn input {
            color: white;
            font-weight: bold;
        }

        .searchACarForm .fieldBox label,
        input {
            background-color: transparent;
            border: none;
            outline: none;
            font-size: 16px;
        }

        @media (max-width: 1000px) {
            .searchACarForm {
                flex-direction: column;
            }

            .searchACarForm .fieldBox {
                margin: 0 auto;
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                flex-wrap: wrap;
                width: 100%;
                margin: 1px;
                background-color: white;
            }

            .searchACarForm .fieldBox.btn {
                background-color: #ee0000;
                color: white;
            }

            .searchACarForm .fieldBox.btn input {
                color: white;
                font-weight: bold;
            }

            .searchACarForm .fieldBox label,
            input {
                background-color: transparent;
                border: none;
                outline: none;
                font-size: 16px;
            }
        }

        .carBox .options {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        .carBox .options div {
            width: 100%;
            margin: 10px;
            font-weight: 500;
            color: #ee0000;
            text-transform: uppercase;
        }

        .carCard {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            width: 100%;
            padding: 20px;
            border-bottom: 1px solid #f2f2f2;
        }

        .carCard .carImg {
            flex: 1;
        }

        .carCard img {
            min-width: 100%;
        }

        .carCard .carDetail {
            flex: 3;
            display: flex;
            flex-direction: column;
        }

        .carCard .carDetail div {
            width: 100%;
        }

        .carContent {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .carContent h4 {
            color: #ee0000;
            font-weight: bold;
        }

        .carContent h6 {
            color: #ee0000;
            font-weight: bold;
        }

        .carCard .carDetail div button {
            width: 100%;
            background-color: #ee0000;
            border: none;
        }

        .carCard .carDetail div button:hover {
            box-shadow: 0 3px 5px #a3a3a3;
        }

        @media (max-width: 800px) {
            .carCard {
                flex-direction: column;
            }

            .carCard .carImg {
                flex: 1;
            }

            .carCard .carDetail {
                width: 100%;
            }

            .carContent {
                flex-direction: row;
            }

            @media (max-width: 450px) {
                .carContent {
                    flex-direction: column;
                    justify-content: space-evenly;
                }
            }
        }
    </style>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img class="logo" src="assets/img/logo-rentit.png" alt="logo" />
        <ul>
            <li><a class="active" href="/">Home</a></li>
            <li><a href="./aboutus.php">About us</a></li>
            <li><a href="./vehicles.php">VAHICLES</a></li>
            <li><a href="#">FAQS</a></li>
            <li><a href="#">HOT DEALS</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a class="loginSignup" href="#">LOGIN</a></li>
            <li><a class="loginSignup" href="./signup.php">SIGNUP</a></li>
        </ul>
    </nav>

    <section class="searchACar">
        <!-- <div class="searchACarDiv">
            <form action="" class="container searchACarForm">
                <div class="fieldBox">
                    <input type="text" id="location" placeholder="Enter Pick-Up Location">
                    <label for="location" class="field"><i class="fas fa-map-marker-alt"></i></label>
                </div>
                <div class="fieldBox">
                    <input type="date" id="date" value="12/2/2021">
                </div>
                <div class="fieldBox">
                    <input type="time" id="time">
                </div>
                <div class="fieldBox">
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="fullDay">
                            <label class="form-check-label" for="fullDay">
                                Full Day
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="shortRental">
                            <label class="form-check-label" for="shortRental">
                                Short Rental
                            </label>
                        </div>
                    </div>
                </div>
                <div class="fieldBox btn">
                    <input type="submit" value="BOOK NOW">
                </div>
            </form>
        </div> -->


        <div class="carBox">
            <div class="options container">
                <div>
                    <form method="post", action="vehicles.php">
                        <label for="type">Vehicle Type</label>
                        <select class="form-select" id="type" aria-label="Default select example">
                            <option>All</option>
                            <option type="submit" value="Economic">Economic</option>
                            <option value="Luxurious">Luxurious</option>
                            <option value="Executive">Executive</option>
                            <option value="Wagon">Wagon</option>
                            <option value="SUV">SUVs</option>
                        </select>
                    </form>
                </div>
                <div>
                    <label for="brand">Select Brand</label>
                    <select class="form-select" id="brand" aria-label="Default select example">
                        <option selected>All</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            
                <?php include("connection.php")?>
                <?php
                    $query = "SELECT id, name, model, fuel_type, engine_type FROM cars";
                    $result = $con->query($query);
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
                        <div class="carCard">
                        <div class="carImg">
                            <img src="./car-370x220x1.jpg" alt="car">
                        </div>
                        <div class="carDetail">
                            <div class="carContent">
                                <div>
                                    <h4>'.$row['name'].'</h4>
                                </div>
                                <div>
                                    <h4>'.$_SESSION["priceforcartype"].' PKR/day</h4>
                                    <div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="carBtn">
                                 <form method="post" action="details.php">
                                    <input type="hidden" name = "carid" value="'.$carid.'">
                                    <button type="submit" class="btn btn-primary btn-lg" name="details" value="details">Book Now</button>
                                </form>
                                
                            </div>
                        </div>
                        </div>';
                    }
                ?>
           
        </div>
    </section>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
    crossorigin="anonymous"></script>

</html>