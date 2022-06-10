<?php

require_once 'conexion/conexion.php';
require_once 'respuestas.class.php';

// heredar metodos de la clase conexion
class auth extends conexion{

    public function login($json){
      
        $_respustas = new respuestas;
        $datos = json_decode($json,true);
        // sino existe el campo usuario o el campo paswor en el json
        if(!isset($datos['usuario']) || !isset($datos["password"])){
            //error con los campos
            return $_respustas->error_400();
        }else{
            
            $usuario = $datos['usuario'];
            $password = $datos['password'];
            $password = parent::encriptar($password);
            // // $password = parent::encriptar($password);
            $datos = $this->obtenerDatosUsuario($usuario);
        
            if($datos){
                //verificar si la contraseña es igual
                    if($password == $datos[0]['Password']){
                            if($datos[0]['Estado'] == "Activo"){
                                //crear el token
                                $verificar  = $this->insertarToken($datos[0]['UsuarioId']);
                                if($verificar){
                                        // si se guardo
                                        $result = $_respustas->response;
                                        $result["result"] = array(
                                            "token" => $verificar
                                        );
                                        return $result;
                                }else{
                                        //error al guardar
                                        return $_respustas->error_500("Error interno, No hemos podido guardar");
                                }
                            }else{
                                //el usuario esta inactivo
                                return $_respustas->error_200("El usuario esta inactivo");
                            }
                    }else{
                        //la contraseña no es igual
                        return $_respustas->error_200("El password es invalido");
                    }
            }else{
                //no existe el usuario
                return $_respustas->error_200("El usuaro $usuario  no existe ");
            }
        }
    }



    private function obtenerDatosUsuario($correo){
        $query = "SELECT UsuarioId, Password, Estado FROM usuariosap WHERE Usuario = '$correo'";
        //llamar al metodo de la clase padre para obetenerDatos con la palabra parent::metodo
        $datos = parent::obtenerDatos($query);
        //si en la fila 0 del array datos hay un campo que se llama UsarioId
        if(isset($datos[0]["UsuarioId"])){
            return $datos;
        }else{
            return 0;
        }
    }


    private function insertarToken($usuarioid){
        $val = true;
        $token = bin2hex(openssl_random_pseudo_bytes(16,$val));
        $date = date("Y-m-d H:i");
        $estado = "Activo";
        $query = "INSERT INTO usuarios_token (UsuarioId,Token,Estado,Fecha)VALUES('$usuarioid','$token','$estado','$date')";
        $verifica = parent::nomQuery($query);
        if($verifica){
            return $token;
        }else{
            return 0;
        }
    }


}




?>