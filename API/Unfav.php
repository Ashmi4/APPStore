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
			
			$sql1 = "DELETE FROM `favapp_master` WHERE `userid` = '$userid' AND `wid`= '$appid';";
				
				$query = mysql_query($sql1);				
		$qur = mysql_query("SELECT userid,wid,fname,ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app FROM app_master JOIN favapp_master ON favapp_master.wid=app_master.ref WHERE favapp_master.userid='$userid'");
		
		$result =array();
		while($r = mysql_fetch_array($qur)){
			
			extract($r);	
			
		
	 $screen = explode(" ",$screenshot);
	 $a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
		$result[] = array("userid" => $userid ,"wishlistid" => $wid,"app" =>array("id" => $ref,"cat_id" => $appid,"cat_name" => $fname,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app));  
		
		}
		$json = array("status" => 1, "msg" => "Delete from wishlist");	
		
		
		}
		else{
				
				$json = array("status" => 0, "msg" => "No product in wishlist");	
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
else{
		$json = array("status" => 0);
	
		}
@mysql_close($conn);
	header('Content-type: application/json');
	echo json_encode($json);