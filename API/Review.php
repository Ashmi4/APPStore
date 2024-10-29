<?php
ob_start();
include 'Config.php';
date_default_timezone_set("Asia/Kolkata");

if($_SERVER['REQUEST_METHOD'] == "POST"){
		
	$userid = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) : "";
	$appid = isset($_POST['appid']) ? mysql_real_escape_string($_POST['appid']) : "";
	$message = isset($_POST['message']) ? mysql_real_escape_string($_POST['message']) : "";
	$rating = isset($_POST['rating']) ? mysql_real_escape_string($_POST['rating']) : "";	
		
	if($userid == '') {
		
		$json = array("status" => 0, "msg" => "Request method not accepted");
	}
	else {
		
		$id = mysql_query("select * from `users_master`  where userid ='$userid'");
		if(mysql_num_rows($id)>0)
		{		
			$iid = mysql_query("Select userid,name,email,image from `users_master` where `userid`= '$userid'");
			$result =array();
			if(mysql_num_rows($iid)>0)
			{
			while($rr = mysql_fetch_array($iid))
			{
				extract($rr);
				$result = array("name" => $name,"email" => $email,"image" => $image);
				
			}
			$qur1 = mysql_query("SELECT AVG(rating) FROM review_master where rid = $appid AND rating !=''");
			$row = mysql_fetch_array($qur1);
							$res[] = array("rating" => round($row['AVG(rating)']));
								$rri = array_column($res,'rating');
									$aai= implode(",",$rri);
							$sql1 = mysql_query("UPDATE `touchit_app_db`.`app_master` SET `rank` = '$aai' where `ref` = '$appid';");				
			$iidd = mysql_query("Select userid,rid,review from `review_master` where `userid`= '$userid' AND `rid`= '$appid' AND `review`= '$message'");
			if(mysql_num_rows($iidd)>0)
			{
					$json = array("status" => 0, "msg" => "Review and ratings already added","userid"=>$userid,"appid"=>$appid,"review"=>$message,"rating"=>$rating);
			}
			else{
			$iiddd = mysql_query("Select userid,rid,review from `review_master` where `userid`= '$userid' AND `rid`= '$appid'");
			if(mysql_num_rows($iiddd)>0)
			{
				$sql1 = mysql_query("UPDATE `touchit_app_db`.`review_master` SET `review` = '$message', `rating` = '$rating' where `userid`= '$userid' AND `rid`= '$appid';");				
				
					$json = array("status" => 1, "msg" => "Review and ratings added","userid"=>$userid,"userimage"=>$image,"appid"=>$appid,"review"=>$message,"rating"=>$rating,"a"=>$aai);
			}
			else{
				$sql = "INSERT INTO `touchit_app_db`.`review_master` (`rid`,`userid`,`review`,`username`,`email`,`rating`,`userimage`) VALUES ('$appid','$userid','$message','$name','$email','$rating','$image');";
			$qur = mysql_query($sql);			
			
			if($qur){			
			
			$json = array("status" => 1, "msg" => "Review and ratings added","userid"=>$userid,"userimage"=>$image,"appid"=>$appid,"review"=>$message,"rating"=>$rating,"a"=>$aai);
			
			}		
			else{
				
				$json = array("status" => 0, "msg" => "Error occured,try again later");
			
			}
				
			}
				
				
			}
			
							
			}
			
		}
		else{				
		
			$json = array("status" => 0, "msg" => "signup for review");
		}
		
	}
}
@mysql_close($conn);
	header('Content-type: application/json');
	echo json_encode($json);