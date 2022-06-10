<?php
require_once './clases/conexion/conexion.php';

$conexion = new conexion();
$direcctorio = dirname(__FILE__);
//echo "Conecction success..... $direcctorio";
//$jsonprueba = file_get_contents($direcctorio . "/clases/conexion/"."config");
//echo $jsonprueba;

// $query = 'select * from pacientes';
// print_r($conexion->obtenerDatos($query));

//$query = 'INSERT INTO pacientes(DNI) VALUES(9)';
//print_r($conexion->nomQueryId($query));
echo "hola index";
?>
 
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />
    <style>
      .row {
        min-height: 100vh;
      }

      .formulario {
        border: 1px solid rgb(17, 136, 226);
        border-radius: 20px;
        padding: auto;
        padding: 20px;
        width: 300px;
      }
      .titulo{
        font-size: 20px;

      }
    </style>
    <title>Document</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6" style="background-color: rgb(255, 255, 255)">
          <img src="./img/logo3.png" alt="" />
        </div>
        <div class="col-lg-6" style="background-color: rgb(177, 221, 255)">
          <div class="container">
            <div
              class="row"
              style="height: 300px; background-color: rgb(177, 221, 255)"
            >
              <div
                class="col align-self-start"
                style="background-color: #aaa"
              ></div>
              <div class="col align-self-center">
                <p class="titulo">LOGEARSE AL SISTEMA</p>
                <form class="formulario" action="validar.php" method="post">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"
                      >Usuario</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="exampleInputEmail1"
                      aria-describedby="emailHelp"
                      name="usuario"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"
                      >Password</label
                    >
                    <input
                      type="password"
                      class="form-control"
                      id="exampleInputPassword1"
                      name="contraseña"
                    />
                  </div>

                  <button type="submit" class="btn btn-primary" name="btnlogin">
                    Ingresar
                  </button>
                </form>
                <br>
                <a href="registrarusuario.php">crear un nuevo usuario</a>
              </div>
              <div class="col align-self-end" style="background-color: #ccc">
                <!-- <h1>Columna 3</h1> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Hacer ejercicio 37....Si seguro que es una buena practica-->
  </body>
</html> -->
