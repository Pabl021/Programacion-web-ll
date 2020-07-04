<?php
    class metodos{
        public function insertarCliente($datos){
            $con= new conectar();
            $conexion= $con->conexion();
            $sql= "INSERT INTO cliente(nombre, apellido, telefono, correo, direccion, nomUsu, contra, tipo) 
            values('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]')";
            
            return mysqli_query($conexion, $sql);           
        }

    }
?>