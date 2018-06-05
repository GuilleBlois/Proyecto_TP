<!DOCTYPE html>
<html lang="es">
    <head lang="{{ app()->getLocale() }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Tie-party</title>
        <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    <body class="single">
        <header>
            <a href="/">
        		<div id="logo">
                	<img src="{{URL::asset('/images/public_images/logo.png')}}" alt="Tie-Party Logo">
                	<h1>Tie-Party</h1>
            	</div>
        	</a>
            <i class="fa fa-bars"></i>
            <nav>
                <ul class="nav-links">
                    <li class="nav-link"><a href="/index.html">Home</a></li>
                    <li class="nav-link"><a href="/quienessomos.html">Quienes somos</a></li>
                    <li class="nav-link"><a href="/contacto.html">Contacto</a></li>
                    <!-- Boton login -->
                    <li class="nav-link">
                        <a href="#" id="login-nav">
                            @guest 
                            	Login
                            @else  
                            	{{Auth::user()->nombre}}
                            @endif 
                        </a>
                    </li>
                    <!-- Fin boton login -->
                </ul>
            </nav>
            <!-- Modal Login -->
            <div class="modal modal-login">
                <i class="fa fa-times"></i>
                <i class="fa fa-sort-up"></i>
                @guest 
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h4>Accede a tu cuenta: </h4>
                    <input type="email" id="email" name="email" placeholder="Email">
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recordar') }}
                    </label>
                    <button class="enviar-white" type="submit">Entrar</button>
                </form>
                @else    
                <div class="login-options">		
	                <a href="/fiesta/user"> Mi perfil </a>
	                <a href="{{ route('cerrarsesion') }}">Logout</a>
                </div>
                @endif 
            </div>
            <!-- Fin Modal Login -->
        </header>