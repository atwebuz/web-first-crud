-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 25 2023 г., 11:50
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crud_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `registration`
--

CREATE TABLE `registration` (
  `name` varchar(45) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `registration`
--

INSERT INTO `registration` (`name`, `id`, `email`, `password`, `address`, `image`) VALUES
('Alex', 1, 'abdulla@mail.ru', '4297f44b13955235245b2497399d7a93', 'sergeli', 'image.png'),
('', 147, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '/images/'),
('', 148, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '/images/'),
('Abdulaziz Abdusattorov', 149, 'admin@admin.uz', 'f27f6f1c7c5cbf4e3e192e0a47b85300', 'ppp', ''),
('Abdulaziz', 150, 'admin@admin.uz', '7f94dd413148ff9ac9e9e4b6ff2b6ca9', 'ooo', ''),
('Ian Salazar', 151, 'qela@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Consequat Qui volup', ''),
('admin', 152, 'admin@admin.uz', '21232f297a57a5a743894a0e4a801fc3', 'yunsobod', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`) VALUES
(1, 'Abdulaziz', 'admin@admin.uz', '+998333088099'),
(2, 'jafar', 'admin@kiut.uz', '1239872183111');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
