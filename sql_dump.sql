-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Server-Version: 10.1.16-MariaDB
-- PHP-Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `soor`
--

-- --------------------------------------------------------

--
-- Table: project
--

CREATE TABLE `project` (
  `ID` int(11) NOT NULL,
  `CreationDate` varchar(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `LeaderID` int(11) NOT NULL,
  `License` varchar(100) NOT NULL,
  `ProgrammingLanguage` varchar(100) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table: right
--

CREATE TABLE `right` (
  `ID` int(11) NOT NULL,
  `Right` varchar(45) NOT NULL,
  `Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `right` (`ID`, `Right`, `Admin`) VALUES
(1, 'add_member', 1),
(2, 'add_team', 1),
(3, 'delete_member', 1),
(4, 'delete_team', 1);

-- --------------------------------------------------------

--
-- Table: role
--

CREATE TABLE `role` (
  `ID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `role` (`ID`, `Title`) VALUES
(1, 'web developer'),
(2, 'leader'),
(3, 'software developer'),
(4, 'software architect'),
(5, 'project manager'),
(6, 'tester'),
(7, 'other');

-- --------------------------------------------------------

--
-- Table: team
--

CREATE TABLE `team` (
  `ID` int(11) NOT NULL,
  `CreationDate` varchar(250) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table: user
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `CreationDate` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(250) NOT NULL,
  `Role` varchar(100) NOT NULL,
  `Admin` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table: user_team
--

CREATE TABLE `user_team` (
  `UserID` int(11) NOT NULL,
  `TeamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `project`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `right`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `role`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `team`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

  
ALTER TABLE `user_team`
  ADD PRIMARY KEY (`UserID`,`TeamID`);

ALTER TABLE `project`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `right`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `role`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `team`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
