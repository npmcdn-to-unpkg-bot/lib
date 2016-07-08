<?php
	$link = mysqli_connect('soiree-smaatapp.cvjwbf8cmrzh.us-west-2.rds.amazonaws.com', 'soiree', 'kQ#$U3GYUhmw=J&o6Rzv3uh4puWkZi[Nca3rPqBg9', 'soiree_smaatapp',3306);
	
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }else{
	  	echo "success";
	  }
	$servername = "soiree-smaatapp.cvjwbf8cmrzh.us-west-2.rds.amazonaws.com";
	$username = "soiree";
	$password = "kQ#$U3GYUhmw=J&o6Rzv3uh4puWkZi[Nca3rPqBg9";
	$dbname = "soiree_smaatapp";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	 $sql = "CREATE TABLE MyGuests (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP
		)";
		
		if ($conn->query($sql) === TRUE) {
		    echo "Table MyGuests created successfully";
		} else {
		    echo "Error creating table: " . $conn->error;
		}
		
		$conn->close();
?>
