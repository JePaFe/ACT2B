<?php

// for ($i = 0, $j = 2; $i < 3; $i++, $j--) {
//     echo "$i - $j \n";
// }

// for ($i = 3; $i > 0; $i--) {
//     echo "$i \n";
// }

// for ($i = 2; $i <= 3; $i++) {
//     for ($j = 1; $j <= 5; $j += 1) {
//         echo "$i * $j = " . $i * $j . "\n";
//     }
// }

for ($i = 0; $i < 4; $i++) {
    // echo 'Hola ';
    if ($i >= 2) {
        continue;
    }
    echo "$i \n";
    // if ($i == 1) {
    //     break;
    // }
}