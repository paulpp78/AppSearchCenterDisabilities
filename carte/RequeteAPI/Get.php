<?php
$apiUrl = 'https://api.opendata.onisep.fr/downloads/5fa55f1539b76/5fa55f1539b76.json';
$response = file_get_contents($apiUrl);

if ($response !== false) {
    echo $response;
} else {
    echo 'Erreur lors de la requête GET vers l\'API.';
}
?>
