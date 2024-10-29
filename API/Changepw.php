<?php
include 'Config.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
	$password = isset($_POST['password']) ? mysql_real_escape_string($_POST['password']) : "";	
	//$confirm_pw = isset($_POST['confirm_pw']) ? mysql_real_escape_string($_POST['confirm_pw']) : "";
		if($email == '' OR $password == '') 
		{
		
		$json = array("status" => 0, "msg" => "Request method not accepted");
		}
		else
		{
		$id = mysql_query("select * from users_master  where email='$email'");
		if(mysql_num_rows($id)>0)
		{
			
			$sql = mysql_query("UPDATE `touchit_app_db`.`users_master` SET `password` = '$password'  Where `email` = '$email';");
			
			$json = array("status" => 1, "msg" => "password is save to your account");
			
				
			
			
		}
		else{		
			
				$json = array("status" => 0, "msg" => "error occured");
						
		}		
	}
	
}
@mysql_close($conn);

/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);