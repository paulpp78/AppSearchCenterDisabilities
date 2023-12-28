<!-- authentification.php -->
<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['user_id'])) {
    header("Location: app.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="static/styles/auth.css">
</head>
<body>
<h2>Authentifiez vous</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="Gestion_Auth/signup.php" method="post">
            <h1>S'inscrire</h1>
            <input type="text" name="name" placeholder="Name"/>
            <input type="email" name="email" placeholder="Email"/>
            <input type="password" name="password" placeholder="Password"/>
            <input type="password" name="confirm_password" placeholder="Confirm Password"/>
            <button>Inscrivez-vous</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="Gestion_Auth/signin.php" method="post">
            <h1>S'authentifier</h1>
            <input type="email" name="email" placeholder="Email"/>
            <input type="password" name="password" placeholder="Password"/>
            <button>Connectez-vous</button>
        </form>

    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bon retour parmis nous</h1>
                <p>Souvenez vous de vos identifiants et mots de passe</p>
                <button class="ghost" id="signIn">Connectez-vous</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Bienvenue </h1>
                <p>Nous avons besoin de vous connaitre pour accéder au site</p>
                <button class="ghost" id="signUp">Inscrivez-vous</button>
            </div>
        </div>
    </div>
</div>
<script src="static/Animations/auth.js"></script>
<script src="static/MDP/PassWord.js"></script>
</body>
</html>