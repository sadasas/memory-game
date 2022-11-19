USE `Memory-Game`;

CREATE TABLE `User` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar (100),
	`password` varchar (100),
	PRIMARY KEY (`id`)
);


INSERT INTO `user` (`id`,`username`,`password`) VALUES (1,'admin','admin');
