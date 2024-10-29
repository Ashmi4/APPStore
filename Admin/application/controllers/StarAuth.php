<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StarAuth extends CI_Controller {

	public function LoginCheck()
	{
		$f1 = $_REQUEST['uEmail'];
		$f2 = $_REQUEST['uPassword'];
		
		$this->load->model('Auth');
		$this->Auth->Check($f1,$f2);
	}
	public function Logout()
	{
		// remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy(); 
		redirect('StarDB/Login/3','location');
	}
}
