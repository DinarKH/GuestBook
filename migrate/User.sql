-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 24 2018 г., 10:31
-- Версия сервера: 5.6.38
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
-- База данных: `Guest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `User`
--

CREATE TABLE `User` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `User`
--

INSERT INTO `User` (`id`, `name`, `password`, `status`) VALUES
(1, 'admin', 'admin', 0),
(2, 'aff', 'afaf', 2),
(6, 'dada', 'ad', 1),
(7, 'Dinar', 'ad', 1),
(8, 'adad', 'adaadad', 1),
(9, 'Dinar', '123321', 1),
(10, 'qweewq', '11', 1),
(11, 'adad', 'adadaad', 1),
(12, 'Davad', 'adada', 1),
(13, 'Sadddd', 'aaaaa', 1),
(14, 'Ssssss', 'sssssss', 1),
(15, 'Danua', '12345678', 1),
(16, 'Sveta', '122222', 1),
(17, 'Danua', '12345678', 1),
(18, 'Danua', '12345678', 1),
(19, 'Danua', '12345678', 1),
(20, 'Danua', '12345678', 1),
(21, 'Danua', '12345678', 1),
(22, 'Danua', '12345678', 1),
(23, 'Danua', '12345678', 1),
(24, 'Insaf', 'e10adc3949ba59abbe56e057f20f88', 1),
(25, 'Azat', 'e10adc3949ba59abbe56e057f20f88', 1),
(26, 'qweasd', '698d51a19d8a121ce581499d7b7016', 1),
(27, 'Samuel', 'c8837b23ff8aaa8a2dde915473ce09', 1),
(28, 'Chechen', '146b65fd2004858b1c615bc8cf8b8a', 1),
(29, 'Victor', '146b65fd2004858b1c615bc8cf8b8a', 1),
(30, 'Rass', '146b65fd2004858b1c615bc8cf8b8a', 1),
(31, 'Assssss', '146b65fd2004858b1c615bc8cf8b8a', 1),
(32, 'Maria', '123qwe', 1),
(33, 'Zoya', '123qwe', 1),
(34, 'Inga', '46f94c8de14fb36680850768ff1b7f', 1),
(35, 'Cica', '2ee6395d911b7ab90d294b6beccbdf', 1),
(36, 'Regina', 'e22115b5d76640e2389bcac25c46a2df03b2df657c5b3ff32cbaed141f8e8ef0', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `User`
--
ALTER TABLE `User`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
