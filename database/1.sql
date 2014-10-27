-- MySQL dump 10.13  Distrib 5.5.24, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: Assignment
-- ------------------------------------------------------
-- Server version	5.5.24-0ubuntu0.12.04.1

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
-- Table structure for table `BANK`
--

DROP TABLE IF EXISTS `BANK`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BANK` (
  `Bank_Code` varchar(10) NOT NULL DEFAULT '',
  `Name` varchar(30) DEFAULT NULL,
  `Branch` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Bank_Code`),
  KEY `BANK` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BANK`
--

LOCK TABLES `BANK` WRITE;
/*!40000 ALTER TABLE `BANK` DISABLE KEYS */;
INSERT INTO `BANK` VALUES ('1','P.N.B','Bhoora'),('10','UCO BANK','Shamli'),('11','P.N.B','Kairana'),('12','S.B.I','Kairana'),('13','Kenara','Kairana'),('14','INDIAN BANK','Kairana'),('15','UCO BANK','Kairana'),('16','P.N.B','Babri'),('17','S.B.I','Babri'),('18','Kenara','Babri'),('19','INDIAN BANK','Babri'),('2','S.B.I','Bhoora'),('20','UCO BANK','Babri'),('21','P.N.B','Kandhla'),('22','S.B.I','Kandhla'),('23','Kenara','Kandhla'),('24','INDIAN BANK','Kandhla'),('25','UCO BANK','Kandhla'),('3','Kenara','Bhoora'),('4','INDIAN BANK','Bhoora'),('5','UCO BANK','Bhoora'),('6','P.N.B','Shamli'),('7','S.B.I','Shamli'),('8','Kenara','Shamli'),('9','INDIAN BANK','Shamli');
/*!40000 ALTER TABLE `BANK` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BANK_GROUP`
--

DROP TABLE IF EXISTS `BANK_GROUP`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BANK_GROUP` (
  `Name` varchar(30) NOT NULL DEFAULT '',
  `Group1` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`Name`,`Group1`),
  CONSTRAINT `BANK_GROUP_ibfk_1` FOREIGN KEY (`Name`) REFERENCES `BANK` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BANK_GROUP`
--

