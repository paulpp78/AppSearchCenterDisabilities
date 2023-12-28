<?php
session_start();
require_once '../database/script_connexion_PHP/db_connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = $_POST['password'];

    // Récupération du mot de passe depuis la base de données
    $query = "SELECT id, password FROM users WHERE email = '$email'";
    $result = mysqli_query($link, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            // Connexion réussie, créer la session
            $_SESSION['user_id'] = $row['id'];
            // Rediriger l'utilisateur vers app.php
            header("Location: ../../app.php");

            exit();
        } else {
            header("Location: erreur.php?message=Mot de passe incorrect.");
        }
    } else {
        header("Location: erreur.php?message=Aucun utilisateur trouvé avec cet email.");
    }

    mysqli_close($link);
}
?>
