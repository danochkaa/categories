-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 17 2021 г., 11:23
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `materials`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Architecture'),
(2, 'Car paint'),
(3, 'Fabric'),
(4, 'Food'),
(5, 'Glass'),
(6, 'Liquid'),
(7, 'Metal'),
(8, 'Nature'),
(9, 'Organic'),
(10, 'Others'),
(11, 'Plastic'),
(12, 'Special Effects'),
(13, 'Stone'),
(14, 'Wood');

-- --------------------------------------------------------

--
-- Структура таблицы `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `title` longtext NOT NULL,
  `category` mediumtext NOT NULL,
  `version` longtext NOT NULL,
  `img` longtext NOT NULL,
  `file` longtext NOT NULL,
  `description` longtext NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `item`
--

INSERT INTO `item` (`id`, `title`, `category`, `version`, `img`, `file`, `description`, `user_id`) VALUES
(17, 'sadasd', 'Others', 'A6', 'images/blogs/1556072257.jpg', 'asdasd', 'asd', 2),
(18, 'bgfsbfg', 'Others', 'A4', 'images/blogs/1556072284.jpg', 'asd', 'aadsd', 2),
(19, 'awe', 'Special Effects', 'A4', 'images/blogs/1556073245.jpg', 'fsdf', 'sdfsad', 1),
(20, 'asdsdga', 'Stone', 'B1', 'images/blogs/1556074491.jpg', 'sadf', 'asdf', 2),
(21, 'qweq', 'Special Effects', 'A6', 'images/blogs/1556074580.jpg', 'fda', 'sadfs', 2),
(22, 'fdj', 'Plastic', 'A6', 'images/blogs/1556074600.jpg', 'SFSAD', 'DAFAD', 2),
(23, 'Ñ‹Ð²Ð°', 'Architecture', 'A4', 'images/blogs/1556118416.jpg', 'Ñ†ÑƒÐ²Ð°', 'Ñ†ÑƒÐ°Ð¿ÐµÐºÑ€Ð½Ð³Ð¾', 1),
(24, 'KJSNAD', 'Architecture', 'A4', 'images/blogs/1556188309.jpg', 'asd', 'asd', 3),
(25, 'LJNASDJK', 'Architecture', 'B1', 'images/blogs/1556188363.jpg', 'asd', 'asd', 3),
(26, 'LASPD', 'Architecture', 'A3', 'images/blogs/1556188480.jpg', 'asd', 'asd', 1),
(27, ' < VMNXC', 'Architecture', 'A6', 'images/blogs/1556188522.jpg', 'asd', 'asd', 1),
(28, 'KONOXC', 'Architecture', 'B1', 'images/blogs/1556188547.jpg', 'asdas', 'asda', 1),
(29, 'KJASNDKUA', 'Others', 'A3', 'images/blogs/1556188606.jpg', 'qwe', 'qwe', 2),
(30, ':<POMSOID', 'Others', 'A4', 'images/blogs/1556188636.jpg', 'asd', 'sDF', 2),
(31, 'jbuydf', 'Stone', 'B1', 'images/blogs/1556188693.jpg', 'asd', 'ASD', 2),
(32, 'KHSBJHASD', 'Wood', 'A6', 'images/blogs/1556189551.jpg', 'fagsD', 'dsfSDF', 1),
(33, 'Sultan', 'Architecture', 'A6', 'images/blogs/1556190218.jpg', 'adfgsdfg', 'dfgadf', 4),
(34, 'isd', 'Car paint', 'A6', 'images/blogs/1556190525.jpg', 'asdasd', 'asdasdas', 1),
(35, 'AnimalsCare', 'Stone', 'A6', 'images/blogs/1570704756.png', 'Helloooo', 'asdsafsadf', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Dana', 'qwe', '056eafe7cf52220de2df36845b8ed170c67e23e3'),
(2, 'Ayaulym', 'aikowa2212', '056eafe7cf52220de2df36845b8ed170c67e23e3'),
(3, 'Some', 'asd', 'f10e2821bbbea527ea02200352313bc059445190'),
(4, 'Sultan', 'sula', '056eafe7cf52220de2df36845b8ed170c67e23e3'),
(5, 'ddana', 'yelaman.ui@gmail.com', 'ff3ccee4bd57ac6982dd4c5ad5b75c70aea154ff'),
(6, 'dana', 'ddddddd@mail.ru', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37');

-- --------------------------------------------------------

--
-- Структура таблицы `version`
--

CREATE TABLE `version` (
  `id` int(11) NOT NULL,
  `version` longtext NOT NULL,
  `short` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `version`
--

INSERT INTO `version` (`id`, `version`, `short`) VALUES
(1, 'Alpha 3(and before)', 'A3'),
(2, 'Alpha 4(and above)', 'A4'),
(3, 'Alpha 6(and above)', 'A6'),
(4, 'Beta 1(and above)', 'B1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `version`
--
ALTER TABLE `version`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `version`
--
ALTER TABLE `version`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
