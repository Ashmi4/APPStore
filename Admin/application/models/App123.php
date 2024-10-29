<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Model {

	function record_count() {
    $this->db->from('apps');
    return $this->db->count_all_results();
		
	}
	
	function fetch_news($limit, $start) {
        $this->db->limit($limit, $start);      
       
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
	function UpdateApp()
			{
				$f1 = $_FILES['app_image']['name'];
				$f2 = explode(".", $f1);
				$image = round(rand(1111111111,9999999999)) . '.' . end($f2);
				$id = $_REQUEST['img_id'];
				$name = $_REQUEST['appname'];				
				$description = $_REQUEST['app_description'];
				$price = $_REQUEST['price'];
				move_uploaded_file ($_FILES["app_image"]["tmp_name"], "image/App/".$image);
				
				$this->db->where('ref', $id);
				$this->db->set('appname', $name);				
				$this->db->set('app_description', $description);
				$this->db->set('app_image', $image);
				$this->db->set('price', $price);
				$query = $this->db->update('app_master');
				return $query; 
			}
   function Addapp($f0,$f1,$f2,$f3,$f4,$f5,$f6,$f7,$f8)
   
	{	

	//mkdir("image/App");
	move_uploaded_file ($_FILES["app_image"]["tmp_name"], "image/App/".$_FILES["app_image"]["name"]);
	move_uploaded_file ($_FILES["app_image1"]["tmp_name"], "image/App/".$_FILES["app_image1"]["name"]);
	move_uploaded_file ($_FILES["app_image2"]["tmp_name"], "image/App/".$_FILES["app_image2"]["name"]);
	move_uploaded_file ($_FILES["app_image3"]["tmp_name"], "image/App/".$_FILES["app_image3"]["name"]);
	move_uploaded_file ($_FILES["app_video"]["tmp_name"], "image/App/".$_FILES["app_video"]["name"]);
//move_uploaded_file ($_FILES["app_thumb"]["tmp_name"], "image/App/".$_FILES["app_thumb"]["name"]);

		//move_uploaded_file ($_FILES["app_thumb"]["tmp_name"][$i], "image/App/".$_FILES["app_thumb"]["name"]);
		
		$query = $this->db->query("INSERT INTO `app_master` (`appid`,`appname`,`app_image3`,`app_image1`,`app_image2`,`app_image`,`app_video`,`app_description`,`price`) values ('$f0','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8');");
		if($query) { 
		redirect('/StarAdmin/Addapp', 'location');
		} 
		else  {
			redirect('/StarAdmin/Addapp', 'location');
			}
	}
	

	function DeleteApp($id)
	{		
		$query = $this->db->query("DELETE FROM `app_master` WHERE `ref` = '$id';");
		if($query) { redirect('/StarAdmin/App', 'location'); } else  {
		echo "abc";
			}
	}
		
	}
   
		

  

