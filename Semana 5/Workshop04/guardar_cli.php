<?php
    include "conexion.php";
    include "metodo_insertar.php";
    include "administrador.php";

        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $usu= $_POST['usuario'];
        $contra= $_POST['contraseña'];
        

            $datosC= array($nombre,$apellido,$usu,$contra);
            $obj= new metodos();
            if($obj->insertarCli($datosC)==1){
                header("location:administrador.php");
                echo "Guardado exitosamente!";     
        }
?>