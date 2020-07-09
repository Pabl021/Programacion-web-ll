<?php

include_once "../conexion/conexion.php";
include "metodos.php";

$id=$_GET['id'];


$obj= new metodos();

if($obj->eliminarCategoria($id)==1){               
    header("location:manipular_categoria.php");
}else{
    echo "fallo al agregar";
}
}

?>