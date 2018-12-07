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
        <title>Location</title>
        <link rel='stylesheet' type='text/css' href='style.css'>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
        <meta charset="UTF-8">
    </head>
    <body>
        <div class="loginbox" style="padding-top: 10px; margin: 0px; border: 0px;">
            <span class="glyphicon glyphicon-map-marker" style="font-size: 100px; color: red;
                  padding-left: 80px;"></span>
        <h1>Location Details</h1>
        <form method="post" action="AddressForm.php">
            <?php include('errors.php');?>
            <p>Building</p>
            <input type="text"  name="building" placeholder="Enter Building Name">
            <p>Street</p>
            <input type="text" name="street" placeholder="Enter Street"/>
            <p>Place</p>
            <input type="text" name="place" placeholder="Enter Place">
            <p>City</p>
            <input type="text" name="city" placeholder="Enter State"><br>
            <p>State</p>
            <input type="text" name="state" placeholder="Enter State"><br>
            <p>Pincode</p>
            <input type="text" name="pincode" placeholder="Enter pincode"><br>
            <input type="submit" name="loc_submit" value="Enter Details">
        </form>
        
    </div>
    </body>
</html>
