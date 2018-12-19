# Sequel Pro dump
# Version 1176
# http://code.google.com/p/sequel-pro
#
# Host: localhost (MySQL 5.5.29)
# Database: CMC
# Generation Time: 2018-12-18 14:03:06 +0000
# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table events
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` (`id`,`title`,`date_ini`,`date_end`,`location`,`description`,`image`)
VALUES
	(2,'Evento Uno','2018-12-17 22:25:00','2018-12-17 23:55:00','Centro de convenciones','Ut posuere, ipsum non bibendum vulputate, est ante sollicitudin leo, ut porta nunc nisl et diam. Phasellus venenatis elit nec odio venenatis, a ultricies tortor suscipit. Sed lorem odio, venenatis ut iaculis a, luctus non felis. Donec rhoncus enim a tortor molestie sodales. Praesent suscipit ullamcorper velit et volutpat. Pellentesque laoreet arcu vitae sapien interdum, ac molestie est tincidunt. Cras mi justo, iaculis nec hendrerit in, imperdiet quis velit.','DSC_0146.jpg'),
	(3,'Evento Dos','2018-12-18 08:30:00','2018-12-18 10:00:00','Centro de convenciones','Etiam mattis urna massa, at elementum purus vulputate eget. Nunc iaculis erat a nunc pretium porttitor. Sed pulvinar auctor mauris, ac malesuada ex iaculis ut. Fusce tempus massa id mattis imperdiet. Curabitur auctor mauris ac felis rutrum aliquam. Morbi quis volutpat quam. Nulla libero velit, mattis ac malesuada quis, blandit vitae dui. Vivamus sed imperdiet purus.','DSC_0152.jpg');

/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table glossary
# ------------------------------------------------------------

DROP TABLE IF EXISTS `glossary`;

CREATE TABLE `glossary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(50) NOT NULL,
  `meaning` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

LOCK TABLES `glossary` WRITE;
/*!40000 ALTER TABLE `glossary` DISABLE KEYS */;
INSERT INTO `glossary` (`id`,`word`,`meaning`)
VALUES
	(1,'Palabra 1','In hac habitasse platea dictumst. Suspendisse nec purus sit amet enim iaculis aliquam. Ut porta dolor ut lacus imperdiet, ac bibendum velit ornare. Sed facilisis placerat neque, nec consectetur massa dapibus gravida. '),
	(3,'Palabra 2','Vivamus sed ultricies libero, at mattis enim. Vestibulum posuere sed augue id fringilla. Nullam vitae ligula nec ante commodo scelerisque vitae commodo neque. Curabitur eget mi laoreet, ultricies ligula at, finibus enim. '),
	(4,'Palabra','Fusce gravida posuere dolor, sed pharetra nisl commodo eget. Quisque vehicula molestie erat ut auctor. Vivamus libero turpis, rhoncus et nisi et, consectetur imperdiet mi. ');

