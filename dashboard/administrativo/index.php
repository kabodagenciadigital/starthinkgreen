<?php
session_start();
if(!isset($_SESSION["id_usuario"])){
header("Location:http://startthinkgreen.com/ingreso");
}


if(isset($_SESSION["id_usuario"])){
	if ($_SESSION['tipo_usuario'] == 11) {
		header("Location:http://startthinkgreen.com/portalclientes");
	}
}


	require('../../conexion/conexion.php');

	$idUsuario = $_SESSION['id_usuario'];

	$sql = "SELECT id, usuario, nombre, id_tipo, empresa, email FROM usuarios WHERE id = '$idUsuario'";
	$resultuser=$mysqli->query($sql);
	$rowuser = $resultuser->fetch_assoc();


	$querynotificaciones="SELECT id_notificacion, id_usuario, detalle, area, estado, fecha FROM notificaciones";
	$resultadonotificaciones=$mysqli->query($querynotificaciones);

?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>STG | Administrativo</title>
<?php include('../../tema/editor/css.php'); ?>
</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <?php include('../../tema/editor/barrasuperior.php'); ?>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <!--/.sidebar-->
                        <?php include('../../tema/editor/menu.php'); ?>
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                          <div class="module-head">
            <h3> <i class="fa fa-th"></i>Administrativo</h3>
        </div>
				<br>
				<div class="btn-controls">
        <div class="btn-box-row row-fluid">
            <a href="https://startthinkgreen.com/dashboard/administrativo/clientes" class="btn-box big span4"><i class="fa fa-handshake-o"></i><b>clientes</b>
            </a><a href="https://startthinkgreen.com/dashboard/administrativo/proveedores" class="btn-box big span4"><i class="fa fa-code-fork"></i><b>Proveedores</b>
            </a><a href="https://startthinkgreen.com/dashboard/administrativo/comercial" class="btn-box big span4"><i class="fa fa-linode"></i><b>Comercial</b></a>
        </div>
        <div class="btn-box-row row-fluid">
            <a href="https://startthinkgreen.com/dashboard/administrativo/legal" class="btn-box big span4"><i class="fa fa-check-square"></i><b>Legal</b>
            </a><a href="https://startthinkgreen.com/dashboard/administrativo/sistemadegestion" class="btn-box big span4"><i class="fa fa-cogs"></i><b>sistema de Gestión</b>
            </a><a href="https://startthinkgreen.com/dashboard/empresa" class="btn-box big span4"><i class="fa fa-building-o"></i><b>Empresa</b></a>
        </div>
    </div>
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
          <?php include('../../tema/editor/footer.php'); ?>
        </div>
          <?php include('../../tema/editor/js.php'); ?>
    </body>
