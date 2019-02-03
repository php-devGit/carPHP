SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `patr` varchar(255) NOT NULL,
  `dostup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `surname`, `name`, `email`, `password`, `patr`, `dostup`) VALUES
(1, 'Админ', 'для', 'forsocials@mail.ru', '123456', 'отладки', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `adminId` int(11) NOT NULL,
  `cookie` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auth`
--

INSERT INTO `auth` (`id`, `adminId`, `cookie`) VALUES
(17, 1, 'af976ea92dd11c6b7cb92d560f4bab91'),

-- --------------------------------------------------------

--
-- Структура таблицы `body`
--

CREATE TABLE `body` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `body`
--

INSERT INTO `body` (`id`, `name`) VALUES
(1, 'Универсал'),
(2, 'Седан'),
(3, 'Хечбек');

-- --------------------------------------------------------

--
-- Структура таблицы `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `markId` int(11) NOT NULL,
  `bodyId` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `cost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `car`
--

INSERT INTO `car` (`id`, `markId`, `bodyId`, `model`, `cost`) VALUES
(3, 1, 3, 'I3 60 aH', '19588'),
(6, 2, 1, 'Astra', '2500');

-- --------------------------------------------------------

--
-- Структура таблицы `car_picture`
--

CREATE TABLE `car_picture` (
  `id` int(11) NOT NULL,
  `carId` int(11) NOT NULL,
  `pictureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `car_picture`
--

INSERT INTO `car_picture` (`id`, `carId`, `pictureId`) VALUES
(5, 3, 17),
(7, 3, 29),
(8, 3, 30);

-- --------------------------------------------------------

--
-- Структура таблицы `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `page` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `content`
--

INSERT INTO `content` (`id`, `content`, `page`) VALUES
(1, '<p class=\"pt-2 content\">\r\n<span>Вот уже 5 лет мы заботимся о Ваших автомобилях.</span>\r\n<span>На сегодняшний день автоцентр «Starcars» — это разветвленная диллерская сеть, представленная известными брендами -  KIA, NISSAN, MITSUBISHI, PEUGEOT.</span>\r\n<span class=\"pt-2\">Мы представляем весь спектр необходимых услуг:</span>\r\n<span>· Весь модельный ряд автомобилей от импортеров KIA, Nissan, Mitsubishi, Peugeot в наличии и под заказ</span>\r\n<span>· Бесплатный тест-драйв интересующего автомобиля</span>\r\n<span>· Обмен Вашего автомобиля на новый (услуга Trade In). Трейд ин - это прекрасная возможность обменять Ваш БУ автомобиль на новый с доплатой. Наши консультанты помогут оценить стоимость автомобиля и осуществить Вашу мечту - уехать из автосалона на новом автомобиле</span>\r\n<span>· Авто в кредит</span>\r\n<span>· Автострахование (КАСКО, ОСАГО)</span>\r\n<span>· Авто в лизинг</span>\r\n<span>· Специальные условия на покупку для Корпоративных клиентов</span>\r\n<span>· Гарантия на автомобили</span>\r\n<span>· Техническое обслуживание и ремонт любой сложности</span>\r\n<span>· Кузовные работы любой сложности</span>\r\n<span>· Оригинальные запасные части и аксессуары</span>\r\n<span>· Дополнительное оборудование и установка</span>\r\n<span>· Круглосуточная техническая поддержка</span>\r\n<span>· Для Ваших деток – игровая зона</span>\r\n<span>· А также горячий кофе в нашем кафе с доступом в интернет.</span>\r\n<span class=\"pt-2\">Профессионально подготовленные сотрудники Starcars:</span>\r\n<span>· Учтут все Ваши пожелания и помогут выбрать автомобиль именно в той комплектации, которая будет максимально соответствовать Вашим запросам</span>\r\n<span>· Проведут пробную поездку</span>\r\n<span>· Оценят Ваш прошлый автомобиль</span>\r\n<span>· Возьмут на себя оформление документов и продажу Вашего авто</span>\r\n<span>· Предложат максимально выгодные условия на покупку нового авто.</span>\r\n<span>Наши клиенты всегда могут воспользоваться услугами Сертифицированного Сервисного центра в Севастополе и центра Кузовного ремонта. Техническое обслуживание, диагностика и последующий ремонт производятся с использованием специализированного инструмента и согласно технологий производителя.</span>\r\n<span>Большой склад Оригинальных запчастей в наличии позволит существенно сократить сроки ремонта Вашего автомобиля.</span>\r\n<span>А уютное кафе и бесплатный доступ в интернет позволят провести время в нашем салоне с максимальным комфортом.</span>\r\n<span>Мы стараемся быть лучшими для Вас!</span>\r\n<span class=\"pt-2\">Компания «Starcars»</span>\r\n<span>г. Севастополь, ул. Вакуленчука, д. 47</span>\r\n<span>тел.: +7 (989) 80-10-200</span>\r\n</p>                                                                                ', 'About'),
(5, '<p class=\"pt-2 content\">\r\n<span>\r\nПромышленная фирма была основана Карлом Фридрихом Раппом в октябре 1916 года, официально компания BMW была зарегистрирована 20 июля 1917 года, но первоначально — как производитель авиационных двигателей, Bayerische Flugzeug-Werke. Округ Мюнхена — Milbertshofen был выбран потому, что он располагался близко от Flugmaschinenfabrik Густава Отто — немецкого производителя самолётов.\r\n\r\nС 1929 года бело-голубая круглая эмблема BMW, использующаяся и до сих пор (показана справа вверху), для удобства начинает трактоваться как самолётный винт на фоне голубого неба. Компания BMW утверждает, что белый и голубой цвета на логотипе взяты из флага Баварии.\r\n\r\n\r\nBMW 320i E46\r\n\r\nBMW Vision Dynamics\r\nВ 1916 году компания подписывает контракт на производство двигателей V12 для Австро-Венгрии. Нуждаясь в дополнительном финансировании, Рапп получает поддержку Камилло Кастильони и Макса Фрица, компания воссоздаётся как Bayerische Motoren Werke GmbH. Быстрый рост предприятия в 1917 году вызвал некоторые трудности, после чего компанию покинул Рапп, руководство перешло к австрийскому промышленнику Францу Йозефу Поппу, а в 1918 году компания была переименована в BMW AG.\r\n</span>\r\n</p>', 'AboutMark');

-- --------------------------------------------------------

--
-- Структура таблицы `mark`
--

CREATE TABLE `mark` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mark`
--

INSERT INTO `mark` (`id`, `name`) VALUES
(1, 'BMW'),
(2, 'Opel');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `patr` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `dateTestDrive` datetime NOT NULL,
  `carId` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `surname`, `name`, `patr`, `phone`, `dateTestDrive`, `carId`, `status`) VALUES
(1, 'name', 'name', 'name', '1', '2019-02-04 18:16:00', 3, 3),
(2, 'Захаров', 'Дмитрий', 'Анатольевич', '79789429067', '2019-02-07 21:02:00', 6, 1),
(3, 'Захаров', 'Дмитрий', 'Анатольевич', '79780349012', '2019-02-27 23:55:00', 6, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `picture`
--

INSERT INTO `picture` (`id`, `path`) VALUES
(0, 'car-header.jpg'),
(17, 'OpelGrandland.jpg'),
(27, 'OpelAstra.jpg'),
(29, 'BMWi3.jpg'),
(30, 'BMWi3-2.jpg'),
(32, 'AxcbtzcU1GFm.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `picture_content`
--

CREATE TABLE `picture_content` (
  `id` int(11) NOT NULL,
  `contentId` int(11) NOT NULL,
  `pictureId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminId` (`adminId`);

--
-- Индексы таблицы `body`
--
ALTER TABLE `body`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `markId` (`markId`),
  ADD KEY `bodyId` (`bodyId`);

--
-- Индексы таблицы `car_picture`
--
ALTER TABLE `car_picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carId` (`carId`),
  ADD KEY `pictureId` (`pictureId`);

--
-- Индексы таблицы `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carId` (`carId`);

--
-- Индексы таблицы `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `picture_content`
--
ALTER TABLE `picture_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contentId` (`contentId`),
  ADD KEY `pictureId` (`pictureId`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `body`
--
ALTER TABLE `body`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `car_picture`
--
ALTER TABLE `car_picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth`
--
ALTER TABLE `auth`
  ADD CONSTRAINT `auth_ibfk_1` FOREIGN KEY (`adminId`) REFERENCES `admin` (`id`);

--
-- Ограничения внешнего ключа таблицы `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`markId`) REFERENCES `mark` (`id`),
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`bodyId`) REFERENCES `body` (`id`);

--
-- Ограничения внешнего ключа таблицы `car_picture`
--
ALTER TABLE `car_picture`
  ADD CONSTRAINT `car_picture_ibfk_1` FOREIGN KEY (`carId`) REFERENCES `car` (`id`),
  ADD CONSTRAINT `car_picture_ibfk_2` FOREIGN KEY (`pictureId`) REFERENCES `picture` (`id`);

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`carId`) REFERENCES `car` (`id`);

--
-- Ограничения внешнего ключа таблицы `picture_content`
--
ALTER TABLE `picture_content`
  ADD CONSTRAINT `picture_content_ibfk_1` FOREIGN KEY (`contentId`) REFERENCES `content` (`id`),
  ADD CONSTRAINT `picture_content_ibfk_2` FOREIGN KEY (`pictureId`) REFERENCES `picture` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
