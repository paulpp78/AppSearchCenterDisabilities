<?php
require_once '../database/script_connexion_PHP/db_connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($link, $_POST['confirm_password']);

    if (!isValidPassword($password) || $password !== $confirm_password) {
        header("Location: erreur.php?message=Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et correspondre à la confirmation.");
    }
    // Hachage du mot de passe
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertion dans la base de données
    $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if (mysqli_query($link, $query)) {
        // Enregistrement réussi, créer la session
        $user_id = mysqli_insert_id($link);
        session_start();
        $_SESSION['user_id'] = $user_id;
        // Rediriger l'utilisateur vers app.php
        header("Location: ../../app.php");

        exit();
    } else {
        $errorMessage = 'Erreur : ' . $query . '<br>' . mysqli_error($link);
        header("Location: erreur.php?message=$errorMessage");
    }


    mysqli_close($link);
}

function isValidPassword($password)
{
    return preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/', $password);
}
?>
