<?php

include 'Config.php';

		$qur = mysql_query("Select id,name,description from `category_master`");
		if(mysql_num_rows($qur)>0) 
			{
				$result =array();
				while($r = mysql_fetch_array($qur)) 
			{	
			extract($r);			
			
		$result[] = array("id" => $id ,"name" => $name ,"description" => $description); 		
		
				
			}
						$json['Category'] = $result;
		}
	

	header('Content-type: application/json');
	echo json_encode($json); 
	