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
    <link rel="stylesheet" href="./assets/css/theme.css">
    <style>
        

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
            flex: 2;
        }

        .carCard img {
            min-width: 100%;
        }

        .carCard .carDetail {
            flex: 2;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .carCard .carDetail div {
            width: 100%;
        }

        .carContent {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .carContent .carFeatures {
            /* display: flex; */
            /* justify-content: center; */
            /* width: 100%; */
        }

        .carContent .carFeatures tr td {
            margin: 10px;
            padding: 4px;
            width: auto;
        }

        .carContent .carFeatures tr i {
            color: #ee0000;
        }

        .carContent h4 {
            color: #ee0000;
            font-weight: bold;
            font-size: 30px;

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

            .carContent .carFeatures tr td {
                margin: 10px;
                padding: 4px;
                width: 200px;
            }
        }

        @media (max-width: 450px) {
            .carContent {
                flex-direction: column;
                /* justify-content: space-evenly; */
                margin-bottom: 10px;
            }

            .carContent .carFeatures tr td {
                margin: 10px;
                padding: 4px;
                width: 200px;
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
        <img class="logo" src="./assets/img/logo.png" alt="logo" />
        <ul>
            <li><a class="active" href="/">Home</a></li>
            <li><a href="./aboutus.php">About us</a></li>
            <li><a href="./vehicles.php">VAHICLES</a></li>
            <li><a href="#">FAQS</a></li>
            <li><a href="#">HOT DEALS</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a class="loginSignup" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">LOGIN</a></li>
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
                    <form action="veh" method="post">
                        <label for="type">Vehicle Type</label>
                        <select class="form-select" id="type" aria-label="Default select example">
                            <option>All</option>
                            <option value="Economic">Economic</option>
                            <option value="Luxurious">Luxurious</option>
                            <option value="Executive">Executive</option>
                            <option value="Wagon">Wagon</option>
                            <option value="SUV">SUVs</option>
                        </select>
                    </form>
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
                                <img src="assets/img/car.jpg" alt="car">
                            </div>

                            <div class="carDetail">
                                <div class="carContent">
                                    <div>
                                        <h4>'.$row['name'].'</h4>
                                        <table class="carFeatures">
                                            <tr>
                                                <td><i class="fas fa-car"></i></td>
                                                <td>'.$row['model'].'</td>
                                                <td><i class="fas fa-tint"></i></td>
                                                <td>Air Cond.</td>
                                                <td><i class="fas fa-wheelchair"></i></td>
                                                <td>4 Seats</td>
                                            </tr>
                                            <tr>
                                                <td><i class="fas fa-door-open"></i></td>
                                                <td>4 Door</td>
                                                <td><i class="fas fa-magic"></i></td>
                                                <td>'.$row['engine_type'].'</td>
                                                <td><i class="fas fa-gas-pump"></i></td>
                                                <td>'.$row['fuel_type'].'</td>
                                            </tr>
                                        </table>
                                        
                                    </div>
                                    <div>
                                        <h4>3,700 PKR/day</h4>
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

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">LOGIN</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./index.php" method="post">
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