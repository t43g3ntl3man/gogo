<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="./assets/css/theme.css"> -->
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
            height: 80px;
            width: 100%;
            z-index: 100;
            position: fixed;
            top: 0;
            left: 0;
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

        @media (max-width: 858px) {
            .nav {
                flex-direction: row-reverse;
            }

            .checkbtn {
                display: block;
            }

            ul {
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #ee0000;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }

            nav ul li {
                display: block;
                margin: 50px 0;
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
        .banner{
            margin-top: 90px;
            width: 100%;
            min-height: calc(100vh - 90px);
        }
        .adminForm{
            margin-bottom: 10px;
        }
        .adminForm .block-title{
            text-align: center;
            color: gray;
            text-transform: uppercase;
            font-size: 40px;
        }
        .adminForm .button{
            text-align: center;
        }
        .adminForm label{
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #ee0000;
            font-weight: bold;
        }
        .adminForm input, select{
            border-color: #ee0000 !important;
            height: 50px;
        }
        .adminForm .btn{
            background-color: #ee0000;
            width: 50%;
            color: white;
            align-items: center;
            font-weight: bold;
            transition: ease .6s;
        }
        .adminForm .btn:hover{
            width: 100%;
        }
    </style>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <img class="logo" src="../assets/img/logo.png" alt="logo" />
        <ul> 
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">VAHICLES</a></li>
            <li><a href="#">FAQS</a></li>
            <li><a href="#">HOT DEALS</a></li>
            <li><a href="#">CONTACT</a></li>
            <li><a class="loginSignup" href="#">LOGIN</a></li>
            <li><a class="loginSignup" href="#">SIGNUP</a></li>
        </ul>
    </nav>

    <div class="banner container adminForm">
        <div class="row">
            <div class="col-lg-12">
                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="block-title"><span>Add vehicle</span></h3>
                                <form method="post" action="upload2.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Car Name <i class="fas fa-car"></i></label>
                                                <input class="form-control" name="c_name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Car Model <i class="far fa-steering-wheel"></i></label>
                                                <input class="form-control" name="c_model" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Engine Number <i class="fas fa-car-battery"></i></label>
                                                <input class="form-control" name="e_number" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Chassis Number <i class="fas fa-list-ol"></i></label>
                                                <input class="form-control" name="c_number" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Fuel Type <i class="fas fa-gas-pump"></i></label>
                                                <select class="form-control" id="exampleFormControlSelect1"
                                                    name="f_type">
                                                    <option>Petrol</option>
                                                    <option>CNG</option>
                                                    <option>Diesel</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Engine Type <i class="far fa-stroopwafel"></i></label>
                                                <select class="form-control" id="exampleFormControlSelect1"
                                                    name="e_type">
                                                    <option>Manual</option>
                                                    <option>Automatic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Car Type <i class="fal fa-car-mechanic"></i></label>
                                                <select class="form-control" id="exampleFormControlSelect1"
                                                    name="c_type">
                                                    <option>Economy</option>
                                                    <option>Executive</option>
                                                    <option>Luxuriuos</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row col-md-12">
                                            <div class="col-md-6">
                                                <label for="exampleFormControlSelect1">Add Car picture</label>
                                                <input class="form-control-file" type="file" name="fileToUpload[]"
                                                    id="fileToUpload" multiple />
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleFormControlSelect1">Add License picture</label>
                                                <input class="form-control-file" type="file" name="license[]" id="license"
                                                    multiple />
                                            </div>
                                        </div>
                                        <div class="col-md-12 button">
                                            <input class="btn" type="submit" name="submit" value="Add">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.12.0/dist/umd/popper.min.js"
    integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
    integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
    crossorigin="anonymous"></script>

</html>