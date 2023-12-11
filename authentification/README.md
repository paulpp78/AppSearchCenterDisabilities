# Fonctionnalités d'Authentification

## Vue d'ensemble
La fonctionnalité d'authentification permet aux utilisateurs de s'inscrire et de se connecter à l'application.

## Structure du Projet
Voici l'arborescence du projet pour la partie authentification :
```
authentification/
├── Formulaire_Auth.php      # Page HTML pour l'authentification
├── Gestion_Auth
│   ├── signin.php           # Script PHP pour la connexion
│   └── signup.php           # Script PHP pour l'inscription
├── database
│   ├── script_connexion_PHP
│   │   └── db_connexion.php # Script PHP pour la connexion à la base de données
│   └── script_table_sql
│       └── users.sql        # Script SQL pour créer la table des utilisateurs
└── static
    ├── Animations
    │   └── auth.js          
    └── styles
        └── auth.css         
```


## Authentification
- **Inscription** (`signup.php`) : Permet la création de nouveaux comptes utilisateur. Les mots de passe sont sécurisés via hachage.
- **Connexion** (`signin.php`) : Authentifie les utilisateurs en vérifiant l'email et le mot de passe.

### Sécurité
- Les mots de passe sont hachés avant d'être stockés dans la base de données.
- Protection contre les injections SQL grâce à l'utilisation de requêtes préparées.

### Base de Données
- Le script `users.sql` crée une table `users` pour stocker les données des utilisateurs.
- `db_connexion.php` établit la connexion à la base de données MySQL.

## Installation
1. Clonez le dépôt Git : `git clone git@github.com:paulpp78/Project_FullStackWeb_S3.git`
2. Naviguez vers le répertoire du projet et configurez votre environnement de développement.
3. Exécutez `users.sql` dans votre SGBD MySQL pour créer la table des utilisateurs.
4. Configurez `db_connexion.php` avec vos paramètres de connexion MySQL.