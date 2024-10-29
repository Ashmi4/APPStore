<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Model {

	function record_count() {
    $this->db->from('banner_master');
    return $this->db->count_all_results();
		
	}
	
	function fetch_news($limit, $start) {
        $this->db->limit($limit, $start);      
       
        $this->db->from('banner_master');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
	
        redirect('/StarAdmin/AddBanner/1', 'location');
		
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
	function FetchBanner($id)
	{		
		$query = $this->db->query("SELECT * FROM `banner_master` WHERE  `id` = $id");
		return $query;
		
	}
	function UpdateBanner()
			{
				$f1 = $_FILES['image']['name'];
				$f2 = explode(".", $f1);
				$image = round(rand(1111111111,9999999999)) . '.' . end($f2);
				$id = $_REQUEST['img_id'];
				$name = $_REQUEST['name'];				
				//$description = $_REQUEST['app_description'];
				//$price = $_REQUEST['price'];
				move_uploaded_file ($_FILES["image"]["tmp_name"], "image/Banner/".$image);
				
				$this->db->where('id', $id);
				$this->db->set('name', $name);				
				//$this->db->set('app_description', $description);
				$this->db->set('image', $image);
				//$this->db->set('price', $price);
				$query = $this->db->update('banner_master');
				return $query; 
			}
	function AddBanner($f0,$f1)   	{
		move_uploaded_file ($_FILES["image"]["tmp_name"], "image/Banner/".$_FILES["image"]["name"]);
		$query = $this->db->query("INSERT INTO `banner_master` (`image`,`name`) values ('$f1','$f0');");
		if($query) { 		redirect('/StarAdmin/AddBanner/1', 'location');	
		} 	
		else  {			redirect('/StarAdmin/AddBanner/2', 'location');		
		}	
		}	

	function DeleteBanner($id)
	{		
		$query = $this->db->query("DELETE FROM `banner_master` WHERE `id` = '$id';");
		if($query) { redirect('/StarAdmin/Banner', 'location'); } else  {
		echo "abc";
			}
	}
		
	}