<?php


$server = 'localhost';
$user = 'root';
$database = 'db_gogo';
$password = '';

$con = new mysqli($server, $user, $password, $database);

if($con->connect_error) {
  echo "Error: ".$con->connect_error;
}

?>