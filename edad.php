

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
                  <label for="exampleInputPassword1" class="form-label">ingrese su nombre</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nombre">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">ingrese su edad</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="edad">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <br>
                <br>
                <?php
                    if(isset($_POST['submit'])){
                      $nombre = $_POST['nombre'];
                      $edad = $_POST['edad'];
                        echo "<div class=\"alert alert-success\" role=\"alert\"> Hola $nombre, tu edad es $edad </div>";
                      
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
      



