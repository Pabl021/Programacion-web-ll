<?php
include_once "functions.php";
    $filas=$argv[1];
    cargarDatos($filas);



class metodos{
    public function mostrarDatos($sql){
        $c= new conectar();
        $conexion=$c->conexion();
        $result= mysqli_query($conexion,$sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
?>

<?php

 function cargarDatos($filas){
    $obj= new metodos();
    $sql="SELECT count(*) name FROM students";
    $fila= $obj->mostrarDatos($sql);
    $cant =intval($fila[0]['name']);        
        if($cant > $filas && $filas > 0){
            $sql="SELECT id, name, lastname,cedula,age FROM students LIMIT 0,$filas";
            $datos=$obj->mostrarDatos($sql);
                foreach ($datos as $key ) {
    
                    echo $key['id'].",";
                    echo $key['name'].",";
                    echo $key['lastname'].",";
                    echo $key['cedula'].",";
                    echo substr(trim( $key['age'].","), 0, 1)."\n";
                    
                }  
        }else{
            echo "Sus datos son insuficientes en la BD";
            }
}

?>

