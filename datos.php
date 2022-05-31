<?php
header('Content-Type: application/json');

function retornarConexion() {
  $con=mysqli_connect("db4free.net", "wilsonpru270921", "wili@159", "prueba270921") or die("problemas") ;
  mysqli_set_charset($con,'utf8'); 
  return $con;
}

$conexion = retornarConexion();

$datos = mysqli_query($conexion, "select * from vista_usuarios");
$resultado = mysqli_fetch_all($datos, MYSQLI_ASSOC);
echo json_encode($resultado);
?>