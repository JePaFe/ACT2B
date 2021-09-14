<?php

$num = 123;

// if ($num == null) {
//     $id = 1;
// } else {
//     $id = $num;
// }

// $id = $num == null ? 1 : $num;

$id = $num ?? 1;

echo $id;