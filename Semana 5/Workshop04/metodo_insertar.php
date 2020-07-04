<?php
    class metodos{
        public function insertarUsu($datos){
            $con= new conectar();
            $conexion= $con->conexion();
            $sql= "INSERT INTO usuarios(nombre, usuario, contraseña, rol) 
            values('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";
            
            return mysqli_query($conexion, $sql);           
        }

        public function insertarCli($datosC){
            $con= new conectar();
            $conexion= $con->conexion();
            $sql= "INSERT INTO clientes(nombre, apellido, usuario, contraseña) 
            values('$datosC[0]','$datosC[1]','$datosC[2]','$datosC[3]')";
            
            return mysqli_query($conexion, $sql);           
        }

    }
?>