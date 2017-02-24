<!-- Contenido Administradores -->


    <div class="btn-controls">
        <div class="btn-box-row row-fluid">
            <a href="https://startthinkgreen.com/dashboard/administrativo" class="btn-box big span4"><i class="fa fa-th"></i><b>Admin</b>
            </a><a href="https://startthinkgreen.com/dashboard/cargo" class="btn-box big span4"><i class="fa fa-plane"></i><b>Cargo</b>
            </a><a href="https://startthinkgreen.com/dashboard/envi" class="btn-box big span4"><i class="fa fa-pagelines"></i><b>Envi</b></a>
        </div>
        <div class="btn-box-row row-fluid">
            <a href="https://startthinkgreen.com/dashboard/financiero" class="btn-box big span4"><i class="fa fa-line-chart"></i><b>Financiero</b>
            </a><a href="https://startthinkgreen.com/dashboard/ceo" class="btn-box big span4"><i class="fa fa-pie-chart"></i><b>Ceo</b>
            </a><a href="https://startthinkgreen.com/dashboard/empresa" class="btn-box big span4"><i class="fa fa-building-o"></i><b>Empresa</b></a>
        </div>
    </div>
    <!--/#btn-controls-->


    <!--/.module-->
    <div class="module">
        <div class="module-head">
            <h3> <i class="fa fa-bell"></i>Centro de Notificaciones</h3>
        </div>
        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                width="100%">
                <thead>
                    <tr>
                      <th class="no-sorting_asc";>
                         Detalle
                     </th>
                     <th>
                         Fecha
                     </th>
                     <th>
                         Hora
                     </th>
                     <th>
                         Estado
                     </th>
                    </tr>
                </thead>
                <tbody>
                  	<?php while($rownotificaciones=$resultadonotificaciones->fetch_assoc()){ ?>
                  <tr>
                    <td>
                      <?php echo $rownotificaciones['detalle'];?>
                    </td>
                    <td>
                      <?php
                      $date = date_create($rownotificaciones['fecha']);
                      echo date_format($date, 'd/m/Y');
                      ?>
                    </td>
                    <td>
                      <?php
                      $date = date_create($rownotificaciones['fecha']);
                      echo date_format($date, 'g:i a');
                      ?>
                    </td>
                    <td>
                      <?php
                      $queryestadonotificaciones = "SELECT id_estado, nombre_sistema, nombre, icono FROM estados WHERE id_estado = $rownotificaciones[estado]";
                      $resultadoestadonotificaciones=$mysqli->query($queryestadonotificaciones);
                      $resultadoestadonotificaciones = mysqli_fetch_assoc($resultadoestadonotificaciones);
                      ?>
                      <strong class="<?php echo $resultadoestadonotificaciones['nombre_sistema'];?>"><i class="<?php echo $resultadoestadonotificaciones['icono'];?>"></i> <?php echo $resultadoestadonotificaciones['nombre'];?></strong>
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
<!--Finalización Contenido Administradores -->
