<?php
	$link = mysqli_connect('mydbinstance.abcdefghijkl.us-east-1.rds.amazonaws.com', 'awsuser', 'mypassword', 'information_schema', 3306);
	var_dump($link);
?>
