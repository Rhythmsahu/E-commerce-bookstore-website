<?php include('user_regis.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>E-Book</title>
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
        <style>
body, html {
  height: 100%;
  margin-top: 0px;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  opacity: 0.9;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
 

}
.bgimg-1 {
  background-image: url("img/b1.png");
  min-height: 600px;
}

.bgimg-2 {
  background-image: url("img/b2.jpg");
  min-height: 300px;
}

.bgimg-3 {
  background-image: url("img/b3.jpg");
  min-height: 500px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
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
            <a href="contact.php"><ul class="nav navbar-nav navbar-left">
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
            <div class="dropdown nav navbar-nav navbar-left">
            <button class="dropbtn" style="width: 500px;background-color:white;color: red;height: 51px">Shopping Cart</button>
                <div class="dropdown-content" style="width: 500px;">
                    <?php
               $total = 0;
               $quantity=0;
               $username = $_SESSION['userid'];
               $itemInCart = True;
               if($itemInCart){
                  $query = "SELECT b.title,b.price FROM dashboard1 b,cart c WHERE b.isbn=c.book_id AND c.userid = $username";
                  $result = mysqli_query($con,$query);
                  if(mysqli_num_rows($result) > 0)
                  {
                     while($row = mysqli_fetch_array($result))
                     {
                     ?>
                     <a style="text-decoration: none;font-size: 120%;" class="no-link"><?php echo "$row[0]";?><span style="position: relative;float: right;"><?php echo "&#8377;$row[1]"; ?></span></a>
                     <?php
                     $quantity = $quantity + 1;
                     $total = $total + $row[1];
                  }
               }
            }
            ?>
                    <a class="checkout" href="oncheckout.php" style="text-align: center;font-size: 120%;color: green;font-weight: bold;">Proceed to Checkout</a>
                </div>
            </div>
            
            
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
    
    <div class="modal" id="mymodal">
    <div id="login-box" class="animate">
    
      <div class="left-box">
        <h1> Login </h1>
        <form method="post" action="index.php">
            <?php include('errors.php');?>
            <input type="text" name="email" placeholder="Email" required/>
            <input type="password" name="password" placeholder="Password" required/>
          <input type="submit" name="login" value="Login"/>
        </form>
        <?php $_SESSION['path']=basename($_SERVER['REQUEST_URI']);?>
      </div>
      <div class="right-box">
          <span data-dismiss="modal" class="close" title="Close PopUp">X</span>
          <center> <span class="signinwith" style="font-size:25px;">"An Author Creates a World in Every Book They Write,
              The Reader Brings That World to Life in their Imagination"</span></center>
        
        <?php
      if(isset($_SESSION['username'])):
      ?>
      <p>Hello <?=$_SESSION['username']?>. You're logged In.</p>
      <p><a href="response.php?logout=true">Logout</a>
      <?php
      else:
      ?>
      <div>
          <form method="post" action="response.php" id="frm_login">          
          <input type="hidden" name="login"/>
          <input type="hidden" name="code" id="login_code"/>
          <input type="hidden" name="login_via" id="login_via"/>
        </form>
          
      </div>
      <?php endif; ?> 
            
        
     </div>
        
    </div>
    </div>
  
   <div class="bgimg-1">
    <div class="row">
        <div class="col-xs-8"> 
        </div> 
        <div class="col-xs-4" style="padding-top:200px; "> 
            <h1 style="font-size:400%;color: #000; text-align: left;">Buy <span style="color:red;">Your</span> Favorite <span style="color:red;">
                    Books</span> From<span style="color:red;"> Here</span>
            </h1>
            <a href="genre_1_final.php"><button type="submit" style="background-color: red;
                       color: #fff; border-radius: 8px; height: 50px;width: 172px; border-color: red;">Explore</button></a>      
        </div> 
    </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">FEATURED GENRE</h3>
  <center><p><b>Choose your favorite book from over 9 different genres</b></p></center><br>       
  <div id="myslider" class="carousel slide tyu" data-ride="carousel" style="height:200px">
                        <div  class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="row">
                                  <a href="fiction.php">   <div class="col-sm-4">
                                        <div class="thumbnail" style="background-color:red; height: 200px;
                                             color: #fff;">
                                            <center> <h1 style="font-size: 50px;">FICTION</h1><br>
                                                 <?php
                                                    $sql="SELECT * FROM dashboard1 WHERE genre='fiction'";
                                                    $result=mysqli_query($con,$sql);
                                                    $v=mysqli_num_rows($result);
                                                   ?>
                                                <h3><?php echo "$v";?> Books</h3></center>
                                            </div>
                                      </div></a>
                                    <a href="horror_fiction.php"> <div class="col-sm-4">
                                        <div class="thumbnail" style="background-color:white; height: 200px; color: red;">
                                               <center> <h1 style="font-size: 50px;">HORROR</h1><br>
                                                    <?php
                                                    $sql="SELECT * FROM dashboard1 WHERE genre='horror'";
                                                    $result=mysqli_query($con,$sql);
                                                    $v=mysqli_num_rows($result);
                                                   ?>
                                                <h3><?php echo "$v";?> Books</h3></center> 
                                        </div>
                                        </div></a>
                                    <a href="children_literature.php"><div class="col-sm-4">
                                        <div class="thumbnail" style="background-color:red; height: 200px;color: #fff">
                                            <center> <h1 style="font-size: 40px;">CHILDREN LITERATURE</h1>
                                                 <?php
                                                    $sql="SELECT * FROM dashboard1 WHERE genre='children'";
                                                    $result=mysqli_query($con,$sql);
                                                    $v=mysqli_num_rows($result);
                                                   ?>
                                                <h3><?php echo "$v";?> Books</h3></center>
                                        </div>
                                        </div></a>
                                </div>
                            </div>
                            <div class="item">
                               <div class="row">
                                   <a href="novel.php">   <div class="col-sm-4">
                                        <div class="thumbnail" style="background-color:white; height: 200px;color: red;">
                                            <center> <h1 style="font-size: 50px;">NOVEL</h1><br>
                                                 <?php
                                                    $sql="SELECT * FROM dashboard1 WHERE genre='novel'";
                                                    $result=mysqli_query($con,$sql);
                                                    $v=mysqli_num_rows($result);
                                                   ?>
                                                <h3><?php echo "$v";?> Books</h3></center> 
                                        </div>
                                       </div></a>
                                   <a href="mystery.php"> <div class="col-sm-4">
                                        <div class="thumbnail" style="background-color:red; height: 200px;color: #fff">
                                            <center> <h1 style="font-size: 50px;">MYSTERY</h1><br>
                                                 <?php
                                                    $sql="SELECT * FROM dashboard1 WHERE genre='mystery'";
                                                    $result=mysqli_query($con,$sql);
                                                    $v=mysqli_num_rows($result);
                                                   ?>
                                                <h3><?php echo "$v";?> Books</h3></center>
                                        </div>
                                       </div></a>
                                   <a href="non_fiction.php"> <div class="col-sm-4">
                                        <div class="thumbnail" style="background-color:white; height: 200px; color: red;">
                                            <center> <h1 style="font-size: 50px;">NON-FICTION</h1><br>
                                                 <?php
                                                    $sql="SELECT * FROM dashboard1 WHERE genre='non-fiction'";
                                                    $result=mysqli_query($con,$sql);
                                                    $v=mysqli_num_rows($result);
                                                   ?>
                                                <h3><?php echo "$v";?> Books</h3></center> 
                                        </div>
                                       </div></a>
                                </div></div>
                            <div class="item">
                                <div class="row">
                                    <a href="sci_fi.php"> <div class="col-sm-4">
                                        <div class="thumbnail" style="background-color:white; height: 200px; color: red;">
                                            <center> <h1 style="font-size: 50px;">SCI-FI</h1><br>
                                                <?php
                                                    $sql="SELECT * FROM dashboard1 WHERE genre='sci-fiction'";
                                                    $result=mysqli_query($con,$sql);
                                                    $v=mysqli_num_rows($result);
                                                   ?>
                                                <h3><?php echo "$v";?>  Books</h3></center> 
                                        </div>
                                        </div></a>
                                    <a href="romance.php">  <div class="col-sm-4">
                                        <div class="thumbnail" style="background-color:red; height: 200px; color: #fff;">
                                            <center> <h1 style="font-size: 50px;">ROMANCE</h1><br>
                                                <?php
                                                    $sql="SELECT * FROM dashboard1 WHERE genre='romance'";
                                                    $result=mysqli_query($con,$sql);
                                                    $v=mysqli_num_rows($result);
                                                   ?>
                                                <h3><?php echo "$v";?> Books</h3></center> 
                                        </div>
                                        </div></a>
                                    <a href="sci_tech.php"><div class="col-sm-4">
                                        <div class="thumbnail" style="background-color:white; height: 200px; color: red;">
                                            <center> <h1 style="font-size: 40px;">SCIENCE AND TECHNOLOGY</h1>
                                                 <?php
                                                    $sql="SELECT * FROM dashboard1 WHERE genre='science and technology'";
                                                    $result=mysqli_query($con,$sql);
                                                    $v=mysqli_num_rows($result);
                                                   ?>
                                                <h3><?php echo "$v";?> Books</h3></center> 
                                        </div>
                                        </div></a>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myslider" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                         <a class="right carousel-control" href="#myslider" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                </div>


<div class="bgimg-2">
    <div class="row" style="color:#fff;">
        <div class="col-xs-4">
            <center><h1>Total Users</h1>
             <?php
             $sql="SELECT * FROM users";
             $result=mysqli_query($con,$sql);
             $v=mysqli_num_rows($result);
            ?>
            <span style="font-size:80px;"><?php echo "$v";?>+</span><br>
            <h1>Counting</h1></center>
        </div>
        <div class="col-xs-4">
            <center><h1>Today's Visitors</h1>
            <?php
              $date=date("Y-m-d");
             $sql="SELECT * FROM visitor WHERE date='$date'";
             $result=mysqli_query($con,$sql);
             $v=mysqli_num_rows($result);
            ?>
                <span style="font-size:80px;"><?php echo "$v";?>+</span><br>
            <h1>Counting</h1></center>
        </div>
        <div class="col-xs-4">
            <center><h1>Total Books</h1>
           <?php
             $sql="SELECT * FROM dashboard1";
             $result=mysqli_query($con,$sql);
             $v=mysqli_num_rows($result);
            ?>
            <span style="font-size:80px;"><?php echo "$v";?>+</span><br>
            <h1>Counting</h1></center>
        </div>
    </div>
</div>

<div style="position:relative;">
  <div style="color:#fff;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
    <h3 style="text-align:center;color: #fff">TOP SELLERS</h3>
    <center><p><b>Our Top 5 Books Among All The Genres</b></p></center><br>
    <div class="row">
        <?php
            $bid=array();
            $image=array();
            $sql="SELECT d.isbn,d.filename FROM dashboard1 d,(SELECT book_id,count(*) FROM buy GROUP BY book_id ORDER BY COUNT(*) DESC) b WHERE d.isbn=b.book_id";
            $result=mysqli_query($con,$sql);
            for($i=0;$i<5;$i++){
                $row= mysqli_fetch_array($result);
                array_push($bid, $row[0]);
                array_push($image, $row[1]);
            }
            ?>
        <div class="col-sm-1">
         </div>
        <div class="col-sm-2">
            <div class="thumbnail" style=" height: 200px;padding: 0px;border:0px ;">
                <img src="bookimg/<?php echo "$image[0]";?>" alt="book" style="height:200px;width: 200px;">
                <form method="post" action="addToCart.php">
                    <button type="submit" name="submit" value="<?php echo "$bid[0]";?>" style="background-color: red;
                    color: #fff; border-radius: 8px; height: 50px;width: 172px;border-color: red;">Add To Cart</button>
               </form>
            </div>
         </div>
         <div class="col-sm-2">
             <div class="thumbnail" style=" height: 200px;padding: 0px;border:0px ;">
                <img src="bookimg/<?php echo "$image[1]";?>" alt="book" style="height:200px;width: 200px;">
                <form method="post" action="addToCart.php">
                    <button type="submit"  name="submit" value="<?php echo "$bid[1]";?>" style="background-color: red;
                    color: #fff; border-radius: 8px; height: 50px;width: 172px;border-color: red;">Add To Cart</button>
               </form>
            </div>
         </div>
         <div class="col-sm-2">
            <div class="thumbnail" style="height: 200px;padding: 0px;border:0px ;">
                <img src="bookimg/<?php echo "$image[2]";?>" alt="book" style="height:200px;width: 200px;">
                <form method="post" action="addToCart.php">
                    <button type="submit"  name="submit" value="<?php echo "$bid[2]";?>" style="background-color: red;
                    color: #fff; border-radius: 8px; height: 50px;width: 172px; border-color: red;">Add To Cart</button>
               </form> 
            </div>
        </div>
        <div class="col-sm-2">
            <div class="thumbnail" style="height: 200px;padding: 0px;border:0px ;">
                <img src="bookimg/<?php echo "$image[3]";?>" alt="book" style="height:200px;width: 200px;">
                <form method="post" action="addToCart.php">
                    <button type="submit"  name="submit" value="<?php echo "$bid[3]";?>" style="background-color: red;
                    color: #fff; border-radius: 8px; height: 50px;width: 172px; border-color: red;">Add To Cart</button>
               </form>  
            </div>
        </div>
        <div class="col-sm-2">
            <div class="thumbnail" style="height: 200px;padding: 0px;border:0px ;">
                <img src="bookimg/<?php echo "$image[4]";?>" alt="book" style="height:200px;width: 200px;">
                <form method="post" action="addToCart.php">
                    <button type="submit"  name="submit" value="<?php echo "$bid[4]";?>" style="background-color: red;
                    color: #fff; border-radius: 8px; height: 50px;width: 172px; border-color: red;">Add To Cart</button>
               </form> 
            </div>
        </div>
        <div class="col-sm-1">
         </div>
  </div>
  </div>
</div>

    <div class="bgimg-3">
        <div>
            <center><h1 style="margin:0px;padding: 20px;color: #000;"><b>Piling Up Your</b> <span style="color:red;">Books...</span>
                </h1><h4 style="color:#000;margin: 0px;">Sell Your Book In <span style="color:red;">3</span> Simple Steps</h4>
                <div class="row" style="padding-top:20px;">
                    <div class="col-sm-4">
                        <div class="thumbnail" style="background-color:transparent; color: red; font-size: 80px; border: none;">
                            <span class="glyphicon glyphicon-log-in" style=""> </span>
                        </div>
                        <h3 style="color:#000;"><b>Login</b></h3>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail" style="background-color:transparent;color: red; font-size: 80px; border: none;">
                            <span class="glyphicon glyphicon-pencil" style=""> </span>
                        </div>
                        <h3 style="color:#000;"><b>Fill The Details</b></h3>
                    </div>
                    <div class="col-sm-4">
                        <div class="thumbnail" style="background-color:transparent;color: red; font-size: 80px; border: none;">
                            <span class="glyphicon glyphicon-send" style=""> </span>
                        </div>
                        <h3 style="color:#000;"><b>Post Your Ad</b></h3>
                    </div>
                </div>
                <?php if (isset($_SESSION['users'])) {     
                            ?>
                <a href="seller_dash.php"> <button type="submit" style="background-color: red; margin-top: 30px;
                color: #fff; border-radius: 8px; height: 50px;width: 172px; border-color: red;">Sell Now</button></a>
                <?php } else {
                   echo ' <a href="seller_login.php"> <button type="submit" style="background-color: red; margin-top: 30px;
                color: #fff; border-radius: 8px; height: 50px;width: 172px; border-color: red;">Sell Now</button></a>';
                } 
                ?>
                
            </center>
        </div>
    </div>
    <div style="background-color: #000;height: 50px;padding: 10px;color: white;">
        <center><p>Copyright © E-Book. All Rights Reserved | Contact Us: +91 90000 00000</p></center>
    </div>
<?php
if(isset($_SESSION['message']) && !empty($_SESSION['message'])){
  echo "<script type='text/javascript'>alert('".$_SESSION['message']."');</script>";
  $_SESSION['message'] = '';
}
?>
    
</body>
</html>