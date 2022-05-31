<?php
session_start();
// De nuevo vemos que la primera línea de esta página es la llamada a la función session_start() que, entre otras cosas, 
// rescata de un archivo de texto las variables de sesión creadas para ese usuario (recordemos que desde el navegador 
// todas las veces retorna una cookie con la clave que generó PHP la primera vez que llamamos a una página del sitio).
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<header>
  <img src="" alt="logo">
  <div>
  <?php
  // Tengamos en cuenta que en cualquier otra página del sitio tenemos acceso a las variables de sesión sólo con llamar 
  // inicialmente a la función session_start().
    echo "<h2> Bienvenido señor $_SESSION[usuario] </h2>";
    echo "<br><br>";
    echo "<h2> $_SESSION[clave] </h2>";
    ?>
  </div>
</header>
</body>
</html>