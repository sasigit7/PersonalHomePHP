
--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL auto_increment,
  `photograph_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `photograph_id` (`photograph_id`)
) AUTO_INCREMENT=7;

--
-- Dumping data for table `comments`
--
INSERT INTO `comments` VALUES (1,1,'2009-01-01 11:30:39','Mike','I love this picture!'),(5,5,'2009-01-01 20:46:39','Doug','Pretty flowers.'),(6,5,'2009-01-01 21:08:58','Mary','I like them too.');

--
-- Table structure for table `photographs`
--

DROP TABLE IF EXISTS `photographs`;
CREATE TABLE `photographs` (
  `id` int(11) NOT NULL auto_increment,
  `filename` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=9;

--
-- Dumping data for table `photographs`
--
INSERT INTO `photographs` VALUES (1,'bamboo.jpg','image/jpeg',265437,'Bamboo'),(5,'flowers.jpg','image/jpeg',394552,'Flowers'),(4,'roof.jpg','image/jpeg',322870,'Roof'),(6,'buddhas.jpg','image/jpeg',261152,'Buddhas'),(7,'wall.jpg','image/jpeg',369592,'Wall'),(8,'wood.jpg','image/jpeg',353050,'Wood');

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) AUTO_INCREMENT=4;

--
-- Dumping data for table `users`
--
INSERT INTO `users` VALUES (1,'mhussy','secretpwd','Mike','hussy');
