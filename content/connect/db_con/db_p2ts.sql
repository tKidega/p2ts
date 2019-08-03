CREATE DATABASE  IF NOT EXISTS db_p2ts
/*!40100 DEFAULT CHARACTER SET utf8 */;
USE db_p2ts;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_p2ts
-- ------------------------------------------------------
-- Server version	5.5.56-log
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
-- Table structure for table `tblusers`
--
DROP TABLE IF EXISTS `tblusers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE tblusers (
	 userID  	INT(2) UNSIGNED AUTO_INCREMENT NOT NULL,
	 firstName  VARCHAR(25) COLLATE utf8_unicode_ci NOT NULL,
	 lastName	VARCHAR(25) COLLATE utf8_unicode_ci NOT NULL,
	 department	ENUM('Management','Accounts','HR & Welfare',
					'ICT','Legal','Public Relations',
					'Procurement and Logistics','Other')
					COLLATE utf8_unicode_ci NOT NULL,
	 gender		ENUM('Male','Female') 
					COLLATE utf8_unicode_ci NOT NULL,
	 e_mail		VARCHAR(25) COLLATE utf8_unicode_ci NOT NULL,
	 phone		VARCHAR(25) COLLATE utf8_unicode_ci NOT NULL,
	 passKey	VARCHAR(25) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY(userID),
	UNIQUE KEY e_mail(e_mail),
	UNIQUE KEY phone(phone)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='System user details';
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `tblUsers`
--
LOCK TABLES `tblUsers` WRITE;
/*!40000 ALTER TABLE `tblUsers` DISABLE KEYS */;
-- Insert user details below.
INSERT INTO tblUsers VALUES
	(1,'admin','admin','ICT','Male','admin@p2ts.co.ug','+256-752-034-146','admin');
/*!40000 ALTER TABLE `tblUsers` ENABLE KEYS */;
UNLOCK TABLES;
--
-- --------------------------------------------------------
--
-- Table structure for table `tblparkingdata`
--

DROP TABLE IF EXISTS `tblparkingdata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE tblparkingdata (
	 parkingID	INT(10) UNSIGNED AUTO_INCREMENT NOT NULL,
	 ticketNum 	VARCHAR(25) COLLATE utf8_unicode_ci NOT NULL,
	 numPlate	VARCHAR(8) COLLATE utf8_unicode_ci NOT NULL,
	 transDate	DATE NOT NULL,
	 street		VARCHAR(25) COLLATE utf8_unicode_ci NOT NULL,
	 district	VARCHAR(25) COLLATE utf8_unicode_ci NOT NULL,
	 sTime		TIME NOT NULL,
	 eTime		TIME NOT NULL,
	 amount 	DECIMAL(10,2) NOT NULL,
	 status		ENUM('Cleared','Pending') COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY (parkingID),
	UNIQUE KEY ticketNum(ticketNum)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Parking details data';
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `tblparkingdata`
--
LOCK TABLES `tblparkingdata` WRITE;
/*!40000 ALTER TABLE `tblparkingdata` DISABLE KEYS */;
-- Insert parking data here.
/*!40000 ALTER TABLE `tblparkingdata` ENABLE KEYS */;
UNLOCK TABLES;
--
--
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
commit;
