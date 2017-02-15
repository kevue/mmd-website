<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<link href="Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="Public/js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
</script>
<meta name="keywords" content="Agrom Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--Google Fonts-->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="Public/js/move-top.js"></script>
<script type="text/javascript" src="Public/js/easing.js"></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smoth-scrolling -->
<script src="Public/js/menu_jquery.js"></script>

<!---pop-up-box---->
<link href="Public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="Public/js/jquery.magnific-popup.js" type="text/javascript"></script>
<!---//pop-up-box---->
 <script>
	$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		fixedBgPos: true,
		overflowY: 'auto',
		closeBtnInside: true,
		preloader: false,
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
																	
	});
</script>		
</head>
<body>
<!--header start here-->
<div class="header">
	<div class="container">
		<div class="header-main">
			<div class="head-left">
				<div class="phone">
					<p>Phone<span class="ph-numb">021 5943 9804</span></p>
				</div>
				<!-- <div class="search">		
					<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i> </i></a>
				</div> -->
				<div id="small-dialog" class="mfp-hide">
					<div class="search-top">
						<div class="login">
							<input type="submit" value="">
							<input type="text" value="Search Here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">		
						</div>
						<p>Agrom</p>
					</div>				
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="logo">
					<h1><a href="/">shanghai zhangkaige ltd.</a></h1>
				</div>
				<!-- <div class="header-login">
					<div class="top-nav-right">
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
							<div id="loginBox">                
								<form id="loginForm">
									<fieldset id="body">
										<fieldset>
											<label for="email">Email Address</label>
											<input type="text" name="email" id="email">
										</fieldset>
										<fieldset>
											<label for="password">Password</label>
											<input type="password" name="password" id="password">
										</fieldset>
										<input type="submit" id="login" value="Sign in">
										<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
									</fieldset>
									<span><a href="#">Forgot your password?</a></span>
								</form>
							</div>
						</div>
					</div>
				</div> -->
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--header end here-->
<!--top nav start here-->
<div class="top-navg-main">
	<div class="container">
	    <div class="top-navg">
	    	           <span class="menu"> <img src="Public/images/icon.png" alt=""/></span>
				<ul class="res">
				    <li><a href="/" class="hvr-sweep-to-bottom Home">Home</a></li> 
					<li><a class="hvr-sweep-to-bottom About" href="About">About</a></li> 
					<li><a class="hvr-sweep-to-bottom Services" href="Services">Services</a></li> 
					<!-- <li><a class="hvr-sweep-to-bottom" href="Typo">Typo</a></li> -->
					<!-- <li><a class="hvr-sweep-to-bottom Gallery" href="Gallery">Gallery</a></li> --> 
					<li><a class="hvr-sweep-to-bottom ContactUs" href="ContactUs">ContactUs</a></li> 
				 </ul>
					<!-- script-for-menu -->
						 <script>
						   var page = window.location.pathname.substring(1) || 'Home';
						   $('.'+page).css('background-color','#956295').css('color','#FFF');
						   $( "span.menu" ).click(function() {
							 $( "ul.res" ).slideToggle( 300, function() {
							 // Animation complete.
							  });
							 });
						</script>
		        <!-- /script-for-menu -->
		   </div>
	 </div>
</div>
<!--top nav end here-->

<!--banner start here-->
<div class="banner-two">
</div>
<!--banner end here-->
<!--gallery start here-->
<div class="gallery">
	<div class="container">
		<div class="gallery-top">
			<h3>Gallery</h3>
			<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances.</p>
		</div>
		<div class="gallery-bottom">
			<div class="col-md-4 gallery-grid">
				<div class="project-eff">
					<div id="nivo-lightbox-demo"> <p> <a href="images/g1.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
					<img class="img-responsive" src="Public/images/g1.jpg" alt="">
				</div>
			</div>
			<div class="col-md-4 gallery-grid">
				<div class="project-eff">
					<div id="nivo-lightbox-demo"> <p> <a href="images/g2.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
					<img class="img-responsive" src="Public/images/g2.jpg" alt="">
				</div>
			</div>
			<div class="col-md-4 gallery-grid">
				<div class="project-eff">
					<div id="nivo-lightbox-demo"> <p> <a href="images/g3.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
					<img class="img-responsive" src="Public/images/g3.jpg" alt="">
				</div>
			</div>
			<div class="col-md-4 gallery-grid">
				<div class="project-eff">
					<div id="nivo-lightbox-demo"> <p> <a href="images/g4.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
					<img class="img-responsive" src="Public/images/g4.jpg" alt="">
				</div>
			</div>
			<div class="col-md-4 gallery-grid">
				<div class="project-eff">
					<div id="nivo-lightbox-demo"> <p> <a href="images/g5.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
					<img class="img-responsive" src="Public/images/g5.jpg" alt="">
				</div>
			</div>
			<div class="col-md-4 gallery-grid">
				<div class="project-eff">
					<div id="nivo-lightbox-demo"> <p> <a href="images/g6.jpg"data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover1"> </span></a> </p></div>     
					<img class="img-responsive" src="Public/images/g6.jpg" alt="">
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<link rel="stylesheet" type="text/css" href="Public/css/magnific-popup.css">
<script type="text/javascript" src="Public/js/nivo-lightbox.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
	});
</script>


<!--gallery end here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			  <div class="col-md-4 ftr-grd">
			  	 <h3>Get in Touch</h3>
			  	 <p>8901 ibero  Road</p>
			  	 <p>Nam libero tempore</p>
			  	 <p>Phone: +148 5746 415</p>
			  </div>
			  <div class="col-md-4 ftr-grd">
			  	 <h3>Follow Us</h3>
			  	 <ul>
			  	 	<li><a href="#"><span class="fa"> </span></a></li>
			  	 	<li><a href="#"><span class="tw"> </span></a></li>
			  	 	<li><a href="#"><span class="g"> </span></a></li>
			  	 	<li><a href="#"><span class="in"> </span></a></li>
			  	 </ul>
			  </div>
			  <div class="col-md-4 ftr-grd">
			  	 <h3>Join Our Newsletter</h3>
			  	 <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
			  	<label class="hvr-wobble-bottom"> <input type="submit" value="Send"></label>
			  </div>
			<div class="clearfix"> </div>
			<div class="copy-right">
			<p>Copyright &copy; 2015.Company name All rights reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title=""></a> - Collect from <a href="http://www.cssmoban.com/" title="" target="_blank"></a></p>
		   </div>
		</div>
	</div>
</div>
</body>


</html>