<?php
// var_dump($_GET);

$errores = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);

    if (empty($_POST['nombre'])) {
        $errores['nombre'] = 'El campo nombre es obligatorio.';
    }

    $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_STRING);

    if (strlen($apellido) < 3) {
        $errores['apellido'] = 'El campo apellido es obligatorio y tiene que tener 3 caracteres.';
    }

    var_dump($nombre, $apellido);
}

// echo '<pre>';
// var_dump($_SERVER);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fomulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div>
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control <?php echo isset($errores['nombre']) ? 'is-invalid' : ''; ?>" id="nombre" name="nombre" value="<?php echo $nombre ?? ''; ?>">
            <div class="invalid-feedback"><?php echo $errores['nombre']; ?></div>
        </div>
        <div>
            <label for="apellido" class="form-label">Apellido</label>
            <input 
                type="text" 
                class="form-control <?php echo isset($errores['apellido']) ? 'is-invalid' : ''; ?>" 
                id="apellido" 
                name="apellido"
                value="<?php echo $apellido ?? ''; ?>"
            >
            <div class="invalid-feedback"><?php echo $errores['apellido']; ?></div>
        </div>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</body>
</html>