# EcoRide - Application de covoiturage écologique

## Description

EcoRide est une application web permettant de rechercher, réserver et proposer des trajets en covoiturage de manière écologique.

---

## Structure actuelle

root/
├── backend/
│ ├── controllers/
│ │ ├── CovoiturageController.php
│ ├── models/
│ │ ├── Covoiturage.php
│ ├── config/
│ │ ├── database.php
│ ├── index.php
│ ├── api.php
│
├── frontend/ # Code source frontend
│ ├── components/
│ │ ├── header.php
│ │ ├── footer.php
│ ├── pages/
│ │ ├── home.php
│ │ ├── covoiturages.php
│ │ ├── mentions-legales.php
│ │ ├── publier.php
│ │ ├── contact.php
│ │ ├── connexion.php
│ │ ├── 404.php
│ ├── router.php # 🔄 Déplacé ici pour ne pas être accessible publiquement
│
├── public/ # Fichiers accessibles publiquement
│ ├── index.php
│ ├── .htaccess
│ ├── api/
│ │ └── routerAPI.php
│ ├── assets/
│ │ ├── css/
│ │ │ ├── style.css
│ │ │ ├── home.css
│ │ │ ├── covoiturages.css
│ │ │ ├── mentions-legales.css
│ │ │ ├── connexion.css
│ │ ├── js/
│ │ │ ├── form.js
│ │ │ ├── main.js
│ │ │ ├── navigation.js
│ │ │ ├── scrolltotop.js
│ │ │ ├── formToggle.js
│ │ │ ├── ...
│ │ ├── images/
│
└── docs/ # Documentation

---

## Instructions pour le moment

- **Back-end** : Développer les bases (structure MVC, fichiers de configuration).
- **Front-end** : Commencer par l’interface de la page d’accueil (HTML/CSS/JS).

---

## Chartre graphique couleur

| Usage                 | Couleur           | HEX     |
| --------------------- | ----------------- | ------- |
| Texte principal       | Gris anthracite   | #2F4F4F |
| Texte secondaire      | Gris clair        | #B0B0B0 |
| Boutons (base)        | Bleu sarcelle     | #008080 |
| Boutons (hover)       | Bleu sombre       | #005F5F |
| Background principal  | Gris clair teinté | #E8E6E3 |
| Background secondaire | Beige foncé       | #C8B9A6 |

---

## Auteur

Développé par **Tom Perrocheau**.
