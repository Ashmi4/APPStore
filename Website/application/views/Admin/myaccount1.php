<?php
if($_SESSION["uName"] == "") {
    redirect('StarAdmin/loginn/4','location');
}
?>
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
 <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/paging.js"></script>
<style type="text/css">    
            .pg-normal {
                color: black;
                font-weight: normal;
                text-decoration: none;    
                cursor: pointer;    
            }
            .pg-selected {
                color: black;
                font-weight: bold;        
                text-decoration: underline;
                cursor: pointer;
            }
        </style>

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
						<a href="<?php echo base_url();?>index.php/StarAdmin/home"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" /></a>
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
							<li><a  href="<?php echo base_url();?>index.php/StarAdmin/apps">My Apps</a></li>							
							
							<li><a href="<?php echo base_url();?>index.php/StarAdmin/favourite">Favourite Apps</a></li>
							
							<li><a href="<?php echo base_url();?>index.php/StarAdmin/contact">Contact</a></li>
							
							<li><a href="<?php echo base_url();?>index.php/StarAdmin/myaccount">My Account</a></li>											
							
							<li><a href="<?php echo base_url(); ?>index.php/StarAdmin/Logout"><i class="icon-switch2"></i> Logout</a></li>
						</ul>
							
							<?php }
						else{
						?>
						<ul>
							<li><a  href="<?php echo base_url();?>index.php/StarAdmin/apps">My Apps</a></li>							
							
							<li><a href="<?php echo base_url();?>index.php/StarAdmin/favourite">Favourite Apps</a></li>
							
							<li><a href="<?php echo base_url();?>index.php/StarAdmin/contact">Contact</a></li>					
							
							<li><a href="<?php echo base_url();?>index.php/StarAdmin/login">Login</a></li>
							
							<li><a href="<?php echo base_url();?>index.php/StarAdmin/register">Register</a></li>						
							
						
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
   <!------------End Header ------------>
 
    	<div class="content_top">
    		<div class="back-links">
			
			<nav id="ddmenu">
    <div class="menu-icon"></div>
    <ul>
        
        <li class="no-sub"><a class="top-heading active" href="<?php echo base_url();?>index.php/StarAdmin/home">Home</a></li>

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
            <a class="top-heading " href="<?php echo base_url();?>index.php/StarAdmin/top_down">Top Downloads</a>
           
            
        </li>
       
        <li class="no-sub">
            <a class="top-heading " href="<?php echo base_url();?>index.php/StarAdmin/new_releses">New Apps</a>
        </li>
		<li class="no-sub">
            <a class="top-heading " href="<?php echo base_url();?>index.php/StarAdmin/top_rating">Top Rated Apps</a>
        </li>
		
        
    </ul>
</nav>
			
			
			
			
    		   </div>
    		<div class="clear"></div>
    	</div>
	       
		
    	<div>
    		<h2  class="heading">Downloads Apps</h2>
    		</div>
		
	        <div class="main">
  	<div class="wrap">
      <div class="">
				
				  <div class="section group">
				<div class="grid_1_of_5 images_1_of_5">
				
					<a href="http://localhost/itweb/it_app_store/index.php/StarAdmin/preview/24"><img src="http://superhtv.com/IT_APPP/image/App/1244211826.jpg" alt=""></a>
					<h5 class="mess">Facebook</h5>
					 <h6 class="mess">Sports</h6>
					<div class="price-details">
				       <div class="staricon">								
									<i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i>
									 </div>
									 <div>
									<h5 class="aa_to_desc"></h5> 
							    </div>
							
							 <div class="clear"></div>
					</div>
				    
				</div>
				
			</div>
			<div class="company_address">
				     	<h2 class="heading">Personal Details :</h2>          
						    <p>Name:<?php echo $_SESSION["uName"]; ?>  <a href="<?php echo base_url();?>index.php/StarAdmin/myaccount_edit_form"> <i class="fa fa-pencil-square-o" aria-hidden="true" style="font-size: 22px; margin-left: 37px;"></i></a></p>
				   		<p>Address:<?php echo $_SESSION["address"]; ?></p>
				   		<p>Email: <span><a href="#"><?php echo $_SESSION["email"]; ?></a></span></p>
				   		
				   </div>	
				
				
				
				
			
			</div>
			 <div id="pageNavPosition"></div>
		<script type="text/javascript"><!--
        var pager = new Pager('results', 3); 
        pager.init(); 
        pager.showPageNav('pager', 'pageNavPosition'); 
        pager.showPage(1);
    //--></script>	
			
  	</div>
	</div>
			
       </div>
  </div>
</div>
<br>
<br>
<br><br>
<br>
<br>




