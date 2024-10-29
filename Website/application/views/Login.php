<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php echo base_url(); ?>assets/css/stylee.css" rel="stylesheet" type="text/css" media="all"/>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.nivo.slider.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/rating_review.js"></script> 




<script src="<?php echo base_url(); ?>assets/js/ddmenu.js"></script>
</head>
<body>
	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					
				</div>
					
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="wrap">
				<div class="header_top">
					<div class="logo">
						<a href="<?php echo base_url();?>index.php/StarAdmin/home"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" /></a>
					</div>
						<div class="header_top_right">
						  <div class="account_desc">
						<ul>						
							
							<li><a href="<?php echo base_url();?>index.php/StarAdmin/apps">My Apps</a></li>
							<li><a href="<?php echo base_url();?>index.php/StarAdmin/contact">Contact</a></li>
							<li><a href="<?php echo base_url();?>index.php/StarAdmin/register">Register</a></li>
							<li><a href="<?php echo base_url();?>index.php/StarAdmin/login">Login</a></li>
						</ul>
					</div>
							  <div class="search_box">
					     		<form>
					     			<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
					     		</form>
					     	</div>
						 <div class="clear"></div>
					</div>
						  <script type="text/javascript">
								function DropDown(el) {
									this.dd = el;
									this.initEvents();
								}
								DropDown.prototype = {
									initEvents : function() {
										var obj = this;
					
										obj.dd.on('click', function(event){
											$(this).toggleClass('active');
											event.stopPropagation();
										});	
									}
								}
					
								$(function() {
					
									var dd = new DropDown( $('#dd') );
					
									$(document).click(function() {
										// all dropdowns
										$('.wrapper-dropdown-2').removeClass('active');
									});
					
								});
								
					    </script>
			   <div class="clear"></div>
  		    </div>     				
   		</div>
   </div>
 <div class="main">
 	<div class="wrap">
     <div class="content">
     	<div class="content_top">
    		<div class="back-links">
			
			<nav id="ddmenu">
    <div class="menu-icon"></div>
   <ul>
        <li class="full-width">
            <a class="top-heading active">Category</a>
            <i class="caret"></i>
            <div class="dropdown">
                <div class="dd-inner">
				<?php			
			foreach($Cat->Result() as $row){?>
                    <ul class="column">                        
                        <li><a href="#"><?php echo $row->name; ?></a></li>					 
                    </ul>
					<?php } ?>
                 
                </div>
            </div>
        </li>
        <li class="no-sub"><a class="top-heading active" href="<?php echo base_url();?>index.php/StarAdmin/home">Home</a></li>
        <li>
            <a class="top-heading active" href="<?php echo base_url();?>index.php/StarAdmin/apps">Top Chart</a>
            
        </li>
        <li>
            <a class="top-heading active" href="<?php echo base_url();?>index.php/StarAdmin/apps">Top Downloads</a>
           
            
        </li>
        <li class="no-sub">
            <a class="top-heading active" href="<?php echo base_url();?>index.php/StarAdmin/apps">New Releases</a>
        </li>
		<li class="no-sub">
            <a class="top-heading active" href="<?php echo base_url();?>index.php/StarAdmin/apps">Top Ratings</a>
        </li>
		<li class="no-sub">
            <a class="top-heading active" href="<?php echo base_url();?>index.php/StarAdmin/apps">Top Favourite</a>
        </li>
        
    </ul>
        
    </ul>
</nav>
			
			
			
    		   </div>
    		<div class="clear"></div>
    	</div>
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form1">
				  	<h2>Login</h2>
					    <form action="<?php echo base_url(); ?>index.php/StarAdmin/LoginCheck" id="sign_in" method="POST">
                       <?php
            if($msg != '') { echo "<div class='alert alert-".$type."'><button class='close' data-dismiss='alert' type='button'>&times;</button>".$msg."</div>"; }
          ?>
					    	<div>
						    	<span><label>E-mail Address</label></span>
						    	<span><input name="email" type="text" class="textbox"></span>
						    </div>
							<div>
						     	<span><label>Password</label></span>
						    	<span><input name="password" type="password" class="textbox" required="" ></span>
						    </div>
							<div>
						   		<span><input type="submit" value="Sign In"  class="mybutton"></span>
								
						  </div>
						  <div  style=" margin-left: 123px;margin-top: -6px;">
						  
						  <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						  </div>
						  <div>
						  <span><a href="#">Forgot your password?</a></span>
						  </div>
						  <div>
						  <span>NOT REGISTERED?<a href="<?php echo base_url();?>index.php/StarAdmin/register"> CREATE AN ACCOUNT</a></span>
						  </div>
					    </form>
				  </div>
  				</div>
					
         </div> 
    </div>
 </div>
  
    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

