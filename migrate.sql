CREATE DATABASE IF NOT EXISTS sdc;
USE sdc;

DROP TABLE IF EXISTS users;
CREATE TABLE users
(
 id      INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
 email   VARCHAR(50) NOT NULL ,
 mdp     VARCHAR(1000) NOT NULL ,
 tel     VARCHAR(20) NOT NULL ,
 prenoms VARCHAR(200) NOT NULL ,
 nom     VARCHAR(50) NOT NULL ,
 role    ENUM('ADMIN') ,
 etat    ENUM('NON_VERIFIE', 'ACTIF', 'INACTIF') NOT NULL
);

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
);
