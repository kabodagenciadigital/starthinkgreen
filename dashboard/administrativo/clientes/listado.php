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

	$queryclientes="SELECT id_cliente, nombre_cliente, nitorut, ciudad, pais, dpto, correo_electronico_principal,telefono_principal,celular_principal FROM clientes";
	$resultadoclientes=$mysqli->query($queryclientes);

?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<style type="text/css" media="all">
					 i, h3 {display: inline;}
				</style>
        <title>STG | Listado Clientes</title>
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

													<!--/.module-->
													<div class="module">
															<div class="module-head">
																		<i class="fa fa-address-card-o"></i><h3><a class="boton-regresar" href="https://startthinkgreen.com/dashboard/administrativo">Administrativo</a></h3>
																		<h3> | </h3><h3><a class="boton-regresar" href="https://startthinkgreen.com/dashboard/administrativo/clientes">Clientes</a></h3><h3> | Listado Clientes</h3>
															</div>
															<div class="module-body table">
																	<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
																			width="100%">
																			<thead>
																					<tr>
																						<th>Id</th>
																						<th>Razon Social</th>
																						<th>Nit o Rut</th>
																						<th>Telefono</th>
																						<th>Ciudad</th>
																						<th>pais</th>
																						<th>Ver</th>
																						<th>Modificar</th>
																					</tr>
																			</thead>
																			<tbody>
																					<?php while($rowclientes=$resultadoclientes->fetch_assoc()){ ?>
																				<tr style="cursor: pointer;" onclick="window.location.href='detalle?id_cliente=<?php echo $rowclientes['id_cliente'];?>';">
																					<td>
																						<?php echo 'C' . $rowclientes['id_cliente'];?>
																					</td>
																					<td>
																						<?php echo $rowclientes['nombre_cliente'];?>
																					</td>
																					<td>
																						<?php echo $rowclientes['nitorut'];?>
																					</td>
																					<td>
																						<?php echo $rowclientes['telefono_principal'];?>
																					</td>
																					<td>
																						<?php

																						$query4 = $rowclientes['ciudad'];
																						$query5 = "SELECT localidad FROM t_localidad WHERE id_localidad = '$query4'";
																						$resultado3=$mysqli->query($query5);
																						$row3 = mysqli_fetch_assoc($resultado3);
																						echo $row3['localidad'];

																						?>
																					</td>

																					<td>

																					<?php

																					$query3 = $rowclientes['pais'];
																					$query2 = "SELECT estado FROM t_estado WHERE id_estado = '$query3'";
																					$resultado2=$mysqli->query($query2);
																					$row2 = mysqli_fetch_assoc($resultado2);
																					echo $row2['estado'];

																						?>

																					</td>

																					<td>
																						<a href="detalle?id_cliente=<?php echo $rowclientes['id_cliente'];?>"><i class="fa fa-eye"></i></a>
																					</td>
																					<td>
																						<a href="modificar?id_cliente=<?php echo $rowclientes['id_cliente'];?>"><i class="fa fa-pencil-square-o"></i></a>
																					</td>
																				</tr>
																				<?php } ?>
																			</tbody>
																			<tfoot>
																			</tfoot>
																	</table>
															</div>
													</div>
													<!--/.module-->

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
