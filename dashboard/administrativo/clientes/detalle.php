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

	$id_cliente_get=$_GET['id_cliente'];
	$idUsuario = $_SESSION['id_usuario'];

	$sql = "SELECT id, usuario, nombre, id_tipo, empresa, email FROM usuarios WHERE id = '$idUsuario'";
	$resultuser=$mysqli->query($sql);
	$rowuser = $resultuser->fetch_assoc();

	$queryclientes="SELECT id_cliente, nombre_cliente, nitorut, personeria, ciudad, pais, dpto, dir1, dir2, dir3, dir4, infoad1, infoad2, infoad3, infoad4, direccion_internacional, codigo_postal, correo_electronico_principal,telefono_principal,telefono_extension,celular_principal FROM clientes WHERE id_cliente = $id_cliente_get";
	$resultadoclientes=$mysqli->query($queryclientes);
	$rowclientes = $resultadoclientes->fetch_assoc();

	$queryrepresentante="SELECT id_representante_clientes, tratamiento, nombre, cedula, fechanacimiento, cargo, mail, telefono, extension, celular FROM representantes_legales_clientes WHERE id_cliente = '$id_cliente_get'";
	$resultadorepresentante=$mysqli->query($queryrepresentante);

	$querycontacto="SELECT id_persona_contacto, tratamiento, nombre, cedula, fechanacimiento, cargo, mail, telefono, extension, celular FROM personas_contacto_clientes WHERE id_cliente = '$id_cliente_get'";
	$resultadocontacto=$mysqli->query($querycontacto);

	$querynumrepresentantelegal="SELECT id_representante_clientes FROM representantes_legales_clientes WHERE id_cliente = '$id_cliente_get'";
	$resultadonumrepresentantelegal=$mysqli->query($querynumrepresentantelegal);
	$rownumrepresentantelegal = $resultadonumrepresentantelegal->num_rows;

	$querynumpersonasdecontacto="SELECT id_persona_contacto FROM personas_contacto_clientes WHERE id_cliente = '$id_cliente_get'";
	$resultadonumpersonasdecontacto=$mysqli->query($querynumpersonasdecontacto);
	$rownumpersonasdecontacto = $resultadonumpersonasdecontacto->num_rows;

?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<style type="text/css" media="all">
					 i, h3 {display: inline;}
				</style>
        <title>STG | Clientes | Detalle</title>
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
																		<i class="fa fa-address-book"></i><h3>Cliente: <?php echo $rowclientes['nombre_cliente'];?><h3>
																		<h3 class="boton-regresar-derecha"><a class="boton-regresar" href="https://startthinkgreen.com/dashboard/administrativo/clientes/listado">Volver</a></h3>
															</div>
												</div>
													<!--/.module-->

<div class="module">
	<table class="table table-condensed">
<thead>
<tr>
<th>Id Cliente</th>
<th>Nnombre o Razon Social</th>
<th>Nit o Rut</th>
<th>Personeria</th>
</tr>
</thead>
<tbody>
<tr>
<td><?php echo "C".$rowclientes['id_cliente'];?></td>
<td><?php echo $rowclientes['nombre_cliente'];?></td>
<td><?php echo $rowclientes['nitorut'];?></td>
<td><?php echo $rowclientes['personeria'];?></td>
</tr>
</tbody>
</table>
</div>

<div class="module">
	<table class="table table-condensed">
<thead>
<tr>
<th>Dirección Nacional</th>
<th>Dirección Internacional</th>
<th>Codigo Postal</th>
</tr>
</thead>
<tbody>
<tr>
<td><?php echo $rowclientes['dir1'].' '.$rowclientes['dir2'].' # '.$rowclientes['dir3'].' - '.$rowclientes['dir4'].' / '.$rowclientes['infoad1'].' '.$rowclientes['infoad2'].' '.$rowclientes['infoad3'].' '.$rowclientes['infoad4'];?></td>

<td>

<?php
if($rowclientes["direccion_internacional"]==""){
echo "No registra";
}
else {
	echo $rowclientes['direccion_internacional'];
}
?>

</td>

<td>
	<?php
	if($rowclientes["codigo_postal"]==""){
	echo "No registra";
	}
	else {
		echo $rowclientes['codigo_postal'];
	}
	?>

</td>

</tr>
</tbody>
</table>
</div>


													<div class="module">
														<table class="table table-condensed">
														<thead>
														<tr>
														<th>Telefono</th>
														<th>Celular</th>
														<th>Correo Electronico</th>
														<th>Ciudad o Municipio</th>
														<th>Departamento</th>
														<th>Pais</th>
														</tr>
														</thead>
														<tbody>
														<tr>
														<td><?php echo $rowclientes['telefono_principal']." ".$rowclientes['extension'];?></td>
														<td><?php echo $rowclientes['celular_principal'];?></td>
														<td><?php echo $rowclientes['correo_electronico_principal'];?></td>

														<td><?php
							  							$queryciudadmunicipio = "SELECT localidad FROM t_localidad WHERE id_localidad = $rowclientes[ciudad]";
							  							$resultadociudadmunicipio=$mysqli->query($queryciudadmunicipio);
							  							$rowciudadmunicipio = mysqli_fetch_assoc($resultadociudadmunicipio);
							  							echo $rowciudadmunicipio['localidad'];?></td>

														<td><?php
														$querydpto = "SELECT municipio FROM t_municipio WHERE id_municipio = $rowclientes[dpto]";
														$resultadodpto=$mysqli->query($querydpto);
														$rowcdpto = mysqli_fetch_assoc($resultadodpto);
														echo $rowcdpto['municipio'];?></td>

														<td><?php $querypais = "SELECT estado FROM t_estado WHERE id_estado = $rowclientes[pais]";
														$resultadopais=$mysqli->query($querypais);
														$rowpais = mysqli_fetch_assoc($resultadopais);
														echo $rowpais['estado'];?></td>
														</tr>
														</tbody>
														</table>
													</div>


													<div class="module">
															<div class="module-head">
																		<i class="fa fa-user-circle-o"></i><h3>Representante Legal (<?php echo $rownumrepresentantelegal;?>)<h3>
																		<h3 class="boton-regresar-derecha"><a class="boton-regresar" href="https://startthinkgreen.com/administrativo/clientes/registrar-representante">Agregar Representante</a></h3>
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
          <?php include('../../../tema/editor/footer.php'); ?>
        </div>
          <?php include('../../../tema/editor/js.php'); ?>
    </body>
