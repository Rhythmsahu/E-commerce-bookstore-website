<?php
      echo "<html>
              <head>

              <title>About Us</title>
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

                  #id1 {
                    color: white;
                    font-size : 300%;  
                  }

                  #id2 {
                    color: white;
                    width: 490px; 
                    font-size : 230%;  
                    animation: fadein 1s;
                  }

                   #id3 {
                    color: white;
                    width: 400px; 
                    font-size : 230%;
                    position: relative;
                    bottom: 5px;  
                  }

                  .container {
                  	margin-top: 10px;
                  	float: left;
                    
                  }

                  #lhs  {
                    margin-left: 60px;
                    width: 1200px;
                    border: 0px solid white; 
                    -webkit-animation: fadein 1s;
                    -moz-animation: fadein 1s;
                    -ms-animation: fadein 1s;
                    -o-animation: fadein 1s;
                    animation: fadein 1s;

                  }

                   @keyframes fadein {
                      from { transform: scale(0); }
                      to   { transform: scale(1); }
                    }

                    @-moz-keyframes fadein 
                      from { transform: scale(0); }
                      to   { transform: scale(1); }
                    }

                    @-webkit-keyframes fadein 
                      from { transform: scale(0); }
                      to   { transform: scale(1); }
                    }

                    @-ms-keyframes fadein 
                      from { transform: scale(0); }
                      to   { transform: scale(1); }
                    }

                    @-o-keyframes fadein 
                      from { transform: scale(0); }
                      to   { transform: scale(1); }
                    }


                  hr {
                    border-width: 1px;
                    background-color: white;
                  }


                  .bullet_class {
                  	width: 500px;
                  	float: left;
                  	margin-left: 50px;
                    margin-bottom: 50px;
                    animation: fadein 2s;
                    border: 0px solid white;
                    height: 150px;
                    padding: 25px 25px 25px 25px;
                    background-color: black;
                    opacity: 0.85;
                    border-radius: 30px;
                  }

                  .bullet {
                  	border-radius: 50%;
                  	width: 30px;
                  	height: 30px;
                  	background-color: white;
                    opacity: 1.0;
                  	color: black;
                  	text-align: center;
                  	float: left;
                  	font-weight: bold;
                  	font-size: 150%;
                    animation: fadein 2s;

                  }

                  .bullet_name {
                  	color: white;
                  	font-size: 150%;
                  	float: left;
                  	position: relative;
                  	left: 10px;
                    animation: fadein 2s;


                  }

                  .bullet_text {
                  	color: #c1acac;
                  	font-family: 'Arial';
                    position: relative;
                  	top: 10px;
                    bottom: 20px;
                  }

                </style>

              </head>

              <body>

                  <div class='container' id='lhs'>
                      
                        <p id='id1'>Contact Info</p>

                        <br>

                      <div class='bullet_class'>
                      	<div class='bullet'>1</div> &nbsp; <span class='bullet_name'>Amitejash Rout</span> <br> <br>

                      	<span class='bullet_text'><br><b>Phone:</b> 77335147299 <br><br> <b>Email:</b> amitejashrout@gmail.com</span>

                  	  </div>


                    	<div class='bullet_class'>
                        	<div class='bullet'>2</div> &nbsp; <span class='bullet_name'>Kshaunish Roy</span> <br> <br>

                        	<span class='bullet_text'><br><b>Phone:</b> 9693286200 <br><br> Email: kshaunishforu@gmail.com</span>

                    	</div>


                    	<div class='bullet_class'>
                        	<div class='bullet'>3</div> &nbsp; <span class='bullet_name'>Swapnil Chhatre</span> <br> <br>

                        	<span class='bullet_text'><br><b>Phone:</b> 7020347349 <br><br> <b>Email:</b> swap.chhatre@gmail.com</span>

                    	</div>

                      <div class='bullet_class'>
                          <div class='bullet'>4</div> &nbsp; <span class='bullet_name'>Rhythm Sahu</span> <br> <br>

                          <span class='bullet_text'><br><b>Phone:</b> 8844458890 <br><br> <b>Email:</b> rhythm.sahu@gmail.com</span>

                      </div>

                  </div>

              </body>

            </html>";

?>