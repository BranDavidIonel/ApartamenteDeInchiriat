-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Iul 2019 la 18:12
-- Versiune server: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Database: `apartamente`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `apartamente`
--

CREATE TABLE `apartamente` (
  `id` int(11) NOT NULL,
  `nume` varchar(100) NOT NULL,
  `telefon` varchar(100) NOT NULL,
  `pret` int(11) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `descriere` text,
  `imagine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `apartamente`
--

INSERT INTO `apartamente` (`id`, `nume`, `telefon`, `pret`, `adresa`, `descriere`, `imagine`) VALUES
(1, 'david', '0754811111', 300, 'oancea,nr 5,bloc D11', 'In zona tatarasi nord cu 2 camere ,caut un baiat  ', 'img13.jpg'),
(7, 'Tomita', '0743014111', 300, ' Cug,Iasi', 'Persoana fizica, închiriez apartament 2 camere decomandat, complet utilat in zona Rond Vechi, Cug. Ias', 'apartamentN.png');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `imagini`
--

CREATE TABLE `imagini` (
  `id` int(11) NOT NULL,
  `imagine` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `imagini`
--

INSERT INTO `imagini` (`id`, `imagine`) VALUES
(1, 'http://[::1]/ApartamenteDeInchiriat/'),
(2, 'http://[::1]/ApartamenteDeInchiriat/'),
(3, 'brasov20182.jpg');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `user`
--

CREATE TABLE `user` (
  `1` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `user`
--

INSERT INTO `user` (`1`, `userName`, `password`) VALUES
(1, 'david', '8ec1b433ea23dc121336a4b58ae1b1ac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartamente`
--
ALTER TABLE `apartamente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imagini`
--
ALTER TABLE `imagini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartamente`
--
ALTER TABLE `apartamente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `imagini`
--
ALTER TABLE `imagini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
