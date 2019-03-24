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
<style>
.w3-padding-tiny w3-blue{

  ul.w3-navbar w3-black{
   
    border-left:1px solid #02A4D3;
    border-left-style:solid;
    border-size:1px;
    font-size:20px;
    border-left-color:#02A4D3;
    border-left-width:30px;
    list-style-type: none;
    text-decoration: none; 
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:#02A4D3;
}

li {
    border-left:1px solid #29598b;
    float: left;
    
}

li a:hover:not(.active) {
    background-color: #02A4D3;
}

.active {
    background-color: #4CAF50;
}
li w3-navbar w3-black{
     color:white;
     display: block;
     border-size:3px;
     text-align: center;
     padding: 14px 16px;
     text-decoration: none;
}
}

</style>
</head>
<body>
<header class="w3-container w3-blue  w3-padding" style="min-height:300px id="myHeader">
    <h1 class="w3-xlarge w3-animate-bottom w3-center w3-text-white">Heart Disease Prediction System</h1>
	</header>
<ul class="w3-navbar w3-light-grey ">
  <li><a  class=" w3-hover-black" href="addtrainingdataa.php">Add Training Data</a></li>
  <li><a  class=" w3-hover-black" href="viewtrainingdataa.php">View Training Data</a></li>
      <li><a  class=" w3-hover-black" href="viewpatientsa.php">View patients</a></li>
	   <li><a  class=" w3-black" href="viewptsymptomsa.php">View patients Symptoms</a></li>
   <li><a  class=" w3-hover-black" href="viewdoctorsa.php">View Doctors</a></li>
  <li><a  class=" w3-hover-black" href="logout.php">Logout</a></li>
  <li><a  class=" w3-hover-black" href="changepassad.php">Change Password</a></li>
</ul>

<center>
<table class="w3-table w3-striped w3-border-black w3-border w3-bordered w3-card-4 w3-hoverable w3-small">
<thead>
<tr class="w3-green"><th><strong>Sr No</strong></th><th><strong>Patients</strong></th><th><strong>Chest Pain Type</strong></th><th><strong>Fasting Blood Sugar</strong></th><th><strong>Resting Electrographic</strong></th><th><strong>Exercise Induced Angnia</strong></th><th><strong>Slope</strong></th><th><strong>No.of Major Vessels(CA)</strong></th><th><strong>Thal</strong></th><th><strong>Trest Blood Pressure</strong></th><th><strong>Serum Cholesterol</strong></th><th><strong>Maximum Heart Rate Achieved(Thalch)</strong></th><th><strong>ST Depression Induced by Exercise(Old Peak)</strong></th><th><strong>Disease</strong></th></tr>
</thead>
</center>
<tbody>
<?php
$count=1;
$sel_query="Select * from patientssymptoms";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["username"]; ?></td><td align="center"><?php echo $row["cpt"]; ?></td><td align="center"><?php echo $row["fbs"]; ?></td><td align="center"><?php echo $row["rec"]; ?></td><td align="center"><?php echo $row["eia"]; ?></td><td align="center"><?php echo $row["slp"]; ?></td><td align="center"><?php echo $row["nomv"]; ?></td><td align="center"><?php echo $row["thal"]; ?></td><td align="center"><?php echo $row["tbp"]; ?></td><td align="center"><?php echo $row["sc"]; ?></td><td align="center"><?php echo $row["mhra"]; ?></td><td align="center"><?php echo $row["stdi"]; ?></td><td align="center"><?php echo $row["dis"]; ?></td></tr>
<?php $count++;} ?>
</tbody>
</table>
</center>

</body>
</html>