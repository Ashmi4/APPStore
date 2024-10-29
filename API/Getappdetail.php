<?php	
	
include 'Config.php';

	$appid = isset($_POST['appid']) ? mysql_real_escape_string($_POST['appid']) :  "";	
	$userid = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) :  "";
	if(!empty($appid) AND !empty($userid)){
		$qur = mysql_query("SELECT ref FROM app_master  WHERE ref='$appid'");
		
		while($r = mysql_fetch_array($qur)){
			
			extract($r);		
			$result11[] = array($ref);  
		
		}
		
		$qurr = mysql_query("SELECT userid,wid FROM app_master JOIN favapp_master ON favapp_master.wid=app_master.ref WHERE favapp_master.userid='$userid'");
		
		
		while($rr = mysql_fetch_array($qurr)){
			
			extract($rr);		
			$result21[] = array($wid);  
			}
		$quru = mysql_query("SELECT userid,username,userimage,rid,review,rating FROM app_master JOIN review_master ON review_master.rid=app_master.ref WHERE review_master.rid='$appid' AND review_master.userid='$userid'");
		
		$result =array();
	
		while($ru = mysql_fetch_array($quru)){
			
			extract($ru);
		
			
		  $resultu[] = array($userid); 
		  $resultuu[] = array("reviewid" => $rid,"userid" => $userid ,"username" => $username,"userimage" => $userimage,"review" => $review,"rating" => $rating);
				//array_unique($resultuu);
		}
			
		$qur = mysql_query("SELECT userid,username,userimage,rid,review,rating FROM app_master JOIN review_master ON review_master.rid=app_master.ref WHERE app_master.ref='$appid' AND review_master.userid!='$userid'");
		
		$result =array();
	
		while($r = mysql_fetch_array($qur)){
			
			extract($r);
		if(in_array(array($userid), $resultu)){      
		
				$aa='1';	
				}
				
				else {
					$aa='0';     
				}

		  $result1[] = array("reviewid" => $rid,"userid" => $userid ,"username" => $username,"userimage" => $userimage,"review" => $review,"rating" => $rating); 
					
					
						//$result = insert(array(1,2,3,4,5),2, "a");
						//array_unique($ra);
		}
		
		if($result1 == '')
		{
			$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,apk_link,version,price,rank,count,download,created_app,apk_server,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE app_master.ref='$appid'");
		
		$result =array();
		while($r = mysql_fetch_array($qur)){
			if(in_array(array($ref), $result21)){      
		
				$a='1';	
				}
				
				else {
					$a='0';     
				}
			
			extract($r);
			
			$result2 = array(); 
		$screen = explode(",",$screenshot);
		$title = mb_convert_encoding($app_description, "UTF-8", "HTML-ENTITIES");
		$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
				if($apk_server=="0"){
					
					$result[] = array("apk_server" => '0',"IS Fav" => $a,"id" => $ref,"cat_id" => $appid,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"app_video" => $app_video,"screenshot" => $screen, "app_description" => $title, "apk_link" => $apk_link, "version" => $version,"price" => $price, "rank" => $rank, "count" => $count, "download" => $download, "created_app" => $created_app,"review" =>$result2);					
					
				}
				else{
					$result[] = array("apk_server" => '1',"IS Fav" => $a,"id" => $ref,"cat_id" => $appid,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"app_video" => $app_video,"screenshot" => $screen, "app_description" => $title, "apk_link" => $apk_link, "version" => $version,"price" => $price, "rank" => $rank, "count" => $count, "download" => $download, "created_app" => $created_app,"review" =>$result2);					
				}
				  
				
		
		$json["result"] = $result;
		}
		}
		else{
			$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,apk_link,version,price,rank,count,download,created_app,apk_server,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE app_master.ref='$appid'");
		
		$result =array();
		while($r = mysql_fetch_array($qur)){
			if(in_array(array($ref), $result21)){      
		
				$a='1';	
				}
				
				else {
					$a='0';     
				}
			
			extract($r);
			
			$result2 = array(); 
		$screen = explode(",",$screenshot);
		$title = mb_convert_encoding($app_description, "UTF-8", "HTML-ENTITIES");
		$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
		array_splice($result1, 0,0,$resultuu);
		if($apk_server=="0"){
				$result[] = array("apk_server" => '0',"IS Fav" => $a,"id" => $ref,"cat_id" => $appid,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"app_video" => $app_video,"screenshot" => $screen, "app_description" => $title,"apk_link" => $apk_link,"version" => $version,"price" => $price, "rank" => $rank, "count" => $count, "download" => $download, "created_app" => $created_app,"review" =>$result1);  
		}
		else{
			$result[] = array("apk_server" => '1',"IS Fav" => $a,"id" => $ref,"cat_id" => $appid,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"app_video" => $app_video,"screenshot" => $screen, "app_description" => $title,"apk_link" => $apk_link,"version" => $version,"price" => $price, "rank" => $rank, "count" => $count, "download" => $download, "created_app" => $created_app,"review" =>$result1);  
		}
		
		$json["result"] = $result;
		}
		}}else{
		
		if(!empty($appid)){
		$qur = mysql_query("SELECT userid,username,userimage,rid,review,rating FROM review_master WHERE rid='$appid'");
		
		$result =array();
	
		while($r = mysql_fetch_array($qur)){
			
			extract($r);
			
			$result1[] = array("userid" => $userid ,"username" => $username,"userimage" => $userimage,"reviewid" => $rid, "review" => $review,"rating" => $rating); 
			
									
		}
		if($result1 == '')
		{
			$qurr = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,apk_link,version,price,rank,count,download,created_app,apk_server,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE app_master.ref='$appid'");
		
		$result =array();
		while($rr = mysql_fetch_array($qurr)){
			
			extract($rr);
			$qur1 = mysql_query("SELECT AVG(rating) FROM review_master where rid = $appid");
			$row = mysql_fetch_array($qur1);
			$result2 = array(); 
				
		$screen = explode(",",$screenshot);
		$title = mb_convert_encoding($app_description, "UTF-8", "HTML-ENTITIES");
		$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
		if($apk_server=="0"){
				$result[] = array("apk_server" => '0',"IS Fav" => '0',"id" => $ref,"cat_id" => $appid,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"app_video" => $app_video,"screenshot" => $screen, "app_description" => $title,"apk_link" => $apk_link, "version" => $version,"price" => $price, "rank" => $rank, "count" => $count, "download" => $download, "created_app" => $created_app,"review" =>$result2);  
		}
		else{
				$result[] = array("apk_server" => '1',"IS Fav" => '0',"id" => $ref,"cat_id" => $appid,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"app_video" => $app_video,"screenshot" => $screen, "app_description" => $title,"apk_link" => $apk_link, "version" => $version,"price" => $price, "rank" => $rank, "count" => $count, "download" => $download, "created_app" => $created_app,"review" =>$result2);  
		}
			$json["result"] = $result;
		}
		}
		else{
			$qurr = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,apk_link,version,price,rank,count,download,created_app,apk_server,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE app_master.ref='$appid'");
		while($rr = mysql_fetch_array($qurr)){
			extract($rr);
			$qur1 = mysql_query("SELECT AVG(rating) FROM review_master where rid = $appid");
			$row = mysql_fetch_array($qur1);
			
		$screen = explode(",",$screenshot);
				$title = mb_convert_encoding($app_description, "UTF-8", "HTML-ENTITIES");
				$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
					if($apk_server=="0"){
				$result[] = array("apk_server" => '0',"IS Fav" => '0',"id" => $ref,"cat_id" => $appid,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"app_video" => $app_video,"screenshot" => $screen, "app_description" => $title,"apk_link" => $apk_link, "version" => $version,"price" => $price, "rank" => $rank, "count" => $count, "download" => $download, "created_app" => $created_app,"review" =>$result1);  
		
					}
					else{
									$result[] = array("apk_server" => '1',"IS Fav" => '0',"id" => $ref,"cat_id" => $appid,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"app_video" => $app_video,"screenshot" => $screen, "app_description" => $title,"apk_link" => $apk_link, "version" => $version,"price" => $price, "rank" => $rank, "count" => $count, "download" => $download, "created_app" => $created_app,"review" =>$result1);  
			
					}
			$json["result"] = $result;
		}
		}
		
	}
		else{
		$json = array("status" => 0, "msg" => "id not define");
		}
	}
	
	@mysql_close($conn);

	/* Output header */
	header('Content-type: application/json; Charset="UTF-8"');
	echo json_encode($json);
	//SELECT AVG(rating) FROM review_master