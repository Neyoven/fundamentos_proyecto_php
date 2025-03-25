<?php
    $nombre = 'Guillermo Ventura'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hola Mundo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        img {
            margin-top: 20px;
            max-width: 600px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Hola Mundo, soy <?php echo $nombre; ?>!</h1>
    <img src="/Actividad3/proyecto_php/imagen.jpeg" alt="Gato desarrollador">
</body>
</html>