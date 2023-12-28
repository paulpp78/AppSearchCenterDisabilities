var map = L.map('map').setView([46.6031, 1.8883], 5);
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

// Fonction pour mettre à jour les marqueurs sur la carte
function updateMap(filteredCenters) {
    // Supprimer les anciens marqueurs
    map.eachLayer(function (layer) {
        if (layer instanceof L.Marker) {
            map.removeLayer(layer);
        }
    });

    // Convertir filteredCenters en tableau si ce n'est pas déjà un tableau
    var centersArray = Array.isArray(filteredCenters) ? filteredCenters : Object.values(filteredCenters);

    // Ajouter les nouveaux marqueurs
    centersArray.forEach(function (center) {
        var latitude = center['latitude_y'];
        var longitude = center['longitude_x'];

        L.marker([latitude, longitude])
            .addTo(map)
            .bindPopup("<b>" + center['nom'] + '</b><br/>' + center['adresse'] + ', ' + center['commune']);
    });
}


// Charger les données au chargement de la page
$(document).ready(function () {
    loadData();
});

// Attacher l'événement de soumission du formulaire
$("#searchForm").submit(function (event) {
    event.preventDefault();
    loadData();
});

// Fonction pour charger les données via AJAX
function loadData() {
    var formData = $("#searchForm").serialize();

    $.ajax({
        type: "GET",
        url: "recherche.php",
        data: formData,
        success: function (data) {
            updateMap(data);
        },
        error: function () {
            alert("Erreur lors de la récupération des données de l'API.");
        }
    });
}