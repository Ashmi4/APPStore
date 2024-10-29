<!DOCTYPE HTML>

<head>

<title> TouchIT App Store </title>
<link rel="icon" href="<?php echo base_url(); ?>assets/images/Click-Transparent.png" type="image/gif">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="<?php echo base_url(); ?>assets/css/stylee.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">


<link href="<?php echo base_url(); ?>assets/css/rating_review.css" rel="stylesheet" type="text/css" media="all"/>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/rating_review.js"></script> 

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.9.0.min.js"></script> 

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/move-top.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/easing.js"></script>


<script src="<?php echo base_url(); ?>assets/js/ddmenu.js"></script>

 <link href="<?php echo base_url(); ?>assets/themes/2/js-image-slider.css" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url(); ?>assets/themes/2/js-image-slider.js" type="text/javascript"></script>

    
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>


	

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
	
	
	
	
	<!-- include jQuery -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		
		<!-- for dragging/swiping/pinching, include Hammer.js -->
		<script type="text/javascript" src="http://cdn.jsdelivr.net/hammerjs/2.0.3/hammer.min.js"></script>

		<!-- for scaling UI buttons (for wide websites on small screens), include FlameViewportScale -->
		<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/lib/FlameViewportScale.js"></script>

		<!-- include Tos "R"Us -->
		<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/dist/js/jquery.tosrus.all.min.js"></script>
		<link type="text/css" media="all" rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/jquery.tosrus.all.css" />

	
<!-- fire the plugin onDocumentReady -->
		<script type="text/javascript" language="javascript">
			jQuery(function( $ ) {

				//	Add a custom filter to recognize images from lorempixel (that don't end with ".jpg" or something similar)
				$.tosrus.defaults.media.image = {
					filterAnchors: function( $anchor ) {
						return $anchor.attr( 'href' ).indexOf( 'lorempixel.com' ) > -1;
					}
				};

				$('#example-1 a').tosrus({
					buttons: 'inline',
					pagination	: {
						add			: true,
						type		: 'thumbnails'
					}
				});

				$('#example-2 a').tosrus({
					pagination	: {
						add			: true
					},
					caption		: {
						add			: true
					},
					slides		: {
						scale		: 'fill'
					}
				});

				$('#example-3 a').tosrus();

				$('#example-4').tosrus({
					infinite	: true,
					slides		: {
						visible		: 3
					}
				});

				$('#example-5').tosrus({
					buttons		: false,
					pagination	: {
						add			: true
					},
					slides		: {
						scale		: 'fill'
					}
				});

			});
		</script>

	
	<style>
	.fast-download-box {
    text-align: center;
    padding: 15px 10px;
}
.fast-download-box h1 {
    font-weight: normal;
    font-size: 26px;
    line-height: 36px;
}
:root .dotting {
    margin-right: 12px;
}
.dotting {
    display: inline-block;
    min-width: 3px;
    min-height: 3px;
    box-shadow: 3px 0 currentColor,8px 0 currentColor,13px 0 currentColor;
    -webkit-animation: dot 2.8s infinite step-start both;
    animation: dot 2.8s infinite step-start both;
}
.fast-download-box .file {
    color: #87bd23;
    display: block;
    font-size: 20px;
}
.fast-download-box .file .fsize {
    display: inline-block;
    direction: ltr;
}
.fast-download-box p {
    line-height: 36px;
    font-size: 16px;
}

.saving {
  font-size: 40px;
}

.saving span {
  font-size: 50px;
  animation-name: blink;
  animation-duration: 1.4s;
  animation-iteration-count: infinite;
  animation-fill-mode: both;
}

.saving span:nth-child(2) {
  animation-delay: .2s;
}

.saving span:nth-child(3) {
  animation-delay: .4s;
}

@keyframes blink {
  0% {
    opacity: .2;
  }
  20% {
    opacity: 1;
  }
  100% {
    opacity: .2;
  }
}

