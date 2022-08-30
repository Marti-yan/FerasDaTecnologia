<?php
$titulo = "I am titulo da pagina";
$subtitulo = "I am subtitulo da pagina";

define('Titulo', 'Esse titulo é uma constante');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variavies</title>
</head>

<body>
    <h1>
        <?php echo Titulo; ?>
    </h1>

    <h2>
        <?php echo $subtitulo; ?>
    </h2>


    <?php

    $subtitulo = "esse é um novo subtitulo da pagina";
   
    ?>
    <hr>
    <h3>
        <?php echo Titulo; ?>
    </h3>









</body>

</html>