<?php
	$link = mysqli_connect('soiree-smaatapp.cvjwbf8cmrzh.us-west-2.rds.amazonaws.com', 'soiree', 'kQ#$U3GYUhmw=J&o6Rzv3uh4puWkZi[Nca3rPqBg9', 'soiree_smaatapp',3306);
	
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }else{
	  	echo "success";
	  }
	  $res = mysqli_query($link,"SHOW TABLES");
	  $tableList = array();
	  
	  while($cRow = mysqli_fetch_array($res))
	  {
	    $tableList[] = $cRow[0];
	  }
	  return $tableList;
?>
