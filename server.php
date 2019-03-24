<?php 
	
	$db = mysqli_connect('localhost', 'root', '', 'heart');

	// initialize variables
	$age = "";
	$sex = "";
	$id = 0;
	$cp = "";
	$trestbps = "";
	$chol = "";
	$fbs = "";
	$restecg = "";
	$thalach = "";
	$exang = "";
	$oldpeak = "";
	$slope = "";
	$ca = "";
	$thal = "";

	if (isset($_POST['save'])) {
		$age = $_POST['age'];
		$sex = $_POST['sex'];
		$cp = $_POST['cp'];
		$trestbps = $_POST['trestbps'];
		$chol = $_POST['chol'];
		$fbs = $_POST['fbs'];
		$restecg = $_POST['restecg'];
		$thalach = $_POST['thalach'];
		$exang = $_POST['exang'];
		$oldpeak = $_POST['oldpeak'];
		$slope = $_POST['slope'];
		$ca = $_POST['ca'];
		$thal = $_POST['thal'];


		
		mysqli_query($db, "INSERT INTO data (age, sex, cp, trestbps, chol, fbs, restecg, thalach, exang, oldpeak, slope, ca, thal ) VALUES ('$age', '$sex', '$cp', '$trestbps', '$chol', '$fbs', '$restecg', '$thalach', '$exang', '$oldpeak', '$slope', '$ca', '$thal')"); 
		$_SESSION['message'] = "saved"; 
		header('location: admin.php');
	}
?>
