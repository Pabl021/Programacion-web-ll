<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('menuCli.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/cargarProductos.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css"> 
    
</head>
<body >
    <div id="app" >
        <nav class="navbar navbar-expand-md  shadow-sm" style="background:#9DDFDD" >
            <div class="container" >
                <a class="navbar-brand" href="#">
                    <img src="../imgPro/jp.png" width="60" height="60" alt="">
                    </a>
                <a class="navbar-brand">
                <a href="{{Route('cliente')}}"><h4 style="color: #8a0f01"><b> Cliente: {{ Auth::user()->name }}</b></h4></a>
                </a>
                
                <ul class="navbar-nav mr-auto">
                      
                    <select  id="list" onchange="getId();" style=" background-color:#c4fdf6; font-size: 20px; color: #8a0f01; margin-top: -6px; " name="codigo_categoria" class="form-control">    
                        <option selected="true" disabled="disabled" value="">SELECCIONE UNA CATEGORÍA</option>                    
                            @foreach ($info as $cat)                          
                             <option value="{{$cat->id}}">{{$cat->nombre}}</option>
                            @endforeach   
                        </select>                       
                     </ul>

                     <script>
                          var dato= null; 
                          function getId(){
                            
                            $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
                            }
                            });

                             var id_pro = document.getElementById('list').value;
                            $.ajax({
                                type:'GET',
                                url:"{{ route('cargarPro') }}",
                                data:{id:id_pro},
                                        
                                
                                success:function(data){  
                                    debugger;                                                               
                                    dato=data;   
                                    for (let index = 0; index < dato.length; index++) {
                                        var element = dato[index];
                                        console.log(element);
                                    }                                    
                                  
                                }

                            });
                             
                      //console.log(dato);      
                          }

                     </script>

                        @guest
                                 
                        @else
                        <form class="form-inline my-2 my-lg-0">
                            <button type="button" class="btn btn-dark " >🛒</button>
                          </form>
                    
                          <form class="form-inline my-2 my-lg-0">
                           <a class="estadis" style="color: #8a0f01;" ><h4><b> Compras realizadas</b></h4></a>
                          </form>  
                                                 
                                   <h4><b> <a style="color: #8a0f01"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a></b></h4>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                           
                        @endguest
                    
               
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
  
</body>
</html>