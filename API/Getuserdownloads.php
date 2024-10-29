<?php	
	
include 'Config.php';

	$userid = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) :  "";	
	
	if(!empty($userid)){
		$qur = mysql_query("SELECT userid,aid,wname,ref,appid,appname,app_image,app_video,screenshot,version,price,rank,count,download,created_app FROM orders_master JOIN app_master ON app_master.ref=orders_master.aid WHERE orders_master.userid='$userid'");
		if(mysql_num_rows($qur)>0){
		$result =array();
		while($r = mysql_fetch_array($qur)){
			
			extract($r);			
				
			 $screen = explode(",",$screenshot);
			 $a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
			$result[] = array("userid" => $userid ,"download_id" => $aid,"app" =>array("id" => $ref,"cat_id" => $appid,"cat_name" => $wname,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app));  
	
		
		}
		$json['result'] = $result;
		}
else{
	
	$result = array();  
			
			$json = array("result" => $result);
}		
	}else{
		$json = array("status" => 0, "msg" => "userid not define");
	}
	
	@mysql_close($conn);

	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);