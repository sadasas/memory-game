CREATE DATABASE IF NOT EXISTS `Memory-Game` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Memory-Game`;

CREATE TABLE `TopScore` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar (100),
	`move` int (100),
	`time` int (255),
 PRIMARY KEY (`id`)
);



