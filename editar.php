<?php include ('./view/header.php'); ?>


<?php

$cedula = $_GET['cedula'];
$nombres = $_GET['nombres'];
$apellidos = $_GET['apellidos'];
$edad = $_GET['edad'];
$sexo = $_GET['sexo'];
$correo = $_GET['correo'];

//echo "los datos son los siguientes cedula: $cedula nombres: $nombres apellidos: $apellidos edad: $edad sexo: $sexo correo: $correo";



?>


  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4">
    <a href="./crear.php">Volver al crud</a>
  </div>
   <div class="col-md-4"></div>

 <div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
        <div class="Panel Content">
					<div class="panel-heading alert alert-primary">
					  <i class="bi bi-dpad-fill"></i>
					  <span style="color:orange;"><b>&nbsp;&nbsp;LENGUAJE DE PROGRAMACIÓN IV</b></span>
					</div>
				</div>

   <div class="col-md-1"></div>  
   
    <div class="row">

     <div class="col-md-3"></div>
     <div class="col-md-6">
       <!-- <form>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Cedula</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cedula">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombres</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cedula">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cedula">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Direccion</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cedula">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Edad</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cedula">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Sexo</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cedula">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cedula">
      </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form> -->

  <form method="post" action="editar2.php">
      
        <label for="exampleInputEmail1" class="form-label">Cedula</label>
        <input type="number" class="form-control" id="" aria-describedby="emailHelp" name="cedula" value="<?=$cedula?>">
      
        <label for="exampleInputEmail1" class="form-label">Nombres</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombres" value="<?=$nombres?>" >

        <label for="exampleInputEmail1" class="form-label">Apellidos</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="apellidos" value="<?=$apellidos?>">

        <label for="exampleInputEmail1" class="form-label">Edad</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="edad" value="<?=$edad?>">

        <label for="exampleInputEmail1" class="form-label">Genero</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="genero" value="<?=$sexo?>">

        <label for="exampleInputEmail1" class="form-label">Correo</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" value="<?=$correo?>">
        <br>
        <button type="submit" class="btn btn-primary">enviar datos</button>
  </form>
     </div>
     <div class="col-md-3"></div> 
  </div>  
