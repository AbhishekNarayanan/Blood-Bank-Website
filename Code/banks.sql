-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2017 at 04:35 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
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
  `b_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`region`, `name`, `location`, `phone`, `b_type`) VALUES
('Northern', 'Banglore Baptist Hospital', 'Bellary Road, Hebbal, Bengaluru, Karnataka 560024', '094484 96602', 'B+'),
('Northern', 'Banglore Baptist Hospital', 'Bellary Road, Hebbal, Bengaluru, Karnataka 560024', '094484 96602', 'A+'),
('Northern', 'Banglore Baptist Hospital', 'Bellary Road, Hebbal, Bengaluru, Karnataka 560024', '094484 96602', 'AB+'),
('Northern', 'Banglore Baptist Hospital', 'Bellary Road, Hebbal, Bengaluru, Karnataka 560024', '094484 96602', 'B-'),
('Northern', 'Banglore Baptist Hospital', 'Bellary Road, Hebbal, Bengaluru, Karnataka 560024', '094484 96602', 'O-'),
('Southern', 'The Bangalore Hospital', '202, Rashtriya Vidyalaya Road, Basavanagudi, Bengaluru, Karnataka 560004', '080 41187600', 'O+'),
('Southern', 'The Bangalore Hospital', '202, Rashtriya Vidyalaya Road, Basavanagudi, Bengaluru, Karnataka 560004', '080 41187600', 'A+'),
('Southern', 'The Bangalore Hospital', '202, Rashtriya Vidyalaya Road, Basavanagudi, Bengaluru, Karnataka 560004', '080 41187600', 'A-'),
('Southern', 'The Bangalore Hospital', '202, Rashtriya Vidyalaya Road, Basavanagudi, Bengaluru, Karnataka 560004', '080 41187600', 'B+'),
('Southern', 'The Bangalore Hospital', '202, Rashtriya Vidyalaya Road, Basavanagudi, Bengaluru, Karnataka 560004', '080 41187600', 'AB-'),
('Southern', 'The Bangalore Hospital', '202, Rashtriya Vidyalaya Road, Basavanagudi, Bengaluru, Karnataka 560004', '080 41187600', 'AB+'),
('Central', 'Bhagwan Mahaveer Jain Hospital', '17, Millers Road, Vasanth Nagar, Bengaluru, Karnataka 560052', '080 40875555', 'AB+'),
('Central', 'Bhagwan Mahaveer Jain Hospital', '17, Millers Road, Vasanth Nagar, Bengaluru, Karnataka 560052', '080 40875555', 'O-'),
('Central', 'Bhagwan Mahaveer Jain Hospital', '17, Millers Road, Vasanth Nagar, Bengaluru, Karnataka 560052', '080 40875555', 'O+'),
('Central', 'Bhagwan Mahaveer Jain Hospital', '17, Millers Road, Vasanth Nagar, Bengaluru, Karnataka 560052', '080 40875555', 'B-'),
('Central', 'Bhagwan Mahaveer Jain Hospital', '17, Millers Road, Vasanth Nagar, Bengaluru, Karnataka 560052', '080 40875555', 'AB-'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'AB+'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'AB-'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'B+'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'A+'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'O+'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'A-'),
('Central', 'HOSMAT Hospital', ' No. 45, Magarath Road, Off Richmond Road, Bengaluru, Karnataka 560025', '080 25593796', 'B-'),
('Southern', 'Jayadeva Institute of Cardiology', ' Jayanagar 9th Block, Bannerghatta Road, Bengaluru, Karnataka 560069', '080 22977400', 'A+'),
('Southern', 'Jayadeva Institute of Cardiology', ' Jayanagar 9th Block, Bannerghatta Road, Bengaluru, Karnataka 560069', '080 22977400', 'B+'),
('Southern', 'Jayadeva Institute of Cardiology', ' Jayanagar 9th Block, Bannerghatta Road, Bengaluru, Karnataka 560069', '080 22977400', 'AB+'),
('Southern', 'Jayadeva Institute of Cardiology', ' Jayanagar 9th Block, Bannerghatta Road, Bengaluru, Karnataka 560069', '080 22977400', 'AB-'),
('Southern', 'Jayadeva Institute of Cardiology', ' Jayanagar 9th Block, Bannerghatta Road, Bengaluru, Karnataka 560069', '080 22977400', 'O+'),
('Southern', 'Jayadeva Institute of Cardiology', ' Jayanagar 9th Block, Bannerghatta Road, Bengaluru, Karnataka 560069', '080 22977400', 'O-'),
('Central', 'Chinmaya Narayana Superspeciality Centre', 'CMH Hospital, CMH Road, 2nd Stage, Bengaluru, Karnataka 560038', '080 25200001', 'A+'),
('Central', 'Chinmaya Narayana Superspeciality Centre', 'CMH Hospital, CMH Road, 2nd Stage, Bengaluru, Karnataka 560038', '080 25200001', 'B+'),
('Central', 'Chinmaya Narayana Superspeciality Centre', 'CMH Hospital, CMH Road, 2nd Stage, Bengaluru, Karnataka 560038', '080 25200001', 'A-'),
('Central', 'Chinmaya Narayana Superspeciality Centre', 'CMH Hospital, CMH Road, 2nd Stage, Bengaluru, Karnataka 560038', '080 25200001', 'B-'),
('Central', 'Chinmaya Narayana Superspeciality Centre', 'CMH Hospital, CMH Road, 2nd Stage, Bengaluru, Karnataka 560038', '080 25200001', 'AB+'),
('Central', 'Chinmaya Narayana Superspeciality Centre', 'CMH Hospital, CMH Road, 2nd Stage, Bengaluru, Karnataka 560038', '080 25200001', 'O+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
