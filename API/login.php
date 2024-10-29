<?php

include 'Config.php';
date_default_timezone_set("Asia/Kolkata");

	$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) :  "";
	
	$password = isset($_POST['password']) ? mysql_real_escape_string($_POST['password']) :  "";
	$device_token = isset($_POST['device_token']) ? mysql_real_escape_string($_POST['device_token']) :  "";
	
	if(!empty($email) AND !empty($password))
	{
		
		$query = mysql_query("select * from `touchit_app_db`.`users_master` where `email` = '$email' AND `password` = '$password'");
		
		if(mysql_num_rows($query)>0) 
			{
				$result =array();
				while($r = mysql_fetch_array($query)) 
			{	
			extract($r);			
			if($image == ''){	
		$json = array("status" => 1, "msg" => "login","userid" => $userid,"email" => $email ,"userpic" =>'',"name" => $name,"address" => $address,"device_token" => $device_token);
			}
			else{
				
			$json = array("status" => 1, "msg" => "login","userid" => $userid,"email" => $email ,"userpic" =>$image,"name" => $name,"address" => $address,"device_token" => $device_token);
			
				
			}
			}
			
		}
	else{
	$json = array("status" => 0, "msg" => "Invalid Login");	
		
		
	}		
	}
	else{
		$json = array("status" => 0, "msg" => "User ID not define");	
	
	}
	//@mysql_close($conn);

    //Output header
		
	header('Content-type: application/json');
	echo json_encode($json); 
	