CREATE TABLE `soor`.`user` (
  `ID` INT NOT NULL,
  `CreationDate` VARCHAR(100) NOT NULL,
  `Username` VARCHAR(100) NOT NULL,
  `Password` BLOB NOT NULL,
  `Admin` INT NOT NULL,
  `Status` INT NULL,
  PRIMARY KEY (`ID`));