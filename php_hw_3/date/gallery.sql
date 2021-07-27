-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 27 2021 г., 18:12
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gallery`
--

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id` int NOT NULL,
  `file` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `size` int NOT NULL,
  `date` datetime NOT NULL,
  `review` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id`, `file`, `size`, `date`, `review`) VALUES
(41, '_104368428_gettyimages-543560762-0.jpg', 16769, '2021-07-27 18:09:31', 1),
(42, '4d671cfe78cbb63a617875e1f6023157-0.jpeg', 1019710, '2021-07-27 18:09:34', 1),
(43, '95a67ff5db25eb2c1b1be7720cd26896-0.jpg', 236337, '2021-07-27 18:09:37', 1),
(44, 'f4d2961b652880be432fb9580891ed62-0.png', 687401, '2021-07-27 18:09:42', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
