<?php require_once 'header.php'; ?>

    <div class="container">
        <h1>Usuarios</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($usuarios as $usuario) : ?>
                    <tr>
                        <th scope="row">
                            <a href="array_multi.php?id=<?php echo $usuario['id'] ?>">
                                <?php echo $usuario['id'] ?>
                            </a>
                        </th>
                        <td><?php echo $usuario['nombre'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php require_once 'footer.php'; ?>