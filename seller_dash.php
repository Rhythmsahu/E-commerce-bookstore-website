<?php
    session_start();

    if($_SESSION['userid'])
    {  

      echo "<html>
              <head>

              <title>Seller Dashboard</title>
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
                    width: 490px; 
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
                    width: 560px;
                    border: 0px solid white; 
                    -webkit-animation: fadein 1s;
                    -moz-animation: fadein 1s;
                    -ms-animation: fadein 1s;
                    -o-animation: fadein 1s;
                    animation: fadein 1s;

                  }

                  #rhs  {
                    margin-left: 27px;
                    width: 600px;
                    border: 0px solid white;
                    -webkit-animation: fadein 1s;
                    -moz-animation: fadein 1s;
                    -ms-animation: fadein 1s;
                    -o-animation: fadein 1s;
                    animation: fadein 1s; 
                  }

                  #vhs  {
                    margin-left: 27px;
                    width: 600px;
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

                  .form-control {
                    width: 520px;
                    height: 40px;
                    border-radius: 20px;
                    color: white;
                    background-color: black;
                    opacity: 0.70;
                    font-size: 110%;
                    padding-left: 15px;
                    border-width: 0px;
                  }

                  select {
                    width: 520px;
                    height: 40px;
                    border-radius: 20px;
                    color: grey;
                    background-color: black;
                    opacity: 0.70;
                    font-size: 110%;
                    padding-left: 15px;
                    border-width: 0px; 
                  }

                  #description {
                    border-radius: 20px;
                    width: 520px;
                    color: white;
                    background-color: black;
                    opacity: 0.70;
                    font-size: 150%;
                    padding-left: 15px;
                    border-width: 0px;  
                  }

                  .form-group {
                    position: relative;
                    left: 20px;
                    border-width: 0;
                    display: none;
                  }

                  .bullet_class {
                  	width: 160px;
                  	float: left;
                  	margin-left: 20px;
                    animation: fadein 2s;


                  }

                  .bullet {
                  	border-radius: 50%;
                  	width: 30px;
                  	height: 30px;
                  	background-color: white;
                    opacity: 0.80;
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
                  }

                  input[type=file] {
                    color: white;
                    opacity: 0.70;
                    font-size: 120%;
                    border-width: 0px;
                    width: 400px;
                  }

                  input[type=submit] {
                    margin-left: 190px;
                    font-family:'.LucidaGrandeUI', 'Lucida Grande', 'Lucida sans unicode';
                    color: black;
                    font-size: 125%;
                    padding: 1px 7px;
                    display: inline-block;
                    
                    border-radius: 3px;
                    cursor: default;
                    box-shadow: 0px 0px 1px rgba(0,0,0,0.20);
                     
                    box-shadow: 0px 0px 1px rgba(0,0,0,0.65); 
                    border-radius: 25px;
                    height: 50px;
                    width: 150px; 
                  }

                  input:focus {
                    background-color: white;
                    color: black;
                  }
                  
                  select:focus {
                    background-color: white;
                    color: black;
                  }

                  .step {
			          height: 15px;
			          width: 15px;
			          margin: 0 2px;
			          background-color: #bbbbbb;
			          border: none;
			          border-radius: 50%;
			          display: inline-block;
			          opacity: 0.5;
		        }

		    	  .step.active {
     				 opacity: 1;
        			}

        		.step.finish {
          			background-color: #4CAF50;
    			} 

    			#prevBtn {

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
                    height: 35px;
                    width: 100px;

    			}

    			#nextBtn {

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
                    height: 35px;
                    width: 100px;

    			}

          #logout {
            background-image:-webkit-linear-gradient(
            #efc099 0%,     #efa2b6 18%, 
            #ea6085 39%,    #ef56a2 70%, 
            #ef9381 91.72%,   #efc099 100%);
          }

          #submit {
            background-image:-webkit-linear-gradient(
            #acc5e9 0%,     #a3c0f2 18%, 
            #61a0ed 39%,    #55a3f2 70%, 
            #82c2f1 91.72%,   #9AD2F2 100%);
          }

          #submitad {
            background-image:-webkit-linear-gradient(
            #afe8ab 0%,     #a2efba 18%, 
            #60ea77 39%,    #56ef7a 70%, 
            #81ef9b 91.72%,   #99efb6 100%);
          }



                </style>

              </head>
              <body>

                  <div class='container' id='lhs'>
                      
                        <!--<h1>Become a Seller in just 3 Minutes!</h1>-->
                        <p id='id1'>Post your Ad in just a Few Steps!</p>

                        <br><br>

                        <div class='bullet_class'>
                        	<div class='bullet'>1</div> &nbsp; <span class='bullet_name'>Get</span> <br> <br>

                        	<span class='bullet_text'>Access to 40000+ customers</span>

                    	</div>


                    	<div class='bullet_class'>
                        	<div class='bullet'>2</div> &nbsp; <span class='bullet_name'>Set</span> <br> <br>

                        	<span class='bullet_text'>Pan-Vellore business</span>

                    	</div>


                    	<div class='bullet_class'>
                        	<div class='bullet'>3</div> &nbsp; <span class='bullet_name'>Sell</span> <br> <br>

                        	<span class='bullet_text'>Online 24 X 7 without any hassle</span>

                    	</div>

                    	<br><br><br>
                    	<br><br><br>

                    	<hr>
                    	<br>

                    	<p id='id2'>All you need to have to have are:</p> 

                    	<ul class='bullet_text'>
                    		<li>Book Details</li><br>   
                    		<li>ISBN</li><br>
                    		<li>Image of the book</li>
                    	</ul>

                    	<br><br>
                    	<hr>
                  
                  </div>

                  <br><br><br>
                  
                  <div class='container' id='rhs'>
                    <form action='redirect.php' method='POST' enctype='multipart/form-data'>

                      <fieldset class='form-group'>
                        <label id='id3'>Book Details</label> <br><br>            
                        <input type='text' name='title' id='title' class='form-control' placeholder='Book Name *' required> <br><br>
                        <input type='text' name='author' id='author' class='form-control' placeholder='Author Name *'' required>
                      </fieldset>

                      <fieldset class='form-group'>
                        <!--<input type='text' name='genre' id='genre' class='form-control' placeholder='Genre *' required>-->
                        <label id='id3'>Additional Details</label>
                        <select name='genre'>
                          <option value=''>Genre*</option selected>
                          <option value='fiction'>Fiction</option>
                          <option value='horror'>Horror</option>
                          <option value='mystery'>Mystery</option>
                          <option value='non-fiction'>Non-Fiction</option>
                          <option value='novel'>Novel</option>
                          <option value='romance'>Romance</option>
                          <option value='sci-fiction'>Sci-Fiction</option>
                          <option value='science-and-technology'>Science and Technology</option>                          
                        </select><br><br>
                        <textarea name='description' id='description' placeholder='Description*' rows=3 required></textarea>
                      </fieldset>

                      <fieldset class='form-group'>
                      	<label id='id3'>ISBN and Price</label>
                        <input type='text' name='isbn' id='isbn' class='form-control' placeholder='4-Digit ISBN *'' required> <br><br>
                        <input type='text' name='price' id='price' class='form-control' placeholder='Price (₹)' required> <br><br>

                        <input type='file' name='image' > <br><br>

                      	<input type='submit' name='submit' id='submitad' value='Post Ad'/>
                      </fieldset>
                      <br> 

                   	<div style='overflow:auto;'>
				          <div style='margin-left:40px;'>
				            <button type='button' id='prevBtn' onclick='nextPrev(-1)'>Back</button>
				            <button type='button' id='nextBtn' onclick='nextPrev(1)'>Next</button>
				          </div>
				        </div>

			        <!-- Circles which indicates the steps of the form: -->
		        	<div style='margin-top:40px;margin-left:270px;'>
				          <span class='step'></span>
				          <span class='step'></span>
				          <span class='step'></span>
				        </div>

              		<?php
        			     include 'redirect.php';
        		    ?>

                    </form>

                  </div>

                </div>

                <div class='container' id='vhs'>
                	<form action='logout.php' method='POST' enctype='multipart/form-data'>
                		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  		<input type='submit' name='logout' id='logout' value='Log Out'/>
                  		<?php
        			     include 'logout_1.php';
        		    	?>
              		</form>
                </div>

               <script type='text/javascript'>
          
			          var currentTab = 0; // Current tab is set to be the first tab (0)
			          showTab(currentTab); // Display the current tab

			          function showTab(n) {
			            // This function will display the specified tab of the form ...
			            var x = document.getElementsByClassName('form-group');
			            x[n].style.display = 'block';
			            // ... and fix the Previous/Next buttons:
			            if (n == 0) {
			              document.getElementById('prevBtn').style.display = 'none';
			            } else {
			              document.getElementById('prevBtn').style.display = 'inline';
			            }
			            /*if (n == (x.length - 1)) {
			              document.getElementById('nextBtn').innerHTML = 'Submit';
			            } else {
			              document.getElementById('nextBtn').innerHTML = 'Next';
			            }*/
			            if (n == (x.length - 1)) {
			              document.getElementById('nextBtn').style.display = 'none';
			            } else {
			              document.getElementById('nextBtn').style.display = 'inline';
			            }
			            // ... and run a function that displays the correct step indicator:
			            fixStepIndicator(n)
			          }

			          function nextPrev(n) {
			            // This function will figure out which tab to display
			            var x = document.getElementsByClassName('form-group');
			            // Exit the function if any field in the current tab is invalid:
			            if (n == 1 && !validateForm()) return false;
			            // Hide the current tab:
			            x[currentTab].style.display = 'none';
			            // Increase or decrease the current tab by 1:
			            currentTab = currentTab + n;
			            // if you have reached the end of the form... :
			            if (currentTab >= x.length) {
			              //...the form gets submitted:
			              document.getElementById('regForm').submit();
			              return false;
			            }
			            // Otherwise, display the correct tab:
			            showTab(currentTab);
			          }

			          function validateForm() {
			            // This function deals with validation of the form fields
			            var x, y, i, valid = true;
			            x = document.getElementsByClassName('form-group');
			            y = x[currentTab].getElementsByTagName('input');
			            // A loop that checks every input field in the current tab:
			            for (i = 0; i < y.length; i++) {
			              // If a field is empty...
			              if (y[i].value == '') {
			                // add an 'invalid' class to the field:
			                y[i].className += 'invalid';
			                // and set the current valid status to false:
			                valid = false;
			              }
			            }
			            // If the valid status is true, mark the step as finished and valid:
			            if (valid) {
			              document.getElementsByClassName('step')[currentTab].className += ' finish';
			            }
			            return valid; // return the valid status
			          }

			          function fixStepIndicator(n) {
			            // This function removes the 'active' class of all steps...
			            var i, x = document.getElementsByClassName('step');
			            for (i = 0; i < x.length; i++) {
			              x[i].className = x[i].className.replace(' active', '');
			            }
			            //... and adds the 'active' class to the current step:
			            x[n].className += ' active';
			          }

		        </script>

              </body>

            </html>";

      } else {

        header("Location: seller_login.php");
      }
?>