DROP TABLE IF EXISTS `test`.`children`;
CREATE TABLE  `test`.`children` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `age` double NOT NULL,
  PRIMARY KEY (`id`)
);