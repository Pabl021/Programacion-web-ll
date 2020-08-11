<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css"> 
    <title>Registro</title>
</head>
<body>
    
</body>
</html>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-5">
                <h1 class="text-center"><b>JP SPORT</b></h1>
                <h3 class="text-center">Tu tienda de confianza ✔️</h3>
                <h3 class="text-center">📓 Formulario de ingreso 📓</h3>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <input id="inNombre"type="text" class="form-control" name="nombre" placeholder="👨‍💼 Nombre" autocomplete="off" value="{{ old('nombre') }}">
                        @error('nombre') 
                        <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <strong>¡Nombre requerido!</strong>
                        </div>                    
                        @enderror

                        <input id="inApe"type="text" class="form-control" name="apellido" placeholder="👨‍💼 Apellido" autocomplete="off"  value="{{ old('apellido') }}">
                      @error('apellido') 
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>¡Apellido requerido!</strong>
                      </div>                    
                      @enderror
                      <input id="inTel"type="tel" class="form-control" pattern="^[6|7|8|]\d{7}$" name="telefono" placeholder="📞 Teléfono" autocomplete="off"  value="{{ old('telefono') }}">
                      @error('telefono') 
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>¡Teléfono requerido!</strong>
                      </div>                    
                      @enderror
                      <input id="inCor"type="email" class="form-control" name="correo" placeholder="📧 correo" autocomplete="off"  value="{{ old('correo') }}">
                      @error('correo') 
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>¡Correo requerido!</strong>
                      </div>                    
                      @enderror
                      <input id="inDir"type="text" class="form-control" name="direccion" placeholder="🌆 dirección" autocomplete="off"  value="{{ old('direccion') }}">
                      @error('direccion') 
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>¡Correo requerido!</strong>
                      </div>                    
                      @enderror
                      <input id="inUsu"type="text" class="form-control" name="nomUsu" placeholder="👁️ Usuario" autocomplete="off"  value="{{ old('nomUsu') }}">
                      @error('nomUsu') 
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>¡Usuario requerido!</strong>
                      </div>                    
                      @enderror
                      <input id="inCon"type="password" class="form-control" name="contra" placeholder="🔐 Contraseña" autocomplete="off"  value="{{ old('contra') }}">
                      @error('contra') 
                      <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>¡Contraseña requerida o invalida!</strong>
                      </div>                    
                      @enderror
                    
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
