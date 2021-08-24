<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1><?php echo "Hola mundo"; ?></h1>

    <?php $nombre; ?>

    <?php $nombre = 'Juan'; ?>
    <p><?php echo 'Hola, ' . $nombre ?></p>

    <?php $nombre = 'Maria'; ?>
    <p><?php echo 'Hola, ' . $nombre ?></p>

    <?php 
        define('IVA', 21);

        echo '<p>IVA: ' . IVA . '</p>';
    ?>

    <?php
    
    $num = 123;
    echo gettype($num);
    echo '<br>';

    $num2 = 12.3;
    echo gettype($num2);
    echo '<br>';

    $texto = 'Hola';
    echo gettype($texto);
    echo '<br>';

    ?>
</body>
</html>