<?php


          include('db.php');

          $nombre = $_POST['usuario'];
          $clave = $_POST['contraseña'];
         
         if(isset($_POST['btnregistrar']))
         {
           $pass_fuerte = md5($clave);
           $queryregistrar = "INSERT INTO usuariologin(nombre_usuario, clave_usuario) values('$nombre', '$pass_fuerte')";
           
           if(mysqli_query($conexion, $queryregistrar))
           {
             echo "<script>alert('Usuario Registrado: $nombre'); window.location='index.php'</script>";

           }else
           {
             echo "<script>alert('Error a registrar usuario')</script>";
           }
         }


          
        
        $conexion->close();

        //echo '<div class="alert alert-primary" role="alert"> Registro insertado correctamentamente en la DB</div> <br>';
        //echo "<a href='crear.php' >mostrar lista usuarios</a>"
    





?>