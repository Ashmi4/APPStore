<?php	
	
include 'Config.php';
	$id = isset($_POST['id']) ? mysql_real_escape_string($_POST['id']) :  "";
	$userid = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) :  "";
$limit = isset($_POST['limit']) ? mysql_real_escape_string($_POST['limit']) : "";
	$start=100;
	

		if(!empty($id) AND !empty($userid))
	{
		
	$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE category_master.id='$id' order by app_master.download desc");
		
		while($r = mysql_fetch_array($qur)){
			
			extract($r);		
			$result1[] = array($ref);  
		
		}
		
		$qurr = mysql_query("SELECT userid,wid,ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app FROM app_master JOIN favapp_master ON favapp_master.wid=app_master.ref WHERE favapp_master.userid='$userid'");
		
		
		while($rr = mysql_fetch_array($qurr)){
			
			extract($rr);		
			$result2[] = array($wid);  
			}
			$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE category_master.id='$id' order by app_master.download desc");
		
		while($r = mysql_fetch_array($qur)){
			
			extract($r);		
			
    
		$screen = explode(",",$screenshot);
		$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
		$result45[] = array("id" => $ref,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app);  
	$c3 =count($result45);
	
				
		}
			$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE category_master.id='$id' order by app_master.download desc LIMIT $limit,$start");
		
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
		$result4[] = array("IS Fav" => $a,"id" => $ref,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app);  
	
	
				
		}
		if($limit==0)
			{
				//$echo $c;
				$remain= $c3-$start;
				$next=101;
				
			}
			else{
				
					$remain=$c3-$limit-$start;
					$next=$limit+$start;
				
			}
		if($remain <= 0)
					{
					$json= array("result"=>$result4,"remain_status"=>0);	
					}
					else{
						$json= array("result"=>$result4,"remain_status"=>1);
					}
		
		
				//$json['result'] = $result4;
	}
	else{
		if(!empty($id))
		{
			$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE category_master.id='$id' order by app_master.download desc");
		$result =array();
		while($r = mysql_fetch_array($qur)){
			
			extract($r);		
				
				
			$screen = explode(",",$screenshot);
			$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
		$result[] = array("IS Fav" => '0',"id" => $ref,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app);  
	$c2 =count($result);

	
			
		}
			$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE category_master.id='$id' order by app_master.download desc LIMIT $limit,$start");
		$result =array();
		while($r = mysql_fetch_array($qur)){
			
			extract($r);		
				
				
			$screen = explode(",",$screenshot);
			$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
		$result[] = array("IS Fav" => '0',"id" => $ref,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app);  
	if($limit==0)
			{
				//$echo $c;
				$remain= $c2-$start;
				$next=101;
				
			}
			else{
				
					$remain=$c2-$limit-$start;
					$next=$limit+$start;
				
			}
		if($remain <= 0)
					{
					$json= array("result"=>$result,"remain_status"=>0);	
					}
					else{
						$json= array("result"=>$result,"remain_status"=>1);
					}

	//$json['result'] = $result;
			
		}
			
		}
		else{
			if(!empty($userid) AND $id =='')
			{
					
	$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid order by app_master.download desc");
		
		while($r = mysql_fetch_array($qur)){
			
			extract($r);		
			$result1[] = array($ref);  
		
		}
		
		$qurr = mysql_query("SELECT userid,wid,ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app FROM app_master JOIN favapp_master ON favapp_master.wid=app_master.ref WHERE favapp_master.userid='$userid'");
		
		
		while($rr = mysql_fetch_array($qurr)){
			
			extract($rr);		
			$result2[] = array($wid);  
			}
			$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid order by app_master.download desc");
		
		while($r = mysql_fetch_array($qur)){
			
			extract($r);		
		
			
   
		$screen = explode(",",$screenshot);
		$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
		$result44[] = array("id" => $ref,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app);  
		$c1 =count($result44);
	
				
		}
		
			$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid order by app_master.download desc LIMIT $limit,$start");
		
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
		$result4[] = array("IS Fav" => $a,"id" => $ref,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app);  
	
	
				
		}
		if($limit==0)
			{
				//$echo $c;
				$remain= $c1-$start;
				$next=101;
				
			}
			else{
				
					$remain=$c1-$limit-$start;
					$next=$limit+$start;
				
			}
		if($remain <= 0)
					{
					$json= array("result"=>$result4,"remain_status"=>0);	
					}
					else{
						$json= array("result"=>$result4,"remain_status"=>1);
					}
		
		
				//$json['result'] = $result4;
				
			}
			else{
				$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid order by app_master.download desc;");
		$result =array();
		while($r = mysql_fetch_array($qur)){
			
			extract($r);		
				
				
		$screen = explode(",",$screenshot);
		$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
		$result[] = array("IS Fav" => '0',"id" => $ref,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app);  
	
	$c =count($result);
	
	
	
			
		}
				$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid order by app_master.download desc LIMIT $limit,$start;");
		$result =array();
		while($r = mysql_fetch_array($qur)){
			
			extract($r);		
				
				
		$screen = explode(",",$screenshot);
		$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
		$result[] = array("IS Fav" => '0',"id" => $ref,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app);  
	
	if($limit==0)
			{
				//$echo $c;
				$remain= $c-$start;
				$next=101;
				
			}
			else{
				
					$remain=$c-$limit-$start;
					$next=$limit+$start;
				
			}
		if($remain <= 0)
					{
					$json= array("result"=>$result,"remain_status"=>0);	
					}
					else{
						$json= array("result"=>$result,"remain_status"=>1);
					}
	//$json['result'] = $result;
			
		}
			}
		
		}
	}
	

	@mysql_close($conn);

	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);