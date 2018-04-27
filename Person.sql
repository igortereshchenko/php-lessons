

--
-- База данных: `lesson`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Person`
--

CREATE TABLE IF NOT EXISTS `Person` (
  `Email` varchar(20) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `Person`
--
