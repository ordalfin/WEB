SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` varchar(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `major` varchar(3) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;