-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 25 2022 г., 21:30
-- Версия сервера: 8.0.24
-- Версия PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_good` int NOT NULL,
  `price` double NOT NULL,
  `is_in_order` tinyint NOT NULL DEFAULT '0',
  `id_order` tinyint DEFAULT NULL,
  `amount` int UNSIGNED NOT NULL DEFAULT '0',
  `good_title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `id_user`, `id_good`, `price`, `is_in_order`, `id_order`, `amount`, `good_title`) VALUES
(76, 999, 1, 2, 0, NULL, 1, 'Открытка №1');

-- --------------------------------------------------------

--
-- Структура таблицы `brand`
--

CREATE TABLE `brand` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `brand`
--

INSERT INTO `brand` (`id`, `title`, `description`) VALUES
(1, 'Бренд №1', 'Описание бренда №1'),
(2, 'Бренд №2', 'Описание бренда №2');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_category` int NOT NULL,
  `status` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `parent_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_category`, `status`, `name`, `parent_id`) VALUES
(1, 1, 'Категория №1', 0),
(2, 1, 'Категория №2', 0),
(3, 1, 'Категория №3', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id_good` int NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `price` double NOT NULL DEFAULT '0',
  `id_category` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id_order` int NOT NULL,
  `id_user` int NOT NULL,
  `amount` double NOT NULL,
  `datetime_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_order_status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id_order`, `id_user`, `amount`, `datetime_create`, `id_order_status`) VALUES
(12, 1, 256.43, '2021-01-11 15:18:31', 1),
(13, 999, 1145.95, '2021-01-11 15:21:21', 1),
(14, 999, 2546.45, '2021-01-11 15:26:06', 1),
(15, 999, 512.15, '2021-01-11 15:36:18', 1),
(16, 999, 2546.45, '2021-01-11 15:45:48', 1),
(17, 1, 512.15, '2021-01-11 15:51:51', 1),
(18, 1000, 8151.5, '2022-01-16 13:38:07', 1),
(19, 1001, 5, '2022-01-16 17:25:14', 1),
(20, 1002, 4, '2022-01-16 17:39:40', 1),
(21, 1003, 5, '2022-01-16 17:41:43', 1),
(22, 1004, 15, '2022-01-16 17:42:30', 1),
(23, 1005, 7, '2022-01-16 18:53:42', 1),
(24, 1006, 26, '2022-01-16 18:56:18', 1),
(25, 1001, 18, '2022-01-16 18:59:26', 1),
(26, 1007, 43, '2022-01-16 19:10:17', 1),
(27, 1001, 48, '2022-01-16 19:15:20', 1),
(28, 1008, 29, '2022-01-16 19:17:11', 1),
(29, 1006, 20, '2022-01-16 19:37:29', 1),
(30, 1009, 26, '2022-01-16 19:49:01', 1),
(31, 1001, 33, '2022-01-16 19:54:44', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `ord_id` int UNSIGNED NOT NULL,
  `item_id` int UNSIGNED NOT NULL,
  `amount` int UNSIGNED NOT NULL,
  `notes` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`ord_id`, `item_id`, `amount`, `notes`, `price`) VALUES
(12, 24, 1, '', 256.43),
(13, 25, 1, '', 1145.95),
(14, 26, 1, '', 2546.45),
(15, 27, 1, '', 512.15),
(16, 28, 1, '', 2546.45),
(17, 30, 1, '', 512.15),
(18, 31, 3, '', 2546.45),
(18, 32, 1, '', 512.15),
(19, 36, 1, '', 3),
(19, 38, 1, '', 2),
(20, 41, 1, '', 2),
(20, 42, 1, '', 2),
(21, 43, 1, '', 2),
(21, 44, 1, '', 3),
(22, 45, 2, '', 2),
(22, 46, 3, '', 2),
(22, 47, 1, '', 5),
(23, 50, 1, '', 2),
(23, 51, 1, '', 5),
(24, 52, 5, '', 2),
(24, 53, 4, '', 4),
(25, 56, 3, '', 5),
(25, 57, 1, '', 3),
(26, 59, 5, '', 3),
(26, 60, 4, '', 7),
(27, 61, 4, '', 3),
(27, 62, 6, '', 6),
(28, 63, 1, '', 2),
(28, 64, 3, '', 4),
(28, 65, 3, '', 5),
(29, 66, 3, '', 3),
(29, 67, 1, '', 7),
(29, 68, 1, '', 4),
(30, 70, 3, '', 2),
(30, 71, 4, '', 5),
(31, 72, 3, '', 5),
(31, 73, 1, '', 3),
(31, 74, 3, '', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `order_status`
--

CREATE TABLE `order_status` (
  `id_order_status` int DEFAULT NULL,
  `order_status_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `order_status`
--

