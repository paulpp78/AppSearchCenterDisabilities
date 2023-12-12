<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout d'Informations pour un Centre</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <link rel="stylesheet" href="carte.css">


</head>
<body>
<div id="map"></div>


<div class="container mt-5">
    <h1>Ajout d'Informations pour un Centre</h1>

    <form id="addInfoForm">
        <div class="form-group">
            <label for="cp">Code Postal</label>
            <input type="text" class="form-control" id="cp" placeholder="Code Postal">
        </div>
        <div class="form-group">
            <label for="commune">Commune</label>
            <input type="text" class="form-control" id="commune" placeholder="Commune">
        </div>
        <div class="form-group">
            <label for="commune_cog">Code Commune (COG)</label>
            <input type="text" class="form-control" id="commune_cog" placeholder="Code Commune (COG)">
        </div>
        <div class="form-group">
            <label for="departement">Département</label>
            <input type="text" class="form-control" id="departement" placeholder="Département">
        </div>
        <div class="form-group">
            <label for="region">Région</label>
            <input type="text" class="form-control" id="region" placeholder="Région">
        </div>
        <div class="form-group">
            <label for="region_cog">Code Région (COG)</label>
            <input type="text" class="form-control" id="region_cog" placeholder="Code Région (COG)">
        </div>
        <div class="form-group">
            <label for="handicap_principal">Handicap Principal</label>
            <input type="text" class="form-control" id="handicap_principal" placeholder="Handicap Principal">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter Information</button>
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="static/js/add-info.js"></script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
<script src="carte.js"></script>
</body>
</html>
