
// Limiter la recherche à la France
var searchControl = L.Control.geocoder({
  defaultMarkGeocode: false,
  geocoder: L.Control.Geocoder.nominatim({
    geocodingQueryParams: { countrycodes: 'fr' } 
  })
}).addTo(map);

// Fonction de recherche d'adresse
function searchAddress() {
  searchControl.on('markgeocode', function(e) {
    var newLatLng = e.geocode.center;
    var zoomLevel = 12; 

    // Animation de zoom
    map.flyTo(newLatLng, zoomLevel, {
      animate: true,
      duration: 2 
    });
  });
}

// Utilise le résultat de la recherche pour faire le zoom
searchControl.on('markgeocode', function(e) {
  var newLatLng = e.geocode.center;
  var zoomLevel = 12; 
  map.flyTo(newLatLng, zoomLevel, {
    animate: true,
    duration: 2 
  });
});


