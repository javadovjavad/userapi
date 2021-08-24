CREATE TABLE `table1` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `surname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `table1` (`id`, `name`, `surname`) VALUES
(1, 'John', 'Dawl'),
(2, 'Pol', 'Belmando');

ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;