<?php
include 'Config.php';
date_default_timezone_set("Asia/Kolkata");
if($_SERVER['REQUEST_METHOD'] == "POST"){
	
	$email = isset($_POST['email']) ? mysql_real_escape_string($_POST['email']) : "";	
	if(!empty($email))
	{
		$query = mysql_query("select * from `touchit_app_db`.`users_master` where `email` = '$email'");
		if(mysql_num_rows($query)>0) {
			while($r = mysql_fetch_array($query)) 
			{
				$date1 = date_create(date('Y-m-d H:m:s'));
				$date2 = date_create($r['token_time']);
				$diff_obj = date_diff($date1,$date2);
				$day = $diff_obj->format("%d");
				$hour = $diff_obj->format("%H");
				$min = $diff_obj->format("%m");
				$total_min = ($day*3600)+($hour*60)+($min);
				
				if($total_min <= 15) {
				$qur = mysql_query("Select forgotpw_token from `users_master` where  email='$email'");
				
				while($r = mysql_fetch_array($qur)){
					extract($r);
									
				$email_subject='IT App Store access code : '.strtoupper($forgotpw_token).'';
				
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
			<p style="font:16px/24px Helvetica,Arial,sans-serif;color:#757575;padding:0 0 22px;margin:0">We received a IT App Store login request from a device we don’t recognize. Please use the code below to activate the device.</p>
			<center><p style="font:23px/24px Helvetica,Arial,sans-serif;color:#00AEEF;padding:0 0 22px;margin:0">Enter The Code.</p></center>
			<center><h3 style="font:32px/36px Helvetica,Arial,sans-serif;color:#00AEEF;text-transform:uppercase;letter-spacing:0.5px;padding:0 0 62px;margin:0">'.$forgotpw_token.'</h3></center>
			
			<ul style="font:16px/24px Helvetica,Arial,sans-serif;color:#757575;margin:0">
			<li style="padding:0 0 18px;margin:0">Did not request an access code? Simply ignore this email.</li>			
			
			</ul>
			<p style="font:16px/24px Helvetica,Arial,sans-serif;color:#757575;padding:0 0 22px;margin:0">
			</br></br>
			Thanks,
			<br>
			The IT App Store Team
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
				
				 $headers = "From: IT App Store Support<no-reply@ITAppStore.com> \r\n";
				 
				 $headers .= "MIME-Version: 1.0\r\n";
				 $headers .= "Content-type: text/html\r\n";
					
				mail($email, $email_subject, $msg, $headers);				
				}
			$json = array("status" => 1, "msg" => "please check your email for the access code.", "access_code" => ''.$forgotpw_token.'');				
				}					
				else{
					$date_time = date("Y-m-d H:m:s");
				$forgotpw_token = strtoupper(bin2hex(openssl_random_pseudo_bytes(2)));
				$email_subject='IT App Store access code : '.strtoupper($forgotpw_token).'';
				
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
			<p style="font:16px/24px Helvetica,Arial,sans-serif;color:#757575;padding:0 0 22px;margin:0">We received a IT App Store login request from a device we don’t recognize. Please use the code below to activate the device.</p>
			<center><p style="font:23px/24px Helvetica,Arial,sans-serif;color:#00AEEF;padding:0 0 22px;margin:0">Enter The Code.</p></center>
			<center><h3 style="font:32px/36px Helvetica,Arial,sans-serif;color:#00AEEF;text-transform:uppercase;letter-spacing:0.5px;padding:0 0 62px;margin:0">'.$forgotpw_token.'</h3></center>
			
			<ul style="font:16px/24px Helvetica,Arial,sans-serif;color:#757575;margin:0">
			<li style="padding:0 0 18px;margin:0">Did not request an access code? Simply ignore this email.</li>			
			
			</ul>
			<p style="font:16px/24px Helvetica,Arial,sans-serif;color:#757575;padding:0 0 22px;margin:0">
			</br></br>
			Thanks,
			<br>
			The IT App Store Team
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
				
				 $headers = "From: IT App Store Support<no-reply@ITAppStore.com> \r\n";
				 
				 $headers .= "MIME-Version: 1.0\r\n";
				 $headers .= "Content-type: text/html\r\n";
					
				mail($email, $email_subject, $msg, $headers);				
				
				$sql1 = mysql_query("UPDATE `touchit_app_db`.`users_master` SET `forgotpw_token` = '$forgotpw_token', `status` = '1', `token_time` = '$date_time' where `email` = '$email';");				
				$json = array("status" => 1, "msg" => "Access code requested, please check your email for the access code.", "access_code" => ''.$forgotpw_token.'');
					}
			}
		}
		
		else {
			$json = array("status" => 0, "msg" => "Email Id not valid ");
		}
	}
	else
	{
		$json = array("status" => 0, "msg" => "Email Id Not Exits ");
	}	
	

	}

	// Output header 
	header('Content-type: application/json');
	echo json_encode($json);