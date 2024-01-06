<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: carte/map.php");
    exit();
} else {
    header("Location: authentification/authentification.php");
    exit();
}
?>