LOCK TABLES `BANK_GROUP` WRITE;
/*!40000 ALTER TABLE `BANK_GROUP` DISABLE KEYS */;
INSERT INTO `BANK_GROUP` VALUES ('INDIAN BANK','55'),('Kenara','54'),('P.N.B','53'),('S.B.I','52'),('UCO BANK','57');
/*!40000 ALTER TABLE `BANK_GROUP` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CENTER`
--

DROP TABLE IF EXISTS `CENTER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CENTER` (
  `Center_Code` varchar(10) NOT NULL DEFAULT '',
  `Name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Center_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CENTER`
--

LOCK TABLES `CENTER` WRITE;
/*!40000 ALTER TABLE `CENTER` DISABLE KEYS */;
INSERT INTO `CENTER` VALUES ('11','Mill Gate'),('13','Jasala'),('15','Kairana'),('21','Malak Pur'),('28','Bhainswal'),('35','Taprana'),('37','Jhinjhana'),('42','Mayapuri'),('43','Razad'),('45','Odri Jainpur'),('52','Jalalpur'),('55','Sikka'),('63','Lakh'),('76','Peerkheda'),('78','Kishorepur'),('83','Bhoora'),('85','Hasanpur'),('88','Khedi'),('94','Kandhla'),('95','Alipur');
/*!40000 ALTER TABLE `CENTER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ESTIMATE`
--

DROP TABLE IF EXISTS `ESTIMATE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ESTIMATE` (
  `Farmer_Name` varchar(30) NOT NULL DEFAULT '',
  `Farmer_Code` varchar(10) NOT NULL DEFAULT '',
  `Estimate_Qty` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Farmer_Code`,`Farmer_Name`),
  KEY `Farmer_Name` (`Farmer_Name`),
  CONSTRAINT `ESTIMATE_ibfk_1` FOREIGN KEY (`Farmer_Code`) REFERENCES `FARMER` (`Farmer_Code`) ON UPDATE CASCADE,
  CONSTRAINT `ESTIMATE_ibfk_2` FOREIGN KEY (`Farmer_Name`) REFERENCES `FARMER` (`Name`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ESTIMATE`
--

LOCK TABLES `ESTIMATE` WRITE;
/*!40000 ALTER TABLE `ESTIMATE` DISABLE KEYS */;
INSERT INTO `ESTIMATE` VALUES ('VEER SINGH','1','450'),('PITAM','10','410.89'),('KISHANA','11','300'),('AJAB SINGH','12','260'),('CHHOTE SINGH','13','310'),('ILAM CHAND','14','150'),('NAHAR SINGH','15','324.98'),('SUNDU','16','120.67'),('DHARAM PAL','17','190'),('OM PRAKASH','18','230'),('BARU','19','800'),('BIJENDRA','2','200'),('ABHEY RAM','3','600.56'),('DHARA','4','400.67'),('DESH PAL','5','210.9'),('RAM PAL','6','450.657'),('LALCHAND','7','134'),('CHANDRA VEER','8','270.23'),('HUKMA','9','200');
/*!40000 ALTER TABLE `ESTIMATE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `FARMER`
--

DROP TABLE IF EXISTS `FARMER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `FARMER` (
  `Bank_Code` varchar(10) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Father_Name` varchar(30) DEFAULT NULL,
  `Center_Code` varchar(10) DEFAULT NULL,
  `Village_Code` varchar(10) DEFAULT NULL,
  `Bank_Account_No` varchar(20) DEFAULT NULL,
  `Farmer_Code` varchar(10) NOT NULL DEFAULT '',
  `Phone_Number` varchar(20) NOT NULL,
  PRIMARY KEY (`Farmer_Code`),
  KEY `Center_Code` (`Center_Code`),
  KEY `Village_Code` (`Village_Code`),
  KEY `Bank_Code` (`Bank_Code`),
  KEY `Phone_Number` (`Phone_Number`),
  KEY `Name` (`Name`),
  KEY `Bank_Account_No` (`Bank_Account_No`),
  CONSTRAINT `FARMER_ibfk_1` FOREIGN KEY (`Center_Code`) REFERENCES `CENTER` (`Center_Code`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FARMER_ibfk_2` FOREIGN KEY (`Village_Code`) REFERENCES `VILLAGE` (`Village_Code`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FARMER_ibfk_3` FOREIGN KEY (`Bank_Code`) REFERENCES `BANK` (`Bank_Code`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `FARMER`
--

LOCK TABLES `FARMER` WRITE;
/*!40000 ALTER TABLE `FARMER` DISABLE KEYS */;
INSERT INTO `FARMER` VALUES ('3','VEER SINGH','DHARMA','11','1103','1822000100300010','1','09358640899'),('13','PITAM','TIRKHA','37','1131','1822000100300180','10','09548684697'),('12','KISHANA','AASHA','37','1139','0424000300157437','11','09411033824'),('25','AJAB SINGH','AASHA RAM','78','1122','1822000100300223','12','09837850694'),('11','CHHOTE SINGH','KHASA RAM','37','1137','1822000100300269','13','01398256020'),('25','ILAM CHAND','BAKSI','85','1123','1822000100300287','14','09219113512'),('15','NAHAR SINGH','MALKHAN','52','1142','1822000100300311','15','01398259552'),('8','SUNDU','DALIP','43','1122','1822000100300320','16','09259107173'),('1','DHARAM PAL','UMARAO','78','1130','1822000100300357','17','09837845342'),('5','OM PRAKASH','BHAVAR SINGH','52','1128','1822000100300436','18','09457133258'),('12','BARU','KALU','63','1139','1822000100300427','19','09760666544'),('3','BIJENDRA','NARAYAN','13','1103','1822000100300029','2','09411813910'),('7','ABHEY RAM','MANGU','35','1129','1822000100300038','3','09548684697'),('13','DHARA','HARGYAN','78','1154','1822000100300047','4','09639739259'),('12','DESH PAL','NIRANJAN','78','1130','1822000100300056','5','09012360057'),('8','RAM PAL','BRAHAM SINGH','76','1123','1822000100300065','6','01398259703'),('10','LALCHAND','BALLA','85','1129','1822000100300065','7','09927628661'),('8','CHANDRA VEER','PITAM SINGH','37','1130','1822000100300083','8','01398256020'),('18','HUKMA','CHAJJU','42','1108','1822000100300092','9','09837445456');
/*!40000 ALTER TABLE `FARMER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MODE`
--

DROP TABLE IF EXISTS `MODE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MODE` (
  `Mode_Name` varchar(30) DEFAULT NULL,
  `Weight` varchar(20) DEFAULT NULL,
  `Mode_Code` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`Mode_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MODE`
--

LOCK TABLES `MODE` WRITE;
/*!40000 ALTER TABLE `MODE` DISABLE KEYS */;
INSERT INTO `MODE` VALUES ('Truck','200','1'),('Trolley 4W','60','2'),('Trolley 2W','40','3'),('Cart','20','4');
/*!40000 ALTER TABLE `MODE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PAYMENT`
--

DROP TABLE IF EXISTS `PAYMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PAYMENT` (
  `Farmer_Account_No` varchar(20) DEFAULT NULL,
  `Amount` varchar(20) DEFAULT NULL,
  KEY `Farmer_Account_No` (`Farmer_Account_No`),
  CONSTRAINT `PAYMENT_ibfk_1` FOREIGN KEY (`Farmer_Account_No`) REFERENCES `FARMER` (`Bank_Account_No`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PAYMENT`
--

LOCK TABLES `PAYMENT` WRITE;
/*!40000 ALTER TABLE `PAYMENT` DISABLE KEYS */;
INSERT INTO `PAYMENT` VALUES ('0424000300157437','4684.8'),('1822000100300010','4228.8'),('1822000100300029','4111.2'),('1822000100300038','5047.2'),('1822000100300047','5004'),('1822000100300056','5150.4'),('1822000100300065','5071.2'),('1822000100300083','5047.2'),('1822000100300092','5208'),('1822000100300180','5378.4'),('1822000100300223','3720'),('1822000100300269','4629.6'),('1822000100300287','4082.4'),('1822000100300311','4514.4'),('1822000100300320','4281.6'),('1822000100300357','4190.4'),('1822000100300427','4082.4'),('1822000100300436','4418.4');
/*!40000 ALTER TABLE `PAYMENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PRODUCTION`
--

DROP TABLE IF EXISTS `PRODUCTION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PRODUCTION` (
  `Mode` varchar(10) DEFAULT NULL,
  `Cultivate_Area` varchar(20) DEFAULT NULL,
  `Cane_Area` varchar(20) DEFAULT NULL,
  `Production` varchar(25) DEFAULT NULL,
  `Variety_Code` varchar(10) DEFAULT NULL,
  `Purchase` varchar(25) DEFAULT NULL,
  `Farmer_Code` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`Farmer_Code`),
  KEY `Mode` (`Mode`),
  KEY `Variety_Code` (`Variety_Code`),
  CONSTRAINT `PRODUCTION_ibfk_1` FOREIGN KEY (`Mode`) REFERENCES `MODE` (`Mode_Code`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `PRODUCTION_ibfk_2` FOREIGN KEY (`Variety_Code`) REFERENCES `VARIETY` (`Variety_Code`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `PRODUCTION_ibfk_3` FOREIGN KEY (`Farmer_Code`) REFERENCES `FARMER` (`Farmer_Code`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PRODUCTION`
--

LOCK TABLES `PRODUCTION` WRITE;
/*!40000 ALTER TABLE `PRODUCTION` DISABLE KEYS */;
INSERT INTO `PRODUCTION` VALUES ('4','0.774','0.573','483.75','51','316.21','1'),('2','0.989','0.844','527.50','51','356.46','10'),('2','0.827','0.508','317.50','23','298.85','11'),('3','0.543','0.444','277.50','21','265.39','12'),('4','1.218','0.573','358.13','25','300','13'),('1','2.027','1.001','100.56','21','198.89','14'),('2','0.456','0.456','483.75','19','270.58','15'),('1','0.183','0.160','114.38','16','204.15','16'),('3','1.250','1.05','114','53','200','17'),('4','0.369','0.160','230.63','19','245.54','18'),('4','2.450','1.260','787.50','15','1,245.24','19'),('1','2.000','0.827','230','21','205','2'),('4','0.984','0.708','640.04','53','615.00','3'),('3','1.863','0.698','436.25','24','660','4'),('1','1.961','0.380','237.50','23','200','5'),('1','1.018','0.645','490.00','52','403.13','6'),('2','0.612','0.435','295.27','11','271.88','8'),('3','0.907','0.324','202.50','21','186.87','9');
/*!40000 ALTER TABLE `PRODUCTION` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SMS`
--

DROP TABLE IF EXISTS `SMS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SMS` (
  `Mobile_Number` varchar(20) NOT NULL DEFAULT '',
  `Send_Date` varchar(40) DEFAULT NULL,
  `Send_Time` varchar(40) DEFAULT NULL,
  `Description` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`Mobile_Number`),
  CONSTRAINT `SMS_ibfk_1` FOREIGN KEY (`Mobile_Number`) REFERENCES `FARMER` (`Phone_Number`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SMS`
--

LOCK TABLES `SMS` WRITE;
/*!40000 ALTER TABLE `SMS` DISABLE KEYS */;
INSERT INTO `SMS` VALUES ('09012360057','28-Feb-2012','12:06','1103 / 87 Mill Purchi no. 35040708 Dt. 27-02-2012 VAR GENERAL Net Weight 37.92 against Indent Slip 544851'),('09219113512','28-Feb-2012','12:05','1102 / 9 Mill Purchi no. 15100825 Dt. 27-02-2012 VAR GENERAL Net Weight 19.96 against Indent Slip 115847'),('09259107173','28-Feb-2012','11:58','1101 / 80 Mill Purchi no. 35040578 Dt. 27-02-2012 VAR GENERAL Net Weight 58.90 against Indent Slip 543973'),('09358640899','27-Feb-2012','16:08','1103/  87 purchi no 529796 fort/col 5/5 , MILLGATE , TROLLEY 2 WH ,29-02-2012 ke liye jari kar di gayi hai,apna ganna nirdharit date per dale.'),('09411033824','27-Feb-2012','16:08','1103/ 100 purchi no 118010 fort/col 7/12 , MILLGATE , CART ,29-02-2012 ke liye jari kar di gayi hai,apna ganna nirdharit date per dale.'),('09411813910','27-Feb-2012','16:18','1103/  25 purchi no 118007 fort/col 7/12 , MILLGATE , CART ,29-02-2012 ke liye jari kar di gayi hai,apna ganna nirdharit date per dale.'),('09457133258','27-Feb-2012','14:52','1103 / 26 Mill Purchi no. 15100325 Dt. 27-02-2012 VAR GENERAL Net Weight 16.99 against Indent Slip 116971'),('09548684697','27-Feb-2012','16:23','1101/  74 purchi no 113100 fort/col 4/12 , MILLGATE , CART ,29-02-2012 ke liye jari kar di gayi hai,apna ganna nirdharit date per dale.'),('09639739259','27-Feb-2012','14:23','1103 / 62 Mill Purchi no. 15100291 Dt. 27-02-2012 VAR GENERAL Net Weight 23.38 against Indent Slip 116974'),('09760666544','27-Feb-2012','13:51','1103 / 64 Mill Purchi no. 15100099 Dt. 27-02-2012 VAR GENERAL Net Weight 16.81 against Indent Slip 115892'),('09837445456','27-Feb-2012','12:43','1102 / 92 Mill Purchi no. 35040211 Dt. 27-02-2012 VAR GENERAL Net Weight 52.07 against Indent Slip 544839'),('09837845342','27-Feb-2012','11:38','1102 / 66 Mill Purchi no. 12001271 Dt. 26-02-2012 VAR EARLY Net Weight 17.23 against Indent Slip 114824'),('09837850694','26-Feb-2012','17:48','1102 / 69 Mill Purchi no. 35040023 Dt. 26-02-2012 VAR GENERAL Net Weight 57.96 against Indent Slip 536414'),('09927628661','26-Feb-2012','17:16','1102 / 74 Mill Purchi no. 15099608 Dt. 26-02-2012 VAR GENERAL Net Weight 18.97 against Indent Slip 115850');
/*!40000 ALTER TABLE `SMS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SOCIETY`
--

DROP TABLE IF EXISTS `SOCIETY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SOCIETY` (
  `Location` varchar(30) DEFAULT NULL,
  `Society_Code` varchar(10) NOT NULL DEFAULT '',
  `Name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Society_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SOCIETY`
--

LOCK TABLES `SOCIETY` WRITE;
/*!40000 ALTER TABLE `SOCIETY` DISABLE KEYS */;
INSERT INTO `SOCIETY` VALUES ('Shamli','1','COOPERATIVE CANE DEVP UNION LTD SHAMLI'),('Unn','2','COOPERATIVE CANE DEVP UNION LTD OON'),('ThanaBhawan','3','COOPEARATIVE CANE DEVP UNION LTD THANA B'),('Ramala','4','COOPERATIVE CANE DEVP UNION LTD RAMALA'),('Test Location','99','TEST SOCIETY');
/*!40000 ALTER TABLE `SOCIETY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USERS`
--

DROP TABLE IF EXISTS `USERS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USERS` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `BANK` tinyint(4) DEFAULT '0',
  `BANK_GROUP` tinyint(4) DEFAULT '0',
  `CENTER` tinyint(4) DEFAULT '0',
  `ESTIMATE` tinyint(4) DEFAULT '0',
  `FARMER` tinyint(4) DEFAULT '0',
  `MODE` tinyint(4) DEFAULT '0',
  `PAYMENT` tinyint(4) DEFAULT '0',
  `PRODUCTION` tinyint(4) DEFAULT '0',
  `SMS` tinyint(4) DEFAULT '0',
  `SOCIETY` tinyint(4) DEFAULT '0',
  `USERS` tinyint(4) DEFAULT '0',
  `VARIETY` tinyint(4) DEFAULT '0',
  `VILLAGE` tinyint(4) DEFAULT '0',
  `WORKER` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USERS`
--

LOCK TABLES `USERS` WRITE;
/*!40000 ALTER TABLE `USERS` DISABLE KEYS */;
INSERT INTO `USERS` VALUES (1,'admin','admin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'sameer','sameer',4,1,2,3,5,5,0,3,0,0,0,0,0,0);
/*!40000 ALTER TABLE `USERS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `VARIETY`
--

DROP TABLE IF EXISTS `VARIETY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `VARIETY` (
  `Variety_Code` varchar(10) NOT NULL DEFAULT '',
  `Name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Variety_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VARIETY`
--

LOCK TABLES `VARIETY` WRITE;
/*!40000 ALTER TABLE `VARIETY` DISABLE KEYS */;
INSERT INTO `VARIETY` VALUES ('11','COJ-64'),('12','COS-88230'),('13','COSE-98231'),('14','CO-0118'),('15','CO-0238'),('16','COS 8436'),('17','COS 96268'),('18','Early Other'),('19','CO-89003'),('21','COS-767'),('22','COS-8432'),('23','COSE 92423'),('24','COP-84212'),('25','Gen Other'),('30','Rejected 1'),('51','COSE-01235'),('52','COSE-3234'),('53','CO-1148'),('54','COSE-01434'),('57','COS-96725'),('72','COSE-1424'),('99','Burnt Cane');
/*!40000 ALTER TABLE `VARIETY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `VILLAGE`
--

DROP TABLE IF EXISTS `VILLAGE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `VILLAGE` (
  `Name` varchar(30) DEFAULT NULL,
  `Society_Code` varchar(10) DEFAULT NULL,
  `Village_Code` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`Village_Code`),
  KEY `Society_Code` (`Society_Code`),
  CONSTRAINT `VILLAGE_ibfk_1` FOREIGN KEY (`Society_Code`) REFERENCES `SOCIETY` (`Society_Code`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `VILLAGE`
--

LOCK TABLES `VILLAGE` WRITE;
/*!40000 ALTER TABLE `VILLAGE` DISABLE KEYS */;
INSERT INTO `VILLAGE` VALUES ('Shamli','1','1101'),('Khedi Karmu','1','1103'),('Titoli','1','1104'),('Simbhalka','1','1108'),('Lilon','1','1111'),('Butradi','3','1119'),('Kaserva','3','1122'),('Kandela','3','1123'),('Bamnoli','4','1128'),('Banat','4','1129'),('Jalalpur','1','1130'),('Rasoolpur','1','1131'),('Goharpur','1','1134'),('Hasanpur','1','1137'),('Gajipur','1','1139'),('Jamalpur','1','1142'),('Lakh','4','1152'),('Banti Kheda','1','1154'),('Dargahpur','2','1161'),('Singra','2','3901');
/*!40000 ALTER TABLE `VILLAGE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `WORKER`
--

DROP TABLE IF EXISTS `WORKER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `WORKER` (
  `Worker_Code` varchar(10) NOT NULL DEFAULT '',
  `Name` varchar(30) DEFAULT NULL,
  `Society_Code` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Worker_Code`),
  KEY `Society_Code` (`Society_Code`),
  CONSTRAINT `WORKER_ibfk_1` FOREIGN KEY (`Society_Code`) REFERENCES `SOCIETY` (`Society_Code`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `WORKER`
--

LOCK TABLES `WORKER` WRITE;
/*!40000 ALTER TABLE `WORKER` DISABLE KEYS */;
INSERT INTO `WORKER` VALUES ('S1840','ILAM SINGH','1'),('S2976','MANMOHAN SHARMA','4'),('S3278','MAHEK SINGH','4'),('S3281','DHIRAJ SINGH','3'),('S3286','KRISHAN PAL SINGH','4'),('S3329','BHOPAL SINGH','2'),('S3366','RAJ KUMAR','3'),('S3379','SATISH KUMAR','1'),('S3380','PRATAP SINGH','4'),('S3398','DEVENDRA/KIRAN SINGH','1'),('S3399','JITENDER/MAHVIR','3'),('S3400','JITENDER /BRIJ RAJ','3'),('S3402','MANGLOO SHARMA','4'),('S3421','BIJENDRA VERMA','2'),('S3427','RAVINDRA/MAHAVEER','1'),('S3451','KALYAN SINGH','3'),('S3452','BHISHAM SINGH','2'),('S3454','ARVIND KUMAR','1'),('S3456','KARAMVIR SINGH','3'),('S3480','DHARMENDRA KUMAR','2');
/*!40000 ALTER TABLE `WORKER` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-10-14 11:44:04
