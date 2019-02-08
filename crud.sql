-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `crudcp` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `crudcp`;

DROP TABLE IF EXISTS `crud`;
CREATE TABLE `crud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `crud` (`id`, `fname`, `lname`, `email`, `location`) VALUES
(14,	'richy',	'dan',	'danrichy@example.com',	'north bank'),
(15,	'bosco',	'austin',	'bosco@example.com',	'new york'),
(16,	'john',	'bosco austin',	'jbosco@example.com',	'lekki'),
(18,	'joy',	'tessy',	'tjessy@admin.com',	'chicago'),
(20,	'jackson',	'may',	'jackmay@yahoo.com',	'califonia'),
(21,	'tessy',	'blinks',	'blinkst@yahoo.com',	'asokoro'),
(22,	'james',	'miko',	'miko@yahoo.com',	'makurdi');

-- 2019-02-06 18:13:36
