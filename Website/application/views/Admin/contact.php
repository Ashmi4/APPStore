<!DOCTYPE HTML>
<head>
<title> TouchIT App Store</title>
<link rel="icon" href="<?php echo base_url(); ?>assets/images/Click-Transparent.png" type="image/gif">
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

<script>
  window.intercomSettings = {
    app_id: "cggj5u47"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/cggj5u47';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>


</head>
<body style="background-color: #f7f9f9;">
	<div class="header">
		 <div class="headertop_desc">
			<div class="wrap">
				<div class="nav_list">
					
				</div>
					
				<div class="clear"></div>
			</div>
	  	</div>
  	  		<div class="">
				<div class="header_top">
					<div class="logo">
						<a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" /></a>
					</div>
						<div class="header_top_right">

						<div class="search_box">

					     		 <?php echo form_open_multipart('Search'); ?>

					     			<input type="text" name = "search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
									<input type="submit" value="">

					     							   <?php echo form_close(); ?>

					     	</div>

						
						  <div class="account_desc">

												<?php 
							
							
							if (!empty($_SESSION["uName"])){ ?>
							<ul>
							<li><a  href="<?php echo base_url();?>Apps/collection">My Apps</a></li>							
							
							<li><a href="<?php echo base_url();?>Wishlist">Wish List</a></li>
							
							<li><a class="active" href="<?php echo base_url();?>Contact">Contact</a></li>
							
							<li><a href="<?php echo base_url();?>Myaccount">My Account</a></li>											
							
							<li><a href="<?php echo base_url(); ?>Logout"><i class="icon-switch2"></i> Logout</a></li>
						</ul>
							
							<?php }
						else{
						?>
						<ul>
							
							
							<li><a class="active" href="<?php echo base_url();?>Contact">Contact</a></li>

							<li><a href="<?php echo base_url();?>Login">Login</a></li>
							
							<li><a href="<?php echo base_url();?>Register">Register</a></li>						
							
						
						</ul>
						


<?php } ?>
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
 
     	<div class="content_top">
    		<div class="back-links">
			
			<nav id="ddmenu">
    <div class="menu-icon"></div>
  <ul>
        
        <li class="no-sub"><a class="top-heading" href="<?php echo base_url();?>">Home</a></li>

        <li class="full-width">
            <a class="top-heading">Category</a>
        
            <div class="dropdown">
							
                <div class="dd-inner">
			<?php
                             
                                foreach($Cat->Result() as $row){?>
                    <ul class="column">                        
                        <li><a href="<?php echo base_url();?>Category/<?php echo $row->name; ?>"><?php echo $row->name; ?></a></li>					 
                    </ul>
					<?php   } ?>
                </div>
				
            </div>
        </li>
       <li>
            <a class="top-heading " href="<?php echo base_url();?>Apps/topdownload">Top Downloads</a>
           
            
        </li>
       
        <li class="no-sub">
            <a class="top-heading " href="<?php echo base_url();?>Apps/new">New Apps</a>
        </li>
		<li class="no-sub">
            <a class="top-heading " href="<?php echo base_url();?>Apps/top">Top Rated Apps</a>
        </li>
		
		
        
    </ul>
</nav>
			
			
			
    		   </div>
    		<div class="clear"></div>
    	</div>
		<div class="main">
 	<div class="wrap">
     <div class="">
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					   <?php echo form_open_multipart('StarAdmin/Savecontact'); ?>
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="name" value="<?php echo set_value('name'); ?>" type="text" class="textbox" required ></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="email" value="<?php echo set_value('email'); ?>" type="text" class="textbox" required pattern = "[^@]+@[^@]+\.[a-zA-Z]{2,4}"></span>
						    </div>
						    <div>
						     	<span><label>Company Name</label></span>
						    	<span><input name="address" value="<?php echo set_value('address'); ?>" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>Subject</label></span>
						    	<span><textarea name="subject"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit"  class="btncontact"></span>
						  </div>
					<?php echo form_close(); ?>
				  </div>
  				</div>
				<div class="col span_1_of_3">
					<div class="contact_info">
    	 				<h2>Find Us Here</h2>
					    	  <div class="map">
							   	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2939.4640009078435!2d-83.19712248474106!3d42.54543943136716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824c6f7d02add95%3A0x2f53f9e75ff103c!2s2051+Villa+Rd+%23104%2C+Birmingham%2C+MI+48009!5e0!3m2!1sen!2sin!4v1485502329158" width="100%" height="175" frameborder="0" style="border:0" allowfullscreen></iframe><br><small><a href="https://www.google.com/maps/place/2051+Villa+Rd+%23104,+Birmingham,+MI+48009/@42.5454394,-83.1971225,17z/data=!3m1!4b1!4m5!3m4!1s0x8824c6f7d02add95:0x2f53f9e75ff103c!8m2!3d42.5454355!4d-83.1949338?hl=en-GB style="color:#888;text-align:left;font-size:14px;">View Larger Map</a></small>
							  </div>
      				</div>
      			<div class="company_address">         
				     	<h2>Information :</h2> 


						    	<p>TouchIT Technologies,</p>
						   		<p>2051 Villa, Suite 104,</p>
						   		<p>Birmingham, MI 48009</p>
				   		
				 	 	<p>Email: <span><a href="#">sales@touchittechnologies.com</a></span></p>
				   		<p>Follow on: <span><a href="https://www.facebook.com/Touchittechnologies/"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>&nbsp;&nbsp; <span><a href="https://twitter.com/touchit_tech?lang=en"><i class="fa fa-twitter" aria-hidden="true"></i></a></span></p>
				   </div>
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


