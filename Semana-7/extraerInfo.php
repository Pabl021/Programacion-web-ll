<?php
include_once "function.php";
 ?>

<?php

$csv_end = "  
";  
$csv_sep = ",";  
$csv_file = "output.csv";  
$csv="";  
$sql="SELECT * from datos";  


$c= new conectar();
        $conexion=$c->conexion();


$res=mysqli_query($conexion,$sql);  
while($row=mysqli_fetch_array($res))  
{  
   $csv.=$row['id'].$csv_sep.$row['nombre'].$csv_sep.$row['apellido'].$csv_sep.$row['nacionalidad'].$csv_end;  
}  echo $csv;
//Generamos el csv de todos los datos  
if (!$handle = fopen($csv_file, "w")) {  
    echo "Cannot open file";  
    exit;  
}  
if (fwrite($handle, utf8_decode($csv)) === FALSE) {  
    echo "Cannot write to file";  
    exit;  
}  
fclose($handle);  

?>