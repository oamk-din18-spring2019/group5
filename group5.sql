-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: movies
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `actors`
--

DROP TABLE IF EXISTS `actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actors` (
  `actor_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  PRIMARY KEY (`actor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actors`
--

LOCK TABLES `actors` WRITE;
/*!40000 ALTER TABLE `actors` DISABLE KEYS */;
INSERT INTO `actors` VALUES (1,'Christian','Bale'),(2,'Keanu','Reeves'),(3,'Michael J.','Fox'),(4,'Kemal','Sunal'),(5,'Liam','Neeson'),(6,'Brad','Pitt'),(7,'Tom','Hanks'),(8,'Jim','Carrey');
/*!40000 ALTER TABLE `actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `actors_in_movie`
--

DROP TABLE IF EXISTS `actors_in_movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actors_in_movie` (
  `actor_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  PRIMARY KEY (`actor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actors_in_movie`
--

LOCK TABLES `actors_in_movie` WRITE;
/*!40000 ALTER TABLE `actors_in_movie` DISABLE KEYS */;
INSERT INTO `actors_in_movie` VALUES (1,1),(2,2),(3,3),(4,4),(5,5),(6,6),(7,7),(8,8);
/*!40000 ALTER TABLE `actors_in_movie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directors`
--

DROP TABLE IF EXISTS `directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `about` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directors`
--

LOCK TABLES `directors` WRITE;
/*!40000 ALTER TABLE `directors` DISABLE KEYS */;
/*!40000 ALTER TABLE `directors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movie_categories`
--

DROP TABLE IF EXISTS `movie_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movie_categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(32) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movie_categories`
--

LOCK TABLES `movie_categories` WRITE;
/*!40000 ALTER TABLE `movie_categories` DISABLE KEYS */;
INSERT INTO `movie_categories` VALUES (1,'Action'),(2,'Comedy'),(3,'Drama'),(4,'Romance');
/*!40000 ALTER TABLE `movie_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `img_url` varchar(225) NOT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `runtime` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `description` text,
  `link` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `title_UNIQUE` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,'Aquaman',2019,'../../images/aquaman.jpg','Fantasy',5,5,'From Warner Bros. Pictures and director James Wan comes an action-packed adventure that <br> spans the vast, visually breathtaking underwater world of the seven seas, \"Aquaman,\" <br> starring Jason Momoa in the title role. The film reveals the origin story of half-human, half-Atlantean <br>Arthur Curry and takes him on the journey of his lifetime--one that will not only force him to <br>face who he really is, but to discover if he is worthy of who he was born to be... a king. <br> <br>\nAge-rating: PG-13 <br> <br>\nGenres:Action & Adventure, Science Fiction & Fantasy <br> <br>\nMovie length: 143 minutes <br> <br>\nCast: <br>\nJason Momoa as Aquaman <br>\nAmber Heard as Mera <br>\nNicole Kidman as Atlanna <br>\nWillem Dafoe as Vulko <br>\nPatrick Wilson as Orm/Ocean Master <br>\nDolph Lundgren as Nereus \n','../Aquamans/show_aquamans'),(2,'Vikings',2013,'../../images/vikings.jpg','Historical',5,5,'Vikings is inspired by the sagas of Viking Ragnar Lothbrok, one of the best-known legendary Norse <br>heroes and notorious as the scourge of England and France. The show portrays Ragnar as a <br>farmer who rises to fame by successful raids into England, and eventually becomes a <br>Scandinavian King, with the support of his family and fellow warriors. In the later seasons, the <br>series follows the fortunes of his sons and their adventures in England, Scandinavia and the Mediterranean. <br>\n<br>Age-rating: <br> <br>\nGenres: Historical, drama and\nAction-adventure <br> <br>\nEpisodes: 5 seasons, 69 episodes <br> <br>\nEpisode length: 45 minutes <br> <br>\nCast: <br>\nTravis Fimmel as Ragnar Lothbrok <br>\nKatheryn Winnick as Lagertha <br>\nClive Standen as Rollo <br>\nJessalyn Gilsig as Siggy  <br>\nGustaf Skarsgård as Floki <br>\nGeorge Blagden as Athelstan <br>\nAlyssa Sutherland as Princess Aslaug <br> \nDonal Logue as King Horik <br>\nGabriel Byrne as Earl Haraldson <br>\n','http://[::1]/group5/index.php/vikings/show_vikings'),(3,'Avengers4',2019,'../../images/avengers4.jpg','Fantasy',5,5,'Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics superhero team <br>the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures. <br>It is the sequel to 2012´s The Avengers, 2015´s Avengers: Age of Ultron and 2018´s Avengers: <br> Infinity War, and the 22nd film in the Marvel Cinematic Universe. <br>\n<br>Age-rating: PG-13 <br><br>\nGenres: Action & Adventure, Drama, Science Fiction & Fantasy <br><br>\nMovie length: 181 minutes <br> <br>\nCast: <br>\nRobert Downey Jr. \nas Tony Stark/Iron Man <br>\nChris Evans \nas Steve Rogers/Captain America <br>\nMark Ruffalo \nas Bruce Banner/Hulk <br>\n\nChris Hemsworth \nas Thor <br>\nScarlett Johansson \nas Natasha Romanoff/Black Widow <br>\nJeremy Renner \nas Clint Barton/Hawkeye <br>\nDon Cheadle \nas James Rhodes/War Machine <br>\nPaul Rudd \nas Scott Lang/Ant-Man <br>\nBrie Larson \nas Carol Danvers/Captain Marvel <br>\nKaren Gillan \nas Nebula <br>\nDanai Gurira \nas Okoye <br>\nBradley Cooper \nas Rocket (voice) <br>\nJosh Brolin \nas Thanos <br>\nWinston Duke \nas M´Baku  <br>\nBenedict Wong \nas Wong <br>\nGwyneth Paltrow \nas Pepper Potts <br> \n','http://[::1]/group5/index.php/avengers4/show_avengers4'),(4,'Rush Hour',1998,'../../images/rushhour.jpg','Action',5,5,'Rush Hour is a 1998 American action comedy film directed by Brett Ratner and written by Jim Kouf <br> and Ross LaManna from a story by LaManna. It stars Jackie Chan and Chris Tucker as <br>mismatched police officers who must rescue the Chinese consul´s kidnapped daughter. Tom <br>Wilkinson, Chris Penn, and Elizabeth Peña play supporting roles. Released on September 18, <br>1998, the film grossed over $244 million worldwide.<br>\n<br>Age-rating: PG-13 <br> <br>\nGenres: Action, adventure and comedy <br><br>\nMovie length: 98 minutes <br> <br>\nCast:<br>\nJackie Chan as Detective Inspector Yang Naing Lee <br>\nChris Tucker as Detective James Carter <br>\nTom Wilkinson as Thomas Griffin / Juntao <br>\nTzi Ma as Consul Solon Han <br>\nKen Leung as Sang <br>\nElizabeth Peña as Detective Tania Johnson <br>\nMark Rolston as FBI Special Agent Warren Russ <br>\nRex Linn as FBI Agent Dan Whitney <br>\nChris Penn as Clive Cobb <br>\nPhilip Baker Hall as Captain William Diel <br>\nJulia Hsu as Soo Yung Han <br>\nJohn Hawkes as Stucky <br>\nClifton Powell as Luke <br>\nBarry Shabaka Henley as Bobby <br>\n','http://[::1]/group5/index.php/rushhour/show_rushhour'),(5,'Heneral Luna',2015,'../../images/heneral.jpg','Historical',5,5,'Set during the Philippine-American war, Heneral Luna follows the life of one of Philippine <br>history´s most brilliant military men, General Antonio Luna, as he tries to lead his <br>countrymen against colonial masters new and old, and to rise above their own raging <br>disputes to fulfill the promise of the Philippine Revolution.<br>\n<br>Age-rating: R<br><br>\nGenres: Action, Biography, History and War <br><br>\nMovie-length: 118 minutes<br> <br>\nCast: <br>\nJohn Arcilla as Antonio Luna <br>\nMon Confiado as Emilio Aguinaldo <br>\nArron Villaflor as Joven Hernando <br>\nJeffrey Quizon as Apolinario Mabini <br>\nPaulo Avelino as Gregorio del Pilar <br>\nJoem Bascon as Paco Román <br>\nArchie Alemania as Eduardo Rusca <br>\nArthur Acuña as Manuel Bernal <br>\nAlex Vincent Medina as José Bernal\n','http://[::1]/group5/index.php/heneral/show_heneral'),(6,'Notting Hill',1999,'../../images/nhill.jpg','Romantic',5,5,'Can a beautiful and internationally famous American actress find happiness with a frumpy British <br>bookstore clerk? She can -- at least for a while, it seems -- in Notting Hill. William Thacker <br>(played by Hugh Grant) is a bookseller at a shop in the Notting Hill district in West London, <br>who shares a house with an eccentric Welsh friend, Spike (Rhys Ifans). One day, William is <br>minding the store when in strolls Anna Scott (Julia Roberts), a lovely and well-known actress <br>from the United States who is in London working on a film. She buys a book from William, and <br>she is polite and charming in the way a famous actress would…<br>\n<br>Age-rating: PG-13 <br><br>\nGenres: Comedy and Romance<br><br>\nMovie length: 124 minutes<br> <br><br>\nCast: <br>\nJulia Roberts as Anna Scott <br>\nHugh Grant as William Thacker <br>\nRichard McCabe as Tony <br>\nRhys Ifans as Spike <br>\nJames Dreyfus as Martin <br>\nDylan Moran as Rufus the Thief <br>\nLorelei King as Anna´s Publicist <br>\n','http://[::1]/group5/index.php/nhill/show_nhill'),(7,'Wolf of Wall Street',2015,'../../images/WOWS.jpg','Drama/Comedy',5,5,'Martin Scorsese directs the story of New York stockbroker Jordan Belfort. From the American <br>dream to corporate greed, Belfort goes from penny stocks and righteousness to IPOs and a <br>life of corruption in the late 80s. Excess success and affluence in his early twenties as founder <br>of the brokerage firm Stratton Oakmont warranted Belfort the title \"The Wolf of Wall Street.\" -- (C) Paramount<br><br>\nAge-rating: R<br><br>\nGenres: Drama<br><br>\nMovie length: 179 minutes<br><br>\nCast: <br>\nLeonardo DiCaprio \nas Jordan Belfort <br>\nJonah Hill \nas Donnie Azoff <br>\nMargot Robbie \nas Naomi Lapaglia <br>\nMatthew McConaughey \nas Mark Hanna <br>\nKyle Chandler \nas Agent Patrick Denham <br>\nJoanna Lumley \nas Aunt Emma <br>\nRob Reiner as Max Belfort <br>\nJon Bernthal as Brad <br>\nJon Favreau  as Manny Riskin <br>\nJean Dujardin as Jean Jacques Saurel <br>\n','http://[::1]/group5/index.php/wows/show_wows'),(8,'12 Years a Slave',2013,'../../images/12.jpg','Drama/Historical',5,5,'Based on an incredible true story of one man´s fight for survival and freedom. In the pre-Civil <br>War United States, Solomon Northup, a free black man from upstate New York, is <br>abducted and sold into slavery. Facing cruelty personified by a malevolent slave owner, <br>as well as unexpected kindnesses, Solomon struggles not only to stay alive, but to retain <br>his dignity. In the twelfth year of his unforgettable odyssey, Solomon´s chance meeting <br>with a Canadian abolitionist will forever alter his life.<br><br>\nAge-rating: R <br><br>\nGenres: Drama and History<br><br>\nMovie length: 134 minutes<br><br>\nCast: <br>\nChiwetel Ejiofor \nas Solomon Northup <br>\nMichael Fassbender \nas Epps <br>\nBenedict Cumberbatch \nas Ford <br>\nPaul Giamatti \nas Freeman <br>\nBrad Pitt \nas Bass <br>\nSarah Paulson \nas Mrs. Epps <br>\nDwight Henry  as Uncle Abram <br>\nPaul Dano \nas Tibeats <br>\nLupita Nyong´o \nas Patsey <br>\nAlfre Woodard \nas Mistress Shaw <br>\n','http://[::1]/group5/index.php/yas/show_yas'),(9,'Titanic',1997,'../../images/titanic.jpg','Romantic/Historical',5,5,'Titanic is a 1997 American epic romance and disaster film directed, written, co-produced and <br>\n co-edited by James Cameron. A fictionalized account of the sinking of the RMS Titanic, it stars <br> Leonardo DiCaprio and Kate Winslet as members of different social classes who fall in love aboard\n<br> the ship during its ill-fated maiden voyage. <br> <br>\nAge-rating: PG-13 <br> <br>\nGenres: Drama and romance <br> <br>\nMovie length: 194 minutes <br> <br>\nCast: <br>\nLeonardo DiCaprio as Jack Dawson  <br>\nKate Winslet as Rose Dewitt Bukater <br>\nBilly Zane as Cal Hockley <br>\nKathy Bates as Molly Brown <br>\nBill Paxton as Brock Lovett <br>','http://[::1]/group5/index.php/titanic/show_titanic');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies_directors`
--

DROP TABLE IF EXISTS `movies_directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies_directors` (
  `Movies_Id` int(11) NOT NULL,
  `directors_id` int(11) NOT NULL,
  PRIMARY KEY (`Movies_Id`,`directors_id`),
  KEY `fk_Movies_has_directors_directors1_idx` (`directors_id`),
  KEY `fk_Movies_has_directors_Movies_idx` (`Movies_Id`),
  CONSTRAINT `fk_Movies_has_directors_Movies1` FOREIGN KEY (`Movies_Id`) REFERENCES `movies` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Movies_has_directors_directors11` FOREIGN KEY (`directors_id`) REFERENCES `directors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies_directors`
--

LOCK TABLES `movies_directors` WRITE;
/*!40000 ALTER TABLE `movies_directors` DISABLE KEYS */;
/*!40000 ALTER TABLE `movies_directors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies_genres`
--

DROP TABLE IF EXISTS `movies_genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies_genres` (
  `Movies_Id` int(11) NOT NULL,
  `genres_id` int(11) NOT NULL,
  PRIMARY KEY (`Movies_Id`,`genres_id`),
  KEY `fk_Movies_has_genres_genres1_idx` (`genres_id`),
  KEY `fk_Movies_has_genres_Movies1_idx` (`Movies_Id`),
  CONSTRAINT `fk_Movies_has_genres_Movies12` FOREIGN KEY (`Movies_Id`) REFERENCES `movies` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Movies_has_genres_genres12` FOREIGN KEY (`genres_id`) REFERENCES `genres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies_genres`
--

LOCK TABLES `movies_genres` WRITE;
/*!40000 ALTER TABLE `movies_genres` DISABLE KEYS */;
/*!40000 ALTER TABLE `movies_genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies_stars`
--

DROP TABLE IF EXISTS `movies_stars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies_stars` (
  `Movies_Id` int(11) NOT NULL,
  `stars_id` int(11) NOT NULL,
  PRIMARY KEY (`Movies_Id`,`stars_id`),
  KEY `fk_Movies_has_stars_stars1_idx` (`stars_id`),
  KEY `fk_Movies_has_stars_Movies1_idx` (`Movies_Id`),
  CONSTRAINT `fk_Movies_has_stars_Movies13` FOREIGN KEY (`Movies_Id`) REFERENCES `movies` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Movies_has_stars_stars13` FOREIGN KEY (`stars_id`) REFERENCES `stars` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies_stars`
--

LOCK TABLES `movies_stars` WRITE;
/*!40000 ALTER TABLE `movies_stars` DISABLE KEYS */;
/*!40000 ALTER TABLE `movies_stars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stars`
--

DROP TABLE IF EXISTS `stars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `about` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stars`
--

LOCK TABLES `stars` WRITE;
/*!40000 ALTER TABLE `stars` DISABLE KEYS */;
/*!40000 ALTER TABLE `stars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(8) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'minsi','$2y$10$GH.oaMer4y6yCdBPsE3v4.UJUPm1BPmLWvCJrAqSK3ZbwNK7wi/F6','Minsi','Jämsä'),(2,'test','$2y$10$dbJWNLbpNKMH2EHSwLPqZe5BekxAKnumic6k4tuKlGgmWocZ9sdBm','Tester','Account');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-02  2:31:08
