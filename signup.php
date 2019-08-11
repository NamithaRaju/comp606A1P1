<?php
include "config.php";


if(isset($_POST['register_btn'])){


  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  //$password2 = $_POST['password2'];

//if ($password == $password2) {
  //create user
  //$password =md5($password);
  $sql = "INSERT INTO users (username, email, password) VALUES ('$username','$email','$password')";
  // $run = mysqli_query($db, $sql);
  //$stmt = $mysqli->prepare($InsertStatement);
  //$stmt->execute();
  //$result = $stmt->get_result();
  // $outp = $result->fetch_all();

  if (mysqli_query($mysqli, $sql)) {
    echo "New record created successfully";
    header("Location: login.php"); 
    echo "Error: " . $sql . "<br>" . mysqli_error( $sql);
}



 // print_r($result);
 // echo "New User Created";
//}// else {
  //echo "Passwords didnot match\n";
//}

}

?>