<?php
    class conectar{
        private $servidor="localhost";
        private $usuario="root";
        private $bd="csv";
        private $pass="";

        public function conexion(){
            $conexion= mysqli_connect($this->servidor,
                                      $this->usuario,                                   
                                      $this->pass,
                                      $this->bd);
            return $conexion;
        }
    }

?>