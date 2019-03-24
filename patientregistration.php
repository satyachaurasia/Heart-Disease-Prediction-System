<?php
session_start();
include_once 'db.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['submit'])) {
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$address = mysqli_real_escape_string($con, $_POST['address']);
	$mobileno = mysqli_real_escape_string($con, $_POST['mobileno']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$age = mysqli_real_escape_string($con, $_POST['age']);
	$gender = mysqli_real_escape_string($con, $_POST['field_names']);
	$password = mysqli_real_escape_string($con, $_POST['password']);
	$cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
	
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	
		if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
		$error = true;
		$name_error = "Name must contain only alphabets and space";
	}

		if(strlen($password) < 6) {
		$error = true;
		$password_error = "Password must be minimum of 6 characters";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Password and Confirm Password doesn't match";
	}
	
	
	if (!$error) {
		if(mysqli_query($con, "INSERT INTO patient(name,username,address,mobileno,email,age,gender,password) VALUES('" . $name . "','" . $username . "', '" . $address . "','" . $mobileno . "','" . $email . "','" . $age . "','" . $gender . "', '" . $password . "')")) {
			$successmsg = "Successfully Registered! <a href='patientlogin.php'>Click here to Login</a>";
		} else {
			$errormsg = "Error in registering...Please try again later!";
		}
	
}
}

?>


<html>
<head>
	<title>Patient Registration </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="w3-theme-black.css">
</head>
<body>
<header class="w3-container w3-blue  w3-padding" style="min-height:300px id="myHeader">
    <h1 class="w3-xlarge w3-animate-bottom w3-center w3-text-white">Heart Disease Prediction System</h1>
	</header>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
				<fieldset>
					<legend>Sign Up</legend>

					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" placeholder="Enter Full Name" required value="<?php if($error) echo $name; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">Username</label>
						<input type="text" name="username" placeholder="Username" required value="<?php if($error) echo $username; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($username_error)) echo $username_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">Address</label>
						<input type="text" name="address" placeholder="Address" required value="<?php if($error) echo $address; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($address_error)) echo $address_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">Mobile No</label>
						<input type="text" name="mobileno" placeholder="Mobile No" required value="<?php if($error) echo $mobileno; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($mobileno_error)) echo $mobileno_error; ?></span>
					</div>
					
				    <div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
					</div>
					
				    <div class="form-group">
						<label for="name">Age</label>
						<input type="text" name="age" placeholder="Age" required value="<?php if($error) echo $age; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($age_error)) echo $age_error; ?></span>
					</div>
					
					 <div class="form-group">
					<label>Gender</label>
                    <select name="field_names">
                    <option>---Select Field--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
					</div>
					
					<div class="form-group">
						<label for="name">Password</label>
						<input type="password" name="password" placeholder="Password" required class="form-control" />
						<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
					</div>

					<div class="form-group">
						<label for="name">Confirm Password</label>
						<input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
						<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
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
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Already Registered? <a href="patientlogin.php">Login Here</a>
		</div>
	</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>