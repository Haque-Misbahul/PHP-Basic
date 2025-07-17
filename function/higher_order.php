<?php

$users = [
   ['id' => 1, 'name' => 'Alice', 'role' => 'admin'],
   ['id' => 2, 'name' => 'Bob', 'role' => 'user'],
   ['id' => 3, 'name' => 'Charlie', 'role' => 'user'],

];

function createFiler($key, $value) {

   return fn($item) => $item[$key] === $value;
}

$isAdmin = createFiler('role', 'admin');
$admins = array_filter($users, $isAdmin);

$isBob = createFiler('name', 'Bob');

var_dump($admins);
var_dump(array_filter($users, $isBob));