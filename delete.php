  <?php include ('./view/header.php'); ?>
  <?php
  $mysql = new mysqli("db4free.net", "wilsonpru270921", "wili@159", "prueba270921");
  if ($mysql->connect_error)
    die("Problemas con la conexión a la base de datos");

  $ide = $_GET['cedula'];

  $registro = $mysql->query("select * from usuarios_ls where cedula=$_REQUEST[cedula]") or
    die($mysql->error);

  if ($reg = $registro->fetch_array()) {
    $mysql->query("call pa_borrar_usuario($_REQUEST[cedula])") or
      die($mysql->error);
      echo '<div class="alert alert-primary" role="alert"> Registro borrado exitosamente en la DB</div> <br>';
      echo "<a href='crear.php' >mostrar lista de usuarios</a>";
  } else
    echo 'No existe un artículo con dicho código';

  $mysql->close();

  ?>

    <?php include ('./view/footer.php'); ?>