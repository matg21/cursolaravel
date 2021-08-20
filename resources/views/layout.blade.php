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
    <a class=" {{ActiveMenu('contactos')}}" href="{{ route('contactos') }}">Contactos</a>
    
    </nav>
    
    </header>
    @yield('contenido')

    <footer> Copyright {{ date('Y')}}</footer>
</body>
</html>

