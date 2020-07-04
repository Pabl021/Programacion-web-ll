<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div >
    <div >
            <div >
                <h3 ><b>✔️ CREAR CUENTA ✔️</b></h3>
                <form action="guardar_usu.php" method="POST">
                <input id="inNombre"type="text" class="form-control" name="nombre" placeholder="NOMBRE" autocomplete="off"><br><br>
                <input id="inPass"type="text" class="form-control" name="usuario" placeholder="USUARIO"><br><br>
                <input id="inPass"type="password" class="form-control" name="contraseña" placeholder="CONTRASEÑA"><br><br>
                <select name="rol"> <option value=administrador>Administrador</option><option value="cliente">Cliente</option></select><br><br>
                <input  type="submit"  id="creaCu" value="Registrarme">
                </form>
            </div>
            
    </div>
</div>
</body>
</html>