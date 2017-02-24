<div class="sidebar">

  <!-- Menu Administradores -->
  	<?php if($_SESSION['tipo_usuario']==1) { ?>

    <!--/.widget-nav-->
    <ul class="widget widget-menu unstyled">

        <li><a href="https://startthinkgreen.com/dashboard"><i class="fa fa-home"></i>Inicio</a></li>

        <li><a class="collapsed" data-toggle="collapse" href="#Administrativo-menu"><i class="fa fa-th">
        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
        </i>Administrativo</a>
            <ul id="Administrativo-menu" class="collapse unstyled">
                <li><a href="https://startthinkgreen.com/dashboard/administrativo/clientes"><i class="fa fa-handshake-o"></i>Clientes</a></li>
                <li><a href="https://startthinkgreen.com/dashboard/administrativo/proveedores"><i class="fa fa-code-fork"></i>Proveedores</a></li>
                <li><a href="https://startthinkgreen.com/dashboard/administrativo/comercial"><i class="fa fa-linode"></i>Comercial</a></li>
                <li><a href="https://startthinkgreen.com/dashboard/administrativo/legal"><i class="fa fa-check-square"></i>Legal</a></li>
                <li><a href="https://startthinkgreen.com/dashboard/administrativo/sistemadegestion"><i class="fa fa-cogs"></i>Sistema de gestión</a></li>

            </ul>
        </li>

        <li><a class="collapsed" data-toggle="collapse" href="#cargo-menu"><i class="fa fa-plane">
        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
        </i>Cargo</a>
            <ul id="cargo-menu" class="collapse unstyled">
                <li><a href="https://startthinkgreen.com/dashboard/cargo/proyectos"><i class="fa fa-bars"></i>Proyectos</a></li>
                <li><a href="https://startthinkgreen.com/dashboard/cargo/crear"><i class="fa fa-plus-circle"></i>Crear Proyecto</a></li>
                <li><a href="https://startthinkgreen.com/dashboard/cargo/buscar"><i class="fa fa-search"></i>Buscar Proyecto</a></li>
            </ul>
        </li>

        <li><a class="collapsed" data-toggle="collapse" href="#envi-menu"><i class="fa fa-pagelines">
        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
        </i>Envi</a>
            <ul id="envi-menu" class="collapse unstyled">
                <li><a href="https://startthinkgreen.com/dashboard/envi/proyectos"><i class="fa fa-bars"></i>Proyectos</a></li>
                <li><a href="https://startthinkgreen.com/dashboard/envi/crear"><i class="fa fa-plus-circle"></i>Crear Proyecto</a></li>
                <li><a href="https://startthinkgreen.com/dashboard/envi/buscar"><i class="fa fa-search"></i>Buscar Proyecto</a></li>
            </ul>
        </li>

        <li><a class="collapsed" data-toggle="collapse" href="#financiero-menu"><i class="fa fa-line-chart">
        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
        </i>Financiero</a>
            <ul id="financiero-menu" class="collapse unstyled">
                <li><a href="https://startthinkgreen.com/dashboard/financiero/ventas"><i class="fa fa-area-chart"></i>Ventas</a></li>
                <li><a href="https://startthinkgreen.com/dashboard/financiero/formatofinanciero"><i class="fa fa-file-text-o"></i>Formato Financiero</a></li>
            </ul>
        </li>

        <li><a class="collapsed" data-toggle="collapse" href="#ceo-menu"><i class="fa fa-pie-chart">
        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
        </i>CEO</a>
            <ul id="ceo-menu" class="collapse unstyled">
                <li><a href="https://startthinkgreen.com/dashboard/ceo/producción"><i class="fa fa-wpforms"></i>Producción</a></li>
            </ul>
        </li>
    </ul>


    <!--/.Menu Empresa-nav-->


    <ul class="widget widget-menu unstyled">


        <li><a class="collapsed" data-toggle="collapse" href="#empresa-menu"><i class="fa fa-building-o">
        </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
        </i>Empresa</a>
            <ul id="empresa-menu" class="collapse unstyled">
                <li><a href="https://startthinkgreen.com/empresa/recursoshumanos"><i class="fa fa-universal-access"></i>Recursos Humanos</a></li>
                <li><a href="https://startthinkgreen.com/empresa/usuarios"><i class="fa fa-users"></i>Usuarios</a></li>
                <li><a href="https://startthinkgreen.com/empresa/correspondencia"><i class="fa fa-envelope-open"></i>Correspondencia</a></li>
                <li><a href="https://startthinkgreen.com/empresa/datosempresa"><i class="fa fa-briefcase"></i>Datos empresa</a></li>
            </ul>
        </li>

      <li><a href="https://startthinkgreen.com/soporte"><i class="fa fa-life-ring"></i>Ayuda y soporte</a></li>
        <li><a href="https://startthinkgreen.com/conexion/logout.php"><i class="fa fa-sign-out"></i>Cerrar sesión </a></li>
    </ul>

  <?php } ?>


    <!-- Menu Cargo -->
    	<?php if($_SESSION['tipo_usuario']==2) { ?>

      <!--/.widget-nav-->
      <ul class="widget widget-menu unstyled">

          <li><a href="https://startthinkgreen.com/dashboard"><i class="fa fa-home"></i>Inicio</a></li>

          <li><a class="collapsed" data-toggle="collapse" href="#Administrativo-menu"><i class="fa fa-th">
          </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
          </i>Administrativo</a>
              <ul id="Administrativo-menu" class="collapse unstyled">
                  <li><a href="https://startthinkgreen.com/dashboard/administrativo/clientes"><i class="fa fa-handshake-o"></i>Clientes</a></li>
                  <li><a href="https://startthinkgreen.com/dashboard/administrativo/proveedores"><i class="fa fa-code-fork"></i>Proveedores</a></li>
                  <li><a href="https://startthinkgreen.com/dashboard/administrativo/comercial"><i class="fa fa-linode"></i>Comercial</a></li>
                  <li><a href="https://startthinkgreen.com/dashboard/administrativo/legal"><i class="fa fa-check-square"></i>Legal</a></li>
                  <li><a href="https://startthinkgreen.com/dashboard/administrativo/sistemadegestion"><i class="fa fa-cogs"></i>Sistema de gestión</a></li>

              </ul>
          </li>

          <li><a class="collapsed" data-toggle="collapse" href="#cargo-menu"><i class="fa fa-plane">
          </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
          </i>Cargo</a>
              <ul id="cargo-menu" class="collapse unstyled">
                  <li><a href="https://startthinkgreen.com/dashboard/cargo/proyectos"><i class="fa fa-bars"></i>Proyectos</a></li>
                  <li><a href="https://startthinkgreen.com/dashboard/cargo/crear"><i class="fa fa-plus-circle"></i>Crear Proyecto</a></li>
                  <li><a href="https://startthinkgreen.com/dashboard/cargo/buscar"><i class="fa fa-search"></i>Buscar Proyecto</a></li>
              </ul>
          </li>

      </ul>

      <!--/.Menu Empresa-nav-->


      <ul class="widget widget-menu unstyled">


          <li><a class="collapsed" data-toggle="collapse" href="#empresa-menu"><i class="fa fa-building-o">
          </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
          </i>Empresa</a>
              <ul id="empresa-menu" class="collapse unstyled">
                <li><a href="https://startthinkgreen.com/empresa/recursoshumanos"><i class="fa fa-universal-access"></i>Recursos Humanos</a></li>
                <li><a href="https://startthinkgreen.com/empresa/correspondencia"><i class="fa fa-envelope-open"></i>Correspondencia</a></li>
              </ul>
          </li>

          <li><a href="https://startthinkgreen.com/soporte"><i class="fa fa-life-ring"></i>Ayuda y soporte</a></li>
            <li><a href="https://startthinkgreen.com/conexion/logout.php"><i class="fa fa-sign-out"></i>Cerrar sesión </a></li>
      </ul>

    <?php } ?>


    <!-- Menu Clientes -->
    	<?php if($_SESSION['tipo_usuario']==11) { ?>

      <!--/.widget-nav-->
      <ul class="widget widget-menu unstyled">

          <li><a href="https://startthinkgreen.com/portalclientes"><i class="fa fa-home"></i>Inicio</a></li>
          <li><a href="https://startthinkgreen.com/portalclientes/susproyectos"><i class="fa fa-list"></i>Sus Proyectos</a></li>
        <!--<li><a href="https://startthinkgreen.com/portalclientes/mensajes"><i class="fa fa-envelope-o"></i>Mensajes</a></li>-->
          <li><a href="https://startthinkgreen.com/portalclientes/promociones"><i class="fa fa-gift"></i>Promociones</a></li>
      </ul>

      <ul class="widget widget-menu unstyled">
        <li><a href="https://startthinkgreen.com/soporte"><i class="fa fa-life-ring"></i>Ayuda y soporte</a></li>
          <li><a href="https://startthinkgreen.com/conexion/logout.php"><i class="fa fa-sign-out"></i>Cerrar sesión </a></li>
      </ul>

    <?php } ?>


</div>
