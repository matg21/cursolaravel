<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h1>Home</h1>
    <nav>
    <a href="<?php echo route('home'); ?>">Inicio</a>
    <a href="<?php echo route('saludos', 'jorge'); ?>">Saludos</a>
    <a href="<?php echo route('contactos'); ?>">Contactos</a>
    
    </nav>
</body>
</html>