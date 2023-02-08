CREATE DATABASE takalo;
SHOW DATABASES;
USE takalo;

CREATE TABLE membre (
    idmembre INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255),
    mail VARCHAR(255),
    mdp VARCHAR(255),
    isadmin INT(6)
);

CREATE TABLE categorie (
    idcategorie INT(6) NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    nomcategorie VARCHAR(255),
    images VARCHAR(255)
);

CREATE TABLE objet (
    idobjet INT(6) NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    nomobjet VARCHAR(255),
    comment VARCHAR(255),
    prix FLOAT ,
    idmembre INT(6),
    FOREIGN KEY (idmembre) REFERENCES membre (idmembre)
);

CREATE TABLE objet_categorie (
    idobjetcategorie INT(6) NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    idcategorie INT(6),
    idobjet INT(6),
    FOREIGN KEY (idcategorie) REFERENCES categorie (idcategorie),
    FOREIGN KEY (idobjet) REFERENCES objet (idobjet)
);

CREATE TABLE images (
    idimages INT(6) NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    idobjet INT(6),
    link VARCHAR(255),
    FOREIGN KEY (idobjet) REFERENCES objet (idobjet)
);

CREATE TABLE troc (
    idtroc INT(6) NOT NULL AUTO_INCREMENT  PRIMARY KEY,
    idobjet1 INT(6),
    idobjet2 INT(6),
    etat VARCHAR(255),
    daty DATE,
    FOREIGN KEY (idobjet1) REFERENCES objet (idobjet),
    FOREIGN KEY (idobjet2) REFERENCES objet (idobjet)
);



INSERT INTO membre (nom,mail,mdp,isadmin) VALUES ('Jean','jean@takalo.mg','jean',0);
INSERT INTO membre (nom,mail,mdp,isadmin) VALUES ('Koto','koto@takalo.mg','koto',1);
INSERT INTO membre (nom,mail,mdp,isadmin) VALUES ('Aine','aina@takalo.mg','aina',1);


INSERT INTO categorie (nomcategorie,images) VALUES ('vetements','pnoire.jpg');
INSERT INTO categorie (nomcategorie,images) VALUES ('Disques','disque.jpg');
INSERT INTO categorie (nomcategorie,images) VALUES ('Livres','biblio.jpg');
INSERT INTO categorie (nomcategorie,images) VALUES ('Machines','pc-gamer.jpg');


INSERT INTO objet (nomobjet,comment,prix,idmembre) VALUES ('T_shirt','coton',70000,1);
INSERT INTO objet (nomobjet,comment,prix,idmembre) VALUES ('DVD','originale',4000,2);
INSERT INTO objet (nomobjet,comment,prix,idmembre) VALUES ('Livre','etude',50000,3);
INSERT INTO objet (nomobjet,comment,prix,idmembre) VALUES ('PC','asus',1400000,2);
INSERT INTO objet (nomobjet,comment,prix,idmembre) VALUES ('Chaussure','thailand',75000,1);
INSERT INTO objet (nomobjet,comment,prix,idmembre) VALUES ('Diary','calandrier',5000,3  );

INSERT INTO troc (idobjet1,idobjet2,etat,daty) VALUES (1,1,0,'2023-02-06');
INSERT INTO troc (idobjet1,idobjet2,etat,daty) VALUES (2,2,1,'2023-02-05');
INSERT INTO troc (idobjet1,idobjet2,etat,daty) VALUES (3,3,2,'2023-02-07');
INSERT INTO troc (idobjet1,idobjet2,etat,daty) VALUES (4,4,0,'2023-02-04');                           

INSERT INTO objet_categorie(idcategorie,idobjet) VALUES (1,1);
INSERT INTO objet_categorie(idcategorie,idobjet) VALUES (1,5);
INSERT INTO objet_categorie(idcategorie,idobjet) VALUES (2,2);
INSERT INTO objet_categorie(idcategorie,idobjet) VALUES (3,3);
INSERT INTO objet_categorie(idcategorie,idobjet) VALUES (3,6);
INSERT INTO objet_categorie(idcategorie,idobjet) VALUES (4,4);


INSERT INTO images(idobjet,link) VALUES (1,'t-noire.jpg');
INSERT INTO images(idobjet,link) VALUES (2,'cd.jpg');
INSERT INTO images(idobjet,link) VALUES (3,'boky.jpg');
INSERT INTO images(idobjet,link) VALUES (4,'Ordi.jpg');
INSERT INTO images(idobjet,link) VALUES (5,'kiraro.jpg');
INSERT INTO images(idobjet,link) VALUES (6,'diary1.jpg');