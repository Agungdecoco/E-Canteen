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
DROP TABLE IF EXISTS `account`;	
CREATE TABLE `account` (
  	`idacc`			INT 			NOT NULL AUTO_INCREMENT PRIMARY KEY,	
	`iduser`		INT 			NOT NULL,
	`name`			VARCHAR(255) 	COLLATE utf8mb4_general_ci NOT NULL,
	`address`		VARCHAR(255)	NOT NULL,
	`telephone`		VARCHAR(13)		NOT NULL,
	`age`			INT				NULL,
	INDEX (`iduser`),
	CONSTRAINT `account_iduser_fk` FOREIGN KEY (`iduser`) REFERENCES `useracc`(`iduser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for seller
DROP TABLE IF EXISTS `seller`;	
CREATE TABLE `seller` (
  	`idseller`		INT 			NOT NULL AUTO_INCREMENT PRIMARY KEY,	
	`iduser`		INT 			NOT NULL,
	`seller`		VARCHAR(255) 	COLLATE utf8mb4_general_ci NOT NULL,
	`canteen`		VARCHAR(255)	NULL,
	INDEX (`iduser`),
	CONSTRAINT `seller_iduser_fk` FOREIGN KEY (`iduser`) REFERENCES `useracc`(`iduser`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for useracc
DROP TABLE IF EXISTS `useracc`;	
CREATE TABLE `useracc` (
  	`iduser`		INT 			NOT NULL AUTO_INCREMENT PRIMARY KEY,	
	`username`		VARCHAR(10) 	COLLATE utf8mb4_general_ci NOT NULL,
	`password`		VARCHAR(20) 	COLLATE utf8mb4_general_ci NOT NULL,
	INDEX (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

SET FOREIGN_KEY_CHECKS = 1;

