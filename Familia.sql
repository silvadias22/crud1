DROP DATABASE Familia;
CREATE DATABASE Familia;
USE Familia;

CREATE TABLE Familia (
	id int(3) NOT NULL PRIMARY KEY auto_increment,
	nome varchar(30) NOT NULL,
	idade int(3) NOT NULL,
	sexo char(1) NOT NULL
);