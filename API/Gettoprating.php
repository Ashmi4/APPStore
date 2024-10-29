<?php	
	
include 'Config.php';
	$id = isset($_POST['id']) ? mysql_real_escape_string($_POST['id']) :  "";

	
	if(!empty($id)){
	
		
		$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE category_master.id='$id' order by rank desc");
		
		while($r = mysql_fetch_array($qur)){
			
			extract($r);		
    
		     $screen = explode(",",$screenshot);
			 $a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
			$result4[] = array("id" => $ref,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app);  
					
		}		
		
				$json['result'] = $result4;
		}		
	else{
			$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid order by rank desc");
		
		$result =array();
		while($r = mysql_fetch_array($qur)){
			
			extract($r);		
				
				
			 $screen = explode(",",$screenshot);
			 $a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
				$result[] = array("id" => $ref,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app);  
					
		}
		$json['result'] = $result;
		}

	
	@mysql_close($conn);

	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);