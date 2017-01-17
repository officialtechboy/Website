-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Jan 2017 um 06:16
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

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nav`
--

CREATE TABLE `nav` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `url` varchar(64) NOT NULL,
  `parent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `nav`
--

INSERT INTO `nav` (`id`, `name`, `url`, `parent`) VALUES
(1, 'Home', '#', NULL),
(2, 'Tutorials', '#', NULL),
(3, 'News', '#', NULL),
(4, 'Contact', '#', NULL),
(5, 'Tutorial 1', '#', 2),
(6, 'Tutorial 2', '#', 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
