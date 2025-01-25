# EcoRide - Application de covoiturage écologique

## Description

EcoRide est une application web permettant de rechercher, réserver et proposer des trajets en covoiturage de manière écologique.

---

## Structure actuelle

root/
├── backend/ # Code back-end
│ ├── controllers/ # Contrôleurs
│ ├── models/ # Modèles
│ ├── views/ # Vues
│ ├── config/ # Fichiers de configuration (à venir)
│ └── index.php # Point d'entrée
├── frontend/
│ ├── components/ # Composants réutilisables
│ │ ├── header.html # En-tête (menu/navigation)
│ │ ├── footer.html # Bas de page
│ │ │── mentions-legales.php # Mentions legales
│ │ └── search-bar.html # Composant pour la barre de recherche
│ ├── pages/ # Pages spécifiques
│ │ ├── home.html # Page d'accueil
│ │ ├── covoiturages.html # Page des covoiturages
│ │ └── contact.html # Page contact
│ ├── assets/ # CSS, JS, images
│ │ ├── css/
│ │ ├── js/
│ │ └── images/
│ └── index.php # Page principale (peut inclure les composants)
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
