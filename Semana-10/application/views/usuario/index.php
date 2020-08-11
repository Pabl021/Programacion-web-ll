<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>CRUD</title>
</head>
<body>

<div id="container">
    <h1>¡REGISTRO DE USUARIOS!</h1>
    
    <ul class="nav nav-pills">
  <li class="active"><a data-toggle="tab" href="#home">Registrarse</a></li>
  <li><a data-toggle="tab" href="#menu1">Usuarios</a></li>
 
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <div id="body">
		<form action='index.php/usuario/insertar' method="post">
			<h2>Digite la información que se le solicita.</h2>
			<input type="text" name="nombre" placeholder="NOMBRE" required="true"><br><br>
			<input type="text" name="apellido" placeholder="APELLIDO" required="true"><br><br>
			<input type="text" name="nacionalidad" placeholder="NACIONALIDAD" required="true"><br><br>
			<input type="submit" value="Guardar Datos">
			
        </form>
		</div>
  </div>
  <div id="menu1" class="tab-pane fade">
    <table class="table table-striped table-dark">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO</th>
            <th scope="col">NACIONALIDAD</th>
            <th scope="col">OPCIONES</th>
        </thead>
        <tbody>
            <?php
            foreach ($lisUsu as $key) {
               ?>  
                    <tr>
                        <td><?php echo $key->id; ?></td>
                        <td><?php echo $key->nombre; ?></td>
                        <td><?php echo $key->apellido; ?></td>
                        <td><?php echo $key->nacionalidad; ?></td>
                        <td><a href="<?php echo "/index.php/usuario/eliminar/".$key->id; ?>">❌</a>
                        |
                        <a href="<?php echo "/index.php/usuario/editar/".$key->id; ?>">✏️</a></td>
                    </tr>
               <?php } ?>
        </tbody>
    </table>
  </div>
  
</div>



</body>
</html>