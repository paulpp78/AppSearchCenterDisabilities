# Projet FullStackWeb S3 - Fonctionnalités de la Carte

## Choix de l'API de la Carte

Pour notre application, nous avons opté pour l'API Leaflet en raison de sa longue histoire et de sa réputation de fiabilité. La robustesse démontrée au fil du temps a été un critère déterminant pour notre projet. De plus, l'écosystème développé autour de Leaflet offre diverses API complémentaires, renforçant ainsi notre capacité à personnaliser et étendre les fonctionnalités de la carte selon nos besoins spécifiques.

## Fonctionnalités de la Carte

Notre carte interactive propose plusieurs fonctionnalités clés :

- **Mise en Évidence des Associations Handicap**
    - Valorisation des associations en lien avec le handicap.
    - Extraction des données de l'API présente sur la page de l'ONISEP.
    - Utilisation de la méthode GET dans le fichier `recherche.php` pour obtenir ces informations.

- **Filtre par Handicap**
    - Création d'un filtre permettant de sélectionner les associations en fonction des handicaps spécifiques.

- **Barre de Recherche pour les Villes**
    - Intégration d'une API complémentaire à la bibliothèque Leaflet : Leaflet Control Geocoder.
    - Permet aux utilisateurs de découvrir les associations présentes dans une ville recherchée.
    - Animation fluide avec la méthode Flyto pour une expérience utilisateur interactive.
    - Le call API se fait dans le fichier `map.php`, et le fichier JavaScript associé est `barre_recherche.js`.

- **Création de Routes**
    - Utilisation de l'API Leaflet Routing.
    - Permet aux utilisateurs de créer des itinéraires pour accéder aux différentes associations, peu importe leur emplacement en France.
    - Entrée des lieux de départ et d'arrivée via des champs d'adresse.
    - Le call API se fait dans le fichier `map.php`, et le fichier JavaScript associé est `route.js`.

Ces fonctionnalités visent à rendre l'application interactive, accessible et pratique pour les utilisateurs cherchant des associations pour personne en situation d'handicap.