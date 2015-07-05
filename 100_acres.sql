-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: 100_acres
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `User`
--

DROP TABLE IF EXISTS `User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `User` (
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mobile` varchar(11) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `User_id` int(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `User`
--

LOCK TABLES `User` WRITE;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
INSERT INTO `User` VALUES ('Shivi Jain','sjdelhi.16@gmail.com','9654494873','bf43ffc9ac2e25c4ede6d8fd67a6a40e',1),('Vibhav Verma','vibhavverma2014@gmail.com','9651548445','25a60a1500e55632999357cded5bd105',2),('Deepak Dogra','deep.royal@gmail.com','9555221836','4eeb7301311cd636742a3a4311c0402d',3),('Anubhav ','aj.devildan.29@gmail.com','9891336742','58027a96e989d3538401ba56f17bc349',4),('Hemant','hemanth.32@gmail.com','9876123444','4bb52c85cb51237d8c57d894201a0c2d',5),('Ankita Gupta','ankitagupta.16@gmail.com','9654494834','0a73cb420ec5e57706e16bf3262cb901',6),('Vibhav Sharma','vibhavsharma2014@gmail.com','9876123900','d420982219ea62bc4ea922b289cf7dde',7),('Gitanjali','geet.ch@gmail.com','9560713455','047b8919bca1b8dbc45ff591e9c33c61',8),('Neha Sharma','nehasharma@gmail.com','9651548960','3e9859744497f7e7fea33b5f06f97e1b',9),('Kashish Arora','kashisharora@yahoo.com','8901234567','b4b415f9e4e153a82459f1dea010e095',10),('Jyoti','jyoti@gmail.com','9567890567','1411a3e2bd0e7c77fd51adc1e17a834e',11),('Rahul Sharma','rahul.16@yahoo.com','9870654312','439ed537979d8e831561964dbbbd7413',12),('Astha Garg','asthagarg.34@yahoo.co.in','9786456789','ba3b3708c79d2a494acdea7840710892',13),('Vishakha','vishkha@gmail.com','9876541232','4bf83a620412e0c407059ae0f6f91dea',14),('Abhinav','abhi@gmail.com','8791234566','ba1d63b653b24a565ed436a0cfc5b3c9',15),('Shweta Kashyap','shweta.17@yahoo.com','9876753454','88d412e8e3073065c08af8fcff7319b3',16),('Vineet Mann','vineet.34@gmail.com','9801234567','c77cc9f24bff951c4f9bfe1a6f9b4374',17),('Kritika Jain','kritikajain@gmail.com','7891234567','7f26aa4b3b84c24b3ac4c4e7bd77af60',18);
/*!40000 ALTER TABLE `User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `owner_type` enum('Owner','Broker','Builder') DEFAULT NULL,
  `intention` enum('Sell','Rent') DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `bedroom` varchar(10) DEFAULT NULL,
  `expected_price` int(15) DEFAULT NULL,
  `imagepath` varchar(100) DEFAULT NULL,
  `User_id` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `User_id` (`User_id`),
  CONSTRAINT `property_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `User` (`User_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property`
--

LOCK TABLES `property` WRITE;
/*!40000 ALTER TABLE `property` DISABLE KEYS */;
INSERT INTO `property` VALUES (1,'Owner','Sell','New Delhi','C-9/10,Green Park,South Ex.,Delhi','4 BHK',7000000,'prop72.jpg',1),(2,'Owner','Rent','Noida','B-32,sector-34,Noida','2 BHK',70000,'prop81.jpg',1),(3,'Builder','Sell','Ghaziabad','A-56,Sector-132,Ghaziabad','4 BHK',20000000,'prop1.jpg',2),(4,'Builder','Sell','Noida','C-32,sector-134,Noida','2 BHK',5000000,'prop2.jpg',2),(5,'Builder','Sell','Gurgaon','C-45,JK nagar,Gurgaon','3 BHK',6500000,'prop7.jpg',2),(6,'Broker','Sell','New Delhi','A-32,INA,delhi','3 BHK',9000000,'prop11.jpg',5),(7,'Owner','Rent','Noida','JK vihar,greater noida','4 BHK',90000,'prop10.jpg',5),(8,'Broker','Sell','Noida','secto-62,KJ colony,Greater noida','2 BHK',5000000,'prop71.jpg',4),(9,'Owner','Sell','Ghaziabad','c-45,JK nagar,Ghaziabad','3 BHK',6700000,'prop21.jpg',4),(10,'Owner','Sell','New Delhi','B-32,dda flats,Delhi','2 BHK',7800000,'prop6.jpg',3),(11,'Broker','Sell','New Delhi','C-9/10,Yamuna vihar ,Delhi','3 BHK',19000000,'prop5.jpg',3),(12,'Owner','Rent','Gurgaon',',A-90,DLF cyber city,Gurgaon','2 BHK',100000,'prop4.jpg',1),(13,'Owner','Rent','New Delhi','d.d.a. flats,sarita vihar,Delhi','3 BHK',60000,'prop3.jpg',1),(14,'Broker','Rent','New Delhi','d.d.a. flats,dilshad garden,Delhi','2 BHK',78000,'prop101.jpg',1),(15,'Owner','Sell','Noida','E-34,kv nagar,Sector-12,noida','4 BHK',67000000,'prop8.jpg',2),(16,'Broker','Rent','New Delhi','D-89/45,Laxmi Nagar,KK Chowk,Delhi','3 BHK',50000,'prop5a.jpg',6),(17,'Owner','Rent','New Delhi','f-434,Bawana Road,Delhi-42','4 BHK',100000,'prop3a.jpg',6),(18,'Builder','Sell','Noida','Plot no-34,Sector 45,Noida','4 BHK',10000000,'prop2a.jpg',7),(19,'Builder','Sell','Gurgaon','Plot no-12,Sector 40,Gurgaon','2 BHK',6000000,'prop1a.jpg',7),(20,'Broker','Rent','Ghaziabad','H.no-567,kavi nagar,Near Highway,Ghaziabad','4 BHK',200000,'prop4a.jpg',7),(21,'Broker','Rent','New Delhi','C-78,d.d.a. flats,dilshad garden,Delhi','2 BHK',40000,'prop1a1.jpg',8),(22,'Owner','Sell','Gurgaon','F-56,Madhuban Chowk,Gurgaon','2 BHK',9000000,'prop4a1.jpg',8),(23,'Owner','Sell','New Delhi','G-67,block G,pitampura,Delhi','3 BHK',8000000,'prop7a.jpg',9),(24,'Broker','Rent','Gurgaon','C-32,sector-134,Gurgaon','4 BHK',78000,'prop5a1.jpg',9),(25,'Builder','Sell','Noida','A-90,plot-6,Near GIP,Noida','4 BHK',30000000,'prop2a1.jpg',10),(26,'Owner','Sell','Ghaziabad','H.no-567,Yamuna bank,Near Highway,Ghaziabad','3 BHK',6500000,'prop73.jpg',10),(27,'Broker','Rent','Ghaziabad','K-89,K block,street no: 9,Ghaziabad','2 BHK',60000,'prop6a.jpg',11),(28,'Owner','Sell','Gurgaon','Plot no:10,Near main Market,Jk chowk,Gurgaon','4 BHK',9000000,'prop2a2.jpg',13),(29,'Owner','Sell','New Delhi','S-18,First floor,Sarita Vihar,Delhi','2 BHK',4500000,'prop51.jpg',13),(30,'Owner','Sell','Noida','f-434,sector-9,Noida','3 BHK',5000000,'prop1a2.jpg',1),(31,'Builder','Sell','Ghaziabad','A-45,Street no.-10,Shahibabad,Ghaziabad','2 BHK',4500000,'prop9.jpg',16),(32,'Owner','Sell','New Delhi','c-34,DDA flats,Rohini,Delhi','4 BHK',20000000,'prop82.jpg',18);
/*!40000 ALTER TABLE `property` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-05 23:25:00
