<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<head>
<title>Free Movies Store Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?php echo base_url(); ?>assets/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.0.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.nivo.slider.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>	<style>	/* define a fixed width for the entire menu */.navigation { }/* reset our lists to remove bullet points and padding */.mainmenu, .submenu {  list-style: none;  padding: 0;  margin: 0;}/* make ALL links (main and submenu) have padding and background color */.mainmenu a {  display: block;    text-decoration: none;  padding: 10px;  color: #000;}/* add hover behaviour */.mainmenu a:hover {  }/* when hovering over a .mainmenu item,  display the submenu inside it.  we're changing the submenu's max-height from 0 to 200px;*/.mainmenu li:hover .submenu {  display: block;  max-height: 200px;}/*  we now overwrite the background-color for .submenu links only.  CSS reads down the page, so code at the bottom will overwrite the code at the top.*/.submenu a {	  }/* hover behaviour for links inside .submenu */.submenu a:hover {}/* this is the initial state of all submenus.  we set it to max-height: 0, and hide the overflowed content.*/.submenu {  overflow: hidden;  max-height: 0;  -webkit-transition: all 0.5s ease-out; }</style>		
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
						<div class="header_top_left">
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
				<div class="header_bottom">
					<div class="header_bottom_left">																								
						<div class="categories" style="overflow-y: scroll;>						<nav class="navigation">
						   <ul class="mainmenu">
						  	   <h3>Categories</h3>
							      <li><a href="#" >Android Wear</a></li>
							      <li><a href="#">Games</a></li>
							      <li><a href="#">Family <i class="fa fa-caret-down"></i></a>								  								   <ul class="submenu">										<li><a href=""><span class="sub"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Tops<span></a></li>										<li><a href=""><span class="sub"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> &nbsp;Bottoms<span></a></li>										<li><a href=""><span class="sub"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> &nbsp;Footwear<span></a></li>									</ul>								  								  </li>
							      <li><a href="#">English</a></li>
							      <li><a href="#">Tamil</a></li>
							       <li><a href="#">Malayalam</a></li>
							       <li><a href="#">Kannada</a></li>
							       <li><a href="#">Bengali</a></li>
							       <li><a href="#">Assami</a></li>
							       <li><a href="#">Kids <i class="fa fa-caret-down"></i></a>								   <ul class="submenu">										<li><a href=""> <span class="sub"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> Tops<span></a></li>																				<li><a href=""><span class="sub"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> &nbsp;Bottoms<span></a></li>										<li><a href=""> <span class="sub"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i> &nbsp;Footwear<span></a></li>									</ul></li>
							       <li><a href="#">Animation</a></li>
							       <li><a href="#">Games</a></li>								    <li><a href="#">Animation</a></li>							       <li><a href="#">Games</a></li> <li><a href="#">Animation</a></li>							       <li><a href="#">Games</a></li> <li><a href="#">Animation</a></li>							       <li><a href="#">Games</a></li> <li><a href="#">Animation</a></li>							       <li><a href="#">Games</a></li>
						  	 </ul>						</nav>
						</div>					
		  	         </div>
						    <div class="header_bottom_right">					 
						 	    <!------ Slider ------------>
								  <div class="slider">
							      	<div class="slider-wrapper theme-default">
							            <div id="slider" class="nivoSlider">
							                <img src="<?php echo base_url(); ?>assets/images/1.jpg" data-thumb="<?php echo base_url(); ?>assets/images/1.jpg" alt="" />
							                
							                <img src="<?php echo base_url(); ?>assets/images/3.jpg" data-thumb="<?php echo base_url(); ?>assets/images/3.jpg" alt="" />
							                <img src="<?php echo base_url(); ?>assets/images/4.jpg" data-thumb="<?php echo base_url(); ?>assets/images/4.jpg" alt="" />
							                 <img src="<?php echo base_url(); ?>assets/images/5.jpg" data-thumb="<?php echo base_url(); ?>assets/images/5.jpg" alt="" />
							            </div>
							        </div>
						   		</div>
						<!------End Slider ------------>
			         </div>
			     <div class="clear"></div>
			</div>
   		</div>
   </div>
   <!------------End Header ------------>
  <div class="main">
  	<div class="wrap">
      <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>New Products <a href="#" class="seemore">See More</a></h3>
    		</div>
    	</div>
	      <div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					<a href="<?php echo base_url();?>index.php/StarAdmin/preview"><img src="<?php echo base_url(); ?>assets/images/c.png" alt="" /></a>
					 <h2><a href="<?php echo base_url();?>index.php/StarAdmin/preview">End Game</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 620.87</span></p>
					    </div>
					       		
							 <div class="clear"></div>
					</div>					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/Sorority_Wars.jpg" alt="" /></a>
					 <h2><a href="preview.html">Sorority Wars</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 620.87</span></p>
					    </div>
					       		
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/New-Moon-The-Score-cover-twilight.jpg" alt="" /></a>
					 <h2><a href="preview.html">Twilight New Moon</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 899.00</span></p>
					    </div>
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/avatar_movie.jpg" alt="" /></a>
					 <h2><a href="preview.html">Avatar</a></h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 599.00</span></p>
					    </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/black-swan.jpg" alt="" /></a>
					 <h2><a href="preview.html">Black Swan</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 679.00</span></p>
					    </div>
							 <div class="clear"></div>
					</div>				     
				</div>
				
			</div>
			<div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					<a href="<?php echo base_url();?>index.php/StarAdmin/preview"><img src="<?php echo base_url(); ?>assets/images/abc1.png" alt="" /></a>
					 <h2><a href="<?php echo base_url();?>index.php/StarAdmin/preview">SHAREIT</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 620.00 </i></span></p>
					    </div>
					       		
							 <div class="clear"></div>
					</div>					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/images1.jpg" alt="" /></a>
					 <h2><a href="preview.html">FACEBOOK</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 620.00</span></p>
					    </div>
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/images 11.png" alt="" /></a>
					 <h2><a href="preview.html">TRUECALLER</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 899.00</span></p>
					    </div>
					       		
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/legin.jpg" alt="" /></a>
					 <h2><a href="preview.html">LEGION FIGHTERS</a></h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 599.00</span></p>
					    </div>
					       		
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/subway.jpg" alt="" /></a>
					 <h2><a href="preview.html">SUBWAY SURFERS</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 679.00</span></p>
					    </div>
					       		
							 <div class="clear"></div>
					</div>				     
				</div>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Feature Products <a href="#" class="seemore">See More</a></h3>
    		</div>
    	  </div>
			<div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/beauty_and_the_beast.jpg" alt="" /></a>
					 <h2><a href="preview.html">Beauty and the beast</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 620.00</span></p>
					    </div>
					       		
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					 <a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/Eclipse.jpg" alt="" /></a>
					 <h2><a href="preview.html">Eclipse</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 620.00</span></p>
					    </div>
					       	
							 <div class="clear"></div>
					</div>
					 
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/Coraline.jpg" alt="" /></a>
					 <h2><a href="preview.html">Coraline</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 899.00</span></p>
					    </div>
					       		
							 <div class="clear"></div>
					</div>
				    
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/Unstoppable.jpg" alt="" /></a>
					 <h2><a href="preview.html">Unstoppable</a></h2>
					 <div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 599.00</span></p>
					    </div>
					       		
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_5 images_1_of_5">
					<a href="preview.html"><img src="<?php echo base_url(); ?>assets/images/Priest.jpg" alt="" /></a>
					 <h2><a href="preview.html">Priest 3D</a></h2>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rs. 679.00</span></p>
					    </div>
					       		
							 <div class="clear"></div>
					 </div>				     
				</div>
			</div>
       </div>
  </div>
</div>