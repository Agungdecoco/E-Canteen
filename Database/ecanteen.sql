-- Create database `ecanteen`
CREATE DATABASE `ecanteen`;

-- Database: `ecanteen`

SET FOREIGN_KEY_CHECKS = 0;

-- Table structure for product
DROP TABLE IF EXISTS `product`;	
CREATE TABLE `product` (
  	`idproduct`		INT 			NOT NULL AUTO_INCREMENT PRIMARY KEY,	
	`product`		VARCHAR(255) 	COLLATE utf8mb4_general_ci NOT NULL,
	`price`			DECIMAL 		COLLATE utf8mb4_general_ci NOT NULL,
	`photo`			TEXT			NULL,
	`idseller`		INT				NOT NULL,
	INDEX (`idseller`),
	CONSTRAINT `product_idseller_fk` FOREIGN KEY (`idseller`) REFERENCES `seller` (`idseller`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for account
DROP TABLE IF EXISTS `users`;	
CREATE TABLE `users` (
  	`idacc`			INT 			NOT NULL AUTO_INCREMENT PRIMARY KEY,	
	`name`			VARCHAR(255) 	COLLATE utf8mb4_general_ci NOT NULL,
	`email`			VARCHAR(255)	COLLATE utf8mb4_general_ci NOT NULL,
	`password`		VARCHAR(20) 	COLLATE utf8mb4_general_ci NOT NULL,
	INDEX (`iduser`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for seller
DROP TABLE IF EXISTS `seller`;	
CREATE TABLE `seller` (
  	`idseller`		INT 			NOT NULL AUTO_INCREMENT PRIMARY KEY,	
	`seller`		VARCHAR(255) 	COLLATE utf8mb4_general_ci NOT NULL,
	`canteen`		VARCHAR(255)	NULL,
	`email`			VARCHAR(255)	COLLATE utf8mb4_general_ci NOT NULL,
	INDEX (`iduser`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;

