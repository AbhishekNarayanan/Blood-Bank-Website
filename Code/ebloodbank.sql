-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 01:56 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `region` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `b_type` varchar(50) NOT NULL,
  `map` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`region`, `name`, `location`, `phone`, `b_type`, `map`) VALUES
('Northern', 'Banglore Baptist Hospital', 'Bellary Road, Hebbal, Bengaluru, Karnataka 560024', '094484 96602', 'B+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.999948283697!2d77.58738131458723!3d13.035674990813893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17be2817e0c7%3A0xeed76978487c758!2sBangalore+Baptist+Hospital!5e0!3m2!1sen!2sin!4v1511352892808'),
('Northern', 'Banglore Baptist Hospital', 'Bellary Road, Hebbal, Bengaluru, Karnataka 560024', '094484 96602', 'A+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.999948283697!2d77.58738131458723!3d13.035674990813893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17be2817e0c7%3A0xeed76978487c758!2sBangalore+Baptist+Hospital!5e0!3m2!1sen!2sin!4v1511352892808'),
('Northern', 'Banglore Baptist Hospital', 'Bellary Road, Hebbal, Bengaluru, Karnataka 560024', '094484 96602', 'AB+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.999948283697!2d77.58738131458723!3d13.035674990813893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17be2817e0c7%3A0xeed76978487c758!2sBangalore+Baptist+Hospital!5e0!3m2!1sen!2sin!4v1511352892808'),
('Northern', 'Banglore Baptist Hospital', 'Bellary Road, Hebbal, Bengaluru, Karnataka 560024', '094484 96602', 'B-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.999948283697!2d77.58738131458723!3d13.035674990813893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17be2817e0c7%3A0xeed76978487c758!2sBangalore+Baptist+Hospital!5e0!3m2!1sen!2sin!4v1511352892808'),
('Northern', 'Banglore Baptist Hospital', 'Bellary Road, Hebbal, Bengaluru, Karnataka 560024', '094484 96602', 'O-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.999948283697!2d77.58738131458723!3d13.035674990813893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae17be2817e0c7%3A0xeed76978487c758!2sBangalore+Baptist+Hospital!5e0!3m2!1sen!2sin!4v1511352892808'),
('Southern', 'The Bangalore Hospital', '202, Rashtriya Vidyalaya Road, Basavanagudi, Bengaluru, Karnataka 560004', '080 41187600', 'O+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5322106715453!2d77.57811791458607!3d12.937759590878114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae158e750221f1%3A0xf18e3d80c3d298aa!2sThe+Bangalore+Hospital!5e0!3m2!1sen!2sin!4v1511353765514'),
('Southern', 'The Bangalore Hospital', '202, Rashtriya Vidyalaya Road, Basavanagudi, Bengaluru, Karnataka 560004', '080 41187600', 'A+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5322106715453!2d77.57811791458607!3d12.937759590878114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae158e750221f1%3A0xf18e3d80c3d298aa!2sThe+Bangalore+Hospital!5e0!3m2!1sen!2sin!4v1511353765514'),
('Southern', 'The Bangalore Hospital', '202, Rashtriya Vidyalaya Road, Basavanagudi, Bengaluru, Karnataka 560004', '080 41187600', 'A-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5322106715453!2d77.57811791458607!3d12.937759590878114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae158e750221f1%3A0xf18e3d80c3d298aa!2sThe+Bangalore+Hospital!5e0!3m2!1sen!2sin!4v1511353765514'),
('Southern', 'The Bangalore Hospital', '202, Rashtriya Vidyalaya Road, Basavanagudi, Bengaluru, Karnataka 560004', '080 41187600', 'B+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5322106715453!2d77.57811791458607!3d12.937759590878114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae158e750221f1%3A0xf18e3d80c3d298aa!2sThe+Bangalore+Hospital!5e0!3m2!1sen!2sin!4v1511353765514'),
('Southern', 'The Bangalore Hospital', '202, Rashtriya Vidyalaya Road, Basavanagudi, Bengaluru, Karnataka 560004', '080 41187600', 'AB-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5322106715453!2d77.57811791458607!3d12.937759590878114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae158e750221f1%3A0xf18e3d80c3d298aa!2sThe+Bangalore+Hospital!5e0!3m2!1sen!2sin!4v1511353765514'),
('Southern', 'The Bangalore Hospital', '202, Rashtriya Vidyalaya Road, Basavanagudi, Bengaluru, Karnataka 560004', '080 41187600', 'AB+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.5322106715453!2d77.57811791458607!3d12.937759590878114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae158e750221f1%3A0xf18e3d80c3d298aa!2sThe+Bangalore+Hospital!5e0!3m2!1sen!2sin!4v1511353765514'),
('Central', 'Bhagwan Mahaveer Jain Hospital', '17, Millers Road, Vasanth Nagar, Bengaluru, Karnataka 560052', '080 40875555', 'AB+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6917570137875!2d77.59297111458679!3d12.991556490842745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1642c63e2c23%3A0x730cce157da6d9cb!2sBhagwan+Mahaveer+Jain+Hospital!5e0!3m2!1sen!2sin!4v1511354063112'),
('Central', 'Bhagwan Mahaveer Jain Hospital', '17, Millers Road, Vasanth Nagar, Bengaluru, Karnataka 560052', '080 40875555', 'O-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6917570137875!2d77.59297111458679!3d12.991556490842745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1642c63e2c23%3A0x730cce157da6d9cb!2sBhagwan+Mahaveer+Jain+Hospital!5e0!3m2!1sen!2sin!4v1511354063112'),
('Central', 'Bhagwan Mahaveer Jain Hospital', '17, Millers Road, Vasanth Nagar, Bengaluru, Karnataka 560052', '080 40875555', 'O+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6917570137875!2d77.59297111458679!3d12.991556490842745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1642c63e2c23%3A0x730cce157da6d9cb!2sBhagwan+Mahaveer+Jain+Hospital!5e0!3m2!1sen!2sin!4v1511354063112'),
('Central', 'Bhagwan Mahaveer Jain Hospital', '17, Millers Road, Vasanth Nagar, Bengaluru, Karnataka 560052', '080 40875555', 'B-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6917570137875!2d77.59297111458679!3d12.991556490842745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1642c63e2c23%3A0x730cce157da6d9cb!2sBhagwan+Mahaveer+Jain+Hospital!5e0!3m2!1sen!2sin!4v1511354063112'),
('Central', 'Bhagwan Mahaveer Jain Hospital', '17, Millers Road, Vasanth Nagar, Bengaluru, Karnataka 560052', '080 40875555', 'AB-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.6917570137875!2d77.59297111458679!3d12.991556490842745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1642c63e2c23%3A0x730cce157da6d9cb!2sBhagwan+Mahaveer+Jain+Hospital!5e0!3m2!1sen!2sin!4v1511354063112'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'AB+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0414518759335!2d77.6111928145865!3d12.969199390857483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1681f62906a3%3A0xec3c6d9b2be43a08!2sHosmat+Hospital!5e0!3m2!1sen!2sin!4v1511354214402'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'AB-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0414518759335!2d77.6111928145865!3d12.969199390857483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1681f62906a3%3A0xec3c6d9b2be43a08!2sHosmat+Hospital!5e0!3m2!1sen!2sin!4v1511354214402'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'B+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0414518759335!2d77.6111928145865!3d12.969199390857483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1681f62906a3%3A0xec3c6d9b2be43a08!2sHosmat+Hospital!5e0!3m2!1sen!2sin!4v1511354214402'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'A+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0414518759335!2d77.6111928145865!3d12.969199390857483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1681f62906a3%3A0xec3c6d9b2be43a08!2sHosmat+Hospital!5e0!3m2!1sen!2sin!4v1511354214402'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'O+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0414518759335!2d77.6111928145865!3d12.969199390857483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1681f62906a3%3A0xec3c6d9b2be43a08!2sHosmat+Hospital!5e0!3m2!1sen!2sin!4v1511354214402'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'A-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0414518759335!2d77.6111928145865!3d12.969199390857483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1681f62906a3%3A0xec3c6d9b2be43a08!2sHosmat+Hospital!5e0!3m2!1sen!2sin!4v1511354214402'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'B-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0414518759335!2d77.6111928145865!3d12.969199390857483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1681f62906a3%3A0xec3c6d9b2be43a08!2sHosmat+Hospital!5e0!3m2!1sen!2sin!4v1511354214402'),
('Southern', 'Jayadeva Institute of Cardiology', ' Jayanagar 9th Block, Bannerghatta Road, Bengaluru, Karnataka 560069', '080 22977400', 'A+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8488579332607!2d77.597194314586!3d12.917434090891412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15fcce2538a1%3A0xc83af4e144195109!2sSri+Jayadeva+Institute+Of+Cardiovascular+Sciences+And+Research!5e0!3m2!1sen!2sin!4v1511354324330'),
('Southern', 'Jayadeva Institute of Cardiology', ' Jayanagar 9th Block, Bannerghatta Road, Bengaluru, Karnataka 560069', '080 22977400', 'B+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8488579332607!2d77.597194314586!3d12.917434090891412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15fcce2538a1%3A0xc83af4e144195109!2sSri+Jayadeva+Institute+Of+Cardiovascular+Sciences+And+Research!5e0!3m2!1sen!2sin!4v1511354324330'),
('Southern', 'Jayadeva Institute of Cardiology', ' Jayanagar 9th Block, Bannerghatta Road, Bengaluru, Karnataka 560069', '080 22977400', 'AB+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8488579332607!2d77.597194314586!3d12.917434090891412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15fcce2538a1%3A0xc83af4e144195109!2sSri+Jayadeva+Institute+Of+Cardiovascular+Sciences+And+Research!5e0!3m2!1sen!2sin!4v1511354324330'),
('Southern', 'Jayadeva Institute of Cardiology', ' Jayanagar 9th Block, Bannerghatta Road, Bengaluru, Karnataka 560069', '080 22977400', 'AB-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8488579332607!2d77.597194314586!3d12.917434090891412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15fcce2538a1%3A0xc83af4e144195109!2sSri+Jayadeva+Institute+Of+Cardiovascular+Sciences+And+Research!5e0!3m2!1sen!2sin!4v1511354324330'),
('Southern', 'Jayadeva Institute of Cardiology', ' Jayanagar 9th Block, Bannerghatta Road, Bengaluru, Karnataka 560069', '080 22977400', 'O+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8488579332607!2d77.597194314586!3d12.917434090891412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15fcce2538a1%3A0xc83af4e144195109!2sSri+Jayadeva+Institute+Of+Cardiovascular+Sciences+And+Research!5e0!3m2!1sen!2sin!4v1511354324330'),
('Southern', 'Jayadeva Institute of Cardiology', ' Jayanagar 9th Block, Bannerghatta Road, Bengaluru, Karnataka 560069', '080 22977400', 'O-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.8488579332607!2d77.597194314586!3d12.917434090891412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae15fcce2538a1%3A0xc83af4e144195109!2sSri+Jayadeva+Institute+Of+Cardiovascular+Sciences+And+Research!5e0!3m2!1sen!2sin!4v1511354324330'),
('Central', 'Chinmaya Narayana Superspeciality Centre', 'CMH Hospital, CMH Road, 2nd Stage, Bengaluru, Karnataka 560038', '080 25200001', 'A+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.91048438895!2d77.64378931458663!3d12.97757699085203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16a4fcb723c3%3A0x9a97faf73858376!2sChinmaya+Narayana+Superspeciality+Centre%2C+Indiranagar!5e0!3m2!1sen!2sin!4v1511354400265'),
('Central', 'Chinmaya Narayana Superspeciality Centre', 'CMH Hospital, CMH Road, 2nd Stage, Bengaluru, Karnataka 560038', '080 25200001', 'B+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.91048438895!2d77.64378931458663!3d12.97757699085203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16a4fcb723c3%3A0x9a97faf73858376!2sChinmaya+Narayana+Superspeciality+Centre%2C+Indiranagar!5e0!3m2!1sen!2sin!4v1511354400265'),
('Central', 'Chinmaya Narayana Superspeciality Centre', 'CMH Hospital, CMH Road, 2nd Stage, Bengaluru, Karnataka 560038', '080 25200001', 'A-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.91048438895!2d77.64378931458663!3d12.97757699085203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16a4fcb723c3%3A0x9a97faf73858376!2sChinmaya+Narayana+Superspeciality+Centre%2C+Indiranagar!5e0!3m2!1sen!2sin!4v1511354400265'),
('Central', 'Chinmaya Narayana Superspeciality Centre', 'CMH Hospital, CMH Road, 2nd Stage, Bengaluru, Karnataka 560038', '080 25200001', 'B-', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.91048438895!2d77.64378931458663!3d12.97757699085203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16a4fcb723c3%3A0x9a97faf73858376!2sChinmaya+Narayana+Superspeciality+Centre%2C+Indiranagar!5e0!3m2!1sen!2sin!4v1511354400265'),
('Central', 'Chinmaya Narayana Superspeciality Centre', 'CMH Hospital, CMH Road, 2nd Stage, Bengaluru, Karnataka 560038', '080 25200001', 'AB+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.91048438895!2d77.64378931458663!3d12.97757699085203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16a4fcb723c3%3A0x9a97faf73858376!2sChinmaya+Narayana+Superspeciality+Centre%2C+Indiranagar!5e0!3m2!1sen!2sin!4v1511354400265'),
('Central', 'Chinmaya Narayana Superspeciality Centre', 'CMH Hospital, CMH Road, 2nd Stage, Bengaluru, Karnataka 560038', '080 25200001', 'O+', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.91048438895!2d77.64378931458663!3d12.97757699085203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16a4fcb723c3%3A0x9a97faf73858376!2sChinmaya+Narayana+Superspeciality+Centre%2C+Indiranagar!5e0!3m2!1sen!2sin!4v1511354400265');

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration`
--

CREATE TABLE `donor_registration` (
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Bloodgroup` varchar(3) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `Residence` varchar(100) NOT NULL,
  `Office` varchar(100) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Sms` varchar(30) NOT NULL,
  `Call_call` varchar(10) NOT NULL,
  `Authorise` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`Firstname`, `Lastname`, `Username`, `Password`, `Age`, `City`, `Bloodgroup`, `Gender`, `Mobile`, `Residence`, `Office`, `Email`, `Sms`, `Call_call`, `Authorise`) VALUES
('Abhishek', 'Narayanan', 'abhishek.1010n', '10101998', '19', 'Central', 'B+', 'male', '9007520486', 'Vijayanagar', 'Vijayanagar', 'abhishek.1010n@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Ashwin', 'Ashok', 'ASHWIN123', '1998', '19', 'Northern', 'AB+', 'male', '7353934953', 'Hebbal', 'Hebbal', 'ashwinashok1998@gmail.com', 'sms alert', 'call alert', 'authorise'),
('sree', 'hari', 'hari2', 'abcdef', '19', 'Central', 'B+', 'male', '68903808484', 'vijaynagar', 'vijaynagar', 'xyz@gmail.com', '', '', 'authorise'),
('Annabathula', 'Abhishek', 'rohit', 'anna', '19', 'Western', 'O+', 'male', '7348813246', 'Basweshwaranagar', 'Basweshwaranagar', 'rohit.abhi1970@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Vivek', 'Reddy', 'vivek', 'aom', '18', 'South', 'O-', 'male', '9940319861', 'JP Nagar', 'JP Nagar', 'aomsaivivekreddy@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Aby', 'Babu', 'aby', 'babu', '19', 'East', 'AB-', 'male', '8904921820', 'KR Puram', 'KR Puram', 'abybabualappat@gmail.com', 'sms alert', 'call alert', 'authorise'),
('debanik', 'mishra', 'debanik', 'mishra', '19', 'Central', 'A+', 'male', '8997937392', 'vijaynagar', 'katriguppe', 'debanikmishra@gmail.com', '', '', 'authorise'),
('Rupa', 'Pandit', 'rupa', 'rpandit', '45', 'East', 'AB+', 'female', '3324124220', 'Mahadevpura', 'Mahadevpura', 'rupapandit@gmail.com', 'sms alert', 'call alert', 'authorise');

-- --------------------------------------------------------

--
-- Table structure for table `event_registration`
--

CREATE TABLE `event_registration` (
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Age` int(10) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Mobile` varchar(13) NOT NULL,
  `Residence` varchar(13) NOT NULL,
  `Office` varchar(13) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Event` varchar(100) NOT NULL,
  `Day` date NOT NULL,
  `Aid` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_registration`
--

INSERT INTO `event_registration` (`Firstname`, `Lastname`, `Age`, `City`, `Mobile`, `Residence`, `Office`, `Email`, `Event`, `Day`, `Aid`) VALUES
('Abhishek', 'Narayanan', 19, 'Central', '9007520486', '24467885', '24478687', 'abhishek.1010n@gmail.com', 'camp', '2017-12-25', 'financial');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Firstname`, `Lastname`, `Email`, `Feedback`) VALUES
('Abhishek', 'Narayanan', 'abhishek.1010n@gmail.com', 'Excellent'),
('Abhishek', 'Prasad', 'abhishek.pes2016@gmail.com', 'Found to be extremely helpful'),
('Vivek', 'Reddy', 'aomsaivivekreddy@gmail.com', 'Very happy with your speedy response'),
('Ashwin', 'Reddy', 'rohit.abhi1970@gmail.com', 'Very pleased with your speedy service'),
('Ashwin', 'Reddy', 'rohit.abhi1970@gmail.com', 'Very pleased with your speedy service'),
('Ashwin', 'Reddy', 'rohit.abhi1970@gmail.com', 'Very pleased with your speedy service'),
('Ashwin', 'Reddy', 'rohit.abhi1970@gmail.com', 'Very pleased with your speedy service'),
('Ashwin', 'Reddy', 'rohit.abhi1970@gmail.com', 'Very pleased with your speedy service'),
('Vivek', 'Reddy', 'aomsaivivekreddy@gmail.com', 'Wonderful srvice, will surely recommend to other customers.'),
('Vivek', 'Reddy', 'aomsaivivekreddy@gmail.com', 'Wonderful srvice, will surely recommend to other customers.'),
('Vivek', 'Reddy', 'aomsaivivekreddy@gmail.com', 'Wonderful srvice, will surely recommend to other customers.'),
('Vivek', 'Reddy', 'aomsaivivekreddy@gmail.com', 'Wonderful srvice, will surely recommend to other customers.'),
('Vivek', 'Reddy', 'aomsaivivekreddy@gmail.com', 'Wonderful srvice, will surely recommend to other customers.'),
('Vivek', 'Reddy', 'aomsaivivekreddy@gmail.com', 'Wonderful srvice, will surely recommend to other customers.'),
('pinky', 'chinky', 'pinky@gmail.com', 'Excellent work'),
('pinky', 'chinky', 'pinky@gmail.com', 'Excellent work');

-- --------------------------------------------------------

--
-- Table structure for table `friend_registration`
--

CREATE TABLE `friend_registration` (
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Mobile` varchar(13) NOT NULL,
  `Residence` varchar(13) NOT NULL,
  `Office` varchar(13) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Age` int(10) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Gender` varchar(12) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Sms` varchar(10) NOT NULL,
  `Call_call` varchar(20) NOT NULL,
  `Authorise` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Firstname`, `Lastname`, `Username`, `Password`, `Age`, `City`, `Gender`, `Mobile`, `Email`, `Sms`, `Call_call`, `Authorise`) VALUES
('Abhishek', ' Prasad', 'abhishek', 'jamshedpur', 21, 'Northern', 'male', '8789419450', 'abhishek.coolestprasad@gmail.c', 'sms alert', 'call alert', 'authorise'),
('Abhishek', 'Narayanan', 'abhishek.1010n', '10101998', 19, 'Central', 'male', '9007520486', 'abhishek.1010n@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Abijna', ' Rao', 'abijna', '14081998', 19, 'Southern', 'female', '7353934953', 'abijnarao@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Aby', 'Babu', 'aby', 'babu', 19, 'Eastern', 'male', '8904921820', 'abybabuallapat@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Vivek', 'adireddy', 'adireddy', 'aom', 25, 'Central', 'female', '9077848846', 'adireddy@gmail.com', '', '', 'authorise'),
('Aditya', 'K R', 'aditya', 'krishna', 19, 'Northern', 'male', '8105743754', 'aditya.rkarupakula@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Alan', 'Jacob', 'alan', 'jacob', 20, 'Central', 'male', '79796574747', 'alanj@gmail.com', '', '', 'authorise'),
('anakin', 'Skywalker', 'anakin', 'skywalker', 25, 'Central', 'male', '86969868968', 'anakinskywalker@gmail.com', '', '', 'authorise'),
('anakin', 'Skywalker', 'anakin2', 'sky1', 25, 'Central', 'male', '86969868968', 'anakinskywalker@gmail.com', '', '', 'authorise'),
('Ashwin', 'Ashok', 'ASHWIN123', '1998', 19, 'Northern', 'male', '7353934953', 'ashwinashok1998@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Mahesh', 'Narayanan', 'mahesh', 'ec132e043', 27, 'Central', 'male', '8827393623', 'mahesh.90n@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Annabathula', 'Abhishek', 'rohit', 'anna', 19, 'Western', 'male', '7348813246', 'rohit.abhi1970@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Rupa', 'Pandit', 'rupa', 'rpandit', 45, 'Eastern', 'female', '3324124220', 'rpandit@gmai.com', 'sms alert', 'call alert', 'authorise'),
('Vivek', 'Reddy', 'vivek', 'aom', 19, 'Southern', 'male', '9440319861', 'aomsaivivekreddy@gmail.com', 'sms alert', 'call alert', 'authorise');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_registration`
--

CREATE TABLE `volunteer_registration` (
  `Firstname` varchar(30) NOT NULL,
  `Lastname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Age` varchar(10) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Mobile` varchar(13) NOT NULL,
  `Residence` varchar(30) NOT NULL,
  `Office` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Sms` varchar(30) NOT NULL,
  `Call_call` varchar(30) NOT NULL,
  `authorise` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer_registration`
--

INSERT INTO `volunteer_registration` (`Firstname`, `Lastname`, `username`, `password`, `Age`, `City`, `Gender`, `Mobile`, `Residence`, `Office`, `Email`, `Sms`, `Call_call`, `authorise`) VALUES
('Abhishek', 'Prasad', 'abhishek', 'jamshedpur', '21', 'Northern', 'male', '8789419450', 'Yeshwantpur', 'Hosakerehalli', 'abhishek.pes2016@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Abhishek', 'Narayanan', 'abhishek.1010n', '10101998', '19', 'Central', 'male', '9007520486', 'Rajajinagar', 'Rajajinagar', 'abhishek.1010n@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Abhishek', 'Sinha', 'abhisheks', 'sinha', '19', 'North', 'male', '7994005895', 'Indiranagar', 'Indiranagar', 'abhi@gmail.com', '', '', 'authorise'),
('Abhishek', 'Sinha', 'abhisheksinha', 'abcdef', '19', 'North', 'male', '7994005895', 'Indiranagar', 'Indiranagar', 'abhi@gmail.com', '', '', 'authorise'),
('Abijna', 'Rao', 'abijna', '14081998', '19', 'Southern', 'female', '7353934953', 'Girinagar', 'Girinagar', 'abijnarao@gmail.com', 'sms alert', 'call alert', 'authorise'),
('Ashwin', 'Ashok', 'ASHWIN123', '1998', '19', 'Northern', 'male', '7353934953', 'Hebbal', 'Hebbal', 'ashwinashok1998@gmail.com', 'sms alert', 'call alert', 'authorise'),
('shivam', 'ganwani', 'shivam1', 'ganwani1', '19', 'Central', 'male', '899950595', 'attiguppe', 'katriguppe', 'abc@gmail.com', '', '', 'authorise');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_registration`
--
ALTER TABLE `donor_registration`
  ADD PRIMARY KEY (`Password`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Username`,`Password`);

--
-- Indexes for table `volunteer_registration`
--
ALTER TABLE `volunteer_registration`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
