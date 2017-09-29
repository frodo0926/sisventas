
<?php 
session_start();
error_reporting(E_ALL & E_STRICT);
?>
<?php 
if ($_SESSION[Usuario] == "" || $_SESSION[Usuario] == "null"){
			
	header('Location: inicio_sesion.php');
}else{
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Insertar Productos - Eshop</title>
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
					<li><a href="logout.php">Cerrar Sesion</a></li>
					
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
					<li class="active">Insertar Producto</li>
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
					<?php 
							//session_start();
							error_reporting(0); 
							include("conexion.php");
									
							if($_POST['nombre'] !="" && $_POST['precio'] !="" && $_POST['desc'] !=""){					
 
								$db = new MySQL();
								$nom=$_POST['nombre'];
								$precio= $_POST['precio'];
								$desc= $_POST['desc'];
								$catg= $_POST['categ'];
								
								//cargar imagen 
								$nombrefoto1=$_FILES['file']['name'];
								$ruta1=$_FILES['file']['tmp_name'];
								if(is_uploaded_file($ruta1)){ 
									if($_FILES['file']['type'] == 'image/png' OR $_FILES['file']['type'] == 'image/gif' OR $_FILES['file']['type'] == 'image/jpeg'){
										$tips = 'jpg';
										$type = array('image/jpeg' => 'jpg');
										$destino1 =  "productos/".$nombrefoto1;
										copy($ruta1,$destino1);
										$ruta_imagen = $destino1;
										$miniatura_ancho_maximo = 250;
										$miniatura_alto_maximo = 180;

										$info_imagen = getimagesize($ruta_imagen);
										$imagen_ancho = $info_imagen[0];
										$imagen_alto = $info_imagen[1];
										$imagen_tipo = $info_imagen['mime'];

										switch ( $imagen_tipo ){
										  case "image/jpg":
										  case "image/jpeg":
											$imagen = imagecreatefromjpeg( $ruta_imagen );
											break;
										  case "image/png":
											$imagen = imagecreatefrompng( $ruta_imagen );
											break;
										  case "image/gif":
											$imagen = imagecreatefromgif( $ruta_imagen );
											break;
										}

										$lienzo = imagecreatetruecolor( $miniatura_ancho_maximo, $miniatura_alto_maximo );
										imagecopyresampled($lienzo, $imagen, 0, 0, 0, 0, $miniatura_ancho_maximo, $miniatura_alto_maximo, $imagen_ancho, $imagen_alto);
										imagejpeg($lienzo, $destino1, 80);
									}
								}

								$fechaactual = getdate();
								$fecha = $fechaactual[year]."-".$fechaactual[mon]."-".$fechaactual[mday];
								
								//consulta base de datos
								$resultados = $db->consulta("insert into producto (nom_producto,valor_producto,descripcion,fecha_ingreso,ruta,id_categoria) values 
								('$nom','$precio','$desc','$fecha','$nombrefoto1','$catg')");
		
								echo "<script type='text/javascript'>\n alert('datos Guardados!!!');\n</script>";
								
							
			
							$db->cerrarconexion();
							}
							?>
											
					<form  action="insertar_producto.php" method="post" name="registro" id="registro" enctype="multipart/form-data" >
					<div class="account-top heading">
						<h3>Nuevo Producto</h3>
					</div>
					<div class="address">
						<span>Nombre</span>
						<input type="text" name=nombre required>
					</div>
					<div class="address">
						<span>Precio</span>
						<input type="number" name=precio required>
					</div>
					<div class="address">
						<span>Descripcion</span>
						<input type="text" name=desc required>
					</div>
										
					<?php 					 		
						$db = new MySQL(); 
						$sqlb=("SELECT * FROM categoria");
						$con=$resultadosba = $db->consulta($sqlb);
					?>	
					<div class="address">
						<span>Categoria</span>
						<select name="categ" id="categ">
						<?php 
							while($resultadosba=$db->fetch_array($con)) { 
								$nombre=$resultadosba['nombre_categoria'];
								$id=$resultadosba['id_categoria'];

						?> 
						<option value=<?php echo $id; ?> ><?php echo $nombre; ?></option>
						<?php 
						}
							mysql_free_result($resultadoba);
						?>
						</select>
					</div>
					<div class="address">
						<span>Adjunta una fotografia(Tamaño maximo 1 MB)</span>
						<input type="file" name="file" size="40" value="1" required/>
					</div>
					
					<div class="address new">
						<input type="submit" name="Registrar" value="Registrar">
					</div>
					</form>
				</div>
				
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
	<!--end-footer-text-->
	</br></br></br>
	</br></br>
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
}		
?>