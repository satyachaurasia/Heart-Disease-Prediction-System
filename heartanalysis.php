<?php

session_start();
if(isset($_SESSION['username'])=="") {
	header("Location: patientlogin.php");
}
include_once 'db.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['send'])) {

	$cpt = mysqli_real_escape_string($con, $_POST['cpt']);
	$fbs = mysqli_real_escape_string($con, $_POST['fbs']);
	$rec = mysqli_real_escape_string($con, $_POST['rec']);
	$eia = mysqli_real_escape_string($con, $_POST['eia']);
	$slp = mysqli_real_escape_string($con, $_POST['slp']);
	$nomv = mysqli_real_escape_string($con, $_POST['nomv']);
	$thal = mysqli_real_escape_string($con, $_POST['thal']);
	$tbp = mysqli_real_escape_string($con, $_POST['tbp']);
	$sc = mysqli_real_escape_string($con, $_POST['sc']);
	$mhra = mysqli_real_escape_string($con, $_POST['mhra']);
	$stdi = mysqli_real_escape_string($con, $_POST['stdi']);

	
	if(mysqli_query($con, "INSERT INTO addtdata(dis,age,gender,cpt,fbs,rec,eia,slp,nomv,thal,tbp,sc,mhra,stdi) VALUES('" . $dis . "','" . $age . "','" . $gender . "','" . $cpt . "', '" . $fbs . "', '" . $rec . "','" . $eia . "','" . $slp . "','" . $nomv . "','" . $thal . "','" . $tbp . "','" . $sc . "','" . $mhra . "','" . $stdi . "')")) {
			$successmsg = "Details Inserted Successfully ! ";
		} else {
			$errormsg = "Error in registering...Please try again later!";
		}	
	
}
?>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="w3-theme-black.css">
</head>
<body>
<header class="w3-container w3-blue  w3-padding" style="min-height:300px id="myHeader">
    <h1 class="w3-xlarge w3-animate-bottom w3-center w3-text-white">Heart Disease Prediction System</h1>
	</header>
<ul class="w3-navbar w3-light-grey ">
  <li><a  class=" w3-hover-black" href="addtrainingdataa.php">Add Training Data</a></li>
  <li><a  class=" w3-hover-black" href="viewtrainingdataa.php">View Training Data</a></li>
   <li><a  class=" w3-hover-black" href="viewdoctorsa.php">View Doctors</a></li>
  <li><a  class=" w3-hover-black" href="#">Feedback</a></li>
  <li><a  class=" w3-hover-black" href="logout.php">Logout</a></li>
  <li><a  class=" w3-hover-black" href="changepassad.php">Change Password</a></li>
</ul>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
					<legend>Check Your Health</legend>

					
					<div class="form-group">
						<label for="cpt">Chest Pain Type</label>
						<input type="text" name="cpt" placeholder="Fasting Blood Sugar" required value="<?php if($error) echo $cpt; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($cpt_error)) echo $cpt_error; ?></span>
					</div>

					
					<div class="form-group">
						<label for="fbs">Fasting Blood Sugar</label>
						<input type="text" name="fbs" placeholder="Fasting Blood Sugar" required value="<?php if($error) echo $fbs; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($fbs_error)) echo $fbs_error; ?></span>
					</div>

					
					
				    <div class="form-group">
						<label for="rec">Resting Electrographic</label>
						<input type="text" name="rec" placeholder="Resting Electrographic" required value="<?php if($error) echo $rec; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($rec_error)) echo $rec_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="eia">Exercise Induced Angnia</label>
						<input type="text" name="eia" placeholder="Exercise Induced Angnia" required value="<?php if($error) echo $eia; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($eia_error)) echo $eia_error; ?></span>
					</div>

					
					<div class="form-group">
						<label for="slp">Slope</label>
						<input type="text" name="slp" placeholder="Slope" required value="<?php if($error) echo $slp; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($slp_error)) echo $slp_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="nomv">No.of Major Vessels(CA)</label>
						<input type="text" name="nomv" placeholder="No.of Major Vessels(CA)" required value="<?php if($error) echo $nomv; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($nomv_error)) echo $nomv_error; ?></span>
					</div> 
					
					<div class="form-group">
						<label for="thal">Thal</label>
						<input type="text" name="thal" placeholder="Thal" required value="<?php if($error) echo $thal; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($thal_error)) echo $thal_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="tbp">Trest Blood Pressure</label>
						<input type="text" name="tbp" placeholder="Trest Blood Pressure" required value="<?php if($error) echo $tbp; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($tbp_error)) echo $tbp_error; ?></span>
					</div> 
					
					
					<div class="form-group">
						<label for="sc">Serum Cholesterol</label>
						<input type="text" name="sc" placeholder="Serum Cholesterol" required value="<?php if($error) echo $sc; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($sc_error)) echo $sc_error; ?></span>
					</div> 
					
					<div class="form-group">
						<label for="mhra">Maximum Heart Rate Achieved(Thalach)</label>
						<input type="text" name="mhra" placeholder="Maximum Heart Rate Achieved(Thalach)" required value="<?php if($error) echo $mhra; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($mhra_error)) echo $mhra_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="stdi">ST Depression Induced by Exercise(Old Peak)</label>
						<input type="text" name="stdi" placeholder="ST Depression Induced by Exercise(Old Peak)" required value="<?php if($error) echo $stdi; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($stdi_error)) echo $stdi_error; ?></span>
					</div> 
					
					
					
					<div class="form-group">
						<input type="submit" name="send" value="Send" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>

</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



