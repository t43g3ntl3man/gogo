<?php 
session_start();
if(!$_SESSION['login'])
{
    $_SESSION['detailssubmitted'] = true;
    header("Location: login.php");
}
else
{
    header("Location: reg-detail.php");
}
include("connection.php");
?>

<?php 
    session_start();
    if(isset($_POST['book']))
        {
            $pickuploc = $_POST['pickuploc'];
            $dropoffloc = $_POST['dropoffloc'];
            $pickupdate = $_POST['pickupdate'];
            $dropoffdate = $_POST['dropoffdate'];
            $pickuptime = Date('h:i A', strtotime($_POST['pickuptime']));
            $dropofftime =  Date('h:i A', strtotime($_POST['dropofftime']));
            $carid = $_POST['id'];
            $query = "INSERT INTO registrations (pickuploc, dropoffloc, pickupdate, dropoffdate, pickuptime, dropofftime, carid) Values ('$pickuploc', '$dropoffloc', '$pickupdate', '$dropoffdate', '$pickuptime', '$dropofftime', '$carid')";
            #echo $query;;
            #$con->query($query);
            #header("Location: index.php");
        }
?>

