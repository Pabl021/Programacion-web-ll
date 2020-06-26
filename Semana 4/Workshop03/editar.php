<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
</body>
</html>

<?php
    include("conexion.php");

    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $consu= "SELECT * FROM categoria WHERE id= $id";
        $res= mysqli_query($conex, $consu);

        if(mysqli_num_rows($res)==1){
            $fila= mysqli_fetch_array($res);
            $nom= $fila['nombre'];
            $des= $fila['descripcion'];
            
        }
    }

    if(isset($_POST['actualizar'])){
        $id = $_GET['id'];
        $nom= $_POST['nombre'];
        $des= $_POST['descripcion'];

        $con= "UPDATE categoria set nombre= '$nom', descripcion= '$des' WHERE id= $id ";
        mysqli_query($conex, $con);
        header('Location: /lista.php?status=success&message=¡Editado correctamente!');
    }


?>




<php include("Semana 4/Workshop03/index.php")>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                
                    <form action="editar.php?id=<?php echo $_GET['id'];?>" method="POST">
                    
                        <div class="form-group">
                            <input type="text" name="nombre" value="<?php echo $nom;?>" class="form-control" placeholder="Actualizar Nombre">
                        </div>
                        <div class="form-group">
                            <textarea t name="descripcion" rows="2" class="form-control" placeholder="Actualizar Descripción"><?php echo $des;?></textarea>
                        </div>
                        <button class="btn btn-success" name="actualizar">
                            Actualizar
                        </button>
                    </form>
               
            </div>
        </div>
    </div>
</div>