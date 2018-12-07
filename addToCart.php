<?php
	session_start();
	$connect = mysqli_connect("localhost", "root", "", "ebook");
        if(isset($_SESSION['userid'])){
	if(isset($_POST["submit"])){
                 $book_id = $_POST['submit'];
	        $userid = $_SESSION['userid'];
                $b=$_SESSION['path'];
		$query = "INSERT INTO cart VALUES($userid,$book_id)";
		$result = mysqli_query($connect,$query);
                echo "<script>alert('book added to cart');</script>";
                header("refresh:1;url=$b");
                
        }}
        else{
         echo "Please Login";
        }
        return;
?>