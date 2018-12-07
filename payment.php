<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
	<style type="text/css">
		.container{
			position: relative;
			top:25px;
			margin: 0 auto;
			width: 500px;
			height: 570px;
			z-index: 1000;
		}
		.card{
			width: 100%;
			height: 50%;
			border-radius: 15px;
			outline: none;
		}
		.pay-for{
			border-radius: 10px;
			border: 2px solid rgb(237, 73, 73);
			width: 100%;
			height: 50%;
			
		}
		.payment-button-div{
			text-align: center;
		}
		.payment-button{
			width: 180px;
			height: 50px;
			font-size: 110%;
			position: relative;
			top: -25px;
			border-radius:10px;
			border-collapse: collapse;
			border: none;
			background-color: rgb(237, 73, 73);
			color: white;
			font-family: georgia;
		}
		.payment-button:hover{
			background-color: rgb(247, 19, 19);
		}
		.branding{
			width: 100%;
			height: 25%;
		}
		.card-num-div{
			width: 95%;
			height: 30%;
			
			padding-top: 10px;
			padding-left: 25px; 
		}
		.card-name-date-div{
			width: 100%;
			height: 35%;
		}
		.card-name , .card-expire{
			margin-left: 33px;
			width: 200px;
			height: 90px;
			margin-top: 5px;
			position: relative;
			float: left;
		}
		.card-label{
			color: white;
			font-size: 110%;
			font-family: arial;
		}
		.card-num{
			height: 30px;
			width: 450px;
			background-color: transparent;
			border: none;
			border-bottom: solid 2px rgb(199, 199, 201);
			color: white;
			font-size: 150%;
			font-family: arial;
		}
		.card-num,.card-name-input,.date:focus{
			outline: none;
		}
		input:focus{
			background-color: #383838;
		}
		.card-name-input{
			width: 200px;
			position: relative;
			top: 15px;
			height: 25px;
			background-color: transparent;
			border: none;
			border-bottom: solid 2px rgb(199, 199, 201);
			outline: none;
			color: white;
			font-size: 115%;
		}
		.date{
			color: white;
			font-size: 150%;
			font-family: arial;
			position: relative;
			width: 70px;
			height:25px;
			background-color: transparent;
			border: none;
			border-bottom: rgb(199, 199, 201) solid 2px;
		}
		.date::placeholder{
			color: rgb(193, 191, 191);
		}
		.pay-notice-div{
			width: 100%;
			height: 20%;
			background-color: transparent;
			text-align: center;
			vertical-align: middle;
			line-height: 50px;
		}
		.pay-notice{
			font-size: 110%;
			font-family: Verdana;
		}
		.split-amt{
			width: 100%;
			height: 32%;
			background-color: transparent;
		}
		.total-amt,.shipping-amt{
			width: 150px;
			height: 70px;
			background-color: transparent;
			position: relative;
			float: left;
			left: 50px;
			top: 8px;
			margin-left: 40px;
			text-align: center;
		}
		.final-total-div{
			padding-top: 30px;
			width: 100%;
			height: 90px;
			background-color: transparent;
			text-align: center;
		}
		.pay-for-labels{
			color: #378FCD;
			font-size: 110%;
			font-family: georgia;
		}
		.break-up-amt{
			color: #391DEA;
			font-size: 250%;
			font-weight: bold;
		}
		.final-total{
			font-size: 300%;
			color: rgb(79, 237, 68);
			font-weight: bold;
		}
		.image{
			position: relative;
			left: 60px;
			top: 15px;
		}
		.visa{
			position: relative;
			top:15px;
			margin-left: 300px; 
		}
		#grad1 {
    		 /* For browsers that do not support gradients */
			background-image: linear-gradient(to bottom,rgb(38, 38, 38),rgb(127, 127, 127),black); /* Standard syntax (must be last) */
		}
		body{
			background-image: url("img/bgpayment.jpg");
			background-size: auto;
			background-attachment: fixed;
		}
		.animate{
			animation: popOut 0.5s;
		}
		@keyframes popOut{
			from {transform: scale(0)};
			to {transform: scale(1)};
		}	
	</style>
</head>
<body style="background-attachment: fixed;">
	<form method="POST" action="success.php">
		<div class="container animate">
			<div class="card" id="grad1">
				<div class="branding">
                                    <span class="image float"><img src="img/chip.jpg"></span>
					<span class="visa float"><img src="img/visa.jpg"></span>
				</div>
				<div class="card-num-div">
					<label class="card-label">Card Number</label><br><br>
					<input id="cardNum" class="card-num" name="cardNum" type="text" onkeypress="addHyphen()">
				</div>
				<div class="card-name-date-div">
					<div class="card-name">
						<label class="card-label">Card Holder</label>
						<input name="nameOnCard" type="text" class="card-name-input">
					</div>
					<div class="card-expire">
						<label class="card-label">Expiration Date</label><br><br>
						<input type="text" class="date" name="expMonth" placeholder="09">
						<input style="margin-left: 15px;" type="text" class="date" name="expYear" placeholder="2022">
					</div>
				</div>
			</div>

			<!------------------------------------------ Next Section Begins ----------------------------------------->

			<div class="pay-for">
				<div class="pay-notice-div">
					<span class="pay-notice">Amount Split Up and Total</span>
				</div>
				<div class="split-amt">
					<div class="total-amt">
						<label class="pay-for-labels">Amount</label><br>
						<span class="break-up-amt">&#8377;<?php echo $_SESSION["cart_total"];?></span>						
					</div>
					<div class="shipping-amt">
						<label class="pay-for-labels">Shipping</label><br>
						<span class="break-up-amt">&#8377;0</span>						
					</div>
				</div>
				<div class="final-total-div">
					<label class="pay-for-labels">Total</label><br>
					<span class="final-total">&#8377;<?php echo $_SESSION["cart_total"];?></span>
				</div>
			</div>
			<div class="payment-button-div">
				<button  class= "payment-button" type="submit" name="pay-button" value="">MAKE PAYMENT</button>
			</div>
		</div>
		<?php// echo $_SESSION['cart_total']; ?>
	</form>
	<script type="text/javascript">
		var count = 1;
		var numString = "";
		function addHyphen(){
			count+=1;
			if(count%5==1){
				numString = "";
				numString = document.getElementById("cardNum").value;
				document.getElementById("cardNum").value = document.getElementById("cardNum").innerHTML= numString + " - ";  
				count=2;
			}
		}
	</script>
</body>
</html>