-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 24 2019 г., 11:55
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dbgame`
--

CREATE TABLE `dbgame` (
  `id` int(12) NOT NULL,
  `gameName` text NOT NULL,
  `description` text NOT NULL,
  `linkName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dbgame`
--

INSERT INTO `dbgame` (`id`, `gameName`, `description`, `linkName`) VALUES
(3, 'GTA 5', 'Классная игра', 'GTA 5.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `dbmenu`
--

CREATE TABLE `dbmenu` (
  `id` int(20) NOT NULL,
  `link` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dbmenu`
--

INSERT INTO `dbmenu` (`id`, `link`, `name`, `description`) VALUES
(1, 'index.php', 'Главная', 'Главная страница на сайте'),
(2, '/news.php', 'Новости', 'Страница с новостями'),
(3, '/price.php', 'Цены', 'Страница с прайсом'),
(4, '/aboutUs.php', 'О Нас', 'Страница с информацией о клубе');

-- --------------------------------------------------------

--
-- Структура таблицы `footermain`
--

CREATE TABLE `footermain` (
  `id` int(11) NOT NULL,
  `iconLink` text NOT NULL,
  `iconAlt` text NOT NULL,
  `description` text NOT NULL,
  `infoDescription` text NOT NULL,
  `infoLink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `footermain`
--

INSERT INTO `footermain` (`id`, `iconLink`, `iconAlt`, `description`, `infoDescription`, `infoLink`) VALUES
(1, 'phone.png', 'Телефон', 'ТЕЛЕФОН', 'tel:+7(977)-271-87-34', '8(977)-271-87-34'),
(2, 'email.png', 'Почта', 'ПОЧТА', 'mailto:art20022712@mail.ru?subject=Shelter', 'art20022712@mail.ru'),
(3, 'vk.png', 'ВК', 'ВКОНТАКТЕ', 'https://vk.com/id317218875', 'Напишите Нам');

-- --------------------------------------------------------

--
-- Структура таблицы `price`
--

CREATE TABLE `price` (
  `id` int(20) NOT NULL,
  `PackageName` text NOT NULL,
  `OpeningHours` text NOT NULL,
  `Cost` int(20) NOT NULL,
  `iconLink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `price`
--

INSERT INTO `price` (`id`, `PackageName`, `OpeningHours`, `Cost`, `iconLink`) VALUES
(1, 'Час Игры', '08:00-14:00', 80, '1.png'),
(2, 'Час Игры', '14:00-08:00', 100, '1.png'),
(3, '3 часа', 'Любое время', 240, '1.png'),
(4, '5 часов', 'Любое время', 400, '1.png'),
(5, 'Пакет \"Ночь\"', '23:00-08:00', 550, '2.png');

-- --------------------------------------------------------

--
-- Структура таблицы `priceicon`
--

CREATE TABLE `priceicon` (
  `id` int(20) NOT NULL,
  `iconName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `priceicon`
--

INSERT INTO `priceicon` (`id`, `iconName`) VALUES
(2, '1.png'),
(3, '2.png');

-- --------------------------------------------------------

--
-- Структура таблицы `pricelist`
--

CREATE TABLE `pricelist` (
  `id` int(20) NOT NULL,
  `imageLink` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pricelist`
--

INSERT INTO `pricelist` (`id`, `imageLink`) VALUES
(1, 'priceList.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `sighn`
--

CREATE TABLE `sighn` (
  `id` int(20) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sighn`
--

INSERT INTO `sighn` (`id`, `login`, `password`) VALUES
(1, 'Admin', '$2y$10$UYAn9vcY593KDEWWh4QZ0.Ov7IUK82.0jTOsiQHpPtU00W/Jp/Hzi');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dbgame`
--
ALTER TABLE `dbgame`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dbmenu`
--
ALTER TABLE `dbmenu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `footermain`
--
ALTER TABLE `footermain`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `priceicon`
--
ALTER TABLE `priceicon`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sighn`
--
ALTER TABLE `sighn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dbgame`
--
ALTER TABLE `dbgame`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `footermain`
--
ALTER TABLE `footermain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `price`
--
ALTER TABLE `price`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `priceicon`
--
ALTER TABLE `priceicon`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
