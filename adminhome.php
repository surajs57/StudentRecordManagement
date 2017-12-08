<?php
require 'dbconfig/config.php';

?>
<!DOCTYPE html>
<html>
<title>Admin Homepage</title>
<!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="/materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<body style="font-family: 'Montserrat', sans-serif; background-color:black;">




<div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="video/Project Loon - Improving Navigation.mp4" type="video/mp4">
	</video>
	
	
</div>
<!--video css-->
<style>
.fullscreen-bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
	width: 100%;
    height: 190%;
    overflow: hidden;
    z-index: -100;
}

.fullscreen-bg__video {
    position: absolute;
    top: 0;
    left: 0;
    width: 150%;
    height: 100%;
}
</style>



<a href="login.php"><button  style="background-color: white;
    color: grey;
    border: 2px solid #555555;
	border-radius:25%;
	width:7%;
	margin:4px 1150px ;
	background-color: cream;
	box-shadow: 2px 2px 2px #888888;
	"
	><h7><b>Sign Out</h7><b></button></a>
	
	
	<img src="\img\Logomakr_42g0sV.png" style="width:250px;border-radius:25%;  margin: 100px 500px;"
<button id="myBtn" class="button " 
	><b></button>
	<style>
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #e67e22;
  border:2px solid #555555;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  margin: 500px 100px;
  
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>


</div>


<!----------------------->

<!-- The Modal -->
<div id="myModal" class="modal ">

  <!-- Modal content -->
  <div  style="background-color:#e3f2fd;" class="modal-content">
    <span class="close"&times;></span>
    <p>
	<center><h3><b>MENU</b></h3><center>
	
	<div class="carousel" >
    <a  class="carousel-item" href="studentdisplay.php"><img src="">Student</a>
    <a class="carousel-item" href="parentdisplay.php"><img src="">Parent</a>
    <a class="carousel-item" href="assignmentdisplay.php"><img src="">Assignment</a>
    <a class="carousel-item" href="marksdisplay.php"><img src="">Marks</a>
    <a class="carousel-item" href="attendisplay.php"><img src="">Attendance</a>
  </div>
	
</p>
  </div>
 

</div>
<!--php for modal search-->


<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 50px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>









<!--menu button-->

<div class="fixed-action-btn">
<!-- Element Showed -->
  <a id="menu" class="waves-effect waves-light btn-large btn-floating pulse" ><i class="material-icons">menu</i></a>
</div>
  <!-- Tap Target Structure -->
  <div class="tap-target" data-activates="menu">
    <div class="tap-target-content">
      <h1 style="color:white;"><b>MENU</b></h1>
      <a href="addproject.php"><p><button   class="cust_btn" style="vertical-align:middle"><span>Register</span></button></p></a>
	  	  <a href="teacher.php"><p><button class="cust_btn" style="vertical-align:middle"><span> Record</span></button></p></a>

	  	  <a href="trigger.php"><p><button class="cust_btn" style="vertical-align:middle"><span> Insert History</span></button></p></a>

	  
    </div>
  </div>
  
 

  
  
  <!--cust btn style-->
  <style>
.cust_btn {
  display: inline-block;
  border-radius: 4px;
  background-color: #ff6f00;
  border:0.5px solid #555555 ;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 350px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 0px;
  box-shadow: 0 4px black;
  border-radius:10%;
}

.cust_btn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.cust_btn span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.cust_btn:hover span {
  padding-right: 25px;
}

.cust_btn:hover span:after {
  opacity: 1;
  right: 0;
}
</style>






	
	

<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="/materialize/js/materialize.min.js"></script>

 <script>
  $("#menu").click(function(){
$('.tap-target').tapTarget('open');	  
  });
  </script>
  
  <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

$(document).ready(function(){
      $('.carousel').carousel();
    });
</script>

 <!--<script>
 $(document).ready(function(){
      $('.carousel').carousel();
    });
 
</script>-->

  

  
 



  
  
  




</body>
</html>
