-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Kwi 2023, 13:31
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep_internetowy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category_one`
--

CREATE TABLE `category_one` (
  `Id` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Activ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category_three`
--

CREATE TABLE `category_three` (
  `Id` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Activ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category_two`
--

CREATE TABLE `category_two` (
  `Id` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Activ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product`
--

CREATE TABLE `product` (
  `Id` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Id_category_three` int(11) NOT NULL,
  `Img` varchar(45) NOT NULL,
  `Price` int(11) NOT NULL,
  `Desc` varchar(45) NOT NULL,
  `Sellout` int(11) NOT NULL,
  `Count` int(11) NOT NULL,
  `Activ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `product`
--

INSERT INTO `product` (`Id`, `Name`, `Id_category_three`, `Img`, `Price`, `Desc`, `Sellout`, `Count`, `Activ`) VALUES
(1, 'Air Jordan 4 Military Black', 0, 'aj4militaryblack.png', 2000, 'buty', 0, 1000, 1),
(2, 'Nike Dunk SB Low Why So Sad', 0, 'nikedunksbwhysosad.png', 1000, 'Buty', 0, 1000, 1),
(3, 'Nike Dunk Low SB Concepts Orange Lobster', 0, 'nikedunklowsbconceptsorangelobster.png', 2300, 'Buty', 0, 1000, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Nickname` text NOT NULL,
  `Name` text NOT NULL,
  `Surname` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`Id`, `Nickname`, `Name`, `Surname`, `Email`, `Password`) VALUES
(1, 'michal', 'Michał', 'Zieleniecki', 'michal@gmail.com', 'michal123'),
(2, 'damian', 'Damian', 'Moniuszko', 'damian@gmail.com', 'damian123'),
(3, 'mateusz', 'Mateusz', 'Wiszowaty', 'mateusz@gmail.com', 'mateusz123'),
(4, 'krystian', 'Krystian', 'Konończuk', 'krystian@gmail.com', 'krystian123'),
(5, 'konrad', 'Konrad', 'Palikot', 'konrad@gmail.com', 'konrad123'),
(6, 'kacper', 'Kacper', 'Butkiewicz', 'kacper@gmail.com', 'kacper123'),
(7, 'sebastian', 'Sebastian', 'Łapiński', 'sebastian@gmail.com', 'sebastian123'),
(8, 'bogumil', 'Bogumił', 'Rzeziorek', 'bogumil@gmail.com', 'bogumil123');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `category_one`
--
ALTER TABLE `category_one`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `category_three`
--
ALTER TABLE `category_three`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `category_two`
--
ALTER TABLE `category_two`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `category_one`
--
ALTER TABLE `category_one`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `category_three`
--
ALTER TABLE `category_three`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `category_two`
--
ALTER TABLE `category_two`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
