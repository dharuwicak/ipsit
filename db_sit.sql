-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2014 at 04:19 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sit`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `filenames` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `title`, `filenames`, `category`, `date`) VALUES
(2, '0', 'Untitled-21.pdf', '0', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_unit`
--

CREATE TABLE IF NOT EXISTS `user_unit` (
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `jenis_login` varchar(50) NOT NULL,
  `msg` int(4) NOT NULL,
  PRIMARY KEY (`jenis_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_unit`
--

INSERT INTO `user_unit` (`username`, `password`, `nama`, `nohp`, `jenis_login`, `msg`) VALUES
('test1', '5a105e8b9d40e1329780d62ea2265d8a', 'test1', '08658542', 'rendal_har', 0),
('test2', 'ad0234829205b9033196ba818f7a872b', 'test2', '065888896', 'rendal_op', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usr_adm`
--

CREATE TABLE IF NOT EXISTS `usr_adm` (
  `user` varchar(30) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usr_adm`
--

INSERT INTO `usr_adm` (`user`, `pass`, `nama`, `active`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Andharu', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
