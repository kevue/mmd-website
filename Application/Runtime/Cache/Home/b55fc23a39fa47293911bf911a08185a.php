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
					<p >电话<span class="ph-numb">021 5943 9804</span></p>
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
					<h1><a href="/">UpSea zhangkaige ltd.</a></h1>
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
				    <li><a href="/" class="hvr-sweep-to-bottom Home">首页</a></li> 
					<li><a class="hvr-sweep-to-bottom About" href="About">关于我们</a></li> 
					<li><a class="hvr-sweep-to-bottom Services" href="Services">水果馆</a></li> 
					<!-- <li><a class="hvr-sweep-to-bottom" href="Typo">Typo</a></li> -->
<<<<<<< HEAD
					<li><a class="hvr-sweep-to-bottom Gallery" href="Gallery">水果馆</a></li> 
					<li><a class="hvr-sweep-to-bottom ContactUs" href="ContactUs">联系我们</a></li> 
=======
					<!-- <li><a class="hvr-sweep-to-bottom Gallery" href="Gallery">Gallery</a></li> --> 
					<li><a class="hvr-sweep-to-bottom ContactUs" href="ContactUs">ContactUs</a></li> 
>>>>>>> 1a5b1b4eecfcdc6f40a7ca7be284d9db39dbbcf5
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
<!--services start here-->
<div class="services">
	<div class="container">
		<div class="services-main">
			<div class="services-top">
				<h3>我们的产品</h3>
				<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.</p>
			</div>
			<div class="services-bottom">
				<div class="main-serv">
					<div class="col-md-3 main-serv-grid">
						<a href="Content"><img src="Public/images/s1.jpg" alt="" class="img-responsive"></a>
						<h4>Neque porro quisquam est</h4>
						<p>On the other hand, we denounce with righteous indignation and dislike men.</p>
					</div>
					<div class="col-md-3 main-serv-grid">
						<a href="Content"><img src="Public/images/s2.jpg" alt="" class="img-responsive"></a>
						<h4>Neque porro quisquam est</h4>
						<p>Who are so beguiled and demoralized by the charms of pleasure  moment.</p>
					</div>
					<div class="col-md-3 main-serv-grid">
						<a href="Content"><img src="Public/images/s3.jpg" alt="" class="img-responsive"></a>
						<h4>Neque porro quisquam est</h4>
						<p>Blinded by desire, that they cannot foresee the pain and trouble that bound.</p>
					</div>
					<div class="col-md-3 main-serv-grid">
						<a href="Content"><img src="Public/images/s4.jpg" alt="" class="img-responsive"></a>
						<h4>Neque porro quisquam est</h4>
						<p>Blinded by desire, that they cannot foresee the pain and trouble that bound.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="other-serv">
					<h3>其它服务</h3>
					<div class="col-md-4 other-serv-grid">
						<h4> Nam libero tempore cum soluta</h4>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
						<h4>Et harum quidem facilis distin</h4>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
						<h4>Nam libero tempore cum soluta</h4>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
					</div>
					<div class="col-md-4 other-serv-grid">
						<h4>Lorem ipsum dolor consectetur</h4>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
						<h4>Nam libero tempore cum soluta</h4>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
						<h4>Et harum quidem facilis distin</h4>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
					</div>
					<div class="col-md-4 other-serv-grid">
						<h4> Nam libero tempore cum soluta</h4>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
						<h4>Et harum quidem facilis distin</h4>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
						<h4>Nam libero tempore cum soluta</h4>
						<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--services end here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			  <div class="col-md-4 ftr-grd">
			  	 <h3>联系我们</h3>
			  	 <p>小娘们的报亭</p>
			  	 <p>小黑屋3号</p>
			  	 <p>电话: +148 5746 415</p>
			  </div>
			  <div class="col-md-4 ftr-grd">
			  	 <h3>关注我们</h3>
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
			<p>Copyright &copy; 1949-2017&nbsp;伤害凯歌国际贸易公司 版权所有<a href="http://www.cssmoban.com/" target="_blank" title=""></a></a></p>
		   </div>
		</div>
	</div>
</div>
</body>

</html>