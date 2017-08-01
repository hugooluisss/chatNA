-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: chat
-- ------------------------------------------------------
-- Server version	5.0.51b-community-nt-log

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
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `mensaje`
--

DROP TABLE IF EXISTS `mensaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensaje` (
  `idMensaje` bigint(20) unsigned NOT NULL auto_increment,
  `idEvento` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `hora` timestamp NULL default CURRENT_TIMESTAMP,
  `texto` text,
  `coordinador` char(1) default 'N',
  PRIMARY KEY  (`idMensaje`),
  KEY `iEvento` (`idEvento`),
  CONSTRAINT `fk_evento` FOREIGN KEY (`idEvento`) REFERENCES `evento` (`idEvento`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensaje`
--

LOCK TABLES `mensaje` WRITE;
/*!40000 ALTER TABLE `mensaje` DISABLE KEYS */;
INSERT INTO `mensaje` VALUES (41,2,1,'2015-06-17 18:55:36','hola','N'),(42,2,1,'2015-06-17 18:56:11','necesito hacer una pregunta urgente','N'),(43,2,1,'2015-06-17 18:56:31','esta es una prueba del estado de las conversaciones, como es que se van almacenando en el sistema y que tan grandes pueden ser para su visualización','N'),(44,2,7,'2015-06-17 19:35:27','Dime','N'),(45,3,1,'2015-07-04 00:15:58','hola','S'),(46,3,1,'2015-07-04 00:16:03','esta es una prueba','N'),(47,3,1,'2015-07-04 00:16:23','mensajes correctamente escritos y enviados desde el panel de administración','S'),(48,3,1,'2015-07-04 00:44:03','hola','S'),(49,3,1,'2015-07-06 19:53:22','Hola mundo','S'),(50,3,1,'2015-07-13 19:50:28','si se mandó?','N'),(51,3,1,'2015-07-13 20:30:05','entonces todo va bien?','S'),(52,3,1,'2015-07-13 20:30:07','si','S'),(53,3,1,'2015-07-13 20:30:09','todo va bien','S'),(54,3,1,'2015-07-13 20:30:14','en excelentes condiciones','S'),(55,3,1,'2015-07-14 20:44:27','Hola coordinador','S'),(56,3,1,'2015-07-14 20:51:19','ghola','N'),(57,3,1,'2015-07-16 22:12:00','hola','S'),(58,3,1,'2015-07-16 22:18:49','hi','N'),(59,3,1,'2015-07-16 22:19:29','esta es otra prueba','S'),(60,3,1,'2015-07-18 00:07:53','Este es un mensaje del administrador','S'),(61,3,1,'2015-07-18 00:16:51','Este es un nuevo mensaje','S'),(62,3,1,'2015-07-18 00:16:59','la prueba de la prueba de la administracion','S'),(63,3,1,'2015-07-18 00:23:49','cof cof','S'),(64,3,1,'2015-07-18 00:24:26','Tienes un nuevo mensaje','S'),(65,3,1,'2015-07-18 00:25:49','prueba','S'),(66,3,1,'2015-07-18 00:29:34','otro mensajito','S'),(67,3,12,'2015-07-18 00:34:08','hola mundo','S'),(68,3,12,'2015-07-18 00:34:36','neta?','S'),(69,3,12,'2015-07-18 00:35:53','otro mensaje','S'),(70,3,12,'2015-07-18 00:36:12','ajam','S'),(71,3,12,'2015-07-18 00:37:26','ok, este es un mensaje para el coordinador','S'),(72,3,12,'2015-07-18 00:39:31','ok, esta es una nueva prueba','S'),(73,3,12,'2015-07-18 00:43:43','jajajaja','S'),(74,3,1,'2015-07-18 00:46:48','as','S'),(75,3,12,'2015-07-18 01:08:20','sdf','S'),(76,3,1,'2015-07-30 22:16:58','listo','S'),(77,3,1,'2015-07-30 22:19:36','hi','N'),(78,3,1,'2015-07-31 22:36:09','hola mundo','S'),(79,3,1,'2015-07-31 22:36:13','como nos va?','N'),(80,3,1,'2015-07-31 22:42:57','hola hola','N'),(81,3,1,'2015-08-31 20:13:53','hola 3','N'),(82,3,1,'2015-08-31 20:13:57','jajajaja','N'),(83,6,1,'2015-08-31 20:19:38','ok ok ok','N'),(84,6,1,'2015-09-05 00:18:22','Hi mundo','N'),(85,6,1,'2015-09-05 00:18:36','hola de nuevo','N'),(86,6,1,'2015-09-05 00:20:00','va de nuevo','N'),(87,6,1,'2015-09-05 00:20:04','ya estuvo?','N'),(88,6,1,'2015-09-05 00:23:14','como va?','N'),(89,6,1,'2015-09-05 00:24:18','ewntonces?','N'),(90,6,1,'2015-09-05 00:31:02','prueba 0','N'),(91,6,1,'2015-09-05 00:31:04','prueba 1','N'),(92,6,1,'2015-09-05 00:35:56','una prueba','N');
/*!40000 ALTER TABLE `mensaje` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-07 15:26:36
