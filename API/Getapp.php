<?php	
include 'Config.php';
		
		$qur = mysql_query("Select ref,appname,app_image,app_video,app_description,price,rank,count,download,created_app from `app_master`");
		if(mysql_num_rows($qur)>0) 
			{
				$result =array();
				while($r = mysql_fetch_array($qur)) 
			{	
			extract($r);			
			$target = str_replace("’", "", $app_description);
                   
                       
		$result[] = array("id" => $ref,"appname" => $appname ,"image" => 'http://superhtv.com/IT_APPP/image/App/'. $app_image .'',"app_video" => 'http://superhtv.com/IT_APPP/image/App/'.$app_video.'', "app_description" => $target, "price" => $price, "rank" => $rank, "count" => $count, "download" => $download, "created_app" => $created_app); 		
		
				
			}
					$json['App'] = $result;
		}
	 	
	@mysql_close($conn);

	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);