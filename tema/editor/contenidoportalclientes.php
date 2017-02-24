<!-- Contenido portalclientes -->

    <!--/.module-->
    <div class="module">
        <div class="module-head">
            <h3> <i class="fa fa-list"></i>Sus Proyectos</h3>
        </div>
        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                width="100%">
                <thead>
                    <tr>
                      <th>
                         #D.O
                     </th>
                     <th>
                         Detalle
                     </th>
                     <th>
                         Fecha
                     </th>
                     <th>
                         Estado
                     </th>
                     <th>
                        <i class="fa fa-eye"></i>| <i class="fa fa-file-text"></i>
                     </th>
                    </tr>
                </thead>
                <tbody>
                  	<?php while($rowdo=$resultadodo->fetch_assoc()){ ?>
                  <tr style="cursor: pointer;" onclick="window.location.href='do?id_do=<?php echo $rowdo['id_do'];?>';" >
                    <td>
                      <?php echo $rowdo['id_do'];?>
                    </td>
                    <td>
                      <?php echo $rowdo['detalle'];?>
                    </td>
                    <td>
                      <?php
                      $date = date_create($rowdo['fecha']);
                      echo date_format($date, 'd/m/Y');
                      ?>
                    </td>
                    <td>
                      <?php
                      $queryestadodo = "SELECT id_estado, nombre_sistema, nombre, icono FROM estados WHERE id_estado = $rowdo[estado]";
                      $resultadoestadodo=$mysqli->query($queryestadodo);
                      $rowresultadoestadodo = mysqli_fetch_assoc($resultadoestadodo);
                      ?>
                      <strong class="<?php echo $rowresultadoestadodo['nombre_sistema'];?>"><i class="<?php echo $rowresultadoestadodo['icono'];?>"></i><?php echo $rowresultadoestadodo['nombre'];?></strong>
                    </td>
                    <td>
                      <a href="do?id_do=<?php echo $rowdo['id_do'];?>">Ver | Agregar Documentos</a>
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
