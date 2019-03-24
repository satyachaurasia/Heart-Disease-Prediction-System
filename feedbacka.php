<?php
session_start();
if(isset($_SESSION['username'])=="") {
	header("Location: adminlogin.php");
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

     <div style="top:60; left:250; position:absolute; z-index:1;">
<font face="Broadway" size = "6">Inbox:</font>
</div>

<div style="top:110px; left:350px; width:650px; height:800px; position:absolute; overflow:auto; z-index:1">
<center><table class="w3-table w3-bordered w3-striped w3-card-4" >
<tr>
	<th></th>
	<th>From</th>
	<th>To</th>
	<th>Email</th>
    <th>Date</th>
	<th>Action</th>

</tr>

<?php
include 'db.php';
$SQL = "SELECT * FROM feedback  ORDER BY date_send DESC";
$result = mysql_query($SQL);
while ($db_field = mysql_fetch_assoc($result)) {
	$ctrl = $db_field['ctrl_no'];
	$a = $db_field['opened'];
	$b = $db_field['from_sender'];
	$e = $db_field['to_receiver'];
	$c = $db_field['email'];
	$d = $db_field['date_send'];
	print("<tr>");
	if($a == 0){
		print("<td align = 'center' width = '1'><a href = 'read_maild.php?key=".$ctrl."'><img src = 'images/unopened.jpg' border = '0'></img></a></td>");
	}
	else{
		print("<tr><td align = 'center' width = '1'><a href = 'read_maild.php?key=".$ctrl."'><img src = 'images/opened.jpg' border = '0'></img></a></td>");
	}
	print("<td align = 'center'><b>$b</b></td>");
	print("<td align = 'center'><b>$e</b></td>");
	if($c == ""){
		print("<td align = 'center' width = '150'>no subject</td>");
	}
	else{
		print("<td align = 'center' width = '150'>$c</td>");
	}
	print("<td align = 'center'>$d</td>");
	print("<td align = 'center' width ='75'><a href = 'delete_maild.php?key=".$ctrl."'<img src = 'images/deletemail.jpg' border = '0'></img></a>");
	print("<a href = 'delete_maild.php?key=".$ctrl."'><img src = 'images/deletemail.jpg' border = '0'></img></a></td>");
	print("</tr>");
}
?>


</table></center>
</div>

</body>
</html>



