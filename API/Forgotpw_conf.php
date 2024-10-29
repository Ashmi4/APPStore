<?php
include 'Config.php';
date_default_timezone_set("Asia/Kolkata");

	$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) :  "";
	
	$forgotpw_token = isset($_POST['forgotpw_token']) ? mysql_real_escape_string($_POST['forgotpw_token']) :  "";
	
	if(!empty($email)AND !empty($forgotpw_token))
	{
		
		$query = mysql_query("select * from `touchit_app_db`.`users_master` where `email` = '$email' AND `forgotpw_token` = '$forgotpw_token'");
		
			if(mysql_num_rows($query)>0) 
			{
				while($r = mysql_fetch_array($query)) 
			{
				$date1 = date_create(date('Y-m-d H:m:s'));
				$date2 = date_create($r['token_time']);
				$diff_obj = date_diff($date1,$date2);
				$day = $diff_obj->format("%d");
				$hour = $diff_obj->format("%H");
				$min = $diff_obj->format("%m");
				$total_min = ($day*3600)+($hour*60)+($min);
				
				if($total_min <= 3600) {
					$qur = mysql_query("select * from `touchit_app_db`.`users_master` where `email` = '$email' AND `forgotpw_token` = '$forgotpw_token'");
				
				while($r = mysql_fetch_array($qur)){
					extract($r);
				
				$json = array("status" => 1, "msg" => "password verified successfully !!");				
				
				$sql = mysql_query("UPDATE `touchit_app_db`.`users_master` SET `password` = '$forgotpw_token',`forgotpw_token` = ' ', `status` = '0',`token_time` = '0000-00-00'  Where `email` = '$email';");
				}
			}
			
		
		else 
			{
				$json = array("status" => 0, "msg" => "Access Token expired");
			
			}
		}
		
		}
		else 
			{
				$json = array("status" => 0, "msg" => "Access Token not valid");
			
			}
	}
	else{
		$json = array("status" => 0, "msg" => "User ID not define");
	
		}
	//@mysql_close($conn);

    //Output header
		
	header('Content-type: application/json');
	echo json_encode($json); 
	
