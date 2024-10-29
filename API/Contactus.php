<?php
ob_start();
include 'Config.php';
date_default_timezone_set("Asia/Kolkata");

if($_SERVER['REQUEST_METHOD'] == "POST"){
		
	$name = isset($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "";	
	$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
	$company_name = isset($_POST['company_name']) ? mysql_real_escape_string($_POST['company_name']) : "";	
	$message = isset($_POST['message']) ? mysql_real_escape_string($_POST['message']) : "";	
	
	
	
	if($email == '') {
		
		$json = array("status" => 0, "msg" => "Request method not accepted");
	}
	else {
			
			$sql = "INSERT INTO `touchit_app_db`.`contact_master` (`name`,`email`,`address`,`subject`) VALUES ('$name','$email', '$company_name','$message');";
			$qur = mysql_query($sql);		
			$email_subject='subject'.$company_name.'';
			$msg = 'NAme'.$name.'email'.$email.'message'.$message.'';
			$to = "ashmi.oceans@gmail.com";
				$headers = "From:" . $email ."\r\n"; 
				 
				 $headers .= "MIME-Version: 1.0\r\n";
				 $headers .= "Content-type: text/html\r\n";
				
			mail($to, $email_subject, $msg, $headers);	
			$json = array("status" => 1, "msg" => "Sent mail");	
		
	}
}
@mysql_close($conn);
	header('Content-type: application/json');
	echo json_encode($json);