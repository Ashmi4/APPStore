	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
					<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>
							<div class="logo-name">
									 <a href="index.html">  <h1>APP STORE</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="<?php echo base_url(); ?>assets/images/p1.png" alt=""> </span> 
												<div class="user-name">
													
													<span>Administrator</span>
												</div>
												
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<!--<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> -->
											<li> <a href="<?php echo base_url(); ?>index.php/StarAuth/Logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
<!--market updates updates-->
	 
<!--market updates end here-->
<!--mainpage chit-chating-->

<!--main page chit chating end here-->
<!--main page chart start here-->

<!--main page chart layer2-->


<!--climate start here-->

<div class="product-block">
   
	<div class="pro-head1"> 
	<h2>Downloaded Applications :</h2>
	</div>  
	<hr>
	
 <?php foreach($DownloadApp->Result() as $row) { ?>
	<div class="col-md-3 product-grid">
	<div class="product-items">	    		   
	<div class="project-eff">						
	<div id="nivo-lightbox-demo"> <p>
	<a href="<?php echo $row->wapp_image; ?>" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"><span class="rollover1"> </span> 
	</a></p>
	</div>
	<img class="img-responsive" src="<?php echo $row->wapp_image; ?>" alt="">	
	</div>	
	<div class="produ-cost">
	<h4><?php echo $row->wappname; ?></h4>
	
	<h5><i class="fa fa-star" aria-hidden="true"></i>					
	<i class="fa fa-star" aria-hidden="true"></i>			
	<i class="fa fa-star" aria-hidden="true"></i>					
	<i class="fa fa-star-half-o" aria-hidden="true"></i>	
	<i class="fa fa-star-o" aria-hidden="true"></i></h5>					
	    		
	</div>    
	</div>    
	</div>  	
	  	<?php } ?>	  
	<div class="clearfix"> 
	</div>   
	</div>
	
			
<!--climate end here-->

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 IT App Store. All Rights Reserved | Design by  <a href="http://oceanstechnogoies.com/" target="_blank">Oceans Technologies</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
   <div class="sliderimagemain">
   <div class="sidebar-menu"> <div class="sliderimage">
		  	</div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home"><a href="<?php echo base_url(); ?>index.php/StarAdmin/Home"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="<?php echo base_url(); ?>index.php/StarAdmin/Categories"><i class="fa fa-bars"></i><span>Category</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		           
		            <li><a href="<?php echo base_url(); ?>index.php/StarAdmin/AddCategories">Add Category</a></li>		            
		          </ul>
		        </li>
		        <li id="menu-comunicacao"><a href="<?php echo base_url(); ?>index.php/StarAdmin/App"><i class="fa fa-android"></i><span>Applications</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		            <li id="menu-mensagens" style="width: 120px" ><a href="<?php echo base_url(); ?>index.php/StarAdmin/Addapp">Add App</a>		              
		            </li>
		           
		          </ul>
		        </li>
		          <li  class="active"><a href="<?php echo base_url(); ?>index.php/StarAdmin/Users"><i class="fa fa-users"></i><span>Users</span></a></li>
				    <li><a href="<?php echo base_url(); ?>index.php/StarAdmin/Banner"><i class="fa fa-picture-o"></i><span>Banners</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul>
		           
		            <li><a href="<?php echo base_url(); ?>index.php/StarAdmin/AddBanner">Add Banners</a></li>		            
		          </ul>
		        </li><!-- <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="login.html">Login</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>		           
		          </ul>
		        </li>
		        
		        <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Mailbox</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="inbox.html">Inbox</a></li>
			            <li id="menu-academico-boletim" ><a href="inbox-details.html">Compose email</a></li>
		             </ul>
		        </li>
		         <li><a href="#"><i class="fa fa-cog"></i><span>System</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="404.html">404</a></li>
			            <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>
		             </ul>
		         </li>
		         <li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="product.html">Product</a></li>
			            <li id="menu-academico-boletim" ><a href="price.html">Price</a></li>
		             </ul>
		         </li>-->
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
</div>  

<!--slide bar menu end here-->
      