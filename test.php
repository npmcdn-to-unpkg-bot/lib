<?php
	$link = mysqli_connect('mydbinstance.abcdefghijkl.us-east-1.rds.amazonaws.com', 'awsuser', 'mypassword', 'information_schema', 3306);
	var_dump($link);
	 $host = "mydbinstance.abcdefghijkl.us-east-1.rds.amazonaws.com";
	   
	   

		$dbuser ="awsuser";
	 	$db_password ="mypassword";
		$database="information_schema";

	 
    mysql_connect($host,$dbuser,$db_password) or die ("Error connecting to DB");
	$selectDb=mysql_select_db($database) ;	
	if($selectDb)
	{
		echo "successfully done";	
	}
?>
