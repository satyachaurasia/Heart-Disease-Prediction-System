<?php
session_start();
if(isset($_SESSION['username'])=="") {
	header("Location: adminlogin.php");
}
	require('db.php');


?>
<html>
<head>

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
  <li><a  class=" w3-hover-black" href="patientsdata.php">Patient Data</a></li>
  <li><a  class=" w3-hover-black" href="viewpatientsdataa.php">View Patients Data</a></li>
      <li><a  class=" w3-black" href="viewpatientsa.php">View patients</a></li>
   <li><a  class=" w3-hover-black" href="viewdoctorsa.php">View Doctors</a></li>
 
  <li><a  class=" w3-hover-black" href="logout.php">Logout</a></li>
  <li><a  class=" w3-hover-black" href="changepassad.php">Change Password</a></li>
</ul>

<center>
<table class="w3-table w3-striped w3-border-black w3-border w3-bordered w3-card-4 w3-hoverable w3-small">
<thead>
<tr class="w3-green"><th><strong>Sr NO</strong></th><th><strong>Name</strong></th><th><strong>Address</strong><th><strong>Mobile No</strong></th><th><strong>Email</strong></th><th><strong>Age</strong></th><th><strong>Gender</strong></th></tr>
</thead>

<tbody>
<?php
$count=1;
$sel_query="Select * from patient";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["address"]; ?></td><td align="center"><?php echo $row["mobileno"]; ?></td><td align="center"><?php echo $row["email"]; ?></td><td align="center"><?php echo $row["age"]; ?></td><td align="center"><?php echo $row["gender"]; ?></td></tr>
<?php $count++;} ?>
</tbody>
</table>
</center>

</body>
</html>