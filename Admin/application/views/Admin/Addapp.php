<script src="<?php echo base_url(); ?>assets/dropzone.js"></script>
<style>
#fade{
    display: none;
    position: fixed;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: #000;
    z-index:1001;
    -moz-opacity: 0.7;
    opacity:.70;
    filter: alpha(opacity=70);
}
#light{
    display: none;
    position: absolute;
    top: 17%;
    left: 45%;
    width: 541px;
    height: 575px;
    margin-left: -150px;
    margin-top: -100px;                 
    padding: 10px;
    border: 2px solid #FFF;
    
    z-index:1002;
    overflow:visible;
    text-align: center;
}
</style>
<script>
function lightbox_open(){
    window.scrollTo(0,0);
    document.getElementById('light').style.display='block';
    document.getElementById('fade').style.display='block';  
}
</script>
<script>
function lightbox_close(){
    document.getElementById('light').style.display='none';
    document.getElementById('fade').style.display='none';
}
window.document.onkeydown = function (e)
{
    if (!e){
        e = event;
    }
    if (e.keyCode == 27){
        lightbox_close();
    }
}
</script>
 <link href="<?php echo base_url(); ?>assets/dropzone.css" rel="stylesheet">
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


<div class="login-block1">

<div class="pro-head1">
    		<h2>Add GOOGLE App</h2>
    	</div>
		<hr>
<a href="#"><div class="hh1"  onclick="lightbox_open();">Add GOOGLE Apps</div>  </a> 
<div class="login-block1" id="light">
<div class="pro-head1">
    		<h2>Add New App</h2>
    	</div>
		<hr>
			<?php echo form_open_multipart('StarAdmin/googleeapp'); ?>
		<label>Select Category:</label>
																							
											<select class="form-control" name="appid" value="<?php echo set_value('appid'); ?>" required>											
				                                <option value="<?php echo set_value('appid'); ?>">Select Category</option>
												<?php foreach($active->Result() as $row){?>
				                                <option><?php echo $row->id; ?><?php echo $row->name; ?></option>
				                               		<?php } ?>                                
				                            </select>
					</br>	
<label>Application Name:</label> 
					<input type="text" name="link" placeholder="Add app Name..">					
                      <label>Application Package name:</label> 
					<input type="text" name="url" placeholder="Add Package name..">
					 
					</br></br></br>
					<input type="submit" value="Add Application">	
										
				<?php echo form_close(); ?>	
		
			
			</div>


<div id="fade" onClick="lightbox_close();"></div> 
					<?php echo form_open_multipart('StarAdmin/Saveapp'); ?>
		
											<label>Select Category:</label>
																							
											<select class="form-control" name="appid" value="<?php echo set_value('appid'); ?>" required>											
				                                <option value="<?php echo set_value('appid'); ?>">Select Category</option>
												<?php foreach($active->Result() as $row){?>
				                                <option><?php echo $row->id; ?><?php echo $row->name; ?></option>
				                               		<?php } ?>                                
				                            </select>
										</br>
									
                      <label>Application Name :</label> 
					<input type="text" name="appname" value="<?php echo set_value('appname'); ?>" placeholder="Name">
					 <label>Application Package Name :</label> 
					<input type="text" name="pckagename" value="<?php echo set_value('pckagename'); ?>" placeholder="Name">
					
					 <label>Icon :</label>
					<input  name="app_image" value="<?php echo set_value('app_image'); ?>" type="file" class="file-styled"><span style="-moz-user-select: none;" class="filename"></span>
						<label>Apk File :</label>
					<input name="apk_link" value="<?php echo set_value('apk_link'); ?>" type="file" class="file-styled"><span style="-moz-user-select: none;" class="filename"></span>
									
						
					<label>screenshot:</label>
					<input  name="screenshot" value="<?php echo set_value('screenshot'); ?>" type="file" class="file-styled"><span style="-moz-user-select: none;" class="filename"></span>
						
					<label>Video :</label>
					<input name="app_video" value="<?php echo set_value('app_video'); ?>" type="file" class="file-styled"><span style="-moz-user-select: none;" class="filename"></span>
											
					 <label>Description :</label>
					<textarea class="textarea1" name ="app_description" value="<?php echo set_value('app_description'); ?>" rows="5" cols="15" placeholder="Enter your Description here"></textarea>
						<label>Price :</label> 
					<input type="text" name="price" value="<?php echo set_value('price'); ?>" placeholder="Price">
						
					<div class="forgot-top-grids">
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" value="Add Application">	
						<?php echo form_close(); ?>
							
				
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
		        <li id="menu-comunicacao" class="active" ><a href="<?php echo base_url(); ?>index.php/StarAdmin/App"><i class="fa fa-android"></i><span>Applications</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		            <li id="menu-mensagens" style="width: 120px" ><a href="<?php echo base_url(); ?>index.php/StarAdmin/Addapp">Add App</a>		              
		            </li>
		           
		          </ul>
		        </li>
		          <li><a href="<?php echo base_url(); ?>index.php/StarAdmin/Users"><i class="fa fa-users"></i><span>Users</span></a></li>
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
      