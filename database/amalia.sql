DROP DATABASE IF EXISTS ecanteen;

CREATE DATABASE ecanteen;

USE ecanteen;

DROP TABLE IF EXISTS account;

CREATE TABLE `account` (
  `idaccount` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `profilphoto` varchar(300) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `ageuser` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS product;

CREATE TABLE `product` (
  `idproduct` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `product` varchar(300) NOT NULL,
  `price` decimal(30,0) NOT NULL,
  `photo_product` varchar(100) NOT NULL,
  `idseller` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS seller;

CREATE TABLE `seller` (
  `idseller` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `canteen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phonenumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; COLLATE=utf8mb4_general_ci;
