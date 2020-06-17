<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
<form action="guardarDatos.php" method="post">

<h3 style="color:orange">DATOS PERSONALES</h3>
<input type="text" name="nombre" id="nombre" require placeholder="Digite su nombre"><br><br>
<input type="text" name="apellido" id="apellido" require placeholder="Digite su apellido"><br><br>
<input type="tel" name="telefono" id="telefono" require placeholder="Digite su teléfono"><br><br>
<input type="text" name="correo" id="correo" require placeholder="Digite su correo"><br><br>
<button style="color:purple" type="submit">Guardar Datos</button>

</form>

</body>
</html>