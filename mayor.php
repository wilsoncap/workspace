


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

      <header>            
            <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4">
                <h1><b><p style="color:orange;">AMERICANA - PHP</p></b></h1>
                <br>
                <br>
                <br>
                <a href="index.php">volver a la pagina inicio</a>
              </div>
              <div class="col-md-4"></div>
             </div>
      </header>

      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Seleccione un genero</label>
                <select class="form-select" aria-label="Default select example" name=genero>
                  <option selected></option>
                  <option value="hombre">Hombre</option>
                  <option value="mujer">Mujer</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">ingrese la edad</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="edad">
              </div>
              <br>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <br>
              <br>
              <?php
                  if(isset($_POST['submit'])){
                    if($_POST['genero'] == 'hombre' &&  $_POST['edad'] >=18) {
                      echo "<div class=\"alert alert-success\" role=\"alert\"> FELICIDADES, PUEDES ENTRAR</div>";
                    }else{
                      echo "<div class=\"alert alert-danger\" role=\"alert\"> LO SIENTO, NO PUEDES ENTRAR</div>";
                    }
                  }
              ?>
            </form>
        </div>
        <div class="col-md-4"></div>
			</div>

      <br>
      <br>
      <br>
      <br><br>
      <br>
        

        
       


        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-4">
				<i class="bi bi-xbox"> &nbsp;&nbsp;</i><a href="https://americana.edu.co/portal/">Visitanos</a>
			  </div>	
            <div class="col-md-3"></div>
        </div>
    </footer>
      



   
</body>
</html>


