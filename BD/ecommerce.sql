drop database if exists ecommerce ;
create database if not exists ecommerce ; 
use ecommerce ; 

create table Client (
	idCli int not null,
	nom_cli varchar(30) not null,
	prenomCli varchar(30) not null, 
	mailCli varchar(30) not null, 
	telCli varchar(30) not null, 
	adrCli varchar(30) not null, 
	mdp varchar(30) not null, 
	primary key(idCli)
); 

create table Produit ( 
	idProd int not null, 
	nomProd varchar(30) not null, 
	prixProd int not null, 
	qteStock int not null,
	stockProd varchar(3),  
	primary key(idProd) 
);  

create table Commande ( 
	idCom int not null, 
	idProd int not null, 
	idCli int not null, 
	primary key(idCom),
	foreign key(idProd) references Produit(idProd),
	foreign key(idCli) references Client(idCli)	 
);  

create table Paiement ( 
	idPaie int not null,
	idCom int not null, 
	idProd int not null, 
	idCli int not null, 
	prixTotal int not null,
	primary key(idPaie),
	foreign key(idCom) references Commande(idCom),
	foreign key(idProd) references Produit(idProd),
	foreign key(idCli) references Client(idCli)	
);  

create table Categorie (
	idCat int not null,
	idProd int not null, 
	nomCat varchar(20) not null,
	primary key(idCat),
	foreign key(idProd) references Produit(idProd)
); 

create table Panier (
	idPan int not null,
	idProd int not null, 
	idCom int not null,
	idCli int not null, 
	prixTotal int not null, 
	primary key(idPan), 
	foreign key(idProd) references Produit(idProd), 
	foreign key(idCom) references Commande(idCom),
	foreign key(idCli) references Client(idCli)	
); 

create table Administrateur (
	idAd int not null,
	nomAd varchar(30) not null,
	prenomAd varchar(30) not null, 
	mailAd varchar(30) not null, 
	idProd int not null,
	primary key(idAd),
	foreign key(idProd) references Produit(idProd)
); 

create table Livraison (
	numSuivie int not null,
	idCom int not null,
	idCli int not null,
	etat varchar(10) not null, 
	primary key(numSuivie),
	foreign key(idCom) references Commande(idCom),
	foreign key(idCli) references Client(idCli)	
); 

create table Commentaire (
	idAvis int not null,
	idCli int not null,
	EcriCom varchar(15) not null, 
	ModifCom varchar(30) not null, 
	primary key(idAvis),
	foreign key(idCli) references Client(idCli)
); 


