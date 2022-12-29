-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 22 2021 г., 17:53
-- Версия сервера: 5.7.33
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `title` varchar(355) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `goal` int(10) NOT NULL,
  `donated` int(10) NOT NULL,
  `img` varchar(355) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`title`, `text`, `goal`, `donated`, `img`, `id`) VALUES
('Студия танцев для начинающих', 'Хочу открыть студию танцев для тех, кто ни разу не танцевал с поддерживающей атмосферой. Будет отличный дизайн, штатный видеограф, конкурсы внутри студии и вне, отчётные концерты и т.д.', 3000000, 50000, '1.jpg', 1),
('Ноутбук Apple MacBook Pro 16 i7 2,6/64/8T/RP 5600M 8Gb SG', 'Хочу крутой ноут, чтобы ничего не лагало. Чтобы он поддерживал любые игры, любые программы', 660000, 10000, '2.jpeg', 2),
('Выпустить большой сборник рассказов о моей семье', 'Я очень люблю и восхищаюсь своей семьей. Хочу рассказать о каждом члене моей семьи, чтобы наши будущие поколения не забывали нас и помнили:)', 500000, 10000, '3.jpg', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
