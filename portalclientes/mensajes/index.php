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

	require('../../conexion/conexion.php');

	$id_do=$_GET['id_do'];
	$idUsuario = $_SESSION['id_usuario'];

	$sql = "SELECT id, usuario, nombre, id_tipo, empresa, email FROM usuarios WHERE id = '$idUsuario'";
	$resultuser=$mysqli->query($sql);
	$rowuser = $resultuser->fetch_assoc();


	$querydo="SELECT id_do, id_cliente, detalle, area, fecha, estado FROM DO WHERE id_do = '$id_do'";
	$resultadodo=$mysqli->query($querydo);
	$rowdo = $resultadodo->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="es">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>STG | Mensajes</title>
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

													<div class="module message">
                                <div class="module-head">
                                  <h3> <i class="fa fa-envelope-o"></i>Mensajes</h3>
                                </div>
                                <div class="module-option clearfix">
                                    <div class="pull-left">
                                        <div class="btn-group">
                                            <button class="btn">
                                                Bandeja de Entrada</button>
                                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Bandeja de Entrada(11)</a></li>
                                                <li><a href="#">Enviados</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Soporte</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-primary">Redactar Nuevo Mensaje</a>
                                    </div>
                                </div>
                                <div class="module-body table">
                                    <table class="table table-message">
                                        <tbody>
                                            <tr class="heading">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    Remitente
                                                </td>
                                                <td class="cell-title">
                                                    Asunto
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                </td>
                                                <td class="cell-time align-right">
                                                    Fecha
                                                </td>
                                            </tr>
                                            <tr class="unread">
                                                <td class="cell-check">
                                                    <input type="checkbox" class="inbox-checkbox">
                                                </td>
                                                <td class="cell-icon">
                                                    <i class="icon-star"></i>
                                                </td>
                                                <td class="cell-author hidden-phone hidden-tablet">
                                                    John Donga
                                                </td>
                                                <td class="cell-title">
                                                    Sample Work
                                                </td>
                                                <td class="cell-icon hidden-phone hidden-tablet">
                                                    <i class="icon-paper-clip"></i>
                                                </td>
                                                <td class="cell-time align-right">
                                                    18:24
                                                </td>
                                            </tr>
																						<tr class="read">
																								<td class="cell-check">
																										<input type="checkbox" class="inbox-checkbox">
																								</td>
																								<td class="cell-icon">
																										<i class="icon-star"></i>
																								</td>
																								<td class="cell-author hidden-phone hidden-tablet">
																										John Donga
																								</td>
																								<td class="cell-title">
																										Sample Work
																								</td>
																								<td class="cell-icon hidden-phone hidden-tablet">
																										<i class="icon-paper-clip"></i>
																								</td>
																								<td class="cell-time align-right">
																										18:24
																								</td>
																						</tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>

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
