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
	/*$query ="DROP TABLE checkin";
	if (mysqli_query($link, $query)) {
	    echo "Table MyGuests drop successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($link);
	}*/
	$query = "CREATE TABLE IF NOT EXISTS `talent_details` (
  `talent_id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `profile_url` varchar(255) NOT NULL,
  `pic1` varchar(255) NOT NULL,
  `pic2` varchar(255) NOT NULL,
  `w9_form` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `experience` text NOT NULL,
  `special_skills` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL COMMENT '0 - female, 1 - male, 2 - other',
  `hair_color` varchar(255) NOT NULL,
  `eye_color` varchar(255) NOT NULL,
  `height` varchar(100) NOT NULL,
  `languages` varchar(255) NOT NULL,
  `amount` int(100) NOT NULL,
  `total_events_attended` int(100) NOT NULL,
  `average_rating` int(100) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `email_notification` int(10) NOT NULL COMMENT '0 - No , 1 - Yes',
  `email_frequency` int(100) NOT NULL COMMENT 'No. of email counts',
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `email_verification` int(10) NOT NULL COMMENT '0 - Not verified, 1 - Verified',
  `phone_verification` int(10) NOT NULL COMMENT '0 - Not verified, 1 - Verified',
  `phone_verification_code` varchar(255) NOT NULL,
  `login_type` varchar(255) NOT NULL,
  `facebook_id` varchar(255) NOT NULL,
  `stripe_id` varchar(100) NOT NULL,
  `bank_id` varchar(255) NOT NULL,
  `recp_id` varchar(255) NOT NULL,
  `card_fname` varchar(255) NOT NULL,
  `card_lname` varchar(255) NOT NULL,
  `routing_number` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(10) NOT NULL COMMENT ' 0 - Active, 1 - InActive, 2 - Closed',
  `deviceid` varchar(255) NOT NULL,
  `devicetype` varchar(255) NOT NULL,
  PRIMARY KEY (`talent_id`)
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
