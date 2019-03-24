<?php
session_start();
if(isset($_SESSION['username'])=="") {
	header("Location: doctorlogin.php");
}
include_once 'db.php';

?>

	
	
	
<?php
$ctrl = $_REQUEST['key'];
include 'db.php';

$SQL = "UPDATE feedback SET opened = 1 WHERE ctrl_no = '$ctrl'";
mysql_query($SQL);


$SQL = "SELECT * FROM feedback WHERE ctrl_no = '$ctrl'";
$result = mysql_query($SQL);
while ($db_field = mysql_fetch_assoc($result)) {
	$username = $db_field['username'];
	$date = $db_field['date_send'];

	$message = $db_field['message'];
}

?>



<html>
<head>
<title>Feedback</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />

</head>
<body>
<header class="w3-container w3-blue  w3-padding" style="min-height:50px" id="myHeader">
    <h1 class="w3-xlarge w3-animate-bottom w3-center w3-text-white">Heart Disease Prediction System</h1>
	</header>

<ul class="w3-navbar w3-light-grey ">
  <li><a  class=" w3-hover-black" href="viewtrainingdatad.php">View Training Data</a></li>
    <li><a  class=" w3-hover-black" href="viewpatientsd.php">View patients</a></li>
	 <li><a  class=" w3-hover-black" href="viewptsymptomsd.php">View patients Symptoms</a></li>
  <li><a  class=" w3-black" href="feedbackd.php">Feedback</a></li>
  <li><a  class=" w3-hover-black" href="logout.php">Logout</a></li>
  <li><a  class=" w3-hover-black" href="changepassdr.php">Change Password</a></li>
</ul>
<center>
<div style="top:150; left:310; position:absolute; z-index:1;">
<b><font face="Arial" size = "3">From </font></b>
</div>

<div style="top:150; left:380; position:absolute; z-index:1;">
<b><font face="Arial" size = "3">:</font></b>
</div>

<div style="top:150; left:400; position:absolute; z-index:1;">
<b><font face="Arial" size = "3"><?php print $username; ?></font></b>
</div>

<div style="top:170; left:310; position:absolute; z-index:1;">
<b><font face="Arial" size = "3">Date </font></b>
</div>

<div style="top:170; left:380; position:absolute; z-index:1;">
<b><font face="Arial" size = "3">:</font></b>
</div>

<div style="top:170; left:400; position:absolute; z-index:1;">
<b><font face="Arial" size = "3"><?php print $date; ?></font></b>
</div>


<div style="top:200; left:310; position:absolute; z-index:1;">
<b><font face='Arial' size = '3'>Message </font></b>
</div>

<div style="top:200; left:380; position:absolute; z-index:1;">
<b><font face="Arial" size = "3">:</font></b>
</div>

<div style="top:202; left:400; position:absolute; z-index:1;">
<table border = "0" width = "500" bgcolor = "white">
<tr><td><?php print $message; ?></td></tr>
</table>
</div>
    </center>
</body>
</html>
	
	