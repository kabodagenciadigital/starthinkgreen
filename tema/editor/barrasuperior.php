<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <i class="icon-reorder shaded"></i></a>
            <a class="brand" href="https://startthinkgreen.com/dashboard"><i class="fa fa-leaf" style="color: #44d481;font-size: 20px;"></i>STARTTHINKGREEN </a>


        <div class="nav-collapse collapse navbar-inverse-collapse">

          <ul class="nav pull-left">
            <li><a href="https://startthinkgreen.com/dashboard">Inicio</a></li>
            <li><a href="https://startthinkgreen.com/dashboard/notificaciones">Notificaciones</a></li>
          </ul>


            <ul class="nav pull-right">
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Contactenos
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li class="nav-header">Atención Telefonica</li>
                        <li>(57-1)7895211</li>
                        <li class="divider"></li>
                        <li class="nav-header">Atención Fisica</li>
                        <li>Cra 71B No. 54–37 P1B / Bogotá</li>
                        <li class="divider"></li>
                        <li class="nav-header">Guia</li>
                        <li><a href="#">Ayuda</a></li>
                        <li><a href="#">Preguntas Frecuentes</a></li>
                        <li class="divider"></li>
                        <li class="nav-header">Soporte</li>
                        <li><a href="#">Contactar a soporte</a></li>
                        <li><a href="#">Reporte de fallas</a></li>
                    </ul>
                </li>

                <?php
                            $querynombreempresa = "SELECT id_cliente, nombre_cliente FROM clientes WHERE id_cliente = $rowuser[empresa]";
                            $resultadonombreempresa=$mysqli->query($querynombreempresa);
                            $rownombrempresa = $resultadonombreempresa->fetch_assoc();
                            ?>


<a class="brand"  style="color: #adadad;font-size: 13px;padding-left: 60px;padding-right: 0px;margin-right: 10px;margin-left: -10;margin-left: -30;">
  <?php echo utf8_decode($rowuser['nombre']." | ".$rownombrempresa['nombre_cliente']);?></a>




                <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="https://startthinkgreen.com/tema/images/user.png" class="nav-avatar" />
                    <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li class="nav-header">Configuración</li>
                      <li class="divider"></li>
                        <li><a href="https://startthinkgreen.com/perfil"><i class="fa fa-user"></i>Su Perfil</a></li>
                        <li><a href="https://startthinkgreen.com/perfil/editar"><i class="fa fa-pencil"></i>Editar Perfil</a></li>
                        <li class="divider"></li>
                          <li><a href="https://startthinkgreen.com/conexion/logout.php"><i class="fa fa-sign-out"></i>Cerrar Sesion</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.nav-collapse -->
    </div>
</div>
