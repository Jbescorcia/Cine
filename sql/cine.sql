-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 01:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cine`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `nombre` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `correo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`nombre`, `username`, `password`, `correo`) VALUES
('administrador', 'admin', '123456', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `funcion`
--

CREATE TABLE `funcion` (
  `codigo` varchar(100) NOT NULL,
  `fecha` datetime NOT NULL,
  `codigoPelicula` varchar(80) NOT NULL,
  `codigoSala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `funcion`
--

INSERT INTO `funcion` (`codigo`, `fecha`, `codigoPelicula`, `codigoSala`) VALUES
('TARDE', '2023-10-22 17:22:00', '78YT', 'WQ234');

-- --------------------------------------------------------

--
-- Table structure for table `pelicula`
--

CREATE TABLE `pelicula` (
  `nombre` varchar(100) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `clasificacion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `pelicula`
--

INSERT INTO `pelicula` (`nombre`, `codigo`, `clasificacion`) VALUES
('TITANIC', '78YT', 'tp');

-- --------------------------------------------------------

--
-- Table structure for table `sala`
--

CREATE TABLE `sala` (
  `nombre` varchar(100) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `capacidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `sala`
--

INSERT INTO `sala` (`nombre`, `codigo`, `capacidad`) VALUES
('SALA 4', 'WQ234', 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`username`) USING BTREE;

--
-- Indexes for table `funcion`
--
ALTER TABLE `funcion`
  ADD UNIQUE KEY `codigoSala` (`codigoSala`),
  ADD UNIQUE KEY `codigoPelicula` (`codigoPelicula`);

--
-- Indexes for table `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`codigo`) USING BTREE;

--
-- Indexes for table `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`codigo`) USING BTREE;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `funcion`
--
ALTER TABLE `funcion`
  ADD CONSTRAINT `funcion_ibfk_1` FOREIGN KEY (`codigoPelicula`) REFERENCES `pelicula` (`codigo`),
  ADD CONSTRAINT `funcion_ibfk_2` FOREIGN KEY (`codigoSala`) REFERENCES `sala` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
