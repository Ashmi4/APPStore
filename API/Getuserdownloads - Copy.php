<?php	
	
include 'Config.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
	$id = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) :  "";
	
if($id == '') {
		
		$json = array("status" => 0, "msg" => "Request method not accepted");
	}
	else {
		$id1 = mysql_query("select * from `touchit_app_db`.`orders_master` where `userid` = '$id'");
		if(mysql_num_rows($id1)>0)
		{	
		$qur = mysql_query("Select userid, aid,appname,app_image,name from `orders_master` where  `userid` = '$id'");
		$result =array();
		while($r = mysql_fetch_array($qur)){
			extract($r);
			$result[] = array("userid" => $userid,"appid" => $aid,"app_image" => $app_image,"cat_name" => $name); 
	
		$json['result'] = $result;
			}
		}
		else{
			$json = array("status" => 0, "msg" => "not exists userid");
		}
	}
}
else{
			$json = array("status" => 0, "msg" => "error occured");
		}
	@mysql_close($conn);

	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);