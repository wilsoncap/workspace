<?php


class conexion{


  private $server;
  private $user;
  private $password;
  private $database;
  private $conexion;

  function __construct(){
   $listadodatos = $this->datosConexion();
   foreach($listadodatos as $key => $value){
      $this->server = $value['server'];
      $this->user = $value['user'];
      $this->password = $value['password'];
      $this->database = $value['database'];
   }
   $this->conexion = new mysqli($this->server, $this->user, $this->password, $this->database);
    if($this->conexion->connect_errno){
      echo 'Algo va mal con la conexion';
      die();
    }  
  }


  private function datosConexion(){
    $direccion = dirname(__FILE__);
    $jsondata = file_get_contents($direccion . "/"."config");
    return json_decode($jsondata, true);

  }


  private function convertirLiutf8($array){
    array_walk_recursive($array, function(&$item, $key){
    if(!mb_detect_encoding($item, 'utf-8', true)){
      $item = utf8_encode($item);
    }
  });
  return $array;
}


public function obtenerDatos($sqlstr){
  $results = $this->conexion->query($sqlstr);
  $resultArray = array();
  // cada fila me la vas a nombrar como un key y el resultarray me lo vas a llenar con cada key
  foreach($results as $key){
    $resultArray[] = $key;
  }
  return $this->convertirLiutf8($resultArray);
}

public function nomQuery($slqstr){
  $results = $this->conexion->query($slqstr);
  if($results){
    return $this->conexion->affected_rows;
  }else{
    return $this->conexion->connect_error;
  }
}


// INSERT ID
public function nomQueryId($slqstr)
{
  try {

    /*
    Convertir fecha en formato timestamp en formatdo date
    DATE_FORMAT(FROM_UNIXTIME(`$fechaNacimiento`), '%e-%b-%Y') AS 'fecha_nacimiento'
    */

    $results = $this->conexion->query($slqstr);
      
    if($results)
    {
      $filas = $this->conexion->affected_rows;
    } else {
      die("Ha ocurrido un error: " . mysqli_error($this->conexion));
    }

    if($filas >= 1){
      return $this->conexion->insert_id;
    } else{
      return 0;
    }

  } catch (Exception $e) 
  {
    return "Ha ocurrido un error: " . $e->getMessage();
  }
}

protected function encriptar($string){
  return md5($string);
}

   public function conversionFecha($fecha){
        try {
          if ($fecha != 0) {
            $mes = substr($fecha, 0, 2);
            $dia = substr($fecha, 3, 2);
            $year = substr($fecha, 6, 4);
            $conversion_fecha_timestamp = mktime(0, 0, 0, $mes, $dia, $year);
            return $conversion_fecha_timestamp;
          }else{
            return 0;
          }
        } catch (Exception $e) {
            return "Ha ocurrido un error: " . $e->getMessage();
        }
       
    

    }


}





?>