-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: www.piustien.net
-- Gegenereerd op: 21 mrt 2020 om 18:58
-- Serverversie: 5.5.62-0+deb8u1
-- PHP-versie: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bin17`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Administrator`
--

CREATE TABLE `Administrator` (
  `E-mail` varchar(63) NOT NULL,
  `Wachtwoord` varchar(31) NOT NULL,
  `Code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Administrator`
--

INSERT INTO `Administrator` (`E-mail`, `Wachtwoord`, `Code`) VALUES
('louis.dusart@piustien.net', 'Louis123', 7),
('tunahan.ozturk@piustien.net', 'Tunahan123', 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Competitie`
--

CREATE TABLE `Competitie` (
  `Competitie` varchar(31) NOT NULL,
  `Klassement` varchar(31) NOT NULL,
  `Punten` int(11) NOT NULL,
  `VoorDoelpunten` int(11) NOT NULL,
  `TegenDoelpunten` int(11) NOT NULL,
  `Wedstrijd` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Competitie`
--

INSERT INTO `Competitie` (`Competitie`, `Klassement`, `Punten`, `VoorDoelpunten`, `TegenDoelpunten`, `Wedstrijd`) VALUES
('LaLiga', '2de klasse', 69, 75, 25, ''),
('Premier League', '1ste klasse', 30, 55, 10, '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Eindstand`
--

CREATE TABLE `Eindstand` (
  `EindstandThuisTeam` varchar(7) NOT NULL,
  `EindstandUitTeam` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Eindstand`
--

INSERT INTO `Eindstand` (`EindstandThuisTeam`, `EindstandUitTeam`) VALUES
('2', '1'),
('5', '2');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Gebruiker`
--

CREATE TABLE `Gebruiker` (
  `E-mail` varchar(63) NOT NULL,
  `Wachtwoord` varchar(31) NOT NULL,
  `FavorieteTeam` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Gebruiker`
--

INSERT INTO `Gebruiker` (`E-mail`, `Wachtwoord`, `FavorieteTeam`) VALUES
('anton.kolev@piustien.net', 'Anton123', 'Liverpool'),
('lotfi.lamzira@piustien.net', 'Lotfi123', 'Real Madrid');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Klassement`
--

CREATE TABLE `Klassement` (
  `Klassement` varchar(31) NOT NULL,
  `Team` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Klassement`
--

INSERT INTO `Klassement` (`Klassement`, `Team`) VALUES
('1ste klasse', 'Liverpool'),
('2de klasse', 'Man City');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Persoon`
--

CREATE TABLE `Persoon` (
  `E-mail` varchar(63) NOT NULL,
  `Wachtwoord` varchar(31) NOT NULL,
  `Voornaam` varchar(15) NOT NULL,
  `Achternaam` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Speelkalender`
--

CREATE TABLE `Speelkalender` (
  `Wedstrijd` varchar(63) NOT NULL,
  `DateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Speelkalender`
--

INSERT INTO `Speelkalender` (`Wedstrijd`, `DateTime`) VALUES
('Chelsea- Man Utd', '2020-03-25 18:00:00'),
('Liverpool - Man City', '2020-03-27 19:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Team`
--

CREATE TABLE `Team` (
  `Naam` varchar(15) NOT NULL,
  `Source` varchar(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Team`
--

INSERT INTO `Team` (`Naam`, `Source`) VALUES
('Liverpool', ''),
('Man Utd', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Wedstrijd`
--

CREATE TABLE `Wedstrijd` (
  `Wedstrijd` varchar(63) NOT NULL,
  `AantalPuntenThuisTeam` int(11) NOT NULL,
  `AantalPuntenUitTeam` int(11) NOT NULL,
  `GoalsUitTeam` int(11) NOT NULL,
  `GoalsThuisTeam` int(11) NOT NULL,
  `Eindstand` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Wedstrijd`
--

INSERT INTO `Wedstrijd` (`Wedstrijd`, `AantalPuntenThuisTeam`, `AantalPuntenUitTeam`, `GoalsUitTeam`, `GoalsThuisTeam`, `Eindstand`) VALUES
('Chelsea - Man City', 36, 22, 2, 5, '2-5'),
('Man Utd - Liverpool', 25, 22, 2, 2, '2-2');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Administrator`
--
ALTER TABLE `Administrator`
  ADD PRIMARY KEY (`E-mail`,`Wachtwoord`,`Code`);

--
-- Indexen voor tabel `Competitie`
--
ALTER TABLE `Competitie`
  ADD PRIMARY KEY (`Competitie`);

--
-- Indexen voor tabel `Eindstand`
--
ALTER TABLE `Eindstand`
  ADD PRIMARY KEY (`EindstandThuisTeam`,`EindstandUitTeam`);

--
-- Indexen voor tabel `Gebruiker`
--
ALTER TABLE `Gebruiker`
  ADD PRIMARY KEY (`E-mail`,`Wachtwoord`,`FavorieteTeam`);

--
-- Indexen voor tabel `Klassement`
--
ALTER TABLE `Klassement`
  ADD PRIMARY KEY (`Klassement`);

--
-- Indexen voor tabel `Persoon`
--
ALTER TABLE `Persoon`
  ADD PRIMARY KEY (`E-mail`,`Wachtwoord`);

--
-- Indexen voor tabel `Speelkalender`
--
ALTER TABLE `Speelkalender`
  ADD PRIMARY KEY (`Wedstrijd`,`DateTime`);

--
-- Indexen voor tabel `Team`
--
ALTER TABLE `Team`
  ADD PRIMARY KEY (`Naam`,`Source`);

--
-- Indexen voor tabel `Wedstrijd`
--
ALTER TABLE `Wedstrijd`
  ADD PRIMARY KEY (`Wedstrijd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
