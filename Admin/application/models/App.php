<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Model {

	function record_count() {
    $this->db->from('app_master');
    return $this->db->count_all_results();
		
	}
	
	function fetch_news($limit, $start) {
        $this->db->limit($limit, $start);      
        $this->db->order_by("created_app", "desc");
        $this->db->from('app_master');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
	
        redirect('/StarAdmin/Addapp/1', 'location');
		
   }
   
   
   function record_countt() {
    $this->db->from('apps');
    return $this->db->count_all_results();
		
	}
	
	function fetch_newss($limit, $start) {
        $this->db->limit($limit, $start);      
		$this->db->order_by("id", "desc");
        $this->db->from('apps');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
	
        redirect('/StarAdmin/Addapp/1', 'location');
		
   }
   
   function Getapp()
	{	
		$query = $this->db->query("SELECT * FROM `apps`");
		return $query;
	}
   function Getid()
	{	
		$query = $this->db->query("SELECT name,id FROM `category_master`");
		return $query;
	}
	
	 function Getveg($name)
	{	
		//Get recent user on home page
		$query = $this->db->query("SELECT appid,appname,app_image,app_description,price FROM app_master JOIN category_master ON category_master.id=app_master.menuid WHERE category_master.id='$name' ");
		return $query;
	}
	function FetchApp($id)
	{		
		$query = $this->db->query("SELECT * FROM `app_master` WHERE  `ref` = $id");
		return $query;
		
	}
	function FetchgApp($id)
	{		
		$query = $this->db->query("SELECT * FROM `apps` WHERE  `id` = $id");
		return $query;
		
	}
	function UpdateApp()
			{ 

		               $s= $_FILES['screenshot']['name'];
				if(!empty($s)){
				$final = 'http://touchitappstore.com/IT_ADMIN/image/App/';
				$screenshot = $final . $s;	
				}
				
				
				
				$i= $_FILES['app_image']['name'];
				if(!empty($i)){
				$final = 'http://touchitappstore.com/IT_ADMIN/image/App/';
				$f1 = $final . $i;		
				}
				
				$v= $_FILES['app_video']['name'];
				if(!empty($v)){
				$final = 'http://touchitappstore.com/IT_ADMIN/image/App/';
			         $video = $final . $v;		
				}
				
		        
				$id = $_REQUEST['img_id'];
				$name = $_REQUEST['appname'];	
               			
				$description = $_REQUEST['app_description'];
				$price = $_REQUEST['price'];
				if($i == '' AND $v == '' AND $s == ''){
				
                                $this->db->where('ref', $id);
				$this->db->set('appname', $name);				
				$this->db->set('app_description', $description);
				
				$this->db->set('price', $price);
				$query = $this->db->update('app_master');
				return $query;
				}
				else{
					if($v == '' AND $s == ''){
						
					
                move_uploaded_file ($_FILES["app_image"]["tmp_name"], "image/App/".$_FILES["app_image"]["name"]);
                 $this->db->where('ref', $id);
				$this->db->set('appname', $name);				
				$this->db->set('app_description', $description);
				
                $this->db->set('app_image', $f1);
				$this->db->set('price', $price);
				$query = $this->db->update('app_master');
				return $query;
				}
				else{
					if($v == '' AND $i == ''){
                             $queryy = $this->db->query("SELECT ref,screenshot FROM app_master WHERE ref='$id' ");
						if($queryy->num_rows() === 1) {
								foreach($queryy->Result() as $row) {
						$data[] = array('id' => $row->screenshot);
						$ri = array_column($data,'id');
						$ai= implode(",",$ri);
								}
						}
				
                move_uploaded_file ($_FILES["screenshot"]["tmp_name"], "image/App/".$_FILES["screenshot"]["name"]);

                 $this->db->where('ref', $id);
				$this->db->set('appname', $name);				
				$this->db->set('app_description', $description);
				

                
                 $this->db->set('screenshot ', $screenshot.",".$ai);
				$this->db->set('price', $price);
				$query = $this->db->update('app_master');
				return $query;
						
					
				}
				else{
					if($s == '' AND $i == ''){
				
				move_uploaded_file ($_FILES["app_video"]["tmp_name"], "image/App/".$_FILES["app_video"]["name"]);
               

                 $this->db->where('ref', $id);
				$this->db->set('appname', $name);				
				$this->db->set('app_description', $description);
				
                 $this->db->set('app_video', $video );
             
				$this->db->set('price', $price);
				$query = $this->db->update('app_master');
				return $query;
						
					
				}
				else{
					if($v == ''){
				
				 move_uploaded_file ($_FILES["screenshot"]["tmp_name"], "image/App/".$_FILES["screenshot"]["name"]);
				 	move_uploaded_file ($_FILES["app_image"]["tmp_name"], "image/App/".$_FILES["app_image"]["name"]);

               

                 $this->db->where('ref', $id);
				$this->db->set('appname', $name);				
				$this->db->set('app_description', $description);
				$this->db->set('app_image', $f1);
                $this->db->set('screenshot ', $screenshot );
             
				$this->db->set('price', $price);
				$query = $this->db->update('app_master');
				return $query;
						
					
				}
				else{
					if($i == ''){
				
				move_uploaded_file ($_FILES["app_video"]["tmp_name"], "image/App/".$_FILES["app_video"]["name"]);
               move_uploaded_file ($_FILES["screenshot"]["tmp_name"], "image/App/".$_FILES["screenshot"]["name"]);

                 $this->db->where('ref', $id);
				$this->db->set('appname', $name);				
				$this->db->set('app_description', $description);
				$this->db->set('screenshot ', $screenshot );
                 $this->db->set('app_video', $video );
             
				$this->db->set('price', $price);
				$query = $this->db->update('app_master');
				return $query;
						
					
				}
				else{
					if($s == ''){
				
				move_uploaded_file ($_FILES["app_video"]["tmp_name"], "image/App/".$_FILES["app_video"]["name"]);
               	move_uploaded_file ($_FILES["app_image"]["tmp_name"], "image/App/".$_FILES["app_image"]["name"]);

                 $this->db->where('ref', $id);
				$this->db->set('appname', $name);				
				$this->db->set('app_description', $description);
				$this->db->set('app_image', $f1);
                 $this->db->set('app_video', $video );
             
				$this->db->set('price', $price);
				$query = $this->db->update('app_master');
				return $query;
						
					
				}
				else{
					move_uploaded_file ($_FILES["app_image"]["tmp_name"], "image/App/".$_FILES["app_image"]["name"]);
				move_uploaded_file ($_FILES["app_video"]["tmp_name"], "image/App/".$_FILES["app_video"]["name"]);
                move_uploaded_file ($_FILES["screenshot"]["tmp_name"], "image/App/".$_FILES["screenshot"]["name"]);

                 $this->db->where('ref', $id);
				$this->db->set('appname', $name);				
				$this->db->set('app_description', $description);
				$this->db->set('app_image', $f1);
                 $this->db->set('app_video', $video );
                 $this->db->set('screenshot ', $screenshot );
				$this->db->set('price', $price);
				$query = $this->db->update('app_master');
				return $query;
					
					
				}
				}
					
				}
					
					
				}
					
				}
					
				}
					
				}
				

			}
   function Addapp($f0,$f1,$f2,$f5,$f6,$tar,$apk,$f8,$p)
   
	{	

	mkdir("image/App");
	move_uploaded_file ($_FILES["app_image"]["tmp_name"], "image/App/".$_FILES["app_image"]["name"]);
	move_uploaded_file ($_FILES["apk_link"]["tmp_name"], "image/Apk/".$_FILES["apk_link"]["name"]);
	
	move_uploaded_file ($_FILES["screenshot"]["tmp_name"], "image/App/".$_FILES["screenshot"]["name"]);
	move_uploaded_file ($_FILES["app_video"]["tmp_name"], "image/App/".$_FILES["app_video"]["name"]);
//move_uploaded_file ($_FILES["app_thumb"]["tmp_name"], "image/App/".$_FILES["app_thumb"]["name"]);

		//move_uploaded_file ($_FILES["app_thumb"]["tmp_name"][$i], "image/App/".$_FILES["app_thumb"]["name"]);
		
		$query = $this->db->query("INSERT INTO `app_master` (`appid`,`appname`,`screenshot`,`app_image`,`app_video`,`app_description`,`apk_link`,`price`,`pckagename`,`apk_server`) values ('$f0','$f1','$f2','$f5','$f6','$tar','$apk','$f8','$p','1');");
		if($query) { 
		redirect('/StarAdmin/Addapp', 'location');
		} 
		else  {
			redirect('/StarAdmin/Addapp', 'location');
			}
	}

function UpdategApp()
			{
                                $f1 = $_FILES['image']['name'];
				
                                $f11 = $_FILES['image_small']['name'];
				
				$id = $_REQUEST['idd'];
				$title = $_REQUEST['title'];				
				$description = $_REQUEST['description'];
				move_uploaded_file ($_FILES["image"]["tmp_name"], "image/App/".$_FILES["image"]["name"]);
	move_uploaded_file ($_FILES["image_small"]["tmp_name"], "image/App/".$_FILES["image_small"]["name"]);
				if($f1 == '' OR $f11 == '')
				{
				$this->db->where('id', $id);
				$this->db->set('title', $title);				
				$this->db->set('description', $description);
				
				
				$query = $this->db->update('apps');
				return $query; 
				}
				
                              
				//move_uploaded_file ($_FILES["image"]["tmp_name"], "image/App/".$image);
				//move_uploaded_file ($_FILES["image_small"]["tmp_name"], "image/App/".$image1);
				
				$this->db->where('id', $id);
				$this->db->set('title', $title);				
				$this->db->set('description', $description);
				$this->db->set('image', $f1);
				$this->db->set('image_small', $f11);
                                $this->db->set('icon','0');
				$this->db->set('icon_72','0');
				
				$query = $this->db->update('apps');
				return $query; 
				
				
			}


	function Addgoogleapp($f0,$id,$tar,$apk_link,$gender,$department,$downloads,$version,$icon,$ai,$vi,$icon_72,$number_ratings,$filename)
	{

		$query = $this->db->query("INSERT INTO `app_master` (`appid`,`appname`,`app_description`,`apk_link`,`rank`,`price`,`download`,`version`,`app_image`,`app_video`, `screenshot`,`icon`, `count`,`pckagename`) values ('$f0','$id', '$tar', '$apk_link', '$gender','$department', '$downloads', '$version', '$icon', '$vi','$ai', '$icon_72', '$number_ratings','$filename');");
		if($query) { 
		redirect('/StarAdmin/App', 'location');
		} 
		else  {
			redirect('/StarAdmin/App', 'location');
			}
	

}
	function DeleteApp($id)
	{		
		$query = $this->db->query("DELETE FROM `app_master` WHERE `ref` = '$id';");
		if($query) { redirect('/StarAdmin/App', 'location'); } else  {
		echo "abc";
			}
	}
function DeletegApp($id)
	{		
		$query = $this->db->query("DELETE FROM `apps` WHERE `id` = '$id';");
		if($query) { redirect('/StarAdmin/GOOGLEapp', 'location'); } else  {
		echo "abc";
			}
	}
		
	}
   
		

  

