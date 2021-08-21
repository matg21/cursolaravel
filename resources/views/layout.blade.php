<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
    .active{
        text-decoration: none;
    color: green;
    }
    .error{
        color: red;
        font-size: 12px;
    }
    

    
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function ActiveMenu($url)
    {
       return request()->is($url) ? 'active' : '';
    }
    ?>
    <header>
    <nav>
    <a class=" {{ActiveMenu('/') }}" href="{{ route('home') }}">Inicio</a>
    <a class=" {{ActiveMenu('saludos/*')}}" href="{{ route('saludos', 'jorge') }}">Saludos</a>
    <a class=" {{ActiveMenu('mensajes/create')}}" href="{{ route('messages.create') }}">Contactos</a>
    <a class=" {{ActiveMenu('mensajes')}}" href="{{ route('messages.index') }}">Mensajes</a>
    
    </nav>
    
    </header>
    @yield('contenido')

    <footer> Copyright {{ date('Y')}}</footer>
</body>
</html>

