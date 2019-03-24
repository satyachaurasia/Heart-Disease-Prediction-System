<?php 
session_start();
if(isset($_SESSION['username'])=="") {
	header("Location: adminlogin.php");
}
	require('db.php');


	// initialize variables
    $username = "";
	$age = "";
	$sex = "";
	$id = 0;
	$cp = "";
	$trestbps = "";
	$chol = "";
	$fbs = "";
	$restecg = "";
	$thalach = "";
	$exang = "";
	$oldpeak = "";
	$slope = "";
	$ca = "";
	$thal = "";
    $target = "2";

	if (isset($_POST['save'])) {
        $username = $_POST['username'];
		$age = $_POST['age'];
		$sex = $_POST['sex'];
		$cp = $_POST['cp'];
		$trestbps = $_POST['trestbps'];
		$chol = $_POST['chol'];
		$fbs = $_POST['fbs'];
		$restecg = $_POST['restecg'];
		$thalach = $_POST['thalach'];
		$exang = $_POST['exang'];
		$oldpeak = $_POST['oldpeak'];
		$slope = $_POST['slope'];
		$ca = $_POST['ca'];
		$thal = $_POST['thal'];
   

		mysqli_query($con, "INSERT INTO addtdata (username,age, sex, cp, trestbps, chol, fbs, restecg, thalach, exang, oldpeak, slope, ca, thal,target ) VALUES ('$username','$age', '$sex', '$cp', '$trestbps', '$chol', '$fbs', '$restecg', '$thalach', '$exang', '$oldpeak', '$slope', '$ca', '$thal','$target')"); 
   
		 echo"<script>alert('Your Details Submitted Successfully!')</script>";
    
		}	

?>



<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="w3-theme-black.css">
</head>
<body>
<header class="w3-container w3-blue  w3-padding" style="min-height:70px" id="myHeader">
    <h1 class="w3-xlarge w3-animate-bottom w3-center w3-text-white">Heart Disease Prediction System</h1>
	</header>
<ul class="w3-navbar w3-light-grey ">
  <li><a  class=" w3-black" href="addtrainingdataa.php">Patient Data</a></li>
  <li><a  class=" w3-hover-black" href="viewtrainingdataa.php">View Patients Data</a></li>
      <li><a  class=" w3-hover-black" href="viewpatientsa.php">View patients</a></li>
   <li><a  class=" w3-hover-black" href="viewdoctorsa.php">View Doctors</a></li>
 
  <li><a  class=" w3-hover-black" href="logout.php">Logout</a></li>
  <li><a  class=" w3-hover-black" href="changepassad.php">Change Password</a></li>
</ul>


			<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
         <div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="">
		</div>       
                
		<div class="input-group">
			<label>Age</label>
			<input type="text" name="age" value="">
		</div>
		<div class="input-grp">
			<label>Sex: </label>
			<input type="radio" name="sex" value="1"/>Male
			<input type="radio" name="sex" value="0"/> Female
		</div>

		<div class="input-grp">
			<label>Chest Pain Type</label><br>
			<input type="radio" name="cp" value="0"/>Typical Angina
			<input type="radio" name="cp" value="1"/> Atypical Angina
			<input type="radio" name="cp" value="2"/>Non-anginal pain
			<input type="radio" name="cp" value="3"/> Asymptomatic
		</div>
		<div class="input-group">
			<label>Resting Blood Pressure(in mm Hg on admission to the hospital) </label>
			<input type="text" name="trestbps" value="">
		</div>
		<div class="input-group">
			<label>Serum Cholestrol in mg/dl</label>
			<input type="text" name="chol" value="">
		</div>
		<div>
			<label>Fasting Blood sugar >120 mg/dl: </label>
			<input type="radio" name="fbs" value="1"/>True
			<input type="radio" name="fbs" value="0"/> False
		</div>
		<div>
			<label>Resting Electrocardiographic Results </label><br>
			<input type="radio" name="restecg" value="0"/>Normal
			<input type="radio" name="restecg" value="1"/> Having ST-T wave abnormality
			<input type="radio" name="restecg" value="2"/> showing probable or definite left ventricular hypertrophy by Estes' criteria 
		</div>
		<div class="input-group">
			<label>Maximum Heart Rate Achieved </label>
			<input type="text" name="thalach" value="">
		</div>
		<div>
			<label>Exercise induced angina:  </label>
			<input type="radio" name="exang" value="1"/>Yes
			<input type="radio" name="exang" value="0"/> No
		</div>
		<div class="input-group">
			<label>Oldpeak (ST depression induced by exercise relative to rest )</label>
			<input type="text" name="oldpeak" value="">
		</div>
		<div>
			<label>Slope (the slope of the peak exercise ST segment) </label><br>
			<input type="radio" name="slope" value="0"/>Unsloping
			<input type="radio" name="slope" value="1"/> Flat
			<input type="radio" name="slope" value="2"/> Downsloping
		</div>
		<div class="input-group">
			<label>Number of major vessels (0-3) colored by flourosopy </label>
			<input type="text" name="ca" value="">
		</div>
		<div class="input-group">
			<label>Thal </label>
			<input type="text" name="thal" value="">
		</div>
		<div class="input-group">
			<button class="btn" type="submit" name="save" >Save</button>
		</div>
	</form>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



