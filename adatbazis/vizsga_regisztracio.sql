-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2021. Ápr 02. 23:10
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `vizsga_regisztracio`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `regisztraciosadatok`
--

CREATE TABLE `regisztraciosadatok` (
  `id` int(11) NOT NULL,
  `Felhasznalo_nev` varchar(35) COLLATE utf8_hungarian_ci NOT NULL,
  `Szuletesi_nev` varchar(35) COLLATE utf8_hungarian_ci NOT NULL,
  `Firstname` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `Lastname` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `nem` varchar(10) COLLATE utf8_hungarian_ci NOT NULL,
  `Jelszo` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `Szuletesi_datum` date NOT NULL,
  `Regisztracio_datuma` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `regisztraciosadatok`
--

INSERT INTO `regisztraciosadatok` (`id`, `Felhasznalo_nev`, `Szuletesi_nev`, `Firstname`, `Lastname`, `nem`, `Jelszo`, `email`, `Szuletesi_datum`, `Regisztracio_datuma`) VALUES
(1, 'DarkSaluna', 'Erdélyi Anett', 'Erdélyi', 'Anett', 'Nő', 1234, 'anett.erdelyi1993@gmail.com', '1993-06-09', '2021-01-08'),
(14, 'kutya', 'macska', 'macs', 'ka', 'Egyéb', 789, 'km@mail.hu', '1993-09-19', '2021-01-12'),
(16, 'Ds', 'Zita', '', '', 'Nő', 963, 'zita.l@citromail.hu', '2000-04-20', '2021-02-02'),
(18, 'bb', 'bb', 'fccdwsad', '', 'Nő', 12345, 'bb@gmail.hu', '1993-05-05', '2021-02-06'),
(19, 'Aaa', 'aaaa', 'aa', 'aa', 'Férfi', 123456, 'aa@gmail.hu', '1994-04-08', '2021-02-06'),
(22, 'bloodyrosett', 'erdei anett', 'erdei', 'anett', 'Nő', 19930609, 'erdei@gmail.hu', '1993-06-09', '2021-02-06'),
(23, 'felhasznalo', 'p edit', 'p', 'edit', 'Nő', 852, 'edit.p@citromail.hu', '1978-07-17', '2021-02-22'),
(24, 'feherfarkas9993', 'Erdélyi Anett', 'Erdélyi', 'Anett', 'Nő', 1, 'feherfarkas9993@gmail.com', '1993-06-09', '2021-04-02');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `regisztraciosadatok`
--
ALTER TABLE `regisztraciosadatok`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `regisztraciosadatok`
--
ALTER TABLE `regisztraciosadatok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
