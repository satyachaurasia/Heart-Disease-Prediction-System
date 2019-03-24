SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE `hdps`;
USE `hdps`;

CREATE TABLE `patient` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationdate` varchar(255) NOT NULL,
    UNIQUE KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `patient` (`id`, `name`, `username`,`address`,`mobileno`,`email`,`age`,`gender`,`password`, `creationdate`, `updationdate`) VALUES
(1, 'Deepak', 'Deep25','Bhandup', '1234561231', 'd@gmail.com', '19','Male','123456', '2018-04-03 16:21:18', '02-04-2018 12:05:43 AM');


CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationdate` varchar(255) NOT NULL,
    UNIQUE KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`id`, `name`, `address`,`username`,`password`, `creationdate`, `updationdate`) VALUES
(1, 'Deepak', 'Bhandup', 'Deep24', '123456', '2018-04-03 16:21:18', '02-04-2018 12:05:43 AM');

CREATE TABLE `doctor` (
`id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `specialistin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationdate` varchar(255) NOT NULL,
    UNIQUE KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `doctor` (`id`, `name`, `username`,`address`,`mobileno`,`email`,`age`,`gender`,`specialistin`,`password`, `creationdate`, `updationdate`) VALUES
(1, 'Deepak', 'Deep25','Bhandup', '1234561231', 'd@gmail.com', '19','Male','heart','123456', '2018-04-03 16:21:18', '02-04-2018 12:05:43 AM');


CREATE TABLE `addtdata` (
`id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(255) NOT NULL, 
  `age` varchar(255) NOT NULL,
  `sex` int(11) NOT NULL,
 `cp` varchar(255) NOT NULL,
  `trestbps` int(11) NOT NULL,
  `chol` int(11) NOT NULL,
  `fbs` int(11) NOT NULL,
  `restecg` int(11) NOT NULL,
  `thalach` int(11) NOT NULL,
  `exang` int(11) NOT NULL,
  `oldpeak` int(11) NOT NULL,
  `slope`int(11) NOT NULL,
  `ca` int(11) NOT NULL,
  `thal` int(11) NOT NULL,
  `target` int(11) NOT NULL,
    UNIQUE KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `feedback` (
  `ctrl_no` int(255) NOT NULL auto_increment,
  `date_send` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `receiver` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `opened` tinyint(1) NOT NULL default '0',
  `message` text NOT NULL,
  PRIMARY KEY  (`ctrl_no`)
);







