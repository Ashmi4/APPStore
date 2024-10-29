<?php	
	
include 'Config.php';

	$userid = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) :  ""; 
	
	if(!empty($userid)){
		$qur = mysql_query("SELECT userid,name,email,address FROM `users_master` WHERE `userid`='$userid'");
		if(mysql_num_rows($qur)>0)
		{
		$result =array();
		while($r = mysql_fetch_array($qur)){
			
			extract($r);		
				
					$result[] = array("userid" => $userid ,"name" => $name ,"email" => $email ,"address" => $address);
			
				
					
		}
		$json['User'] = $result;
		}
		else{
			$json = array("status" => 0, "msg" => "not exits this user");
		}
	}else{
		$json = array("status" => 0, "msg" => "name not define");
	}
	@mysql_close($conn);

	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);