INSERT INTO `order_status` (`id_order_status`, `order_status_name`) VALUES
(1, 'Оформлен'),
(2, 'Подтвержден'),
(3, 'Обрабатывается'),
(4, 'Отправлен'),
(5, 'Получен'),
(6, 'Задерживается'),
(7, 'Отменен'),
(8, 'Утерян');

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `category_id` int NOT NULL,
  `title` varchar(256) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `short_description` text NOT NULL,
  `brand_id` int NOT NULL,
  `price` double NOT NULL,
  `availability` int NOT NULL,
  `discount` tinyint NOT NULL,
  `is_new` tinyint NOT NULL,
  `is_recommended` tinyint NOT NULL,
  `reviews_count` int NOT NULL,
  `reviews_score` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `photo`, `description`, `short_description`, `brand_id`, `price`, `availability`, `discount`, `is_new`, `is_recommended`, `reviews_count`, `reviews_score`) VALUES
(1, 1, 'Открытка №1', '1', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 1, 2, 10, 0, 1, 1, 6, 5),
(2, 2, 'Открытка №2', '2', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 2, 3, 5, 10, 0, 1, 12, 4),
(3, 1, 'Открытка №3', '3', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 1, 4, 85, 25, 0, 0, 11, 3),
(4, 3, 'Открытка №4', '4', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 2, 5, 12, 10, 1, 1, 9, 4),
(5, 2, 'Открытка №5', '5', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 1, 2, 6, 0, 1, 1, 12, 5),
(6, 1, 'Открытка №6', '6', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 2, 4, 2, 0, 1, 1, 65, 5),
(7, 2, 'Открытка №7', '7', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 2, 5, 42, 5, 0, 0, 22, 4),
(8, 3, 'Открытка №8', '8', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 1, 3, 17, 0, 0, 1, 84, 3),
(9, 3, 'Открытка №9', '9', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 1, 3, 9, 0, 1, 1, 34, 4),
(10, 1, 'Открытка №10', '10', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 1, 5, 111, 0, 1, 0, 73, 5),
(11, 3, 'Открытка №11', '11', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 1, 5, 21, 0, 1, 1, 27, 5),
(12, 2, 'Открытка №12', '12', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 2, 5, 11, 5, 1, 1, 63, 4),
(13, 1, 'Открытка №13', '13', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 1, 6, 55, 0, 1, 0, 125, 2),
(14, 3, 'Открытка №14', '14', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 'Ночь, знаменующая приход Нового года, это самый теплый, душевный, радостный праздник. Он пропитан волшебством, все ожидают ярких событий, прихода гостей, позитивных эмоций.', 2, 7, 33, 0, 0, 0, 64, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

CREATE TABLE `role` (
  `id_role` int NOT NULL,
  `role_name` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `role`
--

INSERT INTO `role` (`id_role`, `role_name`) VALUES
(1, 'Обычный пользователь'),
(999, 'Демо пользователь'),
(777, 'Администратор');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `login` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_last_action` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `user_last_action`) VALUES
(1, 'user1', 'user1', 'd9f1eeb7e757b522c74cfa25e51e9c4224c9e15e52afc47c225b757e7bee1f9d', '2022-01-16 10:32:26'),
(2, 'user3', 'user3', '87b6321e18ef7de2a6df54a07fa7782992877af70a45fd6a2ed7fe81e1236b78', '2022-01-16 10:32:26'),
(999, 'demo', 'demo', '922e40a289c7deafaf8cabf7a2ec10ef68eb5140ac65ca14b86debdb49dbda32', '2022-01-16 10:32:26'),
(1001, '222', '222', 'dd4385932a3430c2ae59ca6e5633ebcbbcbe3365e6ac95ea2c0343a2395834dd', '2022-01-16 17:07:22'),
(1004, '66955', '666', '35e4bb1c8e765a768827c154c72b0eaffae0b27c451c728867a567e8c1bb4e53', '2022-01-16 17:42:00'),
(1005, '777', '777', '33cf6ddeabc043fa2001148852951c1ff1c1592588411002af340cbaedd6fc33', '2022-01-16 18:53:21'),
(1006, '123133', '111', '866107b7d994185ec121a8d91a15d896698d51a19d8a121ce581499d7b701668', '2022-01-16 18:55:46'),
(1007, '5465645', '123', '07b432d25170b469b57095ca269bc202202cb962ac59075b964b07152d234b70', '2022-01-16 19:09:53'),
(1008, '11111111111111111111', '321', 'afc5c85f031420d0deff505bfd3a1faccaf1a3dfb505ffed0d024130f58c5cfa', '2022-01-16 19:16:11'),
(1009, '111', '1234', '550de3138dbd63002cd40d25bdb9cd1881dc9bdb52d04dc20036dbd8313ed055', '2022-01-16 19:48:37');

-- --------------------------------------------------------

--
-- Структура таблицы `user_role`
--

CREATE TABLE `user_role` (
  `id_user_role` int NOT NULL,
  `id_user` int NOT NULL,
  `id_role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user_role`
--

INSERT INTO `user_role` (`id_user_role`, `id_user`, `id_role`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 999, 999);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brand`
--
ALTER TABLE `brand`
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD KEY `id_category` (`id_category`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_products_categories` (`category_id`),
  ADD KEY `FK_products_brand` (`brand_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_user_role`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT для таблицы `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1010;

--
-- AUTO_INCREMENT для таблицы `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id_user_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_products_brand` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`),
  ADD CONSTRAINT `FK_products_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
