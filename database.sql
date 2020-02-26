-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 26 2020 г., 13:32
-- Версия сервера: 5.7.25-log
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project_php`
--

-- --------------------------------------------------------

--
-- Структура таблицы `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `fn` varchar(50) CHARACTER SET utf8 NOT NULL,
  `ln` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mn` varchar(50) CHARACTER SET utf8 NOT NULL,
  `place_birth` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date_birth` date NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8 NOT NULL,
  `about` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `application`
--

INSERT INTO `application` (`id`, `fn`, `ln`, `mn`, `place_birth`, `date_birth`, `email`, `phone`, `about`) VALUES
(1, 'Семёнов', 'Евгений', 'Александрович', 'Уфа', '1993-07-01', 'simonov.ev.al@gmail.com', '+79516798013', 'Тестирую форму'),
(2, 'Андреев', 'Василий', 'Петрович', 'Пенза', '1992-10-06', 'test@gmail.com', '+79516797777', 'Тестирую форму №2'),
(4, 'Белов', 'Геннадий', 'Васильевич', 'Петрозаводск', '1992-10-06', 'test@gmail.com', '+795167977', 'Еще немного тестов'),
(5, 'Гусева', 'Виктория', 'Александровна', 'Тверь', '1992-10-06', 'test@gmail.com', '+795167977', 'Нормальное описание'),
(6, 'Титов', 'Василий', 'Андреевич', 'Санкт-Петербург', '1982-07-14', 'test@gmail.com', '+79516797712', 'Странное описание'),
(7, 'Шишкин', 'Артём', 'Иванович', 'Санкт-Петербург', '1982-02-10', 'test@gmail.com', '', ''),
(8, 'Иванов', 'Василий', 'Григорьевич', 'Санкт-Петербург', '0000-00-00', 'test@gmail.com', '', ''),
(9, 'Веселов', 'Вячеслав', 'Олегович', 'Москва', '2020-02-06', 'test@gmail.com', '', ''),
(10, 'Казаков', 'Леонид', 'Павлович', 'Санкт-Петербург', '1976-05-24', 'test@gmail.com', '', ''),
(11, 'Шилов', 'Марк', 'Андреевич', 'Санкт-Петербург', '1987-11-01', 'test@gmail.com', '', ''),
(12, 'Артемьев', 'Николай', 'Борисович', 'Санкт-Петербург', '1999-07-01', 'test@gmail.com', '', ''),
(13, 'Зимин', 'Савелий', 'Филиппович', 'Владивосток', '1985-03-25', 'test@gmail.com', '', ''),
(14, 'Белозёров', 'Трофим ', 'Робертович', 'Одесса', '1993-05-15', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(20) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  `app` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `app`) VALUES
(1, 'root', 'root', 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `application`
--
ALTER TABLE `application`
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
-- AUTO_INCREMENT для таблицы `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
