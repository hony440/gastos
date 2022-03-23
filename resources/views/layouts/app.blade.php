<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>control gastos</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
               @guest
                 <img src="https://wallo.com/media/aplicacion-control-gastos-android.png" width="30" height="30" class="d-inline-block align-top" alt="">CONTROL DE GASTOS
               @else
                <img src="https://wallo.com/media/aplicacion-control-gastos-android.png" width="30" height="30" class="d-inline-block align-top" alt="">CONTROL DE GASTOS
                <a class="nav-item nav-link" href="{{route('usuarios')}}">Usuarios</a>
                <a class="nav-item nav-link" href="{{route('categoria')}}">categoria</a>
                <a class="nav-item nav-link" href="{{route('tipo')}}">Tipo</a>
                <a class="nav-item nav-link" href="{{route('reg_movimientos')}}">Registro de movimientos</a>

               @endguest
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="https://es.calcuworld.com/wp-content/uploads/sites/2/2019/09/generador-de-nombres-de-usuario.png" width="25px">
                                    {{ Auth::user()->usu_cedula  }}
                                </a>


                        <ul class="dropdown-menu">
                    <!-- The user image in the menu -->

                            <li class="user-header">
                                
                                <p>
                                 <img src="https://es.calcuworld.com/wp-content/uploads/sites/2/2019/09/generador-de-nombres-de-usuario.png" width="50px" class="img-circle" alt="User Image">  <h3 > {{ Auth::user()->usu_nombre  }} </h3>
                                  <h3>Bienvenido a tu perfil</h3>
                                  

                                </p>
                            </li>

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="http://localhost/gastos/public/home">Home</a>
                                </div>

                                <div class="pull-right">
                                    <a href="http://localhost/gastos/public/logout" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"  class="dropdown-item" style="text-align: center;">
                                   Salir 
                                    </a>


                                </div>
                            </li>
                        </ul>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
