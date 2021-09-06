<?php
function saludar(string $nombre) : string {
    return "Hola, $nombre";
}

$mensaje = saludar('Juan');

function esMayor($edad, $edadMimima) {
    if ($edad >= $edadMimima) {
        return true;
    } else {
        return false;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <h1>Inicio</h1>

    <p><?php echo $mensaje; ?></p>

    <?php 
        if (esMayor(17, 13)) {
            echo strlen('<p>Eres mayor</p>');
        } else {
            print('<p>Eres menor</p>');
        }
    ?>

    <?php if (esMayor(13, 18)): ?>
        <p>Eres mayor</p>
    <?php else : ?>
        <p>Eres menor</p>
    <?php endif; ?>

    <p><?php echo ceil(1.54); ?></p>

    <p><?php echo rand(10, 30); ?></p>
</body>
</html>