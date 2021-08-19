<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saludo</title>
</head>
<body>
    <h1>saludos para </h1>
    <h1>saludos para {{$nombre}}</h1>

    <ul>
    @forelse($consolas as $consola)
        <li>{{$consola}}</li>
    @empty
        <p>No hay consolas</p>
    @endforelse
    
    </ul>
    @if(count($consolas)  === 1)
        <p>Solo tienes una consola</p>
    @elseif(count($consolas) > 1)
        <p>Tienes varias consolas</p>
    @else   
        <p>No tienes ninguna consola</p>
    @endif
   
</body>
</html> -->


@extends('layout')

@section('contenido')
<h1>saludos para {{$nombre}}</h1>
@stop