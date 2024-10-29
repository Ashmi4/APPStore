<!DOCTYPE HTML>

<head>

<title> TouchIT App Store</title>
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

	<!-- css for read more button -->
	
	
	<script>
	//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
}
</script>
	
	
	<style>
	


.buttonn {
  font-size: 1em;
  padding: 10px;
 color: #080808;

  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}



.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}

.popup .content {
  max-height: 30%;
  overflow: auto;
  
}

.clos
{
 float: right;
    font-size: 27px;
	margin-right: 17px;
}



</style>
	
	
	
	<style>
	
a:visited {
	
    font-family: Helvetica;
    font-size: 14px;
}
a.morelink {
	text-decoration:none;
	outline: none;
	font-family: Helvetica;
	color: #0e516c;
	 font-size: 20px;
}
.morecontent span {
	display: none;
	font-family: Helvetica;
	    color: #9c9c9c;
	
}

</style>

<!-- End for readmore css -->

<!-- CSS for this demo page -->
		<style type="text/css" media="all">
			
			
			hr {
				margin: 75px -20px;
				height: 0;
				padding: 0;
				border: 0;
				border-top: 1px solid #ccc;
			}
			pre {
				border-left: 5px solid #ccc;
				width: 100%;
				padding: 10px 0 10px 20px;
				overflow: auto;
			}

			#wrapper {
				background-color: #fff;
				width: 70%;
				min-width: 675px;
				padding: 50px 50px 100px 50px;
				margin: 0 auto;
				border: 1px solid #ccc;
				box-shadow: 0 0 5px #ccc;
			}
			#intro p {
				font-size: 18px;
				line-height: 24px;
			}

			.thumbs,
			.gallery,
			.links,
			.slider {
				
				margin: 0px 0px;
			}
			.thumbs {
				padding: 10px 30px 30px 50px;
				text-align: center;
			}
			.thumbs:after {
				content: " ";
				display: block;
				clear: both;
			}
			.thumbs a {
				display: inline-block;
				margin: 20px 20px 0 0;
			}
			thumbs img
			{
				width: 130px;
				height: 130px;
			}
			.thumbs img,
			.gallery img {
				    /* border: 1px solid #ccc; */
    background: #fff;
    padding: 0px;
    height: 100%;
	width:75%;
			}
			.thumbs a:hover img {
				border-color: #999;
		
		}
			
			.slider {
				height: 475px;
			}
			.links {
				padding: 30px 50px;
			}
			.links a {
				line-height: 30px;
			}

			.hidden {
				display: none;
			}
		</style>

		
		<style>
		.carousel-control.left,.carousel-control.right  {background:none;width:25px;}
