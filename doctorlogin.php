<?php
session_start();
include_once 'db.php';
if (isset($_POST['login'])) {

	$username = mysqli_real_escape_string($con, $_POST['username']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$result = mysqli_query($con, "SELECT * FROM doctor WHERE username = '" . $username. "' and password = '" . $password . "'");

	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = $row['password'];
		
	  echo"<script>location.href='doctor.php'</script>";
	} else {
		echo"<script>alert('username or password incorrect!')</script>";
		echo"<script>location.href='doctorlogin.php'</script>";
	}
}
?>

<html>
<head>
	<title>Doctor Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="w3-theme-black.css">
</head>
<body>
<header class="w3-container w3-blue  w3-padding" style="min-height:70px" id="myHeader">
    <h1 class="w3-xlarge w3-animate-bottom w3-center w3-text-white">Heart Disease Prediction System</h1>
</header>

<br>
<br>
<br>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Login</legend>
					
					<div class="form-group">
						<label for="name">UserName</label>
						<input type="text" name="username" placeholder="Your UserName" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Your Password" required class="form-control" />
					</div>

					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		New User? <a href="doctorregistration.php">Sign Up Here</a>
		</div>
	</div>
</div>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
