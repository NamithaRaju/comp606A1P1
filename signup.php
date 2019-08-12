<?php
include "config.php";


if(isset($_POST['register_btn'])){


  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  //$password_hash = password_hash($password,PASSWORD_BCRYPT);
  //print_r($password_hash);


  $FetchStatement = "SELECT id FROM users WHERE username = '$username'";
  $stmt = $conn->prepare($FetchStatement);
  $stmt->execute();
  $result = $stmt->get_result();

  $count = $result->num_rows;
  if($count >= 1){
    echo "Username already exists";
  }else{
   //$sql = "INSERT INTO users (username, email, password_hash) VALUES ('$username','$email','$password_hash')";
   $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
    if (mysqli_query($mysqli, $sql)) {
      echo "New record created successfully";
      header("Location: login.php"); 
      echo "Error: " . $sql . "<br>" . mysqli_error( $sql);
  }
  }
}

?>

  