.carousel-control.left {left:-18px; color: #626262;}
.carousel-control.right {right:-18px;color: #626262;}
.broun-block {
   
  
}
.block-text {
    background-color: #fff;
    border-radius: 5px;
  
    color: #626262;
    font-size: 14px;
    margin-top: 27px;
    padding: 0px 18px;
}

.sprite {
	background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAeUCAYAAAAU3UTMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjY1MzJERUNDRjBEMTExRTM4N0ZFOUUyNENEOTZCNjVCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjY1MzJERUNERjBEMTExRTM4N0ZFOUUyNENEOTZCNjVCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NjUzMkRFQ0FGMEQxMTFFMzg3RkU5RTI0Q0Q5NkI2NUIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NjUzMkRFQ0JGMEQxMTFFMzg3RkU5RTI0Q0Q5NkI2NUIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz4/ZdnrAAAydElEQVR42uydCbgUxbn3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');
}
.sprite-i-triangle {
    background-position: 0 -1298px;
    height: 44px;
    width: 50px;
}
.block-text ins {
    bottom: -44px;
    left: 50%;
    margin-left: -60px;
}


.block {
    display: block;
}
.zmin {
    z-index: 1;
}
.ab {
    position: absolute;
}

.person-text {
    padding: 10px 0 0;
    text-align: center;
    z-index: 2;
}

.rel {
    position: relative;
}
</style>
		
		 <style>

	
ul.graph li
{
	margin-bottom: .5em;
	padding: .2em;
	background: #600;
	color: #fff;
}
	
ul.graph li.percent20
{
	background-color: #49ADEC;
    width: 100%;
	height: 25px;
}
	
ul.graph li.percent40
{
	background-color: #6DBDF0;
    width: 75%;
	height: 25px;
}
	
ul.graph li.percent60
{
	background-color:#92CEF4;
	width: 50%;
	height: 25px;
}
	
ul.graph li.percent80
{
	background-color:#B6DEF7;
	width: 30%;
	height: 25px;
}
ul.graph li.percent100
{
	background-color:#DBEFFB;
	width: 15%;
	height: 25px;
}
.percent
{
	float: left; margin-left: -33px;color: #0e516c;
}
</style> 
	
<!-- script for read more button -->

	<style>
	.ratingg {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.ratingg:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.ratingg:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.ratingg:not(:checked) > label:before {
    content: '★ ';
}

.ratingg > input:checked ~ label {
   color: #0e516c;
    text-shadow: 1px 1px #0e516c, 2px 2px #0e516c, 0.1em 0.1em 0.2em rgba(0,0,0,.5);
}

.ratingg:not(:checked) > label:hover, .ratingg:not(:checked) > label:hover ~ label {
    color: #0e516c;
    text-shadow: 1px 1px #0e516c, 2px 2px #0e516c, 0.1em 0.1em 0.2em rgba(0,0,0,.5);
}

.ratingg > input:checked + label:hover,
.ratingg > input:checked + label:hover ~ label,
.ratingg > input:checked ~ label:hover,
.ratingg > input:checked ~ label:hover ~ label,
.ratingg > label:hover ~ input:checked ~ label {
     color: #0e516c;
    text-shadow: 1px 1px #0e516c, 2px 2px #0e516c, 0.1em 0.1em 0.2em rgba(0,0,0,.5);
}

.ratingg > label:active {
    position:relative;
    top:2px;
    left:2px;
}
</style>

<script>
$(document).ready(function() {
	var showChar = 500;
	var ellipsestext = "...";
	var moretext = "Read More";
	var lesstext = "less";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});
</script>
<!-- End for script -->

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
					<h2><?php echo $row->appname;?> </h2>
					<p><?php echo $row->name;
					$abc = $row->name;
					
					?></p> 
					
					
														<?php echo form_open_multipart('StarAdmin/savewishlist'); ?>
														<div>
								<span><input name="id" value="<?php echo $row->ref;?>" type="hidden" class="textbox" ></span>
								</div>
								<input name="name" value="<?php echo $row->name;?>" type="hidden" class="textbox" >
								<?php 
							
			if (!empty($_SESSION["uName"])){ ?>
								 <?php if($a=='1'){?>
						<a href="<?php echo base_url();?>Wishlist" style="text-decoration:none; color:black;"><img src="<?php echo base_url(); ?>assets/images/48X48.png" style="float: right;margin-top: -80px;"/>		
	 </a>
								
								 <?php } else{ ?>
								 <input type="image" src="<?php echo base_url();?>assets/images/Heart2.png" alt="Submit" style="float: right;margin-top: -80px;" class="user2" >

			 <?php } ?>
		 <?php } else{ ?>
		   <input type="image" src="<?php echo base_url();?>assets/images/Heart2.png" alt="Submit" style="float: right;margin-top: -80px;" class="user2" >

		  <?php } ?>
					
														<?php echo form_close();?>
					
					
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

function Hey(){
   
    document.myform.submit();
}
</script>






<a  id="displayTextt"  href="javascript:toggle();" class="ratinggg" style="text-decoration:none;"> Add Your Rating</a>	

 

 
			

 <form name="myform" action="<?php echo base_url(); ?>loginn1" method="POST" target="_top">

<input name="id" value="<?php echo $row->ref; ?>" type="hidden" class="textbox" >
<input name="name" value="<?php echo $row->name; ?>" type="hidden" class="textbox" >
<input name="image" value="<?php echo $row->app_image; ?>" type="hidden" class="textbox" >
<input name="aname" value="<?php echo $row->appname; ?>" type="hidden" class="textbox" >
<input name="p_name" value="<?php echo $row->pckagename; ?>" type="hidden" class="textbox" >
<div class="button"><span><input type="submit" value="Download" class="down" /></span>

</div>	
</form>	
<div id="toggleText" style="display: none">

<div class="contact-form">
<?php echo form_open_multipart('StarAdmin/addrating'); ?>
				  <span><h4>Your Rating </h4>
					 					<div class="ratingg">
							   	<input type="radio" id="star5" name="rating" value="5" required/><label for="star5" title="Rocks!">5 stars</label>
								<input type="radio" id="star4" name="rating" value="4" required/><label for="star4" title="Pretty good">4 stars</label>
								<input type="radio" id="star3" name="rating" value="3" required/><label for="star3" title="Meh">3 stars</label>
								<input type="radio" id="star2" name="rating" value="2" required/><label for="star2" title="Kinda bad">2 stars</label>
								<input type="radio" id="star1" name="rating" value="1" required/><label for="star1" title="Sucks big time">1 star</label>
							</div> 
				  </span>
				  
							<div>
								<span><input name="id" value="<?php echo $row->ref;?>" type="hidden" class="textbox" required></span>
								</div><br>
							<div>
				  <span><label>Your Review</label></span>
				  
								<span><textarea name="subject"  value="<?php echo set_value('subject'); ?>" required> </textarea></span>
							</div>
					    	
						    <div>
								</div>
						   
						    
						  <div>
								<a href="javascript:toggle();" class="closebtn" style="text-decoration:none;"> Close</a>
								<span><input type="submit" value="Submit"  class="button1"></span>
								
						 		
							</div>
							<?php echo form_close(); ?>
				  </div>

</div>
						
					<div class="clear"></div>
				</div>
				 <div class="wish-list">
				 	


				 </div>
			</div>
			
			<div class="clear"></div>
		  </div>
		  <br>
		  <div id="example-4" class="gallery">
				
				<?php
     if($row->app_video == ''){?>
      <?php
			 $array =  explode(',',$row->screenshot);
				
			foreach ($array as $item) {
			 
				echo "<img src=$item>";?>
			 
      
      
    
    
      <?php } ?>
      <?php }
      else{
		  
		  	?>
			<iframe  height="100%"
src="<?php echo $row->app_video; ?>">
</iframe>
				<?php
			 $array =  explode(',',$row->screenshot);
				
			foreach ($array as $item) {
			 
				echo "<img src=$item>";?>
			 
      
      
    
    
      <?php } } ?>
				
				
				
			
			
			

				</div>
		  
		  
		<div class="product_desc comment more" style="color: #9c9c9c;">	
			 <h2>Details :</h2>
			 <?php echo $row->app_description; ?>
	</div>
	   
	   
	  <div class="product-details">	
				  
					<div class="grid images_3_of_2_1">
					
						<span style="font-size: 87px;font-weight: 300;"> <?php echo $row->rank; ?>  <img src="<?php echo base_url(); ?>assets/images/star.png"  style="margin-top: 0%;margin-left: -2%;"/></span>
					<h5 style="font-size:14px;margin-top: -10px;"> <i class="fa fa-user" aria-hidden="true"></i> <?php echo $row->count; ?> Votes </h5>
				  </div>
				<div class="desc span_3_of_2">
					
					<div class="available">
						<ul class="graph">
									<?php if ($row->rank == 1){ ?>
										<span><h4 class="percent"> 5 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent80"></li>
										<span><h4 class="percent"> 4 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent60"></li>
										<span><h4 class="percent"> 3 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent40"></li>
										<span><h4 class="percent"> 2 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent80"></li>
										<span><h4 class="percent"> 1 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent20"></li>										
									<?php } ?>
									<?php if ($row->rank == 2){ ?>
										<span><h4 class="percent"> 5 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent40"></li>
										<span><h4 class="percent"> 4 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent20"></li>
										<span><h4 class="percent"> 3 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent60"></li>
										<span><h4 class="percent"> 2 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent80"></li>
										<span><h4 class="percent"> 1 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent100"></li>										
									<?php } ?>
									<?php if ($row->rank == 3){ ?>
										<span><h4 class="percent"> 5 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent60"></li>
										<span><h4 class="percent"> 4 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent40"></li>
										<span><h4 class="percent"> 3 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent20"></li>
										<span><h4 class="percent"> 2 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent80"></li>
										<span><h4 class="percent"> 1 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent100"></li>									
									<?php } ?>
									<?php if ($row->rank == 4){ ?>
										<span><h4 class="percent"> 5 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent40"></li>
										<span><h4 class="percent"> 4 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent20"></li>
										<span><h4 class="percent"> 3 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent60"></li>
										<span><h4 class="percent"> 2 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent80"></li>
										<span><h4 class="percent"> 1 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent100"></li>									
									<?php } ?>
									<?php if ($row->rank == 5){ ?>
										<span><h4 class="percent"> 5 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent20"></li>
										<span><h4 class="percent"> 4 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent40"></li>
										<span><h4 class="percent"> 3 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent60"></li>
										<span><h4 class="percent"> 2 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent80"></li>
										<span><h4 class="percent"> 1 <i class="fa fa-star" aria-hidden="true"></i></h4></span><li class="percent100"></li>									
									<?php } ?>
</ul>
					</div>
				
				 <div class="wish-list">
				 	
				 </div>
			</div>
			<div class="clear"></div>
		  </div>
	   
	   
	 
        <div>
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            
               <div class="carousel-inner">
                    <?php $i=1;
					$j=0;
					?>
					<?php foreach($review->Result() as $row) {
								
							$j=count($review->Result());	

					?>
                        <?php if($i%3==1){ ?><div class="item <?php if($i==1){ ?>active<?php } ?>"><?php } ?>
                	    <div class="col-md-4 col-sm-6">
						
        				    <div class="block-text rel zmin">
						        <a title="" href="#"></a>
							    <div class="mark" style="background: none;">My rating: 
								<?php if ($row->rating == 1){ ?>
								<span class="rating-input">
								<span data-value="0" class="glyphicon glyphicon-star"></span>
								<span data-value="1" class="glyphicon glyphicon-star-empty"></span>
								<span data-value="2" class="glyphicon glyphicon-star-empty"></span>
								<span data-value="3" class="glyphicon glyphicon-star-empty"></span>
								<span data-value="4" class="glyphicon glyphicon-star-empty"></span>								
								</span>
								<?php } ?>
								<?php if ($row->rating == 2){ ?>
								<span class="rating-input">
								<span data-value="0" class="glyphicon glyphicon-star"></span>
								<span data-value="1" class="glyphicon glyphicon-star"></span>
								<span data-value="2" class="glyphicon glyphicon-star-empty"></span>
								<span data-value="3" class="glyphicon glyphicon-star-empty"></span>
								<span data-value="4" class="glyphicon glyphicon-star-empty"></span>								
								</span>
								<?php } ?>
								<?php if ($row->rating == 3){ ?>
								<span class="rating-input">
								<span data-value="0" class="glyphicon glyphicon-star"></span>
								<span data-value="1" class="glyphicon glyphicon-star"></span>
								<span data-value="2" class="glyphicon glyphicon-star"></span>
								<span data-value="3" class="glyphicon glyphicon-star-empty"></span>
								<span data-value="4" class="glyphicon glyphicon-star-empty"></span>								
								</span>
								<?php } ?>
								<?php if ($row->rating == 4){ ?>
								<span class="rating-input">
								<span data-value="0" class="glyphicon glyphicon-star"></span>
								<span data-value="1" class="glyphicon glyphicon-star"></span>
								<span data-value="2" class="glyphicon glyphicon-star"></span>
								<span data-value="3" class="glyphicon glyphicon-star"></span>
								<span data-value="4" class="glyphicon glyphicon-star-empty"></span>								
								</span>
								<?php } ?>
								<?php if ($row->rating == 5){ ?>
								<span class="rating-input">
								<span data-value="0" class="glyphicon glyphicon-star"></span>
								<span data-value="1" class="glyphicon glyphicon-star"></span>
								<span data-value="2" class="glyphicon glyphicon-star"></span>
								<span data-value="3" class="glyphicon glyphicon-star"></span>
								<span data-value="4" class="glyphicon glyphicon-star"></span>								
								</span>
								<?php } ?>
								</div>
						        <p><?php echo $row->review; ?></p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel ">
				               <img class="images" src="<?php echo $row->userimage; ?>"/>
							
								<a title="" href="#"><?php echo $row->username; ?></a>
								<i><?php echo $row->school; ?></i>
							</div>
							
						</div>
						
                        <?php if($i%3==0){ ?></div><?php } $i++; ?>
            			<?php } ?>
                       <?php If($j%3!=0){ echo '</div>';} ?>
					   </div>
               
				
            </div>
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

					<h2>Similar <a href="<?php echo base_url();?>Category/<?php echo $abc; ?>" class="see" style="color: #0e516c;">See More</a></h2>
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
							    <h3><a href="<?php echo base_url(); ?>index.php/StarAdmin/preview/<?php echo $row->ref; ?>"><?php echo $row->appname; ?></a></h3>
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
				
				if($i==4) break;
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
		