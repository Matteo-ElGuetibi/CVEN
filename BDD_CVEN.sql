drop table if exists Client;
drop table if exists Reservation;
drop table if exists Attribuer_Hebergement;
drop table if exists Hebergement_Restauration;


create table Client (
  ID_utilisateur int not null primary key auto_increment,
  Login varchar(100) not null,
  Mdp varchar(100) not null,
  Nom varchar(100) not null,
  Prenom varchar(100) not null,
  Administrateur boolean not null
  ) ENGINE = InnoDB ;

create table Reservation (
  ID_reservation int not null primary key auto_increment,
  Date_Arrivee date not null,
  Date_Depart date not null,
  Nombre_Client int not null,
  Restaurant boolean not null,
  Menage boolean not null,
  ) ENGINE = InnoDB ;

create table Attribuer_Hebergement (
  Date_hebergement date not null
  ) ENGINE = InnoDB ;

create table Hebergement_Restauration (
  ID_hebergement int not null primary key auto_increment,
  Type_hebergement varchar(100) not null,
  Emplacement varchar(100) not null,
  Etage int not null,
  Commentaire varchar(100) not null
  ) ENGINE = InnoDB ;

INSERT INTO 'Client' (`Login`,`Mdp`,`Nom`,`Prenom`,`Administrateur`)
VALUES
  ("13525","ECB69KXG7QA","Olson","Tiger","No"),
  ("35045","PTE42SGS6SL","Beach","Ryan","Yes"),
  ("57473","UUY03WGP3EF","Alexander","Griffith","Yes"),
  ("17718","HSO34GTE1YB","Stein","Cherokee","Yes"),
  ("37061","HNM16LUH5ML","Conway","Yvette","Yes");


INSERT INTO `Reservation` (`Date_Arrivee`,`Date_Depart`,`Nombre_Client`,`Restaurant`,`Menage`)
VALUES
  ("01-10-20","02-11-21",6,"Yes","No"),
  ("01-15-20","02-06-21",44,"No","No"),
  ("01-27-20","02-18-21",7,"No","No"),
  ("01-20-20","02-08-21",18,"No","No"),
  ("01-19-20","02-05-21",15,"No","Yes");


INSERT INTO `Attribuer_Hebergement` (`Date_hebergement`)
VALUES
  ("Feb 20, 2020"),
  ("Feb 13, 2020"),
  ("Feb 3, 2020"),
  ("Jan 5, 2020"),
  ("Jan 17, 2020");


INSERT INTO `Hebergement_Restauration` (`Type_hebergement`,`Emplacement`,`Etage`,`Commentaire`)
VALUES
  ("ullamcorper, nisl arcu","sapien. Nunc pulvinar",1,"incroayfzg"),
  ("mauris erat eget","semper rutrum. Fusce",1,"genial"),
  ("eget magna. Suspendisse","eros. Proin ultrices.",3,"hteahjta"),
  ("Nam porttitor scelerisque","a ultricies adipiscing,",1,"gfrahatreh"),
  ("felis. Nulla tempor","Sed et libero.",3,"gqggnulrfg");
