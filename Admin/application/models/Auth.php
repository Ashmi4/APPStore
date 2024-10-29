<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

	function Check($f1,$f2)
	{	
		//login check
		$query = $this->db->query("SELECT * FROM `user_admin` 
								   where `admin_email` = '$f1' AND `admin_password` = '$f2' AND `status` = '1';");
		if($query) { 
			if($query->num_rows() === 1) {
				foreach($query->Result() as $row) {
					$data = array('id' => $row->admin_id , 'uName' => $row->admin_name );
					$this->session->set_userdata($data);
				}
				redirect('StarAdmin/Home','location');
			} 
			else {
				 redirect('StarDB/Login/2','location');
			}
		}
	}

}

