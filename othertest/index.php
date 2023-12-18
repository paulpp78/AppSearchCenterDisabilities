<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de centres</title>
</head>
<body>
<h1>Recherche de centres pour personnes en situation de handicap</h1>

<form action="recherche.php" method="get">
    <label for="handicap">Handicap:</label>
    <select name="handicap" id="handicap">
        <option value="Tous les centres">Tous les centres</option>
        <option value="Handicap moteur">Handicap moteur</option>
        <option value="tous types de handicaps">Tous types de handicaps</option>
        <option value="Troubles spécifiques du langage et des apprentissages">Troubles spécifiques du langage et des apprentissages</option>
        <option value="Troubles multiples associés">Troubles multiples associés</option>
        <option value="Handicap mental">Handicap mental</option>
        <option value="Handicap visuel">Handicap visuel</option>
        <option value="Handicap auditif">Handicap auditif</option>
        <option value="Autisme et troubles envahissants du développement">Autisme et troubles envahissants du développement</option>
    </select>

    <input type="submit" value="Rechercher">
</html>
