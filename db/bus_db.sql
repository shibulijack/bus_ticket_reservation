-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 18, 2012 at 05:43 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `b_no` int(10) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_source` varchar(50) NOT NULL,
  `b_dest` varchar(50) NOT NULL,
  `b_dep_time` varchar(50) NOT NULL,
  `b_arr_time` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`b_no`, `b_name`, `b_source`, `b_dest`, `b_dep_time`, `b_arr_time`) VALUES
(1, 'KPN', 'Tirunelveli', 'Chennai', '6:00', '5:00'),
(2, 'SRM', 'Tirunelveli', 'Chennai', '7:00', '5:30');

-- --------------------------------------------------------

--
-- Table structure for table `bus_ticket`
--

CREATE TABLE IF NOT EXISTS `bus_ticket` (
  `b_no` int(50) NOT NULL,
  `date` int(10) NOT NULL,
  `b_seats` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_ticket`
--

INSERT INTO `bus_ticket` (`b_no`, `date`, `b_seats`) VALUES
(1, 15, 6),
(2, 15, 7);

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE IF NOT EXISTS `passengers` (
  `p_id` int(10) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) NOT NULL,
  `p_phone` int(50) NOT NULL,
  `p_email` varchar(50) NOT NULL,
  `p_passengers` int(30) NOT NULL DEFAULT '1',
  `c_id` varchar(100) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`p_id`, `p_name`, `p_phone`, `p_email`, `p_passengers`, `c_id`) VALUES
(2, 'shibu', 34523452, 'shibulijack@gmail.com', 4, '0'),
(3, 'shibu', 34523452, 'shibulijack@gmail.com', 4, '0'),
(4, 'shibu', 34523452, 'shibulijack@gmail.com', 4, '0'),
(5, 'shibu', 34523452, 'shibulijack@gmail.com', 4, '0'),
(6, 'shibu', 34523452, 'shibulijack@gmail.com', 4, '0'),
(7, 'shibu', 34523452, 'shibulijack@gmail.com', 4, '0'),
(9, 'naveen', 34523452, 'naveen@gmail.com', 3, ''),
(10, 'amma', 142452, ';ljflasdfd', 2, 'jack_76069923amma_10'),
(11, 'amma', 142452, ';ljflasdfd', 2, ''),
(12, 'amma', 142452, ';ljflasdfd', 2, ''),
(13, 'amma', 142452, ';ljflasdfd', 2, ''),
(14, 'amma', 142452, ';ljflasdfd', 2, ''),
(15, 'alan', 2147483647, 'alan@gmail.com', 4, 'jack_118003877alan_15'),
(16, 'nav', 2147483647, 'alan@gmail.com', 1, 'jack_1456602902nav_16'),
(17, 'random', 874331238, 'rand@gmail.com', 2, 'jack_1454935008random_17'),
(18, 'random', 874331238, 'rand@gmail.com', 2, ''),
(19, 'lijack', 2147483647, 'shiibuadsf', 1, 'jack_1106350433lijack_19'),
(20, 'sudhan', 2147483647, 'sudhan@gmail.com', 3, 'jack_1732371282sudhan_20'),
(21, 'lijack', 2147483647, 'cj@gmail.com', 2, ''),
(22, 'demo', 123, 'test', 1, 'jack_1788091564demo_22'),
(23, 'omana', 2147483647, 'omana@gmail.com', 2, 'jack_2115862343omana_23'),
(24, 'cyber', 2147483647, 'cj@hotmail', 1, 'jack_961644712cyber_24'),
(27, 'naveen', 987654331, 'nav@gmail', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(10) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_pass`) VALUES
(1, 'shibu', '3fcf6718db7111a4a1f0fcf34df7de'),
(2, 'test', '202cb962ac59075b964b07152d234b'),
(3, 'new', '098f6bcd4621d373cade4e832627b4f6'),
(4, 'shibu', '3fcf6718db7111a4a1f0fcf34df7de2e');
