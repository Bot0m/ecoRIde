-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 10 fév. 2025 à 14:42
-- Version du serveur : 5.7.44
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eco_ride_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `Covoiturage`
--

CREATE TABLE `Covoiturage` (
  `covoiturage_id` int(11) NOT NULL,
  `date_depart` date NOT NULL,
  `heure_depart` time NOT NULL,
  `lieu_depart` varchar(255) NOT NULL,
  `date_arrivee` date NOT NULL,
  `heure_arrivee` time NOT NULL,
  `lieu_arrivee` varchar(255) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `nb_place` int(11) NOT NULL,
  `prix_personne` float NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `voiture_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Covoiturage`
--
ALTER TABLE `Covoiturage`
  ADD PRIMARY KEY (`covoiturage_id`),
  ADD KEY `fk_covoiturage_utilisateur` (`utilisateur_id`),
  ADD KEY `fk_covoiturage_voiture` (`voiture_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Covoiturage`
--
ALTER TABLE `Covoiturage`
  MODIFY `covoiturage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Covoiturage`
--
ALTER TABLE `Covoiturage`
  ADD CONSTRAINT `fk_covoiturage_utilisateur` FOREIGN KEY (`utilisateur_id`) REFERENCES `Utilisateur` (`utilisateur_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_covoiturage_voiture` FOREIGN KEY (`voiture_id`) REFERENCES `Voiture` (`voiture_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
