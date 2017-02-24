<?php

session_start();
require('../conexion/conexion.php');
header ('Content-type: text/html; charset=utf-8');

	if(isset($_SESSION["id_usuario"])){
		if ($_SESSION['tipo_usuario'] == 11) {
			header("location:../portalclientes");
		}
		else {
			header("location:../dashboard");
		}
	}

	if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
		$password = mysqli_real_escape_string($mysqli,$_POST['password']);
		$error = '';

		$sha1_pass = sha1($password);

		$sql = "SELECT id, id_tipo FROM usuarios WHERE usuario = '$usuario' AND password = '$sha1_pass'";
		$result=$mysqli->query($sql);
		$rows = $result->num_rows;

		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['id_usuario'] = $row['id'];
			$_SESSION['tipo_usuario'] = $row['id_tipo'];
			if ($_SESSION['tipo_usuario'] == 11) {
				header("location:../portalclientes");
			}
			else {
				header("location:../dashboard");
			}
			} else {
			$error = "<i class='fa fa-exclamation-triangle'></i>Los datos ingresados son incorrectos";
		}
	}
?>
<html>
	<head>
		<title>START THINK GREEN</title>
		<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="login.css">
		<link type="text/css" href="https://startthinkgreen.com/tema/font-awesome/css/font-awesome.css" rel='stylesheet'>
		<link type="text/css" href="https://startthinkgreen.com/tema/font-awesome/css/font-awesome.min.css" rel='stylesheet'>

	</head>


	<body>
			<div class="logo"></div>
		<form class="login-block" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
	     <h1>Ingreso</h1>
			<input id="username" placeholder="Usuario" name="usuario" type="text" >
    	<input id="password" placeholder="Contraseña" name="password" type="password">
			<input class="boton" name="Ingresar" type="submit" value="Ingresar">
			<h2 style = "font-size:15px; color:#ffffff; text-align:center;"><?php echo isset($error)?utf8_decode($error):'';?></h2>
		</form>


	</body>

</html>
