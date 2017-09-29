<?php 
session_start();
error_reporting(E_ALL & E_STRICT);
?>
<!DOCTYPE html>
<html>
<head>
<title>Eshop-Productos</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-dialog.min.css" rel="stylesheet">
<script language="JavaScript" type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/bootstrap.min.js"></script>
<script language="JavaScript" type="text/javascript" src="js/bootstrap-dialog.min.js"></script>
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
			// Solo permite ingresar numeros.
			function soloNumeros(e){
				var key = window.Event ? e.which : e.keyCode
				return (key >= 48 && key <= 57)
			}
			</script>

			<script>
			function soloTexto(e){
			   key = e.keyCode || e.which;
			   tecla = String.fromCharCode(key).toLowerCase();
			   letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
			   especiales = "8-37-39-46";

			   tecla_especial = false
			   for(var i in especiales){
					if(key == especiales[i]){
						tecla_especial = true;
						break;
					}
				}

				if(letras.indexOf(tecla)==-1 && !tecla_especial){
					return false;
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
					<li><a href="index.html">Home</a></li>
					<li class="active">Producto</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	
	<?php 
		include ("conexion.php");   		
		$db = new MySQL(); 
		$producto = "";
		if(isset($_GET["id"])) $producto = $_GET["id"];
						
		if($producto != 0){
			$sql=("SELECT * FROM producto where id_producto='$producto'");
			$con=$resultados = $db->consulta($sql);

			if($resultados=$db->fetch_array($con)) { 
				$id=$resultados['id_producto'];
				$nombre=$resultados['nom_producto'];
				$valor=$resultados['valor_producto'];
				$descripcion=$resultados['descripcion'];
				$ruta=$resultados['ruta'];
				$id_cat=$resultados['id_categoria'];
								
														
	?>
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-12 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="productos/<?php echo $ruta; ?>">
									<img src="productos/<?php echo $ruta; ?>" />
								</li>
								<!--
								<li data-thumb="images/s2.jpg">
									<img src="images/s2.jpg" />
								</li>
								<li data-thumb="images/s3.jpg">
									<img src="images/s3.jpg" />
								</li>
								<li data-thumb="images/s4.jpg">
									<img src="images/s4.jpg" />
								</li>-->
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
						<h3><?php echo $nombre; ?></h3>
						<p class="availability">Disponible: <span class="color">En Inventario</span></p>
						<div class="price_single">
						<?php 
						$valor2=$valor*0.2;
						$valor1=$valor+$valor2;
						?>
							<span class="reducedfrom">$<?php echo $valor1; ?></span>
							<span class="actual item_price">$<?php echo $valor; ?></span>
						</div>
						<h2 class="quick">Descripcion:</h2>
						<p class="quick_desc"><?php echo $descripcion; ?></p>
						<ul class="product-colors">
							<h3>Colores:</h3>
							<li><a class="color1" href="#"><span> </span></a></li>
							<li><a class="color2" href="#"><span> </span></a></li>
							<li><a class="color3" href="#"><span> </span></a></li>
							<li><a class="color4" href="#"><span> </span></a></li>
							<li><a class="color5" href="#"><span> </span></a></li>
							<li><a class="color6" href="#"><span> </span></a></li>
							<li><a class="color7" href="#"><span> </span></a></li>
							<li><a class="color8" href="#"><span> </span></a></li>
							<div class="clear"> </div>
						</ul>
						
						<div class="quantity_box">
							<ul class="product-qty">
								<span>Cantidad:</span>
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
									<option>6</option>
								</select>
							</ul>
						</div>
						<?php 
						if ($_SESSION[Usuario] == "" || $_SESSION[Usuario] == "null"){
						?>
							
						<?php
						}else{
						?>
							<div class="address new">
								<input type="submit" name="Modificar" value="Modificar" data-target="#PopUpEditarProducto" data-toggle="modal" onclick="editarProducto(<?php echo $id;?>,'<?php echo $nombre;?>',<?php echo $valor;?>,'<?php echo $descripcion;?>','<?php echo $ruta;?>',<?php echo $id_cat;?>)"  >
							</div>
						<?php
						}
						?>
					<div class="clearfix"> </div>
				
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php 
		}
		}
	?>		
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</div>
	
	
	<div class="modal fade" id="PopUpEditarProducto">
           <div class="modal-dialog modal-md">
               <div class="modal-content">
                   <div class="modal-header dialog-header-confirm">
                       <input type="button" class="close" data-dismiss="modal" value="x">
                       <h4 class="modal-title">Editar producto</h4>
                   </div>

                   <div class="modal-body">
                       <p>	
						<form id="modificarUser" name="update_producto" action="" onsubmit="ValidarProducto()" class="form-horizontal" role="form" >
							<label class="label-control"  for="docup">ID:</label>
							<input class="form-control" name="mdoc" id="idp" type="text" disabled/>
							<label class="label-control" for="userup">Nombre:</label>
							<input class="form-control" name="muser" id="nomp" type="text"  onKeyPress="return soloTexto(event);" onKeyup="return soloTexto(event);" required/>
							<label class="label-control" for="passup">Valor:</label>
							<input class="form-control" name="mpass"  id="valp" type="text" onKeyPress="return soloNumeros(event);" onKeyup=" return soloNumeros(event);" required/>
							<label class="label-control" for="passup">Descripcion:</label>
							<input class="form-control" name="mpass"  id="desp" type="text" onKeyPress="return soloTexto(event);" onKeyup="return soloTexto(event);" required/>
							<br>
							<div class="text-right">
								<button type="submit" class="btn btn-primary"  >Actualizar</button>
							</div>
						</form> 
						</p>
                   </div>
                   <div class="modal-footer">
                       <!--<button type="button" class="btn btn-primary" onclick="ActualizarSolicitud()" >Actualzar</button>-->
                   </div>
               </div>
               <!-- /.modal-content -->
           </div>
           <!-- /.modal-dialog -->
       </div>
	   
	
	
	</br></br></br>
	</br></br></br>
	</br></br>
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