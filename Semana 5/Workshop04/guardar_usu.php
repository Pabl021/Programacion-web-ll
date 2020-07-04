<?php
    include "conexion.php";
    include "metodo_insertar.php";
    include "crear_cuenta.php";

        $nombre= $_POST['nombre'];
        $usuario= $_POST['usuario'];
        $contra= $_POST['contraseña'];
        $rol= $_POST['rol'];
        

            $datos= array($nombre,$usuario,$contra,$rol);
            $obj= new metodos();
            if($obj->insertarUsu($datos)==1){
                header("location:index.php");
                echo "Guardado exitosamente!";     
        }
?>