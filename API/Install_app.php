<?php
ob_start();
include 'Config.php';
date_default_timezone_set("Asia/Kolkata");

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$userid = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) : "";	
	$p_name = isset($_POST['p_name']) ? mysql_real_escape_string($_POST['p_name']) : "";	
	
	if(!empty($userid) AND !empty($p_name))
	{
		$idd = mysql_query("Select * from `users_master` where `userid`= '$userid'");
		if(mysql_num_rows($idd)>0)
		{	
			while($r = mysql_fetch_array($idd)) 
			{
				$id = mysql_query("Select * from `orders_master` where `userid`= '$userid' AND `p_name`= '$p_name' AND `status` = '1' ");
				if(mysql_num_rows($id)>0)
				{
			$json = array("status" => 0, "msg" => "Already installed");
				}
		else{
			
			$iidd = mysql_query("SELECT ref,appname,app_image,name,pckagename FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE app_master.pckagename='$p_name'");
				if(mysql_num_rows($iidd)>0){
				while($rr = mysql_fetch_array($iidd))
			{
				extract($rr);
				$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
				$result = array("ref" => $ref ,"appname" => $a_name ,"image" => $app_image,"name" => $name,"pckagename" => $pckagename);
				
			}
			
				$sql1 = "INSERT INTO `touchit_app_db`.`orders_master` (`aid`,`userid`,`wappname`,`wapp_image`,`wname`,`p_name`,`status`) VALUES ('$ref','$userid','$a_name','$app_image','$name','$pckagename','1');";
				
				$query = mysql_query($sql1);
				
				
				$sql1 = mysql_query("UPDATE `touchit_app_db`.`app_master` SET  `download` =  `download` + 1   where `pckagename` = $p_name;");
				
				$json = array("status" => 1, "msg" => "APP added");	
		}
			}
			}	
		}
		else{
			$json = array("status" => 0, "msg" => "plz signup for Download App");
		}
	}
	else{
		$json = array("status" => 0, "msg" => "Error occured,try again later");
	
		}
	
}
@mysql_close($conn);
	header('Content-type: application/json');
	echo json_encode($json);