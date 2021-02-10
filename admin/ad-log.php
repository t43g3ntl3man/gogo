<?php include("connection.php") ?>
<?php
    session_start();
    if(isset($_POST['Admin-Login']))
    {
       $query = "SELECT password FROM users WHERE username = '".$_POST['username']."' AND admin = true";
       $password = $con->query($query);
        $row = $password->fetch_assoc();
        if($row['password']==$_POST['password'])
        {
            $_SESSION['admin'] = true;
            header("Location: admin-panel.php");
        }
        else
        {
            $_SESSION['admin'] = false;
            header("Location: admin-login.php");
        }
    }
    
?>