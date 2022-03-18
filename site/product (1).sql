-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 18 2022 г., 20:43
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
-- База данных: `product`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gipsophiles`
--

CREATE TABLE `gipsophiles` (
  `id` int NOT NULL,
  `photo` text NOT NULL,
  `name` text NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gipsophiles`
--

INSERT INTO `gipsophiles` (`id`, `photo`, `name`, `price`) VALUES
(1, 'images/Гипсофил1.jpg', 'Гипсофилы', '2500'),
(2, 'images/Гипсофил3.jpg', 'Гипсофилы', '4100'),
(3, 'images/Гипсофилы5.webp', 'Гипсофилы', '2800'),
(4, 'images/Гипсофил6.webp', 'Гипсофилы', '1900'),
(5, 'images/Гипсофил и Розы2.jpg', 'Гипсофилы и Розы', '3200'),
(6, 'images/Розы и Гипсофилы3.jpg', 'Гипсофилы и Розы', '3400'),
(7, 'images/Гипсофил3.jpg', 'Гипсофилы', '4500'),
(8, 'images/Гипсофил4.jpg', 'Гипсофилы', '3200'),
(9, 'images/Гипсофил7.jpg', 'Гипсофилы', '7000'),
(10, 'images/Розы и Гипсофилы3.jpg', 'Гипсофилы и Розы', '5250'),
(11, 'images/Гипсофил8.webp', 'Гипсофилы', '5210'),
(12, 'images/Гипсофилы и Розы9.jpg', 'Гипсофилы и Розы', '3900');

-- --------------------------------------------------------

--
-- Структура таблицы `peonies`
--

CREATE TABLE `peonies` (
  `id` int NOT NULL,
  `photo` text NOT NULL,
  `name` text NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `peonies`
--

INSERT INTO `peonies` (`id`, `photo`, `name`, `price`) VALUES
(1, 'images/Пион1.jpg', 'Пионы', '10000'),
(2, 'images/Пион2.jpg', 'Пионы', '9800'),
(3, 'images/Пион3.jpg', 'Пионы', '5500'),
(4, 'images/Пион4.jpg', 'Пионы', '6000'),
(5, 'images/Пион5.webp', 'Пионы', '5300'),
(6, 'images/Пион6.webp', 'Пионы', '2500'),
(7, 'images/Гипсофилы и Пионы5.webp', 'Пионы, Гортензии и Гипсофилы', '4700'),
(8, 'images/Розы и Пионы12.jpg', 'Пионы и Розы', '6600'),
(9, 'images/Пионы7.jpg', 'Пионы', '4900'),
(10, 'images/Пионы8.webp', 'Пионы, Гортензии и Розы', '4800'),
(11, 'images/Пионы9.webp', 'Пионы, Гортензии и Розы', '6300'),
(12, 'images/пионы10.jpg', 'Пионы и Розы', '7800');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `photo` text NOT NULL,
  `name` text NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `photo`, `name`, `price`) VALUES
(2, 'images/Пион1.jpg', '<b>Пион</b>', '7900'),
(3, 'images/Пион1.jpg', 'Розы', '8789'),
(4, 'images/Пион2.jpg', 'Пионы', '8900'),
(5, 'images/Гипсофил и Розы2.jpg', 'Гипсофилы и Розы', '3200'),
(6, 'images/Розы2.jpg', 'Розы', '1900'),
(7, 'images/Гипсофил3.jpg', 'Гипсофилы', '4500'),
(8, 'images/Гипсофил4.jpg', 'Гипсофилы', '3200'),
(9, 'images/Пион3.jpg', 'Пионы', '3809'),
(10, 'images/Розы и Гипсофилы3.jpg', 'Розы и Гипсофилы', '5250'),
(11, 'images/Пион4.jpg', 'Пионы и Ризы', '4780'),
(12, 'images/Розы4.jpg', 'Розы', '8000'),
(25, 'images/Пион4.jpg', 'Пион', '1500');

-- --------------------------------------------------------

--
-- Структура таблицы `roses`
--

CREATE TABLE `roses` (
  `id` int NOT NULL,
  `photo` text NOT NULL,
  `name` text NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roses`
--

INSERT INTO `roses` (`id`, `photo`, `name`, `price`) VALUES
(1, 'images/Розы1.jpg', 'Розы', '8990'),
(2, 'images/Розы2.jpg', 'Розы', '5400'),
(3, 'images/Розы и Гипсофилы3.jpg', 'Розы и Гипсофилы', '3200'),
(4, 'images/Розы4.jpg', 'Розы', '7505'),
(5, 'images/Розы5.webp', 'Розы', '1500'),
(6, 'images/Розы6.webp', 'Розы', '6200'),
(7, 'images/Розы7.webp', 'Розы', '6590'),
(8, 'images/Розы8.jpg', 'Розы и Гортензии', '6540'),
(9, 'images/Розы9.webp', 'Розы', '5100'),
(10, 'images/Розы10.webp', 'Розы', '3060'),
(11, 'images/Розы11.webp', 'Розы и Гортензии', '1900'),
(12, 'images/Розы и Пионы12.jpg', 'Розы и Пионы', '4200');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(191) NOT NULL,
  `login` varchar(50) NOT NULL,
  `pas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `pas`) VALUES
(1, 'Лена', 'Elena', '19112002'),
(2, 'Алина', 'Alina', '170802'),
(3, 'Виолетта', 'Viola', '7410'),
(6, 'Максим', 'Maks', '14756'),
(7, 'admin', 'admin', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gipsophiles`
--
ALTER TABLE `gipsophiles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `peonies`
--
ALTER TABLE `peonies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roses`
--
ALTER TABLE `roses`
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
-- AUTO_INCREMENT для таблицы `gipsophiles`
--
ALTER TABLE `gipsophiles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `peonies`
--
ALTER TABLE `peonies`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `roses`
--
ALTER TABLE `roses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
