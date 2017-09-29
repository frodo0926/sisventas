<?php include('conexionLogin.php');
 
//variables POST
  $idp=$_POST['idp'];
  $nomp=$_POST['nomp'];
  $valp=$_POST['valp'];
  $desp=$_POST['desp'];
 
 
 
	//registra los datos del producto
	  $sql="UPDATE producto SET nom_producto='$nomp' , valor_producto='$valp' , descripcion='$desp' WHERE id_producto='$idp'";
	mysql_query($sql,$con) or die('Error. '.mysql_error());

?>