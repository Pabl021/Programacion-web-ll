

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css"> 
      <title>JP SPORT</title>

  </head>

  <body> 
 
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
                <div class="col-md-5">
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong> {{session('guardado')}}</strong>
                  </div>
                    <h1 class="text-center"><b>JP STORE</b></h1>
                    <h3 class="text-center">Tu tienda de confianza ✔️</h3>
                      <form action="login.php" method="POST" role="form">
                        <input id="inNombre"type="text" class="form-control" name="usuario" placeholder="👁️USUARIO" autocomplete="off">
                        <input id="inPass"type="password" class="form-control" name="contra" placeholder="🔐CONTRASEÑA">
                        <input type="submit" href="" value="Iniciar sesión" class="btn btn-primary"> 
                        <hr>            
                      </form>
                        <h3  class="text-center"><b>¿No tienes una cuenta?</b></h3>                     
                        <a href="{{route('registro')}}"><input type="submit" id="creaCu"  value="Crear cuenta" class="btn btn-info"> </a>
                      
                </div>
                <div class="col-md-4"></div>
        </div>
    </div>

  </body>
</html>