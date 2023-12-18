<!-- carte.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carte des centres</title>
    <!-- Inclure Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
<body>
<div id="map" style="height: 500px;"></div>

<script>
    var map = L.map('map').setView([48.810821533203, 2.5721499919891], 12); // Utiliser les coordonnées du premier résultat comme centre initial

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    <?php foreach ($filteredCenters as $center): ?>
    <?php $latitude = $center['latitude_y']; ?>
    <?php $longitude = $center['longitude_x']; ?>
    L.marker([<?php echo $latitude; ?>, <?php echo $longitude; ?>])
        .addTo(map)
        .bindPopup("<b><?php echo $center['nom']; ?></b><br/><?php echo $center['adresse']; ?>, <?php echo $center['commune']; ?>");
    <?php endforeach; ?>
</script>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
</body>
</html>
