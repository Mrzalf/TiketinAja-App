-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 11:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinematix`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `nama`, `no_telp`, `email`, `tempat_lahir`, `tgl_lahir`, `jk`, `password`) VALUES
('yerin', 'yerin', '081', 'yerin@gmail.com', 'mataram', '2023-11-02', 'Perempuan', '$2y$10$WOjiPSf6xbyMXu7C7DyvEeYU.hJhGsNkcfe/hgxRVXbmH1OraE0o2'),
('aldy', 'aldy', '12344', 'wahu123@gmail.com', 'ccirebon', '2023-11-30', 'Laki-laki', '$2y$10$9tojP8P71NqFCOLdoc3hou9O67of8MYbJxGZ85LX22UcJ8SLsrMmG'),
('yerinaldy', 'yerinaldy', '088901488574', 'muhammad2100018314@webmail.uad.ac.id', 'cirebon', '2023-11-21', 'Laki-laki', '$2y$10$f5ajDpgAFMaocgUJ9pS/1OZGJZPTQSKfFXViC4pd9iklVQv6L4mqO'),
('dani', 'dani', '24154754', 'dani@gmail.com', 'solo', '2023-11-22', 'Laki-laki', '$2y$10$7ZqpdPEuVV9AhPSk85lhf.HQn950DrW7J3aMRKcXpAi6fssOZB012'),
('admin', 'admin super', '123456789', 'admin@gmail.com', 'pekalongan', '2023-11-05', 'Laki-laki', '$2y$10$k0Mrw714FB9v1FoX4ijVLOq3XEWaF0dsf0TESR8xy/yfgY3s4Akv6'),
('admin super2', 'admin2', 'asasadadadad', 'admin2@gmail.com', 'pekalongan', '2023-11-07', 'Laki-laki', '$2y$10$CFih1MLFrPRHJ.L1N8PscuJqt1BHMLxmsHXnqIZ3YEER8XK8t.ZJK'),
('admin', 'admin super', '23232323', 'admin@gmail.com', 'pekalongan', '2023-11-05', 'Laki-laki', '$2y$10$A1/.sm2fS5T7OvFVXg5wzuarecwfcert9xd2jBEvMCgZxyuaRLgXe'),
('fara', 'farah nur', '1234567890', 'fara@gmail.com', 'mgl', '2023-11-01', 'Perempuan', '$2y$10$s.IjXLf9UkS6DKQkZGOCGeFlDc9Weqh25EbAN2vy.zdxyCn7qojDK'),
('nur', 'nur', '088901488574', 'nur@gmail.com', 'madiun', '2023-11-30', 'Perempuan', '$2y$10$1N8UiiK.05CbwhU8LMUXUej029DJXu3LCKmtnf3V9BNpCnyNsuyp6'),
('rizaldy', 'Aldy', '088901488574', 'muhammad2100018314@webmail.uad.ac.id', 'cirebon', '2023-12-15', 'Laki-laki', '$2y$10$do9Quy56q9ZtBCoRFnkCuuybeofVa1./8feAThOJSAq.KaWxBiD9q'),
('aldy', 'rizaldy', '088901488576', 'rizaldy.alifiansyah27@gmail.com', 'Cirebon', '2023-12-12', 'Laki-laki', '$2y$10$Pa3oEDNZcny43zH1iiijpOfHiUnWyZ5NDTACzxbXw4IWQ3LuSVPq2'),
('aldyaja', 'rizaldy', '088901488576', 'rizaldy.alifiansyah27@gmail.com', 'Cirebon', '2023-12-13', 'Laki-laki', '$2y$10$wjFzky0KlEwwzYqwZ5pqbOil3.8/ECFOW/ni4D/BielfyY7X4iE.e'),
('nur', 'nur', '088901488574', 'muhammad2100018314@webmail.uad.ac.id', 'cirebon', '2023-12-29', 'Perempuan', '$2y$10$Pv5j1egyOYcDjzfV4S6sK.ox/O8bPPOJ5uf2XSljo9pIMLrO.m4Zy'),
('khanza', 'khanza', '087729077425', 'khanza@gmail.com', 'magelang', '2023-12-28', 'Perempuan', '$2y$10$YpxUIA7O/twyjB/sYFX3Peb.42xxlNGq7cNXGFyPkkCj/mHZcg5A6'),
('hafizh', 'hafizh', '088901488574', 'hafizh@gmail.com', 'Brebes', '2023-12-20', 'Laki-laki', '$2y$10$.1mA8r6p0tp.YwZxwuKgWOy81/24ew.q49NXYx9eZP6vUQ4a168n.'),
('fajri', 'fajri', '088901488574', 'fara@gmail.com', 'pekalongan', '2023-12-22', 'Laki-laki', '$2y$10$raGDmCQKcuZo7sKZ4B9jXuJCiILdztTvIo5buTtdtcQs9965vbCjC'),
('fajri', 'fajri', '088901488574', 'fara@gmail.com', 'pekalongan', '2023-12-20', 'Laki-laki', '$2y$10$hCaobZ6XN8t1cbUuB6KKSuTT7Mu7UjJc5eiHKPZxhfTaZNvzgq5C.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
