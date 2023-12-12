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