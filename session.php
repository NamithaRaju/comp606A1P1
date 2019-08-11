<?php
include('config.php');
session_start();

$user_check = $_SESSION['login_user'];

// $ses_sql = mysqli_query($db, "select username from users where username = '$user_check' ");

$FetchStatement = "select username from users where username = '$user_check'";
$stmt = $mysqli->prepare($FetchStatement);
$stmt->execute();
$result = $stmt->get_result();


// $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
$row = $result->fetch_assoc();


$login_session = $row['username'];

if (!isset($_SESSION['login_user'])) {
    // header("location:login.php");
    die();
}
