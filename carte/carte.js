var map = L.map("map").setView([48.856614, 2.3522219], 13);

var Stadia_OSMBright = L.tileLayer(
    "https://tiles.stadiamaps.com/tiles/osm_bright/{z}/{x}/{y}{r}.png",
    {
        maxZoom: 20,
        attribution:
            '&copy; <a href="https://stadiamaps.com/">Stadia Maps</a>, &copy; <a href="https://openmaptiles.org/">OpenMapTiles</a> &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
    }
);


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
Stadia_OSMBright.addTo(map);
