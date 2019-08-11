 <?php
 require('config.php');
 session_start();
 
 $username = $_SESSION['username'];
 
 ?>
<html>

    <head>

        <title>Welcome</title>

    </head>

    <body>
        <h1>Welcome,<?php echo $username ?>  </h1>
        <h2><a href="logout.php">Sign Out</a></h2>

    </body>

    </html>