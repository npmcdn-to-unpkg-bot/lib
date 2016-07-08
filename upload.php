<?php
 
    /*if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
  move_uploaded_file($_FILES['file']['tmp_name'], "./nectorimg/kumar1.png");
    }
 echo 'http://smaatapps.com/nector/nectorimg/kumar1.png';*/

set_time_limit(0);
if (!class_exists('S3'))require_once('S3.php');
if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAIX4OUYLZ7HUG43VA');
if (!defined('awsSecretKey')) define('awsSecretKey', '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');

		if(isset($_FILES['file']))
		{
			$file =  $_FILES["file"]['type'];
			$explodefile = explode("/",$file);
			$type = $explodefile[1]; 
					$s3 = new S3(awsAccessKey, awsSecretKey);
					$presentTime=time();
					$fileTempName=$_FILES["video_file"]["tmp_name"];
					
					$imageName6="postanswer6.png";
					
					if($s3->putObjectFile($fileTempName, "dogytalesquestion", $imageName6, S3::ACL_PUBLIC_READ_WRITE))
					{
						echo "success";	
					}else
					{
						echo "failed";	
					}
		
		}
		
?>
