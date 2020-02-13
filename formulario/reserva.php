<?php
	//conectamos con el servidor

	$conectar = @mysql_connect('localhost','carpa','123456');

	//verificamos la conexion

	if(!$conectar){
		echo "No se pudo conectar con el servidor";
	}else {
		$base = mysql_select_db('carpa');
		if(!$base){
			echo "No se encontro la base de datos";
		}
	}

	//recuperar las variales

	$Nombre = $_POST['Nombre'];
	$Apellidos = $_POST['Apellidos'];
	$Telefono = $_POST['Telefono'];
	$Email = $_POST['Email'];
	$Fecha = $_POST['Fecha'];
	$Entradas = $_POST['Entradas'];
	$RRPP = $_POST['RRPP'];

	//hacemos la sentencia de sql

	$sql = "INSERT INTO carpa VALUES('Nombre','Apellidos','Telefono','Email','Fecha','Entradas','RRPP')";

	//ejecutamos la sentencia sql

	$ejecutar = mysql_query($sql);

	//verificamos la ejecución

	if (!$ejecutar) {
		echo "Hubo algún error";
	}else {
		echo "Entradas reservadas correctamente <br> <a href="https://sergiocantero.tk/reserva">Volver</a>";
	}
?>