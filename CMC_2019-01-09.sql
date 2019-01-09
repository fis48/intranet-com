# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.7.23)
# Base de datos: CMC
# Tiempo de Generación: 2019-01-09 12:35:24 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT 'event_title',
  `date_ini` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_end` timestamp NULL DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;

INSERT INTO `events` (`id`, `title`, `date_ini`, `date_end`, `location`, `description`, `image`)
VALUES
	(2,'Evento Uno','2018-12-17 22:25:00','2018-12-17 23:55:00','Centro de convenciones','Ut posuere, ipsum non bibendum vulputate, est ante sollicitudin leo, ut porta nunc nisl et diam. Phasellus venenatis elit nec odio venenatis, a ultricies tortor suscipit. Sed lorem odio, venenatis ut iaculis a, luctus non felis. Donec rhoncus enim a tortor molestie sodales. Praesent suscipit ullamcorper velit et volutpat. Pellentesque laoreet arcu vitae sapien interdum, ac molestie est tincidunt. Cras mi justo, iaculis nec hendrerit in, imperdiet quis velit.','DSC_0146.jpg'),
	(3,'Evento Dos','2018-12-18 08:30:00','2018-12-18 10:00:00','Centro de convenciones','Etiam mattis urna massa, at elementum purus vulputate eget. Nunc iaculis erat a nunc pretium porttitor. Sed pulvinar auctor mauris, ac malesuada ex iaculis ut. Fusce tempus massa id mattis imperdiet. Curabitur auctor mauris ac felis rutrum aliquam. Morbi quis volutpat quam. Nulla libero velit, mattis ac malesuada quis, blandit vitae dui. Vivamus sed imperdiet purus.','DSC_0152.jpg');

/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla glossary
# ------------------------------------------------------------

DROP TABLE IF EXISTS `glossary`;

CREATE TABLE `glossary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(50) NOT NULL,
  `meaning` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `glossary` WRITE;
/*!40000 ALTER TABLE `glossary` DISABLE KEYS */;

INSERT INTO `glossary` (`id`, `word`, `meaning`)
VALUES
	(1,'Palabra 1','In hac habitasse platea dictumst. Suspendisse nec purus sit amet enim iaculis aliquam. Ut porta dolor ut lacus imperdiet, ac bibendum velit ornare. Sed facilisis placerat neque, nec consectetur massa dapibus gravida. '),
	(3,'Palabra 2','Vivamus sed ultricies libero, at mattis enim. Vestibulum posuere sed augue id fringilla. Nullam vitae ligula nec ante commodo scelerisque vitae commodo neque. Curabitur eget mi laoreet, ultricies ligula at, finibus enim. '),
	(4,'Palabra','Fusce gravida posuere dolor, sed pharetra nisl commodo eget. Quisque vehicula molestie erat ut auctor. Vivamus libero turpis, rhoncus et nisi et, consectetur imperdiet mi. '),
	(5,'Palabra 3',' In hac habitasse platea dictumst. Donec vehicula iaculis massa eu vehicula. Phasellus hendrerit felis ut egestas porta. Vestibulum fringilla imperdiet maximus.            ');

