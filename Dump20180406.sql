-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: 127.0.0.1    Database: yii_db
-- ------------------------------------------------------
-- Server version	5.6.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `content` text,
  `date` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `viwed` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'В центр Киева стянули две тысячи силовиков','Описание для статьи','В столице запланированы различные массовые мероприятия. Накануне киевские власти получили сразу несколько заявок на их проведение.\r\nНа службу в центре Киева заступили около двух тысяч полицейских и военнослужащих Национальной гвардии Украины. Они будут следить за правопорядком во время проведения запланированных массовых мероприятий.\r\nОб этом сообщает столичное упраление Нацполиции в воскресенье, 4 февраля.\r\n\"Сегодня согласно представленным в Киевскую горгосадминистрацию заявок запланировано несколько мероприятий, в которых примут участие киевляне и представители других регионов. Чтобы должным образом обеспечить безопасность участников и не допустить провокаций, за порядком следят полицейские и военнослужащие НГУ. Всего в центральной части города несут службу около двух тысяч правоохранителей\", – говорится в сообщении.','2018-02-04','1517766257_iam.jpg',2,1,1,25),(3,'Ukrainian Fashion Week, 2-й день. Онлайн показов','Описание Fashion Week','Первыми познакомиться с коллекциями украинских дизайнеров сезона осень-зима 2018-2019 можно, посмотрев онлайн-трасляцию показов на Корреспондент.net.\r\n \r\nВ Киеве стартовал Ukrainian Fashion Week, в воскресенье состоится второй день показов.\r\n \r\nВ  UFW примет участие более 50 украинских дизайнеров. В этом сезоне ожидают экспериментов с новыми форматами, дебютных показов и трендов осень-зима 2018/2019.','2018-02-04','1517766801_13814046_1764593077113908_6008064747249303771_n.jpg',NULL,NULL,NULL,4);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article_tag`
--

DROP TABLE IF EXISTS `article_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tag-article_article_id` (`article_id`),
  KEY `idx-tag_id` (`tag_id`),
  CONSTRAINT `fk-tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tag-article_article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_tag`
--

LOCK TABLES `article_tag` WRITE;
/*!40000 ALTER TABLE `article_tag` DISABLE KEYS */;
INSERT INTO `article_tag` VALUES (1,1,1),(2,1,2),(3,3,2),(4,3,1),(5,3,3);
/*!40000 ALTER TABLE `article_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Политика'),(2,'Экономика'),(3,'Жизнь'),(4,'Культура'),(21,'Технологии'),(22,'Технологии'),(23,'Технологии'),(24,'Технологии'),(25,'Технологии');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `article_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-post-user_id` (`user_id`),
  KEY `idx-article_id` (`article_id`),
  CONSTRAINT `fk-article_id` FOREIGN KEY (`article_id`) REFERENCES `article` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk-post-user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documents` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title_ua` varchar(256) NOT NULL,
  `title_ru` varchar(256) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `number` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-documents-number` (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES (1,'Дозвіл на виконання будівельних робіт','Разрешение на выполнение строительных работ','document_01.jpg',1),(2,'Сертифікат про введення в експлуатацію 3 черги будинку по вул. Чубинського, 4А','Сертификат о вводе в эксплуатацию 3 очереди дома по ул. Чубинского, 4А','document_02.jpg',2),(3,'Ліцензія Державної архітектурно-будівельної інспекції України 1','Лицензия Государственной архитектурно-строительной инспекции Украины 1','document_03.jpg',3),(4,'Ліцензія Державної архітектурно-будівельної інспекції України 2','Лицензия Государственной архитектурно-строительной инспекции Украины 2','document_04.jpg',4),(5,'Ліцензія Державної архітектурно-будівельної інспекції України 2...','Декларация о готовности объекта к эксплуатации 45 квартирного жилого дома','document_05.jpg',5),(6,'Декларація про готовність об\'єкта 149 кв. до експлуатації','Декларация о готовности объекта 149 кв. к эксплуатации','document_06.jpg',6),(7,'Декларація про готовність об\'єкта 162 кв. до експлуатації','Декларация о готовности объекта 162 кв. к эксплуатации','document_07.jpg',7),(8,'Декларація про готовність об\'єкта 242 кв. до експлуатації','Декларация о готовности объекта 242 кв. к эксплуатации','document_08.jpg',8);
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `image` varchar(128) DEFAULT NULL,
  `number` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-gallery-number` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1517740663),('m180204_101528_article',1517740665),('m180204_101551_category',1517740665),('m180204_101557_tag',1517740665),('m180204_101607_user',1517740665),('m180204_101639_comment',1517740665),('m180204_101658_article_tag',1517740723),('m180215_210555_add_date_column_to_comment_table',1518728858),('m180226_082359_add_about_column_to_user_table',1521487103),('m180320_072710_create_table_pluses',1522266229),('m180328_141751_create_table_documents',1522266286),('m180328_142021_create_table_gallery',1522266286),('m180403_181859_create_table_pagetexts',1522779876),('m180403_183606_create_table_phones',1522781102);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagetexts`
--

DROP TABLE IF EXISTS `pagetexts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pagetexts` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `head_ua` varchar(512) DEFAULT NULL,
  `head_ru` varchar(512) DEFAULT NULL,
  `subhead_ua` varchar(1024) DEFAULT NULL,
  `subhead_ru` varchar(1024) DEFAULT NULL,
  `descr_ua` text,
  `sdescr_ru` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagetexts`
