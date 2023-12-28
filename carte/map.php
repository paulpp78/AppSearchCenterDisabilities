<!-- map.php -->
<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur n'est pas connecté
if (!isset($_SESSION['user_id'])) {
    // Rediriger l'utilisateur vers la page d'authentification (app.php dans ce cas)
    header("Location: ../app.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de centres</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../includes/footer/footer.css">
    <link rel="stylesheet" href="../includes/header/header.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

<body>
<?php include '../includes/header/header.php'; ?>

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <form action="recherche.php" method="get" class="form-inline" id="searchForm">
                <div class="form-group mr-2">
                    <label for="handicap" class="mr-2">Handicap:</label>
                    <select name="handicap" id="handicap" class="form-control">
                        <option value="Tous les centres">Tous les centres</option>
                        <option value="Handicap moteur">Handicap moteur</option>
                        <option value="tous types de handicaps">Tous types de handicaps</option>
                        <option value="Troubles spécifiques du langage et des apprentissages">Troubles spécifiques
                            du langage et des apprentissages
                        </option>
                        <option value="Troubles multiples associés">Troubles multiples associés</option>
                        <option value="Handicap mental">Handicap mental</option>
                        <option value="Handicap visuel">Handicap visuel</option>
                        <option value="Handicap auditif">Handicap auditif</option>
                        <option value="Autisme et troubles envahissants du développement">Autisme et troubles
                            envahissants du développement
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Rechercher</button>
            </form>
        </div>

        <div class="col-lg-6">
            <div id="map" style="height: 500px;"></div>
        </div>
    </div>
</div>

<?php include '../includes/footer/footer.php'; ?>

<script src="map.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>

</html>
