<?php	
	
include 'Config.php';

	$userid = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) :  "";	
	
	if(!empty($userid)){
		$qurr = mysql_query("SELECT userid,aid FROM orders_master JOIN app_master ON app_master.ref=orders_master.aid WHERE orders_master.userid='$userid'");
		
		
		while($rr = mysql_fetch_array($qurr)){
			
			extract($rr);		
			$result2[] = array($aid);  
			}
		$qur = mysql_query("SELECT userid,wid,fname,ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app FROM app_master JOIN favapp_master ON favapp_master.wid=app_master.ref WHERE favapp_master.userid='$userid'");
		if(mysql_num_rows($qur)>0){
		$result =array();
		while($r = mysql_fetch_array($qur)){
			
			extract($r);			
				 if(in_array(array($ref), $result2)){      
		
	$a='1';	
	}
    
    else {
		$a='0';     
    }
			 $screen = explode(",",$screenshot);
			 $a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
			$result[] = array("IS Installed" => $a,"id" => $ref,"cat_id" => $appid,"cat_name" => $fname,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app);  
	
		
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