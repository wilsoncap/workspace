 
    <?php include ('./view/header.php'); ?>
  
      <?php
        $conexion = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
        if ($conexion->connect_error)
          die('Problemas con la conexion a la base de datos');

          $b_cedula = $_REQUEST['cedula'];
          $b_nombres = $_REQUEST['nombres'];
          $b_apellidos = $_REQUEST['apellidos'];
          $b_edad = $_REQUEST['edad'];
         
           if ($_REQUEST['genero'] == "hombre") {
              $b_sexo = "hombre";
           } else {
              $b_sexo = "mujer";
            }

          $b_correo = $_REQUEST['correo'];
          

        //call pa_insertar_usuario(152436, 'HECTOR MANUEL','PEREZ LUNA',25, 'MASCULINO', 'HECTOR@GMAIL.COM')

        // $conexion->query("CALL pa_insertar_usuario($b_cedula, $b_nombres, $b_apellidos, $b_edad, $b_sexo, $b_correo)") or
        // die($conexion->error);

        $conexion->query("CALL pa_insertar_usuario('$_REQUEST[cedula]', '$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[edad]', '$_REQUEST[genero]', '$_REQUEST[correo]')") or
          die($conexion->error);

        // $rubro = new rubros('.$_REQUEST[descripcion].');
        // $rubro->insertarRubros();

        //echo "<h2> el roducto es $b_producto, tiene un costo de $b_precio y esta en la categoria $b_categoria</h2>";
        

        $conexion->close();

        echo '<div class="alert alert-primary" role="alert"> Registro insertado correctamentamente en la DB</div> <br>';
        echo "<a href='crear.php' >mostra articulos ingresados</a>"
      ?>


      

      
      <?php include ('./view/footer.php'); ?>