<?php include("connection.php") ?>
<?php
    if(isset($_POST['signup']))
    {
        $name=$_POST['first-name'];
        $num=$_POST['number'];
        $email=$_POST['email'];
        $password = $_POST['password'];
        $confirm = $_POST['confirm-password'];
        $bool = false;
        if($_POST['password']==$_POST['confirm-password'])
        {
            $query = "INSERT INTO users (username, num, email, password, verified) Values ('$name', '$num', '$email', '$password', false)";
            $chk = $con->query($query);
            header("Location: login.php");
        }
    }
    else
        echo 'dead';
?>