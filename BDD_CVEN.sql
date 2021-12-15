drop table if exists Client;
drop table if exists Reservation;
drop table if exists Attribuer_Hebergement;
drop table if exists Hebergement_Restauration;


create table Client (
  ID_utilisateur int(1) not null primary key auto_increment,
  Login varchar(100) not null,
  Mdp varchar(100) not null,
  Nom varchar(100) not null,
  Prenom varchar(100) not null,
  Administrateur boolean not null
  );

create table Reservation (
  ID_reservation int not null primary key auto_increment,
  Date_Arrivee int not null,
  Date_Depart int not null,
  Nombre_Client int not null,
  Restaurant boolean not null,
  Menage boolean not null,
  ) 

create table Attribuer_Hebergement (
  Date_hebergement int not null
  ) ENGINE = InnoDB ;

create table Hebergement_Restauration (
  ID_hebergement int not null primary key auto_increment,
  Type_hebergement varchar(100) not null,
  Emplacement varchar(100) not null,
  Etage int not null,
  Commentaire varchar(100) not null
  )  ;


