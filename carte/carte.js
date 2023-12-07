var map = L.map('map').setView([48.866667, 2.333333], 5);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var paris = L.marker([48.866667, 2.333333]).addTo(map);
paris.bindPopup("Paris").openPopup();

var marseille = L.marker([43.2965, 5.3698]).addTo(map);
marseille.bindPopup("Marseille").openPopup();

paris.addEventListener("click", () => {
    map.setView([48.866667, 2.333333], 12);
});

marseille.addEventListener("click", () => {
    map.setView([43.2965, 5.3698], 12);
});


fetch('data_asso.geojson')
    .then(response => response.json())
    .then(data => {
        // Parcourir chaque feature dans le GeoJSON
        data.features.forEach(feature => {
            // Récupérer les coordonnées de latitude et longitude du point
            var latitude = feature.geometry.coordinates[1];
            var longitude = feature.geometry.coordinates[0];

            // Créer un marqueur pour chaque point
            var marker = L.marker([latitude, longitude]).addTo(map);

            if (feature.properties && feature.properties.nom) {
                marker.bindPopup(feature.properties.nom);
            }

        });
    });
