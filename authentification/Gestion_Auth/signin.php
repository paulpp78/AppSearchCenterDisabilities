<?php
session_start();
require_once '../database/script_connexion_PHP/db_connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = $_POST['password'];

    // Récupération du mot de passe depuis la base de données
    $query = "SELECT password FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            echo "Connexion réussie.";

        } else {
            echo "Mot de passe incorrect.";
        }
    } else {
        echo "Aucun utilisateur trouvé avec cet email.";
    }
    mysqli_close($link);
}
?>