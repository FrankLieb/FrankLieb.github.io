CREATE TABLE Vragen
(
VraagID int(11) not null PRIMARY KEY AUTO_INCREMENT,	
VraagCategorie int(11),
/*
1 = Mythologie
2 = Wiskunde
3 = Chemie
4 = Aardrijkskunde
5 = Dieren
6 = Sport
7 = Tv en film
8 = Geschiedenis
*/
Vraag varchar(255),
Keuze1 varchar(255),
Keuze2 varchar(255),
Keuze3 varchar(255),
Keuze4 varchar(255),
Antwoord varchar(255) /* Deze moet hetzelfde zijn als keuze1, 2, 3, of 4.*/
); 