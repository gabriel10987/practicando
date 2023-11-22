@extends('layouts.app-master')

@section('content')
    <h1 class="container">Home</h1>
    
    <!-- MANEJO DE VISTAS -->
    <!-- Si el usuario está autenticado -->
    @auth
        <p>Bienvenido {{auth()->user()->name ?? auth()->user()->username}}, estás autenticado a la página</p>
        <p>
            <a href="/logout">Logout</a>
        </p>
    @endauth

    <!-- Si el usuario NO está autenticado -->
    @guest
        <p>Para ver el contenido <a href="/login">inicia sesión</a></p>
    @endguest

@endsection
