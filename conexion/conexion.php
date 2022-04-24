<?php

class MySQLDB
{

    private $host = 'db4free.net';
    private $usuario = 'wilsonpru270921';
    private $pass='wili@159';
    private $db='prueba270921';

    private $connection;

    // function __construct($host, $usuario, $pass, $db)
    // {
    //     $this->host = $host;
    //     $this->usuario = $usuario;
    //     $this->pass = $pass;
    //     $this->db = $db;
    // }

    function connect(){
        
        $this->connection = mysqli_connect(
            $this->host,
            $this->usuario,
            $this->pass,
            $this->db
        );

        $this->connection->set_charset("utf8");

        if (mysqli_connect_errno()) {
            print("error al conectarse");
        }
    }

    function getUsers($sql)
    {
        $data = array();
        $result = mysqli_query($this->connection, $sql);

        $error = mysqli_error($this->connection);

        if (empty($error)) {
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "Codigo:" . $row['cedula'] . "<br>";
                    echo "Nombre:" . $row['nombre'] . "<br>";
                    echo "apellido:" . $row['apellido'] . "<br>";
                    echo "edad:" . $row['edad'] . "<br>";
                    echo "sexo:" . $row['sexo'] . "<br>";
                    echo "correo:" . $row['correo'] . "<br>";

                    //pendiente crear tabla en la nube>>>>>>>>>>>>>>>>>>>>>>>>>>>>><
                    // array_push($data, $row);
                }
            }
        } else {
            throw new Exception($error);
        }
        return $data;
    }

    // function numRows($sql)
    // {
    //     $result = mysqli_query($this->connection, $sql);
    //     $error = mysqli_error($this->connection);

    //     if (empty($error)) {
    //         return mysqli_num_rows($result);
    //     } else {
    //         throw new Exception($error);
    //     }
    // }

    // function getDataSingle($sql)
    // {

    //     $result = mysqli_query($this->connection, $sql);

    //     $error = mysqli_error($this->connection);

    //     if (empty($error)) {
    //         if (mysqli_num_rows($result) > 0) {
    //             return mysqli_fetch_assoc($result);
    //         }
    //     } else {
    //         throw new Exception($error);
    //     }
    //     return null;
    // }

    // function getDataSingleProp($sql, $prop)
    // {

    //     $result = mysqli_query($this->connection, $sql);

    //     $error = mysqli_error($this->connection);

    //     if (empty($error)) {
    //         if (mysqli_num_rows($result) > 0) {
    //             $data = mysqli_fetch_assoc($result);
    //             return $data[$prop];
    //         }
    //     } else {
    //         throw new Exception($error);
    //     }
    //     return null;
    // }

    // function executeInstruction($sql)
    // {
    //     $success = mysqli_query($this->connection, $sql);

    //     $error = mysqli_error($this->connection);

    //     if (empty($error)) {
    //         return $success;
    //     } else {
    //         throw new Exception($error);
    //     }
    // }

    // function close()
    // {
    //     mysqli_close($this->connection);
    // }

    // function getLastId()
    // {
    //     return mysqli_insert_id($this->connection);
    // }
}
