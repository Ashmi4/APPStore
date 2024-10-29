<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StarDB extends CI_Controller {

	public function index()
	{
		redirect('/StarDB/Log', 'location');
	}
	public function Log()
	{
		$id = 1;
		$data['file'] = 'Login';
			if($id == 1) {
			$data['msg'] = "";
			}
		$this->load->view('Login',$data);
	}
	public function Login($id)
	{
		$data['file'] = 'Login';
		if($id == 1) {
			$data['msg'] = "";
		}
		elseif($id == 2) {
			$data['msg'] = "Invalid Username and Password..!";
			$data['type'] = "danger";
		}
		elseif($id == 3) {
			$data['msg'] = "Logout Success..!";
			$data['type'] = "success";
		}
		elseif($id == 4) {
			$data['msg'] = "Plz Login First!";
			$data['type'] = "info";
		}
		$this->load->view('Login',$data);
	}
}
