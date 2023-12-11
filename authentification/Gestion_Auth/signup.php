<?php
require_once '../database/script_connexion_PHP/db_connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($link, $_POST['name']);
    $email = mysqli_real_escape_string($link, $_POST['email']);
    $password = mysqli_real_escape_string($link, $_POST['password']);

    if (!isValidPassword($password) || $password !== $confirm_password) {
        die("Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et correspondre à la confirmation.");
    }
    // Hachage du mot de passe
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insertion dans la base de données
    $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if (mysqli_query($link, $query)) {
        echo "Utilisateur enregistré avec succès.";
    } else {
        echo "Erreur : " . $query . "<br>" . mysqli_error($link);
    }

    mysqli_close($link);
}
function isValidPassword($password)
{
    return preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/', $password);
}

?>