/*!40000 ALTER TABLE `glossary` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `title`, `date`, `description`, `image`, `body`)
VALUES
	(6,'Boletín Uno','2018-12-18 00:00:00','Fusce id urna quam. Pellentesque vel sagittis magna, ut semper ante. Morbi sit amet leo at justo lobortis tempor vel vel magna. Donec felis leo, elementum a porttitor vel, vestibulum ut odio. Aenean auctor, lectus nec molestie lobortis, ipsum ipsum convallis velit, nec eleifend erat purus nec ante. Vivamus tincidunt placerat sollicitudin.','/news/DSC_0173.jpg','<figure><img src=\"/news/DSC_0173.jpg\" data-image=\"sjllmys7sunb\"></figure><h1>Fusce id urna quam</h1><p>Fusce id urna quam. Pellentesque vel sagittis magna, ut semper ante. Morbi sit amet leo at justo lobortis tempor vel vel magna. Donec felis leo, elementum a porttitor vel, vestibulum ut odio. Aenean auctor, lectus nec molestie lobortis, ipsum ipsum convallis velit, nec eleifend erat purus nec ante. Vivamus tincidunt placerat sollicitudin. Maecenas purus tortor, eleifend ac eleifend sit amet, tincidunt vitae ligula. Aliquam ut ornare magna. Donec odio neque, laoreet fermentum vestibulum iaculis, elementum vitae ligula. Nunc cursus est quis tortor varius, non lobortis odio dapibus.</p>\r\n<p>Donec consequat ultricies consequat. Praesent tortor est, tincidunt ac lectus blandit, auctor vestibulum ex. Pellentesque semper porta ante eget commodo. Fusce at posuere ipsum, id dictum justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam id odio magna. Mauris ac risus dictum, ultrices neque sit amet, rhoncus velit. Duis at turpis id ligula finibus porta in sed libero.</p>\r\n<h2>Maecenas vel nisi tortor.</h2><p>Maecenas vel nisi tortor. Donec non auctor massa. Curabitur bibendum lacus in ipsum viverra, et varius urna pretium. Phasellus in erat ut ipsum euismod condimentum non a diam. Vestibulum nisi tortor, tempor vel tincidunt vitae, dictum a ipsum. Etiam mollis massa finibus venenatis vestibulum. Proin in nibh at nulla placerat tincidunt in congue nisi. Vestibulum venenatis nec enim eu accumsan. Sed tristique odio odio. Etiam interdum justo non neque molestie, ut pulvinar mi feugiat. Nunc sit amet maximus dui. Donec a diam aliquam, convallis erat a, posuere leo. In gravida egestas justo, vitae pulvinar velit placerat ut. Integer consectetur lectus sit amet nisl faucibus ullamcorper sed et magna.</p>\r\n<p>Mauris interdum augue sit amet placerat commodo. Nam vel lacinia sem, sit amet iaculis libero. Vestibulum dapibus nunc risus, suscipit feugiat diam bibendum et. Morbi sed urna et mauris feugiat ullamcorper. Ut ultrices sollicitudin eleifend. Praesent semper dolor non laoreet ullamcorper. Nunc facilisis dolor vel faucibus eleifend. Maecenas non pharetra lacus. Integer eget accumsan ante. Duis tempus, nulla sed dictum vestibulum, nunc felis ultrices lectus, cursus dapibus ipsum ipsum bibendum quam.</p>\r\n<p></p>');

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `title`, `description`, `image`, `body`)
VALUES
	(3,'Proyecto 1','Praesent quis imperdiet mauris. Nullam ornare mattis facilisis. In id ex vitae arcu sagittis faucibus id quis sem. Curabitur in est sed mauris egestas feugiat in nec leo. Phasellus vel nisi mauris. Suspendisse pharetra et nibh nec consectetur. Fusce ornare feugiat ultrices. Mauris lobortis ut justo non lobortis. Maecenas vestibulum felis id auctor lacinia. Curabitur tempus turpis magna, non pretium eros vehicula ut. Curabitur convallis lacinia tortor at volutpat. Nullam pretium venenatis urna eget tincidunt. Donec et commodo est.','francesco-gallarotti-2497.jpg',''),
	(4,'Proyecto 2',' Quisque hendrerit consequat risus aliquam feugiat. Duis laoreet elit ac erat malesuada tincidunt sed nec enim. Cras et purus risus. Nam in lorem eget erat venenatis pretium id sit amet nulla. Praesent commodo eros non scelerisque blandit. Maecenas eu sapien ornare, euismod mauris quis, tempor quam. Etiam consectetur sodales quam ut condimentum. Aenean cursus eros at consectetur molestie. Cras tempus mollis nisl ac ultrices. Duis hendrerit tempor placerat. Donec pretium interdum molestie.','levi-saunders-71726.jpg','');

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla questions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `headq` varchar(100) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `question` text NOT NULL,
  `question_date` timestamp NULL DEFAULT NULL,
  `response` text,
  `source` varchar(255) DEFAULT NULL,
  `response_date` timestamp NULL DEFAULT NULL,
  `response_update_date` timestamp NULL DEFAULT NULL,
  `is_comment` tinyint(1) NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(50) DEFAULT NULL,
  `subtype` varchar(50) DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;

INSERT INTO `questions` (`id`, `id_number`, `email`, `city`, `headq`, `full_name`, `question`, `question_date`, `response`, `source`, `response_date`, `response_update_date`, `is_comment`, `is_admin`, `type`, `subtype`, `is_public`)
VALUES
	(85,'88888666666','info@fidelsilva.com','Bucaramanga','Sur','Pregunta admin ?','Admin aenean eget purus et justo auctor rutrum. Fusce sapien quam, finibus vel massa ut, ultricies tempus quam. Mauris vestibulum vehicula massa, sed fermentum metus egestas vehicula ?','2018-12-22 13:07:43',NULL,NULL,NULL,NULL,0,1,NULL,NULL,0),
	(86,'88888666666','mail@mail.com','Bucaramanga','Sur','Pregunta Front ?','Front aenean eget purus et justo auctor rutrum ?','2018-12-22 13:08:31','Respuesta front sapien quam, finibus vel massa ut, ultricies tempus quam. Mauris vestibulum vehicula massa, sed fermentum metus egestas vehicula.','Una Fuente','2018-12-22 13:10:50',NULL,0,0,NULL,NULL,1),
	(87,'88888666666','info@fidelsilva.com','','sede','Fidel Silva','Etiam sed velit ultrices, congue neque id, rhoncus augue. Sed nec leo turpis?','2018-12-22 14:58:30',NULL,NULL,NULL,NULL,0,0,NULL,NULL,0),
	(97,'88888666666','info@fidelsilva.com','','sede','Fidel Silva','Edición pregunta Javier?','2019-01-08 14:42:16','respuesta javier','Una Fuente','2019-01-08 14:44:04',NULL,0,0,NULL,NULL,1),
	(98,'88888666666','info@fidelsilva.com','Bucaramanga','Sur','Fidel Silva','\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel vehicula neque. Cras nec tortor ut quam dictum efficitur vel vel libero. Aenean scelerisque at magna a commodo. Etiam ultricies elit eu posuere pellentesque. Aliquam efficitur nunc ut nunc convallis auctor. ','2019-01-09 06:56:03',NULL,NULL,NULL,NULL,1,0,'like',NULL,0);

/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `full_name`, `email`, `password`)
VALUES
	(1,'Webmaster','mail@mail.com','cf79ae6addba60ad018347359bd144d2');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
