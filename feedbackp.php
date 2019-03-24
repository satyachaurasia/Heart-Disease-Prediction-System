<?php
session_start();
if(isset($_SESSION['username'])=="") {
	header("Location: patientlogin.php");
}
include_once 'db.php';

$receiver = "";
$message = "";
$username = "";


//set validation error flag as false
$error = false;
 if (isset($_POST['submit'])) {

     
    $username = $_SESSION['username'];
	$message = $_POST['message'];
    $receiver = $_POST['receiver'];

		if(mysqli_query($con, "INSERT INTO feedback(receiver,username, message) VALUES('" . $receiver . "','" . $username . "', '" . $message . "')")) {
			$successmsg = "Successfully Send! ";
		} else {
			$errormsg = "Error in registering...Please try again later!";
		}
	

 }


?>

<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="w3-theme-black.css">
</head>
<body>
<header class="w3-container w3-blue  w3-padding" style="min-height:70px" id="myHeader">
    <h1 class="w3-xlarge w3-animate-bottom w3-center w3-text-white">Heart Disease Prediction System</h1>
	</header>
<ul class="w3-navbar w3-light-grey ">
  <li><a  class=" w3-hover-black" href="viewdoctorspt.php">View Doctors</a></li>
 <li><a  class=" w3-hover-black" href="viewresultp.php">Check status</a></li>
  <li><a  class=" w3-black" href="feedbackp.php">Feedback</a></li>
  <li><a  class=" w3-hover-black" href="logout.php">Logout</a></li>
  <li><a  class=" w3-hover-black" href="changepasspt.php">Change Password</a></li>
</ul>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
					<legend>Send A Messgae</legend>

					<div class="form-group">
						<label for="name">To</label>
						<input type="text" name="receiver" placeholder="To" required value="<?php if($error) echo $receiver; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($receiver_error)) echo $receiver_error; ?></span>
					</div>
					
	                <div class="form-group">
						<label for="name">Message</label>
						  <textarea class="form-control" name = 'message' placeholder="Comments" id="txtContactcomments" onfocus="contactComments()"></textarea>
						
					</div>

				

					<div class="form-group">
						<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
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



