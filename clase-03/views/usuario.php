<?php require_once 'header.php'; ?>

    <div class="container">
        <h1>Usuario</h1>

        <h2><?php echo $usuario['nombre']; ?></h2>

        <p><?php echo $usuario['email']; ?></p>

        <a href="array_multi.php">Volver</a>
    </div>

<?php require_once 'footer.php'; ?>