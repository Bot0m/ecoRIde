# EcoRide - Application de covoiturage écologique

## Description

EcoRide est une plateforme web innovante de covoiturage écologique permettant aux utilisateurs de rechercher, réserver et proposer des trajets tout en privilégiant une approche respectueuse de l'environnement.

## Prérequis

- PHP 8
- MySQL
- Apache/Nginx
- Navigateur web moderne

## Installation

1. Cloner le projet (https://github.com/Bot0m/ecoRIde.git)
2. Configurer la base de données
3. Configurer les permissions des dossiers
4. Démarrer le serveur Apache/Nginx
5. Ouvrir le projet dans le navigateur

---

## Structure actuelle

root/
├── backend/
│ ├── config/
│ │ ├── Config.php
│ │ ├── Database.php
│ ├── controllers/
│ │ ├── CovoiturageController.php
│ ├── models/
│ │ ├── Covoiturage.php
│ ├── api.php
│ ├── autoload.php
│ ├── index.php
├── frontend/
│ ├── components/
│ │ ├── footer.php
│ │ ├── header.php
│ ├── pages/
│ │ ├── 404.ph
│ │ ├── annonce.php
│ │ ├── connexion.php
│ │ ├── covoiturages.php
│ │ ├── home.php
│ │ ├── inscription.php
│ │ ├── mentions-legales.php
│ │ ├── publier.php
│ └── router.php
│
├── public/
│ ├── api/
│ │ └── routerAPI.php
│ ├── assets/
│ │ ├── css/
│ │ │ ├── connexion.css
│ │ │ ├── covoiturages.css
│ │ │ ├── footer.css
│ │ │ ├── header.css
│ │ │ ├── home.css
│ │ │ ├── inscription.css
│ │ │ ├── mentions-legales.css
│ │ │ ├── style.css
│ │ ├── js/
│ │ │ ├── form-toggle.js
│ │ │ ├── form.js
│ │ │ ├── main.js
│ │ │ ├── navigation.js
│ │ │ ├── scroll-to-top.js
│ │ │ ├── search.js
│ │ ├── pictures/
│ ├── .htaccess_old (Utile lors de la migration)
│ ├── index.php
│ ├── .gitignore
└── docs/ # Documentation

---

## Instructions pour le moment

## Fonctionnalités

### Implémentées

- Page d'accueil avec recherche de trajets
- Navigation responsive
- Système d'inscription/connexion
- Recherche de covoiturages

### En développement

- Filtres de recherche avancés
- Publication d'annonces
- Espace utilisateur

### Planifiées

- Système de notation
- Gestion des réservations
- Espace administrateur

## Technologies Utilisées

- Frontend : HTML5, CSS3, JavaScript (ES6+)
- Backend : PHP 8
- Base de données : MySQL
- Autres : PDO, API REST

## Charte Graphique

| Usage                 | Couleur           | HEX     |
| --------------------- | ----------------- | ------- |
| Texte principal       | Gris anthracite   | #2F4F4F |
| Texte secondaire      | Gris clair        | #B0B0B0 |
| Boutons (base)        | Bleu sarcelle     | #008080 |
| Boutons (hover)       | Bleu sombre       | #005F5F |
| Background principal  | Gris clair teinté | #E8E6E3 |
| Background secondaire | Beige foncé       | #C8B9A6 |

## Tests

- Tests d'intégration en cours d'implémentation

## Auteur

Développé par **Tom Perrocheau**

## Contact

Pour toute question : contact@ecoride.com(factice)

---
