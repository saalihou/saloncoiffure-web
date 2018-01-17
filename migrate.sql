CREATE DATABASE IF NOT EXISTS sdc;
USE sdc;

DROP TABLE users;
CREATE TABLE users
(
 id      INT NOT NULL PRIMARY KEY,
 email   VARCHAR(50) NOT NULL ,
 mdp     VARCHAR(1000) NOT NULL ,
 tel     VARCHAR(20) NOT NULL ,
 prenoms VARCHAR(200) NOT NULL ,
 nom     VARCHAR(50) NOT NULL ,
 role    VARCHAR(20) NOT NULL ,
 etat    VARCHAR(15) NOT NULL ,
);