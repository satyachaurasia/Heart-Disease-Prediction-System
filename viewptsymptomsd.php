<?php
session_start();
if(isset($_SESSION['username'])=="") {
	header("Location: doctorlogin.php");
}
	require('db.php');


?>
<html>
<head>
<title>View Patients Symptoms</title>
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
	 <li><a  class=" w3-black" href="viewptsymptomsd.php">View patients Data</a></li>
  <li><a  class=" w3-hover-black" href="feedbackd.php">Feedback</a></li>
  <li><a  class=" w3-hover-black" href="logout.php">Logout</a></li>
  <li><a  class=" w3-hover-black" href="changepassdr.php">Change Password</a></li>
</ul>

<center>
<table class="w3-table w3-striped w3-border-black w3-border w3-bordered w3-card-4 w3-hoverable w3-small">
<thead>
<tr class="w3-green"><th><strong>Sr NO</strong></th><th><strong>Username</strong><th><th><strong>Age</strong><th><strong>Sex</strong></th><th><strong>Chest Pain Type</strong></th><th><strong>Fasting Blood Sugar</strong></th><th><strong>Resting Electrographic</strong></th><th><strong>Exercise Induced Angnia</strong></th><th><strong>Slope</strong></th><th><strong>No.of Major Vessels(CA)</strong></th><th><strong>Thal</strong></th><th><strong>Trest Blood Pressure</strong></th><th><strong>Serum Cholesterol</strong></th><th><strong>Maximum Heart Rate Achieved(Thalch)</strong></th><th><strong>ST Depression Induced by Exercise(Old Peak)</strong></th><th><strong>Result</strong></th></tr>
</thead>

<tbody>
<?php
$count=1;
$sel_query="Select * from addtdata";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["username"]; ?></td><td align="center"><?php echo $row["age"]; ?></td><td align="center"><?php echo $row["sex"]; ?></td><td align="center"><?php echo $row["cp"]; ?></td><td align="center"><?php echo $row["trestbps"]; ?></td><td align="center"><?php echo $row["chol"]; ?></td><td align="center"><?php echo $row["fbs"]; ?></td><td align="center"><?php echo $row["restecg"]; ?></td><td align="center"><?php echo $row["thalach"]; ?></td><td align="center"><?php echo $row["exang"]; ?></td><td align="center"><?php echo $row["oldpeak"]; ?></td><td align="center"><?php echo $row["slope"]; ?></td><td align="center"><?php echo $row["ca"]; ?></td><td align="center"><?php echo $row["thal"]; ?></td><td align="center"><?php echo $row["target"]; ?></td></tr>
<?php $count++;} ?>
</tbody>
</table>
</center>

</body>
</html>