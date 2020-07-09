<?php
    class metodos{
        public function insertarCliente($datos){
            $con= new conectar();
            $conexion= $con->conexion();
            $sql= "INSERT INTO cliente(nombre, apellido, telefono, correo, direccion, nomUsu, contra, tipo) 
            values('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]')";
            
            return $result= mysqli_query($conexion, $sql);           
        }

        public function insertarCategoria($datos){
            $con= new conectar();
            $conexion= $con->conexion();
            $sql= "INSERT INTO categoria(nombre) values('$datos[0]')";
            
            return $result= mysqli_query($conexion, $sql);           
        }

        public function cargarCategorias($sql){
            $con= new conectar();
            $conexion= $con->conexion();
            $result= mysqli_query($conexion, $sql); 
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        public function cargarCategoriasP($sql){
            $con= new conectar();
            $conexion= $con->conexion();
            $result= mysqli_query($conexion, $sql); 
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }

        public function actualizarCategorias($datos){
            $con= new conectar();
            $conexion= $con->conexion();
            $sql= "UPDATE categoria set nombre='$datos[0]' WHERE id='$datos[1]'";
            return $result= mysqli_query($conexion, $sql);
        }

        public function eliminarCategoria($id){
            $con= new conectar();
            $conexion= $con->conexion();
            $sql="DELETE from categoria WHERE id='$id'";
            return $result= mysqli_query($conexion, $sql);
        }

    }
?>