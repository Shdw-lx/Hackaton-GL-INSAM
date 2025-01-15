CREATE DATABASE Participants_Concours;

CREATE TABLE Equipe (
    Matricule INT PRIMARY KEY AUTO INCREMENT,
    Nom Equipe varchar(50),
    paiement INT,
    statut varchar(1)
);

CREATE TABLE Membre_Equipe (
    Nom varchar(50),
    Prénom varchar(50),
    Matriculeequipe INT,
    FOREIGN KEY (Matriculeequipe) REFERENCES Equipe(Matricule)
);