<?php
include("config.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $username =  $_POST['username'];
    $password =  $_POST['password'];


    $FetchStatement = "SELECT id FROM users WHERE username = '$username' and password = '$password'";
    $stmt = $conn->prepare($FetchStatement);
    $stmt->execute();
    $result = $stmt->get_result();
    

    $count = $result->num_rows;
    // print_r($result);
    echo $count;


    if ($count >= 1) {
        echo "user found";
        $_SESSION['username'] = $username;

        header("location: welcome.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<html>

<head>
    <title>Login Page</title>



</head>

<body bgcolor="#FFFFFF">


    <form action="" method="post" class="LoginForm">
        <div>Username</div>
        <input type="text" name="username" class="box" />
        <div>Password</div>
        <input type="password" name="password" class="box" /><br /><br />
        <input type="submit" value=" Submit " /><br />
        <p>
          <a href="reset_password.php">Reset password</a>
        </p>
        <p>
            Dont have an account? <a href="registration.php">Sign up</a>
        </p>

    </form>


    <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php if (isset($error)) {
                                                                    echo
                                                                        $error;
                                                                } ?></div>




</body>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100vw;
        height: 100vh;
    }

    .LoginForm {
        display: flex;
        flex-direction: column;
        width: 200px;
        justify-content: flex-start;
    }

    .LoginForm input {
        height: 40px;
        width: 200px;
        border: 1px solid #777;
        border-radius: 40px;
        padding: 0px 10px;
        margin: 5px;
    }
</style>

</html>