--

LOCK TABLES `pagetexts` WRITE;
/*!40000 ALTER TABLE `pagetexts` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagetexts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phones` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title_ua` varchar(256) NOT NULL,
  `title_ru` varchar(256) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `link` varchar(32) NOT NULL,
  `number` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phones`
--

LOCK TABLES `phones` WRITE;
/*!40000 ALTER TABLE `phones` DISABLE KEYS */;
INSERT INTO `phones` VALUES (1,'Слюсар-сантехнік ЖЕО «Софія Київська» (цілодобово)','Слесарь-сантехник ЖЭО «София Киевская» (круглосуточно)','099 707 50 46','380997075046',1),(2,'Електрик ЖЕО «Софія Київська», Богдан','Электрик ЖЭО «София Киевская», Богдан','097 522 08 72','380975220872',2),(3,'Бухгалтерія ЖЕО «Софія Київська»','Бухгалтерия ЖЭО «София Киевская»','050 353 06 26','380503530626',3),(4,'Охорона ЖЕО «Софія Київська»','Охрана ЖЭО «София Киевская»','068 622 24 38','380686222438',4),(5,'Домофон, Ігор','Домофон, Игорь','099 311 25 37','380993112537',5),(6,'Аварійна ліфтів, будні','Аварийная лифтов, будние','044 452 92 28','380444529228',6),(7,'Аварійна ліфтів, святкові та вихідні дні','Аварийная лифтов, праздничные и выходные дни','093 366 90 01','380933669001',7),(8,'Пожежно-рятувальна служба, 101','Пожарно-спасательная служба, 101','04598 5 24 82','380459852482',8),(9,'Міліція, 102','Милиция, 102','04598 5 02 02','380459850202',9),(10,'Швидка медична допомога, 103','Скорая медицинская помощь, 103','04598 5 02 04','380459850204',10),(11,'Дитяча поліклініка','Детская поликлиника','04598 5 13 49','380459851349',11),(12,'Облгаз (прийомні дні: Вт, Чт)','Облгаз (приемные дни: Вт, Чт)','04598 4 36 00','380459843600',12);
/*!40000 ALTER TABLE `phones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pluses`
--

DROP TABLE IF EXISTS `pluses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pluses` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `title_ua` varchar(128) NOT NULL,
  `text_ua` varchar(512) NOT NULL,
  `title_ru` varchar(128) NOT NULL,
  `text_ru` varchar(512) NOT NULL,
  `image` varchar(128) DEFAULT NULL,
  `number` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idx-pluses-number` (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pluses`
--

LOCK TABLES `pluses` WRITE;
/*!40000 ALTER TABLE `pluses` DISABLE KEYS */;
INSERT INTO `pluses` VALUES (1,'Земля в приватній<br />власності','Земельна ділянка, де ведеться будівництво, знаходиться в приватній власності компанії, що гарантує надійність і безпеку Вашої покупки.','Земля в частной<br />собственности','Земельный участок, где ведется строительство, находится в частной собственности компании, что гарантирует надежность и безопасность Вашей покупки.','slider_01.jpg',1),(2,'Надійна охорона','Територія житлового комплексу охороняється цілодобово.','Надежная охрана','Территория жилого комплекса охраняется круглосуточно.','slider_02.jpg',2),(3,'Велика парковка','У нас багато місця для парковки, тому всі мешканці можуть комфортно розмістити свої машини.','Большая парковка','У нас много места для парковки, поэтому все жильцы могут комфортно разместить свои машины.','slider_03.jpg',3),(4,'Міські комунікації','Житловий комплекс підключений до міських комунікацій (світло, каналізація, вода)','Городские<br />коммуникации','Жилой комплекс подключен к городским коммуникациям (свет, канализация, вода)','slider_04.jpg',4),(5,'Цегляні будинки','Будинки в ЖК мають цегляні стіни товщиною 0,5, які володіють «ефектом термоса» - тут тепло взимку, і прохолодно влітку.','Кирпичные дома','Дома в ЖК имеют кирпичные стены толщиной 0,5, которые обладают «эффектом термоса» - здесь тепло зимой, и прохладно летом.','slider_05.jpg',5),(6,'Власна газова<br />котельня','У житловому комплексі сучасна, безпечна і комфортна система опалення.','Собственная газовая<br />котельная','В жилом комплексе современная, безопасная и комфортная система отопления.','slider_06.jpg',6),(7,'Різноманітність<br />планувань','Ви можете придбати житло на будь-який смак і бюджет площею від 31 до 80 кв.м','Разнообразие<br />планировок','Вы можете приобрести жилье на любой вкус и бюджет площадью от  31 до 80 кв.м','slider_07.jpg',7),(8,'Оформлення<br />документів 2500 грн.','Оформлення документів на право власності не зажадає від Вас значних додаткових витрат.','Оформление<br />документов 2500 грн.','Оформление документов на право собственности не потребует от Вас значительных дополнительных затрат.','slider_08.jpg',8),(9,'Iнфраструктура','На території ЖК вже працює близько 20 різних магазинів, кафе, салонів краси, аптека, і ін. Об\'єкти інфраструктури.','Инфраструктура','На территории ЖК уже работает около 20 различных магазинов, кафе, салонов красоты, аптека, и др. объекты инфраструктуры.','slider_09.jpg',9),(10,'Власний<br />домовик J','Концепція нашого ЖК - це справжній домашній затишок для кожної сім\'ї, саме тому тут оселився справжнісінький домовик, вірніше домовушку, Софія. Вона символ ЖК «Софія Київська», і Ви обов\'язково познайомитеся з нею, коли приїдете вибирати свою квартиру!','Собственный<br />домовой J','Концепция нашего ЖК – это настоящий домашний уют для каждой семьи, именно поэтому здесь поселился самый настоящий домовой, вернее домовушка, София. Она символ ЖК «София Киевская», и Вы обязательно познакомитесь с ней, когда приедете выбирать свою квартиру!','slider_10.jpg',10);
/*!40000 ALTER TABLE `pluses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tag`
--

LOCK TABLES `tag` WRITE;
/*!40000 ALTER TABLE `tag` DISABLE KEYS */;
INSERT INTO `tag` VALUES (1,'Киев'),(2,'Порошенко'),(3,'Кличко'),(4,'Зима'),(5,'2018');
/*!40000 ALTER TABLE `tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `isAdmin` int(11) DEFAULT '0',
  `photo` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Serj','s.nobelev@gmail.com','sixers',1,NULL,NULL),(3,'Serj2','s.nobelev2@gmail.com','123',0,NULL,NULL),(4,'Dan','sdgroup@gmail.com','$2y$13$7Ui8sVooKltX3Cgk7eBJ4.e/BOiqwsR0hKsiLhmKm.d6V0/aZSGTu',0,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-06 13:34:55
