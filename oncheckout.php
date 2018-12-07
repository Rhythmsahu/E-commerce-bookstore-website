<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "ebook");   
if(isset($_POST["submit"])){
	$remove_item = $_POST['submit'];
	$query = "DELETE FROM cart WHERE book_id = $remove_item";
	$result = mysqli_query($connect,$query);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm Order Details</title>
        <link rel='stylesheet' type='text/css' href='style.css'>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
        <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
        <script src="js/login_sms.js"></script>
        <script
                src="http://code.jquery.com/jquery-1.12.4.min.js"
                integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
                crossorigin="anonymous"></script>
                <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
<style type="text/css">
	body{
		margin:0;	
	}
	.navbar{
		/*
			add navbar css
		*/
		width: 100%;
		height: 50px;
		background-color: red;
	}
	.main-container{
		background-image: url("img/order2 - copy.jpg");
		background-repeat: no-repeat;
		width: 100%;
		padding-bottom: 100px; 
		position: relative;
		top: 0;
		left: 0;
	}

	@keyframes popOut{
			from {transform: scale(0)};
			to {transform: scale(1)};
		}

	.review-order-div-bg{
		animation: popOut 2s;
		overflow: auto;
		position: relative;
		float: left;
		top:70px;
		left: 60px;
		width: 600px;
		padding-bottom: 100px;
		background-color: #3D698E; 
		opacity: 0.85;
		border-radius: 35px;
		margin-right: 40px;
	}
	.review-order-div{
		width: 500px;
		padding-bottom: 50px; 
		position: relative;
		top:50px;
		left: 50px;
		background-color: white;
		opacity: 1;
		border-radius: 20px;
		border: groove 5px red;
	}
	.review-heading{
		padding: 30px;
		text-align: center;
		color: black;
                font-size: 30px;
                font-weight:bolder;
                font-family:Georgia;
                
	}
	#heading-hr{
		position: relative;
		top:-40px;
		width: 300px;
		background-color:rgb(242, 37, 26);
		height: 2px;
		border-style: groove;
	}
	.cart-items{
		padding-left:30px;
		padding-right: 30px;
	}
	.book-link{
		color: #3D698E;			
		text-decoration: none;
		font-size: 120%;
		font-family: Georgia;
	}
	
	.review-table,th,td{
		border-collapse: collapse;
		height: 30px;
		border: solid 1px black;
                color: black;
	}
	.book-price{
		font-size: 140%;
	}
	.book-link:hover{
		color: #E35D54;
		font-size: 125%;
	}
	.remove-item{
		text-decoration: none;
		color: black;
		background-color: Transparent;
	    border: none;
	    font-size: 100%;
	}
	.remove-item:hover{
		color: red;
		font-size: 120%;
	}
	.controls{
		position: relative;
		top:-10px;
		overflow: auto;
		width: 100%;
		height: 250px;
	}
	.control-element{
		opacity: 0.8;
		position: relative;
		float: left;
		margin-top: 70px;
		margin-left:240px; 
		width: 320px;
		height: 150px;
		background-color: white;
		border-radius: 25px;
		border:5px solid #3D698E;
		font-size: 250%;
		color: red;
		padding: 5px;
	}
	.link{
		text-decoration: none;
		color: red;
                
	}
	.link:hover{
		color: green;
	}
	.review-image{
		opacity: 0.9;
		width: 200px;
		position: relative;
		left: -600px;
		top: 70px;
		z-index: 1;
		border-radius: 25px;
		transform: rotate(-30deg);
		border:groove red 1px;
	}
	.location-div-bg{
		position: relative;
		top:-65px;
	}
	.delivery-address-div{
		border-radius: 25px;
		background-color: red;
		margin-left: 50px;
		width: 350px;
		padding: 25px;
	}
	.address{
		font-size: 100%;
		color: white;
		font-family: georgia;
	}
	.address-div{
		margin-bottom: 25px;
	}
	.add-address-div{
		margin-top: 70px;
		text-align: center;
		color: white;
	}
	.new-address-btn{
		width: 150px;
		height: 60px;
		border-radius: 15px;
		font-size: 120%;
		background-color:rgb(66, 145, 201);
		color: white;
		outline: none;
		border: none;
		padding: 10px;

	}
	.new-address-btn:hover{
		background-color:rgb(0, 114, 196);
	}
	.animate{
		animation: popOut 1s;
	}
