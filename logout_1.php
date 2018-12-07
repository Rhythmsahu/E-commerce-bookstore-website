<?php
	session_start();
	session_destroy();
	//echo "Logged Out!";
	echo "

<html>
  <head>

  <title>Logged Out</title>
    <style type='text/css'>
      
      body {
         background-image: url('bg33.png');
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
        left:60px;
        font-size : 230%;
      }

      .container {
        margin-top: 100px;
        width: 550px;
        opacity: 0.80;
        border-radius: 50px;
        background-color: #000000;
      }

        input[type=submit] {
          opacity: 1.0;
          font-size: 120%;
          border-width: 0px;
          width: 250px;
          height: 40px;
          margin-left: 120px;
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
      
      <div class='container' id='box'>
        <form action='seller_login.php' method='POST' enctype='multipart/form-data'>

          <br><br>

          <fieldset class='form-group'>
            <label id='id3'>Logged Out Successfully</label>
          </fieldset>

          <br>

          <fieldset class='form-group'>
              <input type='submit' value='Back to Home Page' />
          </fieldset>

          <br><br><br>

        </form>

      </div>

    </div>

  </body>

</html>";

//header("refresh:1;Location: seller_login.php");

?>