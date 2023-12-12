<?php
// Ne fonctionne pas autant faire un get
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $cp = isset($_POST['cp']) ? $_POST['cp'] : '';
    $commune = isset($_POST['commune']) ? $_POST['commune'] : '';
    $commune_cog = isset($_POST['commune_cog']) ? $_POST['commune_cog'] : '';
    $departement = isset($_POST['departement']) ? $_POST['departement'] : '';
    $region = isset($_POST['region']) ? $_POST['region'] : '';
    $region_cog = isset($_POST['region_cog']) ? $_POST['region_cog'] : '';
    $handicap_principal = isset($_POST['handicap_principal']) ? $_POST['handicap_principal'] : '';

    $params = array();

    if (!empty($cp)) {
        $params[] = 'cp=' . urlencode($cp);
    }
    if (!empty($commune)) {
        $params[] = 'commune=' . urlencode($commune);
    }
    if (!empty($commune_cog)) {
        $params[] = 'commune_cog=' . urlencode($commune_cog);
    }
    if (!empty($departement)) {
        $params[] = 'departement=' . urlencode($departement);
    }
    if (!empty($region)) {
        $params[] = 'region=' . urlencode($region);
    }
    if (!empty($region_cog)) {
        $params[] = 'region_cog=' . urlencode($region_cog);
    }
    if (!empty($handicap_principal)) {
        $params[] = 'handicap_principal=' . urlencode($handicap_principal);
    }

    $api_url = 'https://api.opendata.onisep.fr/downloads/5fa55f1539b76/5fa55f1539b76.json?' . implode('&', $params);

} else {

    http_response_code(405);
    echo 'Méthode non autorisée';
}
?>
