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
					<li><a class="hvr-sweep-to-bottom Gallery" href="Gallery">水果馆</a></li> 
					<li><a class="hvr-sweep-to-bottom ContactUs" href="ContactUs">联系我们</a></li> 
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
<div class="banner">
	<div class="container">
		<div class="banner-main">
			<h3>Lorem ipsum dolor sit amet</h3>
			<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
			<a href="Content">Read More</a>
			<div class="clearfix"> </div>	
		</div>
	</div>
</div>
<!--banner end here-->
<!--bann-info start here-->
<div class="bann-info">
	<div class="container">
		<div class="bann-info-main">
			<div class="col-md-3 bann-grid">
				<div class="agro-grain"><span class="glyphicon glyphicon-grain" aria-hidden="true"> </span></div>
			</div>
			<div class="col-md-6 bann-grid">
				<h6>Excepteur sint</h6>
				<h3>Nam libero tempore cum soluta</h3>
				<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
				<a href="Content" class="hvr-wobble-bottom">Read More</a>
			</div>
			<div class="col-md-3 bann-grid">
				<img src="Public/images/cucumber.jpg" alt="" class="img-responsive">
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--bann info end here-->
<!--wedo start here-->
<div class="we-do">
	<div class="container">
		<div class="wedo-main">
			<div class="col-md-4 wedo-grid">
				<span class="glyphicon glyphicon-leaf" aria-hidden="true"> </span>
				<h3>voluptates repudiandae sint </h3>
				<h4>Et harum quidem rerum facilis est et expedita distinctio Nam libero tempore</h4>
				<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances </p>
				<a href="single.html"><span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"> </span></a>
			</div>
			<div class="col-md-4 wedo-grid">
				<span class="glyphicon glyphicon-user" aria-hidden="true"> </span>
				<h3>voluptates repudiandae sint </h3>
				<h4>Et harum quidem rerum facilis est et expedita distinctio Nam libero tempore</h4>
				<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances </p>
				<a href="single.html"><span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"> </span></a>
			</div>
			<div class="col-md-4 wedo-grid">
				<span class="glyphicon glyphicon-eye-open" aria-hidden="true"> </span>
				<h3>voluptates repudiandae sint </h3>
				<h4>Et harum quidem rerum facilis est et expedita distinctio Nam libero tempore</h4>
				<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances </p>
				<a href="single.html"><span class="glyphicon glyphicon-circle-arrow-right" aria-hidden="true"> </span></a>
			</div>
			<div class="clearfix"> </div>	
		</div>
	</div>
</div>
<!--we do end here-->
<!--agrom strip start here-->
<div class="agro-strip">
	<div class="container">
		<div class="agro-strip-main">
			<h3>Nam libero tempore, cum soluta nobis est eligendi</h3>
			<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system</p>
			<a href="single.html" class="hvr-wobble-bottom">Read More</a>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--agrom strip end here-->
<!--latest-news start here-->
<div class="latest-new">
	<div class="container">
		<div class="latest-news-main">
			<div class="col-md-3 latest-grid">
				<img src="Public/images/l1.jpg" alt="" class="img-responsive">
				<p>Temporibus autem quibusdam et aut offic</p>
			</div>
			<div class="col-md-3 latest-grid">
				<img src="Public/images/l2.jpg" alt="" class="img-responsive">
				<p>Temporibus autem quibusdam et aut offic</p>
			</div>
			<div class="col-md-3 latest-grid">
				<img src="Public/images/l.jpg" alt="" class="img-responsive">
				<p>Temporibus autem quibusdam et aut offic</p>
			</div>
			<div class="col-md-3 latest-grid">
				<img src="Public/images/l4.jpg" alt="" class="img-responsive">
				<p>Temporibus autem quibusdam et aut offic</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--latest news end here-->


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