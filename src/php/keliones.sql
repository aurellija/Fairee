-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2020 m. Grd 15 d. 16:26
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keliones`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `registracija_1`
--

CREATE TABLE `registracija_1` (
  `Nr` int(5) NOT NULL,
  `Vartotojo_nr` int(5) NOT NULL,
  `Vartotojo_vardas` varchar(20) NOT NULL,
  `Keliones_nr` int(4) NOT NULL,
  `Vegetaras` tinyint(1) NOT NULL,
  `Palapines` int(2) DEFAULT NULL,
  `Dviraciai` int(2) DEFAULT NULL,
  `Lazdu_poros` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `registracija_1`
--

INSERT INTO `registracija_1` (`Nr`, `Vartotojo_nr`, `Vartotojo_vardas`, `Keliones_nr`, `Vegetaras`, `Palapines`, `Dviraciai`, `Lazdu_poros`) VALUES
(1, 3, 'Juozas', 1, 1, 2, 0, 0),
(2, 26, 'Hana', 1, 0, 1, 0, 0),
(6, 26, 'Hana', 4, 0, 2, 0, 2);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `registracija_2`
--

CREATE TABLE `registracija_2` (
  `Nr` int(4) NOT NULL,
  `Reg_nr` int(5) NOT NULL,
  `Vartotojo_nr` int(5) NOT NULL,
  `Keliones_nr` int(4) NOT NULL,
  `Palapines` int(2) DEFAULT NULL,
  `Dviraciai` int(2) DEFAULT NULL,
  `Lazdos` int(2) DEFAULT NULL,
  `Manta_eur` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `vartotojai`
--

CREATE TABLE `vartotojai` (
  `Nr` int(5) NOT NULL,
  `Vardas` varchar(20) NOT NULL,
  `Pavarde` varchar(30) NOT NULL,
  `Elpastas` varchar(20) NOT NULL,
  `Slaptazodis` varchar(256) NOT NULL,
  `G_data` date NOT NULL,
  `Telefonas` varchar(20) DEFAULT NULL,
  `Nuotrauka` blob DEFAULT NULL,
  `Sudalyvauta` int(3) DEFAULT NULL,
  `Sekanti_id` int(5) DEFAULT NULL,
  `Praejusi_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `vartotojai`
--

