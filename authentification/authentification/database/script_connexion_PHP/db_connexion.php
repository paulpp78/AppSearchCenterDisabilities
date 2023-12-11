<?php
$user = 'root';
$password = 'root';
$db = 'mysql';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
);

if (!$success) {
    die("Échec de la connexion à la base de données: " . mysqli_connect_error());
}
?>
