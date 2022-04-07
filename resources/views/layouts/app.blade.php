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
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-ligth shadow-sm text-success" >
            <div class="container">
               @guest
                 <img src="https://www.visorus.com.mx/assets/img/apps-aplicaciones.png" width="40" height="40" class="d-inline-block align-top" alt="">  CONTROL GASTOS
               @else
                <img src="https://www.visorus.com.mx/assets/img/apps-aplicaciones.png" width="40" height="40" class="d-inline-block align-top" alt=""> CONTROL GASTOS
                <a class="nav-item nav-link text-success" href="{{route('usuarios')}}"><img src="https://www.uea.edu.ec/sitic/images/user_add.png" width="25"> Usuarios</a>
                <a class="nav-item nav-link text-success" href="{{route('categoria')}}"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAATlBMVEX///+Xl5eRkZHGxsaoqKjNzc34+Pifn5/k5OSQkJD19fXr6+urq6uZmZmUlJTn5+fBwcG0tLTc3NyysrLT09PJycnv7++8vLze3t7R0dHqxKftAAAD+UlEQVR4nO3d65KiMBSFUYgChktEaUXf/0XHrhouid3ldLFPcsbe66fVJXyDDBKQZBkREREREREREREREdGbqft9Javtz2XCwIN1LpflnLHDMVVg3QnnTZX2VKcpvJs4hY/GLs1mHKU/ouvGQ4rCPmJh7poEhTcbs7BKUJi10XbEB/uRInEwwtZHoy5FYdZ8FKJ27dJokh0WZTX7KdFdUq+LkPl7hTulXhUp02HXtanXRMpuKtynXhMpLPz/sRCprEV9czIfq/DYV9Jf0YztxnOqwnNlo5wqOdsV4aaMUVi3Jt6poKmC758RCq95zFPd3Bn/PEm+8Co+oBbyTwXFC8sqduAjZv1BFS8cY57IT4XrIQvpwibmYMzM3OMVDstn1Bkr6+shC+HCchXYHxpRx2LZ5e0yPipceJ73wu4qsgBPuQxZ9POLwoXzqK+LMg5UVtM/6PJ/jXDhEPnUZcpZ7YjChe309v3rv0W4zXvF/PVUuHDaMdxO5O2fHFgIx0I0FuKxEI2FeCxEYyEeC9FYiMdCNBbi/erC5rDZ8+iWosJbZwGXRG2htvAMGuy3wQiXnkLYLd7GH2hWU3iEXa8x/v14agpvsEtuwUCsmsIrbhvevTdWUzi/vpnzf0qhp/DaQRKdCW6g0VOY1WPVbVa14TFfUSHkHrDn+7xUFYpgIR4L0ViIx0I0FuKxEI2FeCxEYyEeC9FYiMdCNBbisRCNhXgsRGMh3m8u/Di1mw2X8MqFnsKytQ7AdMEDrvQUnkCXucMHXKkprGFXua1/iVRN4fvfqXCAbcPwjbUUlrBtaP3HBaopzC6gjWgG/331FGY7awAHCzsEB0RFhdn1ftldttkVT7dfaiqUwUI8FqKxEI+FaCzEYyEaC/FYiMZCPBaisRCPhWgsxGMhGgvxWIjGQrxfXYh4asTTTywVFd4qt/mxEdbkfGpEukLcUyP8203UFAKfGuF/TtUUvv+9GMCnRvgTIagpxD01Ilf71AjMnBfOan5qBKJwH85Mqajwodzs+T2/KCz+viQ075qC76XTHWZGZhUUFGZ/Z0wwMpMCaygsK+OcyYXmy9VQ+HnH9amQmtZZR6EkFqKxEI+FaCzEYyEaC/FYiMZCvPcvnGclG+Ms7xy98DQNqVWv/xZhnJbXvf5bjMu0xGDkVkgzLS7eNOPLfuEiJB7nCz6x9vuHfGb2fSFqt5rz1IYDqXL6ZamfP6eTtJpZOfwBtCTcr0V/wt7iFc5DzjG54fV6AbWQazA/Cuykhg6/gbuS9o+BLsLEvL426gfVVdEDH/tivAnknR1jfV/z1KM18pWfP+5u4x0IQ7e+rYS14znJ9iMiIiIiIiIiIiIiIpLzBwh/h/VlS6+2AAAAAElFTkSuQmCC" width="25">Categoria</a>
                <a class="nav-item nav-link text-success" href="{{route('tipo')}}"> <img src="https://www.blackberrycross.com/userfiles/images/e-learning/statistic-tools/Entendiendo-la-variacio%CC%81n.png" width="25">Tipo</a>
                <a class="nav-item nav-link text-success" href="{{route('reg_movimientos')}}"><img src="http://1.bp.blogspot.com/-4q7gM4zxWM0/UqMoump87gI/AAAAAAAAAG4/tnBLu-chVfE/s1600/Imagen5.png" width="25"> Registro de movimientos</a>

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
