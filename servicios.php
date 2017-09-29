<?php 
session_start();
error_reporting(E_ALL & E_STRICT);
?>
<!DOCTYPE html>
<html>
<head>
<title>Servicios - Eshop</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Free Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
				</script>	
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>				
</head>
<body> 
	<!--top-header-->
	<div class="top-header">
	<div class="">
		<div class="">
			<!--<div class="col-md-4 top-header-left">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
			</div>-->
			<div class="banner">
				<a href="index.php"><img src="images/logo-4.png" alt="" /></a>
			</div>
			<!--<div class="col-md-4 top-header-right">
				<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart-1.png" alt="" />
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>
			</div>-->
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--top-header-->
<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="top-nav">
				<ul class="memenu skyblue"><li class="active"><a href="index.php">Inicio</a></li>
					<li class="grid"><a href="productos.php">Productos</a>
						<div class="mepanel">
							<div class="row">
								<div class="col1 me-one">
									<h4>Celulares</h4>
									<ul>
										<li><a href="productos.php">Vidrios Templados</a></li>
										<li><a href="productos.php">Repuestos</a></li>
										<li><a href="productos.php">Cargadores</a></li>
										<li><a href="productos.php">Accesorios</a></li>
										<li><a href="productos.php">Cables</a></li>
									</ul>
								</div>
								<div class="col1 me-one">
									<h4>Video Juegos</h4>
									<ul>
										<li><a href="productos.php">Repuestos</a></li>
										<li><a href="productos.php">Figuras</a></li>
										<li><a href="productos.php">Afiches</a></li>
										<li><a href="productos.php">Accesorios</a></li>
									</ul>	
								</div>
								<div class="col1 me-one">
									<h4>Audio</h4>
									<ul>
										<li><a href="productos.php">Parlantes</a></li>
										<li><a href="productos.php">Audifonos</a></li>
										<li><a href="productos.php">Manos libres</a></li>
									</ul>	
								</div>
							</div>
						</div>
					</li>
					<li><a href="servicios.php">Servicios</a></li>
					<li><a href="contactenos.php">Cont&aacute;ctenos</a></li>
					<?php 
					if ($_SESSION[Usuario] == "" || $_SESSION[Usuario] == "null"){
					?>
						<li><a href="inicio_sesion.php">Iniciar Sesion</a></li>
					<?php
					}else{
					?>
						<li><a href="insertar_producto.php">Insertar Producto</a></li>
						<li><a href="logout.php">Cerrar Sesion</a></li>
					<?php
					}
					?>
					
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--bottom-header-->
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="index.php">Inicio</a></li>
					<li class="active">Servicios</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-12 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/1.jpg">
									<img src="images/1.jpg" />
								</li>
								<li data-thumb="images/1.jpg">
									<img src="images/1.jpg" />
								</li>
								<li data-thumb="images/3.jpg">
									<img src="images/3.jpg" />
								</li>
								<li data-thumb="images/3.jpg">
									<img src="images/3.jpg" />
								</li>
							</ul>
						</div>
						<!-- FlexSlider -->
						  <script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

							<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					</div>	
				<div class="col-md-7 single-top-right">
					<div class="details-left-info simpleCart_shelfItem">
						<h3>Servicios</h3>
						<h2 class="quick">Mantenimiento de computadores:</h2>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						
						<h2 class="quick">Reparaci&oacute;n de celulares:</h2>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						
						
					<div class="clearfix"> </div>
				
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
					
				
				<div class="clearfix"> </div>
				<div>
					<h2 class="quick">Mantenimiento de computadores:</h2>
					<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
									
					<h2 class="quick">Reparaci&oacute;n de celulares:</h2>
					<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!--end-single-->
	<!--start-footer
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<div class="col-md-3 footer-left">
					<h3>ABOUT US</h3>
					<ul>
						<li><a href="#">Who We Are</a></li>
						<li><a href="contact.html">Contact Us</a></li>
						<li><a href="#">Our Sites</a></li>
						<li><a href="#">In The News</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Carrers</a></li>					 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>YOUR ACCOUNT</h3>
					<ul>
						<li><a href="account.html">Your Account</a></li>
						<li><a href="#">Personal Information</a></li>
						<li><a href="contact.html">Addresses</a></li>
						<li><a href="#">Discount</a></li>
						<li><a href="#">Track your order</a></li>					 					 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>CUSTOMER SERVICES</h3>
					<ul>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Shipping</a></li>
						<li><a href="#">Cancellation</a></li>
						<li><a href="#">Returns</a></li>
						<li><a href="#">Bulk Orders</a></li>
						<li><a href="#">Buying Guides</a></li>					 
					</ul>
				</div>
				<div class="col-md-3 footer-left">
					<h3>CATEGORIES</h3>
					<ul>
						<li><a href="#">Sports Shoes</a></li>
						<li><a href="#">Casual Shoes</a></li>
						<li><a href="#">Formal Shoes</a></li>
						<li><a href="#">Party Shoes</a></li>
						<li><a href="#">Ethnic</a></li>				 
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-footer-->
	<!--end-footer-text-->
	<div class="footer-text">
		<div class="container">
			<div class="footer-main">
				<p class="footer-class">© 2017 Eshop Todos los derechos reservados | Diseñado por XXXXXXXXXXXXXXXXX </p>
			</div>
		</div>
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!--end-footer-text-->	
</body>
</html>