DROP DATABASE IF EXISTS ecanteen;

CREATE DATABASE ecanteen;
USE ecanteen;

DROP TABLE IF EXISTS account;

CREATE TABLE `account` (
  `idaccount` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(320) COLLATE utf8mb4_general_ci NOT NULL UNIQUE,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL UNIQUE NOT NULL,
  `photo_profil` varchar(255) COLLATE utf8mb4_general_ci NOT NULL UNIQUE NOT NULL,
  `phone_number` varchar(14) COLLATE utf8mb4_general_ci NOT NULL UNIQUE NOT NULL,
  `age_user` int(11) DEFAULT NULL,
  INDEX(`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS product;

CREATE TABLE `product` (
  `idproduct` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `product` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(30,0) NOT NULL,
  `photo_product` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `idseller` int(11) NOT NULL,
  `kategori` enum('makanan', 'minuman'),
  INDEX(`product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS sellers;

CREATE TABLE `sellers` (
  `idseller` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `canteen` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

DROP TABLE IF EXISTS users;

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(320) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;