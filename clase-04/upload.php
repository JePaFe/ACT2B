<?php 
// echo '<pre>';
// var_dump($_FILES, pathinfo($_FILES['imagen']['name']));
// echo '</pre>';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dir = __DIR__  . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;
    $ext = strtolower(pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION));
    $image = $dir . time() . '.' . $ext;

    if (!getimagesize($_FILES["imagen"]["tmp_name"])) {
        $errors['imagen'] = 'El archivo no es una imagen.';
    }

    if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif') {
        $errors['imagen'] = 'La extension no esta permitida.';
    }

    if ($_FILES['imagen']['size'] < 200000) {
        $errors['imagen'] = 'La imagen es muy grande.';
    }

    if (file_exists($image)) {
        $errors['imagen'] = 'El archivo existe.';
    }

    if (empty($errors)) {
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $image)) {
            echo 'Upload file';
        } else {
            echo 'Error';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form 
        action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
        method="POST"
        enctype="multipart/form-data"
    >
        <div>
            <label for="imagen">Imagen: </label>
            <input type="file" id="imagen" name="imagen">
            <div><?php echo $errors['imagen'] ?? ''; ?></div>
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>