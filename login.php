<?php 
//error_reporting( (E_STRICT & E_ALL) );
//Obtengo Los Campos.
include ("conexionLogin.php");
$usuario=$_POST['usuario'];
$pass=$_POST['contrasena'];
$Error;
$tipo;
$ur;
$ps;
$sql=mysql_query("SELECT id,usuario,clave,tipo_usuario from usuarios where usuario='$usuario' and clave='$pass'",$con);
 if($row = mysql_fetch_array($sql)){
		$id=$row['id'];
		$user= $row['usuario'];
		$pss=$row['clave'];
		$tipo=$row['tipo_usuario'];
}else{
	$id="";
	$tipo=="";
	$user=="";
	$pss=="";

} 
 
 
//Valido Si No Estan Vacios.
if($user != "" && $pss != ""){
	//Valido Si Son Los Correctos.
	 if  ($usuario == $user && $pass == $pss && $tipo == "Administrador"){
		//Inicio Las Sessiones.
		session_start();
		//Registrar Session
		//Nombre De La Session;
		//Duracion De La Session
		session_cache_expire(30);
		//Creo Una Variable Session Con El Nombre Del Usuario.
		$_SESSION[Usuario] = $user;
		$_SESSION[Tipo]=$tipo;
		$_SESSION[Id]=$id;
		header("Location: inicio_sesion.php"); 
		if ($_COOKIE['Direccion'] != "" || $_COOKIE['Direccion'] != "null"){
			header("Location: insertar_producto.php"); 

		}else{
			header("Location: inicio_sesion.php"); 
		}

	}
	
	else{
			$Error = "Datos Incorrectos";
			header("Location: inicio_sesion.php?Error=".$Error); 
	}
}else{
		$Error = "Datos Incorrectos";
		header("Location: inicio_sesion.php?Error=".$Error); 
}

?>