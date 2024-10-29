<!DOCTYPE HTML><head>

<title> TouchIt</title>
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
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/paging.js"></script>
  
  <script>
  window.intercomSettings = {
    app_id: "cggj5u47"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/cggj5u47';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

  
  </head><body  style="background-color: #f7f9f9;">	
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
  <a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" /></a>					</div>						
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
					</div>							  						 <div class="clear"></div>			
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
						</div>   </div>   <!------------End Header ------------>  
						
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
		
        
    </ul></nav>		
						</div><div class="clear"></div>  
						</div>	
<div class="main">  
						<div class="wrap">   
						<div class="">    						
						<div class="section group">		
						<div class="col span_2_of_3_a">			
						<div class="contact-form1">				 	
						<?php echo form_open_multipart('Verify_token1'); ?>			
						<?php        
						if($msg != '') { echo "<div class='alert alert-".$type."'><button class='close' data-dismiss='alert' type='button'>&times;</button>".$msg."</div>"; }          ?>			
						<div class="text-center">					 							
						<h3><i class="fa fa-lock fa-4x"></i></h3>			
						<h2 class="text-center">Forgotten your password?</h2>				
						<h4> "Please check your email. We have sent you a reset code that you need to enter below along with your email address to enable you to reset your password"</h4>	
						</div>		
						<div>		
						<span><input name="email" type="text" class="textbox"  placeholder="Please enter a valid email address!" required pattern = "[^@]+@[^@]+\.[a-zA-Z]{2,4}"></span>		
						</div>					
						<div>					
						<span><input name="forgotpw_token" type="text" class="textbox"  placeholder="Please enter a valid reset code!" required></span></div>	
						<div>				
						<span><input type="submit" value="Submit"  class="button123"></span>	
						</div>					  
						<?php echo form_close(); ?>			
						</div>  				
						</div>		
						
						</div> 		   
						</div>
						</div>  
						
						
						<script type="text/javascript">	$(function(){	
						for (var i = 0; i < $("button").length; i++) {		
						$("button").eq(i).click(function(i){		
						
						return function(){					switch(i){			
						case 0:						
						$.lz.Alert({type:"textInput",effect:"slideDown"});			
						break;						case 1:					
						$.lz.Alert({type:"",effect:"slideLeft"});						
						break;						case 2:					
		break;						case 3:				
		$.lz.Alert({type:"",effect:"slideRight"});			
		break;						case 4:					
		$.lz.Alert('Message here.','Title here');				
		break;						case 5:					
		$.lz.Alert({type:"",effect:"bigger"});				
		break;						case 6:						
		$.lz.Alert({type:"",effect:"fadeIn"});					
		break;					}				}		
		}(i));		};	})
		</script>
		</div>
		<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-36251023-1']);  _gaq.push(['_setDomainName', 'jqueryscript.net']);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>    <script type="text/javascript">		$(document).ready(function() {						$().UItoTop({ easingType: 'easeOutQuart' });					});	</script>
		<a href="#" id="toTop"><span id="toTopHover"> </span></a><br><br><br><br>
		
						
						
						
						