</style>
	
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
		<?php 
							
			if (!empty($_SESSION["uName"])){ ?>
			
			 <?php	
           	          $result2 =array();
			foreach($u_app->Result() as $row){
				
				
				?>
				
					<?php

					$result2[] = array($row->wid);  
					 ?>
					
				
				<?php }  ?>		
		  
			
			<?php }
						
						?>
		 <?php
				 
		 foreach($view->Result() as $row) {
		if (!empty($_SESSION["uName"])){
							if($result2=='')
							{
								
							}
							else{
								if(in_array(array($row->ref), $result2)){      
				
						$a='1';	
						}
						
						else {
							$a='0';     
						}
								
							}
						
						}

		 ?>
		  <div class="main">
   	 <div class="wrap">
   	 	<div class="section group">
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">	
				  
					<div class="grid images_3_of_2">
						<img src="<?php echo $row->app_image; ?>"  alt="">
				  </div>
				 
				<div class="desc span_3_of_2">
					<h2><?php echo $row->appname; ?> </h2>
					<p><?php echo $row->name; ?></p> 
					
					
														<?php echo form_open_multipart('StarAdmin/savewishlist'); ?>
														<div>
								<span><input name="id" value="<?php echo $row->ref; ?>" type="hidden" class="textbox" ></span>
								</div>
								<input name="name" value="<?php echo $row->name; ?>" type="hidden" class="textbox" >
								<?php 
							
			if (!empty($_SESSION["uName"])){ ?>
								 <?php if($a=='1'){?>
						<a href="<?php echo base_url();?>Wishlist" style="text-decoration:none; color:black;"><img src="<?php echo base_url(); ?>assets/images/48X48.png" style="float: right;margin-top: -80px;" />		
	 </a>
								
								 <?php } else{ ?>
								 <input type="image" src="<?php echo base_url(); ?>assets/images/Heart2.png" alt="Submit" style="float: right;margin-top: -80px;" class="user2" >

			 <?php } ?>
		 <?php } else{ ?>
		   <input type="image" src="<?php echo base_url(); ?>assets/images/Heart2.png" alt="Submit" style="float: right;margin-top: -80px;" class="user2" >

		  <?php } ?>
					
														<?php echo form_close(); ?>
					
					
					<div class="available newspaper">
						<ul>
						  <li><span><center><img src="<?php echo base_url(); ?>assets/images/User.png" class="user1"/></center></span></li>
						   <li><span><center>Ratings</center></span></li>
						   <li><span><center><?php echo $row->rank; ?><i class="fa fa-star" aria-hidden="true"></i></center></span></li>
						  
						   
						   <li><span><center><img src="<?php echo base_url(); ?>assets/images/Installs.png" class="user1"/></center></span></li>
						    <li><span><center>Install</center></span></li>
							 <li><span><center><?php echo $row->download; ?>K</center> </span></li></center>
							 
						    <li><span><center><img src="<?php echo base_url(); ?>assets/images/Version.png" class="user1"/></center></span></li>
						    <li><span><center>Version</center></span></li>
							 <li><span><center><?php echo $row->version; ?> </center></li></center>
						 
						  
					    </ul>
					</div>
				<div class="share-desc">
					<div class="share">
								
					</div>
				
			<!--<div class="box">
	<a class="buttonn" href="#popup1">Add Reviews</a>
</div>--></br></br>

<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayTextt");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "Add Your Rating";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "Add Your Rating";
	}
} 
</script>

<script>
function loadFrame(elm){
    var frame1 = document.getElementById('frame1');
    frame1.src = elm.dataset.src;
 
}


