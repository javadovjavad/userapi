CREATE TABLE IF NOT EXISTS `table1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `surname` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT IGNORE INTO `table1` (`id`, `name`, `surname`) VALUES
(1, 'John', 'Dawl'),
(2, 'Pol', 'Belmando');
