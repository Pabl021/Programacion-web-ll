<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
<div id="body"> 
        <form action='index.php/usuario/update' method="POST">
        <?php foreach ($datos as $key ) {?>
            <input type="hidden" name="id"  value="<?php echo $key->id?>">
        <?php } ?>
			<h2>Digite la información que se le solicita.</h2>
			<input type="text" name="nombre" placeholder="NOMBRE" value="<?php echo $key->nombre?>" required="true"><br><br>
			<input type="text" name="apellido" placeholder="APELLIDO" value="<?php echo $key->apellido?>" required="true"><br><br>
			<input type="text" name="nacionalidad" placeholder="NACIONALIDAD" value="<?php echo $key->nacionalidad?>" required="true"><br><br>
			<input type="submit" value="Editar Datos">
			
        </form>
		</div>
  
</body>
</html>