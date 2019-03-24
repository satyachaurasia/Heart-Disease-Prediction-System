<?php

$msg = "";
include 'db.php';

if (isset($_POST['cancel'])) {
	print "<script>location.href = 'messages1.php'</script>";
}
else if (isset($_POST['send'])) {
	$name = $_POST['name'];
    $nem = $_POST['nem'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$SQL = "INSERT INTO dwtomessages (`to_receiver`,`from_sender`, `email`, `message`) VALUES ( '$nem','$name', '$email', '$message')";
	$result = mysql_query($SQL);
	if(!$result ){
		die("<SCRIPT LANGUAGE='JavaScript'>alert('Unknown Error Occured!')</script><script>location.href = 'messages1.php'</script>");
	}
	
	$SQL = "INSERT INTO dwtosent_items (`to_receiver`,`to_receiver`,`email`, `message`) VALUES ('$nem','$name','$email', '$message')";
	$result = mysql_query($SQL);
	if(!$result ){
		die("<SCRIPT LANGUAGE='JavaScript'>alert('Successfully Send!')</script><script>location.href = 'default.php'</script>");
	}
	
	$msg = "Message Sent.";
	print("<div style='top:260; left:550; position:absolute; z-index:1;'>");
	
}	
?>

<html>
<head>
	<title>PHP Login Script</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="w3-theme-black.css">
</head>
<body>
<header class="w3-container w3-blue  w3-padding" style="min-height:300px id="myHeader">
    <h1 class="w3-xlarge w3-animate-bottom w3-center w3-text-white">Heart Disease Prediction System</h1>
</header>
</body>
<div class="col-md-7 col-sm-4 col-xs-12">
          <div class="contact-right wow fadeInRight">
            <h2>Send a mail</h2>
            <span id="submitthanks"></span>   
            <form  class="contact-form" name = 'reply_form' method = 'post'>
              <div class="form-group">   
                <span id="contactNameerror"></span>             
                <input type="text" class="form-control" name = 'nem' placeholder="TO Admin" id="txtContactname" onfocus="contactName()">
              </div>
			        <div class="form-group">   
                <span id="contactNameerror"></span>             
                <input type="text" class="form-control" name = 'name' placeholder="Name" id="txtContactname" onfocus="contactName()">
              </div>
              <div class="form-group"> 
                 <span id="contactEmailerror"></span>               
                <input type="email" class="form-control" name = 'email' placeholder="Enter Email" id="txtContactemail" onfocus="contactEmail()">
              </div>              
              <div class="form-group">
                <span id="contactCommenterror"></span> 
                <textarea class="form-control" name = 'message' placeholder="Comments" id="txtContactcomments" onfocus="contactComments()"></textarea>
              </div>
              <button type="submit"  name = 'send' class="button button-default"><span>SUBMIT</span></button>
            </form>
          </div>
        </div>
      </div>
</html>