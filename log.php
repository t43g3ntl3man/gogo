<?php 
session_start();
include("connection.php"); 
?>

<?php
    if(isset($_POST['Login']))
    {
        $query = "SELECT id, password FROM users WHERE username= '".$_POST['username']."'";
        $password = $con->query($query);
        $row = $password->fetch_assoc();
        if($row['password']==$_POST['password'])
        {
            $_SESSION['login'] = true;
            $_SESSION['userId'] = $row['id'];
            if($_SESSION['detailssubmitted'])
            {
                header("Location: reg-detail.php");
            }
            else
                header("Location: dasboard.php");
        }
        else
        {
            $_SESSION['login'] = false;
        }
    }
    
?>