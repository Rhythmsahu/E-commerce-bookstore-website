<!DOCTYPE html>
<?php include('user_regis.php');?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> My Account</title>
        <style>
                        /* The side navigation menu */
            .sidebar {
              margin: 0;
              padding: 0;
              width: 200px;
              background-color:#fb2525;
              color: #fff;
              position: fixed;
              height: 100%;
              overflow: auto;
            }

            /* Sidebar links */
            .sidebar a {
              display: block;
              color: #fff;
              padding: 16px;
              text-decoration: none;
            }

            /* Active/current link */
            .sidebar a.active {
              background-color: #fff;
              color: red;
            }

            /* Links on mouse-over */
            

            /* Page content. The value of the margin-left property should match the value of the sidebar's width property */
            div.content {
              margin-left: 200px;
              padding: 1px 16px;
              
            }
        </style>
    </head>
    <body>
        
         <div class="sidebar">
            <div><img src="img/avatar.png"/> </div>
            <a href="index.php" style="text-align:center;">Home</a> 
            <form method="post" action="account.php">
            <button type="submit" name="buy" style="width:200px; height: 50px;background-color:#fb2525;color:white;
                    border: none;">My Purchase</button>
           <button type="submit" name="sell" style="width:200px; height: 50px;background-color:#fb2525;color:white;
                    border: none;">My Sell</button>
           <button type="submit" name="transaction" style="width:200px; height: 50px;background-color:#fb2525;color:white;
                    border: none;">Transaction History</button>
            </form>
        </div>
        
        <!-- Page content -->
        <div class="content">
            <h1 style="font-size: 50px;">Welcome <?php echo $_SESSION['users']?> !!!</h1> 
            <?php
            $user_id=$_SESSION['userid'];
          if(isset($_POST['buy'])){
                $sql="SELECT d.isbn,d.title,d.genre,d.price from dashboard1 d,buy b WHERE d.isbn=b.book_id AND b.userid=$user_id";
                $result = mysqli_query($con,$sql);
                echo "<table style='height:300px;width:800px;text-align:center;'>
               <tr>
                <th style='background-color:red;color:white;'>ISBN</th>
                <th style='background-color:red;color:white;'>Book Title</th>
                <th style='background-color:red;color:white;'>Genre</th>
                <th style='background-color:red;color:white;'>Price</th>
            </tr>"
        
        
         ;
         while($row = mysqli_fetch_array($result)){
             echo "<tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
            </tr>";
         }
         echo "</table>";
             }
          if(isset($_POST['sell'])){
              $sql="SELECT isbn,title,genre,price from dashboard1 WHERE userid=$user_id";
         $result = mysqli_query($con,$sql);
         echo "<table style='height:300px;width:800px;text-align:center;'>
            <tr>
                <th style='background-color:red;color:white;'>ISBN</th>
                <th style='background-color:red;color:white;'>Book Title</th>
                <th style='background-color:red;color:white;'>Genre</th>
                <th style='background-color:red;color:white;'>Price</th>
            </tr>"
        
        
         ;
         while($row = mysqli_fetch_array($result)){
             echo "<tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
                <td>$row[3]</td>
            </tr>";
         }
         echo "</table>";
               
        
        
          }
         if(isset($_POST['transaction'])){
              $sql="SELECT tid,card_no,amount from payment WHERE userid=$user_id";
         $result = mysqli_query($con,$sql);
         echo "<table style='height:300px;width:800px;text-align:center;'>
            <tr>
                <th style='background-color:red;color:white;'>Transaction ID</th>
                <th style='background-color:red;color:white;'>Card Number</th>
                <th style='background-color:red;color:white;'>Amount</th>
            </tr>"
        
        
         ;
         while($row = mysqli_fetch_array($result)){
             echo "<tr>
                <td>$row[0]</td>
                <td>$row[1]</td>
                <td>$row[2]</td>
            </tr>";
         }
         echo "</table>";
         }
          ?>
        
        </div>
    </body>
</html>
