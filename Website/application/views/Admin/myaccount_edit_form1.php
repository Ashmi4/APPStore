
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
    
<script src="<?php echo base_url(); ?>assets/js/ddmenu.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/rating_review.js"></script> 

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

					     		 <?php echo form_open_multipart('StarAdmin/search'); ?>

					     			<input type="text" name = "search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
									<input type="submit" value="">

					     							   <?php echo form_close(); ?>

					     	</div>

						
						  <div class="account_desc">

												<?php 
							
							
							if (!empty($_SESSION["uName"])){ ?>
							<ul>
							<li><a  href="<?php echo base_url();?>Apps">My Apps</a></li>							
							
							<li><a href="<?php echo base_url();?>Wishlist">Wishlist</a></li>
							
							<li><a href="<?php echo base_url();?>Contact">Contact</a></li>
							
							<li><a href="<?php echo base_url();?>Myaccount">My Account</a></li>											
							
							<li><a href="<?php echo base_url(); ?>Logout"><i class="icon-switch2"></i> Logout</a></li>
						</ul>
							
							<?php }
						else{
						?>
						<ul>
							
							
							<li><a href="<?php echo base_url();?>Contact">Contact</a></li>

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
        
        <li class="no-sub"><a class="top-heading active" href="<?php echo base_url();?>">Home</a></li>

        <li class="full-width">
            <a class="top-heading">Category</a>
        
            <div class="dropdown">
							
                <div class="dd-inner">
			<?php
                             
                                foreach($Cat->Result() as $row){?>
                    <ul class="column">                        
                        <li><a href="<?php echo base_url();?>index.php/StarAdmin/cat_app/<?php echo $row->id; ?>"><?php echo $row->name; ?></a></li>					 
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
				  <div class="contact-form1">
				  	<h2>Update Your Detail</h2>
					  <?php echo form_open_multipart('StarAdmin/Saveregister'); ?>
					  <?php
           /* if($msg != '') { echo "<div class='alert alert-".$type."'><button class='close' data-dismiss='alert' type='button'>&times;</button>".$msg."</div>"; }*/
          ?>
					    	<div>
						    	<span><label>Name</label></span>
						    	<span><input name="name" type="text" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>E-mail Address</label></span>
						    	<span><input name="email" type="text" class="textbox" required pattern = "[^@]+@[^@]+\.[a-zA-Z]{2,4}"></span>
						    </div>
							<div>
						    	<span><label>Company Name</label></span>
						    	<span><input name="address" type="text" class="textbox" required></span>
						    </div>
						    <div>
						     	<span><label>Password</label></span>
						    	<span><input name="password" type="password" class="textbox" required></span>
						    </div>
						    <div>
						    	<span><label>Retype Password</label></span>
						    	<span><input name="cpassword" type="password"  class="textbox" required></span>
						    </div>
							
						   <div>
						   		<span><input type="submit" value="Update"  class="button1"></span>
						  </div>
					   <?php echo form_close(); ?>
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