</script>








						
					<div class="clear"></div>
				</div>
				 <div class="wish-list">
				 	


				 </div>
			</div>
			
			<div class="clear"></div>
		  </div>
		  <br>
		  
		  
		  
		
	   
	  <div class="product-details">	
				  
					
				<div class="fast-download-box">
                <h1>
                  <p class="saving" style="font-size: 25px;">Downloading<span>.</span><span>.</span><span>.</span></p>
                    <span class="file"><?php echo $row->pckagename; ?> </span>
                </h1>
                <p><a rel="nofollow" href="<?php echo base_url();?>How-to-install-apk">How to install APK / XAPK file</a></p>
                <p>
                    
                    If the download doesn't start,
                    <div class="button" id="b1" data-src="<?php echo $row->apk_link; ?>" onClick="loadFrame(this)" ><span><a href="#"  style="font-size: 21px;">click here</a></span></div>
    <iframe id="frame1" src="<?php echo $row->apk_link; ?>" scrolling="no" style="display: none"></iframe>	
                   
                    
                </p>
            </div>
				
				
				
			<div class="clear"></div>
		  </div>
	   
	   
	 
        
   
	   <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-34731274-1']);
    _gaq.push(['_trackPageview']);
    _gaq.push(['_trackEvent', 'sharing', 'viewed full-screen', 'snippet ObBxV',0,true]);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
	<script type="text/javascript">
    (function($) { 
        $('#theme_chooser').change(function(){
            whichCSS = $(this).val();
            document.getElementById('snippet-preview').contentWindow.changeCSS(whichCSS);
        });
    })(jQuery);
    </script>

	   
	   
   </div>
  		<div class="rightsidebar span_3_of_1 sidebar">

					<h2>Similar <a href="<?php echo base_url();?>Category/<?php echo $row->name; ?>" class="see" style="color: #0e516c;">See More</a></h2>
					<?php $a = $row->appid;
						$aaa = $row->ref;
					


					?>
					 	<?php
                         	 $i=0; 				
			foreach($Similer->Result() as $row){
				
				if($row->appid == $a AND $row->ref !== $aaa){
					 
				?>

						<div class="special_movies">
					 	   <div class="movie_poster">
					 		  <a href="<?php echo base_url(); ?>Apps/details/<?php echo $row->ref; ?>"><center><img src="<?php echo $row->app_image; ?>" alt=""></center></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="<?php echo base_url(); ?>Apps/details/<?php echo $row->ref; ?>"><?php echo $row->appname; ?></a></h3>
								 <?php if ($row->rank == 1){ ?>
								   <p><span class="staricon">
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star-o" aria-hidden="true"></i>
								   <i class="fa fa-star-o" aria-hidden="true"></i>
								   <i class="fa fa-star-o" aria-hidden="true"></i>
								   <i class="fa fa-star-o" aria-hidden="true"></i>
								   </span> </p><?php } ?>
								   <?php if ($row->rank == 2){ ?>
								   <p><span class="staricon">
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star-o" aria-hidden="true"></i>
								   <i class="fa fa-star-o" aria-hidden="true"></i>
								   <i class="fa fa-star-o" aria-hidden="true"></i>
								   </span> </p><?php } ?>
								   <?php if ($row->rank == 3){ ?>
								   <p><span class="staricon">
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star-o" aria-hidden="true"></i>
								   <i class="fa fa-star-o" aria-hidden="true"></i>
								   </span> </p><?php } ?>
								   <?php if ($row->rank == 4){ ?>
								   <p><span class="staricon">
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star-o" aria-hidden="true"></i>
								   </span> </p><?php } ?>
								   <?php if ($row->rank == 5){ ?>
								   <p><span class="staricon">
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star" aria-hidden="true"></i>
								   <i class="fa fa-star" aria-hidden="true"></i>
								   </span> </p><?php } ?>
								    
								 </div>
								
									
								<div class="clear"></div>
					 		</div>
						<?php
				
				if($i==1) break;
                  $i++;
				
				}
				
				
				}?>		
						
					 		<!--<div class="special_movies">
					 	   <div class="movie_poster">
					 		  <a href="#"><img src="<?php //echo base_url(); ?>assets/images/aaa.png" alt=""></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="#">Coraline</a></h3>
								   <p><span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span> </p>
								   </div>
								<div class="clear"></div>
					 		</div>	
					 		<div class="special_movies">
					 	   <div class="movie_poster">
					 		  <a href="#"><img src="<?php //echo base_url(); ?>assets/images/b.jpg" alt=""></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="#">Eclipse</a></h3>
								   <p><span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span> </p>
								  </div>
								<div class="clear"></div>
					 		</div>	
					 		<div class="special_movies">
					 	   <div class="movie_poster">
					 		  <a href="#"><img src="<?php //echo base_url(); ?>assets/images/cf035f66b3066f61348dc3127d4e788b.jpg" alt=""></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="preview.html">Priest 3D</a></h3>
								   <p><span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span> </p>
								   </div>
								<div class="clear"></div>
					 		</div>	
					 		<div class="special_movies">
					 	    <div class="movie_poster">
					 		  <a href="#"><img src="<?php //echo base_url(); ?>assets/images/Gmail-icon.png" alt=""></a>
					 		 </div>
					 		   <div class="movie_desc">
							    <h3><a href="#">Sorority Wars</a></h3>
								   <p><span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-o" aria-hidden="true"></i></span> </p>
								   </div>
								<div class="clear"></div>
					 		</div>	-->		 
 					   </div>
 		 		 </div>
			<?php } ?>
   	 		</div>
		
        </div>
		 <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>	
		