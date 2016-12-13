-- MySQL dump 10.13  Distrib 5.5.50, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: wordpress
-- ------------------------------------------------------
-- Server version   5.5.50-0ubuntu0.14.04.1

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
-- Table structure for table `wp_mailpress_mailmeta`
--

DROP TABLE IF EXISTS `wp_mailpress_mailmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_mailpress_mailmeta` (
  `meta_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mp_mail_id` bigint(20) NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `mp_mail_id` (`mp_mail_id`,`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_mailpress_mailmeta`
--

LOCK TABLES `wp_mailpress_mailmeta` WRITE;
/*!40000 ALTER TABLE `wp_mailpress_mailmeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_mailpress_mailmeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_mailpress_mails`
--

DROP TABLE IF EXISTS `wp_mailpress_mails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_mailpress_mails` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` enum('draft','unsent','sending','sent','archived','','paused') COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `themedir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fromemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `fromname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `toname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `charset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `child` bigint(20) NOT NULL DEFAULT '0',
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `sent` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sent_user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `toemail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `plaintext` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `html` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_mailpress_mails`
--

LOCK TABLES `wp_mailpress_mails` WRITE;
/*!40000 ALTER TABLE `wp_mailpress_mails` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_mailpress_mails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_mailpress_stats`
--

DROP TABLE IF EXISTS `wp_mailpress_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_mailpress_stats` (
  `sdate` date NOT NULL,
  `stype` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slib` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scount` bigint(20) NOT NULL,
  PRIMARY KEY (`stype`,`sdate`,`slib`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_mailpress_stats`
--

LOCK TABLES `wp_mailpress_stats` WRITE;
/*!40000 ALTER TABLE `wp_mailpress_stats` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_mailpress_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_mailpress_usermeta`
--

DROP TABLE IF EXISTS `wp_mailpress_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_mailpress_usermeta` (
  `meta_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `mp_user_id` bigint(20) NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`meta_id`),
  KEY `mp_user_id` (`mp_user_id`,`meta_key`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_mailpress_usermeta`
--

LOCK TABLES `wp_mailpress_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_mailpress_usermeta` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_mailpress_usermeta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wp_mailpress_users`
--

DROP TABLE IF EXISTS `wp_mailpress_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_mailpress_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('waiting','active','bounced','unsubscribed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `confkey` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_agent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `created_country` char(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ZZ',
  `created_US_state` char(2) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ZZ',
  `laststatus` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `laststatus_IP` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `laststatus_agent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `laststatus_user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_mailpress_users`
--

LOCK TABLES `wp_mailpress_users` WRITE;
/*!40000 ALTER TABLE `wp_mailpress_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_mailpress_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-12-13 17:36:54
