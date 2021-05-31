-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 09:32 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `minor`
--
CREATE DATABASE IF NOT EXISTS `minor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `minor`;

-- --------------------------------------------------------

--
-- Table structure for table `add_diary`
--

CREATE TABLE IF NOT EXISTS `add_diary` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Diary` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `add_diary`
--

INSERT INTO `add_diary` (`Id`, `Email`, `Date`, `Diary`) VALUES
(9, 'yy@gmail.com', '2020-01-30', '            <b>hello</b><div><i>jayshree Mahajan11</i></div>    '),
(10, 'm@gmail.com', '2020-01-08', 'jdjfb'),
(11, 'ww@gmail.com', '2020-03-25', '      Hiiiiiiiiii Hiiiiiiiii'),
(12, 'kk@gmail.com', '2020-04-14', '<font size="5">jhjhjj</font>'),
(13, 'kk@gmail.com', '2020-04-08', 'hjhjhjh');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Sender` varchar(255) NOT NULL,
  `Receiver` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`Id`, `Sender`, `Receiver`, `Message`) VALUES
(3, 'yy@gmail.com', 'm@gmail.com', 'hiii'),
(4, 'yy@gmail.com', 'm@gmail.com', 'jfngvjfngvjfnjgvnf'),
(5, 'm@gmail.com', 'yy@gmail.com', 'kkrh'),
(6, 'kk@gmail.com', 'yy@gmail.com', 'jdhfjfj'),
(7, 'ww@gmail.com', 'kk@gmail.com', 'Hello'),
(8, 'm@gmail.com', 'kk@gmail.com', 'hiiii'),
(9, 'kk@gmail.com', 'ww@gmail.com', 'hwhewev');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Name`, `Email`, `Phone`, `Message`) VALUES
(1, 'reg dnfb', 'jayshreemahajan360@gmail.com', '9131892033', 'msm'),
(3, 'fgttg kdfn3444', 'm@gmail.com', '6578903213', 'jkk'),
(4, 'whbd', 'jayshreemahajan360@gmail.com', '9131892033', 'wjehbweh'),
(5, 'jayshree', 'jayshreemahajan360@gmail.com', '9131892033', 'helllo');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Date` varchar(255) NOT NULL,
  `Grocery` varchar(255) NOT NULL,
  `Vegeatables` varchar(255) NOT NULL,
  `daily` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`Id`, `Date`, `Grocery`, `Vegeatables`, `daily`, `others`, `Email`, `total`) VALUES
(5, '2020-01-18', '601', '602', '602', '601', 'm@gmail.com', '2406'),
(6, '2020-01-24', '50', '50', '50', '50', 'm@gmail.com', '200'),
(7, '2020-02-20', '90', '90', '90', '90', 'yy@gmail.com', '360'),
(8, '2020-02-13', '32', '32', '42', '52', 'kk@gmail.com', '158'),
(9, '2020-02-17', '899', '899', '899', '899', 'kk@gmail.com', '3596'),
(10, '2020-10-01', '22', '22', '22', '22', 'kk@gmail.com', '88'),
(11, '2020-10-08', '89', '89', '878', '89', 'kk@gmail.com', '1145');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Date_of_birth` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`Id`, `Name`, `Lname`, `Email`, `Phone`, `Password`, `Date_of_birth`, `Gender`, `Image`) VALUES
(14, 'Tia', 'mm', 'kk@gmail.com', '9131892033', 'jaya@12', '2020-01-22', 'Female', 'pretty picture.jpg'),
(15, 'pia', 'jj', 'm@gmail.com', '7896543218', '789', '2020-01-01', 'Female', 'c.jpg'),
(19, 'sonu', 'nn', 'yy@gmail.com', '9131892033', 'jhjh', '2020-01-23', 'Female', '5050.jpg'),
(20, 'Monu', 'wore', 'ww@gmail.com', '8907654321', 'ww', '2020-02-13', 'Female', 'emo.jpg'),
(21, 'jayu', 'Mahajan', 'jj@gmail.com', '7689875432', 'uu', '2020-04-14', 'Female', 'act.jpg'),
(23, 'jayshree', ' Mahajan', 'jayshreemahajan360@gmail.com', '9131892033', '123', '2020-04-08', 'Female', '580b57fcd9996e24bc43c526.png'),
(24, 'reg', 'dnfb', 'rr@gmail.com', '9131892033', 'dkcn', '2020-10-29', 'Female', 'a.jpg'),
(25, 'jjfbh', 'hdbhfbh', 'pp@gmail.com', '9131892033', 'hf', '2020-10-22', 'Female', 'a.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
