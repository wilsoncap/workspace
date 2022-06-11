<?php

// echo "hola auth";
require_once 'clases/auth.class.php';
require_once 'clases/respuestas.class.php';

$_auth = new auth;
$_respuestas = new respuestas;



if($_SERVER['REQUEST_METHOD'] == "POST"){

    //recibir datos
    //echo "Hola desde el documento";
    $postBody = file_get_contents("php://input");
    //print_r($postBody);

    //enviamos los datos al manejador
    // llamo a la clase aut con el metodo login y le paso lo que me llega por json
    $datosArray = $_auth->login($postBody);
    print_r(json_encode($datosArray));

    //delvolvemos una respuesta
    header('Content-Type: application/json');
    //si en datosarray esiste un result-errorId entonecs
    if(isset($datosArray["result"]["error_id"])){
        $responseCode = $datosArray["result"]["error_id"];
        http_response_code($responseCode);
    }else{
        http_response_code(200);
    }
    //json_encode convierte un arrary en un string
    echo json_encode($datosArray);


}else{
    header('Content-Type: application/json');
    $datosArray = $_respuestas->error_405();
    echo json_encode($datosArray);
    //echo "metodo no permitido";
}



?>