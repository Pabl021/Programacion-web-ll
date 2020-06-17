<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperatura</title>

    <style type="text/css">
    b{
    color: #C1294E }
  </style>
  
</head>
<body>
    
<?php
$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 
63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

//mediante esta parte lo que se hace es sacar la media mediante la formula.
$media = array_sum($temp)/count($temp);
echo  "La temperatura media es de: <b>".sprintf('%0.1f',$media)."<br><br></b>";
 
//EXTRAER MAYORES
//el rsort lo que hace es ordenarme los numeros y el arreglo unico va contener los que no se repiten
rsort($temp);
$unicosMay=[];
//recorre el arreglo mediante los valores, luego si ahi encontro algo repetido no lo agrega, sino si lo agrega
//mediante el array_push a unicos.
foreach ($temp as $v){
    if (!in_array($v,$unicosMay)) {
       array_push($unicosMay,$v); 
    }
}
echo "Las temperaturas más altas son: ";
//lo recorro para mostrar los unicos 5 mayores del arreglo
for ($i=0; $i < 5; $i++) { 
    echo "<b>".$unicosMay[$i]."  "."</b>";
}

//EXTRAER MENORES
sort($temp);
$unicosMen=[];
foreach ($temp as $va){
    if (!in_array($va,$unicosMen)) {
       array_push($unicosMen,$va); 
    }
}

echo "<br><br>Las temperaturas más bajas son: ";
for ($i=0; $i < 5; $i++) { 
    echo  "<b>".$unicosMen[$i]."  "."</b>";
}

?>

</body>
</html>