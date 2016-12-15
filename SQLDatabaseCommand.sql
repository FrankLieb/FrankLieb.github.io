SQL Database command

CREATE TABLE gebruiker (
	id int(11) not null PRIMARY KEY AUTO_INCREMENT,						/*Identifier, autonummering */
	first varchar(128) not null,     									/*Voornaam */
	last varchar(128) not null,											/*Achternaam */
	uid varchar(128) not null,											/*Gebruikersnaam */
	email varchar(128) not null,										/*Email */
	pwd varchar(200) not null											/*Wachtwoord */
);