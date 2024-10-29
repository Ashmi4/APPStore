<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

	function record_count() {
    $this->db->from('users_master');
    return $this->db->count_all_results();
		
	}
	
	function fetch_news($limit, $start) {
        $this->db->limit($limit, $start);      
       
        $this->db->from('users_master');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
	
       redirect('/StarAdmin/Home/1', 'location');
		
   }
   function DownloadApp($id)
	{		
		$query = $this->db->query("SELECT aid,wappname,wapp_image,wname FROM orders_master WHERE orders_master.userid='$id'");
		return $query;
		
	}
   
   function Recent()
	{	
		//Get recent user on home page
		$query = $this->db->query("SELECT * FROM `users_master` WHERE create_user > DATE_SUB(NOW(), INTERVAL 1 WEEK) order by create_user  desc limit 6");
		return $query;
	}
	function Users()
	{	
		//Get recent user on home page
		$query = $this->db->query("SELECT * FROM `users_master`");
		return $query;
	}
	
	function Rank()
	{	
	$rank = 0;
	$rank = $rank == 'lowHigh' ? 'ASC' : 'DESC';
		//Get recent user on home page
		$query = $this->db->query("SELECT * FROM `app_master` ORDER BY rank $rank limit 7");
		return $query;
	}
function Rankk()
	{	
	$rank = 0;
	$rank = $rank == 'lowHigh' ? 'ASC' : 'DESC';
		//Get recent user on home page
		$query = $this->db->query("SELECT * FROM `app_master` where download = 500");
		return $query;
	}
function pop()
	{	
	
		$query = $this->db->query("SELECT * FROM `app_master` where rank = 5");
		return $query;
	}
	
   function AddCategories($f0,$f1,$f2)
   
	{	

	mkdir("image/Categories");
	move_uploaded_file ($_FILES["image"]["tmp_name"], "image/Categories/".$_FILES["image"]["name"]);
//move_uploaded_file($_FILES['image']['tmp_name'],"image".$_FILES['image']['name']);
		$query = $this->db->query("INSERT INTO `category_master` (`name`,`image`,`description`) values ('$f0','$f1','$f2');");
		if($query) { 
		redirect('/StarAdmin/AddCategories/1', 'location');
		} 
		else  {
			redirect('/StarAdmin/AddCategories/1', 'location');
			}
	}
	function FetchCategories($id)
	{		
		$query = $this->db->query("SELECT * FROM `category_master` WHERE  `id` = $id");
		return $query;
		
	}
	function UpdateCat()
			{
				$f1 = $_FILES['image']['name'];
				$f2 = explode(".", $f1);
				$image = round(rand(1111111111,9999999999)) . '.' . end($f2);
				$id = $_REQUEST['img_id'];
				$name = $_REQUEST['name'];
				$description = $_REQUEST['description'];
				move_uploaded_file ($_FILES["image"]["tmp_name"], "image/Categories/".$image);
				
				$this->db->where('id', $id);
				$this->db->set('name', $name);
				$this->db->set('description', $description);
				$this->db->set('image', $image);
				$query = $this->db->update('category_master');
				return $query; 
			}
	function DeleteCat($id)
	{		
		$query = $this->db->query("DELETE FROM `category_master` WHERE `id` = '$id';");
		if($query) { redirect('/StarAdmin/Categories', 'location'); } else  {
		redirect('/StarAdmin/Categories', 'location');
			}
	
		
	}
}
		

  

