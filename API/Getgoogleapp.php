<?php	
include 'Config.php';
		
		$qur = mysql_query("Select id,title,description,rating,category,price,downloads,version,icon,screenshots,icon_72,image,image_small,number_ratings from `apps`");
		if(mysql_num_rows($qur)>0) 
			{
				$result =array();
				while($r = mysql_fetch_array($qur)) 
			{	
			extract($r);			
			//$target = str_replace("’", "", $description);
                   
                       
		$result[] = array("id" => $id,"title" => $title ,"description" => $description,"rating" => $rating, "category" => $category, "price" => $price, "downloads" => $downloads, "version" => $version, "icon" => $icon, "screenshots" => $screenshots, "icon_72" => $icon_72, "image" => $image, "image_small" => $image_small,"number_ratings" => $number_ratings); 		
		
				
			}
					$json['App'] = $result;
		}
	 	
	@mysql_close($conn);

	/* Output header */
	header('Content-type: application/json');
	echo json_encode($json);