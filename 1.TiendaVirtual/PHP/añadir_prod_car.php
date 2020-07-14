<?php
     include_once "../conexion/conexion.php";
     include "metodos.php";
     
    
     
     $con= new conectar();
    $conexion= $con->conexion();
    
    $idLog=$_GET['idLog'];
    $idPro=$_GET['id'];
    $nomPro=$_GET['nom'];   
    $precio=$_GET['precio'];
    $compro=true;
   

    $datos= array($idLog,$idPro, $nomPro,$precio,$compro);           
        $obj= new metodos();
        if($obj->insertarProductoCompra($datos)==1){               
            header("Location:vista_cliente.php?id=$idPro");
        }         
        else{
            echo "fallo al agregar";
        }
?>


