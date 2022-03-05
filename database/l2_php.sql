-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 05 mars 2022 à 19:22
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `l2_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `destinataire` varchar(100) NOT NULL,
  `expediteur` varchar(50) NOT NULL,
  `objet` varchar(50) NOT NULL,
  `contenu` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `destinataire`, `expediteur`, `objet`, `contenu`, `date`) VALUES
(1, 'Daniel', 'bhoye@gmail.com', 'text', 'hi', '0000-00-00'),
(2, 'Mariama Oury', 'bhoye@gmail.com', 'Document', 'fichier', '0000-00-00'),
(3, 'Mamadou Bhoye', 'mariamaoury@gmail.com', 'text', 'hello', '0000-00-00'),
(4, 'Mamadou Bhoye', 'mariamaoury@gmail.com', 'text', 'good', '2022-03-05'),
(5, 'Daniel', 'mariamaoury@gmail.com', 'examen', 'tu as eu 18', '2022-03-05'),
(6, 'bhoye@gmail.com', 'daniel@gmail.com', 'Document', 'filte txt', '2022-03-05'),
(7, 'mariamaoury@gmail.com', 'daniel@gmail.com', 'Invitaion', 'manger\r\n', '2022-03-05'),
(8, 'daniel@gmail.com', 'mariamaoury@gmail.com', 'reponse inv', 'merci', '2022-03-05'),
(9, 'daniel@gmail.com', 'mariamaoury@gmail.com', 'Invitaion', 'oui oui', '-20'),
(10, 'mariamaoury@gmail.com', 'bhoye@gmail.com', 'transfert', 'code recu', '2022-03-05 17:58:07'),
(11, 'daniel@gmail.com', 'bhoye@gmail.com', 'conge', 'conge a sali', '2022-03-05 18:07:30');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'Diallo', 'Mamadou Bhoye', 'bhoye@gmail.com', 'passer'),
(2, 'Molo', 'Daniel', 'daniel@gmail.com', 'passer'),
(3, 'Diallo', 'Mariama Oury', 'mariamaoury@gmail.com', 'passer');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