</style>
</head>
<body>
	<nav class="navbar navbar-fixed-top" id="nav"
         style="border-bottom-color: red;
                height: 52px;
                background-color: white;
                ">
        <div class="container">
            <div class="navbar-header" id="logo">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#mynav">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                <a href="index.php" class="navbar-brand" style="color:#ff0000">E-BOOK</a>
            </div>
            <a href="about.php" target="by_view"><ul class="nav navbar-nav navbar-left">
                     <li style="background-color: #ff0000;color:white; height: 51px; width: 100px;
                         padding: 12px;">
                     <center>About</center></li>
            </ul></a>
            <a href="#"><ul class="nav navbar-nav navbar-left">
                     <li style="background-color: #fff;color:red; height: 51px; width: 100px;
                         padding: 12px;">
                     <center>Contact</center></li>
            </ul></a>
            <div class="dropdown nav navbar-nav navbar-left">
                <button class="dropbtn" style="background-color:red;
            color: white;">Genre</button>
                <div class="dropdown-content">
                    <a href="children_literature.php">Children's literature</a>
                    <a href="fiction.php">Fiction</a>
                    <a href="horror_fiction.php">Horror Fiction</a>
                    <a href="mystery.php">Mystery</a>
                    <a href="non_fiction.php">Non-Fiction</a>
                    <a href="novel.php">Novel</a>   
                    <a href="romance.php">Romance</a>
                    <a href="sci_fi.php">Sci-Fiction</a>
                    <a href="sci_tech.php">Science and Technology</a>
                </div>
            </div>
            
            <?php if(isset($_SESSION['users'])):?>
            <div class="nav navbar-nav navbar-right" id="mynav1">
                <div class="dropdown">
                  <button class="dropbtn" style="background-color:red;color: white;"><span class="glyphicon glyphicon-user"> </span> <?php echo $_SESSION['users']?> 
                  </button>
               <div class="dropdown-content">
                    <a href="logout.php"><span class="glyphicon glyphicon-log-out"> </span> Logout    </a>
                    <a href="account.php"><span class="glyphicon glyphicon-cog"> </span> My Account</a>
                    
                </div>
                </div>
                
                <div style="width: 120px;"></div>
               <!-- <li>
                    
                </li> -->       
            </div>
            <?php else:?>
            <ul class="nav navbar-nav navbar-right" id="mynav">
               
               
                <li>
                    <a href="signup.php" target="by_view" style="background-color: #ff0000;color:white;"><span class="glyphicon glyphicon-user"> </span> Sign Up    </a>
                </li> 
                <li>
                    <a data-toggle="modal" data-target="#mymodal" style="background-color: #fff;color:red;" ><span class="glyphicon glyphicon-log-in"> </span> Login</a>
                </li>       
            </ul> <?php endif;?>
        </div>
        </nav>

	<div style="background-attachment: fixed;" class="main-container">
		<div class="wrapper">
			<img class="review-image" src="img/i2.jpg">
			<div class="review-order-div-bg animate">
				<div class="review-order-div">
                                    <h2 class="review-heading">Review Your Order</h2>
                                    <center><hr id="heading-hr"></center>
					<div class="cart-items">
					<table class="review-table">	
                                            <tr>
                                                        <th width="450"><center>Book Name</center></th>
							<th width="60"><center>Price</center></th>
							<th width="60"><center>Action</center></th>
						</tr>
			            <?php
			               $total = 0;
			               $quantity=0;
			               $username = $_SESSION['userid'];
                                       
			               $itemInCart = True;
			               if($itemInCart){
			                  $query ="SELECT b.title,b.price,b.isbn FROM dashboard1 b,cart c WHERE b.isbn=c.book_id AND c.userid = $username";
			                  $result = mysqli_query($connect,$query);
			                  if(mysqli_num_rows($result)>0)
			                  {
			                     while($row = mysqli_fetch_array($result))
			                     {
			                     ?>
			                     <tr class="review-table">
			                        <td style="padding-left: 10px; font-size: 20px;"><?php echo "$row[0]"?></td>
			                        <td style="text-align: center;"><strong><span class="book-price">&#8377;<?php echo"$row[1]"; ?></span></strong></td>

			                        <form method="POST" action="oncheckout.php">
			                        	<td style="text-align: center;"><button name="submit" type="submit" value="<?php echo "$row[2]";?>" class="remove-item">&#10006</button></td>
			                        </form>
			                     </tr>
			                     <?php
			                     $quantity = $quantity + 1;
			                     $total = $total + $row[1];
			                     $_SESSION["cart_total"]=$total;
			                  }
			               }
			            }
			               ?>
			               
			               <tr>
			               		<td align="right" style="font-size: 120%;font-family:Georgia;padding-right: 5px;">Total</td>
			               		<td colspan="2" align="center" style="font-size: 150%;font-weight: bold;">&#8377;<?php echo"$total"; ?></td>
			               </tr>
			         </table>
					</div>
				</div>
			</div>

			<!--new section ####################################################################-->
			<div class="review-order-div-bg location-div-bg">
				<div class="review-order-div location-div">
					<h1 class="review-heading">Delivery Details</h1>
                                        <center><hr id="heading-hr"></center>
						<div class="delivery-address-div">
						<?php

							$query = "SELECT building,street,place,city,state,pincode,loc_id FROM location l WHERE userid=$username";
							$result = mysqli_query($connect,$query); 
							if(mysqli_num_rows($result) > 0){
								while($row = mysqli_fetch_array($result)){
								?>
								<div class="address-div">
									<input type="radio" name="<?php echo "row[6]"?>"> <span class="address"> <?php echo"$row[0] $row[1] $row[2] $row[3] $row[4] $row[5]";?></span>
								</div>
								<?php
							}
						}
							?>
							<div class="add-address-div">
								Deliver to some other address?<br><br>
                                                                <a href="AddressForm.php" target="by_view"><button class="new-address-btn">Choose new address</button></a>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="controls">
                    <button class="control-element" type="submit" ><a href="index.php" class="link" style="text-decoration:none;">Continue Shopping</a></button>
                    <button class="control-element" style="padding:0px; width:340px;"><a href="payment.php" class="link" style="text-decoration:none;">Proceed to Payment</a></button>
		</div>
	</div>
</body>
<script type="text/javascript">
	
</script>
</html>