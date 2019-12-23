-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 28 2018 г., 03:55
-- Версия сервера: 5.5.57-0ubuntu0.14.04.1
-- Версия PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `marykay`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '12345678'),
(2, 'Admin2', 'admin2@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `phone` varchar(15) NOT NULL,
    `product_id` int(11) NOT NULL,
    `title` varchar(100) NOT NULL,
    `count` int(5) NOT NULL,
    `comments` text NOT NULL,
    `user_id` int(11) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `Orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `id_product`, `title`, `count`, `comments`,`user_id`) VALUES
    (1, 'Ansar', 'ansar@mail.ru', '87777777777', 1, 'Lipstick', 5, 'Blue',1),
    (2, 'A', 'a@b.kz', '123456789', 6, 'P', 3, 'Red',2);

-- --------------------------------------------------------

--
-- Структура таблицы `Products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
    `cost` varchar(10) NOT NULL,
    `photo` varchar(10000) NOT NULL
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;


--
-- Дамп данных таблицы `Products`
--


INSERT INTO `products` (`id`, `title`, `cost`, `photo`) VALUES
    (1, 'Lipstick', '5000', 'q1.jpg'),
    (2, 'Perfume', '10000', 'q2.jpg'),
    (3, 'Powder', '5500', 'q4.jpg'),
    (6, 'P', '12000', 'q2.jpg');

-- --------------------------------------------------------



-- --------------------------------------------------------






/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
