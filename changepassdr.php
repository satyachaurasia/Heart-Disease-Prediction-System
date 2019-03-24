<?php
session_start();
if(isset($_SESSION['username'])=="") {
	header("Location: doctorlogin.php");
}

include_once 'db.php';
?>
<html>
<head>
	<title>Change password</title>
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
    <li><a  class=" w3-hover-black" href="viewpatientsd.php">View patients</a></li>
	 <li><a  class=" w3-hover-black" href="viewpatientsdatad.php">View patients Data</a></li>
  <li><a  class=" w3-hover-black" href="feedbackd.php">Feedback</a></li>
  <li><a  class=" w3-hover-black" href="logout.php">Logout</a></li>
  <li><a  class=" w3-black" href="changepassdr.php">Change Password</a></li>
</ul>
	<?php 
		$con_db = mysql_connect("localhost","root","") or die();
		$sel_db = mysql_select_db("hdps",$con_db) or die();
		if(isset($_POST['re_password']))
		{
		$old_pass=$_POST['old_pass'];
		$new_pass=$_POST['new_pass'];
		$re_pass=$_POST['re_pass'];
		$chg_pwd=mysql_query("select * from doctor where username='".$_SESSION['username'] ."'");
		$chg_pwd1=mysql_fetch_array($chg_pwd);
		$data_pwd=$chg_pwd1['password'];
		if($data_pwd==$old_pass){
		if($new_pass==$re_pass){
			$update_pwd=mysql_query("update doctor set password='$new_pass' where username='".$_SESSION['username'] ."'");
			echo "<script>alert('Update Sucessfully'); window.location='doctor.php'</script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); window.location='changepassdr.php'</script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong'); window.location='changepassdr.php'</script>";
		}}
	?>


<div class="container">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<div class="row">
		<div class="col-md-4 bg-1 col-md-offset-4 well">
		<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="changepass">
				
					<legend>Reset Password</legend>
					
					<div class="form-group">
						<label for="usid">Old Password</label>
						<input type="password" name="old_pass" placeholder="Old Pass" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">New Password</label>
						<input type="password" name="new_pass" placeholder="New Password" required class="form-control" />
					</div>

					<div class="form-group">
						<label for="name">Retype Password</label>
						<input type="password" name="re_pass" placeholder="Retype Password" required class="form-control" />
					</div>
					
					<div class="form-group">
						<input type="submit" name="re_password" value="Reset Password" class="btn btn-primary" />
					</div>
			
			</form>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
</body>
</html>