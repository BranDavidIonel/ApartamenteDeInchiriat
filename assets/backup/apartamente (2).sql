-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Aug 2019 la 21:03
-- Versiune server: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `imagine` varchar(100) NOT NULL,
  `link_site` varchar(5000) DEFAULT NULL,
  `data_postari` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `apartamente`
--

INSERT INTO `apartamente` (`id`, `nume`, `telefon`, `pret`, `adresa`, `descriere`, `imagine`, `link_site`, `data_postari`) VALUES
(1, 'david', '0754811111', 320, 'oancea,nr 5,bloc D11', 'In zona tatarasi nord cu 2 camere ,caut un baiat  ', 'img13.jpg,ap1.jpg,ap2.jpg', NULL, NULL),
(7, 'Tomita', '0743014111', 300, ' Cug,Iasi', 'Persoana fizica, închiriez apartament 2 camere decomandat, complet utilat in zona Rond Vechi, Cug. Ias', 'apartamentN.png', NULL, NULL),
(55, '', '', 320, '', 'Copou, apartament 2 camere, mobilita si utilat, 320 Euro', '', 'https://www.pro-casa.ro/oferta/copou-apartament-2-camere-mobilita-si-utilat-320-euro/', '2019-08-16 04:18:00'),
(56, '', '', 480, '', 'PRO CASA Imobiliare va propune spre inchiriere apartament cu 3 camere, etajul 1, bloc tip vila in zona Tg, Cucu,  Imobilul complet mobilat si utilat cu toate cele necesare locuitului, centrala termica, masina de spalat, frigider.  pret: 480 euro/luna.', '', 'https://www.pro-casa.ro/oferta/pro-casa-imobiliare-va-propune-spre-inchiriere-apartament-cu-3-camere-etajul-1-bloc-tip-vila-in-zona-tg-cucu-imobilul-complet-mobilat-si-utilat-cu-toate-cele-necesare-locuitului-centrala-termica/', '2019-08-16 10:56:33'),
(57, '', '', 450, '', 'PRO CASA Imobiliare va propune spre inchiriere apartament cu 2 camere, etajul 2, bloc nou in zona Bucsinescu, complet mobilat si utilat, centrala termica, incalzire prin pardoseala, masina de spalat haine+ vase, frigider, conexiune la internet, televizor.  pret: 450 euro/luna.', '', 'https://www.pro-casa.ro/oferta/pro-casa-imobiliare-va-propune-spre-inchiriere-apartament-cu-2-camere-etajul-2-bloc-nou-in-zona-bucsinescu-complet-mobilat-si-utilat-centrala-termica-incalzire-prin-pardoseala-masina-de-spalat-h/', '2019-08-16 10:23:04'),
(58, '', '', 450, '', 'PRO CASA Imobiliare va propune spre inchiriere apartament cu 3 camere, decomandate, in zona Gara, situate la etajul 4/8.  Apartamentul este amenajat si utilat cu toate cele necesare locuitului, detine centrala termica proprie, 2 balcoane, 2 bai, gresie, faianta, ferestre termopan.  pret de inchiriere 450 Euro/luna', '', 'https://www.pro-casa.ro/oferta/pro-casa-imobiliare-va-propune-spre-inchiriere-apartament-cu-3-camere-decomandate-in-zona-gara-situate-la-etajul-48-apartamentul-este-amenajat-si-utilat-cu-toate-cele-necesare-locuitului-detine/', '2019-08-16 09:40:52'),
(59, '', '', 1891, '', 'Centru, Strada Sf.Andrei, numarul 7-9, Palas in fata Hotelului International, Ansamblul Unique Residence, apartament SMART Home cu 1 camera, D, conf.I, 34 mp., etajul 1, complet finisat, pret de vanzare 1891 euro per mp.', '', 'https://www.pro-casa.ro/oferta/centru-strada-sf-andrei-numarul-7-9-palas-in-fata-hotelului-international-ansamblul-unique-residence-apartament-smart-home-cu-1-camera-d-conf-i-34-mp-etajul-1-complet-finisat-pret-de-vanza/', '2019-08-15 04:32:32'),
(60, '', '', 450, '', 'Metalurgie-Gradinari se inchiriaza apartament cu 2 camere, decomandat, situat la etajul 2 al blocului.   Apartamentul este mobilat si utilat cu toate cele necesare locuitului: este spa?ios, dotat cu central? termic? proprie, parchet, gresie, faian??, tâmpl?rie tripan, aer conditionat, , aragaz, birou de lucru, draperii, mobilier bucatarie, uscator rufe, masina de spalat vase, frigider si masina de spalat rufe.   Camerele se vor mobila in functie de dorintele chiriasului cu canapele extensibile, pat dublu sau pat matrimonial.  Pret 450 Euro/luna, Negociabil!', '', 'https://www.pro-casa.ro/oferta/metalurgie-gradinari-se-inchiriaza-apartament-cu-2-camere-decomandat-situat-la-etajul-2-al-blocului-apartamentul-este-mobilat-si-utilat-cu-toate-cele-necesare-locuitului-este-spatios-dotat-cu-c/', '2019-08-14 04:28:04'),
(61, '', '', 500, '', 'Independentei, 2 camere decomandate, 500 Euro/luna', '', 'https://www.pro-casa.ro/oferta/independentei-2-camere-decomandate-500-euroluna/', '2019-08-14 03:07:24'),
(62, '', '', 300, '', 'Ultracentral, bulevardul Independentei in apropiere de UMF, apartament 1 camer?, 30 mp, parter.  Apartamentul este mobilat complet, dotat cu centrala termic?, tâmpl?rie exterioar? din termopan, la interior u?i elegante din lemn, parchet, baia cu gresie si faian??, grup sanitar, chiuvet?, dus. Utilat complet cu masina de sp?lat, frigider, aragaz, cuptor.  Chirie lunar? este de 300 Euro/luna + 1 luna garantie.', '', 'https://www.pro-casa.ro/oferta/ultracentral-bulevardul-independentei-in-apropiere-de-umf-apartament-1-camera-30-mp-parter-apartamentul-este-mobilat-complet-dotat-cu-centrala-termica-tamplarie-exterioara-din-termopan-la-int/', '2019-08-13 03:03:32'),
(63, '', '', 400, '', 'Copou (Parcul Copou), se inchiriaza apartament cu 2 camere, situat la etajul 6/8, cu o suprafata de 50 mp.   Imobilul este mobilat si utilat: detine centrala termica proprie, frigider, masina de spalat, aragaz.  pret de inchiriere 400 euro/luna.', '', 'https://www.pro-casa.ro/oferta/copou-parcul-copou-se-inchiriaza-apartament-cu-2-camere-situat-la-etajul-68-cu-o-suprafata-de-50-mp-imobilul-este-mobilat-si-utilat-detine-centrala-termica-proprie-frigider-masina-de-spala/', '2019-08-13 02:38:57'),
(65, '', '', 330, '', 'Bulevardul Stefan Cel Mare, se inchiriaza apartament apartament 1 camera situat la etajul 8 , complet mobilat si utilat. Imobilul dispune de aer conditionat , centrala termica, aragaz , frigider, masina de spalat etc. pret de inchiriere 330 euro/luna', '', 'https://www.pro-casa.ro/oferta/bulevardul-stefan-cel-mare-se-inchiriaza-apartament-apartament-1-camera-situat-la-etajul-8-complet-mobilat-si-utilat-imobilul-dispune-de-aer-conditionat-centrala-termica-aragaz-frigider-masi/', '2019-08-13 01:16:02');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

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
