<?php
	$link = mysqli_connect('soiree-smaatapp.cvjwbf8cmrzh.us-west-2.rds.amazonaws.com', 'soiree', 'kQ#$U3GYUhmw=J&o6Rzv3uh4puWkZi[Nca3rPqBg9', 'soiree_smaatapp',3306);
	
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }else{
	  	echo "success";
	  }
	 // echo mysqli_get_client_info(); echo mysqli_get_client_version(); echo mysqli_get_host_info($link);
	//echo mysqli_connect_error();
	$query ="DROP TABLE client_details";
	if (mysqli_query($link, $query)) {
	    echo "Table MyGuests drop successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($link);
	}
	$query = "CREATE TABLE IF NOT EXISTS `fb` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook_id` varchar(255) NOT NULL,
  `login_type` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `profile_url` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `typeid` int(100) NOT NULL,
  PRIMARY KEY (`fb_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1";
	if (mysqli_query($link, $query)) {
	    echo "Table MyGuests created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($link);
	}
	/*$EMAIL = $_GET['EMAIL']; $PASSWORD = $_GET['PASSWORD'];
	
        //$result = mysqli_query($link, $query);
        $sql = "SELECT ID, EMAIL, PASSWORD FROM USERS";
	$result = mysqli_query($link, $sql);
	
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        echo "ID: " . $row["ID"]. " - EMAIL: " . $row["EMAIL"]. " " . $row["PASSWORD"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	$sql = "INSERT INTO `client_registration` (`client_id`, `email`, `password`, `first_name`, `last_name`, `profile_url`, `phone_number`, `gender`, `latitude`, `longitude`, `email_verification`, `phone_verification`, `status`, `deviceid`, `devicetype`) VALUES
(2, 'car3chandran@gmail.com', '123456', 'kar', 'chan', '', '9840175672', 1, '87.45', '55.54', 1, 0, 0, '', '')";
	
	if (mysqli_query($link, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($link);
	}*/
?>
