<!DOCTYPE html>
<html lang="es">
    <head>
        <title>WORKSPACE PHP</title>    
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    </head>
    <body>

      <?php include ('./view/header.php'); ?>


    
      <div class="container">
            <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-5">
            </div>               
            <div class="col-md-2">
                <button class="btn btn-sm btn-primary" id="BotonAgregar">Agregar artículo</button>
            </div>
            </div>
      </div>

      
      
      <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
          <div class="row">
      <div class="col-12">
        <table class="table table-striped table-bordered table-hover" id="tablaarticulos">
          <thead>
            <tr>
              <td>Cedula</td>
              <td>Nombres</td>
              <td>Apellidos</td>
              <td>Sexo</td>
              <td>Edad</td>
              <td>Correo</td>
              <td>Accion</td>
            </tr>
          </thead>
          <tbody>
            <?php
              require_once("./conexion/conexion.php");

              $registros = new MySQLDB();
              $registros->getUsers('select * from vista_usuarios');
              
              while ($row = mysqli_fetch_assoc($registros)) {


                              echo "<th scope=\"'row'\"> $registros[cedula];</th> <br>";
                              // echo "Nombre:" . $row['nombres'] . "<br>";
                              // echo "apellido:" . $row['apellidos'] . "<br>";
                              // echo "edad:" . $row['edad'] . "<br>";
                              // echo "sexo:" . $row['sexo'] . "<br>";
                              // echo "correo:" . $row['correo'] . "<br>";

                              
                              // array_push($data, $row);
                          }
            ?>
              <tr>
                <th scope="row"><?php echo $registros['cedula']; ?></th>
                <!-- <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Mark</td>
                <td>Otto</td> -->
                <td>
                  <button class="btn btn-sm btn-primary" id="BotonAgregar">modificar</button>
                  <button class="btn btn-sm btn-primary" id="BotonAgregar">Eliminar</button>
                </td>
              </tr>
          </tbody>
        </table>
        
      </div>
    </div>

    <!-- Formulario (Agregar, Modificar) -->

        <div class="modal fade" id="FormularioArticulo" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" id="Codigo">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Descripción:</label>
                  <input type="text" id="Descripcion" class="form-control" placeholder="">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-12">
                  <label>Precio:</label>
                  <input type="number" id="Precio" class="form-control" placeholder="">
                </div>
              </div>

            <div class="modal-footer">
              <button type="button" id="ConfirmarAgregar" class="btn btn-success">Agregar</button>
              <button type="button" id="ConfirmarModificar" class="btn btn-success">Modificar</button>
              <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
            </div>

          </div>
        </div>
      </div>

    </div>
      </div>               
      <div class="col-md-1"></div>
      </div>
      <?php include ('./view/footer.php'); ?>
      



   
</body>
</html>