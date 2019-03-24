<?php
session_start();
include_once 'db.php';
?>
<html>
<title>HDPS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="w3-theme-black.css">
<style>
.mySlides {display:none;}
</style>
<body>
<header class="w3-container w3-blue  w3-padding" style="min-height:300px id="myHeader">
    <h1 class="w3-xlarge w3-animate-bottom w3-center w3-text-white">Heart Disease Prediction System</h1>
	</header>
  <img class="mySlides" src="img/1.jpg" style="width:100%; height:180px">
  <img class="mySlides" src="img/2.jpg" style="width:100%; height:180px">
  <img class="mySlides" src="img/3.jpg" style="width:100%; height:180px">
   <img class="mySlides" src="img/4.jpg" style="width:100%; height:180px">
  <img class="mySlides" src="img/5.jpg" style="width:100%; height:180px">


<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card-4 w3-padding-top" style="min-height:300px">
  <a class="w3-btn w3-large w3-green w3-hover-red" href="adminlogin.php">Admin Login</a><br>
  <img class="w3-image"src="img/admin.png" alt="Admin" style="width:42%">
  <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Admin have authority</p>
  <p>To do various functinalities</p>
  <p>Like add doctors Functionalities</p>
  <p>View patient, disease, feedback, etc. </p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card-4 w3-padding-top" style="min-height:300px">
  <a class="w3-btn w3-large w3-green w3-hover-red" href="doctorlogin.php">Doctor Login</a><br>
    <img class="w3-image"src="img/doctor.png" alt="Doctor" style="width:50%">
  <i class="fa fa-css3 w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Doctors get notification</p>
  <p>They can view patient details</p>
  <p>view disease symptoms</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card-4 w3-padding-top" style="min-height:300px">
  <a class="w3-btn w3-large w3-green w3-hover-red" href="patientlogin.php">Patient Login</a><br>
    <img class="w3-image"src="img/patient.png" alt="Patient" style="width:50%">
  <i class="fa fa-diamond w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Registered patient can</p>
  <p>see doctors search disease</p>
  <p>provide feedback for system</p>
  </div>
</div>
</div>

<footer class="w3-container w3-theme-dark w3-padding-10">
  
<center><b class="copyright">&copy; 2018 Heart Disease Prediction System  All rights reserved.</b></center>
</footer>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); // Change image every 3 seconds
}
</script>
</body>
</html> 