INSERT INTO `vartotojai` (`Nr`, `Vardas`, `Pavarde`, `Elpastas`, `Slaptazodis`, `G_data`, `Telefonas`, `Nuotrauka`, `Sudalyvauta`, `Sekanti_id`, `Praejusi_id`) VALUES
(2, 'Aliona', 'Baliona', 'ale@inbox.lt', 'a62039e2dd75ceffa3b7', '1995-01-18', '', '', 0, NULL, NULL),
(3, 'Juozas', 'Juozaitis', 'juozas@gmail.com', 'de9a990700a12ab76ba0', '1997-01-16', '', '', 0, NULL, NULL),
(22, 'adad', 'ad', 'ads@sf.lt', '6057f13c496ecf7fd777', '2020-11-06', '', '', 0, NULL, NULL),
(25, 'ha', 'a', 'a@sd.lt', '$2y$10$xl6bbS4Jdgj4wrAbFaqs9uqbwE6hvHLcxjft4gJ.MMakg2IJAWsoC', '2020-11-06', '', '', 0, NULL, NULL),
(26, 'Hana', 'Montanna', 'hana@montana.lt', '$2y$10$pqOYyn2GZpWxJ3d14oRSSu98qFLIaKGCv.dhwkFEOeIBjb4xEAh1O', '2006-03-24', '+37066655544', '', 0, NULL, NULL),
(27, 'hey', 'hey', 'hey@hey.lt', '$2y$10$weYtpHuTTwTORV3Q7jTUTeRgAzVL8LwwMdOEfshgtZVU5KUmislB.', '2020-10-29', '', '', 0, NULL, NULL),
(33, 'd', 'd', 'han@fs.lt', '$2y$10$053D4zhpxtqHJogwOp4Se.hGfX3FZXKNmwEHIN6alhBa5Mp1KLWwa', '2020-12-18', '', '', 0, NULL, NULL),
(34, 'Ana', 'Banana', 'ana@banana.lt', '$2y$10$zIVkG7fxy1bMvcQ6LkRjXezVwi3X0ZonqFcCfJax5EbQWsLnKEwn.', '2020-12-18', '', '', 0, NULL, NULL),
(36, 'Jonas', 'Galvonas', 'jonas@galvonas.lt', '$2y$10$QwdOpg28mwBpQNmV6bti6OhXM5mtQKtbzGkI4bXNY0HxXOuKUaMqm', '2020-09-10', NULL, NULL, NULL, NULL, NULL),
(37, 'Jonas', 'Galvonas', 'jonas@galvonas.lt', '$2y$10$Dy/M7pDxhb9doekoLijmC.v1ROPtrnDGsaF22d/kx0hHAChzDtYV6', '2020-09-10', NULL, NULL, NULL, NULL, NULL),
(38, 'Jonas', 'Ga', 'ga@sda.lt', '$2y$10$MMr1/uGA5RZZqdmEd.6MHO4BvNh8yjkLxNx60SlodoBCgAQC2Q9T.', '2020-12-30', NULL, NULL, NULL, NULL, NULL),
(39, 'Da', 'Da', 'dsd@dfs.lt', '$2y$10$v/EzLyamxw81kxcn3LRrbuvQzA3GeeSX.KkQoagnaFPKsW5MaB90W', '2020-12-10', NULL, NULL, NULL, NULL, NULL),
(40, 'Anas', 'Bananas', 'ban@bana.lt', '$2y$10$cnFAL.Q.4tPBHsXflZfea.8MJunmWwzIP.ldH3un88VLZLdoHGTDy', '2020-12-10', NULL, NULL, NULL, NULL, NULL),
(41, 'Anas', 'Bananas', 'ban@bana.lt', '$2y$10$ILOL5o7OErUrqv/0hFs6QeGctWcmK7CJkwPVGmolt7aI4ARccO6Ha', '2020-12-10', NULL, NULL, NULL, NULL, NULL),
(42, 'Bana', 'Banana', 'bana@banana.lt', '$2y$10$F9p0gePbBqE6YEetv3ZdDOLX29qc1hA4HlU06zKAoHtSEeTE0c/Nm', '2020-12-19', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `visos_keliones`
--

CREATE TABLE `visos_keliones` (
  `Nr` int(4) NOT NULL,
  `Pavadinimas` varchar(40) NOT NULL,
  `Organizatorius` varchar(30) NOT NULL,
  `Data` date NOT NULL,
  `Trukme` int(2) NOT NULL,
  `Reg_iki` date NOT NULL,
  `Tipas` varchar(15) NOT NULL,
  `Tipas_id` varchar(10) NOT NULL,
  `Liko_vietu` int(3) NOT NULL,
  `Foto` text NOT NULL,
  `Aprasymas` varchar(1000) NOT NULL,
  `Foto_failas` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sukurta duomenų kopija lentelei `visos_keliones`
--

INSERT INTO `visos_keliones` (`Nr`, `Pavadinimas`, `Organizatorius`, `Data`, `Trukme`, `Reg_iki`, `Tipas`, `Tipas_id`, `Liko_vietu`, `Foto`, `Aprasymas`, `Foto_failas`) VALUES
(1, 'Badare Šventosios upe', 'Dalius Makalius', '2021-06-16', 3, '2021-06-02', 'baidarių žygis', 'BAID', 10, 'https://baidaresvilniuje.lt/wp-content/uploads/2014/03/PlaukimasBaidaremisNerimi.jpg', 'Plaukimas 10 km. Šventosios upe iki Upninkų. Šią plaukimo trasa pasitiks du tiltai, pradedam plaukti ties pirmu, o antrasis tiltas leidžia žinoti, kad įveikėme 10 km. Kempingas ir „Old style homestead“ stiliaus sodyba yra apie 1 km. žemiau Upninkų tilto kairiajame Šventosios krante bus matomas medinis tiltas iš vandes, prie kurio finišuojame. Norintys nakvoti palapinėse apsistoja pušų terasoje. Norintys miegoti lovose su patalyne ir turėti Old style, apsistoja – sodyboje.\r\nAutentiška, rastinė sodyba talpina 20 žmonių, turi geriamą labai skanų vandenį iš šulinio, lauko bio tuoletą, tiklinį, futbolo vartus, pavėsinę, stalus poilsiui. Dar siūlo ramų miegą hamake, maudynes upėje ir plaukimus baidarėmis ir plaustais, pirtį.\r\nMaistas gaminamas ant laužo. Plovas, charčio ir kitokie patiekalai jus nustebins labai labai.', ''),
(2, 'Dviračiais po Nidą', 'Valius Pedalius', '2021-04-16', 2, '2021-04-01', 'dviračių žygis', 'DVIR', 15, 'https://i1.alfi.lt/22058/21/81.jpg', 'Dviračiais plauksime nuo vieno kranto iki kito. Bus labai įdomu.', ''),
(3, 'Penktadienis prie Žaliųjų ežerų', 'Vytas Kazlauskas', '2021-02-01', 1, '2021-01-14', 'Pėsčiųjų žygis', 'ZYG', 9, 'https://madeinvilnius.lt/wp-content/uploads/2018/07/37487901_2157474904280827_7228908504424120320_o.jpg', 'Kojomis eisime nuo vieno kranto iki kito. Bus labai įdomu.', ''),
(4, 'Mišku šiaurietiškomis lazdomis', 'Dalius Makalius', '2021-02-18', 5, '2021-02-01', 'pėsčiųjų', 'LAZD', 5, 'https://g2.dcdn.lt/images/pix/bunkeris-karkleje-72293042.jpg', 'Baidarėmis plauksime nuo vieno kranto iki kito. Bus labai įdomu.', ''),
(5, 'Išvyka į Tatrus', 'Jonas Galvonas', '2021-07-13', 7, '2021-07-01', 'Kalnų žygis', 'ZYG', 20, 'https://cdn.getyourguide.com/img/tour/5bc5d24b5edf4.jpeg/146.jpg', 'Tatrais plauksime nuo vieno kranto iki kito. Bus labai įdomu.', ''),
(11, 'Kelionė automobiliais į Rygą', 'Hana Montana', '2021-02-20', 4, '2020-12-26', 'Faina bus', 'BAID', 4, 'https://s2.15min.lt/images/photos/2015/07/23/original/latvijos-sostine-ryga-55b0c6e59ae77.jpg', 'Linksma', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registracija_1`
--
ALTER TABLE `registracija_1`
  ADD PRIMARY KEY (`Nr`),
  ADD KEY `Keliones_id` (`Keliones_nr`),
  ADD KEY `Vartotojo_id` (`Vartotojo_nr`);

--
-- Indexes for table `registracija_2`
--
ALTER TABLE `registracija_2`
  ADD PRIMARY KEY (`Nr`),
  ADD KEY `Reg_nr` (`Reg_nr`),
  ADD KEY `Vartotojo_nr` (`Vartotojo_nr`),
  ADD KEY `Keliones_nr` (`Keliones_nr`);

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`Nr`);

--
-- Indexes for table `visos_keliones`
--
ALTER TABLE `visos_keliones`
  ADD PRIMARY KEY (`Nr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registracija_1`
--
ALTER TABLE `registracija_1`
  MODIFY `Nr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registracija_2`
--
ALTER TABLE `registracija_2`
  MODIFY `Nr` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vartotojai`
--
ALTER TABLE `vartotojai`
  MODIFY `Nr` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `visos_keliones`
--
ALTER TABLE `visos_keliones`
  MODIFY `Nr` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Apribojimai eksportuotom lentelėm
--

--
-- Apribojimai lentelei `registracija_1`
--
ALTER TABLE `registracija_1`
  ADD CONSTRAINT `registracija_1_ibfk_1` FOREIGN KEY (`Keliones_nr`) REFERENCES `visos_keliones` (`Nr`),
  ADD CONSTRAINT `registracija_1_ibfk_2` FOREIGN KEY (`Vartotojo_nr`) REFERENCES `vartotojai` (`Nr`);

--
-- Apribojimai lentelei `registracija_2`
--
ALTER TABLE `registracija_2`
  ADD CONSTRAINT `registracija_2_ibfk_1` FOREIGN KEY (`Reg_nr`) REFERENCES `registracija_1` (`Nr`),
  ADD CONSTRAINT `registracija_2_ibfk_2` FOREIGN KEY (`Vartotojo_nr`) REFERENCES `vartotojai` (`Nr`),
  ADD CONSTRAINT `registracija_2_ibfk_3` FOREIGN KEY (`Keliones_nr`) REFERENCES `visos_keliones` (`Nr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
