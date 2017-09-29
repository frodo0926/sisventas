// JavaScript Document

// Función para recoger los datos de PHP según el navegador, se usa siempre.
function objetoAjax(){
	var xmlhttp=false;
	try {
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
 
	try {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	} catch (E) {
		xmlhttp = false;
	}
}
 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
	  xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
 

function actualizarCategorias(id){
      location.href = "productos.php?categoria="+id+"&cat=1";
}

function actualizarPrecios(precio1, precio2){
      location.href = "productos.php?precio1="+precio1+"&precio2="+precio2;
}

function verProducto(id){
      location.href = "producto.php?id="+id;
}

function editarProducto(id,nombre,valor,descripcion,ruta,id_cat) {
	  debugger;
	  $("#idp").val(id);
	  $("#nomp").val(nombre);
	  $("#valp").val(valor);
	  $("#desp").val(descripcion);
	  debugger;
  };
 

function ValidarProducto(){
	//div donde se mostrará lo resultados
  //divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  idp=$('#idp').val();
  nomp=$('#nomp').val();
  valp=$('#valp').val();
  desp=$('#desp').val();
  debugger;
  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "actualizar_producto.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		//divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs
		alert("Datos actualizados!");
		location.href = "producto.php?id="+idp;
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("idp="+idp+"&nomp="+nomp+"&valp="+valp+"&desp="+desp)
  
} 

