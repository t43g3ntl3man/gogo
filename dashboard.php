
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .dashboard {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            padding: 20px;
        }

        .dashboard-btn {
            display: flex;
            justify-content: space-between;
            align-content: center;
            /* padding: 0 10px; */
            width: 100%;
        }

        .dashboard-btn button {
            margin: 10px;
            flex: 1;
            background-color: #f2f2f2;
            color: black;
            transition: .3s ease-in;
            outline: none;
        }

        .dashboard-btn button:hover {
            background-color: #ee0000;
            color: white;
        }

        .dashboardDetail {
            width: 100%;
            background-color: #f2f2f2;
            padding: 10px;
        }

        .dashboardDetail p {
            font-weight: bold;
        }

        .dashboardDetail span {
            font-weight: 300;
        }

        @media (max-width: 800px) {
            .dashboard {
                flex-direction: column;
            }

            .dashboard-btn {
                padding: 10px 0px;
                justify-content: center;
                flex-direction: row;
            }

            .dashboard-btn button {
                margin-right: 10px;
            }
        }

        @media (max-width: 400px) {
            .dashboard-btn button {
                font-size: 16px;
                margin-right: 10px;
            }
            .dashboardDetail p {
                font-size: 12px;
                font-weight: bold;
            }

            .dashboardDetail span {
                font-weight: 300;
            }
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <div class="dashboard-btn">
            <button type="button" class="btn btn-lg">ACTIVE</button>
            <button type="button" class="btn btn-lg">SCHEDULE</button>
            <button type="button" class="btn btn-lg">HISTORY</button>
        </div>
        <div class="dashboardDetail">
            <p>Name: <span>tmr ali</span></p>
            <p>Booking ID: <span>001061</span></p>
            <p>Booking Type: <span>Full Day</span></p>
            <p>Booking Date: <span>Feb 8, 2021</span></p>
            <p>Booking Time: <span>05:24 PM</span></p>
            <p>Vehicle: <span>HONDA Civic</span></p>
            <p>Pickup Loc: <span>Avari Towers Karachi, Fatima Jinnah Road, Karachi Cantonment, Karachi, Pakistan</span>
            </p>
            <p>Dropoff Loc: <span>80 Khayaban-E-Rizwan, Phase 7 Ext Defence Housing Authority, Karachi, Karachi City,
                    Sindh,
                    Pakistan</span></p>
            <p>Start Date: <span>Feb 8, 2021</span></p>
            <p>Start Time: <span>5:23 PM</span></p>
            <p>Start Time: <span>5:23 PM</span></p>
            <p>End Time: <span>5:28 PM</span></p>
            <p>No of Days: <span>1</span></p>
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