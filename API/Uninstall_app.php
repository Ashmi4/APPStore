<?php
ob_start();
include 'Config.php';
date_default_timezone_set("Asia/Kolkata");

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$userid = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) : "";	
	$p_name= isset($_POST['p_name']) ? mysql_real_escape_string($_POST['p_name']) : "";	
	
	if(!empty($userid) AND !empty($p_name))
	{
		
			$aa = explode(",",$p_name);
			foreach($aa as $a){
				$id = mysql_query("Select * from `orders_master` where `userid`= '$userid' AND `p_name`= '$a' AND `status`='1'");
				if(mysql_num_rows($id)>0)
		{
			
			$sql1 = "DELETE FROM `orders_master` WHERE `userid` = '$userid' AND `p_name`= '$a'";
				
				$query = mysql_query($sql1);				
		
		$json = array("status" => 1, "msg" => "Uninstall");	
		
		
		}
		else{
				
				$json = array("status" => 0, "msg" => "Not installed this app");	
		}
				
			}
				
			
		

	}
	else{
		$json = array("status" => 0, "msg" => "Error occured,try again later");
	
		}
	
}
else{
		$json = array("status" => 0);
	
		}
@mysql_close($conn);
	header('Content-type: application/json');
	echo json_encode($json);