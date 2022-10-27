<?php

$db = mysqli_connect(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'] ?? '', //por si no tiene contraseña
    $_ENV['DB_BD']
);


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "error de depuración: " . mysqli_connect_error(); //Error xd
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
