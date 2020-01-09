CREATE DATABASE IF NOT EXISTS `factures` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `factures`;

CREATE TABLE IF NOT EXISTS `client` (
  `NumCli` INTEGER PRIMARY KEY,
  `NomCli` VARCHAR(30)
) ENGINE = InnoDB ;

CREATE TABLE IF NOT EXISTS `facture` (
  `NumFact` INTEGER PRIMARY KEY,
  `DateFact` DATE,
  `NumCli` INTEGER
) ENGINE = InnoDB ;

ALTER TABLE `facture` ADD INDEX ( `NumCli` );
ALTER TABLE `facture` ADD FOREIGN KEY ( `NumCli` ) REFERENCES `client` (`NumCli`);

insert into client
values (1,'Client 1');
insert into client
values (2,'Client 2');
insert into client
values (3,'Client 3');

insert into facture
values (1, '2019-01-01',1);
insert into facture
values (2, '2019-12-15',3);