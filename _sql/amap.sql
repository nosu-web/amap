-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 07 2021 г., 23:30
-- Версия сервера: 10.4.12-MariaDB
-- Версия PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `amap`
--

-- --------------------------------------------------------

--
-- Структура таблицы `polygons`
--

DROP TABLE IF EXISTS `polygons`;
CREATE TABLE `polygons` (
  `id` int(11) NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `density` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `polygons`
--

INSERT INTO `polygons` (`id`, `description`, `points`, `density`, `status_id`, `created`) VALUES
(1, 'Полигон #1', '[[[44.676976203918464,43.02397658169533],[44.67654705047608,43.023443220609224],[44.67564582824707,43.024258947453184],[44.675946235656745,43.02438444292868],[44.676976203918464,43.02397658169533]]]', 10, 1, '2021-06-07 22:33:41'),
(2, 'Полигон #2', '[[[44.69508647918702,43.02315300748341],[44.69512939453126,43.02284710567648],[44.694989919662476,43.02284710567648],[44.6948504447937,43.02318438194153],[44.69508647918702,43.02315300748341]]]', 9, 2, '2021-06-07 22:33:41'),
(3, 'Полигон #4', '[[[44.678467512130744,43.02566291346588],[44.67857480049133,43.02554526391529],[44.67858016490936,43.02543153580209],[44.67852115631104,43.02536486749984],[44.67838168144227,43.02530604246711],[44.67815637588502,43.02534525916184],[44.67812418937684,43.02536486749984],[44.678043723106384,43.02549428237337],[44.678054451942444,43.025627618624384],[44.67812955379487,43.02570605157795],[44.67830657958985,43.02572958144446],[44.678467512130744,43.02566291346588]]]', 4, 3, '2021-06-07 22:33:41');

-- --------------------------------------------------------

--
-- Структура таблицы `statuses`
--

DROP TABLE IF EXISTS `statuses`;
CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'Новый'),
(2, 'В работе'),
(3, 'Очищен');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `registered` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `registered`) VALUES
(1, 'admin', 'admin@mail.ru', '$2y$10$VRox.wT4rFmDg83ExcS3FOQi/qXm62rCNzioH6XKoemdpENhdrcqK', '2021-05-11 00:08:22');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `polygons`
--
ALTER TABLE `polygons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `statuses`
--
ALTER TABLE `statuses`
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
-- AUTO_INCREMENT для таблицы `polygons`
--
ALTER TABLE `polygons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
