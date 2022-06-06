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
  foreach($results as $key){
    $resultArray[] = $key;
  }
  return $this->convertirLiutf8($resultArray);
}

public function nomQuery($slqstr){
  $results = $this->conexion->query($slqstr);
  return $this->conexion->affected_rows;
}


// INSERT ID
public function nomQueryId($slqstr){
  $results = $this->conexion->query($slqstr);
  $filas = $this->conexion->affected_rows;
  if($filas >= 1){
    return $this->conexion->insert_id;
  } else{
    return 0;
  }
}


}



?>