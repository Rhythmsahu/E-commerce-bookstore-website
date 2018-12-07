<?php
  
   session_start();
   if(isset($_FILES['image']) && isset($_POST['submit'])){
      
      $link=mysqli_connect("localhost","root","","ebook");

      if(!mysqli_connect_error()) {


          $uname = $_SESSION['userid'];
          $title = $_POST["title"];
          $author = $_POST["author"];
          $genre = $_POST["genre"];
          $description = $_POST["description"];
          $isbn = $_POST["isbn"];
          $price = $_POST["price"];
          $file_name = $_FILES['image']['name'];
          
                    
          $errors= array();
          $file_size =$_FILES['image']['size'];
          $file_tmp =$_FILES['image']['tmp_name'];
          $file_type=$_FILES['image']['type'];
          $tt=explode('.',$file_name);
          $file_ext=strtolower(end($tt));
          
          $extensions= array("jpeg","jpg","png","txt");
          
          if(in_array($file_ext,$extensions)=== false){
            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
          }
          
          if($file_size > 5242880){
            $errors[]='File size must be below 5MB';
          }
          
          if(empty($errors)==true){
            move_uploaded_file($file_tmp,"bookimg/".$file_name);  
          }          
          echo "<script>alert('$uname,$title,$author,$isbn,$file_name')</script>";
          $query = "INSERT INTO  `dashboard1` VALUES($uname,'$title','$author','$genre','$description',$isbn,$price,'$file_name')";

          $result = mysqli_query($link, $query);

          //echo "<br><br><h1 style='color:red'> Your Ad was Posted Successfully </h1>";
          echo "

<html>
  <head>

  <title>Ad Posted</title>
    <style type='text/css'>
      
      body {
         background-image: url('img/bg33.png');
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
        font-size : 230%;
      }

      .container {
        margin-top: 100px;
        margin-bottom: 40px;
        float: left;
        margin-left: 400px;
        width: 550px;
        opacity: 0.80;
        border-radius: 50px;
        background-color: #000000;
      }

        input[type=submit] {
          opacity: 1.0;
          font-size: 120%;
          border-width: 0px;
          width: 200px;
          height: 40px;
          margin-left: 150px;
          font-family:'.LucidaGrandeUI', 'Lucida Grande', 'Lucida sans unicode';
          color: black;
          font-size: 125%;
          padding: 1px 7px;
          display: inline-block;
          background-image: -webkit-linear-gradient(
          #ffffff 0%, #F6F6F6   30%, 
          #F3F3F3 45%, #EDEDED  60%, 
          #eeeeee 100%);
          border-radius: 3px;
          cursor: default;
          box-shadow: 0px 0px 1px rgba(0,0,0,0.20);
          background-image:-webkit-linear-gradient(
          #acc5e9 0%,     #a3c0f2 18%, 
          #61a0ed 39%,    #55a3f2 70%, 
          #82c2f1 91.72%,   #9AD2F2 100%); 
          box-shadow: 0px 0px 1px rgba(0,0,0,0.65); 
          border-radius: 25px;
      }

       .form-group {
        position: relative;
        left: 20px;
        border-width: 0;
      }

    </style>

  </head>
  <body>

    <div>

      <br><br><br>
      
      <div class='container'>
        <form action='seller_dash.php' method='POST' enctype='multipart/form-data'>

          <br><br>

          <fieldset class='form-group'>
            <label id='id3'>Your Ad was posted Successfully</label>
          </fieldset>

          <br>

          <fieldset class='form-group'>
              <input type='submit' value='Sell Another Book' />
          </fieldset>

        </form>

      </div>

    </div>

  </body>

</html>";
          
      }
   }
?>