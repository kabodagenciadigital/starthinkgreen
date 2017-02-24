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


	require('../../../conexion/conexion.php');

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

				<style type="text/css" media="all">
				   i, h3 {display: inline;}
				</style>

        <title>STG | Clientes</title>
<?php include('../../../tema/editor/css.php'); ?>
</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <?php include('../../../tema/editor/barrasuperior.php'); ?>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <!--/.sidebar-->
                        <?php include('../../../tema/editor/menu.php'); ?>
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                          <div class="module-head">
            									<i class="fa fa-handshake-o"></i><h3> <a class='boton-regresar' href="https://startthinkgreen.com/dashboard/administrativo">Administrativo</a></h3><h3> | Clientes</h3>
        									</div>
													<br>
													<div class="btn-controls">
											        <div class="btn-box-row row-fluid">
											            <a href="https://startthinkgreen.com/dashboard/administrativo/clientes/listado" class="btn-box big span6"><i class="fa fa-address-card-o"></i><b>Listado de Clientes</b></a>
																	<a href="https://startthinkgreen.com/administrativo/clientes/registrar-cliente" class="btn-box big span6"><i class="fa fa-user-plus"></i><b>Registrar Cliente</b></a>
															</div>
															<div class="btn-box-row row-fluid">
														</a><a href="https://startthinkgreen.com/administrativo/clientes/registrar-representante" class="btn-box big span6"><i class="fa fa-user-circle-o"></i><b>Agregar Representante</b></a>
													</a><a href="https://startthinkgreen.com/administrativo/clientes/registrar-contacto" class="btn-box big span6"><i class="fa fa-users"></i><b>Agregar Contacto</b></a>
												</div>

														<div class="module-head">
																<h3> <i class="fa fa-leaf"></i>Control Acceso Portal Clientes</h3>
														</div>
														<br>

														<div class="btn-box-row row-fluid">
														</a><a href="https://startthinkgreen.com/administrativo/clientes/registrar-representante" class="btn-box big span4"><i class="fa fa-sign-in"></i><b>Crear Acceso</b></a>
													</a><a href="https://startthinkgreen.com/administrativo/clientes/registrar-contacto" class="btn-box big span4"><i class="fa fa-pencil-square"></i><b>Editar Acceso</b></a>
												</a><a href="https://startthinkgreen.com/administrativo/clientes/registrar-contacto" class="btn-box big span4"><i class="fa fa-ban"></i><b>Eliminar Acceso</b></a>
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
          <?php include('../../../tema/editor/footer.php'); ?>
        </div>
          <?php include('../../../tema/editor/js.php'); ?>
    </body>
