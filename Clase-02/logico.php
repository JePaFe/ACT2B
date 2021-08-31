<?php

$role = 'guest';
$user = 'x@x.com';
$pass = '1234';

$show = false;
$show = !$show;
var_dump($show);

// $result = $role == 'user' || $role == 'admin';
$result = $user == 'x@x.com' && $pass == '1234';

// var_dump($result);