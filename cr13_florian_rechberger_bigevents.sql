-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 12:46 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr13_florian_rechberger_bigevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `frequency` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `description` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `frequency`, `date`, `time`, `description`, `image`, `capacity`, `email`, `phone`, `place`, `street`, `postal_code`, `city`, `country`, `link`, `type`) VALUES
(9, 'Campus WU', 'Every Day', '2014-01-01', '00:00:00', 'Internationally acclaimed architects, including Zaha Hadid, designed the new campus of the Vienna University of Economics and Business. Vienna therefore has not only a new university but also a new destination for people with an interest in architecture.', 'https://www.wien.info/media/images/41161-campus-der-wirtschaftsuniversitaet-1to1.jpeg', 7500, 'sekretariat@ai.wu.ac.at', '+43 1 313 36-0', 'Campus WU', 'Welthandelsplatz 1', '1020', 'Wien', 'Austria', 'www.wu.ac.at', 'Architecture'),
(10, 'Vienna Main Library (Hauptbücherei Wien)', 'Every Day', NULL, NULL, 'One of the most fascinating facets of the Main Library of the City Libraries is the view through its vast glass facades: Kahlenberg, Leopoldsberg and large parts of the Vienna Woods seem close enough to touch. Spacious library rooms with Internet and audio stations, reading nooks and a café are conducive to reading and reflecting.', 'https://www.wien.info/media/images/hauptbuecherei-aussen-30906-hauptbibliothek-1to1.jpeg', 5000, 'bib.auskunft@buechereien.wien.at', '+43 1 4000 84 500', 'Vienna Main Library', 'Urban-Loritz-Platz 2a', '1070 ', 'Wien', 'Austria', 'www.buechereien.wien.at', 'Education'),
(11, 'Danzón - El ritmo latino', 'Every Day', NULL, NULL, 'Mediterranean joie de vivre with enough space for the right moves on the dance floor can be found at Danzón in the heart of Vienna. The hips swing to all styles of Latin American music and the accompanying drinks are professionally mixed.', 'https://www.wien.info/media/images/danzon-latin-club-1to1.jpeg', 5000, 'office@danzon.club', '+43 676 55 05 840', 'Danzón', 'Johannesgasse 3', '1010', 'Wien', 'Austria', 'www.danzon.club', 'Club'),
(12, 'Salsa Cubana Intermediate mit Blaga', 'Every Tuesday', NULL, '20:30:00', 'Der Salsa Cubana Intermediate Workshop besteht aus 4 Einheiten jeweils á 1 Stunde und findet wöchentlich statt, immer am Donnerstag von 20.30 bis 21.30 Uhr.\r\nDie Teilnehmer sollten Salsa Basiskenntnisse besitzen, d.h. Basic I & II Workshops abgeschlossen haben und die Grundschritte und den Takt gut können. \r\nVerschiedene kubanische Tanzfiguren werden beigebracht, wobei viele Tipps zum Styling gegeben und typische kubanische Schrittvariationen gezeigt werden.\r\nNach dem Workshop findet die Salsa Cubana Party statt, die eine tolle Möglichkeit ist, die gelernten Tanzfiguren zu üben und sich mit allen Salseros sozialisieren.', 'https://www.danzon.club/images/blaga.jpg', 50, 'office@danzon.club', '+43 676 55 05 840', 'Danzón', 'Johannesgasse 3', '1010', 'Wien', 'Austria', 'www.danzon.club', 'Dancing'),
(13, 'Shlomit Butbul', NULL, '2019-04-09', '19:00:00', 'Die junge Dame ist in Israel auf die Welt gekommen, singt in unzähligen Sprachen und läßt sich nur sehr schwer in eine musikalische Kategorie einordnen – ihr Repertoire umfasst Volkslieder der eigenen und fremden Wurzeln, Pop, Folk, Operette, Tagesschlager, Jazz, Blues und eigentlich alles, was ihr gefällt (es könnte also sogar eine Opernarie auftauchen). Shlomit Butbul hat sich für ihr JAZZLAND-Debut zielsicher eine Superband gewünscht: Herwig Gradischnig sax, Oliver Kent b, Hans Strasser b und Christian Salfellner dm.', 'https://i0.wp.com/www.shlomitbutbul.com/wp-content/uploads/2017/11/ShlomitButbul_MG_1235-AndreaPeller.jpg', 50, 'office@jazzland.at', '+43 1 533 25 75', 'Jazzland', 'Franz-Josefs-Kai 29', '1010 ', 'Wien', 'Austria', 'www.jazzland.at', 'Music'),
(14, 'Beirut', NULL, '2019-04-14', '20:00:00', 'Endlick kommt Beirut nach Wien mit dabei ihr neues Album Gallipoli, welches Februar 2019 erscheinen wird.\r\nSpecial Guest ist Helado Negro', 'https://media.npr.org/assets/img/2018/10/19/beirut-press-photo-3b0d4f5551709faee2ad82c27e2a74f51d6aae75-s800-c85.jpg', 4200, 'office@planet.tt', '+43 1 332 46 41', 'Gasometer', 'Guglgasse 8', '1110 ', 'Wien', 'Austria', 'www.planet.tt', 'Music'),
(15, 'Verteidigung der Demokratie', NULL, '2019-04-18', '19:30:00', 'Politshow mit Musik\r\nStück und Regie Christine Eder', 'https://events.wien.info/media/full/VT_ARCHITEKTUR_11_c_Lupi_Spuma.jpg', 500, 'ticket@volkstheater.at', '+43 1 52 111 400', 'Volkstheater', 'Arthur-Schnitzler-Platz 1', '1070 ', 'Wien', 'Austria', 'www.volkstheater.at', 'Politics'),
(16, 'test', 'every test-day', '2024-05-25', '06:00:00', 'EDITED EDITED EDITED test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test', 'https://assets.fireside.fm/file/fireside-images/podcasts/images/b/bc7f1faf-8aad-4135-bb12-83a8af679756/cover_medium.jpg', 10000000, 'test@test.com', '+1111 11111 111 11', 'test-island', 'island-street', 'i12345', 'test-city', 'test-country', 'https://en.wikipedia.org/wiki/Test', 'Martial Arts'),
(19, 'Mountain Biking', 'Permanently', '2024-01-01', '00:00:00', 'Go to your limits - exceed them - enjoy nature -', 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1f/Norco_Range.jpg/2560px-Norco_Range.jpg', 1, 'lovenature@freedom.com', 'N/A', 'out there', 'Offroad', 'every', 'where', 'on the world', 'https://www.warmshowers.org/', 'Lifestyle'),
(20, 'Explore The World', 'twice a week', '2019-05-23', '14:00:00', 'explore the world explore the world explore the world explore the world explore the world explore the world explore the world explore the world explore the world explore the world explore the world explore the world explore the world explore the world explore the world explore the world explore the world explore the world explore the world', 'https://desenio.com/bilder/artiklar/zoom/2603_2.jpg', 2147483647, 'wunderlust@wunderlust.world', 'N/A', 'everywhere', 'no street', 'no postal', 'all around the world', 'Earth', 'https://dictionary.cambridge.org/dictionary/english/wanderlust', 'Travel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
