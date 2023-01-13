-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: car_rental
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cars` (
  `id_car` int NOT NULL AUTO_INCREMENT,
  `brand` varchar(20) NOT NULL,
  `model` varchar(35) NOT NULL,
  `price` int NOT NULL,
  `price_rent` int NOT NULL,
  `age` int NOT NULL,
  `date_creation` varchar(12) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `state` tinyint NOT NULL DEFAULT '1',
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_car`,`id_user`),
  KEY `fk_cars_users1_idx` (`id_user`),
  CONSTRAINT `fk_cars_users1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (8,'BMW','M5',100000,500,2019,'2023-01-03','pexels-mike-b-170811.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut velit at metus vulputate ornare. Etiam pulvinar aliquet ullamcorper. Pellentesque ornare dui nisi, nec ullamcorper nisl pharetra sit amet. Morbi malesuada neque eget sem aliquam pulvinar. ',1,4),(10,'Alfa Romeo','Sport 200',60000,250,2012,'2023-01-04','pexels-pixabay-210019 (1).jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut velit at metus vulputate ornare. Etiam pulvinar aliquet ullamcorper. Pellentesque ornare dui nisi, nec ullamcorper nisl pharetra sit amet. Morbi malesuada neque eget sem aliquam pulvinar. ',1,4),(11,'Range Rover','Evoque',30000,175,2020,'2023-01-04','pexels-mike-b-116675 (1).jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut velit at metus vulputate ornare. Etiam pulvinar aliquet ullamcorper. Pellentesque ornare dui nisi, nec ullamcorper nisl pharetra sit amet. Morbi malesuada neque eget sem aliquam pulvinar. ',1,4),(12,'Mercedes','Clase E Cabrio',90000,225,2019,'2023-01-04','pexels-mike-b-1335077.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut velit at metus vulputate ornare. Etiam pulvinar aliquet ullamcorper. Pellentesque ornare dui nisi, nec ullamcorper nisl pharetra sit amet. Morbi malesuada neque eget sem aliquam pulvinar. ',1,4),(13,'Lexus','ES SPORT',90000,300,2021,'2023-01-04','pexels-garvin-st-villier-3874337.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut velit at metus vulputate ornare. Etiam pulvinar aliquet ullamcorper. Pellentesque ornare dui nisi, nec ullamcorper nisl pharetra sit amet. Morbi malesuada neque eget sem aliquam pulvinar. ',1,4),(14,'Audi','R8',120000,300,2022,'2023-01-04','audi.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut velit at metus vulputate ornare. Etiam pulvinar aliquet ullamcorper. Pellentesque ornare dui nisi, nec ullamcorper nisl pharetra sit amet. Morbi malesuada neque eget sem aliquam pulvinar.',1,4),(15,'Audi','Sedan',26000,300,2019,'2023-01-04','audi-sedan .jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut velit at metus vulputate ornare. Etiam pulvinar aliquet ullamcorper. Pellentesque ornare dui nisi, nec ullamcorper nisl pharetra sit amet. Morbi malesuada neque eget sem aliquam pulvinar.',1,4),(16,'BMW','Coupé',18000,160,2011,'2023-01-04','bmw-coupe.jpg','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut velit at metus vulputate ornare. Etiam pulvinar aliquet ullamcorper. Pellentesque ornare dui nisi, nec ullamcorper nisl pharetra sit amet. Morbi malesuada neque eget sem aliquam pulvinar.',1,4);
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id_order` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_car` int NOT NULL,
  `date` varchar(12) NOT NULL,
  `service` varchar(4) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id_order`,`id_user`,`id_car`),
  KEY `fk_testimonials_users1_idx` (`id_user`),
  KEY `fk_testimonials_cars1_idx` (`id_car`),
  CONSTRAINT `fk_testimonials_cars1` FOREIGN KEY (`id_car`) REFERENCES `cars` (`id_car`),
  CONSTRAINT `fk_testimonials_users1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `date` varchar(12) NOT NULL,
  `date_creation` varchar(25) NOT NULL,
  `rol` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `imagen` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'Admin','Admin','2023-01-09','2023-01-09','admin','admin@admin.es','$2y$04$sqQsCc21Jx1t6iYGx1w7SeiooEk2f6z/tg9sbNkjfabBZjtHa4E0i','pic-1.png'),(26,'Cliente','Cliente','2002-01-11','2023-01-12','user','cliente@cliente.es','$2y$04$LyxMFeaAxbAI25yQj9pKTOBLwjtO9BDp/jJhm0W8amN6uuUo/o0BO','pic-3.png');
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

-- Dump completed on 2023-01-13  7:54:30
