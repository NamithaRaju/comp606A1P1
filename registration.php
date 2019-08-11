<?php
require 'signup.php';
?>
<!DOCTYPE html>
<html>

<head>
   <title>Register,login and logout</title>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>



   <div class="header">
      <h1>Register,login and logout</h1>
   </div>
   <form method="post" action="signup.php">
      <table>
         <tr>
            <td>Username:</td>
            <td><input type="text" name="username" class="textInput"></td>
         </tr>
         <tr>
            <td>Email:</td>
            <td><input type="email" name="email" class="textInput"></td>
         </tr>
         <tr>
            <td>Password:</td>
            <td><input type="password" name="password" class="textInput"></td>
         </tr>
         <tr>
            <td>Password again:</td>
            <td><input type="password" name="password2" class="textInput"></td>
         </tr>
         <tr>
            <td>Submit:</td>
            <td><input type="submit" name="register_btn" value="Register"></td>
         </tr>
      </table>
      <p>
  		Already a member? <a href="login.php">Sign in</a>
  	   </p>
   </form>
</body>

</html>