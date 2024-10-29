<?php
ob_start();
include 'Config.php';
date_default_timezone_set("Asia/Kolkata");

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$userid = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) : "";	
	$appid = isset($_POST['appid']) ? mysql_real_escape_string($_POST['appid']) : "";	
	
	if(!empty($userid) AND !empty($appid))
	{
		$idd = mysql_query("Select * from `users_master` where `userid`= '$userid'");
		if(mysql_num_rows($idd)>0)
		{
			while($r = mysql_fetch_array($idd)) 
			{
				$id = mysql_query("Select * from `favapp_master` where `userid`= '$userid' AND `wid`= '$appid'");
				if(mysql_num_rows($id)>0)
		{
			$json = array("status" => 0, "msg" => "Already in wishlist");
		}
		else{
			$iidd = mysql_query("SELECT ref,appname,app_image,name FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE app_master.ref='$appid'");
				if(mysql_num_rows($iidd)>0){
				while($rr = mysql_fetch_array($iidd))
			{
				extract($rr);
				$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
				$result = array("appname" => $a_name ,"image" => $app_image,"name" => $name);
				
			}
				$sql1 = "INSERT INTO `touchit_app_db`.`favapp_master` (`wid`,`userid`,`fname`) VALUES ('$appid','$userid','$name');";
				
				$query = mysql_query($sql1);
				
				$sql1 = mysql_query("UPDATE `touchit_app_db`.`app_master` SET  `count` =  `count` + 1   where `ref` = $appid;");
				
				$json = array("status" => 1, "msg" => "wish added");
				}				
		}
			}	
		}
		else{
			$json = array("status" => 0, "msg" => "plz signup for wishlist");
		}
	}
	else{
		$json = array("status" => 0, "msg" => "Error occured,try again later");
	
		}
	
}
@mysql_close($conn);
	header('Content-type: application/json');
	echo json_encode($json);