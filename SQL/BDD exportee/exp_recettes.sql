-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.39 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.8.0.6933
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour recettes
CREATE DATABASE IF NOT EXISTS `recettes` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `recettes`;

-- Listage de la structure de table recettes. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int NOT NULL AUTO_INCREMENT,
  `type_categorie` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table recettes.categorie : ~3 rows (environ)
INSERT INTO `categorie` (`id_categorie`, `type_categorie`) VALUES
	(4, 'Entree'),
	(5, 'Plat'),
	(6, 'Dessert');

-- Listage de la structure de table recettes. cuisiner
CREATE TABLE IF NOT EXISTS `cuisiner` (
  `id_recette` int DEFAULT NULL,
  `id_ingredient` int DEFAULT NULL,
  `quantité` int DEFAULT NULL,
  KEY `id_recette` (`id_recette`),
  KEY `id_ingredient` (`id_ingredient`),
  CONSTRAINT `FK_cuisiner_ingredient` FOREIGN KEY (`id_ingredient`) REFERENCES `ingredient` (`id_ingredient`),
  CONSTRAINT `FK_cuisiner_recette` FOREIGN KEY (`id_recette`) REFERENCES `recette` (`id_recette`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table recettes.cuisiner : ~39 rows (environ)
INSERT INTO `cuisiner` (`id_recette`, `id_ingredient`, `quantité`) VALUES
	(1, 2, 2),
	(5, 23, 2),
	(1, 4, 2),
	(1, 1, 2),
	(1, 7, 1),
	(1, 5, 1),
	(1, 6, 1),
	(3, 13, 1),
	(3, 14, 30),
	(3, 15, 4),
	(3, 16, 40),
	(4, 17, 6),
	(4, 18, 200),
	(4, 8, 1),
	(4, 19, 50),
	(4, 3, 1),
	(4, 20, 2),
	(4, 7, 1),
	(5, 21, 1),
	(5, 22, 1),
	(5, 10, 2),
	(5, 24, 4),
	(5, 25, 4),
	(5, 26, 500),
	(5, 27, 500),
	(5, 28, 500),
	(5, 29, 1),
	(5, 30, 1),
	(5, 31, 1),
	(5, 32, 1),
	(6, 34, 1),
	(6, 35, 2),
	(7, 10, 1),
	(7, 36, 1),
	(7, 7, 2),
	(7, 6, 2),
	(7, 37, 1),
	(7, 38, 1),
	(7, 8, 3);

-- Listage de la structure de table recettes. ingredient
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id_ingredient` int NOT NULL AUTO_INCREMENT,
  `nom_ingredient` varchar(50) NOT NULL DEFAULT '',
  `descrption` text NOT NULL,
  `cout_ingredient` decimal(15,2) NOT NULL DEFAULT (0),
  `uniteMesure` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_ingredient`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table recettes.ingredient : ~39 rows (environ)
INSERT INTO `ingredient` (`id_ingredient`, `nom_ingredient`, `descrption`, `cout_ingredient`, `uniteMesure`) VALUES
	(1, 'Pavé de saumon', 'La pièce', 1.98, 'La pièce'),
	(2, 'Avocat', 'La pièce', 4.65, 'La pièce'),
	(3, 'Huile d\'Olive', 'Cuillier à soupe', 0.50, 'cueiller'),
	(4, 'Jus de citron', 'jus de citron pressé', 0.05, 'La pièce'),
	(5, 'Pousses de cresson', 'Pousses en cueiller à soupe', 0.01, 'La pièce'),
	(6, 'Sel', 'Pincée', 0.10, 'La pincée'),
	(7, 'Poivre noir', 'Pincée', 0.10, 'La pincée'),
	(8, 'Oeuf', 'La pièce', 0.31, 'La pièce'),
	(9, 'Tomate', 'La pièce', 0.10, 'La pièce'),
	(10, 'Oignon', 'La pièce', 0.20, 'La pièce'),
	(11, 'Bouquet de persil', 'La pièce', 1.00, 'La pièce'),
	(12, 'Beurre', 'Beurre le gramme', 0.02, 'Le gramme'),
	(13, 'Confiture de lait', 'Le pot', 4.80, 'Le pot'),
	(14, 'Crème chantilly', 'En bombe', 0.01, 'millilitre'),
	(15, 'Biscuit Speculoos', 'Le biscuit', 0.07, 'La pièce'),
	(16, 'Chocolat noir', 'Le gramme', 0.15, 'Le gramme'),
	(17, 'Feuilles de brick', 'La feuille de brick', 0.10, 'La pièce'),
	(18, 'Fromage de chèvre frais', 'Le gramme', 0.33, 'Le gramme'),
	(19, 'Emmental rapé', 'Fromage rapé en l\'état', 0.01, 'Le gramme'),
	(20, 'Graines de pavit', 'La part de 20grammes', 0.15, 'La part'),
	(21, 'Poivre noir en grains', 'Le gramme', 0.05, 'Le gramme'),
	(22, 'Sel Gros', 'Pincée', 0.10, 'La pincée'),
	(23, 'Clous de girofle', 'Le gramme', 0.15, 'Le gramme'),
	(24, 'Carottes', 'La carotte', 0.33, 'La carotte'),
	(25, 'Poireau', 'Le poireau', 0.81, 'Le poireau'),
	(26, 'Viande de boeuf grasse', 'Le gramme', 0.02, 'Le gramme'),
	(27, 'Viande de boeuf maigre', 'Le gramme', 0.02, 'Le gramme'),
	(28, 'Viande de boeuf gelatineuse', 'Le gramme', 0.02, 'Le gramme'),
	(29, 'Os à moelle', 'La pièce', 0.64, 'La pièce'),
	(30, 'Celeri en branche', 'La branche', 0.70, 'La branche'),
	(31, 'Ail gousse', 'La gousse', 1.53, 'La gousse'),
	(32, 'Bouquet garni pot au feu', 'La pièce', 0.98, 'La pièce'),
	(33, 'Laitue', 'Pièce', 1.49, 'La pièce'),
	(34, 'Salade', 'La pièce', 0.01, 'La pièce'),
	(35, 'Vinaigrette prete', 'La cueilller', 0.02, 'cueiller'),
	(36, 'Lardons 250g', 'Le paquet', 2.19, 'Le paquet'),
	(37, 'Creme fraiche 50 cl', 'le pot', 1.99, 'Le pot'),
	(38, 'Pates spaguettis 500 g', 'Le paquet', 2.98, 'Le paquet'),
	(39, 'Poivre moulu', 'Poivre moulu', 2.50, 'cueiller');

-- Listage de la structure de table recettes. recette
CREATE TABLE IF NOT EXISTS `recette` (
  `id_recette` int NOT NULL AUTO_INCREMENT,
  `id_categorie` int DEFAULT NULL,
  `nom_recette` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `tempsPreparationMns` int NOT NULL DEFAULT (0),
  PRIMARY KEY (`id_recette`),
  KEY `id_categorie` (`id_categorie`),
  CONSTRAINT `FK_recette_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table recettes.recette : ~6 rows (environ)
INSERT INTO `recette` (`id_recette`, `id_categorie`, `nom_recette`, `description`, `tempsPreparationMns`) VALUES
	(1, 5, 'Tartare d\'avocat et saumon', 'Coupez les avocats en deux, retirez le noyau et détaillez la chair en dés. Arrosez avec 1 cuillère à soupe de jus de citron, salez, poivrez et mélangez.', 15),
	(3, 6, 'Verrine à la confiture de lait de vache', 'Détendez la confiture de lait à la fourchette et incorporez délicatement les 2 tiers de la chantilly.', 15),
	(4, 5, 'Cigares au fromage et graines de pavot', 'Dans un bol, mélangez le fromage frais avec l’emmental râpé, l’œuf et un peu de poivre.', 15),
	(5, 5, 'Pot au feu base viande', 'https://www.marmiton.org/recettes/recette_pot-au-feu_32792.aspx', 270),
	(6, 4, 'Salade verte', 'Salade verte abev assaisonnemnt tout pret', 10),
	(7, 5, 'Pâtes à la "carbonara" à la française', 'https://www.marmiton.org/recettes/recette_pates-a-la-carbonara_80453.aspx', 20);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
