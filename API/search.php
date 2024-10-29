<?php
	
include 'Config.php';
		$search = isset($_POST['search']) ? mysql_real_escape_string($_POST['search']) : "";
		$userid = isset($_POST['userid']) ? mysql_real_escape_string($_POST['userid']) :  "";		
$limit = isset($_POST['limit']) ? mysql_real_escape_string($_POST['limit']) : "";
	$start=100;
		$qurr = mysql_query("SELECT userid,wid,ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app FROM app_master JOIN favapp_master ON favapp_master.wid=app_master.ref WHERE favapp_master.userid='$userid'");
		
		
		while($rr = mysql_fetch_array($qurr)){
			
			extract($rr);		
			$result2[] = array($wid);  
			}
			$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE app_master.appname like '%{$search}%'");
		if(mysql_num_rows($qur)>0) 
			{
				
		$result =array();
		while($r = mysql_fetch_array($qur)){			
			extract($r);
			 
    $screen = explode(",",$screenshot);
	$a_name= mb_convert_encoding($appname, "UTF-8", "HTML-ENTITIES");
	$result45[] = array("id" => $ref,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app); 		
			$c3 =count($result45);		

				
		}
	
		$qur = mysql_query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,version,price,rank,count,download,created_app,id,name,description FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE app_master.appname like '%{$search}%' LIMIT $limit,$start");
		if(mysql_num_rows($qur)>0) 
			{
				
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
	$result[] = array("IS Fav" => $a,"id" => $ref,"cat_name" => $name,"appname" => $a_name ,"image" => $app_image,"version" => $version,"rank" => $rank,"download" => $download, "created_app" => $created_app); 		
				

				
		}
	
			}
			else{
				
					$remain=$c3-$limit-$start;
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
	
	
	@mysql_close($conn);

	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);