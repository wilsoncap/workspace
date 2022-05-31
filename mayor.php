

      <?php include ('./view/header.php'); ?>

      <div class="row">

      <div class="col-md-1"></div>
      <div class="col-md-10">
            <div class="Panel Content">
              <div class="panel-heading alert alert-primary">
                <i class="bi bi-dpad-fill"></i>
                <span style="color:orange;"><b>&nbsp;&nbsp;LENGUAJE DE PROGRAMACIÓN IV</b></span>
              </div>
            </div>

            
            
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
        <?php include ('./view/footer.php'); ?>
      



