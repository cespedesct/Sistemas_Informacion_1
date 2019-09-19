

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/style1.css') }}"/>
    <link rel="stylesheet" type = "text/css" href="{{ asset('css/scroll.css') }}"/>
    
      <title>Finilager - @yield('label')</title>
<!--CSS-->
<link href="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/css/bootstrap.min.css" media="all" type="text/css" rel="stylesheet">
<link href="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/css/jquery.dataTables.css" media="all" type="text/css" rel="stylesheet">
<link href="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/css/apprise-v2.css" media="all" type="text/css" rel="stylesheet">
<link href="http://www.visualcohol.com/lab/scripts/theinventory/app/assets/css/style.css" media="all" type="text/css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Headland+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!--JAVASCRIPT-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


   
</head>
<body>
    <header>
        <div style="background-color:#053053; height: 80px;" class="first" >
            <a href="/"><img style="height: 84px; width: 150px; position: relative; left: 50px; top: 0px;" src="/images/form.jpg" alt="" ></a>
            <nav><ul>

    

                  @if(!Auth::user())
                <li><a href="/login">Iniciar Sesión</a></li>
                <li><a href="/register">Registrarse</a></li>
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                       
                @endif
              
            </ul></nav> 
                   
        </div>
        <div class="second">
        <div class="container">
                <nav><ul>
                    <li><a href="">Articulos</a></li>
                    <li><a href="">Categorias</a></li>
                    <li><a href="">Sectores</a></li>
                </ul></nav>
            </div>
        </div>
    </header>   
 

    <div   class="main container" id="app">
            <div class="head">
                <!--TITULO DEL CONTENT-->
            
                <div class="title"><h2>@yield('title')</h2></div>
                <nav>
                @yield('buttons')
                </nav>
            </div>
       
        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <div class="area"></div>
        <nav class="main-menu">
            <ul>
                 @if(Auth::user()->tieneRol('Administrador'))
                <li>
                    <a href="/home"><i class="fa fa-home fa-2x"></i>
                    <span class="nav-text" style="color: #FFF">FINILAGER</span></a>
                </li>
                
                <li class="has-subnav">
                    <a href=""><i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text" style="color: #FFF">Ventas</span></a>
                </li>
                <li class="has-subnav">
                    <a href="#"><i class="fa fa-list fa-2x"></i>
                    <span class="nav-text" style="color: #FFF">Clientes</span></a>
                </li>
               
                       <li class="has-subnav">
                    <a href="#"><i class="fa fa-folder-open fa-2x"></i>
                    <span class="nav-text" style="color: #FFF">Empleados</span></a>
                </li>
                <li>
                    <a href="/admin/productos"><i class="fa fa-bar-chart-o fa-2x"></i>
                    <span class="nav-text" style="color: #FFF">Productos</span></a>
                </li>
                
                <li>
                    <a href="/admin/proveedores"><i class="fa fa-font fa-2x"></i>
                    <span class="nav-text" style="color: #FFF">Proveedores</span></a>
                </li>
                <li>
                   <a href="/admin/sucursales"><i class="fa fa-table fa-2x"></i>
                    <span class="nav-text"style="color: #FFF">Sucursales</span></a>
                </li>
                <li>
                   <a href="/admin/ubicaciones"><i class="fa fa-map-marker fa-2x"></i>
                    <span class="nav-text"style="color: #FFF">Mapas</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-info fa-2x"></i>
                    <span class="nav-text"style="color: #FFF">Información</span></a>
                </li>
                @endif

                @if(Auth::user()->tieneRol('Vendedor'))
                <li>
                    <a href="/home"><i class="fa fa-home fa-2x"></i>
                    <span class="nav-text" style="color: #FFF">FINILAGER</span></a>
                </li>
                
                <li class="has-subnav">
                    <a href=""><i class="fa fa-laptop fa-2x"></i>
                    <span class="nav-text" style="color: #FFF">Ventas</span></a>
                </li>
                <li class="has-subnav">
                    <a href="#"><i class="fa fa-list fa-2x"></i>
                    <span class="nav-text" style="color: #FFF">Clientes</span></a>
              
                <li>
                    <a href="/admin/productos"><i class="fa fa-bar-chart-o fa-2x"></i>
                    <span class="nav-text" style="color: #FFF">Productos</span></a>
                </li>
                
                <li>
                   <a href="/admin/ubicaciones"><i class="fa fa-map-marker fa-2x"></i>
                    <span class="nav-text"style="color: #FFF">Mapas</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-info fa-2x"></i>
                    <span class="nav-text"style="color: #FFF">Información</span></a>
                </li>
                @endif
                
            </ul>
    
            <ul class="logout">
                <li><a href="{{ route('logout') }}" 
                 onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();"><i class="fa fa-power-off fa-2x"></i> 
                <span class="nav-text"style="color: #FFF">Cerrar Sesion</span></a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>  
                
            </ul>
        </nav>
       
        @yield('script')
       
</body>
</html>

