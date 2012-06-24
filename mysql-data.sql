-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Računalo: localhost
-- Vrijeme generiranja: Lip 24, 2012 u 10:55 
-- Verzija poslužitelja: 5.5.16
-- PHP verzija: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza podataka: `minima-dev`
--

-- --------------------------------------------------------

--
-- Tablična struktura za tablicu `cms_content`
--

CREATE TABLE IF NOT EXISTS `cms_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  `body` longtext CHARACTER SET utf8 NOT NULL,
  `email` varchar(75) NOT NULL,
  `delcode` int(15) NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Izbacivanje podataka za tablicu `cms_content`
--

INSERT INTO `cms_content` (`id`, `title`, `body`, `email`, `delcode`, `author`) VALUES
(18, 'That was good.', 'Everything went as planned. Yay! :)', '', 0, 'This is a notification, so it has no author.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
