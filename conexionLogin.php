<?php   


error_reporting(E_ALL & E_STRICT);
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "sisventas"; 
 
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	mysql_query("SET NAMES 'utf8'",$con);
	mysql_select_db($bd_base, $con); 

	

?>