<?php
ob_start();
include 'Config.php';
date_default_timezone_set("Asia/Kolkata");

if($_SERVER['REQUEST_METHOD'] == "POST"){
		
	$appid = isset($_POST['appid']) ? mysql_real_escape_string($_POST['appid']) : "";		
	$image = isset($_FILES['apk']['name']) ? mysql_real_escape_string($_FILES['apk']['name']) : "";		
			$iidd = mysql_query("SELECT ref,apk_link,apk_server FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE app_master.ref='$appid'");
				if(mysql_num_rows($iidd)>0){
				while($rr = mysql_fetch_array($iidd))
			{
				extract($rr);
				
				$result = array("ref" => $ref ,"apk_link" => $video);
				
			}
			move_uploaded_file ($_FILES["apk"]["tmp_name"], "apk/".$_FILES["apk"]["name"]);
			$final = 'http://touchitappstore.com/it_api/apk/';
			     $video = $final . $image;
				$sql1 = mysql_query("UPDATE `touchit_app_db`.`app_master` SET  `apk_link` =  '$video',`apk_server` = '1'   where `ref` = $appid;");
				
				$json = array("status" => 1, "msg" => "APP added");	
		}
			
			
		
		

	
}
@mysql_close($conn);
	header('Content-type: application/json');
	echo json_encode($json);