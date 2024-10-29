<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StarAdmin extends CI_Controller {
	
	public function index()
	 {
	  				
		$this->load->model('Home');
		$config = array();
        $config["base_url"] = base_url() . "/StarAdmin/Home";
        $config["total_rows"] = $this->Home->record_count();
        $config["per_page"] = 12;
        $config["uri_segment"] = 3;
		
	    $config['full_tag_open'] = '&nbsp;&nbsp;';
	    $config['full_tag_close'] = '&nbsp;&nbsp;';
		
	    $config['next_link'] = 'Next';
	    $config['next_tag_open'] = '&nbsp;&nbsp;';
	    $config['next_tag_close'] = '&nbsp;&nbsp;';

	    $config['prev_link'] = 'Prev';
	    $config['prev_tag_open'] = '&nbsp;&nbsp;';
	    $config['prev_tag_close'] = '&nbsp;&nbsp;';

	    $config['cur_tag_open'] = '&nbsp;&nbsp;';
	    $config['cur_tag_close'] = '&nbsp;&nbsp;';

	    $config['num_tag_open'] = '&nbsp;&nbsp; ';
	    $config['num_tag_close'] = '&nbsp;&nbsp;';

		$this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->Home->fetch_news($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data["total"] = $config["total_rows"];
		$data['Rank'] = $this->Home->top_rating_home();
		$data['fav'] = $this->Home->top_favourite_home();
		$data['app_h'] = $this->Home->Cat_app_home();
		$data['u_app'] = $this->Home->user_favapp();
$data['banner'] = $this->Home->banner();
		$data['Cat'] = $this->Home->Cat();
		$data['file'] = 'Admin/Home';
		$this->load->view('Templates', $data);
	 }
	 public function Logout()
	{
		// remove all session variables
		session_unset(); 

		// destroy the session 
		session_destroy(); 
		redirect('loginn/3','location');
	}
	public function Logout1()
	{
		// remove all session variables

		session_unset(); 

		// destroy the session 
		session_destroy(); 
		redirect('loginn/4','location');
	}
	 public function myaccount()
	{	
		$this->load->model('Home');	
		$data['Cat'] = $this->Home->Cat();
		$data['u_app'] = $this->Home->user_app();
		$data['file'] = 'Admin/myaccount';
		$this->load->view('Templates', $data);
		
	}
	
	public function Updateaccount()
	{
		$this->load->model('Home');	
		$data['Cat'] = $this->Home->Cat();
		$this->Home->Updateaccount();
		redirect(base_url().'index.php/StarAdmin/Logout','refresh');
	}
	
	public function myaccount_edit_formm($id)
	{
		$this->load->model('Home');
		$data['Cat'] = $this->Home->Cat();
		$data['file'] = 'Admin/myaccount_edit_form';
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
		elseif($id == 5) {
			$data['msg'] = "Plz insert right password";
			$data['type'] = "info";
		}
		$this->load->view('Templates', $data);
	}
	
	public function myaccount_edit_form()
	{	
		$this->load->model('Home');	
		$data['Cat'] = $this->Home->Cat();
		$id = 1;
		$data['file'] = 'Admin/myaccount_edit_form';
			if($id == 1) {
			$data['msg'] = "";
			}
		
		$this->load->view('Templates', $data);
		
		
	}
	public function LoginCheck()
	{
		
		$this->load->model('Home');
		$this->Home->Check();
	}
	
	public function login()
	{
		$this->load->model('Home');
		$data['Cat'] = $this->Home->Cat();
		$id = 1;
		$data['file'] = 'Admin/login';
			if($id == 1) {
			$data['msg'] = "";
			}
		$this->load->view('Templates', $data);
	}
	public function loginn($id)
	{
		$this->load->model('Home');
		$data['Cat'] = $this->Home->Cat();
		$data['file'] = 'Admin/login';
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
		$this->load->view('Templates', $data);
	}
	public function registerr($id)
	{
		$this->load->model('Home');
		$data['Cat'] = $this->Home->Cat();
		$data['file'] = 'Admin/register';
		if($id == 1) {
			$data['msg'] = "";
		}
		elseif($id == 2) {
			$data['msg'] = "Invalid Username and Password..!";
			$data['type'] = "danger";
		}
		elseif($id == 3) {
			$data['msg'] = "Plz insert right password";
			$data['type'] = "success";
		}
		elseif($id == 4) {
			$data['msg'] = "Plz Login First!";
			$data['type'] = "info";
		}
elseif($id == 5) {
			$data['msg'] = "Already Registred this Email ID";
			$data['type'] = "info";
		}
		$this->load->view('Templates', $data);
	}
	
	  public function register()
	{					
				
		$this->load->model('Home');
		$data['Cat'] = $this->Home->Cat();
		$id = 1;
		$data['file'] = 'Admin/register';
			if($id == 1) {
			$data['msg'] = "";
			}
		$this->load->view('Templates', $data);
	}
	public function Saveregister()
	{	
		$this->load->model('Home');		
		$f0 = $_REQUEST['name'];
		$f1 = $_REQUEST['email'];	
		$f2 = $_REQUEST['address'];
		//$image= $_FILES['image']['name'];
		$f3 = $_REQUEST['password'];
		$f4 = $_REQUEST['cpassword'];
		$this->Home->Saveregister($f0,$f1,$f2,$f3,$f4);		
	}
	public function Savenews()
	{	
		$this->load->model('Home');		
		$f1 = $_REQUEST['email'];	
		$this->Home->Savenews($f1);		
	}
	public function search()
	{	
		$this->load->model('Home');		
		$f0 = $_REQUEST['search'];
		$data['search'] =$this->Home->search($f0);
                $data['Rank'] = $this->Home->top_rating_home();
		$data['fav'] = $this->Home->top_favourite_home();
		$data['app_h'] = $this->Home->Cat_app_home();
		$data['u_app'] = $this->Home->user_favapp();
		$data['Cat'] = $this->Home->Cat();
		$data['banner'] = $this->Home->banner();
		$data['file'] = 'Admin/search';
		$this->load->view('Templates', $data);		
	}
	public function Home()
	{					
		$this->load->model('Home');
		$config = array();
        $config["base_url"] = base_url() . "/StarAdmin/Home";
        $config["total_rows"] = $this->Home->record_count();
        $config["per_page"] = 12;
        $config["uri_segment"] = 3;
		
	    $config['full_tag_open'] = '&nbsp;&nbsp;';
	    $config['full_tag_close'] = '&nbsp;&nbsp;';
		
	    $config['next_link'] = 'Next';
	    $config['next_tag_open'] = '&nbsp;&nbsp;';
	    $config['next_tag_close'] = '&nbsp;&nbsp;';

	    $config['prev_link'] = 'Prev';
	    $config['prev_tag_open'] = '&nbsp;&nbsp;';
	    $config['prev_tag_close'] = '&nbsp;&nbsp;';

	    $config['cur_tag_open'] = '&nbsp;&nbsp;';
	    $config['cur_tag_close'] = '&nbsp;&nbsp;';

	    $config['num_tag_open'] = '&nbsp;&nbsp; ';
	    $config['num_tag_close'] = '&nbsp;&nbsp;';

		$this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->Home->fetch_news($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data["total"] = $config["total_rows"];
		$data['Rank'] = $this->Home->top_rating_home();
		$data['fav'] = $this->Home->top_favourite_home();
		$data['app_h'] = $this->Home->Cat_app_home();
		$data['u_app'] = $this->Home->user_favapp();
$data['banner'] = $this->Home->banner();
		$data['Cat'] = $this->Home->Cat();
		$data['file'] = 'Admin/Home';
		$this->load->view('Templates', $data);
		
	}
	public function preview($id)
	{	
		$this->load->model('Home');
                
		$data['Cat'] = $this->Home->Cat();
                $data['u_app'] = $this->Home->user_favapp();
		$data['view'] = $this->Home->preview($id);
		$data['review'] = $this->Home->review($id);
		$data['Similer'] = $this->Home->Similer();
		$data['file'] = 'Admin/preview';
		$this->load->view('Templates', $data);
		
	}
	
         public function addrating()
	{	
		$this->load->model('Home');
		$a = $_SESSION["uName"];
		$b = $_SESSION["userid"];		
		$f0 = $_REQUEST['id'];		
		$f1 = $_REQUEST['subject'];		
		$f2 = $_SESSION['email'];	
		$f3 = $_REQUEST['rating'];
		$f4 = $_SESSION["image"];
		$this->Home->addrating($f0,$b,$f1,$a,$f2,$f3,$f4);		
	}
	
	

	public function preview1()
	{					
		$this->load->model('Home');
		$data['Cat'] = $this->Home->Cat();
		$data['file'] = 'Admin/preview1';
		$this->load->view('Templates', $data);
		
	}
	public function contact()
	{					
		$this->load->model('Home');
		$data['Cat'] = $this->Home->Cat();
		$data['file'] = 'Admin/contact';
		$this->load->view('Templates', $data);
		
	}
	public function Savecontact()
	{	
		$this->load->model('Home');		
		$f0 = $_REQUEST['name'];
		$f1 = $_REQUEST['email'];	
		$f2 = $_REQUEST['address'];
		$f3 = $_REQUEST['subject'];			
		$this->Home->Addcontact($f0,$f1,$f2,$f3);		
	}
	
	public function apps()
	{					
		$this->load->model('Home');
		$config = array();
        $config["base_url"] = base_url() . "/StarAdmin/apps";
        $config["total_rows"] = $this->Home->record_count();
        $config["per_page"] = 24;
        $config["uri_segment"] = 3;
		
	    $config['full_tag_open'] = '&nbsp;&nbsp;';
	    $config['full_tag_close'] = '&nbsp;&nbsp;';
		
	    $config['next_link'] = 'Next';
	    $config['next_tag_open'] = '&nbsp;&nbsp;';
	    $config['next_tag_close'] = '&nbsp;&nbsp;';

	    $config['prev_link'] = 'Prev';
	    $config['prev_tag_open'] = '&nbsp;&nbsp;';
	    $config['prev_tag_close'] = '&nbsp;&nbsp;';

	    $config['cur_tag_open'] = '&nbsp;&nbsp;';
	    $config['cur_tag_close'] = '&nbsp;&nbsp;';

	    $config['num_tag_open'] = '&nbsp;&nbsp; ';
	    $config['num_tag_close'] = '&nbsp;&nbsp;';

		$this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["results"] = $this->Home->fetch_news($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data["total"] = $config["total_rows"];
		$data['Cat'] = $this->Home->Cat();
		$data['u_app'] = $this->Home->user_favapp();
		$data['file'] = 'Admin/apps';
		$this->load->view('Templates', $data);
		
	}
	public function cat_app($id)
	{					
		$this->load->model('Home');
		$data['cat_app'] = $this->Home->Cat_app($id);
		$data['Cat'] = $this->Home->Cat();
		$data['u_app'] = $this->Home->user_favapp();
		$data['file'] = 'Admin/cat_app';
		$this->load->view('Templates', $data);
		
	}
	public function top_app()
	{					
		$this->load->model('Home');
		$data['top_app'] = $this->Home->top_app();
		$data['Cat'] = $this->Home->Cat();
		$data['u_app'] = $this->Home->user_favapp();
		$data['file'] = 'Admin/top_app';
		$this->load->view('Templates', $data);
		
		
	}
	public function top_down()
	{					
		$this->load->model('Home');
		$data['top_down'] = $this->Home->top_down();
		$data['Cat'] = $this->Home->Cat();
		$data['u_app'] = $this->Home->user_favapp();
		$data['file'] = 'Admin/top_down';
		$this->load->view('Templates', $data);
		
		
	}
	public function top_favourite()
	{					
		$this->load->model('Home');
		$data['top_favourite'] = $this->Home->top_favourite();
		$data['Cat'] = $this->Home->Cat();
		$data['u_app'] = $this->Home->user_favapp();
		$data['file'] = 'Admin/top_favourite';
		$this->load->view('Templates', $data);
		
		
	}
	public function top_rating()
	{					
		$this->load->model('Home');
		$data['top_rating'] = $this->Home->top_rating();
		$data['Cat'] = $this->Home->Cat();
		$data['u_app'] = $this->Home->user_favapp();
		$data['file'] = 'Admin/top_rating';
		$this->load->view('Templates', $data);
		
		
	}
	public function forget_pass()
	{

		$this->load->model('Home');	
		$data['Cat'] = $this->Home->Cat();
	$id = 1;
		$data['file'] = 'Admin/forget_pass';
			if($id == 1) {
			$data['msg'] = "";
			}
			$this->load->view('Templates', $data);
	
		
	
		
	}
	public function Saveforget_pass()
	{	
		$this->load->model('Home');		
		$f1 = $_REQUEST['email'];				
		$this->Home->Saveforget_pass($f1);		
	}
	public function Saveforget_pass_a($id)
	{
		$this->load->model('Home');
		$data['Cat'] = $this->Home->Cat();
		$data['file'] = 'Admin/forget_pass';
		if($id == 1) {
			$data['msg'] = "";
		}
		elseif($id == 2) {
			$data['msg'] = "Invalid Username and Password..!";
			$data['type'] = "danger";
		}
		elseif($id == 3) {
			$data['msg'] = "Plz insert right password";
			$data['type'] = "success";
		}
		elseif($id == 4) {
			$data['msg'] = "Plz Login First!";
			$data['type'] = "info";
		}
		$this->load->view('Templates', $data);
	}
	
	
	public function forget_pass1()
	{	
	
		$this->load->model('Home');	
		$data['Cat'] = $this->Home->Cat();
		$id = 1;
	$data['file'] = 'Admin/forget_pass1';
			if($id == 1) {
			$data['msg'] = "";
			}
	$this->load->view('Templates', $data);
		
		
	}
	public function Saveforget_pass1()
	{	
		$this->load->model('Home');		
		$f1 = $_REQUEST['email'];
		$f2 = $_REQUEST['forgotpw_token'];		
		$this->Home->Saveforget_pass1($f1,$f2);		
	}
	public function Saveforget_pass_a1($id)
	{
		$this->load->model('Home');
		$data['Cat'] = $this->Home->Cat();
		$data['file'] = 'Admin/forget_pass1';
		if($id == 1) {
			$data['msg'] = "";
		}
		elseif($id == 2) {
			$data['msg'] = "Invalid Username and Password..!";
			$data['type'] = "danger";
		}
		elseif($id == 3) {
			$data['msg'] = "Plz insert right password";
			$data['type'] = "success";
		}
		elseif($id == 4) {
			$data['msg'] = "Plz Login First!";
			$data['type'] = "info";
		}
		$this->load->view('Templates', $data);
	}
	public function forget_pass2()
	{	
		$this->load->model('Home');	
		$data['Cat'] = $this->Home->Cat();
		
			$id = 1;
	$data['file'] = 'Admin/forget_pass2';
			if($id == 1) {
			$data['msg'] = "";
			}
	$this->load->view('Templates', $data);
		
	}
	public function Saveforget_pass11()
	{	
		$this->load->model('Home');
		$f0 = $_REQUEST['email'];		
		$f1 = $_REQUEST['password'];
		$f2 = $_REQUEST['for_password'];		
		$this->Home->Saveforget_pass11($f0,$f1,$f2);		
	}
	public function Saveforget_pass_a11($id)
	{
		$this->load->model('Home');
		$data['Cat'] = $this->Home->Cat();
		$data['file'] = 'Admin/forget_pass2';
		if($id == 1) {
			$data['msg'] = "";
		}
		elseif($id == 2) {
			$data['msg'] = "Invalid Username and Password..!";
			$data['type'] = "danger";
		}
		elseif($id == 3) {
			$data['msg'] = "Plz insert right password";
			$data['type'] = "success";
		}
		elseif($id == 4) {
			$data['msg'] = "Plz Login First!";
			$data['type'] = "info";
		}
		$this->load->view('Templates', $data);
	}
	
	public function favourite()
	{		
		$this->load->model('Home');
		$data['favourite'] = $this->Home->favourite();
		$data['u_app'] = $this->Home->user_favapp();
		$data['Cat'] = $this->Home->Cat();
		//$data['u_app'] = $this->Home->user_favapp();
		$data['file'] = 'Admin/favourite';
		$this->load->view('Templates', $data);
		
	}
	public function DeleteWish($id)
	{
		$this->load->model('Home');
		$this->Home->DeleteWish($id);
		
	}
	public function down_user()
	{		
		$this->load->model('Home');		
		$data['uu_app'] = $this->Home->user_app();
		$data['Cat'] = $this->Home->Cat();
		$data['u_app'] = $this->Home->user_favapp();
		$data['file'] = 'Admin/downloaded_user';
		$this->load->view('Templates', $data);
		
	}
	public function new_releses()
	{		
		$this->load->model('Home');
		$data['new_releses'] = $this->Home->new_releses();
		$data['Cat'] = $this->Home->Cat();
		$data['u_app'] = $this->Home->user_favapp();
		$data['file'] = 'Admin/new_releses';
		$this->load->view('Templates', $data);
		
	}
        
        public function savewishlist()
	{	
		$this->load->model('Home');		
		$f0 = $_REQUEST['id'];	
                $f1 = $_REQUEST['name'];				
		$this->Home->savewishlist($f0,$f1);		
	}
       public function savedownload()
	{	
		$this->load->model('Home');		
		$f0 = $_REQUEST['id'];	
                $f1 = $_REQUEST['name'];
		$f2 = $_REQUEST['image'];
		$f3 = $_REQUEST['aname'];	
                $p = $_REQUEST['p_name'];		
		$this->Home->savedownload($f0,$f1,$f2,$f3,$p);		
	}
       public function apk($id)
	{	
		$this->load->model('Home');	
                $data['Cat'] = $this->Home->Cat();
                $data['u_app'] = $this->Home->user_favapp();
		$data['view'] = $this->Home->preview($id);
		$data['review'] = $this->Home->review($id);
		$data['Similer'] = $this->Home->Similer();
		$data['file'] = 'Admin/apk';
		$this->load->view('Templates', $data);	
	}

        public function apk_how_install()
	{	
		$this->load->model('Home');	
               $data['Cat'] = $this->Home->Cat();
                $data['u_app'] = $this->Home->user_favapp();
		$data['top_app'] = $this->Home->top_app();
		
		$data['file'] = 'Admin/apk_how_install';
		$this->load->view('Templates', $data);	
	}


}
