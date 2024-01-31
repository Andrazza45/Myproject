DROP DATABASE if exists comunicati;
create DATABASE comunicati default character set 'UTF8';
USE comunicati;

CREATE TABLE IF NOT EXISTS `personale`
(
	`matricola` CHAR(5) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
	`nome` VARCHAR(100) NOT NULL,
	`cognome` VARCHAR(100) NOT NULL,
	`ruolo` VARCHAR(50) NOT NULL,
    `codsettore` VARCHAR(50) NOT NULL, -- FK a settore.codsettore
	PRIMARY KEY (`matricola`)
)
comment = 'Tabella personale del comune';

CREATE TABLE IF NOT EXISTS `settore`
(
	`codsettore` VARCHAR(50) NOT NULL,
	`piano` INT UNSIGNED NOT NULL,
    `nufficio` INT UNSIGNED NOT NULL,
    `matricolacapo` CHAR(5) NULL, -- FK a personale.matricola
	PRIMARY KEY (`codsettore`)
)
comment = 'Tabella settori del comune';

CREATE TABLE IF NOT EXISTS `richiesta`
(
	`matricola` CHAR(5) NOT NULL,
	`datarichiesta` DATETIME NOT NULL,
	`oggetto` VARCHAR(50) NOT NULL,
	`testo` VARCHAR(255) NOT NULL,
	`codsettoredest` VARCHAR(50) NOT NULL, -- FK a settore.codsettore
	PRIMARY KEY (`matricola`, `datarichiesta`)
)
comment = 'Tabella messaggi di richiesta';

CREATE TABLE IF NOT EXISTS `risposta`
(
	`idrisposta` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `datarisposta` DATETIME NOT NULL,
    `testo` VARCHAR(255) NOT NULL,
    `matricola` CHAR(5) NOT NULL, -- FK a richiesta.(matricola,datarichiesta)
	`datarichiesta` DATETIME NOT NULL, -- FK a richiesta.(matricola,datarichiesta)
	PRIMARY KEY (`idrisposta`)
)
comment = 'Tabella messaggi di risposta';

ALTER TABLE personale
ADD CONSTRAINT FOREIGN KEY (codsettore)
REFERENCES settore (codsettore);

ALTER TABLE settore
ADD CONSTRAINT FOREIGN KEY (matricolacapo)
REFERENCES personale (matricola);

ALTER TABLE richiesta
ADD CONSTRAINT FOREIGN KEY (codsettoredest)
REFERENCES settore (codsettore);

ALTER TABLE risposta
ADD CONSTRAINT FOREIGN KEY (matricola, datarichiesta)
REFERENCES richiesta (matricola, datarichiesta);

INSERT INTO `settore` VALUES
('UffSindaco',1,1,NULL),
('Tributi',1,2,NULL),
('Anagrafe',1,3,NULL),
('Personale',2,1,NULL);

INSERT INTO `personale` VALUES
('001',MD5('gattopwd'),'Rossi','Mario','Sindaco','UffSindaco'),
('002',MD5('canepwd'),'Verdi','Giuseppe','Impiegato','Tributi'),
('003',MD5('pippopwd'),'Neri','Aldo','Capo settore','Anagrafe'),
('004',MD5('plutopwd'),'Puccini','Giacomo','Capo settore','Personale')
;

UPDATE `settore` SET matricolacapo='001' WHERE codsettore='UffSindaco';
UPDATE `settore` SET matricolacapo='001' WHERE codsettore='Tributi';
UPDATE `settore` SET matricolacapo='001' WHERE codsettore='Anagrafe';
UPDATE `settore` SET matricolacapo='001' WHERE codsettore='Personale';

INSERT INTO `richiesta` VALUES
('002','2021-05-25 09:00:00','Richiesta info','Buongiorno, gradirei ricevere l''anagrafe di Giuseppina Gialli.','Personale'),
('001','2021-05-25 09:30:00','Richiesta dati','Buongiorno, gradirei ricevere il report sulle nuove assunzioni 2020','Personale'),
('001','2021-05-25 09:31:00','Richiesta dati','Buongiorno, gradirei ricevere il report sulle nuove assunzioni 2021','Personale'),
('001','2021-05-25 10:00:00','Richiesta dati','Buongiorno, gradirei ricevere il report sulle nuove mansioni','Personale'),
('001','2021-05-25 11:00:00','Richiesta dati','Buongiorno, quando sara\' la prossima riunione della giunta?','UffSindaco')
;

INSERT INTO risposta(datarisposta,testo,matricola,datarichiesta) VALUES
('2021-05-25 11:00:00','Buongiorno, ci devo lavorare.','001','2021-05-25 09:00:00'),
('2021-05-25 11:50:00','Buongiorno, l''ho spedita via email.','001','2021-05-25 09:30:00'),
('2021-05-25 11:50:00','Buongiorno, sto terminando l\' elenco a breve sara\' disponibile','001','2021-05-25 09:30:00'),
('2021-05-25 12:50:00','Buongiorno, l''ho spedita via email.','001','2021-05-25 10:00:00')
;

