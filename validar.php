<?php 

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];



include('db.php');

if(isset($_POST['btnlogin']))
{
  $queryusuario = mysqli_query($conexion, "SELECT * FROM usuariologin WHERE nombre_usuario='$usuario'");
  $nrow = mysqli_num_rows($queryusuario);
  $row_usuario = mysqli_fetch_assoc($queryusuario);
  $buscarpash = mysqli_fetch_array($queryusuario);


  $usu = $row_usuario['clave_usuario'];
  ;
  if(($nrow == 1) && (md5($contraseña) === $usu))
  {
      //echo "hola $usuario y contraseña $usu --------";
      echo "<script>alert('Bienvenido(a) al sistema: $usuario'); window.location='home.php'</script>";
    }else
    {
      //echo "hola $usuario y contraseña $usu **********";
      echo "<script>alert('$nombre Usuario no existe en el sistema '); window.location='index.php'</script>";
    //echo "usuario no exixte en el sistema";
  }
}





?>