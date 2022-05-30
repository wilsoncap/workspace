<?php 

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


include('db.php');

$consulta = "SELECT*FROM usuarios WHERE nombre_usuario='$usuario' AND clave='$contraseña' ";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);
if($filas){
  header("Location: http://localhost:8080/workspace/home.php");
}
else{
  ?>
  <?php
    include('index.php')
  ?>
  <h1 class="">Error en la Autenticacion</h1>
  <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);