
      <?php include ('./view/header.php'); ?>
       <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
          <a class="btn btn-primary" href="insertar.php" role="button">Agregar Nuevo</a>';
        </div>
      </div>

      <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
			<?php
        $conexion = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
        if ($conexion->connect_error)
          die('Problemas con la conexion a la base de datos');

        $registros = $conexion->query("select * from vista_usuarios") or
          die($conexion->error);
        // Ahora llamamos al método query pasando un string con el comando SQL select. El método query retorna un objeto
        // de la clase mysqli_result:

        echo '<table class="table">';
        echo ' <thead>
              <tr>
                <th scope="col">cedula</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Edad</th>
                <th scope="col">Sexo</th>
                <th scope="col">Correo</th>
                <th scope="col">Accion</th>
              </tr>
            </thead>';
        while ($reg = $registros->fetch_array()) {
          // El objeto de la clase mysqli_result tiene un método llamado fetch_array que retorna de a uno cada una de 
          // los registros recuperados con el comando SQL select:
          echo '<tr>';

          echo '<td>';
          echo $reg['cedula'];
          echo '</td>';

          echo '<td>';
          echo $reg['nombres'];
          echo '</td>';

          echo '<td>';
          echo $reg['apellidos'];
          echo '</td>';

          echo '<td>';
          echo $reg['edad'];
          echo '</td>';

           echo '<td>';
          echo $reg['sexo'];
          echo '</td>';

           echo '<td>';
          echo $reg['correo'];
          echo '</td>';
          echo '<td>';
          echo '<a class="btn btn-warning" href="#" role="button">Modificar</a>';
          echo '  ';
          echo '<a class="btn btn-danger" href="delete.php?cedula=$reg->cedula" role="button">Eliminar </a>';
          echo '</td>';

          echo '</tr>';
        }
        echo '<table> ';

        echo "<br>";



        $conexion->close();

        echo "<a href='index.php' >Volver al index</a>"

        ?>
            <!-- Aquí el código HTML de la aplicación -->
          </div>               
          <div class="col-md-1"></div>
          </div>

      <?php include ('./view/footer.php'); ?>
