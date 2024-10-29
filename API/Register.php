<?php
include 'Config.php';
date_default_timezone_set("Asia/Kolkata");
if($_SERVER['REQUEST_METHOD'] == "POST"){
		
	$name = isset($_POST['name']) ? mysql_real_escape_string($_POST['name']) : "";	
	$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";
    $image = isset($_FILES['image']['name']) ? mysql_real_escape_string($_FILES['image']['name']) : "";	
	$address = isset($_POST['address']) ? mysql_real_escape_string($_POST['address']) : "";	
	$password = isset($_POST['password']) ? mysql_real_escape_string($_POST['password']) : "";
	$device_token = isset($_POST['device_token']) ? mysql_real_escape_string($_POST['device_token']) : "";
	
	
	
	if($email == '') {
		
		$json = array("status" => 0, "msg" => "Request method not accepted");
	}
	else {
		
		$id = mysql_query("select * from `users_master`  where email='$email'");
		if(mysql_num_rows($id)>0)
		{			
			$json = array("status" => 0, "msg" => "Already exist this email id ");
			header('Content-type: application/json');
			echo json_encode($json);
			exit();		
		}
		else{				

			$userid = bin2hex(openssl_random_pseudo_bytes(1));
			$date_time = date("Y-m-d H:m:s");
			move_uploaded_file ($_FILES["image"]["tmp_name"], "image/".$_FILES["image"]["name"]);
			$final = 'http://touchitappstore.com/it_api/image/';
			     $video = $final . $image;
			$sql = "INSERT INTO `touchit_app_db`.`users_master` (`userid`,`name`,`email`,`image`,`address`,`password`,`device_token`,`create_user`) VALUES ('$userid','$name','$email','$video','$address','$password','$device_token', '$date_time');";
			$qur = mysql_query($sql);			
			if($qur)
			{
			if($image == ''){			
			$json = array("status" => 1, "msg" => "Account has been created,Check your mail for welcome","userid" => $userid,"name" => $name,"email" => $email,"image" => '',"address" => $address,"create_user" => $date_time);
			
			
			}		
			else{
				$json = array("status" => 1, "msg" => "Account has been created,Check your mail for welcome","userid" => $userid,"name" => $name,"email" => $email,"image" => 'http://touchitappstore.com/it_api/image/'. $image .'',"address" => $address,"create_user" => $date_time);
			}			
			
			}
			else{
				$json = array("status" => 0, "msg" => "error in data insert");
				
			}

		}
		
	}
}
@mysql_close($conn);
	header('Content-type: application/json');
	echo json_encode($json);