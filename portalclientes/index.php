<?php
session_start();
if(!isset($_SESSION["id_usuario"])){
header("Location:http://startthinkgreen.com/ingreso");
}


if(isset($_SESSION["id_usuario"])){
	if ($_SESSION['tipo_usuario'] != 11) {
		header("Location:http://startthinkgreen.com/dashboard");
	}
}


	require('../conexion/conexion.php');

	$idUsuario = $_SESSION['id_usuario'];

	$sql = "SELECT id, usuario, nombre, id_tipo, empresa, email FROM usuarios WHERE id = '$idUsuario'";
	$resultuser=$mysqli->query($sql);
	$rowuser = $resultuser->fetch_assoc();


	$querynotificaciones="SELECT id_notificacion, id_usuario, detalle, area, estado, fecha FROM notificaciones WHERE id_usuario = '$idUsuario'";
	$resultadonotificaciones=$mysqli->query($querynotificaciones);

	$querydo="SELECT id_do, id_cliente, detalle, area, fecha, estado FROM DO WHERE id_cliente = $rowuser[empresa]";
	$resultadodo=$mysqli->query($querydo);

?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>STG | Portal Clientes</title>
<?php include('../tema/editor/css.php'); ?>
</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <?php include('../tema/editor/barrasuperior.php'); ?>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <!--/.sidebar-->
                        <?php include('../tema/editor/menu.php'); ?>
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
													<?php include('../tema/editor/contenidoportalclientes.php'); ?>
												</div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
          <?php include('../tema/editor/footer.php'); ?>
        </div>
          <?php include('../tema/editor/js.php'); ?>
    </body>
