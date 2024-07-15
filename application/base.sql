create database supermarcher;
use supermarcher;
create table client(
	id_client int auto_increment primary key,
	mdp varchar(255)
);
create table Produit(
	id_produit int auto_increment primary key,
	categorie varchar(255),
	prix_unitaire decimal
);

INSERT into  Produit VALUES(1,);
create table Caisse(
	id_caisse int auto_increment primary key
);
create table vente(
	id_vente int ,
	id_client int,
	id_produit int,
	quantite decimal,
	foreign key (id_client) references client(id_client),
	foreign key (id_produit) references Produit(id_produit)
);

CREATE OR REPLACE VIEW total AS
SELECT 
    vente.id_vente,
    vente.id_client,
    SUM(Produit.prix_unitaire * vente.quantite) AS total_vente
FROM 
    vente
JOIN 
    Produit ON Produit.id_produit = vente.id_produit
GROUP BY 
    vente.id_vente, vente.id_client;


INSERT INTO Caisse () VALUES ();
