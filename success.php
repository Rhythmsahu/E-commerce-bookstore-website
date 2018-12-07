<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "ebook");
	if(isset($_POST["pay-button"])){
		$user_id = $_SESSION['userid'];
		$card_num = $_POST['cardNum'];
		$name_on_card = $_POST['nameOnCard'];
		$exp_month = $_POST['expMonth'];
		$exp_year = $_POST['expYear'];
		$total = $_SESSION["cart_total"];
		$query = "INSERT INTO payment (`userid`,`card_no`, `name_on_card`, `expiry_month`, `expiry_year`, `amount`) VALUES ($user_id,'$card_num','$name_on_card',$exp_month,$exp_year,$total)";
		$result = mysqli_query($connect,$query);
                $query="SELECT * FROM cart WHERE userid=$user_id";
                $result = mysqli_query($connect,$query);
                while($row= mysqli_fetch_array($result)){
                    $sql="INSERT INTO buy (`userid`,`book_id`) VALUES ($row[0],$row[1])";
                    mysqli_query($connect,$sql);
                }
                $query="DELETE FROM cart WHERE userid=$user_id";
                mysqli_query($connect,$query);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Success</title>
</head>
<body>
	<center>
		<h3 style="color:green;font-size: 220%;">Payment Successful!</h1>
		<h1 style="color:orange;font-size: 500%;">Thank you for shopping with us!</h1>
		<h2>Redirecting you Please do not close or refresh the browser</h3>
		<img src="img/loading1.gif">
		<?php
			header( "refresh:3;url=index.php" );
		?>
	</center>
</body>
</html>