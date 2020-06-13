<?php

include("conexion.php");
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$tel=$_POST['telefono'];
$cor=$_POST['correo'];

$insertar= "INSERT INTO datos(nombre, apellido, telefono, correo)VALUES('$nom','$ape','$tel','$cor')";
$resultado= mysqli_query($conex, $insertar);

if(!$resultado){
    echo "Se ha producido un error, intentelo nuevamente";
}else{
    echo "Registrado exitosamente";
}

?>