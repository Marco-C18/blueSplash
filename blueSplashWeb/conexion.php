<?php

    class conexionDb{
        private $conect;
        public function __construct(){
            $servidor = 'localhost';
            $user = 'root';
            $password = '';
            $db = 'blueSplash';
            try {
                $this->conect = new mysqli($servidor, $user, $password, $db);
            }catch (\Throwable $error) {
                echo 'Error con la base de datos'.$error;
            };
        }
        
        public function ejecutar($sql){
            $this->conect->real_query($sql);
            return $this->conect->insert_id;
        }

        public function consultar($sql){
            $prepare = $this->conect->prepare($sql);
            $prepare -> execute();

            $result = $prepare -> get_result();
            return $result -> fetch_all();
        }
    }

?>
