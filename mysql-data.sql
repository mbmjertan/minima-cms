-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2012 at 05:22 PM
-- Server version: 5.1.57
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `a5471431_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_content`
--

CREATE TABLE `cms_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(75) NOT NULL,
  `body` longtext CHARACTER SET utf8 COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(75) NOT NULL,
  `delcode` int(15) NOT NULL,
  `author` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `cms_content`
--

INSERT INTO `cms_content` VALUES(1, 'Minima uspjesno instalirana!', 'YAAAY!\r\n:)\r\n', '', 0, 'Minima Developers');
INSERT INTO `cms_content` VALUES(20, 'Ahh, yes, the question.', '<!DOCTYPE html PUBLIC \\"-//W3C//DTD XHTML 1.0 Transitional//EN\\" \\"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\\">\r\n<html>\r\n<head>\r\n</head>\r\n<body>\r\n<p>To be or not to be?</p>\r\n</body>\r\n</html>', '', 0, 'šekspir');
