<?php

	$mysqli=new mysqli("mysql.hostinger.co","u392639622_stgu","power+amd","u392639622_stg");
	//servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

	if(mysqli_connect_errno()){
		echo 'Conexion Fallida: ', mysqli_connect_error();
		exit();
	}

?>
