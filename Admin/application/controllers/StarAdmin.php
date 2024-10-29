<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StarAdmin extends CI_Controller {
	
	public function Home()
	{				
		$this->load->model('Users');
		$data['Recent'] = $this->Users->Recent();
		$data['Users'] = $this->Users->Users();
		$data['Rank'] = $this->Users->Rank();
                $data['Rankk'] = $this->Users->Rankk();
                $data['pop'] = $this->Users->pop();
		$data['file'] = 'Admin/Home';
		$this->load->view('Templates', $data);		
	}
	public function DownloadApp($id)
	{
		$this->load->model('Users');		
		$data['DownloadApp'] = $this->Users->DownloadApp($id);
		$data['file'] = 'Admin/DownloadApp';
		$this->load->view('Templates', $data);
	}
	public function Users()
	{					
		$this->load->model('Users');
		$config = array();
        $config["base_url"] = base_url() . "index.php/StarAdmin/Users";
        $config["total_rows"] = $this->Users->record_count();
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
        $data["results"] = $this->Users->fetch_news($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data["total"] = $config["total_rows"];	
		$data['file'] = 'Admin/Users';
		$this->load->view('Templates', $data);		
	}
	public function Categories()
	{					
		$this->load->model('Categories');
		$config = array();
        $config["base_url"] = base_url() . "index.php/StarAdmin/Categories";
        $config["total_rows"] = $this->Categories->record_count();
        $config["per_page"] = 14;
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
        $data["results"] = $this->Categories->fetch_news($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data["total"] = $config["total_rows"];	
		
		$data['file'] = 'Admin/Categories';
		$this->load->view('Templates', $data);		
	}
	public function AddCategories()
	{					
		
		$data['file'] = 'Admin/AddCategories';
		$this->load->view('Templates', $data);		
	}
	public function Savecategories()
	{	
		$this->load->model('Categories');		
		$f0 = $_REQUEST['name'];
		
		$f2 = $_REQUEST['description'];			
		$this->Categories->AddCategories($f0,$f2);		
	}
	public function DeleteCat($id)
	{
		$this->load->model('Categories');
		$this->Categories->DeleteCat($id);
		
	}
	public function FetchCategories($id)
	{
		$this->load->model('Categories');		
		$data['Categories'] = $this->Categories->FetchCategories($id);
		$data['file'] = 'Admin/FetchCategories';
		$this->load->view('Templates', $data);
	}
	
	
	public function UpdateCat()
	{
		$this->load->model('Categories');
		$this->Categories->UpdateCat();
		redirect(base_url().'index.php/StarAdmin/Categories','refresh');
	}
	public function App()
	{					
		$this->load->model('App');
		$config = array();
        $config["base_url"] = base_url() . "index.php/StarAdmin/App";
        $config["total_rows"] = $this->App->record_count();
        $config["per_page"] = 14;
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
        $data["results"] = $this->App->fetch_news($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data["total"] = $config["total_rows"];		
		
		$data['file'] = 'Admin/App';
		$this->load->view('Templates', $data);
	}
	public function DeleteApp($id)
	{
		$this->load->model('App');
		$this->App->DeleteApp($id);
		
	}
	public function DeletegApp($id)
	{
		$this->load->model('App');
		$this->App->DeletegApp($id);
		
	}
	public function Addapp()
	{	
		$this->load->model('App');	
		$data['active'] = $this->App->Getid();	
		$data['file'] = 'Admin/Addapp';
		$this->load->view('Templates', $data);		
		
	}
	public function GOOGLEapp()
	{	

		$this->load->model('App');
		$config = array();
        $config["base_url"] = base_url() . "index.php/StarAdmin/GOOGLEapp";
        $config["total_rows"] = $this->App->record_countt();
        $config["per_page"] = 14;
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
        $data["results"] = $this->App->fetch_newss($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data["total"] = $config["total_rows"];	
		$data['file'] = 'Admin/GOOGLEapp';
		$this->load->view('Templates', $data);	



	
		//$this->load->model('App');	
		//$data['App'] = $this->App->Getapp();	
			
		
	}
       public function googleeapp()
	{		
		$this->load->model('App');
		$filename1 = 'https://data.42matters.com/api/v2.0/android/apps/lookup.json?p=';
		$filename = $_REQUEST['url'];
		$filename3 = '&access_token=5afd393877d3478fede5854f1796e30cea6a50c9';
		//$filename = 'f0';
			//$apk_link = $_REQUEST['link'];
		$filename11 = 'https://apkpure.com/';
		$filename1a = $_REQUEST['link'].'/';
		$filename33 = '/download?from=home';
		$zz=strtolower($filename1a);
$z = str_replace(" ", "-", $zz);
		$apk_link = $filename11.$z.$filename.$filename33;
$finaloutput=$filename1.$filename.$filename3;
//$href="http://oceanstechnologies.com/ahmoceans/api/verifyemail.php?email='.$email.'&temporary_token='.$new_temp_token.'"
		$json = file_get_contents($finaloutput);   
		$emp_data = json_decode($json);
    //convert json object to php associative array
			$id = $emp_data->title;
			$name = $emp_data->description;
			$gender = $emp_data->rating;
			//$designation = $emp_data->category;
			$department = $emp_data->price;
			$downloads = $emp_data->downloads;
			$version = $emp_data->version;
			$icon = $emp_data->icon;
			$screenshots = $emp_data->screenshots;
			$vi = $emp_data->promo_video;
                        $icon_72 = $emp_data->icon_72;
			$number_ratings = $emp_data->number_ratings;
			
		//$ri = array_column($emp_data,'screenshots');
		$ai= implode(",",$screenshots);
		//$vi= implode(",",$promo_video);
		
		$target = str_replace("'", " ", $name);
		$tar = str_replace("’", " ", $target);
                 $f0 = $_REQUEST['appid'];
		 $this->App->Addgoogleapp($f0,$id,$tar,$apk_link,$gender,$department,$downloads,$version,$icon,$ai,$vi,$icon_72,$number_ratings,$filename);
			
    }
	
	public function Saveapp()
	{	
		$this->load->model('App');
		$f0 = $_REQUEST['appid'];
		$f1 = $_REQUEST['appname'];
	
        $final = 'http://touchitappstore.com/IT_ADMIN/image/App/';
		$s= $_FILES['screenshot']['name'];
		if($s == ''){
			$f2 = '';			
		}
		else{
		$f2 = $final . $s;	
		}
		
		
		$i= $_FILES['app_image']['name'];
		if($i == ''){
			$f5 = '';			
		}
		else{
		$f5 = $final . $i;
		}
		
		$v= $_FILES['app_video']['name'];
		if($v == ''){
			$f6 = '';			
		}
		else{
	   $f6 = $final . $v;
		}
		
		$fin = 'http://touchitappstore.com/IT_ADMIN/image/Apk/';
		$apk1 = $_FILES['apk_link']['name'];
		$apk = $fin . $apk1;
		$f7 = $_REQUEST['app_description'];
		$f8 = $_REQUEST['price'];
		$p = $_REQUEST['pckagename'];
		
		$this->App->Addapp($f0,$f1,$f2,$f5,$f6,$f7,$apk,$f8,$p);
		
	}
	
	public function FetchApp($id)
	{
		$this->load->model('App');		
		$data['App'] = $this->App->FetchApp($id);
		$data['file'] = 'Admin/FetchApp';
		$this->load->view('Templates', $data);
	}
       public function FetchgApp($id)
	{
		$this->load->model('App');		
		$data['gApp'] = $this->App->FetchgApp($id);
		$data['file'] = 'Admin/FetchgApp';
		$this->load->view('Templates', $data);
	}
       public function UpdategApp()
	{
		$this->load->model('App');
		$this->App->UpdategApp();
		redirect(base_url().'index.php/StarAdmin/GOOGLEapp','refresh');
	}	
	public function UpdateApp()
	{
		$this->load->model('App');
		$this->App->UpdateApp();
		redirect(base_url().'index.php/StarAdmin/App','refresh');
	}	
	public function Banner()
	{					
		$this->load->model('Banner');
		$config = array();
        $config["base_url"] = base_url() . "index.php/StarAdmin/Banner";
        $config["total_rows"] = $this->Banner->record_count();
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
        $data["results"] = $this->Banner->fetch_news($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $data["total"] = $config["total_rows"];		
		$data['file'] = 'Admin/Banner';
		$this->load->view('Templates', $data);		
	}
	public function DeleteBanner($id)
	{
		$this->load->model('Banner');
		$this->Banner->DeleteBanner($id);
		
	}
	public function FetchBanner($id)
	{
		$this->load->model('Banner');		
		$data['Banner'] = $this->Banner->FetchBanner($id);
		$data['file'] = 'Admin/FetchBanner';
		$this->load->view('Templates', $data);
	}
	public function UpdateBanner()
	{
		$this->load->model('Banner');
		$this->Banner->UpdateBanner();
		redirect(base_url().'index.php/StarAdmin/Banner','refresh');
	}	
	
	public function AddBanner()
	{					
		
		$data['file'] = 'Admin/AddBanner';
		$this->load->view('Templates', $data);		
	}
	public function Savebanner()
	{	
		$this->load->model('Banner');		
		$f0 = $_REQUEST['name'];
		$f1 = $_FILES['image']['name'];
		//$f2 = $_REQUEST['description'];			
		$this->Banner->AddBanner($f0,$f1);		
	}
}