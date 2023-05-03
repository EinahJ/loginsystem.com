<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PolySocial - User</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
            <div class="content">
            <a href="login.php" class="btn">Login</a>
            <a href="register.php" class="btn">Register</a>
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </div>
    </body>
</html>