/*!40000 ALTER TABLE `glossary` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `bulletin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`,`title`,`date`,`description`,`image`,`bulletin`)
VALUES
	(1,'Noticia 1','2018-11-29 00:00:00','Pellentesque semper, elit vel consectetur consequat, justo dolor vestibulum sem, id facilisis sapien lectus nec lorem. Nulla hendrerit sem ac nulla cursus, sed cursus lorem accumsan. Nunc eget felis laoreet, pulvinar ipsum non, molestie elit. Nam porta tempor lorem, eu scelerisque diam commodo sit amet.','DSC_0139.jpg','Guía de optimización de motores de búsqueda (SEO) de una página de Google.pdf'),
	(2,'Noticia 2','2018-12-11 00:00:00','Cras auctor maximus posuere. Suspendisse euismod metus quis lacus molestie posuere. Duis gravida diam eget ante pretium, in vulputate ligula pellentesque. Donec a pellentesque magna. Sed commodo dolor quis enim cursus suscipit. Aliquam convallis maximus egestas. Nulla facilisi. Morbi non varius erat.','atardecer3.jpg','Guía de optimización de motores de búsqueda (SEO) de una página de Google.pdf');

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table questions
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
  `response_update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_comment` tinyint(1) NOT NULL DEFAULT '0',
  `type` varchar(50) DEFAULT NULL,
  `subtype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` (`id`,`id_number`,`email`,`city`,`headq`,`full_name`,`question`,`question_date`,`response`,`source`,`response_date`,`response_update_date`,`is_comment`,`type`,`subtype`)
VALUES
	(70,'89898989','info@fidelsilva.com','Floridablanca','Norte','Fidel Silva','¿Qué cambios tendremos en la sede de Barranquilla?','2018-12-11 23:36:40','Párrafo de texto descriptivo de la sección: acá se cuenta que es una sección informativa con el objetivo de que los funcionarios tengan acceso a novedades del programa, quick-wins, entre otros','Una fuente','2018-12-11 23:37:27','2018-12-12 00:27:12',0,NULL,NULL),
	(71,'89898989','info@fidelsilva.com','Floridablanca','Norte','Fidel Silva','Me gusta que aliquam leo ex, rutrum aliquam venenatis et, porttitor in urna','2018-12-11 23:38:22','Aliquam leo ex, rutrum aliquam venenatis et, porttitor in urna. Vestibulum vel massa eget mauris lacinia sodales. Mauris et mi in lorem viverra pulvinar. Sed arcu quam, sodales sit amet elit a, egestas tempor tortor. Morbi et vestibulum massa.','Una fuente','2018-12-11 23:39:10','2018-12-12 00:27:50',1,'like',NULL),
	(72,'89898989','info@fidelsilva.com','Floridablanca','Norte','Fidel Silva','Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.','2018-12-11 23:38:41','Integer gravida eleifend purus venenatis dapibus. Mauris venenatis consequat sem. Nam orci ante, consectetur quis orci egestas, dictum volutpat elit. Proin a eros mi. Nunc interdum est et sem aliquam lacinia in id leo. Cras pulvinar dapibus nibh, viverra tempus purus lobortis et. Pellentesque interdum quam nec nulla dapibus consectetur.','Otra fuente','2018-12-12 11:16:51','2018-12-17 19:36:47',1,'occur','efficiency'),
	(73,'89898989','info@fidelsilva.com','Floridablanca','Norte','Fidel Silva','Me gusta que 2 aliquam leo ex, rutrum aliquam venenatis et, porttitor in urna','2018-12-11 23:44:39','Aliquam 2 leo ex, rutrum aliquam venenatis et, porttitor in urna. Vestibulum vel massa eget mauris lacinia sodales. Mauris et mi in lorem viverra pulvinar. Sed arcu quam, sodales sit amet elit a, egestas tempor tortor. Morbi et vestibulum massa.','Una fuente','2018-12-12 00:02:14','2018-12-12 00:07:52',1,'like',NULL),
	(74,'89898989','info@fidelsilva.com','Floridablanca','Nororiente','Fidel Silva','¿Qué cambios tendremos en la sede de Barranquilla?','2018-12-11 23:49:01','Párrafo de texto descriptivo de la sección: acá se cuenta que es una sección informativa con el objetivo de que los funcionarios tengan acceso a novedades del programa, quick-wins, entre otros','Otra fuente','2018-12-11 23:51:48','2018-12-11 23:52:25',0,NULL,NULL),
	(75,'89898989','info@fidelsilva.com','Floridablanca','Nororiente','Fidel Silva','¿Qué cambios tendremos en la sede de Barranquilla?','2018-12-11 23:49:01','Párrafo de texto descriptivo de la sección: acá se cuenta que es una sección informativa con el objetivo de que los funcionarios tengan acceso a novedades del programa, quick-wins, entre otros','Una fuente','2018-12-11 23:58:19','2018-12-11 23:59:08',0,NULL,NULL),
	(76,'89898989','info@fidelsilva.com','Floridablanca','Nororiente','Fidel Silva','sdavdf','2018-12-11 23:49:01',NULL,NULL,NULL,'0000-00-00 00:00:00',0,NULL,NULL),
	(77,'89898989','info@fidelsilva.com','Floridablanca','Norte','Fidel Silva','menos papel','2018-12-12 00:00:29','Suspendisse vitae rutrum ex. Praesent eget interdum mi. Quisque posuere viverra lectus. Vivamus vel molestie metus. Mauris laoreet malesuada magna. Nulla dictum neque vitae ex porttitor, ut vestibulum ligula posuere. Suspendisse potenti.','Otra fuente','2018-12-17 19:35:08','0000-00-00 00:00:00',1,'occur','paper'),
	(78,'89898989','info@fidelsilva.com','Floridablanca','Norte','Fidel Silva','Question front ?','2018-12-17 18:16:07',NULL,NULL,NULL,'0000-00-00 00:00:00',0,NULL,NULL),
	(79,'89898989','info@fidelsilva.com','Floridablanca','Norte','Fidel Silva','Aliquam leo ex, rutrum aliquam venenatis et, porttitor in urna. Vestibulum vel massa eget mauris lacinia sodales. Mauris et mi in lorem viverra pulvinar. Sed arcu quam, sodales sit amet elit a, egestas tempor tortor. Morbi et vestibulum massa.','2018-12-17 19:16:46','Integer gravida eleifend purus venenatis dapibus. Mauris venenatis consequat sem. Nam orci ante, consectetur quis orci egestas, dictum volutpat elit. Proin a eros mi. Nunc interdum est et sem aliquam lacinia in id leo. Cras pulvinar dapibus nibh, viverra tempus purus lobortis et. Pellentesque interdum quam nec nulla dapibus consectetur.','Una fuente','2018-12-17 19:38:54','0000-00-00 00:00:00',1,'occur','client');

/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`,`full_name`,`email`,`password`)
VALUES
	(1,'Webmaster','mail@mail.com','cf79ae6addba60ad018347359bd144d2');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;





/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
