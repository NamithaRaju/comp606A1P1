<?php

error_reporting(0);

$user = "root";
$password = "";
$database = "authentication";
$host = "localhost";

$mysqli = mysqli_connect($host, $user, $password, $database);
$conn = new mysqli($host, $user, $password, $database);
if ($mysqli == false) {


  echo 'error';
  header("location: sitedown.php");
}
//else{
//    echo 'run';
//}
$mysqli->autocommit(true);

error_reporting(E_ALL);
