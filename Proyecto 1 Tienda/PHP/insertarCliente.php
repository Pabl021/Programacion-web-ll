

<?php
    include "conexion.php";
    include "metodos.php";
    require_once "sessions.php";
    require_once "registro.php";
    
    if(isset($_POST['save'])){
        $nombre= $_POST['txtnombre'];
        $apellido= $_POST['txtapellido'];
        $telefono= $_POST['txttelefono'];
        $correo= $_POST['txtcorreo'];
        $direccion= $_POST['txtdireccion'];
        $usuario= $_POST['txtnomUsu'];
        $contra= $_POST['txtcontraseña'];
        $cliente= "cliente";
    
        if(empty($nombre)){         
            $_SESSION['wrong_alert'] = true;
            $_SESSION['error'] = "NOMBRE REQUERIDO"; 
            header("location:registro.php");
        }else if(empty($apellido)){
            $_SESSION['wrong_alert'] = true;
            $_SESSION['error'] = "APELLIDO REQUERIDO"; 
            header("location:registro.php");
        }else if(empty($telefono) || !is_numeric($telefono)){
            $_SESSION['wrong_alert'] = true;
            $_SESSION['error'] = "TELÉFONO REQUERIDO"; 
            header("location:registro.php");
        }else if(empty($correo)){
            $_SESSION['wrong_alert'] = true;
            $_SESSION['error'] = "CORREO REQUERIDO"; 
            header("location:registro.php");
        }else if(empty($direccion)){
            $_SESSION['wrong_alert'] = true;
            $_SESSION['error'] = "DIRECCIÓN REQUERIDA"; 
            header("location:registro.php");
        }else if(empty($usuario)){
            $_SESSION['wrong_alert'] = true;
            $_SESSION['error'] = "USUARIO REQUERIDO"; 
            header("location:registro.php");
        }else if(empty($contra)){
            $_SESSION['wrong_alert'] = true;
            $_SESSION['error'] = "CONTRASEÑA REQUERIDA"; 
            header("location:registro.php");
        }else{
            $datos= array($nombre,$apellido,$telefono,$correo,$direccion,$usuario,$contra,$cliente);
            $obj= new metodos();
            if($obj->insertarCliente($datos)==1){
                $_SESSION['success_alert'] = true;
                header("location:index.php");
            }
        }
    }  

    


?>
