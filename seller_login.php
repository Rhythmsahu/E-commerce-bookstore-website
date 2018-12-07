<?php
    session_start();

    if(isset($_POST['submit'])) {

    if (array_key_exists('username', $_POST) OR array_key_exists('password', $_POST)) {
        
        $link = mysqli_connect("localhost", "root", "", "ebook");

            if (mysqli_connect_error()) {
        
                die ("There was an error connecting to the database");
        
            } 
        
            $uname =  mysqli_real_escape_string($link, $_POST['username']);
            $passw = mysqli_real_escape_string($link, $_POST['password']);

            $query = "SELECT * FROM `users` WHERE username = '$uname' AND password = '$passw'";
            $result = mysqli_query($link, $query);
            $row =mysqli_fetch_array($result);

            if (mysqli_num_rows($result)==1) {	// checks if user in database or not

            		if($row[3] == 0){ //checks block_status

	                    
                            $_SESSION['userid'] = $row[0];
                            
                        header("Location: seller_dash.php");
            		
            		} else { 
		               
		               echo "<script type='text/javascript'>alert('You are blocked!')</script>";
            		}

            } else {	// Non-registered users

                echo "<script type='text/javascript'>alert('Invalid Username/Password!')</script>";
            }          
             
    }

  }

?>
<html>
  <head>

  <title>Seller Login</title>
    <style type="text/css">
      
      body {
         background-image: url("img/bg33.png");
         background-size: auto;
         background-attachment: fixed;
      }

      label {
        color: white;
        font-weight: 150%;
        font-size: 150%;
      }

       #id3 {
        color: white;
        width: 400px; 
        position: relative;
        left: 190px;
        font-size : 230%;
      }

      #id4 {
        color: white;
        position: relative;
        left: 220px;
        font-size : 120%;
      }

      .container {
        float: left;
        width: 480px;
        opacity: 0.80;
        border-radius: 50px;
        background-color: #000000;

      }

      .form-control {
        width: 490px;
        height: 40px;
        border-radius: 20px;
        color: white;
        background-color: black;
        opacity: 0.70;
        font-size: 110%;
        padding-left: 15px;
        border-width: 1px;
      }

      .form-group {
        position: relative;
        left: 20px;
        border-width: 0;
      }

      input[type=submit] {
        margin-left: 170px;
        border-radius: 20px;
        font-family:'.LucidaGrandeUI', 'Lucida Grande', 'Lucida sans unicode';
        color: black;
        font-size: 125%;
        padding: 1px 7px;
        display: inline-block;
        background-image: -webkit-linear-gradient(
        #ffffff 0%, #F6F6F6   30%, 
        #F3F3F3 45%, #EDEDED  60%, 
        #eeeeee 100%);
        cursor: default;
        box-shadow: 0px 0px 1px rgba(0,0,0,0.20);
        background-image:-webkit-linear-gradient(
        #acc5e9 0%,     #a3c0f2 18%, 
        #61a0ed 39%,    #55a3f2 70%, 
        #82c2f1 91.72%,   #9AD2F2 100%); 
        box-shadow: 0px 0px 1px rgba(0,0,0,0.65); 
        border-radius: 25px;
        height: 50px;
        width: 150px;
        border:1px solid #9C9C9C;

      }

      input:focus {
        background-color: white;
        color: black;
      }

      a {
      	text-align: center;
      	margin-left: 170px;
      	text-decoration: none;
      	font-size: 135%; 
      	color: white;
      }

      a:hover {
      	color: orange;
      }
      #box  {
          margin-left: 380px;
          width: 560px;
          border: 0px solid white; 
          -webkit-animation: fadein 2s;
          -moz-animation: fadein 2s;
          -ms-animation: fadein 2s;
          -o-animation: fadein 2s;
          animation: fadein 2s;

        }

        @keyframes fadein {
          from { opacity: 0; }
          to   { opacity: 0.80; }
        }

        @-moz-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 0.80; }
        }

        @-webkit-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 0.80; }
        }

        @-ms-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 0.80; }
        }

        @-o-keyframes fadein {
            from { opacity: 0; }
            to   { opacity: 0.80; }
        }



    </style>

  </head>
  <body>

    <div>

      <br><br><br>
      
      <div class="container" id="box">
        <form action="seller_login.php" method="POST" enctype="multipart/form-data">

          <br><br>

          <fieldset class="form-group">
            <label id="id3">Sign In</label>
          </fieldset>

          <br>

          <fieldset class="form-group">
            <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
          </fieldset>

          <fieldset class="form-group">
            <input type="password" name="password" = id="password" class="form-control" placeholder="Password" required>
          </fieldset>
          
          <br>

          <fieldset class="form-group">
              <input type="submit" name="submit" value="Login">
          </fieldset>

          <fieldset class="form-group">
              <label id="id4">--OR--</label>
          </fieldset>

          <fieldset class="form-group">
              <a href="signup.php" target="by_view">Create an Account</a>
          </fieldset>

        </form>

      </div>

    </div>

  </body>

</html>


