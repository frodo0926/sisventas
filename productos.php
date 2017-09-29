<?php 
session_start();
error_reporting(E_ALL & E_STRICT);
?>
<!DOCTYPE html>
<html>
<head>
<title>Eshop-Productos</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Eshop" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,300,400,500,700,800,900,100italic,300italic,400italic,500italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script language="JavaScript" type="text/javascript" src="js/controladores/productos.js"></script>
<script language="JavaScript" type="text/javascript" src="js/controladores/productos.js"></script>
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
					<li class="active">Productos</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-product--> 
	<div class="product">
		<div class="container">
			<div class="product-main">
				<div class="col-md-9 p-left">
				<div class="product-one">
				
				<?php 
						include ("conexion.php");   		
						$db = new MySQL(); 
						$cat = 0;
						$categoria="";
						$precio1 = "";
						$precio2 = "";
						if(isset($_GET["categoria"])) $cat = $_GET["cat"];
						if(isset($_GET["categoria"])) $categoria = $_GET["categoria"];
						if(isset($_GET["precio1"])) $precio1 = $_GET["precio1"];
						if(isset($_GET["precio2"])) $precio2 = $_GET["precio2"];
						
						if($cat != 0){
							if($categoria == "" || $categoria == "0" ){
							$sql=("SELECT * FROM producto order by id_categoria, fecha_ingreso DESC");
							}else{
								$sql=("SELECT * FROM producto WHERE id_categoria='$categoria' order by fecha_ingreso DESC");
							}
						}else{
							if($precio1 == "" || $precio1 == "0"){
							$sql=("SELECT * FROM producto order by id_categoria, fecha_ingreso DESC");
							}else{
								$sql=("SELECT * FROM producto WHERE valor_producto>'$precio1' AND valor_producto<='$precio2'  order by fecha_ingreso DESC");
							}
						}
						
						
						$con=$resultados = $db->consulta($sql);
								
								
				?>
				<?php 
					while($resultados=$db->fetch_array($con)) { 
						$id=$resultados['id_producto'];
						$nombre=$resultados['nom_producto'];
						$valor=$resultados['valor_producto'];
						$descripcion=$resultados['descripcion'];
						$ruta=$resultados['ruta'];
								
				?>
				<div class="col-md-4 product-left single-left"> 
					<div class="p-one simpleCart_shelfItem" style="height: 308px;">							
							<a onclick="verProducto(<?php echo $id; ?>)">
								<img id="ancho_productos" src="productos/<?php echo $ruta; ?>" alt="" />
								<div class="mask mask1">
									<span>Mostrar</span>
								</div>
							</a>
						<h4><?php echo $nombre; ?></h4>
						<p><a class="item_add" href="#"><i></i> <span class=" item_price">$<?php echo $valor; ?></span></a></p>
					
					</div>
				</div>
				<?php 
					}			
				?>
				
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="col-md-3 p-right single-right">
				<h3>Categorias</h3>
					<ul class="product-categories">
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarCategorias(0);">Todos</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `id_categoria` = 1");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarCategorias(1);">Tecnologia</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `id_categoria` = 2");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarCategorias(2);">Celulares</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `id_categoria` = 5");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarCategorias(5);">Cargadores celular</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `id_categoria` = 8");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarCategorias(8);">Videojuegos</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `id_categoria` = 3");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarCategorias(3);">Computadores</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `id_categoria` = 4");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarCategorias(4);">Audio</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `id_categoria` = 6");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarCategorias(6);">Parlantes</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `id_categoria` = 7");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarCategorias(7);">Accesorios</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						
					</ul>
					
					<h3>Precio</h3>
					<ul class="product-categories p1">
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `valor_producto` <= 5000");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarPrecios(1,5000);">$0-$5000</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `valor_producto` > 5000 AND `valor_producto` <= 10000");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarPrecios(5000,10000);">$5000-$10000</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `valor_producto` > 10000 AND `valor_producto` <= 20000");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarPrecios(10000,20000);">$10000-$20000</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `valor_producto` > 20000 AND `valor_producto` <= 50000");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarPrecios(20000,50000);">$20000-$50000</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						<?php
							$db = new MySQL(); 
							$sql=("SELECT COUNT(`id_producto`) as produc FROM producto WHERE `valor_producto` > 50000");
							$con=$resultados = $db->consulta($sql);
							if($resultados=$db->fetch_array($con)) { 
								$num=$resultados['produc'];
						?>
						<li><a onclick="actualizarPrecios(50000,1000000);">$50000+</a> <span class="count">(<?php echo $num; ?>)</span></li>
						<?php
							}
						?>
						
						
					</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
	<!--end-product-->
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