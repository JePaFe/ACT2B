<?php

// $matriz = [
//     [1, 2, 3],
//     [4, 5, 6],
//     [7, 8, 9]
// ];

// echo $matriz[1][1];

$usuarios = [
    ['id' => 1, 'nombre' => 'Juan', 'email' => 'juan@x.com'],
    ['id' => 2, 'nombre' => 'Ana', 'email' => 'ana@x.com'],
    ['id' => 3, 'nombre' => 'Pedro', 'email' => 'pedro@x.com'],
    ['id' => 4, 'nombre' => 'Maria', 'email' => 'maria@x.com'],
    ['id' => 5, 'nombre' => 'Julia', 'email' => 'julia@x.com'],
];

// echo $usuarios[1]['email'];

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//var_dump($id); die;

if (isset($id)) {
    $exist = false;
    
    foreach($usuarios as $usuario) {
        if ($usuario['id'] == $_GET['id']) {
            $exist = true;
            require_once 'views/usuario.php';
            break;
        }
    }

    if (!$exist) {
        echo 'No existe el registro';
    }
} else {
    require_once 'views/usuarios.php';
}
