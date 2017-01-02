-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Jan 2017 um 19:23
-- Server-Version: 10.1.10-MariaDB
-- PHP-Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `webframework`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `general`
--

CREATE TABLE `general` (
  `project_name` varchar(100) NOT NULL,
  `contact_phone` varchar(100) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `general`
--

INSERT INTO `general` (`project_name`, `contact_phone`, `contact_email`, `contact_address`) VALUES
('SLNR - Web Framework', '604-555-5555', 'LeonardLButcher@teleworm.us', '2087 Werninger Street, Houston, TX 77032 ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
