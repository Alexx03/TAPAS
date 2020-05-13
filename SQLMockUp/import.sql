DROP DATABASE IF EXISTS Tapas;

CREATE DATABASE Tapas;
USE Tapas;

CREATE TABLE Categorie
(
    idCategorie INT,
    nomCategorie VARCHAR(64),
    PRIMARY KEY(idCategorie)
);

CREATE TABLE Commande
(
    idCommande INT,
    dateCommande DATE,
    idGroupe INT,
    PRIMARY KEY(idCommande)
);

CREATE TABLE Tapas
(
    idTapas INT,
    quantite INT,
    nbExemplaires INT,
    PRIMARY KEY(idTapas),
    idCategorie INT
);

CREATE TABLE Groupe
(
    idGroupe INT,
    PRIMARY KEY(idGroupe)
);

CREATE TABLE Tapas_Commande
(
    idTapas INT,
    idCommande INT,
    PRIMARY KEY(idTapas,idCommande)
);

ALTER TABLE Tapas_Commande
ADD CONSTRAINT Tapas_Commande_idTapas
FOREIGN KEY (idTapas)
REFERENCES Tapas(idTapas);

ALTER TABLE Tapas_Commande
ADD CONSTRAINT Tapas_Commande_idCommande
FOREIGN KEY (idCommande)
REFERENCES Commande(idCommande);

ALTER TABLE Commande
ADD CONSTRAINT Commande_idGroupe
FOREIGN KEY(idGroupe)
REFERENCES Groupe(idGroupe);

ALTER TABLE Tapas
ADD CONSTRAINT Tapas_idCategorie
FOREIGN KEY(idCategorie)
REFERENCES Categorie(idCategorie);