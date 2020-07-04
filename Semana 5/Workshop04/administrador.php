
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> ✔️✔️Administrador✔️✔️</h1>
      <h3 ><b>✔️✔️ CREAR CLIENTE ✔️✔️</b></h3>
                <form action="guardar_cli.php" method="POST">
                <input id="inNombre"type="text" class="form-control" name="nombre" placeholder="NOMBRE" autocomplete="off"><br><br>
                <input id="inNombre"type="text" class="form-control" name="apellido" placeholder="APELLIDO" autocomplete="off"><br><br>
                <input id="inPass"type="text" class="form-control" name="usuario" placeholder="USUARIO"><br><br>
                <input id="inPass"type="password" class="form-control" name="contraseña" placeholder="CONTRASEÑA"><br><br>
                <input  type="submit"  id="creaCu" value="Crear cliente">
                </form>
                <a href="/logout.php">Logout</a> 
</body>
</html>