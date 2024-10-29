<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Model {

	function record_count() {
    $this->db->from('category_master');
    return $this->db->count_all_results();
		
	}
	
	function fetch_news($limit, $start) {
        $this->db->limit($limit, $start);      
       
        $this->db->from('category_master');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
	
       redirect('/StarAdmin/AddCategory/1', 'location');
		
   }
   function AddCategories($f0,$f1,$f2)
   
	{	

//mkdir("image/Categories");
//move_uploaded_file ($_FILES["image"]["tmp_name"], "image/Categories/".$_FILES["image"]["name"]);
//move_uploaded_file($_FILES['image']['tmp_name'],"image".$_FILES['image']['name']);
$tar = str_replace(" ", "_", $f0);
		$query = $this->db->query("INSERT INTO `category_master` (`name`,`description`) values ('$tar','$f2');");
		if($query) { 
		redirect('/StarAdmin/AddCategories', 'location');
		} 
		else  {
			redirect('/StarAdmin/AddCategories', 'location');
			}
	}
	function FetchCategories($id)
	{		
		$query = $this->db->query("SELECT * FROM `category_master` WHERE  `id` = $id");
		return $query;
		
	}
	function UpdateCat()
			{
				//$f1 = $_FILES['image']['name'];
				//$f2 = explode(".", $f1);
				//$image = round(rand(1111111111,9999999999)) . '.' . end($f2);
				$id = $_REQUEST['img_id'];
				$name = $_REQUEST['name'];
				$description = $_REQUEST['description'];
				//move_uploaded_file ($_FILES["image"]["tmp_name"], "image/Categories/".$image);
				
				$this->db->where('id', $id);
				$this->db->set('name', $name);
				$this->db->set('description', $description);
				//$this->db->set('image', $image);
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
		

  

