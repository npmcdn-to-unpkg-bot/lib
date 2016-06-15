<?php
	$from_email = "admin@smaatapps.com";
	$message = "Hi";
	$subject = "Test";
	
	$to = "car3chan@gmail.com";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <'.$from_email.'>' . "\r\n";
	$headers .= 'Cc: '.$from_email.'' . "\r\n";
	$headers .= 'Reply-To: <'.$from_email.'>' . "\r\n"; 
	mail($to,$subject,$message,$headers);
 ?>
