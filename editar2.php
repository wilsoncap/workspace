 
    <?php include ('./view/header.php'); ?>
  
      <?php
        $conexion = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
        if ($conexion->connect_error)
          die('Problemas con la conexion a la base de datos');


        $conexion->query("CALL pa_actualizar_usuario('$_REQUEST[cedula]', '$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[edad]', '$_REQUEST[genero]', '$_REQUEST[correo]', '$_REQUEST[url_img]')") or
          die($conexion->error);

        $conexion->close();

        echo '<div class="alert alert-primary" role="alert"> Registro modificado correctamentamente en la DB</div> <br>';
        echo "<a href='crear.php' >mostrar lista usuarios</a>"
      ?>


      

      
      <?php include ('./view/footer.php'); ?>