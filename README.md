# Projet Recherche de Centres pour Personnes en Situation de Handicap

## Aperçu
Ce projet constitue une application web full-stack dédiée à la recherche de centres adaptés aux personnes en situation de handicap. L'application intègre des fonctionnalités d'authentification, de cartographie, et de recherche.

## Structure du Projet
- [Authentification](authentification/) - Gestion de l'authentification des utilisateurs.
- [Includes](includes/) - Fichiers communs aux pages, notamment l'en-tête et le pied de page.
- [Documentation](Doc_Php/) - Documentation locale pour faciliter le développement.
- [Carte](carte/) - Fonctionnalités relatives à la cartographie et à la recherche.

## Technologies Utilisées
- **Backend** : PHP
- **Base de Données** : MySQL
- **Frontend** : HTML, CSS, JavaScript

## Fonctionnement
L'élément central du fonctionnement de l'application est le fichier `app.php`. Celui-ci assure non seulement les fonctionnalités principales de l'application mais garantit également la sécurité en vérifiant l'authentification de l'utilisateur avant de lui permettre d'utiliser l'application.

## Guide d'Utilisation
1. **Authentification** : Pour accéder à l'application, les utilisateurs doivent s'authentifier via le formulaire dédié sur la page d'authentification.

2. **Recherche de Centres** : Une fois authentifié, l'utilisateur peut effectuer des recherches de centres adaptés en fonction de différents critères tels que le type de handicap.

3. **Cartographie** : Les résultats de recherche sont affichés sur une carte interactive, facilitant la visualisation et la localisation des centres.

4. **Déconnexion** : L'utilisateur peut se déconnecter à tout moment en utilisant l'option dédiée dans l'en-tête de l'application.

## Comment Contribuer
Si vous souhaitez contribuer à l'amélioration de cette application, suivez ces étapes :
1. Fork du projet.
2. Création d'une branche pour les modifications (`git checkout -b ameliorations`).
3. Commit des changements (`git commit -m 'Ajout de nouvelles fonctionnalités'`).
4. Push vers la branche (`git push origin ameliorations`).
5. Création d'une Pull Request.

## Licence
Ce projet est sous licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.