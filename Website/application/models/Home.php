<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {

	function record_count() {
    $this->db->from('app_master');
    return $this->db->count_all_results();
		
	}
	
	function fetch_news($limit, $start) {
        $this->db->limit($limit, $start);      
		$this->db->select('app_master.*,category_master.*');   
        $this->db->from('app_master');
		$this->db->join('category_master', 'app_master.appid = category_master.id', 'inner');
$this->db->order_by("app_master.created_app", "desc"); 
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
	
        redirect('http://www.touchitappstore.com/', 'location');
		
   }
   function record_count_cat() {
    $this->db->from('app_master');
    return $this->db->count_all_results();
		
	}
	
	function fetch_news_cat($limit, $start, $id) {
        $this->db->limit($limit, $start);      
		$this->db->select('app_master.*,category_master.*');   
        $this->db->from('app_master');
		$this->db->join('category_master', 'app_master.appid = category_master.id', 'inner');
		$this->db->where('category_master.id', '$id' );		
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
	
        redirect('http://www.touchitappstore.com/', 'location');
		
   }
 function banner()
	{	
	
		//Get recent user on home page
		$query = $this->db->query("SELECT image,name FROM banner_master");
		return $query;
	}
   
   function user_app()
	{	
	$a = $_SESSION["userid"];
		//Get recent user on home page
		$query = $this->db->query("SELECT aid,wappname,wapp_image,wname FROM orders_master WHERE orders_master.userid='$a'");
		return $query;
	}
	 function user_favapp()
	{	
	if (!empty($_SESSION["uName"])){
	$a = $_SESSION["userid"];
		//Get recent user on home page
		$query = $this->db->query("SELECT userid,wid,fname,ref,appid,appname,app_image,rank FROM app_master JOIN favapp_master ON favapp_master.wid=app_master.ref WHERE favapp_master.userid='$a'");
		return $query;	
		
	}
	else{
		
	
		
	}
	
	}
	
	function Updateaccount()
			{
				$userid = $_REQUEST['userid'];
				$name = $_REQUEST['name'];
				$email = $_REQUEST['email'];
				//$image= $_FILES['image']['name'];				
				$address = $_REQUEST['address'];
				$password = $_REQUEST['password'];
				$cpassword = $_REQUEST['cpassword'];
				
			    
			
				
		$video = 'http://www.touchitappstore.com/avatar.jpg';
			
				
			if($password == $cpassword){
				
	
			$this->db->where('userid', $userid);
				$this->db->set('name', $name);				
				$this->db->set('email', $email);
				$this->db->set('image', $video);
				$this->db->set('address', $address);
				$this->db->set('password', $password);
				$query = $this->db->update('users_master');
				if($query) { 
			redirect('Logout1', 'location');
			} 
			else  {
				redirect('Myaccount_edit/2', 'location');
				}
			
	
				
			}
			else{
				 redirect('Myaccount_edit/5','location');
				
			}
			
			}
   
    function Saveregister($f0,$f1,$f2,$f3,$f4)
   
	{	
	$query = $this->db->query("SELECT email FROM `users_master` 
								   where `email` = '$f1';");
		
		
			if($query->num_rows() > 0) {

		foreach($query ->Result() as $row){
				redirect('Register/5', 'location');
				}
		}
		else{
				
					$video = 'http://www.touchitappstore.com/avatar.jpg';
				
	
			
		if($f3==$f4)
		{	
			$userid = bin2hex(openssl_random_pseudo_bytes(1));
		$query = $this->db->query("INSERT INTO `users_master` (`userid`,`name`,`email`,`image`,`address`,`password`) values ('$userid','$f0','$f1','$video','$f2','$f3');");
		if($query) { 
		
		redirect('Login', 'location');
		} 
		else  {
			redirect('Register/2', 'location');
			}	
			
		}
		else{
			
			redirect('Register/3', 'location');
			
		}
}
		
	}
   function Cat_app($id)
	{	
	
		//Get recent user on home page
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE category_master.name='$id'");
		return $query;
	}
	function Addcontact($f0,$f1,$f2,$f3)
   
	{
		$email_subject='Mail from : '.$f2.'';
				
				$msg = '<html><body>		
				<table width="100%" cellspacing="0" cellpadding="0" bgcolor="#f1f1f1" style="min-width:320px">
			<tbody>
			<tr>
			<td style="line-height:0">
			<div style="white-space:nowrap;font:15px/1px courier"></div>
			</td>
			</tr>
			<tr>
			<td style="padding:40px 10px 40px">
			<table width="600" cellspacing="0" cellpadding="0" align="center" style="margin:0 auto">
			<tbody>
			<tr>
			<td>
			<table width="600" cellspacing="0" cellpadding="0" style="width:600px!important">
			<tbody>
			<tr>
			<td style="min-width:600px;font-size:0;line-height:0"> </td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td style="padding:0 0 58px">
			<table width="100%" cellspacing="0" cellpadding="0">
			<tbody>
			<tr>
			<td bgcolor="#ffffff" style="padding:62px 40px 60px">
			<h1 style="font:32px/36px Helvetica,Arial,sans-serif;color:#371989;letter-spacing:0.5px;padding:0 0 36px;margin:0">Hello,</h1>
			<p style="font:16px/24px Helvetica,Arial,sans-serif;color:#757575;padding:0 0 22px;margin:0">'.$f3.'</p>
			
			
			<ul style="font:16px/24px Helvetica,Arial,sans-serif;color:#757575;margin:0">
			
			</ul>
			<p style="font:16px/24px Helvetica,Arial,sans-serif;color:#757575;padding:0 0 22px;margin:0">
			</br></br>
			Thanks,
			<br>
			'.$f0.'
			</p>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td>			
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</body></html>';
				
				 $headers = "From:" . $f1 ."\r\n";
				 
				 $headers .= "MIME-Version: 1.0\r\n";
				 $headers .= "Content-type: text/html\r\n";
			//$email_subject='subject'.$f2.'';
						//$msg = 'NAme:'.$f0.'<br/>email:'.$f1.'<br/>message:'.$f3.'';
						$to = "sales@touchittechnologies.com";
							//$headers = "From:" . $f1 ."\r\n"; 
							 
							// $headers .= "MIME-Version: 1.0\r\n";
							 //$headers .= "Content-type: text/html\r\n";
							
						mail($to, $email_subject, $msg, $headers);			
	$query = $this->db->query("INSERT INTO `contact_master` (`name`,`email`,`address`,`subject`) values ('$f0','$f1','$f2','$f3');");
		if($query) { 
		redirect('Contact', 'location');
		} 
		else  {
			redirect('Contact', 'location');
			}
	}
	 function Savenews($f1)
   
	{	
	$query = $this->db->query("INSERT INTO `news_master` (`email`) values ('$f1');");
		if($query) { 
		redirect('http://www.touchitappstore.com', 'location');
		} 
		else  {
			redirect('http://www.touchitappstore.com', 'location');
			}
	}
	function Saveforget_pass($f1)
   
	{	
				date_default_timezone_set("Asia/Kolkata");
				$date_time = date("Y-m-d H:m:s");
				$forgotpw_token = strtoupper(bin2hex(openssl_random_pseudo_bytes(2)));
				$email_subject='TouchIT Technologies access code : '.strtoupper($forgotpw_token).'';
				
				$msg = '<html><body>		
				<table width="100%" cellspacing="0" cellpadding="0" bgcolor="#f1f1f1" style="min-width:320px">
			<tbody>
			<tr>
			<td style="line-height:0">
			<div style="white-space:nowrap;font:15px/1px courier"></div>
			</td>
			</tr>
			<tr>
			<td style="padding:40px 10px 40px">
			<table width="600" cellspacing="0" cellpadding="0" align="center" style="margin:0 auto">
			<tbody>
			<tr>
			<td>
			<table width="600" cellspacing="0" cellpadding="0" style="width:600px!important">
			<tbody>
			<tr>
			<td style="min-width:600px;font-size:0;line-height:0"> </td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td style="padding:0 0 58px">
			<table width="100%" cellspacing="0" cellpadding="0">
			<tbody>
			<tr>
			<td bgcolor="#ffffff" style="padding:62px 40px 60px">
			<h1 style="font:32px/36px Helvetica,Arial,sans-serif;color:#371989;letter-spacing:0.5px;padding:0 0 36px;margin:0">Hello,</h1>
			<p style="font:16px/24px Helvetica,Arial,sans-serif;color:#757575;padding:0 0 22px;margin:0">We have received a password reset notification for your account on the TouchIT App Store.<br/>When prompted on the website, please enter the reset code below with your email address.
</p>
			<center><p style="font:23px/24px Helvetica,Arial,sans-serif;color:#00AEEF;padding:0 0 22px;margin:0">Reset Code</p></center>
			<center><h3 style="font:32px/36px Helvetica,Arial,sans-serif;color:#00AEEF;text-transform:uppercase;letter-spacing:0.5px;padding:0 0 62px;margin:0">'.$forgotpw_token.'</h3></center>
			
			<ul style="font:16px/24px Helvetica,Arial,sans-serif;color:#757575;margin:0">
			<li style="padding:0 0 18px;margin:0">(If you did not request your password to be reset you do not need to do anything. Ignore this email and your account will be secure and unchanged.)
</li>			
			
			</ul>
			<p style="font:16px/24px Helvetica,Arial,sans-serif;color:#757575;padding:0 0 22px;margin:0">
			</br></br>
			Many thanks
			<br>
			TouchIT Technologies Support
			www.touchitappstore.com
			www.touchittechnologies.com
			</p>
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			<tr>
			<td>			
			</td>
			</tr>
			</tbody>
			</table>
			</td>
			</tr>
			</tbody>
			</table>
			</body></html>';
				
				 $headers = "From: support@touchittechnologies.com<no-reply@touchitappstore.com> \r\n";
				 
				 $headers .= "MIME-Version: 1.0\r\n";
				 $headers .= "Content-type: text/html\r\n";
					
				mail($f1, $email_subject, $msg, $headers);
	
	
	
	$qur = $this->db->query("select * from `users_master` where `email` = '$f1'");
		
	if($qur->num_rows() > 0) 
		{
		
		foreach($qur->Result() as $row){	
	
	$query = $this->db->query("UPDATE `users_master` SET `forgotpw_token` = '$forgotpw_token', `status` = '1', `token_time` = '$date_time' where `email` = '$f1';");
		if($query) { 
		redirect('Verify_token', 'location');
		} 
		else  {
			redirect('Forgot_password/2', 'location');
			}
			}
		}
		else{
			
			redirect('Forgot_password/2', 'location');
		}
	}
	
	function Saveforget_pass1($f1,$f2){
		
			
				date_default_timezone_set("Asia/Kolkata");
				$date_time = date("Y-m-d H:m:s");
			
					
	$qur = $this->db->query("select * from `users_master` where `email` = '$f1' AND `forgotpw_token` = '$f2'");
		
	if($qur->num_rows() > 0) 
		{
		
		foreach($qur->Result() as $row){	
	
	$query = $this->db->query("UPDATE `users_master` SET `password` = '$f2',`forgotpw_token` = '', `status` = '0',`token_time` = ''  Where `email` = '$f1';");
		if($query) { 
		redirect('Reset_password', 'location');
		} 
		else  {
			redirect('Reset-password/2', 'location');
			}
			}
		}
		else{
			
			redirect('Reset-password/2', 'location');
		}
	}
		
		function Saveforget_pass11($f0,$f1,$f2){
		
			
				
					
	$qur = $this->db->query("select * from `users_master` where `email` = '$f0'");
		
	if($qur->num_rows() > 0) 
		{
		
		foreach($qur->Result() as $row){	
	if($f1 == $f2){
	$query = $this->db->query("UPDATE `users_master` SET `password` = '$f2',`forgotpw_token` = '', `status` = '0',`token_time` = ''  Where `email` = '$f0';");
	
		if($query) { 
		redirect('Login', 'location');
		} 
		else  {
			redirect('Wrong-password/2', 'location');
			}
	}
	else{
		redirect('Wrong-password/3', 'location');
	}
			}
		}
		else{
			
			redirect('Wrong-password/2', 'location');
		}
	}
		
		
		
	
	
   function Check()
	{	
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$remember = $_REQUEST['remember'];
		$query = $this->db->query("SELECT id,userid,name,email,password,image,address FROM `users_master` 
								   where `email` = '$email' AND `password` = '$password';");
		
		if($query) { 
			if($query->num_rows() === 1) {
				foreach($query->Result() as $row) {
					$data = array('id' => $row->id ,'userid' => $row->userid , 'uName' => $row->name,'email' => $row->email ,'image' => $row->image , 'address' => $row->address);
					$this->session->set_userdata($data);
					/*if(!empty($remember))
					{
                                                     $this->load->helper('cookie');
						setcookie('email',$email, time() + (10 * 365 * 24 * 60 * 60), "/");
						setcookie('password',$password, time() + (10 * 365 * 24 * 60 * 60), "/");
						}
						else{
							
							if(isset($_COOKIE["email"]))
							{
								setcookie ("email","");
							}
							if(isset($_COOKIE["password"]))
							{
								setcookie ("password","");
							}
						}*/
				}
				redirect('http://www.touchitappstore.com','location');
			} 
			else {
				 redirect('Login','location');
			}
		}
	}
  
	function search($f0)
	{	
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid where appname like '%{$f0}%'");
		return $query;
	}
	
		
	
   function Rank()
	{	
	$rank = 0;
	$rank = $rank == 'lowHigh' ? 'ASC' : 'DESC';
		//Get recent user on home page
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid ORDER BY rank desc limit 24");
		return $query;
	}
	
	
	function Rank_home()
	{	
	$rank = 0;
	$rank = $rank == 'lowHigh' ? 'DESC' : 'ASC';
		//Get recent user on home page
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid ORDER BY app_master.rank desc limit 8");
		return $query;
	}
	
	
	function top_favourite_home()
	{	
	if(!empty($_SESSION["userid"])){
$ab=$_SESSION["userid"];
$queryy = $this->db->query("SELECT aid,wappname,wapp_image,wname FROM orders_master WHERE orders_master.userid='$ab'");
		foreach($queryy->Result() as $row){

	$data = array('aid' => $row->aid);
$bb=$row->aid;
$bbb=$row->wname;
}
if(!empty($bb))
{
$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid where app_master.ref!=$bb limit 8");
		return $query;
}
else{
$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid ORDER BY app_master.download desc limit 8");
		return $query;
}
}



else{
$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid ORDER BY app_master.download desc limit 8");
		return $query;

}
		
	}
	
	
	function Cat_app_home()
	{	
	
		//Get recent user on home page
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,created_app,name FROM app_master JOIN category_master ON category_master.id=app_master.appid ORDER BY app_master.created_app desc limit 8");
		return $query;
	}
	
	
	
	function top_app()
	{	
	$rank = 0;
	$rank = $rank == 'lowHigh' ? 'DESC' : 'ASC';
		//Get recent user on home page
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid ORDER BY app_master.rank desc limit 24");
		return $query;
	}
	
	
	function top_down()
	{	
	$rank = 0;
	$rank = $rank == 'lowHigh' ? 'DESC' : 'ASC';
		//Get recent user on home page
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid ORDER BY app_master.download desc limit 24");
		return $query;
	}
	
	
	function top_favourite()
	{	
	$rank = 0;
	$rank = $rank == 'lowHigh' ? 'DESC' : 'ASC';
		//Get recent user on home page
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid ORDER BY app_master.download AND app_master.created_app desc limit 24");
		return $query;
	}
	function favourite()
	{	
	$rank = 0;
	$rank = $rank == 'lowHigh' ? 'DESC' : 'ASC';
		//Get recent user on home page
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid ORDER BY app_master.download AND app_master.created_app desc limit 24");
		return $query;
	}
	
	
	function top_rating()
	{	
	$rank = 0;
	$rank = $rank == 'lowHigh' ? 'DESC' : 'ASC';
		//Get recent user on home page
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid ORDER BY app_master.rank AND app_master.created_app desc limit 24");
		return $query;
	}
	
	
	function top_rating_home()
	{	
	$rank = 0;
	$rank = $rank == 'lowHigh' ? 'DESC' : 'ASC';
		//Get recent user on home page
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid ORDER BY app_master.rank desc limit 8");
		return $query;
	}
	
	
	 function Cat()
	{	
	
		$query = $this->db->query("SELECT * FROM category_master ");
		return $query;
	}
	
	
	function preview($id)
	{		
		$query = $this->db->query("SELECT ref,appid,appname,app_image,app_video,screenshot,app_description,apk_link,rank,download,pckagename,name,count,version FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE app_master.ref='$id'");
		return $query;
		
	}
	
	
        function Similer()
	{	
	
		
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name FROM app_master JOIN category_master ON category_master.id=app_master.appid");
		return $query;
	}
	
	

 function addrating($f0,$b,$f1,$a,$f2,$f3,$f4)
   
	{	
	    $aa = $_SESSION["userid"];
 $qur = $this->db->query("select * from `review_master` where `rid` = '$f0' AND `userid` = '$aa' ");
if($qur->num_rows() > 0) 
		{foreach($qur->Result() as $row){
		redirect('Apps/details/'.$f0, 'location');
		}
}
else{
	     if($aa=='')
			{
			redirect('loginn/4', 'location');	
				
			}
		else{
			if(!empty($f1) AND !empty($f3)){
				$query = $this->db->query("INSERT INTO `review_master` (`rid`,`userid`,`review`,`username`,`email`,rating,`userimage`) values ('$f0','$b','$f1','$a','$f2','$f3','$f4');");
		if($query) { 
		redirect('Apps/details/'.$f0, 'location');
		} 
		else  {
			redirect('Apps/details/'.$f0, 'location');
			}
				
			}
			else{
				redirect('Apps/details/'.$f0, 'location');
				
			}
			
			
		}
	}
	
	}

	
	function review($id)
	{		
		$query = $this->db->query("SELECT ref,appid,appname,app_image,app_description,rank,download,rid,review,rating,username,school,userimage FROM app_master JOIN review_master ON review_master.rid=app_master.ref WHERE app_master.ref='$id'");
		return $query;	
		
	}
	function new_releses()
	{	
	
		//Get recent user on home page
		$query = $this->db->query("SELECT ref,appid,appname,app_image,rank,download,name,created_app FROM app_master JOIN category_master ON category_master.id=app_master.appid WHERE app_master.created_app > DATE_SUB(NOW(), INTERVAL 1 WEEK)");
		return $query;
	}
function DeleteWish($id)
 {  
$a = $_SESSION["userid"];
  $query = $this->db->query("DELETE FROM `favapp_master` WHERE `wid` = '$id' AND `userid` = '$a';");
  if($query) { redirect('Wishlist', 'location'); } else  {
  echo "abc";
   }
 }
	
	
	function savewishlist($f0,$f1)
	{	
	$a = $_SESSION["userid"];
	$qur = $this->db->query("select * from `favapp_master` where `wid` = '$f0' AND `userid` = '$a' ");
		
	if($qur->num_rows() > 0) 
		{
		foreach($qur->Result() as $row){
		redirect('http://www.touchitappstore.com','location');
		}
		}
		
		else{
			if($a=='')
			{
			redirect('loginn/4','location');	
				
			}
		else{
			$query = $this->db->query("INSERT INTO `favapp_master` (`wid`,`userid`,`fname`) values ('$f0','$a','$f1');");
		if($query) { 
		redirect('Apps/details/'.$f0,'location');
		} 
		else  {
			redirect('Apps/details/'.$f0,'location');
			}
			
		}
	
			
		}
	}
function savedownload($f0,$f1,$f2,$f3,$p)
	{	
	$a = $_SESSION["userid"];
	$qur = $this->db->query("select * from `orders_master` where `aid` = '$f0' AND `userid` = '$a' ");
		
	if($qur->num_rows() > 0) 
		{
		foreach($qur->Result() as $row){
		redirect('Apk/'.$f0, 'location');
		}
		}
		
		else{
			if($a=='')
			{
			redirect('loginn/4', 'location');	
				
			}
		else{
$aaz = $_SESSION["userid"];
$queryz = $this->db->query("UPDATE `users_master` SET `download` = download + 1 Where `userid` = '$aaz';");
	
	
			$query = $this->db->query("INSERT INTO `orders_master` (`aid`,`userid`,`wappname`,`wapp_image`,`wname`,`p_name`) values ('$f0','$a','$f3','$f2','$f1','$p');");

		if($query) { 
		//$sql1 = $this->db->query("UPDATE INTO `users_master` SET  `download` =  `download` + 1   where `userid` = $aaz;");
		
              redirect('Apk/'.$f0, 'location');
		} 
		else  {
			redirect('Apps/collection', 'location');
			}
	
		}
	
			
		}
	}
	
}