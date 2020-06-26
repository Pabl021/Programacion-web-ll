<?php
    include("conexion.php");

    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $consu="DELETE FROM categoria WHERE id= $id";
        $res= mysqli_query($conex, $consu);
        if(!$res){
            header('Location: /lista.php?status=success&message=¡Se produjo un error, intentalo nuevamente!');
        }else{
            header('Location: /lista.php?status=success&message=¡Eliminado correctamente!');
        }
    }

?>