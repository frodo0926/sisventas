<?php 
session_start();
error_reporting(E_ALL & E_STRICT);
?>
<?php 
if ($_SESSION[Usuario] == "" || $_SESSION[Usuario] == "null"){
				
?>
<!DOCTYPE html>
<html>
<head>
<title>Iniciar Sesion - Eshop</title>
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

<script type="text/javascript"> 
            function CheckForm() 
            { 
                var User= document.getElementById('usuario').value; //Se crea la variable User conteniendo el valor del input con id 'inUser' 
                var Pass= document.getElementById('contrasena').value; 
                var errormsg= 'Debe completar los campos \n' //Se crea un mensaje de error en la variable errormsg 
                if(User == '') //Si la variable 'User' no tiene contenido: 
                    { 
                    var error= true; //crea la variable 'error' con valor verdadero (existe) 
                    var errormsg; 
                    } 
                if(Pass == '') 
                    { 
                    var error= true; 
                    var errormsg; 
                    } 
                if(error) //Si existe la variable 'error' (si el valor es verdadero, true): 
                { 
                    alert(errormsg) //Muestra un mensaje de alerta con el contenido de la variable 'errormsg' 
                } 
                else //sino 
                { 
                    document.getElementById('FormLogin').submit(); //Hace un submit en el form con id 'loginForm' 
                } 
            } 
        </script>
		
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
					<li><a href="inicio_sesion.php">Iniciar Sesion</a></li>
					
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
					<li class="active">Iniciar Sesi&oacute;n</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-account-->
	<div class="account">
		<div class="container"> 
			<div class="account-bottom">
				
				<div class="col-md-6 col-md-offset-3 account-left">
								
					<form action="login.php" name="FormLogin" id="FormLogin" method="post">
					<div class="account-top heading">
						<h3>Inicio Sesi&oacute;n</h3>
					</div>
					<div class="address">
						<span>Usuario</span>
						<input type="text" name="usuario" id="usuario" autocomplete="off">
					</div>
					<div class="address">
						<span>Contrase&ntilde;a</span>
						<input type="password" name="contrasena" id="contrasena">
					</div>
					<div class="address">
						<button type="button" id="inForm" onclick="CheckForm()" >Ingresar</button>
						<?php  error_reporting( (E_STRICT & E_ALL) );
						if ($_REQUEST['Error'] != ""){?>
						<div class="alert-danger text-center">
							<p>
							<p  class="error"><?php echo $_REQUEST['Error'] ?></p>
						</div>
						<?php } else {?>
							
						<?php } ?>
			
		
					</div>
						<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
						<script src="js/index.js"></script>
					</form>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-account-->
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
	</div>-->
	<!--end-footer-->
	<!--end-footer-text
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
<?php 
}else{
	header('Location: insertar_producto.php');
}
	
?>