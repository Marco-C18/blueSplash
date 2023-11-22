<?php   

    require_once "./";

    class Conexion {
        public function conectar(){
            try {
                $server = "127.0.0.1";
                $usuario = "admin";
                $password = "123456";
                $baseDatos = "blueSplash";
                $puerto = "27017";

                $cadenaConexion = "mongodb://" . 
                                    $usuario . ":" .
                                    $password . "@" .
                                    $server . ":" .
                                    $puerto . "/" . 
                                    $baseDatos;
                
                $cliente = new MongoDB/Client($cadenaConexion);
                return $cliente->selectDatabase($baseDatos);
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

    }
    // mongosh -u mongoadmin -p 123456 --authenticationDatabase blueSplash

?>