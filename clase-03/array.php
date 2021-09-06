<?php

$array = [1, 2];

// echo '<pre>';
// var_dump($array);
// echo '</pre>';

if (isset($array[4])) {
    echo $array[4];
}

// if (empty($array) == false) {
if (!empty($array)) {
    echo $array[1];
}