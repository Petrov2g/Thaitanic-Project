CREATE TABLE recension(
    id int(8) PRIMARY KEY AUTO_INCREMENT,
    name varchar(32),
    recension varchar(256)
);

CREATE TABLE boka(
	id int(8) PRIMARY KEY AUTO_INCREMENT,
	namn varchar(32),
	telefon varchar(32),
	date varchar(32),
	tid varchar(32),
	personer varchar(32)
);


INSERT INTO `meny` (`id`, `bild`, `namn`, `pris`, `info`, `styrka`, `gluten`, `notter`, `mjolk`) VALUES (NULL, 'img/1.jpg', 'SOM TAM', '120', 'Stark, sur och söt rätt med papayasallad, limejuice, vitlök, chili, rostade nötter, longbeans, tomat, gurka och morot. ', '3', '1', '0', '0'), (NULL, 'img/2.jpg', ' YAM NUA', '165', 'Ljummen marinerad biff med limejuice, chili-fisksås, inlagd vitlök, gurka, rödlök, tomat, thai-selleri, vårlök', '2', '2', NULL, NULL);
INSERT INTO `meny` (`id`, `bild`, `namn`, `pris`, `info`, `styrka`, `gluten`, `notter`, `mjolk`) VALUES (NULL, 'img/3.jpg', 'GENG KEOWAN MOO', '135', 'Fläskfilé i stark grön curry i kokosmjölk, chili, paprika, longbeans, aubergine, limeblad och färska bambuskott .', '3', '0', '0', '1');
