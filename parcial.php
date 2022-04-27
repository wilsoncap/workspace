
      <?php include ('./view/header.php'); ?>
      <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <?php 
        for($i=0; $i<=100; $i++){

          // if($i % 10 == 0 ){
          //     $dec = 10;
          //     echo "$i => X <br>";
          // }
         

          if(($i % 2 == 0) and ($i % 3 == 0) and ($i % 10 == 0) and ($i <> 0)){
            echo "$i => wubbla luba X <br>";
          }else
              if(($i % 2 == 0) and  ($i % 10 == 0) and ($i<>0)){
                echo "$i => wubbla X <br>";
              }else
                  if(($i % 3 == 0) and ($i % 10 == 0)and ($i<>0)){
                    echo "$i => lubla X <br>";
                  }else
                      if($i % 10 == 0 and ($i<>0)){
                        echo "$i => X <br>";
                      }else
                      if($i % 2 == 0 and ($i<>0)){
                            echo "$i => wubbla <br>";
                          }else
                              if($i % 3 == 0 and ($i<>0)){
                                echo "$i => lubbla <br>";
                              }else
                                  echo "$i<br>";
                                  }
                                
           
          // if($i % 2 == 0 && $i % 3 == 0){
          //   echo "$i => $wubbla_lubbla <br>";
          //   if($i % 2 == 0 && $i % 3 == 0){

          //   }
          // }else
          //     if($i % 2 == 0){
          //       echo "$i => Wubbla<br>";
          //     }else
          //         if($i % 3 == 0){
          //           echo "$i => lubbla<br>";
          //         }else
          //             if($i % 10 == 0 ){
          //               echo "$i => X <br>";
          //             }else{
          //               echo "$i  <br>";
          //             }

         
          
        

                     
                 
        ?>
      </div>               
      <div class="col-md-4"></div>
      </div>
      
      <?php include ('./view/footer.php'); ?>
