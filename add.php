<?php

	
		if(mysqli_query($con, "INSERT INTO patientssymptoms(username,cpt,fbs,rec,eia,slp,nomv,thal,tbp,sc,mhra,stdi,dis) VALUES('" . $username . "','" . $cpt . "', '" . $fbs . "', '" . $rec . "','" . $eia . "','" . $slp . "','" . $nomv . "','" . $thal . "','" . $tbp . "','" . $sc . "','" . $mhra . "','" . $stdi . "','" . $dis . "')")) {
			$successmsg = "Your Details Submitted Successfully!";
		} else {
			$errormsg = "Error in registering...Please try again later!";
		}

?>