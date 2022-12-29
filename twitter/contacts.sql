-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 30 2019 г., 04:30
-- Версия сервера: 10.2.7-MariaDB
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `less25`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `name` varchar(30) NOT NULL,
  `number` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`name`, `number`) VALUES
('Лена', '+7‒914‒2‒700‒811'),
('Кино', '+7 (4112) 24‒00‒22'),
('ЖКХ', '+7 (4112) 45‒36‒48'),
('Мама', '+7 (4112) 40‒80‒76'),
('Мама', '+7 (4112) 40‒80‒76'),
('Папа', '+7 (4112) 508‒221'),
('Брат', '+7 (4112) 31‒88‒50'),
('Тетя', '+7 (4112) 321‒777'),
('Сергей', '+7‒914‒2‒755‒022'),
('Толя', '+7‒914‒2‒73‒88‒22'),
('Толя', '+7‒914‒2‒73‒88‒22'),
('Петр', '+7 (4112) 32‒09‒13'),
('Иннокентий', '+7‒962‒731‒35‒27');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
