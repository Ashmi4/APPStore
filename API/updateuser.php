<?php
ob_start();
include 'Config.php';
date_default_timezone_set("Asia/Kolkata");

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$userid = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) : "";		
	$name = isset($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "";	
	//$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";	
	$address = isset($_POST['address']) ? mysql_real_escape_string($_POST['address']) : "";	
	$password = isset($_POST['password']) ? mysql_real_escape_string($_POST['password']) : "";
	$image1 = isset($_FILES['image']['name']) ? mysql_real_escape_string($_FILES['image']['name']) : "";
	
	
	
	if($userid == '') {
		
		$json = array("status" => 0, "msg" => "Request method not accepted");
	}
	else {
		
		$id = mysql_query("select userid,image from `users_master`  where userid='$userid'");
		if(mysql_num_rows($id)>0)
		{
		while($rr = mysql_fetch_array($id))
			{
				extract($rr);
				$result = array("image" => $image);
				
			}			
				if(!empty($image1)){
				move_uploaded_file ($_FILES["image"]["tmp_name"], "image/".$_FILES["image"]["name"]);		
				$final = 'http://touchitappstore.com/it_api/image/';
			     $video = $final . $image1;
				}
					
		
if($image1=='' AND $password==''){
	$sql = mysql_query("UPDATE `touchit_app_db`.`users_master` SET `name` = '$name',`address` = '$address' Where `userid` = '$userid';");			
			
			$json = array("status" => 1, "msg" => "Update data","name" => $name,"address" => $address,"userpic" =>$image);
					
}
else{
	if($image1=='' AND $password!='' ){
		$sql = mysql_query("UPDATE `touchit_app_db`.`users_master` SET `name` = '$name',`address` = '$address',`password` = '$password' Where `userid` = '$userid';");			
			
			$json = array("status" => 1, "msg" => "Update data","name" => $name,"address" => $address,"userpic" =>$image);
				
		
	}
	else{
		if($password=='' AND $image1!='')
		{
		$sql = mysql_query("UPDATE `touchit_app_db`.`users_master` SET `name` = '$name',`image` = '$video',`address` = '$address' Where `userid` = '$userid';");			
			
			$json = array("status" => 1, "msg" => "Update data","name" => $name,"address" => $address,"userpic" => 'http://touchitappstore.com/it_api/image/'. $image1 .'');
					
			
		}
		else{
			$sql = mysql_query("UPDATE `touchit_app_db`.`users_master` SET `name` = '$name',`image` = '$video',`address` = '$address',`password` = '$password'  Where `userid` = '$userid';");			
			
			$json = array("status" => 1, "msg" => "Update data","name" => $name,"address" => $address,"userpic" => 'http://touchitappstore.com/it_api/image/'. $image1 .'');
				
			
		}
	}
	
	
}
			
				
		}
		else{
		$json = array("status" => 0, "msg" => "user not exits");
		}
		
		
	}
}
@mysql_close($conn);
	header('Content-type: application/json');
	echo json_encode($json);