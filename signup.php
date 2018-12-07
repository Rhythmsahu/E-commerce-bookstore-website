<?php include('user_regis.php');?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
        <link rel='stylesheet' type='text/css' href='style.css'>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="loginbox">
            <img src="img/avatar.png" alt="avatar" class="avatar">
        <h1>Sign Up</h1>
        <form method="post" action="signup.php">
            <?php include('errors.php');?>
            <p>Username</p>
            <input type="text"  name="username" placeholder="Enter Username">
            <p>E-Mail</p>
            <input type="text" name="email" placeholder="Email"/>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <p>Phone Number</p>
            <input type="text" name="phno" placeholder="Enter Phone Number"><br>
            <input type="submit" name="submit" value="Sign Up">
        </form>
        
    </div>
    </body>
</html>
