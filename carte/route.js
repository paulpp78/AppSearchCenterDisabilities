// Activation du panneau de contrôle pour les itinéraires avec géocodage Nominatim en France
var routingControl = L.Routing.control({
    routeWhileDragging: true,
    geocoder: L.Control.Geocoder.nominatim({
      geocodingQueryParams: { countrycodes: 'fr' }
    }),
    createMarker: function(i, waypoint, n) {
      var marker = L.marker(waypoint.latLng, {
        draggable: true,
        icon: L.icon({
          iconUrl: 'https://unpkg.com/leaflet/dist/images/marker-icon.png',
          iconSize: [25, 41],
          iconAnchor: [12, 41],
          popupAnchor: [1, -34],
          tooltipAnchor: [16, -28],
          shadowSize: [41, 41]
        })
      });
  
      marker.on('dragend', function() {
        // Mise à jour des waypoints lors du glisser-déposer des marqueurs
        var waypoints = routingControl.getWaypoints().map(function(wp) {
          return wp.latLng;
        });
        routingControl.setWaypoints(waypoints);
      });
  
      return marker;
    }
  }).addTo(map);
  
  // Désactiver le bouton "+" pour ajouter des points de passage
  var addWaypointBtn = document.querySelector('.leaflet-routing-add-via');
  if (addWaypointBtn) {
    addWaypointBtn.style.display = 'none';
  }
  
  // Ajout d'un bouton de réinitialisation personnalisé
  var resetContainer = L.DomUtil.create('div', 'leaflet-routing-container', document.getElementById('routing'));
  
  // Gestionnaire d'événements pour la recherche d'adresses dans la barre de recherche
  geocoder.on('geocode', function(e) {
    if (routingControl && routingControl._plan && routingControl._plan._geocoder._container) {
      routingControl._plan._geocoder._container.innerHTML = '';
    }
  });
  