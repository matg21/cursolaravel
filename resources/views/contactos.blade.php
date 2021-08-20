<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactos</title>
</head>
<body>
    <h1>contactos</h1>
 
</body>
</html> -->
@extends('layout')

@section('contenido')
<h1>Contactos</h1>
<h2>Escribeme</h2>
<form action="contacto" method="POST">
    <p><label for="nombre">Nombre <input type="text" name="nombre"></label></p>
    <p><label for="email">Email <input type="email" name="email"></label></p>
    <p><label for="mensaje">Mensaje <textarea name="mensaje"></textarea></label></p>
    <input type="submit" value="Enviar">
</form>
@stop