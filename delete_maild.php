<?php
session_start();
if(isset($_SESSION['username'])=="") {
	header("Location: doctorlogin.php");
}
include_once 'db.php';

$ctrl = $_REQUEST['key'];


$SQL = "DELETE FROM feedback WHERE ctrl_no = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>alert('Your Message Deleted Successfully')</script>";
print "<script>location.href = 'feedbackd.php'</script>";
?>