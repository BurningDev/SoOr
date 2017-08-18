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
  `Admin` int(11) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `team`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
