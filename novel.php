<?php include('user_regis.php');?>
<!DOCTYPE html>
<html>
    <head>
        <title>Buy Books of Genre Novel</title>
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
    </head>
    <style>

        

        

        #head-text{
            text-align: center;
            font-family:'Times New Roman', Times, serif;
            font-size: 280%;
            color: cornsilk;
        }

        #second-text{
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
            font-size: 220%;
            color:cornsilk;
        }

        .btn{
            margin-left: 575px;
            margin-top: 56px;
        }

        #first_book{

            height:550px;
            width:inherit;
            border-top-color: floralwhite;
            border-bottom-color: floralwhite;
            background-image: url("img/books-back.jpg");
        }
        
       
        #submission1
        {
            float:left;
            width:200px;
            height:50px;
            border-radius: 5px;
            border-style: dashed;
            margin-top:130px;
            margin-left:-200px;
            background-color: orange;
        }

        #first_text{
            color:white;
            font-size:150%;
        }
        #second_text{
            color:white;
            font-size:150%;
        }
        #third_text{
            color:white;
            font-size:150%;
        }
        #fourth_text{
            color:white;
            font-size:150%;
        }

    </style>
    <body>
         <nav class="navbar navbar-fixed-top" id="nav"
         style="border-bottom-color: red;
                height: 54px;
                background-color: white;
                ">
            <div class="container" style="height: 54px;">
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
        <form method="post" action="novel.php">
            <?php include('errors.php');?>
            <input type="text" name="email" placeholder="Email" required/>
            <input type="password" name="password" placeholder="Password" required/>
          <input type="submit" name="login" value="Login"/>
        </form>
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

      <div class="jumbotron jumbotron-fluid" style="background:url('img/novelBanner.jpg')">
                
        </div>

       
    </body>
</html>
<?php
  $link=mysqli_connect("localhost","root","","ebook");
  if(mysqli_connect_error ()){
    echo "there is an error";
  }
  echo "<br>";
  function create_new_id($q, $ab , $cd , $ef , $gh ,$ij, $ku, $mer, $ert , $ghy , $mnb , $uyt )
  {
    $x=$ab;
    $y=$cd;
    $z=$ef;
    $u=$gh;
    $iop=$ij;
    $ytr=$ku;
    $tre=$mer;
    $yui=$ert;
    $dse=$ghy;
    $zzz=$mnb;
    $iii=$uyt;
    $x=$x.$q;
    $y=$y.$q;
    $z=$z.$q;
    $u=$u.$q;
    $iop=$iop.$q;
    $ytr=$ytr.$q;
    $tre=$tre.$q;
    $yui=$yui.$q;
    $dse=$dse.$q;
    $zzz=$zzz.$q;
    $iii=$iii.$q;;
    $id_new = array($x,$y,$z,$u,$iop,$ytr,$tre,$yui,$dse,$zzz,$iii);
    $x=$y=$u=$z=$iop=$ytr=$tre=$yui=$dse=$zzz=$iii=0;
    return $id_new;
  }
  $query="SELECT * FROM dashboard1 WHERE genre='novel'";
  if($result=mysqli_query($link,$query))
  {
    $ert=0;
    $wer=1;
    while($row=mysqli_fetch_array($result))
    {
        if($ert==0)
        {
            $a=$row[0];
            $b=$row[1];
            $c=$row[2];
            $d=$row[3];
            //$med=display_contents($a,$b,$c,$d);
            $id= array("first_text","second_text","third_text","fourth_text","image","title","author","cost","description","genre","fifth_text");
            $ert=1;
            $ytru=create_new_id("$ert","$id[0]","$id[1]","$id[2]","$id[3]","$id[4]","$id[5]","$id[6]","$id[7]","$id[8]","$id[9]","$id[10]");
            $med1=$ytru;
            //$med2=$med[1];
            $ert=1;
        }
        if($ert==1)
        {
            $wer+=1;
            $a=$row[1];
            $b=$row[2];
            $c=$row[6];
            $d=$row[4];
            $e=$row[3];
            $f=$row[7];
            $id= $med1;
            $dir='bookimg';
            echo " 
                <div id='first_book'>
                    <img id='$id[4]' src='$dir/$f' style='width:200px;
                    height: 200px;
                    background-color: azure;
                    float:left;
                    margin-left: 40px;
                    margin-top: 80px;
                    border-radius: 9px;'>

                   

                    
                    <div id='$id[5]' style=' width:720px;
                    height: 100px;
                    float:right;
                    margin-right: 178px;
                    margin-top:50px;
                    border-radius: 6px; '>

                    <p id='$id[0]'  style='color:white;font-style: italic;font-size: 200%;margin-left:20px;margin-top:5px;text-align:center;'></p> 

                    </div>
                    <div id='$id[6]' style=' width:300px;
                    height:50px;
                    float:right;
                    margin-top:180px;
                    margin-right:-300px;'>

                    <p id='$id[1]' style='color:white;font-style: italic;font-size: 120%;margin-left: 20px;'></p>

                    </div>
                    <div id='$id[7]' style='width:200px;
                    height:50px;
                    float: right;
                    border-color: rgb(0, 255, 21);
                    margin-top:-50px;
                    margin-right:140px;'>
                    
                    <p id='$id[2]'style='color:white;font-style: italic;font-size: 120%;margin-left: 20px;'></p>
                    
                    
                    </div>

                    <div id='$id[8]' style=' width:800px;
                    height:120px;
                    float:right;
                    margin-top: 80px;
                    margin-right:100px;'>
                    
                    <p id='$id[3]'style='color:white;font-style: italic;font-size: 120%;margin-left: 20px;'></p>
                    
                    
                    </div>

                    

                    <div id='$id[9]' style='width:200px;
                    height:50px;
                    float:right;
                    margin-top: -50px;
                    margin-right:-530px;'>

                    <p id='$id[10]'style='color:white;font-style: italic;font-size: 120%;margin-left: 20px;'></p>

                    </div>

                  <form method='POST' action='addToCart.php'>
                    <button type='submit' name='submit' id='submission1' value='$row[5]'>Add To Cart</button>
                    </form>
                </div>";

                $dir='bookimg';

                echo "<script>
                    document.getElementById('$id[0]').innerHTML='$a';
                    document.getElementById('$id[1]').innerHTML='Written by'+' '+'$b';
                    document.getElementById('$id[2]').innerHTML='Price is'+' '+'₹'+' '+'$c';
                    document.getElementById('$id[3]').innerHTML='$d';
                    document.getElementById('$id[10]').innerHTML='Genre is'+' '+'$e';
                    
                </script>";
                $_SESSION['path']=basename($_SERVER['REQUEST_URI']);
            $med1=create_new_id($wer , $id[0] , $id[1], $id[2] , $id[3] , $id[4], $id[5], $id[6], $id[7], $id[8], $id[9], $id[10]);
        }
        echo "<br>";
    }
  }
?>