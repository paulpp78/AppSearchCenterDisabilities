<?php
if(isset($_GET['handicap'])) {
    $handicap = $_GET['handicap'];

    $apiUrl = 'https://api.opendata.onisep.fr/downloads/5fa55f1539b76/5fa55f1539b76.json';
    $apiData = file_get_contents($apiUrl);

    if ($apiData !== false) {
        $centers = json_decode($apiData, true);

        if ($handicap === 'Tous les centres') {
            $filteredCenters = $centers;
        } else {
            $filteredCenters = array_filter($centers, function($center) use ($handicap) {
                $decodedHandicap = json_decode('"' . $center['handicap_principal'] . '"');
                return stripos($decodedHandicap, $handicap) !== false;
            });
        }

        include 'carte.php';
    } else {
        echo 'Erreur lors de la récupération des données de l\'API.';
    }
} else {
    echo 'Veuillez spécifier un handicap.';
}
?>
