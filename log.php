<?php 
session_start();
include("connection.php"); 
?>

<?php
    if(isset($_POST['Login']))
    {
        $query = "SELECT password FROM users WHERE username= '".$_POST['username']."'";
        $password = $con->query($query);
        $row = $password->fetch_assoc();
        if($row['password']==$_POST['password'])
        {
            $_SESSION['login'] = true;
            if($_SESSION['detailssubmitted'])
            {
                header("Location: details.php");
            }
            else
                header("Location: index.php");
        }
        else
        {
            $_SESSION['login'] = false;
        }
    }
    
?>